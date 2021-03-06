<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserForm;
use App\Models\User;

class UserFormController extends Controller
{   
    public function show()
    {
        $data= UserForm::all();
        return view('profile',['users'=>$data]);
    }

    public function editUserForm($id)
    {
        ///$data= UserForm::find($user_id);
        $data = UserForm::where('user_id', $id)->get();
       //dd($data[0]);
        return view('userForm',['data'=>$data[0]]);
    }
    public function UpdateUserForm(Request $req)
    {
        //dd($req);

        $data=UserForm::find($req->id);
        $data->vardas=$req->vardas;
        $data->pavarde=$req->pavarde;
        $data->el_Pastas=$req->el_Pastas;
        $data->gimimo_Data=$req->gimimo_Data;
        $data->gimimo_Miestas=$req->gimimo_Miestas;
        $data->trys_Zodziai=$req->trys_Zodziai;
        $data->pomegiai=$req->pomegiai;
        $data->auto_Marke=$req->auto_Marke;
        $data->kreiptis_Galima=$req->kreiptis_Galima;
        $data->muzikos_Zanras=$req->muzikos_Zanras;
        $data->filmas=$req->filmas;
        $data->didziausia_Baime=$req->didziausia_Baime;
        $data->salis_Aplankyti=$req->salis_Aplankyti;
        $data->save();
        return redirect('profile');
    }

    public function index()
    {
        return view('userForm');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'vardas' => 'required|max:255',
            'pavarde' => 'required|max:255',
            'el_Pastas' => 'required|email|max:255',
            'gimimo_Data' => 'required|max:255',
            'gimimo_Miestas' => 'required|max:255',
            'trys_Zodziai' => 'required|max:255',
            'pomegiai' => 'required|max:255',
            'auto_Marke' => 'required|max:255',
            'muzikos_Zanras' => 'required|max:255',
            'filmas' => 'required|max:255',
            'didziausia_Baime' => 'required|max:255',
            'salis_Aplankyti' => 'required|max:255',
            'kreiptis_galima' => 'required|max:255',
        ]);

       /* $form = new Form;
        $form->vardas = $request->input('vardas');
        $form->pavarde = $request->input('pavarde');
        $form->el_Pastas = $request->input('el_Pastas');
        $form->gimimo_Data = $request->input('gimimo_Data');
        $form->gimimo_Miestas = $request->input('gimimo_Miestas');
        $form->trys_Zodziai = $request->input('trys_Zodziai');
        $form->pomegiai = $request->input('pomegiai');
        $form->auto_Marke = $request->input('auto_Marke');
        $form->muzikos_Zanras = $request->input('muzikos_Zanras');
        $form->filmas = $request->input('filmas');
        $form->didziausia_Baime = $request->input('didziausia_Baime');
        $form->salis_Aplankyti = $request->input('salis_Aplankyti');
        $form->kreiptis_galima = $request->input('kreiptis_galima');
*/    

        
        UserForm::create([
            'user_id' => auth()->user()->id,
            'vardas' => $request->vardas,
            'pavarde' => $request->pavarde,
            'el_Pastas' => $request->el_Pastas,
            'gimimo_Data' => $request->gimimo_Data,
            'gimimo_Miestas' => $request->gimimo_Miestas,
            'trys_Zodziai' => $request->trys_Zodziai,
            'pomegiai' => $request->pomegiai,
            'auto_Marke' => $request->auto_Marke,
            'muzikos_Zanras' => $request->muzikos_Zanras,
            'filmas' => $request->filmas,
            'didziausia_Baime' => $request->didziausia_Baime,
            'salis_Aplankyti' => $request->salis_Aplankyti,
            'kreiptis_galima' => $request->kreiptis_galima
        ]);

        return redirect('userForm');
    }
}
