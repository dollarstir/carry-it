<?php
involve('functions.php');
begin();
?>
<body itemscope="">
<div class="theme-layout">
    <?php topnav(); ?>



    <div id="calculate-form-popup">
        <div class="calculate-form-popup">
            <div class="modal-dialog2">
                <div class="modal-content2">
                    <div class="modal-body2">
                        <button type="submit"><img src="front/images/close1.png" alt="" /></button>
                        <div class="cargo-shipment">
                            <div class="calculate-shipping">
                                <div class="dark-title">
                                    <span><i class="fa fa-steam"></i>Please Enter the tracking number to see the status of your item.</span>
                                    <h3>Track Shipment</h3>
                                </div>

                                <div class="calculate-shipping-form">
                                    <form method="get" action="track.html">
                                        <div class="row">



                                            <div class="col-md-12">
                                                <input type="text" name="track" required class="text-field" placeholder="WayBill Number" />
                                            </div>





                                            <div class="col-md-12">
                                                <button type="submit" href="front/#" title="" class="theme-btn"><i class="fa fa-paper-plane"></i> Track Shipment</button>
                                            </div>
                                            <!--<div class="col-md-12">
                                                <div class="total">
                                                    <div class="cargo-total"><h4>TOTAL:</h4> $345</div>
                                                </div>
                                            </div>-->
                                        </div>
                                    </form>
                                </div>
                            </div><!-- Calculate Shipping -->
                        </div><!-- Cargo Shipment -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-slider overlape">
        <div id="full-slider-wrapper">
            <div id="layerslider" style="width:100%; height:696px; ">

                <div class="ls-slide" data-ls="transition2d:35; timeshift:-1000; slidedelay: 7000;">
                    <img itemprop="image" src="front/images/resource/slide1.jpg" class="ls-bg" alt="Slide background"/>

                    <div class="ls-slide"
                         style="font-family:raleway; font-weight:700; font-size:16px; text-transform:uppercase; line-height:28px; color:#ffffff; top:214px; left:100px;"
                         data-ls="offsetxout:right; offsetxin:left; durationin:700; delayin:110; easingin:easeOutElastic; fadein:false; easingout:easeInBack; fadeout:false;">
                        We Offer Transport
                    </div>

                    <div class="ls-slide"
                         style="font-family:raleway; color:#ffffff; font-weight:700; font-size:16px; text-transform:uppercase; line-height:28px; top:240px; left:100px;"
                         data-ls="offsetxout:right; offsetxin:left; durationin:700; delayin:110; easingin:easeOutElastic; fadein:false; easingout:easeInBack; fadeout:false;">
                        <span style="color:#ebe814;">Quick &amp; Powerful</span> Solution
                    </div>

                    <div class="ls-slide"
                         style="font-family:roboto; font-size:150px; color:#ffffff; font-weight:900; top:275px; left:100px;"
                         data-ls="offsetxout:left; offsetxin:right; durationin:900; delayin:1000; easingin:easeOutExpo; fadein:false; easingout:easeInBack; fadeout:false;">
                        CAR<span style="color:#ebe814;">G</span></div>

                    <div class="ls-slide"
                         style="font-family:roboto; font-size:250px; color:#ebe814; font-weight:900; top:180px; left:500px;"
                         data-ls="offsetyout:top; offsetyin:bottom; durationin:1000; delayin:1000; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">
                        O
                    </div>

                    <div class="ls-slide"
                         style="line-height:28px; font-family:lato; font-size:15px; color:#ffffff; top:445px; left:100px;"
                         data-ls="offsetxout:left; offsetxin:right; durationin:1300; delayin:1200; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">

                    </div>

                    <a href="front/track.html" itemprop="url" title="" class="ls-slide slide-icon"
                       style="padding:16px 45px; background:#ffb400; color:#ffffff; font-size:12px; top:539px; left:100px;"
                       data-ls="offsetxout:left; offsetyin:bottom; durationin:1500; delayin:1300; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">ORDER
                        NOW</a>

                    <img src="front/images/resource/slide-model.png" alt="" itemprop="image" class="ls-slide"
                         style="top:0; left:540px;"
                         data-ls="offsetyout:top; offsetyin:bottom; durationin:2000; delayin:1500; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;"/>
                </div><!-- Slide 1 -->

                <div class="ls-slide" data-ls="transition2d:40; timeshift:-1000; slidedelay: 6000;">

                    <img itemprop="image" src="front/images/resource/slide2.jpg" class="ls-bg" alt="Slide background"/>

                    <img src="front/images/resource/logo2.png" alt="" itemprop="image" class="ls-slide"
                         style="top:200px; left:50%;"
                         data-ls="offsetyout:top; offsetyin:top; durationin:700; delayin:110; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;"/>

                    <h4 class="ls-slide text-color"
                        style="top:324px; left:50%; font-family:raleway; font-size:60px; line-height:55px; font-weight:900; text-transform:uppercase;"
                        data-ls="offsetxout:left; rotatexin:90deg; durationin:900; delayin:300; easingin:easeOutBack; fadein:true; easingout:easeInBack; fadeout:false;">
                        Cargo Freight</h4>

                    <span class="ls-slide"
                          style="top:390px; left:50%; font-family:roboto; color:#ffffff; border-radius:3px; padding:12px 40px; background:rgba(31,66,93,.81); font-size:20px; font-weight:200;"
                          data-ls="offsetyout:bottom; offsetyin:top; durationin:1300; delayin:500; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">Logistics &amp; Transportation</span>

                    <div class="ls-slide"
                         style="top:467px; left:50%; line-height:28px; font-family:lato; font-size:15px; color:#ffffff; text-align:center;"
                         data-ls="offsetxout:left; offsetxin:right; durationin:1500; delayin:700; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">

                    </div>
                </div><!-- Slide 2 -->

                <div class="ls-slide" data-ls="transition2d:30; timeshift:-1000; slidedelay: 6000;">
                    <img itemprop="image" src="front/images/resource/slide3.jpg" class="ls-bg" alt="Slide background"/>

                    <div class="ls-slide"
                         style="top:223px; left:0;font-family:roboto; font-size:22px; color:#ffffff; text-shadow: -2px 4px 18px rgba(0, 0, 0, 0.15);"
                         data-ls="offsetyout:top; offsetyin:top; durationin:700; delayin:110; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">
                        Making Transportation
                    </div>

                    <h3 class="ls-slide text-color"
                        style="top:260px; left:0; line-height:70px; font-family:raleway; font-weight:900; font-size:70px; text-transform:uppercase; text-shadow: -2px 4px 18px rgba(0, 0, 0, 0.15);"
                        data-ls="offsetyout:top; rotatexin:90deg; durationin:900; delayin:300; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">
                        Fast &amp; Safe</h3>

                    <strong class="ls-slide"
                            style="top:345px; left:0; letter-spacing:3px; font-family:raleway; color:#ffffff; text-transform:uppercase; border-radius:3px; padding:14px 25px; background:#1f425d; font-size:13px;"
                            data-ls="offsetyout:bottom; offsetyin:top; durationin:1300; delayin:500; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">Fast
                        &amp; Secure Delivery</strong>

                    <div class="ls-slide"
                         style="top:425px; left:0;line-height:28px; font-family:lato; font-size:15px; color:#ffffff;"
                         data-ls="offsetxout:left; offsetxin:right; durationin:1500; delayin:700; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">

                    </div>

                    <a href="front/track.html" itemprop="url" title="" class="ls-slide slide-btn slide-icon"
                       style="top:515px; left:0; text-transform:uppercase; padding:16px 40px; color:#ffb400; border:2px solid #ffb400; font-family:raleway; font-size:13px; font-weight:700;"
                       data-ls="offsetxout:left; offsetyin:bottom; durationin:1700; delayin:1000; easingin:easeOutBack; fadein:false; easingout:easeInBack; fadeout:false;">CALCULATE
                        PACKAGE</a>
                </div><!-- Slide 3 -->
            </div>
        </div>
    </div><!-- Main Slider -->

    <section class="overlape track-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="track-form">
                        <div class="heading2">
                            <img src="front/images/resource/track-form.png" alt=""/>
                            <span>BY SEAFREIGHT</span>
                            <h3>SHIPMENT VISIBILITY</h3>
                        </div>
                        <form action="track.html" method="get">
                            <label><i class="fa fa-stumbleupon"></i><input name="track" type="text" placeholder="Track a Shipment: Enter Way Bill Number"/></label>
                            <button title="" href="front/#" class="theme-btn"
                               ><i class="fa fa-paper-plane"></i>Track</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <span>WHAT WE PROVIDE FOR CLIENTS</span>
                        <h2>QUICK CARGO SERVICES</h2>
                    </div>

                    <div class="top-margin packages">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="our-packages">
                                    <div class="packages-thumb">
                                        <img itemprop="image" src="front/images/resource/packages1.jpg" alt=""/>
                                        <div class="packages-info">
                                            <img src="front/images/resource/packages-info1.png" alt="" itemprop="image"/>
                                            <h2 itemprop="name"><a itemprop="url" href="front/#" title="">Air
                                                    Freight</a></h2>
                                            <span>Delivery 3-4 Days</span>
                                            <ul>
                                                <li>Flat Rate For Each Shipment.</li>
                                                <li>Delivery On Your Doorstep</li>
                                                <li>Charters &amp; Intermodal Transportation</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="our-packages">
                                    <div class="packages-thumb">
                                        <img itemprop="image" src="front/images/resource/packages2.jpg" alt=""/>
                                        <div class="packages-info">
                                            <img src="front/images/resource/packages-info2.png" alt="" itemprop="image"/>
                                            <h2 itemprop="name"><a itemprop="url" href="front/#" title="">Road
                                                    Freight</a></h2>
                                            <span>Delivery 3-4 Days</span>
                                            <ul>
                                                <li>100% Sure And Safe Cargo Service</li>
                                                <li>Direct Door-To-Door Service.</li>
                                                <li>Same-Day Or Overnight Delivery</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="our-packages">
                                    <div class="packages-thumb">
                                        <img itemprop="image" src="front/images/resource/packages3.jpg" alt=""/>
                                        <div class="packages-info">
                                            <img src="front/images/resource/packages-info3.png" alt="" itemprop="image"/>
                                            <h2 itemprop="name"><a itemprop="url" href="front/#" title="">Ocean
                                                    Freight</a></h2>
                                            <span>Delivery 3-4 Days</span>
                                            <ul>
                                                <li>No Commission Or Monthly Fees</li>
                                                <li>Save Hundreds Of Dollars</li>
                                                <li>Over 42,000 Dedicated Employees</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="block gray">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="column-title">
                        <span>Safe & Affordable Cargo Services</span>
                        <h2>We Offer Quick Cargo Shipment Facilities</h2>
                        <p></p>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="modern-services-carousel style2" id="modern-services-carousel">
                        <div class="modern-service">
                            <div class="mod-service-inner">
                                <span><img itemprop="image" alt="" src="front/images/resource/101.png"></span>
                                <h3><a href="front/#" title="">Reports & Visibility</a></h3>
                                <i>Professionally Productize</i>
                                <p></p>
                            </div>
                        </div><!-- Modern Service -->
                        <div class="modern-service">
                            <div class="mod-service-inner">
                                <span><img itemprop="image" alt="" src="front/images/resource/102.png"></span>
                                <h3><a href="front/#" title="">Packages Storage</a></h3>
                                <i>Professionally Productize</i>
                                <p></p>
                            </div>
                        </div><!-- Modern Service -->
                        <div class="modern-service">
                            <div class="mod-service-inner">
                                <span><img itemprop="image" alt="" src="front/images/resource/103.png"></span>
                                <h3><a href="front/#" title="">Company Contract</a></h3>
                                <i>Professionally Productize</i>
                                <p></p>
                            </div>
                        </div><!-- Modern Service -->
                        <div class="modern-service">
                            <div class="mod-service-inner">
                                <span><img itemprop="image" alt="" src="front/images/resource/101.png"></span>
                                <h3><a href="front/#" title="">Reports & Visibility</a></h3>
                                <i>Professionally Productize</i>
                                <p></p>
                            </div>
                        </div><!-- Modern Service -->
                    </div><!-- Modern Services Carousel -->
                </div>
            </div>
        </div>
    </section>


    <section class="block no-padding">
        <div class="fixed-bg  layer" style="background: url(images/parallax4.jpg) no-repeat scroll;"></div>
        <div class="row">
            <div class="col-md-6">
                <div class="cargo-shipment">
                    <div class="calculate-shipping style2">
                        <div class="dark-title">
                            <span><i class="fa fa-steam"></i>Please Fill All Inquiry To Get Your Total Price.</span>
                            <h3>CALCULATE SHIPPING</h3>
                        </div>

                        <div class="calculate-shipping-form">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="select-service select-box">
                                            <select>
                                                <option>Select Service</option>
                                                <option>Air</option>
                                                <option>Ocean</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="select-from select-box">
                                            <select>
                                                <option>From</option>
                                                <option>Air</option>
                                                <option>Ocean</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="select-goods select-box">
                                            <select>
                                                <option>Type Of Goods</option>
                                                <option>Air</option>
                                                <option>Ocean</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="select-to select-box">
                                            <select>
                                                <option>To</option>
                                                <option>Air</option>
                                                <option>Ocean</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" class="text-field" placeholder="Weight (kg)"/>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="extra-services">
                                            <h4><i class="fa fa-paper-plane"></i> EXTRA SERVICES</h4>
                                            <span>
                                                    <input tabindex="23" type="checkbox" id="field18"/>
                                                    <label for="field18">Express Delivery</label>
                                                </span>
                                            <span>
                                                    <input tabindex="23" type="checkbox" id="field19"/>
                                                    <label for="field19">Add Insurance</label>
                                                </span>
                                            <span>
                                                    <input tabindex="23" type="checkbox" id="field110"/>
                                                    <label for="field110">Packaging</label>
                                                </span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="cargo-size">
                                            <h4><i class="fa fa-fire"></i>CARGO SIZE:</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <input type="text" class="text-field" placeholder="Length (cm)"/>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="text-field" placeholder="Height (cm)"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <a href="front/#" title="" class="theme-btn"><i class="fa fa-paper-plane"></i> Check
                                            Now</a>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="total">
                                            <div class="cargo-total"><h4>TOTAL:</h4> $345</div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- Calculate Shipping -->
                </div><!-- Cargo Shipment -->
            </div>
            <div class="col-md-6">
                <div class="shipment-guide">
                    <div class="dark-title light">
                        <span><i class="fa fa-steam"></i>Company Overview About</span>
                        <h3>SHIPMENT GUIDE</h3>
                    </div>
                    <p>At MoveItFast Shipping Company, our approach to courier services is unique. Our Courier Franchisees offer a cost effective, reliable, timetable courier service, backed up by the latest computer technology and online parcel track and trace facilities, making Fastrack Express Express Shipping Company the ideal choice for individual consumers, small to medium sized businesses as well as leading international e-tailers. </p>
                    <div class="shipment-list">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="shipment-name">
                                    <span><i class="fa fa-ship"></i></span>Quallity Commitment
                                </div><!-- Shipment Name -->
                            </div>
                            <div class="col-md-6">
                                <div class="shipment-name">
                                    <span><i class="fa fa-ship"></i></span>Quallity Commitment
                                </div><!-- Shipment Name -->
                            </div>
                            <div class="col-md-6">
                                <div class="shipment-name">
                                    <span><i class="fa fa-ship"></i></span>Quallity Commitment
                                </div><!-- Shipment Name -->
                            </div>
                            <div class="col-md-6">
                                <div class="shipment-name">
                                    <span><i class="fa fa-ship"></i></span>Quallity Commitment
                                </div><!-- Shipment Name -->
                            </div>
                        </div>
                    </div><!-- Shipment List -->
                    <a class="theme-btn" href="front/about.php.html" title=""><i class="fa fa-paper-plane"></i> About Unload</a>
                </div><!-- Shipment Guide -->
            </div>
        </div>
    </section>

<!--
    <section class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <span>What We Provide For Clients</span>
                        <h2>Company RECENT NEWS</h2>
                    </div>
                    <div class="top-margin">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="news-box">
                                    <div class="news-thumb">
                                        <a href="front/blog-detail.html" title="" itemprop="url"><img itemprop="image"
                                                                                                src="front/images/resource/news1.jpg"
                                                                                                alt=""/></a>
                                        <div class="date">
                                            <strong>04</strong>
                                            <span>August</span>
                                        </div>
                                    </div>
                                    <div class="news-detail">
                                        <h2 itemprop="headline"><a itemprop="url" href="front/blog-detail.html" title="">New
                                                Service Available: End-To-End Logistics</a></h2>
                                        <ul class="post-meta2">
                                            <li><i class="fa fa-comments"></i><a title=""
                                                                                 href="front/blog-detail.html#comments">03
                                                    Comments</a></li>
                                            <li><i class="fa fa-user"></i>By <a itemprop="url" title=""
                                                                                href="front/admin.html">Admin</a></li>
                                        </ul>
                                        <p itemprop="description">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit. Aenean commodo enean dolor sit amet, consectetuer.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="news-box">
                                    <div class="news-thumb">
                                        <a href="front/blog-detail.html" title="" itemprop="url"><img itemprop="image"
                                                                                                src="front/images/resource/news2.jpg"
                                                                                                alt=""/></a>
                                        <div class="date">
                                            <strong>08</strong>
                                            <span>March</span>
                                        </div>
                                    </div>
                                    <div class="news-detail">
                                        <h2 itemprop="headline"><a itemprop="url" href="front/blog-detail.html" title="">We
                                                Are Hiring. Become One Of Our Drivers!</a></h2>
                                        <ul class="post-meta2">
                                            <li><i class="fa fa-comments"></i><a title=""
                                                                                 href="front/blog-detail.html#comments">03
                                                    Comments</a></li>
                                            <li><i class="fa fa-user"></i>By <a itemprop="url" title=""
                                                                                href="front/admin.html">Admin</a></li>
                                        </ul>
                                        <p itemprop="description">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit. Aenean commodo enean dolor sit amet, consectetuer.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="news-box">
                                    <div class="news-thumb">
                                        <a href="front/blog-detail.html" title="" itemprop="url"><img itemprop="image"
                                                                                                src="front/images/resource/news3.jpg"
                                                                                                alt=""/></a>
                                        <div class="date">
                                            <strong>04</strong>
                                            <span>April</span>
                                        </div>
                                    </div>
                                    <div class="news-detail">
                                        <h2 itemprop="headline"><a itemprop="url" href="front/blog-detail.html" title="">First
                                                Quartal 2015 Revenue Report Released</a></h2>
                                        <ul class="post-meta2">
                                            <li><i class="fa fa-comments"></i><a title=""
                                                                                 href="front/blog-detail.html#comments">03
                                                    Comments</a></li>
                                            <li><i class="fa fa-user"></i>By <a itemprop="url" title=""
                                                                                href="front/admin.html">Admin</a></li>
                                        </ul>
                                        <p itemprop="description">Lorem ipsum dolor sit amet, consectetuer adipiscing
                                            elit. Aenean commodo enean dolor sit amet, consectetuer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->


    <!--<section class="block gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="reviews-sec">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="heading2 heading4 light">
                                    <span>What People Says About Us</span>
                                    <h3>COMPANY BENIFITS</h3>
                                </div>
                                <div class="company-benifits">
                                    <div class="toggle" id="toggle">
                                        <div class="toggle-item activate">
                                            <h3 class="active"><i class="fa fa-life-bouy"></i>Using This Dedicated
                                                Purpose Theme? <span><i class="fa fa-angle-up"></i></span></h3>
                                            <div class="content">
                                                <div class="simple-text">
                                                    <p>Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar
                                                        estibulum bib volutpat. Sociis, eget mollis, exercitationem
                                                        fames.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="toggle-item">
                                            <h3 class=""><i class="fa fa-joomla"></i>Creative And Corporate Industries?
                                                <span><i class="fa fa-angle-up"></i></span></h3>
                                            <div class="content">
                                                <div class="simple-text">
                                                    <p>Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar
                                                        estibulum bib volutpat. Sociis, eget mollis, exercitationem
                                                        fames.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="toggle-item">
                                            <h3 class=""><i class="fa fa-leaf"></i>Business Niche Or Creative Style?
                                                <span><i class="fa fa-angle-up"></i></span></h3>
                                            <div class="content">
                                                <div class="simple-text">
                                                    <p>Suspendisse potenti. Maecenas dapibus ac tellus sed pulvinar
                                                        estibulum bib volutpat. Sociis, eget mollis, exercitationem
                                                        fames.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="heading2 heading4 light">
                                    <span>What People Says About Us</span>
                                    <h3>CUSTOMERS REVIEWS</h3>
                                </div>

                                <div class="customers-reviews">
                                    <div class="customers-review-carousel" id="customers-review-carousel">
                                        <div class="review-area">
                                            <div class="customer-thumb"><img src="front/images/resource/review1.jpg" alt=""
                                                                             itemprop="image"/></div>
                                            <div class="customer-detail">
                                                <p itemprop="description"><span><i class="fa fa-quote-left"></i></span>Lorem
                                                    ipsum dolor sit amet, cons ectetuer adipiscing diculus mus. Lorem
                                                    ipsum dolor siamet, con ridiculus sum dolor sit ametum. Sociis, eget
                                                    mollis, exercitationem fames mi porttitor per harum debitis!
                                                    Praesent fugiat reprehenderit qui Molestiae. Pellentesque.</p>
                                                <div class="customer-info">
                                                    <h4>YMYZ ADAMS</h4>
                                                    <h5>CUSTOMER REVIEWS</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="review-area">
                                            <div class="customer-thumb"><img src="front/images/resource/review2.jpg" alt=""
                                                                             itemprop="image"/></div>
                                            <div class="customer-detail">
                                                <p itemprop="description"><span><i class="fa fa-quote-left"></i></span>Lorem
                                                    ipsum dolor sit amet, cons ectetuer adipiscing diculus mus. Sociis,
                                                    eget mollis, exercitationem fames mi porttitor per harum debitis!
                                                    Praesent fugiat reprehenderit qui Molestiae. Lorem ipsum dolor
                                                    siamet, con ridiculus sum dolor sit ametum Pellentesque.</p>
                                                <div class="customer-info">
                                                    <h4>JOHAN DOE</h4>
                                                    <h5>CUSTOMER REVIEWS</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="review-area">
                                            <div class="customer-thumb"><img src="front/images/resource/review3.jpg" alt=""
                                                                             itemprop="image"/></div>
                                            <div class="customer-detail">
                                                <p itemprop="description"><span><i class="fa fa-quote-left"></i></span>Sociis,
                                                    eget mollis, exercitationem fames mi porttitor per harum debitis!
                                                    Praesent fugiat reprehenderit qui Molestiae. Pellentesque. Lorem
                                                    ipsum dolor sit amet, cons ectetuer adipiscing diculus mus. Lorem
                                                    ipsum dolor siamet, con ridiculus sum dolor sit ametum. </p>
                                                <div class="customer-info">
                                                    <h4>JOHAN CARTER</h4>
                                                    <h5>CUSTOMER REVIEWS</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->


    <section class="block no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="partners" id="partners">
                        <li><a itemprop="url" href="front/#" title=""><img itemprop="image" src="front/images/resource/partner1.png"
                                                                     alt=""/></a></li>
                        <li><a itemprop="url" href="front/#" title=""><img itemprop="image" src="front/images/resource/partner2.png"
                                                                     alt=""/></a></li>
                        <li><a itemprop="url" href="front/#" title=""><img itemprop="image" src="front/images/resource/partner3.png"
                                                                     alt=""/></a></li>
                        <li><a itemprop="url" href="front/#" title=""><img itemprop="image" src="front/images/resource/partner4.png"
                                                                     alt=""/></a></li>
                        <li><a itemprop="url" href="front/#" title=""><img itemprop="image" src="front/images/resource/partner5.png"
                                                                     alt=""/></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php foot(); ?>

</div>

<!-- Region Popup -->
<div class="modal fade region" id="region" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"><img src="front/images/close.png" alt="" itemprop="image"/></span></button>
                <div class="region-detail">
                    <div class="row">
                        <div class="col-md-6 column">
                            <div class="region-contact-info">
                                <div class="heading2">
                                    <span>Fast And Safe</span>
                                    <h3>Office Address</h3>
                                </div>
                                <p>Transport logitec, ltd. 2258 millenioum Street Columbia, DK 85966</p>
                                <div class="contact-detail">
                                        <span class="contact">
                                            <i class="fa fa-mobile"></i>
                                            <strong>Phone No</strong>
                                            <span>+17325647820</span>
                                            <span>+1 73 25 64 7820</span>
                                        </span>
                                    <span class="contact">
                                            <i class="fa fa-email"></i>
                                            <strong>Email Address</strong>
                                            <span>info@MoveItFasts.co</span>
                                        </span>
                                    <span class="contact">
                                            <i class="fa fa-time"></i>
                                            <strong>Office Timing</strong>
                                            <span>10:00am - 06:00pm / Sunday: Close</span>
                                        </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 column">
                            <div class="loc-thumb">
                                <img src="front/images/resource/contact.jpg" alt="" itemprop="image"/>
                                <p></p>
                                <a class="theme-btn" href="front/#" title="" itemprop="url">CONTACT US NOW</a>
                            </div>
                        </div>
                    </div>
                </div><!-- Region Detail -->
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="submission-message" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="submission-data">
                    <span><img src="front/images/resource/submission.png" alt=""/></span>
                    <h1>SUBMISSION SUCCESSFUL</h1>
                    <p>Thank You For Your Booking With Unload. We Have Sent you a Message Shortly.</p>
                    <a href="front/#" title="" class="theme-btn" data-dismiss="modal" aria-label="Close"><i
                                class="fa fa-paper-plane"></i>BACK TO MAIN</a>
                </div><!-- Submission-data -->
            </div>
        </div>
    </div>
</div>

<!-- Script -->
<?php scripts(); ?>
<script>
    $(document).ready(function () {
        "use strict";

        //** Slider  **//
        $("#layerslider").layerSlider({
            responsive: true,
            responsiveUnder: 1170,
            layersContainer: 1170,
            skin: 'v5',
            hoverPrevNext: true,
            navPrevNext: true,
            navStartStop: false,
            navButtons: false,
            skinsPath: 'layerslider/skins/'
        });

        //** Reviews **//
        $("#customers-review-carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000,
            loop: false,
            dots: false,
            nav: true,
            margin: 0,
            items: 1,
            singleItem: true,
            responsiveClass: true,
            responsive: {
                0: {
                    nav: false
                },
                900: {
                    nav: true
                }
            }
        });

        $("#modern-services-carousel").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 2000,
            loop: false,
            dots: false,
            nav: true,
            margin: 30,
            items: 3,
            responsiveClass: true,
            responsive: {
                1200: {items: 3},
                980: {items: 2},
                480: {items: 2},
                0: {items: 1}
            }
        });

        // Accordion //
        $('#toggle .content').hide();
        $('#toggle h3:first').addClass('active').next().slideDown(500).parent().addClass("activate");
        $('#toggle h3').on("click", function () {
            if ($(this).next().is(':hidden')) {
                $('.toggle h3').removeClass('active').next().slideUp(500).removeClass('animated zoomIn').parent().removeClass("activate");
                $(this).toggleClass('active').next().slideDown(500).addClass('animated zoomIn').parent().toggleClass("activate");
                return false;
            }
        });
    });
</script>
</body>

<!-- Mirrored from html.webinane.com/unload/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Aug 2019 06:57:15 GMT -->
</html>
