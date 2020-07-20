<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\triangulo;

class TrianguloApiController extends Controller
{

    public function __construct(Triangulo $triangulo, Request $request)
    {
        $this->triangulo = $triangulo;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this->triangulo->all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->triangulo->rules());

        $dataForm = $request->all();

        $data = $this->triangulo->create($dataForm);

        return response()->json($data, 201);
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
