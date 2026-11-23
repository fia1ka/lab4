<?php

return [
    '~^hello/(.*)$~' => [MainController::class, 'sayHello'],
    '~^$~'           => [MainController::class, 'main'],
];
