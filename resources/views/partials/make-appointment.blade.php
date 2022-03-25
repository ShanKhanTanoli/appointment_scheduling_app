<div class="modal fade" id="MakeAppointment" tabindex="-1" role="dialog" aria-labelledby="MakeAppointment"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">
                        Make Appointment
                    </h6>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
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
                                            <select wire:model='site_id'
                                                class="form-control  @error('site_id') is-invalid @enderror">
                                                <option value="">Select Site</option>
                                                @foreach (Site::all() as $site)
                                                    <option value="{{ $site->id }}">{{ $site->code }}
                                                    </option>
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
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-primary" wire:attr='disabled'
                                            wire:click='MakeAppointment'>
                                            <span wire:loading wire:target='MakeAppointment'
                                                class="spinner-border spinner-border-sm" role="status"
                                                aria-hidden="true"></span>
                                            <span class="sr-only">Loading...</span>
                                            Make Appointment
                                        </button>
                                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            Close
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
