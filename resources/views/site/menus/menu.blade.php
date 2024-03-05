<ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-between w-100">
    @foreach ($menuArray as $menuItem)
        @php
            $hasSubmenu = isset($menuItem['submenu']);
        @endphp
        <li class="nav-item{{ $hasSubmenu ? ' dropdown' : '' }}">
            <a 
                role="button" 
                data-bs-toggle="{{ $hasSubmenu ? 'dropdown' : '' }}" 
                aria-expanded="false"
                class="nav-link{{ $hasSubmenu ? ' dropdown-toggle' : '' }}"
                href="{{ $hasSubmenu ? '#' : url($menuItem['url']) }}">
                {{ $menuItem['text'] }}
            </a>
            @if ($hasSubmenu)
                @include('site.menus.submenu', ['submenus' => $menuItem['submenu']])
            @endif
        </li>
    @endforeach
</ul>
