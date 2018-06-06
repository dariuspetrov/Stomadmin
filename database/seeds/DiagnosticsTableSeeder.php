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
            'name' => 'Carie dentară superficială',
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

	DB::table('diagnostics')->insert([
            'name' => 'Carie dentară profundă',
        ]);

	DB::table('diagnostics')->insert([
            'name' => 'Abscess dentar',
        ]);
	
	 DB::table('diagnostics')->insert([
            'name' => 'Fisură superficială',
        ]);

	 DB::table('diagnostics')->insert([
            'name' => 'Fisură profundă',
        ]);

	 DB::table('diagnostics')->insert([
            'name' => 'Fractură perete lateral',
        ]);

	 DB::table('diagnostics')->insert([
            'name' => 'Fractură perete frontal',
        ]);
    }
}
