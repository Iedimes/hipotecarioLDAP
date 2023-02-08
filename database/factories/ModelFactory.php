<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'last_login_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Mh::class, static function (Faker\Generator $faker) {
    return [
        'codigo' => $faker->sentence,
        'proyecto' => $faker->sentence,
        'documento' => $faker->sentence,
        'adjudicatario' => $faker->sentence,
        'fecha_ins' => $faker->date(),
        'programa' => $faker->sentence,
        'institucion_acreedora' => $faker->sentence,
        'obs' => $faker->sentence,
        'fecha_reins' => $faker->date(),
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Mh::class, static function (Faker\Generator $faker) {
    return [
        'codigo' => $faker->sentence,
        'proyecto' => $faker->sentence,
        'documento' => $faker->sentence,
        'adjudicatario' => $faker->sentence,
        'fecha_ins' => $faker->date(),
        'institucion_acreedora' => $faker->sentence,
        'obs' => $faker->sentence,
        'fecha_reins' => $faker->date(),
        
        
    ];
});
