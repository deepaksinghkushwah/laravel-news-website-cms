<?php

namespace Database\Factories;

use App\Models\Page;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $paras = fake()->paragraphs(2);
        $str = '';
        foreach($paras as $row){
            $str .= '<p>'.$row.'</p>';
        }
        return [
            'user_id' => User::all()->random()->id,
            'page_id' => Page::all()->random()->id,
            'content' => $str
        ];
    }
}
