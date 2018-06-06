<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AppointmentsTableSeeder::class);
        $this->call(MedicalUnitsTableSeeder::class);
        $this->call(ReferralsTableSeeder::class);
        $this->call(InterventionTypeTableSeeder::class);
        $this->call(InterventionTableSeeder::class);
        $this->call(DiagnosticsTableSeeder::class);
        $this->call(MedicineTableSeeder::class);
        $this->call(MedicinePrescriptionTableSeeder::class);
        $this->call(ReferenceLetterTableSeeder::class);
        $this->call(ConsultPapersTableSeeder::class);
        $this->call(InvoicesTableSeeder::class);
    }
}
