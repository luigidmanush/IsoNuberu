<aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- User profile -->
            <div class="user-profile">
                <!-- User profile image -->
                <div class="profile-img"> <img src="/assets/images/users/{{ Auth::user()->avatar }}" alt="user" /> </div>
                <!-- User profile text-->
                <div class="profile-text">
                    <a href="#" class="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">{{ Auth::user()->name }}<span class="caret"></span></a>
                </div>
            </div>
            <!-- End User profile text-->
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                @include('partials.sidebaruser')
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
        <!-- Bottom points-->
        <div class="sidebar-footer">
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="Config"><i class="ti-settings"></i></a>
            <!-- item-->
            <a href="" class="link" data-toggle="tooltip" title="E-mail"><i class="mdi mdi-gmail"></i></a>
            <!-- item-->
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="link" data-toggle="tooltip" title="Salir">
                <i class="mdi mdi-power"></i>
            </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                </form>
        </div>
        <!-- End Bottom points-->
    </aside>