<?php
require "../connection.php";

  session_start();
    if(isset($_SESSION['shore'])){

        $admin=$_SESSION['shore'];

   
        }else{
             echo'<script>location.replace("login")</script>';
        }



if(isset($_POST['name'])){
          // echo'<script>alert("login")</script>';                  

	 $trackid = isset($_POST['trackid']) ? trim($_POST['trackid']) : '';
	 $name = isset($_POST['name']) ? trim($_POST['name']) : '';
	$shipper = isset($_POST['shipper']) ? trim($_POST['shipper']) : '';
	$consignee = isset($_POST['consignee']) ? trim($_POST['consignee']) : '';
	$references = isset($_POST['references']) ? trim($_POST['references']) : '';

	$party1 = isset($_POST['party1']) ? trim($_POST['party1']) : '';
	$party2 = isset($_POST['party2']) ? trim($_POST['party2']) : '';
	$contactemail = isset($_POST['contactemail']) ? trim($_POST['contactemail']) : '';
	$placeofissue = isset($_POST['placeofissue']) ? trim($_POST['placeofissue']) : '';
	$vessel = isset($_POST['vessel']) ? trim($_POST['vessel']) : '';
	$voyagenumber = isset($_POST['voyagenumber']) ? trim($_POST['voyagenumber']) : '';

	$portofload = isset($_POST['portofload']) ? trim($_POST['portofload']) : '';
	$portofdischarge = isset($_POST['portofdischarge']) ? trim($_POST['portofdischarge']) : '';
	$placeofreceipt = isset($_POST['placeofreceipt']) ? trim($_POST['placeofreceipt']) : '';
	$placeofdeliv = isset($_POST['placeofdeliv']) ? trim($_POST['placeofdeliv']) : '';
	$containernumber = isset($_POST['containernumber']) ? trim($_POST['containernumber']) : '';
	$sealnumber = isset($_POST['sealnumber']) ? trim($_POST['sealnumber']) : '';

	$otherseal = isset($_POST['otherseal']) ? trim($_POST['otherseal']) : '';
	$containersize = isset($_POST['containersize']) ? trim($_POST['containersize']) : '';
	$numberofpackage = isset($_POST['numberofpackage']) ? trim($_POST['numberofpackage']) : '';
	$cargodescript = isset($_POST['cargodescript']) ? trim($_POST['cargodescript']) : '';
	$weight = isset($_POST['weight']) ? trim($_POST['weight']) : '';
	$volume = isset($_POST['volume']) ? trim($_POST['volume']) : '';

	$tfreight = isset($_POST['tfreight']) ? trim($_POST['tfreight']) : '';
	$expdel = isset($_POST['expdel']) ? trim($_POST['expdel']) : '';
	$deptime = isset($_POST['deptime']) ? trim($_POST['deptime']) : '';
	$picktime = isset($_POST['picktime']) ? trim($_POST['picktime']) : '';
	$comment = isset($_POST['comment']) ? trim($_POST['comment']) : '';
	$pickdate = isset($_POST['pickdate']) ? trim($_POST['pickdate']) : '';
	$recemail = isset($_POST['recemail']) ? trim($_POST['recemail']) : '';



	$comment2=base64_encode($comment);


	// numberofdoc,shippeddoc,waybill,receiveddoc , receivedwaybill



$updater="UPDATE consigne set name='$name',shipper='$shipper',consignee='$consignee',refowner='$references',notifyparty1='$party1',notifyparty2='$party2',contactemail='$contactemail',placeofissue='$placeofissue',vessel='$vessel',voyagenumber='$voyagenumber',portofload='$portofload',portofdischarge='$portofdischarge',placeofreceipt='$placeofreceipt',placeofdelivery='$placeofdeliv',containernumber='$containernumber',sealnumber='$sealnumber',othersealnumber='$otherseal',weight='$weight',volume='$volume',containertype='$containersize',cargodiscription='$cargodescript',numberofpackage='$numberofpackage',tfreight='$tfreight',expdel='$expdel',deptime='$deptime',picktime='$picktime',comment='$comment2',pickdate='$pickdate',recemail='$recemail' where tracknumber='".$trackid."' ";

		$result1=mysqli_query($conn,$updater);

		
		
		if($result1){

	
			echo $trackid. " updated successfully";



			
	}else{


		 echo "error occure". mysqli_error($conn);



	}




}



?>