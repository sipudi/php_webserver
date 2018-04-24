<?php
    ini_set('soap.wsdl_cache_enabled', "0"); //关闭wsdl缓存
    
    date_default_timezone_set("Asia/Shanghai");
 
    $soap = new SoapClient('http://localhost/webservice2/service.php?wsdl');
    echo $soap->strtolink('http://www.baidu.com')."<br/>";
    echo $soap->add(28, 100)."<br/>";
    echo $soap->__soapCall('add',array(28,200))."<br/>";
    //或这样调用
    echo $soap->__Call('add',array(28,300))."<br/>";
    echo date('Y-m-d H:i:s', time());
 
?>