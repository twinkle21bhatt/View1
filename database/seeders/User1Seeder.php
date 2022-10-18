<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use app\Models\User1;

class User1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user1s')->insert(  
            ['first_name'=>'', 'twinkle', 'last_name'=>'Bhatt', 'age' => '24', 'address' =>'bhattatwinkle@gmail.com' ]
      );
    }
}
