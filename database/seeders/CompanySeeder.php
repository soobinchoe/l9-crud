<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $seedCompanies = [
            [
                'id'=>'10',
                'name'=>'Blacksmith',
                'email'=>'blacksmith@example.com',
                'address'=>'33 Smithy Lane, Ballarat, VIC',
                'country_code'=>'AUS',
            ],
            [
                'id'=>'11',
                'name'=>'Lego',
                'email'=>'Lego@example.com',
                'address'=>'876 Brick Block, Oslo',
                'country_code'=>'NOR',
            ],
            [
                'id'=>'13',
                'name'=>'Denim',
                'email'=>'Denim@example.com',
                'address'=>'501 Blue Avenue, San Francisco, CA',
                'country_code'=>'USA',
            ],
            [
                'id'=>'15',
                'name'=>'Thrustmaster',
                'email'=>'Thrustmaster@example.com',
                'address'=>'777 Control Drive, Sydney, NSW',
                'country_code'=>'AUS',
            ],
            [
                'id'=>'20',
                'name'=>'iRobot',
                'email'=>'iRobot@example.com',
                'address'=>'88 Vacuum Bend, Dublin',
                'country_code'=>'IRE',
            ],
        ];
        foreach ($seedCompanies as $company){
            Company::create($company);
        }
    }
}
