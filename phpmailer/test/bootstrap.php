<?php
require_once 'vendor/autoload.html';
spl_autoload_register(function ($class) {
    require_once strtr($class, '\\_', '//').'.html';
});
