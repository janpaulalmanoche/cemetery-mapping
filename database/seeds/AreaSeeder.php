<?php

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $area =[
            ['area' => 'A'],
            ['area' => 'B'],
            ['area' => 'C'],
            ['area' => 'D'],
            ['area' => 'E'],
            ['area' => 'F'],
            ['area' => 'G'],
            ['area' => 'H'],
            ['area' => 'I'],
            ['area' => 'J'],
            ['area' => 'K'],

        ];
        foreach($area as $areas){
            \App\Area::create($areas);
        }
    }
}
