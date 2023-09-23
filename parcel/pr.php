<?php

require "../connection.php";

  session_start();
    if(isset($_SESSION['shore'])){

        $admin=$_SESSION['shore'];

   
        }else{
             echo'<script>location.replace("login")</script>';
        }

if(isset($_POST['adminname'])){

	 $adminname = isset($_POST['adminname']) ? trim($_POST['adminname']) : '';
	$adminpassword = isset($_POST['adminpassword']) ? trim($_POST['adminpassword']) : '';


	if(empty($adminname)){
		  echo'<script>adminname.style.border="2px solid red";
		 function letlevelz(){
            if(adminname !==""){
        
                adminname.style.border="2px solid green";

            }
            
            else{
                adminname.style.border="2px solid red";
                 // addadd.val("check ur loacation....");
                addadd.innerHTML=HKHK;

        
            }
        };</script>';

	}elseif(empty($adminpassword)){

		  echo'<script>adminpassword.style.border="2px solid red";

	
		   function letlevel(){
            if(adminpassword !==""){
        
                adminpassword.style.border="2px solid green";

            }
            
            else{
                adminpassword.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}else{

		$query ="SELECT* FROM admin where adminname='$adminname' and adminpassword='$adminpassword' and status=1";
		$result=mysqli_query($conn,$query);
		$return = mysqli_num_rows($result);
		if($return){
			while($row=mysqli_fetch_assoc($result)){

					session_start();


					$_SESSION['shore'] = $row['adminname'];				
					if(isset($_SESSION['shore'])){

    echo'<script>location.replace("adview")</script>';
		}

			}

			
	}else{


		 echo'<script>
		  var showme=document.getElementById("showme")
		  showme.innerHTML="incorrect Password and username combination";

		  </script>';



	}


}

}




if(isset($_POST['sendername'])){

                	// echo '<script>alert("bood")</script>';                             

	 $sendername = isset($_POST['sendername']) ? trim($_POST['sendername']) : '';
	$senderphone = isset($_POST['senderphone']) ? trim($_POST['senderphone']) : '';
	$senderaddress = isset($_POST['senderaddress']) ? trim($_POST['senderaddress']) : '';
	$senderemail = isset($_POST['senderemail']) ? trim($_POST['senderemail']) : '';

	$recname = isset($_POST['recname']) ? trim($_POST['recname']) : '';
	$recemail = isset($_POST['recemail']) ? trim($_POST['recemail']) : '';
	$recphone = isset($_POST['recphone']) ? trim($_POST['recphone']) : '';
	$recaddress = isset($_POST['recaddress']) ? trim($_POST['recaddress']) : '';
	$origin = isset($_POST['origin']) ? trim($_POST['origin']) : '';
	$package = isset($_POST['package']) ? trim($_POST['package']) : '';

	$destination = isset($_POST['destination']) ? trim($_POST['destination']) : '';
	$carrier = isset($_POST['carrier']) ? trim($_POST['carrier']) : '';
	$weight = isset($_POST['weight']) ? trim($_POST['weight']) : '';
	$shipmode = isset($_POST['shipmode']) ? trim($_POST['shipmode']) : '';
	$product = isset($_POST['product']) ? trim($_POST['product']) : '';
	$qty = isset($_POST['qty']) ? trim($_POST['qty']) : '';

	$totalfreight = isset($_POST['totalfreight']) ? trim($_POST['totalfreight']) : '';
	$expdeldate = isset($_POST['expdeldate']) ? trim($_POST['expdeldate']) : '';
	$pickupdate = isset($_POST['pickupdate']) ? trim($_POST['pickupdate']) : '';
	 $pickuptime = isset($_POST['pickuptime']) ? trim($_POST['pickuptime']) : '';
	 $comment = isset($_POST['comment']) ? trim($_POST['comment']) : '';
	//$tracknum = isset($_POST['tracknum']) ? trim($_POST['tracknum']) : '';

$num = rand(765456353635, 6357487996353);
$re=rand(2349,2956);
	$tracknum = $num;

	$ref="rylexpc/bsc/idn/".$re;
	
	echo '<script> 
	
	 
	 

	;</script>';



	if(empty($sendername)){

		  echo'<script>sendername.style.border="2px solid red";


		 function letlevel1(){
            if(sendername !==""){
        
                sendername.style.border="2px solid green";

            }
            
            else{
                sendername.style.border="2px solid red";
                 // addadd.val("check ur loacation....");
                addadd.innerHTML="HKHK";

        
            }
        };</script>';

	}elseif(empty($senderemail)){

		  echo'<script>senderemail.style.border="2px solid red";

	
		   function letlevel2(){
            if(senderemail !==""){
        
                senderemail.style.border="2px solid green";

            }
            
            else{
                senderemail.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($senderphone)){

		  echo'<script>senderphone.style.border="2px solid red";

	
		   function letlevel3(){
            if(senderphone !==""){
        
                senderphone.style.border="2px solid green";

            }
            
            else{
                senderphone.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($senderaddress)){

		  echo'<script>senderaddress.style.border="2px solid red";

	
		   function letlevel4(){
            if(senderaddress !==""){
        
                senderaddress.style.border="2px solid green";

            }
            
            else{
                senderaddress.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($recname)){

		  echo'<script>recname.style.border="2px solid red";

	
		   function letlevel5(){
            if(recname !==""){
        
                recname.style.border="2px solid green";

            }
            
            else{
                recname.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($recemail)){

		  echo'<script>recemail.style.border="2px solid red";

	
		   function letlevel6(){
            if(recemail !==""){
        
                recemail.style.border="2px solid green";

            }
            
            else{
                recemail.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($recphone)){

		  echo'<script>recphone.style.border="2px solid red";

	
		   function letlevel7(){
            if(recphone !==""){
        
                recphone.style.border="2px solid green";

            }
            
            else{
                recphone.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($recaddress)){

		  echo'<script>recaddress.style.border="2px solid red";

	
		   function letlevel8(){
            if(recaddress !==""){
        
                recaddress.style.border="2px solid green";

            }
            
            else{
                recaddress.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';

        
	}elseif(empty($origin)){

		  echo'<script>origin.style.border="2px solid red";

	
		   function letlevel9(){
            if(origin !==""){
        
                origin.style.border="2px solid green";

            }
            
            else{
                origin.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($package)){

		  echo'<script>package.style.border="2px solid red";

	
		   function letlevel10(){
            if(package !==""){
        
                package.style.border="2px solid green";

            }
            
            else{
                package.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($destination)){

		  echo'<script>destination.style.border="2px solid red";

	
		   function letlevel()11{
            if(destination !==""){
        
                destination.style.border="2px solid green";

            }
            
            else{
                destination.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';

                     
	}elseif(empty($carrier)){

		  echo'<script>carrier.style.border="2px solid red";

	
		   function letlevel()12{
            if(carrier !==""){
        
                carrier.style.border="2px solid green";

            }
            
            else{
                carrier.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';

                     
	}elseif(empty($weight)){

		  echo'<script>weight.style.border="2px solid red";

	
		   function letlevel13(){
            if(weight !==""){
        
                weight.style.border="2px solid green";

            }
            
            else{
                weight.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($shipmode)){

		  echo'<script>shipmode.style.border="2px solid red";

	
		   function letlevel14(){
            if(shipmode !==""){
        
                shipmode.style.border="2px solid green";

            }
            
            else{
                shipmode.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
                                         
	}elseif(empty($product)){

		  echo'<script>product.style.border="2px solid red";

	
		   function letlevel15(){
            if(product !==""){
        
                product.style.border="2px solid green";

            }
            
            else{
                product.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($qty)){

		  echo'<script>qty.style.border="2px solid red";

	
		   function letlevel16(){
            if(qty !==""){
        
                qty.style.border="2px solid green";

            }
            
            else{
                qty.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($totalfreight)){

		  echo'<script>totalfreight.style.border="2px solid red";

	
		   function letlevel17(){
            if(totalfreight !==""){
        
                totalfreight.style.border="2px solid green";

            }
            
            else{
                totalfreight.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($expdeldate)){

		  echo'<script>expdeldate.style.border="2px solid red";

	
		   function letlevel18(){
            if(expdeldate !==""){
        
                expdeldate.style.border="2px solid green";

            }
            
            else{
                expdeldate.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';

	}elseif(empty($pickupdate)){

		  echo'<script>pickupdate.style.border="2px solid red";

	
		   function letlevel19(){
            if(pickupdate !==""){
        
                pickupdate.style.border="2px solid green";

            }
            
            else{
                pickupdate.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($pickuptime)){

		  echo'<script>pickuptime.style.border="2px solid red";

	
		   function letlevel20(){
            if(pickuptime !==""){
        
                pickuptime.style.border="2px solid green";

            }
            
            else{
                pickuptime.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($comment)){

		  echo'<script>comment.style.border="2px solid red";

	
		   function letlevel21(){
            if(comment !==""){
        
                comment.style.border="2px solid green";

            }
            
            else{
                comment.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}else{
			// echo'<script>
		
		 //  alert("dodne");

		 //  </script>';
		
		$address1=base64_decode($recaddress);
		$address2=base64_decode($senderaddress);
		$comment2=base64_decode($comment);

		$enter="INSERT INTO consignment (adminname,sendername,senderemail,senderphone,senderaddress,recname,recemail,recphone,recaddress,origin,package,destination,carrier,weight,shipment_mode,product,qty,total_freight,delivery_date,pick_up_date,pick_up_time,comment,tracknumber,refnumber) 
		values('$admin','$sendername','$senderemail','$senderphone','$address2','$recname','$recemail','$recphone','$address1','$origin','$package','$destination','$carrier','$weight','$shipmode','$product','$qty','$totalfreight','$expdeldate','$pickupdate','$pickuptime','$comment2','$tracknum','$ref')";

		$result1=mysqli_query($conn,$enter);

		// $enterloc ="INSERT INTO clocation (tracknumber) values('$tracknum')";
		// $enterst=mysqli_query($conn,$enterloc);
		
		if($result1){

			echo '<script> 
			 $("#sendername").val("");
			 $("#senderemail").val("");
			 $("#senderphone").val("");
			 $("#senderaddress").val("");
			 $("#recname").val("");
			 $("#recemail").val("");
			 $("#recphone").val("");
			 $("#recaddress").val("");
			 $("#origin").val("");
			 $("#package").val("");
			 $("#destination").val("");
			 $("#carrier").val("");
			 $("#weight").val("");
			 $("#shipmode").val("");
			 $("#product").val("");
			 $("#qty").val("");
			 $("#totalfreight").val("");
			 $("#expdeldate").val("");
			 $("#pickupdate").val("");
			 $("#pickuptime").val("");
			 $("#comment").val("");
			 $("#enterdetails").val("ADDED");
		 ;</script>';
		
			echo "TRACK NUMBER IS: ".$tracknum;



			
	}else{


		 echo"ee". mysqli_error($conn);



	}


}

}


if(isset($_POST['enterlocation'])){
	 $enterlocation = isset($_POST['enterlocation']) ? trim($_POST['enterlocation']) : '';

	$loctracknum = isset($_POST['loctracknum']) ? trim($_POST['loctracknum']) : '';

if(empty($enterlocation)){
		  echo'<script>enterlocation.style.border="2px solid red";
		 function history1(){
            if(enterlocation !==""){
        
                enterlocation.style.border="2px solid green";

            }
            
            else{
                enterlocation.style.border="2px solid red";
                 // addadd.val("check ur loacation....");
                addadd.innerHTML=HKHK;

        
            }
        };</script>';

	}else{

     


	$upstatus = "UPDATE clocation set location='$enterlocation' where tracknumber='".$loctracknum."'";

		$rstuploc=mysqli_query($conn,$upstatus);

		if($rstuploc){

					echo '<script> 
			 
			 $("#enterlocation").val("");
			 $("#locbtn").val("SAVED");
		 ;</script>';
		}
	}

}

// updateing track history


if(isset($_POST['hisid'])){
	 $hisid = isset($_POST['hisid']) ? trim($_POST['hisid']) : '';

	$hisremark = isset($_POST['hisremark']) ? trim($_POST['hisremark']) : '';

	$hisstatus = isset($_POST['hisstatus']) ? trim($_POST['hisstatus']) : '';

	$hislocation = isset($_POST['hislocation']) ? trim($_POST['hislocation']) : '';

	$hisdate = isset($_POST['hisdate']) ? trim($_POST['hisdate']) : '';
	$histime = isset($_POST['histime']) ? trim($_POST['histime']) : '';


$uphis="UPDATE history SET hisdate='$hisdate',hislocation='$hislocation',hisstatus='$hisstatus',hisremark='$hisremark',histime='$histime' where id = '".$hisid."'";

$uprst=mysqli_query($conn,$uphis);
if($uprst){
	echo '<script>alert("updated")</script>';
}
}







if(isset($_POST['histracknum'])){
	 $histracknum = isset($_POST['histracknum']) ? trim($_POST['histracknum']) : '';

	$hisremark = isset($_POST['hisremark']) ? trim($_POST['hisremark']) : '';

	$hisstatus = isset($_POST['hisstatus']) ? trim($_POST['hisstatus']) : '';

	$hislocation = isset($_POST['hislocation']) ? trim($_POST['hislocation']) : '';

	$hisdate = isset($_POST['hisdate']) ? trim($_POST['hisdate']) : '';
	$histime = isset($_POST['histime']) ? trim($_POST['histime']) : '';



	if(empty($hisdate)){
		  echo'<script>hisdate.style.border="2px solid red";
		 function history1(){
            if(hisdate !==""){
        
                hisdate.style.border="2px solid green";

            }
            
            else{
                hisdate.style.border="2px solid red";
                 // addadd.val("check ur loacation....");
                addadd.innerHTML=HKHK;

        
            }
        };</script>';

	}elseif(empty($histime)){
		  echo'<script>histime.style.border="2px solid red";
		 function history5(){
            if(histime !==""){
        
                histime.style.border="2px solid green";

            }
            
            else{
                histime.style.border="2px solid red";
                 // addadd.val("check ur loacation....");
                addadd.innerHTML=HKHK;

        
            }
        };</script>';

	}

	elseif(empty($hislocation)){

		  echo'<script>hislocation.style.border="2px solid red";

	
		   function history2(){
            if(hislocation !==""){
        
                hislocation.style.border="2px solid green";

            }
            
            else{
                hislocation.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($hisstatus)){

		  echo'<script>hisstatus.style.border="2px solid red";

	
		   function history3(){
            if(hisstatus !==""){
        
                hisstatus.style.border="2px solid green";

            }
            
            else{
                hisstatus.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($hisremark)){

		  echo'<script>hisremark.style.border="2px solid red";

	
		   function history4(){
            if(hisremark !==""){
        
                hisremark.style.border="2px solid green";

            }
            
            else{
                hisremark.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}else{


	$enterhis="INSERT INTO history (hisdate,hislocation,hisstatus,hisremark,histracknum,histime) values('$hisdate','$hislocation','$hisstatus','$hisremark','$histracknum','$histime')";

	$rst=mysqli_query($conn,$enterhis);

	if($rst){
		$upstatus = "UPDATE consignment set comment='$hisstatus' where tracknumber='".$histracknum."'";

		$rstup=mysqli_query($conn,$upstatus);

		if($rstup){

					echo '<script> 
			 $("#hisdate").val("");
			 $("#histime").val("");
			 $("#hislocation").val("");
			 $("#hisstatus").val("");
			 $("#hisremark").val("");
			 $("#enterhistory").val("SAVED");
		 ;</script>';
		}

	}


}

}

if(isset($_POST['dashid'])){
	 $dashid = isset($_POST['dashid']) ? trim($_POST['dashid']) : '';

	 $delhis = "UPDATE history set status=0 where id='".$dashid."'";

		$delhisrstup=mysqli_query($conn,$delhis);

	 }



	 if(isset($_POST['companyemaildir'])){

	 $companyemaildir = isset($_POST['companyemaildir']) ? trim($_POST['companyemaildir']) : '';

	 $contactquery = "UPDATE contact set contactemail='$companyemaildir'";

		$contactresult=mysqli_query($conn,$contactquery);

		if($contactresult){

			echo '<script> 
			 save1.style.background="lightblue";
			 $("#contactemail").val("");
			 $("#save1").val("SAVED");
		 ;</script>';
		}

	 }


	  if(isset($_POST['contactphone'])){

	 $contactphone = isset($_POST['contactphone']) ? trim($_POST['contactphone']) : '';

	 $contactquery1 = "UPDATE contact set contactphone='$contactphone'";

		$contactresult1=mysqli_query($conn,$contactquery1);

		if($contactresult1){

				echo '<script>
			
			 save2.style.background="lightblue";
			 $("#contactphone").val("");
			 $("#save2").val("SAVED");
		 ;</script>';


		}

	 }
	 
	 
	 	 if(isset($_POST['deltrack'])){
echo '<script>alert("sss")</script>';

	 $deltrack = isset($_POST['deltrack']) ? trim($_POST['deltrack']) : '';
	 $contactquery2 = "UPDATE freight set status=1 where id='$deltraCK'";

		$contactresult2=mysqli_query($conn,$contactquery2);


	 }



	 if(isset($_POST['paidby'])){
	 $paidby = isset($_POST['paidby']) ? trim($_POST['paidby']) : '';
	 $paidamount = isset($_POST['paidamount']) ? trim($_POST['paidamount']) : '';
	 $freightcomp = isset($_POST['freightcomp']) ? trim($_POST['freightcomp']) : '';
	 $trackid = isset($_POST['trackid']) ? trim($_POST['trackid']) : '';


	 $in="INSERT INTO freight (paidby,paidamount,freightcomp,trackid) values('$paidby','$paidamount','$freightcomp','$trackid')";



		$contactresult2=mysqli_query($conn,$in);

		if($contactresult2){ ?>

			<table class="table">
				<tr>
					
					<th>freight</th>
					<th>Amount</th>
					<th>Paid</th>
				</tr>
				<?php 
				$ges="SELECT* FROM freight where trackid='$trackid' and status=0";
				$rst=mysqli_query($conn,$ges);
				$rtn=mysqli_num_rows($rst);
				if($rtn){
					while($row=mysqli_fetch_assoc($rst)){
						$freightcomp=$row['freightcomp'];
						$paidamount=$row['paidamount'];
						$paidby=$row['paidby']; ?>

							<tr>
								<td><?php echo $freightcomp ?></td>
								<td><?php echo $paidamount ?></td>
								<td><?php echo $paidby ?></td>
							</tr>


					<?php }
				}
			?>

				
			</table>





			
		<?php }


	 }


	  if(isset($_POST['contactlocation'])){
	 $contactlocation = isset($_POST['contactlocation']) ? trim($_POST['contactlocation']) : '';

	 $contactquery2 = "UPDATE contact set contactoffice='$contactlocation'";

		$contactresult2=mysqli_query($conn,$contactquery2);

		if($contactresult2){

			echo '<script> 
			 save3.style.background="lightblue";
			 $("#contactlocation").val("");
			 $("#save3").val("SAVED");
		 ;</script>';
		}


	 }

	 if(isset($_POST['contactdubai'])){
	 $contactdubai = isset($_POST['contactdubai']) ? trim($_POST['contactdubai']) : '';

	 $contactquery2 = "UPDATE contact set contactoffice2='$contactdubai'";

		$contactresult2=mysqli_query($conn,$contactquery2);

		if($contactresult2){

			echo '<script> 
			 save3.style.background="lightblue";
			 $("#contactdubai").val("");
			 $("#save4").val("SAVED");
		 ;</script>';
		}


	 }


	 if(isset($_POST['contactmalaysia'])){
	 $contactmalaysia = isset($_POST['contactmalaysia']) ? trim($_POST['contactmalaysia']) : '';

	 $contactquery2 = "UPDATE contact set contactoffice3='$contactmalaysia'";

		$contactresult2=mysqli_query($conn,$contactquery2);

		if($contactresult2){

			echo '<script> 
			 save3.style.background="lightblue";
			 $("#contactmalaysia").val("");
			 $("#save5").val("SAVED");
		 ;</script>';
		}


	 }



	   if(isset($_POST['newadminname'])){
	 $newadminname = isset($_POST['newadminname']) ? trim($_POST['newadminname']) : '';
	 $newadminpassword = isset($_POST['newadminpassword']) ? trim($_POST['newadminpassword']) : '';



	 if(empty($newadminname)){

		  echo'<script>newadminname.style.border="2px solid red";
		   $("#adminenter1").val("REGISTER");

	
		   function let1(){
            if(newadminname !==""){
        
                newadminname.style.border="2px solid green";

            }
            
            else{
                newadminname.style.border="2px solid red";
                 addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($newadminpassword)){

		  echo'<script>newadminpassword.style.border="2px solid red";
		   $("#adminenter1").val("REGISTER");

	
		   function let2(){
            if(newadminpassword !==""){
        
                newadminpassword.style.border="2px solid green";
               adminenter1.val("REGISTER");

            }
            
            else{
                newadminpassword.style.border="2px solid red";
                 adminenter1.val("REGISTER");
        
            }
        };</script>';
	}else{

	 $checking="SELECT* FROM admin where adminname='$newadminname' ";

	 $checkrst=mysqli_query($conn,$checking);
	 $checkrtn=mysqli_num_rows($checkrst);
	 if($checkrtn){

	 	echo '<script> 
			
			
			 $("#adminenter1").val("REGISTER");
		 ;</script>';

		 echo $newadminname." already existing";


	 }else{

	 $contactquery2 = "INSERT INTO admin (adminname,adminpassword)  values('$newadminname','$newadminpassword')";

		$contactresult2=mysqli_query($conn,$contactquery2);

		if($contactresult2){

			echo '<script> 
			 adminenter1.style.background="green";
			 $("#newadminname").val("");
			 $("#newadminpassword").val("");
			 $("#adminenter1").val("REGISTERED");
		 ;</script>';
		}
	}

}
	 }

	 if(isset($_POST['viewid'])){
	 $viewid = isset($_POST['viewid']) ? trim($_POST['viewid']) : '';

	 $delhisviewid = "UPDATE consigne set status=0 where id='".$viewid."'";

		$delhisrstupviewid=mysqli_query($conn,$delhisviewid);

	 }
	 
	 	 if(isset($_POST['retrieve'])){
	 $retrieve = isset($_POST['retrieve']) ? trim($_POST['retrieve']) : '';

	 $delhisviewid = "UPDATE consigne set status=1 where id='".$retrieve."'";

		$delhisrstupviewid=mysqli_query($conn,$delhisviewid);

	 }

	  if(isset($_POST['adminid'])){

	   $adminid = isset($_POST['adminid']) ? trim($_POST['adminid']) : '';

	 $delhisadminid = "UPDATE admin set status=0 where id='".$adminid."'";

		$delhisrstupviewid=mysqli_query($conn,$delhisadminid);

	 }

       if(isset($_POST['datetrack'])){

       $datetrack = isset($_POST['datetrack']) ? trim($_POST['datetrack']) : '';
       $dateid = isset($_POST['dateid']) ? trim($_POST['dateid']) : '';

     $d = "UPDATE consignment set receiptdate='$dateid' where tracknumber='".$datetrack."'";

        $delhisrstupviewid=mysqli_query($conn,$d);

       echo "DATE: ".$dateid;

     }


     if(isset($_POST['msgid'])){

       $msgid = isset($_POST['msgid']) ? trim($_POST['msgid']) : '';
       // $dateid = isset($_POST['dateid']) ? trim($_POST['dateid']) : '';

     $d = "UPDATE contactus set status=2 where id='".$msgid."'";

        $delhisrstupviewid=mysqli_query($conn,$d);

           $checkingmsg="SELECT* FROM contactus where status=1 ";

     $checkmsg=mysqli_query($conn,$checkingmsg);
     echo $checker=mysqli_num_rows($checkmsg);

       // echo "DATE: ".$dateid;

     }

?>