<?php

namespace App\Models;

class BranchType
{
    public  static function getList(){
        return [
            'hielo'=>[
                'label'=>'Fábrica de Hielo Vimalca',
            ],
            'grifo'=>[
                'label'=>'Grifo & Minimarket Vimalca Repsol',
            ],
            'transporte'=>[
                'label'=>'Transporte & Pesca Vimalca',
            ],
            'agua'=>[
                'label'=>'Agua de Mesa Vimalca',
            ],
        ];
    }
}