<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand">
        <img class="c-sidebar-brand-full" src="http://localhost:8116/assets/brand/coreui-base-white.svg" alt="CoreUI Logo" width="118" height="46"><img class="c-sidebar-brand-minimized" src="assets/brand/coreui-signet-white.svg" alt="CoreUI Logo" width="118" height="46">
    </div>
    <ul class="c-sidebar-nav ps ps--active-y">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link c-active" href="{{ route('welcome') }}">
                <i class="cil-home c-sidebar-nav-icon"></i>
                Inicio
            </a>
        </li>
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link c-active" href="{{ route('companiesTable') }}">
                <i class="cil-home c-sidebar-nav-icon"></i>
                Empresas en renta
            </a>
        </li>

        @if (!empty(\Auth::user()))
            <!-- SE mantiene como ejemplos
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="http://localhost:8116/login">
                    <i class="cil-account-logout c-sidebar-nav-icon"></i>
                    Login
                </a>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="http://localhost:8116/register">
                    <i class="cil-account-logout c-sidebar-nav-icon"></i>
                    Register
                </a>
            </li>
            -->
        @endif
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>
