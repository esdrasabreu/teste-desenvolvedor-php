<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'NumeroPedido'=>$this->faker->randomNumber(),
            'DtPedido'=>$this->faker->dateTime(),
            'Status'=>'Pago',
            'ProdutoId'=>'1',
            'ClienteId'=>'1'
        ];
    }
}
