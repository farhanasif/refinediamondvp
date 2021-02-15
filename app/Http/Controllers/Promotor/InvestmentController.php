<?php

namespace App\Http\Controllers\Promotor;

//use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\SponsorTree;
use App\User;
use App\RdInvestmentPanel;
use DB;

class InvestmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function investment(){
        return 'success';
    }

    public function index(){
        $uid = Auth::user()->id;
        if($uid == 52){
            $results = DB::select("select
                    sum(case when pw = '1' then total else 0 end) as king,
                    sum(case when pw = '2' then total else 0 end) as prince,
                    sum(case when pw = '3' then total else 0 end) as royal,
                    sum(case when pw = '4' then total else 0 end) as gold
                from (
                select '1' as pw, count(pw) as total from rd_investment_panels where pw = 1
                union
                select '2' as pw, count(pw) as total from rd_investment_panels where pw = 2
                union
                select '3' as pw, count(pw) as total from rd_investment_panels where pw = 3
                union
                select '4' as pw, count(pw) as total from rd_investment_panels where pw = 4
                ) as t");
        }
        else{
            $panel = DB::select('select * from rd_investment_panels where user_id='.$uid);
            if($panel){
                $pw = $panel[0]->pw;
                if($pw == 2){
                    $p2 = 0;
                    $p3 = 0;
                    $p4 = 0;
                    //for Prince User
                    $down = DB::select('select * from rd_investment_panels where parent='.$panel[0]->user_id);
                    if($down){
                        $i = count($down);
                        if($i > 0){
                            $p3 = $i;

                            $where = "(";
                            for($j = 0; $j < $i; $j++){
                                $where = $where.$down[$j]->user_id.',';
                            }
                            $where = substr($where, 0, -1);
                            $where = $where.')';

                            $down_gold = DB::select('select * from rd_investment_panels where parent in '.$where);
                            $k = count($down_gold);
                            $p4 = $k;

                        }


                        $results = DB::select('select 0 as king, 0 as prince, '.$p3.' as royal, '.$p4.' as gold ');
                    }
                }
                else if($pw == 3){
                    $p2 = 0;
                    $p3 = 0;
                    $p4 = 0;
                    //for Prince User
                    $down = DB::select('select * from rd_investment_panels where parent='.$panel[0]->user_id);
                    if($down){
                        $i = count($down);
                        $p4 = $i;

                        $results = DB::select('select 0 as king, 0 as prince, 0 as royal, '.$p4.' as gold ');
                    }
                }
                else{
                    $results = DB::select('select 0 as king, 0 as prince, 0 as royal, 0 as gold ');
                }

            }
        }

        return view('promotor.panel.index', ['results' => $results]);
    }

    public function entry(){
        return view('promotor.panel.entry');
    }

    public function savenewpanel(Request $request){

        $auth_id = Auth::user()->id;
        $auth_mobile = Auth::user()->mobile;

        //check user is valid or not
        $auth_panel = DB::select("select * from rd_investment_panels where mobile='".$auth_mobile."'");
        if(!$auth_panel){
            return 'error,login mobile or bc not valid';
        }

        //dd($auth_panel[0]->pw);exit();

        $sponsor_mobile = $request->input('sponsor_mobile');
        $sponsor_bc = $request->input('sponsor_bc');
        $placement = $request->input('placement');
        //dd($placement);exit();
        if($sponsor_bc == '' || $sponsor_mobile == ''){
            return 'error,mobile or bc not valid';
        }

        $user = DB::select("select u.id, u.name from users u inner join sponsor_tree st on u.id = st.user_id and u.mobile = '".$sponsor_mobile."' limit 1");
        if($user){
            $userid = $user[0]->id;
            $pw = 4;
            if($placement == 'Prince') $pw = 2;
            if($placement == 'Royal') $pw = 3;
            if($placement == 'Gold') $pw = 4;

            if($pw !== $auth_panel[0]->pw+1){
                return 'error,you cannot enter this '. $placement . ' panel user';
            }
            else{
                $chk_sponsor = DB::select("select * from rd_investment_panels where mobile='".$sponsor_mobile."' limit 1");
                if($chk_sponsor){
                    return 'error,panel user already exists';
                }
                else{
                    $id = DB::table('rd_investment_panels')->insertGetId(
                        [
                            'mobile' => $sponsor_mobile,
                            'status' => $placement,
                            'parent' => $auth_id,
                            'user_id' => $userid,
                            'pw' => $pw,
                            'created_at' => Date('Y-m-d h:i:s'),
                            'updated_at' => Date('Y-m-d h:i:s')
                        ]
                    );

                    if($id){
                        DB::table('users')
                            ->where('id', $userid)
                            ->update(['is_panel_user' => 'yes']);
                    }

                    return 'success,panel user inserted successfully';
                }

            }
        }
        else{

            return 'error,panel mobile is not valid';
        }
    }

    public function details(){
        $auth_id = Auth::user()->id;

        $query = "select u.*, rip.*, u2.mobile as pro
        from rd_investment_panels rip
        inner join users u
        on rip.user_id = u.id
        inner join users u2
        on rip.parent = u2.id";

        if($auth_id == 52){}
        else{
            $query = $query. " and rip.parent = ".$auth_id;
        }

        $results = DB::select($query);

        return view('promotor.panel.details', ['results' => $results]);
    }

    public function removepanel(Request $request){

        $mobile = $request->input('mobile');
        $chk_sponsor = DB::select("select * from rd_investment_panels where mobile='".$mobile."' limit 1");

        if($chk_sponsor){
            DB::table('rd_investment_panels')->where('mobile', '=', $mobile)->delete();
            DB::table('users')
                    ->where('mobile', $mobile)
                    ->update(['is_panel_user' => 'no']);

        }
        else{}

    }

    public function demand(){
        return view('promotor.panel.demand');
    }

    public function savedemand(Request $request){
        $demand_type = $request->input('demand_type');
        $details = $request->input('details');

        $auth_id = Auth::user()->id;

        if($auth_id == 52){
            DB::table('rd_investment_demands')->insertGetId(
                [
                    'mobile' => Auth::user()->mobile,
                    'description' => $details,
                    'category' => $demand_type,
                    'user_id' => $auth_id,
                    'created_at' => Date('Y-m-d h:i:s'),
                    'updated_at' => Date('Y-m-d h:i:s')
                ]
            );

            return 'success, ok';
        }
        else{
            return 'error, You cannot create demand';
        }
    }

    public function drequest(){
        $results = DB::select('select * from rd_investment_demands order by id desc');
        return view('promotor.panel.drequest',['results' => $results]);
    }

    public function requestdetails(){
        $id=request()->route("id");

        $results = DB::select('select * from rd_investment_demands where id = '.$id);
        $receives = DB::select('select * from rd_investment_demand_receivers where rdid = '.$id);
        return view('promotor.panel.requestdetails',['results' => $results, 'receives' => $receives]);
    }

    public function requestupdate(){
        $id=request()->route("id");
        $results = DB::select('select * from rd_investment_demands where id = '.$id);
        return view('promotor.panel.requestupdate',['results' => $results]);
    }

    public function savedemandresponse(Request $request){
        $amount = $request->input('amount');
        $rdid = $request->input('rdid');

        DB::table('rd_investment_demand_receivers')->insertGetId(
            [
                'mobile' => Auth::user()->mobile,
                'name' => Auth::user()->name,
                'amount' => $amount,
                'rdid' => $rdid,
                'user_id' => Auth::user()->id,
                'created_at' => Date('Y-m-d h:i:s'),
                'updated_at' => Date('Y-m-d h:i:s'),
                'category' => 'RDL প্রোপারটিজ'
            ]
        );

        return 'success, ok';
    }

    public function investmentreport(){

        $uid = Auth::user()->id;

        $panel = DB::select('select * from rd_investment_panels where user_id='.$uid);

        $query = "select rie.*, u.name, u2.name as investor_name
        from rd_investment_entries rie
        inner join users u
        on u.mobile = rie.panel_holder_mobile
        left outer join users u2
        on rie.mobile = u2.mobile
        inner join rd_investment_panels rip
        on rie.panel_holder_mobile = rip.mobile ";

        if($panel){
            $pw = $panel[0]->pw;
            if($pw < 1){}
            else{
                //for p2
                if($pw == 2){
                    //for Prince User
                    $down = DB::select('select * from rd_investment_panels where parent='.$panel[0]->user_id);
                    if($down){
                        $i = count($down);
                        if($i > 0){
                            $wheremobile = "(";
                            $where = "(";
                            for($j = 0; $j < $i; $j++){
                                $where = $where.$down[$j]->user_id.',';
                                $wheremobile = $wheremobile."'".$down[$j]->mobile."',";
                            }
                            $where = substr($where, 0, -1);
                            $where = $where.')';

                            $down_gold = DB::select('select * from rd_investment_panels where parent in '.$where);

                            $k = count($down_gold);
                            if($k>0){

                                for($j = 0; $j < $k; $j++){
                                    $wheremobile = $wheremobile."'".$down_gold[$j]->mobile."',";
                                }
                                $wheremobile = $wheremobile."'".Auth::user()->mobile."')";
                            }

                            $query = $query." and rie.panel_holder_mobile IN ".$wheremobile;
                        }
                    }
                    else{
                        $query = $query." and rie.panel_holder_mobile = '".Auth::user()->mobile."'";
                    }
                }

                if($pw == 3){
                    //for Prince User
                    $down = DB::select('select * from rd_investment_panels where parent='.$panel[0]->user_id);
                    if($down){
                        $i = count($down);
                        if($i > 0){
                            $wheremobile = "(";
                            for($j = 0; $j < $i; $j++){
                                $wheremobile = $wheremobile."'".$down[$j]->mobile."',";
                            }
                            $wheremobile = $wheremobile."'".Auth::user()->mobile."')";

                            $query = $query." and rie.panel_holder_mobile IN ".$wheremobile;
                        }
                    }
                    else{
                        $query = $query." and rie.panel_holder_mobile = '".Auth::user()->mobile."'";
                    }
                }

                if($pw == 4){
                    $query = $query." and rie.panel_holder_mobile = '".Auth::user()->mobile."'";
                }
            }
        }


        $results = DB::select($query);
        return view('promotor.panel.investentry', ['results' => $results]);
    }


}