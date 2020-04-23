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

$router->handle($_SERVER['REQUEST_URI']);
