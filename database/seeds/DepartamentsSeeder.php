<?php

use Illuminate\Database\Seeder;

class DepartamentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Departaments::create([
            'staff_id' => 1, 
            'departament_id' => 2,
        ]);
        App\Departaments::create([
            'staff_id' => 2, 
            'departament_id' => 1,
        ]);
        App\Departaments::create([
            'staff_id' => 3, 
            'departament_id' => 2,
        ]);
        App\Departaments::create([
            'staff_id' => 3, 
            'departament_id' => 3,
        ]);

    }
}
