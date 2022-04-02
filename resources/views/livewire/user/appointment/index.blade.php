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
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">
                                    Make Appointment on Site ({{ $site->code }})
                                </h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="container">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group input-group-outline my-3">
                                                <input type="text" wire:model.defer='first_name'
                                                    value="{{ old('first_name') }}"
                                                    class="form-control  @error('first_name') is-invalid @enderror"
                                                    placeholder="Enter First Name">
                                                @error('first_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group input-group-outline my-3">
                                                <input type="text" wire:model.defer='last_name'
                                                    value="{{ old('last_name') }}"
                                                    class="form-control  @error('last_name') is-invalid @enderror"
                                                    placeholder="Enter Last Name">
                                                @error('last_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-group input-group-outline my-3">
                                                <input type="text" wire:model.defer='alias' value="{{ old('alias') }}"
                                                    class="form-control  @error('alias') is-invalid @enderror"
                                                    placeholder="Enter Alias">
                                                @error('alias')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group input-group-outline my-3">
                                                <select wire:model.defer='trainer_id'
                                                    class="form-control  @error('trainer_id') is-invalid @enderror">
                                                    <option value="">Select Trainer</option>
                                                    @if ($site_id)
                                                        @if ($site = Site::Info($site_id))
                                                            @foreach ($site->trainers as $trainer)
                                                                <option value="{{ $trainer->id }}">
                                                                    {{ $trainer->name }}
                                                                </option>
                                                            @endforeach
                                                        @else
                                                            <option value="">No Trainers Found</option>
                                                        @endif
                                                    @else
                                                        <option value="">Select Site First</option>
                                                    @endif
                                                </select>
                                                @error('trainer_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-group input-group-outline my-3">
                                                <input type="date" wire:model.defer='date' value="{{ old('date') }}"
                                                    class="form-control  @error('date') is-invalid @enderror"
                                                    placeholder="Appointment Date">
                                                @error('date')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group input-group-outline my-3">
                                                <input type="time" wire:model.defer='time' value="{{ old('time') }}"
                                                    class="form-control  @error('time') is-invalid @enderror"
                                                    placeholder="Appointment Time" step="2">
                                                @error('time')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group input-group-outline my-3">
                                                <select wire:model.defer='training_type_id'
                                                    class="form-control  @error('training_type_id') is-invalid @enderror">
                                                    <option value="">Select Training Type</option>
                                                    @foreach (TrainingType::all() as $type)
                                                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('training_type_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="button" class="btn btn-primary" wire:attr='disabled'
                                                wire:click='AddAppointment'>
                                                <span wire:loading wire:target='AddAppointment'
                                                    class="spinner-border spinner-border-sm" role="status"
                                                    aria-hidden="true"></span>
                                                Add Appointment
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
