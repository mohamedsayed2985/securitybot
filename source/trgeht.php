<?php
flush();
ob_start();
set_time_limit(0);
error_reporting(0);
ob_implicit_flush(1);

if($text == "محيبس"){
$lockgamess = $settings["lock"]["gamess"];
if($settings["lock"]["game"] == "مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👊1،👊2،👊3،👊4،👊5
اختار وجرب حظك 💬💢",
]);
}
$b = array("✅صح","❌خطاء","❌خطاء","❌خطاء","❌خطاء","❌خطاء","❌خطاء");
$c = array_rand($b,1);
$armof = array("الحمد لله","سبحان الله","استغفر الله");
$adi = array_rand($armof,1);
if($text == "1" or $text == "2" or $text == "3" or $text == "4" or $text == "5"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
♔︙ جوابك - $b[$c]
♔︙ $armof[$adi]*
",'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
####
$rand = rand("2","15");
if($text == "غنيلي" or $text == "غني"){
if($settings["lock"]["ahbgii"] == "مقفول"){
bot('sendvoice',[
'chat_id'=>$chat_id,
'voice'=>"t.me/D_UIII/$rand",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"𝙼𝙰𝚈 𝙱𝙾𝚃𝚂 𖣴",'url'=>"t.me/botatiiii"]],]])]);}}
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
$re = $update->message->reply_to_message;
$me = $message->reply_to_message;  
$mem = $me->message_id; 
$AEHAB = str_replace("قله ","$AEHAB",$text); 
if($re){
if($text == "قله $AEHAB"){ 
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"اقلك $AEHAB", 
'reply_to_message_id'=>$mem, 
]); 
} 
}
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
elseif($text =="تعطيل التاك" or $text =="تعطيل الهاش تاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$AUBEHAB) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
♔︙ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
♔︙ تم تعطيل التاك
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"♔︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
elseif($text =="تفعيل التاك" or $text =="تفعيل  الهاش تاك"){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$AUBEHAB) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {$add = $settings["information"]["added"];
if ($add == true) {
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
♔︙بواسطه ⋙ [$first_name](tg://user?id=$from_id)
♔︙تم تفعيل التاك
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["tag"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"♔︙البوت ليس مفعل قم بتفعيل البوت",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
}
}
}
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
$taag = $settings["$chat_id"]["tagusermy"];
$P=count($taag);
if($message and !in_array($from_id,$taag)){
if ($tc == 'group' || $tc == 'supergroup'){
if($P<200){
$settings["$chat_id"]["tagusermy"][]="$from_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}else{
unset($taag[0]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
$settings["$chat_id"]["tagusermy"]=array_values($settings["$chat_id"]["tagusermy"]);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
$settings["$chat_id"]["tagusermy"][]="$from_id";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}}}
elseif($text == "تاك" or $text == "تاك للكل" or $text == "تاك للكل"  and $text==$settings["information"]["tagall"]){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$AUBEHAB) or in_array($from_id,$nazar)) {
$lockcmd = $settings["lock"]["tag"];
if($lockcmd == "مفتوح"){
$taag = $settings["$chat_id"]["tagusermy"];
for($z = 0;$z <=count($taag)-1;$z++){
$Apitag = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$taag[$z]"));
if($Apitag->ok==true){
@$Usertag = $Apitag->result->username;
$first_natg = $Apitag->result->first_name;
$idtg =$Apitag->result->id;
if(!$Usertag){
$Usertag = "[$idtg](tg://user?id=$idtg)";
}elseif($Usertag){
$Usertag = "[@$Usertag]";
}
$tagmy = $tagmy."♔︙↵{ $Usertag }"."\n";
}else{
unset($settings["$chat_id"]["tagusermy"][$z]);
file_put_contents("data/$chat_id.json",json_encode($settings));
$settings["$chat_id"]["tagusermy"]=array_values($settings["$chat_id"]["tagusermy"]);
file_put_contents("data/$chat_id.json",json_encode($settings));
}
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*♔︙قائمه الاعضاء :*
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
$tagmy
",'parse_mode'=>"markdown",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
]);
}}}
if($text == "تاك" or $text == "تاك الكل" or $text == "تاك للكل"){
$lockcmd = $settings["lock"]["tag"];
if($lockcmd == "مقفول"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"*عذرا التاك مقفول ❌*
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
]);}}
#┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
$text = $message->text;
mkdir("data/kickme");
mkdir("data/kickmelist");
$TTKTT = "$Dev";
$TTK       = $message->message_id;
$Kickmetxt = file_get_contents("kickme.txt");
if ($text =="اطردني" or $text == "ادفرني" or $text == "مغادره" and $from_id != $TTKTT){
if ($settings["lock"]["bannnnn"] == "مفتوح"){
 file_put_contents("kickme.txt","yes");
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• ارسل ( نعم ) ليتم طردك •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 if($text == "نعم" && $Kickmetxt =="yes"){ file_put_contents("kickme.txt","");
bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
]);
bot('banChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id,
]);
  bot("sendmessage",[
  "chat_id"=>$chat_id,
  "text" => "
تفضل اتسرسح منا
  ", 'parse_mode'=>"HTML",
  "reply_to_message_id"=>$TTK,
  ]);
file_put_contents("data/kickme/$chat_id.txt",$from_id . "\n" , FILE_APPEND);
file_put_contents("data/kickmelist/$chat_id.txt",".» @$username.". "\n" , FILE_APPEND);
  }
if ($text =="اطردني" and $from_id == $TTKTT){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك مطوري •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
if ($text =="اطردني" and $status == 'administrator'){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك مشرف •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
if($from_id != $TTKTT){
if ($text =="اطردني" and $status == 'craetor'){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك منشئ •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 }
if($status == "member"){
if ($text =="اطردني" and in_array($from_id,$mmyaz)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك مميز •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 }
if ($text =="اطردني" and in_array($from_id,$admin_user)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك ادمن •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 if ($text =="اطردني" and in_array($from_id,$manger)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك مشرف •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 if ($text =="اطردني" and in_array($from_id,$nazar)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك منشئ اساسي •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 if ($text =="اطردني" and in_array($from_id,$carlos)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك منشئ •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }
 if ($text =="اطردني" and in_array($from_id,$eri)){
 bot("sendMessage",[
 "chat_id"=>$chat_id,
 "text"=>"
• لااستطيع طردك لانك مبرمج السورس •
 ",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$TTK,
 ]);
 }}
##########
$LOVEYOU = array("سـأكون دائـماً مـوجـود لك ولأجـلك 🤍،",
"♥️🌿


مشدوهه روحي ا؏ـليك ماگلهـه هـيدي
گمـت ادفـ؏ الڪاروك و اولـيدي بيدي!",
"انت وحدك من تجيني 
 منين ما تلزمني اطيح..❤",
"احببتك بطريقه لا يستحقها غيرك.💗");
$LOVEYOU2 = array_rand($LOVEYOU, 1);
if($text == "قولي" or $text == "غازلوني"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$LOVEYOU[$LOVEYOU2]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message_id, ]);}

$F_Uid = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$from_id"),true);
$bio = $F_Uid['result']['bio'];
if(!$bio){
$biio = "لايوجد نبذة";
}elseif($bio){
$biio = "$bio";
}
if($text == "بايو"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"♔︙عزيزي ← [$first_name](tg://user?id=$from_id)
♔︙البايو الخاص بك ← $biio
",'parse_mode'=>"MARKDOWN",'reply_to_message_id'=>$message_id, ]);}

#----------(carlos)----------#
$x = 0;
$tags = 0;
$get = file_get_contents("data/$chat_id/all.json");
$getx = explode("\n", $get);
if($message and  ! in_array ($from_id, $getx)){
file_put_contents("data/$chat_id/all.json","$from_id\n", FILE_APPEND);
} 
if($text == "@all"){  
if ( $status == 'creator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$eri) or in_array($from_id,$nazar)) {
for($i=0;$i<count($getx);$i++){
if ($x == 5 or $x == $tags or $i == 0 ){
$tags = $x + 5;
$t = "☆︙هـا حبايب قلبي فينكم\n";
}
$datainfo = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$getx[$i]"));
$names =$datainfo->result->first_name;
$ids =$datainfo->result->id;
$x = $x + 1;
$t = $t.", [".$names."](tg://user?id=".$ids.")";
if ($x == 5 or $x == $tags or $i == 0){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text'=>$t,
'parse_mode' =>"markdown", 
'disable_web_page_preview'=>true,
]);
}
}
}
}
#----------(carlos)----------#


if($text == "الغاء قائمة التثبيت" ){
if ( $status == 'creator' or $status == 'administrator' or in_array($from_id,$Dev) or in_array($from_id,$manger) or in_array($from_id,$admin_user) or in_array($from_id,$developer) or in_array($from_id,$carlos) or in_array($from_id,$nazar) or in_array($from_id,$eri)) { 
bot('unpinAllChatMessages',[
'chat_id'=>$chat_id,
]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"♔︙ تم الغاء جميع التثبيتات
♔︙ بواسطة ⋙「 [$first_name](tg://user?id=$from_id) 」
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
#########
$statjsonrt = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$re_id),true);
$statusrt = $statjsonrt['result']['status'];
$re = $update->message->reply_to_message;
if($rt && $text == "نادي" or $rt && $text == "المناده"){
if($settings["lock"]["WOL"] == "مقفول"){
$EHAB = "[$re_name](tg://user?id=$re_id)";
$ehab = "[$first_name](tg://user?id=$from_id)";
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"
♔︙$EHAB
♔︙عزيزي تعال في شخص ناداك
♔︙المنادي ~⪼ $ehab
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
	 'reply_markup'=>$inlinebutton,
]);
}
}
#####
if($text == "نادي" or $text == "المنادات"){
if($settings["lock"]["WOL"] == "مفتوح"){
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"♔︙عزيزي ~⪼ [$first_name](tg://user?id=$from_id)
♔︙امر نادي معطل من قبل الادارة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
}
########
$bot = json_decode(file_get_contents("data/bot.json"),1);
if($update->message->new_chat_member){
$bot[$update->message->new_chat_member->id]['new'] = $user;
file_put_contents("data/bot.json",json_encode($bot));
}
$b = $bot[$from_id]['new'];
if($text == "مين ضافني" and $b != $user and $b != null){
if($settings["lock"]["nweadd"] == "مقفول"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"[♔︙ *الشخص الذي ضافك* : @$b]",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
if($text == "مين ضافني" and $b == null){
if($settings["lock"]["nweadd"] == "مقفول"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ ♔︙*انت دخلت عبر الرابط*",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
#####
if($text =="المطور" or $text == "مطور"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✵⁞ عزيزي ⋙「 [$first_name](tg://user?id=$from_id) 」 
✵⁞ اسم المطور ⋙ $NameDev
✵⁞ معرف المطور ⋙ [$DevUser]
✵⁞ هل انته متأكد من منادات المطور
✵⁞ اذا تقصد غير شخص اضغط الغاء"
,'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵⁞ نعم ⁞✵' ,'callback_data'=>"NDVE"],['text'=>'✵⁞ الغاء ⁞✵' ,'callback_data'=>"delDve"]],
[['text'=>"✵⁞ المطور ⁞✵",'url'=>"t.me/$KKYKKN"]],
]])
]); 
}
if($data == "NDVE" ){
$namegroup = $jsonlink->message->chat->title;
$mem = bot('getchatmemberscount',['chat_id'=>$chat_id])->result;
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"✵⁞ تم منادات المطور انتظر للرد عليك",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'' ,'callback_data'=>"nb1"]],
]])
]); 
$IDMAMBRE = $message->from->id;
$export = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id2");
$jsonlink = json_decode($export, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',['chat_id'=>$Dev[0],'text'=>"✵⁞ هناك شخص بحاجه الي مساعدة
━━━━━━━━━━━━━
✵⁞ الاسم ⋙ $name2
✵⁞ الايدي ⋙ $from_id2
✵⁞ المعرف ⋙ [@$username2]
━━━━━━━━━━━━━
✵⁞ معلومات المجموعه
✵⁞ الايدي ⋙ $chat_id2
━━━━━━━━━━━━━
✵⁞ الرابط ⋙ $getlinkde
",]);}
if($data=="delDve"){
bot ('EditMessageText',['chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"✵⁞ تم الغاء امر منادات المطور",'parse_mode'=>'MarkDown', 'disable_web_page_preview'=>true, 'reply_to_message_id'=>$message->message_id,]);
sleep(15);
bot('deletemessage',[
 'chat_id'=>$chat_id2,
 'message_id'=>$message->message_id2
]);}
#####
$zkrf = file_get_contents("zkrf.txt");
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
if($text == "حساب العمر" or $text == "العمر"){
if($settings["lock"]["zkrf"] == "مقفول"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
✵⁞ اهلا بك  في قسم حساب العمر
⌯⁞ اهلا بك » [$first_name](tg://user?id=$from_id) 
┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵⁞ حساب العمر الان ⁞✵','callback_data'=>'ii']],
]
])
]);
}
}
if($data == "ii" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
♔︙ ارسل الامر الان 
♔︙بهذا الشكل :
♔︙العمر السنة/الشهر/اليوم
♔︙مثال : العمر 2002/3/5

 ┉ ┉ ┉ ┉ ┉ ┉ ┉
','parse_mode'=>"markdown",
]);   
}
if(strpos($text, 'العمر ') !== false){
$num= str_replace('العمر ','',$text);
$hours_in_day = 24;
$minutes_in_hour = 60;
$seconds_in_mins = 60;
$birth_date = new DateTime($num);
$current_date = new DateTime();
date_default_timezone_set("Asia/Baghdad");
$date = date('n');
$dat = date('j');
$diff = $birth_date->diff($current_date);
$years = $diff->y;
$mn = $diff->m;
$doy = $diff->d;
$months = ($diff->y * 12);
$weeks = floor($diff->days/7); echo "\n";
$days = $diff->days;
$hours = $diff->h + ($diff->days * $hours_in_day);
$mins = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour);
$seconds = $diff->h + ($diff->days * $hours_in_day * $minutes_in_hour * $seconds_in_mins);
bot('Sendmessage',[
'chat_id'=>$chat_id,
'text'=>" 
✵⁞ العضو » [$first_name](tg://user?id=$from_id) 
⌯⁞ تم حساب عمرك بالتفصيل،
⌯⁞ عمرك هوا الان : $years.» سنه  $mn.»اشهر،
⌯⁞ مر على ولادتك : $months.» شهر،
⌯⁞ مر على ولادتك : $weeks.» اسبوع،
⌯⁞ مر على ولادتك : $days.» يوم،
⌯⁞ مر على ولادتك : $hours.» ساعه،
⌯⁞ مر على ولادتك : $mins.» دقيقه،
⌯⁞ مر على ولادتك : $seconds.» ثانيه،

┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉ ┉
",
'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>'✵⁞ حساب العمر مجددأ ⁞✵','callback_data'=>'ii']],
]
])
]);
}
#####
if($text == "مين ضافني" or $text == "ضافني"){
if($settings["lock"]["nweadd"] == "مفتوح"){
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"♔︙عزيزي ~⪼ [$first_name](tg://user?id=$from_id)
♔︙امر ضافني معطل من قبل الادارة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
}
#######
if($text == "حساب العمر" or $text == "العمر"){
if($settings["lock"]["zkrf"] == "مفتوح"){
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"♔︙عزيزي ~⪼ [$first_name](tg://user?id=$from_id)
♔︙امر حساب العمر معطل من قبل الادارة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
}
#######
if($text == "رفع ادمن" or $text == "رفع مدير"){
if($settings["lock"]["rfaabot"] == "مفتوح"){
bot ('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"♔︙عزيزي ~⪼ [$first_name](tg://user?id=$from_id)
♔︙امر الرفع معطل من قبل الادارة",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
]);
}
}
#######
$P_UIII = str_replace(" قول ","",$text);
if($text == "قول $P_UIII"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$P_UIII",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
#######
$namex = explode(" - ",$text);
if($namex[0] and $namex[1]){
if($settings["lock"]["mylove"] == "مقفول"){
	$SABREN = array("１０%","２０%","３０%","４０%","５０%","６０%","７０%","８０%","９０%","１００%");
$REEM = array_rand($SABREN,1);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*
نـسبـهہ الحـب والـثـقهہ بـيـن $namex[0] و $namex[1] هـي 💕🔰*
 »  [$SABREN[$REEM]](https://t.me/$devchink)  «",
'parse_mode'=>"markdown", 
'reply_to_message_id'=>$message->message_id,
]);
}}
#############
if($text == "مبرمج السورس" or $text == "مبرمج سورس"){
bot('sendvideo',[
'chat_id'=>$chat_id,
'video'=>"https://t.me/msmswork/6",
'caption' =>"┏•━•━•━ 『𝙷𝙼𝚂』 ━•━•━•┓
╏⍟ 𝚆𝙴𝙻𝙲𝙾𝙼𝙴 𝚃𝙾 
╏⍟ 𝙸𝙽𝙵𝙾 𝙳𝙴𝚅 𝚂𝙾𝙺𝚁𝙲𝙴 
╏⍟ $time
┗•━•━•━ 『𝙷𝙼𝚂』 ━•━•━•┛
╏⍟ 𝙲𝙾𝙼𝙼𝙺𝙽𝙸𝙲𝙰𝚃𝙸𝙾𝙽 𝙳𝙴𝚅𝙴𝙻𝙾𝙿𝙴𝚁
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message_id,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"✵قناتي🖤🥀",'url'=>"t.me/$devchink"]],
[['text'=>"✵⁞ 𝙳𝙴𝚅 𝙷𝙼𝚂 ⁞✵",'url'=>"t.me/$buy"],['text'=>"✵⁞ تحديثات البوت  ⁞✵",'url'=>"t.me/botatiiii"]],
]])
]); 
}
############     
elseif( $text =="تفعيل ملف game"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"♔︙الملف ⋙ *Game*
♔︙تم تفعيله في البوت بنجاح
♔︙[قناة البوت](https://t.me/botatiiii)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/geme.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if( $text =="تعطيل ملف game"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"♔︙الملف ⋙ *Game*
♔︙تم تعطيله وحذفه من البوت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  file_put_contents('data/geme.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if ($text == "الالعاب"){
    bot('sendMessage',[
        'chat_id'=>$chat_id,
        'text'=>"♔︙العاب ⋙ *Game*
♔︙لعرض الالعاب اضغط علي العبة
♔︙لعرض كيبورد العب ⋙ Game",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>"لعبة الرياضات",'url'=>"https://t.me/gamebot?game=MathBattle"],['text'=>"لعبة XO",'url'=>"http://t.me/xo_hmsbot?start3836619"]],
            [['text'=>"لعبة المتشابه",'url'=>"https://t.me/gamee?game=DiamondRows"]],
            [['text'=>"لعبة كرة القدم",'url'=>"https://t.me/gamee?game=FootballStar"],['text'=>"لعبة الورق",'url'=>"https://t.me/gamee?game=Hexonix"]],
            ]
        ])
        ]);
}
}

$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if($text == "Game"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"♔︙اوامر ⋙ *Game*
♔︙لعرض الالعاب اونلاين 
♔︙ارسل امر لعبة + العاب في الاسفل
♔︙ كرة القدم 
♔︙الرياضات
♔︙المتشابه
♔︙ الورق
♔︙اكس او",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
]);
}}

$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if($text == "لعبة الرياضات"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[لعبة الرياضات](https://t.me/gamebot?game=MathBattle)",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
]);
}}
$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if($text == "لعبة كرة القدم"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[لعبة كرة القدم](https://t.me/gamee?game=FootballStar)",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
]);
}}
$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if($text == "لعبة الورق"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[لعبة الورق](https://t.me/gamee?game=Hexonix)",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
]);
}}
$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if($text == "لعبة اكس او"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[لعبة XO](http://t.me/xo_hmsbot?start3836619)",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
]);
}}
$gamejson = file_get_contents('data/geme.json');
if($gamejson == "✔"){
if($text == "لعبة المتشابه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"[لعبة المتشابه](https://t.me/gamee?game=DiamondRows)",
'parse_mode'=>'markdown','reply_to_message_id'=>$message->message_id,
]);
}}
############
$chat_id2 = $update->chat->id;
$message_id2 = $update->message_id;
$yotup = str_replace("تحميل ", "تحميل", $text);
if($text == "تحميل $yotup"){
$keyboard = [];
$search = json_decode(file_get_contents("https://ggrff7hnn.ml/Yote/yotube_search_v2.1(carlos).php?search=".urlencode($yotup)),true);
for($b=1; $b <= 10; $b++){   
$keyboard['inline_keyboard'][] = [['text'=>$search['results'][$b]['title'], 'callback_data'=>"jaemax##".$search['results'][$b]['url']]];
$reply_markup=json_encode($keyboard);
}
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'♔︙عزيزي ⋙「 [$first_name](tg://user?id=$from_id) 」 
♔︙قم بأختيار الاغنية ☑️',
'parse_mode'=>"MARKDOWN",
'reply_markup'=>$reply_markup
]);
}
$jaemax = explode("##", $data);
if($jaemax[0] == "jaemax"){
$api = json_decode(file_get_contents("https://alsh-bg.ml/api/YouTube_Free.php?url=http://www.youtube.com/watch?v=".$jaemax[1]),true);
$url = $api['info'][0]['url'];
$title = $api['info'][0]['title'];
$get = file_get_contents($url);
file_put_contents("carlos.ogg",$get);
bot('deleteMessage',[
'chat_id'=>$update->callback_query->message->chat->id,
'message_id'=>$update->callback_query->message->message_id,
]);
bot('sendvoice',[ 
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'voice'=>new CURLFile("carlos.ogg"),
'caption' =>"*♔︙تم تنزيل الاغنية بشكل بصمة ☑️*",
'parse_mode'=>"MARKDOWN",
  'title'=>"$title",
     ]);
unlink("carlos.ogg");
}
############
if ( $text =="♔ تفعيل الاحصائيات" or $text == "تفعيل الاحصائيات"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"♔︙بواسطه ← [$first_name](tg://user?id=$from_id)
♔︙تم بالتأكيد تفعيل الاحصائيات
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/addnambr.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
if ( $text =="♔ تعطيل الاحصائيات" or $text == "تعطيل الاحصائيات"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"♔︙بواسطه ← [$first_name](tg://user?id=$from_id)
♔︙تم بالتأكيد تعطيل الاحصائيات
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/addnambr.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
############
$addnambr = file_get_contents('data/addnambr.json');
if($addnambr == "✔"){
if($text == "الاحصائيات"){
if (in_array($from_id,$Dev) or in_array($from_id,$developer) or in_array($from_id,$eri)) {
$gr7 = count($groups)-1;
$gr8 = count($pirvate)-1;
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"♔︙بواسطة ← [$first_name](tg://user?id=$from_id)
♔︙تم عرض الاحصائيات
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
♔︙المجموعات ← $gr7
♔︙المشتركين ← $gr8
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
♔︙المطور الاساسي ← [$DevUser]
",'parse_mode'=>"MARKDOWN",
'reply_to_message_id'=>$message->message_id,
]);
}}}
############
if ( $text =="تفعيل ملف Zhrafa"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"♔︙الملف ⋙ *Zhrafa*
♔︙تم تفعيله في البوت بنجاح
♔︙[قناة البوت](https://t.me/botatiiii)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/Zhrafa.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if( $text =="تعطيل ملف Zhrafa"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"♔︙الملف ⋙ *Zhrafa*
♔︙تم تعطيله وحذفه من البوت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  file_put_contents('data/Zhrafa.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
$Zhrafajson = file_get_contents('data/Zhrafa.json');
if($Zhrafajson == "✔"){
if ($text =="تفعيل الزخرفه" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$carlos) || in_array($from_id,$AUBEHAB) || in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
♔︙ بواسطه ⋙ [$first_name](tg://user?id=$from_id)
♔︙تم تفعيل الزخرفه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["zkh"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليست مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}}
$Zhrafajson = file_get_contents('data/Zhrafa.json');
if($Zhrafajson == "✔"){
if($text =="تعطيل الزخرفه" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)|| in_array($from_id,$carlos) || in_array($from_id,$AUBEHAB) || in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
♔︙بواسطه ⋙ [$first_name](tg://user?id=$from_id)
♔︙تم تعطيل الزخرفه
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["zkh"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عذرا عزيزي المجموعة ليست مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}}
$Zhrafajson = file_get_contents('data/Zhrafa.json');
if($Zhrafajson == "✔"){
$kindi = file_get_contents("kindi.txt");
if($settings["lock"]["zkh"] == "مقفول"){
if ($text == "زخرفه" or $text == "ز" or $text == "زخرف"){
file_put_contents("kindi.txt","nam");
bot("sendMessage",[
 'chat_id'=>$chat_id,
"text"=>"♔︙ قم بارسال النص الان
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}
if($text and $kindi =="nam" ){
file_put_contents("kindi.txt","");
$k = file_get_contents("https://ali-apii.ml/api/zhrfa_nizk.php?text=".$text);
bot('sendMessage',[
 'chat_id'=>$chat_id,
'text'=>"$k
 ـ────────────
♔︙ تمت الزخرفة بنجاح لـ ⋙ $text ؛
♔︙ اضغط فوق اي نوع زخرفة للنسخ اعلاه ؛
",'parse_mode'=>"MARKDOWN",
 'reply_to_message_id'=>$message_id
,]);}}}
############
if ( $text =="تفعيل ملف ChangeName"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"♔︙الملف ⋙ *ChangeName*
♔︙تم تفعيله في البوت بنجاح
♔︙[قناة البوت](https://t.me/botatiiii)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/ChangeName.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if( $text =="تعطيل ملف ChangeName"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"♔︙الملف ⋙ *ChangeName*
♔︙تم تعطيله وحذفه من البوت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  file_put_contents('data/ChangeName.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if ( $text =="تفعيل ملف ChangeUser"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"♔︙الملف ⋙ *ChangeUser*
♔︙تم تفعيله في البوت بنجاح
♔︙[قناة البوت](https://t.me/botatiiii)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/ChangeUser.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if( $text =="تعطيل ملف ChangeUser"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"♔︙الملف ⋙ *ChangeUser*
♔︙تم تعطيله وحذفه من البوت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  file_put_contents('data/ChangeUser.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if ( $text =="تفعيل ملف Changephotos"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"♔︙الملف ⋙ *Changephotos*
♔︙تم تفعيله في البوت بنجاح
♔︙[قناة البوت](https://t.me/botatiiii)
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/Changephotos.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
if( $text =="تعطيل ملف Changephotos"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {$add = $settings["information"]["added"];
if ($add == true) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"♔︙الملف ⋙ *Changephotos*
♔︙تم تعطيله وحذفه من البوت بنجاح
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
  file_put_contents('data/Changephotos.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"يجب تفعيل البوت في المجموعة قم بإرسال كلمة { • تفعيل • } لتفعيل البوت",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
 }
}
}
$s = json_decode(file_get_contents("http://api.telegram.org/bot".API_KEY."/getChat?chat_id=$from_id"));
$sn =$s->result->first_name;
$su =$s->result->username;
$replace = json_decode(file_get_contents("replace.json"),true);
$user = $replace[$from_id]["user"];
$name = $replace[$from_id]["name"];
$photosss = $replace[$from_id]["photos"];
$ChangeUser = file_get_contents('data/ChangeUser.json');
if($ChangeUser == "✔"){
if($message and $su != $user and $user != null and $user != ""){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"♔︙غير معرف الحلو 😂
♔︙معرف لقديم : @$user
✵︙معرف لجديد : @$username",'parse_mode' =>"markdown", 'reply_to_message_id'=>$message->message_id, 
]);
} 
if($message and ! in_array($su,$user)){
$replace[$from_id]["user"] = "$su";
file_put_contents("replace.json",json_encode($replace));
}}
$ChangeName = file_get_contents('data/ChangeName.json');
if($ChangeName == "✔"){
if($message and $sn != $name and $name != null and $name != ""){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"♔︙غير اسمه الحلو 😂
♔︙اسمه لقديم : $name
♔︙اسمه لجديد : $first_name
",'parse_mode' =>"markdown", 'reply_to_message_id'=>$message->message_id, 
]);
} 
if($message and ! in_array($sn,$name)){
$replace[$from_id]["name"] = "$sn";
file_put_contents("replace.json",json_encode($replace));
}}
$Changephotos = file_get_contents('data/Changephotos.json');
if($Changephotos == "✔"){
if($message and $sn != $photosss and $photosss != null and $photosss != ""){
bot('sendMessage', [
'chat_id' =>$chat_id,
'text' =>"♔︙اكيد تزاعل مع الحب و غير صورة 😂",'parse_mode' =>"markdown", 'reply_to_message_id'=>$message->message_id, 
]);
} 
if($message and ! in_array($sn,$photosss)){
$replace[$from_id]["photos"] = "$sn";
file_put_contents("replace.json",json_encode($replace));
}}
############
if ( $text =="تفعيل جميع الملفات"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"♔︙بواسطه ← [$first_name](tg://user?id=$from_id)
♔︙تم بالتأكيد تفعيل جميع الملفات
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/geme.json',✔);
file_put_contents('data/Zhrafa.json',✔);
file_put_contents('data/ChangeUser.json',✔);
file_put_contents('data/Changephotos.json',✔);
file_put_contents('data/ChangeName.json',✔);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
if( $text =="مسح جميع الملفات"){
if ( in_array($from_id,$Dev) or in_array($from_id,$eri)) {
 bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"♔︙بواسطه ← [$first_name](tg://user?id=$from_id)
♔︙تم بالتأكيد مسح جميع الملفات
",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
file_put_contents('data/geme.json',✖️);
file_put_contents('data/Zhrafa.json',✖️);
file_put_contents('data/ChangeUser.json',✖️);
file_put_contents('data/Changephotos.json',✖️);
file_put_contents('data/ChangeName.json',✖️);
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
}
############
if ($text == "المتجر"){
$GGAME = "$gamejson";
if(in_array($from_id,$Dev) or in_array($from_id,$eri)){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"♔︙قائمة ملفات متجر سورس همس
♔︙الملفات المتوفره حاليا ↫ ⤈
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
♔︙[ملف العاب اونلاين](https://t.me/botatiiii) ↫ ⤈
1~ : game ↬ ($gamejson)
♔︙[ملف زخرفه](https://t.me/botatiiii) ↫ ⤈
2~ : Zhrafa ↬ ($Zhrafajson)
♔︙[ملف تنبيه عند تغير الاسم](https://t.me/botatiiii) ↫ ⤈
3~ : ChangeName ↬ ($ChangeName)
♔︙[ملف تنبيه عند تغير المعرف](https://t.me/botatiiii) ↫ ⤈
4~ : ChangeUser ↬ ($ChangeUser)
♔︙[ملف تنبيه عند تغير الصورة](https://t.me/botatiiii) ↫ ⤈
5~ : Changephotos ↬ ($Changephotos)
ꔹ┉ ┉ ┉ ┉ ┉ ┉ ┉ꔹ
♔︙علامة ↫ (✔) تعني الملف مفعل
♔︙علامة ↫ (✖️) تعني الملف معطل",
'parse_mode'=>'markdown','disable_web_page_preview'=>true,'reply_to_message_id'=>$message->message_id,
]);
}}
############
$json = json_decode(file_get_contents("data/kit.json"),true);
$kitok = $json["kitok"];
$kitdel = $json["kitdel"];
$kit = $json["kit"];
if($text == "♔ اضف كت" and $from_id == $sudo){
$json["kitok"] = "$from_id";
file_put_contents("data/kit.json",json_encode($json));
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*♔︙ارسل السؤال الان*",'reply_to_message_id'=>$message->message_id, 
]);
}
if($text != "♔ اضف كت" and $kitok == $from_id){
$json["kit"][] = "$text";
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*♔︙تم حفظ السؤال في قائمه ( كت تويت )
⌔︙السؤال : $text *",'reply_to_message_id'=>$message->message_id, 
]);
unset($json["kitok"]);
file_put_contents("data/kit.json",json_encode($json)); 
}

if($text == "♔ حذف كت" and $from_id == $sudo){
$json["kitdel"] = "$from_id";
file_put_contents("data/kit.json",json_encode($json));
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*♔︙ارسل السؤال الان لحذفه*",'reply_to_message_id'=>$message->message_id, 
]);
}

if($text != "♔ حذف كت" and $kitdel == $from_id and in_array($text,$kit)){
$setwit = array_search("$text", $json["kit"]);
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*♔︙تم حذف السؤال من قائمه ( كت تويت )
✵⁞ السؤال : $text *",'reply_to_message_id'=>$message->message_id, 
]);
unset($json["kitdel"]);
unset($json["kit"][$setwit]);
file_put_contents("data/kit.json",json_encode($json)); 
}

if($text != "⌯ حذف كت" and $kitdel == $from_id and !in_array($text,$kit)){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*♔︙هذا السؤال لا يوجد في قائمة ( كت تويت ) *",'reply_to_message_id'=>$message->message_id, 
]);
unset($json["kitdel"]);
file_put_contents("data/kit.json",json_encode($json)); 
}

$malkbot = $coss['malkbot'];
$malkkbot = $coss['malkkbot'];
if($text=="نقل الملكية" or $text=="♔ نقل الملكية"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
☆︙عزيزي ← [$name](tg://user?id=$from_id)
☆︙الان قم بأرسال ايدي المطور
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
$coss['malkbot'] = "ok_malk";
$coss['malkkbot'] = "$from_id";
file_put_contents("data/carlos.json",json_encode($coss));
}
}
if($text and preg_match('/([0-9])/i',$text) and $malkbot == "ok_malk" and $malkkbot == $from_id){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
☆︙بواسطة ← [$name](tg://user?id=$from_id)
☆︙تم تعين المطور جديد بنجاح
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
$coss['malk'] = $text;
$coss['malkbot'] = "on";
file_put_contents("data/carlos.json",json_encode($coss));
}
if($text=="حذف المالك الثاني" or $text=="♔ حذف المالك الثاني"){
if(in_array($from_id,$Dev)){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
☆︙عزيزي ← [$name](tg://user?id=$from_id)
☆︙تم حذف المطور
☆︙تم اعادة المطور الاساسي
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
]);
$coss['malk'] = null;
file_put_contents("data/carlos.json",json_encode($coss));
}
}

$twit = array_rand($kit, 1);
$kit = $kit[$twit] ;
if($kit != null){
if($text == "كت" or $text == "تويت" or $text == "كت تويت"){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*♔︙$kit *",'reply_to_message_id'=>$message->message_id, 
]);
}} 
$kit = $json["kit"];
if($kit == null){
if($text == "كت" or $text == "تويت" or $text == "كت تويت"){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*♔︙لم تتم اضافة اسئلة في قائمة ( كت تويت ) *",'reply_to_message_id'=>$message->message_id, 
]);
}}
$ctwit = count($json["kit"]);
if($text == "♔ عدد الاسئله"){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*♔︙تم اضافة $ctwit سؤال في قائمة ( كت تويت ) *",'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "♔ مسح الاسئله"){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*♔︙تم مسح الاسئله من قائمة ( كت تويت ) *",'reply_to_message_id'=>$message->message_id, 
]);
unset($json["kit"]);
file_put_contents("data/kit.json",json_encode($json));
}
############