<?php
/// DigitalCloud.uz siz uchun maxsus xosting
///python va php dasturlash uchun eng zo'ri

//ushbu kod @UzMaxDev(Sr.R3d) tomonidan dasturlandi
// github: @ShamolDev
// Telegram kanal: @pcouz
ob_start();
define("API_KEY","5157409059:AAHqnFR8Jj6yxmJulHoszPoQmPEOuQVy_Ao");//Bot tokeni
$admin = "5943999890";//Admin id 
$botn = "megachip_bot";


function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}

$qid = $call->id;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$callback = $update ->callback_query;
$data = $update ->callback_query->data;
$tx = $message->text;
$idi = $message->from->id;
$step = file_get_contents("step/$idi.db");
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id;
$mid2 = $update->callback_query->message->message_id;
$fid2 = $update->callback_query->message->from->id;
$call = $update->callback_query;
$fname = $message->from->first_name;
$lname = $message->from->last_name;
$fuser = $xabar->from->username;

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$cid = $message->chat->id;
$mid = $message->message_id;
$fid = $message->from->id;
$type = $message->chat->type;
$reply = $message->reply_to_message;
$newid = $message->new_chat_member->id;
$botid = bot('getme',['BOTIZ_IDSI'])->result->id;
$botname = bot('getme',['BOTIZ_USERI'])->result->username;
$rtx = $reply->text;
$msgs = json_decode(file_get_contents("baza/$cid.json"),true);
mkdir("stat");
$cid = $message->chat->id;
$data = $update ->callback_query->data;
$qid = $update ->callback_query->id;
$id = $update ->inline_query->id;
$query = $update ->inline_query->query;
$query_id = $update ->inline_query->from->id;
$cid2 = $update ->callback_query->message->chat->id;
$mid2 = $update ->callback_query->message->message_id;
$callfrid = $update ->callback_query->from->id;
$callname = $update ->callback_query->from->first_name;
$calluser = $update ->callback_query->from->username;
$surname = $update ->callback_query->from->last_name;
$about = $update ->callback_query->from->about;
$nameuz = "<a href='tg://user?id=$callfrid'>$callname $surname</a>";

if(!file_exists("./step/$cid.db")){
	fopen("./step/$cid.db",'w');
}

/// DigitalCloud.uz siz uchun maxsus xosting
///python va php dasturlash uchun eng zo'ri

//ushbu kod @UzMaxDev(Sr.R3d) tomonidan dasturlandi
// github: @ShamolDev
// Telegram kanal: @pcouz

$xabar = $update->message;
$xabar_id = $xabar->message_id;
$chat_id = $xabar->chat->id;
$cid = $xabar->chat->id;
$mid = $xabar->message_id;
$text = $xabar->text;

$step = file_get_contents("step/$cid.db");
$step2 = file_get_contents("step/$cid.step");
$gmson = file_get_contents("stat/gmson.txt");
$gm = file_get_contents("stat/gm.txt");
mkdir("step");
mkdir("stat");

$sana = date('d-M Y',strtotime('2 hour'));
$oy_nomi = date('F',strtotime('2 hour'));
$bu_oy = date('t',strtotime('2 hour'));

$userlar = file_get_contents("stat/stat.txt");
$guruhla = file_get_contents("baza/$id.txt");
$stat = substr_count($userlar, "
");

if(isset($message)){
   $baza = file_get_contents("stat/stat.txt");
   if(mb_stripos($baza,$cid) !==false){
   }else{
   $txt="
$cid";
   $file=fopen("stat/stat.txt","a");
   fwrite($file,$txt);
   fclose($file);
   }
}

$admpan = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"Statistika 📊"],['text'=>"📩Xabar yuborish"]],
[['text'=>"⬅️ Orqaga"]],
]
]);

/// DigitalCloud.uz siz uchun maxsus xosting
///python va php dasturlash uchun eng zo'ri

//ushbu kod @UzMaxDev(Sr.R3d) tomonidan dasturlandi
// github: @ShamolDev
// Telegram kanal: @pcouz

if($text=="/panel" and $cid==$admin){
    bot("sendmessage",[
    "chat_id"=>$cid,
    "text"=>"<b>Assalomu aleykum  admin paneliga xush kelibsiz 🗞</b>",
    'parse_mode'=>"html",
    'reply_markup'=>"$admpan"
    ]);
    }


if($text=="Statistika 📊" and $cid==$admin){
    bot("sendmessage",[
    "chat_id"=>$cid,
    'parse_mode'=>"html",
    "text"=>"<b>📊 Bot statistikasi:</b>
    
👤A'zolar: $stat ta

📅 Sana: $sana va bu oy $bu_oy kundan iborat",
    ]);
    }

/// DigitalCloud.uz siz uchun maxsus xosting
///python va php dasturlash uchun eng zo'ri

//ushbu kod @UzMaxDev(Sr.R3d) tomonidan dasturlandi
// github: @ShamolDev
// Telegram kanal: @pcouz

if($text == "📩Xabar yuborish" and $cid==$admin){
file_put_contents("step/$cid.db","rek");
   bot('sendMessage',[
   'chat_id'=>$cid,
    'text'=>"<b>📝Ilitmos Xabar matnini kiriting !</b>",
'parse_mode'=>'html',
'reply_markup'=>$bekad,
 ]);
 }
if($text == "⛔️Bekor qilish" and $cid==$admin){
   bot('sendMessage',[
   'chat_id'=>$cid,
    'text'=>"<b>⛔️ Buyruq bekor qilindi</b>",
'parse_mode'=>'html',
'reply_markup'=>$admpan,
 ]);
 }
if($step== "rek"){
file_put_contents("step/$cid.db","");
if($text!="⛔️Bekor qilish"){
$lich = explode("\n",$userlar);
foreach($lich as $id){
   bot('sendMessage',[
   'chat_id'=>$id,
    'text'=>"$text",
'parse_mode'=>'html',
 "reply_markup"=>json_encode([
                "inline_keyboard"=>[
                [["text"=>"👨‍💻 Kanalimiz","url"=>"https://t.me/Aytiblogg"],],
                ]
                ]),

 ]);
 }
file_put_contents("step/$cid.db","");
}}



/// DigitalCloud.uz siz uchun maxsus xosting
///python va php dasturlash uchun eng zo'ri

//ushbu kod @UzMaxDev(Sr.R3d) tomonidan dasturlandi
// github: @ShamolDev
// Telegram kanal: @pcouz
$qtext="<b>❓Bot nima qila oladi?</b>
— Botimiz orqali Dasturlash va ingliz tili darslarini oson o'rganasiz va a'lo natijalarga erishasiz.

<b>❓Qanday qilib sertifikat oladi?</b>
— Bizning @$kanal dagi botdagi darsliklar bo'yicha berilgan testlarga ko'p javob bersangiz, biz sizga sertificat beramiz.

<b>✅ Siz botimizda reklama bersangiz ham bo'ladi bu uchun @sahadinoff bilan bog'laning</b>";


$home= json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
        [['text'=>'🛣IELTS Road']],
        [['text'=>'Listening Strategies 🤓'],['text'=>'MINDSET for IELTS 📚']],
        [['text'=>'⚡️ IELTS exam secrets ⚡️'],['text'=>"M.Gapporov Grammatikasi🇬🇧"]],
        [['text'=>'DESTINATION BOOKS 📚'],['text'=>'Essential words books 📚']],
        [['text'=>'Grammarway all books📙'],['text'=>'Headway 5th edition 📩']],
        [['text'=>"Makkar all books 📚( March-June 2022)"]],
        [['text'=>"New Round-up _ All parts🤓"],['text'=>'IELTS SPEAKING APP📱']],
        [['text'=>"Raymond Murphy books📙"],['text'=>"🗣️Longman _ Grammar"]],
        [['text'=>"IELTS MAXIMISER 🤩"],['text'=>"⚡️Get ready for IELTS ⚡️"]],
        [['text'=>"🇬🇧 Advanced grammar tests 🇬🇧"]],
        [['text'=>'SIMON LISTENING LESSONS 🎧'],['text'=>'SIMON READING LESSONS 📝']],
        [['text'=>"SIMON WRITING 🖋️"],['text'=> 'SIMON WRITING 🖋️ (2)']],
        
]
]);


if($tx== "/start"){
bot('sendMessage',[
"chat_id"=>$idi,
"text"=>"<b>Salom $fname $lname 

Bot orqali zamonaviy kasblardan birini bepul o'rganishingiz va mustahkamlab borishingiz mumkun</b>",
"parse_mode"=>"html",
"reply_markup"=>$home,
]);
}


/// xabarlar


if($tx =='IELTS SPEAKING APP📱'){
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/37',
        'caption'=>'IELTS SPEAKING APP📱',
        ]);
}
if($tx =='Listening Strategies 🤓'){
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/39',
        'caption'=>'Listening Strategies 🤓📱',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/40',
        'caption'=>'Listening Strategies 🤓📱',
        ]);
}
if($tx =='🛣IELTS Road'){
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/38',
        'caption'=>'🛣IELTS Road',
        ]);
}

if($tx =='MINDSET for IELTS 📚'){
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/41',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/42',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/43',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/44',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/45',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/46',
        ]);
        bot('sendDocument',[
            'chat_id'=>$idi,
            'document'=>'https://t.me/the_solodest/47',
            ]);
        bot('sendDocument',[
            'chat_id'=>$idi,
            'document'=>'https://t.me/the_solodest/48',
             ]);
}

if($tx =='Grammarway all books📙'){
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/49',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/50',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/51',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/52',
         ]);
}

if($tx =='⚡️ IELTS exam secrets ⚡️'){
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/53',
        'caption'=>'⚡️ IELTS exam secrets ⚡️',
        ]);
}

if($tx =='M.Gapporov Grammatikasi🇬🇧'){
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/54',
        'caption'=>'M.Gapporov Grammatikasi🇬🇧',
        ]);
}
if($tx =='DESTINATION BOOKS 📚'){
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/55',
        'caption'=>'📚B1',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/56',
        'caption'=>'📚B2',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/57',
        'caption'=>'📚C1 and C2',
        ]);            
}
if($tx =='Essential words books 📚'){
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/59',
        'caption'=>'📚1',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/60',
        'caption'=>'📚2',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/61',
        'caption'=>'📚3',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/62',
        'caption'=>'📚4',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/63',
        'caption'=>'📚5',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/64',
        'caption'=>'📚6',
        ]);

}
if($tx =='Grammarway all books📙'){
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/65',
        'caption'=>'📙1',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/66',
        'caption'=>'📙2',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/67',
        'caption'=>'📙3',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/68',
        'caption'=>'📙4',
        ]);
}
if($tx =='Headway 5th edition 📩'){
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/69',
        'caption'=>'📙',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/70',
        'caption'=>'📙',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/71',
        'caption'=>'📙',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/72',
        'caption'=>'📙',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/73',
        'caption'=>'📙',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/74',
        'caption'=>'📙',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/75',
        'caption'=>'📙',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/76',
        'caption'=>'📙',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/77',
        'caption'=>'📙',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/78',
        'caption'=>'📙',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/79',
        'caption'=>'📙',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/80',
        'caption'=>'📙',
        ]);
}
if($tx =='Makkar all books 📚( March-June 2022)'){
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/81',
        'caption'=>'📚',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/82',
        'caption'=>'📚',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/83',
        'caption'=>'📚',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/84',
        'caption'=>'📚',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/85',
        'caption'=>'📚',
        ]);
}

/// DigitalCloud.uz siz uchun maxsus xosting
///python va php dasturlash uchun eng zo'ri

//ushbu kod @UzMaxDev(Sr.R3d) tomonidan dasturlandi
// github: @ShamolDev
// Telegram kanal: @pcouz



if($tx =='New Round-up _ All parts🤓'){
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/86',
        'caption'=>'📚',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/87',
        'caption'=>'📚',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/38',
        'caption'=>'📚',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/88',
        'caption'=>'📚',
        ]);
        bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/89',
        'caption'=>'📚',
        ]);
        bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/90',
        'caption'=>'📚',
        ]);
        bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/91',
        'caption'=>'📚',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/92',
        'caption'=>'📚',
            ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/93',
        'caption'=>'📚',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/94',
        'caption'=>'📚',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/95',
        'caption'=>'📚',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/96',
        'caption'=>'📚',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/97',
        'caption'=>'📚',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/98',
        'caption'=>'📚',
        ]);


}
if($tx =='Raymond Murphy books📙'){
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/101',
        'caption'=>'📙',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/102',
        'caption'=>'📙',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/103',
        'caption'=>'📙',
        ]);
}
if($tx =='🗣️Longman _ Grammar'){
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/105',
        'caption'=>'🗣️Longman _ Grammar',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/106',
        'caption'=>'🗣️Longman _ Grammar',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/107',
        'caption'=>'🗣️Longman _ Grammar',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/108',
        'caption'=>'🗣️Longman _ Grammar',
        ]);
}
if($tx =='IELTS MAXIMISER 🤩'){
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/109',
        'caption'=>'IELTS MAXIMISER 🤩',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/110',
        'caption'=>'IELTS MAXIMISER 🤩',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/111',
        'caption'=>'IELTS MAXIMISER 🤩',
        ]);
}
if($tx =='⚡️Get ready for IELTS ⚡️'){
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/112',
        'caption'=>'⚡️',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/113',
        'caption'=>'⚡️',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/114',
        'caption'=>'⚡️',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/115',
        'caption'=>'⚡️',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/116',
        'caption'=>'⚡️',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/117',
        'caption'=>'⚡️',
        ]);
}
if($tx =='🇬🇧 Advanced grammar tests 🇬🇧'){
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/118',
        'caption'=>'🇬🇧 Advanced grammar tests 🇬🇧',
        ]);
}
if($tx =='SIMON LISTENING LESSONS 🎧'){
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/119',
        'caption'=>'🎧1',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/120',
        'caption'=>'🎧2',
        ]);
}
if($tx =='SIMON READING LESSONS 📝'){
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/121',
        'caption'=>'📝',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/122',
        'caption'=>'📝',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/123',
        'caption'=>'📝',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/124',
        'caption'=>'📝',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/125',
        'caption'=>'📝',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/126',
        'caption'=>'📝',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/127',
        'caption'=>'📝',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/128',
        'caption'=>'📝',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/129',
        'caption'=>'📝',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/130',
        'caption'=>'📝',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/131',
        'caption'=>'📚',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/132',
        'caption'=>'📚',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/133',
        'caption'=>'📚',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/134',
        'caption'=>'📚',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/135',
        'caption'=>'📚',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/136',
        'caption'=>'📚',
        ]);
    bot('sendDocument',[
        'chat_id'=>$idi,
        'document'=>'https://t.me/the_solodest/137',
        'caption'=>'📚',
        ]);
}
if($tx =='SIMON WRITING 🖋️'){
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/130',
        'caption'=>'📝IELTS-Simon-Writing-Task1-General-part-1',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/131',
        'caption'=>'📝IELTS-Simon-Writing-Task1-General-part-2',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/132',
        'caption'=>'📝IELTS-Simon-Writing-Task1-General-part-3',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/133',
        'caption'=>'📝IELTS-Simon-Writing-Task1-General-part-4',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/134',
        'caption'=>'📝IELTS-Simon-Writing-Task-1',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/135',
        'caption'=>'📝IELTS-Simon-Writing-Task1-Academic-part-1',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/136',
        'caption'=>'📝IELTS-Simon-Writing-Task1-Academic-part-2',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/137',
        'caption'=>'📝IELTS-Simon-Writing-Task1-Academic-part-3',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/138',
        'caption'=>'📝IELTS-Simon-Writing-Task1-Academic-part-4',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/139',
        'caption'=>'📝IELTS-Simon-Writing-Task1-Academic-part-5',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/140',
        'caption'=>'📝IELTS-Simon-Writing-Task1-Academic-part-6',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/141',
        'caption'=>'📝IELTS-Simon-Writing-Task1-Academic-part-7',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/142',
        'caption'=>'📝IELTS-Simon-Writing-Task1-Academic-part-8',
        ]);
        // https://t.me/the_solodest/151
        bot('sendDocument',[
            'chat_id'=>$idi,
            'document'=>'https://t.me/the_solodest/151',
            'caption'=>'📚',
            ]);
        bot('sendDocument',[
            'chat_id'=>$idi,
            'document'=>'https://t.me/the_solodest/152',
            'caption'=>'📚',
            ]);
        bot('sendDocument',[
            'chat_id'=>$idi,
            'document'=>'https://t.me/the_solodest/153',
            'caption'=>'📚',
            ]);
        bot('sendDocument',[
            'chat_id'=>$idi,
            'document'=>'https://t.me/the_solodest/154',
            'caption'=>'📚',
            ]);
        bot('sendDocument',[
            'chat_id'=>$idi,
            'document'=>'https://t.me/the_solodest/155',
            'caption'=>'📚',
            ]);
        bot('sendDocument',[
            'chat_id'=>$idi,
            'document'=>'https://t.me/the_solodest/156',
            'caption'=>'📚',
            ]);
        bot('sendDocument',[
            'chat_id'=>$idi,
            'document'=>'https://t.me/the_solodest/157',
            'caption'=>'📚',
            ]);
}


/// DigitalCloud.uz siz uchun maxsus xosting
///python va php dasturlash uchun eng zo'ri

//ushbu kod @UzMaxDev(Sr.R3d) tomonidan dasturlandi
// github: @ShamolDev
// Telegram kanal: @pcouz



if($tx =='SIMON WRITING 🖋️ (2)'){
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/158',
        'caption'=>'📝IELTS-Simon-Writing-Task1-Academic-part-9',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/159',
        'caption'=>'IELTS-Simon-Writing-Task2-part-1',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/160',
        'caption'=>'📝IELTS-Simon-Writing-Task2-part-2',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/161',
        'caption'=>'📝IELTS-Simon-Writing-Task2-part-3',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/162',
        'caption'=>'📝IELTS-Simon-Writing-Task2-part-4', 
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/163',
        'caption'=>'📝IELTS-Simon-Writing-Task2-part-5',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/164',
        'caption'=>'📝IELTS-Simon-Writing-Task2-part-6',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/165',
        'caption'=>'📝IELTS-Simon-Writing-Task2-part-7',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/166',
        'caption'=>'📝IELTS-Simon-Writing-Task2-part-8',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/167',
        'caption'=>'📝IELTS-Simon-Writing-Task2-part-9',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/168',
        'caption'=>'📝IELTS-Simon-Writing-Task2-part-10',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/169',
        'caption'=>'📝IELTS-Simon-Writing-Task2-part-11',
        ]);
    bot('sendVideo',[
        'chat_id'=>$idi,
        'video'=>'https://t.me/the_solodest/170',
        'caption'=>'📝IELTS-Simon-Writing-Task2-part-12',
        ]);
        // https://t.me/the_solodest/151
        bot('sendDocument',[
            'chat_id'=>$idi,
            'document'=>'https://t.me/the_solodest/171',
            'caption'=>'📚',
            ]);
        bot('sendDocument',[
            'chat_id'=>$idi,
            'document'=>'https://t.me/the_solodest/172',
            'caption'=>'📚',
            ]);
        bot('sendDocument',[
            'chat_id'=>$idi,
            'document'=>'https://t.me/the_solodest/173',
            'caption'=>'📚',
            ]);
        bot('sendDocument',[
            'chat_id'=>$idi,
            'document'=>'https://t.me/the_solodest/174',
            'caption'=>'📚',
            ]);
        bot('sendDocument',[
            'chat_id'=>$idi,
            'document'=>'https://t.me/the_solodest/175',
            'caption'=>'📚',
            ]);
        bot('sendDocument',[
            'chat_id'=>$idi,
            'document'=>'https://t.me/the_solodest/176',
            'caption'=>'📚',
            ]);
        bot('sendDocument',[
            'chat_id'=>$idi,
            'document'=>'https://t.me/the_solodest/177',
            'caption'=>'📚',
            ]);
}



/// DigitalCloud.uz siz uchun maxsus xosting
///python va php dasturlash uchun eng zo'ri

//ushbu kod @UzMaxDev(Sr.R3d) tomonidan dasturlandi
// github: @ShamolDev
// Telegram kanal: @pcouz


// Telegram --> @UzMaxDev





if($tx == "📊 Statistika"){
   bot('sendMessage',[
   'chat_id'=>$idi,
    'text'=>"<b>📊 Bot statistikasi:</b>
    
👤 A'zolar: $stat ta
📅 Sana: $sana va bu oy $bu_oy kundan iborat",
'parse_mode'=>'html',
 ]);
 }


$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$uid = $message->from->id;
$name = $message->chat->first_name;
$bot = bot('getme',['bot'])->result->username;
$text = $message->text;
$back = "◀️ Ortga";
$step = file_get_contents("step/$cid/$cid.txt");

mkdir("data");
mkdir("step");
mkdir("step/$cid");


/// DigitalCloud.uz siz uchun maxsus xosting
///python va php dasturlash uchun eng zo'ri

//ushbu kod @UzMaxDev(Sr.R3d) tomonidan dasturlandi
// github: @ShamolDev
// Telegram kanal: @pcouz


?>

