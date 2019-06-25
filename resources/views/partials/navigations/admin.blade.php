<li><a class="nav-link" href="{{ route('profile.index') }}">{{ __("Mi perfil") }}</a></li>
<li><a class="nav-link" href="#">{{ __("Solicitudes") }}</a></li>
<li><a class="nav-link" href="#">{{ __("Universidades") }}</a></li>
<li><a class="nav-link" href="#">{{ __("Cursos") }}</a></li>
<li><a class="nav-link" href="#">{{ __("Becas") }}</a></li>
<li class="nav-item dropdown">
    <a
        class="nav-link dropdown-toggle" href="#"
        id="navbarDropdownMenuLinkPI"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
    >
    {{ __("Países y idiomas") }}
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkPI">
        <a
            class="dropdown-item"
            href="#"
        >
            {{ __("Países") }}
        </a>
        <a
            class="dropdown-item"
            href="{{ route('idioma.index') }}"
        >
            {{ __("Idiomas") }}
        </a>
    </div>
</li>
@include('partials.navigations.logged')



