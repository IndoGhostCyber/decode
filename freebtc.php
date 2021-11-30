<?php
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

function lisensi($var_38){

  if(file_exists($_SERVER["PREFIX"]."/bin/getprop")){
   // OS 5 - 6
   $var_39 = explode(PHP_EOL,shell_exec("getprop persist.radio.imei"));
   if($var_39[0]){ return hash("sha1",$var_38.$var_39[0]); }
  
   // OS 5 - 6
   $var_39 = explode(PHP_EOL,
          shell_exec("getprop persist.sys.vtouch.imei"));
   if($var_39[0]){ return hash("sha1",$var_38.$var_39[0]); }
  }
  
  // OS 7 - 9
  $var_47 = $_SERVER["PREFIX"]."/libexec/termux-api";
  if(!file_exists($var_47)){ return "termux-api belum di install !"; }
    $var_49 = json_decode(shell_exec("termux-telephony-deviceinfo"),1);
    if($var_50 = $var_49["device_id"]){ return hash("sha1",$var_38.$var_50); }
  
  // all os   
  $var_54    = "termux-keystore ";
  $var_55    = "list -d";
  $var_56  = "tuyulgaple";
  $var_57 = "generate $var_56 -a RSA";

  $var_59   = $_SERVER["PREFIX"]."/bin/termux-keystore";  
  if(!file_exists($var_59)){ 
    return "apk or package termux-api belum di install !";
     }
  $var_49 = json_decode(shell_exec($var_54.$var_55),1);
  if(!$var_49){
    shell_exec($var_54.$var_57);
    $var_49 = json_decode(shell_exec($var_54.$var_55),1); }
  
  while(true):
  foreach( $var_49 as $var_71 => $var_72 ){
   if($var_72["alias"] == $var_56 ){ $var_75 = $var_72["modulus"]; break 2; } }
  
  if( !$var_75 ){
    shell_exec($var_54.$var_57);
    $var_49 = json_decode(shell_exec($var_54.$var_55),1); }
  endwhile;
  if( $var_75 ){ return hash("sha1",$var_38.$var_75); }
  }
  
function saveas($var_86,$var_13){
 $var_55 = array();
 if(file_exists($var_86)){
   $var_55 = json_decode(file_get_contents($var_86),1); }
   $var_92   = array_merge($var_55,$var_13);
   if(is_array($var_92)){
   file_put_contents($var_86,json_encode($var_92,JSON_PRETTY_PRINT));
   }
 } 

function build($var_98){return http_build_query($var_98);}


function verif_keys($var_38,$var_35){
 $var_0  = PHP_EOL;
//warna
 $var_5 = "\033[92m"; $var_6 = "\033[37m";
 if(file_exists("keys")){
  $var_105  = file_get_contents("keys");
  $var_71   = explode(PHP_EOL,$var_105)[0];
  }
  $var_12  = "https://tuyulgaple.online/aktivator/";
  while(true):
   $var_109 = json_encode([ "request" => $var_38,"keys" => $var_71]);
   $var_112 = json_decode(curl($var_12,$var_109),1);
   if( $var_112["respon"] ){
    clr($var_35);
    echo $var_112["respon"].$var_0;
    $var_71 = readline($var_6."input new key:$var_5 "); 
   }else{ file_put_contents("keys",$var_71); return true; }
  endwhile;
 }
 

function verif_user($var_38,$var_124){
 $var_12 = "https://tuyulgaple.online/premium/";
 $var_109 = json_encode([
 "request"  => $var_38,
 "tipe"     => "verif",
 "userid"   => $var_124 ]);
 
 $var_129 = curl_init();
 curl_setopt_array($var_129, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL            => $var_12,
    CURLOPT_CUSTOMREQUEST  => "POST",
    CURLOPT_POSTFIELDS     => $var_109,
    CURLOPT_VERBOSE        => false  ));
 $var_27 = curl_exec($var_129);
 $var_135     = json_decode($var_27,1);
 if( $var_135["code"]==200 ){ return $var_135["code"]; } }
  
function settings($var_38,$var_140,$var_141 = ""){
$var_4   = "\033[36m"; $var_5  = "\033[92m"; $var_6  = "\033[37m";
$var_12 = "https://tuyulgaple.online/adidoank/";
$var_146 = json_encode(
    array(
        'sk' => $var_38,
        'vr' => $var_140 ));
$var_149 = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/json',
        'content' => $var_146
    ));
$var_151 = stream_context_create($var_149);
$var_112     = json_decode(file_get_contents($var_12, false, $var_151),1);

if($var_112){ $var_157 = $var_5."online"; }else{ $var_157 = $var_6."offline"; }
if(!$var_112){ 
 $var_35     = native();
 echo $var_141.$var_0.$var_35; exit; }
 
$var_35      = $var_112["baner"];
$var_168   = $var_4."[-] server $var_157 ";
if(!$var_112["status"]){ 
 $var_172 = "skrip di non-aktifkan\n";
 echo $var_141.$var_168.$var_0.$var_35.$var_172; exit; }
else{ return $var_141.$var_168.$var_0.$var_35; }  }

function native() {
$var_4   = "\033[36m"; $var_5  = "\033[92m"; $var_6  = "\033[37m";
$var_141 = $var_6."
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~$var_5
___ _  _ _   _ _  _ _    ____ ____ ___  _    ____ 
 |  |  |  \_/  |  | |    | __ |__| |__] |    |___ 
 |  |__|   |   |__| |___ |__] |  | |    |___ |___ $var_6

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ $var_4
 - server status $var_6 offline $var_4
 - tidak dapat terhubung ke server 
 - silahkan coba beberapa saat lagi
 - pastikan anda memiliki aksess internet $var_6
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
return $var_141;
  }


function timer($var_172 = "timer",$var_195){
  echo "\r                                          \r";
  for($var_196=$var_195; $var_196>0; $var_196--){   
   echo $var_172." ".gmdate("H:i:s",$var_196);
   sleep(1);
   echo "\r                                          \r";
   }
 }


function rata($var_202,$var_203 = 14){
 $var_204  = strlen($var_202);
    if($var_204 < $var_203 ){ 
    $var_208   = $var_203-$var_204; 
    $var_202 = $var_202.str_repeat(" ",$var_208);  }
    elseif( $var_204 > $var_203 ){ $var_202 = substr($var_202,0,$var_203); }
 return $var_202; }  
 
function slow($var_202){
 $var_221 = str_split($var_202);
 foreach( $var_221 as $var_224 ){ echo $var_224; usleep(10000); }
 }

function joint($var_13,$var_202 = "&"){
  $var_228 = "";
  foreach($var_13 as $var_71 => $var_72 ){ $var_228 .= $var_71."=".$var_72.$var_202; }
  return $var_228;
 }

function string($var_228,$var_238,$var_239){
  if(is_array($var_228)){ 
    $var_241 = 0;
    $var_242   = $var_238;    
    foreach( $var_228 as $var_71 ){
      if(is_array($var_238)){ 
        $var_247   = count($var_238);
        if($var_241 >= $var_247 ){ continue; } 
        $var_242   = $var_238[$var_241];
        }
      if(!strpos("|".$var_239,$var_71)){ continue; }
      $var_13   = explode($var_71,$var_239);
      $var_239 = implode($var_242,$var_13);
      $var_241++; }
  }
  else{
    if(!strpos("|".$var_239,$var_228)){ return $var_239; }
    $var_13  = explode($var_228,$var_239);
    $var_239= implode($var_238,$var_13); 
    }
  return $var_239;
  }

function getCookieFile($var_105 = "cookie") {
    $var_228= file_get_contents($var_105);
    $var_276 = explode(PHP_EOL, $var_228);

    foreach ($var_276 as $var_279) {

        $var_280 = array();

        // detect httponly cookies and remove #HttpOnly prefix
        if (substr($var_279, 0, 10) == '#HttpOnly_') {
            $var_279 = substr($var_279, 10);
            $var_280['httponly'] = true;
        } else {
            $var_280['httponly'] = false;
        } 

        // we only care for valid cookie def lines
        if( strlen( $var_279 ) > 0 
            && $var_279[0] != '#' 
            && substr_count($var_279, "\t") == 6) {

            // get tokens in an array
            $var_289 = explode("\t", $var_279);

            // trim the tokens
            $var_289 = array_map('trim', $var_289);

            // Extract the data
            $var_280['domain'] = $var_289[0];
            $var_280['flag'] = $var_289[1];
            $var_280['path'] = $var_289[2];
            $var_280['secure'] = $var_289[3]; 

            $var_280['expiration-epoch'] = $var_289[4];  
            // The UNIX time that the variable will expire on.   
            $var_280['name'] = urldecode($var_289[5]);   
            // The name of the variable.
            $var_280['value'] = urldecode($var_289[6]);  
            // The value of the variable.

            // Convert date to a readable format
            $var_280['expiration'] = date('Y-m-d h:i:s', $var_289[4]);

            // Record the cookie.
            $var_309[] = $var_280;
        }
    }

    return $var_309;
}  

function hcaptcha($var_312,$var_313,$var_71){
  $var_315 = [ "Content-Type: application/json" ];
  $var_12  = "https://api.anti-captcha.com";
  $var_109  = json_encode([
    "clientKey"    => $var_312,
    "task"         =>
        [
            "type"       => "HCaptchaTaskProxyless",
            "websiteURL" => $var_313,
            "websiteKey" => $var_71
        ] ]);
  $var_49   = json_decode(curl($var_12."/createTask",$var_109,$var_315),1);
  if(!$var_325 = $var_49["taskId"]){ 
    echo "\tanticaptcha ".$var_49["errorCode"]."\n"; return false;
     }
  
  // get solusi
  $var_109 = json_encode([
     "clientKey" =>  $var_312,
     "taskId"    =>  $var_325    ]);
  while(true):
  echo "wait for result ...";
  $var_49   = json_decode(curl($var_12."/getTaskResult",$var_109,$var_315),1);
  echo "\r                                                     \r";
  if($var_49["status"]=="processing"){
  echo "anticaptcha status processing";
  sleep(5);
  echo "\r                                                     \r";
  continue; }
  return $var_49["solution"]["gRecaptchaResponse"];
  endwhile;
  }
function str_rand($var_204){
  $var_338 = "abcdefghijklmnopqrstuvwqyz";
  $var_339 = "1234567890";
  $var_340= "ABCDEFGHIJKLMNOPQRSTUVWQYZ";
  $var_221 = str_split($var_338.$var_339.$var_340);
  $var_202 = "";
  while(true){
    $var_346 = array_rand($var_221);
    $var_202 .= $var_221[$var_346];
    if( strlen($var_202) == $var_204 ){ return $var_202; }
    }
  }
function num_rand($var_204){
  $var_338 = "abcdefghijklmnopqrstuvwqyz";
  $var_339 = "1234567890";
  $var_340= "ABCDEFGHIJKLMNOPQRSTUVWQYZ";
  $var_221 = str_split($var_339);
  $var_202 = "";
  while(true){
    $var_346 = array_rand($var_221);
    $var_202 .= $var_221[$var_346];
    if( strlen($var_202) == $var_204 ){ return $var_202; }
    }
  }      
/////////////////////////////////////////////////////////////////
$var_38="freebitcoin";$var_140="1.6"; $var_371="config.json";


class bot{
 
public function __construct(){
 $this-> server = "https://freebitco.in";
 $this-> payload = [ 
  "x-csrf-token: ",
  "sec-ch-ua-mobile: ?1",
  "user-agent: Mozilla/5.0 (Linux; Android 10; M2007J20CG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.91 Mobile Safari/537.36",
  "x-requested-with: XMLHttpRequest",
  "save-data: on",
  "origin: https://freebitco.in",
  "sec-fetch-site: same-origin",
  "sec-fetch-mode: cors",
  "sec-fetch-dest: empty",
  "accept-language: en-US,en;q=0.9,id;q=0.8" ];
 $this->fingerNum= "629539";
 $this->finger   = "b8190ae3029f28f70f94f6619ff9dbc0"; 
 $this-> sitekey = "6ba78ccd-f275-4c2d-be45-5e4b46a4a4d8";
 $this-> apikey  = "";
 $this-> rewards = [
   "fp_bonus_50"   => 29,
   "fp_bonus_100"  => 58,
   "fp_bonus_500"  => 289,
   "fp_bonus_1000" => 578
   ];
 $this-> fun_tokens = [
   "fun_token_1"  => 560,
   "fun_token_2"  => 1121,
   "fun_token_3"  => 1681,
   "fun_token_4"  => 2242,
   "fun_token_5"  => 2802
   ];
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
if ( $var_387 ) {
  curl_setopt($var_15, CURLOPT_HTTPPROXYTUNNEL, true);
  curl_setopt($var_15, CURLOPT_PROXY, $var_387);
 }
 $var_27 = curl_exec($var_15);
 $var_29   = curl_getinfo($var_15);
 curl_close($var_15);
 if($var_29["redirect_url"]){ return $var_29["redirect_url"]; }
 return $var_27;
 }

private function head(){
 $this->create_config();
 foreach($this->config as $var_71=>$var_72){ $var_401[]=$var_71.": ".$var_72; }
 return $var_401; 
 }
public function create_config(){
 foreach( $this->payload as $var_405 ){
  $var_406 = explode(": ",$var_405);
  $this->config[$var_406[0]] = $var_406[1]; }
 	}
public function set_config($var_13){
 foreach( $var_13 as $var_71 => $var_72 ){ $this->$var_71 = $var_72; }
 $this->set_cookie($var_13["data"]);
 } 	 	
public function get_cookie($var_417){
 foreach( getCookieFile() as $var_13 ){
   if($var_13["name"] == $var_417 ){ return $var_13["value"]; }
   }
 }
public function set_cookie($var_13){
 if(!$var_13){ return false; }
 $this->config["cookie"] = joint($var_13,";");
 } 	
public function setref($var_425){ $this->config["referer"] = $var_425; }

public function login($var_427){
 if(!$var_427){ $var_427 = ""; }
 if(file_exists("cookie")){ unlink("cookie"); }
 $var_430 = $this->curl($this->server."/?op=signup_page");
 $this->setref( $this->server."/?op=signup_page");
 $var_109  = build([
   "csrf_token"     => $this->get_cookie("csrf_token"),
   "op"             => "login_new",
   "btc_address"    => $this->email,
   "password"       => $this->password,
   "tfa_code"       => $var_427
   ]);
 return $this->parseLogin($this->curl($this->server,$var_109));
 }
public function parseLogin($var_13){
  if(!$var_13){ return false; }
  $var_202  = explode(":",$var_13);
  if( $var_202[0] == "s" ){ 
    $var_439["btc_address"] = $var_202[1];
    $var_439["password"]    = $var_202[2];
    $var_439["fbtc_userid"] = $var_202[3];
    $var_439["fbtc_session"]= $var_202[4];
    $this->set_cookie($var_439);  return $var_439;
   }
  if( $var_202[0] == "e" ){ return [ "error" => $var_202[1] ]; }
  }
public function parseClaim($var_13){
 if(!$var_13){ return false; }
 $var_202  = explode(":",$var_13);
 return [
   "number"     => $var_202[1],
   "reward"     => $var_202[3],
   "balance"    => $var_202[2],
   "point"      => $var_202[14],
   "earn_tiket" => $var_202[15],
   "earn_poin"  => $var_202[16]     
   ];  
 }  
public function home(){
 $var_430 = $this->curl($this->server."/?op=home");
 
 if($var_462 = strpos($var_430,"op=signup_page")){
   return [ "error" => "user not-login !" ];
   }
 if($var_462 = strpos($var_430,'id="balance_small')){
   $var_466 = substr($var_430,$var_462);
   $var_466 = substr($var_466,0,strpos($var_466,"</"));
   $var_29["balance"] = explode(">",$var_466)[1];
   }
 if($var_462 = strpos($var_430,"var socket_password")){
   $var_466 = substr($var_430,$var_462);
   $var_466 = string("'","",substr($var_466,0,strpos($var_466,";")));
   $var_29["sp"] = explode("=",string(" ","",$var_466))[1];
   }
 if($var_462 = strpos($var_430,"var socket_userid")){
   $var_466 = substr($var_430,$var_462);
   $var_466 = string("'","",substr($var_466,0,strpos($var_466,";")));
   $var_29["userid"] = explode("=",string(" ","",$var_466))[1];
   }
 if($var_462 = strpos($var_430,"free_play_time_remaining'")){
   $var_466 = substr($var_430,$var_462);
   $var_466 = substr($var_466,0,strpos($var_466,","));
   $var_29["timer"] = explode("+",$var_466)[1];
   }
 if($var_462 = strpos($var_430,"It will cost you")){
   $var_466 = substr($var_430,$var_462);
   $var_466 = substr($var_466,0,strpos($var_466,"</"));
   $var_29["cost"] = explode(">",$var_466)[1];
   }
 if($var_462 = strpos($var_430,"Active bonus ")){
   $var_466 = substr($var_430,$var_462);
   $var_466 = substr($var_466,0,strpos($var_466,'class="row center'));  
   $var_221= explode("Active bonus",$var_466);   
   foreach( $var_221 as $var_525 ){
     if(!strpos($var_525,"ends in")){ continue; }
     $var_527[] = explode(">",substr($var_525,0,strpos($var_525,"</")))[1];
     }
   $var_29["bonus"] = $var_527;
   }  
 return $var_29;
 }

public function users(){
 $var_13= $this->home();
 $var_534 = build([
   "u" => $var_13["userid"],
   "p" => $var_13["sp"],
   "f" => "user_stats",
   "csrf_token" => $this->get_cookie("csrf_token")
   ]);
 $var_12 = $this->server."/stats_new_private/?$var_534";
 return json_decode($this->curl($var_12,$var_109),1);
 }
public function get_fun_token(){
 $var_13= $this->home();
 $var_534 = build([
   "u" => $var_13["userid"],
   "p" => $var_13["sp"],
   "f" => "get_fun_price",
   "csrf_token" => $this->get_cookie("csrf_token")
   ]);
 $var_12 = $this->server."/stats_new_private/?$var_534";
 return json_decode($this->curl($var_12,$var_109),1);
 } 
public function initial(){
 $var_13= $this->home();
 $var_534 = build([
   "u" => $var_13["userid"],
   "p" => $var_13["sp"],
   "f" => "user_stats_initial",
   "csrf_token" => $this->get_cookie("csrf_token")
   ]);
 $var_12 = $this->server."/stats_new_private/?$var_534";
 return json_decode($this->curl($var_12,$var_109),1);
 } 
public function finger(){
 echo "\tcreate fingerprint ...";
 $var_557 = num_rand(6);
 $var_558 = md5($var_557);
 $var_534 = build([
   "op"         => "record_fingerprint",
   "fingerprint"=> $var_558,
   "csrf_token" => $this->get_cookie("csrf_token")
   ]);
 $var_562 = $this->curl( $this->server."/cgi-bin/api.pl?$var_534");
 echo "\r                                                     \r"; 
 if($var_562){
   $this->finger    = $var_558;
   $this->fingerNum = $var_557;
   }
 }
public function claim($var_567,$var_568,$var_569 = 1){
 $this->finger(); 
 if( $var_568 > 1 ){
   $var_312 = $this->apikey;
   $var_71    = $this->sitekey;
   $var_313   = $this->server."/?op=home";
   // check anticaptcha bind
   if(!$var_312){
     // try using reward point 
     if($var_567 < $var_568){ 
     return [ "error" => "please enable anticaptcha !"]; } }
   else{
     $var_577   = hcaptcha($var_312,$var_313,$var_71);
     $var_569    = 0;
     }
   }
 $var_109 = build([
   "csrf_token"           => $this->get_cookie("csrf_token"),
   "op"                   => "free_play",
   "fingerprint"          => $this->finger,
   "client_seed"          => str_rand(16),
   "fingerprint2"         => $this->fingerNum,
   "pwc"                  => $var_569,
   "h_recaptcha_response" => $var_577
   ]);
 return $this->parseClaim($this->curl($this->server."/",$var_109));
 }
public function stake($var_586,$var_587,$var_588 = "2.00"){
 $var_586 = $this->satosi_to($var_586);
 if(!$var_586){ $var_586 = "0.00000001"; }
 if(!$var_587){$var_587= "hi"; }
 $var_534 = build([
   "m"            => $var_587,
   "client_seed"  => str_rand(16),
   "jackpot"      => "0",
   "stake"        => $var_586,
   "multiplier"   => $var_588,
   "rand"         => "0.5".num_rand(15),
   "csrf_token"   => $this->get_cookie("csrf_token")
   ]);
 $var_599 = explode(":",$this->curl($this->server."/cgi-bin/bet.pl?$var_534"));
 if(!$var_599[2]){ return false; }
   $var_13["winlos"] = $var_599[1];
   $var_13["number"] = $var_599[2];
   $var_13["balance"]= $var_599[3];
   $var_13["stake"]  = $var_599[4];
 return $var_13;
 }
public function satosi($var_202=0){
  return 100000000*$var_202; // stoshi
  }
public function satosi_to($var_202=0){
  return number_format(($var_202/100000000),8); // bitcoin
  }
public function puzzel($var_202){
 $var_221 = str_split($var_202);
 $var_618= ["hi","lo"];
 foreach( $var_221 as $var_339 ){
  switch($var_339):
   case 1: $var_587[] = "hi"; break;
   case 2: $var_587[] = "lo"; break;
   default: $var_587[]= $var_618[array_rand($var_618)]; break;
  endswitch; }
 return $var_587; 
 }
public function chance($var_588){
 // range 0.02 - 94.06
 if(!$var_588){ return false; }
 return round(95/$var_588,3);
 }   
public function bonus_btc($var_567){
 foreach( $this->rewards as $var_632 => $var_568 ){
  if( $var_567 >= $var_568 ) { $var_525 = $var_632; } }
 if(!$var_525){ return [ "error" => "reward point tidak cukup" ]; }
 $var_639 = build([
   "op"         => "redeem_rewards",
   "id"         => $var_525,
   "points"     => "",
   "csrf_token" => $this->get_cookie("csrf_token")
   ]);
 $var_599= explode(":",$this->curl($this->server."/?".$var_639));
 if($var_599[0] == "e"){ return [ "error" => $var_599[1] ]; }
 if($var_599[0] == "s"){
   return [ 
     "timer"      => $var_599[4],
     "bonus"      => $var_599[5],
     "btc_value"  => $var_599[6]
     ];
   }
 }
public function buy_fun_token($var_567){
 foreach( $this->fun_tokens as $var_632 => $var_568 ){
  if( $var_567 >= $var_568 ) { $var_525 = $var_632; $var_656 = $var_568; } }
 if(!$var_525){ return [ "error" => "reward point tidak cukup" ]; }
 $var_639 = build([
   "op"         => "redeem_rewards",
   "id"         => $var_525,
   "points"     => "",
   "csrf_token" => $this->get_cookie("csrf_token")
   ]);
 $var_661= readline("buy $var_525 price $var_656 poin y/n: ");
 if($var_661 != "y"){ return [ "error" => "cancel by user !" ]; }
 
 $var_599= explode(":",$this->curl($this->server."/?".$var_639));
 if($var_599[0] == "e"){ return [ "error" => $var_599[1] ]; }
 if($var_599[0] == "s"){
   return [ 
     "timer"      => $var_599[4],
     "bonus"      => $var_599[5]
     ];
   }
 } 
}
//////////////////////////////////////////////////////////////////
error_reporting(0);
$var_35 = settings($var_38,$var_140);
//verif_keys($var_38,$var_35);

$var_677 = new bot();
while(true):
 $var_678 = $var_9."not-set";
while(true): clr($var_35); strip();	
 $var_55= array();
 if(file_exists($var_371)){ $var_55 = json_decode(file_get_contents($var_371),1); }
 if( $var_55["email"] && $var_55["password"] ){ break; }
 if($var_172){ echo $var_1.$var_9.$var_172.$var_6.$var_0; strip(); }
 $var_55["email"]    = readline("email      : ");
 $var_55["password"] = readline("password   : ");
 $var_427 = readline("2fa (optional): ");
 
 $var_677->set_config($var_55);
 $var_698 = $var_677->login($var_427); 
 if($var_698["btc_address"]){
   $var_55["data"] = $var_698; 
   echo $var_5."login success data saved !".$var_0; sleep(3); saveas($var_371,$var_55); }
 $var_172 = $var_698["error"];  
endwhile;

$var_677->set_config($var_55);
$var_712  = $var_677->home();
if(!$var_712["userid"]){
 echo $var_1."error koneksi gagal terhubung !".$var_0; exit;
 }
echo "get akun info please wait..."; 
$var_124 = $var_677->users();
  $var_719 = $var_124["lottery_tickets"];
  $var_567  = $var_124["user_extras"]["reward_points"];
  $var_723   = $var_124["user"]["balance"];
  $var_725 = $var_677->satosi($var_712["balance"]);
$var_728= $var_677->get_fun_token();
  $var_730 = $var_728["fun_balance"];
echo "\r                                                   \r";
echo $var_5."conected$var_6 user balance$var_5 ".$var_712["balance"].$var_0;
echo $var_4.$var_1.rata("tickets").":$var_5 ".$var_719.$var_0;
echo $var_4.$var_1.rata("point").":$var_5 ".$var_567.$var_0;
echo $var_4.$var_1.rata("satoshi").":$var_5 ".$var_723.$var_0;
echo $var_4.$var_1.rata("fun token").":$var_5 ".$var_730.$var_0;
if($var_525 = $var_712["bonus"]){ 
  foreach($var_525 as $var_760){ echo $var_4.$var_1.rata("bonus").":$var_5 ".$var_760.$var_0; }
  }
strip();

if($var_55["apikey"]){ $var_678 =$var_4."aktif"; }
echo $var_6.$var_1."[1]$var_5 set anticaptcha ($var_678".$var_5.")".$var_0;
echo $var_6.$var_1."[2]$var_5 start faucet claim".$var_0;
echo $var_6.$var_1."[3]$var_5 MULTIPLY BTC".$var_0;
echo $var_6.$var_1."[4]$var_5 claim reward Bonus".$var_0;
$var_787 = readline("options: "); strip();

switch($var_787):
 case 1:
  $var_312 = readline($var_1."anticaptcha: ");
  if($var_312){ saveas($var_371,["apikey" => $var_312]); }
  break;
 
 case 2:
  while(true):
   $var_712  = $var_677->home();
   $var_568  = $var_712["cost"];
   if($var_798 = $var_712["timer"]){ timer("wait",$var_798); continue; }
   $var_801 = $var_677->claim($var_567,$var_568);
   if($var_801["reward"]){
     $var_806  = rata($var_801["number"],5);
     $var_808 = $var_801["reward"];
     $var_723 = $var_801["balance"];
     $var_567= $var_801["point"]; 
     echo $var_6."number$var_5 $var_806$var_6 claim$var_5 $var_808$var_6 balance$var_5 $var_723".$var_0;
     }
   if($var_801["error"]){ echo $var_9.$var_1.$var_801["error"].$var_0; break; }
  endwhile;
  break;
 
 case 3:
   
  echo $var_6."chance to win$var_4 0.02 - 94.04 %".$var_0;
  $var_588= $var_677->chance(readline($var_5."input(default=30): "));
  $var_835    = $var_588;
  strip();
  
  echo $var_6."masukan nominal bet awal dalam bentuk$var_4 satoshi ".$var_0;
  $var_840 = readline($var_5."input(default=1): "); $var_586  = $var_840;
  strip();
  
  $var_844 = 0;
  echo $var_6."pilihan$var_5 high = hi |$var_8 lower = lo |$var_4 auto = auto ".$var_0;
  $var_850  = readline($var_5."input(default=auto): ");
  switch($var_850){
    case "hi": $var_587 = "hi"; break;
    case "lo": $var_587 = "lo"; break;
      default: $var_587 = "hi"; $var_844 = 1; break;
    }
  strip();
  
  echo $var_6."masuakn martingle$var_4 1 - 100,$var_6 gandakan bet saat loss ".$var_0;
  $var_861 = readline($var_5."input(default=1.5): ");
  if(!is_numeric($var_861)){ $var_861 = 1; }
  strip();
  
  echo $var_6."maxloss jika los lebih dari value bet kembali ke awal ".$var_0;
  $var_867 = readline($var_5."input(default=0): ");
  if(!is_numeric($var_867)){ $var_867 = 0; }
  strip();
  echo $var_6."masukan jumlah$var_5 take profit$var_6 dalam bentuk$var_4 satoshi".$var_0;
  $var_876 = readline($var_5."input(default=100): ");
  if(!is_numeric($var_876)){ $var_876 = 100; }
  strip();
  
  #echo $pth."set interval or delay per bet".$t;
  #$intv = readline($ijo."input: ");
  #if(!is_numeric($intv)){ $intv = 0 ; }
  $var_798= (0.5*10000);
  #strip();
  
  $var_881= 0;
  $var_882  = 0;
  $var_883  = 0;
  
  if( $var_723 < $var_586 ){ echo "balance tidak cukup !".$var_0; break; }
  while(true):      
   if(! $var_887 = $var_677->stake($var_586,$var_587,$var_588) ){ continue; }
   $var_892= $var_887["number"];
   $var_723   = $var_887["balance"];
   if(!$var_677->satosi($var_887["stake"])){
     echo $var_1.$var_9."chance terlalu tinggi !".$var_0; break;
     }
   $var_881 = floor($var_881+$var_586);
   $var_904  = $var_6.$var_588.$var_1.$var_4."[$var_587] ";
   
   switch($var_887["winlos"]){
     case "w":
       $var_911 = $var_5.$var_677->satosi_to($var_586);
       if($var_915 > 3 && $var_844){ 
       if($var_587=="hi"){ $var_587 = "lo"; }else{ $var_587 = "hi"; }
       }       
       $var_920++; $var_915 = 0;
       $var_586 = $var_840;
       if($var_835 < 3){ $var_588 = $var_677->chance(rand(10,30)); } 
       break;
     case "l": 
       $var_911 = $var_8.$var_677->satosi_to($var_586);
       $var_915++; $var_920 = 0;
       $var_588 = $var_835;
       if( $var_867 && $var_915 >= $var_867 ){ $var_586 = $var_840; break; }
       $var_586 = ($var_586*$var_861);
       break;
     }
     
   echo "\r                                                     \r"; 
   echo $var_904.$var_911.$var_6." | ".$var_4.rata($var_892,5).$var_6." | ".$var_5.$var_723.$var_0;   
   $var_952 = floor($var_677->satosi($var_723) - $var_725);
   if($var_915 > $var_883){ $var_883 = $var_915; }
   if($var_920 > $var_882){ $var_882 = $var_920; }
      
   echo $var_5."win: $var_882$var_8 los: $var_883$var_6 profit: $var_952$var_4 wager: $var_881";
   
   if( $var_677->satosi($var_723) < $var_586 ){ 
    echo $var_0.$var_1.$var_8."stop loss low balance ".$var_0; break; }
   /*
   if( $maxlos && $ls >= $maxlos ){
     $bet    = $base; $ls = 0; 
     $chance = $bc;
     if($bc < 3) { $chance = $bot->chance(rand(10,30)); }
     if($auto){ if($hilo=="hi"){ $hilo = "lo"; }else{ $hilo = "hi"; } } 
     }*/
  if( $var_952 >= $var_876 ){ 
    echo $var_0.$var_1.$var_5."session clear target profit $var_952".$var_0; break; }
  usleep($var_798);  
  endwhile;
  
  break; 
 case 4:
  echo $var_1.$var_6."[1]$var_5 free btc bonus".$var_0;
  echo $var_1.$var_6."[2]$var_5 fun tokens bonus".$var_0;
  $var_995 = readline("pilih bonus: "); strip();
  switch($var_995){
   case 1:
    $var_997 = $var_677->bonus_btc($var_567);
    if(!$var_997){ break; }
    if($var_1001=$var_997["error"]){ echo $var_6.$var_1001.$var_0; strip(); break; }
    foreach( $var_997 as $var_1007 => $var_1008 ){ 
      echo $var_1.$var_6.rata($var_1007,8)." ".$var_5.$var_1008.$var_0; }
    strip();
    break;
   case 2:
    $var_997 = $var_677->buy_fun_token($var_567);
    if(!$var_997){ break; }
    if($var_1001=$var_997["error"]){ echo $var_6.$var_1001.$var_0; strip(); break; }
    foreach( $var_997 as $var_1007 => $var_1008 ){ 
      echo $var_1.$var_6.rata($var_1007,8)." ".$var_5.$var_1008.$var_0; }
    strip();
    break;
   }
  break;
endswitch;
readline("press enter continue ");
endwhile;

