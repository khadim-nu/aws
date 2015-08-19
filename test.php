<?php
// documentaions http://www.orderingdisorder.com/aws/route-53/
function get_served(){
	require_once('r53.php');
	$access_key='AKIAJCE4ZDY4NPCMCZMA';
	$secret_key='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';
	$r53 = new Route53($access_key, $secret_key);

//print_r('createHostedZone<br>');

//$result = $r53->createHostedZone('google.com', 'abclllllldef', 'no cooment here');
//var_dump($result);

	$result=$r53->listHostedZones();
	$result=$result['HostedZone'];

	$ns_arr=array();
	foreach($result as $zone){
		
		if($zone['Name']==$_POST['domain']."."){
			$id=$zone['Id'];
			$hosted_zone=$r53->getHostedZone($id);
			$name_servers=$hosted_zone['NameServers'];
			$ns_arr['Id']=$zone['Id'];
			$ns_arr['name']=$zone['Name'];
			$ns_arr['ns']=$name_servers;
			break;
		}

	}

	if(!empty($ns_arr)){
		echo json_encode(array("data"=>$ns_arr,"msg"=>"successfull!","status"=>true));
	}
	
	else{
		echo json_encode(array("data"=>array($_POST['domain']),"msg"=>"No data found!","status"=>true));
	}


// print_r('getHostedZone<br>');
// $result=$r53->getHostedZone($id);
 // print_r($result);
 // $hostedzone=$result['HostedZone'];  print_r($hostedzone);
 // $name_servers=$result['NameServers']; print_r($name_servers);



//var_dump($r53->getChange('/change/CTGQ8LFNF8MB3'));



// print_r('listResourceRecordSets<br>');
//  print_r($r53->listResourceRecordSets('/hostedzone/ZTGQ8LFNF8MB3'));


// //print_r($r53->deleteHostedZone('/hostedzone/Y1PA6795UKMFR1'));
// print_r('get change<br>');
// print_r($r53->getChange('/change/ZTGQ8LFNF8MB3'));

}
get_served();
