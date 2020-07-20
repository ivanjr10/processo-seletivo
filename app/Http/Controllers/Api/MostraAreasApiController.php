<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\triangulo;
use App\Models\retangulo;
use Symfony\Component\VarDumper\VarDumper;

class MostraAreasApiController extends Controller
{
    public function __construct(Triangulo $triangulo, Retangulo $retangulo, Request $request)
    {
        $this->triangulo = $triangulo;
        $this->retangulo = $retangulo;
        $this->request = $request;
    }
    public function index()
    {
        $somaRetangulo = $somaTriangulo = $somaTotal = 0;
        $triangulo = $this->triangulo->all();
        $retangulo = $this->retangulo->all();

        foreach ($retangulo as $r) {
            $valAreaRetangulo = $r->base * $r->altura;

            $somaRetangulo += $valAreaRetangulo;
        }

        foreach ($triangulo as $t) {
            $valAltura = $t->lado1 > $t->lado2 ? $t->lado1 : $t->lado2;

            $valTriangulo  = ($t->base * $valAltura) / 2;
            $somaTriangulo += $valTriangulo;
        }

        $somaTotal = $somaRetangulo + $somaTriangulo;

        return response()->json($somaTotal);
    }
}
