<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(5),
            'descripcion' => $this->faker->sentence(20),
            'imagen' => $this->faker->randomElement(['1161a62e-f524-45aa-be25-2071efbb64bf.png','635913c8-dbdf-4152-8256-26dcb7e5656a.png','a33c3d03-58e5-4145-b1c1-7ecd83fdecf7.png','13028fed-0f0b-43a8-b6cb-78044bd2ee7e.jpg','870bff04-0f03-41b6-854d-fe82bdb08f39.jpg','ae3428cb-dcb8-45e2-a8db-4052852566dc.jpg','4977415f-d812-4096-ba04-a6907a0b0427.jpg','a0ced3b5-1a8d-43f2-bbb3-3b1d021194e3.png','d0fac9c8-f351-4e88-a392-360aa25d238b.png']),
            'user_id' => $this->faker->randomElement([1, 2, 3]),
        ];
    }
}
