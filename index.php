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

//include 'Interfaces/someInterface.php';
include 'Interfaces/interfaces.php';
include 'Abstract/abstract.php';