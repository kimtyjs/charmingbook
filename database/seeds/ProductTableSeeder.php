<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1. fiction --> adventure
        Product::create([

            'name' => 'Ready Player One',
            'slug' => 'ready-Player-One',
            'details' => 'Nulla feugiat tristique odio, id porta mi',
            'price' => 340,
            'description' => 'Pellentesque et dui non dui pharetra ullamcorper. Donec vel nisl non ante ornare lacinia at non quam. Vestibulum ullamcorper volutpat eros, vitae accumsan diam volutpat sit amet. Ut rhoncus quis lacus semper convallis',
            'codes' => '34f89wq',
            'quantity' => 12,
            'category_id' => 6
        ])->categories()->attach(6);

        Product::create([

            'name' => 'A Game of Thrones',
            'slug' => 'A-Game-Of-Thrones',
            'details' => 'Nulla feugiat tristique odio, id porta mi',
            'price' => 67,
            'description' => 'This book will lead you to the new world once you have read it finish.',
            'codes' => '35f89qa',
            'quantity' => 9,
            'category_id' => 6
        ])->categories()->attach(6);

        Product::create([

            'name' => 'Fantastic Beasts and Where to Find Them',
            'slug' => 'Fantastic-Beasts-and-Where-to-Find-Them',
            'details' => 'Nulla feugiat tristique odio, id porta mi',
            'price' => 23,
            'description' => 'This book will lead you to the new world once you have read it finish.',
            'codes' => '38f89qa',
            'quantity' => 5,
            'category_id' => 6
        ])->categories()->attach(6);

        Product::create([

            'name' => 'Shantaram',
            'slug' => 'Shantaram-Book',
            'details' => 'Nulla feugiat tristique odio, id porta mi',
            'price' => 23,
            'description' => 'This book will lead you to the new world once you have read it finish.',
            'codes' => '39f89qa',
            'quantity' => 5,
            'category_id' => 6
        ])->categories()->attach(6);

        Product::create([

            'name' => 'A Clash of Kings',
            'slug' => 'A-Clash-of-Kings',
            'details' => 'Nulla feugiat tristique odio, id porta mi',
            'price' => 23,
            'description' => 'This book will lead you to the new world once you have read it finish.',
            'codes' => '34f79qa',
            'quantity' => 21,
            'category_id' => 6
        ])->categories()->attach(6);

        Product::create([

            'name' => 'A Clash of Kings1',
            'slug' => 'A-Clash-of-Kings1',
            'details' => 'Nulla feugiat tristique odio, id porta mi1',
            'price' => 45,
            'description' => 'This book will lead you to the new world once you have read it finish.1',
            'codes' => 'u4f79qq',
            'quantity' => 5,
            'category_id' => 6
        ])->categories()->attach(6);

        //2. fiction -- fantasy
        Product::create([

            'name' => 'circe',
            'slug' => 'circe',
            'details' => 'Nulla feugiat tristique odio, id porta mi',
            'price' => 23,
            'description' => 'This book will lead you to the new world once you have read it finish.',
            'codes' => '34f79qb',
            'quantity' => 21,
            'category_id' => 7

        ])->categories()->attach(7);
        Product::create([

            'name' => 'Harry Potter and the Philosopher\'s Stone',
            'slug' => 'Harry-Potter-and-the-Philosopher\'s-Stone',
            'details' => 'Nulla feugiat tristique odio, id porta mi',
            'price' => 57,
            'description' => 'This book will lead you to the new world once you have read it finish.',
            'codes' => '34f79qz',
            'quantity' => 11,
            'category_id' => 7
        ])->categories()->attach(7);

        //3. fiction --> Erotic Fiction
        Product::create([

            'name' => 'Call Me By Your Name',
            'slug' => 'Call-Me-By-Your-Name',
            'details' => 'Nulla feugiat tristique odio, id porta mi',
            'price' => 89,
            'description' => 'This book will lead you to the new world once you have read it finish.',
            'codes' => '32f70qa',
            'quantity' => 17,
            'category_id' => 8
        ])->categories()->attach(8);

        Product::create([

            'name' => 'Homebody',
            'slug' => 'Homebody',
            'details' => 'Nulla feugiat tristique odio, id porta mi',
            'price' => 57,
            'description' => 'This book will lead you to the new world once you have read it finish.',
            'codes' => '24f10qa',
            'quantity' => 5,
            'category_id' => 8
        ])->categories()->attach(8);

        Product::create([

            'name' => 'Delta of Venus',
            'slug' => 'Delta-of-Venus',
            'details' => 'Nulla feugiat tristique odio, id porta mi',
            'price' => 76,
            'description' => 'This book will lead you to the new world once you have read it finish.',
            'codes' => '24f10qu',
            'quantity' => 5,
            'category_id' => 8
        ])->categories()->attach(8);

        //4. fiction --> Historical Fiction
        Product::create([

            'name' => 'A Gentleman in Moscow',
            'slug' => 'A-Gentleman-in-Moscow',
            'details' => 'Nulla feugiat tristique odio, id porta mi',
            'price' => 76,
            'description' => 'This book will lead you to the new world once you have read it finish.',
            'codes' => '24f11qu',
            'quantity' => 5,
            'category_id' => 9
        ])->categories()->attach(9);

        Product::create([

            'name' => 'The Dutch House',
            'slug' => 'The-Dutch_House',
            'details' => 'Nulla feugiat tristique odio, id porta mi',
            'price' => 76,
            'description' => 'This book will lead you to the new world once you have read it finish.',
            'codes' => '44f12qu',
            'quantity' => 5,
            'category_id' => 9
        ])->categories()->attach(9);
    }
}
