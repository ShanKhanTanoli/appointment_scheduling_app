<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-12 mx-auto">
                    <!--Begin::Alerts-->
                    <div class="mt-5 mb-5">
                        @include('errors.alerts')
                    </div>
                    <!--End::Alerts-->
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">
                                    Site {{ $site->code }} - Total Trainers ({{ $site->trainers->count() }})
                                </h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                #
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Name
                                            </th>
                                            <th
                                                class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Appointment
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($trainers)
                                            @foreach ($trainers as $trainer)
                                                <tr>
                                                    <td class="align-middle">
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">
                                                                    {{ $loop->iteration }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle">
                                                        <div class="d-flex px-2 py-1">
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">
                                                                    <strong>
                                                                        {{ $trainer->name }}
                                                                    </strong>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle">
                                                        <button class="btn btn-sm btn-success"
                                                            wire:click='MakeAppointment("{{ $trainer->id }}")'>
                                                            <span wire:loading
                                                                wire:target='MakeAppointment("{{ $trainer->id }}")'
                                                                class="spinner-border spinner-border-sm" role="status"
                                                                aria-hidden="true"></span>
                                                            Appointment
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td class="text-center" colspan="3">
                                                    <strong class="text-danger">
                                                        No Data Found
                                                    </strong>
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@include('partials.make-appointment')
