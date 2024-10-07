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
                'title' => 'Bedrooms',
                'description' => 'Transform your bedroom into a peaceful retreat with our curated collection of stylish furniture, cozy bedding, and functional storage. With designs that blend comfort and elegance, create a space that’s uniquely yours.',
                'image' => 'uploads/category/bedrooms1728143593670160e95a1f5.webp',
                'slug' => 'bedrooms',
                'meta_title' => 'bedroom category',
                'meta_description' => 'we provide a lot of design for your bedroom.',
                'meta_keywords' => '"bedrooms,wooden,bed"',
                'created_at' => '2024-10-05 15:53:13',
                'updated_at' => '2024-10-05 15:53:13',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Dining Rooms',
                'description' => 'Discover our dining room essentials, from elegant tables to stylish chairs and storage solutions. Create a space perfect for everyday meals or special gatherings, combining functionality with timeless design.',
                'image' => 'uploads/category/dining-rooms1728144115670162f387a25.webp',
                'slug' => 'dining-rooms',
                'meta_title' => 'Dining Room',
                'meta_description' => 'Discover our dining room essentials, from elegant tables to stylish chairs and storage solutions. Create a space perfect for everyday meals or special gatherings, combining functionality with timeless design.',
                'meta_keywords' => '"dining room,dining,wooden,furniture"',
                'created_at' => '2024-10-05 16:01:55',
                'updated_at' => '2024-10-05 16:01:55',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Living Rooms',
                'description' => 'Elevate your living space with our range of cozy sofas, chic coffee tables, and stylish decor. Whether for relaxation or entertaining, find the perfect pieces to create a warm and inviting atmosphere.',
                'image' => 'uploads/category/living-rooms1728144231670163675af31.webp',
                'slug' => 'living-rooms',
                'meta_title' => 'Living Room',
                'meta_description' => 'Elevate your living space with our range of cozy sofas, chic coffee tables, and stylish decor. Whether for relaxation or entertaining, find the perfect pieces to create a warm and inviting atmosphere.',
                'meta_keywords' => '"Living room,living"',
                'created_at' => '2024-10-05 16:03:51',
                'updated_at' => '2024-10-05 16:03:51',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Sofas',
                'description' => 'Relax in style with our collection of comfortable and versatile sofas. From sleek modern designs to plush sectionals, find the perfect piece to enhance your living space and provide ultimate comfort.',
                'image' => 'uploads/category/sofas1728144379670163fbc0dcc.webp',
                'slug' => 'sofas',
                'meta_title' => 'Sofas',
                'meta_description' => 'Relax in style with our collection of comfortable and versatile sofas. From sleek modern designs to plush sectionals, find the perfect piece to enhance your living space and provide ultimate comfort.',
                'meta_keywords' => '"sofas,wooden,stylish,modern sofas,sofa,sofaset"',
                'created_at' => '2024-10-05 16:06:19',
                'updated_at' => '2024-10-05 16:06:19',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Tables',
                'description' => 'Explore our versatile range of tables, from elegant dining options to functional coffee and side tables. Designed to complement any space, our tables blend style and practicality for everyday use or special occasions.',
                'image' => 'uploads/category/tables172814446667016452d1cc0.webp',
                'slug' => 'tables',
                'meta_title' => 'Table',
                'meta_description' => 'Explore our versatile range of tables, from elegant dining options to functional coffee and side tables. Designed to complement any space, our tables blend style and practicality for everyday use or special occasions.',
                'meta_keywords' => '"table,chair,wooden table,wooden,table chair set"',
                'created_at' => '2024-10-05 16:07:46',
                'updated_at' => '2024-10-05 16:07:46',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'TV Units',
                'description' => 'Upgrade your entertainment area with our sleek and functional TV units. Offering ample storage and modern designs, these units keep your space organized while providing a stylish centerpiece for your living room.',
                'image' => 'uploads/category/tv-units17281445406701649ce5767.webp',
                'slug' => 'tv-units',
                'meta_title' => 'TV Units',
                'meta_description' => 'Upgrade your entertainment area with our sleek and functional TV units. Offering ample storage and modern designs, these units keep your space organized while providing a stylish centerpiece for your living room.',
                'meta_keywords' => '"Tv trolly,tv,wooden,furniture"',
                'created_at' => '2024-10-05 16:09:00',
                'updated_at' => '2024-10-05 16:09:00',
            ),
        ));
        
        
    }
}