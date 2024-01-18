<?

//constantes que vamos a usar en toda la aplicación
define ('IMG','./webroot/img/');
define ('CSS','./webroot/css/');
define ('JS','./webroot/js/');
define ('VIEW','./views/');
define('CON', './controllers/');

require('./core/funciones.php');

require('./config/confBD.php');

require('./dao/FactoryBD.php');
require('./models/User.php');
require('./models/Cita.php');
require('./dao/UserDAO.php');
require('./dao/CitaDAO.php');