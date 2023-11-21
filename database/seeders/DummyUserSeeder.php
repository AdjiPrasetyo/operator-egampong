<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Adji Prasetyo',
                'email' => 'admin@egampong.com',
                'password' => bcrypt('admin01egampong'),
                'role' => 'admin',
            ],
            [
                'name' => 'Suka Damai',
                'email' => 'sukadamain@egampong.com',
                'password' => bcrypt('sukadamai01'),
                'role' => 'sukadamai',
            ],
            [
                'name' => 'Kebun Baru',
                'email' => 'kebunbaru@egampong.com',
                'password' => bcrypt('kebunbaru02'),
                'role' => 'kebunbaru',
            ],
            [
                'name' => 'rejosari',
                'email' => 'rejosari@egampong.com',
                'password' => bcrypt('rejosari03'),
                'role' => 'rejosari',
            ],
            [
                'name' => 'Margo yoso',
                'email' => 'margoyoso@egampong.com',
                'password' => bcrypt('margoyoso04'),
                'role' => 'margoyoso',
            ],
            [
                'name' => 'Payung Raja',
                'email' => 'payungraja@egampong.com',
                'password' => bcrypt('payungraja05'),
                'role' => 'payungraja',
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
