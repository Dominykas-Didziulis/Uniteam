<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class UserFormController extends Controller
{   
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
<<<<<<< Updated upstream

        /*Form::create([
=======
        */
        
        Form::create([
>>>>>>> Stashed changes
            'vardas' => request('vardas'),
            'pavarde' => request('pavarde'),
            'el_Pastas' => request('el_Pastas'),
            'gimimo_Data' => request('gimimo_Data'),
            'gimimo_Miestas' => request('gimimo_Miestas'),
            'trys_Zodziai' => request('trys_Zodziai'),
            'pomegiai' => request('pomegiai'),
            'auto_Marke' => request('auto_Marke'),
            'muzikos_Zanras' => request('muzikos_Zanras'),
            'filmas' => request('filmas'),
            'didziausia_Baime' => request('didziausia_Baime'),
            'salis_Aplankyti' => request('salis_Aplankyti'),
            'kreiptis_galima' => request('kreiptis_galima')
        ]);

        return redirect('userForm');
    }
}
