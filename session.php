<?php
/**
 * Created by PhpStorm.
 * User: TF
 * Date: 2019/10/18
 * Time: 21:15
 */
	session_start();

	$_SESSION['name']="admin";
	$_SESSION['password']=123456;
	echo "所在文件：".$_SERVER["PHP_SELF"]."<br/>";
	echo "用户名：{$_SESSION['name']} <br/>密码：{$_SESSION['password']}";
?>