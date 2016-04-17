<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>QRC | Project Three Column</title>
        <!-- Stylesheets -->
        <?php include '../include/include_css.php'; ?>
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <!--Page Wrapper-->
        <div class="page-wrapper">

            <!--Preloader Box-->
            <div class="preloader"></div>

            <!--Main Banner-->
            <section class="page-banner banner" style="background-image:url(../assets/images/qrc_background.png);">
                <!--Main Header-->
                <header class="main-header">
                    <!--Top bar-->
                    <?php include '../include/include_topbar.php'; ?>
                    <!--Top bar End-->

                    <!--Lower Section-->
                    <div class="lower-sec">
                        <div class="auto-container">
                            <div class="row">
                                <!--Content Box-->
                                <div class="box-shadow-effect2">
                                    <div class="content-box clearfix">
                                        <!--Logo-->
                                        <div class="logo col-lg-2 col-md-2 col-sm-2 anim-5-all">
                                            <!--a href="main">Buil<span class="theme-color">der</span></a-->
                                            <a href="main" style="padding-bottom: 30px;">
                                                <img src="../assets/images/logo_qrc_v11.png"/>
                                            </a>
                                        </div>

                                        <!--Navigation-->
                                        <nav class="col-md-10 pull-right main-navigation">

                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>

                                            <div class="navbar-collapse collapse menu">
                                                <ul class="navbar-nav navbar-left clearfix">
                                                    <li><a href="main">Home</a></li>
                                                    <li><a href="about-us">About Us</a></li>
                                                    <li class="dropdown"><a href="services">Services</a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="services">บริการติดตั้ง โครงหลังคา</a></li>
                                                            <li><a href="services-sales">จำหน่ายวัสดุก่อสร้าง</a></li>
                                                            <li><a href="nanohouse-services">บ้าน นาโน เฮ้าส์</a></li>
                                                            <li><a href="general-services">รับเหมาก่อสร้างทั่วไป</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="current"><a href="clients" class="dropdown-toggle">Clients</a>
                                                    </li>

                                                    <li><a href="contact-us">Contact Us</a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </nav>
                                        <!--Navigation End-->

                                        <!--Search Box-->
                                        <div class="search-box widget">
                                            <form method="post" action="main">
                                                <fieldset class="form-group">
                                                    <input type="search" name="search" value="" placeholder="search">
                                                </fieldset>
                                            </form>
                                        </div>
                                        <!--Search Box End-->

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </header>
                <!--Main Header End-->


                <!--Page Title-->
                <div class="page-title">
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12 pull-left"><h1>CLIENTS</h1></div>
                            <div class="col-md-6 col-sm-6 col-xs-12 pull-right text-right path"><a href="#">Home</a>&ensp;<span class="fa fa-angle-right"></span>&ensp;<a href="#">Clients</a></div>
                        </div>
                    </div>
                </div>
                <!--Page Title Ends-->

            </section>
            <!--Page Banner Ends-->

            <!--Project Full Width-->
            <section class="project three-col">
                <div class="auto-container">
                    <div class="row">
                        <br>
                        <!--Filters-->
                        <ul class="filter-tabs style-two anim-3-all">
                            <li class="filter" data-role="button" data-filter="all">ทั้งหมด</li>
                            <li class="filter" data-role="button" data-filter="pruksa_project">พฤกษา เรียล เอสเตท</li>
                            <li class="filter" data-role="button" data-filter="land_and_house_project">Land & House</li>
                            <li class="filter" data-role="button" data-filter="quality_house_project">ควอลิตี้ เฮ้าส์</li>
                            <li class="filter" data-role="button" data-filter="sansiri_project">แสนสิริ</li>
                            <li class="filter" data-role="button" data-filter="property_perfect_project">Property Perfect</li>
                            <li class="filter" data-role="button" data-filter="parinsiri_project">ปริญสิริ</li>
                            <li class="filter" data-role="button" data-filter="north_land_project">นอร์ธแลนด์ ดีวีลอปเม้นท์</li>
                            <li class="filter" data-role="button" data-filter="kanda_project">กานดากรุ๊ป</li>
                            <li class="filter" data-role="button" data-filter="smile_land_project">สมายแลนด์</li>
                            <li class="filter" data-role="button" data-filter="golden_project">โกลเด้น ดีเวลลอปเม้นท์</li>
                            <li class="filter" data-role="button" data-filter="suanluang_project">Suanluang Home & Property</li>
                            <li class="filter" data-role="button" data-filter="sammakorn_project">สัมมากร</li>
                            <li class="filter" data-role="button" data-filter="keppel_thai_project">Keppel Thai Properties</li>
                            <li class="filter" data-role="button" data-filter="lhm_property_project">LHM Property Group</li>
                            <li class="filter" data-role="button" data-filter="the_balanz_project">The Balanz</li> 
                            <li class="filter" data-role="button" data-filter="golden_land_project">โกลเด้น แลนด์ เรสซิเด้นซ์</li> 
                            <li class="filter" data-role="button" data-filter="metropolis_project">เมโทรโพลิส พรอพเพอร์ตี้</li> 
                            <li class="filter" data-role="button" data-filter="enrich_project">Enrich</li> 
                            <li class="filter" data-role="button" data-filter="suetrong_project">ซื่อตรงกรุ๊ป</li>
                            <li class="filter" data-role="button" data-filter="the_estate_project">The Estate</li>
                        </ul>

                        <!--Items Container-->
                        <div class="filter-list items-container clearfix">

                            <!--Item-->
                            <div class="mix mix_all pruksa_project">
                                <figure class="image"><img src="../assets/images/project/logo_pruksa_thai_368x240.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/project/logo_pruksa_thai_368x240.jpg" data-rel="prettyPhoto" title="Architecture" class="fa fa-camera"></a></div>
                                    <div class="title"><span>พฤกษา เรียล เอสเตท</span></div>
                                    <div class="link-icon"><a href="pruksa_project" class="fa fa-link"></a></div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="mix mix_all land_and_house_project">
                                <figure class="image"><img src="../assets/images/project/logo_landandhouse_368x240.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/project/logo_landandhouse_368x240.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a></div>
                                    <div class="title"><span>Land & House</span></div>
                                    <div class="link-icon"><a href="land_and_house_project" class="fa fa-link"></a></div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="mix mix_all quality_house_project">
                                <figure class="image"><img src="../assets/images/project/logo_qhouse_368x240.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/project/logo_qhouse_368x240.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a></div>
                                    <div class="title"><span>Quality House</span></div>
                                    <div class="link-icon"><a href="quality_house_project" class="fa fa-link"></a></div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="mix mix_all sansiri_project">
                                <figure class="image"><img src="../assets/images/project/logo_sansiri_368x240.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/project/logo_sansiri_368x240.jpg" data-rel="prettyPhoto" title="House" class="fa fa-camera"></a></div>
                                    <div class="title"><span>แสนสิริ</span></div>
                                    <div class="link-icon"><a href="sansiri_project" class="fa fa-link"></a></div>
                                </div>
                            </div>

                            <!--Item-->
                            <div class="mix mix_all property_perfect_project">
                                <figure class="image"><img src="../assets/images/project/logo_property_perfect_368x240.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/project/logo_property_perfect_368x240.jpg" data-rel="prettyPhoto" title="Mall" class="fa fa-camera"></a></div>
                                    <div class="title"><span>Property Perfect</span></div>
                                    <div class="link-icon"><a href="property_perfect_project" class="fa fa-link"></a></div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="mix mix_all parinsiri_project">
                                <figure class="image"><img src="../assets/images/project/logo_prinsiri_368x240.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/project/logo_prinsiri_368x240.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a></div>
                                    <div class="title"><span>ปริญสิริ</span></div>
                                    <div class="link-icon"><a href="parinsiri_project" class="fa fa-link"></a></div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="mix mix_all north_land_project">
                                <figure class="image"><img src="../assets/images/resource/project-image-4.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/resource/project-image-4.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a></div>
                                    <div class="title"><span>นอร์ธแลนด์ ดีวีลอปเม้นท์</span></div>
                                    <div class="link-icon"><a href="north_land_project" class="fa fa-link"></a></div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="mix mix_all kanda_project">
                                <figure class="image"><img src="../assets/images/resource/project-image-4.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/resource/project-image-4.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a></div>
                                    <div class="title"><span>กานดากรุ๊ป</span></div>
                                    <div class="link-icon"><a href="kanda_project" class="fa fa-link"></a></div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="mix mix_all smile_land_project">
                                <figure class="image"><img src="../assets/images/resource/project-image-4.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/resource/project-image-4.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a></div>
                                    <div class="title"><span>สมายแลนด์</span></div>
                                    <div class="link-icon"><a href="smile_land_project" class="fa fa-link"></a></div>
                                </div>
                            </div>
                            
                            <!--Item-->
                            <div class="mix mix_all golden_project">
                                <figure class="image"><img src="../assets/images/resource/project-image-4.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/resource/project-image-4.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a></div>
                                    <div class="title"><span>โกลเด้น ดีเวลลอปเม้นท์</span></div>
                                    <div class="link-icon"><a href="golden_project" class="fa fa-link"></a></div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="mix mix_all suanluang_project">
                                <figure class="image"><img src="../assets/images/resource/project-image-4.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/resource/project-image-4.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a></div>
                                    <div class="title"><span>Suanluang Home & Property</span></div>
                                    <div class="link-icon"><a href="suanluang_project" class="fa fa-link"></a></div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="mix mix_all sammakorn_project">
                                <figure class="image"><img src="../assets/images/resource/project-image-4.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/resource/project-image-4.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a></div>
                                    <div class="title"><span>สัมมากร</span></div>
                                    <div class="link-icon"><a href="sammakorn_project" class="fa fa-link"></a></div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="mix mix_all keppel_thai_project">
                                <figure class="image"><img src="../assets/images/resource/project-image-4.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/resource/project-image-4.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a></div>
                                    <div class="title"><span>Keppel Thai Properties</span></div>
                                    <div class="link-icon"><a href="keppel_thai_project" class="fa fa-link"></a></div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="mix mix_all lhm_property_project">
                                <figure class="image"><img src="../assets/images/resource/project-image-4.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/resource/project-image-4.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a></div>
                                    <div class="title"><span>LHM Property Group</span></div>
                                    <div class="link-icon"><a href="lhm_property_project" class="fa fa-link"></a></div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="mix mix_all the_balanz_project">
                                <figure class="image"><img src="../assets/images/resource/project-image-4.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/resource/project-image-4.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a></div>
                                    <div class="title"><span>The Balanz</span></div>
                                    <div class="link-icon"><a href="the_balanz_project" class="fa fa-link"></a></div>
                                </div>
                            </div>
                            <!--Item-->
<!--                            <div class="mix mix_all natural_living_project">
                                <figure class="image"><img src="../assets/images/resource/project-image-4.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/resource/project-image-4.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a></div>
                                    <div class="title"><span>แนชเชอรัล ลิฟวิ่ง พร็อพเพอร์ตี้</span></div>
                                    <div class="link-icon"><a href="natural_living_project" class="fa fa-link"></a></div>
                                </div>
                            </div>-->
                            <!--Item-->
                            <div class="mix mix_all golden_land_project">
                                <figure class="image"><img src="../assets/images/resource/project-image-4.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/resource/project-image-4.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a></div>
                                    <div class="title"><span>โกลเด้น แลนด์ เรสซิเด้นซ์</span></div>
                                    <div class="link-icon"><a href="golden_land_project" class="fa fa-link"></a></div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="mix mix_all metropolis_project">
                                <figure class="image"><img src="../assets/images/resource/project-image-4.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/resource/project-image-4.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a></div>
                                    <div class="title"><span>เมโทรโพลิส พรอพเพอร์ตี้</span></div>
                                    <div class="link-icon"><a href="metropolis_project" class="fa fa-link"></a></div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="mix mix_all enrich_project">
                                <figure class="image"><img src="../assets/images/resource/project-image-4.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/resource/project-image-4.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a></div>
                                    <div class="title"><span>Enrich</span></div>
                                    <div class="link-icon"><a href="enrich_project" class="fa fa-link"></a></div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="mix mix_all suetrong_project">
                                <figure class="image"><img src="../assets/images/resource/project-image-4.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/resource/project-image-4.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a></div>
                                    <div class="title"><span>ซื่อตรงกรุ๊ป</span></div>
                                    <div class="link-icon"><a href="suetrong_project" class="fa fa-link"></a></div>
                                </div>
                            </div>
                            <!--Item-->
                            <div class="mix mix_all the_estate_project">
                                <figure class="image"><img src="../assets/images/resource/project-image-4.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/resource/project-image-4.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a></div>
                                    <div class="title"><span>The estate</span></div>
                                    <div class="link-icon"><a href="the_estate_project" class="fa fa-link"></a></div>
                                </div>
                            </div>
                            <!--Item-->
<!--                            <div class="mix mix_all samut_songkhram_project">
                                <figure class="image"><img src="../assets/images/resource/project-image-4.jpg" alt="" title=""></figure>
                                <div class="overlay anim-5-all">
                                    <div class="pop-icon"><a href="../assets/images/resource/project-image-4.jpg" data-rel="prettyPhoto" title="Bridge" class="fa fa-camera"></a></div>
                                    <div class="title"><span>อ.เมือง สมุทรสงคราม</span></div>
                                    <div class="link-icon"><a href="samut_songkhram_project" class="fa fa-link"></a></div>
                                </div>
                            </div>-->

                        </div>
                        <!--Items Container End-->


                    </div>
                </div>

            </section>

            <!--Main Footer-->
            <?php include '../include/include_footer.php'; ?>


            <!--Scroll to top-->
            <div class="go-to-top img-circle anim-3 fa fa-angle-up"></div>

        </div>
        <!--End pagewrapper-->

        <?php include '../include/include_js.php'; ?>
    </body>
</html>
