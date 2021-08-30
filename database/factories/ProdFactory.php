<?php

namespace Database\Factories;

use App\Models\Prod;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProdFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Prod::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $prod_name = $this->faker->unique()->words($nb=2,$asText=true);
        $slug = Str::slug($prod_name);
        return [
            'name' => $prod_name,
            'slug' => $slug,
            'short_description' => $this->faker->text(200),
            'description' => $this->faker->text(200),
            'regular_price' => $this->faker->numberBetween(10,500),
            'SKU' => 'DIGI' .$this->faker->unique()->numberBetween(100,500),
            
            'quantity' => $this->faker->numberBetween(100,200),
            'image' => 'digital_' . $this->faker->unique()->numberBetween(1,22).'.jpg',
            'cate_id' => $this->faker->numberBetween(1,5)

        ];
    }
}
