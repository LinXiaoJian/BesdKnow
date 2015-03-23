<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright		Copyright (c) 2008 - 2014, EllisLab, Inc.
 * @copyright		Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Session Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Sessions
 * @author		EllisLab Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/sessions.html
 */

class CI_Session {

	private static $key_userdata = '#userdata+-';
	private static $key_flashmem = '#flashmem+-';

	function __construct(){
		if (!headers_sent()){ session_start();}
	}

	function __destruct(){
		// 析构函数,删除 flashmem
		if (isset($_SESSION[self::$key_flashmem])){
			unset($_SESSION[self::$key_flashmem]);
		}
	}

	function userdata($item){
		$D = isset($_SESSION[self::$key_userdata]) ? $_SESSION[self::$key_userdata] : FALSE;
		return $D && is_array($D) && isset($D[$item]) ? $D[$item] : FALSE;
	}

	private function init_userdata(){
		if (isset($_SESSION[self::$key_userdata]) && is_array($_SESSION[self::$key_userdata]))
			return true;
		$_SESSION[self::$key_userdata] = array();
	}

	function set_userdata($newdata = array(), $newval = ''){

		$this->init_userdata();

		if (is_string($newdata))
		{
			$newdata = array($newdata => $newval);
		}

		if (count($newdata) > 0)
		{
			foreach ($newdata as $key => $val)
			{
				$_SESSION[self::$key_userdata][$key] = $val;
			}
		}
	}

	function unset_userdata($newdata = array())
	{

		$this->init_userdata();

		if (is_string($newdata))
		{
			$newdata = array($newdata => '');
		}

		if (count($newdata) > 0)
		{
			foreach ($newdata as $key => $val)
			{
				unset($_SESSION[self::$key_userdata][$key]);
			}
		}
	}

	function all_userdata()
	{
		return isset($_SESSION[self::$key_userdata]) ? $_SESSION[self::$key_userdata]:FALSE;
	}

	function sess_destroy(){
//      THROW NEW EXCEPTION('D');
		session_destroy();
	}

	private function init_flashdata(){
		if (isset($_SESSION[self::$key_flashmem]) && is_array($_SESSION[self::$key_flashmem]))
			return true;
		$_SESSION[self::$key_flashmem] = array();
	}

	function set_flashdata($newdata = array(), $newval = '')
	{
		$this->init_flashdata();

		if (is_string($newdata))
		{
			$newdata = array($newdata => $newval);
		}

		if (count($newdata) > 0)
		{
			foreach ($newdata as $key => $val)
			{
				$_SESSION[self::$key_flashmem][$key] = $val;
			}
		}
	}

	function flashdata($item)
	{
		$D = isset($_SESSION[self::$key_flashmem]) ? $_SESSION[self::$key_flashmem] : FALSE;
		return $D && is_array($D) && isset($D[$item]) ? $D[$item] : FALSE;
	}

}