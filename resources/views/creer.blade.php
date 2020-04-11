@extends('layouts.template')

@section('content')
    <h1 class="c">Ajouter un audioguide</h1>
              
    <form method="POST" action="/tr" enctype="multipart/form-data">
        @csrf

        <label for="titre" class="col-md-4 col-form-label text-md-right">{{ __('Titre') }}</label>
        <input id="titre" type="text" maxlength="140" name="titre" value="{{ old('titre') }}" required>

        <label for="contenu" class="col-md-4 col-form-label text-md-right">{{ __('Contenu') }}</label>
        <textarea id="contenu" name="contenu" placeholder="Contenu de l'audioguide" rows="5"></textarea>
                            
        <label for="audio" > Audio</label>
        <input id="audio" type="file" name="audio" value="{{ old('audio') }}" accept="audio/mp3" required>

        <label for="visuel" > Visuel</label>
        <input id="visuel" type="file" name="visuel" value="{{ old('visuel') }}" accept="image/png, image/jpg, image/jpeg" required>

                              
        <button type="submit" class="btn btn-primary">
           {{ __('Enregister') }}
        </button>

                                
        @if (Route::has('password.request'))
                                 
        <a class="btn btn-link" href="../">
                                     
            {{ __('Annuler') }}
                                 
        </a>
                             
        @endif
                   
    </form>
@endsection
