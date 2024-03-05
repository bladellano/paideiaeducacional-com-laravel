<ul class="submenu dropdown-menu" aria-labelledby="navbarDropdown">

    @foreach ($submenus as $submenuItem)
        <li>
            <a 
            class="dropdown-item"
            href="{{ isset($submenuItem['submenu']) ? '#' : url($submenuItem['url']) }}">
                {{ $submenuItem['text'] }}
            </a>
            @if (isset($submenuItem['submenu']))
                @include('site.menus.submenu', ['submenus' => $submenuItem['submenu']])
            @endif
        </li>
    @endforeach
</ul>
