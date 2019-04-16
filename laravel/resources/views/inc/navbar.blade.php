<div class="row justify-content-between">
    <div class="col col-sm-2">
        <a href="{{ url('/') }}">
            <img src="img/logo2.png" alt="" class="img-fluid">
        </a>
    </div>
    <div class="col col-sm-6 pull-right">
        <ul class="nav justify-content-end">
            <!-- <li class="nav-item">
                <a class="nav-link border-right border-dark" href="#">
                    <i class="fa fa-phone" style="transform:rotateY(180deg);"></i>
                    Nous contacter</a>
            </li> -->
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}" data-toggle="modal" data-target="#login"><i class="fa fa-user"></i>{{ __('Se connecter') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}" data-toggle="modal" data-target="#register"><i class="fa fa-user-plus"></i>{{ __("S'inscrire") }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->first_name." ".Auth::user()->last_name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Se déconnecter') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
        </ul>
        {{-- <nav aria-label="breadcrumb" class="">
            <ol class="breadcrumb">
                <span class="text-mutted mr-2">Vous êtes ici :</span>
                <li class="breadcrumb-item active" aria-current="page">Home</li>
            </ol>
        </nav> --}}
    </div>
</div>