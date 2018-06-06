<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class InvoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoices')->insert([
            'doctor_id' => 5,
            'pacient_id' => 10,
            'consultpaper_id' => 2,
        ]);

        DB::table('invoices')->insert([
            'doctor_id' => 4,
            'pacient_id' => 7,
            'consultpaper_id' => 2,
        ]);

        DB::table('invoices')->insert([
            'doctor_id' => 5,
            'pacient_id' => 8,
            'consultpaper_id' => 1,
        ]);

        DB::table('invoices')->insert([
            'doctor_id' => 5,
            'pacient_id' => 9,
            'consultpaper_id' => 3,
        ]);

        DB::table('invoices')->insert([
            'doctor_id' => 4,
            'pacient_id' => 10,
            'consultpaper_id' => 3,
        ]);

        DB::table('invoices')->insert([
            'doctor_id' => 4,
            'pacient_id' => 11,
            'consultpaper_id' => 4,
        ]);
    }
}
