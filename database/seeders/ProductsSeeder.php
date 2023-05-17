<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Samsung Galaxy S9',
            'description' => 'Um Galaxy S9 desbloqueado Global Lilac Purple novinho em folha e lacrado da Samsung. Esta é uma atualização. ESN limpo e ativação pronta.',
            'photo' => 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1',
            'price' => 698.88
         ]);
         DB::table('products')->insert([
             'name' => 'Apple iPhone X',
             'description' => 'GSM & CDMA FÁBRICA DESBLOQUEADA! FUNCIONA EM TODO O MUNDO! FACTORY DESBLOQUEADA. iPhone x 64gb. iPhone 8 64gb. iPhone 8 64gb. iPhone X com iOS 11.',
             'photo' => 'https://i.ebayimg.com/00/s/MTYwMFg5OTU=/z/9UAAAOSwFyhaFXZJ/$_35.JPG?set_id=89040003C1',
             'price' => 983.00
         ]);
         DB::table('products')->insert([
             'name' => 'Google Pixel 2 XL',
             'description' => 'Nova condição • Sem devoluções, mas com garantia de devolução do dinheiro do eBay',
             'photo' => 'https://i.ebayimg.com/00/s/MTYwMFg4MzA=/z/G2YAAOSwUJlZ4yQd/$_35.JPG?set_id=89040003C1',
             'price' => 675.00
         ]);
         DB::table('products')->insert([
             'name' => 'LG V10 H900',
             'description' => 'REDE Tecnologia GSM. Proteção Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue. SAR EU 0,59 W/kg (cabeça).',
             'photo' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
             'price' => 159.99
         ]);
         DB::table('products')->insert([
             'name' => 'Huawei Elate',
             'description' => 'Cricket Wireless - Huawei Elate. New Sealed Huawei Elate Smartphone.',
             'photo' => 'https://ssli.ebayimg.com/images/g/aJ0AAOSw7zlaldY2/s-l640.jpg',
             'price' => 68.00
         ]);
         DB::table('products')->insert([
             'name' => 'HTC One M10',
             'description' => 'O dispositivo está em boas condições estéticas e apresentará pequenos arranhões e/ou marcas de desgaste.',
             'photo' => 'https://i.ebayimg.com/images/g/u-kAAOSw9p9aXNyf/s-l500.jpg',
             'price' => 129.99
         ]);
    }
}
