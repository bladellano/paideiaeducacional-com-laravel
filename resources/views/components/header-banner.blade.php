<div class="slideshow js-slideshow" data-swipe="on" data-autoplay="on">

    <ul class="slideshow__content">

        @foreach ($banners as $b)
            <li class="slideshow__item sq7-bg-light js-slideshow__item" style="background-image: url('{{ asset('storage/' . $b->image) }}');">
                <div class='sq7-container sq7-max-width-sm'>
                    <div class='sq7-text-component sq7-text-center'>
                        @if($b->show_title)
                            <h1><a href="{{ route('site.banners', ['slug' => $b->slug]) }}">{{ $b->title }}</a></h1>
                        @endif
                    </div>
                </div>
            </li>
        @endforeach

    </ul>

    <ul>
        <li class="slideshow__control js-slideshow__control">
            <button class="slideshow__btn js-tab-focus">
                <svg class="sq7-icon" viewBox="0 0 32 32">
                    <title>Mostrar slide anterior</title>
                    <path
                        d="M20.768,31.395L10.186,16.581c-0.248-0.348-0.248-0.814,0-1.162L20.768,0.605l1.627,1.162L12.229,16 l10.166,14.232L20.768,31.395z">
                    </path>
                </svg>
            </button>
        </li>

        <li class="slideshow__control js-slideshow__control">
            <button class="slideshow__btn js-tab-focus">
                <svg class="sq7-icon" viewBox="0 0 32 32">
                    <title>Mostrar próximo slide</title>
                    <path
                        d="M11.232,31.395l-1.627-1.162L19.771,16L9.605,1.768l1.627-1.162l10.582,14.813 c0.248,0.348,0.248,0.814,0,1.162L11.232,31.395z">
                    </path>
                </svg>
            </button>
        </li>
    </ul>
</div>