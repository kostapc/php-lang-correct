<?php
/**
 * User: kostapc
 * Date: 12/9/2015
 * Time: 4:08 AM
 */

define('CODE', realpath(__DIR__.'/../code/'));

echo "code: ".CODE." \n";

require (CODE.'/UTF8.php');
require (CODE.'/ReflectionTypeHint.php');
require (CODE.'/LangCorrect.php');

$lang = new Text_LangCorrect();
$source = "yt d njq hfccrkflrt yf,hfk ghtlkj;tybt";
$result = $lang->parse($source, Text_LangCorrect::KEYBOARD_LAYOUT);

echo "source: $source \n";
echo "result: $result \n";