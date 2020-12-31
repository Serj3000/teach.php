<?php

include 'Debuger/Dev.php';
include 'COOKIE/login.php';
//include 'COOKIE/cookies.php';


echo '<br>======================================================================<br>';
//[HTTP_COOKIE] => _ga=GA1.2.1877048947.1587123788; __unam=6f77879-17187f31725-30874d83-12
//echo 'Привет, ' . htmlspecialchars($_COOKIE["TestCookie"]) . '!';

include 'GET/get.php';
include 'POST/post.php';
include 'FILES/filesClass.php';

include 'UML/bunch.php';

include 'Extract/extract.php';

include 'Function/function.php';

include 'Classes/StaticClass.php';

include 'Classes/Control.php';

echo '<br>-------------------------<br>';

//include 'API/apiOpenWether.php';
// include 'Curl/curl.php';
// include 'Classes/Game.php';
include 'Сlosures/closures.php';
include 'Callback/pregReplaceCallbackArray.php';
include 'Switch/switch.php';
include 'Foreach/foreach.php';


include 'Spl_autoload_register/spl_autoload_register.php';
include 'Str_replace/str_replace.php';
include 'Trim/trim.php';
include 'Preg_match/preg_match.php';
include 'Ucfirst/ucfirst.php';
include 'Implode/implode.php';
include 'Explode/explode.php';
include 'Str_split/str_split.php';


include 'Classes/Doggy.php';
include 'Classes/iterate.php';

// echo '<br>-----------------Constant--------------------<br>';
include 'Classes/Constants.php';
use Classes\Constants;
echo Constants::CLASSCONST;
$clasconst=new Constants();
echo $clasconst->brem();

//include 'Interfaces/someInterface.php';
include 'Interfaces/interfaces.php';
include 'Abstract/abstract.php';

// echo '___________Mail________________________';
include 'Mail/forma_email.php';

echo '<br>xxxxxxxxxxxxxxxxxxxxxxxxxxx<b> Работа с файлами </b>xxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>';
// echo '___________File()________________________<br>';
include 'file/file.php';

// echo '___________ReadFile()________________________<br>';
include 'file/readfile.php';

// echo '___________fOpen()________________________<br>';
include 'fopen/fopen.php';

// echo '___________FileOpen()________________________<br>';
include 'FILES/fileOpen.php';

echo '<br>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx<br>';

// echo '___________Define________________________<br>';
include 'Define/constant.php';

echo '<br>_____________________get_defined_constants()________________________<br>';
// print_r(get_defined_constants(true));['APPCONST']
$arr_const=get_defined_constants(true);
print_r($arr_const['user']);

echo '<br>_____________________get_defined_vars()________________________<br>';
$arr_var = get_defined_vars(false);
echo '<br>var=<br>';
print_r($arr_var);

echo '<br>_____________________get_defined_functions()________________________<br>';
$arr_func = get_defined_functions(false);
echo '<br>func=<br>';
print_r($arr_func['user']);



include 'Parse_ini_file/ini/ini.php';

include 'Parse_ini_file/csv/csv.php';

include 'Parse_ini_file/json/json.php';