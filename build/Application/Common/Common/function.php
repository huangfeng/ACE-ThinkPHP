 <?php

/**
 * 生成左侧导航html
 * @param  array $arrNav 	导航树数组
 * @return string 			生成的html
 * @author Buff
 * @2015.4.4
 */
function get_sidebar($arrNav){
	$html = '';
	//当前节点
	$arrId = get_active_nav($arrNav);

	foreach ($arrNav as $k => $v) {
		if(in_array($v['id'], $arrId)){
			$html .= '<li class="hover active">';
		}else{
			$html .= '<li class="hover">';
		}

		//子节点处理
		if(!empty($v['children']) && is_array($v['children'])){
			$html .= '<a href="' 
			. get_nav_url($v['url']) 
			. '" class="dropdown-toggle"><i class="menu-icon fa ' 
			. ($v['icon'] == '' ? 'fa-caret-right' : $v['icon'])
			. '"></i><span class="menu-text"> ' 
			. $v['title'] 
			. '</span><b class="arrow fa fa-angle-down"></b></a><b class="arrow"></b><ul class="submenu">';
			//递归下级导航
			$html .= get_sidebar($v['children']) . '</ul>';
		}else{
			$html .= '<a href="' 
			. get_nav_url($v['url']) 
			. '"><i class="menu-icon fa ' 
			. ($v['icon'] == '' ? 'fa-caret-right' : $v['icon'])
			. '"></i><span class="menu-text"> ' 
			. $v['title']
			. ' </span></a><b class="arrow"></b></li>';
		}
	}

	return $html;
}

/**
 * 获取导航URL 参考OT
 * @param  string $url 导航URL
 * @return string      解析后的url
 * @2015.4.5
 */
function get_nav_url($url){
	switch ($url) {
		case 'http://' === strtolower(substr($url, 0, 7)):
			break;
		case '#' === substr($url, 0, 1):
		case '':
			$url = 'javascript:void(0);';
			break;     
		default:
			$url = U($url);
			break;
	}
	return $url;
}

/**
 * 获取当前（active）导航树节点ID
 * @param  array $arrNav 导航树数组
 * @param  array $arrId  当前节点
 * @return array 		 当前节点数组
 * @author Buff
 * @2015.4.7
 */
function get_active_nav($arrNav, $arrId = ''){
	//已知子节点 遍历递归获取父节点
	if($arrId !== ''){
		foreach ($arrNav as $k => $v) {
			if(in_array($v['id'], $arrId)){
				return true;
			}

			if(is_array($v['children'])){
				if(get_active_nav($v['children'], $arrId) === true){
					$arrId[] = $v['id'];
					return $arrId;
				}
			}
		}
	}else{		//遍历递归获取最终子节点（当前页面）
		foreach ($arrNav as $k => $v) {
			if(strtolower(CONTROLLER_NAME . '/' . ACTION_NAME) === strtolower($v['url'])){
				return array($v['id']);
			}

			if(is_array($v['children'])){
				$arrId = get_active_nav($v['children']);
				if(is_array($arrId)){
					$arrId[] = $v['id'];
					return $arrId;
				}
			}
		}
	}
}