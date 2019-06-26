<!-- Main navbar -->
<div class="navbar navbar-expand-md @auth navbar-dark @else navbar-dark navbar-aosa @endif">
    <div class="navbar-brand">
        <a href="{{url('/dashboard')}}" class="d-inline-block">
            <img src="{{asset('assets/images/logo.png')}}" alt="AOSA">
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
    </div>

    {{-- <ul class="navbar-nav">
        <li class="nav-item">
            <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                <i class="icon-paragraph-justify3"></i>
            </a>
        </li>
    </ul> --}}

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <span class="navbar-text ml-md-3 mr-md-auto">
        </span>
        @auth
		<ul class="navbar-nav">
			<li class="nav-item dropdown dropdown-user">
				<a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    @if(\Auth::check() && \Auth::user()->avatar != '')
                        <img class="rounded-circle" src="{{url('/uploads/avatar/'.\Auth::user()->avatar)}}" alt="Avatar" width="38" height="38">
                    @else
                        <img class="rounded-circle" src="{{url('assets/images/default-user.png')}}" alt="Avatar" width="38" height="38">
                    @endif
                    <span>{{\Auth::user()->getFullNameAttribute()}}</span>
				</a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{url('/profile')}}" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                    <a href="{{url('/logout')}}" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                </div>
			</li>
        </ul>
        @else
        <ul class="navbar-nav">
            <li class="nav-item">
                @if (Request::path() == 'login')
                <a href="{{ route('register') }}" class="navbar-nav-link">Register</a>
                @elseif(Request::path() == 'register')
                <a href="{{ route('login') }}" class="navbar-nav-link">Login</a>
                @endif
            </li>
        </ul>
        @endauth
	</div>
</div>
<!-- /main navbar -->
