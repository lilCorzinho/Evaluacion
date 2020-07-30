<script src="{{ asset('js/main.js') }}"></script>

<h1>Catalogo de todos los clientes</h1>

<form action="{{ action('ClientController@search')}}" method="POST">
    {{ csrf_field() }}
    
    <input type="text" name="search"/>
    
    <input type="submit" value="Buscar"/>
</form>

<ul>
   
    @foreach($clientes as $cliente)
    
    <li>
    @if($cliente->status == 1)
    <a>Activo ||</a>
    @endif
    @if($cliente->status == 2)
    <a>Inactivo ||</a>
    @endif
        {{$cliente->nom_com}} ||
        {{$cliente->raz_soc}} ||
        {{$cliente->domicilio}} ||
        {{$cliente->clave}} ||
        {{$cliente->edad}} ||
        {{$cliente->rfc}}
        
    </li>
    <a href="{{ route('client.delete', ['id' => $cliente->id]) }}">
        Eliminar
    </a>
    ||
    <a href="{{ route('client.active', ['id' => $cliente->id]) }}">
        Activar cliente
    </a>
    ||
    <a href="{{ route('client.defuse', ['id' => $cliente->id]) }}">
        Desactivar cliente
    </a>
    @endforeach
    
</ul>


