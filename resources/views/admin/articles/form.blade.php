@php $isUpdate = isset($article) @endphp

@csrf

<div class="card-body">

    <div class="form-group">

        <label for="title">Título</label>
        <input value="{{ $article->title ?? old('title') }}" type="text" class="form-control" id="title"
            name="title">
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>

    <div class="form-group">

        <label for="resume">Resumo</label>
        <input value="{{ $article->resume ?? old('resume') }}" type="text" class="form-control" id="resume"
            name="resume">
        @error('resume')
            <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>

    <div class="form-group">

        <label for="content">Descrição</label>

        <textarea name="content" id="content" cols="30" rows="5" class="summernote">{{ $article->content ?? old('content') }}</textarea>
        @error('content')
            <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>

    <div class="form-group">
        <label for="image">Imagem</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image">
                <label class="custom-file-label" for="image">Selecione</label>
            </div>
            <div class="input-group-append">
                <span class="input-group-text">Upload</span>
            </div>
        </div>

        @if ($isUpdate && $article->image)
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid img-thumbnail" alt="">
                </div>
            </div>
        @endif

        @error('image')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{ $isUpdate ? 'Atualizar' : 'Gravar' }}</button>
</div>
