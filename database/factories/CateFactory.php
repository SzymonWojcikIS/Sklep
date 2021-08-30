<?php

namespace Database\Factories;

use App\Models\Cate;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cate_name = $this->faker->unique()->words($nb=2,$asText=true);
        $slug = Str::slug($cate_name);
        return [
            'name' => $cate_name,
            'slug' => $slug
        
        ];
    }
}
