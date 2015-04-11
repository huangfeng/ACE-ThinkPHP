<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends BaseController {

    public function _initialize(){
        parent::_initialize();

        /*
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
        */
        
    }

    public function index(){
    	
        $_info = array();
        $_info['title'] = '用户管理';
        
        //test
        // CREATE TABLE IF NOT EXISTS `t_user` (
        //   `id` int(11) NOT NULL,
        //   `user_name` varchar(30) NOT NULL,
        //   `password` varchar(200) NOT NULL,
        //   `status` tinyint(4) NOT NULL DEFAULT '1'
        // ) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

        // INSERT INTO `t_user` (`id`, `user_name`, `password`, `status`) VALUES
        // (1, 'abc', '123123', 1),
        // (2, 'qabc', '123123', 1),
        // (3, 'wabc', '123123', 1),
        // (4, 'eabc', '123123', 1),
        // (5, 'aabc', '123123', 1),
        // (6, 'sabc', '123123', 1),
        // (7, 'dabc', '123123', 1),
        // (8, 'zabc', '123123', 1),
        // (9, 'xabc', '123123', 1),
        // (10, 'cbc', '123123', 1),
        // (11, 'vabc', '123123', 1),
        // (12, 'babc', '123123', 1);
        $this->_list(M('User', 't_', 'mysql://root:123123@localhost/test#utf8'));

        $this->assign('_info', $_info);
        $this->display();
    }

    public function add(){
        if(IS_POST){

        }else{
            $this->display();
        }
    }

    public function edit(){
        if(IS_POST){

        }else{
            $this->display();
        }
    }

    public function view(){
        $this->display();
    }

    public function delete(){

    }

}