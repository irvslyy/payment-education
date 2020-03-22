<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Siswa;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Siswa::class, function (Faker $faker) {
    return [
        'nama' => $faker->name,
        'nik' => '000221',
        'pict' => 'img-200122.png',
        'kelas' => 'XII TEI 1',
        'jurusan' => 'TEI',
    ];
});
