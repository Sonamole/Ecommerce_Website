<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        \App\Models\Brand::factory(6)->create();
        \App\Models\Category::factory(6)->create();
        \App\Models\Product::factory(24)->create();
    }
}

// when you call \App\Models\Category::factory(6)->create();, Laravel knows that it should use the CategoryFactory class to generate fake data for the Category model. It follows a convention where the factory class name is derived from the model class name with the suffix "Factory".
// So, for the Category model, Laravel expects to find a factory class named CategoryFactory in the Database\Factories directory.
// When you run php artisan make:factory CategoryFactory --model=Category, Laravel generates the CategoryFactory class for you with a default definition method that specifies how to generate fake data for the Category model. You can then customize this factory class to define specific fake data generation logic for the Category model's attributes.
//If you had given a different name, let's say MyCustomCategoryFactory, you would need to specify the custom factory class when calling the factory() method. You can do this by passing the fully qualified name of the factory class as a second argument to the factory() method.

// Code :
// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Tests\TestCase;
// use App\Models\Category;
// use Database\Factories\MyCustomCategoryFactory;

// class ExampleTest extends TestCase
// {
//     use RefreshDatabase;

//     public function test_example()
//     {
//         Category::factory()->using(MyCustomCategoryFactory::class)->create();
//         // Your test code here
//     }
// }




