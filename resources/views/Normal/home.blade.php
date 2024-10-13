<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Comcare Medical</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="main_alls/everythingzz/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="main_alls/everythingzz/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="main_alls/everythingzz/assets/css/themify-icons.css">
    <link rel="stylesheet" href="main_alls/everythingzz/assets/css/metisMenu.css">
    <link rel="stylesheet" href="main_alls/everythingzz/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="main_alls/everythingzz/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="main_alls/everythingzz/assets/css/typography.css">
    <link rel="stylesheet" href="main_alls/everythingzz/assets/css/default-css.css">
    <link rel="stylesheet" href="main_alls/everythingzz/assets/css/styles.css">
    <link rel="stylesheet" href="main_alls/everythingzz/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="main_alls/everythingzz/assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <style>
    /*--------------------------------------------

    Template Name: srtdash - Bootstrap 4 Admin and Ui Kit
    Template URI: http://tf.itech-theme.com/srtdash-preview
    Description: This is Bootstrap 4 Admin Template and Ui Kit
    Author: cdibrandstudio
    Author https://themeforest.net/user/cdibrandstudio
    Version: 1.0

----------------------------------------------
    
    CSS INDEX
    ===================
  
    1. Core Css
    2. Dashboard One
        2.1 Sidebar Menu
            2.1.1 Horizontal Menu
        2.2 Header Area
        2.3 Page Title Area
        2.4 Fact Area
        2.5 Overview
        2.6 Market value
        2.7 Live Crypto Price
        2.8 Trading History
        2.9 Letest Post
    3. Dashboard Two
    4. Dashboard Three
    5. Bar Chart
    6. Line Chart
    7. Pie Chart
    8. Accroding
    9. Alert
   10. Badge
   11. Button
   12. Cards
   13. Dropdown Button
   14. List Group
   15. Modal
   16. Pagination
   17. Form
   18. Icons
   19. Table Basic
   20. Datatable
   21. Map
   22. Invoice
   23. Login
   24. Pricing
   25. 404 Page
   26. Offset Sidebar

-----------------------------------------------------------------------------------*/

    /*------------------------- 1. Core Css -------------------*/

    .page-container {
        width: 100%;
        height: 100%;
        min-height: 100vh;
        padding-left: 280px;
        -webkit-transition: padding-left 0.3s ease 0s;
        transition: padding-left 0.3s ease 0s;
    }

    .sbar_collapsed.page-container {
        padding-left: 0;
    }

    .card {
        border: none;
        border-radius: 4px;
        background-color: #fff;
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .card:hover {
        box-shadow: 0 5px 30px rgba(0, 0, 0, 0.02);
    }

    .card-body {
        padding: 25.6px;
        padding: 1.6rem;
    }

    .h-full {
        height: 100%;
    }

    .main-content {
        width: 100%;
        background: #f3f8fb;
    }

    .main-content-inner {
        padding: 0 30px 50px;
    }

    /*------------------------- END Core Css -------------------*/

    /*-------------------- 2.1 Sidebar Menu -------------------*/

    .sidebar-menu {
        position: fixed;
        left: 0;
        top: 0;
        z-index: 99;
        height: 100vh;
        width: 280px;
        overflow: hidden;
        background: #fafafa;
        box-shadow: -4px 10px 2px 9px rgba(0, 0, 0, 0.33);
        -webkit-box-shadow: -4px 10px 2px 9px rgba(0, 0, 0, 0.33);
        -moz-box-shadow: -4px 10px 2px 9px rgba(0, 0, 0, 0.33);

        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .sbar_collapsed .sidebar-menu {
        left: -280px;
    }

    .main-menu {
        height: calc(100% - 100px);
        overflow: hidden;
        padding: 20px 10px 0 0;
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .menu-inner {
        overflow-y: scroll;
        height: 100%;
    }

    .slimScrollBar {
        background: #fff !important;
        opacity: 0.1 !important;
    }

    .sidebar-header {
        padding: 19px 32px 20px;
        background: #cdffd8;
        background: linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -webkit-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -moz-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
    }

    .sidebar-menu .logo {
        text-align: center;
    }

    .logo a {
        display: inline-block;
        max-width: 120px;
    }

    .metismenu>li>a {
        padding-left: 32px !important;
    }

    .metismenu li a {
        position: relative;
        display: block;
        color: #030303;
        font-size: 15px;
        text-transform: capitalize;
        padding: 15px 15px;
        letter-spacing: 0;
        font-weight: 700;
    }

    /* logo color */
    .metismenu li a i {
        color: #050505;
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .metismenu li a:after {
        position: absolute;
        content: "\f107";
        font-family: fontawesome;
        right: 15px;
        top: 12px;
        color: #8d97ad;
        font-size: 20px;
    }

    .metismenu li.active>a:after {
        content: "\f106";
    }

    .metismenu li a:only-child:after {
        content: "";
    }

    .metismenu li a span {
        margin-left: 10px;
    }

    .metismenu li.active>a,
    .metismenu li:hover>a {
        color: #fff;
    }

    .metismenu li li a {
        padding: 8px 20px;
    }

    .metismenu li ul {
        padding-left: 37px;
    }

    .metismenu>li:hover>a,
    .metismenu>li.active>a {
        background: #cdffd8;
        background: linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -webkit-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -moz-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        transform: scale(1.05);
    }

    .metismenu li:hover>a,
    .metismenu li.active>a {
        color: #fff;
    }

    .metismenu li:hover>a i,
    .metismenu li.active>a i {
        color: #fff;
    }

    .metismenu li li a:after {
        top: 6px;
    }

    /*-------------------- END Sidebar Menu -------------------*/

    /*-------------------- 2.1.1 Horizontal Menu -------------------*/

    .body-bg {
        background: #f3f8fb;
    }

    .horizontal-main-wrapper {
        min-height: 100vh;
    }

    .horizontal-main-wrapper .container {
        max-width: 1440px;
    }

    .horizontal-main-wrapper .header-area,
    .horizontal-main-wrapper .mainheader-area {
        padding-left: 0;
        padding-right: 0;
    }

    .horizontal-main-wrapper .main-content-inner {
        padding: 0 0 50px;
    }

    .mainheader-area .notification-area {
        -webkit-transform: translateY(-11px);
        transform: translateY(-11px);
    }

    .mainheader-area {
        background: #e7eaec;
        border-bottom: 1px solid #f3f8fb;
        padding-left: 15px;
        position: relative;
        z-index: 99;
    }

    .mainheader-area .logo a span {
        color: #32d1b2;
    }

    .horizontal-menu {
        position: relative;
    }

    .horizontal-menu ul li {
        display: inline-block;
        position: relative;
    }

    .horizontal-menu ul li a {
        display: block;
        font-size: 20px;
        padding: 10px 20px;
        color: #000000;
        text-transform: capitalize;
        text-decoration: none;
    }

    .horizontal-menu ul li:hover>a,
    .horizontal-menu ul li.active>a {
        color: #f1f3f5;
    }

    .horizontal-menu nav>ul>li:first-child>a {
        padding-left: 0;
    }

    .horizontal-menu ul li a i {
        margin-right: 5px;
    }

    .horizontal-menu .submenu {
        position: absolute;
        left: 0;
        top: 100%;
        z-index: 99;
        width: 200px;
        background: #fff;
        opacity: 0;
        visibility: hidden;
        border-top: 4px solid #007bff;
        border-radius: 3px;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.03);
    }

    .horizontal-menu .submenu li {
        display: block;
    }

    .horizontal-menu ul li:hover>.submenu {
        opacity: 1;
        visibility: visible;
    }

    .horizontal-menu .mega-menu {
        position: inherit;
    }

    .horizontal-menu .mega-menu .submenu {
        width: 100%;
        max-width: 900px;
    }

    .horizontal-menu .mega-menu .submenu li {
        display: inline-block;
        width: calc(100% * (1 / 3) - 5px);
    }

    .header-bottom .search-box input {
        max-width: 350px;
        width: 100%;
    }

    /* mobile menu */

    .slicknav_menu {
        background: #1cc3b8;
        padding: 0;
        margin-top: 20px;
    }

    .slicknav_menu>a {
        display: block;
        width: 100%;
        padding: 15px;
        margin: 0;
        background: transparent;
    }

    .slicknav_menu .slicknav_icon {
        float: right;
    }

    .slicknav_menu .slicknav_icon-bar {
        box-shadow: none;
    }

    .slicknav_menu .slicknav_menutxt {
        font-weight: 500;
        text-shadow: none;
    }

    .slicknav_nav .slicknav_row,
    .slicknav_nav a {
        text-transform: capitalize;
    }

    .slicknav_nav .slicknav_row:hover {
        border-radius: 0;
        background: #1fc9b5;
    }

    .slicknav_nav li i {
        width: 26px;
        display: inline-block;
    }

    .slicknav_nav .slicknav_item .slicknav_arrow {
        float: right;
    }

    /*-------------------- END Horizontal Menu -------------------*/

    /*-------------------- 2.2 Header Area -------------------*/

    .header-area {
        padding: 15px 30px;
        background: #cdffd8;
        background: linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -webkit-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -moz-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
    }

    .nav-btn {
        margin: 10px 30px 0 0;
        cursor: pointer;
    }

    .nav-btn span {
        display: block;
        width: 22px;
        height: 2px;
        background: #b3aaaa;
        margin: 4px 0;
        border-radius: 15px;
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
        box-shadow: 0 0 0 4px rgba(99, 96, 96, 0.03);
    }

    .nav-btn span:nth-child(2) {
        opacity: 0;
    }

    .nav-btn span:first-child {
        -webkit-transform: rotate(45deg) translate(5px, 5px);
        transform: rotate(45deg) translate(5px, 5px);
    }

    .nav-btn span:last-child {
        -webkit-transform: rotate(-45deg) translate(3px, -3px);
        transform: rotate(-45deg) translate(3px, -3px);
    }

    .sbar_collapsed .nav-btn span {
        transform: none;
        opacity: 1;
    }

    .search-box form {
        position: relative;
    }

    .search-box input {
        width: 350px;
        border-radius: 33px;
        border: none;
        height: 40px;
        padding-left: 20px;
        padding-right: 40px;
        letter-spacing: 0;
        background: #f3eeff;
    }

    .search-box input::-webkit-input-placeholder {
        color: #b1a7a7;
    }

    .search-box input::-moz-placeholder {
        color: #b1a7a7;
    }

    .search-box input:-ms-input-placeholder {
        color: #b1a7a7;
    }

    .search-box form i {
        position: absolute;
        right: 21px;
        top: 14px;
        font-size: 14px;
        color: #b1a7a7;
    }

    /* notification-area */

    .notification-area {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        position: relative;
        z-index: 1;
    }

    .notification-area li {
        display: inline-block;
        margin-left: 20px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .notification-area li.settings-btn.active i {
        color: #007bff;
    }

    .notification-area li>i {
        font-size: 26px;
        color: #bdbcbc;
        vertical-align: middle;
        text-shadow: 0 0 8px rgba(0, 0, 0, 0.12);
        -webkit-transition: color 0.3s ease 0s;
        transition: color 0.3s ease 0s;
    }

    .notification-area li:hover>i,
    .dropdown.show>i {
        color: var(--primary-color);
    }

    .notification-area li i>span {
        position: absolute;
        right: -5px;
        top: -7px;
        font-family: "Poppins", sans-serif;
        font-size: 10px;
        font-weight: 600;
        color: #fff;
        background: var(--primary-color);
        height: 20px;
        width: 20px;
        border-radius: 50%;
        text-align: center;
        line-height: 20px;
        padding-left: 2px;
    }

    .notify-box {
        width: 350px;
        border-radius: 10px;
        overflow: hidden;
        padding: 0;
        margin: 0;
    }

    .notify-title {
        background: var(--primary-color);
        display: block;
        padding: 18px 30px;
        color: #fff;
        font-size: 15px;
        letter-spacing: 0;
        overflow: hidden;
    }

    .notify-title a {
        float: right;
        display: inline-block;
        color: #ffee1d;
        font-size: 13px;
        text-decoration: underline;
    }

    .nofity-list {
        padding: 30px 0;
    }

    .nofity-list a {
        padding: 0 30px;
        display: block;
        margin-bottom: 20px;
        border-bottom: 1px solid #f5f2f2;
        padding-bottom: 15px;
    }

    .nofity-list a:last-child {
        margin-bottom: 0;
        border-bottom: none;
    }

    .notify-thumb {
        float: left;
        margin-right: 20px;
    }

    .notify-thumb i {
        height: 50px;
        width: 50px;
        line-height: 50px;
        display: block;
        border-radius: 50%;
        text-align: center;
        color: #fff;
        font-size: 23px;
    }

    .notify-text {
        overflow: hidden;
    }

    .notify-text p {
        font-size: 14px;
        color: #4e4e4e;
        line-height: 22px;
        margin-bottom: 4px;
    }

    .notify-text span {
        letter-spacing: 0;
        color: #272626;
        font-size: 11px;
        font-weight: 300;
    }

    /* notify envelope */

    .expanded .notification-area li#full-view-exit {
        display: inline-block;
    }

    .notification-area li#full-view-exit {
        display: none;
    }

    .expanded .notification-area li#full-view {
        display: none;
    }

    .notification-area li#full-view {
        display: inline-block;
    }

    .nt-enveloper-box .notify-text p {
        margin-bottom: 0;
    }

    .notify-text span.msg {
        display: block;
        font-size: 12px;
        color: #4e4e4e;
        line-height: 22px;
        margin-bottom: 4px;
        font-weight: 400;
    }

    .notify-thumb img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        margin-top: 4px;
    }

    /*-------------------- END Header Area -------------------*/

    /*-------------------- 2.3 Page Title Area -------------------*/

    .page-title-area {
        padding: 0 30px;
        background: #fff;
        position: relative;
    }

    .page-title-area h4 {
        border-radius: 10px;
    }

    .page-title-area .unverifieds {
        border: 3px solid black;
        border-radius: 10px;
        background-color: orange;
        padding: 5px;
    }

    .page-title-area:before {
        content: "";
        position: absolute;
        left: 0;
        top: 50%;
        width: 4px;
        height: 36px;
        background: var(--primary-color);
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .page-title {
        font-size: 24px;
        font-weight: 300;
        color: #313b3d;
        letter-spacing: 0;
        margin-right: 30px;
    }

    ul.breadcrumbs {
        margin-top: 4px;
    }

    .breadcrumbs li {
        display: inline-block;
    }

    .bread-middle {
        display: flex;
        justify-content: center;
        /* Center items horizontally */
        align-items: center;
        /* Center items vertically */
        flex-wrap: wrap;
        /* Allow items to wrap */
        list-style-type: none;
        /* Remove default list styling */
        /* Remove default padding */
        margin: 10px 0;
        /* Add some margin for spacing */
        width: 100%;
        /* Ensure it takes full width */
    }

    .bread-middle li {
        padding: 100px 15px;
        /* Base padding */
        font-size: 16px;
        /* Base font size */
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        /* Center text within each item */
        flex: 0 1 auto;
        /* Allow items to grow and shrink, but not take full width */
        margin: 0 5px;
        /* Add some margin between items */
        background: #cdffd8;
        background: linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -webkit-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -moz-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        border: 3px solid black;
        border-radius: 8px;
        box-shadow: 2px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -webkit-box-shadow: 2px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 2px 10px 5px 0px rgba(0, 0, 0, 0.75);
        transition: transform 0.3s ease;
        /* Transition effect */
    }

    .bread-middle li:hover {
        transform: scale(1.05);
        /* Zoom in effect */
    }

    /* Media query for larger screens */
    @media (min-width: 768px) {
        .bread-middle {
            justify-content: center;
            /* Keep items centered */
        }

        .bread-middle li {
            padding: 15px 30px;
            /* Adjust padding for larger screens */
            font-size: 18px;
            /* Adjust font size for larger screens */
        }
    }

    .breadcrumbs-area {
        display: flex;
        flex-direction: column;
        /* Stack items vertically */
        align-items: flex-start;
        /* Align items to the start */
    }

    .bread-middle {
        display: flex;
        justify-content: center;
        /* Center items horizontally */
        align-items: center;
        /* Center items vertically */
        flex-wrap: wrap;
        /* Allow items to wrap */
        list-style-type: none;
        /* Remove default list styling */
        padding: 0;
        /* Remove default padding */
        margin: 10px 0;
        /* Add some margin for spacing */
        width: 100%;
        /* Ensure it takes full width */
    }

    .bread-middle li {
        padding: 10px 15px;
        /* Base padding */
        font-size: 16px;
        /* Base font size */
        font-family: Arial, Helvetica, sans-serif;
        text-align: center;
        /* Center text within each item */
        flex: 1 0 100%;
        /* Allow items to take full width on small screens */
    }

    /* Media query for larger screens */
    @media (min-width: 768px) {
        .bread-middle li {
            padding: 15px 30px;
            /* Adjust padding for larger screens */
            font-size: 18px;
            /* Adjust font size for larger screens */
            flex: 1 0 auto;
            /* Allow items to grow and shrink on larger screens */
        }
    }

    .breadcrumbs li a,
    .breadcrumbs li span {
        display: block;
        font-size: 14px;
        font-weight: 400;
        color: #0f0f0f;
        letter-spacing: 0;
        margin-right: 16px;
        position: relative;
    }

    .breadcrumbs li a:before {
        content: "/";
        color: #768387;
        position: absolute;
        right: -13px;
        top: 0;
    }

    .breadcrumbs li span {
        margin-right: 0;
        color: #768387;
        text-transform: capitalize;
    }

    .user-profile {
        margin-right: -30px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        background: #cdffd8;
        background: linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -webkit-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -moz-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        padding: 17px 38px;
        box-shadow: 2px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -webkit-box-shadow: 2px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 2px 10px 5px 0px rgba(0, 0, 0, 0.75);
        position: relative;
    }

    .user-profile img.avatar {
        height: 35px;
        width: 35px;
        border-radius: 50%;
        margin-right: 12px;
    }

    .user-name {
        font-size: 17px;
        font-weight: 500;
        color: #050505;
        letter-spacing: 0;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .user-name i {
        margin-left: 10px;
        font-size: 21px;
        vertical-align: middle;
        position: relative;
    }

    .notification-area .dropdown-toggle,
    .user-name.dropdown-toggle {
        position: relative;
    }

    .notification-area .dropdown-toggle:after,
    .user-name.dropdown-toggle:after {
        display: none;
    }

    .notification-area .dropdown-menu,
    .user-profile .dropdown-menu {
        background: #fff;
        border: none;
        -webkit-transform: none !important;
        transform: none !important;
        top: 130% !important;
        right: 30px !important;
        left: auto !important;
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
        display: block !important;
        visibility: hidden;
        opacity: 0;
    }

    .notification-area .dropdown-menu.show,
    .user-profile .dropdown-menu.show {
        top: 100% !important;
    }

    .notification-area .dropdown-menu.show,
    .user-profile .dropdown-menu.show {
        top: 100% !important;
        visibility: visible;
        opacity: 1;
        box-shadow: 0 0 45px 0 rgba(131, 23, 254, 0.06);
    }

    .user-profile .dropdown-menu a {
        font-size: 14px;
        color: #8a8a8a;
        letter-spacing: 0;
        font-weight: 500;
        padding: 4px 120px;
        padding-left: 25px;
    }

    .user-profile .dropdown-menu a:hover {
        background: #f8f9fa;
        color: #2942fa;
    }

    /*-------------------- END Page Title Area -------------------*/

    /*-------------------- 2.4 Fact Area ------------------- */

    .single-report {
        background: #fff;
        overflow: hidden;
        position: relative;
    }

    .s-report-inner {
        padding-left: 85px;
    }

    .single-report .icon {
        font-size: 32px;
        color: #fff;
        background: var(--primary-color);
        height: 95px;
        width: 100px;
        text-align: right;
        padding-top: 40px;
        padding-right: 22px;
        border-radius: 50%;
        position: absolute;
        left: -39px;
        top: -30px;
    }

    .s-report-title {
        margin-bottom: 25px;
    }

    .header-title {
        font-family: "Lato", sans-serif;
        font-size: 30px;
        font-weight: 600;
        letter-spacing: 0;
        color: #333333;
        text-transform: capitalize;
        margin-bottom: 17px;
        align-items: center;
        justify-content: center;
        display: flex;
    }

    .single-report p {
        font-size: 12px;
        font-weight: 700;
        color: #565656;
        background: #ececec;
        letter-spacing: 0;
        padding: 0 9px;
        height: 20px;
        line-height: 20px;
    }

    .single-report h2 {
        font-size: 26px;
        color: #565656;
        font-weight: 500;
        letter-spacing: 0;
    }

    .single-report span {
        font-size: 15px;
        font-weight: 600;
        color: #565656;
        letter-spacing: 0;
    }

    .highcharts-exporting-group {
        display: none;
    }

    /*-------------------- END Fact Area ------------------- */

    /*-------------------- 2.5 Overview ------------------- */

    .custome-select {
        font-size: 13px;
        color: #565656;
        font-weight: 500;
        letter-spacing: 0;
    }

    .border-0 {
        border: none;
    }

    #verview-shart {
        height: 400px;
    }

    #verview-shart-license-text,
    #coin_distribution-license-text {
        display: none;
    }

    #coin_distribution-wrapper {
        height: 400px !important;
        margin-top: -30px;
    }

    #coin_distribution-menu {
        display: none;
    }

    /*-------------------- END Overview ------------------- */

    /*-------------------- 2.6 Market value ------------------- */

    .market-status-table {
        overflow: hidden;
    }

    table.dbkit-table {
        width: 100%;
    }

    table.dbkit-table {
        width: 100%;
        /* Optional: Set a width */
    }

    table.dbkit-table tbody tr:hover {
        border-color: #101010;
        background-color: rgb(26, 165, 77);
        /* Change background color */
        transform: scale(1.05);
        /* Zoom in effect */
        transition: all 0.3s ease-in-out;
        /* Smooth transition effect */
    }

    table.dbkit-table tr {
        display: flex;
        /* Keep your flex properties */
        flex-wrap: nowrap;
        align-items: center;
        justify-content: space-between;
        height: 71px;
        border: 1px solid transparent;
        padding: 0 30px;
        margin: 20px 2px 6px;
        background: #f5f8f9;
        transition: all 0.3s ease-in-out;
        /* Ensure smooth transition for non-hover state */
    }

    table.dbkit-table tr th,
    table.dbkit-table tr td {
        border-top: none !important;
    }

    table.dbkit-table tr td {
        font-size: 16px;
        font-weight: 400;
        letter-spacing: 0;
        color: #616161;
        min-width: 141px;
    }

    .mv-icon img {
        max-width: 29px;
    }

    .trends {
        text-align: center;
    }

    .stats-chart {
        text-align: center;
        max-width: 100px;
    }

    .stats-chart canvas {
        margin: auto;
    }

    .buy img,
    .sell img {
        margin-left: 10px;
    }

    /*-------------------- END Market value ------------------- */

    /*-------------------- 2.7 Live Crypto Price ------------------- */

    .cripto-live ul li {
        margin-bottom: 27px;
        font-size: 16px;
        font-weight: 500;
        color: #565656;
        letter-spacing: 0;
    }

    .cripto-live ul li:last-child {
        margin-bottom: 0;
    }

    .cripto-live ul li .icon {
        display: inline-block;
        height: 30px;
        width: 30px;
        margin-right: 10px;
        border-radius: 50%;
        font-size: 16px;
        font-weight: 700;
        color: #fff;
        background: #ffd615;
        text-align: center;
        line-height: 30px;
        text-transform: uppercase;
    }

    .cripto-live ul li .icon.l {
        background: #08bfc1;
    }

    .cripto-live ul li .icon.d {
        background: #4cff63;
    }

    .cripto-live ul li .icon.e {
        background: #8a7fe2;
    }

    .cripto-live ul li .icon.t {
        background: #95b36e;
    }

    .cripto-live ul li span {
        display: block;
        width: 50%;
        float: right;
    }

    .cripto-live ul li span i {
        color: #2fd444;
        margin-right: 10px;
    }

    .cripto-live ul li span i.fa-long-arrow-down {
        color: #ff0e0e;
    }

    /*-------------------- END Live Crypto Price ------------------- */

    /*-------------------- 2.8 Trading History ------------------- */

    .trd-history-tabs ul li a {
        font-size: 15px;
        font-weight: 500;
        color: #b0b0b0;
        letter-spacing: 0;
        margin: 0 15px;
        display: block;
        border-bottom: 2px solid transparent;
        padding-bottom: 7px;
    }

    .trd-history-tabs ul li a:hover,
    .trd-history-tabs ul li a.active {
        border-bottom: 2px solid #731ffd;
        padding-bottom: 7px;
        color: #565656;
    }

    /*-------------------- END Trading History ------------------- */

    /*-------------------- 2.9 Letest Post ------------------- */

    .single-post {
        margin-bottom: 34px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    .lts-thumb {
        -ms-flex-preferred-size: calc(40% - 10px);
        flex-basis: calc(40% - 10px);
    }

    .lts-content {
        -ms-flex-preferred-size: calc(60% - 10px);
        flex-basis: calc(60% - 10px);
    }

    .lts-content span {
        font-size: 16px;
        font-weight: 600;
        color: #565656;
        letter-spacing: 0;
    }

    .lts-content h2 a {
        display: block;
        font-size: 20px;
        font-weight: 700;
        color: #565656;
        letter-spacing: 0;
        margin-bottom: 16px;
    }

    .lts-content h2 a:hover {
        color: #6d65dc;
    }

    .lts-content p {
        font-size: 15px;
        font-weight: 400;
        color: #565656;
    }

    .input-form {
        position: relative;
    }

    .input-form input {
        height: 80px;
        width: 100%;
        padding-left: 50px;
        border: none;
        box-shadow: 0 0 41px rgba(67, 54, 251, 0.05);
    }

    .input-form span {
        position: absolute;
        right: 0;
        top: 0;
        height: 100%;
        width: 125px;
        background: var(--primary-color);
        text-align: center;
        line-height: 80px;
        font-weight: 600;
        color: #fff;
        letter-spacing: 0;
        font-size: 19px;
    }

    .exhcange-rate {
        padding: 38px;
        background: #f7fafb;
    }

    .exhcange-rate .exchange-devider {
        text-align: center;
        font-size: 30px;
        color: #686868;
        letter-spacing: 0;
        font-weight: 600;
        margin: 24px 0;
    }

    .exchange-btn button {
        width: 100%;
        margin-top: 20px;
        height: 79px;
        background: var(--primary-color);
        color: #fff;
        letter-spacing: 0;
        font-weight: 700;
        border: none;
        border-radius: 2px;
        font-size: 18px;
        outline: none;
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .exchange-btn button:hover {
        background: #3c34ab;
    }

    .footer-area {
        text-align: center;
        padding: 23px 0 19px;
        background: #fff;
    }

    .footer-area p {
        color: #676666;
        margin-bottom: 0;
    }

    /*-------------------- END Letest Post ------------------- */

    /*-------------------- 3. Dashboard Two ------------------- */

    .sales-style-two .single-report {
        background: #fff;
        overflow: hidden;
        position: relative;
        padding: 10px 15px 10px;
    }

    #visitor_graph {
        height: 400px;
    }

    /* Todays Order List */

    .dbkit-table .heading-td td {
        color: #444;
        font-weight: 500;
    }

    .pagination_area ul li {
        display: inline-block;
    }

    .pagination_area ul li a {
        display: block;
        height: 45px;
        line-height: 44px;
        width: 45px;
        border: 2px solid #f1ebeb;
        border-radius: 50%;
        text-align: center;
        font-size: 18px;
        font-weight: 600;
        color: #4d4d4d;
        margin-left: 3px;
    }

    .pagination_area ul li a:hover {
        background: #8553fa;
        color: #fff;
    }

    .pagination_area ul li a i {
        font-size: 14px;
    }

    /* team member area */

    .team-search input {
        height: 40px;
        padding-left: 12px;
        border: 1px solid #e1e1e1;
        letter-spacing: 0;
        font-size: 13px;
        border-radius: 2px;
    }

    .team-search input::-webkit-input-placeholder {
        color: #e1e1e1;
    }

    .team-search input::-moz-placeholder {
        color: #e1e1e1;
    }

    .team-search input:-ms-input-placeholder {
        color: #e1e1e1;
    }

    .member-box .media-body {}

    .member-box .media-body p {
        font-size: 18px;
        font-weight: 500;
        color: #4d4d4d;
    }

    .member-box .media-body span {
        display: block;
        font-size: 15px;
        font-weight: 500;
        color: #4d4d4d;
        letter-spacing: 0;
    }

    .tm-social a {
        display: inline-block;
        margin-left: 15px;
        font-size: 22px;
        color: #555;
    }

    .s-member {
        padding: 16px 15px 17px;
        background: #f9f9f9;
        margin: 15px 0;
    }

    /*-------------------- END Dashboard Two ------------------- */

    /*-------------------- 4. Dashboard Three ------------------- */

    .seo-fact {
        border-radius: 3px;
    }

    .sbg1 {
        background: -webkit-linear-gradient(291deg,
                rgb(77, 77, 253) 0%,
                rgb(108, 143, 234) 100%);
        background: linear-gradient(159deg,
                rgb(77, 77, 253) 0%,
                rgb(108, 143, 234) 100%);
    }

    .sbg2 {
        background: -webkit-linear-gradient(291deg,
                rgb(5, 176, 133) 0%,
                rgb(27, 212, 166) 59%);
        background: linear-gradient(159deg,
                rgb(5, 176, 133) 0%,
                rgb(27, 212, 166) 59%);
    }

    .sbg3 {
        background: -webkit-linear-gradient(298deg,
                rgb(216, 88, 79) 0%,
                rgb(243, 140, 140) 100%);
        background: linear-gradient(152deg,
                rgb(216, 88, 79) 0%,
                rgb(243, 140, 140) 100%);
    }

    .sbg4 {
        background: -webkit-linear-gradient(59deg,
                rgb(254, 208, 63) 0%,
                rgb(230, 190, 63) 110%);
        background: linear-gradient(31deg,
                rgb(254, 208, 63) 0%,
                rgb(230, 190, 63) 110%);
    }

    .seofct-icon {
        color: #fff;
        font-size: 18px;
        font-weight: 500;
    }

    .seofct-icon i {
        font-size: 52px;
        margin-right: 20px;
        vertical-align: middle;
        -webkit-transform: translateY(-5px);
        transform: translateY(-5px);
        display: inline-block;
    }

    .seo-fact h2 {
        font-size: 27px;
        color: #fff;
        letter-spacing: 0;
    }

    .seo-fact #seolinechart3,
    .seo-fact #seolinechart4 {
        max-width: 200px;
    }

    /* socialads */

    .highcharts-credits {
        display: none;
    }

    /* user-statistics */

    #user-statistics {
        height: 350px;
    }

    /* salesanalytic */

    #salesanalytic {
        height: 500px;
    }

    /* timeline */

    .timeline-area {
        padding-left: 52px;
        padding-top: 6px;
    }

    .timeline-task {
        position: relative;
        margin-bottom: 35px;
    }

    .timeline-task:before {
        content: "";
        position: absolute;
        left: -35px;
        top: 0;
        height: calc(100% + 33px);
        width: 1px;
        background: #e6cdff;
    }

    .timeline-task:last-child:before {
        height: 100%;
    }

    .timeline-task:last-child {
        margin-bottom: 0;
    }

    .timeline-task .icon {
        position: absolute;
        left: -52px;
        top: -6px;
        height: 35px;
        width: 35px;
        line-height: 35px;
        border-radius: 50%;
        text-align: center;
        font-size: 12px;
        color: #fff;
    }

    .bg1 {
        background: #5c6df4;
    }

    .bg2 {
        background: #19d0a2;
    }

    .bg3 {
        background: #f7cb3f;
    }

    .tm-title {
        margin-bottom: 6px;
    }

    .tm-title h4 {
        font-size: 15px;
        letter-spacing: 0;
        color: #333;
        margin-bottom: 2px;
    }

    .tm-title span.time {
        color: #8c8a8a;
        font-size: 13px;
    }

    .tm-title span.time i {
        margin-right: 5px;
        color: #2c3cb7;
        font-size: 11px;
    }

    .timeline-task p {
        color: #666;
        font-size: 14px;
        line-height: 25px;
        margin-bottom: -10px;
    }

    .timeline-task:last-child p {
        margin-bottom: 0;
    }

    #seomap {
        height: 300px;
        width: 100%;
    }

    .map-marker {
        /* adjusting for the marker dimensions
      so that it is centered on coordinates */
        margin-left: -8px;
        margin-top: -8px;
    }

    .map-marker.map-clickable {
        cursor: pointer;
    }

    .pulse {
        width: 10px;
        height: 10px;
        border: 5px solid #f7f14c;
        border-radius: 30px;
        background-color: #716f42;
        z-index: 10;
        position: absolute;
    }

    .map-marker .dot {
        border: 10px solid #fff601;
        background: transparent;
        border-radius: 60px;
        height: 50px;
        width: 50px;
        -webkit-animation: pulse 3s ease-out;
        animation: pulse 3s ease-out;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
        position: absolute;
        top: -20px;
        left: -20px;
        z-index: 1;
        opacity: 0;
    }

    @-webkit-keyframes pulse {
        0% {
            -webkit-transform: scale(0);
            opacity: 0;
        }

        25% {
            -webkit-transform: scale(0);
            opacity: 0.1;
        }

        50% {
            -webkit-transform: scale(0.1);
            opacity: 0.3;
        }

        75% {
            -webkit-transform: scale(0.5);
            opacity: 0.5;
        }

        100% {
            -webkit-transform: scale(1);
            opacity: 0;
        }
    }

    .testimonial-carousel {
        margin: 60px 0 28px;
    }

    .tstu-img {
        width: 70px;
        width: 70px;
        border-radius: 50%;
        overflow: hidden;
        float: left;
        margin-right: 20px;
    }

    .tstu-content {
        overflow: hidden;
    }

    .tstu-name {
        font-size: 20px;
        color: #fff;
        letter-spacing: 0;
    }

    .profsn {
        display: block;
        font-size: 16px;
        color: #fff;
        letter-spacing: 0.02em;
        margin-bottom: 15px;
    }

    .tst-item p {
        color: #fff;
    }

    .testimonial-carousel .owl-dots {
        text-align: center;
        margin-top: 60px;
    }

    .testimonial-carousel .owl-dots>div {
        height: 11px;
        width: 11px;
        background: #fff;
        display: inline-block;
        border-radius: 50%;
        margin: 0 4px;
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .testimonial-carousel .owl-dots .active {
        background: #f7cb3f;
    }

    /*-------------------- END Dashboard Three ------------------- */

    /*-------------------- 5. Bar Chart ------------------- */

    #ambarchart1,
    #ambarchart2,
    #ambarchart3,
    #ambarchart4,
    #ambarchart5,
    #ambarchart6 {
        height: 400px;
    }

    .amcharts-chart-div>a {
        display: none !important;
    }

    /*-------------------- END Bar Chart ------------------- */

    /*-------------------- 6. Line Chart ------------------- */

    #amlinechart1,
    #amlinechart2,
    #amlinechart3,
    #amlinechart4,
    #amlinechart5 {
        height: 400px;
    }

    /*-------------------- END Line Chart ------------------- */

    /*-------------------- 7. Pie Chart ------------------- */

    #ampiechart1,
    #ampiechart2,
    #ampiechart3,
    #highpiechart4,
    #highpiechart5,
    #highpiechart6 {
        height: 400px;
        width: 100%;
    }

    /*-------------------- END Pie Chart ------------------- */

    /*-------------------- 8. Accroding ------------------- */

    .according .card {
        margin-bottom: 20px;
    }

    .according .card:last-child {
        margin-bottom: 0;
    }

    .according .card-header {
        padding: 0;
        border: none;
    }

    .according .card-header a {
        display: block;
        background: #eff3f6;
        padding: 16px 15px;
        border-radius: 3px;
        color: #444;
        letter-spacing: 0;
        font-size: 15px;
        font-weight: 500;
    }

    .according .card-body {
        padding: 10px;
        border: 1px solid #eff3f6;
        font-size: 14px;
        letter-spacing: 0;
        color: #444444;
        line-height: 27px;
        font-weight: 400;
    }

    .according .card-header a {
        position: relative;
    }

    .accordion-s2 .card-header a.collapsed:before {
        content: "\f107";
    }

    .accordion-s2 .card-header a:before {
        content: "\f106";
        font-family: fontawesome;
        position: absolute;
        right: 13px;
        color: #444;
        font-size: 26px;
    }

    /* accordion-3 */

    .accordion-s3 .card-header a.collapsed:before {
        content: "\e61a";
    }

    .accordion-s3 .card-header a:before {
        content: "\e622";
        font-family: "themify";
        position: absolute;
        right: 13px;
        color: #444;
        font-size: 15px;
    }

    .gradiant-bg .card-header a {
        background-image: -webkit-linear-gradient(top left, #8914fe, #8160f6);
        background-image: linear-gradient(to bottom right, #8914fe, #8160f6);
        color: #fff;
    }

    .gradiant-bg .card-header a:before {
        color: #fff;
    }

    /*-------------------- END Accroding ------------------- */

    /*-------------------- 9. Alert------------------- */

    .alert {
        letter-spacing: 0;
        font-size: 13px;
        border: none;
        padding: 10px 16px;
    }

    .alert strong,
    .alert-link {
        font-weight: 600;
    }

    .alert-items .alert-primary {
        color: #4796ea;
        background-color: #c8e1fb;
    }

    .alert-items .alert-primary .alert-link {
        color: #4796ea;
    }

    .alert-items .alert-success {
        color: #36b398;
        background-color: #cff1ea;
    }

    .alert-items .alert-success .alert-link {
        color: #36b398;
    }

    .alert-items .alert-danger {
        color: #f96776;
        background-color: #ffdde0;
    }

    .alert-items .alert-danger .alert-link {
        color: #f96776;
    }

    .alert-items .alert-warning {
        color: #d6a20c;
        background-color: #f9efd2;
    }

    .alert-items .alert-warning .alert-link {
        color: #d6a20c;
    }

    /* additional content */

    .alert-heading {
        margin-bottom: 7px;
    }

    .alert-dismiss .alert {
        padding: 13px 15px;
    }

    .alert-dismiss .alert-dismissible .close {
        top: 4px;
        outline: none;
        font-size: 13px;
    }

    /*-------------------- END Alert------------------- */

    /*-------------------- 10. Badge------------------- */

    .btn {
        padding: 11px 17px;
        font-size: 13px;
        letter-spacing: 0;
    }

    .btn-xl {
        padding: 19px 24px;
    }

    .btn-lg {
        padding: 15px 22px;
    }

    .btn-md {
        padding: 12px 19px;
    }

    .btn-sm {
        padding: 9px 14px;
    }

    .btn-xs {
        padding: 5px 10px;
    }

    .nav-pills .nav-link {
        padding: 16px 48px;
        padding: 1rem 3rem;
        line-height: 19px;
    }

    /*-------------------- END Badge------------------- */

    /*-------------------- 11. Button------------------- */

    .btn-flat {
        border-radius: 0;
    }

    .btn-rounded {
        border-radius: 50px;
    }

    /*-------------------- END Button ------------------- */

    /*-------------------- 12. Cards ------------------- */

    .title {
        font-size: 18px;
        color: #444;
        margin-bottom: 10px;
    }

    .card-bordered {
        border: 1px solid rgba(0, 0, 0, 0.125);
    }

    p.card-text {
        margin-bottom: 23px;
    }

    /*-------------------- END Cards ------------------- */

    /*-------------------- 13. Dropdown Button ------------------- */

    .drop-buttons .btn {
        margin-bottom: 1.3em;
    }

    .dropdown-item {
        font-size: 14px;
    }

    /*-------------------- END Dropdown Button ------------------- */

    /*-------------------- 14. List Group ------------------- */

    .list-group-item {
        color: #444;
        font-size: 13px;
    }

    .media-body {
        font-size: 13px;
        line-height: 27px;
    }

    /*-------------------- END List Group ------------------- */

    /*-------------------- 15. Modal ------------------- */

    .child-media {
        padding-left: 100px;
    }

    .modal-dialog.modal-xl {
        max-width: 100%;
    }

    /*-------------------- END Modal ------------------- */

    /*-------------------- 16. Pagination ------------------- */

    .pg-color-border li a {
        border-color: #007bff;
    }

    .pagination li a {
        font-family: "lato", sans-serif;
    }

    /*-------------------- END Pagination ------------------- */

    /*-------------------- 17. Form ------------------- */

    .form-control,
    .form-control:focus {
        outline: none;
        box-shadow: none;
    }

    .form-rounded {
        border-radius: 40px;
    }

    .form-control {
        font-size: 14px;
        border: 1px solid rgba(170, 170, 170, 0.3);
        padding: 10.72px 12.8px;
        padding: 0.67rem 0.8rem;
    }

    .form-control-sm,
    .input-group-sm>.form-control,
    .input-group-sm>.input-group-append>.btn,
    .input-group-sm>.input-group-append>.input-group-text,
    .input-group-sm>.input-group-prepend>.btn,
    .input-group-sm>.input-group-prepend>.input-group-text {
        padding: 4px 8px;
        padding: 0.25rem 0.5rem;
    }

    .form-control-lg,
    .input-group-lg>.form-control,
    .input-group-lg>.input-group-append>.btn,
    .input-group-lg>.input-group-append>.input-group-text,
    .input-group-lg>.input-group-prepend>.btn,
    .input-group-lg>.input-group-prepend>.input-group-text {
        padding: 13.6px 16px;
        padding: 0.85rem 1rem;
    }

    label {
        font-weight: 500;
        color: #666;
        display: inline-block;
        margin-bottom: 8px;
        margin-bottom: 0.5rem;
    }

    .font-14 {
        font-size: 14px;
    }

    .input-rounded {
        border-radius: 50px;
    }

    .custom-file-label,
    .custom-file-input,
    .custom-file {
        height: calc(2.25rem + 7px);
        padding: 10.8px 12px;
        padding: 0.675rem 0.75rem;
    }

    .custom-file-label:after {
        height: calc(calc(2.25rem + 7px) - 1px * 2);
        padding: 10.8px 12px;
        padding: 0.675rem 0.75rem;
    }

    .grid-col {
        padding: 10px 15px;
        background: #f3f8fb;
        margin-bottom: 30px;
        color: #666;
        border: 1px solid #e3e6e8;
    }

    .custom-control-label {
        margin-top: 2px;
    }

    /*-------------------- END Form ------------------- */

    /*-------------------- 18. Icons ------------------- */

    .fw-icons {}

    .fw-icons a {
        color: #444;
        margin: 9px 0;
        display: inline-block;
        font-family: "lato", sans-serif;
    }

    .fw-icons a:hover {
        color: #007bff;
    }

    .fw-icons a i {
        width: 30px;
        font-size: 14px;
    }

    /* icon-container */

    .icon-section {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    }

    .icon-container {
        cursor: pointer;
        -ms-flex-preferred-size: calc(100% * (1 / 4));
        flex-basis: calc(100% * (1 / 4));
    }

    .icon-container [class^="ti-"] {
        width: 30px;
        font-size: 14px;
        display: inline-block;
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .icon-container:hover [class^="ti-"] {
        -webkit-transform: scale(2);
        transform: scale(2);
        -webkit-transform-origin: left center;
        transform-origin: left center;
    }

    .icon-container span.icon-name {
        color: #444;
        margin: 9px 0;
        display: inline-block;
        font-family: "lato", sans-serif;
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .icon-container:hover span.icon-name {
        -webkit-transform: translateX(10px);
        transform: translateX(10px);
    }

    .icon-container:hover span {
        color: #007bff;
    }

    /*-------------------- END Icons ------------------- */

    /*-------------------- 19. Table Basic ------------------- */

    .single-table .table {
        margin-bottom: 0;
    }

    table tr th {
        border-bottom: none;
    }

    table tr th,
    table tr td {
        border-top: 1px solid rgba(120, 130, 140, 0.13) !important;
    }

    table tr td [class^="ti-"] {
        cursor: pointer;
    }

    .table-bordered td,
    .table-bordered th {
        border: 1px solid rgba(120, 130, 140, 0.13) !important;
    }

    .status-p {
        color: #fff;
        padding: 0px 20px 1px;
        border-radius: 20px;
        display: inline-block;
        text-transform: capitalize;
        vertical-align: middle;
    }

    /*-------------------- END Table Basic ------------------- */

    /*-------------------- 20. Datatable ------------------- */

    div.dataTables_wrapper div.dataTables_length select {
        width: 76px;
        margin: 0 10px;
    }

    /* datatable-primary */

    .datatable-primary thead {
        background: #4336fb;
        color: #fff;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        border: none;
        background: transparent;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 0;
        border: none;
        margin-top: 20px;
    }

    table.dataTable.no-footer {
        border-bottom: 1px solid rgba(120, 130, 140, 0.13) !important;
    }

    table.dataTable thead th,
    table.dataTable thead td {
        border-bottom-color: transparent;
    }

    .datatable-primary .dataTables_paginate .page-item.active .page-link,
    .datatable-primary .dataTables_paginate .page-item .page-link:hover {
        background-color: #4336fb;
        border-color: #4336fb;
        color: #fff;
    }

    .datatable-primary .dataTables_paginate .page-link {
        color: #4336fb;
        border: 1px solid #4336fb;
    }

    .datatable-primary .dataTables_paginate .paginate_button.disabled,
    .datatable-primary .dataTables_paginate .paginate_button.disabled:hover,
    .datatable-primary .dataTables_paginate .paginate_button.disabled:active {
        color: #4336fb !important;
        border: none;
    }

    .datatable-primary .dataTables_paginate .page-item.disabled .page-link {
        color: #9f98f7;
        background-color: #f9f9f9;
        border-color: #c9c6f5;
    }

    /* datatable-dark */

    .datatable-dark thead {
        background: #444;
        color: #fff;
    }

    .datatable-dark .dataTables_paginate .page-item.active .page-link,
    .datatable-dark .dataTables_paginate .page-item .page-link:hover {
        background-color: #444;
        border-color: #444;
        color: #fff;
    }

    .datatable-dark .dataTables_paginate .page-link {
        color: #444;
        border: 1px solid #444;
    }

    .datatable-dark .dataTables_paginate .paginate_button.disabled,
    .datatable-dark .dataTables_paginate .paginate_button.disabled:hover,
    .datatable-dark .dataTables_paginate .paginate_button.disabled:active {
        color: #444 !important;
        border: none;
    }

    .datatable-dark .dataTables_paginate .page-item.disabled .page-link {
        color: #999;
        background-color: #f9f9f9;
        border-color: #999;
    }

    /*-------------------- END Datatable ------------------- */

    /*-------------------- 21. Map Start ------------------- */

    #mapamchart1,
    #mapamchart2,
    #mapamchart3,
    #mapamchart4,
    #mapamchart5,
    #mapamchart6 {
        height: auto;
    }

    .cards {
        display: flex;
        /* Use flexbox for layout */
        flex-direction: row;
        /* Align items in a row */
        align-items: center;
        /* Center items vertically */
        border: 2px solid #ccc;
        /* Add a border */
        padding: 20px;
        /* Add some padding */
        margin: 20px;
        /* Margin around the card */
        border-radius: 8px;
        /* Rounded corners */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        /* Shadow for better appearance */
    }

    #google_map {
        width: 300px;
        /* Fixed width for the map */
        height: 200px;
        /* Fixed height for the map */
        margin-right: 20px;
        /* Space between map and text */
    }

    .cards iframe {
        width: 100%;
        /* Make iframe responsive */
        height: 100%;
        border: 0;
        /* Remove default iframe border */
    }

    .map-detail {
        margin: 0;
        /* Remove margin from h2 */
    }

    .address-details {
        color: red;
        /* Text color */
    }

    /*-------------------- END Map Start ------------------- */

    /*-------------------- 22. Invoice ------------------- */

    .invoice-area {}

    .invoice-head {
        margin-bottom: 30px;
        border-bottom: 1px solid #efebeb;
        padding-bottom: 20px;
    }

    .invoice-head .iv-left span {
        color: #444;
    }

    .invoice-head span {
        font-size: 21px;
        font-weight: 700;
        color: #777;
    }

    .invoice-address h3 {
        font-size: 24px;
        text-transform: uppercase;
        font-weight: 600;
        color: #333;
        margin-bottom: 15px;
    }

    .invoice-address h5 {
        font-size: 17px;
        margin-bottom: 10px;
    }

    .invoice-address p {
        font-size: 15px;
        color: #555;
    }

    .invoice-date li {
        font-size: 15px;
        color: #555;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .invoice-table {}

    .invoice-table .table-bordered td,
    .invoice-table .table-bordered th {
        border: 1px solid rgba(120, 130, 140, 0.13) !important;
        border-left: none !important;
        border-right: none !important;
    }

    .invoice-table tr td {
        color: #666;
    }

    .invoice-table tfoot tr td {
        text-transform: uppercase;
        font-weight: 600;
        color: #444;
    }

    .invoice-buttons a {
        display: inline-block;
        font-size: 15px;
        color: #fff;
        background: #815ef6;
        padding: 12px 19px;
        border-radius: 3px;
        text-transform: capitalize;
        font-family: "Lato", sans-serif;
        font-weight: 600;
        letter-spacing: 0.03em;
        margin-left: 6px;
    }

    .invoice-buttons a:hover {
        background: #574494;
    }

    /*-------------------- END Invoice ------------------- */

    /*-------------------- 23. Login ------------------- */

    .login-area {
        background: #f3f8fb;
    }

    .login-box {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        min-height: 100vh;
    }

    .login-box form {
        margin: auto;
        width: 450px;
        max-width: 100%;
        background: #fff;
        border-radius: 3px;
    }

    .login-form-head {
        text-align: center;
        background: #8655fc;
        padding: 50px;
    }

    .login-form-head h4 {
        letter-spacing: 0;
        text-transform: uppercase;
        font-weight: 600;
        margin-bottom: 7px;
        color: #fff;
    }

    .login-form-head p {
        color: #fff;
        font-size: 14px;
        line-height: 22px;
    }

    .login-form-body {
        padding: 50px;
    }

    .form-gp {
        margin-bottom: 25px;
        position: relative;
    }

    .form-gp label {
        position: absolute;
        left: 0;
        top: 0;
        color: #b3b2b2;
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .form-gp.focused label {
        top: -15px;
        color: #7e74ff;
    }

    .form-gp input {
        width: 100%;
        height: 30px;
        border: none;
        border-bottom: 1px solid #e6e6e6;
    }

    .form-gp input::-webkit-input-placeholder {
        color: #dad7d7;
    }

    .form-gp input::-moz-placeholder {
        color: #dad7d7;
    }

    .form-gp input:-ms-input-placeholder {
        color: #dad7d7;
    }

    .form-gp input:-moz-placeholder {
        color: #dad7d7;
    }

    .form-gp i {
        position: absolute;
        right: 5px;
        color: #7e74ff;
        font-size: 16px;
    }

    .form-gp.has-error,
    .form-gp.has-error label,
    .form-gp.has-error input,
    .form-gp.has-error input::placeholder,
    .form-gp.has-error i {
        color: var(--red);
    }

    .rmber-area {
        font-size: 13px;
    }

    .submit-btn-area {
        text-align: center;
    }

    .submit-btn-area button {
        width: 100%;
        height: 50px;
        border: none;
        background: #fff;
        color: #585b5f;
        border-radius: 40px;
        text-transform: uppercase;
        letter-spacing: 0;
        font-weight: 600;
        font-size: 12px;
        box-shadow: 0 0 22px rgba(0, 0, 0, 0.07);
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .submit-btn-area button:hover {
        background: #2c71da;
        color: #ffffff;
    }

    .submit-btn-area button i {
        margin-left: 15px;
        -webkit-transition: margin-left 0.3s ease 0s;
        transition: margin-left 0.3s ease 0s;
    }

    .submit-btn-area button:hover i {
        margin-left: 20px;
    }

    .login-other a {
        display: block;
        width: 100%;
        max-width: 250px;
        height: 43px;
        line-height: 43px;
        border-radius: 40px;
        text-transform: capitalize;
        letter-spacing: 0;
        font-weight: 600;
        font-size: 12px;
        box-shadow: 0 0 22px rgba(0, 0, 0, 0.07);
    }

    .login-other a i {
        margin-left: 5px;
    }

    .login-other a.fb-login {
        background: #8655fc;
        color: #fff;
    }

    .login-other a.fb-login:hover {
        box-shadow: 0 5px 15px rgba(44, 113, 218, 0.38);
    }

    .login-other a.google-login {
        background: #fb5757;
        color: #fff;
    }

    .login-other a.google-login:hover {
        box-shadow: 0 5px 15px rgba(251, 87, 87, 0.38);
    }

    .form-footer a {
        margin-left: 5px;
    }

    /* login-s2 */

    .login-s2 {
        background: #fff;
        position: relative;
        z-index: 1;
        overflow: hidden;
    }

    .login-s2:before {
        content: "";
        position: absolute;
        height: 206%;
        width: 97%;
        background: #fcfcff;
        border-radius: 50%;
        left: -42%;
        z-index: -1;
        top: -47%;
        box-shadow: inset 0 0 51px rgba(0, 0, 0, 0.1);
    }

    .login-s2 .login-form-head,
    .login-s2 .login-box form,
    .login-s2 .login-box form .form-gp input {
        background: transparent;
    }

    .login-s2 .login-form-head h4,
    .login-s2 .login-form-head p {
        color: #444;
    }

    /* login-s3 */

    .login-bg {
        background: url(../images/bg/singin-bg.jpg) center/cover no-repeat;
        position: relative;
        z-index: 1;
    }

    .login-bg:before {
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        z-index: -1;
        height: 100%;
        width: 100%;
        background: #272727;
        opacity: 0.7;
    }

    /* register 4 page */

    .login-box-s2 {
        min-height: 100vh;
        background: #f9f9f9;
        width: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }

    .login-box-s2 form {
        margin: auto;
        background: #fff;
        width: 100%;
        max-width: 500px;
    }

    /*-------------------- END Login ------------------- */

    /*-------------------- 24. Pricing ------------------- */

    .pricing-list {
        text-align: center;
    }

    .prc-head h4 {
        background: #cdffd8;
        background: linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -webkit-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -moz-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        color: #fff;
        padding: 28px;
        letter-spacing: 0;
        font-family: "lato", sans-serif;
        font-weight: 500;
        box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
    }

    .prc-list {
        padding: 30px;
        box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
    }

    .prc-list li a {
        display: block;
        font-size: 15px;
        letter-spacing: 0;
        margin: 23px 0;
        color: #6d6969;
    }

    .prc-list li.bold {
        font-weight: 600;
        margin-top: 20px;
    }

    .prc-list>a {
        display: inline-block;
        margin-top: 40px;
        background: #d6b80d;
        color: #fff;
        padding: 11px 20px;
        border-radius: 40px;
        box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
    }

    .pricing-list {
        transition: transform 0.3s ease;
        /* Smooth transition */
    }

    .pricing-list:hover {
        transform: scale(1.05);
        /* Zoom in effect */
    }

    .prc-list>a:hover {
        box-shadow: 0 3px 25px rgba(44, 113, 218, 0.38);
    }

    .dark-pricing .prc-head h4 {
        background: #3e3b3b;
        color: #fff;
    }

    .dark-pricing .prc-list>a {
        background: #3e3b3b;
    }

    .dark-pricing .prc-list>a:hover {
        box-shadow: 0 3px 25px rgba(27, 27, 27, 0.38);
    }

    .services-list {
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 40px;
    }

    .services-list h2 {
        font-size: 70px;
    }

    /*-------------------- END Pricing ------------------- */

    /*-------------------- 25. 404 Page ------------------- */

    .error-area {
        min-height: 100vh;
        background: #f3f8fb;
    }

    .error-content {
        background: #fff;
        width: 100%;
        max-width: 600px;
        margin: auto;
        padding: 70px 30px;
    }

    .error-content h2 {
        font-size: 98px;
        font-weight: 800;
        color: #686cdc;
        margin-bottom: 28px;
        text-shadow: -3px -3px 0 #ffffff, 3px -3px 0 #ffffff, -3px 3px 0 #ffffff,
            3px 3px 0 #ffffff, 4px 4px 0 #6569dc, 5px 5px 0 #6569dc,
            6px 6px 0 #6569dc, 7px 7px 0 #6569dc;
        font-family: "lato", sans-serif;
    }

    .error-content img {
        margin-bottom: 50px;
    }

    .error-content p {
        font-size: 17px;
        color: #787bd8;
        font-weight: 600;
    }

    .error-content a {
        display: inline-block;
        margin-top: 40px;
        background: #656aea;
        color: #fff;
        padding: 16px 26px;
        border-radius: 3px;
    }

    /*-------------------- END 404 Page ------------------- */

    /*-------------------- 26. Offset Sidebar ------------------- */

    .offset-area {
        position: fixed;
        right: -320px;
        top: 0;
        height: 100vh;
        width: 320px;
        background: #f9f9f9;
        z-index: 998;
        box-shadow: -5px 0 20px rgba(0, 0, 0, 0.05);
        -webkit-transition: right 0.3s cubic-bezier(0.62, -0.01, 0.2, 0.83) 0s;
        transition: right 0.3s cubic-bezier(0.62, -0.01, 0.2, 0.83) 0s;
    }

    .show_hide.offset-area {
        right: 0;
    }

    .offset-close {
        font-size: 19px;
        position: absolute;
        left: 0;
        top: 0;
        height: 40px;
        width: 40px;
        cursor: pointer;
        text-align: center;
        line-height: 40px;
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .offset-close:hover {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }

    .offset-menu-tab {
        padding: 30px 20px;
    }

    .offset-menu-tab li {
        display: inline-block;
        width: 50%;
        text-align: center;
    }

    .offset-menu-tab li a {
        display: block;
        font-size: 16px;
        color: #444;
        font-weight: 600;
        font-family: "lato", sans-serif;
        position: relative;
        padding-bottom: 15px;
    }

    .offset-menu-tab li a.active {
        color: #853bfa;
    }

    .offset-menu-tab li a:before {
        content: "";
        position: absolute;
        bottom: 0;
        height: 5px;
        width: 100%;
        background: #853bfa;
        border-radius: 30px;
        -webkit-transition: all 0.3s cubic-bezier(0.91, 0.31, 0.31, 0.92) 0s;
        transition: all 0.3s cubic-bezier(0.91, 0.31, 0.31, 0.92) 0s;
    }

    .offset-menu-tab li a.active:before {
        left: 0;
    }

    .offset-menu-tab li a:before {
        left: 100%;
    }

    .offset-menu-tab li:last-child a:before {
        display: none !important;
    }

    .offset-content {
        padding: 15px;
    }

    .recent-activity {
        padding-top: 7px;
        padding-left: 53px;
    }

    .offset-settings h4 {
        font-family: "lato", sans-serif;
        font-size: 18px;
        letter-spacing: 0;
        font-weight: 700;
        color: #444;
        margin-bottom: 23px;
    }

    .s-swtich input[type="checkbox"] {
        height: 0;
        width: 0;
        visibility: hidden;
        position: absolute;
    }

    .s-swtich label {
        cursor: pointer;
        text-indent: -9999px;
        width: 40px;
        height: 23px;
        background: #1bd4a6;
        display: block;
        border-radius: 100px;
        position: relative;
        margin: 0;
    }

    .s-swtich label:after {
        content: "";
        position: absolute;
        top: 5px;
        left: 5px;
        width: 15px;
        height: 15px;
        background: #fff;
        border-radius: 90px;
        -webkit-transition: 0.3s;
        transition: 0.3s;
    }

    .s-swtich input:checked+label {
        background: #bada55;
    }

    .s-swtich input:checked+label:after {
        left: calc(100% - 5px);
        -webkit-transform: translateX(-100%);
        transform: translateX(-100%);
    }

    .s-swtich label:active:after {
        width: 40px;
    }

    .s-settings {
        margin-bottom: 30px;
    }

    .s-settings p {
        color: #888383;
        font-size: 14px;
    }

    .s-sw-title {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        margin-bottom: 20px;
    }

    .s-sw-title h5 {
        font-size: 16px;
        color: #555;
    }

    /*-------------------- END Offset Sidebar ------------------- */

    /* Slider Container */
    /* Base Slider Style */
    .custom-slider {
        width: 100%;
        height: 500px;
        position: relative;
        overflow: hidden;
        box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);

        border-radius: 8px;
    }

    /* Slides Wrapper */
    .custom-slides {
        width: 400%;
        height: 100%;
        display: flex;
        animation: custom-slider-animation 16s infinite;
    }

    .custom-slides input {
        display: none;
    }

    /* Individual Slides */
    .custom-slide {
        width: 100%;
        height: 100%;
        transition: margin-left 2s;
    }

    .custom-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Ensures images cover the slide without stretching */
    }

    /* Manual Navigation Buttons */
    .custom-navigation-manual {
        position: absolute;
        width: 100%;
        bottom: 10px;
        display: flex;
        justify-content: center;
    }

    .manual-btn {
        border: 2px solid white;
        padding: 5px;
        border-radius: 10px;
        cursor: pointer;
        transition: 0.5s;
    }

    .manual-btn:not(:last-child) {
        margin-right: 10px;
    }

    .manual-btn:hover {
        background-color: white;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .custom-slider {
            height: 300px;
            /* Smaller height for tablets and smaller screens */
        }

        .custom-slide img {
            object-fit: contain;
            /* Keeps aspect ratio intact for smaller screens */
        }

        .custom-navigation-manual {
            bottom: 5px;
            /* Move navigation closer for smaller screens */
        }

        .manual-btn {
            padding: 3px;
            /* Reduce button size for smaller devices */
        }
    }

    @media (max-width: 480px) {
        .custom-slider {
            height: 200px;
            /* Even smaller height for mobile devices */
        }

        .custom-slide img {
            object-fit: contain;
        }

        .manual-btn {
            padding: 2px;
            /* Further reduce button size for mobiles */
        }
    }

    /* Specific Check for Each Slide */
    #radio1:checked~.first {
        margin-left: 0;
    }

    #radio2:checked~.first {
        margin-left: -100%;
    }

    #radio3:checked~.first {
        margin-left: -200%;
    }

    #radio4:checked~.first {
        margin-left: -300%;
    }

    /* Auto Navigation Buttons */
    .custom-navigation-auto {
        position: absolute;
        width: 100%;
        bottom: 20px;
        display: flex;
        justify-content: center;
    }

    .custom-navigation-auto div {
        border: 2px solid white;
        padding: 5px;
        border-radius: 10px;
        margin: 0 5px;
        transition: 0.5s;
    }

    /* Animation for Auto Sliding */
    @keyframes custom-slider-animation {
        0% {
            margin-left: 0;
        }

        25% {
            margin-left: -100%;
        }

        50% {
            margin-left: -200%;
        }

        75% {
            margin-left: -300%;
        }

        100% {
            margin-left: 0;
        }
    }

    .options {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 80px;
    }

    .options .list-options {
        display: flex;
        flex-wrap: wrap;
        /* Allow items to wrap */
        padding: 30px;
        gap: 30px;
        /* Adjusted gap for better spacing */
        justify-content: center;
        /* Ensure content stays centered */
    }

    .options .list-options .chat,
    .options .list-options .book,
    .options .list-options .appoint,
    .options .list-options .doctor {
        padding: 20px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 1 1 200px;
        /* Equal flexible space and wrap */
        font-size: 3vw;
        /* Responsive text size */
        min-width: 180px;
        /* Prevent items from becoming too small */
        transition: transform 0.3s ease;
        /* Transition effect */
    }

    .options .list-options .chat {
        background: #cdffd8;
        background: linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -webkit-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -moz-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        box-shadow: 2px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -webkit-box-shadow: 2px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 2px 10px 5px 0px rgba(0, 0, 0, 0.75);
    }

    .options .list-options .book {
        background: #cdffd8;
        background: linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -webkit-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -moz-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        box-shadow: 2px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -webkit-box-shadow: 2px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 2px 10px 5px 0px rgba(0, 0, 0, 0.75);
    }

    .options .list-options .appoint {
        background: #cdffd8;
        background: linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -webkit-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -moz-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        box-shadow: 2px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -webkit-box-shadow: 2px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 2px 10px 5px 0px rgba(0, 0, 0, 0.75);
    }

    .options .list-options .doctor {
        background: #cdffd8;
        background: linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -webkit-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        background: -moz-linear-gradient(0deg, #cdffd8 0%, #94b9ff 20%);
        box-shadow: 2px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -webkit-box-shadow: 2px 10px 5px 0px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 2px 10px 5px 0px rgba(0, 0, 0, 0.75);
    }

    /* Hover effect */
    .options .list-options .chat:hover,
    .options .list-options .book:hover,
    .options .list-options .appoint:hover,
    .options .list-options .doctor:hover {
        transform: scale(1.1);
        /* Zoom in effect */
    }

    /* Media Queries */
    @media (max-width: 600px) {

        .options .list-options .chat,
        .options .list-options .book,
        .options .list-options .appoint,
        .options .list-options .doctor {
            font-size: 5vw;
            /* Increase font size for smaller screens */
        }

        .options .list-options {
            gap: 20px;
            /* Adjust gap for smaller screens */
        }
    }

    /* General Styles */
    .succes-notif {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: green;
        margin: 30px;
        height: 100px;
        width: 100%;
        text-align: center;
    }

    .info-suc {
        margin-right: 10px;
    }

    .succes-notif i {
        font-size: 30px;
    }

    .logosz {
        align-items: center;
        justify-content: center;
    }

    /* Button Container */
    .display-buttonsz {
        display: flex;
        justify-content: center;
        padding: 20px;
    }

    /* Box around the buttons */
    .boxs-click {
        display: flex;
        flex-direction: row;
        /* Default to row for larger screens */
        border: 8px solid black;
        border-radius: 10px;
        padding: 20px;
        margin: 20px;
        align-items: center;
        justify-content: center;
    }

    /* Button Styles */
    .boxs-click button {
        width: 230px;
        height: 70px;
        margin-left: 20px;
        /* Adds space between buttons */
    }

    /* Button Responsiveness for Mobile */
    .boxs-click .view-appoints button,
    .boxs-click .create-appoint button {
        margin-left: 0;
        /* Reset for mobile view */
    }

    /* Media Queries */
    @media (max-width: 768px) {

        /* For tablets and smaller screens */
        .succes-notif {
            height: 80px;
            margin: 10px;
        }

        .boxs-click {
            flex-direction: column;
            /* Stack buttons vertically on smaller screens */
            padding: 10px;
        }

        .boxs-click button {
            width: 100%;
            /* Buttons take full width */
            margin-left: 0;
            /* Remove left margin */
        }

        .display-buttonsz {
            padding: 20px;
        }
    }

    @media (max-width: 480px) {

        /* For mobile screens */
        .succes-notif {
            height: 70px;
            margin: 5px;
        }

        .boxs-click {
            flex-direction: column;
            /* Stack buttons vertically */
            padding: 10px;
        }

        .boxs-click button {
            width: 100%;
            /* Full width buttons */
            height: 60px;
            /* Adjust button height for smaller screens */
            margin-bottom: 10px;
            /* Add space between buttons */
        }

        /* Center the buttons container */
        .display-buttonsz {
            padding: 10px;
        }
    }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="main_alls/everythingzz/assets/images/icon/logo2.png" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">



                            <li><a href="{{url('myappointment')}}"><i class="fa fa-briefcase"></i> <span>View
                                        Appointment</span></a>
                            </li>
                            <li><a href="{{ url('profile') }}"><i class="fa fa-user"></i> <span>My
                                        Profile</span></a></li>
                            <li><a href=" invoice.html"><i class="fa fa-comments"></i> <span>Chat with
                                        Front-desk</span></a>
                            </li>

                            <li><a href="{{url('create_appointmentsss')}}"><i class="fa fa-briefcase"></i> <span>Create
                                        An Appointment</span></a>
                            </li>

                            <li><a href=" invoice.html"><i class="fa fa-comments"></i> <span>Chat with my
                                        Doctor</span></a>
                            </li>



                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class=" main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                    </div>
                    <!-- profile info & task notification -->

                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            @auth
                            @if(Auth::user()->role_name !== 'Normal User')

                            <a href="{{route('guest_view')}}">
                                <h4 class="page-title pull-left"><span class="unverifieds">Unverified</span> </h4>
                            </a>
                            @endif

                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>New Account</span></li>
                            </ul>


                            <ul class="bread-middle">
                                <li><a href="index.html">View Appointment</a></li>
                                <li><a href="index.html">Chat with Doctor</a></li>
                                <li><a href="index.html">View Profile</a></li>

                            </ul>


                        </div>
                        @endauth
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="main_alls/everythingzz/assets/images/author/avatar.png">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                                Patient| Rex Lester Bastaoang
                                <i class="fa fa-angle-down"></i>
                            </h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="{{ route('view.normal.prof')}}">View Profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}">Log
                                    Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->




            <div class="custom-slider">

                <div class="custom-slides">
                    <!-- Radio buttons for manual navigation -->
                    <input type="radio" name="radio-btn" id="radio1" checked>
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">

                    <!-- Slide images -->
                    <div class="custom-slide first">
                        <img src="main_alls/everythingzz/assets/images/slider/brooz.jpg" alt="Image 1">
                    </div>
                    <div class="custom-slide">
                        <img src="main_alls/everythingzz/assets/images/slider/brooz2.jpg" alt="Image 2">
                    </div>
                    <div class="custom-slide">
                        <img src="main_alls/everythingzz/assets/images/slider/brooz3.jpg" alt="Image 3">
                    </div>
                    <div class="custom-slide">
                        <img src="main_alls/everythingzz/assets/images/slider/brooz.jpg" alt="Image 4">
                    </div>

                    <!-- Automatic navigation dots -->
                    <div class="custom-navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                </div>

                <!-- Manual navigation dots -->
                <div class="custom-navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
            </div>



            <div class="options">
                <div class="list-options">
                    <div class="chat">
                        <span class="fa fa-commenting"></span>
                        <p>Chat with <span>Us</span></p>
                    </div>


                    <div class="book">
                        <span class="fa fa-book"></span>
                        <p>Book us <span>Now</span></p>
                    </div>

                    <div class="appoint">
                        <span class="fa fa-book"></span>
                        <p>Create Appointment</span></p>
                    </div>

                    <div class="doctor">
                        <span class="fa fa-user "></span>
                        <p>My Doctors</span></p>
                    </div>
                </div>
            </div>
















            <div class="card mt-5">
                <div class="card-body">
                    <h4 class="header-title">Recent Visit List</h4>
                    <div class="table-responsive">
                        <table class="dbkit-table">
                            <thead>

                                <th>Name Doctor</th>
                                <th>Date</th>
                                <th>Messages</th>
                                <th>Schedule</th>
                                <th>Status</th>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>Warlyn Bangongon</td>
                                    <td>September 23,2024</td>
                                    <td>
                                        <a href="" class="btn btn-info">View Message</a>
                                    </td>
                                    <td>September 18,2024</td>
                                    <td>
                                        <a href="" class="btn btn-success">Completed</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Warlyn Bangongon</td>
                                    <td>September 23,2024</td>
                                    <td>
                                        <a href="" class="btn btn-info">View Message</a>
                                    </td>
                                    <td>September 18,2024</td>
                                    <td>
                                        <a href="" class="btn btn-success">Completed</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rex Lester Bastaoang</td>
                                    <td>September 23,2024</td>
                                    <td>
                                        <a href="" class="btn btn-info">View Message</a>
                                    </td>
                                    <td>September 18,2024</td>
                                    <td>
                                        <a href="" class="btn btn-success">Completed</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="pagination_area pull-right mt-5">
                        <ul>
                            <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>










            <div class="services-list">
                <h2>Our Services Offer</h2>
            </div>

            <div class="main-content-inner">
                <!-- color pricing start -->
                <div class="row">
                    <div class="col-xl-3 col-ml-6 col-mdl-4 col-sm-6 mt-5">
                        <div class="card">
                            <div class="pricing-list">
                                <div class="prc-head">
                                    <h4>Blood Chemistry</h4>
                                </div>
                                <div class="prc-list">
                                    <ul>
                                        <li><a href="#">FBS</a></li>
                                        <li><a href="#">RBS/HGT</a></li>
                                        <li><a href="#">CHOLESTEROL,TRIGLYCERIDES, LDL, HDL,
                                                VLDL</a></li>
                                        <li><a href="#">ALBUMIN</a></li>
                                        <li><a href="#">AMYLASE</a></li>
                                        <li><a href="#">LIPASE</a></li>
                                        <li><a href="#">TRIGLYCERIDES </a></li>
                                        <li><a href="#">ALBUMIN</a></li>
                                        <li class="bold"><a href="#">1 SALT/year</a></li>
                                    </ul>
                                    <a href="#">More Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-ml-6 col-mdl-4 col-sm-6 mt-5">
                        <div class="card">
                            <div class="pricing-list">
                                <div class="prc-head">
                                    <h4>HORMONES</h4>
                                </div>
                                <div class="prc-list">
                                    <ul>
                                        <li><a href="#">Prolactin </a></li>
                                        <li><a href="#">Estrogen</a></li>
                                        <li><a href="#">Progesterone</a></li>
                                        <li><a href="#">Testosterone </a></li>
                                        <li><a href="#">Cortisol</a></li>
                                        <li><a href="#">Ferritin</a></li>
                                        <li><a href="#">GLYCOMARK</a></li>
                                        <li><a href="#">PHOSPHORUS </a></li>
                                        <li class="bold"><a href="#">PHOCALICITION</a></li>
                                    </ul>
                                    <a href="#">More info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-ml-6 col-mdl-4 col-sm-6 mt-5">
                        <div class="card">
                            <div class="pricing-list">
                                <div class="prc-head">
                                    <h4>TUMOR MARKERS</h4>
                                </div>
                                <div class="prc-list">
                                    <ul>
                                        <li><a href="#">AFP </a></li>
                                        <li><a href="#">CEA</a></li>
                                        <li><a href="#">PSA</a></li>
                                        <li><a href="#">CA-125 OVARY</a></li>
                                        <li class="bold"><a href="#">CA-15-3 (BREAST)</a>
                                        </li>
                                        <li><a href="#">CA-19-9 (PANCREAS)</a></li>

                                    </ul>
                                    <a href="#">More Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-ml-6 col-mdl-4 col-sm-6 mt-5">
                        <div class="card">
                            <div class="pricing-list">
                                <div class="prc-head">
                                    <h4>•HEPATITIS</h4>
                                </div>
                                <div class="prc-list">
                                    <ul>
                                        <li><a href="#">HBsAg Screening/a></li>
                                        <li><a href="#">HBsAg with Titer</a></li>
                                        <li><a href="#">Anti-HBs Titer</a></li>
                                        <li><a href="#">HBeAg</a></li>
                                        <li class="bold"><a href="#">Anti-Hbe</a></li>
                                        <li><a href="#">Anti-HBc lgm</a></li>
                                        <li><a href="#">Anti-HBc lgc</a></li>
                                        <li><a href="#">Anti-Hav lgm</a></li>
                                        <li><a href="#">Anti-HCV</a></li>
                                        <li><a href="#">Hepa A & B profile</a></li>
                                        <li><a href="#">Hepatitis A, B & C profile</a></li>
                                        <li class="bold"><a href="#">Hepa A & B profile</a>
                                        </li>
                                    </ul>
                                    <a href="#">Buy Package</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- color pricing end -->
                <!-- dark pricing start -->

                <!-- dark pricing end -->



            </div>



        </div>






    </div>
    <!-- main content area end -->
    <!-- footer area start-->
    <footer>
        <div class="footer-area">
            <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.
            </p>
        </div>
    </footer>
    <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        <div class="offset-content tab-content">
            <div id="activity" class="tab-pane fade in show active">
                <div class="recent-activity">
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Added</h4>
                            <span class="time"><i class="ti-time"></i>7 Minutes Ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You missed you Password!</h4>
                            <span class="time"><i class="ti-time"></i>09:20 Am</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Member waiting for you Attention</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>You Added Kaji Patha few minutes ago</h4>
                            <span class="time"><i class="ti-time"></i>01 minutes ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg1">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Ratul Hamba sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Hello sir , where are you, i am egerly waiting for you.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg2">
                            <i class="fa fa-exclamation-triangle"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="fa fa-bomb"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                    <div class="timeline-task">
                        <div class="icon bg3">
                            <i class="ti-signal"></i>
                        </div>
                        <div class="tm-title">
                            <h4>Rashed sent you an email</h4>
                            <span class="time"><i class="ti-time"></i>09:35</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio itaque at.
                        </p>
                    </div>
                </div>
            </div>
            <div id="settings" class="tab-pane fade">
                <div class="offset-settings">
                    <h4>General Settings</h4>
                    <div class="settings-list">
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch1" />
                                    <label for="switch1">Toggle</label>
                                </div>
                            </div>
                            <p>Keep it 'On' When you want to get all the notification.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show recent activity</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch2" />
                                    <label for="switch2">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show your emails</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch3" />
                                    <label for="switch3">Toggle</label>
                                </div>
                            </div>
                            <p>Show email so that easily find you.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Show Task statistics</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch4" />
                                    <label for="switch4">Toggle</label>
                                </div>
                            </div>
                            <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                        </div>
                        <div class="s-settings">
                            <div class="s-sw-title">
                                <h5>Notifications</h5>
                                <div class="s-swtich">
                                    <input type="checkbox" id="switch5" />
                                    <label for="switch5">Toggle</label>
                                </div>
                            </div>
                            <p>Use checkboxes when looking for yes or no answers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="main_alls/everythingzz/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="main_alls/everythingzz/assets/js/popper.min.js"></script>
    <script src="main_alls/everythingzz/assets/js/bootstrap.min.js"></script>
    <script src="main_alls/everythingzz/assets/js/owl.carousel.min.js"></script>
    <script src="main_alls/everythingzz/assets/js/metisMenu.min.js"></script>
    <script src="main_alls/everythingzz/assets/js/jquery.slimscroll.min.js"></script>
    <script src="main_alls/everythingzz/assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="main_alls/everythingzz/assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="main_alls/everythingzz/assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="main_alls/everythingzz/assets/js/plugins.js"></script>
    <script src="main_alls/everythingzz/assets/js/scripts.js"></script>
</body>

</html>