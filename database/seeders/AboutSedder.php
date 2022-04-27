<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $abouts = About::get();
//        foreach ($abouts as $about)
//        {
//            $about->delete();
//        }

        About::create([
            'name'=> 'test',
            'title' => 'test',
            'from' => 'test',
            'body' => 'test',
            'lives_in'=> 'test',
            'age' => 'test',
            'gender' => 'test',
            'image' => 'test',
            'cv' => 'test'
        ]);
    }
}
