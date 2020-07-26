<?php

    date_default_timezone_set('America/Sao_Paulo');
    setlocale(LC_TIME, 'pt_BR', 'pt_BR.uft-8', 'portuguese');

    define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
    define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));
    define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controllers'));
    define('EXCEPTION_PATH', realpath(dirname(__FILE__) . '/../exceptions'));
    define('COMPONENT_PATH', realpath(dirname(__FILE__) . '/../components'));

    require_once(realpath(dirname(__FILE__) . '/database.php'));
    require_once(realpath(dirname(__FILE__) . '/loader.php'));
    require_once(realpath(dirname(__FILE__) . '/utils.php'));
    require_once(realpath(EXCEPTION_PATH . '/AppException.php'));
    require_once(realpath(EXCEPTION_PATH . '/ValidationException.php'));
    require_once(realpath(MODEL_PATH . '/Model.php'));
    require_once(realpath(MODEL_PATH . '/Consulta.php'));

    define('ENV', parse_ini_file(realpath(dirname(__FILE__) . '/../env.ini')));
    define('BASE_API', ENV['baseapi']);
    define('TOKEN', ENV['x-access-token']);

    $baseApi = BASE_API;
    $token = TOKEN;

