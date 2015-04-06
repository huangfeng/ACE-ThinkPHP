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

	foreach ($arrNav as $k => $v) {
		$html .= '<li class="hover">';
		//判断是否当前页
		//TODO: 一级导航添加active
		// if(strtolower(CONTROLLER_NAME . '/' . ACTION_NAME) == strtolower($v['url'])){
		// 	$html .= '<li class="hover active">';
		// }

		if(is_array($v['children'])){
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