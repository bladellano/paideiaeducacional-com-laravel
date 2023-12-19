@extends('adminlte::page')

@section('content_header')
    <h1 class="m-0 text-dark">Galeria de Imagem</h1>
@stop

@section('content')

    <div class="containers">

        <form 
            action="{{ route('image-gallery.store') }}"
            class="form-image-upload" 
            method="POST" 
            enctype="multipart/form-data">

            {!! csrf_field() !!}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <div class="row">
                <div class="col-md-6">
                    <strong>Título:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Título">
                </div>
                <div class="col-md-5">
                    <strong>Imagem:</strong>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-1">
                    <br />
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </div>
        </form>

        <div class="row">

                @if ($images->count())

                    @foreach ($images as $image)

                    <div class="col-sm-4 col-xs-6 col-md-3 col-lg-3">
                        <div class="wrapImage">

                            <a rel="ligthbox" class="thumbnail fancybox" href="/images/{{ $image->image }}">
                                <img 
                                class="img-thumbnail m-2" 
                                alt="{{ $image->title }}" 
                                src="{{ asset('storage/' . $image->image) }}"
                                />
                            </a>
                            <form action="{{ route('image-gallery.destroy', $image->id) }}" method="post">

                                @method('DELETE')
                                @csrf

                                <button type="submit" class="close-icon btn-sm btn btn-danger">
                                    <i class="fas fa-fw fa-trash"></i>
                                </button>

                            </form>
                        </div>
                        
                    </div>

                    @endforeach
                @endif

        </div> <!-- row / end -->
    </div> <!-- container / end -->

@stop

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <style type="text/css">
    
        .wrapImage img {
            object-fit: cover; 
            height: 200px; 
            width: 100%;
        }

        .wrapImage form {
            position: absolute;
            top: 8px;
            right: -12px;
        }
        
        .wrapImage {
            position: relative;
        }

        .close-icon{
            border-radius: 50%;
            position: absolute;
            right: 5px;
            top: -10px;
            padding: 5px 8px;
        }
    
        .form-image-upload{
            background: #e8e8e8 none repeat scroll 0 0;
            padding: 15px;
            border-radius: 8px;
        }
    </style>
    
@stop

@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });
        });
    </script>

@stop
