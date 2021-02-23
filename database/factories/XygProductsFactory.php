<?php

namespace Database\Factories;

use App\Models\XygProducts;
use Illuminate\Database\Eloquent\Factories\Factory;

class XygProductsFactory extends Factory
{
    protected $model = XygProducts::class;

    public function definition()
    {
        return app($this->model)->definition($this->faker);
    }
}
