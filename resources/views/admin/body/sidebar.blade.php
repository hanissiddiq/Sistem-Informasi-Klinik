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
                    <a href="#"><span class="menu-side"><img src="{{ asset('preclinic/assets/img/icons/menu-icon-03.svg') }}" alt=""></span> <span>Patients </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('patients.index') }}" class="nav-link {{ Request::is('patients*') ? 'active' : ' ' }}">Patients List</a></li>
                        <li><a href="add-patient.html">Add Patients</a></li>
                        <li><a href="edit-patient.html">Edit Patients</a></li>
                        <li><a href="patient-profile.html">Patients Profile</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span class="menu-side"><img src="{{ asset('preclinic/assets/img/icons/menu-icon-08.svg') }}" alt=""></span> <span> Employee </span> <span class="menu-arrow"></span></a>
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
                    <a href="#"><span class="menu-side"><img src="{{ asset('preclinic/assets/img/icons/menu-icon-05.svg') }}" alt=""></span> <span> Doctor Schedule </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('schedule.index') }}" class="nav-link {{ Request::is('schedule*') ? 'active' : ' ' }}">Schedule List</a></li>
                        <li><a href="add-schedule.html">Add Schedule</a></li>
                        <li><a href="edit-schedule.html">Edit Schedule</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span class="menu-side"><img src="{{ asset('preclinic/assets/img/icons/menu-icon-06.svg') }}" alt=""></span> <span> Clinic </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('clinic.index') }}" class="nav-link {{ Request::is('clinic*') ? 'active' : ' ' }}">Clinic List</a></li>
                        <li><a href="add-department.html">Add Clinic</a></li>
                        <li><a href="edit-department.html">Edit Clinic</a></li>
                    </ul>
                </li>
                {{-- ===== --}}
                <li>
                    <a href="{{ route('message.index') }}" class="nav-link {{ Request::is('message*') ? 'active' : ' ' }}"><span class="menu-side"><img src="{{ asset('preclinic/assets/img/icons/menu-icon-10.svg') }}" alt=""></span> <span>Chat</span></a>
                </li>
               {{-- ========== --}}
                <li class="submenu">
                    <a href="#"><span class="menu-side"><img src="{{ asset('preclinic/assets/img/icons/menu-icon-13.svg') }}" alt=""></span> <span> Queue</span> <span class="menu-arrow"></span></a>
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

                <li class="menu-title">Master Data Medication</li>
                <li class="submenu">
                    <a href="#"><i class="fa fa-laptop"></i> <span> Medication Type</span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('medications-type.index') }}" class="nav-link {{ Request::is('medications-type*') ? 'active' : ' ' }}">Medication Type</a></li>
                        <li><a href="{{ route('medications.index') }}" class="nav-link {{ Request::is('medications*') ? 'active' : ' ' }}">Medication</a></li>

                    </ul>
                </li>

            </ul>
            <div class="logout-btn">

                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                    <span class="menu-side"><img src="{{ asset('preclinic/assets/img/icons/logout.svg') }}" alt=""></span> <span>Logout</span>
                    <form action="{{ route('logout') }}" method="POST" style="display: none;" id="logout-form">
                        @csrf
                    </form>
                </a>
            </div>
        </div>
    </div>
</div>
