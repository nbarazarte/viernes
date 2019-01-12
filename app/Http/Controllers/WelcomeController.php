<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use App\Mascotas;
use App\Http\Requests\ReglasMascotasPerdidas;
use Illuminate\Support\Facades\Storage;
use DB;

class WelcomeController extends Controller
{
protected $database;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // This assumes that you have placed the Firebase credentials in the same directory
        // as this PHP file.
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/../../../guauser-b34cf-136f3dce5a19.json');
        $firebase = (new Factory)->withServiceAccount($serviceAccount)->create();
        $this->database = $firebase->getDatabase();

        //$this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        
        //order the reference's children by their key in ascending order
        $reference = $this->database->getReference('timeline');        
        $shallow = $reference->shallow();
        $snapshot = $reference->getSnapshot();
        //$childKeys = $reference->getChildKeys();
        $datos = $snapshot->getValue(); //or $datos = $reference->getValue();
        //dd($childKeys);die();
        //dd($datos);die();

        if(empty($datos)){

            return view('welcome');

        }else{

            return view('welcome',compact('datos'));
        }

        
        //return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        if ($request->isMethod('post')){  

            //return $request->all();
            //return "Este es el archivo:". $request->file('logo');

            if($request->hasfile('logo')){

                //echo $request->file('logo');
                //$extension = $request->logo->extension();
                //return $request->logo->path();   
                //return $request->logo->store('public'); 
                //Storage::putFile('public', $archivo);  
                //Storage::putFile('public', $request->file('logo'));              
                $archivo = \Auth::user()->id."_".$_FILES['logo']['name'];
                //echo $archivo;
                $request->logo->storeAs('public', $archivo);

                return response()->json(['response' => 'Archivo esta lleno']);      

            }else{

                return response()->json(['response' => 'Archivo vacío']); 
            }
        }
    }

    public function mostrar()
    {
        //return dd(Storage::allFiles('public'));//muestra a todos los archivos dentro del directorio public y de sus subdirectorios
        //return dd(Storage::files('public'));//muestra a todos los archivos dentro del directorio public pero no de sus subdirectorios
        //Storage::makeDirectory('public/otroNuevo');//crea un directorio (devuelve true o false)
        //Storage::deleteDirectory('public/otroNuevo');//borra un directorio (devuelve true o false)
        $url = Storage::url('mifoto.jpeg');
        return "<img src='".$url."'/>";
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReglasMascotasPerdidas $request)
    {
        //dd($request->all());die();
        $validated = $request->validated();
        $this->create($request->all());

        $this->database->getReference('timeline')->push($request->all())->getKey();

        return redirect()->back();        
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Mascotas
     */
    public function create(array $data)
    {
        Mascotas::create([

            'lng_idusuario' => \Auth::user()->id,
            'str_categoria' => $data['str_categoria'],
            'str_dueno' => \Auth::user()->name, 
            'str_telefono' => $data['str_telefono'], 
            'str_correo' => \Auth::user()->email,
            'str_mascota' => $data['str_mascota'], 
            'str_especie' => $data['str_especie'], 
            //'str_ruta_foto' => 'required',, 
            'str_ciudad' => $data['str_ciudad'], 
            'str_sector' => $data['str_sector'], 
            'str_fecha_perdida' => $data['str_fecha_perdida'], 
            'txt_descripcion' => $data['txt_descripcion'],

        ]);

        return;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
