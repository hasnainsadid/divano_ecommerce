<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Richy Dining room',
                'sub_title' => 'Dining Room Set',
                'category_id' => 2,
                'slug' => 'richy-dining-room',
                'sku' => 'RD-5001',
                'is_new' => 1,
                'brand_name' => 'Richy',
                'materials' => '"wooden,Red beech wood with good wood counters.,Bases made of natural red beech wood."',
                'in_stock' => 1,
                'price' => '25000.00',
                'special_price' => '23500.00',
                'description' => 'The Richy Dining Room is a stylish and contemporary dining set, designed to elevate your dining experience. It features sleek lines, high-quality materials, and comfortable seating for an inviting modern atmosphere. The Richy Dining Room set is perfect for family gatherings or entertaining guests and offers functionality and aesthetic appeal, making it a great addition to any home.',
                'discount' => '1500.00',
                'discount_type' => 'flat',
                'meta_title' => 'Richy Dining room',
                'meta_description' => 'The Richy Dining Room is a stylish and contemporary dining set, designed to elevate your dining experience. It features sleek lines, high-quality materials, and comfortable seating for an inviting modern atmosphere.',
                'meta_keywords' => '"Richy Dining room,richy,dining room,furniture,wooden,dining room set"',
                'created_at' => '2024-10-06 14:55:32',
                'updated_at' => '2024-10-06 14:55:32',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Angel Bed',
                'sub_title' => 'Bed',
                'category_id' => 1,
                'slug' => 'angel-bed',
                'sku' => 'Bed_cb-9006-1-1-1-1-2',
                'is_new' => 1,
                'brand_name' => 'N/A',
                'materials' => '"Wood,Turkish Pressed wood and has a laminated veneer.,The wood used in these panels is natural wood, and iron filings are added to increase the durability of the wood."',
                'in_stock' => 1,
                'price' => '35000.00',
                'special_price' => '28999.00',
                'description' => 'The Angel Bed is a luxurious and elegant piece of furniture that combines comfort with sophisticated design. Its soft, plush upholstery and high headboard offer a cozy yet stylish retreat for restful nights. Perfect for modern and classic interiors, the Angel Bed creates a serene, inviting ambiance while providing excellent support for a comfortable sleep.',
                'discount' => '17.00',
                'discount_type' => 'percent',
                'meta_title' => 'Angel Bed',
                'meta_description' => 'The Angel Bed is a luxurious and elegant piece of furniture that combines comfort with sophisticated design. Its soft, plush upholstery and high headboard offer a cozy yet stylish retreat for restful nights.',
                'meta_keywords' => '"wooden bed,bed,bedroom"',
                'created_at' => '2024-10-06 17:27:28',
                'updated_at' => '2024-10-06 17:27:28',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Loft Gold TV Unit',
                'sub_title' => 'TV Trolly',
                'category_id' => 6,
                'slug' => 'loft-gold-tv-unit',
                'sku' => 'lgtv_6001-1',
                'is_new' => 1,
                'brand_name' => 'Legacy',
                'materials' => '"Turkish Pressed wood,laminated veneer,Natural Wood"',
                'in_stock' => 1,
                'price' => '53000.00',
                'special_price' => '45999.00',
                'description' => 'The Loft Gold TV Unit brings modern sophistication to your living space with its sleek design and luxurious gold finish. This unit combines style and functionality, with spacious compartments for storage, perfect for organizing your media essentials while complementing contemporary interiors. Crafted with high-quality materials, it adds a touch of elegance to any home decor.',
                'discount' => '13.00',
                'discount_type' => 'percent',
                'meta_title' => 'Loft Gold TV Unit',
                'meta_description' => 'This unit combines style and functionality, with spacious compartments for storage, perfect for organizing your media essentials while complementing contemporary interiors.',
                'meta_keywords' => '"Loft Gold TV Unit,TV,dining room"',
                'created_at' => '2024-10-06 18:49:06',
                'updated_at' => '2024-10-06 18:49:06',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Cylia Center Table',
                'sub_title' => 'Coffee Table',
                'category_id' => 5,
                'slug' => 'cylia-center-table',
                'sku' => 'TBL-9011',
                'is_new' => 0,
                'brand_name' => 'Regal',
                'materials' => '"Wood"',
                'in_stock' => 1,
                'price' => '23000.00',
                'special_price' => '19500.00',
                'description' => 'The Cylia Center Table is a perfect blend of contemporary design and functionality. With its minimalist lines and smooth finish, this table serves as a stunning centerpiece for any living room. The sturdy construction ensures durability, while its elegant design complements modern interiors, making it ideal for both everyday use and special occasions.',
                'discount' => '3500.00',
                'discount_type' => NULL,
                'meta_title' => 'Cylia Center Table',
                'meta_description' => 'The Cylia Center Table is a perfect blend of contemporary design and functionality. With its minimalist lines and smooth finish, this table is a stunning centerpiece for any living room.',
                'meta_keywords' => '"Cylia Center Table,Cylia Center,Table,center table,coffee table,tea table"',
                'created_at' => '2024-10-06 18:54:56',
                'updated_at' => '2024-10-06 18:54:56',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Flow L Shape',
                'sub_title' => 'L Shape',
                'category_id' => 3,
                'slug' => 'flow-l-shape',
                'sku' => 'L_living_007',
                'is_new' => 1,
                'brand_name' => 'Regal',
                'materials' => '"Wood"',
                'in_stock' => 1,
                'price' => '47000.00',
                'special_price' => '43999.00',
                'description' => 'The Flow L Shape Sofa offers a perfect mix of comfort and style, designed to maximize seating and create a cozy atmosphere in your living space. Its sleek, modern silhouette and soft upholstery make it an ideal choice for lounging and entertaining. This spacious sectional not only elevates your decor but also provides practical seating solutions for larger areas, perfect for any contemporary home.',
                'discount' => '17.00',
                'discount_type' => 'percent',
                'meta_title' => 'Flow L Shape',
                'meta_description' => 'The Flow L Shape Sofa offers a perfect mix of comfort and style, designed to maximize seating and create a cozy atmosphere in your living space. Its sleek, modern silhouette and soft upholstery make it an ideal choice for lounging and entertaining.',
                'meta_keywords' => '"Flow L Shape,L shape sofas,living rooms"',
                'created_at' => '2024-10-06 19:02:55',
                'updated_at' => '2024-10-06 19:02:55',
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Kristal Sofa 3 Seaters',
                'sub_title' => '3 Seater Sofa',
                'category_id' => 4,
                'slug' => 'kristal-sofa-3-seaters',
                'sku' => '3seater_101-5',
                'is_new' => 1,
                'brand_name' => 'Richy',
                'materials' => '"Foam, Imported Fabric,red beech wood"',
                'in_stock' => 1,
                'price' => '3900.00',
                'special_price' => NULL,
                'description' => 'The Kristal Sofa 3 Seaters combines luxurious comfort with a timeless design. Crafted with plush cushions and a sturdy frame, this sofa offers ample seating for three, making it ideal for cozy gatherings or relaxing evenings at home. Its refined style and high-quality upholstery add a touch of elegance to any living space, enhancing classic and modern interiors.',
                'discount' => NULL,
                'discount_type' => NULL,
                'meta_title' => 'Kristal Sofa 3 Seaters',
                'meta_description' => 'The Kristal Sofa 3 Seaters combines luxurious comfort with a timeless design. Crafted with plush cushions and a sturdy frame, this sofa offers ample seating for three, making it ideal for cozy gatherings or relaxing evenings at home.',
                'meta_keywords' => '"Kristal Sofa 3 Seaters,Kristal,sofas,3 seaters"',
                'created_at' => '2024-10-06 19:13:15',
                'updated_at' => '2024-10-06 19:13:15',
            ),
        ));
        
        
    }
}