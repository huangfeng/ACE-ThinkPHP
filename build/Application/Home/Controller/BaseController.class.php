<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
	public function _initialize(){
        //导航
		$arrNav = F(CONF_PATH, 'nav.config');
		if(!$arrNav){
			//实际开发时 从数据库中获取导航信息(pid)
			$arrNav = array(
				array(
					'id'	=> 1,
    				'title'	=> 'Dashboard',		//标题
    				'url'	=> 'Index/index',	//URL U方法解析
    				'icon'	=> 'fa-tachometer'	//FontAwesome图标
    				),
				array(
					'id'	=> 2,
					'title'	=> 'UI &amp; Elements',
					'url'	=> '',
					'icon'	=> 'fa-desktop',
					'children'	=> array(
						array(
							'id'	=> 3,
							'title'	=> 'Layouts',
							'url'	=> 'Index/layouts',
							'icon'	=> '',
							),
						array(
							'id'	=> 4,
							'title'	=> 'Typography',
							'url'	=> 'Index/typography',
							'icon'	=> '',
							),
						array(
							'id'	=> 3,
							'title'	=> 'Elements',
							'url'	=> 'Index/elements',
							'icon'	=> '',
							),
						array(
							'id'	=> 3,
							'title'	=> 'Buttons & Icon',
							'url'	=> 'Index/buttons',
							'icon'	=> '',
							),
						array(
							'id'	=> 3,
							'title'	=> 'Content sliders',
							'url'	=> '',
							'icon'	=> '',
							),
						array(
							'id'	=> 3,
							'title'	=> 'Treeview',
							'url'	=> 'Index/treeview',
							'icon'	=> '',
							),
						array(
							'id'	=> 3,
							'title'	=> 'jQuery UI',
							'url'	=> 'Index/jquery-ui',
							'icon'	=> '',
							),
						array(
							'id'	=> 3,
							'title'	=> 'Nestable lists',
							'url'	=> '',
							'icon'	=> '',
							),
						array(
							'id'	=> 3,
							'title'	=> 'Three Level Menu',
							'url'	=> '',
							'icon'	=> '',
							'children'	=> array(
								array(
									'id'	=> 3,
									'title'	=> '4th level',
									'url'	=> '',
									'icon'	=> 'fa-edit',
									'children'	=> array(
										array(
											'id'	=> 3,
											'title'	=> 'Add Product',
											'url'	=> '',
											'icon'	=> 'fa-plus',
											),
										),
									),
								array(
									'id'	=> 3,
									'title'	=> 'item',
									'url'	=> '',
									'icon'	=> '',
									),
								),
							),
						),
					),
				array(
					'id'	=> 6,
					'title'	=> 'Tables',
					'url'	=> 'Index/tables',
					'icon'	=> 'fa-list',
					'children'	=> '',
					),
				array(
					'id'	=> 3,
					'title'	=> 'Forms',
					'url'	=> '',
					'icon'	=> 'fa-pencil-square-o',
					),
				);
			
			//开发时 注释掉
			//F(CONF_PATH, 'nav.config', $arrNav);
			
		}

		$this->assign('_nav', $arrNav);

		//根据当前页 获取active节点
		//$this->assign('_active', $arrActive);
	}


}