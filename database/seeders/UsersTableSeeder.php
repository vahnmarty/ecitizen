<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRoles();
        $this->createAdmin();
        $this->createRespondents();
        $this->createUsers();
        $this->createTokens();
    }

    public function createRoles()
    {
        Role::firstOrCreate(['name' => 'provider']);
        Role::firstOrCreate(['name' => 'admin']);
        Role::firstOrCreate(['name' => 'user']);
        Role::firstOrCreate(['name' => 'support_pnp']);
        Role::firstOrCreate(['name' => 'support_bfp']);
        Role::firstOrCreate(['name' => 'support_lgu']);
    }

    public function createAdmin()
    {
        $provider = User::firstOrCreate([
            'name' => 'Ecitizen',
            'email' => 'provider@ecitizen.com',
            'password' => bcrypt('password')
        ]);

        $provider->assignRole('provider');

        $admin = User::firstOrCreate([
            'name' => 'Admin',
            'email' => 'admin@ecitizen.com',
            'password' => bcrypt('password')
        ]);

        $admin->assignRole('admin');
    }

    public function createRespondents()
    {
        $pnp = User::firstOrCreate([
            'name' => 'SPO1',
            'email' => 'spo1@pnp.com',
            'password' => bcrypt('password')
        ]);

        $pnp->assignRole('support_pnp');

        $bfp = User::firstOrCreate([
            'name' => 'Fire Chief',
            'email' => 'chief@bfp.com',
            'password' => bcrypt('password')
        ]);

        $bfp->assignRole('support_bfp');

        $lgu = User::firstOrCreate([
            'name' => 'LGU Mayor',
            'email' => 'mayor@lgu.com',
            'password' => bcrypt('password')
        ]);

        $lgu->assignRole('support_lgu');
    }

    public function createUsers()
    {
        User::factory()->count(10)->create()->each(function ($user) {
            $user->assignRole('user');
        });

        $defaultUser = User::firstOrCreate([
            'name' => 'Vahn Marty',
            'email' => 'vahnmarty@gmail.com',
            'password' => bcrypt('password')
        ]);
    }

    public function createTokens()
    {
        foreach(User::get() as $user)
        {
            $user->createToken($user->email);
        }
    }
}
