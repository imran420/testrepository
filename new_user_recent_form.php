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
					<a href="#">Dashboard</a>
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
<!--                        <form method="post" action="new_user_form_edit_section.html">-->
						<h1>Bangla Form</h1>
						<table class="bangla_table">
							<tr>
								<th>Catagory</th>
								<th>Description</th>
							</tr>
							<tr>
								<td>ID</td>
								<td id="userId"><?php echo $_POST['Evoteridnumber'];?></td>
							</tr>
							<tr>
								<td>Name</td>
								<td id="Bangla_name"></td>
							</tr>

							<tr>
								<td>Father's Name</td>
								<td id="Bangla_father_name"></td>
							</tr>

							<tr>
								<td>Mother's Name</td>
								<td id="Bangla_mother_name"></td>
							</tr>

							<tr>
								<td>Mobile Number</td>
								<td id="Bangla_mobile_number"></td>
							</tr>

							<tr>
								<td>Voter Id Card</td>
								<td id="voter_id_number"></td>
							</tr>

							<tr>
								<td colspan="2" style='text-align:center;vertical-align:middle;background: -webkit-linear-gradient(#0ef1c3, #45a049); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
                            '><span style="font-weight:bold">Present Address</span></td>
                            </tr>
							<tr>
                                <td>House Number</td>
                                <td id="Bangla_house_number"></td>
                            </tr>
                            <tr>
                                <td>Road Number</td>
                                <td id="Bangla_road_number"></td>
                            </tr>
                            <tr>
                                <td>Block Number</td>
                                <td id="Bangla_block_number"></td>
                            </tr>
                            <tr>
                                <td colspan="2" style='text-align:center;vertical-align:middle;background: -webkit-linear-gradient(#0ef1c3, #45a049); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
                            '><span style="font-weight:bold">Parmanent Address</span></td>
                            </tr>
                            <tr>
                                <td>Village</td>
                                <td id="Bangla_village_name"></td>
                            </tr>
                            <tr>
                                <td>District</td>
                                <td id="Bangla_district_name"></td>
                            </tr>
                            <tr>
                                <td>Police Station</td>
                                <td id="Bangla_police_station"></td>
                            </tr>
                            <tr>
                                <td>Post Office</td>
                                <td id="Bangla_post_office"></td>
                            </tr>
							<tr>
								<td><button id="myBtn">Select Catagory for Print</button></td>
                                <?php
                                $Edit="Edit";
                                echo "<td><a href='new_user_form_edit_section_bangla.php?id=".$_POST['Evoteridnumber']."'  class='styleancr' >".$Edit."</a></td>";
                                ?>
							</tr>
						</table>
<!--                        </form>-->
					</div>
					<div class="recent_middle_container_flex_right">
<!--                        <form method="post" action="new_user_form_edit_section.html">-->
						<h1>English Form</h1>
						<table class="bangla_table">
                            <tr>
                                <th>Catagory</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>ID</td>
                                <td id="userIdeng"><?php echo $_POST['Evoteridnumber'];?></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td id="English_name"></td>
                            </tr>

                            <tr>
                                <td>Father's Name</td>
                                <td id="English_father_name"></td>
                            </tr>

                            <tr>
                                <td>Mother's Name</td>
                                <td id="English_mother_name"></td>
                            </tr>

                            <tr>
                                <td>Mobile Number</td>
                                <td id="English_mobile_number"></td>
                            </tr>

                            <tr>
                                <td>Voter Id Card</td>
                                <td id="voter_id_number_ban"></td>
                            </tr>

                            <tr>
                                <td colspan="2" style='text-align:center;vertical-align:middle;background: -webkit-linear-gradient(#0ef1c3, #45a049); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
                            '><span style="font-weight:bold">Present Address</span></td>
                            </tr>
                            <tr>
                                <td>House Number</td>
                                <td id="English_house_number"></td>
                            </tr>
                            <tr>
                                <td>Road Number</td>
                                <td id="English_road_number"></td>
                            </tr>
                            <tr>
                                <td>Block Number</td>
                                <td id="English_block_number"></td>
                            </tr>
                            <tr>
                                <td colspan="2" style='text-align:center;vertical-align:middle;background: -webkit-linear-gradient(#0ef1c3, #45a049); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
                            '><span style="font-weight:bold">Parmanent Address</span></td>
                            </tr>
                            <tr>
                                <td>Village</td>
                                <td id="English_village_name"></td>
                            </tr>
                            <tr>
                                <td>District</td>
                                <td id="English_district_name"></td>
                            </tr>
                            <tr>
                                <td>Police Station</td>
                                <td id="English_police_station"></td>
                            </tr>
                            <tr>
                                <td>Post Office</td>
                                <td id="English_post_office"></td>
                            </tr>
							<tr>
								<td><button id="myBtn1"> Select Catagory for Print</button></td>
                                <?php
                                $Edit="Edit";
                                echo "<td><a href='new_user_form_edit_section.php?ideng=".$_POST['Evoteridnumber']."'  class='styleancr' >".$Edit."</a></td>";
                                ?>
							</tr>
						</table>
<!--                        </form>-->
					</div>
				</div>
			</div>

			<!-- Body Middle Side Element End -->


			<!-- Modal Section for Edit  Start -->

			<!-- The Modal -->
			<div id="myModal" class="modal">

			  <!-- Modal content Bangla -->
			  <div class="modal-content">
			    <span class="close">&times;</span>
					<div class="main_body_container_catagory">
						<p>Catagory</p>
						<div class="underline">
							<span></span>
						</div>
						<div class="main_body_container_catagory_container">
							<div class="main_body_container_catagory_container_info">
								<a href="">
									<img src="image/logo/certificate.png">
									<p>National Certificate</p>
								</a>
							</div>
							<div class="main_body_container_catagory_container_info2">
								<a href="">
								<img src="image/logo/charecter.png">
								<p>Charecter Certificate</p>
								</a>
							</div>
							<div class="main_body_container_catagory_container_info">
								<a href="">
								<img src="image/logo/tombstone.png">
								<p>Death Certificate</p>
								</a>
							</div>
							<div class="main_body_container_catagory_container_info2">
								<a href="">
								<img src="image/logo/tribal.png">
								<p>Tribale Certificate</p>
								</a>
							</div>
							<div class="main_body_container_catagory_container_info">
								<a href="">
								<img src="image/logo/job.png">
								<p>Unemployment Certificate</p>
								</a>
							</div>
							<div class="main_body_container_catagory_container_info2">
								<a href="">
								<img src="image/logo/soldier.png">
								<p>Freedom fighter Certificate</p>
								</a>
							</div>
							<div class="main_body_container_catagory_container_info3">
								<a href="">
								<img src="image/logo/money.png">
								<p>Annual Income Certificate</p>
								</a>
							</div>
							<div class="main_body_container_catagory_container_info4">
								<a href="">
								<img src="image/logo/man.png">
								<p>Unmarried Certificate</p>
								</a>
							</div>
						</div>
					</div>

			  </div>

			</div>


			<!-- The Modal -->
			<div id="myModal1" class="modal">

			  <!-- Modal content English -->
			  <div class="modal-content">
			    <span class="close1">&times;</span>
					<div class="main_body_container_catagory">
						<p>Catagory</p>
						<div class="underline">
							<span></span>
						</div>
						<div class="main_body_container_catagory_container">
							<div class="main_body_container_catagory_container_info">
								<a href="">
									<img src="image/logo/certificate.png">
									<p>National Certificate</p>
								</a>
							</div>
							<div class="main_body_container_catagory_container_info2">
								<a href="">
								<img src="image/logo/charecter.png">
								<p>Charecter Certificate</p>
								</a>
							</div>
							<div class="main_body_container_catagory_container_info">
								<a href="">
								<img src="image/logo/tombstone.png">
								<p>Death Certificate</p>
								</a>
							</div>
							<div class="main_body_container_catagory_container_info2">
								<a href="">
								<img src="image/logo/tribal.png">
								<p>Tribale Certificate</p>
								</a>
							</div>
							<div class="main_body_container_catagory_container_info">
								<a href="">
								<img src="image/logo/job.png">
								<p>Unemployment Certificate</p>
								</a>
							</div>
							<div class="main_body_container_catagory_container_info2">
								<a href="">
								<img src="image/logo/soldier.png">
								<p>Freedom fighter Certificate</p>
								</a>
							</div>
							<div class="main_body_container_catagory_container_info3">
								<a href="">
								<img src="image/logo/money.png">
								<p>Annual Income Certificate</p>
								</a>
							</div>
							<div class="main_body_container_catagory_container_info4">
								<a href="">
								<img src="image/logo/man.png">
								<p>Unmarried Certificate</p>
								</a>
							</div>
						</div>
					</div>
			  </div>

			</div>
            <!-- The core Firebase JS SDK is always required and must be listed first-->
            <script src="https://www.gstatic.com/firebasejs/7.9.3/firebase-app.js"></script>
            <script src="https://www.gstatic.com/firebasejs/7.9.3/firebase-storage.js"></script>
            <script src="https://www.gstatic.com/firebasejs/7.9.3/firebase-firestore.js"></script>

            <!-- TODO: Add SDKs for Firebase products that you want to use
                 https://firebase.google.com/docs/web/setup#available-libraries -->

            <script src="https://www.gstatic.com/firebasejs/7.9.3/firebase-analytics.js"></script>
            <script type="text/javascript" src="javascript/moment.js"></script>

            <script src="javascript/databaseconfig.js"></script>

			<script type="text/javascript" src="javascript/recent_modal.js"></script>
            <script type="text/javascript" src="javascript/recent_From_value_fetch.js"></script>

        </div>
	</div>
</body>
</html>