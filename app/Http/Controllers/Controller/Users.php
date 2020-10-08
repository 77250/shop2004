<?php
namespace App\Http\Controllers\Controller;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Users as UsersModel;
class Users extends Controller{
    public function users(){
        return view('users/users');
    }

}

?>