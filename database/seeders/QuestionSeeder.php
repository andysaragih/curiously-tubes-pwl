<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Subject;
use Illuminate\Support\Facades\Storage;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        $user_ids = User::where('user_role', 'user')->pluck('id')->toArray();
        $subject_ids = Subject::get()->pluck('id')->toArray();
        $questions = [];

        foreach (range(1, 20) as $i) {
            $image_name_with_extension = $faker->image('public/img', 300, 250, null, true);
            $path_parts = pathinfo($image_name_with_extension);

            $image_name = $path_parts['filename'];
            $image_extension = isset($path_parts['extension']) ? $path_parts['extension'] : '';

            $questions[] = [
                'question' => $faker->sentence(),
                'gambar' => $image_name_with_extension,
                'user_id' => $faker->randomElement($user_ids),
                'subject_id' => $faker->randomElement($subject_ids),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = 'Asia/Jakarta'),
                'created_at' => $faker->dateTime($max = 'now', $timezone = 'Asia/Jakarta'),
            ];

            Storage::move("public/img/$image_name_with_extension", "public/posts/$image_name_with_extension");
        }

        DB::table('questions')->insert(array_map(function ($question) use ($image_extension) {
            $question['gambar'] = pathinfo($question['gambar'], PATHINFO_FILENAME) . '.' . $image_extension;
            return $question;
        }, $questions));
    }
}
