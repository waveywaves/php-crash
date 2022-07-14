<?php

$age = 35;

if ($age >= 18) {
    echo 'You are old enough to vote!';
} else {
    echo 'You are not old enough to vote.';
}

$time = date('H');
if ($time < '12') {
    echo 'Have a good day!';
} elseif ($time < '17') {
    echo 'Have a good afternoon!';
} else {
    echo 'Have a good night!';
}
print "${time}";


$posts = [
    [
        'title' => 'My first post',
        'body' => 'This is my first post'
    ],
    [
        'title' => 'My second post',
        'body' => 'This is my second post'
    ]
];

echo !empty($posts) ? print_r($posts) : 'No posts yet';
$firstPost = $posts[0] ?? null;

switch($age) {
    case 18:
        echo 'You are 18 years old.';
        break;
    case 19:
        echo 'You are 19 years old.';
        break;
    default:
        echo 'You are not 18 or 19 years old.';
        break;
}




?>