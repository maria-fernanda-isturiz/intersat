<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{url('/admin')}}" class="app-brand-link">
        <span>
            <img src="{{url('/')}}/assets/img/icons/brands/antenna.png" width=35>
        </span>
        <span class="app-brand-text demo menu-text fw-bold ms-2">intesat</span>
        </a>
        <!--<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>-->
    </div>

    <div class="menu-inner-shadow"></div>

    <!-- menu lateral -->
    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item">
            <a href="{{url('/admin')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Panel de Control</div>
            </a>
        </li>
        <!-- Pages -->
        <!-- Layouts -->
        <li class="menu-item">
            <a href="{{url('/client')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-user-circle"></i>
            <div data-i18n="Layouts">Clientes</div>
            </a>

            

        <li class="menu-item">
            <a href="{{url('/services')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-book-content"></i>
                <div data-i18n="Dashboards">Servicios</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{url('/technician')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user"></i>
                <div data-i18n="Dashboards">Técnicos</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{url('/active_equipments')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-hdd"></i>
                <div data-i18n="Dashboards">Equipos</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bxs-file-pdf"></i>
            <div data-i18n="Layouts">Reportes</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{url('/reporte_cliente')}}" class="menu-link" target="_blank">
                    <div data-i18n="Without menu">Reporte de Clientes</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{url('/reporte_equipo')}}" class="menu-link"  target="_blank">
                    <div data-i18n="Without navbar">Reporte de Equipos</div>
                    </a>
                </li>
            </ul>
            <li class="menu-item">
                <div class="d-flex justify-content-center mt-3">
                <button class="btn btn-dark"><i class='bx bx-log-out'> Salir</i></button>
                </div>
            </li>
        </li>
        <!-- Misc 
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
        <li class="menu-item">
        <a
            href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
            target="_blank"
            class="menu-link">
            <i class="menu-icon tf-icons bx bx-file"></i>
            <div data-i18n="Documentation">Documentation</div>
        </a>
        </li>
    </ul>
    -->
</aside>