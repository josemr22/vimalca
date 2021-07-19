<?php

namespace Database\Seeders;

use App\Models\Enterprise;
use Illuminate\Database\Seeder;

class EnterpriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Enterprise::create([
            'who'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis error aliquam maxime ipsa aut molestiae! Architecto placeat quisquam iste ipsum, doloribus impedit, alias ut soluta saepe eligendi, expedita magnam porro.',
            'about'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis error aliquam maxime ipsa aut molestiae! Architecto placeat quisquam iste ipsum, doloribus impedit, alias ut soluta saepe eligendi, expedita magnam porro.',
            'mision'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis error aliquam maxime ipsa aut molestiae! Architecto placeat quisquam iste ipsum, doloribus impedit, alias ut soluta saepe eligendi, expedita magnam porro.',
            'vision'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis error aliquam maxime ipsa aut molestiae! Architecto placeat quisquam iste ipsum, doloribus impedit, alias ut soluta saepe eligendi, expedita magnam porro.',
            'image'=>'default.png',
        ]);
    }
}
