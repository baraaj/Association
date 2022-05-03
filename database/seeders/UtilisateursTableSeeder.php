<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;




class UtilisateursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table("utilisateurs")->insert([
            ["nom"=>"Baraa Jridi"],
            ["adresse"=>"rue zahra"],
            ["tel"=>"25698423"],
            ["email"=>"jeridibaraa@gmail.com"],
            ["mdp"=>"admin"],
        ]);
    }
}
