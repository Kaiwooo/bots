<?php

// лог для отладки (очень помогает на Render)
file_put_contents(
    __DIR__ . '/render.log',
    date('c') . " " . file_get_contents('php://input') . PHP_EOL,
    FILE_APPEND
);

// весь входящий трафик отдаём в itr.php
require __DIR__ . '/itr.php';
