<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder');
        \DB::table('users')->insert(
            [
        	'nama' => 'Ndaru',
        	'niu' => '450819',
            'password' => Hash::make('450819')
            ]);
            DB::table('users')->insert([
            'nama' => 'Layndo',
            'niu' => '450820',
            'password' => Hash::make('450820')
            ]);
            DB::table('users')->insert([
            'nama' => 'Fadhilah Puspasari',
            'niu' => '431732',
            'password' => Hash::make('431732')
            ]);
            DB::table('users')->insert([
            'nama' => 'Nafisah Karimah',
            'niu' => '431736',
            'password' => Hash::make('431736')
            ]);
            DB::table('users')->insert([
            'nama' => 'Reksa Dini Milenia',
            'niu' => '425975',
            'password' => Hash::make('425975')
            ]);
            DB::table('users')->insert([
            'nama' => 'Syaiful Noor Afifah',
            'niu' => '425979',
            'password' => Hash::make('425979')
            ]);
            DB::table('users')->insert([
            'nama' => 'Martinus Rattyasta R.M',
            'niu' => '431740',
            'password' => Hash::make('431740')
            ]);
            DB::table('users')->insert([
            'nama' => 'Bagas Nur P.',
            'niu' => '431730',
            'password' => Hash::make('431730')
            ]);
            DB::table('users')->insert([
            'nama' => 'Ruditya Candra',
            'niu' => '431742',
            'password' => Hash::make('431742')
            ]);
            DB::table('users')->insert([
            'nama' => 'Enda Nur Awlia Yusma',
            'niu' => '425961',
            'password' => Hash::make('425961')
            ]);
            DB::table('users')->insert([
            'nama' => 'Geza Ramda Ciptaan',
            'niu' => '425963',
            'password' => Hash::make('425963')
            ]);
            DB::table('users')->insert([
            'nama' => 'Hanan Hanafi',
            'niu' => '425965',
            'password' => Hash::make('425965')
            ]);
            DB::table('users')->insert([
            'nama' => 'Lina Zulfikar',
            'niu' => '431734',
            'password' => Hash::make('431734')
            ]);
            DB::table('users')->insert([
            'nama' => 'Ni Luh Yuli Hardina Pujastuti',
            'niu' => '432185',
            'password' => Hash::make('432185')
            ]);
            DB::table('users')->insert([
            'nama' => 'Royandi Nicolas Naibaho',
            'niu' => '425977',
            'password' => Hash::make('425977')
            ]);
            DB::table('users')->insert([
            'nama' => 'Muklas Rahmanto',
            'niu' => '425973',
            'password' => Hash::make('425973')
            ]);
            DB::table('users')->insert([
            'nama' => 'Khairunnisa',
            'niu' => '425969',
            'password' => Hash::make('425969')
            ]);
            DB::table('users')->insert([
            'nama' => 'Abdurrahman Jaisy Muhammad',
            'niu' => '431728',
            'password' => Hash::make('431728')
            ]);
            DB::table('users')->insert([
            'nama' => 'Bramantya Raka Genta Ramadhan',
            'niu' => '425959',
            'password' => Hash::make('425959')
            ]);
            DB::table('users')->insert([
            'nama' => 'Winston Wiradi Pangestu',
            'niu' => '432187',
            'password' => Hash::make('432187')
            ]);
            DB::table('users')->insert([
            'nama' => 'Syafiq Nur Kholis',
            'niu' => '431744',
            'password' => Hash::make('431744')
            ]);
            DB::table('users')->insert([
            'nama' => 'Qrisha Akbar Priliana',
            'niu' => '431738',
            'password' => Hash::make('431738')
            ]);
            DB::table('users')->insert([
            'nama' => 'Edo Novanto',
            'niu' => '432181',
            'password' => Hash::make('432181')
            ]);
    }
}
