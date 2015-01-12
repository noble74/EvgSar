<?php defined('SYSPATH') or die('No direct script access.');

require SYSPATH.'Core/Core'.EXT;

if (is_file(APPPATH.'classes/Evg'.EXT))
{
    require APPPATH.'classes/Evg'.EXT;
}
else
{
    require SYSPATH.'Evg'.EXT;
}

date_default_timezone_set('Asia/Almaty');

setlocale(LC_ALL, 'ru_RU.win-1251');