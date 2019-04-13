<?php
$TOKEN      = "774358721:AAEnG7qhl9AfPEU4essASYdwiaCUqBOAKSg";
$usernamebot= "@aqilla_bot";
$debug = false;

function request_url($method)
{
  global $TOKEN;
  return "https://api.telegram.org/bot" . $TOKEN . "/". $method;
}

function get_updates($offset) 
{
  $url = request_url("getUpdates")."?offset=".$offset;
  $resp = file_get_contents($url);
  $result = json_decode($resp, true);
  if ($result["ok"]==1)
    return $result["result"];
  return array();
}
function send_reply($chatid, $msgid, $text)
{
  global $debug;
  $data = array(
    'chat_id' => $chatid,
    'text'  => $text,
        'reply_to_message_id' => $msgid
      );
  $options = array(
    'http' => array(
      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      'method'  => 'POST',
      'content' => http_build_query($data),
    ),
  );
  $context  = stream_context_create($options); 
  $result = file_get_contents(request_url('sendMessage'), false, $context);
  if ($debug) 
    print_r($result);
}

function create_response($text, $message)
{
  global $usernamebot;
    $hasil = '';  
    $fromid = $message["from"]["id"];
    $chatid = $message["chat"]["id"];
    $pesanid= $message['message_id'];
    isset($message["from"]["username"])
    ? $chatuser = $message["from"]["username"]
    : $chatuser = '';
    
    isset($message["from"]["last_name"]) 
    ? $namakedua = $message["from"]["last_name"] 
    : $namakedua = '';   
    $namauser = $message["from"]["first_name"]. ' ' .$namakedua;

    $textur = preg_replace('/\s\s+/', ' ', $text); 
    $command = explode(' ',$textur,2); //
    switch ($command[0]) {
      case '/start':
        case 'start'.$usernamebot : //dipakai jika di grup yang haru ditambahkan @usernamebot
        $hasil = "Hi $namauser ,kenalin Aku Billa :) Aku hanyalah sebuah Bot yang dibuat oleh @XTeMixX karena kelaman jombs...Tugas aku hanyalah sebagai asisten Managemen Aplikasi Mantools \n";
        $hasil .= "List comment yang aku ngerti : \n - start \n - time \n - Hello \n - Kangen \n - Bila \n - Kampus \n - Ktp";
        break;
        
        case '/time':
        case '/time'.$usernamebot :
        case 'time':
        $hasil  = "$namauser, waktu lokal bot sekarang adalah :\n";
        $hasil .= date("d M Y")."\nPukul ".date("H:i:s");
        break;
        case '/hello':
        case '/hello'.$usernamebot :
        case 'hello':
        case 'Hello':
        $hasil  = "Hello $namauser, ada apa nih kamu Chat aku?";
        break;

        case '/kangen':
        case 'kangen'.$usernamebot :
        case 'Kangen':
        case 'kangen':
        $hasil  = "Sama aku juga kangen sama kamu $namauser 😘";
        break;

        case '/bila':
        case '/bila':
        case 'bila':
        case 'Bila'.$usernamebot :
        $test = array('Seperti rakyat di Ethiopia sana yang sedang kelaparan. Sama seperti mereka, aku juga kelapalan, ya kelaparan akan cinta darimu','kamu suka jepang? kalo IYA ,.. fix kamu jodoh aku 🙈','sini peluk 👄 kamu rese kalo lagi kangen .','Di atas langit masih ada langit ! Di bawah langit masih ada aku yang tulus mencintaimu','aku percaya, orang sipit itu setia. gimana mau ngelirik yang lain .. melek aja susah ~,~','Kalo nanti malam ada Pocong ngintip di jendela, jangan takut yah, Dia memang sengaja aku suruh untuk jagain kamu bobo','aku harap, aku pernah membuatmu tertawa , walaupun hanya * wkwkwkwk *  🙂','Pepatah mengatakan, Empat sehat lima sempurna. Namun, aku tidak merasakan kesempurnaan itu sebelum aku merasakan kasih sayangmu.','masih jomblo? santai .. semua akan nikah pada waktu nya 😅','jangan mandi dingin, kamu gak akan kuat 💋','kamu cool , aku hot .. ntar takutnya anak kita jadi dispenser 😱');
        shuffle($test);
        $hasil = array_shift($test);
        break;

        case '/kampus':
        case 'kampus'.$usernamebot :
        case 'Kampus':
        $test = array('825881465@ut.ac.id | 2015112091967','836251871@ut.ac.id | 2015206051970', '819823324@ut.ac.id | 2009205101991', '824954571@ut.ac.id | 2014102081989');
        $data2 = $test[array_rand($test)];
        $data3 = explode(' | ', $data2);
        $us = $data3[0];
        $pass = $data3[1];
        $hasil = "Silakan Gunakan Akun ini Sebaik'nya";
        $hasil .= "\nUsername = $us";
        $hasil .= "\nPassword = $pass";
        break;

        case '/mac':
        case 'mac'.$usernamebot :
        case 'Mac':
        case 'mac':
        $test = array('02-02-02-02-02-02','02-03-03-03-03-03');
        shuffle($test);
        $hasil = array_shift($test);

        default:
        $hasil = 'Maaf kamu ngomong apa ya? Aku cuma bisa ngerti beberapa kata yang di ajarin @XTeMix doang';
        break;
      }
      return $hasil;
    }

    if (strlen($TOKEN)<20) 
      die("Token mohon diisi dengan benar!\n");
    function process_message($message)
    {
      $updateid = $message["update_id"];
      $message_data = $message["message"];
      if (isset($message_data["text"])) {
        $chatid = $message_data["chat"]["id"];
        $message_id = $message_data["message_id"];
        $text = $message_data["text"];
        $response = create_response($text, $message_data);
        if (!empty($response))
          send_reply($chatid, $message_id, $response);
      }
      return $updateid;
    }

    function process_one()
    {
      global $debug;
      $update_id  = 0;
      echo "-";

      if (file_exists("last_update_id")) 
        $update_id = (int)file_get_contents("last_update_id");

      $updates = get_updates($update_id);

      if ((!empty($updates)) and ($debug) )  {
        echo "\r\n===== isi diterima \r\n";
        print_r($updates);
      }

      foreach ($updates as $message)
      {
        echo '+';
        $update_id = process_message($message);
      }

      file_put_contents("last_update_id", $update_id + 1);
    }
    

$entityBody = file_get_contents('php://input');
$pesanditerima = json_decode($entityBody, true);
process_message($pesanditerima);
?>