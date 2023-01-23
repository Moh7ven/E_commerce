<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrateur;
use Hash;
use Session;

class AdministrateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.create_admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1. La validation
        $request->validate([
            'nom_admn'=>'required',
            'prenom_admn'=>'required',
            'email_admn'=>'required|email|unique:administrateurs',
            'numero_admn'=>'required',
            'password_admn'=>'required|min:8',
            'photo_admn'=>'required|image',
            'residence_admn'=>'required'
        ]);
        // 2. On upload l'image dans "/storage/app/public/Inscription"
        $chemin_image = $request->photo_admn->store("Inscription");

        // 3. On enregistre les informations de l'Administrateur
        administrateur::create([
            'nom_admn'=>$request->nom_admn,
            'prenom_admn'=>$request->prenom_admn,
            'email_admn'=>$request->email_admn,
            'numero_admn'=>$request->numero_admn,
            'password_admn'=>Hash::make($request->password_admn),
            'photo_admn'=>$chemin_image,
            'residence_admn'=>$request->residence_admn
        ]);
        // $adminSave = new ADMINSAVE([

            // 'nom_admn'=>$request->get('nom_admn'),
            // 'prenom_admn'=>$request->get('prenom_admn'),
            // 'email_admn'=>$request->get('email_admn'),
            // 'numero_admn'=>$request->get('numero_admn'),
            // 'password_admn'=>$request->get('password_admn'),
            // 'photo_admn'=>$chemin_image,
            // 'residence_admn'=>$request->get('residence_admn')
        // ]);
        // $adminSave->save();
        return redirect(route("Connnexion.afficheConnect"));
    }
    public function loginUser(Request $request){
        $request->validate([
            'email_admn'=>'required|email',
            'password_admn'=>'required|min:8'
        ]);

        $user = Administrateur::where('email_admn', '=', $request->email_admn)->first();
        if($user){
            if(Hash::check($request->password_admn, $user->password_admn)){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }else{
                return back()->with('fail', 'Mot de passe incorrecte.');
            }

        }else{
            return back()->with('fail', 'Ce Email n\'est pas enregistré.');
        }
    }

    public function dashboard(){
        $data= array();
        if(Session::has('loginId')){
            $data = Administrateur::where('id', '=', Session::get('loginId'))->first();
        }
        return view('Admin.index',compact('data'));
        // return "Bienvenue dans votre dashboard";
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect(route("Connnexion.afficheConnect"));
        }
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
    public function edit()
    {
        if(Session::has('loginId')){
            $data = Administrateur::where('id', '=', Session::get('loginId'))->first();
        }
        return view('Admin.pages.editer_profil',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules=[
            'nom_admn'=>'required',
            'prenom_admn'=>'required',
            'email_admn'=>'required|email|unique:administrateurs',
            'numero_admn'=>'required',
            'password_admn'=>'required|min:8',
            'photo_admn'=>'required|image',
            'residence_admn'=>'required'
        ];

        $data = Administrateur::where('id', '=', Session::get('loginId'))->first();
        if($data){
            if ($request->has("photo_admn")) {
                // On ajoute la règle de validation pour "photo_admn"
                $rules["photo_admn"] = 'bail|required|image|max:1024';
            }
            $this->validate($request, $rules);

            // 2. On upload l'image dans "/storage/app/public/posts"
            if ($request->has("picture")) {

                //On supprime l'ancienne image
                Storage::delete($post->photo_admn);

                $chemin_image = $request->photo_admn->store("Inscription");
            }
            $post->update([
                'nom_admn'=>$request->nom_admn,
                'prenom_admn'=>$request->prenom_admn,
                'email_admn'=>$request->email_admn,
                'numero_admn'=>$request->numero_admn,
                'password_admn'=>Hash::make($request->password_admn),
                "photo_admn" => isset($chemin_image) ? $chemin_image : $post->photo_admn,
                'residence_admn'=>$request->residence_admn
            ]);

        }
        return redirect(route("edit-user", $post));

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

    public function afficheConnect()
    {
        return view('Admin.connexion');
    }
}
