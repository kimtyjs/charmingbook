<?php

use App\Publication;
use Illuminate\Database\Seeder;

class PublicationSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        Publication::create([
            'publisher' => 'Penguin Books Ltd',
            'slug' => 'Penguin-Books-Ltd',
            'address' => 'Phnom Penh, Cambodia'

        ]);

        Publication::create([
            'publisher' => 'TCK Publishing',
            'slug' => 'TCK-Publishing',
            'address' => 'Phnom Penh, Cambodia'

        ]);

        Publication::create([
            'publisher' => 'Reed Elsevier',
            'slug' => 'Reed-Elsevier',
            'address' => 'Phnom Penh, Cambodia'

        ]);

        Publication::create([
            'publisher' => 'Penguin Random House',
            'slug' => 'Penguin-Random-House',
            'address' => 'Phnom Penh, Cambodia'

        ]);

        Publication::create([
            'publisher' => 'Harper Collins',
            'slug' => 'Harper-Collins',
            'address' => 'Phnom Penh, Cambodia'

        ]);

        Publication::create([
            'publisher' => 'Simon & Schuster',
            'slug' => 'Simon-Schuster',
            'address' => 'Phnom Penh, Cambodia'

        ]);

        Publication::create([
            'publisher' => 'Phoenix Publishing and Media Company',
            'slug' => 'Phoenix-Publishing-and-Media-Company',
            'address' => 'Phnom Penh, Cambodia'

        ]);

        Publication::create([
            'publisher' => 'Phoenix Yard Books',
            'slug' => 'Phoenix-Yard-Books',
            'address' => 'Bangkok, Thailand'

        ]);

        Publication::create([
            'publisher' => 'Pan Macmillan',
            'slug' => 'Pan-Macmillan',
            'address' => 'Bangkok, Thailand'

        ]);

        Publication::create([
            'publisher' => 'Bloomsbury',
            'slug' => 'Blooms-bury',
            'address' => 'Bangkok, Thailand'

        ]);

        Publication::create([
            'publisher' => 'Arbordale Publishing',
            'slug' => 'Arbordale-Publishing',
            'address' => 'Bangkok, Thailand'

        ]);

        Publication::create([
            'publisher' => 'Arcade Publishing',
            'slug' => 'Arcade-Publishing',
            'address' => 'Bangkok, Thailand'

        ]);

        Publication::create([
            'publisher' => 'Arcadia Publishing',
            'slug' => 'Arcadia-Publishing',
            'address' => 'London, England'

        ]);

        Publication::create([
            'publisher' => 'Arkham House',
            'slug' => 'Arkham-House',
            'address' => 'London, England'

        ]);

        Publication::create([
            'publisher' => 'Armida Publications',
            'slug' => 'Armida-Publications',
            'address' => 'London, England'

        ]);

        Publication::create([
            'publisher' => 'Beacon Publishing',
            'slug' => 'Beacon-Publishing',
            'address' => 'London, England'

        ]);

        Publication::create([
            'publisher' => 'John Blake Publishing',
            'slug' => 'John-Blake-Publishing',
            'address' => 'London, England'

        ]);

        Publication::create([
            'publisher' => 'Flame Tree Publishing',
            'slug' => 'Flame-Tree-Publishing',
            'address' => 'New york,USA'

        ]);
        Publication::create([
            'publisher' => 'Morgan James Publishing',
            'slug' => 'Morgan-James-Publishing',
            'address' => 'New york,USA'

        ]);Publication::create([
            'publisher' => 'Tuttle Publishing',
            'slug' => 'Tuttle-Publishing',
            'address' => 'New york,USA'

        ]);

    }

}
