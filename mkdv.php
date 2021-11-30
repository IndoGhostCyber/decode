<?php

date_default_timezone_set('Asia/Jakarta');
system("clear");
$var_0="\n";$var_1="\t";
//warnn
$var_2="\033[34m";$var_3="\033[36m";$var_4="\033[92m";
$var_5="\033[37m";$var_6="\033[35m";$var_7="\033[31m";
$var_8="\033[33m";$var_9="\033[8m";$var_10="\033[0"."m";
function saveas($var_11,$var_12){
 if(!file_exists($var_11)){file_put_contents($var_11,"[]"); }
 $var_15 = json_decode(file_get_contents($var_11),1);
 $var_17 = array_merge($var_15,$var_12);
file_put_contents($var_11,json_encode($var_17,JSON_PRETTY_PRINT));}
function ngentod($var_22,$var_23, $var_24){
$var_25 = curl_init();
curl_setopt($var_25, CURLOPT_URL, $var_22);
curl_setopt($var_25, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($var_25, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($var_25, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($var_25, CURLOPT_HTTPHEADER, $var_23);
curl_setopt($var_25, CURLOPT_POST, true);
curl_setopt($var_25, CURLOPT_POSTFIELDS, $var_24);
$var_36 = curl_exec($var_25);
curl_close($var_25);
return $var_36;}
function loding($var_40,$var_41){
  date_default_timezone_set('UTC');
$var_42 = time()+$var_41;
$var_2="\033[34m";$var_3="\033[36m";
$var_4="\033[92m";$var_5="\033[37m";
$var_6="\033[35m";$var_7="\033[31m";
$var_8="\033[33m";$var_9="\033[8m";
$var_10="\033[0"."m";
$var_53=[$var_5,$var_7];
$var_56=0;
$var_57=[$var_4,$var_8,$var_3,$var_4,$var_8,$var_3];$var_64=1;
while(true):
echo "\r                                                        \r";
$var_65=$var_53[$var_56];
$var_68 = $var_42-time();
$var_70=date("H:i:s",$var_68);
if($var_68<1){ break; }
$var_73=str_repeat("â",$var_64);$var_75=$var_57[$var_64-1];
$var_78="tod!";$var_79="â©";
echo $var_5.$var_40."$var_5 â¨$var_65$var_70$var_5$var_79 $var_78$var_75$var_73";
if($var_64==6){$var_64=1;}else{$var_64++;} sleep(1);
$var_56++; 
if($var_56 >= count ($var_53)){$var_56=0;}

endwhile; 
  }
function head($var_12){
 foreach($var_12 as $var_99=>$var_100){$var_101[]=$var_99.": ".$var_100;}
 return $var_101; }
function titid($var_22,$var_23){
$var_25 = curl_init();
curl_setopt($var_25, CURLOPT_URL, $var_22);
curl_setopt($var_25, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($var_25, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($var_25, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($var_25, CURLOPT_HTTPHEADER, $var_23);
$var_36 = curl_exec($var_25);
curl_close($var_25);
return $var_36;}

$var_119="$var_5~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";

function settings($var_121,$var_122,$var_123){
$var_22 = "https://tuyulgaple.online/sungging/";
$var_2="\033[34m";$var_3="\033[36m";$var_4="\033[92m";
$var_5="\033[37m";$var_6="\033[35m";$var_7="\033[31m";
$var_8="\033[33m";$var_9="\033[8m";$var_10="\033[0"."m";
$var_119="$var_5~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
$var_136 = json_encode(
    array(
        'sk' => $var_121,
        'vr' => $var_122 ));
$var_139 = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/json',
        'content' => $var_136
    ));
$var_141 = stream_context_create($var_139);
$var_143     = json_decode(file_get_contents($var_22, false, $var_141),1);
$var_146      = $var_143["baner"];

$var_148="$var_7 ___  _  _ ___  ____    _  _ ____ ___  _ _    ____ 
$var_7 |__] |  | |__] | __    |\/| |  | |__] | |    |___ 
$var_5 |    |__| |__] |__]    |  | |__| |__] | |___ |___
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";

$var_146=str_replace($var_148,"",$var_146);
$var_155="@maukemanaboss";
$var_146=str_replace($var_155,"@sungging_id",$var_146);
$var_146=str_replace("Tersungging","sunggingan",$var_146);
$var_161=$var_3."[x] server ".$var_4."offline\n";
$var_164=$var_3."[-] DONATE DOGE: ".$var_4."DNJ8pamz5fimgaGBHHstQGvwE5d8wJdZuK\n";
$var_167=$var_3."[-] forum diskusi: ".$var_4."https://t.me/tuyulgapletod
                   https://t.me/tuyulgaple\n";
if(!$var_143["status"]){ 
 $var_40 = "skrip di non-aktifkan\n";
 echo $var_119.$var_161,$var_119."".$var_146.$var_40; exit; }
else{ return $var_119.$var_167.$var_119.$var_146.$var_119; }  }

function strip(){
$var_5="\033[37m";
echo "$var_5~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";}

function curl( $var_22,$var_24,$var_23){
 $var_25 = curl_init($var_22);
 curl_setopt($var_25, CURLOPT_RETURNTRANSFER, 1 ); 
 curl_setopt($var_25, CURLOPT_HTTPHEADER, $var_23 );
 curl_setopt($var_25, CURLOPT_SSL_VERIFYPEER, 1   );
 curl_setopt($var_25, CURLOPT_TIMEOUT,30          );
 curl_setopt($var_25, CURLOPT_VERBOSE, 0          );
if(strlen($var_24) > 0 ){ // POST METHOD
 curl_setopt($var_25, CURLOPT_CUSTOMREQUEST, "POST");
 curl_setopt($var_25, CURLOPT_POSTFIELDS,    $var_24 ); }
if(strlen($var_199)   > 0 ){ // settings proxy
 curl_setopt($var_25, CURLOPT_PROXY,         $var_199   ); }
 $var_36 = curl_exec($var_25);
 $var_204   = curl_getinfo($var_25);
 curl_close($var_25);
 if($var_204["http_code"]==302){
 return $var_204["redirect_url"]; } else { return $var_36; } }
function clr($var_146){system("clear");echo $var_146.$var_0;}

function verif_keys($var_121,$var_146){
$var_0="\n";$var_1="\t";
//warna
$var_2 = "\033[34m"; $var_3 = "\033[36m"; $var_4 = "\033[92m";
$var_5= "\033[37m"; $var_6= "\033[35m"; $var_7 = "\033[31m";
$var_8 = "\033[33m"; $var_9= "\033[8m";  $var_10  = "\033[0"."m";
while(true): clr($var_146);
if( $var_227 ){
 $var_227 = 0;
 while(true): clr($var_146);
 $var_230 = str_replace($var_0,"",file_get_contents("keys"));
 $var_22 = "http://tuyulgaple.online/aktivator/";
 $var_233 = json_encode([ "request" => $var_121,"keys" => $var_230]);
 $var_236  = json_decode( curl($var_22,$var_233,array()),1 );
if( $var_236["respon"] ) {
  echo $var_3."=> ".$var_236["respon"].$var_0;
  $var_243 = readline($var_5."input key : ");
  if( $var_243 ){
  $var_233 = json_encode(["request" => $var_121,"keys" => $var_243]);
  $var_236  = json_decode(curl($var_22,$var_233,array()),1);
  if( $var_236["code"] != 10 ) {
  file_put_contents("keys",$var_243);
  $var_230 = str_replace($var_0,"",file_get_contents("keys")); break; }}}
 else{ readline($var_4."your keys is uptodate ");break; }endwhile; }
 $var_22 = "http://tuyulgaple.online/aktivator/";
 $var_230 = str_replace($var_0,"",file_get_contents("keys"));
 $var_233 = json_encode(["request" => $var_121,"keys" => $var_230]);
 $var_236  = json_decode(curl($var_22,$var_233,array()),1);
if( $var_236["code"] == 10 ){ $var_227=1; }else{ break; }
endwhile;}
function input($var_268,$var_146,$var_24,$var_271){
 $var_272 = array(); 
 foreach( $var_24 as $var_274 ){
 /*clr($clr);*/
 if(!$var_271[$var_274]){ 
  $var_277 = readline($var_274." : ");
  $var_272 = array_merge($var_272,[$var_274 => $var_277 ]); }
 else{ $var_272 = array_merge($var_272,[ $var_274 => $var_271[$var_274] ]); }
 } if($var_272[$var_24[0]]){ return $var_272; } }
function val2($var_291,$var_292){
$var_233  = json_encode([
 "request" => "mkdev",
 "lisensi" => $var_292,
 "data"    => [ "diamon" => $var_291 ]]);
return curl("https://tuyulgaple.online/api/new/",$var_233,array()); }

function lisensi($var_121){

  if(file_exists($_SERVER["PREFIX"]."/bin/getprop")){
   // OS 5 - 6
   $var_298 = explode(PHP_EOL,shell_exec("getprop persist.radio.imei"));
   if($var_298[0]){ return hash("sha1",$var_121.$var_298[0]); }
  
   // OS 5 - 6
   $var_298 = explode(PHP_EOL,
          shell_exec("getprop persist.sys.vtouch.imei"));
   if($var_298[0]){ return hash("sha1",$var_121.$var_298[0]); }
  }
  
  // OS 7 - 9
  $var_306 = $_SERVER["PREFIX"]."/libexec/termux-api";
  if(!file_exists($var_306)){ return "termux-api belum di install !"; }
    $var_308 = json_decode(shell_exec("termux-telephony-deviceinfo"),1);
    if($var_309 = $var_308["device_id"]){ return hash("sha1",$var_121.$var_309); }
  
  // all os   
  $var_313    = "termux-keystore ";
  $var_15    = "list -d";
  $var_315  = "tuyulgaple";
  $var_316 = "generate $var_315 -a RSA";

  $var_318   = $_SERVER["PREFIX"]."/bin/termux-keystore";  
  if(!file_exists($var_318)){ 
    return "apk or package termux-api belum di install !";
    }
     
  while(true):
  $var_308 = json_decode(shell_exec($var_313.$var_15),1);
  if(!$var_308){ shell_exec($var_313.$var_316); continue; }
    
  foreach( $var_308 as $var_99 => $var_100 ){
   if($var_100["alias"] == $var_315 ){ $var_331 = $var_100["modulus"]; break 2; } }
  
  shell_exec($var_313.$var_316);  
  endwhile;
  if( $var_331 ){ return hash("sha1",$var_121.$var_331); }
  }  
 
function verif_user($var_121,$var_339){
 $var_22 = "https://tuyulgaple.online/premium/";
 $var_233 = json_encode([
 "request"  => $var_121,
 "tipe"     => "verif",
 "userid"   => $var_339 ]);
 
 $var_344 = curl_init();
 curl_setopt_array($var_344, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL            => $var_22,
    CURLOPT_CUSTOMREQUEST  => "POST",
    CURLOPT_POSTFIELDS     => $var_233,
    CURLOPT_VERBOSE        => false  ));
 $var_36 = curl_exec($var_344);
 $var_236     = json_decode($var_36,1);
 if( $var_236["code"]==200 ){ return $var_236["code"]; } }
 
error_reporting(0);
$var_354=(settings("mkdev","1.0",  $var_355));
/*verif_keys("sungging",$set);*/

clr($var_354);

while(true):
$var_15 = json_decode(file_get_contents("config.json"),1);

if(is_array($var_15)){ $var_359 = count($var_15);}else{ $var_359 = 0; }
echo $var_5."total accountod$var_4 $var_359$var_0";

echo "$var_1$var_5 [1]$var_4 add accountod$var_0";
echo "$var_1$var_5 [2]$var_4 check accountod$var_0";
echo "$var_1$var_5 [3]$var_4 start misitod$var_0";
echo "$var_1$var_5 [4]$var_4 withdrawtod$var_0";


if(!verif_user("mkdev",$var_292 = lisensi("mkdev"))){
  echo $var_5."lisensi: ".$var_3.$var_292.$var_0; 
  exit($var_7."device not verifed,$var_5 beli licensi kontak tele$var_4 @sungging_id$var_0"); }
  

$var_391=readline("pilih mana : ");strip();

$var_392=[
    "Content-Type: application/json; charset=utf-8"
    ];
$var_393="earnlion.rewardedlinks.com:5005";

if($var_391=="1"){
$var_268="config.json";
$var_396=readline("apikey : ");
$var_397=readline("id : ");

$var_398='{"API_Key":"'.$var_396.'","ID":'.$var_397.'}';
$var_401=ngentod("http://$var_393/api/User/GetUserInfo",$var_392,$var_398);
$var_236=json_decode($var_401,1);
$var_407=$var_236["lastLogin"];
$var_409=$var_236["lastVideo"];
if($var_407==3333333){
echo $var_5."save data$var_4 $var_56$var_7 failed...\n";
}else{
 $var_416 ="user-$var_397";
 $var_418=[
    "apikey"=>$var_396,
    "id"=>$var_397
    ];
 $var_274[$var_416] = $var_418;
 saveas($var_268,$var_274);
echo $var_4."save data sucess!$var_0";}    }

if($var_391=="2"){

$var_15 = json_decode(file_get_contents("config.json"),1);
$var_56   = 1;
foreach( $var_15 as $var_99 => $var_100 ){
  $var_434  = $var_100["apikey"];
  $var_397   = $var_100["id"]; 
  
$var_438='{"API_Key":"'.$var_434.'","RefCode":"dc6e3","ID":'.$var_397.'}';
$var_441=ngentod("http://$var_393/api/Ref/EnterRef",$var_392,$var_438);


$var_398='{"API_Key":"'.$var_434.'","ID":'.$var_397.'}';

$var_401=ngentod("http://$var_393/api/User/GetUserInfo",$var_392,$var_398);
$var_236=json_decode($var_401,1);
$var_454=$var_236["diamonds"];
$var_456=$var_236["scratches"];
$var_407=$var_236["lastLogin"];
$var_409=$var_236["lastVideo"];

$var_462 = ($var_454 / 100000);
$var_462 = number_format($var_462,5);
if($var_236==null){
echo "no connection !!!\n";exit;}
elseif(strpos($var_401,"validation errors")){
echo $var_5."akun$var_4 $var_56$var_7 eror...\n";strip(); 
}
elseif($var_407==3333333){
echo $var_5."akun$var_4 $var_56$var_7 eror...\n";strip();
break;}
else{
echo $var_5."akun$var_4 $var_56$var_3 energy ".$var_4,$var_456,$var_5." ".$var_3."diamonds ".$var_4,$var_454,$var_5." ".$var_4,$var_1,$var_462."$\n";
strip();}
$var_56++;}}


if($var_391=="3"){
 
$var_493 = false;
$var_494 = false;
$var_495 = 0;

while(true):
$var_15 = json_decode(file_get_contents("config.json"),1);
    $var_497 = 1;
foreach( $var_15 as $var_99 => $var_100 ){
  
  $var_434  = $var_100["apikey"];
  $var_397       = $var_100["id"];
  
$var_398='{"API_Key":"'.$var_434.'","ID":'.$var_397.'}';
$var_508=ngentod("http://$var_393/api/Video/DailyLoginVideo",$var_392,$var_398);
$var_236=json_decode($var_508,1);
$var_514=$var_236["amount"];
if($var_514==15){
echo $var_5."akun $var_4$var_497 ".$var_3."daily".$var_5." energy ".$var_4."+ ".$var_514."\n";}
$var_497++;}
 
if(!$var_493){
    $var_15 = json_decode(file_get_contents("config.json"),1);
    $var_56 = 1;
foreach( $var_15 as $var_99 => $var_100 ){
  $var_434  = $var_100["apikey"];
  $var_397   = $var_100["id"];
  // misi 1
$var_398='{"API_Key":"'.$var_434.'","ID":'.$var_397.'}';
$var_401=ngentod("http://$var_393/api/User/GetUserInfo",$var_392,$var_398);
$var_236=json_decode($var_401,1);
$var_454=$var_236["diamonds"];
$var_456=$var_236["scratches"];
$var_548=md5(10+($var_454+$var_397));
$var_551=val2($var_454,$var_292);

$var_554='{"Validation":"'.$var_548.'","Validation2":"'.$var_551.'","API_Key":"'.$var_434.'","ID":'.$var_397.'}';
$var_559=ngentod("http://$var_393/api/Scratch/StartScratching",$var_392,$var_554);
$var_236=json_decode($var_559,1);
$var_565=$var_236["slot1"];
$var_567=$var_236["slot2"];
$var_569=$var_236["slot3"];
if($var_236==null){
echo "no connection !!!\n";}
$var_572 = floor($var_565 + $var_567 + $var_569);
$var_401=ngentod("http://$var_393/api/User/GetUserInfo",$var_392,$var_398);
$var_236=json_decode($var_401,1);
$var_454=$var_236["diamonds"];
$var_456=$var_236["scratches"];
$var_462=($var_454 / 100000);
$var_462 = number_format($var_462,5);


if($var_572==150){
    
echo $var_5."$var_1 akun$var_1$var_3 $var_56$var_5$var_1 no energy!$var_0";
$var_495++;
}else{
$var_495 = 0;
echo $var_5."akun$var_4 $var_56$var_3$var_1 claim$var_4 +$var_572$var_5$var_1 balance$var_4 $var_462 usd$var_0";}
  $var_613=count($var_15);
  if($var_495>=$var_613){ $var_493 = true; $var_495 = 0;break; }
  $var_56++;}strip();}
  
elseif(!$var_494){
    $var_15 = json_decode(file_get_contents("config.json"),1);
    $var_622   = 1;
foreach( $var_15 as $var_99 => $var_100 ){
  $var_434  = $var_100["apikey"];
  $var_397   = $var_100["id"];

$var_398='{"API_Key":"'.$var_434.'","ID":'.$var_397.'}';
$var_401=ngentod("http://$var_393/api/User/GetUserInfo",$var_392,$var_398);
$var_236=json_decode($var_401,1);
$var_454=$var_236["diamonds"];
$var_456=$var_236["scratches"];
$var_409=$var_236["lastVideo"];
 
 
$var_645=ngentod("http://$var_393/api/Video/HourlyVideo",$var_392,$var_398);
$var_236=json_decode($var_645,1);
$var_514=$var_236["amount"];
if($var_514==5){
echo $var_5."- akun$var_4 $var_622 ".$var_3."video".$var_5." energy ".$var_4."+ ".$var_514."\n";}
else{
$var_661=floor(3600 - $var_409);
loding("wait",$var_661);}
  
  $var_613=count($var_15);
  if($var_495>=$var_613){ $var_494 = true;}
  
  $var_645=ngentod("http://$var_393/api/Video/HourlyVideo",$var_392,$var_398);
$var_236=json_decode($var_645,1);
$var_514=$var_236["amount"];
if($var_514==5){
echo $var_5."- akun$var_4 $var_622 ".$var_3."video".$var_5." energy ".$var_4."+ ".$var_514."\n";}
$var_493 = false;
$var_622++;}strip();}
endwhile;}

if($var_391=="4"){
$var_15 = json_decode(file_get_contents("config.json"),1);

if(is_array($var_15)){ $var_359 = count($var_15);}else{ $var_359 = 0; }
echo $var_5."total accountod$var_4 $var_359$var_0";

echo "$var_1$var_5 [1]$var_4 wd custom email$var_0";
echo "$var_1$var_5 [2]$var_4 wd all account$var_0";
$var_705=readline("option : ");strip();


if($var_705=="1"){
    
$var_15 = json_decode(file_get_contents("config.json"),1);
$var_56   = 1;
foreach( $var_15 as $var_99 => $var_100 ){
  $var_434  = $var_100["apikey"];
  $var_397   = $var_100["id"];

$var_398='{"API_Key":"'.$var_434.'","ID":'.$var_397.'}';
$var_401=ngentod("http://$var_393/api/User/GetUserInfo",$var_392,$var_398);
$var_236=json_decode($var_401,1);
$var_454=$var_236["diamonds"];
$var_456=$var_236["scratches"];
$var_407=$var_236["lastLogin"];
$var_409=$var_236["lastVideo"];

$var_462 = ($var_454 / 100000);
$var_462 = number_format($var_462,5);
if($var_236==null){
echo "no connection !!!\n";exit;}
elseif(strpos($var_401,"validation errors")){
echo $var_5."akun$var_4 $var_56$var_7 eror...\n";strip(); 
}
elseif($var_407==3333333){
echo $var_5."akun$var_4 $var_56$var_7 eror...\n";strip();
break;}
else{
echo $var_5."akun$var_4 $var_56$var_3 id ".$var_4,$var_397,$var_5." ".$var_3."ammount ".$var_4,$var_454,$var_5." ".$var_4,$var_1,$var_462."$\n";}

$var_762=readline("$var_8$var_1 withdraw akun $var_4$var_56 y/n: ");

if($var_762=="y"){
$var_768=readline($var_4."email paypal :$var_5 ");

$var_771='{"API_Key":"'.$var_434.'","Amount":2000,"ID":'.$var_397.',"EMail":"'.$var_768.'"}';
$var_775=ngentod("http://$var_393/api/Payout/PayPal",$var_392,$var_771);
$var_779=json_decode($var_775,1);
$var_781=$var_779["additonalText"];
echo $var_4.$var_781.$var_0;
strip();}else{strip();}
$var_56++;}}

if($var_705=="2"){
    
$var_768=readline($var_4."email paypal :$var_5 ");
strip();
$var_15 = json_decode(file_get_contents("config.json"),1);
$var_56   = 1;
foreach( $var_15 as $var_99 => $var_100 ){
  $var_434  = $var_100["apikey"];
  $var_397   = $var_100["id"];

$var_398='{"API_Key":"'.$var_434.'","ID":'.$var_397.'}';

$var_401=ngentod("http://$var_393/api/User/GetUserInfo",$var_392,$var_398);
$var_236=json_decode($var_401,1);
$var_454=$var_236["diamonds"];
$var_456=$var_236["scratches"];
$var_407=$var_236["lastLogin"];
$var_409=$var_236["lastVideo"];


$var_462 = ($var_454 / 100000);
$var_462 = number_format($var_462,5);
if($var_236==null){
echo "no connection !!!\n";exit;}
elseif(strpos($var_401,"validation errors")){
echo $var_5."akun$var_4 $var_56$var_7 eror...\n";strip(); 
}
elseif($var_407==3333333){
echo $var_5."akun$var_4 $var_56$var_7 eror...\n";strip();
break;}
else{
echo $var_5."akun$var_4 $var_56$var_3 id ".$var_4,$var_397,$var_5." ".$var_3."ammount ".$var_4,$var_454,$var_5." ".$var_4,$var_1,$var_462."$\n";}


$var_771='{"API_Key":"'.$var_434.'","Amount":2000,"ID":'.$var_397.',"EMail":"'.$var_768.'"}';
$var_775=ngentod("http://$var_393/api/Payout/PayPal",$var_392,$var_771);
$var_779=json_decode($var_775,1);
$var_781=$var_779["additonalText"];
echo $var_4.$var_781.$var_0;
strip();$var_56++;}}
   }
readline($var_5."press any key to continue");
clr($var_354);
endwhile; 



?>
