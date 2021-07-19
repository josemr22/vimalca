<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i <10 ; $i++) { 
            Client::create([
                'name'=>'Cliente', 
                'image'=>'default.png',
                'branch'=>'hielo',
            ]);
        }
        for ($i=0; $i <10 ; $i++) { 
            Client::create([
                'name'=>'Cliente', 
                'image'=>'default.png',
                'branch'=>'grifo',
            ]);
        }
        for ($i=0; $i <10 ; $i++) { 
            Client::create([
                'name'=>'Cliente', 
                'image'=>'default.png',
                'branch'=>'transporte',
            ]);
        }
        for ($i=0; $i <10 ; $i++) { 
            Client::create([
                'name'=>'Cliente', 
                'image'=>'default.png',
                'branch'=>'agua',
            ]);
        }
    }
}
