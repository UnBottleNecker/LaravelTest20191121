<?php

use Illuminate\Database\Seeder;

class ReservationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservation')->insert([
            'datetime' => new \DateTime(),
            'family' => 0,
            'member_a' => 1,
            'member_b' => 1,
            'member_c' => 1,
            'member_d' => 1,
            'name' => 'Customer_'.str_random(10),
            'tel' => '000-0000-000'.rand(0,9),
            'mail' => str_random(10).'@example.com',
            'etc' => 'TestFromSeed_'.str_random(10)
        ]);
    }
}
?>
