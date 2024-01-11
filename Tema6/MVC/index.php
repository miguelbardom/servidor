<?php

require('./config/config.php');

print_r(UserDAO::findAll());

print_r(UserDAO::findById('0'));
$usuario = new User('2',sha1('lucia'),'lucia','2024-01-11','usuario');
UserDAO::insert($usuario);