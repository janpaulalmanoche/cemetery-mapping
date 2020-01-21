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
            ];
        $plot2 =[
            ['area_id' => '2' ,'status' => 'vacant'],
        ];
        $plot3 =[
            ['area_id' => '3' ,'status' => 'vacant'],
        ];
        $plot4 =[
            ['area_id' => '4' ,'status' => 'vacant'],
        ];

        $plot5 =[
            ['area_id' => '5' ,'status' => 'vacant'],
        ];
        $plot6 =[
            ['area_id' => '6' ,'status' => 'vacant'],
        ];
        $plot7 =[
            ['area_id' => '7' ,'status' => 'vacant'],
        ];
        $plot8 =[
            ['area_id' => '8' ,'status' => 'vacant'],
        ];

        for($x = 0; $x <= 49; $x++){
            \App\Plot::insert($plot);
        }
        for($x = 0; $x <= 79; $x++){
            \App\Plot::insert($plot2);
        }
        for($x = 0; $x <= 79; $x++){
            \App\Plot::insert($plot3);
        }
        for($x = 0; $x <= 79; $x++){
            \App\Plot::insert($plot4);
        }

        for($x = 0; $x <= 49; $x++){
            \App\Plot::insert($plot5);
        }
        for($x = 0; $x <= 79; $x++){
            \App\Plot::insert($plot6);
        }
        for($x = 0; $x <= 79; $x++){
            \App\Plot::insert($plot7);
        }
        for($x = 0; $x <= 49; $x++){
            \App\Plot::insert($plot8);
        }



    }
}
