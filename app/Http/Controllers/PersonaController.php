<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{

    public function createPersona(Request $request): array
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        return ['created' => 'ok'];
    }
}
