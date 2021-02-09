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
        return view('promotor.panel.index');
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

            if($pw <= $auth_panel[0]->pw){
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

        $query = "select u.*, rip.*
        from rd_investment_panels rip
        inner join users u
        on rip.user_id = u.id";

        if($auth_id == 4){}
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


}