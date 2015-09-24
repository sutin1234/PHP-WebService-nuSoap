<?php

	require_once("nusoap-0.9.5/lib/nusoap.php");
	function getValue($rpcNumber,$inStr){
		
		$client = new nusoap_client("http://localhost/Webservice/service.asmx?wsdl",true);
		$params = array(
					"rpcNumber" => $rpcNumber,
					"inStr" => $inStr
				);
		$data = $client->call("CallTHI",$params);
		print_r($data);
		echo "<hr />";
	}
	
	if(!empty($_POST)){
		getValue($_POST['rpcNumber'],$_POST['inStr']);
	}
?>
<form method="post">
	rpcNumber : <input type="text" required name="rpcNumber"> <br />
	inStr : <input type="text" required name="inStr"> <br />
	<input type="submit" value="submit"/>
</form>