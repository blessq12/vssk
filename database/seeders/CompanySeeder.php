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
                'domain' => 'vssk.pro',
                'title' => 'Вятский Сервис Сменных Ковров',
                'description' => 'Сменные грязезащитные ковры в аренду по доступным ценам. Профессиональное качество ковровых покрытий и своевременная замена',
                'logo' => '',
                'phone' => '+7 (912) 360-99-29',
                'email' => 'support@vssk.pro',
                'address' => 'Киров, ул. Лепсе, 24а, 2 этаж',
            ],
            [
                'domain' => 'clean-kirov.ru',
                'title' => 'Чистый киров - ХИМЧИСТКА МЕБЕЛИ И КОВРОВ',
                'description' => 'Услуги по химчистке мягкой мебели, матрасов, ковров и ковровых покрытий, пледов, мягких игрушек, ростовых кукол. Возможен самовывоз',
                'logo' => '',
                'phone' => '77-62-64',
                'email' => 'support@clean-kirov.ru',
                'address' => 'г. Киров, ул. Романа Ердякова 50 стр 2, 2 этаж',
            ],
            [
                'domain' => 'kovrochist43.ru',
                'title' => 'Вятский коврочист',
                'description' => 'Стирка и химчистка ковров и ковровых покрытий с доставкой в Кирове. Химчистка мягкой мебели с выездом - 79-49-40',
                'logo' => '',
                'phone' => '+7 (901) 479-49-40',
                'email' => 'support@kovrochist43.ru',
                'address' => 'г. Киров, ул. Романа Ердякова 50 стр 2, 2 этаж',
            ],
        ]);
    }
}
