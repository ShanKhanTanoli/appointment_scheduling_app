<li class="nav-item">
    <button wire:click='logout' type="button" class="nav-link text-white" style="border: none; background:transparent;">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="fas fa-power-off"></i>
        </div>
        <span class="nav-link-text ms-1">Logout</span>
        <span wire:loading.target='logout' wire:loading style="margin-left:10px;"
            class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
    </button>
</li>
