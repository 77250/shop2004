<?php
namespace App\Http\Controllers\Controller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\User as UserModel;

class User extends Controller{
    public function user(){
        return view('user.user');
    }
    public function add(Request $request){
        $data = $request->except('_token');
//        dd($data);
        $user_model = new UserModel();
        $data['reg_time']=time();
        $res = $user_model->insert($data);
        if($res){
            return redirect('user/list');
        }else{
            return redirect('user/user');
        }
    }
    public function list(){
        $user_model = new UserModel();
        $res = $user_model->all();
        return view('user.list',['res'=>$res]);
    }
}




?>