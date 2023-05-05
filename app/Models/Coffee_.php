<?php

namespace App\Models;


class Coffee
{
    private static $cards = [
        [
            "title" => "americano",
            "image" => "americano.jpg",
            "isi" => "Caffè Americano atau Amerikano adalah minuman kopi yang dibuat dengan mencampurkan satu seloki espresso dengan air panas. Air panas yang digunakan dalam minuman ini adalah sebanyak 6 hingga 8 ons."
        ],
        [
            "title" => "Latte",
            "image" => "Latte.jpg",
            "isi" => "Latte atau Caffè latte adalah espreso atau kopi yang dicampur dengan susu dan memiliki lapisan busa yang tipis di bagian atasnya. Perbandingan antara susu dengan kopi pada caffè latte adalah 2:1"
        ],
        [
            "title" => "Macchiato",
            "image" => "machiato.jpg",
            "isi" => "Coffee macchiato adalah minuman kopi yang dibuat dengan mencampurkan espresso dengan susu. Ada dua jenis macchiato yang biasanya disajikan, yaitu espresso macchiato dan latte macchiato. Espresso macchiato dibuat dengan menambahkan sedikit susu ke dalam segelas espresso"
        ],
        [
            "title" => "Affogato",
            "image" => "affogato.jpg",
            "isi" => 'Affogato, lebih dikenal sebagai "affogato al caffe", adalah hidangan penutup berbahan dasar kopi Italia. Biasanya berbentuk satu sendok gelato rasa susu atau vanila atau es krim dengan topping atau "tenggelam" dengan segelas espresso panas.'
        ]
    ];

    public static function all(){
        return collect(self::$cards);
    }
}
