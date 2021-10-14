<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        ADMIN:
//            username: adminadmin
//            password: qbCltB0u
//
//        STAFF:
//            username: staffstaff
//            password: qbCltB0u
//        oppure
//            username: staff.nome.cognome
//            password: staff.nome.cognome
//
//        UTENTI GENERICI:
//            username: useruser
//            password: qbCltB0u
//        oppure
//            username: nome.cognome
//            password: nome.cognome

        $faker = new Faker\Generator();
        $faker->addProvider(new Faker\Provider\it_IT\Person($faker));
        $faker->addProvider(new Faker\Provider\it_IT\Address($faker));
        $faker->addProvider(new Faker\Provider\it_IT\Company($faker));
        $faker->addProvider(new Faker\Provider\DateTime($faker));
        $faker->addProvider(new Faker\Provider\Internet($faker));

        $occupazioni = DB::table('occupazioni')->pluck('occupazione')->all();

        $utenti = [];

        // ADMIN
        array_push($utenti, [
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'auth_level' => DB::table('ruoli')->where('nome', 'Admin')->first()->id,
            'location' => $faker->address,
            'birth_date' => $faker->dateTimeBetween($startDate = '-60 years', $endDate = '-20 years') ,
            'occupation' => Arr::random($occupazioni),
            'email' => $faker->email,

            'username' => 'adminadmin',
            'password' => Hash::make( 'qbCltB0u' ),
        ]);

        // STAFF
        $first_name = $faker->firstName;
        $lastname = $faker->lastName;
        array_push($utenti, [
            'first_name' => $first_name,
            'last_name' => $lastname,
            'auth_level' => DB::table('ruoli')->where('nome', 'Staff')->first()->id,
            'location' => $faker->address,
            'birth_date' => $faker->dateTimeBetween($startDate = '-60 years', $endDate = '-20 years'),
            'occupation' => Arr::random($occupazioni),
            'email' => $faker->email,

            'username' => 'staffstaff',
            'password' => Hash::make( 'qbCltB0u' ),
        ]);
        for ($j = 0; $j < 2; $j++) {
            $first_name = $faker->firstName;
            $lastname = $faker->lastName;

            array_push($utenti, [
                'first_name' => $first_name,
                'last_name' => $lastname,
                'auth_level' => DB::table('ruoli')->where('nome', 'Staff')->first()->id,
                'location' => $faker->address,
                'birth_date' => $faker->dateTimeBetween($startDate = '-60 years', $endDate = '-20 years'),
                'occupation' => Arr::random($occupazioni),
                'email' => $faker->email,

                'username' => 'staff.' . strtolower($first_name) . '.' . strtolower($lastname),
                'password' => Hash::make( 'staff.' . strtolower($first_name) . '.' . strtolower($lastname) )
            ]);
        }

        $first_name = $faker->firstName;
        $lastname = $faker->lastName;

        array_push($utenti, [
            'first_name' => $first_name,
            'last_name' => $lastname,
            'auth_level' => DB::table('ruoli')->where('nome', 'Utente')->first()->id,
            'location' => $faker->address,
            'birth_date' => $faker->dateTimeBetween($startDate = '-60 years', $endDate = '-20 years') ,
            'occupation' => Arr::random($occupazioni),
            'email' => $faker->email,

            'username' => "useruser",
            'password' => Hash::make( "qbCltB0u" )
        ]);

        // Utenti generici
        for ($i = 0; $i < 4; $i++)
        {
            $first_name = $faker->firstName;
            $lastname = $faker->lastName;

            array_push($utenti, [
                'first_name' => $first_name,
                'last_name' => $lastname,
                'auth_level' => DB::table('ruoli')->where('nome', 'Utente')->first()->id,
                'location' => $faker->address,
                'birth_date' => $faker->dateTimeBetween($startDate = '-60 years', $endDate = '-20 years') ,
                'occupation' => Arr::random($occupazioni),
                'email' => $faker->email,

                'username' => strtolower($first_name) . '.' . strtolower($lastname),
                'password' => Hash::make( strtolower($first_name) . '.' . strtolower($lastname) )
            ]);
        }


        foreach ($utenti as $utente)
            DB::table('users')->insert($utente);
    }
}
