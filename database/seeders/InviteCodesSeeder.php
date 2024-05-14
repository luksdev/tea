<?php

namespace Database\Seeders;

use App\Models\InviteCode;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InviteCodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guests = [
            'Brenda',
            'Adylina',
            'Giulia',
            'Taylane',
            'Nataly',
            'Leticia',
            'Bruna',
            'Joyce',
            'Vitória',
            'Glicia',
            'Glendya',
            'Gleice',
            'Glaucia',
            'Geane',
            'Vovó',
            'Sogra',
            'Aline',
            'Camila',
            'Eliane',
            'Amanda',
            'Islayne',
            'Wilma',
            'Edilma',
            'Yasmin',
            'Izabel',
            'Bia',
            'Laura irmã da Bia',
            'Nath',
        ];

        foreach ($guests as $guest) {
            InviteCode::create([
                'code' => Str::random(10),
                'used' => false,
                'guest_name' => $guest
            ]);
        }
    }
}
