@php $isUpdate = isset($video) @endphp

@csrf

<div class="card-body">
    <div class="form-group">

        <label for="title">Título</label>
        <input value="{{ $video->title ?? old('title') }}" type="text" class="form-control" id="title" name="title">
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>
    <div class="form-group">

        <label for="description">Descrição</label>

        <textarea name="description" id="description" cols="30" rows="5" class="summernote">{{ $video->description ?? old('description') }}</textarea>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>

    <div class="form-group">

        <label for="url">URL</label>
        <input value="{{ $video->url ?? old('url') }}" type="text" class="form-control" id="url" name="url"
            placeholder="https://www.youtube.com/embed/9dOUW-AbSQo?si=FoItbk1xBUCZLXqs">
        @error('url')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        @if (isset($video->url))
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <iframe width="100%" height="250"
                        src="{{ $video->url }}" 
                        title="{{ $video->title }}"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        @endif

    </div>

</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{ $isUpdate ? 'Atualizar' : 'Gravar' }}</button>
</div>
