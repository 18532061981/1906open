<?php
namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use App\Model\Login;

class LoginController extends Controller
{
    //注册首页
    public function login(){

        return view('login.login');
    }

    //注册接收页面
    public function add(){
        $data  = request()->all();  //接受全部信息
//        dump($data);
        $sql = Login::insert($data);
        if($sql){
            echo "<script>alert('注册成功');loncation='/login/sign'</script>";
        }else{
            echo "<script>alert('注册失败');loncation='/login/login'</script>";
        }

    }

}
