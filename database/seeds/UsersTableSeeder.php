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
            'cnp' => '197100935000',
            'address' => 'Răsăritului Nr.42',
            'birthdate' => Carbon::createFromFormat('Y-m-d','1997-10-09'),
            'role' => 3,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'doctor',
            'email' => 'doctor@stomadmin.com',
            'cnp' => '1971030350001',
            'address' => 'Independenței Nr. 34',
            'birthdate' => Carbon::createFromFormat('Y-m-d','1997-10-30'),
            'role' => 2,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'George Georgescu',
            'email' => 'george.georgescu@stomadmin.com',
            'cnp' => '197090935002',
            'address' => 'Republicii Nr. 3',
            'birthdate' => Carbon::createFromFormat('Y-m-d','1997-09-09'),
            'role' => 2,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'Vasile Vasilescu',
            'email' => 'vasile.vasilescu@stomadmin.com',
            'cnp' => '1970524350003',
            'address' => 'Labirintului Nr. 32',
            'birthdate' => Carbon::createFromFormat('Y-m-d','1997-05-24'),
	    'role' => 2,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'Dorina Ionescu',
            'email' => 'dorina.ionescu@stomadmin.com',
            'cnp' => '1970321350004',
            'address' => 'Sirius Nr. 23',
            'birthdate' => Carbon::createFromFormat('Y-m-d','1997-03-21'),
            'role' => 2,
            'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
            'name' => 'secretary',
            'email' => 'secretary@stomadmin.com',
            'cnp' => '1971205350005',
            'address' => 'Alianței Nr. 47',
            'birthdate' => Carbon::createFromFormat('Y-m-d','1997-12-05'),
            'role' => 1,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@stomadmin.com',
            'cnp' => '2970321350006',
            'address' => 'Ioan Slavici Nr. 20, Bl. 7 Ap. 8',
            'birthdate' => Carbon::createFromFormat('Y-m-d','1997-03-21'),
            'role' => 0,
            'password' => bcrypt('password')
        ]);

        DB::table('users')->insert([
            'name' => 'Floarea Escu',
            'email' => 'floarea.escu@stomadmin.com',
            'cnp' => '2960321350007',
            'address' => 'Spl. N. Titulescu Nr. 23',
            'birthdate' => Carbon::createFromFormat('Y-m-d','1996-03-25'),
            'role' => 0,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'Elena Ilie',
            'email' => 'elena.ilie@stomadmin.com',
            'cnp' => '2920523350008',
            'address' => 'Gării Nr. 32',
            'birthdate' => Carbon::createFromFormat('Y-m-d','1992-05-23'),
            'role' => 0,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'Alexandru Alexandrescu',
            'email' => 'alexandru.alexandrescu@stomadmin.com',
            'cnp' => '1890301350009',
            'address' => 'L. Rebreanu Nr. 120',
            'birthdate' => Carbon::createFromFormat('Y-m-d','1989-03-01'),
            'role' => 0,
            'password' => bcrypt('password')
        ]);
		
		DB::table('users')->insert([
            'name' => 'Ion Popescu',
            'email' => 'ion.popescu@stomadmin.com',
            'cnp' => '1960721350010',
            'address' => 'Ioan Slavici Nr. 83',
            'birthdate' => Carbon::createFromFormat('Y-m-d','1996-07-21'),
            'role' => 0,
            'password' => bcrypt('password')
        ]);
    }
}
