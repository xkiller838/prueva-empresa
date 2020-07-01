<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'cod'  => '1',
            'name' => 'medellin',
        ]);

        DB::table('cities')->insert([
            'cod'  => '2',
            'name' => 'bucaramanga',
        ]);

        DB::table('cities')->insert([
            'cod'  => '3',
            'name' => 'manizales',
        ]);

        DB::table('cities')->insert([
            'cod'  => '4',
            'name' => 'bogota',
        ]);

        DB::table('cities')->insert([
            'cod'  => '5',
            'name' => 'caldas',
        ]);

        DB::table('cities')->insert([
            'cod'  => '6',
            'name' => 'armenia',
        ]);
    }
}
