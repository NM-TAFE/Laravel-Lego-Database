<?php

namespace Database\Seeders;

use App\Models\Set;
use Illuminate\Database\Seeder;
use Vtiful\Kernel\Excel;

class SetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Excel::import(new Set,request()->file('file'));
    }
}
