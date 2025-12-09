<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Afficher le formulaire de contact
     */
    public function index()
    {
        return view('pages.contact');
    }

    /**
     * Traiter la soumission du formulaire
     */
    public function store(Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns|max:255',
            'telephone' => 'required|regex:/^[0-9]+$/|max:20',
            'message' => 'required|string|max:5000',
        ], [
            'nom.required' => 'Le nom est obligatoire.',
            'prenom.required' => 'Le prénom est obligatoire.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être valide.',
            'telephone.required' => 'Le téléphone est obligatoire.',
            'telephone.regex' => 'Le numéro de téléphone ne doit contenir que des chiffres.',
            'message.required' => 'Le message est obligatoire.',
            'message.max' => 'Le message ne doit pas dépasser 5000 caractères.',
        ]);

        // Si la validation échoue
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Enregistrer le message
        Contact::create($request->only([
            'nom',
            'prenom',
            'email',
            'telephone',
            'message'
        ]));

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Votre message a bien été envoyé. Nous vous recontacterons rapidement.');
    }
}