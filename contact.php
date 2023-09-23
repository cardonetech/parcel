
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
    <title>Parcel Care| Contact </title>
    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,400;0,600;0,700;1,600&display=swap" rel="stylesheet">
    <link href="assets/images/logo.png" rel="shortcut icon"/>
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-liberty.css">
</head>

<body>
    <!--/Header-->
<?php require "header.php" ?>
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
                    <div class="col-lg-6 contacts-5-grid pe-lg-5">
                        <h5 class="title-subw3hny">Contact our team</h5>
                        <h3 class="title-w3l mb-3">Get in touch with us</h3>
                        <p>Have a more inquaries, simple message us</p>

                        <h4 class="title-w3l-adinf mt-4">Support Center 24/7</h4>
                        <div class="address-grid d-flex">
                            <i class="fas fa-headset mt-2"></i>
                            <p><a href="tel:<?php echo $phone ?>" class="link1"><?php echo $phone ?></a></p>
                        </div>
                        <div class="address-grid d-flex">
                            <i class="fas fa-envelope"></i>
                            <p class="mt-0"><a href="mailto:<?php echo $emailb ?>" class="link1"><?php echo $emailb ?></a></p>

                        </div>
                    </div>

                    <div class="col-lg-6 form-inner-cont mt-lg-0 mt-4">
                         <h6 class="wow tada" style="text-align: center;margin-bottom: 20px; color:red" id="rst2"></h6>
                        <!-- <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form"> -->
                            <div class="form-grids">
                                <div class="form-input">
                                    <input type="text" name="w3lName" onkeypress="subb1()" id="formname" placeholder="Enter your name *" required="" />
                                </div>
                                <div class="form-input">
                                    <input type="text" name="w3lSubject" onkeypress="subb2()" id="formsubject" placeholder="Enter subject " required />
                                </div>
                                <div class="form-input">
                                    <input type="email" name="w3lSender" id="formemail" placeholder="Enter your email *" required />
                                </div>
                                <div class="form-input">
                                    <input type="text" name="w3lPhone" id="w3lPhone" placeholder="Enter your Phone Number *" required />
                                </div>
                            </div>
                            <div class="form-input">
                                <textarea name="w3lMessage" onkeypress="subb3()" id="formmessage" placeholder="Type your query here" required=""></textarea>
                            </div>
                            <div class="w3-submit text-right">
                                <button class="btn btn-style btn-primary" id="formbtn"><span>Send Message</span> <i class="fas fa-paper-plane ms-2"></i></button>
                            </div>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- //contacts-5-grid -->
    </div>

    <div class="contacts-sub-5">
        <div class="contacts-mapw3 position-relative">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.305935303!2d-74.25986548248684!3d40.69714941932609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1563262564932!5m2!1sen!2sin" style="border:0" allowfullscreen></iframe>
            <div class="map-content-5">
                <h4 class="title-w3l-adinf mb-3">Address Info</h4>
                <div class="address-grid">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>New York - 1060,Honey Avenue</p>
                </div>
                <div class="address-grid my-2">
                    <i class="fas fa-envelope"></i>
                    <p><a href="mailto:mail@example.com" class="link1">mail@example.com</a></p>

                </div>
                <div class="address-grid">
                    <i class="fas fa-phone-alt"></i>
                    <p><a href="tel:+12 324-016-695" class="link1">+12 324-016-695</a></p>
                </div>
                <div class="address-grid my-2">
                    <i class="far fa-clock"></i>
                    <p>Mon - Fri: 9:00 - 19:00</p>
                </div>
                <div class="address-grid">
                    <p>Closed on Weekends</p>
                </div>
            </div>
        </div>
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
