<?php

use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Staff::create([
            'name' => 'Иван',
            'first_name' => 'Чебуранович', 
            'last_name' => 'Йода',
            'male' => 'man',
            'wage' => 1000,
        ]);
        App\Staff::create([
            'name' => 'Петр',
            'first_name' => 'Вессарионович', 
            'last_name' => 'Вейдер',
            'male' => 'man',
            'wage' => 800,
        ]);
        App\Staff::create([
            'name' => 'Ольга',
            'first_name' => 'Моисеевна', 
            'last_name' => 'Кеноби',
            'male' => 'wooman',
            'wage' => 5000,
        ]);
    }
}
