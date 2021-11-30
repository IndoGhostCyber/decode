<?php
date_default_timezone_set('Asia/Jakarta');
system("clear");
$var_0="\n";$var_1="\t";
//warna
$var_2="\033[34m";$var_3="\033[36m";$var_4="\033[92m";
$var_5="\033[37m";$var_6="\033[35m";$var_7="\033[31m";
$var_8="\033[33m";$var_9="\033[8m";$var_10="\033[0"."m";

function curl( $var_11,$var_12 = 0,$var_13=array()){
 $var_14 = curl_init($var_11);
 curl_setopt($var_14, CURLOPT_RETURNTRANSFER, 1 ); 
 curl_setopt($var_14, CURLOPT_HTTPHEADER, $var_13 );
 curl_setopt($var_14, CURLOPT_COOKIEJAR,  "cookie");
 curl_setopt($var_14, CURLOPT_COOKIEFILE, "cookie");
 curl_setopt($var_14, CURLOPT_SSL_VERIFYPEER, 1   );
 curl_setopt($var_14, CURLOPT_TIMEOUT,60           );
 curl_setopt($var_14, CURLOPT_VERBOSE, 0           );
if( $var_12 ){ // POST METHOD
 curl_setopt($var_14, CURLOPT_CUSTOMREQUEST, "POST");
 curl_setopt($var_14, CURLOPT_POSTFIELDS,    $var_12 ); }
if ( $var_28 ) {
 curl_setopt($var_14, CURLOPT_HTTPPROXYTUNNEL, true);
 curl_setopt($var_14, CURLOPT_PROXY, $var_28);
 }
 $var_32 = curl_exec($var_14);
 $var_34   = curl_getinfo($var_14);
 curl_close($var_14);
 if($var_34["redirect_url"]){ return $var_34["redirect_url"]; }
 return $var_32;
 }
 
function clr($var_40){
  system("clear"); echo $var_40.$var_0;  }

function cl($var_43){system("rm -rf $var_43");}

function strip(){
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";}


function loding($var_45,$var_46) {
 $var_4  = "\033[92m"; $var_5 = "\033[37m";
 $var_8   = "\033[33m"; $var_3  = "\033[36m";
 $var_51=[$var_3,$var_4,$var_3,$var_4,$var_3,$var_4];$var_58=1;
for($var_59=$var_46;$var_59>0;$var_59--){
 $var_63 = str_repeat("â¢",$var_58);$var_65=$var_51[$var_58-1];
 echo $var_5."[".$var_65."â¢â¢â¢â¢â¢".$var_5."] $var_45 $var_59 sec $var_63";
 if($var_58==6){$var_58=1;}else{$var_58++;}sleep(1);
 echo "\r                                                \r";}  }

function saveas($var_77,$var_12){
 if(!file_exists($var_77)){file_put_contents($var_77,"[]"); }
 $var_81 = json_decode(file_get_contents($var_77),1);
 $var_83 = array_merge($var_81,$var_12);
 file_put_contents($var_77,json_encode($var_83,JSON_PRETTY_PRINT));}
 
function head($var_88){
 foreach($var_88 as $var_90=>$var_91){$var_92[]=$var_90.": ".$var_91;}
 return $var_92; }
 

function parse($var_45){
 parse_str($var_45,$var_98);return $var_98;}
 
function build($var_98){return http_build_query($var_98);}

function settings($var_102,$var_103,$var_104){
$var_3   = "\033[36m"; $var_4  = "\033[92m"; $var_5  = "\033[37m";
$var_11 = "https://tuyulgaple.online/adidoank/";
$var_109 = json_encode(
    array(
        'sk' => $var_102,
        'vr' => $var_103 ));
$var_112 = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/json',
        'content' => $var_109
    ));
$var_114 = stream_context_create($var_112);
$var_116     = json_decode(file_get_contents($var_11, false, $var_114),1);

if($var_116){ $var_120 = $var_4."online"; }else{ $var_120 = $var_5."offline"; }
if(!$var_116){ 
 $var_40     = native();
 echo $var_104.$var_0.$var_40; exit; }
 
$var_40      = $var_116["baner"];
$var_131   = $var_3."[-] server $var_120 ";
if(!$var_116["status"]){ 
 $var_135 = "skrip di non-aktifkan\n";
 echo $var_104.$var_131.$var_0.$var_40.$var_135; exit; }
else{ return $var_104.$var_131.$var_0.$var_40; }  }

function native() {
$var_3   = "\033[36m"; $var_4  = "\033[92m"; $var_5  = "\033[37m";
$var_104 = $var_5."
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~$var_4
___ _  _ _   _ _  _ _    ____ ____ ___  _    ____ 
 |  |  |  \_/  |  | |    | __ |__| |__] |    |___ 
 |  |__|   |   |__| |___ |__] |  | |    |___ |___ $var_5

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ $var_3
 - server status $var_5 offline $var_3
 - tidak dapat terhubung ke server 
 - silahkan coba beberapa saat lagi
 - pastikan anda memiliki aksess internet $var_5
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
return $var_104;  }

  
function verif_keys($var_102,$var_40){
 $var_0  = PHP_EOL;
//warna
 $var_4 = "\033[92m"; $var_5 = "\033[37m";
 if(file_exists("keys")){
  $var_162  = file_get_contents("keys");
  $var_90   = explode(PHP_EOL,$var_162)[0];
  }
  $var_11  = "https://tuyulgaple.online/aktivator/";
  while(true):
   $var_166 = json_encode([ "request" => $var_102,"keys" => $var_90]);
   $var_116 = json_decode(curl($var_11,$var_166),1);
   if( $var_116["respon"] ){
    clr($var_40);
    echo $var_116["respon"].$var_0;
    $var_90 = readline($var_5."input new key:$var_4 "); 
   }else{ file_put_contents("keys",$var_90); return true; }
  endwhile;
 }

function str_rand($var_180){
 $var_181="abcdefghijklmnopqrstuvwqyz1234567890ABCDEFGHIJKLMNOPQRSTUVWQYZ";
 $var_45=preg_split("//",$var_181);
 for($var_59=0;$var_59<$var_180;$var_59++){
 $var_188=array_rand($var_45);$var_190[]=$var_45[$var_188];}
 return join($var_190);}

function billing($var_194){
 $var_195 = 86400;
 $var_196  = 3600;
 $var_197= 60;
 $var_135  = "";
 
 if($var_194>=$var_195){
 $var_32= $var_194/$var_195;
 $var_46  = explode(".",$var_32);
 $var_206  = $var_46[0];
 $var_208  = $var_32-$var_206;
 $var_208  = round($var_208*$var_195);
 $var_135   .= "$var_206 hari ";
 if($var_208){ $var_135 .= billing($var_208); }
 return $var_135;
    }
 elseif($var_194<$var_195&&$var_194>=$var_196){
 $var_32= $var_194/$var_196;
 $var_46  = explode(".",$var_32);
 $var_206  = $var_46[0];
 $var_208  = $var_32-$var_206;
 $var_208  = round($var_208*$var_196);
 $var_135   .= "$var_206 jam ";
 if($var_208){ $var_135 .= billing($var_208); }
 return $var_135; 
 }
 elseif($var_194<$var_196&&$var_194>=$var_197){
 $var_32= $var_194/$var_197;
 $var_46  = explode(".",$var_32);
 $var_206  = $var_46[0];
 $var_208  = $var_32-$var_206;
 $var_208  = round($var_208*$var_197);
 $var_135   .= "$var_206 menit ";
 if($var_208){ $var_135 .= billing($var_208); } 
 return $var_135;
 }
 elseif($var_194<60){ $var_135 .= "$var_194 sec "; } return $var_135;  }

function device(){
$var_11  = "https://tuyulgaple.online/randomuser/";
$var_271 = json_decode(file_get_contents($var_11),1); 
$var_273 = [ 
  $var_271["uuid"] => [
    "sdk"      => "24",
    "manufacturer" => $var_271["brand"],
    "device"   => $var_271["model"],
    "model"    => $var_271["model"],
    "product"  => $var_271["brand"],
    "hardware" => "",
    "board"    => str_rand(8),
    "brand"    => $var_271["brand"] ] ];
return $var_273; }

function input($var_281,$var_40,$var_12,$var_284){
 $var_285 = array(); 
 foreach( $var_12 as $var_287 ){
 clr($var_40);
 if(!$var_284[$var_287]){ 
  $var_291 = readline($var_287." : ");
  $var_285 = array_merge($var_285,[$var_287 => $var_291 ]); }
 else{ $var_285 = array_merge($var_285,[ $var_287 => $var_284[$var_287] ]); }
 } if($var_285[$var_12[0]]){ return $var_285; } }
/////////////////////////////////////////////////////////////////
$var_102="clipclaps";$var_103="2.7"; $var_281="config.json";

$var_88 = [
 "charset"          => "UTF-8",
 "device-type"      => "2",
 "api-version"      => "2",
 "external-version" => "1.9.5",
 "device"           => "7.0",
 "version"          => "41",
 "timezone"         => "7",
 "lang"             => "in",
 "app-id"           => "ClipClaps_google",
 "cache-control"    => "no-cache",
 "content-type"     => "application/json; charset=UTF-8",
 "user-agent"       => "okhttp/4.2.1" ];

$var_309 = [
 "charset"        => "UTF-8",
 "content-type"   => "application/json; charset=UTF-8",
 "user-agent"     => "okhttp/4.2.1"];

function login_game($var_310,$var_311,$var_312){
 $var_11 = "https://game.cc.lerjin.com/user/login"; 
 $var_166 = json_encode([	"ccUserId"=>$var_311,"ccToken"=>$var_312]);
 return json_decode(curl($var_11,$var_166,$var_310),1); }

function users($var_320,$var_312,$var_311){
 $var_11    = "https://api.cc.lerjin.com/user/self/info";
 $var_166 = json_encode([
  "token"   => $var_312,
  "userid"  => $var_311 ]);
 return json_decode(curl($var_11,$var_166,$var_320),1); }
 
function chest($var_320,$var_312,$var_311){
// reward list
$var_11 = "https://api.cc.lerjin.com/reward/list";
$var_166 = json_encode([
 "token" => $var_312,
 "userid"=> $var_311,
 "finishCashOutGuide" => "false"]);
$var_337 = json_decode(curl($var_11,$var_166,$var_320),1);
if($var_337["code"]==1){$var_342=null;$var_343=null;
// cek peti
 $var_344 = $var_337["data"]["treasureChest"];
 foreach($var_337["data"]["treasureChest"] as $var_90=>$var_91){
 if($var_91["num"]>0){ $var_342[]=$var_91; } }
 
  // cek lotre 
 $var_352=$var_337["data"]["lotteryTicket"];
 foreach($var_352 as $var_90=>$var_91){
  if($var_91["userDebris"]>=$var_91["ticketDebris"]){$var_343[]=$var_91;}}
  
 return ["chest" => $var_342, "lotre" => $var_343 ]; } }
 
function opencard($var_310,$var_364,$var_365){
 $var_11="https://game.cc.lerjin.com/reward/user/card/open";
 $var_166 = json_encode([
 "metaId"     => $var_364,
 "index"      => $var_365,
 "gameId"     => "10007",
 "_reqidx"    => 2 ]);
 return json_decode(curl($var_11,$var_166,$var_310),1);  }
 
function claim_diamon($var_320,$var_312,$var_311){
 $var_376 = "notification/clapteam/batchClaimReward";
 $var_11  = "https://api.cc.lerjin.com/$var_376";
 $var_166  = json_encode([
 "token" => $var_312, "userid" => $var_311]);
 return json_decode(curl($var_11,$var_166,$var_320),1); }
 
function open_chest($var_320,$var_312,$var_311,$var_388){
 $var_11 = "https://api.cc.lerjin.com/reward/treasureChest/open";
 $var_166 = json_encode([
 "token" => $var_312, "userid" => $var_311, "type" => $var_388 ]);
 return json_decode(curl($var_11,$var_166,$var_320),1); }
 
function wallet($var_320,$var_312,$var_311){
 $var_11 = "https://api.cc.lerjin.com/wallet";
 $var_166 = json_encode([
 "token" => $var_312, "userid" => $var_311, "countryCode2" => "ID" ]);
 return json_decode(curl($var_11,$var_166,$var_320),1);  }
 
function order($var_320,$var_12){
 $var_11 = "https://api.cc.lerjin.com/store/payOrder";
 $var_166 = json_encode($var_12);
 return json_decode(curl($var_11,$var_166,$var_320),1); }

function exchange($var_320,$var_312,$var_311,$var_418){
 $var_11 = "https://api.cc.lerjin.com/user/exchange";
 $var_166 = json_encode([
  "cents"              => $var_418/1000,
  "ratioOfCoinToCent"  => "1000",
  "coins"              => $var_418,
  "newbie"             => "true",
  "token"              => $var_312,
  "userid"             => $var_311 ]);
 return json_decode(curl($var_11,$var_166,$var_320),1); }

function funny_timer($var_320,$var_312,$var_311){
 $var_11 = "https://api.cc.lerjin.com/funny/timer";
 $var_166 = json_encode([
  "token"              => $var_312,
  "userid"             => $var_311  ]);
 return json_decode(curl($var_11,$var_166,$var_320),1); }
 
function vote_reward($var_320,$var_12){
 $var_11 = "https://api.cc.lerjin.com/funny/obtainReward";
 $var_166 = json_encode($var_12);
 return json_decode(curl($var_11,$var_166,$var_320),1); }
////////////////////////////////////////////////////////////

error_reporting(0);
$var_40 = settings($var_102,$var_103,"");
//verif_keys($var_102,$var_40);

while(true):
$var_81   = json_decode(file_get_contents($var_281),1);
if(!$var_81["token"]){
 $var_287 = input($var_281,$var_40,["devid","uid","token"],$var_284);
 saveas($var_281,$var_287); }
else{
 $var_460 = $var_81["devid"];
 $var_311  = $var_81["uid"];
 $var_312= $var_81["token"]; break; }
endwhile;
 
$var_88["uuid"] = $var_460;
$var_88["token"]= $var_312;
$var_320 = head($var_88);

while(true): clr($var_40); strip();
$var_473 = users($var_320,$var_312,$var_311);
if($var_473["data"]){
 $var_478 = $var_473["data"]["username"];
 $var_418 = $var_473["data"]["coins"];
 $var_482 = $var_473["data"]["cash"];
 echo $var_4."conected$var_2 $var_478$var_5 coins:$var_4 $var_418$var_5 cash:$var_4 $ $var_482".$var_0;strip();
 }else{ echo $var_7."error ".$var_473["msg"].$var_0; exit; }

// menu clipclaps
echo $var_1.$var_5."[1]$var_4 misi claim chest".$var_0;
echo $var_1.$var_5."[2]$var_4 vote funny reward".$var_0;
echo $var_1.$var_5."[3]$var_4 open chest reward".$var_0;
echo $var_1.$var_5."[4]$var_4 open card lottery".$var_0;
echo $var_1.$var_5."[5]$var_4 game aquarium".$var_0;
echo $var_1.$var_5."[6]$var_4 clipclaps shop".$var_0; strip();
$var_521 = readline("options: "); strip();

switch($var_521){
 case 1:
  // config timer
  $var_11="https://api.cc.lerjin.com/reading/timer";
  $var_166=json_encode(["token"=>$var_312,"userid"=>$var_311]);
  $var_337=json_decode(curl($var_11,$var_166,$var_320),1);
  if($var_337["code"]==1){
   $var_532    = $var_337["data"]["day"];
   $var_534  = $var_337["data"]["activeDay"];
   $var_46   = $var_337["data"]["videoTime"]; 
   $var_538 = $var_337["data"]["articleTime"];
   $var_540= $var_337["data"]["config"]["version"];
   $var_542  = $var_337["data"]["config"]["timerScreen"];
   $var_544= $var_337["data"]["config"]["timerReward"];
 
  for( $var_59=0; $var_59<count($var_544); $var_59++ ){
  $var_550 = $var_544[$var_59]["time"];
  $var_553     = $var_544[$var_59]["rewardType"];
 
   if($var_550>$var_46){
    $var_166 = json_encode([
    "specific"       =>"false",
    "token"          => $var_312,
    "rewardTime"     => $var_550,
    "articleTime"    => $var_538,
    "version"        => $var_540,
    "rewardType"     => $var_553,
    "day"            => $var_532,
    "videoTime"      => $var_550,
    "activeDay"      => $var_534,
    "userid"         => $var_311   ]);
  $var_11 = "https://api.cc.lerjin.com/reading/obtainReward";
  $var_337  = json_decode(curl($var_11,$var_166,$var_320),1);
  if($var_337["code"]==1){
  echo $var_4."success claim$var_5 $var_553".$var_0;loding("timer",30);
  }else{ echo $var_7.$var_337["msg"].$var_0; } } }
  echo $var_1.$var_8."come back tomorrow".$var_0; strip();
  }else{echo "error ".$var_337["msg"].$var_0;exit;}
  break;
/*
while(true):
 $diamon = claim_diamon($head,$token,$uid);
 $qty    = $diamon["data"]["items"][0]["itemQuantity"];
 $rwd    = $rwd+$qty;
 echo "\r                                             \r";
 echo $pth.$r." claim diamon$ijo $rwd";
 if(!$qty){ 
 echo "\r                                             \r"; break; }
endwhile;
*/
 case 2:
  // config timer
  $var_586 = funny_timer($var_320,$var_312,$var_311);
  if($var_586["code"]==1){
   $var_532    = $var_586["data"]["day"];
   $var_534  = $var_586["data"]["activeDay"];
   $var_46   = $var_586["data"]["videoTime"]; 
   $var_538 = $var_586["data"]["articleTime"];
   $var_540= $var_586["data"]["config"]["version"];
   $var_542  = $var_586["data"]["config"]["timerScreen"];
   $var_544= $var_586["data"]["config"]["timerReward"];
 
  for( $var_59=0; $var_59<count($var_544); $var_59++ ){
  $var_550 = $var_544[$var_59]["time"];
  $var_553     = $var_544[$var_59]["rewardType"];
 
   if($var_550>$var_46){
    $var_617 = [
    "specific"       =>"false",
    "token"          => $var_312,
    "rewardTime"     => $var_550,
    "articleTime"    => $var_538,
    "version"        => $var_540,
    "rewardType"     => $var_553,
    "day"            => $var_532,
    "videoTime"      => $var_550,
    "activeDay"      => $var_534,
    "userid"         => $var_311   ];
  $var_116 = vote_reward($var_320,$var_617);
  if($var_116["code"]==1){
  echo $var_4."success claim$var_5 $var_553".$var_0;loding("timer",30);
  }else{ echo $var_7.$var_116["msg"].$var_0; } } }
  echo $var_1.$var_8."come back tomorrow".$var_0; strip();
  }else{echo "error ".$var_586["msg"].$var_0;exit;}
  break;
  
 case 3:
  $var_643 = chest($var_320,$var_312,$var_311);
  $var_342       = $var_643["chest"];
  if(!$var_342){ echo $var_1.$var_8."no available chest".$var_0;strip(); break; }
  foreach( $var_342 as $var_90 => $var_91 ){
  $var_553 = $var_91["type"];
  $var_658  = $var_91["num"];
  echo $var_4."treasureChest".$var_3.$var_1.$var_553.$var_1.$var_5." : ".$var_658.$var_0;}
  strip();

    for($var_59=0;$var_59<count($var_342);$var_59++){
    $var_672  = $var_342[$var_59]["num"];
    $var_388 = $var_342[$var_59]["type"];
    echo $var_3."open treasureChest$var_4 $var_388".$var_0;strip();
    for($var_682=0;$var_682<$var_672;$var_682++){
    $var_686 = open_chest($var_320,$var_312,$var_311,$var_388);
    if($var_686["code"]==1){
    foreach($var_686["data"]["rewards"] as $var_90=>$var_91){
    $var_695 = $var_91["quantity"];
    $var_553= $var_91["type"];
    echo $var_4."success reward ".$var_3.$var_695.$var_5.$var_1.$var_553.$var_0;} }
    }strip();} 
  break;
 
 case 4:
  $var_643 = chest($var_320,$var_312,$var_311);
  $var_343       = $var_643["lotre"];
  $var_712    = array();
  if(!$var_343){ 
  echo $var_1.$var_8."no available tickets lottery".$var_0; strip(); break; }
  foreach( $var_343 as $var_90 => $var_91 ){
  $var_364 = $var_91["lotteryId"];
  $var_553    = $var_91["type"];
  $var_658     = floor($var_91["userDebris"]/$var_91["ticketDebris"]);
  switch($var_364){
  case "C00001":
   $var_728 = $var_5."lotre$var_4 $var_553 $10 Reward$var_3 ($var_658)";
   break;
  case "C00002":
   $var_728 = $var_5."lotre $var_553$var_4 $1 Reward$var_3 ($var_658)";
   break; 
  case "G00004":
   $var_728 = $var_5."lotre$var_8 $var_553 $10 Cash$var_3 ($var_658)";
   break;
  case "G00003":
   $var_728 = $var_5."lotre$var_8 $var_553 $10 Amazon Coupon$var_3 ($var_658)";
   break;
  case "G00005":
   $var_728 = $var_5."lotre$var_8 $var_553 500K ClapCoins$var_3 ($var_658)";
   break;  }
  $var_712 = array_merge($var_712,[$var_364 => $var_728 ]); 
  echo $var_1.$var_728.$var_0; }
   
   strip();
   $var_310   = head($var_309);
   $var_767 = login_game($var_310,$var_311,$var_312);
   $var_771= $var_767["data"]["token"];
   $var_309["token"] = $var_771;
   $var_310            = head($var_309);
   foreach( $var_343 as $var_90 => $var_91 ){
   $var_364 = $var_91["lotteryId"];
   $var_553    = $var_91["type"];
   $var_658     = floor($var_91["userDebris"]/$var_91["ticketDebris"]);
   $var_787   = $var_712[$var_364];
   echo $var_4."open card $var_787".$var_0; strip();
   for($var_793=0;$var_793<$var_658;$var_793++){
   $var_365   = rand(0,8);
   $var_798 = opencard($var_310,$var_364,$var_365);
   $var_802= $var_798["data"][$var_365];
   $var_805 = $var_802["rewardType"];
   $var_807  = $var_802["rewardAmount"];
   echo $var_1.$var_3."claim reward$var_4 $var_807$var_5 $var_805".$var_0; }
   strip(); }  
  break;
 case 5:
   $var_310   = head($var_309);
   $var_767 = login_game($var_310,$var_311,$var_312);
   $var_771= $var_767["data"]["token"];
   $var_309["token"] = $var_771;
   $var_310            = head($var_309);
   echo $var_1.$var_4."---- clipclaps Aquarium ----".$var_0;strip();
// aquarium
   $var_11="https://game.cc.lerjin.com/aquarium/v1/fish/list";
   $var_166=json_encode(["gameId"=>"10003","_reqidx"=> 1]);
   $var_337=json_decode(curl($var_11,$var_166,$var_310),1);
   if($var_337["code"]=="OK"){
   foreach($var_337["data"] as $var_90=>$var_91){
   $var_478=$var_91["name"];$var_843=$var_91["level"];
   $var_845=$var_91["price"];$var_847=$var_91["currency"];
   $var_478=explode(" ",$var_478);$var_478=$var_478[0];
   echo $var_5."level: $var_843$var_4$var_1-> $var_845 $var_8$var_847$var_3 -> $var_478".$var_0;
   }strip();
   }else{print_r($var_337);exit;}
// feed fish
   echo $var_3."<<<<<<<<<< feed fish >>>>>>>>>>".$var_0;strip();
   while(true):
   $var_11="https://game.cc.lerjin.com/aquarium/v1/fish/feed";
   $var_166=json_encode(["gameId"=>"10003","_reqidx"=> 1]);
   $var_337=json_decode(curl($var_11,$var_166,$var_310),1);
   if($var_337["code"]=="OK"){
   $var_873=$var_337["data"]["upgrade"]; $var_875=$var_337["data"]["evolution"];
   $var_877=$var_337["data"]["bubbles"]; $var_879=$var_337["data"]["fish"];
   $var_478=$var_879["name"]; $var_843=$var_879["level"];
   $var_845=$var_879["price"]; $var_847=$var_879["currency"];
   $var_478=explode(" ",$var_478);$var_478=$var_478[0];
   echo $var_5."level: $var_843$var_4$var_1-> $var_845 $var_8$var_847 $var_3-> $var_478".$var_0;
   if($var_877){
   foreach($var_877 as $var_90=>$var_91){
   $var_907=$var_91["id"];
   $var_11="https://game.cc.lerjin.com/aquarium/v1/bubbles/pick";
   $var_166=json_encode([
   "id"=> $var_907,  "gameId"=> "10003",  "_reqidx"=> 12]);
   $var_337=json_decode(curl($var_11,$var_166,$var_310),1);
   if($var_337["code"]=="OK"){
   echo $var_3."count bubbles ".$var_4.$var_337["data"]["count"];sleep(1);
   echo "\r                                         \r";} } }
   }elseif($var_337["code"]=="ALL_FISH_FULL"){
   $var_921=$var_8.$var_337["message"].$var_4;loding($var_921,60);}
   elseif($var_337["code"]=="FEED_COUNT_LIMIT"){
   echo $var_8."[!] limit ".$var_337["message"].$var_0;break;}
   elseif($var_337["code"]=="UNKNOWN"){strip();}
   else{print_r($var_337);}loding("wait",5);endwhile;
   break;
 
 case 6:
  $var_932 = wallet($var_320,$var_312,$var_311);
  if(!$var_932["data"]){ echo $var_1."someting worng !".$var_0; break; }
  $var_939 = $var_932["data"]["clapCoinStore"];
  $var_941 = $var_932["data"]["cashStore"];
  $var_943 = $var_932["data"]["clapFund"];
  $var_945  = $var_932["data"]["exchangeRate"];
  echo $var_1.$var_5."[1]$var_3 exchange coins to usd".$var_0;
  echo $var_1.$var_5."[2]$var_3 coin store".$var_0;
  echo $var_1.$var_5."[3]$var_3 cash store".$var_0; strip();
  $var_959 = readline("opsi: ");
 
  switch($var_959){
   case 1:
    $var_418   = readline("coin amo: ");
    $var_962 = exchange($var_320,$var_312,$var_311,$var_418);
    if($var_962["code"]==1){ 
    $var_968 = $var_418/$var_945["coins"];
    echo $var_5."exchange$var_3 $var_418$var_4 success$var_3 $var_968$var_5 usd".$var_0; }
    else{ echo $var_8." oops someting worng !".$var_0; }
    break;
   case 2:
    $var_59 = 0;
    foreach($var_939 as $var_90 => $var_91 ){
    $var_59++;
    $var_478  = $var_91["name"]; 
    $var_845 = $var_91["price"]; 
    $var_847   = $var_91["costType"];
    echo $var_1.$var_5."[$var_59]$var_4 $var_478$var_5 $var_845 $var_847".$var_0;    }
    $var_1001  = readline("pilih: ");
    if(!$var_1001){break;}
    $var_1001  = $var_1001-1;
    $var_12 = [
      "costQuantity" => $var_939[$var_1001]["price"],
      "itemId"       => "0",
      "itemType"     => $var_939[$var_1001]["itemType"],
      "token"        => $var_312,
      "productId"    => $var_939[$var_1001]["id"],
      "itemQuantity" => $var_939[$var_1001]["itemQuantity"],
      "costType"     => $var_939[$var_1001]["costType"],
      "userid"       => $var_311 ];
    $var_1018 = order($var_320,$var_12);
    if($var_1018["code"]==1){
    $var_478 = $var_1018["data"]["product"]["name"];
    echo $var_3."order$var_4 success$var_5 $var_478".$var_0;
    }else{ echo $var_8."order failed ".$var_1018["msg"].$var_0; }
    break;
   case 3:
    $var_59 = 0;
    foreach($var_941 as $var_90 => $var_91 ){
    $var_59++;
    $var_478  = $var_91["name"]; 
    $var_845 = $var_91["price"]/100; 
    $var_847   = $var_91["costType"];
    echo $var_1.$var_5."[$var_59]$var_4 $var_478$var_5 $var_845 usd".$var_0;    }
    $var_1001  = readline("pilih: ");
    if(!$var_1001){break;}
    $var_1001  = $var_1001-1;
    $var_12 = [
      "costQuantity" => $var_941[$var_1001]["price"],
      "itemId"       => "0",
      "itemType"     => $var_941[$var_1001]["itemType"],
      "token"        => $var_312,
      "productId"    => $var_941[$var_1001]["id"],
      "itemQuantity" => $var_941[$var_1001]["itemQuantity"],
      "costType"     => $var_941[$var_1001]["costType"],
      "userid"       => $var_311 ];
    $var_1018 = order($var_320,$var_12);
    if($var_1018["code"]==1){
    $var_478 = $var_1018["data"]["product"]["name"];
    echo $var_3."order$var_4 success$var_5 $var_478".$var_0;
    }else{ echo $var_8."order failed ".$var_1018["msg"].$var_0; }
    break;
  }
  strip();
  break;
  }readline($var_5."press any key to continue");
endwhile;
