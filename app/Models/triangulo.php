<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class triangulo extends Model
{
    protected $fillable = [
        'base', 'lado1', 'lado2',
    ];

    public function rules()
    {
        return [
            'base' => 'required',
            'lado1' => 'required',
            'lado2' => 'required'
        ];
    }
}
