<?php

namespace Database\Factories;

use App\Models\GraalWay;
use Illuminate\Database\Eloquent\Factories\Factory;

class GraalWayFactory extends Factory
{
    protected $model = GraalWay::class;

    public function definition()
    {
        return app($this->model)->definition($this->faker);
    }
}
