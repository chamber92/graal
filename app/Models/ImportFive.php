<?php

namespace App\Models;

use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Validation\Rule;
use Redbastie\Larawire\Traits\FillsColumns;

class ImportFive extends Model
{
    use HasFactory, FillsColumns;

    public function migration(Blueprint $table)
    {
        $table->id();
        $table->string('title')->nullable()->index();
        $table->string('xyg_code')->nullable()->index();
        $table->string('euro_code')->nullable()->index();
        $table->string('nags_code')->nullable()->index();

        $table->string('elsie_code')->nullable()->index();
        $table->string('elsie_price')->nullable()->index();
        $table->string('elsie_qty')->nullable()->index();

        $table->string('fps_code')->nullable()->index();
        $table->string('fps_price')->nullable()->index();
        $table->string('fps_qty')->nullable()->index();

        $table->string('graal_code')->nullable()->index();
        $table->string('graal_price')->nullable()->index();
        $table->string('graal_qty')->nullable()->index();


        $table->timestamps();
    }

    public function definition(Generator $faker)
    {
        return [
        ];
    }

    public function rules()
    {
        return [
            'title' => ['nullable', 'string',],
            'xyg_code' => ['nullable', 'string',],
            'euro_code' => ['nullable', 'string',],
            'nags_code' => ['nullable', 'string',],

            'elsie_code' => ['nullable', 'string',],
            'elsie_price' => ['nullable', 'string',],
            'elsie_qty' => ['nullable', 'string',],

            'fps_code' => ['nullable', 'string',],
            'fps_price' => ['nullable', 'string',],
            'fps_qty' => ['nullable', 'string',],

            'graal_code' => ['nullable', 'string',],
            'graal_price' => ['nullable', 'string',],
            'graal_qty' => ['nullable', 'string',],






        ];
    }
}
