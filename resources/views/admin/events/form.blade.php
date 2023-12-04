@php $isUpdate = isset($event) @endphp

@csrf

<div class="card-body">
    <div class="form-group">

        <label for="title">Título</label>
        <input value="{{ $event->title ?? old('title') }}" type="text" class="form-control" id="title" name="title">
        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>
    <div class="form-group">

        <label for="description">Descrição</label>

        <textarea name="description" id="description" cols="30" rows="5" class="summernote">{{ $event->description ?? old('description') }}</textarea>
        @error('description')
            <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>
    <div class="form-group">

        <label for="event_date">Data do evento</label>
        <input value="{{ $event->event_date ?? old('event_date') }}" type="date" class="form-control" id="event_date"
            name="event_date">
        @error('event_date')
            <div class="text-danger">{{ $message }}</div>
        @enderror

    </div>
    <div class="form-group">
        <label for="image">Imagem/Flyer</label>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="image" name="image">
                <label class="custom-file-label" for="image">Selecione</label>
            </div>
            <div class="input-group-append">
                <span class="input-group-text">Upload</span>
            </div>
        </div>

        @if ($isUpdate && $event->image)
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('storage/' . $event->image) }}" class="img-fluid img-thumbnail" alt="">
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
