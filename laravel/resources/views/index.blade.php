@extends('layout')
@section('contenu')
    @foreach($billets as $billet)
        <article>
            <header>
                <a href="{{ route('billets.show',$billet->id) }}"><h1 class="titreBillet">{{ $billet->BIL_TITRE }}</h1></a>
                <time>{{ $billet->BIL_DATE }}</time>
            </header>
            <p>
                Dans :
                @php
                    $counter = 0;
                @endphp
                @foreach($billet->categories as $categorie)
                    {{ $categorie->CAT_NOM }}
                    @php
                        $counter++;
                    @endphp
                    @if(count($billet->categories) > $counter)
                        /
                    @endif
                @endforeach
            </p>
            <p> {{ $billet->BIL_CONTENU }}</p>
        </article>
        <hr />
    @endforeach
@endsection
