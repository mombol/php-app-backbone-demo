<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use App\Env;

// Load switch configuration
require __DIR__ . '/Config/switch.php';

// Eloquent ORM

$capsule = new Capsule;

$capsule->addConnection(require __DIR__.'/Config/database.'.(Env::get()).'.php');

$capsule->bootEloquent();

// Load Http routes
require __DIR__ . '/Http/routes.php';