<?php

namespace App\Models;

use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Validation\Rule;
use Redbastie\Larawire\Traits\FillsColumns;

class FpsProduct extends Model
{
    use HasFactory, FillsColumns;

    public function migration(Blueprint $table)
    {
        $table->id();
        $table->string('name')->unique();
        $table->unsignedBigInteger('glasstype_id')->nullable()->index();
        $table->string('manufacturer')->nullable()->index();
        $table->string('quality')->nullable()->index();
        $table->string('gs_code')->nullable()->index();
        $table->timestamps();
    }

    public function definition(Generator $faker): array
    {
        return [
            'name' => $faker->unique()->title,
            'gs_code' => implode('', ['GS', mt_rand(1000, 9999), 'D', mt_rand(10, 200)]),
        ];
    }

    public function rules(): array
    {
        return [
            'name' => ['required', Rule::unique('fps_products')->ignore($this->id)],
            'gs_code' => ['required', Rule::unique('fps_products')->ignore($this->id)],
            'manufacturer' => ['nullable', 'string'],
            'quality' => ['nullable', 'string'],

        ];
    }
}
