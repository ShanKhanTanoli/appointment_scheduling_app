<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="fas fa-users opacity-10"></i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Trainers</p>
                        <h4 class="mb-0">
                            {{ Trainer::count() }}
                        </h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3 text-center">
                    <a href="{{ route('AdminTrainers') }}" class="btn bg-gradient-dark">
                        View All
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="fas fa-map-marker opacity-10"></i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Sites</p>
                        <h4 class="mb-0">
                            {{ Site::count() }}
                        </h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3 text-center">
                    <a href="{{ route('AdminSites') }}" class="btn bg-gradient-dark">
                        View All
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="fas fa-calendar-check opacity-10"></i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Appointments</p>
                        <h4 class="mb-0">
                            {{ Appointment::count() }}
                        </h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3 text-center">
                    <a href="{{ route('AdminAppointments') }}" class="btn bg-gradient-dark">
                        View All
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                        <i class="fas fa-list opacity-10"></i>
                    </div>
                    <div class="text-end pt-1">
                        <p class="text-sm mb-0 text-capitalize">Trainer Types</p>
                        <h4 class="mb-0">
                            {{ TrainingType::count() }}
                        </h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3 text-center">
                    <a href="{{ route('AdminTrainingTypes') }}" class="btn bg-gradient-dark">
                        View All
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
