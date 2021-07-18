<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory()->create([
            'name' => 'Administrador',
            'email' => 'admin@tatojet.com',
            // 'password' => bcrypt('pass2021'),
        ]);
        $this->call([
            ReviewSeeder::class,
            BranchSeeder::class,
            GallerySeeder::class,
            EnterpriseSeeder::class,
            MessageSeeder::class,
        ]);
    }
}
