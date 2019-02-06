<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Slider;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        for ($i=1; $i <= 5 ; $i++) { 
            Slider::create([
                'title' => 'Slider ' . $i,
                'image' => 'default.png',
                'created_at' => $now,
            ]);
        }
    }
}
