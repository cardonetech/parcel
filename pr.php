<?php 
require "connection.php";
if(isset($_POST['subemail'])){
	 $subemail = isset($_POST['subemail']) ? trim($_POST['subemail']) : '';

if(empty($subemail)){

		  echo'<script>
 subemail.style.border="2px solid red";
		 

	
		   function subb(){
            if(subemail !==""){
        
                subemail.style.border="2px solid green";

            }
            
            else{
                subemail.style.border="2px solid red";
                 //addadd.val("check ur date....");
        
            }
        };</script>';
	}else{
		echo "thank you for subscribing"; 
	}

}


if(isset($_POST['formemail'])){
	 // echo '<script> alert("yes") </script>';
	 $formemail = isset($_POST['formemail']) ? trim($_POST['formemail']) : '';
	 $formname = isset($_POST['formname']) ? trim($_POST['formname']) : '';
	 $formsubject = isset($_POST['formsubject']) ? trim($_POST['formsubject']) : '';
	 $formmessage = isset($_POST['formmessage']) ? trim($_POST['formmessage']) : '';

if(empty($formname)){

		  echo'<script>
 formname.style.border="2px solid red";
		 

	
		   function subb1(){
		   	
            if(formname !==""){
        
                formname.style.border="2px solid green";
                $("#formbtn").val("Send");

            }
            
            else{
                formname.style.border="2px solid red";
                 //addadd.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($formsubject)){

		  echo'<script>
 formsubject.style.border="2px solid red";
		 

	
		   function subb2(){
		   	
            if(formsubject !==""){
        
                formsubject.style.border="2px solid green";
                $("#formbtn").val("Send");

            }
            
            else{
                formsubject.style.border="2px solid red";
                 //formsubject.val("check ur date....");
        
            }
        };</script>';
	}elseif(empty($formmessage)){

		  echo'<script>
 formmessage.style.border="2px solid red";
		 

	
		   function subb3(){

            if(formmessage !==""){
        
                formmessage.style.border="2px solid green";
               $("#formbtn").val("Send");

            }
            
            else{
                formmessage.style.border="2px solid red";
                 //formsubject.val("check ur date....");
        
            }
        };</script>';
	}else{
		//$da=date("d-D-M-Y");
		$da = date("Y-M-D-d");

		
		$enter="INSERT INTO contactus (name,email,subject,msg,datesent) 
		values('$formname','$formemail','$formsubject','$formmessage','$da')";

		$result1=mysqli_query($conn,$enter);
		
		if($result1){

			echo '<script> 
			 $("#formname").val("");
			 $("#formemail").val("");
			 $("#formsubject").val("");
			 $("#formmessage").val("");
			 $("#w3lPhone").val("");
			
			 $("#formbtn").val("Sent...");
		 ;</script>';
		
			echo "Message has been sent succesfully.. kindly check your email for reply ";



			
	}else{


		 echo mysqli_error($conn);



	}
	}

}

	?>