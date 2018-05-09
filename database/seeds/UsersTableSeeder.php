<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@stomadmin.com',
            'cnp' => '',
            'address' => '',
            'birthdate' => Carbon::now()->format('Y-m-d H:i:s'),
            'role' => 3,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'doctor',
            'email' => 'doctor@stomadmin.com',
            'cnp' => '',
            'address' => '',
            'birthdate' => Carbon::now()->format('Y-m-d H:i:s'),
            'role' => 2,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'George Georgescu',
            'email' => 'george.georgescu@stomadmin.com',
            'cnp' => '',
            'address' => '',
            'birthdate' => Carbon::now()->format('Y-m-d H:i:s'),
            'role' => 2,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'Vasile Vasilescu',
            'email' => 'vasile.vasilescu@stomadmin.com',
            'cnp' => '',
            'address' => '',
            'birthdate' => Carbon::now()->format('Y-m-d H:i:s'),
            'role' => 2,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'Dorina Ionescu',
            'email' => 'dorina.ionescu@stomadmin.com',
            'cnp' => '',
            'address' => '',
            'birthdate' => Carbon::now()->format('Y-m-d H:i:s'),
            'role' => 2,
            'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
            'name' => 'secretary',
            'email' => 'secretary@stomadmin.com',
            'cnp' => '',
            'address' => '',
            'birthdate' => Carbon::now()->format('Y-m-d H:i:s'),
            'role' => 1,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@stomadmin.com',
            'cnp' => '',
            'address' => '',
            'birthdate' => Carbon::now()->format('Y-m-d H:i:s'),
            'role' => 0,
            'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
            'name' => 'Floarea Escu',
            'email' => 'floarea.escu@stomadmin.com',
            'cnp' => '',
            'address' => '',
            'birthdate' => Carbon::now()->format('Y-m-d H:i:s'),
            'role' => 0,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'Elena Ilie',
            'email' => 'elena.ilie@stomadmin.com',
            'cnp' => '',
            'address' => '',
            'birthdate' => Carbon::now()->format('Y-m-d H:i:s'),
            'role' => 0,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'Alexandru Alexandrescu',
            'email' => 'alexandru.alexandrescu@stomadmin.com',
            'cnp' => '',
            'address' => '',
            'birthdate' => Carbon::now()->format('Y-m-d H:i:s'),
            'role' => 0,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'Ion Popescu',
            'email' => 'ion.popescu@stomadmin.com',
            'cnp' => '',
            'address' => '',
            'birthdate' => Carbon::now()->format('Y-m-d H:i:s'),
            'role' => 0,
            'password' => bcrypt('password')
        ]);
    }
}
