<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Faq;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        // Récupérer toutes les questions et réponses depuis la base de données
        $faqs = Faq::all();

        // Afficher la vue du chatbot en passant les questions et réponses
        return view('chatbot', compact('faqs'));
    }
}