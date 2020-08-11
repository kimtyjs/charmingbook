<?php

use App\Language;
use Illuminate\Database\Seeder;

class LanguageSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        Language::create([
            'name' => 'English',
            'slug' => 'english'
        ]);

        Language::create([
            'name' => 'French',
            'slug' => 'french'
        ]);

        Language::create([
            'name' => 'Spanish',
            'slug' => 'spanish'
        ]);

        Language::create([
            'name' => 'Khmer',
            'slug' => 'khmer'
        ]);

        Language::create([
            'name' => 'Thai',
            'slug' => 'thai'
        ]);

    }


}
