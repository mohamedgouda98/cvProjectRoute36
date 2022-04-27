<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class profileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
//            'title','body','year','type'
            'title'=> 'test',
            'body' => 'test',
            'year' => 'test',
            'type' => 'exp',
        ]);
    }
}
