<?php

use App\Product;
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

    	// First Product
        for ($i=1; $i <= 10 ; $i++) { 
        	Product::create([
        		'category_id' => '1',
        		'name' => 'Apple ' . $i,
        		'slug' => 'apple-' . $i,
        		'present_price' => [300, 200, 400][array_rand([300, 200, 400])],
        		'previous_price' => [500, 600, 800][array_rand([500, 600, 800])],
        		'description' => 'Lorem ipsum dolor sit amet, consecteturadipisicing elit. Quisquam perspiciatis accusamus veniam, blanditiis aut eius amet fugiat illo commodi adipisci quasi deleniti nemo, dolorum eos perferendis provident reprehenderit voluptatum minima.',
        	]);
        }


        // Second Product
        for ($i=1; $i <= 10 ; $i++) { 
        	Product::create([
        		'category_id' => '2',
        		'name' => 'Samsung ' . $i,
        		'slug' => 'samsung-' . $i,
        		'present_price' => [300, 200, 400][array_rand([300, 200, 400])],
        		'previous_price' => [500, 600, 800][array_rand([500, 600, 800])],
        		'description' => 'Lorem ipsum dolor sit amet, consecteturadipisicing elit. Quisquam perspiciatis accusamus veniam, blanditiis aut eius amet fugiat illo commodi adipisci quasi deleniti nemo, dolorum eos perferendis provident reprehenderit voluptatum minima.',
        	]);
        }



        // Third Product
        for ($i=1; $i <= 10 ; $i++) { 
        	Product::create([
        		'category_id' => '3',
        		'name' => 'Xiaomi ' . $i,
        		'slug' => 'xiaomi-' . $i,
        		'present_price' => [300, 200, 400][array_rand([300, 200, 400])],
        		'previous_price' => [500, 600, 800][array_rand([500, 600, 800])],
        		'description' => 'Lorem ipsum dolor sit amet, consecteturadipisicing elit. Quisquam perspiciatis accusamus veniam, blanditiis aut eius amet fugiat illo commodi adipisci quasi deleniti nemo, dolorum eos perferendis provident reprehenderit voluptatum minima.',
        	]);
        }


        // Fourth Product
        for ($i=1; $i <= 10 ; $i++) { 
        	Product::create([
        		'category_id' => '4',
        		'name' => 'Oppo ' . $i,
        		'slug' => 'oppo-' . $i,
        		'present_price' => [300, 200, 400][array_rand([300, 200, 400])],
        		'previous_price' => [500, 600, 800][array_rand([500, 600, 800])],
        		'description' => 'Lorem ipsum dolor sit amet, consecteturadipisicing elit. Quisquam perspiciatis accusamus veniam, blanditiis aut eius amet fugiat illo commodi adipisci quasi deleniti nemo, dolorum eos perferendis provident reprehenderit voluptatum minima.',
        	]);
        }



        // Five Product
        for ($i=1; $i <= 10 ; $i++) { 
        	Product::create([
        		'category_id' => '5',
        		'name' => 'Symphony ' . $i,
        		'slug' => 'symphony-' . $i,
        		'present_price' => [300, 200, 400][array_rand([300, 200, 400])],
        		'previous_price' => [500, 600, 800][array_rand([500, 600, 800])],
        		'description' => 'Lorem ipsum dolor sit amet, consecteturadipisicing elit. Quisquam perspiciatis accusamus veniam, blanditiis aut eius amet fugiat illo commodi adipisci quasi deleniti nemo, dolorum eos perferendis provident reprehenderit voluptatum minima.',
        	]);
        }



        // Sixth Product
        for ($i=1; $i <= 10 ; $i++) { 
        	Product::create([
        		'category_id' => '6',
        		'name' => 'Nokia ' . $i,
        		'slug' => 'nokia-' . $i,
        		'present_price' => [300, 200, 400][array_rand([300, 200, 400])],
        		'previous_price' => [500, 600, 800][array_rand([500, 600, 800])],
        		'description' => 'Lorem ipsum dolor sit amet, consecteturadipisicing elit. Quisquam perspiciatis accusamus veniam, blanditiis aut eius amet fugiat illo commodi adipisci quasi deleniti nemo, dolorum eos perferendis provident reprehenderit voluptatum minima.',
        	]);
        }



        // Seventh Product
        for ($i=1; $i <= 10 ; $i++) { 
        	Product::create([
        		'category_id' => '7',
        		'name' => 'Huawei ' . $i,
        		'slug' => 'huawei-' . $i,
        		'present_price' => [300, 200, 400][array_rand([300, 200, 400])],
        		'previous_price' => [500, 600, 800][array_rand([500, 600, 800])],
        		'description' => 'Lorem ipsum dolor sit amet, consecteturadipisicing elit. Quisquam perspiciatis accusamus veniam, blanditiis aut eius amet fugiat illo commodi adipisci quasi deleniti nemo, dolorum eos perferendis provident reprehenderit voluptatum minima.',
        	]);
        }



        // Eight Product
        for ($i=1; $i <= 10 ; $i++) { 
        	Product::create([
        		'category_id' => '8',
        		'name' => 'Vivo ' . $i,
        		'slug' => 'vivo-' . $i,
        		'present_price' => [300, 200, 400][array_rand([300, 200, 400])],
        		'previous_price' => [500, 600, 800][array_rand([500, 600, 800])],
        		'description' => 'Lorem ipsum dolor sit amet, consecteturadipisicing elit. Quisquam perspiciatis accusamus veniam, blanditiis aut eius amet fugiat illo commodi adipisci quasi deleniti nemo, dolorum eos perferendis provident reprehenderit voluptatum minima.',
        	]);
        }



        // Ninth Product
        for ($i=1; $i <= 10 ; $i++) { 
        	Product::create([
        		'category_id' => '9',
        		'name' => 'Dialog ' . $i,
        		'slug' => 'dialog-' . $i,
        		'present_price' => [300, 200, 400][array_rand([300, 200, 400])],
        		'previous_price' => [500, 600, 800][array_rand([500, 600, 800])],
        		'description' => 'Lorem ipsum dolor sit amet, consecteturadipisicing elit. Quisquam perspiciatis accusamus veniam, blanditiis aut eius amet fugiat illo commodi adipisci quasi deleniti nemo, dolorum eos perferendis provident reprehenderit voluptatum minima.',
        	]);
        }



        // Ten Product
        for ($i=1; $i <= 10 ; $i++) { 
        	Product::create([
        		'category_id' => '10',
        		'name' => 'Blackberry ' . $i,
        		'slug' => 'blackberry-' . $i,
        		'present_price' => [300, 200, 400][array_rand([300, 200, 400])],
        		'previous_price' => [500, 600, 800][array_rand([500, 600, 800])],
        		'description' => 'Lorem ipsum dolor sit amet, consecteturadipisicing elit. Quisquam perspiciatis accusamus veniam, blanditiis aut eius amet fugiat illo commodi adipisci quasi deleniti nemo, dolorum eos perferendis provident reprehenderit voluptatum minima.',
        	]);
        }





    }
}
