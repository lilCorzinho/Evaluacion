<h1>formulario</h1>

<form action="{{ action('ClientController@save')}}" method="POST">
    {{ csrf_field() }}

    <label for="clave">Clave</label>
    <input type="text" name="clave"/>
    @if ($errors->has('clave'))
    <span>
        <strong>{{ $errors->first('clave') }}</strong>
    </span>
    @endif
    <br/>

    <label for="nom_com">Nombre comercial</label>
    <input type="text" name="nom_com"/>
    @if ($errors->has('nom_com'))
    <span>
        <strong>{{ $errors->first('nom_com') }}</strong>
    </span>
    @endif
    <br/>

    <label for="raz_soc">Razon social</label>
    <input type="text" name="raz_soc"/>
    @if ($errors->has('raz_soc'))
    <span>
        <strong>{{ $errors->first('raz_soc') }}</strong>
    </span>
    @endif
    <br/>

    <label for="rfc">RFC</label>
    <input type="text" name="rfc"/>
     @if ($errors->has('rfc'))
    <span>
        <strong>{{ $errors->first('rfc') }}</strong>
    </span>
    @endif
    <br/>

    <label for="edad"> edad</label>
    <input type="number" name="edad"/>
     @if ($errors->has('rfc'))
    <span>
        <strong>{{ $errors->first('edad') }}</strong>
    </span>
    @endif
    <br/>

    <label for="domicilio">domicilio</label>
    <input type="text" name="domicilio"/>
     @if ($errors->has('domicilio'))
    <span>
        <strong>{{ $errors->first('domicilio') }}</strong>
    </span>
    @endif
    <br/>


    <input type="submit" value="Enviar"/>
</form>
