<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([

            [
                'kode_barang' => 'SMN',
                'nama_barang' => 'Semen',
                'deskripsi_barang' => 'Semen Gresik',
                'harga_barang' => 25000,
                'satuan_id' => 1
            ],
            [
                'kode_barang' => 'PKU',
                'nama_barang' => 'Paku',
                'deskripsi_barang' => 'Paku Bumi',
                'harga_barang' => 5000,
                'satuan_id' => 2
            ],

        ]);
    }
}
