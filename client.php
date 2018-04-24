<?php  
  
$config = array(  
            'location' => 'http://localhost/webservice/service.php',  
            'uri' => 'myserver',  
            // 'login' => 'fdipzone',  
            // 'password' => '123456',  
            'trace' => true  
);  
  
try{  
  
    $auth = array('fdipzone', '654321');  
  
    // no wsdl  
    $client = new SOAPClient(null, $config);  
    $header = new SOAPHeader('myserver', 'auth', $auth, false, SOAP_ACTOR_NEXT);  
    $client->__setSoapHeaders(array($header));  
  
    $revstring = $client->revstring('123456');  
    $strtolink = $client->__soapCall('strtolink', array('http://blog.csdn.net/fdipzone', 'fdipzone blog', 1));  
    $uppcase = $client->__soapCall('uppcase', array('Hello World'));  
  
    echo $revstring.'<br>';  
    echo $strtolink.'<br>';  
    echo $uppcase.'<br>';  
  
}catch(SOAPFault $e){  
    echo $e->getMessage();  
}  
  