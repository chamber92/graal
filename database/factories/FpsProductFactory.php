<?php

namespace Database\Factories;

use App\Models\FpsProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class FpsProductFactory extends Factory
{
    protected $model = FpsProduct::class;

    public function definition()
    {
        return app($this->model)->definition($this->faker);
    }
}
