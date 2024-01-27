<?php

namespace App\ENUM;

enum ProductStatusEnum: string
{
        // Os enums vao 'definir' valores vindos do Banco ou o contrario
        // sao definidos com base na migration:
        // poderam ser: A, B, C ao inves dos nomes
    case ativo = "Aberto";
        // case em analise = "Em analise";
    case finalizado = "Finalizado";

    public static function fromValue(string $name): string
    {
        foreach (self::cases() as $status) {
            // dd($status->value);
            if ($name === $status->name) {
                return $status->value;
            } else {
                return "status indisponivel";
            }
        }
        throw new \ValueError("$name is not valid");
    }
}
