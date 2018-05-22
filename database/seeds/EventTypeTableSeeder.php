<?php

use Illuminate\Database\Seeder;
use App\EventType;

class EventTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipe = ["Pesta", "Olahraga", "Konser", "Edukasi"];
        foreach($tipe as $i => $row){
        	EventType::create(['id' => $i+1, 'name' => $row]);
        }
    }
}
