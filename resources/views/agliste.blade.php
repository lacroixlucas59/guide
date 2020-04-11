@extends('layouts.template')

@section('content')
    <!-- Member Section Begin -->
    <section class="member-section spad ap-member">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title"><br><br>
                        <span>Audioguides</span>
                        <h2>Top Audioguides</h2>
                    </div>
                </div> 
            </div>
        </div>

    <!-- Member Section End -->
    <div class="margium">
            <div class='liste'>
                @foreach ($agl as $agl)
                <a href="ag/{{ $agl -> id }}" target="_blank">
                    <img class='visuelvote' src='../{{ $agl -> image }}' alt='illustration'/>
                    <span>{{ $agl -> titre }}</span>
                </a>
                @endforeach
            </div>
            </div>
    </section>
    </body>@endsection
</html>
