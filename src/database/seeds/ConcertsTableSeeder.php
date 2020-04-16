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
                'supportBands' => '',
                'location' => 'Columbiahalle',
                'companions' => 'Leo',
            ], [
                'band' => 'The Cure',
                'date' => '2011-06-23',
                'supportBands' => 'Bauhaus,The Smiths',
                'location' => 'O2 World',
                'companions' => '',
            ], [
                'band' => 'Metallica',
                'date' => '2017-02-10',
                'supportBands' => 'Tool',
                'location' => 'Wuhlheide',
                'companions' => 'Max,Peter,Marcel',
            ]
        ]);
    }
}
