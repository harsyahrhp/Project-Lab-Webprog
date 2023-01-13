<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Redmi Powerbank',
                'price' => '120.000',
                'description' => 'Xiaomi Redmi Powerbank 10000mAh merupakan Pengisian Daya dengan spesifikasi sebagai berikut',
                'Image' => 'https://p-id.ipricegroup.com/uploaded_f7ae926fc9eb14a7fecb7893d25d303b.jpg',
                'category' => 'second'
                ],
                [
                 'name' => 'Samsung Guru Music',
                'price' => '150.000',
                'description' => 'merupakan HP dengan layar 6.5" dan tingkat densitas piksel sebesar 270ppi. Ia dilengkapi dengan kamera belakang 50 + 2 + 2MP dan kamera depan 5MP. HP ini juga hadir dengan kapasitas baterai 5000mAh.',
                'Image' => 'https://p-id.ipricegroup.com/uploaded_82d57bde77ad2f8bf40a1f803f16b34033bdbb19.jpg',
                'category' => 'second'
                ],
                [
                    'name' => 'Kipas angin',
                    'price' => '250.000',
                    'description' => 'Sekai Desk Fan 6" HFN650 merupakan kipas angin meja yang didesain kuat dan tahan lama, menggunakan rangka dari besi. Kipas angin ini memiliki Baling-baling yang terbuat dari aluminium dirancang agar hembusan angin lebih kencang.',
                    'Image' => 'https://images.tokopedia.net/img/cache/900/product-1/2020/2/24/3818493/3818493_56902d3a-e9e5-4257-9f08-d705084ccdff_800_800',
                    'category' => 'second'
                ],
            ]);
        }
}
