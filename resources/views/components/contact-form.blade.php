
@if (Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
@endif

<form action="{{ route('site.send-mail') }}" method="post">

    @csrf

    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="whatsapp" class="form-label">Whatsapp</label>
                <input type="text" class="form-control" id="whatsapp" name="whatsapp" required>
            </div>
        </div>
    </div>

    <div class="mb-3">
        <label for="assunto" class="form-label">Assunto</label>
        <input type="text" class="form-control" id="subject" name="subject" required>
    </div>
    <div class="mb-3">
        <label for="mensagem" class="form-label">Mensagem</label>
        <textarea class="form-control" id="message" name="message" rows="2" required></textarea>
    </div>
    <div class="g-recaptcha" data-sitekey="{{ $key }}"></div>
    <button type="submit" class="btn btn-high mt-2">Enviar Mensagem</button>
</form>
