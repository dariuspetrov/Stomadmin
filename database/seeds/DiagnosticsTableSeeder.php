<?php

use Illuminate\Database\Seeder;

class DiagnosticsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diagnostics')->insert([
            'name' => 'Carie dentară',
        ]);

        DB::table('diagnostics')->insert([
            'name' => 'Gingivită',
        ]);

        DB::table('diagnostics')->insert([
            'name' => 'Parodontoză',
        ]);

        DB::table('diagnostics')->insert([
            'name' => 'Sângerare gingivală',
        ]);

        DB::table('diagnostics')->insert([
            'name' => 'Abscess dentar',
        ]);
    }
}
