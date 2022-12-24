<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
{{--                    <div class="sb-sidenav-menu-heading">Core</div>--}}
{{--                    <a class="nav-link" href="index.html"--}}
{{--                    ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>--}}
{{--                        Dashboard</a>--}}
{{--                    <div class="sb-sidenav-menu-heading">Interface</div>--}}


                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                    ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Utilizatori
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        ></a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="{{route('users.create')}}">Creare utilizator</a>
                            <a class="nav-link"
                                         @if(auth()->check() && auth()->user()->is_admin ==1) href="{{route('admin.users.index')}}"
                                         @else href="{{route('users.index')}}" @endif>Afisare utilizatori</a></nav>
                    </div>


                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                    ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Apartamente
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        ></a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('admin.apartaments.create')}}">Creare apartament</a>
                            <a class="nav-link" @if(auth()->check() && auth()->user()->is_admin ==1) href="{{route('admin.apartaments.index')}}" @else href="{{route('apartaments.index')}}" @endif>Lista apartamente</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseContor" aria-expanded="false" aria-controls="collapseContor"
                    ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Contoare
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        ></a>
                    <div class="collapse" id="collapseContor" aria-labelledby="headingThree" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('contors.create')}}">Inregistrare contor</a>
                            <a class="nav-link"
                               @if(auth()->check() && auth()->user()->is_admin ==1) href="{{route('admin.contors.index')}}"
                               @else href="{{route('contors.index')}}"
                               @endif>Tabel contoare</a>
                        </nav>
                    </div>

                    @if(auth()->check() && auth()->user()->is_admin ==1)
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseConsum" aria-expanded="false" aria-controls="collapseConsum"
                    ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Consum
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                        ></a>
                    <div class="collapse" id="collapseConsum" aria-labelledby="headingFour" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('admin.web.search')}}">Alegere luna comsum</a>
{{--                            <a class="nav-link"--}}
{{--                               @if(auth()->check() && auth()->user()->is_admin ==1) href="{{route('admin.contors.index')}}"--}}
{{--                               @else href="{{route('contors.index')}}"--}}
{{--                                @endif>Tabel contoare</a>--}}
                        </nav>
                    </div>
                    @endif



{{--                    <div class="sb-sidenav-menu-heading">Addons</div>--}}
{{--                    <a class="nav-link" href="charts.html"--}}
{{--                    ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>--}}
{{--                        Charts</a--}}
{{--                    ><a class="nav-link" href="tables.html"--}}
{{--                    ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>--}}
{{--                        Tables</a--}}
{{--                    >--}}
                </div>
            </div>
{{--            <div class="sb-sidenav-footer">--}}
{{--                <div class="small">Logged in as:</div>--}}
{{--                Start Bootstrap--}}
{{--            </div>--}}
        </nav>
    </div>
