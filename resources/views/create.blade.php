@extends('layouts.template')

@section('content')

<h4>Une nouvelle Audioguide</h4>

    <section class="page_formulaire">
        <div class="container">

            <form class="comment-form" method="post" action="/ag" >
                        @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Titre" name="titre">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="url d'audio" name="audio">
                                </div>       
                                <div class="col-lg-6">
                                    <input type="file" placeholder="url"  name="image">
                                    <div class="fallback"></div>                                                                                          
                                </div>
                            </div>
                        </form>
                    </div>
    </section>

                       
@endsection