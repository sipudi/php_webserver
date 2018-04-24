<?php
 
	include_once("soapHandle.class.php");

	$opt=[
		'uri' => 'myserver',
		'soap_version' => SOAP_1_2
	];

	class Auth
	{
		public $login="admin";
		public $password="123456";
	}

	$server = new SoapServer('soapHandle.wsdl', $opt); ##此处的Service.wsdl文件是上面生成的
	$server->setClass("soapHandle"); //注册Service类的所有方法
	$header=new SoapHeader("http://192.168.31.70:80/webservice2/service.php","auth",new Auth);
	$server->addSoapHeader($header);
	$server->handle(); //处理请求
 
?>