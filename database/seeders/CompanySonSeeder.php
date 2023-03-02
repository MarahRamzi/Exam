<?php

namespace Database\Seeders;

use App\Models\Company_son;
use Illuminate\Database\Seeder;

class CompanySonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company_son::factory(10)->create();

    }
}