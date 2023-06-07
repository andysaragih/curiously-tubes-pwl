<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Question;
use Illuminate\Support\Facades\Storage;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $user_ids = User::where('user_role', 'user')->pluck('id')->toArray();
        $question_ids = Question::get()->pluck('id')->toArray();
        $answers = [];

        foreach (range(1, 10) as $i) {
            $image_name_with_extension = $faker->image('public/img', 300, 250, null, true);
            $path_parts = pathinfo($image_name_with_extension);

            $image_name = $path_parts['filename'];
            $image_extension = isset($path_parts['extension']) ? $path_parts['extension'] : '';

            $answers[] = [
                'answer' => $faker->sentence(),
                'gambar' => $image_name_with_extension,
                'user_id' => $faker->randomElement($user_ids),
                'question_id' => $faker->randomElement($question_ids),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = 'Asia/Jakarta'),
                'created_at' => $faker->dateTime($max = 'now', $timezone = 'Asia/Jakarta'),
            ];

            Storage::move("public/img/$image_name_with_extension", "public/posts/$image_name_with_extension");
        }

        DB::table('answers')->insert(array_map(function ($answer) use ($image_extension) {
            $answer['gambar'] = pathinfo($answer['gambar'], PATHINFO_FILENAME) . '.' . $image_extension;
            return $answer;
        }, $answers));
    }
}
