<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
	/**
	 * 初始化
	 */
	protected function _initialize(){
        //导航
		$arrNav = F('nav.config','',CONF_PATH);
		if(!$arrNav){
			//实际开发时 从数据库中获取导航信息(pid)
			//field:id title url icon pid sort
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
							'title'	=> 'Elements',
							'url'	=> 'Index/elements',
							'icon'	=> '',
							),
						array(
							'id'	=> 4,
							'title'	=> 'Buttons & Icon',
							'url'	=> 'Index/buttons',
							'icon'	=> '',
							),
						array(
							'id'	=> 5,
							'title'	=> 'Treeview',
							'url'	=> 'Index/treeview',
							'icon'	=> '',
							),
						array(
							'id'	=> 6,
							'title'	=> 'jQuery UI',
							'url'	=> 'Index/jquery-ui',
							'icon'	=> '',
							),
						array(
							'id'	=> 7,
							'title'	=> 'Three Level Menu',
							'url'	=> '',
							'icon'	=> '',
							'children'	=> array(
								array(
									'id'	=> 8,
									'title'	=> '4th level',
									'url'	=> '',
									'icon'	=> 'fa-edit',
									'children'	=> array(
										array(
											'id'	=> 9,
											'title'	=> 'Add Product',
											'url'	=> '',
											'icon'	=> 'fa-plus',
											),
										),
									),
								array(
									'id'	=> 10,
									'title'	=> 'item',
									'url'	=> '',
									'icon'	=> '',
									),
								),
							),
						),
					),
				array(
					'id'	=> 11,
					'title'	=> 'Tables',
					'url'	=> 'Index/tables',
					'icon'	=> 'fa-list',
					'children'	=> '',
					),
				array(
					'id'	=> 12,
					'title'	=> 'Forms',
					'url'	=> '',
					'icon'	=> 'fa-pencil-square-o',
					'children'	=> array(
						array(
							'id'	=> 13,
							'title'	=> 'Form Elements',
							'url'	=> 'Index/form-elements',
							'icon'	=> '',
							),
						array(
							'id'	=> 14,
							'title'	=> 'Form Elements',
							'url'	=> 'Index/form-elements-2',
							'icon'	=> '',
							),
						array(
							'id'	=> 15,
							'title'	=> 'Wizard &amp; Validation',
							'url'	=> 'Index/form-wizard',
							'icon'	=> '',
							),
						array(
							'id'	=> 16,
							'title'	=> 'Dropzone File Upload',
							'url'	=> 'Index/dropzone',
							'icon'	=> '',
							),
						),
					),
				array(
					'id'	=> 17,
					'title'	=> 'Other Pages',
					'url'	=> '',
					'icon'	=> 'fa-file-o',
					'children'	=> array(
						array(
						'id'	=> 18,
						'title'	=> 'Email Template',
						'url'	=> 'Index/email-confirmation',
						'icon'	=> 'fa-envelope-o',
						),
						array(
							'id'	=> 19,
							'title'	=> 'Error 404',
							'url'	=> 'Index/error-404',
							'icon'	=> '',
							),
						array(
							'id'	=> 20,
							'title'	=> 'Error 500',
							'url'	=> 'Index/error-500',
							'icon'	=> '',
							),
						),
					),
				);
			
			//开发时 注释掉
			//F('nav.config',$arrNav,CONF_PATH);

		}

		$this->assign('_nav', $arrNav);
	}

	/**
	 * 通用分页列表
	 * @param  model $model 数据模型
	 * @param  array $map 	查询条件
	 * @param  array $field 查询字段
	 * @author Buff
	 * @2015.4.8
	 */
	protected function _list($model, $map=array(), $field=array()){
		$pageIndex = I('request.' . C('VAR_PAGE'), 1, 'int');
		$pageRows = I('request._r', C('VAR_ROWS'), 'int');
		$order = I('request._o', false, 'string');
		$sort = I('request._s', false, 'string');


		if(strtolower($sort) !== 'asc'){
			$sort = 'desc';
		}
		if(!in_array(strtolower($order), $model->getDbFields())){
			$order = $model->getPk();
		}

		$count = $model->where($map)->count();
		$list = $model->where($map)->page($pageIndex, $pageRows)->order($order . ' ' . $sort)->select();

		$Page = new \Think\Page($count, $pageRows);
		//加入查询条件
		foreach($map as $key=>$val) {
			if(!is_array($val)){
				$Page->parameter[$key] = urlencode($val);
			}
		}

		$pageHtml = $Page->show();

		$_list = array(
			'list' 	=> $list, 
			'page' 	=> $pageHtml,
			'count' => $count,
			'rows'	=> $pageRows,
			'rowsOptions'	=> C('ROWS_OPTIONS'));

		$this->assign('_list', $_list);
	}
}