<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>DMS by DevCtrl</title>
    <link rel="stylesheet" type="text/css" href="css/header_style.css">
    <link rel="stylesheet" type="text/css" href="css/catagory_button.css">
    <link rel="stylesheet" type="text/css" href="css/recent_middle_element.css">
    <link rel="stylesheet" type="text/css" href="css/right_element.css">


    <!-- header font style [Poppins] -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript" src="javascript/header.js"></script>

</head>
<body>
<div class="header">
    <header class="header-user-dropdown">

        <div class="header-limiter">
            <h1><a href="#">Dev<span>Ctrl</span></a></h1>

            <nav>
                <a href="index.html">Dashboard</a>
                <a href="#">Notice</a>
                <a href="#">Reports</a>
                <a href="#">Help <!-- <span class="header-new-feature">Admin</span> --></a>
            </nav>


            <div class="header-user-menu">
                <img src="image/2.jpg" alt="User Image"/>

                <ul>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#" class="highlight">Logout</a></li>
                </ul>
            </div>

        </div>

    </header>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<div class="main_body">
    <div class="main_body_container">

        <!-- Body Right Side Element Start -->

        <div class="dashboard_flexbox_right">
            <div class="one">
                <p>New Form & History</p>
                <div class="underline">
                    <span></span>
                </div>
                <button class="tablink"><a href="new_user_registration_form.html">New Service Holder</a></button>
                <button class="tablink"><a href="user_certificate_form_history.html">Service Holder List English</a></button>
                <button class="tablink"><a href="user_certificate_form_history_bangla.html">Service Holder List Bangla</a></button>
            </div>





            <div class="two">
                <p>Recent Notice</p>
                <div class="underline">
                    <span></span>
                </div>
                <div class="dashboard_flexbox_right_notic">
                    <ul>
                        <li>Lorem Ipsum is simply </li>
                        <li>Lorem Ipsum is simply </li>
                        <li>Lorem Ipsum is simply </li>
                        <li>Lorem Ipsum is simply </li>
                        <li>Lorem Ipsum is simply </li>
                        <li>Lorem Ipsum is simply </li>
                        <li>Lorem Ipsum is simply </li>
                        <li>Lorem Ipsum is simply </li>
                        <li>Lorem Ipsum is simply </li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- Body Right Side Element Start -->


        <!-- Body Middle Side Element Start -->

        <div class="main_body_container_field">
            <p>Recent Form</p>
            <h2>Please Recheck The Form Before Printing</h2>
            <div class="underline_middle">
                <span></span>
            </div>

            <div class="recent_middle_container_flex">
                <div class="recent_middle_container_flex_left">
                    <table class="bangla_table">
                        <tr>
                            <th>Catagory</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td id="userId"><?php echo $_GET['id'];?></td>
                        </tr>
                        <tr>
                            <td>Name</td>

                            <td><input type="text" id="Bangla_name"/></td>
                        </tr>

                        <tr>
                            <td>Father's Name</td>
                            <td><input type="text" id="Bangla_father_name"/></td>
                        </tr>

                        <tr>
                            <td>Mother's Name</td>
                            <td><input type="text" id="Bangla_mother_name"/></td>
                        </tr>

                        <tr>
                            <td>Mobile Number</td>
                            <td><input type="text" id="Bangla_mobile_number"/></td>
                        </tr>

                        <tr>
                            <td>Voter Id Card</td>
                            <td><input type="text" id="voter_id_number" readonly/></td>
                        </tr>

                        <tr>
                            <td colspan="2" style='text-align:center;vertical-align:middle;background: -webkit-linear-gradient(#0ef1c3, #45a049); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
                            '><span style="font-weight:bold">Present Address</span></td>
                        </tr>
                        <tr>
                            <td>House Number</td>
                            <td><input type="text" id="Bangla_house_number"/></td>
                        </tr>
                        <tr>
                            <td>Road Number</td>
                            <td><input type="text" id="Bangla_road_number"/></td>
                        </tr>
                        <tr>
                            <td>Block Number</td>
                            <td><input type="text" id="Bangla_block_number"/></td>
                        </tr>
                        <tr>
                            <td colspan="2" style='text-align:center;vertical-align:middle;background: -webkit-linear-gradient(#0ef1c3, #45a049); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
                            '><span style="font-weight:bold">Parmanent Address</span></td>
                        </tr>
                        <tr>
                            <td>Village</td>
                            <td ><input type="text" id="Bangla_village_name"/></td>
                        </tr>
                        <tr>
                            <td>District</td>
                            <td ><input type="text" id="Bangla_district_name"/></td>
                        </tr>
                        <tr>
                            <td>Police Station</td>
                            <td ><input type="text" id="Bangla_police_station"/></td>
                        </tr>
                        <tr>
                            <td>Post Office</td>
                            <td ><input type="text" id="Bangla_post_office"/></td>
                        </tr>
                        <tr>
                            <td><button id="editbtn" name="editbtn">Done</button></td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
        <script src="https://www.gstatic.com/firebasejs/7.9.3/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.9.3/firebase-storage.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.9.3/firebase-firestore.js"></script>

        <!-- TODO: Add SDKs for Firebase products that you want to use
             https://firebase.google.com/docs/web/setup#available-libraries -->

        <script src="https://www.gstatic.com/firebasejs/7.9.3/firebase-analytics.js"></script>
        <script type="text/javascript" src="javascript/moment.js"></script>


        <script src="javascript/databaseconfig.js"></script>
        <script type="text/javascript" src="javascript/edit_recent_file_bangla.js"></script>



        <!-- Body Middle Side Element End -->
    </div>
</div>

</body>
</html>