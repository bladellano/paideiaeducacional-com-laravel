@php $isUpdate = isset($testimonial) @endphp

@csrf

<div class="card-body">
    <div class="form-group">

        <label for="name">Nome</label>
        <input value="{{ $testimonial->name ?? old('name') }}" type="text" class="form-control" id="name" name="name">
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>

    <div class="form-group">
        <label for="image">Foto</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image">
                <label class="custom-file-label" for="image">Selecione</label>
            </div>
            <div class="input-group-append">
                <span class="input-group-text">Upload</span>
            </div>
        </div>

        @if ($isUpdate && $testimonial->image)
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('storage/' . $testimonial->image) }}" class="img-fluid img-thumbnail" alt="">
                </div>
            </div>
        @endif

        @error('image')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">

        <label for="email">E-mail</label>
        <input value="{{ $testimonial->email ?? old('email') }}" type="email" class="form-control" id="email" name="email">
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>

    <div class="form-group">

        <label for="phone">Celular</label>
        <input value="{{ $testimonial->phone ?? old('phone') }}" type="text" class="form-control" id="phone" name="phone">
        @error('phone')
            <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>
    <div class="form-group">

        <label for="description">Depoimento</label>

        <textarea name="description" id="description" cols="30" rows="5" class="summernote">{{ $testimonial->description ?? old('description') }}</textarea>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>

</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{ $isUpdate ? 'Atualizar' : 'Gravar' }}</button>
</div>
