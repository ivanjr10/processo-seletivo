<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\retangulo;

class RetanguloApiController extends Controller
{

    public function __construct(Retangulo $retangulo, Request $request)
    {
        $this->retangulo = $retangulo;
        $this->request = $request;
    }

    public function index()
    {
        $data = $this->retangulo->all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->retangulo->rules());

        $dataForm = $request->all();

        $data = $this->retangulo->create($dataForm);

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
