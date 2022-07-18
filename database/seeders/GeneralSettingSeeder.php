<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GeneralSetting;
class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSetting::create([
            'key'=>'site_title',
            'value'=>'By Fraz Shabbir'
        ]);
        GeneralSetting::create([
            'key'=>'short_title',
            'value'=>'FDD'
        ]);
        GeneralSetting::create([
            'key'=>'copyrights',
            'value'=>'All Rights Reserved'
        ]);
    }
}
