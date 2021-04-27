<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Anderson Rocha',
            'email' => 'anderson.rocha@ancora-ti.com.br',
            'email_verified_at' => now(),
            'password' => bcrypt('p-cursos@020702'),
        ]);

        User::factory(99)->create();
    }
}
