<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('authors')->insert([
            'name' => 'J.K. Rowling',
            'slug' => 'J-k-Rowling'
        ]);

        DB::table('authors')->insert([
            'name' => 'Roald Dahl',
            'slug' => 'Roald-Dahl'
        ]);

        DB::table('authors')->insert([
            'name' => 'Julia Donaldson',
            'slug' => 'Julia-Donaldson'
        ]);

        DB::table('authors')->insert([
            'name' => 'Stephan King',
            'slug' => 'Stephan-king'
        ]);

        DB::table('authors')->insert([
            'name' => 'Harry Potter',
            'slug' => 'harry-potter'
        ]);

        DB::table('authors')->insert([
            'name' => 'Lego',
            'slug' => 'lego'
        ]);

        DB::table('authors')->insert([
            'name' => 'Oliver Naldo',
            'slug' => 'oliver-naldo'
        ]);

        DB::table('authors')->insert([
            'name' => 'Jesus Adam',
            'slug' => 'jesus-adam'
        ]);

        DB::table('authors')->insert([
            'name' => 'Amanda Carry',
            'slug' => 'amanda-carry'
        ]);

        DB::table('authors')->insert([
            'name' => 'Mendis Claude',
            'slug' => 'mendis-claude'
        ]);

        DB::table('authors')->insert([
            'name' => 'Johnny Holiday',
            'slug' => 'johnny-holiday'
        ]);

        DB::table('authors')->insert([
            'name' => 'Tony Clash',
            'slug' => 'tonny-clash'
        ]);

        DB::table('authors')->insert([
            'name' => 'oheui menta',
            'slug' => 'oheui-menta'
        ]);

        DB::table('authors')->insert([
            'name' => 'Johnson mummy',
            'slug' => 'johnson-mummy'
        ]);

        DB::table('authors')->insert([
            'name' => 'Nana julia',
            'slug' => 'nana-julia'
        ]);

        DB::table('authors')->insert([
            'name' => 'Joker hungry',
            'slug' => 'joker-hungry'
        ]);

        DB::table('authors')->insert([
            'name' => 'Road Khocker',
            'slug' => 'road-khocker'
        ]);

    }

}
