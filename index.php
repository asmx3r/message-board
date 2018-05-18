/*
 * main board starter file.
 */

 <html>
 <?php
   //--- mini start
    // DIRECTORY_SEPARATOR adds a slash to the end of the path
    define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
    // set a constant that holds the project's "application" folder, like "/var/www/application".
    define('CORE', ROOT . 'core' . DIRECTORY_SEPARATOR);
    define('CONTROLLERS', ROOT . 'controllers' . DIRECTORY_SEPARATOR);
    define('VIEWS', ROOT . 'views' . DIRECTORY_SEPARATOR);
    define('MODELS', ROOT . 'models' . DIRECTORY_SEPARATOR);
    define('CSS', ROOT . 'css' . DIRECTORY_SEPARATOR);


    // load application class
    require CORE . 'core.php';
    require VIEWS . 'lenta.php';
    require CSS . 'screen.css';

    // start the application
    $app = new Lenta();

    // --- mini end
 ?>
</html>
