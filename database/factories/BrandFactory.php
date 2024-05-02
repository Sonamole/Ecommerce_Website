<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brand_name=$this->faker->unique()->words($nb=2,$asText=true);// generates a unique set of two words using the Faker library. $nb=2 specifies that it should generate two words, and $asText=true indicates that the words should be returned as a single string.
        $slug=Str::slug($brand_name);// generates a slug from the generated brand name. It uses Laravel's Str::slug() method to convert the brand name into a URL-friendly slug format. This method converts spaces and special characters into dashes.
        return [
            'name'=>Str::title($brand_name), //Str::title() is a Laravel helper method that capitalizes the first letter of each word in a given string. ensure that the generated brand name has its first letter capitalized in each word, creating a more standardized and visually appealing format for the brand names in the fake data.
            'slug'=>$slug,
            'image'=>$this->faker->numberBetween(1,6).'.jpg' //generates a random image file name. It uses Faker's numberBetween() method to generate a random number between 1 and 6, which is then concatenated with '.jpg' to form the image file name.


        ];
    }
}
