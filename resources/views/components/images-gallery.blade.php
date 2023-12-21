<div class="gallery">
    @forelse ($gallery as $g)
        <a class="fancybox" rel="ligthbox" href="{{ asset('storage/' . $g->image) }}">
            <img class="img-thumbnail" alt="{{$g->title}}" src="{{ asset('storage/' . $g->image) }}" />
        </a>
    @empty
        <p class="text-secondary">Nenhum registro disponível no momento.</p>
    @endforelse
</div>