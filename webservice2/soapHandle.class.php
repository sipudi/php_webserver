<?php
 
	class soapHandle{
	 
	    public function strtolink($url=''){
	        return sprintf('<a href="%s">%s</a>', $url, $url);
	    }
	 
	    public function add($a=1, $b=2)
	    {
	        return $a+$b;
	    }

	    // public function auth($auth)
	    // {
	    // 	if ($auth->login!="admin" || $auth->password!="123456" ) {
	    // 		throw new SoapFault("1", "NO PERMISSION!");
	    // 	}
	    // }
	 
	}
 
?>