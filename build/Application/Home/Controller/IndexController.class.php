<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
    	$isLogin = session('isLogin');
    	if($isLogin != 1){
    		$this->redirect('Index/login');
    	}


        $_info = array();
        $_info['title'] = '后台首页';
        
        $this->assign('_info', $_info);
        $this->display();
    }

    public function login(){
    	session('isLogin', 1);
    	$this->display();
    }

    public function verify(){
        //清空缓冲区
        ob_end_clean();
    	$Verify = new \Think\Verify(array(
    		'length' => 4, 
    		'useCurve' => false));
		$Verify->entry();
    }

    public function upload(){
    	$upload = new \Think\Upload(array(
            'rootPath' => './Upload/attachment/',
            'subName' => array('date', 'Ymd'),
            'saveName' => array('uniqid', '')));

        $info = $upload->upload();
        if(!$info) {
            $this->error($upload->getError());
        }else{
            
            dump($info);
            // foreach($info as $file){
            //     echo $file['savepath'].$file['savename'];
            // }
        }
    }

    public function logout(){
        session('isLogin', null);
        $this->display('Index/login');
    }
}