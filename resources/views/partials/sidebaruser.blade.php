<ul id="sidebarnav" class="in">
        <li class="nav-small-cap">{{ Auth::user()->getprocedimiento()->name."-".strtoupper(Auth::user()->getprocedimiento()->nombre) }}</li>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-book"></i><span class="hide-menu">Manual y Políticas</a>
            <ul aria-expanded="false" class="collapse" style="height: 0px;">
                <li><a href="#">Manual de Gestión</a></li>
                <li><a href="#">Política Ambiental</a></li>
                <li><a href="#">Política de Prevención</a></li>
            </ul>
        </li>
        <li>
            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Requisitos Normativos</span></a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="#">ISO 9001:2015</a></li>
                <li><a href="#">AS9100C</a></li>
                <li><a href="#">Política de Calidad</a></li>
                <li><a href="#">Objetivos Estratégicos</a></li>
                <li><a href="#">Certificación ISO</a></li>
                <li><a href="#">Organigrama</a></li>
            </ul>
        </li>
     
        {{-- <!-------------------------------------------------------------------------------------> --}}
        <li class="nav-devider"></li>
        <li class="nav-small-cap">FORMATOS Y REGISTROS</li>
        <li>
            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Registros</span></a>
            <ul aria-expanded="false" class="collapse">
                @foreach ( Auth::user()->getregistros() as $ftoResg  )
                    <li><a href="#"></a> {{ $ftoResg->name }}</li>      
                @endforeach 
                
              

            </ul>
        </li>

        @if (Auth::user()->unidad_id==4)

            <li class="nav-devider"></li>
            <li class="nav-small-cap">ADMINISTRACIÓN</li>
            <li>
                <a class="has-arrow " href="#" aria-expanded="false"><i class="icon-user"></i><span class="hide-menu">Empleados</span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="/Empleados">Lista de Empledos</a></li>
                    <li><a href="#">Productividad</a></li>
                </ul>
            </li>
        @endif


        <li class="nav-devider"></li>
        <li class="nav-small-cap">IMAGEN EMPRESARIAL</li>
        <li>
            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Page Layout</span></a>
            <ul aria-expanded="false" class="collapse">
                <li><a href="layout-single-column.html">Reglamento Interno </a></li>
                <li><a href="layout-fix-header.html">Conciliación de Trabajo</a></li>
            </ul>
        </li>
        
    </ul>