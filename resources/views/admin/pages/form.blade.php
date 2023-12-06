@php $isUpdate = isset($page) @endphp

@csrf

<div class="card-body">
    <div class="form-group">

        <label for="title">Título</label>
        <input value="{{ $page->title ?? old('title') }}" type="text" class="form-control" id="title" name="title">
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>
    <div class="form-group">

        <label for="description">Descrição</label>

        <textarea name="description" id="description" cols="30" rows="5" class="summernote">{{ $page->description ?? old('description') }}</textarea>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>

</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{ $isUpdate ? 'Atualizar' : 'Gravar' }}</button>
</div>
