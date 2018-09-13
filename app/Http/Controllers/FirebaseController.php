<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
	protected $database;
	protected $dbname = 'mascotasPerdidas';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
		// This assumes that you have placed the Firebase credentials in the same directory
		// as this PHP file.
		$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/../../../home4pets-82b57-b61eafc1ad8f.json');

		$firebase = (new Factory)->withServiceAccount($serviceAccount)->create();

		$this->database = $firebase->getDatabase();

		$this->middleware('auth');

    }

    public function get(int $userID = NULL){

    	if($this->database->getReference($this->dbname)->getSnapshop()->hasChild($userID)){

    		return $this->database->getReference($this->dbname)->getChild($userID)->getValue();

    	}else{

    		return FALSE;
    	}
    }

    public function insert(Request $request){

    	if(empty($request) || !isset($request)){

    		return "falso";
    	}

/*$uid = 'some-user-id';
$postData = [
    'title' => 'hola',
    'body' => 'mundo',
];

// Create a key for a new post
$newPostKey = $this->database->getReference('posts')->push()->getKey();

$updates = [
    'posts/'.$newPostKey => $postData,
    'user-posts/'.$uid.'/'.$newPostKey => $postData,
];

$this->database->getReference() // this is the root reference
   ->update($updates);

   die();*/


$this->database->getReference('mascotasPerdidas')->push($request->all())->getKey();

/*die();

    	//dd($request->all());die();

		$this->database->getReference()
		->getChild($this->dbname)
		->getChild($this->database->getReference('posts')->push()->getKey())
		->set([
			'mascota' => $request->nombre,
			'dueño' => $request->dueno,

		]);*/

    	/*foreach ($data as $key => $value) {
    		
    		$this->database->getReference()->getChild($this->dbname)->getChild($key)->set($value);
    	}
    	*/
    	 return redirect()->back();
    }

    public function delete(){

    	if(empty($data) || !isset($data)){

    		return FALSE;
    	}

    	if($this->database->getReference($this->dbname)->getSnapshop()->hasChild($userID)){

    		$this->database->getReference($this->dbname)->getChild($userID)->remove();

    		return TRUE;

    	}else{

    		return FALSE;
    	}  	
    }

	/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

		return view('reportarMascota');

	}

}
