<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee
{
    private static $cards = [
        [
            "title" => "Americano",
            "image" => "https://foto.kontan.co.id/Ohrz3SH23BdMi7J7XLG6JgDgO6w=/smart/filters:format(webp)/2023/01/26/1632610923p.jpg",
            "isi" => "Caffè Americano atau Amerikano adalah minuman kopi yang dibuat dengan mencampurkan satu seloki espresso dengan air panas. Air panas yang digunakan dalam minuman ini adalah sebanyak 6 hingga 8 ons."
        ],
        [
            "title" => "Latte",
            "image" => "https://upload.wikimedia.org/wikipedia/commons/c/c6/Latte_art_3.jpg",
            "isi" => "Latte atau Caffè latte adalah espreso atau kopi yang dicampur dengan susu dan memiliki lapisan busa yang tipis di bagian atasnya. Perbandingan antara susu dengan kopi pada caffè latte adalah 2:1"
        ],
        [
            "title" => "Macchiato",
            "image" => "https://assets-pergikuliner.com/uploads/bootsy/image/14027/medium_medium_Caramel_Macchiato__www.allfoodsrecipes.com_.jpg",
            "isi" => "Coffee macchiato adalah minuman kopi yang dibuat dengan mencampurkan espresso dengan susu. Ada dua jenis macchiato yang biasanya disajikan, yaitu espresso macchiato dan latte macchiato. Espresso macchiato dibuat dengan menambahkan sedikit susu ke dalam segelas espresso"
        ],
        [
            "title" => "Affogato",
            "image" => "https://www.thespruceeats.com/thmb/5PcCBEaUd1U1eFxfcKKPLVnZzfA=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/affogato-4776668-hero-08-40d7a68d12ba46f48eaea3c43aba715c.jpg",
            "isi" => 'Affogato, lebih dikenal sebagai "affogato al caffe", adalah hidangan penutup berbahan dasar kopi Italia. Biasanya berbentuk satu sendok gelato rasa susu atau vanila atau es krim dengan topping atau "tenggelam" dengan segelas espresso panas.'
        ]
    ];

    public static function all(){
        return collect(self::$cards);
    }
}
