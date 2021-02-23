<?php

namespace App\Models;

use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Validation\Rule;
use Redbastie\Larawire\Traits\FillsColumns;

class CrossWay extends Model
{
    use HasFactory, FillsColumns;

    public function migration(Blueprint $table)
    {
        $table->id();
        $table->string('xyg_code')->nullable()->index();
        $table->string('fps_code')->nullable()->index();
        $table->string('elsie_code')->nullable()->index();
        $table->string('graal_code')->nullable()->index();
        $table->string('titile')->nullable()->index();
        $table->string('description')->nullable()->index();

        $table->string('prag_id')->nullable()->index();
        $table->timestamps();
    }

    public function definition(Generator $faker): array
    {
        return [
        ];
    }

    public function rules(): array
    {
        return [
            'xyg_code' => ['nullable', 'string',],
            'fps_code' => ['nullable', 'string',],
            'elsie_code' => ['nullable', 'string',],
            'graal_code' => ['nullable', 'string',],
            'title' => ['nullable', 'string',],
            'description' => ['nullable', 'string',],
            'prag_id' => ['nullable', 'string',],
        ];
    }
}
