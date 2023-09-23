  <footer class="w3l-footer9">
        <section class="footer-inner-main py-5">
            <div class="container py-md-4">
                <div class="right-side">
                    <div class="row footer-hny-grids sub-columns">
                        <div class="col-lg-4 sub-one-left pe-lg-5">
                            <h2><a class="navbar-brand" href="index.html">
                                    <img src="assets/images/logo.png">
                                </a></h2>
                            <p class="footer-phny mt-3">Parcel Care Courier Services is one of the world's leading logistics companies, offering unrivaled courier, cargo, and specialized transport services across Europe, America, Africa, Asia, and beyond,</p>
                             
                        </div>

                        <div class="col-lg-8 sub-two-right">
                            <div class="row">
                                <div class="col-lg-4 sub-two-right">
                                    <h6>Quick Links</h6>
                                    <ul>
                                        <li><a href="about">About Us</a>
                                        </li>
                                        
                                        <li><a href="services">Services</a>
                                        </li>
                                        <li><a href="contact"> Contact</a>
                                        </li>
                                        <li><a href="track">Track</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 sub-two-right">
                                    <h6>Help & Support</h6>
                                    <ul>
                                        <li><a href="tel:<?php echo $phone ?>"> <?php echo $phone ?></a>
                                        </li>
                                        <li><a href="mailto:<?php echo $emailb ?>"><?php echo $emailb ?></a>
                                        </li>
                                        <li><a href="#"><?php echo $office ?></a>
                                        </li>
                                  
                                    </ul>
                                </div>
                                <div class="col-lg-4 sub-two-right">
                                    <h6>Company</h6>
                                   <ul>
                        <div class="search-right ml-lg-3">
                            <form style="margin-bottom: 30px;" action="" id="sea" method="POST" class="search-box position-relative">
                                <div class="input-search">
                                    <input type="search" placeholder="Enter Track Number" name="search" id="search" required="required"
                                         class="search-popup form-control">
                                </div>
                                <br>
                                <button  type="submit" name="trk" class="btn btn-danger form-control search-btn"><i class="fas fa-search"></i></button>
                                <!--<br>-->
                            </form>
                        </div>
                    </ul>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
                <div class="below-section mt-lg-5 pt-lg-4">
                    <div class="copyright-footer">
                        <p class="copyright-column">© <script>document.write(new Date().getFullYear());</script> Parcel Care.All rights reserved.</p>

                        
                    </div>

                </div>
            </div>
        </section>

        <!-- Js scripts -->
        <!-- move top -->
        <button onclick="topFunction()" id="movetop" title="Go to top">
            <span class="fas fa-level-up-alt" aria-hidden="true"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

        </script>
        <!-- //move top -->
    </footer>