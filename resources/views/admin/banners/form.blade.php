@php $isUpdate = isset($banner) @endphp

@csrf

<div class="card-body">

    <div class="form-group">

        <label for="title">Título</label>
        <input value="{{ $banner->title ?? old('title') }}" type="text" class="form-control" id="title"
            name="title">
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>
    <div class="form-group">
        <div class="custom-control custom-switch">
            <input type="checkbox" class="custom-control-input" id="show_title" name="show_title" @if( isset($banner) && $banner->show_title == 1) checked @endif>
            <label class="custom-control-label" for="show_title">Exibir o título do banner.</label>
        </div>
    </div>
    <div class="form-group">

        <label for="description">Descrição</label>

        <textarea name="description" id="description" cols="30" rows="5" class="summernote">{{ $banner->description ?? old('description') }}</textarea>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>

    <div class="form-group">
        <label for="image">Banner</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image">
                <label class="custom-file-label" for="image">Selecione</label>
            </div>
            <div class="input-group-append">
                <span class="input-group-text">Upload</span>
            </div>
        </div>

        @if ($isUpdate && $banner->image)
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('storage/' . $banner->image) }}" class="img-fluid img-thumbnail" alt="">
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
