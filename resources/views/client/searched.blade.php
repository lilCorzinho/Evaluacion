<ul>
   
    @foreach($clientes as $cliente)
    
    <li>
    
        {{$cliente->nom_com}} ||
        {{$cliente->raz_soc}} ||
        {{$cliente->domicilio}} ||
        {{$cliente->clave}} ||
        {{$cliente->edad}} ||
        {{$cliente->rfc}}
        
    </li>
    
    @endforeach
    
</ul>