<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
        	[
        		'nom' => 'SAGBOHAN',
        		'prenom' => 'Majoie',
        		'sexe' => 'Masculin',
        		'numphone' => '61932090',
        		'email' => 'majoieadmin@gmail.com',
        		'password' => bcrypt('sagesse10'),
        		'is_admin' => '1',
        	],
        	[
        		'nom' => 'SINKPOTA',
        		'prenom' => 'Regis',
        		'sexe' => 'Masculin',
        		'numphone' => '9012345',
        		'email' => 'regis@gmail.com',
        		'password' => bcrypt('sinkpota10'),
        		'is_admin' => '0',
        	],
        ];

        foreach ($user as $key => $value) {
        	User::create($value);
        }
    }
}
