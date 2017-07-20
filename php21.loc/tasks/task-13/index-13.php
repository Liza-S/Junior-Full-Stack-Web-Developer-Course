<?

define('READ', 1 << 0);
echo decbin(READ), '<br>';

define('CREATE', 1 << 1);
echo decbin(CREATE), '<br>';

define('EDIT', 1 << 2);
echo decbin(EDIT), '<br>';

define('DELETE', 1 << 3);
echo decbin(DELETE), '<br>';

define('ALL', READ | CREATE | EDIT | DELETE);
echo decbin(ALL), '<br>';

$error = E_ALL & ~E_DEPRECATED;
error_reporting($error);
echo decbin($error), '<br>';

?>