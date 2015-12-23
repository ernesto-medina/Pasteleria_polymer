@extends('base')

@section('content')
    <paper-card heading="Card Title">
        <div class="card-content">Some content</div>
        <div class="card-actions">
            <paper-button><a class="icon cmn-tut" data-title="Inicio" href="{{ url('www.google.com') }}">Ir a otra pagina</a></paper-button>
        </div>
    </paper-card>
    <paper-card heading="Card Title" image="http://jsequeiros.com/sites/default/files/imagen-cachorro-comprimir.jpg?1399003306">
        ...
    </paper-card>
    <paper-card heading="Card Title" image="http://jsequeiros.com/sites/default/files/imagen-cachorro-comprimir.jpg?1399003306">
        ...
    </paper-card>
@endsection