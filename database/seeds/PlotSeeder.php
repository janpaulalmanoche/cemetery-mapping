<?php

use Illuminate\Database\Seeder;

class PlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plot =[
            ['area_id' => '1' ,'status' => 'vacant'],
            ['area_id' => '1' ,'status' => 'vacant'],
            ['area_id' => '1' ,'status' => 'vacant'],
            ['area_id' => '1' ,'status' => 'vacant'],

            ['area_id' => '1' ,'status' => 'vacant'],
            ['area_id' => '1' ,'status' => 'vacant'],
            ['area_id' => '1' ,'status' => 'vacant'],
            ['area_id' => '1' ,'status' => 'vacant'],

            ['area_id' => '2' ,'status' => 'vacant'],
            ['area_id' => '2' ,'status' => 'vacant'],
            ['area_id' => '2' ,'status' => 'vacant'],
            ['area_id' => '2' ,'status' => 'vacant'],

            ['area_id' => '2' ,'status' => 'vacant'],
            ['area_id' => '2' ,'status' => 'vacant'],
            ['area_id' => '2' ,'status' => 'vacant'],
            ['area_id' => '2' ,'status' => 'vacant'],

            ['area_id' => '3' ,'status' => 'vacant'],
            ['area_id' => '3' ,'status' => 'vacant'],
            ['area_id' => '3' ,'status' => 'vacant'],
            ['area_id' => '3' ,'status' => 'vacant'],

            ['area_id' => '3' ,'status' => 'vacant'],
            ['area_id' => '3' ,'status' => 'vacant'],
            ['area_id' => '3' ,'status' => 'vacant'],
            ['area_id' => '3' ,'status' => 'vacant'],

            ['area_id' => '4' ,'status' => 'vacant'],
            ['area_id' => '4' ,'status' => 'vacant'],
            ['area_id' => '4' ,'status' => 'vacant'],
            ['area_id' => '4' ,'status' => 'vacant'],

            ['area_id' => '4' ,'status' => 'vacant'],
            ['area_id' => '4' ,'status' => 'vacant'],
            ['area_id' => '4' ,'status' => 'vacant'],
            ['area_id' => '4' ,'status' => 'vacant'],

            ['area_id' => '5' ,'status' => 'vacant'],
            ['area_id' => '5' ,'status' => 'vacant'],
            ['area_id' => '5' ,'status' => 'vacant'],
            ['area_id' => '5' ,'status' => 'vacant'],

            ['area_id' => '5' ,'status' => 'vacant'],
            ['area_id' => '5' ,'status' => 'vacant'],
            ['area_id' => '5' ,'status' => 'vacant'],
            ['area_id' => '5' ,'status' => 'vacant'],



        ];
        foreach($plot as $plots){
            \App\Plot::create($plots);
        }
    }
}
