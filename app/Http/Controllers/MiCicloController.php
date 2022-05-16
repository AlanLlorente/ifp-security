<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class MiCicloController extends Controller
{
    public function index(){
        return Inertia::render('MiCiclo/Index');
    }
    public function secretaria(){
        return Inertia::render('MiCiclo/Secretaria');
    }
    public function coordinacion(){
        return Inertia::render('MiCiclo/Coordinacion');
    }
    public function lenguajeMarcas(){
        return Inertia::render('MiCiclo/LenguajeMarcas');
    }
    public function ciberseguridad(){
        return Inertia::render('MiCilclo/Ciberseguridad');
    }
    public function mos(){
        return Inertia::render('MiCiclo/Mos');
    }
    public function masterClass(){
        return Inertia::render('MiCiclo/Masterclass');
    }
    public function recursosAdicionales(){
        return Inertia::render('MiCiclo/Recursos');
    }

}
