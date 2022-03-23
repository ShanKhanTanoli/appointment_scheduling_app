<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            @include('errors.alerts')
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">
                            Add Appointment
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
                                        <input type="text" wire:model.defer='last_name' value="{{ old('last_name') }}"
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
                                        <select wire:model.defer='site_id'
                                            class="form-control  @error('site_id') is-invalid @enderror">
                                            <option value="">Select Site</option>
                                            @foreach (Site::all() as $site)
                                                <option value="{{ $site->id }}">{{ $site->code }}</option>
                                            @endforeach
                                        </select>
                                        @error('site_id')
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
                                            @foreach (Trainer::all() as $triner)
                                                <option value="{{ $triner->id }}">{{ $triner->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('trainer_id')
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
                                        <span wire:loading class="spinner-border spinner-border-sm" role="status"
                                            aria-hidden="true"></span>
                                        <span class="sr-only">Loading...</span>
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
