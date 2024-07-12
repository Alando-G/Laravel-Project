<?php

namespace Database\Seeders;

use App\Models\Sweet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Sweet::create([
        //     "name"=>"ksl",
        //     "description"=>"A hard candy made in Kenya",
        //     "price"=>100,
        //     "type"=>"hard candy",
        // ]);

        Sweet::factory()->count(10)->create();

    }
    // php artisan db:seed SweetsSeeder
}