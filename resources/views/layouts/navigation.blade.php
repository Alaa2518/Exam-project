
<!-- ======= Header ======= -->

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
        <h1 class="logo me-auto"><a href="/">Exam Home</a></h1>

        <nav x-data="{ open: false }" id="navbar" class="navbar order-last order-lg-0" >
            <!-- Primary Navigation Menu -->
                        <!-- Navigation Links -->

                        <ul class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <li><x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-nav-link></li>
                            {{-- <li><a href="{{ route('dashboard') }}" >Dashboard</a></li> --}}
                            <!-- Admin Routs -->
                            @role('superAdmin')
                            <li>
                                <x-nav-link :href="route('exams')" :active="request()->routeIs('exams')">
                                {{ __('Exams') }}
                            </x-nav-link>
                            </li>
                            <li>
                            <x-nav-link :href="route('addExam')" :active="request()->routeIs('addExam')">
                                {{ __('Add Exam') }}
                            </x-nav-link>
                            </li>
                            <li>
                            <x-nav-link :href="route('questions')" :active="request()->routeIs('questions')">
                                {{ __('Questions') }}
                            </x-nav-link>
                            </li>
                            <li>
                            <x-nav-link :href="route('admin.index')" :active="request()->routeIs('admin.index')">
                                {{ __('Admin Roles') }}
                            </x-nav-link>
                            </li>
                            @endrole

                            {{-- users links on navbar --}}

                            @role('user')
                            <li>
                            <x-nav-link :href="route('user.exam')" :active="request()->routeIs('user.exam')">
                                {{ __('My Exam') }}
                            </x-nav-link>
                            </li>
                            @endrole
                            <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <!-- Authentication -->
                                    <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                                </li>

                                </ul>
                            </li>

                        </ul>

        </nav><!-- .navbar -->

        <i class="bi bi-list mobile-nav-toggle"></i>

    </div>
</header><!-- End Header -->
