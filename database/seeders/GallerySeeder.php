<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 10; $i++) {
            Gallery::create([ 
                'image' => 'default.png',
                'one' => 'Imagen Galeria',
                // 'two' => 'default.png',
                'category' => 'hielo',
            ]);
        }
        for ($i=0; $i < 10; $i++) {
            Gallery::create([ 
                'image' => 'default.png',
                'one' => 'Imagen Galeria',
                // 'two' => 'default.png',
                'category' => 'grifo',
            ]);
        }
        for ($i=0; $i < 10; $i++) {
            Gallery::create([ 
                'image' => 'default.png',
                'one' => 'Imagen Galeria',
                // 'two' => 'default.png',
                'category' => 'transporte',
            ]);
        }
        for ($i=0; $i < 10; $i++) {
            Gallery::create([ 
                'image' => 'default.png',
                'one' => 'Imagen Galeria',
                // 'two' => 'default.png',
                'category' => 'agua',
            ]);
        }
        for ($i=0; $i < 10; $i++) {
            Gallery::create([ 
                'image' => 'default.png',
                'one' => 'tatojet.com',
                // 'two' => 'default.png',
                'category' => 'client',
            ]);
        }
    }
}
