<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            [
                'name' => 'Вятский Сервис Сменных Ковров',
                "nameShort" => 'ВССК',
                'description' => 'Сменные грязезащитные ковры в аренду по доступным ценам. Профессиональное качество ковровых покрытий и своевременная замена',
                'logo' => '/assets/images/logo.png',
                'country' => 'Россия',
                'state' => 'Кировская область',
                'city' => 'Киров',
                'street' => 'ул. Лепсе',
                'house' => '24а',
                'addressAdditionals' => '2 этаж',
                'phone' => '+7 (833) 279-49-40',
                'phoneAdditional' => '+7 (912) 360-99-29'
            ]
        ]);
    }
}
