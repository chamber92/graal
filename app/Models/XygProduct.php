<?php

namespace App\Models;

use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Validation\Rule;
use Redbastie\Larawire\Traits\FillsColumns;

class XygProduct extends Model
{
    use HasFactory, FillsColumns;

    public function migration(Blueprint $table)
    {
        $table->id();
        $table->string('name')->unique();
        $table->string('source_code')->nullable()->index();
        $table->string('euro_code')->nullable()->index();
        $table->timestamps();
    }

    public function definition(Generator $faker): array
    {
        return [
            'name' => $faker->unique()->title,
            'source_code' => $faker->unique()->uuid,
            'euro_code' => $faker->unique()->uuid,
        ];
    }

    public function rules(): array
    {
        return [
            'name' => ['required', Rule::unique('xyg_products')->ignore($this->id)],
            'source_code' => ['required', Rule::unique('xyg_products')->ignore($this->id)],
            'euro_code' => ['required', Rule::unique('xyg_products')->ignore($this->id)],
        ];
    }
}
