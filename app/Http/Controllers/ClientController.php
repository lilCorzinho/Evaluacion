<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Helpers;
use App\Client;

class ClientController extends Controller {

    public function index() {
        
        $clientes = DB::table('clients')->get();
       
        return view('client.index', [
            'clientes' => $clientes
        ]);
    }

    public function form() {
        return view('client.form');
    }

    public function save(Request $request) {

        $boolean = null;

        $validate = $this->validate($request, [
            //Clave unica
            'clave' => 'required|string|max:255|unique:clients',
            'nom_com' => 'required|string|max:255',
            'raz_soc' => 'required|string|max:255',
            'rfc' => 'required|string|max:255|unique:clients',
            'edad' => 'int|max:255',
            'domicilio' => 'string|max:255'
        ]);



        $clave = $request->input('clave');
        $nom_com = $request->input('nom_com');
        $raz_soc = $request->input('raz_soc');
        $rfc = $request->input('rfc');
        $edad = $request->input('edad');
        $domicilio = $request->input('domicilio');

        //Validacion del RFC
        if (\RfcValidate::validarRFC($rfc)) {
            $client = DB::table('clients')->insert(array(
                'clave' => $clave,
                'nom_com' => $nom_com,
                'raz_soc' => $raz_soc,
                'rfc' => $rfc,
                'edad' => $edad,
                'domicilio' => $domicilio
            ));
            return redirect()->action('ClientController@index');
        } else {
            return redirect()->action('ClientController@form');
        }
    }

    public function delete($client_id) {

        $client = Client::where('id', $client_id)->update(['status' => 3]);

        return redirect()->action('ClientController@index');
    }

    public function active($client_id) {

        $client = Client::where('id', $client_id)->update(['status' => 1]);

        return redirect()->action('ClientController@index');
    }

    public function defuse($client_id) {

        $client = Client::where('id', $client_id)->update(['status' => 2]);

        return redirect()->action('ClientController@index');
    }
    
    public function search(Request $request){
        
        $search = $request->input('search');
        
        $clientes = Client::where('clave', 'LIKE', '%'.$search.'%')
                ->orWhere('nom_com', 'LIKE', '%'.$search.'%')
                ->orWhere('rfc', 'LIKE', '%'.$search.'%')
                ->orderBy('id', 'desc')
                ->paginate(5);
        return view('client.searched',[
           'clientes' => $clientes 
        ]);
        
    }

}
