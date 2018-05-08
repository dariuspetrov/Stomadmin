<?php

use Illuminate\Database\Seeder;

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
            'role' => 3,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'doctor',
            'email' => 'doctor@stomadmin.com',
            'role' => 2,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'George Georgescu',
            'email' => 'george.georgescu@stomadmin.com',
            'role' => 2,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'Vasile Vasilescu',
            'email' => 'vasile.vasilescu@stomadmin.com',
            'role' => 2,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'Dorina Ionescu',
            'email' => 'dorina.ionescu@stomadmin.com',
            'role' => 2,
            'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
            'name' => 'secretary',
            'email' => 'secretary@stomadmin.com',
            'role' => 1,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@stomadmin.com',
            'role' => 0,
            'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
            'name' => 'Floarea Escu',
            'email' => 'floarea.escu@stomadmin.com',
            'role' => 0,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'Elena Ilie',
            'email' => 'elena.ilie@stomadmin.com',
            'role' => 0,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'Alexandru Alexandrescu',
            'email' => 'alexandru.alexandrescu@stomadmin.com',
            'role' => 0,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'Ion Popescu',
            'email' => 'ion.popescu@stomadmin.com',
            'role' => 0,
            'password' => bcrypt('password')
        ]);
    }
}
