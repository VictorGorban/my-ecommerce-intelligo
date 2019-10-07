<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

//namespace\AdminTableSeeder::class;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(AdminTableSeeder::class);
//        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
//        $this->call(AddressesTableSeeder::class);
//        $this->call(ProductsTableSeeder::class);
//        $this->call(ProductsDetailTableSeeder::class);
//        $this->call(OrdersTableSeeder::class);
//        // $this->call(ProductsRatesSeeder::class);
//         $this->call(LogsTableSeeder::class);
//        // $this->call(CommentsTableSeeder::class);
        $this->call(CompanyTableSeeder::class);
        $this->call(CompanyFeaturesSeeder::class);

        Model::reguard();
    }
}
