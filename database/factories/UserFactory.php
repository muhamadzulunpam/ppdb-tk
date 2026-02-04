<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str; // Import Str facade

class UserFactory extends Factory
{
    /**
     * Nama model yang digunakan oleh factory.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Definisikan model factory.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
        ];
    }
}
