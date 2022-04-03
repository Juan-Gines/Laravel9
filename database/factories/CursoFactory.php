<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model=Curso::class;

    public function definition()
    {
        $name=$this->faker->sentence();//al guardar en una variable logramos que el slug y el name sean identicos
        return [
            'name'=>$name,
            'slug'=> Str::slug($name,'-'),
            'descripcion'=>$this->faker->paragraph(),
            'categoria'=>$this->faker->randomElement(['Desarrollo web','Diseño web'])
        ];
    }
}
