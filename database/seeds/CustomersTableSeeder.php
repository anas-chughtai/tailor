<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = array(
            array(
                "name" => "Anas Chughtai",
                "phone" => "03086170160",
                "gender" => "Male"
            ),
            array(
                "name" => "Rashid",
                "phone" => "03222464082",
                "gender" => "Male"
            ),
        );
        foreach ($customers as $customer) {
            \App\Customer::create($customer);
        }
    }
}
