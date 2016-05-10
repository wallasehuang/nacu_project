<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Music;
class NccuMusicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=16;$i++){
        	App\Music::create(['page'=>'info_'.$i,'count'=>rand(1,250)]);
        }
    }
}
