<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends BaseController {

    public function _initialize(){
        $arrUser = F('user.data', '', CONF_PATH);
        if(!$arrUser){
            $arrUser = array(
                array(
                    'id'        => 1,
                    'user_name' => 'abc',
                    'password'  => '123123',
                    'status'    => 1,
                    ),
                array(
                    'id'        => 2,
                    'user_name' => 'qabc',
                    'password'  => '123123',
                    'status'    => 1,
                    ),
                array(
                    'id'        => 3,
                    'user_name' => 'wabc',
                    'password'  => '123123',
                    'status'    => 1,
                    ),
                array(
                    'id'        => 4,
                    'user_name' => 'eabc',
                    'password'  => '123123',
                    'status'    => 1,
                    ),
                array(
                    'id'        => 5,
                    'user_name' => 'abc',
                    'password'  => '123123',
                    'status'    => 1,
                    ),
                array(
                    'id'        => 6,
                    'user_name' => 'aabc',
                    'password'  => '123123',
                    'status'    => 1,
                    ),
                array(
                    'id'        => 7,
                    'user_name' => 'sabc',
                    'password'  => '123123',
                    'status'    => 1,
                    ),
                array(
                    'id'        => 8,
                    'user_name' => 'dabc',
                    'password'  => '123123',
                    'status'    => 1,
                    ),
                array(
                    'id'        => 9,
                    'user_name' => 'zabc',
                    'password'  => '123123',
                    'status'    => 1,
                    ),
                );
            F('user.data', $arrUser, CONF_PATH);
        }
        
    }

    public function index(){
    	
        $_info = array();
        $_info['title'] = '用户管理';
        
        $this->assign('_info', $_info);
        $this->display();
    }


}