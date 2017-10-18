<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'sku' => 'dasd6',
            'imgPath' => 'http://universe.byu.edu/wp-content/uploads/2015/01/HP4cover.jpg',
            'title' => 'Harry Potter',
            'description' => 'Description of the product in short.',
            'price' => 115
            ]);
        $product->save();
       
        $product = new \App\Product([
            'sku' => 'dasd7',
            'imgPath' => 'http://universe.byu.edu/wp-content/uploads/2015/01/HP4cover.jpg',
            'title' => 'Harry Potter',
            'description' => 'Description of the product in short.',
            'price' => 115
            ]);
        $product->save();
       
        $product = new \App\Product([
            'sku' => 'dasd8',
            'imgPath' => 'http://universe.byu.edu/wp-content/uploads/2015/01/HP4cover.jpg',
            'title' => 'Harry Potter',
            'description' => 'Description of the product in short.',
            'price' => 115
            ]);
        $product->save();
        
        $product = new \App\Product([
            'sku' => 'dasd1',
            'imgPath' => 'http://universe.byu.edu/wp-content/uploads/2015/01/HP4cover.jpg',
            'title' => 'Harry Potter',
            'description' => 'Description of the product in short.',
            'price' => 115
            ]);
        $product->save();
        
        $product = new \App\Product([
            'sku' => 'dasd2',
            'imgPath' => 'http://universe.byu.edu/wp-content/uploads/2015/01/HP4cover.jpg',
            'title' => 'Harry Potter',
            'description' => 'Description of the product in short.',
            'price' => 115
            ]);
        $product->save();
        
        $product = new \App\Product([
            'sku' => 'dasd5',
            'imgPath' => 'http://universe.byu.edu/wp-content/uploads/2015/01/HP4cover.jpg',
            'title' => 'Harry Potter',
            'description' => 'Description of the product in short.',
            'price' => 115
            ]);
        $product->save();
    }
}
