<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Move it</title>
    <link rel="icon" href="back/img/logo.png" type="image/png">

    <link rel="stylesheet" href="back/css/bootstrap1.min.css" />

    <link rel="stylesheet" href="back/vendors/themefy_icon/themify-icons.css" />

    <link rel="stylesheet" href="back/vendors/swiper_slider/css/swiper.min.css" />

    <link rel="stylesheet" href="back/vendors/select2/css/select2.min.css" />

    <link rel="stylesheet" href="back/vendors/niceselect/css/nice-select.css" />

    <link rel="stylesheet" href="back/vendors/owl_carousel/css/owl.carousel.css" />

    <link rel="stylesheet" href="back/vendors/gijgo/gijgo.min.css" />

    <link rel="stylesheet" href="back/vendors/font_awesome/css/all.min.css" />
    <link rel="stylesheet" href="back/vendors/tagsinput/tagsinput.css" />

    <link rel="stylesheet" href="back/vendors/datatable/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="back/vendors/datatable/css/responsive.dataTables.min.css" />
    <link rel="stylesheet" href="back/vendors/datatable/css/buttons.dataTables.min.css" />

    <link rel="stylesheet" href="back/vendors/text_editor/summernote-bs4.css" />

    <link rel="stylesheet" href="back/vendors/morris/morris.css">

    <link rel="stylesheet" href="back/vendors/material_icon/material-icons.css" />

    <link rel="stylesheet" href="back/css/metisMenu.css">

    <link rel="stylesheet" href="back/css/style1.css" />
    <link rel="stylesheet" href="back/css/colors/default.css" id="colorSkinCSS">
</head>

<body class="crm_body_bg">



<?php
involve('stafffunctions');

staffsidebar();
 ?>


    <section class="main_content dashboard_part">

    <?php staffheader(); ?>

        <div class="main_content_iner ">
            <div class="container-fluid p-0">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <h4>Table</h4>
                                <div class="box_right d-flex lms_block">
                                    <div class="serach_field_2">
                                        <!-- <div class="search_inner">
                                            <form Active="#">
                                                <div class="search_field">
                                                    <input type="text" placeholder="Search content here...">
                                                </div>
                                                <button type="submit"> <i class="ti-search"></i> </button>
                                            </form>
                                        </div> -->
                                    </div>
                                    <!-- <div class="add_button ms-2">
                                        <a href="back/#" data-bs-toggle="modal" data-bs-target="#addcategory"
                                            class="btn_1">Add New</a>
                                    </div> -->
                                </div>
                            </div>
                            <div class="QA_table mb_30">

                                <table class="table lms_table_active">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Item</th>
                                            <th scope="col">Origin</th>
                                            <th scope="col">Current Location</th>
                                            <th scope="col">Destination</th>
                                            <th scope="col">Date </th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php showpackage(); ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer_iner text-center">
                            <p>2020 © Moveit <a href="back/#"> <i class="ti-heart"></i> </a><a
                                    href="back/#"> Admin</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="back/js/jquery1-3.4.1.min.js"></script>

    <script src="back/js/popper1.min.js"></script>

    <script src="back/js/bootstrap1.min.js"></script>

    <script src="back/js/metisMenu.js"></script>

    <script src="back/vendors/count_up/jquery.waypoints.min.js"></script>

    <script src="back/vendors/chartlist/Chart.min.js"></script>

    <script src="back/vendors/count_up/jquery.counterup.min.js"></script>

    <script src="back/vendors/swiper_slider/js/swiper.min.js"></script>

    <script src="back/vendors/niceselect/js/jquery.nice-select.min.js"></script>

    <script src="back/vendors/owl_carousel/js/owl.carousel.min.js"></script>

    <script src="back/vendors/gijgo/gijgo.min.js"></script>

    <script src="back/vendors/datatable/js/jquery.dataTables.min.js"></script>
    <script src="back/vendors/datatable/js/dataTables.responsive.min.js"></script>
    <script src="back/vendors/datatable/js/dataTables.buttons.min.js"></script>
    <script src="back/vendors/datatable/js/buttons.flash.min.js"></script>
    <script src="back/vendors/datatable/js/jszip.min.js"></script>
    <script src="back/vendors/datatable/js/pdfmake.min.js"></script>
    <script src="back/vendors/datatable/js/vfs_fonts.js"></script>
    <script src="back/vendors/datatable/js/buttons.html5.min.js"></script>
    <script src="back/vendors/datatable/js/buttons.print.min.js"></script>
    <script src="back/js/chart.min.js"></script>

    <script src="back/vendors/progressbar/jquery.barfiller.js"></script>

    <script src="back/vendors/tagsinput/tagsinput.js"></script>

    <script src="back/vendors/text_editor/summernote-bs4.js"></script>
    <script src="back/vendors/apex_chart/apexcharts.js"></script>

    <script src="back/js/custom.js"></script>
</body>

</html>