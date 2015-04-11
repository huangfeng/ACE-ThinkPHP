<?php
/**
 * 用户表模型
 */
namespace Home\Model;
use Think\Model;
class UserModel extends BaseModel{

	/**
	 * create执行顺序
	 * 字段映射 -> 检测字段 -> 自动验证 -> [令牌验证] -> 自动完成
	 */

	//字段映射
	protected $_map = array(
		'uname'		=> 'user_name',		//把表单中name映射到数据表的user_name字段
		'pwd'		=> 'password',
		);

	//自动验证
	protected $_validate = array(
		array('user_name', '4,30', '用户名长度在4~30个字符', self::EXITS_VALIDATE, 'length'),
		array('user_name', '', '用户名已存在', self::EXITS_VALIDATE, 'unique'),

		array('password', '6,30', '密码长度在6~30个字符', self::EXITS_VALIDATE, 'length'),
		);

	//自动完成
	protected $_auto = array(
		array('password', 'encryptPassword', self::MODEL_BOTH, 'callback'),
		);

	/**
	 * 密码加密
	 * @param  string $strPwd
	 * @return string
	 */
	public function encryptPassword($strPwd){
		return md5(C('ENCRPTY_PWD_SALT') . $strPwd);
	}

	public function login(){

	}

	public function register(){
		
	}

} 