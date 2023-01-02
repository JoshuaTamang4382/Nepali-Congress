<!-- 
    Created by Joshua Tamang,Sanish karki,Shiva Puri   
-->
<?php include 'constant.php' ?>


<!DOCTYPE html>
<html lang="en-US">

<head>
    <!------------------------ Meta Starts ---------------------->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nepali Congress</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/congress_tree.png">


    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:alt" content="">
    <meta property="og:description" content="">
    <!------------------------- Meta Ends ----------------------->


    <!----------------------- Fonts Starts ---------------------->
    <script src="https://kit.fontawesome.com/1358cc6429.js" crossorigin="anonymous"></script>
    <!------------------------ Fonts Ends ----------------------->


    <!-------------------- Components Starts -------------------->
    <!-- JavaScript Bundle with Popper -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bowercomponent/slick-theme.css" rel="stylesheet">
    <link href="css/bowercomponent/slick.css" rel="stylesheet">
    <link href="css/bowercomponent/lightbox.min.css" rel="stylesheet">
    <link href="css/bowercomponent/flaticon.css" rel="stylesheet">
    <!--------------------- Components Ends --------------------->


    <!-------------------- Site Style Starts -------------------->
    <link href="css/global.css?v=<?php echo $cssVersion; ?>" rel="stylesheet">
    <link href="css/thestyles.css?v=<?php echo $cssVersion; ?>" rel="stylesheet">
    <link href="css/responsive.css?v=<?php echo $cssVersion; ?>" rel="stylesheet">
    <!--------------------- Site Style Ends --------------------->

    <!---------------------- Jquery Start ----------------------->
    <script type="text/javascript" src="js/bowercomponent/jquery.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
    <!----------------------- Jquery Ends ----------------------->
</head>

<body>

    <!------------------------------------- Wrapper Starts ------------------------------------->
    <div id="wrapper">

        <!-------------------------------------- Modal Starts -------------------------------------->
        <div id="theModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="flaticon-close"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-loading-area">
                            <div class="title">
                                <h4>This is the title</h4>
                            </div>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pharetra nisl eget lacus mollis pulvinar. Mauris porttitor sem eu fermentum aliquet. In mattis fermentum malesuada. Maecenas tempor enim nec commodo eleifend. Nulla facilisi. Aenean ac placerat ante. Quisque laoreet neque sit amet enim iaculis, sed sollicitudin turpis rutrum. Donec ultricies ultrices erat vel viverra. Suspendisse tincidunt erat eu neque posuere, vel bibendum ipsum scelerisque.</p>
                                <p>Sed eget arcu luctus, tristique velit ac, hendrerit urna. Aenean eget purus enim. Sed consequat mi at rhoncus commodo. Donec metus tortor, dignissim sit amet facilisis et, accumsan vitae mauris. Pellentesque consectetur at quam sed volutpat. Mauris faucibus, nisl lobortis consequat aliquam, quam est sodales erat, et tincidunt ligula metus in purus. Nulla posuere arcu in felis porttitor, vel maximus tellus feugiat. Proin imperdiet arcu vel urna feugiat, in elementum purus facilisis.</p>
                                <p>Sed sapien sem, commodo eget nibh vel, euismod hendrerit neque. Quisque et augue eu nisl tristique bibendum. Maecenas euismod consequat ex sed congue. Donec convallis risus odio, nec lobortis sem fringilla ut. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla at augue eu nisi varius rhoncus. Donec quis facilisis mauris. Duis lobortis ultricies sapien, ut faucibus velit euismod quis. Suspendisse potenti. Suspendisse aliquam ipsum id leo fermentum, quis interdum mauris semper.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--------------------------------------- Modal Ends --------------------------------------->

        <!--------------------------------- Header Wrapper Starts ---------------------------------->
        <header id="header-wrapper">
            <div class="top-header-section">
                <div class="custom-container">
                    <div class="news-login-lang-wrapper">
                        <div class="news-wrapper">
                            <ul>
                                <li><a href="">नयाँ सुचनाहरु |</a></li>
                                <li>
                                    <marquee direction="left" scrolldelay="90">
                                        <ul>
                                            <li>
                                                <h6>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam accusamus maiores explicabo. Reprehenderit cum sapiente aliquid impedit dicta incidunt tempore fugit sunt provident inventore porro eius pariatur, voluptas facere earum.</h6>
                                            </li>
                                            <li>
                                                <h6>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat eum soluta exercitationem voluptatibus numquam vero eos?</h6>
                                            </li>
                                            <li>
                                                <h6>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</h6>
                                            </li>
                                            <li>
                                                <h6>Lorem ipsum dolor sit amet consectetur.</h6>
                                            </li>
                                        </ul>
                                    </marquee>
                                </li>
                            </ul>
                        </div>
                        <div class="login-lang-wrapper">
                            <div class="login-wrapper">
                                <ul>
                                    <li>
                                        <i class="fa-sharp fa-solid fa-user"></i>
                                        <a href="samajik_sanjal_page.php"> सामाजिक संजाल </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="lang-wrapper">
                                <ul>
                                    <li><span>नेपा</span></li>
                                    <li>
                                        <label class="switch">
                                            <input type="checkbox" checked>
                                            <span class="slider round"></span>
                                        </label>
                                    </li>
                                    <li><span>Eng</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-header-section">
                <div class="custom-container">
                    <div class="bottom-header-container">
                        <div class="logo-nav-wrapper">
                            <div class="logo-container">
                                <a href="index.php">
                                    <img src="img/logo/logo.png" alt="">
                                </a>
                            </div>
                            <div class="nav-container">
                                <ul>
                                    <li>
                                        <a href="#"> हाम्रो बारेमा
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-items">
                                            <li><a href="parichaya_page.php"> परिचय </a></li>
                                            <li><a href="karya_samati_page.php"> केन्द्रीय कार्य समिति </a></li>
                                            <li><a href="central_office_page.php"> केन्द्रिय कार्यालय </a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="subdomain_page.php"> सबडोमेन </a>
                                    </li>
                                    <li>
                                        <a href="online_library_page.php"> अनलाइन लाइब्रेरी </a>
                                    </li>
                                    <li>
                                        <a href="#"> बिधान | नियमावली
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-items">
                                            <li><a href="bidhan_page.php"> नेपालको संबिधान </a></li>
                                            <li><a href="niyamawali_page.php"> नियमावली </a></li>
                                            <li><a href="party-bidhan_page.php"> पार्टी विधान </a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="dastabej_page.php"> दस्ताबेज </a>
                                    </li>
                                    <li>
                                        <a href="paripatra_page.php"> परिपत्र </a>
                                    </li>
                                    <li>
                                        <a href="active_member.php"> कृयासिल सदस्यता </a>
                                    </li>

                                    <li>
                                        <a href="#"> केन्द्रिय निर्वाचन समिति
                                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        </a>
                                        <ul class="dropdown-items">
                                            <li><a href="matparinam_page.php"> मतपरिणाम—केन्द्रीय कार्यसमिति </a></li>
                                            <li><a href="mahadibesan_namelist_page.php"> १४ औं महाधिवेशन—२०७८ उम्मेदवारको अन्तिम नामावली </a></li>
                                            <li><a href="suchana_page.php"> सूचनाहरु </a></li>
                                            <li><a href="mahadibesan_firstnamelist_page.php"> १४ औं महाधिवेशन २०७८ उम्मेदवारको प्रथम नामावली </a></li>
                                            <li><a href="samajik_sanjal_page.php"> मत परिणाम </a></li>
                                            <li><a href="election_directory_page.php"> निर्वाचन निर्देशिका २०७८ </a></li>
                                            <li><a href="nirbachan_adhikrit_page.php"> निर्वाचन अधिकृत लग - इन </a></li>
                                            <li><a href="maadhibesan_Final_namelist_page.php"> महाधिवेशन प्रतिनिधिहरुको आधिकारिक र अन्तिम नामावली </a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="#"> अरु मेनुहरु
                                            <i class="fa-solid fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-items">
                                            <li><a href="#"> प्रतिनिसभा / प्रदेश सभस सदस्यहरु</a></li>
                                            <li><a href="#"> प्रदेध सरकारमस पार्टीको‌ तर्फबाट नियुति भएको पदाधिकारीहरुको विवरण </a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- For HAMBURGER MENU -->
                            <div class="mobile-nav-toggle">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!---------------------------------- Header Wrapper Ends ----------------------------------->

        <!-- For HAMBURGER MENU -->
        <div class="nav-section">
            <!-- <div class="logo-container">
                <a href="index.php">
                    <img src="img/logo/logo.png" alt="">
                </a>
            </div> -->
            <div class="navigation">

                <ul class="menu-wrapper">
                    <li><a href="parichaya_page.php"> हाम्रो बारेमा </a></li>
                    <li><a href="subdomain_page.php"> सबडोमेन </a></li>
                    <li><a href="online_library_page.php"> अनलाइन लाइब्रेरी </a></li>
                    <li><a href="bidhan_page.php"> बिधान | नियमावली </a></li>
                    <li><a href="dastabej_page.php"> दस्ताबेज </a></li>
                    <li><a href="paripatra_page.php"> परिपत्र </a></li>
                    <li><a href="active_member.php"> कृयासिल सदस्यता </a></li>
                    <li><a href="#"> सामाजिक संजाल </a></li>
                    <li><a href="#"> केन्द्रिय निर्वाचन समिति </a></li>
                </ul>

            </div>
        </div>
        <!-- FOR HAMBURGER MENU  -->


        <!-------------------------------- Content Wrapper Starts ---------------------------------->
        <div id="content-wrapper">