<?php

namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller {

	public function index() {
		layout(false);
		$this->display();
	}

	public function login() {
		if (!IS_POST) {
			$this->error('您的操作方式不正确');
		}
        
        layout(false);

		// 获得登陆信息
		$username = I('post.username');
		$password = I('post.password', '', 'md5');

		if (!isset($username, $password)) {
			$this->error('用户名和密码都不能为空，请重新输入');
		}

		$adminUser = C('ADMIN_USER');
		if($adminUser['username']!=$username||$adminUser['password']!=$password)
			$this->error('对不起，账号或密码不正确');

		// 走到这里，说明登陆成功了
		// 构造一个person
		//
		$ip = get_client_ip();

		session('_adminUser', $adminUser);

		$this->redirect('home/index',array(),2,'登录成功，正在进入系统...');

	}

	public function logout() {
		// 清除session
		//
		session(null);

		$this->redirect('login/index');
	}
}