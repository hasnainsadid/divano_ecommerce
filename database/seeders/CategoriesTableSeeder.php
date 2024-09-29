<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Bedroom',
                'description' => 'Decorate your bedroom with our special products.',
                'image' => 'uploads/category/172720494766f30e53aaf61.webp',
                'slug' => 'bedroom',
                'meta_title' => 'bedroom picture',
                'meta_description' => 'Decorate your bedroom with our special products. Stay with us. Thanks',
                'meta_keywords' => '"bedroom,furniture,luxury,best price"',
                'created_at' => '2024-09-24 19:09:07',
                'updated_at' => '2024-09-28 17:58:55',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Kitchens',
                'description' => 'Kitchen decorates with our product. It\'s modern and easy to use.',
                'image' => 'uploads/category/172721444166f333690b66f.webp',
                'slug' => 'kitchens',
                'meta_title' => 'Kitchens',
                'meta_description' => 'Kitchen decorates with our product. It\'s modern and easy to use.',
                'meta_keywords' => '"Kitchen,Decorated,modern kitchen"',
                'created_at' => '2024-09-24 21:47:21',
                'updated_at' => '2024-09-24 21:47:21',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'Living Room',
                'description' => 'This is a demo description for the living room category',
                'image' => 'uploads/category/living-room172729339766f467d511193.webp',
                'slug' => 'living-room',
                'meta_title' => 'Living Room',
                'meta_description' => 'This is a demo meta description for the living room category',
                'meta_keywords' => '"living room,furniture,wooden"',
                'created_at' => '2024-09-25 19:43:17',
                'updated_at' => '2024-09-25 20:25:34',
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'Dining Room',
                'description' => 'This is a demo description for the dining room category. edited',
                'image' => 'uploads/category/dining-room172729369166f468fbcf1a9.webp',
                'slug' => 'dining-room',
                'meta_title' => 'Dining Room',
                'meta_description' => 'This is a demo meta description for the dining room category. updated.',
                'meta_keywords' => '"dining room ,dining,category"',
                'created_at' => '2024-09-25 19:48:11',
                'updated_at' => '2024-09-29 17:53:55',
            ),
        ));
        
        
    }
}