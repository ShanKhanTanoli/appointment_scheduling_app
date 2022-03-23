@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show text-white" role="alert">
        <span class="alert-text">
            <strong>
                {{ Session::get('success') }}
            </strong>
        </span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger alert-dismissible fade show text-white" role="alert">
        <span class="alert-text">
            <strong>
                {{ Session::get('error') }}
            </strong>
        </span>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
