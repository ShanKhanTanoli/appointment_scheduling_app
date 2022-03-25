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
                            Update Settings
                        </h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="container">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <strong class="small">It will be used as a logo</strong>
                                    <div class="input-group input-group-outline my-3">
                                        <input type="text" wire:model.defer='text_logo' value="{{ old('text_logo') }}"
                                            class="form-control  @error('text_logo') is-invalid @enderror"
                                            placeholder="Enter Site Name">
                                        @error('text_logo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary" wire:attr='disabled'
                                        wire:click='Update'>
                                        <span wire:loading class="spinner-border spinner-border-sm" role="status"
                                            aria-hidden="true"></span>
                                        <span class="sr-only">Loading...</span>
                                        Save Changes
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
