<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MainController extends Controller
{
    public function index(){
        return Inertia::render('Index');
    }
    public function calendario(){
        return Inertia::render('Generics/Calendario');
    }
    public function equipoAcademico(){
        return Inertia::render('Generics/Equipoacademico');
    }
    public function informacionFct(){
       return Inertia::render('Generics/Informacionfct');
    }
    public function centrosIfp(){
       return Inertia::render('Generics/Centrosifp');
    }
    public function agendaActividades(){
        return Inertia::render('Generics/Agendaactividades');
    }
}
