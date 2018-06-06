<?php

use Illuminate\Database\Seeder;

class MedicineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicines')->insert([
            'name' => 'Algocalmin 200 mg',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Algocalmin injectabil',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Ampicilină',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Hemisuscinat',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Brotalex',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Antinosol',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Vrasinofob',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Aspenter',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Vigalcamol',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Olicard',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Vecadorm',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Peridorm',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Nurofen',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Reuprofen',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Calciu 300 mg',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Calciu 600 mg',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Detralex',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Vigantolette',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Digenzim',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Alinduc',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Dentoclast',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Pariclast',
        ]);

        DB::table('medicines')->insert([
            'name' => 'Dentocorb',
        ]);
	}
}
