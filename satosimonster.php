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
 $var_40 = array();
 if(file_exists($var_38)){
   $var_40 = json_decode(file_get_contents($var_38),1); }
   $var_44   = array_merge($var_40,$var_13);
   if(is_array($var_44)){
   file_put_contents($var_38,json_encode($var_44,JSON_PRETTY_PRINT));
   }
 } 

function build($var_50){return http_build_query($var_50);}


function verif_keys($var_52,$var_35){
 $var_0  = PHP_EOL;
//warna
 $var_5 = "\033[92m"; $var_6 = "\033[37m";
 if(file_exists("keys")){
  $var_57  = file_get_contents("keys");
  $var_58   = explode(PHP_EOL,$var_57)[0];
  }
  $var_12  = "https://tuyulgaple.online/aktivator/";
  while(true):
   $var_61 = json_encode([ "request" => $var_52,"keys" => $var_58]);
   $var_64 = json_decode(curl($var_12,$var_61),1);
   if( $var_64["respon"] ){
    clr($var_35);
    echo $var_64["respon"].$var_0;
    $var_58 = readline($var_6."input new key:$var_5 "); 
   }else{ file_put_contents("keys",$var_58); return true; }
  endwhile;
 }
 

function settings($var_52,$var_76,$var_77 = ""){
$var_4   = "\033[36m"; $var_5  = "\033[92m"; $var_6  = "\033[37m";
$var_12 = "https://tuyulgaple.online/adidoank/";
$var_82 = json_encode(
    array(
        'sk' => $var_52,
        'vr' => $var_76 ));
$var_85 = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/json',
        'content' => $var_82
    ));
$var_87 = stream_context_create($var_85);
$var_64     = json_decode(file_get_contents($var_12, false, $var_87),1);

if($var_64){ $var_93 = $var_5."online"; }else{ $var_93 = $var_6."offline"; }
if(!$var_64){ 
 $var_35     = native();
 echo $var_77.$var_0.$var_35; exit; }
 
$var_35      = $var_64["baner"];
$var_104   = $var_4."[-] server $var_93 ";
if(!$var_64["status"]){ 
 $var_108 = "skrip di non-aktifkan\n";
 echo $var_77.$var_104.$var_0.$var_35.$var_108; exit; }
else{ return $var_77.$var_104.$var_0.$var_35; }  }

function native() {
$var_4   = "\033[36m"; $var_5  = "\033[92m"; $var_6  = "\033[37m";
$var_77 = $var_6."
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
return $var_77;
  }

function timer($var_108 = "timer",$var_131){
  echo "\r                                          \r";
  for($var_132=$var_131; $var_132>0; $var_132--){   
   echo $var_108." ".gmdate("H:i:s",$var_132);
   sleep(1);
   echo "\r                                          \r";
   }
 }


function rata($var_138,$var_139 = 14){
 $var_140  = strlen($var_138);
    if($var_140 < $var_139 ){ 
    $var_144   = $var_139-$var_140; 
    $var_138 = $var_138.str_repeat(" ",$var_144);  }
    elseif( $var_140 > $var_139 ){ $var_138 = substr($var_138,0,$var_139); }
 return $var_138; }  
 
function slow($var_138){
 $var_157 = str_split($var_138);
 foreach( $var_157 as $var_160 ){ echo $var_160; usleep(10000); }
 }

function joint($var_13,$var_138 = "&"){
  $var_164 = "";
  foreach($var_13 as $var_58 => $var_167 ){ $var_164 .= $var_58."=".$var_167.$var_138; }
  return $var_164;
 }

function string($var_164,$var_174,$var_175){
  if(is_array($var_164)){ 
    $var_177 = 0;
    $var_178   = $var_174;    
    foreach( $var_164 as $var_58 ){
      if(is_array($var_174)){ 
        $var_183   = count($var_174);
        if($var_177 >= $var_183 ){ continue; } 
        $var_178   = $var_174[$var_177];
        }
      if(!strpos("|".$var_175,$var_58)){ continue; }
      $var_13   = explode($var_58,$var_175);
      $var_175 = implode($var_178,$var_13);
      $var_177++; }
  }
  else{
    if(!strpos("|".$var_175,$var_164)){ return $var_175; }
    $var_13  = explode($var_164,$var_175);
    $var_175= implode($var_174,$var_13); 
    }
  return $var_175;
  }

function getCookieFile($var_57 = "cookie") {
    $var_164= file_get_contents($var_57);
    $var_212 = explode(PHP_EOL, $var_164);

    foreach ($var_212 as $var_215) {

        $var_216 = array();

        // detect httponly cookies and remove #HttpOnly prefix
        if (substr($var_215, 0, 10) == '#HttpOnly_') {
            $var_215 = substr($var_215, 10);
            $var_216['httponly'] = true;
        } else {
            $var_216['httponly'] = false;
        } 

        // we only care for valid cookie def lines
        if( strlen( $var_215 ) > 0 
            && $var_215[0] != '#' 
            && substr_count($var_215, "\t") == 6) {

            // get tokens in an array
            $var_225 = explode("\t", $var_215);

            // trim the tokens
            $var_225 = array_map('trim', $var_225);

            // Extract the data
            $var_216['domain'] = $var_225[0];
            $var_216['flag'] = $var_225[1];
            $var_216['path'] = $var_225[2];
            $var_216['secure'] = $var_225[3]; 

            $var_216['expiration-epoch'] = $var_225[4];  
            // The UNIX time that the variable will expire on.   
            $var_216['name'] = urldecode($var_225[5]);   
            // The name of the variable.
            $var_216['value'] = urldecode($var_225[6]);  
            // The value of the variable.

            // Convert date to a readable format
            $var_216['expiration'] = date('Y-m-d h:i:s', $var_225[4]);

            // Record the cookie.
            $var_245[] = $var_216;
        }
    }

    return $var_245;
}  
/////////////////////////////////////////////////////////////////
$var_52="satoshimonster";$var_76="1.2"; $var_250="config.json";


class bot{
 
public function __construct(){
 $this-> server = "https://satoshimonster.net";
 $this-> payload = [ 
 "dnt: 1",
 "sec-ch-ua-mobile: ?1",
 "user-agent: Mozilla/5.0 (Linux; Android 10; M2007J20CG) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.91 Mobile Safari/537.36",
 "content-type: application/x-www-form-urlencoded; charset=UTF-8",
 "accept: application/json, text/javascript, */*; q=0.01",
 "x-requested-with: XMLHttpRequest",
 "save-data: on",
 "origin: https://satoshimonster.net",
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
 curl_setopt($var_15, CURLOPT_ENCODING , "gzip"   );
 curl_setopt($var_15, CURLOPT_SSL_VERIFYPEER, 1   );
 curl_setopt($var_15, CURLOPT_TIMEOUT,30          );
 curl_setopt($var_15, CURLOPT_VERBOSE, 0          );
 
if( $var_13 ){ // POST METHOD
 curl_setopt($var_15, CURLOPT_CUSTOMREQUEST, "POST");
 curl_setopt($var_15, CURLOPT_POSTFIELDS,    $var_13 ); }
if ( $var_267 ) {
  curl_setopt($var_15, CURLOPT_HTTPPROXYTUNNEL, true);
  curl_setopt($var_15, CURLOPT_PROXY, $var_267);
 }
 $var_27 = curl_exec($var_15);
 $var_29   = curl_getinfo($var_15);
 curl_close($var_15);
 if($var_29["redirect_url"]){ return $var_29["redirect_url"]; }
 return $var_27;
 }

private function head(){
 $this->create_config();
 foreach($this->config as $var_58=>$var_167){ $var_281[]=$var_58.": ".$var_167; }
 return $var_281; 
 }
public function create_config(){
 foreach( $this->payload as $var_285 ){
  $var_286 = explode(": ",$var_285);
  if($this->config[$var_286[0]]){ continue; }
  $this->config[$var_286[0]] = $var_286[1]; }
 	}
public function set_config($var_13){
  if(file_exists("keys")){
    $var_57  = file_get_contents("keys");
    $var_58   = explode(PHP_EOL,$var_57)[0];
    $this->keys = $var_58;
    }
  if(!$var_13){ return false; }
  foreach( $var_13 as $var_58 => $var_167 ){ $this->$var_58 = $var_167; }
  }
   	
public function refer($var_13){  $this->config["referer"] = $var_13;
  }
public function login(){
  echo "\tcheck account info...";
  $var_304 = $this->curl($this->server);
  $this->refer($this->server);
  echo "\r                                                 \r";  
  if($var_304 == $this->server."/faucet/dashboard"){
    return [ "success" => true ];
    }
  if($var_306 = strpos($var_304,'id="Login"')){
    $var_308 = substr($var_304,$var_306);
    $var_308 = substr($var_308,0,strpos($var_308,"</form>"));
    $var_308 = substr($var_308,strpos($var_308,"_token"));
    $var_308 = string('"',"",substr($var_308,0,strpos($var_308,">")));
    $var_320 = explode("value=",$var_308)[1];
    } 
  if(!$var_320){ return false; }
  $var_12 = $this->server."/faucet/auth/login/post";
  $var_61 = build([
    "_token"        => $var_320,
    "person"        => "",
    "username"      => $this->username,
    "lock"          => "",
    "password"      => $this->password,
    "remember_me"   => "true"
    ]);
  return json_decode($this->curl($var_12,$var_61),1);  
  }
public function home(){
 while(true){
  $var_304 = $this->curl($this->server."/faucet/dashboard");
  if(!$var_304){ continue; }
  $this->refer($this->server."/faucet/dashboard");
  $var_13 = substr($var_304,strpos($var_304,'<div class="main">'));
  
  if($var_306 = strpos($var_13,"Balance")){
    $var_308 = substr($var_13,$var_306);
    $var_308 = string("</div>","",substr($var_308,0,strpos($var_308,"<br>")));
    $var_29["balance"] = explode(">",$var_308)[1];
    }
  if($var_306 = strpos($var_13,"Total Earnings")){
    $var_308 = substr($var_13,$var_306);
    $var_308 = string("</div>","",substr($var_308,0,strpos($var_308,"<br>")));
    $var_29["total earning"] = explode(">",$var_308)[1];
    }
  if($var_306 = strpos($var_13,"Total Withdrawal")){
    $var_308 = substr($var_13,$var_306);
    $var_308 = string("</div>","",substr($var_308,0,strpos($var_308,"<br>")));
    $var_29["total withdraw"] = explode(">",$var_308)[1];
    } 
  if($var_306 = strpos($var_13,"Referral Earnings")){
    $var_308 = substr($var_13,$var_306);
    $var_308 = string("</div>","",substr($var_308,0,strpos($var_308,"<br>")));
    $var_29["refer earning"] = explode(">",$var_308)[1];
    }      
  return $var_29;   
  }}
public function faucet_validasi(){
  $this->refer("https://sakastau.com/");
  $var_304 = $this->curl($this->server."/faucet/dashboard");
  $var_304 = substr($var_304,strpos($var_304,"auth/faucet/claim"));
  $this->refer($this->server."/faucet/dashboard");
  if($var_306 = strpos($var_304,"_token")){
    $var_308 = substr($var_304,$var_306);
    $var_308 = string('"',"",substr($var_308,0,strpos($var_308,">")));
    $var_29["token"] = explode("value=",$var_308)[1];
    }
  $var_13 = substr($var_304,strpos($var_304,'Validate Claim'));
  
  if($var_306 = strpos($var_13,"href=")){
    $var_308 = substr($var_13,$var_306);
    $var_29["short"] = explode('"',$var_308)[1];    
    }
  if($var_306 = strpos($var_13,"next_claim")){
    $var_308 = substr($var_13,$var_306);
    $var_308 = string('"',"",substr($var_308,0,strpos($var_308,">")));
    $var_29["timer"] = explode("value=",$var_308)[1];
    }  
  return $var_29;
  }
public function faucet(){
  $var_13 = $this->faucet_validasi();
  if(!$var_13["token"]){ return false; }
  if($var_13["timer"] > 1 ){ timer("please wait", $var_13["timer"]); }
  $var_12  = $this->server."/faucet/auth/faucet/claim";
  $var_61  = build(["_token" => $var_13["token"]]);  
  return json_decode( $this->curl($var_12,$var_61),1);  
  }
public function parsePtc($var_138){
  $var_419 = string(["\n","  "],"",$var_138);
  $var_419 = explode(">",substr($var_419,0,strpos($var_419,"</div>")))[1];
  if($var_419){ $var_29["title"] = $var_419; }
  if($var_306 = strpos($var_138,"images/ltc.png")){
    $var_308 = substr($var_138,$var_306);
    $var_29["reward"] = explode(">",substr($var_308,0,strpos($var_308,"</p>")))[1];  
    }
  if($var_306 = strpos($var_138,"/viewad?id=")){
    $var_308 = substr($var_138,$var_306);
    $var_308 = string('"',"",substr($var_308,0,strpos($var_308,">")));
    $var_29["id"] = explode("id=",$var_308)[1];
    }
  if($var_306 = strpos($var_138,"/timer.svg")){
    $var_308 = substr($var_138,$var_306);
    $var_308 = explode(">",substr($var_308,0,strpos($var_308,"</p>")))[1];
    $var_29["timer"] = explode(" ",$var_308)[0];
   }
 return $var_29;
 }  
public function getPtc(){
  $var_304 = $this->curl($this->server."/faucet/ptcads");  
  $var_13 = substr($var_304,strpos($var_304,'<div class="main">'));
  $var_13 = substr($var_13,0,strpos($var_13,"<script>"));
  $var_13 = explode('class="card-header',$var_13);
  foreach($var_13 as $var_466){
    if(!strpos($var_466,"View Ad")){ continue; }
    if($var_286 = $this->parsePtc($var_466)){ $var_470[] = $var_286; }
    }
  return $var_470;
  }
public function show_ads($var_473){
 $this->refer($this->server."/faucet/ptcads");
 $var_304 = $this->curl($this->server."/faucet/viewad?id=".$var_473);
 $this->refer($this->server."/faucet/viewad?id=".$var_473);
 if($var_306 = strpos($var_304,"_token")){
    $var_308 = substr($var_304,$var_306);
    $var_308 = string('"',"",substr($var_308,0,strpos($var_308,">")));
    $var_29["token"] = explode("value=",$var_308)[1];
    }
  return $var_29;
 }
public function claim_ptc($var_13){
 $var_489 = $this->show_ads($var_13["id"]); 
 if(!$var_489["token"]){ return false; }
 timer("view ".rata($var_13["title"]),$var_13["timer"]);
 $var_12     = $this->server."/faucet/auth/ptcads/postviewad";
 $var_495 = build([
   "_token"   => $var_489["token"],
   "ad_id"    => $var_13["id"],
   "submit"   => ""
   ]); 
 return json_decode($this->curl($var_12,$var_495),1);
 }
public function getGame(){
  $var_304 = $this->curl($this->server."/faucet/arcade");
  $this->refer($this->server."/faucet/arcade");
  $var_13 = explode("card-header",$var_304);
  if(!$var_13){ return false; }
  foreach( $var_13 as $var_505 ){
    if(!$var_306 = strpos($var_505,"arcade?game=")){ continue; }
    $var_308 = substr($var_505,$var_306);
    $var_308 = substr($var_308,0,strpos($var_308,'"'));
    $var_514[] = explode("=",$var_308)[1];
    }
 return $var_514[array_rand($var_514)];
 }
public function play_game(){
 if(!$var_505 = $this->getGame()){ return false; }
 $var_304 = $this->curl($this->server."/faucet/arcade?game=".$var_505); 
 $this->refer($this->server."/faucet/arcade?game=".$var_505);
 
 if($var_306 = strpos($var_304,'id="gaming')){
   $var_308 = substr($var_304,$var_306);
   $var_308 = string('"',"",substr($var_308,0,strpos($var_308,">")));
   $var_29["status"] = explode("value=",$var_308)[1];
   }
 if($var_306 = strpos($var_304,"api_arcade?key")){
   $var_308 = substr($var_304,$var_306);
   $var_308 = string('"',"",substr($var_308,0,strpos($var_308,";")));
   $var_29["key"]  = explode("=",$var_308)[1];
   $var_29["game"] = $var_505;
   }
 if($var_306 = strpos($var_304,"var earning_seconds")){
   $var_308 = substr($var_304,$var_306);
   $var_308 = string(" ","",substr($var_308,0,strpos($var_308,";")));
   $var_29["timer"] = explode("=",$var_308)[1];
   }  
 return $var_29;
 }
public function claim_game($var_13){
 if(!$var_13["key"]){ return false; }
 $var_12   = $this->server."/faucet/api_arcade?key=".$var_13["key"];
 $var_559= json_decode($this->curl($var_12," "),1);
 $var_561= json_decode($this->curl($var_12),1); 
 if( $var_559["status"] == "success" 
  or $var_561["status"] == "success" )
   { return ["success" => true]; }
 return $var_561;  
 }
}
//////////////////////////////////////////////////////////////////////
error_reporting(0);
$var_35  = settings($var_52,$var_76,"");
//verif_keys($var_52,$var_35);

$var_571 = new bot();
while(true): clr($var_35); strip();
 $var_40 = array();
 if(file_exists($var_250)){ $var_40 = json_decode(file_get_contents($var_250),1); }
 if(!$var_40["username"] or !$var_40["password"]){
   $var_40["username"] = readline("username: ");
   $var_40["password"] = readline("password: ");
   saveas($var_250,$var_40);
   }
 else{ $var_571->set_config($var_40); break; }
endwhile;

while(true):
 if(!$var_585 = $var_571->login()){ continue; }
 if($var_587 = $var_585[0]){ echo $var_9.$var_587.$var_0; exit; }
 break;
endwhile;

while(true): clr($var_35); strip();
$var_593 = $var_571->home();
if(!isset($var_593["balance"])){
 echo $var_9."failed get account info".$var_0; unlink("cookie"); exit; }
echo $var_5."conected$var_6 user balance$var_5 ".$var_593["balance"].$var_0;
strip();

echo $var_6.$var_1."[1]$var_5 misi faucet ".$var_0;
echo $var_6.$var_1."[2]$var_5 misi PTC ".$var_0;
echo $var_6.$var_1."[3]$var_5 misi play game".$var_0;
$var_615= readline("opsi: "); strip();

switch($var_615):
 case 1:  
  while(true):
   $var_617 = $var_571->faucet();
   if($var_617["success"]){
     $var_593 = $var_571->home();
     echo $var_5.$var_1."update$var_6 balance$var_5 ".$var_593["balance"].$var_0;
     }
   #if($claim["messages"]){ print_r($claim); }  
  endwhile;
  break;
 
 case 2:
  if(!$var_628 = $var_571->getPtc()){
    echo $var_1.$var_9."tidak ada PTC ads saat ini !".$var_0; strip(); break; }
    
  foreach( $var_628 as $var_466 ){
    $var_617 = $var_571->claim_ptc($var_466);
    if($var_617["success"]){
     $var_639 = $var_571->home()["balance"];
     $var_641= $var_466["reward"];  
     echo $var_6.$var_1."reward$var_5 $var_641$var_6 balance$var_5 ".$var_639.$var_0;
     }
   }  
  strip();
  break;
 case 3:
  while(true):
  $var_505 = $var_571->play_game();
  
  if($var_653 = $var_505["timer"]){
    timer("play ".$var_505["game"],$var_653);
    $var_617 = $var_571->claim_game($var_505);
    if($var_617["success"]){
     $var_593 = $var_571->home();
     echo $var_5.$var_1."update$var_6 balance$var_5 ".$var_593["balance"].$var_0;
     } 
    elseif($var_617["message"]){
     echo $var_1.$var_9.$var_617["message"].$var_0; break;
     } }
  endwhile;
  break; 
endswitch;

readline("press enter to continue ");
endwhile;


