<?php

use App\ENUM\ProductStatusEnum;

// define no composer, para usar funçoes de forma global

if (!function_exists('getStatusProduto')) {
    function getStatusProduto(string $status): string
    {
        return ProductStatusEnum::fromValue($status);
    }
}
