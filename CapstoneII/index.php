<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Health Skin Monetring Device</title>

        <!-- CSS FILES -->                
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-tiya-golf-club.css" rel="stylesheet">
        
    </head>
    
    <body>

        <main>

            <nav class="navbar navbar-expand-lg">                
                <div class="container">
                    <a class="navbar-brand d-flex align-items-center" href="index.html">
                        <!-- <img src="images/logo.png" class="navbar-brand-image img-fluid" alt="Tiya Golf Club"> -->
                        <span class="navbar-brand-text">
                            Health
                            <small>Monetring Device</small>
                        </span>
                    </a>

                    <div class="d-lg-none ms-auto me-3">
                        <a class="btn custom-btn custom-border-btn" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Member Login</a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">Alarms</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Alerts</a>
                            </li>
                            <li class="nav-item">
                                <?php 
                                    session_start();
                                    if(isset($_SESSION['user'])){ 
                                ?>
                                <a class="nav-link" href="data.php">Data</a>
                                <?php }else{ ?>
                                    <li><a class="nav-link" href="#" onclick="alert('You must logged in to see data')">Data</a></li>
                                <?php } ?>
                            </li>

                            
                        </ul>

                        <div class="d-none d-lg-block ms-lg-3">
                            <?php 
                                if(isset($_SESSION['user'])){ 
                            ?>
                            <a class="btn custom-btn custom-border-btn" href="logout.php">LogOut</a>
                            <?php }else{ ?>
                                <a class="btn custom-btn custom-border-btn" href="login.php">LogIn</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">                
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Member Login</h5>
                    
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                
                <div class="offcanvas-body d-flex flex-column">
                    <form class="custom-form member-login-form" action="#" method="post" role="form">

                        <div class="member-login-form-body">
                            <div class="mb-4">
                                <label class="form-label mb-2" for="member-login-number">Membership No.</label>

                                <input type="text" name="member-login-number" id="member-login-number" class="form-control" placeholder="11002560" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label mb-2" for="member-login-password">Password</label>

                                <input type="password" name="member-login-password" id="member-login-password" pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Password" required="">
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div>

                            <div class="col-lg-5 col-md-7 col-8 mx-auto">
                                <button type="submit" class="form-control">Login</button>
                            </div>

                            <div class="text-center my-4">
                                <a href="#">Forgotten password?</a>
                            </div>
                        </div>
                    </form>

                    <div class="mt-auto mb-5">
                        <p>
                            <strong class="text-white me-3">Any Questions?</strong>

                            <a href="tel: 010-020-0340" class="contact-link">
                            	010-020-0340
                            </a>
                        </p>
                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
            </div>
            

            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

                <div class="section-overlay"></div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#3D405B" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <h2 class="text-white">Welcome to the club</h2>

                            <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                                <span>This is</span>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">Health</b>
                                    <b>Monetring</b>
                                    <b>Device</b>
                                </span>
                            </h1>

                        </div>

                        

                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
            </section>


            <section class="about-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-lg-5 mb-4">About</h2>
                        </div>

                        <div class="col-lg-5 col-12 me-auto mb-4 mb-lg-0">
                            <h3 class="mb-3">Tori Le & Robyn Porter</h3>

                            <p>We are two passionate engineers who created the Wearable Skin Health Monitoring Device to help people monitor their skin health and prevent skin cancer.</p>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                            <div class="member-block">
                                <div class="member-block-image-wrap">
                                    <img src="images/3.jpeg" class="member-block-image img-fluid" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-bg-image">
                <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z" stroke-width="0"></path></svg>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <div class="section-bg-image-block">
                                <h2 class="mb-lg-3">Conductivity/PH/Temperature Sensor Device</h2>

                                <p>Welcome to our sensor device that monitors conductivity, PH, and temperature levels. Our device is ideal for anyone who wants to monitor these levels in water, soil, or other substances.</p>

                            </div>
                        </div>

                    </div>
                </div>

                <svg viewBox="0 0 1265 144" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="rgba(255, 255, 255, 1)" d="M 0 40 C 164 40 164 20 328 20 L 328 20 L 328 0 L 0 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 327 20 C 445.5 20 445.5 89 564 89 L 564 89 L 564 0 L 327 0 Z" stroke-width="0"></path> <path fill="rgba(255, 255, 255, 1)" d="M 563 89 C 724.5 89 724.5 48 886 48 L 886 48 L 886 0 L 563 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 885 48 C 1006.5 48 1006.5 67 1128 67 L 1128 67 L 1128 0 L 885 0 Z" stroke-width="0"></path><path fill="rgba(255, 255, 255, 1)" d="M 1127 67 C 1196 67 1196 0 1265 0 L 1265 0 L 1265 0 L 1127 0 Z" stroke-width="0"></path></svg>
            </section>


            <section class="membership-section section-padding" id="section_3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">  
                            <div class="col-lg-6 col-6 ">   <h2>Sensor Readings</h2>  </div>
                            <div class="col-lg-12 col-6 mb-3 mb-lg-0">
                                <h4 class="mb-4 pb-lg-2"></h4>

                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%;">Conductivity</th>
                                                
                                                <th style="width: 50%;"></th>
                                                
                                                
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-start">420 μS/cm</th>
                                                
                                                <td>
                                                    Last updated: May 15, 2023 10:30 AM
                                                </td>
                                                
                                                <td>
                                                 
                                            </tr>


                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-12 col-6 mb-3 mb-lg-0">

                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%;">pH</th>                          
                                                <th style="width: 50%;"></th>                          
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-start">7.2</th>
                                                
                                                <td>
                                                    Last updated: May 15, 2023 10:30 AM
                                                </td>
                                                
                                                <td>
                                                 
                                            </tr>


                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-lg-12 col-6 mb-3 mb-lg-0">

                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%;">Temperature</th>                          
                                                <th style="width: 50%;"></th>                          
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-start">25.5°C</th>
                                                
                                                <td>
                                                    Last updated: May 15, 2023 10:30 AM
                                                </td>
                                                
                                                <td>
                                                 
                                            </tr>


                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-lg-12 col-6 mb-3 mb-lg-0">

                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%;">Device Status</th>                          
                                                <th style="width: 50%;"></th>                          
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-start">OK</th>
                                                
                                                <td>
                                                    Last updated: May 15, 2023 10:30 AM
                                                </td>
                                                
                                                <td>
                                                 
                                            </tr>


                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <img src="images/4.jpeg" style="width: 100%;">
                        </div>

                    </div>
                </div>
            </section>


            <section class="events-section section-bg section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12">
                            <h2 class="mb-lg-3">Alerts</h2>
                        </div>

                        

                        <div class="row custom-block custom-block-bg">
                            
                            

                            <div class="col-lg-6 col-12 order-3 order-lg-0">
                                <div class="custom-block-info mt-2 mt-lg-0">
                                    

                                    High Temperature <br>

                                    The temperature has exceeded 30°C <br>

                                    May 14, 2023 11:45 PM <br>

                                    Low PH <br>

                                    The PH level has dropped below 6.5 <br>

                                    May 14, 2023 11:45 PM

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    

                    <div class="col-lg-12 col-12">
                        <br><br>
                        <br>
                        <p class="copyright-text">© 2023 Conductivity/PH/Temperature Sensor Device. All rights reserved.</p>
                    </div>

                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#81B29A" fill-opacity="1" d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
        </footer>


        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/animated-headline.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>