<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create([

            'name' => 'Fiction',
            'slug' => 'Fiction-Books-Collections'
        ]);

        Category::create([

            'name' => 'Art & Photography',
            'slug' => 'Art-and_photography'
        ]);

        Category::create([

            'name' => 'Biography',
            'slug' => 'Biography-Books-Collections'
        ]);

        Category::create([

            'name' => 'Craft & Hobbies',
            'slug' => 'Craft-and-hobbies-Books-Collections'
        ]);

        Category::create([

            'name' => 'childrenBook',
            'slug' => 'children-Books-Collections'
        ]);

        //1.fiction child

        Category::create([

            'category_id' => 1,
            'name' => 'Adventure',
            'slug' => 'Adventure-Books-Collections'
        ]);
        Category::create([

            'category_id' => 1,
            'name' => 'Fantasy',
            'slug' => 'Fantasy-Books-Collections'
        ]);
        Category::create([

            'category_id' => 1,
            'name' => 'Erotic Fiction',
            'slug' => 'Erotic-Fiction-Books-Collections'
        ]);
        Category::create([

            'category_id' => 1,
            'name' => 'Historical Fiction',
            'slug' => 'Historical-Fiction-Books-Collections'
        ]);
        Category::create([

            'category_id' => 1,
            'name' => 'Graphic Novels, Anime & Manga',
            'slug' => 'Graphic-Novels-Anime-Manga-Books-Collections'
        ]);
        Category::create([

            'category_id' => 1,
            'name' => 'Horror',
            'slug' => 'Horror-Books-Collections'
        ]);
        Category::create([

            'category_id' => 1,
            'name' => 'Romance',
            'slug' => 'Romance-Fiction-Books-Collections'
        ]);

        //2. art & photography
        Category::create([

            'category_id' => 2,
            'name' => 'Art History',
            'slug' => 'Art-History-Fiction-Books-Collections'
        ]);

        Category::create([

            'category_id' => 2,
            'name' => 'Entertainment',
            'slug' => 'Entertainment-Fiction-Books-Collections'
        ]);
        Category::create([

            'category_id' => 2,
            'name' => 'Music',
            'slug' => 'Music-Fiction-Books-Collections'
        ]);
        Category::create([

            'category_id' => 2,
            'name' => 'Photography',
            'slug' => 'Photography-Fiction-Books-Collections'
        ]);
        Category::create([

            'category_id' => 2,
            'name' => 'Art Treatment & Subjects',
            'slug' => 'Art-Treatment-Subjects-Fiction-Books-Collections'
        ]);

        //3. bio child
        Category::create([

            'category_id' => 3,
            'name' => 'True Stories',
            'slug' => 'True-story-Subjects-Fiction-Books-Collections'
        ]);
        Category::create([

            'category_id' => 3,
            'name' => 'Diaries, Letter & Journals',
            'slug' => 'Diaries-Letter-Journal-Subjects-Fiction-Books-Collections'
        ]);
        Category::create([

            'category_id' => 3,
            'name' => 'Memoires',
            'slug' => 'Memoires-Subjects-Fiction-Books-Collections'
        ]);

        //4. craft -- hobbies
        Category::create([

            'category_id' => 4,
            'name' => 'Decorative wood & Metalwork',
            'slug' => 'Decorative-wood-Metalwork-Subjects-Fiction-Books-Collections'
        ]);

        Category::create([

            'category_id' => 4,
            'name' => 'Hobbies & games',
            'slug' => 'Hobbies-Games-Fiction-Books-Collections'
        ]);

        Category::create([

            'category_id' => 4,
            'name' => 'painting & Art Manual',
            'slug' => 'painting-Art-Manual-Fiction-Books-Collections'
        ]);

        //5. children book

        Category::create([

            'category_id' => 5,
            'name' => 'Education',
            'slug' => 'Education-Fiction-Books-Collections'
        ]);
        Category::create([

            'category_id' => 5,
            'name' => 'FictionChildren',
            'slug' => 'FictionChildren-Books-Collections'
        ]);
        Category::create([

            'category_id' => 5,
            'name' => 'Picture & Activity Books',
            'slug' => 'Picture-Activity-Books-Collections'
        ]);
    }
}
