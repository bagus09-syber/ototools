<?php

namespace Database\Seeders;

use App\Models\Motor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Motor::create([
            'merk' => 'Honda',
            'model' => 'Vario 110',
            'tahun' => 2010,
            'bore' => 50.00,
            'stroke' => 55.00,
            'cc' => 108.00,
            'ban_depan' => '80/90-14',
            'ban_belakang' => '90/90-14',
        ]);

        Motor::create([
            'merk' => 'Honda',
            'model' => 'Beat',
            'tahun' => 2012,
            'bore' => 50.00,
            'stroke' => 55.00,
            'cc' => 108.00,
            'ban_depan' => '80/90-14',
            'ban_belakang' => '90/90-14',
        ]);

        Motor::create([
            'merk' => 'Honda',
            'model' => 'Scoopy',
            'tahun' => 2020,
            'bore' => 47.00,
            'stroke' => 63.10,
            'cc' => 109.50,
            'ban_depan' => '100/90-12',
            'ban_belakang' => '110/90-12',
        ]);

        Motor::create([
            'merk' => 'Yamaha',
            'model' => 'NMAX 155',
            'tahun' => 2020,
            'bore' => 58.00,
            'stroke' => 58.70,
            'cc' => 155.00,
            'ban_depan' => '110/70-13',
            'ban_belakang' => '130/70-13',
        ]);
    }
}