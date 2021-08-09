<?php

use Illuminate\Database\Seeder;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Departament::create([
            'name' => 'Отдел закупок',
        ]);
        App\Departament::create([
            'name' => 'Отдел продаж',
        ]);
        App\Departament::create([
            'name' => 'PR-отдел',
        ]);
    }
}
