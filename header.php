   <?php 
    require "connection.php";
    if(isset($_POST['trk'])){
     $search = isset($_POST['search']) ? trim($_POST['search']) : '';

     $tk=base64_encode($search);

     echo "<script>

       location.replace('track?trk=$tk&nmvncvbnc=,nbjhnvh&bvbvnbx=nmnmvhjvmnzdvhk&nbvxbnvnxx=nfssgjfvjbs'); </script>

     ";


}


     
$getcontact = "SELECT* from contact";
$cresult=mysqli_query($conn,$getcontact);
$creturn=mysqli_num_rows($cresult);
if($creturn){
    while($row=mysqli_fetch_assoc($cresult)){
         $emailb = $row['contactemail'];
         $email2 = $row['contactemail2'];
         $phone = $row['contactphone'];
         $office = $row['contactoffice'];
         $office2 = $row['contactoffice2']; $office3 = $row['contactoffice3'];
    }
}


     ?>
  <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light stroke py-lg-0">
                <h1><a class="navbar-brand" href="index.html">
                        <img src="assets/images/logo.png">	
                    </a></h1>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services">Services</a>
                        </li>
                                
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>
                    </ul>
                    <!--/search-->
                    <form action="" id="sea" method="POST" class=" d-flex search-header">
                                <input class="form-control me-2" name="search" id="search" required="required" style="border-bottom-right-radius: 0px;border-top-right-radius: 0px" type="search" placeholder="Track Here..." aria-label="Search" required>
                                <button name="trk" style="border-bottom-left-radius: 0px;border-top-left-radius: 0px" class="btn btn-sm btn-primary" type="submit">Search</button>
                            </form>
                            
                    <!-- open/close -->
                     
                    <!--//search-->
                </div>
                <!-- toggle switch for light and dark theme -->
                 
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>

    <ul class="w3-ul  shadow w3-tiny" style="height: 24px;width: 150px;position: fixed;left: 0%;top:15%;z-index: 1111;font-weight: bold;">
  <li>  <div id="ytWidget" style="width:20px"></div><script src="https://translate.yandex.net/website-widget/v1/widget.js?widgetId=ytWidget&pageLang=en&widgetTheme=light&autoMode=false" type="text/javascript"></script>

                    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></li>
  <!-- <li>Virtual Card</li>
  <li>Self-Service</li>
  <li>FORMS</li>
  <li>FAQS</li> -->
</ul>