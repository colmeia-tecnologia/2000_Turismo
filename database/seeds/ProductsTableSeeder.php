<?php

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductSubcategory;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ProductCategory::class, 3)->create()->each(function($category) {
            $category->subcategories()->saveMany(
                factory(ProductSubcategory::class, 3)->make()
            )->each(function($subcategory){
                $subcategory->products()->saveMany(
                    factory(Product::class, 3)->make(['product_category_id' => $subcategory->product_category_id])
                );
            });
        });
    }
}
