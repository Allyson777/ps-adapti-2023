<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class AlunoFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'nome' => $this->faker->word(),
      'descricao' => $this->faker->text(150),
      'contratado' => $this->faker->boolean(),
      'imagem' => $this->faker->imageUrl(),
      'cursos_id' => (Curso::all()->random(1)->first())->id,

    ];
  }
}
