<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="<?= base_url('U'); ?>">
            <span class="align-middle">AdminKit</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Dashboard
            </li>

            <li class="sidebar-item <?= $active = ($title == 'home') ? 'active' : '' ?>">
                <a class="sidebar-link" href="<?= base_url('U'); ?>">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Home</span>
                </a>
            </li>

            <li class="sidebar-item <?= $active = ($title == 'admin') ? 'active' : '' ?>">
                <a class="sidebar-link" href="<?= base_url('U/Admin'); ?>">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Admin</span>
                </a>
            </li>
    </div>
</nav>