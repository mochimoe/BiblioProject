<?php

$router = $di->getRouter();

// Define your routes here
$router->addGet(
    "/users",
    [
        "controller"        => "user",
        "action"            => "read"
    ]
);
$router->addGet(
    "/posts",
    [
        "controller"        => "posts",
        "action"            => "create"
    ]
);

$router->handle($_SERVER['REQUEST_URI']);
