   <?php 
   require "../connection.php";
   session_start();
    if(isset($_SESSION['shore'])){

        $admin=$_SESSION['shore'];

   
        }else{
             echo'<script>location.replace("login")</script>';
        }
        


          $checkingmsg="SELECT* FROM contactus where status=1 ";

     $checkmsg=mysqli_query($conn,$checkingmsg);
     $checker=mysqli_num_rows($checkmsg);

        ?>



        <?php
$getcontact = "SELECT* from contact";
$cresult=mysqli_query($conn,$getcontact);
$creturn=mysqli_num_rows($cresult);
if($creturn){
    while($row=mysqli_fetch_assoc($cresult)){
         $email = $row['contactemail'];
         $phone = $row['contactphone'];
         $office = $row['contactoffice'];
    }
}
 ?>
<!DOCTYPE html>
<head>
 <title>Parcel Care Express Courier</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="DARMA COURIER SERVICES" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="web/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="web/css/style.css" rel='stylesheet' type='text/css' />
<link href="web/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="web/css/font.css" type="text/css"/>
<link href="web/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="web/css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="web/css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="web/js/jquery2.0.3.min.js"></script>
<script src="web/js/raphael-min.js"></script>
<script src="web/js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<?php require "hd.php" ?>
<!--header end-->
<!--sidebar start-->
<?php require "aside.php";

if(isset($_GET['trk'])){
	$trk=$_GET['trk'];
    	$tracknum=base64_decode("$trk"); 

$details="SELECT* from consigne where tracknumber= '$tracknum'";

$result=mysqli_query($conn,$details);
$return=mysqli_num_rows($result);
if($return){
	while($row=mysqli_fetch_assoc($result)){
		$name=$row['name'];
		$tracknumber=$row['tracknumber'];
		$refnumber=$row['refnumber'];
		$shipper=$row['shipper'];
		$companyref=$row['companyref'];
		$consignee=$row['consignee'];
		$refowner=$row['refowner'];
		$notifyparty1=$row['notifyparty1'];
		$notifyparty2=$row['notifyparty2'];
		$contactemail=$row['contactemail'];
		$placeofissue=$row['placeofissue'];
		$placeofissue=$row['placeofissue'];
		$vessel=$row['vessel'];
		$voyagenumber=$row['voyagenumber'];
		$portofload=$row['portofload'];
		$portofdischarge=$row['portofdischarge'];
		$placeofreceipt=$row['placeofreceipt'];
		$placeofdelivery=$row['placeofdelivery'];
		$containernumber=$row['containernumber'];
		$sealnumber=$row['sealnumber'];
		$othersealnumber=$row['othersealnumber'];
		$weight=$row['weight'];
		$volume=$row['volume'];
		$containertype=$row['containertype'];
		$cargodiscription=$row['cargodiscription'];
		$numberofpackage=$row['numberofpackage'];
		$sednumber=$row['sednumber'];
		$scaccode=$row['scaccode'];
                     
                       

		$tfreight=$row['tfreight'];
		$expdel=$row['expdel'];
		$deptime=$row['deptime'];
		$picktime=$row['picktime'];
		$comment=$row['comment'];
		$pickdate=$row['pickdate'];
		$recemail=$row['recemail'];
		
	}
if($companyref==0){

	$companyref="NOT Cleared";
}elseif($companyref==1){
	$companyref="Cleared";
}
}else{
echo "error".mysqli_error($conn);
	// echo "<script>alert('Track Number not found');location.replace('adview') </script>";
    	 
}
}

?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		 <div class="row">

		 	<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12 col-md-push-2 ">
	                    <div class="row">
	                    	<div class="col-md-6">
	                    		<h5 style="font-weight:bold">Track Number: <?php echo $tracknumber ?></h5>
	                    		<h5 style="font-weight:bold">Company references: <?php echo $companyref ?></h5>
	                    		<h5 style="font-weight:bold">SED/AES Number: <?php echo $sednumber ?></h5>
	                    		<h5 style="font-weight:bold">SCAC Code: <?php echo $scaccode ?></h5>
	                    		
	                    	</div>
	                    	
	                    </div>

	                                <div class="row">

	                                	<div class="panel panel-default">
	                        		<div class="panel panel-heading">
	                        			<h3 style="text-align: center;font-weight: bold;">CONSIGNMENT DETAILS</h3>
	                        		</div>
	                        		<div class="panel-body">
	                        			<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">NAME*</span>
									        
									        			<input required="yes" onkeypress="letlevel9()" id="name" value="<?php echo $name ?>"   type="" class="form-control text-nonez"  placeholder="" >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">SHIPPER*</span>
									        
									        			<input required="yes" onkeypress="letlevel10()" id="shipper"  value="<?php echo $refowner ?>"  type="" class="form-control text-nonez"  placeholder="" >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>


	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">CONSIGNEE*</span>
									        
									        			<input required="yes" onkeypress="letlevel11()" id="consignee" value="<?php echo $consignee ?>"   type="" class="form-control text-nonez"  placeholder=""  >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">References owner:*</span>
									        
									        			<input required="yes" onkeypress="letlevel12()"  id="references" value="<?php echo $shipper ?>"  type="" class="form-control text-nonez"  placeholder="" maxilen="11"  >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>


	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Notify party 1:*</span>
									        
									        			<input required="yes" onkeypress="letlevel13()" id="party1" value="<?php echo $notifyparty1 ?>"  type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Notify party 2:*</span>
									        
									        			<input required="yes" onkeypress="letlevel14()" id="party2" value="<?php echo $notifyparty2 ?>"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>

	                                	<div class="row">

	                        			 	<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Sender  Email:*</span>
									        
									        			<input required="yes" onkeypress="letlevel15()" id="contactemail" value="<?php echo $contactemail ?>"   type="" class="form-control text-nonez"  placeholder=""  >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Place of issue*</span>
									        
									        			<input required="yes" onkeypress="letlevel16()" id="placeofissue" value="<?php echo $placeofissue ?>"  type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div> 


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Rec. Email:</span>
									        
									        			<input required="yes" onkeypress="letlevel16()" id="recemail" value="<?php echo $recemail ?>"  type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>


	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Vessel:*</span>
									        
									        			<input required="yes" onkeypress="letlevel17()" id="vessel" value="<?php echo $vessel ?>"  type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Voyage Number*</span>
									        
									        			<input required="yes" onkeypress="letlevel18()" id="voyagenumber" value="<?php echo $voyagenumber ?>"   type="" class="form-control text-nonez"  placeholder="EXPECTED DELIVERY DATE"  >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>

	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Port of loading:*</span>
									        
									        			<input required="yes" onkeypress="letlevel19()" id="portofload" value="<?php echo $portofload ?>"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Port of discharge*</span>
									        
									        			<input required="yes" onkeypress="letlevel20()" id="portofdischarge" value="<?php echo $portofdischarge ?>"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>


	                                	<div class="row">

	                        			 	<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Place of receipt:*</span>
									        
									        			<input required="yes" onkeypress="letlevel21()" id="placeofreceipt" value="<?php echo $placeofreceipt ?>"   type="" class="form-control text-nonez"  placeholder=""  >
									    			</div>
		                                        </div>
		                                    </div>


		                                                              
	                                	</div>

	                                		<div class="row">

	                        			 	<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Place of Delivery:*</span>
									        
									        			<input required="yes" onkeypress="letlevel21()" id="placeofdeliv" value="<?php echo $placeofdelivery ?>"   type="" class="form-control text-nonez"  placeholder="">
									    			</div>
		                                        </div>
		                                    </div>


		                                                              
	                                	</div>



	                                	<div class="row">

	                        			 	<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Container number:</span>
									        
									        			<input required="yes" onkeypress="letlevel21()" id="containernumber" value="<?php echo $containernumber ?>"   type="" class="form-control text-nonez"  placeholder=""  >
									    			</div>
		                                        </div>
		                                    </div>


		                                                              
	                                	</div>


	                                	<div class="row">

	                        			 	<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Seal Number:</span>
									        
									        			<input required="yes" onkeypress="letlevel21()" id="sealnumber"  value="<?php echo $sealnumber ?>"  type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                                              
	                                	</div>


	                                	<div class="row">

	                        			 	<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Other Seal Number:</span>
									        
									        			<input required="yes" onkeypress="letlevel21()" id="otherseal" value="<?php echo $othersealnumber ?>"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                                              
	                                	</div>


	                                	<div class="row">

	                        			 	<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Container size/type:</span>
									        
									        			<input required="yes" onkeypress="letlevel21()" id="containersize" value="<?php echo $containertype ?>"   type="" class="form-control text-nonez"  placeholder=""  >
									    			</div>
		                                        </div>
		                                    </div>


		                                                              
	                                	</div>


	                                	<div class="row">

	                        			 	<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">No. of packages:</span>
									        
									        			<input required="yes" onkeypress="letlevel21()" id="numberofpackage" value="<?php echo $numberofpackage ?>"   type="" class="form-control text-nonez"  placeholder=""    >
									    			</div>
		                                        </div>
		                                    </div>


		                                                              
	                                	</div>


	                                	<div class="row">

	                        			 	<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Cargo description:</span>
									        
									        			<input required="yes" onkeypress="letlevel21()" id="cargodescript" value="<?php echo $cargodiscription ?>"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                                              
	                                	</div>


	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Gross Weight:*</span>
									        
									        			<input required="yes" onkeypress="letlevel9()" id="weight" value="<?php echo $weight ?>"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Volume:*</span>
									        
									        			<input required="yes" onkeypress="letlevel10()" id="volume" value="<?php echo $volume ?>"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>


	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Total Freight:</span>
									        
									        			<input required="yes" onkeypress="letlevel9()" id="tfreight" value="<?php echo $tfreight ?>"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Exp Del Date:*</span>
									        
									        			<input required="yes" onkeypress="letlevel10()" id="expdel" value="<?php echo $expdel ?>"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>





	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Departure Time:</span>
									        
									        			<input required="yes" onkeypress="letlevel9()" id="deptime" value="<?php echo $deptime ?>"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Pick-up Date*</span>
									        
									        			<input required="yes" onkeypress="letlevel10()" id="pickdate" value="<?php echo $pickdate ?>"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>



	                                	<div class="row">

	                        			 	<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Pick-up Time:</span>
									        
									        			<input required="yes" onkeypress="letlevel9()" id="picktime" value="<?php echo $picktime ?>"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>


		                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
		                                        <div class="form-group" id="name-field">
		                                            <div class="input-group">
									        			<span class="input-group-addon" style="font-weight:bold">Comments*</span>
									        
									        			<input required="yes" onkeypress="letlevel10()" id="comment" value="<?php echo base64_decode($comment) ?>"   type="" class="form-control text-nonez"  placeholder=""   >
									    			</div>
		                                        </div>
		                                    </div>                          
	                                	</div>

	                                	
	                        		</div>	
	                        	</div>
	                                </div>
								 	<div class="row">
	                                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
	                                        <div class="form-group">
	                                           <input type="submit" value="Update" id="enterdetails" class="form-control btn btn-sm btn-info" name="">
	                                        </div>
	                                    </div>

	                                </div>
	                                 <div class="col-md-12 col-md-push-0">
											<h5 style="text-align: center; color: orange; font-weight: bold;" id="rst"></h5>

										</div>
	                            
	                        </div>
	        </div>

         </div>
	

			
	</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2022  All rights reserved <a href="https://unioffshorexpc.com">Parcel Care services</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="web/js/bootstrap.js"></script>
<script src="web/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="web/js/scripts.js"></script>
<script src="web/js/jquery.slimscroll.js"></script>
<script src="web/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="web/js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
<script>
 



  $(document).ready(function(){


// alert("jj");
 $("#enterdetails").click(function(){
var trackid="<?php echo $tracknum ?>"
 // alert (trackid);
 var name=$("#name").val();
 var shipper=$("#shipper").val();
 var consignee=$("#consignee").val();
 var references=$("#references").val();
 var party1=$("#party1").val();
 var party2=$("#party2").val();
 var contactemail=$("#contactemail").val();
 var placeofissue=$("#placeofissue").val();
 var vessel=$("#vessel").val();
 var voyagenumber=$("#voyagenumber").val();
 var portofload=$("#portofload").val();
 var portofdischarge=$("#portofdischarge").val();
 var placeofreceipt=$("#placeofreceipt").val();
 var placeofdeliv=$("#placeofdeliv").val();
 var containernumber=$("#containernumber").val();
 var sealnumber=$("#sealnumber").val();
 var otherseal=$("#otherseal").val();
 var containersize=$("#containersize").val();
 var numberofpackage=$("#numberofpackage").val();
 var cargodescript=$("#cargodescript").val();
 var weight=$("#weight").val();
 var volume=$("#volume").val(); 

 var tfreight=$("#tfreight").val();
 var expdel=$("#expdel").val(); 

 var deptime=$("#deptime").val();
 var picktime=$("#picktime").val();

  var comment=$("#comment").val();
 var pickdate=$("#pickdate").val();
 var recemail=$("#recemail").val();

  // $('#weight').val("ADDINssdasG....");
              $.ajax({
                    url:'consignupdate.php',
                    method:'POST',
                    data:{
                        name:name,
                        consignee:consignee,
                        shipper:shipper,
                        references:references,
                        party1:party1,
                        party2:party2,
                        contactemail:contactemail,
                        placeofissue:placeofissue,
                        vessel:vessel,
                        voyagenumber:voyagenumber,
                        portofload:portofload,
                        portofdischarge:portofdischarge,
                        placeofreceipt:placeofreceipt,
                        placeofdeliv:placeofdeliv,
                        containernumber:containernumber,
                        sealnumber:sealnumber,
                        otherseal:otherseal,
                        containersize:containersize,
                        numberofpackage:numberofpackage,
                        cargodescript:cargodescript,
                        weight:weight,
                        volume:volume,
                        trackid:trackid,

                         tfreight:tfreight,
                        expdel:expdel,

                        deptime:deptime,
                        picktime:picktime,

                           comment:comment,
                        pickdate:pickdate,
                        recemail:recemail,
                       
                       
                    },

                      beforeSend: function(){
                $('#enterdetails').val("Upadte....");
              },
                   success:function(data){
                   
                $('#enterdetails').val("Update");
                   	//$('#uplevel').effect("shake",options,800);
                   	// $('#comment').val("ADDED....");
                   	 	// alert("done");
               
                 //myfunction();
                   	$("#rst").html(data);

//$("#showme").hide();
                     }
                });

            // }

 });

 });


</script>

	</script>
<!-- calendar -->
	<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>
