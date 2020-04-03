<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConcertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('concerts')->insert([
            [
                'band' => 'Tame Impala',
                'date' => '2015-04-23',
                'location' => 'Columbiahalle',
            ], [
                'band' => 'The Cure',
                'date' => '2011-06-23',
                'location' => 'O2 World',
            ], [
                'band' => 'Metallica',
                'date' => '2017-02-10',
                'location' => 'Wuhlheide',
            ]
        ]);
    }
}
