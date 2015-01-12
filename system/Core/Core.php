<?php defined('SYSPATH') OR die('No direct script access.');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Core
 *
 * @author Noble74
 */
class Evg_Core {
    const VERSION = '0.1';
    const FILE_SECURITY = '<?php defined(\'SYSPATH\') OR die(\'No direct script access.\');';
    public static $magic_quotes = FALSE;
    public static $safe_mode = FALSE;
    public static $content_type = 'text/html';
    public static $charset = 'win-1251';
    public static $server_name = '';
    public static $base_url = '/';
    public static $index_file = 'index.php';
    public static $config;
}
