<?php

namespace App\Http\Controllers\registrations;

use App\Http\Controllers\Controller;
use App\Models\registration\RoleModel;
use App\Models\registration\userModel;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register(){
       // dd('reached in retister method');
       $registration_txt="wellcome to registraton page";
       $response_data=RoleModel::where('status','Active')->get();
       return view('register')->with(compact('response_data','registration_txt', $response_data));
    }

    public function create_role(Request $request){
        $role_data=[
            'name'  => $request->role_name,
            'status'  => $request->status,
            'created_by'  => 1,
            'created_at'  => date('Y-m-d h:i:s'),
        

        ];
        RoleModel::create($role_data);
        return redirect()->away('get_role_list/ALL/NA/ALL');

    }
    public function get_role_list($param_type,$id,$status){
        if($param_type=="ALL"){
        $response_data=RoleModel::get();
    }
        if($param_type=="BYID"){
        $response_data=RoleModel::where('id',$id)->get();
        }
        //select * from t_role where id='?';
        if($param_type=="Status"){
            $response_data=RoleModel::where('status',$status)->get();
            //select * from t_role where status='?';
            }

        //select* from t_role_master;
        return view('registration/list_roles')->with(compact('response_data')); 

    }
    public function edit_role($id){
        $data=RoleModel::where('id',$id)->first();
        return view('edit_roles')->with(compact('data'));
    }
    public function delete_role($id){
        RoleModel::where('id',$id)->delete();
        return redirect()->away('/get_role_list/ALL/NA/ALL');
    }
    public function update_role(Request $request){
        $role_data=[
            'name'  => $request->role_name,
            'status'  => $request->status,
            'created_by'  => 1,
            'created_at'  => date('Y-m-d h:i:s'),
        

        ];
        RoleModel::where('id',$request->record_id)
        ->update($role_data);
        return redirect()->away('get_role_list/ALL/NA/ALL');
       
    }
    public function register_new_user(Request $request){
        $user_data=[
            'Full_name'  => $request->fullname,
            'contact_no'  => $request->contact,
            'email'  => $request->email,
            'password'  => $request->password,
            'role_id'  => $request->role,
            'created_by'  => 1,
            'created_at'  => date('Y-m-d h:i:s'),
        

        ];
        userModel::create($user_data);
        return redirect()->away('get_role_list/ALL/NA/ALL');

    }
    
}
