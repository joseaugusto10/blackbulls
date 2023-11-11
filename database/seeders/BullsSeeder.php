<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\bulls as ModelsBulls;
use GuzzleHttp\Promise\Create;

class BullsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(ModelsBulls $bulls)
    {
       $bulls->Create(['name' =>'Tourinho'
    ]);
    }
}
