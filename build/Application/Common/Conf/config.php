<?php
return array(
	//'配置项'=>'配置值'

	/* URL配置 */
	'URL_MODEL'			=> 3,		//URL模式

	/* 分页配置 */
	'VAR_PAGE'			=> '_p',	//分页参数名称
	'VAR_ROWS'			=> 2,		//分页默认条数
	'ROWS_OPTIONS'		=> array(10, 20, 30, 50, 100),		//分页条数下拉框

	/* TP方法配置 */
	'READ_DATA_MAP'		=> true,	//获取数据时自动处理字段映射

	/* 加密配置 */
	'ENCRPTY_PWD_SALT'		=> '!@#$WTF?...',	//盐值

);