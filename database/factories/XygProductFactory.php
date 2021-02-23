<?php

namespace Database\Factories;

use App\Models\XygProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class XygProductFactory extends Factory
{
    protected $model = XygProduct::class;

    public function definition()
    {
        return app($this->model)->definition($this->faker);
    }
}
