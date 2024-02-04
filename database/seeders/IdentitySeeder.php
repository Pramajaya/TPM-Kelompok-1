<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('identity')->insert([
            'identity_name' => 'Binus',
        ]);

        DB::table('identity')->insert([
            'identity_name' => 'Non-Binus',
        ]);
    }
}
