<?php

use app\User;
use App\Person;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        //create basic admin user
        $faker = Faker::create();

        User::create([
                         'id'=>'1',
                         'nickname' => 'admin',
                         'email' => 'admin@admin.com',
                         'role' => 'admin',
                         'type' => 'trusted',
                         'password' => \Hash::make('admin'),
                         'pic_url' => '/img/pt-default/' . $faker->numberBetween(1, 20) . '.jpg',
                         'twitter' => '@torooprogrammer',
                         'facebook' => 'b.tortuvshin',
                         'preferences' => '{"product_viewed":[],"product_purchased":[],"product_shared":[],"product_categories":[],"my_searches":[]}',
                     ]);
//
//        Person::create([
//                           'first_name' => 'Admin',
//                           'last_name' => 'root',
//                           'birthday' => $faker->dateTimeBetween('-40 years', '-16 years'),
//                           'sex' => 'male',
//                           'home_phone' => $faker->phoneNumber,
//                           'user_id' => 1,
////                           'user'       => [
////                               'nickname'    => 'admin',
////                               'email'       => 'admin@admin.com',
////                               'role'        => 'admin',
////                               'type'        => 'trusted',
////                               'password'    => \Hash::make('admin'),
////                               'pic_url'     => '/img/pt-default/'.$faker->numberBetween(1, 20).'.jpg',
////                               'twitter'     => '@torooprogrammer',
////                               'facebook'    => 'b.tortuvshin',
////                               'preferences' => '{"product_viewed":[],"product_purchased":[],"product_shared":[],"product_categories":[],"my_searches":[]}',
////                           ],
//                       ]);
    }
}
