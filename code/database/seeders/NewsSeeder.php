<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Вызов этого метода через: php artisan db:seed --class=NewsSeeder

        //DB::table('news')->insert($this->getData());
    }

    public function getData()
    {
        $faker = Factory::create('ru_RU');
        $data = [
            [
                'category_id' => 1,
                'title' => 'Hockey',
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => 'weqf7YwMwPk9nmhSvb2G8MXSr6Q83cZ3RmapRBoG.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'title' => 'Football',
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => 'ZAnYxb0ZdBD0vhmW6AR4NbLCmhpLnSDEZ7DEzR7x.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'title' => 'Volleyball',
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => 'FghtmMOCG7h9zz383j2hvYYnTgqSIfyNXPyeXdfk.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 1,
                'title' => 'Basketball',
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => 'LzV0UXTk75JHmP7CZdtPbQoAe7getJ1f6sa6PxrO.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'title' => 'Fire Theater',
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => 'wuM4fJhG1Vda9ThT9n8JL6ytiy12EwQPaB5qwVHF.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'title' => 'Opera',
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => '2wr2Dbp5DB4PtyO48vocDFwLf0p4s1eGhYTlLtJx.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'title' => 'Ballet',
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => 'uuSh0hjTXyMQ2cbElY07eDQX7Mp1lFGbN2IogBdW.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 2,
                'title' => 'Shadow Theater',
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => 'fsPUJKm1yKQJiWBR8n97d2gpUDSu5YKKpWizn8lM.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'title' => 'Paella',
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => 'whzeofZJYwQWJ8wLkG2w46uqc9mbo0OZvZNff49C.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'title' => 'Bunny chow',
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => 'igCqovz1HVB3TmDu6LO1KA6KBeYZ1sKaqzqaQlNB.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'title' => 'Pastilla',
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => 'VHLPnlSvPB3400rvsZjPNAE927b2HMceMQvWRAG0.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 3,
                'title' => 'Tandoori chickens',
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => 'jEwYsNOelM3tR9joFKFysh8vQsZLBdm1oNQu2mX4.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'title' => 'Meeting in the State Duma',
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => 'iMw06vX8PSSodLh5DzG6dzkhe1hYa8NHTq6GzmBS.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'title' => "Putin's press conference",
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => 'tDRYRHCItr8YwIskYmij42fSL6EiW2L0eFVxbGlS.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'title' => "Mishustin 's appeal",
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => '2sZd5f2KsWvSO6Z3YSdVQJdlQ899bBaTkqS92yCb.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 4,
                'title' => 'Information security',
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => 'J3InyLkG2zTiZndYZbhfcJHMn2SJewpOvVi89QiT.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 5,
                'title' => 'Dota 2',
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => '1C2YoNo6M0QZ0CkubYQhb72P5ONp9Sx3rZ7Ktgmh.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 5,
                'title' => 'Counter strike',
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => 'EhRy53NitVcT2JZNq3BjgSAM6S7n4aYpd3Epgb99.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 5,
                'title' => 'Warface',
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => 'eRFj54nx9MbmQzNkpGz7s8fD7rvLyBGvu9S2AC6y.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category_id' => 5,
                'title' => 'World of Tanks',
                'spoiler' => $faker->text(rand(100, 150)),
                'image' => 'eYmSmVQ95TVt1Z8ZSF5xT1rZt8NXZrPG8IlMoLRi.jpg',
                'description' => $faker->text(rand(1000, 3000)),
                'autor' => $faker->userName(),
                'status' => 'PUBLISHED',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];
        return $data;
    }
}
