<?php

namespace Database\Factories;

use App\Models\ImportFive;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImportFiveFactory extends Factory
{
    protected $model = ImportFive::class;

    public function definition()
    {
        return app($this->model)->definition($this->faker);
    }
}
