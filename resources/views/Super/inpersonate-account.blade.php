<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inpersonate</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="admins/assets/css/bootstrap.css">

        <link rel="stylesheet" href="admins/assets/vendors/iconly/bold.css">

        <link rel="stylesheet" href="admins/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
        <link rel="stylesheet" href="admins/assets/vendors/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="admins/assets/css/app.css">
        <link rel="shortcut icon" href="admins/assets/images/favicon.svg" type="image/x-icon">
    </head>

    <body>
        <div id="app">
            <div id="sidebar" class="active">
                <div class="sidebar-wrapper active">
                    <div class="sidebar-header">
                        <div class="d-flex justify-content-between">
                            <div class="logo">
                                <a href="index.html"><img src="admins/assets/images/logo/logo.png" alt="Logo"
                                        srcset=""></a>
                            </div>
                            <div class="toggler">
                                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-menu">
                        <ul class="menu">
                            <li class="sidebar-title">Menu</li>

                            <li class="sidebar-item active ">
                                <a href="index.html" class='sidebar-link'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-stack"></i>
                                    <span>Components</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="component-alert.html">Alert</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="component-badge.html">Badge</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="component-breadcrumb.html">Breadcrumb</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="component-button.html">Button</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="component-card.html">Card</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="component-carousel.html">Carousel</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="component-dropdown.html">Dropdown</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="component-list-group.html">List Group</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="component-modal.html">Modal</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="component-navs.html">Navs</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="component-pagination.html">Pagination</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="component-progress.html">Progress</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="component-spinner.html">Spinner</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="component-tooltip.html">Tooltip</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-collection-fill"></i>
                                    <span>Extra Components</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="extra-component-avatar.html">Avatar</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="extra-component-sweetalert.html">Sweet Alert</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="extra-component-toastify.html">Toastify</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="extra-component-rating.html">Rating</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="extra-component-divider.html">Divider</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-grid-1x2-fill"></i>
                                    <span>Layouts</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="layout-default.html">Default Layout</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="layout-vertical-1-column.html">1 Column</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="layout-vertical-navbar.html">Vertical with Navbar</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="layout-horizontal.html">Horizontal Menu</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-title">Forms &amp; Tables</li>

                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-hexagon-fill"></i>
                                    <span>Form Elements</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="form-element-input.html">Input</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="form-element-input-group.html">Input Group</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="form-element-select.html">Select</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="form-element-radio.html">Radio</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="form-element-checkbox.html">Checkbox</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="form-element-textarea.html">Textarea</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-item  ">
                                <a href="form-layout.html" class='sidebar-link'>
                                    <i class="bi bi-file-earmark-medical-fill"></i>
                                    <span>Form Layout</span>
                                </a>
                            </li>

                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-pen-fill"></i>
                                    <span>Form Editor</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="form-editor-quill.html">Quill</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="form-editor-ckeditor.html">CKEditor</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="form-editor-summernote.html">Summernote</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="form-editor-tinymce.html">TinyMCE</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-item  ">
                                <a href="table.html" class='sidebar-link'>
                                    <i class="bi bi-grid-1x2-fill"></i>
                                    <span>Table</span>
                                </a>
                            </li>

                            <li class="sidebar-item  ">
                                <a href="table-datatable.html" class='sidebar-link'>
                                    <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                    <span>Datatable</span>
                                </a>
                            </li>

                            <li class="sidebar-title">Extra UI</li>

                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-pentagon-fill"></i>
                                    <span>Widgets</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="ui-widgets-chatbox.html">Chatbox</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="ui-widgets-pricing.html">Pricing</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="ui-widgets-todolist.html">To-do List</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-egg-fill"></i>
                                    <span>Icons</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="ui-icons-bootstrap-icons.html">Bootstrap Icons </a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="ui-icons-fontawesome.html">Fontawesome</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="ui-icons-dripicons.html">Dripicons</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-bar-chart-fill"></i>
                                    <span>Charts</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="ui-chart-chartjs.html">ChartJS</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="ui-chart-apexcharts.html">Apexcharts</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-item  ">
                                <a href="ui-file-uploader.html" class='sidebar-link'>
                                    <i class="bi bi-cloud-arrow-up-fill"></i>
                                    <span>File Uploader</span>
                                </a>
                            </li>

                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-map-fill"></i>
                                    <span>Maps</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="ui-map-google-map.html">Google Map</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="ui-map-jsvectormap.html">JS Vector Map</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-title">Pages</li>

                            <li class="sidebar-item  ">
                                <a href="application-email.html" class='sidebar-link'>
                                    <i class="bi bi-envelope-fill"></i>
                                    <span>Email Application</span>
                                </a>
                            </li>

                            <li class="sidebar-item  ">
                                <a href="application-chat.html" class='sidebar-link'>
                                    <i class="bi bi-chat-dots-fill"></i>
                                    <span>Chat Application</span>
                                </a>
                            </li>

                            <li class="sidebar-item  ">
                                <a href="application-gallery.html" class='sidebar-link'>
                                    <i class="bi bi-image-fill"></i>
                                    <span>Photo Gallery</span>
                                </a>
                            </li>

                            <li class="sidebar-item  ">
                                <a href="application-checkout.html" class='sidebar-link'>
                                    <i class="bi bi-basket-fill"></i>
                                    <span>Checkout Page</span>
                                </a>
                            </li>

                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-person-badge-fill"></i>
                                    <span>Authentication</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="auth-login.html">Login</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="auth-register.html">Register</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="auth-forgot-password.html">Forgot Password</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-item  has-sub">
                                <a href="#" class='sidebar-link'>
                                    <i class="bi bi-x-octagon-fill"></i>
                                    <span>Errors</span>
                                </a>
                                <ul class="submenu ">
                                    <li class="submenu-item ">
                                        <a href="error-403.html">403</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="error-404.html">404</a>
                                    </li>
                                    <li class="submenu-item ">
                                        <a href="error-500.html">500</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="sidebar-title">Raise Support</li>

                            <li class="sidebar-item  ">
                                <a href="https://zuramai.github.io/mazer/docs" class='sidebar-link'>
                                    <i class="bi bi-life-preserver"></i>
                                    <span>Documentation</span>
                                </a>
                            </li>

                            <li class="sidebar-item  ">
                                <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md"
                                    class='sidebar-link'>
                                    <i class="bi bi-puzzle"></i>
                                    <span>Contribute</span>
                                </a>
                            </li>

                            <li class="sidebar-item  ">
                                <a href="https://github.com/zuramai/mazer#donate" class='sidebar-link'>
                                    <i class="bi bi-cash"></i>
                                    <span>Donate</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
                </div>
            </div>
            <div id="main">
                <header class="mb-3">
                    <a href="#" class="burger-btn d-block d-xl-none">
                        <i class="bi bi-justify fs-3"></i>
                    </a>
                </header>

                <div class="page-heading">
                    <h3>Profile Statistics</h3>
                </div>
                <div class="page-content">

                </div>

                <section class="section">
                    <div class="row" id="table-head">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Table head options</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p>Similar to tables and dark tables, use the modifier classes <code
                                                class="highlighter-rouge">.thead-light</code> or <code
                                                class="highlighter-rouge">.thead-dark</code> to
                                            make <code class="highlighter-rouge">&lt;thead&gt;</code>s appear light or
                                            dark gray.
                                        </p>
                                    </div>
                                    <!-- table head dark -->
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>NAME</th>
                                                    <th>RATE</th>
                                                    <th>SKILL</th>
                                                    <th>TYPE</th>
                                                    <th>LOCATION</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-bold-500">Michael Right</td>
                                                    <td>$15/hr</td>
                                                    <td class="text-bold-500">UI/UX</td>
                                                    <td>Remote</td>
                                                    <td>Austin,Taxes</td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">Morgan Vanblum</td>
                                                    <td>$13/hr</td>
                                                    <td class="text-bold-500">Graphic concepts</td>
                                                    <td>Remote</td>
                                                    <td>Shangai,China</td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">Tiffani Blogz</td>
                                                    <td>$15/hr</td>
                                                    <td class="text-bold-500">Animation</td>
                                                    <td>Remote</td>
                                                    <td>Austin,Texas</td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">Ashley Boul</td>
                                                    <td>$15/hr</td>
                                                    <td class="text-bold-500">Animation</td>
                                                    <td>Remote</td>
                                                    <td>Austin,Texas</td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-bold-500">Mikkey Mice</td>
                                                    <td>$15/hr</td>
                                                    <td class="text-bold-500">Animation</td>
                                                    <td>Remote</td>
                                                    <td>Austin,Texas</td>
                                                    <td><a href="#"><i
                                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                data-feather="mail"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <script src="admins/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="admins/assets/js/bootstrap.bundle.min.js"></script>

        <script src="admins/assets/vendors/apexcharts/apexcharts.js"></script>
        <script src="admins/assets/js/pages/dashboard.js"></script>

        <script src="admins/assets/js/main.js"></script>
    </body>

</html>