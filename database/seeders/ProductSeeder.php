<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
        $seedProducts = [
            [
                'name'=>'Classic 10696',
                'description'=>'LEGO Classic Medium Creative Brick Box',
                'price'=>'39',
                'company'=>"Lego",
            ],
            [
                'name'=>"Denim Women's Jacket",
                'description'=>"The 1964 Denim Company Women's Organic Crop Jacket - Bay Wash",
                'price'=>'30',
                'company'=>'Denim',
            ],
            [
                'name'=>"Blacksmith Men's Boots W",
                'description'=>"Blacksmith Men's Steel Cap Work Boots - Sparky Wheat",
                'price'=>'59',
                'company'=>'Blacksmith',
            ],
            [
                'name'=>'Disney 76832',
                'description'=>	"LEGO Disney and Pixar's Lightyear XL-15 Spaceship",
                'price'=>'69',
                'company'=>'Lego',
            ],
            [
                'name'=>"Blacksmith Men's Shorts N",
                'description'=>	"Blacksmith Men's Cargo Work Shorts - Navy",
                'price'=>'28',
                'company'=>'Blacksmith',
            ],
            [
                'name'=>"Roomba R670000",
                'description'=>	"iRobot Roomba 670 Robot Vacuum Black",
                'price'=>'399',
                'company'=>'iRobot',
            ],
            [
                'name'=>"Philips EP2231/40",
                'description'=>	"Philips LatteGo Fully Automatic Coffee Machine",
                'price'=>'899',
                'company'=>'Philips',
            ],
            [
                'name'=>"Thrustmaster PS4 T80",
                'description'=>	"Thrustmaster PS4 T80 Ferrari GTB Racing Wheel",
                'price'=>'179',
                'company'=>'Thrustmaster',
            ],
            [
                'name'=>"Blacksmith Men's Shorts K",
                'description'=>	"Blacksmith Men's Cargo Work Shorts - Khaki",
                'price'=>'28',
                'company'=>'Blacksmith',
            ],
            [
                'name'=>"Blacksmith Women's Boots W",
                'description'=>	"Blacksmith Women's Steel Cap Boots - Wheat",
                'price'=>'49',
                'company'=>'Blacksmith',
            ],
        ];
        foreach ($seedProducts as $product){

            $company = Company::whereName($product['company'])->first();

            if($company != null){
                Product::create([
                    'name'=>$product['name'],
                    'description'=>$product['description'],
                    'price'=>$product['price'],
//                    'company'=>$product['company'],
                    'company_id'=>$company->id,
                ]);
            }

        }
    }
}
