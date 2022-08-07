<?php

function begin($title)
{
    // session_start();
    // if (!isset($_SESSION['id'])) {
    //     echo '<script>window.location.href = "../index.php";</script>';
    // }

    echo '<!DOCTYPE html>
    <html lang="zxx">
    
    <head>
    
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>'.$title.'</title>
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

        <link rel="stylesheet" href="back/../assets/css/sweetalert2.min.css">
    
        <link rel="stylesheet" href="back/css/style1.css" />
        <link rel="stylesheet" href="back/css/colors/default.css" id="colorSkinCSS">
    </head>';
}
// Staff Sidebar

 function staffsidebar()
 {
     echo '<nav class="sidebar">
     <div class="logo d-flex justify-content-between">
         <a href="manager"><img src="front/images/resource/logo.png" alt=""></a>
         <div class="sidebar_close_icon d-lg-none">
             <i class="ti-close"></i>
         </div>
     </div>
     <ul id="sidebar_menu">
         
         <li>
             <a class="has-arrow" href="back/index.php" aria-expanded="false">

                 <img src="back/img/menu-icon/1.svg" alt="">
                 <span>Dashboard</span>
             </a>
             
         </li>
         
         <li class="">
             <a class="has-arrow" href="back/#" aria-expanded="false">
                 <img src="back/img/menu-icon/2.svg" alt="">
                 <span>Residence</span>
             </a>
             <ul>
                 <li><a href="back/residence.php">Available Residence</a></li>
                 
             </ul>
         </li>
         <li class="">
             <a class="has-arrow" href="back/#" aria-expanded="false">
                 <img src="back/img/menu-icon/3.svg" alt="">
                 <span>Records</span>
             </a>
             <ul>
                 <li><a href="back/record.php">View Records</a></li>
                 
             </ul>
         </li>

         <li class="">
             <a class="has-arrow" href="back/#" aria-expanded="false">
                 <img src="back/img/menu-icon/3.svg" alt="">
                 <span>Support</span>
             </a>
             <ul>
                 <li><a href="back/support.php">Contact Support</a></li>
                 
             </ul>
         </li>
         
     </ul>
 </nav>';
 }
function staffheader()
{
    echo '<div class="container-fluid g-0">
    <div class="row">
        <div class="col-lg-12 p-0">
            <div class="header_iner d-flex justify-content-between align-items-center">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                <div class="serach_field-area">
                    <h3>Welcome  Admin</h3>
                </div>
                <div class="header_right d-flex justify-content-between align-items-center">
                    <div class="header_notification_warp d-flex align-items-center">
                        <li>
                            <a href="back/#"> </a>
                        </li>
                        <li>
                            <a href="back/#">  </a>
                        </li>
                    </div>
                    <div class="profile_info">
                        <img src="back/img/client_img.png" alt="#">
                        <div class="profile_info_iner">
                            <p>Staff </p>
                            <h5>Admin</h5>
                            <div class="profile_info_details">
                                <!--<a href="back/#">My Profile <i class="ti-user"></i></a>
                                <a href="back/#">Settings <i class="ti-settings"></i></a>-->
                                <a href="back/logout.php">Log Out <i class="ti-shift-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>';
}

function support($staffid, $message)
{
    include 'dbcon.php';
    if (empty(trim($message))) {
        echo 'please enter a message';
    } else {
        if (mysqli_query($conn, "INSERT INTO messages (staffid, message) VALUES ('$staffid', '$message')")) {
            echo 'success';
        } else {
            echo 'Failed to send message';
        }
    }
}
