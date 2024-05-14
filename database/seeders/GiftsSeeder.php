<?php

// database/seeders/GiftsSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gift;

class GiftsSeeder extends Seeder
{
    public function run()
    {
        $gifts = [
            ['name' => 'Açucareiro', 'photo' => 'https://i.ibb.co/DRFrB31/1.png'],
            ['name' => 'Colheres de medida', 'photo' => 'https://i.ibb.co/jGSzhBH/2.png'],
            ['name' => 'Kit utensilio de cozinha silicone', 'photo' => 'https://i.ibb.co/f8Jg72D/3.png'],
            ['name' => 'Assadeira antiaderente', 'photo' => 'https://i.ibb.co/s5xyY0Y/4.png'],
            ['name' => 'Afiador de faca', 'photo' => 'https://i.ibb.co/THxq0wg/5.png'],
            ['name' => 'Copo medidor + balança', 'photo' => 'https://i.ibb.co/jLDw1cv/6.png'],
            ['name' => 'Descascador de legumes + Espremedor de alho', 'photo' => 'https://i.ibb.co/kD92wLR/7.png'],
            ['name' => 'Peneira + Escorredor de arroz', 'photo' => 'https://i.ibb.co/GPYQVwX/8.png'],
            ['name' => 'Jogo de facas', 'photo' => 'https://i.ibb.co/Q6HyBNf/9.png'],
            ['name' => 'Formas de bolo', 'photo' => 'https://i.ibb.co/cXMfwnB/10.png'],
            ['name' => 'Luva térmica', 'photo' => 'https://i.ibb.co/HTJ5THx/11.png'],
            ['name' => 'Pano de prato', 'photo' => 'https://i.ibb.co/NY5pwfT/12.png'],
            ['name' => 'Pirex', 'photo' => 'https://i.ibb.co/fQW1rF1/13.png'],
            ['name' => 'Porta tempero', 'photo' => 'https://i.ibb.co/Hq8GDjZ/14.png'],
            ['name' => 'Potes herméticos de plástico', 'photo' => 'https://i.ibb.co/260fybv/15.png'],
            ['name' => 'Potes herméticos de vidro', 'photo' => 'https://i.ibb.co/NSCRM4h/16.png'],
            ['name' => 'Saleiro + pimenteiro + paliteiro', 'photo' => 'https://i.ibb.co/5j642Dg/17.png'],
            ['name' => 'Tábua para corte de vidro', 'photo' => 'https://i.ibb.co/0JYgkK3/18.png'],
            ['name' => 'Porta detergente e esponja', 'photo' => 'https://i.ibb.co/D9yv0bV/19.png'],
            ['name' => 'Escorredor de louças', 'photo' => 'https://i.ibb.co/mJPnBQM/20.png'],
            ['name' => 'Tigela de vidro', 'photo' => 'https://i.ibb.co/f9wrjTv/21.png'],
            ['name' => 'Bowl de porcelanato', 'photo' => 'https://i.ibb.co/NSP5mv7/22.png'],
            ['name' => 'Tigelas de inox', 'photo' => 'https://i.ibb.co/qk18QyZ/23.png'],
            ['name' => 'Porta mantimentos', 'photo' => 'https://i.ibb.co/dG8CyVB/24.png'],
            ['name' => 'Jogo de copos', 'photo' => 'https://i.ibb.co/X3FP8BW/25.png'],
            ['name' => 'Descanso de pratos', 'photo' => 'https://i.ibb.co/jbpNmmk/26.png'],
            ['name' => 'Espremedor de limão', 'photo' => 'https://i.ibb.co/wJ243DX/27.png'],
            ['name' => 'Garrafa térmica de café', 'photo' => 'https://i.ibb.co/44vy2qs/28.png'],
            ['name' => 'Jarra de suco', 'photo' => 'https://i.ibb.co/W5BgTp6/29.png'],
            ['name' => 'Porta guardanapo', 'photo' => 'https://i.ibb.co/4Z3Ynxz/30.png'],
            ['name' => 'Porta frios', 'photo' => 'https://i.ibb.co/jRhWNnS/31.png'],
            ['name' => 'Frigideira antiaderente', 'photo' => 'https://i.ibb.co/t4JThPm/32.png'],
            ['name' => 'Jogo de xícaras', 'photo' => 'https://i.ibb.co/2y0xr1M/33.png'],
            ['name' => 'Garrafa para água', 'photo' => 'https://i.ibb.co/Kww4NDy/34.png'],
            ['name' => 'Ralador', 'photo' => 'https://i.ibb.co/T85QCq2/35.png'],
            ['name' => 'Kit talheres', 'photo' => 'https://i.ibb.co/CJnVQrm/36.png'],
            ['name' => 'Pegador de massa e salada', 'photo' => 'https://i.ibb.co/5vfXZ9D/37.png'],
            ['name' => 'Prato porta bolo', 'photo' => 'https://i.ibb.co/Cz7n0B0/38.png'],
            ['name' => 'Tapete para cozinha', 'photo' => 'https://i.ibb.co/MStsJg3/39.png'],
            ['name' => 'Jogo de pratos', 'photo' => 'https://i.ibb.co/sF6TgKW/40.png'],
        ];

        foreach ($gifts as $gift) {
            Gift::create($gift);
        }
    }
}
