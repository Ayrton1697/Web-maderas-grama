<?php

namespace Database\Factories;

use App\Models\Pedido;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pedido::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_name' => $this->faker->name,
            'user_email'=> $this->faker->unique()->safeEmail,
            'user_address' => $this->faker->address
        ];
    }
}
