<?php

class control
{
	 function __construct()
	 {
		 $url=$_SERVER['PATH_INFO'];
		 
		 switch($url)
		 {
			 case '/admin':
			 include_once('index.php');
			 break;
			 
			 case '/dashboard':
			 include_once('dashboard.php');
			 break;
			 
			 case '/category':
			 include_once('add_cate.php');
			 break;
			 
			 case '/manage_cate':
			 include_once('manage_cate.php');
			 break;
			  
			 case '/add_prod':
			 include_once('add_prod.php');
			 break;
			 
			 case '/manage_prod':
			 include_once('manage_prod.php');
			 break;
			 
			 case '/add_emp':
			 include_once('add_emp.php');
			 break;
			 
			 case '/manage_emp':
			 include_once('manage_emp.php');
			 break;
			 
			 case '/manage_feed':
			 include_once('manage_feed.php');
			 break;
			 
			 case '/customer':
			 include_once('manage_cus.php');
			 break;
			 
			 default:
			 include_once('pagenotfound.php');
			 break;
		 }
	 }
}

$obj=new control;
?>