<?php

namespace App\Models;

use Faker\Generator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Redbastie\Larawire\Traits\FillsColumns;

class User extends Authenticatable
{
    use HasFactory, Notifiable, FillsColumns;

    protected $hidden = ['password', 'remember_token'];
    protected $casts = ['email_verified_at' => 'datetime'];

    protected static function booted()
    {
        static::saving(function (User $user) {
            if ($user->password && strlen($user->password) < 60 && strpos($user->password, '$2y$') !== 0) {
                $user->password = bcrypt($user->password);
            }
        });
    }

    public function migration(Blueprint $table)
    {
        $table->id();
        $table->string('name')->index();
        $table->string('email')->unique();
        $table->timestamp('email_verified_at')->nullable();
        $table->string('password');
        $table->rememberToken();
        $table->string('timezone')->nullable();
        $table->timestamps();
    }

    public function definition(Generator $faker): array
    {
        return [
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' => now(),
//            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'timezone' => $faker->timezone,
        ];
    }

    public function rules(): array
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email', Rule::unique('users')->ignore($this->id)],
            'password' => [$this->id ? 'nullable' : 'required', 'confirmed'],
        ];
    }
}
