<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'cod'  => '1',
            'name' => 'Manuel',
            'city' => 'medellin',
        ]);

        DB::table('clients')->insert([
            'cod'  => '2',
            'name' => 'Ana',
            'city' => 'bucaramanga',
        ]);

        DB::table('clients')->insert([
            'cod'  => '3',
            'name' => 'Carlos',
            'city' => 'menizales',
        ]);

        DB::table('clients')->insert([
            'cod'  => '4',
            'name' => 'Daniela',
            'city' => 'bogota',
        ]);

        DB::table('clients')->insert([
            'cod'  => '5',
            'name' => 'Antonio',
            'city' => 'caldas',
        ]);

    }
}
