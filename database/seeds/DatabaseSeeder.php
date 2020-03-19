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
            ],
            [
            'nama' => 'Layndo',
            'niu' => '450820',
            'password' => Hash::make('450820')
            ],
            [
            'nama' => 'Fadhilah Puspasari',
            'niu' => '431732',
            'password' => Hash::make('431732')
            ],
            [
            'nama' => 'Nafisah Karimah',
            'niu' => '431736',
            'password' => Hash::make('431736')
            ],
            [
            'nama' => 'Reksa Dini Milenia',
            'niu' => '425975',
            'password' => Hash::make('425975')
            ],
            [
            'nama' => 'Syaiful Noor Afifah',
            'niu' => '425979',
            'password' => Hash::make('425979')
            ],
            [
            'nama' => 'Martinus Rattyasta R.M',
            'niu' => '431740',
            'password' => Hash::make('431740')
            ],
            [
            'nama' => 'Bagas Nur P.',
            'niu' => '431730',
            'password' => Hash::make('431730')
            ],
            [
            'nama' => 'Ruditya Candra',
            'niu' => '431742',
            'password' => Hash::make('431742')
            ],
            [
            'nama' => 'Enda Nur Awlia Yusma',
            'niu' => '425961',
            'password' => Hash::make('425961')
            ],
            [
            'nama' => 'Geza Ramda Ciptaan',
            'niu' => '425963',
            'password' => Hash::make('425963')
            ],
            [
            'nama' => 'Hanan Hanafi',
            'niu' => '425965',
            'password' => Hash::make('425965')
            ],
            [
            'nama' => 'Lina Zulfikar',
            'niu' => '431734',
            'password' => Hash::make('431734')
            ],
            [
            'nama' => 'Ni Luh Yuli Hardina Pujastuti',
            'niu' => '432185',
            'password' => Hash::make('432185')
            ],
            [
            'nama' => 'Royandi Nicolas Naibaho',
            'niu' => '425977',
            'password' => Hash::make('425977')
            ],
            [
            'nama' => 'Muklas Rahmanto',
            'niu' => '425973',
            'password' => Hash::make('425973')
            ],
            [
            'nama' => 'Khairunnisa',
            'niu' => '425969',
            'password' => Hash::make('425969')
            ],
            [
            'nama' => 'Abdurrahman Jaisy Muhammad',
            'niu' => '431728',
            'password' => Hash::make('431728')
            ],
            [
            'nama' => 'Bramantya Raka Genta Ramadhan',
            'niu' => '425959',
            'password' => Hash::make('425959')
            ],
            [
            'nama' => 'Winston Wiradi Pangestu',
            'niu' => '432187',
            'password' => Hash::make('432187')
            ],
        );
    }
}
