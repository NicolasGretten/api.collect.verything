<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Account;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * @throws BindingResolutionException
     */
    public function run()
    {
         Account::factory()->create([
            'id'=> '00000000-0000-0000-000000000000',
            'accountNumber'=> 'MD545698872',
            'firstName' => 'John',
            'lastName' => 'Doe',
            'email' => 'john@doe.com',
            'password' => app('hash')->make('12345678'),
            'birthday' => '1970-01-01',
            'gender' => 'male',
            'phone' => '33602010302',
            'locale' => 'fr-fr',
            'keepLogging' => '1',
         ]);
    }
}
