<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        $u = new User;
        $u->name = "Houss";
        $u->email = "housseyn69@outlook.fr";
        $u->password = Hash::make("houss");
        $u->is_admin = true;
        $u->save();

        $u = new User;
        $u->name = "Hass";
        $u->email = "alhousseyni.ndiaye@outlook.fr";
        $u->password = Hash::make("houss");
        $u->is_admin = false;
        $u->save();



        $this->call([
            ShoeSeeder::class,
            TailleSeeder::class,
            ShoeTailleeSeeder::class,
            CategorieSeeder::class,
        ]);
    }
}
