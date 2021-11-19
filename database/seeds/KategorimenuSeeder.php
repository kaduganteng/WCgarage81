<?php

use App\KategoriMenu;
use Illuminate\Database\Seeder;

class KategorimenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategorimenu =
            [
                'Kopi',
                'Makanan',
                'Jus'

            ];
        foreach ($kategorimenu as $k) {
            KategoriMenu::insert([
                'nama_kategori' => $k
            ]);
        }
    }
}
