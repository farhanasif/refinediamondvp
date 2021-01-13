<?php

namespace App\Http\Controllers\Promotor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\SponsorTree;
use App\User;
use DB;

class TreeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //PROMOTER TREE PAGE
    public function index($id = 0, $bc = 1){
        $auth_id = Auth::user()->id;
        //dd($auth_id); exit();
        $node_1_user_id = 0;
        $node_1_bc = 0;
        $node_1_mobile = 0;

        $node_11_user_id = 0;
        $node_11_bc = 0;
        $node_11_mobile = 0;

        $node_111_user_id = 0;
        $node_111_bc = 0;
        $node_111_mobile = 0;

        $node_112_user_id = 0;
        $node_112_bc = 0;
        $node_112_mobile = 0;

        $node_1111_user_id = 0;
        $node_1111_bc = 0;
        $node_1111_mobile = 0;

        $node_1112_user_id = 0;
        $node_1112_bc = 0;
        $node_1112_mobile = 0;

        $node_1121_user_id = 0;
        $node_1121_bc = 0;
        $node_1121_mobile = 0;

        $node_1122_user_id = 0;
        $node_1122_bc = 0;
        $node_1122_mobile = 0;

        $node_12_user_id = 0;
        $node_12_bc = 0;
        $node_12_mobile = 0;

        $node_121_user_id = 0;
        $node_121_bc = 0;
        $node_121_mobile = 0;

        $node_122_user_id = 0;
        $node_122_bc = 0;
        $node_122_mobile = 0;

        $node_1211_user_id = 0;
        $node_1211_bc = 0;
        $node_1211_mobile = 0;

        $node_1212_user_id = 0;
        $node_1212_bc = 0;
        $node_1212_mobile = 0;

        $node_1221_user_id = 0;
        $node_1221_bc = 0;
        $node_1221_mobile = 0;

        $node_1222_user_id = 0;
        $node_1222_bc = 0;
        $node_1222_mobile = 0;

        if(!isset($id) || $id < 1){
            $id = $auth_id;
        }

        //echo $id; exit();


        if($id){
            //return $id;
            //$id = 1;
            //get left right of root

            ////// need to check if ID exists/////////

            // $root = SponsorTree::where('user_id', $id)
            //     ->where('bc', 1)
            //     ->first();
            //DB::connection()->enableQueryLog();

            $root = DB::table('sponsor_tree as st')
                ->join('users as u', 'u.id','=', 'st.user_id')
                ->select('st.*','u.*')
                ->where('st.user_id', $id)
                ->where('st.bc', $bc)
                ->first();

            //$queries = DB::getQueryLog();

            //dd($queries); exit();

            $node_1_user_id = $root->user_id;
            $node_1_bc = $root->bc;
            $node_1_mobile = $root->mobile;



            //dd($root);
            //check if root has left and right, node 1
            $tree_left = $root->left;
            $tree_right = $root->right;

            if($tree_left == 0){
            }
            else{
                //get left tree details
                $root_left = $this->getTreeDetails($tree_left);
                $node_11_user_id = $root_left->user_id;
                $node_11_bc = $root_left->bc;
                $node_11_mobile = $root_left->mobile;

                //dd($root_left);
                $tree_11_left = $root_left->left;
                $tree_11_right = $root_left->right;
                //dd($tree_11_right);

                //left level 3 checking
                if($tree_11_left == 0){}
                else{
                    //get left tree details
                    $root_left = $this->getTreeDetails($tree_11_left);

                    $node_111_user_id = $root_left->user_id;
                    $node_111_bc = $root_left->bc;
                    $node_111_mobile = $root_left->mobile;


                    $tree_111_left = $root_left->left;
                    $tree_111_right = $root_left->right;

                    if($tree_111_left == 0){}
                    else{
                        //get left tree details
                        $root_left = $this->getTreeDetails($tree_111_left);
                        $node_1111_user_id = $root_left->user_id;
                        $node_1111_bc = $root_left->bc;
                        $node_1111_mobile = $root_left->mobile;
                    }

                    if($tree_111_right == 0){}
                    else{
                        //get left tree details
                        $root_left = $this->getTreeDetails($tree_111_right);
                        $node_1112_user_id = $root_left->user_id;
                        $node_1112_bc = $root_left->bc;
                        $node_1112_mobile = $root_left->mobile;
                    }
                }

                if($tree_11_right == 0){}
                else{
                    //get left tree details
                    $root_right = $this->getTreeDetails($tree_11_right);
                    $node_112_user_id = $root_right->user_id;
                    $node_112_bc = $root_right->bc;
                    $node_112_mobile = $root_right->mobile;
                    //dd($root_right);

                    $tree_112_left = $root_right->left;
                    $tree_112_right = $root_right->right;

                    if($tree_112_left == 0){}
                    else{
                        //get left tree details
                        $root_left = $this->getTreeDetails($tree_112_left);
                        $node_1121_user_id = $root_left->user_id;
                        $node_1121_bc = $root_left->bc;
                        $node_1121_mobile = $root_left->mobile;
                    }

                    if($tree_112_right == 0){}
                    else{
                        //get left tree details
                        $root_left = $this->getTreeDetails($tree_112_right);
                        //dd($root_left);exit();
                        $node_1122_user_id = $root_left->user_id;
                        $node_1122_bc = $root_left->bc;
                        $node_1122_mobile = $root_left->mobile;
                    }

                }
            }

            if($tree_right == 0){}
            else{
                //get left tree details
                $root_right = $this->getTreeDetails($tree_right);
                $node_12_user_id = $root_right->user_id;
                $node_12_bc = $root_right->bc;
                $node_12_mobile = $root_right->mobile;
                //dd($root_right);
                $tree_12_left = $root_right->left;
                $tree_12_right = $root_right->right;

                //left level 3 checking
                if($tree_12_left == 0){}
                else{
                    //get left tree details
                    $root_left = $this->getTreeDetails($tree_12_left);

                    $node_121_user_id = $root_left->user_id;
                    $node_121_bc = $root_left->bc;
                    $node_121_mobile = $root_left->mobile;


                    $tree_121_left = $root_left->left;
                    $tree_121_right = $root_left->right;

                    if($tree_121_left == 0){}
                    else{
                        //get left tree details
                        $root_left = $this->getTreeDetails($tree_121_left);
                        $node_1211_user_id = $root_left->user_id;
                        $node_1211_bc = $root_left->bc;
                        $node_1211_mobile = $root_left->mobile;
                    }

                    if($tree_121_right == 0){}
                    else{
                        //get left tree details
                        $root_left = $this->getTreeDetails($tree_121_right);
                        $node_1212_user_id = $root_left->user_id;
                        $node_1212_bc = $root_left->bc;
                        $node_1212_mobile = $root_left->mobile;
                    }
                }

                if($tree_12_right == 0){}
                else{
                    //get left tree details
                    $root_right = $this->getTreeDetails($tree_12_right);
                    $node_122_user_id = $root_right->user_id;
                    $node_122_bc = $root_right->bc;
                    $node_122_mobile = $root_right->mobile;
                    //dd($root_right);

                    $tree_122_left = $root_right->left;
                    $tree_122_right = $root_right->right;

                    if($tree_122_left == 0){}
                    else{
                        //get left tree details
                        $root_left = $this->getTreeDetails($tree_122_left);
                        $node_1221_user_id = $root_left->user_id;
                        $node_1221_bc = $root_left->bc;
                        $node_1221_mobile = $root_left->mobile;
                    }

                    if($tree_122_right == 0){}
                    else{
                        //get left tree details
                        $root_left = $this->getTreeDetails($tree_122_right);
                        $node_1222_user_id = $root_left->user_id;
                        $node_1222_bc = $root_left->bc;
                        $node_1222_mobile = $root_left->mobile;
                    }

                }
            }
        }
        else{
            //return view('promotor.tree');
        }

        $response = [
            'node_1_user_id' => $node_1_user_id,
            'node_1_bc' => $node_1_bc,
            'node_1_mobile' => $node_1_mobile,

            'node_11_user_id' => $node_11_user_id,
            'node_11_bc' => $node_11_bc,
            'node_11_mobile' => $node_11_mobile,

            'node_111_user_id' => $node_111_user_id,
            'node_111_bc' => $node_111_bc,
            'node_111_mobile' => $node_111_mobile,

            'node_112_user_id' => $node_112_user_id,
            'node_112_bc' => $node_112_bc,
            'node_112_mobile' => $node_112_mobile,

            'node_1111_user_id' => $node_1111_user_id,
            'node_1111_bc' => $node_1111_bc,
            'node_1111_mobile' => $node_1111_mobile,

            'node_1112_user_id' => $node_1112_user_id,
            'node_1112_bc' => $node_1112_bc,
            'node_1112_mobile' => $node_1112_mobile,

            'node_1121_user_id' => $node_1121_user_id,
            'node_1121_bc' => $node_1121_bc,
            'node_1121_mobile' => $node_1121_mobile,

            'node_1122_user_id' => $node_1122_user_id,
            'node_1122_bc' => $node_1122_bc,
            'node_1122_mobile' => $node_1122_mobile,

            'node_12_user_id' => $node_12_user_id,
            'node_12_bc' => $node_12_bc,
            'node_12_mobile' => $node_12_mobile,

            'node_121_user_id' => $node_121_user_id,
            'node_121_bc' => $node_121_bc,
            'node_121_mobile' => $node_121_mobile,

            'node_122_user_id' => $node_122_user_id,
            'node_122_bc' => $node_122_bc,
            'node_122_mobile' => $node_122_mobile,

            'node_1211_user_id' => $node_1211_user_id,
            'node_1211_bc' => $node_1211_bc,
            'node_1211_mobile' => $node_1211_mobile,

            'node_1212_user_id' => $node_1212_user_id,
            'node_1212_bc' => $node_1212_bc,
            'node_1212_mobile' => $node_1212_mobile,

            'node_1221_user_id' => $node_1221_user_id,
            'node_1221_bc' => $node_1221_bc,
            'node_1221_mobile' => $node_1221_mobile,

            'node_1222_user_id' => $node_1222_user_id,
            'node_1222_bc' => $node_1222_bc,
            'node_1222_mobile' => $node_1222_mobile
        ];

        //dd($response);exit();

        return view('promotor.tree', [
            'node_1_user_id' => $node_1_user_id,
            'node_1_bc' => $node_1_bc,
            'node_1_mobile' => $node_1_mobile,

            'node_11_user_id' => $node_11_user_id,
            'node_11_bc' => $node_11_bc,
            'node_11_mobile' => $node_11_mobile,

            'node_111_user_id' => $node_111_user_id,
            'node_111_bc' => $node_111_bc,
            'node_111_mobile' => $node_111_mobile,

            'node_112_user_id' => $node_112_user_id,
            'node_112_bc' => $node_112_bc,
            'node_112_mobile' => $node_112_mobile,

            'node_1111_user_id' => $node_1111_user_id,
            'node_1111_bc' => $node_1111_bc,
            'node_1111_mobile' => $node_1111_mobile,

            'node_1112_user_id' => $node_1112_user_id,
            'node_1112_bc' => $node_1112_bc,
            'node_1112_mobile' => $node_1112_mobile,

            'node_1121_user_id' => $node_1121_user_id,
            'node_1121_bc' => $node_1121_bc,
            'node_1121_mobile' => $node_1121_mobile,

            'node_1122_user_id' => $node_1122_user_id,
            'node_1122_bc' => $node_1122_bc,
            'node_1122_mobile' => $node_1122_mobile,

            'node_12_user_id' => $node_12_user_id,
            'node_12_bc' => $node_12_bc,
            'node_12_mobile' => $node_12_mobile,

            'node_121_user_id' => $node_121_user_id,
            'node_121_bc' => $node_121_bc,
            'node_121_mobile' => $node_121_mobile,

            'node_122_user_id' => $node_122_user_id,
            'node_122_bc' => $node_122_bc,
            'node_122_mobile' => $node_122_mobile,

            'node_1211_user_id' => $node_1211_user_id,
            'node_1211_bc' => $node_1211_bc,
            'node_1211_mobile' => $node_1211_mobile,

            'node_1212_user_id' => $node_1212_user_id,
            'node_1212_bc' => $node_1212_bc,
            'node_1212_mobile' => $node_1212_mobile,

            'node_1221_user_id' => $node_1221_user_id,
            'node_1221_bc' => $node_1221_bc,
            'node_1221_mobile' => $node_1221_mobile,

            'node_1222_user_id' => $node_1222_user_id,
            'node_1222_bc' => $node_1222_bc,
            'node_1222_mobile' => $node_1222_mobile
        ]);

    }

    //TREE DETAILS IN THE VIEW
    public function getTreeDetails($tree_id){
        // $root = SponsorTree::where('id', $tree_id)
        //         ->first();

        $root = DB::table('sponsor_tree as st')
                ->join('users as u', 'u.id','=', 'st.user_id')
                ->select('st.*','u.*')
                ->where('st.id', $tree_id)
                ->first();
        //dd($root);
        return $root;
    }

    //BASIC ENTRY FORM
    public function entry($id){
        //get sponsor tree id

        $auth_id = Auth::user()->id;

        $root = SponsorTree::where('user_id', $auth_id)
                ->where('bc', 1)
                ->first();

        //dd($root);
        $sponsor_id = $root->id;

        return view('promotor.promoterEntry', ['id' => $id, 'sponsor_id' => $sponsor_id]);
    }

    //NEW ENTRY FORM FOR PROMOTER//
    public function newentry(){
        //get sponsor tree id
        $auth_id = Auth::user()->id;
        $user = User::where('id', $auth_id)
                ->first();
        //dd($user);exit();
        $root = SponsorTree::where('user_id', $auth_id)
            ->where('bc', 1)
            ->first();
        //dd($root); exit();

        return view('promotor.newentry.promoterEntry', ['root' => $root, 'user' => $user]);
    }

    public function savePromoter(){
        $sponsor_id = $_GET['sponsor_id'];
        $placement = $_GET['placement'];
        $position = $_GET['position'];
        $package = $_GET['package'];
        $product = $_GET['product'];
        $full_name = $_GET['full_name'];
        $mobile = $_GET['mobile'];
        $password = $_GET['password'];
        $trans_password = $_GET['trans_password'];
        $trans_password = '1234';
        $bc = 0;

        //check if mobile already exists, then another cb
        $id = 0;
        $users = DB::table('users')->where('mobile', $mobile)->first();
        if($users){
            $id = $users->id;
            //claculate bc
            $sp_users = DB::table('sponsor_tree')->where('user_id', $id)->count();

            if($sp_users < 1){
                $bc = 1;
            }
            else{
                $bc = $sp_users + 1;
            }
        }
        else{
            //create user
            $password = Hash::make($password);
            $email = "mail1_".$mobile."@gmail.com";
            $id = DB::table('users')->insertGetId(
                [
                    'email' => $email,
                    'name' => $full_name,
                    'password' => $password,
                    'role' => 'promoter',
                    'mobile' => $mobile,
                    'transaction_pass' => $trans_password
                ]
            );
            $bc = 1;
        }

        //create package list

        //placement
        //save sponsor tree
        $sponsor_tree_id = DB::table('sponsor_tree')->insertGetId(
            [
                'user_id' => $id,
                'parent' => $placement,
                'left' => 0,
                'right' => 0,
                'sponsor_id' => $sponsor_id,
                'bc' => $bc
            ]
        );

        if($position == 'L'){
            DB::table('sponsor_tree')
            ->where('id', $placement)
            ->update(['left' => $sponsor_tree_id]);
        }
        else{
            DB::table('sponsor_tree')
            ->where('id', $placement)
            ->update(['right' => $sponsor_tree_id]);
        }




        return 'Created Successfully';
    }

    //promoter checkplacement
    public function checkplacement(Request $request){
        $placement = $request->input('placement');

        //check if user exist and has input in sponsor_tree
        $user = User::where('mobile', $placement)
                ->first();

        if($user) {
            return 'true';
        }
        else {
            return 'false';
        }
    }

    public function checkplacementwithbc(Request $request){
        $placement = $request->input('placement');
        $bc = $request->input('bc');

        //check if user exist and has input in sponsor_tree
        $user = User::where('mobile', $placement)
                ->first();

        $root = SponsorTree::where('user_id', $user->id)
        ->where('bc', $bc)
        ->first();
        //dd($root);exit();
        if($root) {
            return 'true';
        }
        else {
            return 'false';
        }
    }

    public function savenewpromoter(Request $request){
        //inputs
        $sponsor_mobile = $request->input('sponsor_mobile');
        $sponsor_bc = $request->input('sponsor_bc');
        $placement = $request->input('placement');
        $placement_bc = $request->input('placement_bc');
        $position = $request->input('position');
        $package = $request->input('package');
        $product = $request->input('product');
        $full_name = $request->input('full_name');
        $mobile = $request->input('mobile');
        $trans_password = $request->input('trans_password');
        //check validation
        if($sponsor_mobile == ''){
            return 'error,sponsor is not valid';
        }
        else{
            //check sponsor
            $user = DB::select("select u.id, u.name from users u inner join sponsor_tree st on u.id = st.user_id and u.mobile = '".$sponsor_mobile."' limit 1");
            if($user){
                $sponsor_id = $user[0]->id;
                //check placement validity
                $query = "select st.id, u.name, st.parent, st.left, st.right from users u inner join sponsor_tree st on u.id = st.user_id and u.mobile = '".$placement."' where st.bc='".$placement_bc."' limit 1";
                $place_check = DB::select($query);

                if($place_check){
                    //check if placement already has left right
                    if($position == 'L' && $place_check[0]->left > 0)
                    {
                        return 'error,there is already a placement on the place';
                    }
                    else if($position == 'R' && $place_check[0]->right > 0){
                        return 'error,there is already a placement on the place';
                    }
                    else{
                        //check if placement is under parent
                        //check if placement is uder its bc 1
                        //check sponsor bc
                        $sp_query = "select * from sponsor_tree where user_id =".$sponsor_id." and bc=".$sponsor_bc." limit 1";
                        $sp_res = DB::select($sp_query);
                        if($sp_res){
                            //we need to enter as per bc id of each mobile
                            $sp_bc_id = $sp_res[0]->id;
                            $topline = DB::select("
                            SELECT T2.id, T2.parent, T2.user_id, T2.bc, u.mobile
                                FROM (
                                    SELECT
                                        @r AS _id,
                                        (SELECT @r := parent FROM sponsor_tree WHERE id = _id) AS parent,
                                        @l := @l + 1 AS lvl
                                    FROM
                                        (SELECT @r := ".$place_check[0]->id.", @l := 0) vars,
                                        sponsor_tree h
                                    WHERE @r <> 0) T1
                                JOIN sponsor_tree T2
                                ON T1._id = T2.id
                                join users u
                                on u.id = T2.user_id
                                ORDER BY T1.lvl desc
                            ");

                            if($topline){
                                $length = count($topline);
                                $sp_valid = 0; //invalid
                                $own_bc = 0; //invalid
                                $new = 1; //yes
                                for($i = 0; $i < $length; $i++){
                                    //check if sponsor matched or not
                                    if($topline[$i]->mobile == $sponsor_mobile){
                                        $sp_valid = 1; //valid
                                    }

                                    //check if own bc 1 matched ot not
                                    if($topline[$i]->mobile == $mobile){
                                        $new = 0;
                                        //check if own bc 1 or not
                                        if($topline[$i]->bc == 1){
                                            $own_bc = 1; //valid
                                        }

                                    }
                                }

                                // /echo $sp_valid.'-'.$own_bc.'-'.$new; exit();
                                //if not new check validity
                                $validity = 0;
                                if($new == 0){
                                    if($sp_valid == 1 && $own_bc == 1){
                                    }
                                    else{
                                        //invalid
                                        return 'error,Sponsor and Placement is invalid';
                                    }
                                }
                                else{
                                    if($sp_valid == 0){
                                        $validity = 1;
                                    }
                                }

                                if($validity == 0){
                                    //save in user
                                    //check if mobile already exists, then another cb
                                    $id = 0;
                                    $users = DB::table('users')->where('mobile', $mobile)->first();
                                    if($users){
                                        $id = $users->id;
                                        //claculate bc
                                        $sp_users = DB::table('sponsor_tree')->where('user_id', $id)->count();

                                        if($sp_users < 1){
                                            $bc = 1;
                                        }
                                        else{
                                            $is_bc_valid = 0;
                                            for($i = 0; $i < $length; $i++){
                                                //check if user has bc then we need to chcek again topline
                                                if($topline[$i]->mobile == $mobile){
                                                    $is_bc_valid = 1;
                                                }
                                            }
                                            //if own bc is valid
                                            if($is_bc_valid == 1){
                                                $bc = $sp_users + 1;
                                            }
                                            else{
                                                return "error,Placement BC is in Cross Line";
                                            }

                                        }
                                    }
                                    else{
                                        //create user
                                        $password = '123456';
                                        $password = Hash::make($password);
                                        $email = "mail_".$mobile."_".rand(1000,9999)."@gmail.com";
                                        $id = DB::table('users')->insertGetId(
                                            [
                                                'email' => $email,
                                                'name' => $full_name,
                                                'password' => $password,
                                                'role' => 'promoter',
                                                'mobile' => $mobile,
                                                'transaction_pass' => '1234',
                                                'created_at' => Date('Y-m-d h:i:s'),
                                                'updated_at' => Date('Y-m-d h:i:s')
                                            ]
                                        );
                                        $bc = 1;
                                    }
                                    //save in sponsor tree
                                    //placement
                                    //save sponsor tree
                                    $sponsor_tree_id = DB::table('sponsor_tree')->insertGetId(
                                        [
                                            'user_id' => $id,
                                            'parent' => $place_check[0]->id,
                                            'left' => 0,
                                            'right' => 0,
                                            'sponsor_id' => $sp_bc_id,
                                            'bc' => $bc,
                                            'package' => $package
                                        ]
                                    );

                                    //echo $sponsor_tree_id;

                                    if($position == 'L'){
                                        DB::table('sponsor_tree')
                                        ->where('id', $place_check[0]->id)
                                        ->update(['left' => $sponsor_tree_id]);
                                    }
                                    else{
                                        DB::table('sponsor_tree')
                                        ->where('id', $place_check[0]->id)
                                        ->update(['right' => $sponsor_tree_id]);
                                    }




                                    return 'success,Created Successfully';
                                    //update package
                                }
                                else{
                                    return 'error,an error occured';
                                }
                            }
                            else{
                                return 'error,an error occured';
                            }
                        }
                        else{
                            return "error,Sponsor mobile and BC not matching";
                        }



                    }

                    //save in user
                    //check if mobile already exists, then another cb

                }
                else{
                    return 'error,placement is not valid';
                }
            }
            else{
                return 'error, sponsor is not valid';
            }
        }
    }

    public function getPromotorDetails(Request $request){
        $placement = $request->input('mobile');
        $bc = $request->input('bc');

        //check if user exist and has input in sponsor_tree
        $user = User::where('mobile', $placement)
                ->first();

        if($user){
            $root = SponsorTree::where('user_id', $user->id)
            ->where('bc', $bc)
            ->first();

            if($root) {
                return response()->json($root);
            }
            else {
                return response()->json([
                    'data' => 'error'
                ]);
            }
        }
        else {
            return response()->json([
                'data' => 'error'
            ]);
        }
    }

    public function getSponsorTree(){
        $query = "select st.id as placement_id, st.user_id,st.bc, u.name, u.mobile,
        st.parent as parent_placement_id, st.left as left_placement_id, st.right as right_placement_id,
        st.sponsor_id as sponsor_placement_id, st.package
        from sponsor_tree as st
        inner join users as u
        on u.id = st.user_id";

        $results = DB::select($query);
        return view('promotor.newentry.view',compact('results'));
    }

    public function meeting(){
        return view('promotor.newentry.meeting');
    }

    public function getbcdata(Request $request){
        $id = $request->input('id');
        $bc = $request->input('bc');

        $query = "select st.id,DATE_FORMAT(st.created_at, '%m %b %Y') as joining_date, u.name, u.mobile, st.bc, st.sponsor_id , st.package
        from sponsor_tree st
        inner join users u
        on u.id = st.user_id
        and st.user_id = ".$id."
        and st.bc = ".$bc;

        $root = DB::select($query);

        if($root){
            $mobile = $root[0]->mobile;
            $user_bc = $root[0]->bc;
            $joining_date = $root[0]->joining_date;
            $name = $root[0]->name;
            $placement = $root[0]->id;
            $package = $root[0]->package == '2000' ? 'Hope digital' : 'Free';
            $sponsor_id = $root[0]->sponsor_id;

            //get sponsor details
            $query_get_sponsor = "select st.id,DATE_FORMAT(st.created_at, '%m %b %Y') as joining_date, u.name, u.mobile, st.bc, st.sponsor_id , st.package
                    from sponsor_tree st
                    inner join users u
                    on u.id = st.user_id
                    and st.id = ".$sponsor_id;

            $sp = DB::select($query_get_sponsor);
            $sponsor_detail = $sp[0]->name. ' ('.$sp[0]->mobile.') BC:'.$sp[0]->bc;

            //get left right
            //dd($placement);exit();
            $sp_get_left_right = "call sp_get_left_and_right_child_node_count(".$placement.")";
            $child = DB::select($sp_get_left_right);
            //dd($child);exit();
            $left = $child[0]->left_total;
            $right = $child[0]->right_total;

            return response()->json([
                'status' => 'success',
                'mobile' => $mobile,
                'user_bc' => $user_bc,
                'joining_date' => $joining_date,
                'name' => $name,
                'placement' => $placement,
                'package' => $package,
                'sponsor_detail' => $sponsor_detail,
                'left' => $left,
                'right' => $right
            ]);


        }
        else{
            return response()->json([
                'status' => 'error'
            ]);
        }


    }

    //2000 TAKA RECOVERY ENTRY FORM
    public function recoveryentry(){
        //get sponsor tree id
        $auth_id = Auth::user()->id;
        $user = User::where('id', $auth_id)
                ->first();
        //dd($user);exit();
        $root = SponsorTree::where('user_id', $auth_id)
            ->where('bc', 1)
            ->first();
        //dd($root); exit();

        return view('promotor.newentry.recoveryentry', ['root' => $root, 'user' => $user]);
    }
}
