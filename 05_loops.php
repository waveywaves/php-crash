<?php

for ($i = 0; $i < 10; $i++) {
    echo $i;
}

while ($i < 10) {
    echo $i;
    $i++;
}

do {
    echo $i;
    $i++;
} while ($i < 10);

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

foreach ($posts as $post) {
    echo $post['title'];
}


?>