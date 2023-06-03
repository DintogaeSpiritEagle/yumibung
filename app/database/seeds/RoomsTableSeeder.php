<?php

use App\Room;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();
        // $rooms = [];

        // for ($i = 1; $i <= 50; $i++) {
        //     $rooms[] = [
        //         'id'          => $i,
        //         'name'        => 'Room ' . intval($i + 100),
        //         'description' => $faker->paragraph,
        //         'capacity'    => mt_rand(10, 100),
        //     ];
        // }
        $rooms = [
            [
                'id'            =>  1,
                'name'          =>  'SLT',
                'description'   =>  'Science Lecture Theatre',
                'capacity'      =>  500,
            ],
            [
                'id'            =>  2,
                'name'          =>  'MLT',
                'description'   =>  'Main Lecture Theatre',
                'capacity'      =>  1000,
            ],
            [
                'id'            =>  3,
                'name'          =>  'Drill hall',
                'description'   =>  'UPNG Drill Hall',
                'capacity'      =>  5000,
            ],
            [
                'id'            =>  4,
                'name'          =>  'Rugby Oval',
                'description'   =>  'Sports facility',
                'capacity'      =>  500,
            ],
            [
                'id'            =>  5,
                'name'          =>  'Soccer field 1',
                'description'   =>  'Sports facility',
                'capacity'      =>  500,
            ],
        ];

        Room::insert($rooms);
    }
}
