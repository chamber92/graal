<?php

namespace Database\Factories;

use App\Models\CrossWay;
use Illuminate\Database\Eloquent\Factories\Factory;

class CrossWayFactory extends Factory
{
    protected $model = CrossWay::class;

    public function definition()
    {
        return app($this->model)->definition($this->faker);
    }
}
