<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkHourItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('work_hour_items')->insert([
            ['work_hour_id' => 1,'weekDay' => 'Понедельник', 'open' => '09:30', 'close' => '18:30', 'dayOff' => false],
            ['work_hour_id' => 1,'weekDay' => 'Вторник', 'open' => '09:30', 'close' => '18:30', 'dayOff' => false],
            ['work_hour_id' => 1,'weekDay' => 'Среда', 'open' => '09:30', 'close' => '18:30', 'dayOff' => false],
            ['work_hour_id' => 1,'weekDay' => 'Четверг', 'open' => '09:30', 'close' => '18:30', 'dayOff' => false],
            ['work_hour_id' => 1,'weekDay' => 'Пятница', 'open' => '09:30', 'close' => '18:30', 'dayOff' => false],
            ['work_hour_id' => 1,'weekDay' => 'Суббота', 'open' => '09:30', 'close' => '18:30', 'dayOff' => true],
            ['work_hour_id' => 1,'weekDay' => 'Воскресенье', 'open' => '09:30', 'close' => '18:30', 'dayOff' => true],
        ]);
    }
}
