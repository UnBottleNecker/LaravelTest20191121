<?php

use Illuminate\Database\Seeder;
use App\Reservation;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10;$i++) {
            $reservation = new Reservation;
            $reservation->datetime = new \DateTime();
            $reservation->family = 0;
            $reservation->member_a = 1;
            $reservation->member_b = 1;
            $reservation->member_c = 1;
            $reservation->member_d = 1;
            $reservation->name = 'Customer' . $i;
            $reservation->tel = '000-0000-000' . $i;
            $reservation->mail = 'example.com';
            $reservation->etc = 'Something_of_' . $i;
            $reservation->save();
        }
    }
}
?>
