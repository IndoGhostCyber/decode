<?php
error_reporting(E_ALL ^ E_WARNING);
#date_default_timezone_set('Asia/Jakarta');
system("clear");
 $var_0 = "\033[0"."m".PHP_EOL;
 $var_1 = "\t";
 $var_2 = "\r";
//warna
$var_3  ="\033[34m";  $var_4  ="\033[36m"; $var_5  ="\033[92m";
$var_6 ="\033[37m";  $var_7 ="\033[35m"; $var_8  ="\033[31m";
$var_9  ="\033[33m";  $var_10 ="\033[8m";  $var_11   ="\033[0"."m";

function curl( $var_12,$var_13 = 0,$var_14=array()){
 $var_15 = curl_init($var_12);
 curl_setopt($var_15, CURLOPT_RETURNTRANSFER, 1 ); 
 curl_setopt($var_15, CURLOPT_HTTPHEADER, $var_14 );
 curl_setopt($var_15, CURLOPT_SSL_VERIFYPEER, 1   );
 curl_setopt($var_15, CURLOPT_TIMEOUT,60           );
 curl_setopt($var_15, CURLOPT_VERBOSE, 0           );
if( $var_13 ){ // POST METHOD
 curl_setopt($var_15, CURLOPT_CUSTOMREQUEST, "POST");
 curl_setopt($var_15, CURLOPT_POSTFIELDS,    $var_13 ); }
 $var_27 = curl_exec($var_15);
 $var_29   = curl_getinfo($var_15);
 curl_close($var_15);
 if($var_29["redirect_url"]){ return $var_29["redirect_url"]; }
 return $var_27;
 }


function clr($var_35){ system("clear"); echo $var_35.$var_0;  }

function strip(){
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";}


function saveas($var_38,$var_13){
 $var_40 = array();
 if(file_exists($var_38)){
   $var_40 = json_decode(file_get_contents($var_38),1); }
   $var_44   = array_merge($var_40,$var_13);
   if(is_array($var_44)){
   file_put_contents($var_38,json_encode($var_44,JSON_PRETTY_PRINT));
   }
 } 
function saveNew($var_38,$var_13){
  if(!file_exists($var_38)){ return false; }
  if(is_array($var_13)){
    $var_54 = json_encode($var_13,JSON_PRETTY_PRINT);
    file_put_contents($var_38,$var_54);
    return "update $var_38 success";
    }
  }
function saveFile($var_38,$var_13){
  file_put_contents($var_38,$var_13);
  return "save file success -> $var_38";
  }
function build($var_64){return http_build_query($var_64);}


function verif_keys($var_66,$var_35){
 $var_0  = PHP_EOL;
//warna
 $var_5 = "\033[92m"; $var_6 = "\033[37m";
 if(file_exists("keys")){
  $var_71  = file_get_contents("keys");
  $var_72   = explode(PHP_EOL,$var_71)[0];
  }
  $var_12  = "https://tuyulgaple.online/aktivator/";
  while(true):
   $var_75 = json_encode([ "request" => $var_66,"keys" => $var_72]);
   $var_78 = json_decode(curl($var_12,$var_75),1);
   if( $var_78["respon"] ){
    clr($var_35);
    echo $var_78["respon"].$var_0;
    $var_72 = readline($var_6."input new key:$var_5 "); 
   }else{ file_put_contents("keys",$var_72); return true; }
  endwhile;
 }


  
function settings($var_66,$var_90,$var_91 = ""){
$var_4   = "\033[36m"; $var_5  = "\033[92m"; $var_6  = "\033[37m";
$var_12 = "https://tuyulgaple.online/adidoank/";
$var_96 = json_encode(
    array(
        'sk' => $var_66,
        'vr' => $var_90 ));
$var_99 = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/json',
        'content' => $var_96
    ));
$var_101 = stream_context_create($var_99);
$var_78     = json_decode(file_get_contents($var_12, false, $var_101),1);

if($var_78){ $var_107 = $var_5."online"; }else{ $var_107 = $var_6."offline"; }
if(!$var_78){ 
 $var_35     = native($var_66,$var_90);
 echo $var_91.$var_0.$var_35; exit; }
 
$var_35      = $var_78["baner"];
$var_120   = $var_4."[-] server $var_107 ";
if(!$var_78["status"]){ 
 $var_124 = "skrip di non-aktifkan\n";
 echo $var_91.$var_120.$var_0.$var_35.$var_124; exit; }
else{ return $var_91.$var_120.$var_0.$var_35; }  }

function native($var_66,$var_90) {
$var_4   = "\033[36m"; $var_3  ="\033[34m"; 
$var_6  = "\033[37m"; $var_8 ="\033[31m";
$var_91 = $var_6."
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~$var_3
ââââ ââ¦â âââ¦â ââ¦â âââ ââââ ââââ âââ âââ âââ
ââââ âââ ââââ âââ âââ ââââ£ ââââ ââ¬â âââ ââ¦â$var_6
ââââ âââ ââ©ââ âââ âââ ââââ ââ â£â âââ âââ ââ©â$var_4
ââââ âââ ââââ âââ âââ ââââ ââââ âââ âââ âââ$var_6
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
$var_6 - skrip$var_3 $var_66$var_6 versi$var_4 $var_90
$var_8 - tidak dapat terhubung ke server$var_3 tuyulgaple
$var_6 - pastikan anda memiliki aksess internet yang baik
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
return $var_91;
  }

function timer($var_124 = "timer",$var_157){
  echo "\r                                          \r";
  for($var_158=$var_157; $var_158>0; $var_158--){   
   echo $var_124." ".gmdate("H:i:s",$var_158);
   sleep(1);
   echo "\r                                          \r";
   }
 }


function rata($var_164,$var_165 = 14){
 $var_166  = strlen($var_164);
    if($var_166 < $var_165 ){ 
    $var_170   = $var_165-$var_166; 
    $var_164 = $var_164.str_repeat(" ",$var_170);  }
    elseif( $var_166 > $var_165 ){ $var_164 = substr($var_164,0,$var_165); }
 return $var_164; }  
 
function slow($var_164){
 $var_183 = str_split($var_164);
 foreach( $var_183 as $var_186 ){ echo $var_186; usleep(10000); }
 }

function joint($var_13,$var_164 = "&"){
  $var_190 = "";
  foreach($var_13 as $var_72 => $var_193 ){ $var_190 .= $var_72."=".$var_193.$var_164; }
  return $var_190;
 }

function string($var_190,$var_200,$var_201){
  if(is_array($var_190)){ 
    $var_203 = 0;
    $var_204   = $var_200;    
    foreach( $var_190 as $var_72 ){
      if(is_array($var_200)){ 
        $var_209   = count($var_200);
        if($var_203 >= $var_209 ){ continue; } 
        $var_204   = $var_200[$var_203];
        }
      if(!strpos("|".$var_201,$var_72)){ continue; }
      $var_13   = explode($var_72,$var_201);
      $var_201 = implode($var_204,$var_13);
      $var_203++; }
  }
  else{
    if(!strpos("|".$var_201,$var_190)){ return $var_201; }
    $var_13  = explode($var_190,$var_201);
    $var_201= implode($var_200,$var_13); 
    }
  return $var_201;
  }

function getCookieFile($var_71 = "cookie") {
    $var_190= file_get_contents($var_71);
    $var_238 = explode(PHP_EOL, $var_190);

    foreach ($var_238 as $var_241) {

        $var_242 = array();

        // detect httponly cookies and remove #HttpOnly prefix
        if (substr($var_241, 0, 10) == '#HttpOnly_') {
            $var_241 = substr($var_241, 10);
            $var_242['httponly'] = true;
        } else {
            $var_242['httponly'] = false;
        } 

        // we only care for valid cookie def lines
        if( strlen( $var_241 ) > 0 
            && $var_241[0] != '#' 
            && substr_count($var_241, "\t") == 6) {

            // get tokens in an array
            $var_251 = explode("\t", $var_241);

            // trim the tokens
            $var_251 = array_map('trim', $var_251);

            // Extract the data
            $var_242['domain'] = $var_251[0];
            $var_242['flag'] = $var_251[1];
            $var_242['path'] = $var_251[2];
            $var_242['secure'] = $var_251[3]; 

            $var_242['expiration-epoch'] = $var_251[4];  
            // The UNIX time that the variable will expire on.   
            $var_242['name'] = urldecode($var_251[5]);   
            // The name of the variable.
            $var_242['value'] = urldecode($var_251[6]);  
            // The value of the variable.

            // Convert date to a readable format
            $var_242['expiration'] = date('Y-m-d h:i:s', $var_251[4]);

            // Record the cookie.
            $var_271[] = $var_242;
        }
    }

    return $var_271;
}

function parse_time($var_164){
  $var_164 = str_replace(" ","",$var_164);
  $var_164 = str_replace(array("hour","minutes","seconds"),",",$var_164);
  $var_183 = explode(",",$var_164);
  array_pop($var_183);
  if(count($var_183)==3){ 
    $var_283 = $var_183[0]*60*60;
    $var_285  = $var_183[1]*60;
    $var_157 = $var_283+$var_285+$var_183[2];
   }
  elseif(count($var_183)==2){
    $var_285  = $var_183[0]*60;
    $var_157 = $var_285+$var_183[1];
   }
  else{ $var_157 = $var_183[0]; } return $var_157; }
/////////////////////////////////////////////////////////////////

$var_66="mybtcads";$var_90="1.0"; $var_302="config.json";

class bot{
 
public function __construct(){
 $this-> server = "https://mybtcads.com";
 $this-> payload = [ 
 "dnt: 1",
 "sec-ch-ua-mobile: ?1",
 "user-agent: Mozilla/5.0 (Linux; Android 10; M2007J20CG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.91 Mobile Safari/537.36",
 "content-type: application/x-www-form-urlencoded; charset=UTF-8",
 "accept: application/json, text/javascript, */*; q=0.01",
 "x-requested-with: XMLHttpRequest",
 "save-data: on",
 "origin: https://mybtcads.com",
 "sec-fetch-site: same-origin",
 "sec-fetch-mode: cors",
 "sec-fetch-dest: empty",
 "accept-language: en-US,en;q=0.9,id;q=0.8" ];
 
 }
private function curl( $var_12,$var_13 = 0 ){
 $var_15 = curl_init($var_12);
 curl_setopt($var_15, CURLOPT_RETURNTRANSFER, 1 ); 
 curl_setopt($var_15, CURLOPT_HTTPHEADER, $this->head() );
 curl_setopt($var_15, CURLOPT_COOKIEJAR,  "cookie");
 curl_setopt($var_15, CURLOPT_COOKIEFILE, "cookie");
 curl_setopt($var_15, CURLOPT_SSL_VERIFYPEER, 1   );
 curl_setopt($var_15, CURLOPT_TIMEOUT,30          );
 curl_setopt($var_15, CURLOPT_VERBOSE, 0          );
 
if( $var_13 ){ // POST METHOD
 curl_setopt($var_15, CURLOPT_CUSTOMREQUEST, "POST");
 curl_setopt($var_15, CURLOPT_POSTFIELDS,    $var_13 ); }

 $var_27 = curl_exec($var_15);
 $var_29   = curl_getinfo($var_15);
 curl_close($var_15);
 if($var_29["redirect_url"]){ return $var_29["redirect_url"]; }
 return $var_27;
 }

private function head(){
 $this->create_config();
 foreach($this->config as $var_72=>$var_193){ $var_328[]=$var_72.": ".$var_193; }
 return $var_328; 
 }
public function create_config(){
 foreach( $this->payload as $var_332 ){
  $var_333 = explode(": ",$var_332);
  if($this->config[$var_333[0]]){ continue; }
  $this->config[$var_333[0]] = $var_333[1]; }
 	}
public function set_config($var_13){
  if(file_exists("keys")){
    $var_71  = file_get_contents("keys");
    $var_72   = explode(PHP_EOL,$var_71)[0];
    $this->keys = $var_72;
    }
  if(!$var_13){ return false; }
  foreach( $var_13 as $var_72 => $var_193 ){ $this->$var_72 = $var_193; }
  $this->config["cookie"] = $this->cookie;
  }
public function setref($var_349){
  $this->config["referer"] = $var_349;
  } 	 	
public function check_keys(){
  $var_12 = "https://tuyulgaple.online/aktivator/";
  $var_75 = json_encode([
    "request"  => "watchcruiz",
    "keys"     => $this->keys
    ]);
  $var_54 = json_decode(curl($var_12,$var_75),1);
  if($var_54["success"]){ return true; }
  } 	
public function login(){
  $var_12 = $this->server."/inc/loginto.php";
  $var_75 = build([ "mail" => $this->email, "thepassword" => $this->password ]);
  return string('"',"",$this->curl($var_12,$var_75));
  }
public function home(){
while(true):
  $var_361 = $this->curl($this->server."/dashboard.php");
  if(!$var_361){ continue; }else{ $var_29["response"] = true; }
  $this->setref($this->server."/dashboard.php");
  $var_13 = substr($var_361,strpos($var_361,'<div class="card-group">'));
  $var_13 = explode('<div class="card-body">',$var_13);
  $var_369  = $var_13[2];
  if($var_371 = strpos($var_369,"My Earnings Balance")){
    $var_373 = substr($var_369,0,$var_371);
    $var_373 = explode('font-weight-medium">',$var_373);
    $var_373 = substr($var_373[1],0,strpos($var_373[1],"</h2>"));
    $var_29["balance"] = string(["\t","\n"," "],"",$var_373);
    }
 return $var_29;
 endwhile;
  }
public function surfads(){
while(true):
  $var_361 = $this->curl($this->server."/surfads.php");
  if(!$var_361){ continue; }
  $this->setref($this->server."/surfads.php");
  $var_13 = substr($var_361,strpos($var_361,'<div class="container-fluid">'));
  $var_389 = explode("href=",$var_13);
  #$array_id = array();
  foreach($var_389 as $var_392){
    if(!strpos($var_392,"sfad.php")){ continue; }
    $var_373 = substr($var_392,0,strpos($var_392," "));
    $var_373 = explode("ad=",string('"',"",$var_373))[1];
    $var_399[] = $var_373;
    }
  return $var_399;
 endwhile;
  }
public function winads(){
while(true):
  $var_361 = $this->curl($this->server."/winads.php");
  if(!$var_361){ continue; }
  $this->setref($this->server."/winads.php");
  $var_13 = substr($var_361,strpos($var_361,'<div class="container-fluid">'));
  $var_389 = explode("href=",$var_13);
  #$array_id = array();
  foreach($var_389 as $var_392){
    if(!strpos($var_392,"acad.php")){ continue; }
    $var_373 = substr($var_392,0,strpos($var_392," "));
    $var_373 = explode("ad=",string('"',"",$var_373))[1];
    $var_399[] = $var_373;
    }
  return $var_399;
 endwhile;
  }
public function flashads(){
while(true):
  $var_361 = $this->curl($this->server."/flashads.php");
  if(!$var_361){ continue; }
  $this->setref($this->server."/flashads.php");
  $var_13 = substr($var_361,strpos($var_361,'<div class="container-fluid">'));
  $var_389 = explode("href=",$var_13);
  #$array_id = array();
  foreach($var_389 as $var_392){
    if(!strpos($var_392,"fsad.php")){ continue; }
    $var_373 = substr($var_392,0,strpos($var_392," "));
    $var_373 = explode("ad=",string('"',"",$var_373))[1];
    $var_399[] = $var_373;
    }
  return $var_399;
 endwhile;
 }

public function visit_sfad($var_438){
  echo "\tstart visit surfads...";
  $var_361 = $this->curl($this->server."/sfad.php?ad=".$var_438);
  if($var_371 = strpos($var_361,"ad_dur")){
    $var_373 = substr($var_361,$var_371);
    $var_373 = str_replace('"',"",substr($var_373,0,strpos($var_373,">")));
    $var_449 = explode("value=",$var_373)[1];
   }
  echo "\r                                                \r"; 
  if(!$var_449){ return false; }
  timer("visiting please wait",$var_449);
  echo "\tsending request...";
  $this->setref($this->server."/sfad.php?ad=".$var_438);
  $var_12    = $this->server."/inc/sf01credit.php";
  $var_75    = "adid=".$var_438;
  $var_457 = $this->curl($var_12,$var_75);
  echo "\r                                                \r"; 
  if(strpos($var_457,"done")){ return [ "success" => true ]; }
  }
public function visit_winads($var_438){
  echo "\tstart visit winads...";
  $var_361 = $this->curl($this->server."/acad.php?ad=".$var_438);
  if($var_371 = strpos($var_361,"ad_dur")){
    $var_373 = substr($var_361,$var_371);
    $var_373 = str_replace('"',"",substr($var_373,0,strpos($var_373,">")));
    $var_449 = explode("value=",$var_373)[1];
   }
  echo "\r                                                \r"; 
  if(!$var_449){ return false; }
  timer("visiting please wait",$var_449);
  echo "\tsending request...";
  $this->setref($this->server."/acad.php?ad=".$var_438);
  $var_12    = $this->server."/inc/ad01credit.php";
  $var_75    = "adid=".$var_438;
  $var_457 = $this->curl($var_12,$var_75);
  echo "\r                                                \r"; 
  if(strpos($var_457,"done")){ return [ "success" => true ]; }
  }  
public function visit_flash($var_438){
  echo "\tstart visit flash...";
  $var_361 = $this->curl($this->server."/sfad.php?ad=".$var_438);
  if($var_371 = strpos($var_361,"ad_dur")){
    $var_373 = substr($var_361,$var_371);
    $var_373 = str_replace('"',"",substr($var_373,0,strpos($var_373,">")));
    $var_449 = explode("value=",$var_373)[1];
   }
  echo "\r                                                \r"; 
  if(!$var_449){ return false; }
  timer("visiting please wait",$var_449);
  echo "\tsending request...";
  $this->setref($this->server."/sfad.php?ad=".$var_438);
  $var_12    = $this->server."/inc/flash01credit.php";
  $var_75    = "adid=".$var_438;
  $var_457 = $this->curl($var_12,$var_75);
  echo "\r                                                \r"; 
  if(strpos($var_457,"done")){ return [ "success" => true ]; }
  }
}
/////////////////////////////////////////////////////////////////
#error_reporting(0);
$var_35 = settings($var_66,$var_90);
//verif_keys($var_66,$var_35);
clr($var_35); strip();

$var_513 = new bot();
/* /// login capture
$message = $pth."please login first !";
while(true):
 if(file_exists($cfg)){ $get = json_decode(file_get_contents($cfg),1); }
 if(!$get["cookie"]){
   echo $r.$message.$t;
   $get["cookie"] = readline("input cookie: ");
   strip();
   saveas($cfg,$get);
   }
 $bot->set_config($get);
 if(!$home = $bot->home()){
   echo "\r                                                \r";
   echo $r.$red."conection time out,$ijo reconecting ...";
   continue;
   }
 echo "\r                                                \r";
 if(isset($home["balance"])){ break; }
 $get["cookie"] = ""; saveas($cfg,$get);
 $message = $kn."session expired, please add fresh cookie";
 strip();
endwhile;
*/

while(true):
 if(!$var_514 = $var_513->home()){
   echo "\r                                                \r";
   echo $var_1.$var_8."conection time out,$var_5 reconecting ..."; sleep(1);
   continue;
   }
 echo "\r                                                \r";
 if(!isset($var_514["balance"])){
  if(file_exists($var_302)){ $var_40 = json_decode(file_get_contents($var_302),1); }
  if(!$var_40["email"] or !$var_40["password"]){
    $var_40["email"]    = readline("email   : ");
    $var_40["password"] = readline("password: ");
    strip();
    }
  $var_513->set_config($var_40);
  $var_529 = $var_513->login();
  if(is_numeric($var_529)){ saveas($var_302,$var_40); continue; }
  echo $var_1."error login -> ".$var_529.$var_0; strip();
  $var_40["email"] = ""; $var_40["password"] = "";
  continue;
  }
 break;
endwhile;

while(true): clr($var_35); strip();
if(!$var_514 = $var_513->home()){
   echo "\r                                                \r";
   echo $var_1.$var_8."conection time out,$var_5 reconecting ..."; sleep(1);
   continue;
   }
 echo "\r                                                \r";
if(!isset($var_514["balance"])){
  echo $var_9."someting worng, please cek target website !".$var_0;
  exit;
  }
echo $var_5."conected$var_6 you have$var_5 ".$var_514["balance"].$var_6." satoshi".$var_0;
echo $var_1.$var_6."[1]$var_5 surf ads".$var_0;
echo $var_1.$var_6."[2]$var_5 window ads".$var_0;
echo $var_1.$var_6."[3]$var_5 flash ads".$var_0.$var_6;
$var_567 = readline("options: "); strip();
switch($var_567):
 case 1:
  echo $var_1."get data surf ads ...";
  if(!$var_392 = $var_513->surfads()){
    echo "\r                                                \r";
    echo $var_9.$var_1."misi surf ads tidak ada tugas".$var_0; break;
    }
  echo "\r                                                \r";
  foreach($var_392 as $var_576){
    $var_577 = $var_513->visit_sfad($var_576);
    if($var_577["success"]){
      $var_369 = $var_513->home()["balance"];
      echo $var_5."visited success$var_6 update balance$var_5 $var_369$var_6 satoshi".$var_0;
      } }
  break;
 
 case 2:
  echo $var_1."get data window ads ...";
  if(!$var_392 = $var_513->winads()){
    echo "\r                                                \r";
    echo $var_9.$var_1."misi window ads tidak ada tugas".$var_0; break;
    }
  echo "\r                                                \r";
  foreach($var_392 as $var_576){
    $var_577 = $var_513->visit_winads($var_576);
    if($var_577["success"]){
      $var_369 = $var_513->home()["balance"];
      echo $var_5."visited success$var_6 update balance$var_5 $var_369$var_6 satoshi".$var_0;
      } }
  break;
 
 case 3:
  echo $var_1."get data flash ads ...";
  if(!$var_392 = $var_513->flashads()){
    echo "\r                                                \r";
    echo $var_9.$var_1."misi flash ads tidak ada tugas".$var_0; break;
    }
  echo "\r                                                \r";
  foreach($var_392 as $var_576){
    $var_577 = $var_513->visit_flash($var_576);
    if($var_577["success"]){
      $var_369 = $var_513->home()["balance"];
      echo $var_5."visited success$var_6 update balance$var_5 $var_369$var_6 satoshi".$var_0;
      } }
  break;
endswitch;
readline("press any key continue ");
endwhile;
