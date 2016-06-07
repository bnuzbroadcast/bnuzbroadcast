<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model\UserModel;
class UserController extends Controller {
    public function index(){
        $this->display();
    }
//     public  function test($user,$pass) {
//         echo 'user:'.$user.'<br />pass:'.$pass;
//     }
//     public function model() {
        //创建model基类，传递user表，t_user

//         $user = M('User');
//         $column = M('Column');
//         $program = M('Program');
//         $pcomment = M('Pcomment');
//         $activity = M('Activity');
//         $join = M('Join');
//         $hcomment = M('Hcomment');
//         $notice = M('Notice');
        
        
//         var_dump($user->select());

        
//         $user = new UserModel();
//         var_dump($user->select());

       // $user = D('User');
        //var_dump($user->select());
//     }
//     public  function create(){
//          $user = M('User');
//          $data['userName'] = $_POST['userName'];
//          $data['userMail'] = $_POST['userMail'];
//          var_dump($user->create($data));
//     }
    
//     public function add(){
//         $user = M('User');
//         $data = $user->create();
//         $user->data($data)->add();
//         $user = D('User');
//         $data['userName'] = '';
//         if($user->create($data)){
//             echo '所有字段验证成功！';
//         }else {
//             var_dump($user->getError());
//         }
//     }
//     public function select(){
//         $user = M('User');
//         var_dump($user->getField('userId,userName,userMail'));
//     }
//     public function save(){
//         $user = M('User');
        
//     }
}