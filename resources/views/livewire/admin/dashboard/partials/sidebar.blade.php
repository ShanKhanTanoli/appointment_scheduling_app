<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ route('AdminDashboard') }}">
            <i class="fas fa-tachometer-alt text-white"></i>
            <span class="ms-1 font-weight-bold text-white">
                {{ Setting::Logo() }}
            </span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white @if (Request::path() == 'Admin/Dashboard') ? active bg-gradient-primary : '' @endif"
                    href="{{ route('AdminDashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <span class="nav-link-text ms-1">
                        Dashboard
                    </span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">
                    Trainers
                </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white @if (Request::path() == 'Admin/Trainers') ? active bg-gradient-primary : '' @endif"
                    href="{{ route('AdminTrainers') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-users"></i>
                    </div>
                    <span class="nav-link-text ms-1">Trainers</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white @if (Request::path() == 'Admin/AddTrainer') ? active bg-gradient-primary : '' @endif"
                    href="{{ route('AdminAddTrainer') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-plus"></i>
                    </div>
                    <span class="nav-link-text ms-1">Add Trainer</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">
                    Training Types
                </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white @if (Request::path() == 'Admin/TrainingTypes') ? active bg-gradient-primary : '' @endif"
                    href="{{ route('AdminTrainingTypes') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-list"></i>
                    </div>
                    <span class="nav-link-text ms-1">Training Types</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white @if (Request::path() == 'Admin/AddTrainingType') ? active bg-gradient-primary : '' @endif"
                    href="{{ route('AdminAddTrainingType') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-plus"></i>
                    </div>
                    <span class="nav-link-text ms-1">Add Type</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">
                    Sites
                </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white @if (Request::path() == 'Admin/Sites') ? active bg-gradient-primary : '' @endif"
                    href="{{ route('AdminSites') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-map-marker"></i>
                    </div>
                    <span class="nav-link-text ms-1">Sites</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white @if (Request::path() == 'Admin/AddSite') ? active bg-gradient-primary : '' @endif"
                    href="{{ route('AdminAddSite') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-plus"></i>
                    </div>
                    <span class="nav-link-text ms-1">Add Site</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">
                    Appointments
                </h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white @if (Request::path() == 'Admin/Appointments') ? active bg-gradient-primary : '' @endif"
                    href="{{ route('AdminAppointments') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <span class="nav-link-text ms-1">Appointments</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white @if (Request::path() == 'Admin/AddAppointment') ? active bg-gradient-primary : '' @endif"
                    href="{{ route('AdminAddAppointment') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-plus"></i>
                    </div>
                    <span class="nav-link-text ms-1">Add Appointment</span>
                </a>
            </li>

            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white @if (Request::path() == 'Admin/EditProfile') ? active bg-gradient-primary : '' @endif"
                    href="{{ route('AdminEditProfile') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-user-cog"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white @if (Request::path() == 'Admin/EditPassword') ? active bg-gradient-primary : '' @endif"
                    href="{{ route('AdminEditPassword') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <span class="nav-link-text ms-1">Password</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white @if (Request::path() == 'Admin/Settings') ? active bg-gradient-primary : '' @endif"
                    href="{{ route('AdminSettings') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <span class="nav-link-text ms-1">Settings</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
