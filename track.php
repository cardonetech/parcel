
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Parcel Care | Track </title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,400;0,600;0,700;1,600&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link href="assets/images/logo.png" rel="shortcut icon"/>
    <link rel="stylesheet" href="assets/css/style-liberty.css">
</head>

<body>
    <!--/Header-->
<?php require "header.php";

    if(isset($_POST['trk'])){
     $search = isset($_POST['search']) ? trim($_POST['search']) : '';

     $tk=base64_encode($search);

     echo "<script>

       location.replace('track-package?trk=$tk&nmvncvbnc=,nbjhnvh&bvbvnbx=nmnmvhjvmnzdvhk&nbvxbnvnxx=nfssgjfvjbs'); </script>

     ";


}


  
    if(isset($_GET['trk'])){
    
    $trkz=$_GET['trk'];

        $tracknum=base64_decode($_GET['trk']); 
        // $tracknum = isset($_POST['search']) ? trim($_POST['search']) : ''; 



             // echo "<script>alert(echo $tracknum); </script>";

         $locdet="SELECT* from clocation where tracknumber= '$tracknum'";

        $resultloc=mysqli_query($conn,$locdet);
        $returnloc=mysqli_num_rows($resultloc);

        if($returnloc){
            while($row=mysqli_fetch_assoc($resultloc)){
                $location=$row['location'];


            }}else{
               $location="lefkosa Mersin Turkey"; 
            }




        

    }
?>

   <style type="text/css">
       .mr-5{font-size: 25px;}
.mr-5 span{font-size: 20px;}
table tr tds{text-align: left;font-size: 15px;color: black}
table th{
  font-weight: bold;
}
   </style>     
    <!--//header-->
<script >
            function Clickheretoprint(){ 
              var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
                  disp_setting+="scrollbars=yes"; 
              var content_vlue = document.getElementById("print_content").innerHTML; 
              
              var docprint=window.open("","",disp_setting); 
               docprint.document.open(); 
               docprint.document.write('<html><head><title>Parcel Care Courier services -<?php echo $tracknum ?></title><link rel="stylesheet" href="assets/css/style-liberty.css">'); 
               docprint.document.write('<style>body{width:100%;}</style></head><body onLoad="self.print()" style="width: 100%; font-size:12px; font-family:arial;">');          
               docprint.document.write(content_vlue);          
               docprint.document.write('</body></html>'); 
               docprint.document.close(); 
               docprint.focus(); 
            }
</script>

    <!--//Header-->
    <!--/inner-page-->
    <div class="inner-banner py-5">
        <section class="w3l-breadcrumb text-left py-sm-5 ">
            <div class="container">
                <div class="w3breadcrumb-gids">
                    <div class="w3breadcrumb-left text-left">
                        <h2 class="inner-w3-title mt-lg-5 mt-4">
                            Contact Us </h2>

                    </div>
                    <div class="w3breadcrumb-right">
                        <ul class="breadcrumbs-custom-path">
                            <li><a href="index">Home</a></li>
                            <li class="active"><span class="fas fa-angle-double-right mx-2"></span> Contact</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <!--//inner-page-->
    <!-- contacts-5-grid -->
    <div class="w3l-contact-10 py-5" id="contact">
        <div class="form-41-mian pt-md-5 pt-3">
            <div class="container">
                <div class="row contacts-5-grid-main mb-5">
                	<div class="row">
						<div class="col-md-6">
						<table class="table table-bordered">
						<tr>
							<td style="border-right: none;">
								
							</td>
							<td style="border-left: none;">
								
							</td>
						</tr>
						<tr>
                            <form action="" method="POST">
							<td>
								<input required="yes" onkeypress="letlevel10()" id="shipper" name="search"   type="" class="form-control text-nonez" value="<?php 
								if(isset($_GET['trk'])){

									echo $tracknum; 
								} ?>"  placeholder="" >
							</td>

							<td>
                                <button name="trk" style="background-color:darkred; border: none; font-weight:bold; padding: 10px; color:white;cursor: pointer;">Track</button>
								<!-- <span  id="rcg" style="background-color:darkred; font-weight:bold; padding: 10px; color:white;cursor: pointer;">Track</span> -->

							</td>
                        </form>
						</tr>

						<tr>
							<td style="border-right:none;">
								EX: 12345
							</td>
						</tr>
						</table>
							<span onclick="Clickheretoprint()"  style="font-weight: bold;background: orange;padding: 10px;cursor: pointer;">print</span>
						
						</div>
					</div>
                </div>

                <?php
                 if(isset($_GET['trk'])){
    
    $trkz=$_GET['trk'];

        $tracknum=base64_decode($_GET['trk']);
        }else{
            $tracknum="null";
        }
$details="SELECT* from consigne where tracknumber= '$tracknum' and status=1";

        $result=mysqli_query($conn,$details);
        $return=mysqli_num_rows($result);
        if($return){
       while($row=mysqli_fetch_assoc($result)){
        $sendername=$row['name'];
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
        $package=$row['package'];
        
    }

    $na="http://unioffshorexpc.com/track-package?trk=".$trkz;
// Include qrcode.php file.

require "qrcode.php";
// Create object
$qc = new QRCODE();
// Create Text Code
$qc->URL("$na");
// Save QR Code
$qc->QRCODE(400,"$tracknum.png");

    if($companyref==0){

    $companyref="NOT Cleared";
}elseif($companyref==1){
    $companyref="Cleared";
}

     ?>

                <div class="row features-top">
		                <div class="col-lg-11 col-md-11 col-sm-8" style="border:0px solid black;">

		                	  <div class="row">
		                   		 <div id="print_content" class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
		                        <!-- <a class="" style="color:#f39c12;font-weight: bold;" href="javascript:Clickheretoprint()">invoice</a>
		                        
		                        <h5 style="font-weight: bold;color: #3c4a62;">TRACK NUMBER:<span style="color: gray"> <?php echo $tracknum ?></span></h5>
		                            <h5 style="font-weight: bold;color: #3c4a62;">REFERRENCE NUMBER:<span style="color: gray"> <?php echo $refnumber ?></span></h5> -->

		                            <div class="row">
		                            	<div class="col-md-6 col-sm-4 col-xs-4">
		                            		<img src="assets/images/logo.png"style="border-radius: 0px; margin-top: 20px;">
		                            	</div>

		                            	<div class="col-md-6 col-sm-4 col-xs-4">
		                                    <center>
		                                        
		                            		<img src="<?php echo $tracknum?>.png"style="width: 150px; height: 150px;border-radius: 0px; ">
		                            		<h6 style="margin-bottom:10px"><?php echo $tracknum ?></h6>
		                                    </center>
		                            	</div>
		                            </div>
		                        <div class="card card-default">

		                            <div class="card-header bg-default" >
		                                <h4>SENDER DETAILS</h4>
		                            </div>
		                            <div class="card-body">
		                            	<table class="table">
		                            		<tr>
		                            			<td style="font-weight:bold;">Sender's Name:</td>
		                            			<td><?php echo $sendername  ?></td>
		                            		</tr>

		                            			<tr>
		                            			<td style="font-weight:bold;">Sender's Email:</td>
		                            			<td><?php echo $contactemail  ?></td>
		                            		</tr>

		                            			<tr>
		                            			<td style="font-weight:bold;">Sender's phone:</td>
		                            			<td><?php echo $notifyparty1  ?></td>
		                            		</tr>

		                            			<tr>
		                            			<td style="font-weight:bold;">Sender's Address:</td>
		                            			<td><?php echo $consignee  ?></td>
		                            		</tr>
		                            	</table>
		                            	 




		                                <!--  -->
		                                
		                            </div>
		                            
		                        </div>
		                        <br>
		                        <div class="card card-primary">

		                            <div class="card-header bg-default">
		                                <h4>RECEIVER'S DETAILS</h4>
		                            </div>
		                            <div class="card-body">
		                            	<table class="table">
		                            		<tr>
		                            			<td style="font-weight:bold;">Receiver's Name:</td>
		                            			<td><?php echo $shipper  ?></td>
		                            		</tr>

		                            			<tr>
		                            			<td style="font-weight:bold;">Receiver's Email:</td>
		                            			<td><?php echo $recemail  ?></td>
		                            		</tr>

		                            			<tr>
		                            			<td style="font-weight:bold;">Receiver's phone:</td>
		                            			<td><?php echo $notifyparty2  ?></td>
		                            		</tr>

		                            			<tr>
		                            			<td style="font-weight:bold;">Receiver's Address:</td>
		                            			<td><?php echo $refowner  ?></td>
		                            		</tr>
		                            	</table>
		                                
		                                
		                            </div>
		                            
		                        </div>

		                        <br>
		                        <div class="card panel-default">
		                        	<div class="card-header bg-default">
		                                <h4>PACKAGE DETAILS</h4>
		                            </div>
		                            <div class="card-body">
		                                <table class="table table-striped">
		                                    <!-- ORIGIN -->
		                                  
		                                      <tr>
		                                        <th>Origin:</th>
		                                        <th>Package</th>
		                                      
		                                      </tr>
		                                  

		                                
		                                      <tr>
		                                        <td><?php echo $placeofissue  ?></td>
		                                        <td><?php echo $package  ?></td>
		                                       
		                                      </tr>
		                                 

		                                  <!-- DESTINATION -->

		                                
		                                      <tr>
		                                        <th>Destination:</th>
		                                        <th>Carrier</th>
		                                      
		                                      </tr>
		                                 

		                                
		                                      <tr>
		                                        <td><?php echo $placeofreceipt ?></td>
		                                        <td>United offshore Courier services</td>
		                                       
		                                      </tr>
		                              

		                                  <!-- WEIGHT N SHIPMENT MODE -->

		                              
		                                      <tr>
		                                        <th>Weight:</th>
		                                        <th>Shipment Mode</th>
		                                      
		                                      </tr>
		                                    

		                                   
		                                      <tr>
		                                        <td><?php echo $weight ?></td>
		                                        <td><?php echo "Sea Freight" ?></td>
		                                       
		                                      </tr>
		                                 

		                                  <!-- QTY -->

		                                
		                                      <tr>
		                                        <th>Product:</th>
		                                        <th>QTY:</th>
		                                      
		                                      </tr>
		                                   

		                                    
		                                      <tr>
		                                        <td><?php echo $companyref ?></td>
		                                        <td><?php echo $numberofpackage ?></td>
		                                       
		                                      </tr>
		                                   

		                                  <!-- TOTAL -->

		                                   
		                                      <tr>
		                                        <th>Amount Paid:</th>
		                                        <th>Expected Delivery Date:</th>
		                                      
		                                      </tr>
		                                     
		                                     
		                                      <tr>
		                                        <td><?php echo $tfreight ?></td>
		                                        <td><?php echo $expdel ?></td>
		                                       
		                                      </tr>
		                                   

		                                  <!-- PICKUPDATE -->

		                                  
		                                      <tr>
		                                        <th>Pick-up Date:</th>
		                                        <th>Pick-up Time:</th>
		                                      
		                                      </tr>
		                                    

		                                    
		                                      <tr>
		                                        <td><?php echo $pickdate ?></td>
		                                        <td><?php echo $picktime ?></td>
		                                       
		                                      </tr>
		                                 

		                                  <!-- REMARK -->

		                                  
		                                      <tr>
		                                        <th>Comment:</th>
		                                        <th></th>
		                                      
		                                      </tr>
		                                    

		                                    
		                                      <tr>
		                                        <td><?php echo base64_decode($comment)?></td>
		                                        <td></td>
		                                       
		                                      </tr>
		                                  
		                                </table>
		                            </div>
		                        </div>


		                        <!-- shipment history -->
		                        <br>
		                        <div class="card panel-success">
		                            <div class="card-header bg-danger">
		                                <h6 style=" font-weight: bold;">Shipment History</h6>
		                            </div>
		                            <div class="card-body table-responsive" style="overflow-x: scroll;">
		                                <?php 
		                                $gethistory="SELECT* from history where histracknum='$tracknum' and status=1";
		                                $hisrst=mysqli_query($conn,$gethistory);
		                                $hisrtn=mysqli_num_rows($hisrst);
		                                if($hisrtn){ ?>
		                                       <table id="show<?php echo $id ?>" class="table table-bordered">
		                                         <thead>
		                                             <tr>
		                                                 <td style="font-weight:bold">Date</td>
		                                                 <td style="font-weight:bold">Time</td>
		                                                 <td style="font-weight:bold">Location</td>
		                                                 <td style="font-weight:bold">Status</td>
		                                                 <td style="font-weight:bold">Updated By</td>
		                                                 <td style="font-weight:bold">Remark</td>
		                                             </tr>
		                                         </thead>
		                                         <?php
		                                    while ($row=mysqli_fetch_assoc($hisrst)) {

		                                        $hisdate=$row['hisdate'];
		                                        $histime=$row['histime'];
		                                        $hislocation=$row['hislocation'];
		                                        $hisstatus=$row['hisstatus'];
		                                        $hisremark=$row['hisremark'];
		                                        $id=$row['id'];

		                                     ?>

		                                     <tr>
		                                         <td style="font-size:11px"><?php echo $hisdate  ?></td> 
		                                         <td style="font-size:11px"><?php echo $histime  ?></td> 
		                                          <td style="font-size:11px"><?php echo $hislocation  ?></td> 
		                                           <td style="font-size:11px"><?php echo $hisstatus  ?></td> 
		                                           <td style="font-size:11px"><?php echo "United Offshore Express"  ?></td> 
		                                           <td style="font-size:11px"><?php echo $hisremark  ?></td>  
		                                     </tr>
		                                  

		                                <?php }} ?> 

		                                     </table>
		                                        


		                                                </div>
		                                    
		                             
		                        </div>




		           
		                    </div>
		                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
		                        <div class="contact-image text-center">
		                            <img src="assets/images/contact-right.png" alt="">
		                        </div>









		                     
		                    </div>
		                     
		                </div>
                		</div>
                 
            	</div>

            	<?php }else{ ?>
            
                <div class="row">
                <div class="col-md-12 col-lg-12   col-sm-12 col-xs-12">
                    <div class="error-content text-center">
                        <img src="images/404.png" alt="">
                        <h3>Track number not found</h3>
                        <h2>Opps !</h2>
                        <br>
                        <a href="index" class="btn btn-primary">Back To Home</a>
                    </div>
                </div>
            </div>
            
                 
     <?php } ?>
            </div>
        </div>
        <!-- //contacts-5-grid -->
    </div>

   
    <!--/footer-9-->
    <?php require "footer.php" ?>
    <!--//footer-9 -->
    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
      <script src="assets/js/jq1.1.js"></script>
    <script src="assets/js/theme-change.js"></script>
    <!--/search-->
    <script src="assets/js/modernizr.custom.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/demo1.js"></script>
    <!--//search-->
    <script type="text/javascript">
  $(document).ready(function(){

 $("#subbtn").click(function(){

//var mailformat=/^w+([.-]?w+)*@w+([.-]+)*(.w{2,3})+$/;

var mailvar=/^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/

 var subemail=$("#subemail").val();


if(mailvar.test(subemail)){
rst.style.color="#f39c12";

    $.ajax({
                    url:'pr.php',
                    method:'POST',
                    data:{
                        subemail:subemail,  
                    },

                      beforeSend: function(){
                //$('#save3').val("SAVING....");
              },
                   success:function(data){
                 //alert("juu");
                    $("#rst").html(data);
                     }
                }); 
   
}else{
//$('#rst').val("SAVING....")
    // rst.val("check ur date....");
     //alert("not");
    // return false;
     $("#rst").html("invalid email format");

     rst.style.color="#d8ad77";
     

}

                  
 });






  $("#formbtn").click(function(){

    // alert("dd");



//var mailformat=/^w+([.-]?w+)*@w+([.-]+)*(.w{2,3})+$/;

var mail=/^[a-zA-Z0-9\-_]+(\.[a-zA-Z0-9\-_]+)*@[a-z0-9]+(\-[a-z0-9]+)*(\.[a-z0-9]+(\-[a-z0-9]+)*)*\.[a-z]{2,4}$/

 var formemail=$("#formemail").val();
 var formname=$("#formname").val();
 var formsubject=$("#formsubject").val();
 var formmessage=$("#formmessage").val();


if(mail.test(formemail)){
   $('#formbtn').val("Sending....");

rst2.style.color="blue";

    $.ajax({
                    url:'pr.php',
                    method:'POST',
                    data:{
                        formemail:formemail,  
                        formname:formname,  
                        formsubject:formsubject,  
                        formmessage:formmessage,  
                    },

                      beforeSend: function(){
                        //alert("bfbfs");
                
              },
                   success:function(data){
                 //alert("juu");
                    $("#rst2").html(data);
                     }
                }); 
   
}else{
//$('#rst').val("SAVING....")
    // rst.val("check ur date....");
     //alert("not");
       //alert("notss");
    // return false;
     $("#rst2").html("invalid email format");

     rst2.style.color="red";
     

}

                  
 });

 });


</script>
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->

    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>
