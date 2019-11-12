<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Tool as Tool;
$factory->define(Tool::class, function (Faker $faker) {
    return [
        'title' => 'Notion',
        'link'=>'google.com',
        'description'=>'All in one tool to organize teams and ideas. Write, plan, collaborate, and get organized.',
        'tags'=>json_encode(["organization","planning", "collaboration", "writing", "calendar"])
    ];
});
