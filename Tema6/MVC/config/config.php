<?

//constantes que vamos a usar en toda la aplicación
define ('IMG','./webroot/img/');
define ('CSS','./webroot/css/');
define ('JS','./webroot/js/');

require('./config/confBD.php');

require('./dao/FactoryBD.php');
require('./models/User.php');
require('./dao/UserDAO.php');