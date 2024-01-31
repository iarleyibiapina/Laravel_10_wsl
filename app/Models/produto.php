<?php

namespace App\Models;

use App\ENUM\ProductStatusEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'descricao',
        'assunto',
        'status',
    ];


    // protected $casts = [
    //     'status' => ProductStatusEnum::class,
    // ];

    // fn é um 'arrow function'
    // quando chega no model, pega o DTO enum, estou mandando para o BANCO a coluna status o nome do enum
    // public function status(): Attribute
    // {
    //     return Attribute::make(
    //         set: fn (ProductStatusEnum $status) => $status->name,
    //     );
    // }
}
