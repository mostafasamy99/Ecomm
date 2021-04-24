<?php

namespace Database\Seeders;

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
        //
        DB::table('products')->insert([
                [
                    'name'=>'oppo',
                    'price'=>'400',
                    'description'=>"this is an oppo mobile desc",
                    'category'=>'mobile',
                    'gallery'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRE-p8wRFU6uFNXOYdWXA_bPKyRZ1NGqYITdw&usqp=CAU",
                ],
                [
                    'name'=>'samsong',
                    'price'=>'1200',
                    'description'=>"this is an samsong tv desc",
                    'category'=>'tv',
                    'gallery'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS75fVanesbR8v68_8OdYNRshGZufsb02Oj_A&usqp=CAU",
                ],
                [
                    'name'=>'toshiba ',
                    'price'=>'1000',
                    'description'=>"this is an toshiba tv desc",
                    'category'=>'tv',
                    'gallery'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmkW46jwlY98hjIuxlUT6OYFKK3FwO0OUuoA&usqp=CAU",
                ],
                [
                    'name'=>'acer',
                    'price'=>'1500',
                    'description'=>"this is an acer laptop desc",
                    'category'=>'laptop',
                    'gallery'=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRESWfj6cIH2hPZD0M6IT8461OGyLTwf6Or4A&usqp=CAU",
                ]
            



        ]);
    }
}
