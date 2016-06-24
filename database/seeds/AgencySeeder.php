<?php

use Illuminate\Database\Seeder;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agencies')->insert([

            'code' => 'test_agency',
            'name' => 'Agencja Testowa',
            'description' => 'Jakaś tam testowa agencja',
            'owner' => 'Test User',
            'phone' => '123456789',
            'e_mail' => 'test.user@.mail.com',
            'street' => 'Marszałkowska',
            'app_number' => 10,
            'house_number' => 20,
            'city' => 'Kraków',
            'state' => 'Małopolska',
            'postal_code' => '30-100',
            'KRS' => '0123456789',
            'NIP' => '1263456789',
            'REGON' => '123456789',
            'deleted_at' => '',
            'created_at' => 'NOW()',
            'updated_at' => 'NOW()',
        ]);

        DB::table('users')->insert([
            'login' => 'Brobert',
            'name' => 'Robert',
            'second_name' => 'Paweł',
            'sur_name' => 'Błoński',
            'type' => 'developer',
            'agency_id' => 1,
            'unit_id' => 0,
            'email' => 'robert.blonski@gmail.com',
            'password' => '$2y$10$v8Blt4Vr8TDcukcZem48TuTQU0szw1tYxSZTo.62Si5uTtUz7lR6G',
            'remember_token' => 'NULL',
            'created_at' => 'NOW()',
            'updated_at' => 'NOW()',
        ]);
    }
}
