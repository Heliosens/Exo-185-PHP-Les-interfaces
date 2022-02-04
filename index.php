<?php

require 'classes/user.php';

$user = new user();

$user->getRequest(10);

echo $user->parseRequest() . "<br>";

echo user::MAX_INSTANCES;

