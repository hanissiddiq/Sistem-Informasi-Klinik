<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('preclinic/assets/img/favicon.png') }}">
    <title>Preclinic - Medical & Hospital - Bootstrap 5 Admin Template</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('preclinic/assets/css/bootstrap.min.css') }}">

	<!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('preclinic/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('preclinic/assets/plugins/fontawesome/css/all.min.css') }}">

	<!-- Select2 CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset ('preclinic/assets/css/select2.min.css') }}">

	<!-- Datatables CSS -->
	<link rel="stylesheet" href="{{ asset('preclinic/assets/plugins/datatables/datatables.min.css') }}">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="{{ asset('preclinic/assets/css/feather.css') }}">

	<!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('preclinic/assets/css/style.css') }}">

</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index.html" class="logo">
					<img src="{{ asset('preclinic/assets/img/logo.png') }}" width="35" height="35" alt=""> <span>Pre Clinic</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><img src="{{ asset('preclinic/assets/img/icons/bar-icon.svg') }}"  alt=""></a>
            <a id="mobile_btn" class="mobile_btn float-start" href="#sidebar"><img src="{{ asset('preclinic/assets/img/icons/bar-icon.svg') }}"  alt=""></a>
			<div class="top-nav-search mob-view">
				<form>
					<input type="text" class="form-control" placeholder="Search here">
					<a class="btn" ><img src="{{ asset('preclinic/assets/img/icons/search-normal.svg') }}" alt=""></a>
				</form>
			</div>
            <ul class="nav user-menu float-end">
                <li class="nav-item dropdown d-none d-md-block">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"><img src="preclinic/assets/img/icons/note-icon-02.svg" alt=""><span class="pulse"></span> </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">
												<img alt="John Doe" src="preclinic/assets/img/user.jpg" class="img-fluid">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">V</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">L</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">G</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">V</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
												<p class="noti-time"><span class="notification-time">2 days ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-md-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><img src="preclinic/assets/img/icons/note-icon-01.svg" alt=""><span class="pulse"></span> </a>
                </li>
				<li class="nav-item dropdown has-arrow user-profile-list">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-bs-toggle="dropdown">
						<div class="user-names">
							{{-- <h5>Liam Michael </h5> --}}
							<h5>{{Auth::user()->name}}</h5>
                        	<span>Admin</span>
						</div>
						<span class="user-img">
							<img  src="{{ asset('preclinic/assets/img/user-06.jpg') }}"  alt="Admin">
						</span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="profile.html">My Profile</a>
						<a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
						<a class="dropdown-item" href="settings.html">Settings</a>
						{{-- <a class="dropdown-item" href="login.html">Logout</a>
                         --}}
                         <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <p>
                                Logout
                            </p>
                            <form action="{{ route('logout') }}" method="POST" style="display: none;" id="logout-form">
                                @csrf
                            </form>
                        </a>
					</div>
                </li>
				<li class="nav-item ">
                    <a href="settings.html"  class="hasnotifications nav-link"><img src="{{ asset('preclinic/assets/img/icons/setting-icon-01.svg') }}" alt=""> </a>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-end">
                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
						<li class="submenu">
							<a href="#"><span class="menu-side"><img src="{{ asset('preclinic/assets/img/icons/menu-icon-01.svg') }}" alt=""></span> <span> Dashboard </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a class="active" href="index.html">Admin Dashboard</a></li>
								<li><a href="doctor-dashboard.html">Doctor Dashboard</a></li>
								<li><a href="patient-dashboard.html">Patient Dashboard</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><span class="menu-side"><img src="{{ asset('preclinic/assets/img/icons/menu-icon-02.svg') }}" alt=""></span> <span> Doctors </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="{{ route('doctor.index') }}" class="nav-link {{ Request::is('doctor*') ? 'active' : ' ' }}">Doctor List</a></li>
								<li><a href="add-doctor.html">Add Doctor</a></li>
								<li><a href="edit-doctor.html">Edit Doctor</a></li>
								<li><a href="doctor-profile.html">Doctor Profile</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><span class="menu-side"><img src="preclinic/assets/img/icons/menu-icon-03.svg" alt=""></span> <span>Patients </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="{{ route('patients.index') }}" class="nav-link {{ Request::is('patients*') ? 'active' : ' ' }}">Patients List</a></li>
								<li><a href="add-patient.html">Add Patients</a></li>
								<li><a href="edit-patient.html">Edit Patients</a></li>
								<li><a href="patient-profile.html">Patients Profile</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><span class="menu-side"><img src="preclinic/assets/img/icons/menu-icon-08.svg" alt=""></span> <span> Employee </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="{{ route('employees.index') }}" class="nav-link {{ Request::is('employees*') ? 'active' : ' ' }}">Employee List</a></li>
								<li><a href="add-staff.html">Add Staff</a></li>
								<li><a href="staff-profile.html">Staff Profile</a></li>
								<li><a href="staff-leave.html">Leaves</a></li>
								<li><a href="staff-holiday.html">Holidays</a></li>
								<li><a href="staff-attendance.html">Attendance</a></li>
							</ul>
						</li>
						{{-- <li class="submenu">
							<a href="#"><span class="menu-side"><img src="preclinic/assets/img/icons/menu-icon-04.svg" alt=""></span> <span> Appointments </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="appointments.html">Appointment List</a></li>
								<li><a href="add-appointment.html">Book Appointment</a></li>
								<li><a href="edit-appointment.html">Edit Appointment</a></li>
							</ul>
						</li> --}}
						<li class="submenu">
							<a href="#"><span class="menu-side"><img src="preclinic/assets/img/icons/menu-icon-05.svg" alt=""></span> <span> Doctor Schedule </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="{{ route('schedule.index') }}" class="nav-link {{ Request::is('schedule*') ? 'active' : ' ' }}">Schedule List</a></li>
								<li><a href="add-schedule.html">Add Schedule</a></li>
								<li><a href="edit-schedule.html">Edit Schedule</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><span class="menu-side"><img src="preclinic/assets/img/icons/menu-icon-06.svg" alt=""></span> <span> Clinic </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="{{ route('clinic.index') }}" class="nav-link {{ Request::is('clinic*') ? 'active' : ' ' }}">Clinic List</a></li>
								<li><a href="add-department.html">Add Clinic</a></li>
								<li><a href="edit-department.html">Edit Clinic</a></li>
							</ul>
						</li>
						{{-- <li class="submenu">
							<a href="#"><span class="menu-side"><img src="preclinic/assets/img/icons/menu-icon-07.svg" alt=""></span> <span> Accounts </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="invoices.html">Invoices</a></li>
								<li><a href="payments.html">Payments</a></li>
								<li><a href="expenses.html">Expenses</a></li>
								<li><a href="taxes.html">Taxes</a></li>
								<li><a href="provident-fund.html">Provident Fund</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><span class="menu-side"><img src="preclinic/assets/img/icons/menu-icon-09.svg" alt=""></span> <span> Payroll </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="salary.html"> Employee Salary </a></li>
								<li><a href="salary-view.html"> Payslip </a></li>
							</ul>
						</li> --}}
						<li>
							<a href="{{ route('message.index') }}" class="nav-link {{ Request::is('message*') ? 'active' : ' ' }}"><span class="menu-side"><img src="preclinic/assets/img/icons/menu-icon-10.svg" alt=""></span> <span>Chat</span></a>
						</li>
                        {{-- <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="preclinic/assets/img/icons/menu-icon-11.svg" alt=""></span> <span> Calls</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="voice-call.html">Voice Call</a></li>
                                <li><a href="video-call.html">Video Call</a></li>
                                <li><a href="incoming-call.html">Incoming Call</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="preclinic/assets/img/icons/menu-icon-12.svg" alt=""></span> <span> Email</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="compose.html">Compose Mail</a></li>
                                <li><a href="inbox.html">Inbox</a></li>
                                <li><a href="mail-view.html">Mail View</a></li>
                            </ul>
                        </li> --}}
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="preclinic/assets/img/icons/menu-icon-13.svg" alt=""></span> <span> Queue</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ route('patient-queue.index') }}" class="nav-link {{ Request::is('patient-queue*') ? 'active' : ' ' }}">Queue List</a></li>
                                <li><a href="blog-details.html">Blog View</a></li>
                                <li><a href="add-blog.html">Add Blog</a></li>
                                <li><a href="edit-blog.html">Edit Blog</a></li>
                            </ul>
                        </li>
						<li>
							<a href="{{ route('medical-record.index') }}" class="nav-link {{ Request::is('medical-record*') ? 'active' : ' ' }}"><i class="fa fa-cube"></i> <span>Medical Record</span></a>
						</li>
						<li>
							<a href="{{ route('daily-report.index') }}" class="nav-link {{ Request::is('daily-report*') ? 'active' : ' ' }}"><i class="fa fa-cube"></i> <span>Daily Report</span></a>
						</li>
						{{-- <li>
							<a href="activities.html"><span class="menu-side"><img src="preclinic/assets/img/icons/menu-icon-14.svg" alt=""></span> <span>Activities</span></a>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-flag"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="expense-reports.html"> Expense Report </a></li>
								<li><a href="invoice-reports.html"> Invoice Report </a></li>
							</ul>
						</li>
                        <li class="submenu">
							<a href="#"><span class="menu-side"><img src="assets/img/icons/menu-icon-15.svg" alt=""></span> <span> Invoice </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="invoices-list.html"> Invoices List </a></li>
								<li><a href="invoices-grid.html"> Invoices Grid</a></li>
								<li><a href="add-invoice.html"> Add Invoices</a></li>
								<li><a href="edit-invoices.html"> Edit Invoices</a></li>
								<li><a href="view-invoice.html"> Invoices Details</a></li>
								<li><a href="invoices-settings.html"> Invoices Settings</a></li>
							</ul>
						</li> --}}

                        {{-- <li>
                            <a href="settings.html"><span class="menu-side"><img src="preclinic/assets/img/icons/menu-icon-16.svg" alt=""></span> <span>Settings</span></a>
                        </li> --}}
                        <li class="menu-title">Master Data Medication</li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-laptop"></i> <span> Medication Type</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="{{ route('medications-type.index') }}" class="nav-link {{ Request::is('medications-type*') ? 'active' : ' ' }}">Medication Type</a></li>
                                <li><a href="{{ route('medications.index') }}" class="nav-link {{ Request::is('medications*') ? 'active' : ' ' }}">Medication</a></li>

                            </ul>
                        </li>
                        {{-- <li class="menu-title">UI Interface</li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-laptop"></i> <span> Base UI</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="alerts.html">Alerts</a></li>
								<li><a href="accordions.html">Accordions</a></li>
								<li><a href="avatar.html">Avatar</a></li>
								<li><a href="badges.html">Badges</a></li>
								<li><a href="buttons.html">Buttons</a></li>
								<li><a href="buttongroup.html">Button Group</a></li>
								<li><a href="breadcrumbs.html">Breadcrumb</a></li>
								<li><a href="cards.html">Cards</a></li>
								<li><a href="carousel.html">Carousel</a></li>
								<li><a href="dropdowns.html">Dropdowns</a></li>
								<li><a href="grid.html">Grid</a></li>
								<li><a href="images.html">Images</a></li>
								<li><a href="lightbox.html">Lightbox</a></li>
								<li><a href="media.html">Media</a></li>
								<li><a href="modal.html">Modals</a></li>
								<li><a href="offcanvas.html">Offcanvas</a></li>
								<li><a href="pagination.html">Pagination</a></li>
								<li><a href="popover.html">Popover</a></li>
								<li><a href="progress.html">Progress Bars</a></li>
								<li><a href="placeholders.html">Placeholders</a></li>
								<li><a href="rangeslider.html">Range Slider</a></li>
								<li><a href="spinners.html">Spinner</a></li>
								<li><a href="sweetalerts.html">Sweet Alerts</a></li>
								<li><a href="tab.html">Tabs</a></li>
								<li><a href="toastr.html">Toasts</a></li>
								<li><a href="tooltip.html">Tooltip</a></li>
								<li><a href="typography.html">Typography</a></li>
								<li><a href="video.html">Video</a></li>
                            </ul>
                        </li>
						<li class="submenu">
                            <a href="#"><i class="fa fa-box"></i> <span> Elements</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="ribbon.html">Ribbon</a></li>
								<li><a href="clipboard.html">Clipboard</a></li>
								<li><a href="drag-drop.html">Drag & Drop</a></li>
								<li><a href="rating.html">Rating</a></li>
								<li><a href="text-editor.html">Text Editor</a></li>
								<li><a href="counter.html">Counter</a></li>
								<li><a href="scrollbar.html">Scrollbar</a></li>
								<li><a href="notification.html">Notification</a></li>
								<li><a href="stickynote.html">Sticky Note</a></li>
								<li><a href="timeline.html">Timeline</a></li>
								<li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
								<li><a href="form-wizard.html">Form Wizard</a></li>
                            </ul>
                        </li>
						<li class="submenu">
                            <a href="#"><i class="fa fa-chart-simple"></i> <span>Charts</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="chart-apex.html">Apex Charts</a></li>
								<li><a href="chart-js.html">Chart Js</a></li>
								<li><a href="chart-morris.html">Morris Charts</a></li>
								<li><a href="chart-flot.html">Flot Charts</a></li>
								<li><a href="chart-peity.html">Peity Charts</a></li>
								<li><a href="chart-c3.html">C3 Charts</a></li>
                            </ul>
                        </li>
						<li class="submenu">
                            <a href="#"><i class="fa fa-award"></i> <span>Icons</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
								<li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
								<li><a href="icon-feather.html">Feather Icons</a></li>
								<li><a href="icon-ionic.html">Ionic Icons</a></li>
								<li><a href="icon-material.html">Material Icons</a></li>
								<li><a href="icon-pe7.html">Pe7 Icons</a></li>
								<li><a href="icon-simpleline.html">Simpleline Icons</a></li>
								<li><a href="icon-themify.html">Themify Icons</a></li>
								<li><a href="icon-weather.html">Weather Icons</a></li>
								<li><a href="icon-typicon.html">Typicon Icons</a></li>
								<li><a href="icon-flag.html">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-edit"></i> <span> Forms</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="form-basic-inputs.html">Basic Inputs</a></li>
                                <li><a href="form-input-groups.html">Input Groups</a></li>
                                <li><a href="form-horizontal.html">Horizontal Form</a></li>
                                <li><a href="form-vertical.html">Vertical Form</a></li>
								<li><a href="form-mask.html">Form Mask </a></li>
								<li><a href="form-validation.html">Form Validation </a></li>
								<li><a href="form-select2.html">Form Select2 </a></li>
								<li><a href="form-fileupload.html">File Upload </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-table"></i> <span> Tables</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatables.html">Data Table</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a>
                        </li>
                        <li class="menu-title">Extras</li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-columns"></i> <span>Pages</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="login.html"> Login </a></li>
                                <li><a href="register.html"> Register </a></li>
                                <li><a href="forgot-password.html"> Forgot Password </a></li>
                                <li><a href="change-password2.html"> Change Password </a></li>
                                <li><a href="lock-screen.html"> Lock Screen </a></li>
                                <li><a href="profile.html"> Profile </a></li>
                                <li><a href="gallery.html"> Gallery </a></li>
                                <li><a href="error-404.html">404 Error </a></li>
                                <li><a href="error-500.html">500 Error </a></li>
                                <li><a href="blank-page.html"> Blank Page </a></li>
                            </ul>
                        </li> --}}
                        {{-- <li class="submenu">
                            <a href="javascript:void(0);"><i class="fa fa-share-alt"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li class="submenu">
                                    <a href="javascript:void(0);"><span>Level 1</span> <span class="menu-arrow"></span></a>
                                    <ul style="display: none;">
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                            <ul style="display: none;">
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                                <li><a href="javascript:void(0);">Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><span>Level 1</span></a>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
					<div class="logout-btn">
						{{-- <a href="login.html"><span class="menu-side"><img src="preclinic/assets/img/icons/logout.svg" alt=""></span> <span>Logout</span></a> --}}
                        <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                            <span class="menu-side"><img src="preclinic/assets/img/icons/logout.svg" alt=""></span> <span>Logout</span>
                            <form action="{{ route('logout') }}" method="POST" style="display: none;" id="logout-form">
                                @csrf
                            </form>
                        </a>
					</div>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col-sm-12">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard </a></li>
								<li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
								<li class="breadcrumb-item active">Admin Dashboard</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="good-morning-blk">
					<div class="row">
						<div class="col-md-6">
							<div class="morning-user">
								{{-- <h2>Good Morning, <span>Daniel Bruk</span></h2> --}}
								<h2>Good Morning, <span>{{Auth::user()->name}}</span></h2>
								<p>Have a nice day at work</p>
							</div>
						</div>
						<div class="col-md-6 position-blk">
							<div class="morning-img">
								<img src="preclinic/assets/img/morning-img-01.png" alt="">
							</div>
						</div>
					</div>
				</div>

                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<div class="dash-boxs comman-flex-center">
								{{-- <img src="preclinic/assets/img/icons/calendar.svg" alt=""> --}}
								<img src="{{ asset('preclinic/assets/img/icons/menu-icon-08.svg') }}" alt="">
							</div>
							<div class="dash-content dash-count">
								<h4>Employees</h4>
								{{-- <h2><span class="counter-up" >250</span></h2> --}}
								<h2><span class="counter-up" >{{ App\Models\Employees::count() ?? '0' }}</span></h2>
								<p><span class="passive-view"><i class="feather-arrow-up-right me-1"></i>40%</span> vs last month</p>
							</div>
                        </div>
                    </div>
                    {{-- <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<div class="dash-boxs comman-flex-center">
								<img src="preclinic/assets/img/icons/calendar.svg" alt="">
							</div>
							<div class="dash-content dash-count">
								<h4>Appointments</h4>
								<h2><span class="counter-up" >250</span></h2>
								<p><span class="passive-view"><i class="feather-arrow-up-right me-1"></i>40%</span> vs last month</p>
							</div>
                        </div>
                    </div> --}}
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<div class="dash-boxs comman-flex-center">
								{{-- <img src="preclinic/assets/img/icons/profile-add.svg" alt=""> --}}
								<img src="{{ asset('preclinic/assets/img/icons/menu-icon-03.svg') }}" alt="">
							</div>
							<div class="dash-content dash-count">
								<h4>New Patients</h4>
								{{-- <h2><span class="counter-up" >140</span></h2> --}}
								<h2><span class="counter-up" >{{ App\Models\Patient::count() ?? '0' }}</span></h2>
								<p><span class="passive-view"><i class="feather-arrow-up-right me-1"></i>20%</span> vs last month</p>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<div class="dash-boxs comman-flex-center">
								{{-- <img src="preclinic/assets/img/icons/scissor.svg" alt=""> --}}
								<img src="{{ asset('preclinic/assets/img/icons/menu-icon-02.svg') }}" alt="">
							</div>
							<div class="dash-content dash-count">
								<h4>Doctor</h4>
								{{-- <h2><span class="counter-up" >56</span></h2> --}}
								<h2><span class="counter-up" >{{ App\Models\Doctor::count() ?? '0' }}</span></h2>
								<p><span class="negative-view"><i class="feather-arrow-down-right me-1"></i>15%</span> vs last month</p>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<div class="dash-boxs comman-flex-center">
								{{-- <img src="preclinic/assets/img/icons/empty-wallet.svg" alt=""> --}}
								<i class="fa fa-building"></i>
							</div>
							<div class="dash-content dash-count">
								<h4>Clinic</h4>
								{{-- <h2>$<span class="counter-up" > 20,250</span></h2> --}}
								<h2>{{ App\Models\Clinic::count() ?? '0' }}</h2>
								<p><span class="passive-view"><i class="feather-arrow-up-right me-1"></i>30%</span> vs last month</p>
							</div>
                        </div>
                    </div>
                </div>
				<div class="row">
					<div class="col-12 col-md-12 col-lg-6 col-xl-9">
						<div class="card">
							<div class="card-body">
								<div class="chart-title patient-visit">
									<h4>Patient Visit by Gender</h4>
									<div >
										<ul class="nav chat-user-total">
											<li><i class="fa fa-circle current-users" aria-hidden="true"></i>Male 75%</li>
											<li><i class="fa fa-circle old-users" aria-hidden="true"></i> Female 25%</li>
										</ul>
									</div>
									<div class="input-block mb-0">
										<select class="form-control select">
											<option>2022</option>
											<option>2021</option>
											<option>2020</option>
											<option>2019</option>
										</select>
									</div>
								</div>
								<div id="patient-chart"></div>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-12 col-lg-6 col-xl-3 d-flex">
						<div class="card">
							<div class="card-body">
								<div class="chart-title">
									<h4>Patient by Department</h4>
								</div>
								<div id="donut-chart-dash" class="chart-user-icon">
									<img src="preclinic/assets/img/icons/user-icon.svg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-12  col-xl-4">
                        <div class="card top-departments">
							<div class="card-header">
								<h4 class="card-title mb-0">Top Departments</h4>
							</div>
                            <div class="card-body">
                                <div class="activity-top">
									<div class="activity-boxs comman-flex-center">
										<img src="preclinic/assets/img/icons/dep-icon-01.svg" alt="">
									</div>
									<div class="departments-list">
										<h4>General Physician</h4>
										<p>35%</p>
									</div>
								</div>
								<div class="activity-top">
									<div class="activity-boxs comman-flex-center">
										<img src="preclinic/assets/img/icons/dep-icon-02.svg" alt="">
									</div>
									<div class="departments-list">
										<h4>Dentist</h4>
										<p>24%</p>
									</div>
								</div>
								<div class="activity-top">
									<div class="activity-boxs comman-flex-center">
										<img src="preclinic/assets/img/icons/dep-icon-03.svg" alt="">
									</div>
									<div class="departments-list">
										<h4>ENT</h4>
										<p>10%</p>
									</div>
								</div>
								<div class="activity-top">
									<div class="activity-boxs comman-flex-center">
										<img src="preclinic/assets/img/icons/dep-icon-04.svg" alt="">
									</div>
									<div class="departments-list">
										<h4>Cardiologist</h4>
										<p>15%</p>
									</div>
								</div>
								<div class="activity-top mb-0">
									<div class="activity-boxs comman-flex-center">
										<img src="preclinic/assets/img/icons/dep-icon-05.svg" alt="">
									</div>
									<div class="departments-list">
										<h4>Opthomology</h4>
										<p>20%</p>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
					<div class="col-12 col-md-12  col-xl-8">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">Upcoming Appointments</h4> <a href="appointments.html" class="patient-views float-end">Show all</a>
							</div>
							<div class="card-body p-0 table-dash">
								<div class="table-responsive">
									<table class="table mb-0 border-0 datatable custom-table">
										<thead>
											<tr>
												<th>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</th>
												<th>No</th>
												<th>Patient name</th>
												<th>Doctor</th>
												<th>Time</th>
												<th>Disease</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</td>
												<td>R00001</td>
												<td>Andrea Lalema</td>
												<td class="table-image appoint-doctor">
													<img width="28" height="28" class="rounded-circle" src="{{ asset('preclinic/assets/img/profiles/avatar-02.jpg') }}" alt="">
													<h2>Dr.Jenny Smith</h2>
												</td>
												<td class="appoint-time"><span>12.05.2022 at </span>7.00 PM</td>
												<td><button class="custom-badge status-green ">Fracture</button></td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="edit-appointment.html"><i class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_appointment"><i class="fa fa-trash-alt m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</td>
												<td>R00002</td>
												<td>Cristina Groves</td>
												<td class="table-image appoint-doctor">
													<img width="28" height="28" class="rounded-circle" src="preclinic/assets/img/profiles/avatar-03.jpg" alt="">
													<h2>Dr.Angelica Ramos</h2>
												</td>
												<td class="appoint-time"><span>13.05.2022 at </span>7.00 PM</td>
												<td><button class="custom-badge status-green">Fever</button></td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="edit-appointment.html"><i class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_appointment"><i class="fa fa-trash-alt m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</td>
												<td>R00003</td>
												<td>Bernardo </td>
												<td class="table-image appoint-doctor">
													<img width="28" height="28" class="rounded-circle" src="preclinic/assets/img/profiles/avatar-04.jpg" alt="">
													<h2>Dr.Martin Doe</h2>
												</td>
												<td class="appoint-time"><span>14.05.2022 at </span>7.00 PM</td>
												<td><button class="custom-badge status-green">Fracture</button></td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="edit-appointment.html"><i class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_appointment"><i class="fa fa-trash-alt m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</td>
												<td>R00004</td>
												<td>Galaviz Lalema</td>
												<td class="table-image appoint-doctor">
													<img width="28" height="28" class="rounded-circle" src="preclinic/assets/img/profiles/avatar-05.jpg" alt="">
													<h2>Dr.William Jerk</h2>
												</td>
												<td class="appoint-time"><span>15.05.2022 at </span>7.00 PM</td>
												<td><button class="custom-badge status-green">Fracture</button></td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="edit-appointment.html"><i class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_appointment"><i class="fa fa-trash-alt m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</td>
												<td>R00005</td>
												<td>Cristina Groves</td>
												<td class="table-image appoint-doctor">
													<img width="28" height="28" class="rounded-circle" src="preclinic/assets/img/profiles/avatar-03.jpg" alt="">
													<h2>Dr.Angelica Ramos</h2>
												</td>
												<td class="appoint-time"><span>16.05.2022 at </span>7.00 PM</td>
												<td><button class="custom-badge status-green">Fever</button></td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="edit-appointment.html"><i class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_appointment"><i class="fa fa-trash-alt m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<h4 class="card-title d-inline-block">Recent Patients </h4> <a href="patients.html" class="float-end patient-views">Show all</a>
							</div>
							<div class="card-block table-dash">
								<div class="table-responsive">
									<table class="table mb-0 border-0 datatable custom-table">
										<thead>
											<tr>
												<th>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</th>
												<th>No</th>
												<th>Patient name</th>
												<th>Age</th>
												<th>Date of Birth</th>
												<th>Diagnosis</th>
												<th>Triage</th>
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</td>
												<td>R00001</td>
												<td class="table-image">
													<img width="28" height="28" class="rounded-circle" src="preclinic/assets/img/profiles/avatar-02.jpg" alt="">
													<h2>Andrea Lalema</h2>
												</td>
												<td>21</td>
												<td>07 January 2002</td>
												<td>Heart attack</td>
												<td><button class="custom-badge status-green ">Non Urgent</button></td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="edit-patient.html"><i class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_appointment"><i class="fa fa-trash-alt m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</td>
												<td>R00002</td>
												<td class="table-image">
													<img width="28" height="28" class="rounded-circle" src="preclinic/assets/img/profiles/avatar-03.jpg" alt="">
													<h2>Mark Hay Smith</h2>
												</td>
												<td>23</td>
												<td>06 January 2002</td>
												<td>Jaundice</td>
												<td><button class="custom-badge status-pink">Emergency</button></td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="edit-patient.html"><i class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_appointment"><i class="fa fa-trash-alt m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</td>
												<td>R00003</td>
												<td class="table-image">
													<img width="28" height="28" class="rounded-circle" src="preclinic/assets/img/profiles/avatar-04.jpg" alt="">
													<h2>Cristina Groves</h2>
												</td>
												<td>25</td>
												<td>10 January 2002</td>
												<td>Malaria</td>
												<td><button class="custom-badge status-gray">Out Patient</button></td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="edit-patient.html"><i class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_appointment"><i class="fa fa-trash-alt m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check check-tables">
														<input class="form-check-input" type="checkbox" value="something">
													</div>
												</td>
												<td>R00004</td>
												<td class="table-image">
													<img width="28" height="28" class="rounded-circle" src="preclinic/assets/img/profiles/avatar-05.jpg" alt="">
													<h2>Galaviz Lalema</h2>
												</td>
												<td>21</td>
												<td>09 January 2002</td>
												<td>Typhoid</td>
												<td><button class="custom-badge status-orange">Non Urgent</button></td>
												<td class="text-end">
													<div class="dropdown dropdown-action">
														<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-end">
															<a class="dropdown-item" href="edit-patient.html"><i class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
															<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_appointment"><i class="fa fa-trash-alt m-r-5"></i> Delete</a>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll" id="msg_list">
                        <ul class="list-box">
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item new-message">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <span class="message-time">1 Aug</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">D</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Domenic Houston </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">B</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Buster Wigton </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Rolland Webber </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Claire Mapes </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Melita Faucher</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Jeffery Lalor</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Loren Gatlin</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="chat.html">See all messages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>

	<!-- jQuery -->
    <script src="{{ asset('preclinic/assets/js/jquery-3.7.1.min.js')}}"></script>

	<!-- Bootstrap Core JS -->
    <script src="{{ asset('preclinic/assets/js/bootstrap.bundle.min.js')}}"></script>

	<!-- Feather Js -->
	<script src="{{ asset('preclinic/assets/js/feather.min.js')}}"></script>

	<!-- Slimscroll -->
    <script src="{{ asset('preclinic/assets/js/jquery.slimscroll.js')}}"></script>

	<!-- Select2 Js -->
	<script src="{{ asset('preclinic/assets/js/select2.min.js')}}"></script>

	<!-- Datatables JS -->
	<script src="{{ asset('preclinic/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('preclinic/assets/plugins/datatables/datatables.min.js')}}"></script>

	<!-- counterup JS -->
	<script src="{{ asset('preclinic/assets/js/jquery.waypoints.js')}}"></script>
	<script src="{{ asset('preclinic/assets/js/jquery.counterup.min.js')}}"></script>

	<!-- Apexchart JS -->
	<script src="{{ asset('preclinic/assets/plugins/apexchart/apexcharts.min.js')}}"></script>
	<script src="{{ asset('preclinic/assets/plugins/apexchart/chart-data.js')}}"></script>

	<!-- Custom JS -->
    <script src="{{ asset('preclinic/assets/js/app.js')}}"></script>

</body>

</html>
