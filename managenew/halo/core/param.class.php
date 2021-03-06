<?php
/**
 *  param.class.php	参数处理类
 *
 * @copyright			(C) 2010-2012
 */
class param {

	//路由配置
	private $route_config = '';
	
	public function __construct() {
		if(!get_magic_quotes_gpc()) {
			$_POST   = ext_addslashes($_POST);
			$_GET    = ext_addslashes($_GET);
			$_COOKIE = ext_addslashes($_COOKIE);
		}
		$this->route_config = common::load_config('route', WEB_HOST) ? common::load_config('route', WEB_HOST) : common::load_config('route', 'default');
		if(isset($_GET['page'])) {
			$_GET['page'] = max(intval($_GET['page']),1);
			$_GET['page'] = min($_GET['page'],1000000000);
		}
		return true;
	}

	/**
	 * 获取模型
	 */
	public function route_m() {
		$m = isset($_GET['m']) && !empty($_GET['m']) ? $_GET['m'] : (isset($_POST['m']) && !empty($_POST['m']) ? $_POST['m'] : '');
		$m = $this->safe_deal($m);
		if (empty($m)) {
			return $this->route_config['m'];
		} else {
			return $m;
		}
	}

	/**
	 * 获取控制器
	 */
	public function route_c() {
		$c = isset($_GET['c']) && !empty($_GET['c']) ? $_GET['c'] : (isset($_POST['c']) && !empty($_POST['c']) ? $_POST['c'] : '');
		$c = $this->safe_deal($c);
		if (empty($c)) {
			return $this->route_config['c'];
		} else {
			return $c;
		}
	}

	/**
	 * 获取事件
	 */
	public function route_v() {
		$v = isset($_GET['v']) && !empty($_GET['v']) ? $_GET['v'] : (isset($_POST['v']) && !empty($_POST['v']) ? $_POST['v'] : '');
		$v = $this->safe_deal($v);
		if (empty($v)) {
			return $this->route_config['v'];
		} else {
			return $v;
		}
	}

	/**
	 * 设置 cookie
	 * @param string $var     变量名
	 * @param string $value   变量值
	 * @param int $time    过期时间
	 */
	public static function set_cookie($var, $value = '', $time = 0) {
		$time = $time > 0 ? $time : ($value == '' ? TIME - 3600 : 0);
		$s = $_SERVER['SERVER_PORT'] == '443' ? 1 : 0;
		$var = common::load_config('system','cookie_pre').$var;
		$_COOKIE[$var] = $value;
		if (is_array($value)) {
			foreach($value as $k=>$v) {
				setcookie($var.'['.$k.']', auth($v, 'ENCODE'), $time, common::load_config('system','cookie_path'), common::load_config('system','cookie_domain'), $s);
			}
		} else {
			setcookie($var, auth($value, 'ENCODE'), $time, common::load_config('system','cookie_path'), common::load_config('system','cookie_domain'), $s);
		}
	}

	/**
	 * 获取通过 set_cookie 设置的 cookie 变量 
	 * @param string $var 变量名
	 * @param string $default 默认值 
	 * @return mixed 成功则返回cookie 值，否则返回 false
	 */
	public static function get_cookie($var, $default = '') {
		$var = common::load_config('system','cookie_pre').$var;
		return isset($_COOKIE[$var]) ? auth($_COOKIE[$var], 'DECODE') : $default;
	}

	/**
	 * 安全处理函数
	 * 处理m,a,c
	 */
	private function safe_deal($str) {
		return str_replace(array('/', '.'), '', $str);
	}
}
?>