<?php

namespace App\Http\Controllers\Promotor;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\SponsorTree;
use DB;

class TreeController extends Controller
{
    //promoter tree
    public function index($id = 1){
        $auth_id = Auth::user()->id;
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

        if(!isset($id) || $id == ''){
            $id =1;
        }

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
                ->where('st.bc', 1)
                ->first();
            
            //$queries = DB::getQueryLog();

            //dd($root);
            
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
                        $root_left = $this->getTreeDetails($tree_111_left);
                        $node_1121_user_id = $root_left->user_id;
                        $node_1121_bc = $root_left->bc;
                        $node_1121_mobile = $root_left->mobile;
                    }
                    
                    if($tree_112_right == 0){}
                    else{
                        //get left tree details
                        $root_left = $this->getTreeDetails($tree_112_right);
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
            $email = "mail1_".rand(1000,1000)."@gmail.com";
            $id = DB::table('users')->insertGetId(
                [
                    'email' => $email,
                    'name' => $full_name, 
                    'password' => $password,  
                    'role' => 'promoter',
                    'mobile' => $mobile
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

    
}
