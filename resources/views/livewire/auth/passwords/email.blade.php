<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto ">
                        @include('errors.alerts')
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto ">
                        <div class="card card-plain">
                            <div class="card-header text-center">
                                <h4 class="font-weight-bolder">Reset Password</h4>
                                <p class="mb-0">Enter your email</p>
                            </div>
                            <div class="card-body">
                                <form role="form">
                                    <div class="input-group input-group-outline mb-3">
                                        <input id="email" type="email" wire:model.defer="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" autocomplete="email" placeholder="Enter Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button wire:click='recoverPassword()' type="button"
                                            class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">
                                            <span wire:loading class="spinner-border spinner-border-sm" role="status"
                                                aria-hidden="true"></span>
                                            {{ __('Enter Email') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-2 text-sm mx-auto">
                                    Already have an Account ?
                                    <a href="{{ route('login') }}"
                                        class="text-primary text-gradient font-weight-bold">
                                        Login here
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
