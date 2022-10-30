<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dini_models extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dini_models')->insert([
            [
                
                "kode_barang" => "IT",
                "nama_barang" => "Buku Pemrogaman untuk pemula",
                "deskripsi" => "buku cara belajar pemrogaman untuk pemula",
                "harga" => 45000,
                "stok" => 12,
                "foto" => "produk1.jpg"
            ],

            [
                
                "kode_barang" => "Pertanian",
                "nama_barang" => "Buku Cara Menanam Padi dengan benar ",
                "deskripsi" => "buku cara menanam padi yang baik dan benar",
                "harga" => 35000,
                "stok" => 8,
                "foto" => "produk2.jpg"
            ]

            ]);
    }
}
