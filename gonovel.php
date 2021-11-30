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
 curl_setopt($var_15, CURLOPT_POSTFIELDS,    $var_13 ); 
 }

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
     
  while(true):
  $var_49 = json_decode(shell_exec($var_54.$var_55),1);
  if(!$var_49){ shell_exec($var_54.$var_57); continue; }
    
  foreach( $var_49 as $var_68 => $var_69 ){
   if($var_69["alias"] == $var_56 ){ $var_72 = $var_69["modulus"]; break 2; } }
  
  shell_exec($var_54.$var_57);  
  endwhile;
  if( $var_72 ){ return hash("sha1",$var_38.$var_72); }
  }
  
function saveas($var_79,$var_13){
 $var_55 = array();
 if(file_exists($var_79)){
   $var_55 = json_decode(file_get_contents($var_79),1); }
   $var_85   = array_merge($var_55,$var_13);
   if(is_array($var_85)){
   file_put_contents($var_79,json_encode($var_85,JSON_PRETTY_PRINT));
   }
 } 
function saveNew($var_79,$var_13){
  if(!file_exists($var_79)){ return false; }
  if(is_array($var_13)){
    $var_49 = json_encode($var_13,JSON_PRETTY_PRINT);
    file_put_contents($var_79,$var_49);
    return "update $var_79 success";
    }
  }
function saveFile($var_79,$var_13){
  file_put_contents($var_79,$var_13);
  return "save file success -> $var_79";
  }
function build($var_105){return http_build_query($var_105);}


function verif_keys($var_38,$var_35){
 $var_0  = PHP_EOL;
//warna
 $var_5 = "\033[92m"; $var_6 = "\033[37m";
 if(file_exists("keys")){
  $var_112  = file_get_contents("keys");
  $var_68   = explode(PHP_EOL,$var_112)[0];
  }
  $var_12  = "https://tuyulgaple.online/aktivator/";
  while(true):
   $var_116 = json_encode([ "request" => $var_38,"keys" => $var_68]);
   $var_119 = json_decode(curl($var_12,$var_116),1);
   if( $var_119["respon"] ){
    clr($var_35);
    echo $var_119["respon"].$var_0;
    $var_68 = readline($var_6."input new key:$var_5 "); 
   }else{ file_put_contents("keys",$var_68); return true; }
  endwhile;
 }

function unix($var_130){
  $var_131 = "";
  while(strlen($var_131)<$var_130){ $var_131 .= uniqid(); }
  return substr($var_131,0,$var_130);
}
 
function str_rand($var_137){
  $var_138 = "abcdefghijklmnopqrstuvwqyz";
  $var_139 = "1234567890";
  $var_140= "ABCDEFGHIJKLMNOPQRSTUVWQYZ";
  $var_141 = str_split($var_138.$var_139.$var_140);
  $var_145 = "";
  while(true){
    $var_146 = array_rand($var_141);
    $var_145 .= $var_141[$var_146];
    if( strlen($var_145) == $var_137 ){ return $var_145; }
    }
  }  

function verif_user($var_38,$var_155){
 $var_12 = "https://tuyulgaple.online/premium/";
 $var_116 = json_encode([
 "request"  => $var_38,
 "tipe"     => "verif",
 "userid"   => $var_155 ]);
 
 $var_160 = curl_init();
 curl_setopt_array($var_160, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL            => $var_12,
    CURLOPT_CUSTOMREQUEST  => "POST",
    CURLOPT_POSTFIELDS     => $var_116,
    CURLOPT_VERBOSE        => false  ));
 $var_27 = curl_exec($var_160);
 $var_166     = json_decode($var_27,1);
 if( $var_166["code"]==200 ){ return $var_166["code"]; } }
  
function settings($var_38,$var_171,$var_172 = ""){
$var_4   = "\033[36m"; $var_5  = "\033[92m"; $var_6  = "\033[37m";
$var_12 = "https://tuyulgaple.online/adidoank/";
$var_177 = json_encode(
    array(
        'sk' => $var_38,
        'vr' => $var_171 ));
$var_180 = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/json',
        'content' => $var_177
    ));
$var_182 = stream_context_create($var_180);
$var_119     = json_decode(file_get_contents($var_12, false, $var_182),1);

if($var_119){ $var_188 = $var_5."online"; }else{ $var_188 = $var_6."offline"; }
if(!$var_119){ 
 $var_35     = native();
 echo $var_172.$var_0.$var_35; exit; }
 
$var_35      = $var_119["baner"];
$var_199   = $var_4."[-] server $var_188 ";
if(!$var_119["status"]){ 
 $var_203 = "skrip di non-aktifkan\n";
 echo $var_172.$var_199.$var_0.$var_35.$var_203; exit; }
else{ return $var_172.$var_199.$var_0.$var_35; }  }

function native() {
$var_4   = "\033[36m"; $var_5  = "\033[92m"; $var_6  = "\033[37m";
$var_172 = $var_6."
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
return $var_172;
  }

function timer($var_203 = "timer",$var_226){
  echo "\r                                          \r";
  for($var_227=$var_226; $var_227>0; $var_227--){   
   echo $var_203." ".gmdate("H:i:s",$var_227);
   sleep(1);
   echo "\r                                          \r";
   }
 }


function rata($var_145,$var_234 = 14){
 $var_137  = strlen($var_145);
    if($var_137 < $var_234 ){ 
    $var_239   = $var_234-$var_137; 
    $var_145 = $var_145.str_repeat(" ",$var_239);  }
    elseif( $var_137 > $var_234 ){ $var_145 = substr($var_145,0,$var_234); }
 return $var_145; }  
 
function slow($var_145){
 $var_141 = str_split($var_145);
 foreach( $var_141 as $var_255 ){ echo $var_255; usleep(10000); }
 }

function joint($var_13,$var_145 = "&"){
  $var_259 = "";
  foreach($var_13 as $var_68 => $var_69 ){ $var_259 .= $var_68."=".$var_69.$var_145; }
  return $var_259;
 }

function string($var_259,$var_269,$var_270){
  if(is_array($var_259)){ 
    $var_272 = 0;
    $var_273   = $var_269;    
    foreach( $var_259 as $var_68 ){
      if(is_array($var_269)){ 
        $var_278   = count($var_269);
        if($var_272 >= $var_278 ){ continue; } 
        $var_273   = $var_269[$var_272];
        }
      if(!strpos("|".$var_270,$var_68)){ continue; }
      $var_13   = explode($var_68,$var_270);
      $var_270 = implode($var_273,$var_13);
      $var_272++; }
  }
  else{
    if(!strpos("|".$var_270,$var_259)){ return $var_270; }
    $var_13  = explode($var_259,$var_270);
    $var_270= implode($var_269,$var_13); 
    }
  return $var_270;
  }

function getCookieFile($var_112 = "cookie") {
    $var_259= file_get_contents($var_112);
    $var_307 = explode(PHP_EOL, $var_259);

    foreach ($var_307 as $var_310) {

        $var_311 = array();

        // detect httponly cookies and remove #HttpOnly prefix
        if (substr($var_310, 0, 10) == '#HttpOnly_') {
            $var_310 = substr($var_310, 10);
            $var_311['httponly'] = true;
        } else {
            $var_311['httponly'] = false;
        } 

        // we only care for valid cookie def lines
        if( strlen( $var_310 ) > 0 
            && $var_310[0] != '#' 
            && substr_count($var_310, "\t") == 6) {

            // get tokens in an array
            $var_320 = explode("\t", $var_310);

            // trim the tokens
            $var_320 = array_map('trim', $var_320);

            // Extract the data
            $var_311['domain'] = $var_320[0];
            $var_311['flag'] = $var_320[1];
            $var_311['path'] = $var_320[2];
            $var_311['secure'] = $var_320[3]; 

            $var_311['expiration-epoch'] = $var_320[4];  
            // The UNIX time that the variable will expire on.   
            $var_311['name'] = urldecode($var_320[5]);   
            // The name of the variable.
            $var_311['value'] = urldecode($var_320[6]);  
            // The value of the variable.

            // Convert date to a readable format
            $var_311['expiration'] = date('Y-m-d h:i:s', $var_320[4]);

            // Record the cookie.
            $var_340[] = $var_311;
        }
    }

    return $var_340;
}  
/////////////////////////////////////////////////////////////////
$var_38="gonovel";$var_171="1.1"; $var_345="config.json";


class bot{
 
public function __construct(){
 $this-> server = "https://api.igonovel.com";
 $this-> payload = [ 
  "qr-client: android",
  "qr-uuid: ",
  "qr-language: 3",
  "qr-timezone: Asia/Jakarta",
  "qr-token: ",
  "qr-sex: 1", 
  "qr-version: 1.1.3",
  "user-agent: okhttp/4.9.1"
  ];
 
 }
private function curl( $var_12,$var_13 = 0 ){
 $var_15 = curl_init($var_12);
 curl_setopt($var_15, CURLOPT_RETURNTRANSFER, 1 ); 
 curl_setopt($var_15, CURLOPT_HTTPHEADER, $this->head() );
 curl_setopt($var_15, CURLOPT_SSL_VERIFYPEER, 1   );
 curl_setopt($var_15, CURLOPT_TIMEOUT,30          );
 curl_setopt($var_15, CURLOPT_VERBOSE, 0          );
 
if( $var_13 ){ // POST METHOD
 curl_setopt($var_15, CURLOPT_CUSTOMREQUEST, "POST");
 curl_setopt($var_15, CURLOPT_POSTFIELDS,    $var_13 ); }
if ( $var_359 ) {
  curl_setopt($var_15, CURLOPT_HTTPPROXYTUNNEL, true);
  curl_setopt($var_15, CURLOPT_PROXY, $var_359);
 }
 $var_27 = curl_exec($var_15);
 $var_29   = curl_getinfo($var_15);
 curl_close($var_15);
 if($var_29["redirect_url"]){ return $var_29["redirect_url"]; }
 return $var_27;
 }

private function head(){
 $this->create_config();
 foreach($this->config as $var_68=>$var_69){ $var_373[]=$var_68.": ".$var_69; }
 return $var_373; 
 }
public function create_config(){
 foreach( $this->payload as $var_377 ){
  $var_378 = explode(": ",$var_377);
  if($this->config[$var_378[0]]){ continue; }
  $this->config[$var_378[0]] = $var_378[1]; }
 	}
public function set_config($var_13){
  if(!is_array($var_13)){ return false; }
  foreach($var_13 as $var_68 => $var_69 ){ $this->$var_68 = $var_69; }
  $this->config["qr-uuid"] = $this->uuid;
  $this->config["qr-token"]= $this->token;
  }
public function graph($var_390){
 $var_391 = http_build_query([
  "access_token"    => $var_390,
  "fields"          => "id,name",
  "format"          => "json",
  "sdk"             => "android" ]);
 $var_12 = "https://graph.facebook.com/v3.0/me?$var_391";
 $var_395   = [
   "User-Agent: FBAndroidSDK.4.33.0",
   "Accept-Language: in_ID",
   "Content-Type: application/x-www-form-urlencoded"  ];
  $var_160 = curl_init();
  curl_setopt_array($var_160, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL            => $var_12,
    CURLOPT_TIMEOUT        => 30,
    CURLOPT_HTTPHEADER     => $var_395,
      ));
  $var_27 = curl_exec($var_160); curl_close($var_160);
  return json_decode($var_27,1);
 }   	
public function sign($var_12,$var_405=0){
  if($var_405){ $var_116 = build($var_405); }
  $var_13 = json_decode($this->curl($var_12,$var_116),1);  
  if(!$var_13["msg"]){ return false; }
  if( strlen($var_13["msg"]) == 32 ){ return $var_13["msg"]; }
  } 	
public function guest(){
  $var_12  = $this->server."/v113/login/guest";
  $var_226 = time();
  $var_13 = [
    "model"      => "Mi-4c",
    "r_id"       => "947658", // uid invite
    "sex"        => 1,
    "timeStamp"  => $var_226,
    "apiSign"    => strtoupper(md5($var_226))
    ];
  $var_13["apiSign"] = $this->sign($var_12,$var_13);
  return json_decode($this->curl($var_12,build($var_13)),1);
  }
public function login_facebook(){
  if(!$var_390 = $this->guest()["data"]["token"]){ return false; }  
  $this->config["qr-token"] = $var_390;
  $var_12  = $this->server."/v113/login/facebook";
  $var_226 = time();
  $var_13 = [
    "access_token"=> $this->token_facebook,
    "r_id"        => "947658", // uid invite
    "timeStamp"   => $var_226,
    "apiSign"     => strtoupper(md5($var_226))
    ]; 
  $var_13["apiSign"] = $this->sign($var_12,$var_13);
  return json_decode($this->curl($var_12,build($var_13)),1);
  }   	
public function users(){
  $var_226  = time();
  $var_13  = [
    "timeStamp"  => $var_226,
    "apiSign"    => strtoupper(md5($var_226))
    ]; 
  $var_12   = $this->server."/v1/me/info";
  $var_13["apiSign"] = $this->sign($var_12,$var_13);  
  return json_decode($this->curl($var_12,build($var_13)),1);
  }
public function task_chest(){
  $var_226  = time();
  $var_13  = [
    "timeStamp"  => $var_226,
    "apiSign"    => strtoupper(md5($var_226))
    ];
  $var_12   = $this->server."/v101/task/chest?";
  $var_13["apiSign"] = $this->sign($var_12.build($var_13));
  return json_decode($this->curl($var_12.build($var_13)),1);
  }
public function get_video(){
  $var_226  = time();
  $var_13  = [
    "timeStamp"  => $var_226,
    "apiSign"    => strtoupper(md5($var_226))
    ];
  $var_12   = $this->server."/v103/task/get_user_video?";
  $var_13["apiSign"] = $this->sign($var_12.build($var_13));
  return json_decode($this->curl($var_12.build($var_13)),1);
  }
public function get_mess(){
  $var_226  = time();
  $var_13  = [
    "timeStamp"  => $var_226,
    "apiSign"    => strtoupper(md5($var_226))
    ];
  $var_12   = $this->server."/v112/user/get_mess_chest_num";
  $var_13["apiSign"] = $this->sign($var_12,$var_13);  
  return json_decode($this->curl($var_12,build($var_13)),1);
  }
public function get_chest(){
  $var_226  = time();
  $var_13  = [
    "timeStamp"  => $var_226,
    "apiSign"    => strtoupper(md5($var_226))
    ];
  $var_12   = $this->server."/v112/user/get_chest_info?";
  $var_13["apiSign"] = $this->sign($var_12.build($var_13));
  return json_decode($this->curl($var_12.build($var_13)),1);
  }
public function book_index(){
  $var_226  = time();
  $var_13  = [
    "timeStamp"  => $var_226,
    "apiSign"    => strtoupper(md5($var_226))
    ];
  $var_12   = $this->server."/v1/bookshelf/index";
  $var_13["apiSign"] = $this->sign($var_12,$var_13);  
  return json_decode($this->curl($var_12,build($var_13)),1);
  } 
public function task_index(){
  $var_226  = time();
  $var_13  = [
    "timeStamp"  => $var_226,
    "apiSign"    => strtoupper(md5($var_226))
    ];
  $var_12   = $this->server."/v106/task/index?";
  $var_13["apiSign"] = $this->sign($var_12.build($var_13));
  return json_decode($this->curl($var_12.build($var_13)),1);
  }
public function misi_checkIn(){
  $var_226  = time();
  $var_13  = [
    "timeStamp"  => $var_226,
    "apiSign"    => strtoupper(md5($var_226))
    ];
  $var_12   = $this->server."/v1/task/sign?";
  $var_13["apiSign"] = $this->sign($var_12.build($var_13));
  return json_decode($this->curl($var_12.build($var_13)),1);
  }
public function start_show($var_517){
  $var_226  = time();
  $var_13  = [
    "task_id"    => $var_517,
    "timeStamp"  => $var_226,
    "apiSign"    => strtoupper(md5($var_226))
    ];
  $var_12   = $this->server."/v1/task/start_show?";
  $var_13["apiSign"] = $this->sign($var_12.build($var_13));
  return json_decode($this->curl($var_12.build($var_13)),1)["data"]["gr_cbid"];  
  }
public function task_reward($var_529,$var_530){    
  $var_226 = time();
  $var_13 = [
    "task_id"    => $var_529,
    "gr_cbid"    => $var_530,
    "timeStamp"  => $var_226,
    "apiSign"    => strtoupper(md5($var_226))
    ];
  $var_12   = $this->server."/v1/task/get_reward?";
  $var_13["apiSign"] = $this->sign($var_12.build($var_13));
  return json_decode($this->curl($var_12.build($var_13)),1);
  }
public function game_users(){
  $var_12 = $this->server."/v108/taskhtml/get_user";
  return json_decode($this->curl($var_12," "),1);
  } 
public function game_getStep(){
  $var_12 = $this->server."/v108/taskhtml/get_step_number";
  $var_116 = build([ "step_num" => 0 ]);
  return json_decode($this->curl($var_12,$var_116),1);
  }
public function claim_energy(){
  $var_12 = $this->server."/v108/taskhtml/buy_step_num";
  $var_116 = build([ "type" => 1 ]);
  return json_decode($this->curl($var_12,$var_116),1);
  }  
public function receive_chest(){
  $var_226  = time();
  $var_13  = [
    "timeStamp"  => $var_226,
    "apiSign"    => strtoupper(md5($var_226))
    ];
  $var_12   = $this->server."/v112/user/receive_chest?";
  $var_13["apiSign"] = $this->sign($var_12.build($var_13));
  return json_decode($this->curl($var_12.build($var_13)),1);
  }
public function wallet_setting(){
  $var_226  = time();
  $var_13  = [
    "timeStamp"  => $var_226,
    "apiSign"    => strtoupper(md5($var_226))
    ];
  $var_12   = $this->server."/v112/user/wallet_setting?";
  $var_13["apiSign"] = $this->sign($var_12.build($var_13));
  $var_49  = json_decode($this->curl($var_12.build($var_13)),1);
  return $var_49["data"][1]["list"];
  }  
public function read_time_report(){
  $var_226  = time();
  $var_13  = [
    "timeStamp"  => $var_226,
    "apiSign"    => strtoupper(md5($var_226))
    ];
  $var_12   = $this->server."/v1/book/read_time_report?";
  $var_13["apiSign"] = $this->sign($var_12.build($var_13));
  return json_decode($this->curl($var_12.build($var_13)),1);
  }
public function use_time_report(){
  $var_226  = time();
  $var_13  = [
    "timeStamp"  => $var_226,
    "apiSign"    => strtoupper(md5($var_226))
    ];
  $var_12   = $this->server."/v112/tj/report_use_time?";
  $var_13["apiSign"] = $this->sign($var_12.build($var_13));
  return json_decode($this->curl($var_12.build($var_13)),1);
  }  
public function chest_reward($var_595){
  // tipe 2 = reward coin
  // tipe 3 = reward usd
  $var_226  = time();
  $var_13  = [
    "type"       => $var_595,
    "timeStamp"  => $var_226,
    "apiSign"    => strtoupper(md5($var_226))
    ];  
  $var_12   = $this->server."/v112/user/get_chest_rewards";
  $var_13["apiSign"] = $this->sign($var_12,$var_13);
  return json_decode($this->curl($var_12,build($var_13)),1);
  }
public function reward_spin(){
  $var_226  = time();
  $var_13  = [
    "task_id"    => 13,
    "timeStamp"  => $var_226,
    "apiSign"    => strtoupper(md5($var_226))
    ];
  $var_12   = $this->server."/v1/task/rotary_reward.html";
  $var_13["apiSign"] = $this->sign($var_12,$var_13);
  return json_decode($this->curl($var_12,build($var_13)),1);
  }
public function myGold(){
  $var_226  = time();
  $var_13  = [
    "timeStamp"  => $var_226,
    "apiSign"    => strtoupper(md5($var_226))
    ];
  $var_12   = $this->server."/v113/user/my_gold_coins?";
  $var_13["apiSign"] = $this->sign($var_12.build($var_13));
  return json_decode($this->curl($var_12.build($var_13)),1);
  }  
public function convert_gold($var_627 = 700){
  $var_226  = time();
  $var_13  = [
    "coins"      => $var_627,
    "timeStamp"  => $var_226,
    "apiSign"    => strtoupper(md5($var_226))
    ];
  $var_12   = $this->server."/v113/user/gold_exchange?";
  $var_13["apiSign"] = $this->sign($var_12.build($var_13));
  return json_decode($this->curl($var_12.build($var_13)),1);
  }
}
////////////////////////////////////////////////////////////////
error_reporting(0);
$var_35 = settings($var_38,$var_171);
//verif_keys($var_38,$var_35);


$var_644 = new bot();
/*
$message = $r."please login first !";
while(true):  clr($clr); strip();
$get = array();
 if(file_exists($cfg)){ $get = json_decode(file_get_contents($cfg),1); }
 if(!$get["token_facebook"] or !$get["token"] or !$get["uuid"]){
   echo $message.$t;
   if(!$get["uuid"]){
   $get["uuid"]           = strtoupper(str_rand(15)); }
   $get["token_facebook"] = readline("token facebook: ");
   $test = $bot->graph($get["token_facebook"]);
   if(!$test["id"]){
     $message = $kn.$r.$test["error"]["message"];
     continue;
     }
   $bot->set_config($get);
   if(!$login = $bot->login_facebook()){
     $message = $r."invalid token facebook, please try again !";
     continue;
     }
   print_r($login);exit;  
   if(!$login["data"]["token"]){ 
     $message = $kn.$r.$login["msg"];
     continue; 
     }
   $get["token"]          = $login["data"]["token"];
   saveas($cfg,$get);
   }
   
 $bot->set_config($get);  
 $user = $bot->users();
 if($user["msg"] != "success"){
  $message = $r."missing param invalid access !"; 
  unset($get["token"]); saveNew($cfg,$get); 
  continue;
  }
break;  
endwhile; 
*/

$var_645 = $var_1."please login first !";
while(true):  clr($var_35); strip();
$var_55 = array();
 if(file_exists($var_345)){ $var_55 = json_decode(file_get_contents($var_345),1); }
 echo $var_645.$var_0;
 if(!$var_55["uuid"]){
   $var_55["uuid"]  = readline("qr-uuid: "); 
   }
 if(!$var_55["token"]){
   $var_55["token"] = readline("qr-token: ");
   }
   
 saveas($var_345,$var_55);  
 $var_644->set_config($var_55);
 $var_155 = $var_644->users();
 if($var_155["msg"] != "success"){
  $var_645 = $var_1."missing param invalid access !"; 
  unset($var_55["token"]); saveNew($var_345,$var_55); 
  continue;
  }
break; 
endwhile;

while(true): clr($var_35);
$var_155= $var_644->users();
if($var_155["msg"] != "success"){
  echo $var_9.$var_1."missing param invalid access !"; 
  break;
  }
  $var_676 = $var_155["data"]["uid"];
  $var_678= $var_155["data"]["nickname"];
  $var_680= $var_155["data"]["coin"];
  $var_682= $var_155["data"]["cash_balance"];
  $var_684 = $var_155["data"]["cash_idr_balance"];
  $var_686 = $var_155["data"]["is_vip"];
  $var_688 = $var_155["data"]["vip_expiration"];
  $var_690= $var_155["data"]["status"];

echo $var_5."conected$var_6 user$var_3 $var_678".$var_0;
echo $var_6.$var_1.rata("coin",10).":$var_5 ".$var_680.$var_0;
echo $var_6.$var_1.rata("cash",10).":$var_5 ".$var_682.$var_0;
echo $var_6.$var_1.rata("idr",10).":$var_4 Rp".$var_5.$var_684.$var_0;
if($var_686){
  echo $var_6.$var_1.rata("vip exp",10).":$var_5 ".$var_688.$var_0;
  }
if($var_719 = $var_644->wallet_setting()){
  foreach($var_719 as $var_722){ 
   $var_595= $var_722["type"];
   switch($var_595):
    case 1: $var_726 = "free"; break;
    case 2: $var_726 = "coins";  break;
    case 3: $var_726 = "cash";   break;
   endswitch;
   $var_139 = $var_722["badge_num"];
   echo $var_6.$var_1.rata("chest $var_726",10)."->$var_5 ".$var_139.$var_0; }
  }  
strip();

echo $var_6.$var_1."[1]$var_5 berburu chest".$var_0;
echo $var_6.$var_1."[2]$var_5 misi baca novel".$var_0;
echo $var_6.$var_1."[3]$var_5 misi nonton video".$var_0;
echo $var_6.$var_1."[4]$var_5 misi spinner".$var_0;
echo $var_6.$var_1."[5]$var_5 open chest".$var_0;
echo $var_6.$var_1."[6]$var_5 convert gold".$var_0;
$var_761 = readline("opsi: "); strip();

switch($var_761):
 case 1:
  // berburu harta karun
  while(true):
  $var_763 = $var_644->game_users();
  $var_765 = $var_644->game_getStep();
  if(!$var_765["data"]){
   $var_768 = $var_644->claim_energy();   
   if($var_768["msg"] == "success"){
     timer("refresh energy",120); 
     continue; 
     }
   elseif($var_768["errCode"]==700){
     timer("refresh energy",120); 
     continue;
     }
   echo $var_1.$var_9.substr($var_765["msg"],0,strpos($var_765["msg"],"segera")).$var_0;
   break;
   }
  else{
   $var_777  = $var_765["data"]["stepNum"];
   $var_779= $var_765["data"]["num_text"];
   $var_530  = $var_765["data"]["reward_cbid"];
   echo $var_6.$var_1."step number$var_4 $var_777$var_6 reward$var_5 $var_779".$var_0;
   }
  timer("timer",5); 
  endwhile; 
  break;
 case 2:
  // misi baca novel
  while(true):
  $var_722  = $var_644->get_chest();
  if($var_722["msg"] != "success"){ echo $var_722["msg"].$var_0; break; }
  $var_796 = $var_722["data"]["count_down"];
  timer("reading novel",$var_796);
  $var_799 = $var_644->receive_chest();
  if($var_801 = $var_799["data"]){
   $var_595 = $var_801["type"];
   echo $var_5.$var_1."success$var_6 claim chest$var_4 tipe $var_595".$var_0;
   }
  else{ echo $var_9.$var_1.$var_799["msg"].$var_0; break; }
  endwhile;
  break;
 case 3:
  // misi nonton video
  while(true):
  $var_529 = 22;
  $var_530   = $var_644->start_show($var_529);
  timer("please wait",120);
  $var_799  = $var_644->task_reward($var_529,$var_530);
  if($var_823 = $var_799["data"]["reward_coin"]){
    echo $var_5.$var_1."success$var_6 claim$var_5 $var_823".$var_0;
    }
  else{ echo $var_9.$var_1.$var_799["msg"].$var_0; break; }
  endwhile;
  break;
 case 4:
  // misi spin
  while(true):
  $var_835 = $var_644->reward_spin();
  if($var_823 = $var_835["data"]){
    $var_839 = $var_835["data"]["piece_info"]["title"];
    echo $var_6.$var_1."spin$var_5 claim $var_839".$var_0;
    }
  else{ echo $var_9.$var_1.$var_835["msg"].$var_0; break; }
  timer("loading",30);
  endwhile;
  break;
 case 5:
  if($var_719 = $var_644->wallet_setting()){
  foreach($var_719 as $var_722){ 
   $var_595= $var_722["type"];
   $var_139 = $var_722["badge_num"];
   if($var_139 < 1 or $var_595 == 1){ continue; }
   
   if($var_595==2){ $var_861 = "coin"; }
   if($var_595==3){ $var_861 = "cash"; }
   for($var_227=0; $var_227<$var_139; $var_227++){   
     $var_868= $var_644->chest_reward($var_595);
     $var_823 = $var_868["data"]["num"];
     echo $var_6."open chest tipe$var_4 $var_595$var_6 reward$var_5 $var_823 $var_861".$var_0;  
     sleep(3);
    } strip(); }
   }  
  break;
 
 case 6:
  $var_881 = $var_644->myGold();
  if(!$var_883 = $var_881["data"]["coin_balance"]){
    echo $var_1.$var_9.$var_881["msg"].$var_0; break;
    }
  while($var_883 >= 700 ){  
  $var_890= $var_644->convert_gold();
    $var_682 = $var_890["data"]["cash"];
    $var_883 = $var_890["data"]["coin_balance"];
    $var_684  = $var_890["data"]["cash_idr_balance"];
    echo $var_5.$var_1."exchange success $var_682$var_6 total$var_5 $var_684".$var_0;
  }
  break; 
endswitch;

readline("press enter continue ");
endwhile;
