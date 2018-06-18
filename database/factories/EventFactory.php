<?php
$factory->define(App\Event::class, function (Faker\Generator $faker) {
    $sub_id = App\Subject::all()->pluck('id')->toArray();
    $user_id = App\User::all()->whereIn('type',['1','2'])->pluck('id')->toArray();
    return [
        'name' => str_random(10),
        'description' => $faker->realText(200,2),
        'subid' => $faker->randomElement($sub_id),
        'start' => $faker->dateTimeBetween('-5 days', '+5 days'),
        'end' => $faker->dateTimeBetween('+6 days', '+10 days'),
        'creator' => $faker->randomElement($user_id),
        'duration' => rand(10,60),
        'correctmark' => rand(1,5),
        'wrongmark' => rand(-5,0),
        'quedisplay' => '0',
    ];
});