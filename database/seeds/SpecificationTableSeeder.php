<?php

use App\Specification;
use Illuminate\Database\Seeder;

class SpecificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1; $i <= 100 ; $i++) { 
    		Specification::create([
	        	'product_id' => $i,
	        	'Color' => 'Midnight Black',
	        	'Network' => 'GSM / HSPA / LTE',
	        	'Dimensions' => '161.9 x 76.4 x 8.8 mm (6.37 x 3.01 x 0.35 in)',
	        	'Weight' => '201 g (7.09 oz)',
	        	'Build' => 'Front/back glass (Gorilla Glass 5), aluminum frame',
	        	'Sim' => 'Hybrid Dual SIM (Nano-SIM, dual stand-by)',
	        	'Display' => 'Super AMOLED capacitive touchscreen, 16M colors',
	        	'Size' => '6.4 inches, 103.2 cm2 (~83.4% screen-to-body ratio)',
	        	'Resolution' => '1440 x 2960 pixels, 18.5:9 ratio (~516 ppi density)',
	        	'Multitouch' => 'Yes',
	        	'Platform' => 'Android 8.1 (Oreo)',
	        	'Chipset' => 'Exynos 9810 Octa (10 nm)',
	        	'CPU' => 'Octa-core (4x2.7 GHz Mongoose M3 & 4x1.8 GHz Cortex-A55)',
	        	'GPU' => 'Mali-G72 MP18',
	        	'Memory' => 'microSD, up to 512 GB (uses SIM 2 slot)',
	        	'Internal' => '128 GB, 6 GB RAM',
	        	'Main_Camera' => '12 MP, f/1.5-2.4, 26mm (wide), 1/2.55", 1.4µm, dual pixel PDAF, OIS',
        	]);
    	}
        
    }
}
