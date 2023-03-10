
error_reporting(0);
//TM001
system("clear");
function url($url){
$headers = array();
$headers[] = "Mozilla/5.0 (Linux; Android 10; Redmi Note 8) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.67 Mobile Safari/537.36";
$ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $res = curl_exec($ch);
return $res;
}
$baner = "\033[1;92m________  ________  _____              
/_  __/  |/  / ___/ / ___/______ _    __
 / / / /|_/ / /__  / /__/ __/ -_) |/|/ /
/_/ /_/  /_/\___/  \___/_/  \__/|__,__/";
if(!file_exists('.xxx')) {
    mkdir('.xxx');
}
system("clear");
awalmula:
echo "$baner
\033[1;31m ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
status:$o\n";
echo " \n menu : \n";
echo @color('red', "|1 REGIS IPOIN + KLIK\n");
echo @color('yellow', "|2 REGISTRASI AKUN KLIK\n");
echo @color('yellow', "|3 CEK KUPON DELAY\n");
echo @color('yellow', "|4 NEMPEL VOCER\n");
echo @color('yellow', "|5 COK\n");
echo @color('yellow', "|6 HAPUS SEMUA KERANJANG\n");
echo @color('yellow', "|7 CEK STOK TOKO\n");
echo @color('yellow', "|8 CEK PIN TRANSAKSI\n");
echo @color('yellow', "|9 GANTI TOKO\n");
echo @color('yellow', "|10 ISI ALAMAT MASAL\n");
echo @color('yellow', "|11 HAPUS ALAMAT MASAL\n");
echo @color('yellow', "|12 NEMPEL VOCER KLIK + BABY10\n");
echo @color('yellow', "|13 ISI KERANJANG MASAL\n");
echo @color('yellow', "|14 COK MASAL\n");
echo @color('yellow', "|15 CEK KERANJANG\n");
echo @color('red', "|16 DOR\n");
echo @color('yellow', "|17 CEK KUPON NOTIF\n");
echo @color('yellow', "|18 EKSEKUSI MULTI KUPON\n");
echo @color('yellow', "|19 CEK SALDO AKUN\n");
echo @color('yellow', "|20 HAPUS SEMUA KUPON \n");
echo @color('yellow', "|21 UBAH PASSWORD\n");
echo @color('yellow', "|22 GANTI NAMA DEPAN KLIK\n");
echo @color('yellow', "|23 CEK KUPON NEMPEL\n");
echo @color('yellow', "|24 HAPUS KUPON TERTENTU\n");
echo @color('yellow', "|25 REGISTRASI KLIK X SMS-ACTIVATE\n");
echo @color('yellow', "|26 REGIS AKUN KLIK + REFF\n");
echo @color('yellow', "|27 CO AKUN REFF\n");
echo @color('red', "|X EXIT\n");
echo @color('green', "Ketik help jika anda bingung \n");
echo @color('grey', "PILIH : ");
$choice = trim(fgets(STDIN));
echo "\n";
switch ($choice) {

    case 'help':
        echo @color('yellow', "[1] REGIS IPOIN + KLIK\n");
        echo @color('nevy', "Menu ini untuk registrasi akun mypoin dan klikindomaret. Ada berbagai pilihan di dalamnya\n");
        echo @color('yellow', "[2] REGISTRASI AKUN KLIK\n");
        echo @color('nevy', "Menu ini untuk registrasi akun klikindomaret\n");
echo @color('yellow', "[3] CEK KUPON DELAY\n");
echo @color('nevy', "Menu ini untuk cek kupon pada akun delay ipoin\n");
echo @color('yellow', "[4] NEMPEL VOCER\n");
echo @color('nevy', "Menu ini untuk menempelkan voucher ke akun klikindomaret\n");
echo @color('yellow', "[5] COK\n");
echo @color('nevy', "Menu ini untuk co / belanja akun klikindomaret\n");
echo @color('yellow', "[6] HAPUS SEMUA ISI KERANJANG\n");
echo @color('nevy', "Menu ini untuk menghapus semua isi keranjang akun anda\n");
echo @color('yellow', "[7] CEK STOK TOKO\n");
echo @color('nevy', "Menu ini untuk cek stok toko sesuai yg ada pada keranjang akun anda. Support cek semua item yang ada pada keranjang anda\n");
echo @color('yellow', "[8] CEK PIN TRANSAKSI\n");
echo @color('nevy', "Menu ini untuk cek pin dan kode transaksi pada akun klikindomaret\n");
echo @color('yellow', "[9] GANTI TOKO\n");
echo @color('nevy', "Menu ini untuk ubah kode toko akun klikindomaret\n");
echo @color('yellow', "[10] ISI ALAMAT MASAL\n");
echo @color('nevy', "Menu ini untuk mengisi alamat acak sesuai kode pos yang anda input untuk akun klikindomaret\n");
echo @color('yellow', "[11] HAPUS ALAMAT MASAL\n");
echo @color('nevy', "Menu ini untuk menghapus alamat yang ada pada akun klikindomaret\n");
echo @color('yellow', "[12] NEMPEL VOCER KLIK + BABY10\n");
echo @color('nevy', "Menu ini untuk khusus untuk menempelkan voucher ipoin dan BABY10 ke akun klikindomaret\n");
echo @color('yellow', "[13] ISI KERANJANG MASAL\n");
echo @color('nevy', "Menu ini untuk mengisi item sesuai yang anda inginkan ke akun klikindomaret\n");
echo @color('yellow', "[14] COK MASAL\n");
echo @color('nevy', "Menu ini untuk co / belanja akun klikindomaret dengan akun yang sudah ada keranjang\n");
echo @color('yellow', "[15] CEK KERANJANG\n");
        echo @color('nevy', "Menu ini untuk menyiapkan file dengan kupon yg diinginkan\n");
echo @color('yellow', "[16] DOR\n");
echo @color('nevy', "Menu ini untuk shoot kupon pada saat kupon tersebut sudah on (harus menyiapkan file dengan menu nomor 15)\n");
echo @color('yellow', "[17] CEK KUPON NOTIF\n");
echo @color('nevy', "Menu ini untuk cek kupon yang ada pada notif akun klikindomaret\n");
echo @color('yellow', "[18] EKSEKUSI MULTI KUPON\n");
echo @color('nevy', "Menu ini untuk menempelkan beberapa kupon ke akun klikindomaret\n");
echo @color('yellow', "[19] CEK SALDO AKUN\n");
echo @color('nevy', "Menu ini untuk cek saldo pada akun klikindomaret\n");
echo @color('yellow', "[20] HAPUS SEMUA KUPON\n");
echo @color('nevy', "Menu ini hapus semua kupon yang nempel di akun klikindomaret\n");
echo @color('yellow', "[21] UBAH PASSWORD\n");
echo @color('nevy', "Menu ini untuk ubah katasandi akun klikindomaret\n");
echo @color('red', "[X] EXIT\n");
echo @color('nevy', "Untuk keluar\n");

break;

	case '1':
		echo color('yellow', "Nomor : ");
		$nomor = trim(fgets(STDIN));
		echo color('blue', "Regis Ipoin ..\n");
		$ciuli = gen_uuid();
		$xuid = $ciuli . "-" . round(microtime(true) * 1000);
		$uuid = urut(16);
		$ip = mt_rand(10, 40) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255) . "." . mt_rand(0, 255);
		$fid = urut2(22);
		$bodi = '{"fid":"' . $fid . '","appId":"1:998816605328:android:dc02f786893a91906e6415","authVersion":"FIS_v2","sdkVersion":"a:17.0.0"}';
		$headers = array();
		$headers[] = 'Content-Type: application/json';
		$headers[] = 'Accept: application/json';
		$headers[] = 'Content-Encoding: gzip';
		$headers[] = 'Cache-Control: no-cache';
		$headers[] = 'X-Android-Package: mypoin.indomaret.android';
		$headers[] = 'X-Firebase-Client: android-target-sdk/31 kotlin/1.6.10 fire-core-ktx/20.0.0 fire-cls/18.2.8 fire-cls-ktx/18.2.8 fire-core/20.0.0 fire-cfg-ktx/21.0.1 fire-fcm/23.0.0 device-brand/samsung fire-android/29 fire-abt/21.0.0 android-installer/com.android.vending device-model/z3s fire-installations/17.0.0 fire-analytics-ktx/20.1.0 fire-rc/21.0.1 fire-analytics/20.1.0 android-platform/ android-min-sdk/21 device-name/z3sxxx';
		$headers[] = 'X-Firebase-Client-Log-Type: 3';
		$headers[] = 'X-Android-Cert: A04FF9360D853349782EC0B69EDDDAFBE2F55C18';
		$headers[] = 'X-Goog-Api-Key: AIzaSyBaP3PQ6uohRZ8QNdr4dD_SScoTCtaF7ok';
		$headers[] = 'User-Agent: Dalvik/2.1.0 (Linux; U; Android 10; SM-G988B Build/QP1A.190711.020)';
		$headers[] = 'Host: firebaseinstallations.googleapis.com';
		$headers[] = 'Content-Length: ' . strlen($bodi);
		$a = curl('https://firebaseinstallations.googleapis.com/v1/projects/idm-corp-prd/installations', $bodi, $headers);
		$a1 = json_decode($a[1]);
		$tkn = $a1->authToken->token;
		$tokett = $fid . ':APA91bH3OoXxwsrJk51stLFbZO68z' . urut2(35) . '-' . urut2(35) . '-FUgFdwfFUa0jcdCO_NFuA95qdDB3ZFdU9pMxk6O';
		$bodi2 = '{"appInstanceId":"' . $fid . '","appVersion":"22.12.300","countryCode":"ID","analyticsUserProperties":{},"appId":"1:998816605328:android:dc02f786893a91906e6415","platformVersion":"29","timeZone":"Asia\\/Jakarta","sdkVersion":"21.0.1","packageName":"mypoin.indomaret.android","appInstanceIdToken":"' . $tkn . '","languageCode":"id-ID","appBuild":"111"}';
		$headers2 = array();
		$headers2[] = 'X-Goog-Api-Key: AIzaSyBaP3PQ6uohRZ8QNdr4dD_SScoTCtaF7ok';
		$headers2[] = 'X-Android-Package: mypoin.indomaret.android';
		$headers2[] = 'X-Android-Cert: A04FF9360D853349782EC0B69EDDDAFBE2F55C18';
		$headers2[] = 'X-Google-Gfe-Can-Retry: yes';
		$headers2[] = 'X-Goog-Firebase-Installations-Auth: ' . $tkn;
		$headers2[] = 'Content-Type: application/json';
		$headers2[] = 'Accept: application/json';
		$headers2[] = 'Content-Length: ' . strlen($bodi2);
		$headers2[] = 'User-Agent: Dalvik/2.1.0 (Linux; U; Android 10; SM-G988B Build/QP1A.190711.020)';
		$headers2[] = 'Host: firebaseremoteconfig.googleapis.com';
		$headers2[] = 'Connection: close';
		$b = curl('https://firebaseremoteconfig.googleapis.com/v1/projects/998816605328/namespaces/firebase:fetch', $bodi2, $headers2);
		$asu = array();
		$asu[] = 'authorization: NNKSkTdooQo7vUGVG5eGkgYSVW7SabSjffafao35nfoan3ygfaa';
		$asu[] = 'content-type: application/json; charset=UTF-8';
		$asu[] = 'user-agent: okhttp/5.0.0-alpha.2';
		$gas01 = curl('https://asia-southeast2-idm-corp-prd.cloudfunctions.net/idmapps_tracker_gateway', '{"data":[{"application":{"app_version":"22.12.300","device_class":"Phone","device_family":"Samsung SMG988B","device_id":"' . $uuid . '","os_name":"Android Q","os_version":"Android 10"},"core":{"activity_details":"resume_app","event_name":"app_activity","event_timestamp":' . round(microtime(true) * 1000) . '},"user":{"session_id":"' . $xuid . '","user_ip_address":"' . $ip . '"}}]}', $asu);
		$gas2 = curl('https://asia-southeast2-idm-corp-prd.cloudfunctions.net/idmapps_tracker_gateway', '{"data":[{"application":{"app_version":"22.12.300","device_class":"Phone","device_family":"Samsung SMG988B","device_id":"' . $uuid . '","os_name":"Android Q","os_version":"Android 10"},"core":{"details":{"token":"' . $tokett . '"},"event_name":"page_detail","event_timestamp":' . round(microtime(true) * 1000) . ',"page_name":"Receive Push Notification "},"user":{"session_id":"' . $xuid . '","user_ip_address":"' . $ip . '"}}]}', $asu);
		$gas2a = curl('https://asia-southeast2-idm-corp-prd.cloudfunctions.net/idmapps_tracker_gateway', '{"data":[{"application":{"app_version":"22.12.300","device_class":"Phone","device_family":"Samsung SMG988B","device_id":"' . $uuid . '","os_name":"Android Q","os_version":"Android 10"},"core":{"event_name":"page_view","event_timestamp":' . round(microtime(true) * 1000) . ',"page_name":"splash","page_urlpath":""},"user":{"session_id":"' . $xuid . '","user_ip_address":"' . $ip . '"}}]}', $asu);
		$xoxo = array();
		$xoxo[] = 'key: ZWR0czIwMjE6MHBsbW9rbg==';
		$xoxo[] = 'apps: {"app_version":"22.12.300","device_class":"Phone","device_family":"Samsung SMG988B","device_id":"' . $uuid . '","os_name":"Android Q","os_version":"Android 10"}';
		$xoxo[] = 'Host: edtsapp.indomaretpoinku.com';
		$xoxo[] = 'User-Agent: okhttp/5.0.0-alpha.2';
		$coks = curl('https://edtsapp.indomaretpoinku.com/configuration/api2506/mobile/sy-app-version/get-version-key/ANDROID', null, $xoxo);
		$gas3 = curl('https://asia-southeast2-idm-corp-prd.cloudfunctions.net/idmapps_tracker_gateway', '{"data":[{"application":{"app_version":"22.12.300","device_class":"Phone","device_family":"Samsung SMG988B","device_id":"' . $uuid . '","os_name":"Android Q","os_version":"Android 10"},"core":{"event_name":"page_view","event_timestamp":' . round(microtime(true) * 1000) . ',"page_name":"login","page_urlpath":""},"user":{"session_id":"' . $xuid . '","user_ip_address":"' . $ip . '"}}]}', $asu);
		$fcm = '' . $fid . ':APA91bGxVvyTN6Jivl5bm45ETkTqBWwkCu-' . urut2(35) . '_odRvalvU3mAaawssSEHXb_' . urut2(26) . '-wc6s4X1fOZLvjGq6vJWq';
		$bodi3 = '{"userId":0,"deviceType":"01","deviceId":"' . $uuid . '","fcmToken":"' . $fcm . '"}';
		$headers3 = array();
		$headers3[] = 'Key: ZWR0czIwMjE6MHBsbW9rbg==';
		$headers3[] = 'Apps: {"app_version":"22.12.300","device_class":"Phone","device_family":"Samsung SMG988B","device_id":"' . $uuid . '","os_name":"Android Q","os_version":"Android 10"}';
		$headers3[] = 'Content-Type: application/json; charset=UTF-8';
		$headers3[] = 'Content-Length: ' . strlen($bodi3);
		$headers3[] = 'Host: edtsapp.indomaretpoinku.com';
		$headers3[] = 'Connection: close';
		$headers3[] = 'User-Agent: okhttp/5.0.0-alpha.2';
		$c = curl('https://edtsapp.indomaretpoinku.com/notification/api2506/push-notifications/fcm-registration', $bodi3, $headers3);
		$headers = array();
		$headers[] = 'Key: ZWR0czIwMjE6MHBsbW9rbg==';
		$headers[] = 'Apps: {"app_version":"22.12.300","device_class":"Phone","device_family":"Samsung SMG988B","device_id":"' . $uuid . '","os_name":"Android Q","os_version":"Android 10"}';
		$headers[] = 'Content-Type: application/json; charset=UTF-8';
		$headers[] = 'Host: edtsapp.indomaretpoinku.com';
		$headers[] = 'Connection: close';
		$headers[] = 'User-Agent: okhttp/5.0.0-alpha.2';
		$cekdevice = curl('https://edtsapp.indomaretpoinku.com/login/api2506/open/pin/check-device', '{"phoneNumber":"' . $nomor . '","deviceId":"' . $uuid . '"}', $headers);
		send:
		#
		$responasa = curl('https://edtsapp.indomaretpoinku.com/login/api2506/open/login-whatsapp', '{"deviceId":"' . $uuid . '","phoneNumber":"' . $nomor . '"}', $headers);
		$respon = curl('https://edtsapp.indomaretpoinku.com/login/api2506/open/login-sms', '{"deviceId":"' . $uuid . '","phoneNumber":"' . $nomor . '"}', $headers);
		if (strpos($respon[1], '"message":"Success"')) {
			$cekdevice = curl('https://edtsapp.indomaretpoinku.com/login/api2506/open/pin/check-device', '{"phoneNumber":"' . $nomor . '","deviceId":"' . $uuid . '"}', $headers);
			echo "OTP masuk ? {y/n} : ";
			$again = trim(fgets(STDIN));
			if (strtolower($again) == 'y') {
				echo color('yellow', "OTP : ");
				$otp = trim(fgets(STDIN));
				$xoxo = array();
				$xoxo[] = 'key: ZWR0czIwMjE6MHBsbW9rbg==';
				$xoxo[] = 'apps: {"app_version":"22.12.300","device_class":"Phone","device_family":"Samsung SMG988B","device_id":"' . $uuid . '","os_name":"Android Q","os_version":"Android 10"}';
				$xoxo[] = 'Host: edtsapp.indomaretpoinku.com';
				$xoxo[] = 'User-Agent: okhttp/5.0.0-alpha.2';
				$xoxo[] = 'Content-Type: application/json; charset=UTF-8';
				$coks = curl('https://edtsapp.indomaretpoinku.com/configuration/api2506/mobile/sy-app-version/get-version-key/ANDROID', null, $xoxo);
				$respon2 = curl('https://edtsapp.indomaretpoinku.com/login/api2506/open/login-verification-sms', '{"deviceId":"' . $uuid . '","otp":"' . $otp . '","phoneNumber":"' . $nomor . '"}', $headers);
				if (strpos($respon2[1], '"message":"Success"')) {
					$token = json_decode($respon2[1]);
					$xx = $token->data->access_token;
					$refresh_token = $token->data->refresh_token;
					$xoxo = array();
					$xoxo[] = 'Authorization: Bearer ' . $xx;
					$xoxo[] = 'key: ZWR0czIwMjE6MHBsbW9rbg==';
					$xoxo[] = 'apps: {"app_version":"22.12.300","device_class":"Phone","device_family":"Samsung SMG988B","device_id":"' . $uuid . '","os_name":"Android Q","os_version":"Android 10"}';
					$xoxo[] = 'User-Agent: okhttp/5.0.0-alpha.2';
					$xoxo[] = 'Content-Type: application/json; charset=UTF-8';
					$cust = curl('https://edtsapp.indomaretpoinku.com/customer/api2506/mobile/get-data-customer', null, $xoxo);
					if (strpos($cust[1], '"isNewRegister":false')) {
						echo color('red', "Status : Member lama\n");
					} else {
						echo color('green', "Status : Member Baru\n");
					}
					$id = json_decode($cust[1])->data->id;
					$memberid = json_decode($cust[1])->data->memberId;
					$newmem = json_decode($cust[1])->data->isNewRegister;
					$jancokx = curl('https://edtsapp.indomaretpoinku.com/configuration/api2506/mobile/skip-module/tr-skip-module', null, $xoxo);
					$coks = curl('https://edtsapp.indomaretpoinku.com/configuration/api2506/mobile/sy-app-version/get-version-key/ANDROID', null, $xoxo);
					$bodi4 = '{"userId":' . $id . ',"deviceType":"01","deviceId":"' . $uuid . '","fcmToken":"' . $fcm . '"}';
					$headers4 = array();
					$headers4[] = 'Key: ZWR0czIwMjE6MHBsbW9rbg==';
					$headers4[] = 'Authorization: Bearer ' . $xx;
					$headers4[] = 'Apps: {"app_version":"22.12.300","device_class":"Phone","device_family":"Samsung SMG988B","device_id":"' . $uuid . '","os_name":"Android Q","os_version":"Android 10"}';
					$headers4[] = 'Content-Type: application/json; charset=UTF-8';
					$headers4[] = 'Host: edtsapp.indomaretpoinku.com';
					$headers4[] = 'Content-Length: ' . strlen($bodi4);
					$headers4[] = 'Connection: close';
					$headers4[] = 'User-Agent: okhttp/5.0.0-alpha.2';
					$d = curl('https://edtsapp.indomaretpoinku.com/notification/api2506/push-notifications/fcm-registration', $bodi4, $headers4);
					$gas4 = curl('https://asia-southeast2-idm-corp-prd.cloudfunctions.net/idmapps_tracker_gateway', '{"data":[{"application":{"app_version":"22.12.300","device_class":"Phone","device_family":"Samsung SMG988B","device_id":"' . $uuid . '","os_name":"Android Q","os_version":"Android 10"},"core":{"event_name":"page_view","event_timestamp":' . round(microtime(true) * 1000) . ',"page_name":"success login","page_urlpath":""},"user":{"session_id":"' . $xuid . '","user_id":' . $id . ',"user_ip_address":"' . $ip . '"}}]}', $asu);
					$gas5 = curl('https://asia-southeast2-idm-corp-prd.cloudfunctions.net/idmapps_tracker_gateway', '{"data":[{"application":{"app_version":"22.12.300","device_class":"Phone","device_family":"Samsung SMG988B","device_id":"' . $uuid . '","os_name":"Android Q","os_version":"Android 10"},"core":{"failed_reason":"Success WA Verification","event_label":"login","event_name":"event_submission","event_status":"success","event_timestamp":' . round(microtime(true) * 1000) . '},"user":{"session_id":"' . $xuid . '","user_id":' . $id . ',"user_ip_address":"' . $ip . '"}}]}', $asu);
					$gas6 = curl('https://asia-southeast2-idm-corp-prd.cloudfunctions.net/idmapps_tracker_gateway', '{"data":[{"application":{"app_version":"22.12.300","device_class":"Phone","device_family":"Samsung SMG988B","device_id":"' . $uuid . '","os_name":"Android Q","os_version":"Android 10"},"core":{"event_name":"page_view","event_timestamp":' . round(microtime(true) * 1000) . ',"page_name":"Exchange code","page_urlpath":""},"user":{"session_id":"' . $xuid . '","user_id":' . $id . ',"user_ip_address":"' . $ip . '"}}]}', $asu);
					$cokss = curl('https://edtsapp.indomaretpoinku.com/configuration/api2506/mobile/sy-app-version/get-version-key/ANDROID', null, $xoxo);
					$coksss = curl('https://edtsapp.indomaretpoinku.com/configuration/api2506/mobile/sy-app-version/get-version-key/ANDROID', null, $xoxo);
					$kakaka = curl('https://edtsapp.indomaretpoinku.com/customer/api2506/is-whatsapp-verified', null, $xoxo);
					#
					$createpin = curl('https://edtsapp.indomaretpoinku.com//login/api2506/pin/create-pin', '{"pinCode":"112233"}', $xoxo);
					gawepin:
					if (strpos($createpin[1], '"message":"Success"')) {
						echo @color('green', "Pin : 112233\n");
					} elseif (strpos($createpin[1], '"message":"Pin already exist"')) {
						goto inputcok;
					} else {
						echo "{$createpin[1]}\n";
						echo @color('red', "Gagal buat pin\n");
						goto gawepin;
					}
					inputcok:
					#
					$nomorr = 'https://barcode.tec-it.com/barcode.ashx?data=' . $nomor . '&code=Code128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Png&rotation=0&color=%23000000&bgcolor=%23ffffff&codepage=Default&qunit=Mm&quiet=10&hidehrt=False';
					file_put_contents("barcodeipoinManual/" . $nomor . ".png", file_get_contents($nomorr));
					echo color('yellow', "Barcode tersimpan di folder ");
					echo color('green', "barcodeipoinManual\n");
					save($nomor . ";" . $uuid . ";112233\n", 'akunipoinmanual.txt');
					save($nomor . ";" . $uuid . ";" . $xx . "\n", 'akunipoin.txt');
					echo color('yellow', "Akun tersimpan di akunipoinmanual.txt\n");
				} else {
					echo color('red', "{$respon2[1]}\n");
				}
			} else {
				goto send;
			}
		} else {
			echo color('red', "{$respon[1]}\n");
		}
		echo color('blue', "Regis Klik ..\n");
		unlink('nganue.txt');
		$kuntul = array();
		$kuntul[] = 'Content-Type: application/json';
		$kuntul[] = 'Host: api.klikindomaret.com';
		$kuntul[] = 'User-Agent: okhttp/3.12.1';
		ngotepe:
		$reg = curl('https://api.klikindomaret.com/api/PreRegistration/SendOTPSMS?NoHP=' . $nomor, null, $kuntul);
		echo "OTP masuk ? {y/n} : ";
		$againx = trim(fgets(STDIN));
		if (strtolower($againx) == 'y') {
			echo color('yellow', "OTP : ");
			$otp = trim(fgets(STDIN));
			$reg2 = curl('https://api.klikindomaret.com/api/PreRegistration/ValidationOTPCodeSMS?NoHP=' . $nomor . '&otpCode=' . $otp, null, $kuntul);
			if (strpos($reg2[1], '"Message":"Verifikasi berhasil dilakukan."')) {
				$data = file_get_contents("https://hiyaa.site/data.php?qty=1&domain=lostvape.my.id&apikey=d47d9a94-110f-4672-8851-8b749e0c7e3e");
				$datas = json_decode($data);
				$nama = $datas->result[0]->firstname;
				$nama2 = $datas->result[0]->lastname;
				$email = $datas->result[0]->email;
				$getdev = curl('https://api.klikindomaret.com/api/MobileAppsVersion/getDevice_Token?device_token=740f4707bebcf74f9b7c25d48e3358945f6aa01da5ddb387462c7eaf61bb78ad', null, $kuntul);
				$kuntul2 = array();
				$kuntul2[] = 'Content-Type: application/json';
				$kuntul2[] = 'Host: api.klikindomaret.com';
				$kuntul2[] = 'User-Agent: okhttp/3.12.1';
				$regis = curl('https://api.klikindomaret.com/api/Customer/RegisterViaMobileApps?districtID=2483&mfp_id=9525d94cce3e723ca591fbb655e2bf56fed124feeacead050566290598b579ac', '{"FName":"' . $nama . '","LName":"' . $nama2 . '","Email":"' . $email . '","KonfirmasiEmail":"","Gender":"Wanita","Mobile":"' . $nomor . '","KodeReferensi":"","Password":"123456a","ConfirmPassword":"123456a","IsConfirmed":true,"district":{"id":2483,"name":"Gunung Sahari Selatan"},"isShowPassword":false,"isShowPasswordConfirm":false,"errorMessageEmail":null,"errorMessageConfirmPassword":null,"ID":"00000000-0000-0000-0000-000000000000","IPAddress":"192.168.56.132","IsSubscribed":1,"IsNewsLetterSubscriber":1,"AllowSMS":false,"LastUpdate":"0001-01-01T00:00:00","DateOfBirth":"1996-01-' . rand(01, 30) . 'T00:00:00.000Z","DateOfBirthStringFormatted":"1996-01-' . rand(01, 30) . '","TypePushEmail":0,"IsUpload":false,"IsActivated":false,"MobileVerified":true,"DateOfBirthExists":"0001-01-01T00:00:00","OTPValidationExpired":false,"IsFromOtherSystem":false,"OTPCount":0,"OTPAvailable":0}', $kuntul2);
				if (strpos($regis[1], '"IsSuccess":true')) {
					echo @color('green', "Registrasi Berhasil\n");
					echo @color('yellow', "Nomor : ");
					echo @color('nevy', "{$nomor}\n");
					echo @color('yellow', "Password : ");
					echo @color('nevy', "akupadamu\n");
					save($nomor . ";akupadamu\n", 'akunklik.txt');
					echo @color('yellow', "Tersimpan di akunklik.txt\n");
					echo "Verif email ? {y/n} : ";
					$againxxxx = trim(fgets(STDIN));
					if (strtolower($againxxxx) == 'n') {
						goto nempelke;
					}
					$respi = json_decode($regis[1]);
					$respid = $respi->ResponseID;
					$send = curl('https://api.klikindomaret.com/api/Customer/GetByID/' . $respid . '?mfp_id=9525d94cce3e723ca591fbb655e2bf56fed124feeacead050566290598b579ac', null, $kuntul);
					if (strpos($send[1], '"IsActivated":true')) {
						echo @color('yellow', "Sedang verif email\n");
						$emails = explode("@", $email);
						$emailx = "surl=" . trim($emails[1]) . "%2F" . trim($emails[0]);
						$xixi = array();
						$xixi[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:74.0) Gecko/20100101 Firefox/74.0';
						$xixi[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8';
						$xixi[] = 'Accept-Language: en-US,en;q=0.5';
						$xixi[] = 'Connection: keep-alive';
						$xixi[] = 'Cookie: ' . $emailx;
						Awal:
						$xyz = curl('https://generator.email/', null, $xixi, true);
						if (strpos($xyz[1], 'Terima kasih telah melakukan registrasi di Klikindomaret.')) {
							$res = remove_space($xyz[1]);
							$link = get_between($res, 'https://www.klikindomaret.com/Customer/ActivationByEmail?Token=', '"rel="nofollow"target="_blank">');
							if (empty($link)) {
								die("Error!");
							}
							echo "\n";
						} else {
							echo ".";
							goto Awal;
						}
						$pecah = explode('&amp;KodePIN=', $link);
						$token = $pecah[0];
						$pin = $pecah[1];
						$verif = curl('https://api.klikindomaret.com/api/Customer/ActivationWithPINCode?mfp_id=2badfdf8-5d76-4c49-81cd-c7c3588eebc4', '{"PINCode":"' . $pin . '","Token":"' . $token . '"}', $kuntul);
						if (strpos($verif[1], '"Message":"Success"')) {
							echo @color('green', "Verifikasi Email Berhasil\n");
							echo @color('yellow', "Email : ");
							echo @color('nevy', "{$email}\n\n");
							nempelke:
							echo "LANJUT TEMPEL ? {y/n} : ";
							$againxx = trim(fgets(STDIN));
							if (strtolower($againxx) == 'y') {
								tempelllx:
								$kodetoko = $toko;
								$kuntul = array();
								$kuntul[] = 'Content-Type: application/json';
								$kuntul[] = 'Host: api.klikindomaret.com';
								$kuntul[] = 'User-Agent: okhttp/3.12.1';
								$kuntul2x = array();
								$kuntul2x[] = 'Content-Type: application/json';
								$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
								$kuntul2x[] = 'Applicationkey: indomaret';
								$kuntul2x[] = 'Authorization: ';
								$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
								$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"akupadamu"}', $kuntul2x);
								$respi = json_decode($verif[1]);
								$respid = $respi->ResponseID;
								$idne = $respi->ResponseObject->ID;
								$toked = $respi->ResponseObject->Token;
								$kuntul2 = array();
								$kuntul2[] = 'Content-Type: application/json';
								$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
								$kuntul2[] = 'Applicationkey: indomaret';
								$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
								$kuntul2[] = 'User-Agent: okhttp/3.12.1';
								$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
								$responx = $cekvcne[1];
								if (strpos($responx, '"IsActivated":true')) {
									$cok = json_decode($responx);
									$ID = $cok[0]->ID;
									$RegionId = $cok[0]->RegionId;
									$getscid = curlx('https://api.klikindomaret.com/api/ShoppingCart/GetLastestShop?customerID=' . $ID . '&regionID=' . $RegionId, null, $kuntul);
									//echo "$getscid[1]\n";
									$za = json_decode($getscid[1]);
									if (strpos($getscid[1], '"Message":"An error has occurred."')) {
										echo @color('red', "ERROR KAK\n");
									} else {
										$scid = $za[0];
										$setaddress = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/SetAddressTypeAndDefaultStore?mfp_id=' . $respid . '&isChangeAddress=False&ShoppingCartID=' . $scid, '{"CustomerID":"' . $ID . '","AddressType":0,"StoreCode":"' . $kodetoko . '","StoreCodeDest":""}', $kuntul2);
										echo "{$setaddress[1]}\n";
										$setaddress2 = curlx('https://api.klikindomaret.com/api/ShoppingCart/ReCheckStockAllItem?ShoppingCartID=' . $scid . '&StoreCode=' . $kodetoko . '&AddressType=0&CustomerAddressID=00000000-0000-0000-0000-000000000000&CustomerID=' . $ID . '&StoreCodeDest=&CustomerLatitude=&CustomerLongitude=', null, $kuntul);
										for ($i = 0; $i < 1; $i++) {
											$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=2&pId=3a0f3388-018f-4d63-9baf-51ded26e2f43&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
											$stt = json_decode($addproduk[1])[0]->Message;
											$SCID = json_decode($addproduk[1])[0]->ResponseID;
											echo @color('green', "{$stt}\n");
											$addproduk2 = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=2&pId=798a7a04-5b24-493e-b375-a1407f4f716a&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
											$stt2 = json_decode($addproduk2[1])[0]->Message;
											$SCID = json_decode($addproduk[1])[0]->ResponseID;
											echo @color('green', "{$stt2}\n");
										}
										$listvc = file_get_contents('vocer25k');
										$akunxxx1 = explode(';', trim($listvc));
										$vocer = trim($akunxxx1[0]);
										$datane = '{"Code":"' . $vocer . '","ShoppingCartID":"' . $SCID . '","CustomerID":"' . $ID . '","RegionID":"' . $RegionId . '","SalesOrderNo":"","Nominal":"","DeviceID":"' . urut(16) . '","ShoppingCartPackageID":null}';
										$kupon = curlx('https://api.klikindomaret.com/api/Voucher/BookingVoucherCoupon?mfp_id=' . $respid, $datane, $kuntul);
										$kimak = json_decode($kupon[1]);
										$ket = $kimak->ResponseObject->keterangan;
										if (strpos($kupon[1], '"status":"SUCCESS"')) {
											echo @color('green', "BERHASIL GAN\n");
											echo @color('nevy', "{$ket}\n");
											echo @color('blue', "{$nomor}\n");
											echo @color('yellow', "Akun berhasil disimpan di akunklikbervocer.txt\n");
											save("{$nomor}\n", "akunklikbervocer.txt");
										} elseif (strpos($kupon[1], 'ShopingCart tidak boleh kosong')) {
											goto tempelllx;
										} else {
											echo @color('red', "{$ket}\n");
										}
									}
								} else {
									echo "{$responx}\n";
								}
							} else {
								goto awalmula;
							}
						} else {
							echo @color('red', "GAGAL\n");
						}
					} else {
						echo @color('red', "GAGAL MENGIRIM EMAIL\n");
					}
				} else {
					echo @color('red', "GAGAL REGIS\n");
				}
			}
		} else {
			goto ngotepe;
		}
		unlink('nganue.txt');
		break;
	case '2':
		$password = "123456a";
		// echo @color('green', "REFF : ");
		$referral = "";
		regis:
		echo @color('green', "\nNOMOR : ");
		$nomorr = trim(fgets(STDIN));
		$nomor = str_replace("628", "08", $nomorr);
		$nomor = str_replace('+', "", $nomor);
		$deviceid = urut16();
		$device_id = str_replace('-', '', $deviceid);
		$headers = array();
		$headers[] = 'Host: api.klikindomaret.com';
		$headers[] = 'accept: */*';
		$headers[] = 'content-type: application/json';
		$headers[] = 'user-agent: okhttp/3.12.1';
		################################################
		$cekno = curl('https://api.klikindomaret.com/api/Customer/GetByMobilePhone?mobilePhone=' . $nomor, null, $headers);
		sleep(1);
		################################################
		$sendotp = curl('https://api.klikindomaret.com/api/PreRegistration/SendOTPSMS?NoHP=' . $nomor, null, $headers);
		sleep(1);
		$hasil = json_decode($sendotp[1]);
		$message = $hasil[0]->Message;
		if ($message != "Kode OTP berhasil dikirim ke nomor telepon Anda.") {
			echo @color('red', "{$sendotp[1]}\n");
			goto regis;
			die;
		}
		#################################################
		echo @color('green', "OTP   : ");
		$otp = trim(fgets(STDIN));
		$validotp = curl('https://api.klikindomaret.com/api/PreRegistration/ValidationOTPCodeSMS?NoHP=' . $nomor . '&otpCode=' . $otp, null, $headers);
		$hasil = json_decode($validotp[1]);
		$message = $hasil[0]->Message;
		echo @color('yellow', "{$message}\n");
		sleep(1);
		#################################################
		$getdev = curl('https://api.klikindomaret.com/api/MobileAppsVersion/getDevice_Token?device_token=740f4707bebcf74f9b7c25d48e3358945f6aa01da5ddb387462c7eaf61bb78ad', null, $headers);
		$hasil = json_decode($getdev[1]);
		$mfp_id = $hasil->Message;
		#################################################
		sleep(1);
		$data = file_get_contents("https://irfan.iproute.my.id/asu.php");
		$datas = json_decode($data);
		$nama = $datas->fullname2;
		$email = $datas->email;
		$rand = rand(11, 30);
		$dates = "1996-01-{$rand}";
		$datapost = '{"FName":"' . $nama . '","LName":"","Email":null,"KonfirmasiEmail":"","Gender":"Wanita","Mobile":"' . $nomor . '","KodeReferensi":"' . $referral . '","Password":"' . $password . '","ConfirmPassword":"' . $password . '","IsConfirmed":true,"district":{"id":2483,"name":"Gunung Sahari Selatan"},"isShowPassword":false,"isShowPasswordConfirm":false,"errorMessageEmail":null,"errorMessagePassword":"","errorMessageConfirmPassword":"","isCodeRefMinReq":true,"isRefferalCode":true,"isCodeRefInputNull":false,"messageReferral":"Hore, berhasil menggunakan kode referensi!","ReferrerCode":"' . $referral . '","isReferralActive":true,"ID":"00000000-0000-0000-0000-000000000000","IPAddress":"192.168.56.132","IsSubscribed":0,"IsNewsLetterSubscriber":0,"AllowSMS":false,"LastUpdate":"0001-01-01T00:00:00","DateOfBirth":"' . $dates . 'T00:00:00.000Z","DateOfBirthStringFormatted":"' . $dates . '","TypePushEmail":0,"IsUpload":false,"IsActivated":false,"MobileVerified":true,"DateOfBirthExists":"0001-01-01T00:00:00","OTPValidationExpired":false,"IsFromOtherSystem":false,"OTPCount":0,"OTPAvailable":0,"DeviceID":"' . $device_id . '"}';
		$post = strlen($datapost);
		$headers2 = array();
		$headers2[] = 'Host: prd-api.klikindomaret.com';
		$headers2[] = 'accept: */*';
		$headers2[] = 'content-type: application/json';
		$headers2[] = 'user-agent: okhttp/3.12.1';
		$headers2[] = 'content-length: ' . $post;
		$regisan = curl('https://prd-api.klikindomaret.com/Account/Customer/Registration?districtID=46826&mfp_id=' . $mfp_id, $datapost, $headers2);
		$jsregis = json_decode($regisan[1]);
		$Message = $jsregis->message;
		sleep(1);
		if ($Message != "OK") {
			echo @color('red', "\n{$regisan[1]}\n");
			echo @color('red', "GAGAL CREATE\n");
			goto regis;
			die;
		}
		#################################################
		$datapost2 = '{"Email":"' . $nomor . '","Password":"' . $password . '"}';
		$post2 = strlen($datapost2);
		$headers3 = array();
		$headers3[] = 'Host: account-api-v2.klikindomaret.com';
		$headers3[] = 'accept: */*';
		$headers3[] = 'content-type: application/json';
		$headers3[] = 'user-agent: okhttp/3.12.1';
		$headers3[] = 'content-length: ' . $post2;
		$login = curl('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=740f4707bebcf74f9b7c25d48e3358945f6aa01da5ddb387462c7eaf61bb78ad&districtID=51409&TrafficSource=', $datapost2, $headers3);
		$datalogin = json_decode($login[1]);
		$Message = $datalogin->Message;
		$nama = $datalogin->ResponseObject->FName;
		$date = $datalogin->ResponseObject->DateOfBirth;
		echo @color('green', "Message : {$Message}\n");
		echo @color('green', "Nama	: {$nama}\n");
		echo @color('green', "Date	: {$date}\n");
		if ($Message == "Nomor ponsel atau kata sandi Anda tidak valid") {
			echo @color('red', "\n\n{$login[1]}\n\n");
			goto regis;
			die;
		}
		save("{$nomor};{$password};{$device_id}\n", 'akunklik.txt');
		
		$respi = json_decode($login[1]);
		$respid = $respi->ResponseID;
		$idne = $respi->ResponseObject->ID;
		$toked = $respi->ResponseObject->Token;
		#################################################
		$kuntul2 = array();
		$kuntul2[] = 'Content-Type: application/json';
		$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
		$kuntul2[] = 'Applicationkey: indomaret';
		$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
		$kuntul2[] = 'User-Agent: okhttp/3.12.1';
		$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
		$respon = $cekvcne[1];
		if (strpos($respon, '"IsActivated":true')) {
			$cok = json_decode($respon);
			$ID = $cok[0]->ID;
			$RegionId = $cok[0]->RegionId;
			$storeid = $cok[0]->StoreDefault;
			$notip = curl('https://api.klikindomaret.com/api/Customer/GetInboxByUser?id=' . $ID . '&mfp_id=' . $respid . '&pages=1&NotifType=&ChildNotifType=&RangeDays=', null, $headers);
			$pesan = json_decode($notip[1]);
			foreach ($pesan[0]->InboxData as $inbox) {
				#
				$Description = $inbox->Description;
				$pecah = explode(".", $Description);
				$desc1 = $pecah[0];
				$CouponCode = $inbox->DetailInfo->CouponCode;
				$CouponPeriode = $inbox->DetailInfo->CouponPeriode;
				echo @color('green', "Pesan   : ");
				echo @color('nevy', $desc1 . "\n");
				echo @color('green', "Kode	: ");
				echo @color('nevy', $CouponCode . "\n");
				echo @color('green', "Berlaku : ");
				echo @color('nevy', $CouponPeriode . "\n");
				save("{$nomor};{$password};{$CouponCode};{$device_id}\n", 'akunberkupon.txt');
				echo @color('yellow', "Tersimpan di akunberkupon.txt\n");
				goto regis;
			}
		} else {
			echo @color('red', $respon . "\n");
		}
		goto regis;
		break;
	case '3':
		echo @color('yellow', "MENU:\n");
		echo @color('yellow', "[1] AKUN BERHASIL REDEEM\n");
		echo @color('yellow', "[2] AKUN GAGAL REDEEM\n");
		echo @color('yellow', "PILIH : ");
		$milihe = trim(fgets(STDIN));
		switch ($milihe) {
			case '1':
				masalx:
				echo "[+] Input File: ";
				$file = trim(fgets(STDIN));
				if (empty($file) || !file_exists($file)) {
					echo "[+] File not found!\n";
					goto masalx;
				}
				$list = explode("\n", str_replace("\r", "", file_get_contents($file)));
				$no = 1;
				$total = count($list) - 1;
				$success = 0;
				$error = 0;
				foreach ($list as $kode) {
					if (empty($kode)) {
						continue;
					}
					echo "Total: {$no}/{$total}\n";
					$akunxx = explode(';', trim($kode));
					$nomor = trim($akunxx[0]);
					$uuid = trim($akunxx[1]);
					$pin = trim($akunxx[2]);
					$xoxo = array();
					$xoxo[] = 'key: ZWR0czIwMjE6MHBsbW9rbg==';
					$xoxo[] = 'apps: {"app_version":"3.9.3","device_class":"Phone","device_family":"Samsung SMG988B","device_id":"' . $uuid . '","os_name":"Android Q","os_version":"Android 10"}';
					$xoxo[] = 'Host: edtsapp.indomaretpoinku.com';
					$xoxo[] = 'User-Agent: okhttp/5.0.0-alpha.2';
					$xoxo[] = 'Content-Type: application/json; charset=UTF-8';
					$login = curl('https://edtsapp.indomaretpoinku.com/login/api/open/pin/validate-pin', '{"phoneNumber":"' . $nomor . '","deviceId":"' . $uuid . '","pinCode":"' . $pin . '"}', $xoxo);
					if (strpos($login[1], '"message":"Success"')) {
						$data = json_decode($login[1]);
						$xx = $data->data->access_token;
						$tempikkk = array();
						$tempikkk[] = 'Authorization: Bearer ' . $xx;
						$tempikkk[] = 'Key: ZWR0czIwMjE6MHBsbW9rbg==';
						$tempikkk[] = 'Apps: {"app_version":"3.9.3","device_class":"Phone","device_family":"Samsung SMG988B","device_id":"' . $uuid . '","os_name":"Android Q","os_version":"Android 10"}';
						$tempikkk[] = 'Connection: Keep-Alive';
						$tempikkk[] = 'User-Agent: okhttp/5.0.0-alpha.2';
						cekkkvc:
						$getkpn = curl('https://edtsapp.indomaretpoinku.com/coupon/api/mobile/coupons/has-new-coupon', null, $tempikkk);
						if (strpos($getkpn[1], '"hasNewCoupon":true')) {
							$cek = curl('https://edtsapp.indomaretpoinku.com/coupon/api/mobile/coupons?unpaged=true', null, $tempikkk);
							if (strpos($cek[1], '"message":"Success"')) {
								$list = json_decode($cek[1]);
								if ($list->data->content == null) {
									echo "delay..\n";
									sleep(5);
									goto cekkkvc;
								} else {
									save("===========================\n" . $nomor . "\n", 'vocerlain.txt');
									foreach ($list->data->content as $mydata) {
										echo color('nevy', "{$mydata->couponName} =>  ");
										echo color('green', "{$mydata->couponCode}\n");
										if ($mydata->couponName == "Diskon Rp 25.000 Klik Indomaret") {
											save($nomor . ";" . $mydata->couponCode . "\n", 'akunvocer25k.txt');
											echo color('yellow', "Tersimpan di akunvocer25k.txt\n");
											file_put_contents('vocer25k', $mydata->couponCode);
										} elseif ($mydata->couponName == "Diskon Produk Roti") {
											save($nomor . ";" . $mydata->couponCode . "\n", 'akunvocerROTI.txt');
											echo color('yellow', "Tersimpan di akunvocerROTI.txt\n");
										}
										save($mydata->couponName . ";" . $mydata->couponCode . "\n", 'vocerlain.txt');
									}
								}
								save("===========================\n", 'vocerlain.txt');
								save($nomor . ";" . $uuid . ";112233\n", 'akunadavocer.txt');
							} else {
								echo color('red', "{$cek[1]}\n");
								goto cekkkvc;
							}
						} else {
							echo color('red', "{$getkpn[1]}\n");
						}
					} else {
						echo @color('red', "GAGAL LOGIN\n");
					}
					$no++;
				}
				break;
			case '2':
				massalx:
				echo "[+] Input File: ";
				$file = trim(fgets(STDIN));
				if (empty($file) || !file_exists($file)) {
					echo "[+] File not found!\n";
					goto massalx;
				}
				$list = explode("\n", str_replace("\r", "", file_get_contents($file)));
				$no = 1;
				$total = count($list) - 1;
				$success = 0;
				$error = 0;
				foreach ($list as $kode) {
					if (empty($kode)) {
						continue;
					}
					echo "Total: {$no}/{$total}\n";
					$akunxx = explode(';', trim($kode));
					$nomor = trim($akunxx[0]);
					$uuid = trim($akunxx[1]);
					$pin = trim($akunxx[2]);
					$xoxo = array();
					$xoxo[] = 'key: ZWR0czIwMjE6MHBsbW9rbg==';
					$xoxo[] = 'apps: {"app_version":"3.9.3","device_class":"Phone","device_family":"Samsung SMG988B","device_id":"' . $uuid . '","os_name":"Android Q","os_version":"Android 10"}';
					$xoxo[] = 'Host: edtsapp.indomaretpoinku.com';
					$xoxo[] = 'User-Agent: okhttp/5.0.0-alpha.2';
					$xoxo[] = 'Content-Type: application/json; charset=UTF-8';
					$login = curl('https://edtsapp.indomaretpoinku.com/login/api/open/pin/validate-pin', '{"phoneNumber":"' . $nomor . '","deviceId":"' . $uuid . '","pinCode":"' . $pin . '"}', $xoxo);
					if (strpos($login[1], '"message":"Success"')) {
						$data = json_decode($login[1]);
						$xx = $data->data->access_token;
						$xoxos = array();
						$xoxos[] = 'Host: edtsapp.indomaretpoinku.com';
						$xoxos[] = 'authorization: Bearer ' . $xx;
						$xoxos[] = 'key: ZWR0czIwMjE6MHBsbW9rbg==';
						$xoxos[] = 'apps: {"app_version":"3.9.3","device_class":"Phone","device_family":"Samsung SMG988B","device_id":"' . $uuid . '","os_name":"Android Q","os_version":"Android 10"}';
						$xoxos[] = 'content-type: application/json; charset=UTF-8';
						$xoxos[] = 'content-length: 26';
						$xoxos[] = 'accept-encoding: gzip';
						$xoxos[] = 'user-agent: okhttp/5.0.0-alpha.2';
						echo color('yellow', "KODE TOKO: ");
						$tokox = trim(fgets(STDIN));
						$toko = strtoupper($tokox);
						$kodexv = curl('https://edtsapp.indomaretpoinku.com/coupon/api/mobile/gift/redeem', '{"couponPromoCode":"' . $toko . '"}', $xoxos);
						if (strpos($kodexv[1], '"message":"Success"')) {
							echo @color('green', "{$kodexv[1]}\n");
							$tempikkk = array();
							$tempikkk[] = 'Authorization: Bearer ' . $xx;
							$tempikkk[] = 'Key: ZWR0czIwMjE6MHBsbW9rbg==';
							$tempikkk[] = 'Apps: {"app_version":"3.9.3","device_class":"Phone","device_family":"Samsung SMG988B","device_id":"' . $uuid . '","os_name":"Android Q","os_version":"Android 10"}';
							$tempikkk[] = 'Connection: Keep-Alive';
							$tempikkk[] = 'User-Agent: okhttp/5.0.0-alpha.2';
							cekkkvcx:
							$getkpn = curl('https://edtsapp.indomaretpoinku.com/coupon/api/mobile/coupons/has-new-coupon', null, $tempikkk);
							if (strpos($getkpn[1], '"hasNewCoupon":true')) {
								$cek = curl('https://edtsapp.indomaretpoinku.com/coupon/api/mobile/coupons?unpaged=true', null, $tempikkk);
								if (strpos($cek[1], '"message":"Success"')) {
									$list = json_decode($cek[1]);
									if ($list->data->content == null) {
										echo "delay..\n";
										sleep(5);
										goto cekkkvcx;
									} else {
										save("===========================\n" . $nomor . "\n", 'vocerlain.txt');
										foreach ($list->data->content as $mydata) {
											echo color('nevy', "{$mydata->couponName} =>  ");
											echo color('green', "{$mydata->couponCode}\n");
											if ($mydata->couponName == "Diskon Rp 25.000 Klik Indomaret") {
												save($nomor . ";" . $mydata->couponCode . "\n", 'akunvocer25k.txt');
												echo color('yellow', "Tersimpan di akunvocer25k.txt\n");
												file_put_contents('vocer25k', $mydata->couponCode);
											} elseif ($mydata->couponName == "Diskon Produk Roti") {
												save($nomor . ";" . $mydata->couponCode . "\n", 'akunvocerROTI.txt');
												echo color('yellow', "Tersimpan di akunvocerROTI.txt\n");
											}
											save($mydata->couponName . ";" . $mydata->couponCode . "\n", 'vocerlain.txt');
										}
									}
									save("===========================\n", 'vocerlain.txt');
									save($nomor . ";" . $uuid . ";112233\n", 'akunadavocer.txt');
								} else {
									echo color('red', "{$cek[1]}\n");
									goto cekkkvcx;
								}
							} else {
								echo color('red', "{$getkpn[1]}\n");
							}
						} else {
							echo @color('red', "{$kodexv[1]}\n");
							echo @color('red', "COBA LAGI NANTI\n");
						}
					} else {
						echo @color('red', "{$login[1]}\n");
						echo @color('red', "GAGAL LOGIN\n");
					}
					$no++;
				}
				break;
			default:
				break;
		}
		break;
	case '4':
		masalxx:
		echo "[+] Masukkan kode toko: ";
		$kodetokox = trim(fgets(STDIN));
		echo "[+] Masukkan Password: ";
		$password = trim(fgets(STDIN));
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masalxx;
		}
		$list = explode("\n", str_replace("\r", "", file_get_contents($file)));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			unlink('nganue.txt');
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			$vocer = trim($akunxx[1]);
			$device_id = trim($akunxx[2]);
			if ($device_id == null) {
				$device_id = urut(16);
			}
			tempelll:
			// $kodetokox = "TB01";
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $password . '"}', $kuntul2x);
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$responx = $cekvcne[1];
			if (strpos($responx, '"IsActivated":true')) {
				$cok = json_decode($responx);
				$ID = $cok[0]->ID;
				$RegionId = $cok[0]->RegionId;
				$getscid = curl('https://api.klikindomaret.com/api/ShoppingCart/GetLastestShop?customerID=' . $ID . '&regionID=' . $RegionId, null, $kuntul);
				//echo "$getscid[1]\n";
				$za = json_decode($getscid[1]);
				if (strpos($getscid[1], '"Message":"An error has occurred."')) {
					echo @color('red', "ERROR KAK\n");
				} else {
					$scid = $za[0];
					$setaddress = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/SetAddressTypeAndDefaultStore?mfp_id=' . $respid . '&isChangeAddress=False&ShoppingCartID=' . $scid, '{"CustomerID":"' . $ID . '","AddressType":0,"StoreCode":"' . $kodetokox . '","StoreCodeDest":""}', $kuntul2);
					echo "{$setaddress[1]}\n";
					$setaddress2 = curlx('https://api.klikindomaret.com/api/ShoppingCart/ReCheckStockAllItem?ShoppingCartID=' . $scid . '&StoreCode=' . $kodetokox . '&AddressType=0&CustomerAddressID=00000000-0000-0000-0000-000000000000&CustomerID=' . $ID . '&StoreCodeDest=&CustomerLatitude=&CustomerLongitude=', null, $kuntul);
					// for ($i=0; $i < 1; $i++) {
					// $addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID='.$RegionId.'&scId=&cId='.$ID.'&cartRef=mobile&mod=add&id=&isPair=false&mfp_id='.$respid.'&qty=2&pId=3a0f3388-018f-4d63-9baf-51ded26e2f43&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode='.$kodetokox.'&StoreCodeDest=', null, $kuntul);
					// $stt = json_decode($addproduk[1])[0]->Message;
					// $SCID = json_decode($addproduk[1])[0]->ResponseID;
					// echo @color('green', "$stt\n");
					// $addproduk2 = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID='.$RegionId.'&scId=&cId='.$ID.'&cartRef=mobile&mod=add&id=&isPair=false&mfp_id='.$respid.'&qty=2&pId=798a7a04-5b24-493e-b375-a1407f4f716a&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode='.$kodetokox.'&StoreCodeDest=', null, $kuntul);
					// $stt2 = json_decode($addproduk2[1])[0]->Message;
					// $SCID = json_decode($addproduk[1])[0]->ResponseID;
					// echo @color('green', "$stt2\n");
					// }
					$datane = '{"Code":"' . $vocer . '","ShoppingCartID":"' . $scid . '","CustomerID":"' . $ID . '","RegionID":"' . $RegionId . '","SalesOrderNo":"","Nominal":"","DeviceID":"' . $device_id . '","ShoppingCartPackageID":null}';
					$kupon = curlx('https://api.klikindomaret.com/api/Voucher/BookingVoucherCoupon?mfp_id=' . $respid, $datane, $kuntul);
					$kimak = json_decode($kupon[1]);
					$ket = $kimak->ResponseObject->keterangan;
					if (strpos($kupon[1], '"status":"SUCCESS"')) {
						echo @color('green', "BERHASIL GAN\n");
						echo @color('nevy', "{$ket}\n");
						echo @color('blue', "{$nomor}\n");
						echo @color('yellow', "Akun berhasil disimpan di akunklikbervocer.txt\n");
						save("{$nomor}\n", "akunklikbervocer.txt");
					} elseif (strpos($kupon[1], 'ShopingCart tidak boleh kosong')) {
						goto tempelll;
					} else {
						echo @color('red', "{$ket}\n");
					}
				}
			} else {
				echo "{$responx}\n";
			}
			$no++;
		}
		break;
	case '5':
		masalxxx:
		echo "Masukkan kode toko: ";
		$kodetoko = trim(fgets(STDIN));
		echo "Masukkan Password : ";
		$password = trim(fgets(STDIN));
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masalxxx;
		}
		$list = explode("\n", str_replace("\r", "", file_get_contents($file)));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			unlink('nganue.txt');
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			$vocer = trim($akunxx[1]);
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $password . '"}', $kuntul2x);
			// echo @color('purple', "\n\n$verif[1]\n\n");
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$responx = $cekvcne[1];
			if (strpos($responx, '"IsActivated":true')) {
				$cok = json_decode($responx);
				$ID = $cok[0]->ID;
				$RegionId = $cok[0]->RegionId;
				$getscid = curlx('https://api.klikindomaret.com/api/ShoppingCart/GetLastestShop?customerID=' . $ID . '&regionID=' . $RegionId, null, $kuntul);
				//echo "$getscid[1]\n";
				$za = json_decode($getscid[1]);
				if (strpos($getscid[1], '"Message":"An error has occurred."')) {
					echo @color('red', "ERROR KAK\n");
				} else {
					$scid = $za[0];
					if ($scid !== []) {
						$SCID = $scid;
					}
					$getaddress = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/GetByCustomerId?custId=' . $ID, null, $kuntul2);
					if ($getaddress[1] == '[]') {
						$addid = '00000000-0000-0000-0000-000000000000';
					} else {
						$addidx = json_decode($getaddress[1]);
						$addid = $addidx[0]->ID;
						$longe = $addidx[0]->Longitude;
						$late = $addidx[0]->Latitude;
					}
					echo @color('yellow', "DAFTAR HIDANGAN :\n");
					echo @color('red', "[1] Antar\n");
					echo @color('yellow', "[2] Ambil\n");
					echo @color('yellow', "pilih : ");
					$ambil = trim(fgets(STDIN));
					switch ($ambil) {
						case '1':
							$setaddress = curlx('https://api.klikindomaret.com/api/ShoppingCart/ReCheckStockAllItem?ShoppingCartID=' . $scid . '&StoreCode=&AddressType=1&CustomerAddressID=' . $addid . '&CustomerID=' . $ID . '&StoreCodeDest=&CustomerLatitude=' . $late . '&CustomerLongitude=' . $longe, null, $kuntul);
							echo "{$setaddress[1]}\n";
							break;
						case '2':
							$setaddress = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/SetAddressTypeAndDefaultStore?mfp_id=' . $respid . '&isChangeAddress=False&ShoppingCartID=' . $scid, '{"CustomerID":"' . $ID . '","AddressType":0,"StoreCode":"' . $kodetoko . '","StoreCodeDest":""}', $kuntul2);
							// echo "$setaddress[1]\n";
							$setaddress2 = curlx('https://api.klikindomaret.com/api/ShoppingCart/ReCheckStockAllItem?ShoppingCartID=' . $scid . '&StoreCode=' . $kodetoko . '&AddressType=0&CustomerAddressID=' . $addid . '&CustomerID=' . $ID . '&StoreCodeDest=&CustomerLatitude=&CustomerLongitude=', null, $kuntul);
							break;
					}
					pilihproduk:
					echo @color('yellow', "DAFTAR HIDANGAN :\n");
					echo @color('yellow', "[1] Rose Brand Gula Pasir Putih 1Kg\n");
					echo @color('yellow', "[2] Sunlight Cairan Pencuci Piring Jeruk Nipis 755Ml\n");
					echo @color('yellow', "[3] Bear Brand,Susu Encer Steril  189Ml Klg\n");
					echo @color('yellow', "[4] Bimoli,Minyak Goreng Special Refill  2000Ml Pch\n");
					echo @color('yellow', "[5] Filma,Minyak Goreng Refill  2000Ml Pch\n");
					echo @color('yellow', "[6] Fortune,Minyak Goreng Refill  2000Ml Pch\n");
					echo @color('yellow', "[7] Rose Brand,Gula Pasir Kuning 1Kg Pck\n");
					echo @color('yellow', "[8] Sania,Minyak Goreng Refill  2000Ml Pch\n");
					echo @color('yellow', "[9] Sovia,Minyak Goreng  2L Pch\n");
					echo @color('yellow', "[10] Sunlight,Cairan Pcuci Piring Ref 65976 Jeruk Nipis 210/220Ml Pch\n");
					echo @color('yellow', "[11] Tropical,Minyak Goreng  2000Ml Btl\n");
					echo @color('yellow', "[12] Tropical,Minyak Goreng Refill  2000Ml Pch\n");
					echo @color('yellow', "[13] Sgm Eksplor 1+ Progressmax Madu\n");
					echo @color('yellow', "[14] Sgm Eksplor 1+ Progressmax Vanilla\n");
					echo @color('yellow', "[15] Sgm Eksplor 3+ Progressmax Vanilla\n");
					echo @color('yellow', "[16] Sgm Eksplor 3+ Progressmax Madu\n");
					echo @color('yellow', "[17] Merries Pants Good Skin 26 ExtraLarge\n");
					echo @color('yellow', "[18] Merries Pants Good Skin 26 Small\n");
					echo @color('yellow', "[19] Merries Pants Good Skin 34 Medium\n");
					echo @color('yellow', "[20] Merries Pants Good Skin 34 Large\n");
					echo @color('yellow', "[21] Gulaku Gula Tebu (Putih) Premium 1000G\n");
					echo @color('yellow', "[22] Ekonomi,Pencuci Piring Power Liquid Jeruk Nipis 765/760Ml Pch\n");
					echo @color('yellow', "[23] Ekonomi,Pencuci Piring Power Liquid Siwak&Jrk Limau 780Ml Pch\n");
					echo @color('yellow', "[24] Frisian Flag,Susu Kental Manis Cokelat 560G Pch\n");
					echo @color('yellow', "[25] Frisian Flag,Susu Kental Manis Putih 560G Pch\n");
					echo @color('yellow', "[26] Indomie,Mie Goreng Plus Special 80G Pck\n");
					echo @color('yellow', "[27] Lifebuoy,Sabun Mandi Cair Refill Blue 450Ml Pch\n");
					echo @color('yellow', "[28] Lifebuoy,Sabun Mandi Cair Refill Lemon Fresh 450Ml Pch\n");
					echo @color('yellow', "[29] Lifebuoy,Sabun Mandi Cair Refill Red 450Ml Pch\n");
					echo @color('yellow', "[30] Lifebuoy,Sabun Mandi Cair Refill White 450Ml Pch\n");
					echo @color('yellow', "[31] Mamy Poko,Pants Standar 26'S  Extralarge Pck\n");
					echo @color('yellow', "[32] Mamy Poko,Pants Standar 30'S  Large Pck\n");
					echo @color('yellow', "[33] Mamy Poko,Pants Standar 34'S  Medium Pck\n");
					echo @color('yellow', "[34] Mamy Poko,Pants Standar 40'S  Small Pck\n");
					echo @color('yellow', "[35] Pepsodent,Pasta Gigi White  225G Tub\n");
					echo @color('yellow', "[36] Bango Kecap Manis Light 550Ml\n");
					echo @color('yellow', "[37] Bango Kecap Manis 550Ml\n");
					echo @color('yellow', "[38] Indomilk Kental Manis Coklat 6X37g\n");
					echo @color('yellow', "[39] Indomilk Kental Manis Putih 6X37g\n");
					echo @color('yellow', "pilih : ");
					$pilih = trim(fgets(STDIN));
					switch ($pilih) {
						case '1':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=0c0bd147-7c6a-4498-a610-87fa7083b67b&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '2':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=05b63677-d010-4910-bf16-93c0039c999b&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '3':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=a1b98100-1c8c-452a-95a2-bdb27c5ae56a&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '4':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=e27efba9-ffdb-40b8-9b6a-5e9272ab5a91&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '5':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=e34d2d1f-dfd1-4582-b10b-23f5153dbe05&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '6':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=0828b072-483e-4ee0-9f99-7c33f33fc6eb&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '7':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=61433352-baa9-4dc4-bcec-fda1d8685a96&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '8':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=2f29a0db-6dee-42b7-bf82-fe0223fa187a&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '9':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=fc4b5152-70a1-4344-9fb8-fffb43276a20&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '10':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=937933c9-8e69-4b9f-8c23-a8af0562526a&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '11':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=d42fe133-ab06-4ff2-89ee-7c73ceeb836c&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '12':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=10fb920f-c66f-4d12-a341-4945c6b7cf2f&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '13':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=d04cb3aa-250d-4847-aa4a-b5e6617617d5&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '14':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=a03e5da1-8ade-457b-b811-e176626d7277&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '15':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=0f4d121c-59d9-452a-addb-041774766673&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '16':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=d4786ab0-8db1-463f-9632-3df3bc6c2990&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '17':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=a899ff19-35ae-43e7-abef-88b76ba92155&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '18':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=ec3966af-762d-43c0-a06e-b4b66165fce4&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '19':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=c4fc8526-b00e-4070-93a0-cba965d45e49&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '20':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=b7a881cc-371d-4334-9ed5-fc778bb6d7ea&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '21':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=99f928b9-1ea3-4636-ae68-b551621aff8c&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '22':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=2af4c0d7-76b7-4390-8438-78ab7cd3f8ae&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '23':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=ca4e7974-450a-41ef-b3ab-ee189bce97b0&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '24':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=56ee2840-d08c-481f-86b2-34affe736dd3&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '25':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=658e8a31-3e6a-4425-83b7-8e6079fa206c&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '26':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=b062eea5-cc8f-4897-92c3-a560293f8d6b&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '27':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=d997fe83-6912-4300-975e-c699e6391ad5&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '28':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=5adfffd2-3a8f-4d2b-a873-5872817a656b&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '29':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=1a7b390b-54fb-40ca-97f9-5aab4805804c&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '30':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=c00c3747-70bf-47c0-bd31-77e4d371a8fb&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '31':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=cafe5db9-d192-4474-819b-04ffcddb459e&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '32':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=9c14783e-4920-4193-b2ea-c9e63e4e5e69&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '33':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=e946f2ae-96ba-457b-94f3-b1bd978ef14c&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '34':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=c15b0488-a668-482e-b289-97b97e99d6cd&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '35':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=eeabb0e8-06d2-4572-b9e7-e778eeae872b&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '36':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=d1143989-51da-4f9d-b485-f71fc35fcd9c&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '37':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=1f1ce1ca-c818-4577-a454-0d325345e17e&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '38':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=04d6e984-06df-4de3-90d8-ae75fa3bfb26&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
						case '39':
							echo @color('yellow', "JUMLAH : ");
							$qty = trim(fgets(STDIN));
							$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=7b81699c-46ab-4648-97af-f7a43507f14e&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
							if (strpos($addproduk[1], '"Success":true')) {
								$SCID = json_decode($addproduk[1])[0]->ResponseID;
								$stt = json_decode($addproduk[1])[0]->Message;
								echo @color('green', "{$stt}\n");
							} else {
								$stt = json_decode($addproduk[1])[0]->ErrorMessage;
								$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
								$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
								echo @color('red', "{$stt}\n");
								echo @color('red', "Jumlah Order : {$stt1}\n");
								echo @color('red', "Jumlah Stock : {$stt2}\n");
							}
							echo @color('yellow', "TAMBAH LAGI (y / n )? ");
							$againx = trim(fgets(STDIN));
							if (strtolower($againx) == 'y') {
								goto pilihproduk;
							}
							break;
					}
					$DEVICE_ID = urut(16);
					$cekk = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $SCID . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $kodetoko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
					$json = json_decode($cekk[1]);
					$tokonejon = $json[0]->CheckStockModel->StoreCode;
					$tokonejon1 = $json[0]->CheckStockModel->StoreName;
					$tokonejon2 = $json[0]->CheckStockModel->StoreAddress;
					$storeid = $json[0]->CheckStockModel->StoreID;
					$RegionID = $json[0]->CheckStockModel->RegionID;
					$DistrictID = $json[0]->CheckStockModel->DistrictID;
					$gettoko = curlx('https://api.klikindomaret.com/api/Store/GetAllStoreByCode?storeCode=' . $kodetoko . '&customerLatitude=-6.78542505&customerLongitude=112.19929015', null, $kuntul);
					$ZipCode = json_decode($gettoko[1])[0]->ZipCode;
					echo @color('nevy', "KODE TOKO : {$tokonejon}\n");
					echo @color('nevy', "NAMA TOKO : {$tokonejon1}\n");
					echo @color('nevy', "ALAMAT TOKO : {$tokonejon2}\n");
					foreach ($json[0]->CartItemNotification->Items as $mydata) {
						$cx = $mydata;
						foreach ($cx->ShoppingCartItems as $myxxx) {
							$idne = $myxxx->Quantity;
							$prduk = $myxxx->ProductDescription;
							echo @color('yellow', "{$prduk} == {$idne}\n");
						}
					}
					echo @color('yellow', "CEK TEBUS MURAH (y / n )? ");
					$againx = trim(fgets(STDIN));
					if (strtolower($againx) == 'y') {
						goto tebusmurah;
					} else {
						goto tanpatebus;
					}
					tebusmurah:
					$ajgjuga = json_decode($cekk[1], true);
					$o1 = "0";
					$o2 = "10";
					echo "Promo 0 :\n";
					for ($o1; $o1 < $o2; $o1++) {
						$district = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][$a1]["Product"]["Description"];
						$hargadis = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][$a1]["PriceWithDiscount"];
						$setoke = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][$a1]["AvailableQuantityStock"];
						echo @color('nevy', "[{$a1}]");
						echo "=> ";
						echo @color('yellow', "{$district}");
						echo @color('green', " : {$hargadis}");
						echo @color('nevy', " =>> {$setoke}");
						echo "\n";
						if ($district == "") {
							break;
						}
					}
					echo "\n";
					$a1 = "0";
					$a2 = "10";
					echo "Promo 1 :\n";
					for ($a1; $a1 < $a2; $a1++) {
						$district = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][$a1]["Product"]["Description"];
						$hargadis = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][$a1]["PriceWithDiscount"];
						$setoke = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][$a1]["AvailableQuantityStock"];
						echo @color('nevy', "[{$a1}]");
						echo "=> ";
						echo @color('yellow', "{$district}");
						echo @color('green', " : {$hargadis}");
						echo @color('nevy', " =>> {$setoke}");
						echo "\n";
						if ($district == "") {
							break;
						}
					}
					echo "\n";
					echo "Promo 2 :\n";
					$b1 = "0";
					$b2 = "10";
					for ($b1; $b1 < $b2; $b1++) {
						$district = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][$b1]["Product"]["Description"];
						$hargadis = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][$b1]["PriceWithDiscount"];
						$setoke = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][$b1]["AvailableQuantityStock"];
						echo @color('nevy', "[{$b1}]");
						echo "=> ";
						echo @color('yellow', "{$district}");
						echo @color('green', " : {$hargadis}");
						echo @color('nevy', " =>> {$setoke}");
						echo "\n";
						if ($district == "") {
							break;
						}
					}
					echo "\n";
					echo "Promo 3 :\n";
					$c1 = "0";
					$c2 = "10";
					for ($c1; $c1 < $c2; $c1++) {
						$district = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][$c1]["Product"]["Description"];
						$hargadis = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][$c1]["PriceWithDiscount"];
						$setoke = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][$c1]["AvailableQuantityStock"];
						echo @color('nevy', "[{$c1}]");
						echo "=> ";
						echo @color('yellow', "{$district}");
						echo @color('green', " : {$hargadis}");
						echo @color('nevy', " =>> {$setoke}");
						echo "\n";
						if ($district == "") {
							break;
						}
					}
					echo "\n";
					echo "Promo 4 :\n";
					$d1 = "0";
					$d2 = "10";
					for ($d1; $d1 < $d2; $d1++) {
						$district = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][$d1]["Product"]["Description"];
						$hargadis = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][$d1]["PriceWithDiscount"];
						$setoke = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][$d1]["AvailableQuantityStock"];
						echo @color('nevy', "[{$d1}]");
						echo "=> ";
						echo @color('yellow', "{$district}");
						echo @color('green', " : {$hargadis}");
						echo @color('nevy', " =>> {$setoke}");
						echo "\n";
						if ($district == "") {
							break;
						}
					}
					echo "\n";
					echo "Promo 5 :\n";
					$e1 = "0";
					$e2 = "10";
					for ($e1; $e1 < $e2; $e1++) {
						$district = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][$e1]["Product"]["Description"];
						$hargadis = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][$e1]["PriceWithDiscount"];
						$setoke = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][$e1]["AvailableQuantityStock"];
						echo @color('nevy', "[{$e1}]");
						echo "=> ";
						echo @color('yellow', "{$district}");
						echo @color('green', " : {$hargadis}");
						echo @color('nevy', " =>> {$setoke}");
						echo "\n";
						if ($district == "") {
							break;
						}
					}
					oketambahlah:
					echo @color("yellow", "PILIH PROMO : \n");
					echo @color("yellow", "[0] PROMO 0 \n");
					echo @color("yellow", "[1] PROMO 1 \n");
					echo @color("yellow", "[2] PROMO 2 \n");
					echo @color("yellow", "[3] PROMO 3 \n");
					echo @color("yellow", "[4] PROMO 4 \n");
					echo @color("yellow", "[5] PROMO 5 \n");
					echo @color("yellow", "Pilih : ");
					$pilihlabro = trim(fgets(STDIN));
					if ($pilihlabro == "0") {
						goto tabnol;
					} elseif ($pilihlabro == "1") {
						goto tabsatu;
					} elseif ($pilihlabro == "2") {
						goto tabdua;
					} elseif ($pilihlabro == "3") {
						goto tabtiga;
					} elseif ($pilihlabro == "4") {
						goto tabempat;
					} elseif ($pilihlabro == "5") {
						goto tablima;
					}
					tabnol:
					echo @color("yellow", "PILIH BARANG : ");
					$pilihlayuk = trim(fgets(STDIN));
					if ($pilihlayuk == "0") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][0]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][0]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "1") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][1]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][1]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "2") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][2]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][2]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "3") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][3]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][3]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "4") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][4]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][4]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "5") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][5]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][5]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "6") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][6]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][6]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "7") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][7]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][7]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "8") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][8]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][8]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "9") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][9]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][0]["ShoppingCartItems"][9]["Product"]["PLU"];
						goto selectnya;
					}
					tabsatu:
					echo @color("yellow", "PILIH BARANG : ");
					$pilihlayuk = trim(fgets(STDIN));
					if ($pilihlayuk == "0") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][0]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][0]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "1") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][1]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][1]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "2") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][2]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][2]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "3") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][3]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][3]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "4") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][4]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][4]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "5") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][5]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][5]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "6") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][6]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][6]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "7") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][7]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][7]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "8") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][8]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][8]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "9") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][9]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][1]["ShoppingCartItems"][9]["Product"]["PLU"];
						goto selectnya;
					}
					tabdua:
					echo @color("yellow", "PILIH BARANG : ");
					$pilihlayuk = trim(fgets(STDIN));
					if ($pilihlayuk == "0") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][0]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][0]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "1") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][1]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][1]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "2") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][2]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][2]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "3") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][3]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][3]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "4") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][4]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][4]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "5") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][5]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][5]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "6") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][6]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][6]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "7") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][7]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][7]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "8") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][8]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][8]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "9") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][9]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][2]["ShoppingCartItems"][9]["Product"]["PLU"];
						goto selectnya;
					}
					tabtiga:
					echo @color("yellow", "PILIH BARANG : ");
					$pilihlayuk = trim(fgets(STDIN));
					if ($pilihlayuk == "0") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][0]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][0]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "1") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][1]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][1]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "2") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][2]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][2]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "3") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][3]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][3]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "4") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][4]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][4]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "5") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][5]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][5]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "6") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][6]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][6]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "7") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][7]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][7]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "8") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][8]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][8]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "9") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][9]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][3]["ShoppingCartItems"][9]["Product"]["PLU"];
						goto selectnya;
					}
					tabempat:
					echo @color("yellow", "PILIH BARANG : ");
					$pilihlayuk = trim(fgets(STDIN));
					if ($pilihlayuk == "0") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][0]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][0]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "1") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][1]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][1]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "2") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][2]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][2]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "3") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][3]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][3]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "4") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][4]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][4]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "5") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][5]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][5]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "6") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][6]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][6]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "7") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][7]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][7]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "8") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][8]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][8]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "9") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][9]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][4]["ShoppingCartItems"][9]["Product"]["PLU"];
						goto selectnya;
					}
					tablima:
					echo @color("yellow", "PILIH BARANG : ");
					$pilihlayuk = trim(fgets(STDIN));
					if ($pilihlayuk == "0") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][0]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][0]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "1") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][1]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][1]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "2") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][2]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][2]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "3") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][3]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][3]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "4") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][4]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][4]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "5") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][5]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][5]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "6") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][6]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][6]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "7") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][7]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][7]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "8") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][8]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][8]["Product"]["PLU"];
						goto selectnya;
					} elseif ($pilihlayuk == "9") {
						$promocodeee = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][9]["PromoCode"];
						$plutuak = @$ajgjuga[0]["CartItemNotification"]["Items"][5]["ShoppingCartItems"][9]["Product"]["PLU"];
						goto selectnya;
					}
					selectnya:
					echo @color("yellow", "JUMLAH ? : ");
					$qtytebus = trim(fgets(STDIN));
					//if($pilihlajon == "1"){
					$tebus = getRequestt("https://api.klikindomaret.com/api/ShoppingCart/SetPromoSelect?ShoppingCartID=" . $SCID . "&promoCode=" . $promocodeee . "&plu=" . $plutuak . "&quantity=" . $qtytebus . "&isSelect=true");
					$ajg = json_decode($tebus, true);
					$kntl = @$ajg[0]["Message"];
					echo @color("green", $kntl);
					echo @color("green", " MENAMBAHKAN TEBUS MURAH");
					echo "\n";
					echo @color("yellow", "TAMBAH TEBUS MURAH LAGI ? ( y / n ) : ");
					$tambalhabae = trim(fgets(STDIN));
					echo "\n";
					if ($tambalhabae == "y") {
						goto oketambahlah;
					}
					tanpatebus:
					if ($json[0]->CartItemNotification->ListCouponPotonganTotal == []) {
						echo @color('red', "KUPON KOSONG KAK\n");
					} else {
						$jumlah = count($json[0]->CartItemNotification->ListCouponPotonganTotal);
						echo @color('yellow', "JUMLAH KUPON NEMPEL : ");
						echo @color('green', "{$jumlah}\n");
						foreach ($json[0]->CartItemNotification->ListCouponPotonganTotal as $mydata) {
							$kupon = $mydata->CouponMask;
							$desk = $mydata->CouponMekanisme;
							//echo "Nama Kupon : $kupon\n";
							echo @color('yellow', "Nama Kupon   : ");
							echo @color('green', "{$kupon}\n");
							echo @color('yellow', "Keterangan   : ");
							echo @color('blue', "{$desk}\n");
						}
					}
					echo @color('yellow', "LANJUT(y / n )? ");
					$againex = trim(fgets(STDIN));
					if (strtolower($againex) == 'n') {
						goto pilihproduk;
					}
					inputvocer:
					echo @color('blue', "Tempel kupon : ");
					echo @color('nevy', "{$vocer}\n");
					$datane = '{"Code":"' . $vocer . '","ShoppingCartID":"' . $SCID . '","CustomerID":"' . $ID . '","RegionID":"' . $RegionId . '","SalesOrderNo":"","Nominal":"","DeviceID":"' . $DEVICE_ID . '","ShoppingCartPackageID":null}';
					$kupon = curlx('https://api.klikindomaret.com/api/Voucher/BookingVoucherCoupon?mfp_id=' . $respid, $datane, $kuntul);
					$kimak = json_decode($kupon[1]);
					$ket = $kimak->ResponseObject->keterangan;
					if (strpos($kupon[1], '"status":"SUCCESS"')) {
						echo @color('green', "BERHASIL GAN\n");
						echo @color('nevy', "{$ket}\n");
						echo @color('blue', "{$nomor}\n");
					} else {
						echo @color('red', "{$ket}\n");
					}
					echo @color('yellow', "INPUT VOCER LAGI ? (y / n ) ");
					$againexa = trim(fgets(STDIN));
					if (strtolower($againexa) == 'y') {
						echo @color('yellow', "Masukkan Vocer : ");
						$vocernew = trim(fgets(STDIN));
						$datane = '{"Code":"' . $vocernew . '","ShoppingCartID":"' . $SCID . '","CustomerID":"' . $ID . '","RegionID":"' . $RegionId . '","SalesOrderNo":"","Nominal":"","DeviceID":"' . $DEVICE_ID . '","ShoppingCartPackageID":null}';
						$kupon = curlx('https://api.klikindomaret.com/api/Voucher/BookingVoucherCoupon?mfp_id=' . $respid, $datane, $kuntul);
						$kimak = json_decode($kupon[1]);
						$ket = $kimak->ResponseObject->keterangan;
						if (strpos($kupon[1], '"status":"SUCCESS"')) {
							echo @color('green', "BERHASIL GAN\n");
							echo @color('nevy', "{$ket}\n");
							echo @color('blue', "{$nomor}\n");
						} else {
							echo @color('red', "{$ket}\n");
						}
					}
					switch ($ambil) {
						case '1':
							$ceksk = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $SCID . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $kodetoko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
							$gettime = curlx('https://api.klikindomaret.com/api/Setting/Get?SettingKey=STORE_PREPARATION_TIME', null, $kuntul);
							$gett = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/GetByCustomerId?custId=' . $ID, null, $kuntul2);
							$addidx = json_decode($gett[1]);
							$addid = $addidx[0]->ID;
							$ZipCode = $addidx[0]->ZipCode;
							$DistrictId = $addidx[0]->DistrictId;
							$getmboh = curlx('https://api.klikindomaret.com/api/ShoppingCart/GetShippingMethod/' . $SCID . '?customerId=' . $ID . '&isVIrtual=false&regionID=' . $RegionId . '&CustomerAddressID=00000000-0000-0000-0000-000000000000&IsParcelView=false&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
							$ceksek = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $SCID . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $kodetoko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
							$poss = curlx('https://api.klikindomaret.com/api/ShoppingCart/StoreZoneSlotCalculate?mfp_id=' . $respid, '{"ShoppingCartID":"' . $SCID . '","IsDelivery":true,"CustomerAddressID":"' . $addid . '","DeviceID":"' . $DEVICE_ID . '","ShoppingcartPromoPackagesID":null}', $kuntul);
							$cekasek = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $SCID . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $kodetoko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
							$poss2 = curlx('https://api.klikindomaret.com/api/ShoppingCart/StoreZoneSlotCalculate?mfp_id=' . $respid, '{"ShoppingCartID":"' . $SCID . '","IsDelivery":true,"CustomerAddressID":"' . $addid . '","DeviceID":"' . $DEVICE_ID . '","ShoppingcartPromoPackagesID":null}', $kuntul);
							$possas = curlx('https://api.klikindomaret.com/api/ShoppingCart/StoreZoneSlotCalculate?mfp_id=' . $respid, '{"ShoppingCartID":"' . $SCID . '","IsDelivery":true,"CustomerAddressID":"' . $addid . '","DeviceID":"' . $DEVICE_ID . '","ShoppingcartPromoPackagesID":null}', $kuntul);
							$possass = curlx('https://api.klikindomaret.com/api/ShoppingCart/StoreZoneSlotCalculate?mfp_id=' . $respid, '{"ShoppingCartID":"' . $SCID . '","IsDelivery":true,"CustomerAddressID":"' . $addid . '","DeviceID":"' . $DEVICE_ID . '","ShoppingcartPromoPackagesID":null}', $kuntul);
							$possaa = curlx('https://api.klikindomaret.com/api/ShoppingCart/StoreZoneSlotCalculate?mfp_id=' . $respid, '{"ShoppingCartID":"' . $SCID . '","IsDelivery":true,"CustomerAddressID":"' . $addid . '","DeviceID":"' . $DEVICE_ID . '","ShoppingcartPromoPackagesID":null}', $kuntul);
							$jsone = json_decode($possaa[1]);
							$ax1 = "0";
							$ax2 = "7";
							echo @color('yellow', "TANGGAL : \n");
							for ($ax1; $ax1 < $ax2; $ax1++) {
								$tanggale = $jsone->ResponseObject->ListSlot[$ax1]->DateLabel;
								$tanggalex = $jsone->ResponseObject->ListSlot[$ax1]->DateDayLabel;
								echo @color('nevy', "[{$ax1}]");
								echo "=> ";
								echo @color('yellow', "{$tanggale}");
								echo "\n";
								if ($tanggale == "") {
									break;
								}
							}
							echo @color('yellow', "PILIH : ");
							$tglee = trim(fgets(STDIN));
							switch ($tglee) {
								case '0':
									$tgle = $jsone->ResponseObject->ListSlot[0]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[0]->DateLabel;
									break;
								case '1':
									$tgle = $jsone->ResponseObject->ListSlot[1]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[1]->DateLabel;
									break;
								case '2':
									$tgle = $jsone->ResponseObject->ListSlot[2]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[2]->DateLabel;
									break;
								case '3':
									$tgle = $jsone->ResponseObject->ListSlot[3]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[3]->DateLabel;
									break;
								case '4':
									$tgle = $jsone->ResponseObject->ListSlot[4]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[4]->DateLabel;
									break;
								case '5':
									$tgle = $jsone->ResponseObject->ListSlot[5]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[5]->DateLabel;
									break;
							}
							$jumuke = explode('T', $tgle);
							$tgljmk = $jumuke[0];
							echo @color('yellow', "{$tagalex}\n");
							$axx1 = "0";
							$axx2 = "14";
							echo @color('yellow', "JAM ANTAR :\n");
							for ($axx1; $axx1 < $axx2; $axx1++) {
								$xs = $axx1 + 1;
								$jame = $jsone->ResponseObject->ListSlot[$tglee]->SlotPengiriman[$axx1]->SlotLabel;
								$pesane = $jsone->ResponseObject->ListSlot[$tglee]->SlotPengiriman[$axx1]->Message;
								echo @color('nevy', "[{$xs}]");
								echo "=> ";
								echo @color('yellow', "{$jame}, ");
								echo @color('red', "{$pesane}");
								echo "\n";
								if ($jame == "") {
									break;
								}
							}
							echo @color('yellow', "pilih : ");
							$jamambil = trim(fgets(STDIN));
							switch ($jamambil) {
								case '1':
									$jmbt = "07:00";
									break;
								case '2':
									$jmbt = "08:00";
									break;
								case '3':
									$jmbt = "09:00";
									break;
								case '4':
									$jmbt = "10:00";
									break;
								case '5':
									$jmbt = "11:00";
									break;
								case '6':
									$jmbt = "12:00";
									break;
								case '7':
									$jmbt = "13:00";
									break;
								case '8':
									$jmbt = "14:00";
									break;
								case '9':
									$jmbt = "15:00";
									break;
								case '10':
									$jmbt = "16:00";
									break;
								case '11':
									$jmbt = "17:00";
									break;
								case '12':
									$jmbt = "18:00";
									break;
								case '13':
									$jmbt = "19:00";
									break;
								case '14':
									$jmbt = "20:00";
									break;
							}
							$cekasek = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $SCID . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $kodetoko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
							if (strpos($cekasek[1], '"CustomerID":null')) {
								//
								// if (strpos($cekasek[1], '"IsSuccess":true')) {
								$gass = curlx('https://api.klikindomaret.com/api/Cart/UpdateShippingMetohod?mfp_id=' . $respid, '{"AddressType":1,"AddressIDStore":"' . $addid . '","IStoreShippingDate":"' . $tgljmk . 'T00:00:00","IStorePreferTimeDelivery":"' . $jmbt . '","IStorePreferTimeShipping":"' . $jmbt . '","IPPServiceType":"","IsIPP":false,"AddressIDPlaza":"' . $addid . '","IPlazaShippingDate":"","IPPStoreCode":"","ShoppingCartID":"' . $SCID . '","IsDelivery":1,"RegionID":"' . $RegionId . '","IStoreDeliveryType":"REGULER","IStoreExpressOfflineLimit":0,"IStoreExpressDeliveryServiceFee":0,"MobileIstore":1,"MobileIPlaza":0,"PlazaDeliveryType":"","ShoppingcartPromoPackagesID":null,"DistrictId":' . $DistrictId . ',"ShopZipCode":"' . $ZipCode . '"}', $kuntul);
								if (strpos($gass[1], '"Message":"success"')) {
									$createpay = curlx('https://api.klikindomaret.com/api/Payment/CreateId?Id=' . $SCID, null, $kuntul);
									$headers1 = array();
									$headers1[] = 'Host: payment.klikindomaret.com';
									$headers1[] = 'user-agent: klikindomaretmobile';
									$headers1[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,/;q=0.8';
									for ($i = 0; $i < 3; $i++) {
										$getpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments?pcid=klikindomaret&trxtype=createorder&SCTPCID=' . $SCID . '&LAT=null&LONG=null&DeviceID=' . urut(16), null, $headers1);
										$linkx = get_between($getpay[1], '"hdTotalAmount" value="', '"');
										echo @color('nevy', "TOTAL : {$linkx}\n");
									}
									echo @color('yellow', "DAFTAR HIDANGAN :\n");
									echo @color('yellow', "[1] Isaku\n");
									echo @color('yellow', "[2] BCA\n");
									echo @color('yellow', "[3] REKPON\n");
									echo @color('yellow', "pilih : ");
									$bayar = trim(fgets(STDIN));
									switch ($bayar) {
										case '1':
											echo "Total : {$linkx}\n";
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"BPISAKU","TotalAmount":"' . $linkx . '","Token":"","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"i.Saku","useCoin":false,"potentialCoinShopee":"","Source":"Android"}', $parcel1);
											$k = json_decode($submitpay[1])->Trxid;
											$lk = str_replace('TIM', '', $k);
											echo shell_exec("xdg-open 'https://barcode.tec-it.com/barcode.ashx?data='{$lk}'&code=Code128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&codepage=Default&qunit=Mm&quiet=10&hidehrt=False'");
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											sleep(5);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->StatusPembayaran;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											
  $dircrot = $sttp[0]->Referer;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
										
									echo " {$Yellow}➤{$White} Payment Redirect	 : " . $dircrot . "\n";
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $TransactionCode . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "\n", 'transaksiIsaku.txt');
											unlink('nganue.txt');
											break;
										case '2':
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"702","TotalAmount":"' . $linkx . '","Token":"","IsCoupon":"1","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"Source":"Android"}', $parcel1);
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->StatusPembayaran;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											   $dircrot = $sttp[0]->Referer;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
										
									echo " {$Yellow}➤{$White} Payment Redirect	 : " . $dircrot . "\n";
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "KODE VA: ");
											echo @color('nevy', "{$PaymentAccountID}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $TransactionCode . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "|Kode VA :" . $PaymentAccountID . "\n", 'transaksiBCA.txt');
											unlink('nganue.txt');
											break;
										case '3':
											echo @color('yellow', "Masukkan token: ");
											$tokentt = trim(fgets(STDIN));
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"RKPON","TotalAmount":"' . $linkx . '","Token":"' . $tokentt . '","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"CIMB Niaga Rekening Ponsel","useCoin":false,"potentialCoinShopee":"","Source":"Android"}', $parcel1);
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->StatusPembayaran;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											   $dircrot = $sttp[0]->Referer;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
										
									echo " {$Yellow}➤{$White} Payment Redirect	 : " . $dircrot . "\n";
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $TransactionCode . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "|Kode VA :" . $PaymentAccountID . "\n", 'transaksiREKPON.txt');
											unlink('nganue.txt');
											break;
									}
								} else {
									echo @color('red', "{$gass[1]}\n");
								}
							} else {
								echo @color('red', "{$cekasek[1]}\n");
							}
							break;
						case '2':
							$gett = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/GetByCustomerId?custId=' . $ID, null, $kuntul2);
							if ($gett[1] == '[]') {
								$addid = '00000000-0000-0000-0000-000000000000';
							} else {
								$addidx = json_decode($gett[1]);
								$addid = $addidx[0]->ID;
							}
							$poss = curlx('https://api.klikindomaret.com/api/ShoppingCart/StoreZoneSlotCalculate?mfp_id=' . $respid, '{"ShoppingCartID":"' . $SCID . '","IsDelivery":false,"StoreID":"' . $storeid . '","DeviceID":"' . $DEVICE_ID . '","ShoppingcartPromoPackagesID":null}', $kuntul);
							$jsone = json_decode($poss[1]);
							//	echo "\n\n$poss[1]\n\n";
							$ax1 = "0";
							$ax2 = "4";
							echo @color('yellow', "TANGGAL : \n");
							for ($ax1; $ax1 < $ax2; $ax1++) {
								$tanggale = $jsone->ResponseObject->ListSlot[$ax1]->DateLabel;
								$tanggalex = $jsone->ResponseObject->ListSlot[$ax1]->DateDayLabel;
								echo @color('nevy', "[{$ax1}]");
								echo "=> ";
								echo @color('yellow', "{$tanggale}");
								echo "\n";
								if ($tanggale == "") {
									break;
								}
							}
							echo @color('yellow', "PILIH : ");
							$tglee = trim(fgets(STDIN));
							switch ($tglee) {
								case '0':
									$tgle = $jsone->ResponseObject->ListSlot[0]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[0]->DateLabel;
									break;
								case '1':
									$tgle = $jsone->ResponseObject->ListSlot[1]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[1]->DateLabel;
									break;
								case '2':
									$tgle = $jsone->ResponseObject->ListSlot[2]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[2]->DateLabel;
									break;
								case '3':
									$tgle = $jsone->ResponseObject->ListSlot[3]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[3]->DateLabel;
									break;
								case '4':
									$tgle = $jsone->ResponseObject->ListSlot[4]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[4]->DateLabel;
									break;
								case '5':
									$tgle = $jsone->ResponseObject->ListSlot[5]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[5]->DateLabel;
									break;
							}
							$jumuke = explode('T', $tgle);
							$tgljmk = $jumuke[0];
							echo @color('yellow', "{$tagalex}\n");
							$axx1 = "0";
							$axx2 = "14";
							echo @color('yellow', "JAM AMBIL :\n");
							for ($axx1; $axx1 < $axx2; $axx1++) {
								$xs = $axx1 + 1;
								$jame = $jsone->ResponseObject->ListSlot[$tglee]->SlotPengiriman[$axx1]->SlotLabel;
								$pesane = $jsone->ResponseObject->ListSlot[$tglee]->SlotPengiriman[$axx1]->Message;
								echo @color('nevy', "[{$xs}]");
								echo "=> ";
								echo @color('yellow', "{$jame}, ");
								echo @color('red', "{$pesane}");
								echo "\n";
								if ($jame == "") {
									break;
								}
							}
							echo @color('yellow', "pilih : ");
							$jamambil = trim(fgets(STDIN));
							switch ($jamambil) {
								case '1':
									$jmbt = "07:00";
									break;
								case '2':
									$jmbt = "08:00";
									break;
								case '3':
									$jmbt = "09:00";
									break;
								case '4':
									$jmbt = "10:00";
									break;
								case '5':
									$jmbt = "11:00";
									break;
								case '6':
									$jmbt = "12:00";
									break;
								case '7':
									$jmbt = "13:00";
									break;
								case '8':
									$jmbt = "14:00";
									break;
								case '9':
									$jmbt = "15:00";
									break;
								case '10':
									$jmbt = "16:00";
									break;
								case '11':
									$jmbt = "17:00";
									break;
								case '12':
									$jmbt = "18:00";
									break;
								case '13':
									$jmbt = "19:00";
									break;
								case '14':
									$jmbt = "20:00";
									break;
							}
							if (strpos($poss[1], '"IsSuccess":true')) {
								$gass = curlx('https://api.klikindomaret.com/api/Cart/UpdateShippingMetohod?mfp_id=' . $respid, '{"AddressType":0,"AddressIDStore":"' . $addid . '","IStoreShippingDate":"' . $tgljmk . 'T00:00:00","IStorePreferTimeDelivery":"' . $jmbt . '","IStorePreferTimeShipping":"' . $jmbt . '","IPPServiceType":"","IsIPP":false,"AddressIDPlaza":"' . $addid . '","IPlazaShippingDate":"","IPPStoreCode":"","ShoppingCartID":"' . $SCID . '","IsDelivery":0,"RegionID":"' . $RegionID . '","IStoreDeliveryType":"REGULER","IStoreExpressOfflineLimit":0,"IStoreExpressDeliveryServiceFee":0,"MobileIstore":1,"MobileIPlaza":0,"PlazaDeliveryType":"","ShoppingcartPromoPackagesID":null,"DistrictId":' . $DistrictID . ',"StoreID":"' . $storeid . '","ShopZipCode":"' . $ZipCode . '"}', $kuntul);
								if (strpos($gass[1], '"Message":"success"')) {
									$createpay = curlx('https://api.klikindomaret.com/api/Payment/CreateId?Id=' . $SCID, null, $kuntul);
									$headers1 = array();
									$headers1[] = 'Host: payment.klikindomaret.com';
									$headers1[] = 'user-agent: klikindomaretmobile';
									$headers1[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,/;q=0.8';
									for ($i = 0; $i < 3; $i++) {
										$getpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments?pcid=klikindomaret&trxtype=createorder&SCTPCID=' . $SCID . '&LAT=null&LONG=null&DeviceID=' . urut(16), null, $headers1);
										//   echo "\n\n$getpay[1]\n\n";
										//save("$getpay[1]", 'getpay.txt');
										$linkx = get_between($getpay[1], '"hdTotalAmount" value="', '"');
										echo @color('nevy', "TOTAL : {$linkx}\n");
									}
									echo @color('yellow', "DAFTAR HIDANGAN :\n");
									echo @color('yellow', "[1] ISAKU\n");
									echo @color('yellow', "[2] BCA\n");
									echo @color('red', "[3] REKPON\n");
									echo @color('yellow', "[4] MANDIRI\n");
									echo @color('yellow', "[5] OVO\n");
									echo @color('yellow', "pilih : ");
									$bayar = trim(fgets(STDIN));
									switch ($bayar) {
										case '1':
											echo "Total : {$linkx}\n";
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											//  $submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"BPISAKU","TotalAmount":"'.$linkx.'","Token":"","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"i.Saku","useCoin":false,"potentialCoinShopee":"","Source":"Android"}', $parcel1);
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"BPISAKU","TotalAmount":"' . $linkx . '","Token":"","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"i.saku","IsFlashSale":"False","emailCustomer":"' . $nomor . '@klikindomaret.com","useCoin":false,"usePoint":false,"partialPointOVO":"0","potentialCoinShopee":"","Source":"MobileSite-Android","Client":"klikindomaret"}', $parcel1);
											echo "\n\n {$submitpay[1]}\n\n";
											$k = json_decode($submitpay[1])->Trxid;
											$lk = str_replace('TIM', '', $k);
											echo shell_exec("xdg-open 'https://barcode.tec-it.com/barcode.ashx?data='{$lk}'&code=Code128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&codepage=Default&qunit=Mm&quiet=10&hidehrt=False'");
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											//	echo "\n\n $sttpay[1]\n\n";
											sleep(5);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->StatusPembayaran;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$lk}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $TransactionCode . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "\n", 'transaksiIsaku.txt');
											unlink('nganue.txt');
											break;
										case '2':
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											// $submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"VTBMRI ","TotalAmount":"'.$linkx.'","Token":"","IsCoupon":"1","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":true,"Source":"Android"}', $parcel1);
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"702","TotalAmount":"' . $linkx . '","Token":"","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"BCA Virtual Account","IsFlashSale":"False","emailCustomer":"' . $nomor . '@klikindomaret.com","useCoin":false,"usePoint":false,"partialPointOVO":"0","potentialCoinShopee":"","Source":"MobileSite-Android","Client":"klikindomaret"}', $parcel1);
											// echo "\n\n$submitpay[1]\n\n";
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->StatusPembayaran;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											   $dircrot = $sttp[0]->Referer;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
										
									echo " {$Yellow}➤{$White} Payment Redirect	 : " . $dircrot . "\n";
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "KODE VA: ");
											echo @color('nevy', "{$PaymentAccountID}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $TransactionCode . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "|Kode VA :" . $PaymentAccountID . "\n", 'transaksiBCA.txt');
											unlink('nganue.txt');
											break;
										case '3':
											echo @color('yellow', "Masukkan token: ");
											$tokentt = trim(fgets(STDIN));
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"RKPON","TotalAmount":"' . $linkx . '","Token":"' . $tokentt . '","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"CIMB Niaga Rekening Ponsel","useCoin":false,"potentialCoinShopee":"","Source":"Android"}', $parcel1);
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->StatusPembayaran;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											   $dircrot = $sttp[0]->Referer;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
										
									echo " {$Yellow}➤{$White} Payment Redirect	 : " . $dircrot . "\n";
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "KODE VA: ");
											echo @color('nevy', "{$PaymentAccountID}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $TransactionCode . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "|Kode VA :" . $PaymentAccountID . "\n", 'transaksiREKPON.txt');
											unlink('nganue.txt');
											break;
										case '4':
											echo "Total : {$linkx}\n";
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											//  $submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"BPISAKU","TotalAmount":"'.$linkx.'","Token":"","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"i.Saku","useCoin":false,"potentialCoinShopee":"","Source":"Android"}', $parcel1);
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"VTBMRI","TotalAmount":"' . $linkx . '","Token":"","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"Mandiri Virtual Account","IsFlashSale":"False","emailCustomer":"' . $nomor . '@klikindomaret.com","useCoin":false,"usePoint":false,"partialPointOVO":"0","potentialCoinShopee":"","Source":"MobileSite-Android","Client":"klikindomaret"}', $parcel1);
											// echo "\n\n $submitpay[1]\n\n";
											$k = json_decode($submitpay[1])->Trxid;
											$lk = str_replace('TIM', '', $k);
											//	echo shell_exec("xdg-open 'https://barcode.tec-it.com/barcode.ashx?data='$lk'&code=Code128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&codepage=Default&qunit=Mm&quiet=10&hidehrt=False'");
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											//	echo "\n\n $sttpay[1]\n\n";
											sleep(5);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->PaymentAccountID;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $sttbayar . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "\n", 'transaksimandiri.txt');
											unlink('nganue.txt');
											break;
										case '5':
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"BPOVO","TotalAmount":"' . $linkx . '","Token":"","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"OVO","IsFlashSale":"False","emailCustomer":"' . $nomor . '@klikindomaret.com","useCoin":false,"usePoint":false,"partialPointOVO":"0","potentialCoinShopee":"","Source":"MobileSite-Android","Client":"klikindomaret"}', $parcel1);
											echo @color('purple', "\n\n{$submitpay[1]}\n\n");
											$data = json_decode($submitpay[1]);
											$url = $data->Url;
											echo @color('green', "\n\n{$url}\n\n");
											$pecah = explode('&', $url);
											$tok = $pecah[3];
											$tokenn = str_replace('token=', '', $tok);
											$tnxid = $pecah[0];
											$clientTxnId = str_replace('https://cb.ovo.id/cellblockui/v2/paymentPin?clientTxnId=', '', $tnxid);
											$dest = $pecah[5];
											$destination = str_replace('destination=', '', $dest);
											$stat = $pecah[6];
											$state = str_replace('destination=', '', $stat);
											// echo @color('yellow ', "MASUKKAN TOKEN AKSES");
											// $tokenn = trim(fgets(STDIN));
											// echo @color('yellow ', "MASUKKAN TNX ID");
											// $clientTxnId = trim(fgets(STDIN));
											// echo @color('yellow ', "MASUKKAN DESTINATIOn");
											// $destination = trim(fgets(STDIN));
											// echo @color('yellow ', "MASUKKAN STATE");
											// $state = trim(fgets(STDIN));
											$post01 = '{"action":"payment","clientTxnId":"' . $clientTxnId . '","destination":"' . $destination . '","state":"' . $state . '","submissionType":"redirect","token":"' . $tokenn . '","encryptedPin":"mwLP7EOdiBgUtYpFtKM352d5Gp8cnYjqTL3SXSZOmuKd4z/UKf6eX6ButjmX2lgOCzP5DQxssMrF1fn9T8569aNeTWD4nF//514wo5kfCI3DYbMdQHbXZlBeOv5k9tS4z4EIvTAOFM3FZAzM5zd/ha7AnHsoGIv1yKBk6/hpjHiV9dqOaoNWQbETzFVp7JMDFEHnQdTsKIAX/nvApZ5iXViQb/e82d0cJLgvH2jPs8HwtDcdbRCMEBmzzAVYYzERrH4uxTtYFHigV4Rkue1P+yJDZZzHSAQzlauxVa21EB6JL0HzhdOOeaBd1nnznFkr9XrU5lkKKNlaA9UVd5NWHw=="}';
											$str = strlen($post01);
											$parcel11 = array();
											$parcel11[] = 'Host: apigw-fe.ovo.id';
											$parcel11[] = 'content-length: ' . $str;
											$parcel11[] = 'authorization: Bearer ' . $tokenn;
											$parcel11[] = 'Origin: https://cb.ovo.id';
											$parcel11[] = 'client-id: oamerchantar';
											$parcel11[] = 'user-agent: okhttp/4.9.3';
											$parcel11[] = 'content-type: application/json';
											$parcel11[] = 'Accept: */*';
											// $parcel11[] = 'accept-encoding: gzip, deflate, br';
											$parcel11[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											$gasin = curlx('https://apigw-fe.ovo.id/user/v1/oauth/securitycode/verify', $post01, $parcel11);
											echo @color('nevy', "\n\n{$gasin[1]}\n\n");
											$data = json_decode($gasin[1]);
											// $Url = $data->Url
											$thx = curlx('https://thankyoupage.klikindomaret.com/?client=klik&transactioncode=' . $clientTxnId, null, $kuntul);
											echo @color('purple', "\n\n{$thx[1]}\n\n");
											$thx = array();
											$thx[] = 'Content-Type: application/json';
											$thx[] = 'Host: after-sales-service-api.klikindomaret.com';
											$thx[] = 'Applicationkey: indomaret';
											$thx[] = 'Authorization: Bearer ' . $toked;
											$thx[] = 'User-Agent: okhttp/3.12.1';
											$thx2 = curlx("https://after-sales-service-api.klikindomaret.com/api/Payment/DetailPaymentThankyouPage?TransactionCode={$clientTxnId}&TypeCode=", null, $thx);
											echo @color('purple', "\n\n{$thx2[1]}\n\n");
											// echo "\n\n$submitpay[1]\n\n";
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											echo @color('purple', "\n\n{$sttpay[1]}\n\n");
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->StatusPembayaran;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											   $dircrot = $sttp[0]->Referer;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
										
									echo " {$Yellow}➤{$White} Payment Redirect	 : " . $dircrot . "\n";
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "KODE VA: ");
											echo @color('nevy', "{$PaymentAccountID}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $TransactionCode . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "|Kode VA :" . $PaymentAccountID . "\n", 'transaksiBCA.txt');
											unlink('nganue.txt');
											break;
									}
								} else {
									echo @color('red', "{$gass[1]}\n");
								}
							} else {
								echo @color('red', "{$poss[1]}\n");
							}
							break;
					}
				}
			} else {
				echo "{$responx}\n";
			}
			$no++;
		}
		break;
	case '6':
		masal2x:
		echo "Masukkan Password : ";
		$password = trim(fgets(STDIN));
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masal2x;
		}
		$lines = file($file, FILE_IGNORE_NEW_LINES);
		print_r($lines);
		echo "Start baris ke : ";
		$start = trim(fgets(STDIN));
		echo "Sampai baris ke : ";
		$endd = trim(fgets(STDIN));
		$filex = retrieveText($file, $start, $endd);
		$list = explode("\n", str_replace("\r", "", $filex));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			unlink('nganue.txt');
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			echo @color('nevy', "{$nomor}\n");
			$DEVICE_ID = urut(16);
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $password . '"}', $kuntul2x);
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$responx = $cekvcne[1];
			if (strpos($responx, '"IsActivated":true')) {
				$cok = json_decode($responx);
				$ID = $cok[0]->ID;
				$RegionId = $cok[0]->RegionId;
				$toko = $cok[0]->StoreDefault;
				$getscid = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=00000000-0000-0000-0000-000000000000&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $toko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
				$za = json_decode($getscid[1]);
				if (strpos($getscid[1], '"Message":"An error has occurred."')) {
					echo @color('red', "ERROR KAK\n");
				} else {
					$scid = $za[0]->ID;
					$cekk = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $scid . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $toko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
					$json = json_decode($cekk[1]);
					foreach ($json[0]->CartItemNotification->Items as $mydata) {
						$cx = $mydata;
						foreach ($cx->ShoppingCartItems as $myxxx) {
							$idne = $myxxx->ID;
							$hapus = curlx('https://api.klikindomaret.com/api/ShoppingCart/RemoveCartItem?regionID=' . $RegionId, '{"CartId":"' . $scid . '","CartItemId":"' . $idne . '","PackagePermalink":""}', $kuntul);
							if (strpos($hapus[1], '"IsSuccess":true')) {
								echo @color('green', "Sukses Hapus item \n");
								$sisane = curlx('https://api.klikindomaret.com/api/ShoppingCart/GetMyCartCount?customerId=9e5c6a58-2c6b-43b6-ae83-99cbc3dd280f', null, $kuntul);
								echo @color('nevy', "Sisa Item di keranjang: ");
								echo @color('yellow', "{$sisane[1]}\n");
							} else {
								echo @color('red', "X\n");
							}
						}
					}
				}
				$no++;
			} else {
				echo @color('red', "{$responx}\n");
			}
		}
		break;
	case '7':
		masal3x:
		echo "Masukkan Password : ";
		$password = trim(fgets(STDIN));
		echo "Nomor Akun : ";
		$nomor = trim(fgets(STDIN));
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masal3x;
		}
		$list = explode("\n", str_replace("\r", "", file_get_contents($file)));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			$akunxx = explode(';', trim($kode));
			$toko = strtoupper(trim($akunxx[0]));
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curl('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $password . '"}', $kuntul2x);
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curl('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$responx = $cekvcne[1];
			if (strpos($responx, '"IsActivated":true')) {
				$cok = json_decode($responx);
				$ID = $cok[0]->ID;
				$RegionId = $cok[0]->RegionId;
				$storeid = $cok[0]->StoreDefault;
				$getscid = curl('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=00000000-0000-0000-0000-000000000000&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $storeid . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . urut(16) . '&ShoppingcartPromoPackagesID=', null, $kuntul);
				$za = json_decode($getscid[1]);
				$scid = $za[0]->ID;
				$setaddress = curl('https://api.klikindomaret.com/api/ShoppingCart/ReCheckStockAllItem?ShoppingCartID=' . $scid . '&StoreCode=' . $toko . '&AddressType=0&CustomerAddressID=00000000-0000-0000-0000-000000000000&CustomerID=' . $ID . '&StoreCodeDest=&CustomerLatitude=&CustomerLongitude=', null, $kuntul);
				if (strpos($setaddress[1], '"Success":true')) {
					$datatoko = json_decode($setaddress[1])[0];
					$tokone = $datatoko->ResponseObject->StoreCode;
					$tokone2 = $datatoko->ResponseObject->StoreName;
					$tokone3 = $datatoko->ResponseObject->StoreAddress;
					echo @color('yellow', "Kode Toko: ");
					echo @color('nevy', "{$tokone}\n");
					echo @color('yellow', "Toko : ");
					echo @color('nevy', "{$tokone2} - {$tokone3}\n");
					save("=======================\nKode Toko: {$tokone}\nToko : {$tokone2} - {$tokone3}\n", 'stoktoko.txt');
					foreach ($datatoko->ResponseObject->Items as $mydata) {
						$barang = $mydata->ProductDesc;
						$qty = $mydata->QtyAvailable;
						echo @color('yellow', "Item : ");
						echo @color('nevy', "{$barang}\n");
						echo @color('yellow', "Stok : ");
						echo @color('nevy', "{$qty}\n");
						save("Item : {$barang}\nStok : {$qty}\n", 'stoktoko.txt');
					}
					save("=======================\n", 'stoktoko.txt');
					echo @color('yellow', "Tersimpan di stoktoko.txt\n");
					echo "\n";
				} else {
					echo @color('red', "{$setaddress[1]}\n");
				}
				$no++;
			} else {
				echo @color('red', "{$responx}\n");
			}
		}
		break;
	case '8':
		masal4x:
		echo "Masukkan Password : ";
		$password = trim(fgets(STDIN));
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masal4x;
		}
		$lines = file($file, FILE_IGNORE_NEW_LINES);
		print_r($lines);
		echo "Start baris ke : ";
		$start = trim(fgets(STDIN));
		echo "Sampai baris ke : ";
		$endd = trim(fgets(STDIN));
		$filex = retrieveText($file, $start, $endd);
		$list = explode("\n", str_replace("\r", "", $filex));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			unlink('nganue.txt');
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			echo @color('nevy', "{$nomor}\n");
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $password . '"}', $kuntul2x);
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$responx = $cekvcne[1];
			if (strpos($responx, '"IsActivated":true')) {
				$cok = json_decode($responx);
				$ID = $cok[0]->ID;
				$RegionId = $cok[0]->RegionId;
				$toko = $cok[0]->StoreDefault;
				$getscid = curlx('https://api.klikindomaret.com/api/ShoppingCart/GetLastestShop?customerID=' . $ID . '&regionID=' . $RegionId, null, $kuntul);
				$za = json_decode($getscid[1]);
				if (strpos($getscid[1], '"Message":"An error has occurred."')) {
					echo color('red', "ERROR KAK\n");
				} else {
					$scid = $za[0];
					$cekk = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
					$json = json_decode($cekk[1]);
					//print_r($json);
					foreach ($json as $mydata) {
						$kodene = $mydata->TransactionCode;
						$cekkode = curlx('https://api.klikindomaret.com/api/Payment/DetailPayment?TransactionCode=' . $kodene . '&TypeCode=', null, $kuntul);
						$hasil = json_decode($cekkode[1])[0];
						$pine = $hasil->IStore->PINIndoPaket;
						$toko = $hasil->IStore->KodeToko;
						$almt = $hasil->StoreCustomerStreet;
						$nama = $hasil->IStore->ReceiverName;
						$noe = $hasil->CustomerMobile;
						$waktu = $hasil->IStore->WaktuPengiriman;
						$kodetrx = $hasil->JoinedSONumber;
						if ($pine !== null) {
							echo @color('yellow', "Kode Transaksi : ");
							echo @color('nevy', "{$kodetrx}\n");
							echo @color('yellow', "Nama : ");
							echo @color('nevy', "{$nama}\n");
							echo @color('yellow', "Nomor : ");
							echo @color('nevy', "{$noe}\n");
							echo @color('yellow', "Toko : ");
							echo @color('nevy', "{$toko} {$almt}\n");
							echo @color('yellow', "Waktu Pengambilan: ");
							echo @color('nevy', "{$waktu}\n");
							echo @color('yellow', "PIN Transaksi : ");
							echo @color('nevy', "{$pine}\n");
							echo "Item: \n";
							foreach ($hasil->IStore->ItemDetail as $mydata) {
								$brg = $mydata->Nama;
								$qty = $mydata->Qty;
								echo @color('nevy', "{$brg} ");
								echo "X";
								echo @color('yellow', "{$qty}\n");
							}
							echo @color('yellow', "Tersimpan di pin.txt\n");
							echo "\n";
							save("KodeTransaksi:" . $kodetrx . "|PIN_Transaksi:" . $pine . "|Nama:" . $nama . "|Nomor:" . $noe . "|WaktuAmbil:" . $waktu . "|KodeToko:" . $toko . "\n", 'pin.txt');
						}
					}
				}
				$no++;
			} else {
				echo @color('red', "{$responx}\n");
			}
		}
		break;
	case '9':
		echo "Masukkan Password : ";
		$password = trim(fgets(STDIN));
		echo " Kode Toko : ";
		$toko = trim(fgets(STDIN));
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		$lines = file($file, FILE_IGNORE_NEW_LINES);
		print_r($lines);
		echo "Start baris ke : ";
		$start = trim(fgets(STDIN));
		echo "Sampai baris ke : ";
		$endd = trim(fgets(STDIN));
		$filex = retrieveText($file, $start, $endd);
		$list = explode("\n", str_replace("\r", "", $filex));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			unlink('nganue.txt');
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			echo @color('nevy', "{$nomor}\n");
			echo "{$toko}\n";
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $password . '"}', $kuntul2x);
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://api.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul);
			$responx = $cekvcne[1];
			if (strpos($responx, '"IsActivated":true')) {
				$cok = json_decode($responx);
				$ID = $cok[0]->ID;
				$RegionId = $cok[0]->RegionId;
				$getscid = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=00000000-0000-0000-0000-000000000000&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $toko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . urut(16) . '&ShoppingcartPromoPackagesID=', null, $kuntul);
				$za = json_decode($getscid[1]);
				if (strpos($getscid[1], '"Message":"An error has occurred."')) {
					echo @color('red', "ERROR KAK\n");
				} else {
					if ($getscid[1] == []) {
						echo @color('red', "KERANJANG KOSONG KAK\n");
					} else {
						$scid = $za[0]->ID;
						for ($i = 0; $i < 3; $i++) {
							$gets = curl('https://api.klikindomaret.com/api/CustomerAddress/GetByCustomerId?custId=' . $ID, null, $kuntul);
						}
						$getx = curl('https://api.klikindomaret.com/api/Store/GetListAutoComplete?StoreCode=' . $toko . '&customerLatitude=&customerLongitude=', null, $kuntul);
						$setaddress = curl('https://api.klikindomaret.com/api/ShoppingCart/ReCheckStockAllItem?ShoppingCartID=' . $scid . '&StoreCode=' . $toko . '&AddressType=0&CustomerAddressID=00000000-0000-0000-0000-000000000000&CustomerID=' . $ID . '&StoreCodeDest=&CustomerLatitude=&CustomerLongitude=', null, $kuntul);
						if (strpos($setaddress[1], '"Success":true')) {
							$datatoko = json_decode($setaddress[1])[0]->ResponseObject->StoreName;
							$datatoko2 = json_decode($setaddress[1])[0]->ResponseObject->StoreAddress;
							$datatoko3 = json_decode($setaddress[1])[0]->ResponseObject->RegionName;
							$datatoko4 = json_decode($setaddress[1])[0]->ResponseObject->DistrictName;
							echo @color('yellow', "Kode Toko   : ");
							echo @color('nevy', "{$toko}\n");
							echo @color('yellow', "Nama Toko   : ");
							echo @color('nevy', "{$datatoko}\n");
							echo @color('yellow', "Alamat Toko : ");
							echo @color('nevy', "{$datatoko2}\n");
							echo @color('yellow', "Region Toko : ");
							echo @color('nevy', "{$datatoko3}\n");
							echo @color('yellow', "Distrik Toko: ");
							echo @color('nevy', "{$datatoko4}\n");
						} else {
							echo @color('red', "GAGAL\n");
							echo @color('red', "{$setaddress[1]}\n");
						}
						for ($i = 0; $i < 3; $i++) {
							$getss = curl('https://api.klikindomaret.com/api/CustomerAddress/GetByCustomerId?custId=' . $ID, null, $kuntul);
						}
						$getc = curl('https://api.klikindomaret.com/api/Store/GetListByAreaWilayahStore?Lat=&Long=', null, $kuntul);
						$setaddressxx = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/SetAddressTypeAndDefaultStore?mfp_id=' . $respid . '&isChangeAddress=False&ShoppingCartID=00000000-0000-0000-0000-000000000000', '{"CustomerID":"' . $ID . '","AddressType":0,"StoreCode":"' . $toko . '","StoreCodeDest":""}', $kuntul2);
						if (strpos($setaddressxx[1], '"Message":"success"')) {
							echo @color('green', "Sukses ganti\n");
						} else {
							echo @color('red', "GAGAL\n");
							echo @color('red', "{$setaddressxx[1]}\n");
						}
					}
				}
				$no++;
			} else {
				echo @color('red', "{$responx}\n");
			}
		}
		break;
	case '10':
		masal3sx:
		echo @color('yellow', "Masukkan Password : ");
		$password = trim(fgets(STDIN));
		echo @color('yellow', "Masukkan zipcode: ");
		$zipcone = trim(fgets(STDIN));
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masal3sx;
		}
		$list = explode("\n", str_replace("\r", "", file_get_contents($file)));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			unlink('nganue.txt');
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $password . '"}', $kuntul2x);
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$responx = $cekvcne[1];
			if (strpos($responx, '"IsActivated":true')) {
				$cok = json_decode($responx);
				$ID = $cok[0]->ID;
				$FName = $cok[0]->FName;
				$LName = $cok[0]->LName;
				$RegionId = $cok[0]->RegionId;
				$storeid = $cok[0]->StoreDefault;
				$awl = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/GetWhitelistZipCode?mfp_id=' . $respid, null, $kuntul2);
				$getprov = curlx('https://api.klikindomaret.com/api/CustomerAddress/GetProvince?mfp_id=' . $respid, null, $kuntul2);
				$kuntol = array();
				$kuntol[] = 'Content-Type: application/json';
				$kuntol[] = 'Host: api.klikindomaret.com';
				$kuntol[] = 'User-Agent: okhttp/3.12.1';
				$getzip = curlx('https://api-content.klikindomaret.com/api/Store/AUTOCOMPLETE_ZIPCODE_DISTRICTS_CITY_REGION?mfp_id=' . $respid . '&key=' . $zipcone, null, $kuntol);
				$sds = json_decode($getzip[1]);
				$distrik = $sds[0]->Districts;
				$disterik = urlencode($distrik);
				$getful = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/AUTOCOMPLETE_ADRESSBY_ZIPCODE?key=' . $zipcone . '&districtname=' . $disterik . '&mfp_id=' . $respid, null, $kuntul2);
				$asdasd = json_decode($getful[1]);
				$ProvinsiID = $asdasd[0]->ProvinsiID;
				$KotaID = $asdasd[0]->KotaID;
				$KecamatanID = $asdasd[0]->KecamatanID;
				$KelurahanID = $asdasd[0]->KelurahanID;
				$Kecamatan = $asdasd[0]->Kecamatan;
				$Provinsi = $asdasd[0]->Provinsi;
				$Kota = $asdasd[0]->Kota;
				$model = ['Kenanga indah 2', 'mawar melati indah', 'bangka 11', 'sulawesi', 'murai sawah 4', 'lokasi baru jaya', 'sumbawa gang 3', 'delima 009', 'bilikanger ', 'imam bonjol 3', 'gunawangsa', 'batu aji', 'Songgoriti indah jaya', 'kuningan sari', 'lomba sapi', 'majumapan'];
				$modelhp = $model[rand(0, 15)];
				$postalamat = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/InsertAddress?mfp_id=' . $respid, '{"ID":"00000000-0000-0000-0000-000000000000","AddressTitle":"Rumah","CustomerID":"' . $ID . '","Phone":"' . $nomor . '","Street":"Jalan ' . $modelhp . '","Street2":"","Street3":"","District":"' . $distrik . '","ZipCode":"' . $zipcone . '","IsDefault":true,"ProvinceId":"' . $ProvinsiID . '","CityId":"' . $KecamatanID . '","Region":"' . $KotaID . '","CityLabel":"' . $Kecamatan . '","ProvinceName":"' . $Provinsi . '","RegionName":"' . $Kota . '","DistrictId":"' . $KelurahanID . '","ReceiverName":"' . $FName . ' ' . $LName . '","ReceiverPhone":"' . $nomor . '","GoogleAddress":""}', $kuntul2);
				if (strpos($postalamat[1], '"Message":"success"')) {
					echo @color('green', "SUKSES ISI ALAMAT\n");
				} else {
					echo @color('red', "{$postalamat[1]}\n");
				}
				$no++;
			} else {
				echo @color('red', "{$responx}\n");
			}
		}
		unlink('nganue.txt');
		break;
	case '11':
		masal3sxa:
		echo @color('yellow', "Masukkan Password : ");
		$password = trim(fgets(STDIN));
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masal3sxa;
		}
		$list = explode("\n", str_replace("\r", "", file_get_contents($file)));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			unlink('nganue.txt');
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $password . '"}', $kuntul2x);
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$responx = $cekvcne[1];
			if (strpos($responx, '"IsActivated":true')) {
				$cok = json_decode($responx);
				$ID = $cok[0]->ID;
				$getaddress = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/GetByCustomerId?custId=' . $ID, null, $kuntul2);
				if ($getaddress[1] == '[]') {
					echo @color('red', "ALAMAT KOSONG\n");
				} else {
					$addidx = json_decode($getaddress[1]);
					$addid = $addidx[0]->ID;
					$delete = curlx('https://account-api-v2.klikindomaret.com/api/Customer/DeleteAddress?customerID=' . $ID . '&id=' . $addid . '&mfp_id=' . $respid, null, $kuntul2);
					echo @color('green', "{$delete[1]}\n");
				}
				$no++;
			} else {
				echo @color('red', "{$responx}\n");
			}
		}
		unlink('nganue.txt');
		break;
	case '12':
		masalxvx:
		echo "[+] Masukkan Password: ";
		$password = trim(fgets(STDIN));
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masalxvx;
		}
		$list = explode("\n", str_replace("\r", "", file_get_contents($file)));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			unlink('nganue.txt');
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			$vocer = trim($akunxx[1]);
			tempelllza:
			$kodetokox = "TB01";
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $password . '"}', $kuntul2x);
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$responx = $cekvcne[1];
			if (strpos($responx, '"IsActivated":true')) {
				$cok = json_decode($responx);
				$ID = $cok[0]->ID;
				$RegionId = $cok[0]->RegionId;
				$getscid = curl('https://api.klikindomaret.com/api/ShoppingCart/GetLastestShop?customerID=' . $ID . '&regionID=' . $RegionId, null, $kuntul);
				//echo "$getscid[1]\n";
				$za = json_decode($getscid[1]);
				if (strpos($getscid[1], '"Message":"An error has occurred."')) {
					echo @color('red', "ERROR KAK\n");
				} else {
					$scid = $za[0];
					$setaddress = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/SetAddressTypeAndDefaultStore?mfp_id=' . $respid . '&isChangeAddress=False&ShoppingCartID=' . $scid, '{"CustomerID":"' . $ID . '","AddressType":0,"StoreCode":"' . $kodetokox . '","StoreCodeDest":""}', $kuntul2);
					echo "{$setaddress[1]}\n";
					$setaddress2 = curlx('https://api.klikindomaret.com/api/ShoppingCart/ReCheckStockAllItem?ShoppingCartID=' . $scid . '&StoreCode=' . $kodetokox . '&AddressType=0&CustomerAddressID=00000000-0000-0000-0000-000000000000&CustomerID=' . $ID . '&StoreCodeDest=&CustomerLatitude=&CustomerLongitude=', null, $kuntul);
					for ($i = 0; $i < 2; $i++) {
						$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=2&pId=9c14783e-4920-4193-b2ea-c9e63e4e5e69&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetokox . '&StoreCodeDest=', null, $kuntul);
						$stt = json_decode($addproduk[1])[0]->Message;
						$SCID = json_decode($addproduk[1])[0]->ResponseID;
						echo @color('green', "{$stt}\n");
						$addproduk2 = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=2&pId=e946f2ae-96ba-457b-94f3-b1bd978ef14c&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetokox . '&StoreCodeDest=', null, $kuntul);
						$stt2 = json_decode($addproduk2[1])[0]->Message;
						$SCID = json_decode($addproduk[1])[0]->ResponseID;
						echo @color('green', "{$stt2}\n");
					}
					echo @color('blue', "OTW REDEEM VOCER KLIK ... \n");
					$datane = '{"Code":"' . $vocer . '","ShoppingCartID":"' . $SCID . '","CustomerID":"' . $ID . '","RegionID":"' . $RegionId . '","SalesOrderNo":"","Nominal":"","DeviceID":"' . urut(16) . '","ShoppingCartPackageID":null}';
					$kupon = curlx('https://api.klikindomaret.com/api/Voucher/BookingVoucherCoupon?mfp_id=' . $respid, $datane, $kuntul);
					$kimak = json_decode($kupon[1]);
					$ket = $kimak->ResponseObject->keterangan;
					if (strpos($kupon[1], '"status":"SUCCESS"')) {
						echo @color('green', "BERHASIL GAN\n");
						echo @color('nevy', "{$ket}\n");
						echo @color('blue', "{$nomor}\n");
						echo @color('yellow', "Akun berhasil disimpan di akunklikbervocer.txt\n");
						save("{$nomor}\n", "akunklikbervocer.txt");
					} elseif (strpos($kupon[1], 'ShopingCart tidak boleh kosong')) {
						goto tempelllza;
					} else {
						echo @color('red', "{$ket}\n");
					}
					#########################################
					echo @color('blue', "OTW REDEEM BABY10 ... \n");
					$datane = '{"Code":"BABY10","ShoppingCartID":"' . $SCID . '","CustomerID":"' . $ID . '","RegionID":"' . $RegionId . '","SalesOrderNo":"","Nominal":"","DeviceID":"' . urut(16) . '","ShoppingCartPackageID":null}';
					$kupon = curlx('https://api.klikindomaret.com/api/Voucher/BookingVoucherCoupon?mfp_id=' . $respid, $datane, $kuntul);
					$kimak = json_decode($kupon[1]);
					$ket = $kimak->ResponseObject->keterangan;
					if (strpos($kupon[1], '"status":"SUCCESS"')) {
						echo @color('green', "BERHASIL GAN\n");
						echo @color('nevy', "{$ket}\n");
						echo @color('blue', "{$nomor}\n");
						echo @color('yellow', "Akun berhasil disimpan di akunklikbervocer.txt\n");
						save("{$nomor}\n", "akunklikbervocerBABY10.txt");
					} elseif (strpos($kupon[1], 'ShopingCart tidak boleh kosong')) {
						goto tempelllza;
					} else {
						echo @color('red', "{$ket}\n");
					}
				}
			} else {
				echo "{$responx}\n";
			}
			$no++;
		}
		break;
	case '13':
		searchproduk:
		echo @color('nevy', "Search Key: ");
		$key = trim(fgets(STDIN));
		$key = urlencode($key);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://api-catalog.klikindomaret.com/api/Product/GetPaging?regionID=353801d5-28d6-4190-9b2d-327e89c4d98f&Page=1&PageSize=50&SortCol=Latest&SortDir=DESC&SearchKey=' . $key . '&StartPrice=&EndPrice=&USERID=023e5448-2442-4e0b-af57-250ee44f2e84&mfp_id=111a355f-7fd1-46ab-aa24-803f7e97d9b9&StoreCode=T71T&platform=ANDROID&addressType=1&latitude=-2.994048&longitude=104.820175&StoreCodeDest=&WarehouseCode=TMDD&WarehouseDCICode=TWPG&WarehouseMitraCode=&IsLogin=true&Client=KLIK');
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
		$headers = array();
		$headers[] = 'Content-Type: application/json';
		$headers[] = 'Connection: close';
		$headers[] = 'Accept-Encoding: gzip, deflate';
		$headers[] = 'User-Agent: okhttp/3.12.1';
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			echo 'Error:' . curl_error($ch);
		}
		curl_close($ch);
		$sttr = json_decode($result);
		$json = json_decode($result);
		pilihprodukx:
		$ajgjuga = json_decode($result, true);
		$listno = 0;
		$pocerAmbil = array();
		$nominalAmbil = array();
		foreach ($ajgjuga[0]["ProductList"] as $pocer) {
			$pocernyah = $pocer['Description'];
			$pocerid = $pocer['ID'];
			$harga = $pocer['ValidPrice'];
			echo @color('nevy', "[{$listno}]");
			echo ". ";
			echo @color('yellow', "{$pocernyah} ");
			echo @color('green', "=>> Rp {$harga}");
			echo "\n";
			$listno = $listno + 1;
		}
		echo @color('nevy', "JIKA TIDAK ADA ATAU MERUBAH PENCARIAN KETIK : ");
		echo @color('red', "x\n");
		echo @color('yellow', "PILIH PRODUK : ");
		$pilihproduk = trim(fgets(STDIN));
		if ($pilihproduk == 'x') {
			goto searchproduk;
		} else {
			$produk = @$ajgjuga[0]["ProductList"][$pilihproduk]["ID"];
		}
		echo @color('yellow', "JUMLAH : ");
		$qty = trim(fgets(STDIN));
		masal2xxx:
		echo "Masukkan kode toko: ";
		$kodetoko = trim(fgets(STDIN));
		echo "Masukkan Password : ";
		$password = trim(fgets(STDIN));
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masal2xxx;
		}
		$lines = file($file, FILE_IGNORE_NEW_LINES);
		print_r($lines);
		echo "Start baris ke : ";
		$start = trim(fgets(STDIN));
		echo "Sampai baris ke : ";
		$endd = trim(fgets(STDIN));
		$filex = retrieveText($file, $start, $endd);
		$list = explode("\n", str_replace("\r", "", $filex));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			unlink('nganue.txt');
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $password . '"}', $kuntul2x);
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$responx = $cekvcne[1];
			if (strpos($responx, '"IsActivated":true')) {
				$cok = json_decode($responx);
				$ID = $cok[0]->ID;
				$RegionId = $cok[0]->RegionId;
				$getscid = curlx('https://api.klikindomaret.com/api/ShoppingCart/GetLastestShop?customerID=' . $ID . '&regionID=' . $RegionId, null, $kuntul);
				//echo "$getscid[1]\n";
				$za = json_decode($getscid[1]);
				if (strpos($getscid[1], '"Message":"An error has occurred."')) {
					echo @color('red', "ERROR KAK\n");
				} else {
					$scid = $za[0];
					if ($scid !== []) {
						$SCID = $scid;
					}
					$getaddress = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/GetByCustomerId?custId=' . $ID, null, $kuntul2);
					if ($getaddress[1] == '[]') {
						$addid = '00000000-0000-0000-0000-000000000000';
					} else {
						$addidx = json_decode($getaddress[1]);
						$addid = $addidx[0]->ID;
						$longe = $addidx[0]->Longitude;
						$late = $addidx[0]->Latitude;
					}
					$setaddress = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/SetAddressTypeAndDefaultStore?mfp_id=' . $respid . '&isChangeAddress=False&ShoppingCartID=' . $scid, '{"CustomerID":"' . $ID . '","AddressType":0,"StoreCode":"' . $kodetoko . '","StoreCodeDest":""}', $kuntul2);
					// echo "$setaddress[1]\n";
					$setaddress2 = curlx('https://api.klikindomaret.com/api/ShoppingCart/ReCheckStockAllItem?ShoppingCartID=' . $scid . '&StoreCode=' . $kodetoko . '&AddressType=0&CustomerAddressID=' . $addid . '&CustomerID=' . $ID . '&StoreCodeDest=&CustomerLatitude=&CustomerLongitude=', null, $kuntul);
					$addproduk = curlx('https://api.klikindomaret.com/api/ShoppingCart/ModifyCart?regionID=' . $RegionId . '&scId=&cId=' . $ID . '&cartRef=mobile&mod=add&id=&isPair=false&mfp_id=' . $respid . '&qty=' . $qty . '&pId=' . $produk . '&Origin=Android&NearestStoreLocation=&ChildDOB=&CustomerLatitude=&CustomerLongitude=&StoreCode=' . $kodetoko . '&StoreCodeDest=', null, $kuntul);
					if (strpos($addproduk[1], '"Success":true')) {
						$SCID = json_decode($addproduk[1])[0]->ResponseID;
						$stt = json_decode($addproduk[1])[0]->Message;
						echo @color('green', "{$stt}\n");
					} else {
						$stt = json_decode($addproduk[1])[0]->ErrorMessage;
						$stt1 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyOrder;
						$stt2 = json_decode($addproduk[1])[0]->ResponseObject->Items[0]->QtyAvailable;
						echo @color('red', "{$stt}\n");
						echo @color('red', "Jumlah Order : {$stt1}\n");
						echo @color('red', "Jumlah Stock : {$stt2}\n");
					}
					$DEVICE_ID = urut(16);
					$cekk = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $SCID . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $kodetoko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
					$json = json_decode($cekk[1]);
					$tokonejon = $json[0]->CheckStockModel->StoreCode;
					$tokonejon1 = $json[0]->CheckStockModel->StoreName;
					$tokonejon2 = $json[0]->CheckStockModel->StoreAddress;
					$storeid = $json[0]->CheckStockModel->StoreID;
					$RegionID = $json[0]->CheckStockModel->RegionID;
					$DistrictID = $json[0]->CheckStockModel->DistrictID;
					$gettoko = curlx('https://api.klikindomaret.com/api/Store/GetAllStoreByCode?storeCode=' . $kodetoko . '&customerLatitude=-6.78542505&customerLongitude=112.19929015', null, $kuntul);
					$ZipCode = json_decode($gettoko[1])[0]->ZipCode;
					echo @color('nevy', "KODE TOKO : {$tokonejon}\n");
					echo @color('nevy', "NAMA TOKO : {$tokonejon1}\n");
					echo @color('nevy', "ALAMAT TOKO : {$tokonejon2}\n");
					foreach ($json[0]->CartItemNotification->Items as $mydata) {
						$cx = $mydata;
						foreach ($cx->ShoppingCartItems as $myxxx) {
							$idne = $myxxx->Quantity;
							$prduk = $myxxx->ProductDescription;
							echo @color('yellow', "{$prduk} == {$idne}\n");
						}
					}
				}
			} else {
				echo "{$responx}\n";
			}
			$no++;
		}
		echo @color('yellow', "TAMBAH LAGI (y / n )? ");
		$againx = trim(fgets(STDIN));
		if (strtolower($againx) == 'y') {
			goto pilihprodukx;
		}
		break;
	case '14':
		masalxccxx:
		echo "Masukkan kode toko: ";
		$kodetoko = trim(fgets(STDIN));
		echo "Masukkan Password : ";
		$password = trim(fgets(STDIN));
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		echo @color('yellow', "DAFTAR HIDANGAN :\n");
		echo @color('red', "[1] Antar\n");
		echo @color('yellow', "[2] Ambil\n");
		echo @color('yellow', "pilih : ");
		$ambil = trim(fgets(STDIN));
		if ($ambil == '1') {
			goto khususantar;
		}
		echo @color('yellow', "TANGGAL Ambil : ");
		$tgle = trim(fgets(STDIN));
		echo @color('yellow', "BULAN Ambil : ");
		$blne = trim(fgets(STDIN));
		echo @color('yellow', "JAM AMBIL :\n");
		echo @color('yellow', "[1] 07:00-07:59\n");
		echo @color('yellow', "[2] 08:00-08:59\n");
		echo @color('yellow', "[3] 09:00-09:59\n");
		echo @color('yellow', "[4] 10:00-10:59\n");
		echo @color('yellow', "[5] 11:00-11:59\n");
		echo @color('yellow', "[6] 12:00-12:59\n");
		echo @color('yellow', "[7] 13:00-13:59\n");
		echo @color('yellow', "[8] 14:00-14:59\n");
		echo @color('yellow', "[9] 15:00-15:59\n");
		echo @color('yellow', "[10] 16:00-16:59\n");
		echo @color('yellow', "[11] 17:00-17:59\n");
		echo @color('yellow', "[12] 18:00-18:59\n");
		echo @color('yellow', "[13] 19:00-19:59\n");
		echo @color('yellow', "[14] 20:00-20:59\n");
		echo @color('yellow', "pilih : ");
		$jamambil = trim(fgets(STDIN));
		echo @color('yellow', "DAFTAR HIDANGAN :\n");
		echo @color('yellow', "[1] Isaku\n");
		echo @color('yellow', "[2] BCA\n");
		echo @color('red', "[3] REKPON\n");
		echo @color('yellow', "[4] MANDIRI\n");
		echo @color('yellow', "pilih : ");
		$bayar = trim(fgets(STDIN));
		khususantar:
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masalxccxx;
		}
		$list = explode("\n", str_replace("\r", "", file_get_contents($file)));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			unlink('nganue.txt');
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			$vocer = trim($akunxx[1]);
			$device_id = trim($akunxx[2]);
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $password . '"}', $kuntul2x);
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$responx = $cekvcne[1];
			if (strpos($responx, '"IsActivated":true')) {
				$cok = json_decode($responx);
				$ID = $cok[0]->ID;
				$RegionId = $cok[0]->RegionId;
				$getscid = curlx('https://api.klikindomaret.com/api/ShoppingCart/GetLastestShop?customerID=' . $ID . '&regionID=' . $RegionId, null, $kuntul);
				//echo "$getscid[1]\n";
				$za = json_decode($getscid[1]);
				if (strpos($getscid[1], '"Message":"An error has occurred."')) {
					echo @color('red', "ERROR KAK\n");
				} else {
					$scid = $za[0];
					if ($scid !== []) {
						$SCID = $scid;
					}
					$getaddress = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/GetByCustomerId?custId=' . $ID, null, $kuntul2);
					if ($getaddress[1] == '[]') {
						$addid = '00000000-0000-0000-0000-000000000000';
					} else {
						$addidx = json_decode($getaddress[1]);
						$addid = $addidx[0]->ID;
						$longe = $addidx[0]->Longitude;
						$late = $addidx[0]->Latitude;
					}
					switch ($ambil) {
						case '1':
							$setaddress = curlx('https://api.klikindomaret.com/api/ShoppingCart/ReCheckStockAllItem?ShoppingCartID=' . $scid . '&StoreCode=&AddressType=1&CustomerAddressID=' . $addid . '&CustomerID=' . $ID . '&StoreCodeDest=&CustomerLatitude=' . $late . '&CustomerLongitude=' . $longe, null, $kuntul);
							echo "{$setaddress[1]}\n";
							break;
						case '2':
							$setaddress = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/SetAddressTypeAndDefaultStore?mfp_id=' . $respid . '&isChangeAddress=False&ShoppingCartID=' . $scid, '{"CustomerID":"' . $ID . '","AddressType":0,"StoreCode":"' . $kodetoko . '","StoreCodeDest":""}', $kuntul2);
							echo "{$setaddress[1]}\n";
							$setaddress2 = curlx('https://api.klikindomaret.com/api/ShoppingCart/ReCheckStockAllItem?ShoppingCartID=' . $scid . '&StoreCode=' . $kodetoko . '&AddressType=0&CustomerAddressID=' . $addid . '&CustomerID=' . $ID . '&StoreCodeDest=&CustomerLatitude=&CustomerLongitude=', null, $kuntul);
							$datatoko = json_decode($setaddress2[1])[0];
							$tokone = $datatoko->ResponseObject->StoreCode;
							$tokone2 = $datatoko->ResponseObject->StoreName;
							$tokone3 = $datatoko->ResponseObject->StoreAddress;
							echo @color('yellow', "Kode Toko: ");
							echo @color('nevy', "{$tokone}\n");
							echo @color('yellow', "Toko : ");
							echo @color('nevy', "{$tokone2} - {$tokone3}\n");
							foreach ($datatoko->ResponseObject->Items as $mydata) {
								$barang = $mydata->ProductDesc;
								$qty = $mydata->QtyAvailable;
								echo @color('yellow', "Item : ");
								echo @color('nevy', "{$barang}\n");
								echo @color('yellow', "Stok : ");
								echo @color('nevy', "{$qty}\n");
								if ($qty == '0') {
									echo @color('red', "STOK KOSONG\n");
									die;
								}
							}
							break;
					}
					$DEVICE_ID = $device_id;
					$cekk = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $SCID . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $kodetoko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
					$json = json_decode($cekk[1]);
					$tokonejon = $json[0]->CheckStockModel->StoreCode;
					$tokonejon1 = $json[0]->CheckStockModel->StoreName;
					$tokonejon2 = $json[0]->CheckStockModel->StoreAddress;
					$storeid = $json[0]->CheckStockModel->StoreID;
					$RegionID = $json[0]->CheckStockModel->RegionID;
					$DistrictID = $json[0]->CheckStockModel->DistrictID;
					$gettoko = curlx('https://api.klikindomaret.com/api/Store/GetAllStoreByCode?storeCode=' . $kodetoko . '&customerLatitude=-6.78542505&customerLongitude=112.19929015', null, $kuntul);
					$ZipCode = json_decode($gettoko[1])[0]->ZipCode;
					echo @color('nevy', "KODE TOKO : {$tokonejon}\n");
					echo @color('nevy', "NAMA TOKO : {$tokonejon1}\n");
					echo @color('nevy', "ALAMAT TOKO : {$tokonejon2}\n");
					foreach ($json[0]->CartItemNotification->Items as $mydata) {
						$cx = $mydata;
						foreach ($cx->ShoppingCartItems as $myxxx) {
							$idne = $myxxx->Quantity;
							$prduk = $myxxx->ProductDescription;
							echo "{$prduk} == {$idne}\n";
						}
					}
					cekupon:
					if ($json[0]->CartItemNotification->ListCouponPotonganTotal == []) {
						echo @color('red', "KUPON KOSONG KAK\n");
					} else {
						$jumlah = count($json[0]->CartItemNotification->ListCouponPotonganTotal);
						echo @color('yellow', "JUMLAH KUPON NEMPEL : ");
						echo @color('green', "{$jumlah}\n");
						foreach ($json[0]->CartItemNotification->ListCouponPotonganTotal as $mydata) {
							$kupon = $mydata->CouponMask;
							$desk = $mydata->CouponMekanisme;
							//echo "Nama Kupon : $kupon\n";
							echo @color('yellow', "Nama Kupon   : ");
							echo @color('green', "{$kupon}\n");
							echo @color('yellow', "Keterangan   : ");
							echo @color('blue', "{$desk}\n");
						}
					}
					inputvocer2:
					echo @color('blue', "Tempel kupon : ");
					echo @color('nevy', "{$vocer}\n");
					$datane = '{"Code":"' . $vocer . '","ShoppingCartID":"' . $SCID . '","CustomerID":"' . $ID . '","RegionID":"' . $RegionId . '","SalesOrderNo":"","Nominal":"","DeviceID":"' . $DEVICE_ID . '","ShoppingCartPackageID":null}';
					$kupon = curlx('https://api.klikindomaret.com/api/Voucher/BookingVoucherCoupon?mfp_id=' . $respid, $datane, $kuntul);
					$kimak = json_decode($kupon[1]);
					$ket = $kimak->ResponseObject->keterangan;
					if (strpos($kupon[1], '"status":"SUCCESS"')) {
						echo @color('green', "BERHASIL GAN\n");
						echo @color('nevy', "{$ket}\n");
						echo @color('blue', "{$nomor}\n");
					} else {
						echo @color('red', "{$ket}\n");
					}
					switch ($ambil) {
						case '1':
							$ceksk = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $SCID . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $kodetoko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
							$gettime = curlx('https://api.klikindomaret.com/api/Setting/Get?SettingKey=STORE_PREPARATION_TIME', null, $kuntul);
							$gett = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/GetByCustomerId?custId=' . $ID, null, $kuntul2);
							$addidx = json_decode($gett[1]);
							$addid = $addidx[0]->ID;
							$ZipCode = $addidx[0]->ZipCode;
							$DistrictId = $addidx[0]->DistrictId;
							$getmboh = curlx('https://api.klikindomaret.com/api/ShoppingCart/GetShippingMethod/' . $SCID . '?customerId=' . $ID . '&isVIrtual=false&regionID=' . $RegionId . '&CustomerAddressID=00000000-0000-0000-0000-000000000000&IsParcelView=false&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
							$ceksek = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $SCID . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $kodetoko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
							$poss = curlx('https://api.klikindomaret.com/api/ShoppingCart/StoreZoneSlotCalculate?mfp_id=' . $respid, '{"ShoppingCartID":"' . $SCID . '","IsDelivery":true,"CustomerAddressID":"' . $addid . '","DeviceID":"' . $DEVICE_ID . '","ShoppingcartPromoPackagesID":null}', $kuntul);
							$cekasek = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $SCID . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $kodetoko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
							$poss2 = curlx('https://api.klikindomaret.com/api/ShoppingCart/StoreZoneSlotCalculate?mfp_id=' . $respid, '{"ShoppingCartID":"' . $SCID . '","IsDelivery":true,"CustomerAddressID":"' . $addid . '","DeviceID":"' . $DEVICE_ID . '","ShoppingcartPromoPackagesID":null}', $kuntul);
							$possas = curlx('https://api.klikindomaret.com/api/ShoppingCart/StoreZoneSlotCalculate?mfp_id=' . $respid, '{"ShoppingCartID":"' . $SCID . '","IsDelivery":true,"CustomerAddressID":"' . $addid . '","DeviceID":"' . $DEVICE_ID . '","ShoppingcartPromoPackagesID":null}', $kuntul);
							$possass = curlx('https://api.klikindomaret.com/api/ShoppingCart/StoreZoneSlotCalculate?mfp_id=' . $respid, '{"ShoppingCartID":"' . $SCID . '","IsDelivery":true,"CustomerAddressID":"' . $addid . '","DeviceID":"' . $DEVICE_ID . '","ShoppingcartPromoPackagesID":null}', $kuntul);
							$possaa = curlx('https://api.klikindomaret.com/api/ShoppingCart/StoreZoneSlotCalculate?mfp_id=' . $respid, '{"ShoppingCartID":"' . $SCID . '","IsDelivery":true,"CustomerAddressID":"' . $addid . '","DeviceID":"' . $DEVICE_ID . '","ShoppingcartPromoPackagesID":null}', $kuntul);
							$jsone = json_decode($possaa[1]);
							$ax1 = "0";
							$ax2 = "10";
							echo @color('yellow', "TANGGAL : \n");
							for ($ax1; $ax1 < $ax2; $ax1++) {
								$tanggale = $jsone->ResponseObject->ListSlot[$ax1]->DateLabel;
								$tanggalex = $jsone->ResponseObject->ListSlot[$ax1]->DateDayLabel;
								echo @color('nevy', "[{$ax1}]");
								echo "=> ";
								echo @color('yellow', "{$tanggale}");
								echo "\n";
								if ($tanggale == "") {
									break;
								}
							}
							echo @color('yellow', "PILIH : ");
							$tglee = trim(fgets(STDIN));
							switch ($tglee) {
								case '0':
									$tgle = $jsone->ResponseObject->ListSlot[0]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[0]->DateLabel;
									break;
								case '1':
									$tgle = $jsone->ResponseObject->ListSlot[1]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[1]->DateLabel;
									break;
								case '2':
									$tgle = $jsone->ResponseObject->ListSlot[2]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[2]->DateLabel;
									break;
								case '3':
									$tgle = $jsone->ResponseObject->ListSlot[3]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[3]->DateLabel;
									break;
								case '4':
									$tgle = $jsone->ResponseObject->ListSlot[4]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[4]->DateLabel;
									break;
								case '5':
									$tgle = $jsone->ResponseObject->ListSlot[5]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[5]->DateLabel;
									break;
							}
							$jumuke = explode('T', $tgle);
							$tgljmk = $jumuke[0];
							echo @color('yellow', "{$tagalex}\n");
							$axx1 = "0";
							$axx2 = "14";
							echo @color('yellow', "JAM ANTAR :\n");
							for ($axx1; $axx1 < $axx2; $axx1++) {
								$xs = $axx1 + 1;
								$jame = $jsone->ResponseObject->ListSlot[$tglee]->SlotPengiriman[$axx1]->SlotLabel;
								$pesane = $jsone->ResponseObject->ListSlot[$tglee]->SlotPengiriman[$axx1]->Message;
								echo @color('nevy', "[{$xs}]");
								echo "=> ";
								echo @color('yellow', "{$jame}, ");
								echo @color('red', "{$pesane}");
								echo "\n";
								if ($jame == "") {
									break;
								}
							}
							echo @color('yellow', "pilih : ");
							$jamambil = trim(fgets(STDIN));
							switch ($jamambil) {
								case '1':
									$jmbt = "07:00";
									break;
								case '2':
									$jmbt = "08:00";
									break;
								case '3':
									$jmbt = "09:00";
									break;
								case '4':
									$jmbt = "10:00";
									break;
								case '5':
									$jmbt = "11:00";
									break;
								case '6':
									$jmbt = "12:00";
									break;
								case '7':
									$jmbt = "13:00";
									break;
								case '8':
									$jmbt = "14:00";
									break;
								case '9':
									$jmbt = "15:00";
									break;
								case '10':
									$jmbt = "16:00";
									break;
								case '11':
									$jmbt = "17:00";
									break;
								case '12':
									$jmbt = "18:00";
									break;
								case '13':
									$jmbt = "19:00";
									break;
								case '14':
									$jmbt = "20:00";
									break;
							}
							$cekasek = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $SCID . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $kodetoko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
							if (strpos($possaa[1], '"IsSuccess":true')) {
								$gass = curlx('https://api.klikindomaret.com/api/Cart/UpdateShippingMetohod?mfp_id=' . $respid, '{"AddressType":1,"AddressIDStore":"' . $addid . '","IStoreShippingDate":"' . $tgljmk . 'T00:00:00","IStorePreferTimeDelivery":"' . $jmbt . '","IStorePreferTimeShipping":"' . $jmbt . '","IPPServiceType":"","IsIPP":false,"AddressIDPlaza":"' . $addid . '","IPlazaShippingDate":"","IPPStoreCode":"","ShoppingCartID":"' . $SCID . '","IsDelivery":1,"RegionID":"' . $RegionId . '","IStoreDeliveryType":"REGULER","IStoreExpressOfflineLimit":0,"IStoreExpressDeliveryServiceFee":0,"MobileIstore":1,"MobileIPlaza":0,"PlazaDeliveryType":"","ShoppingcartPromoPackagesID":null,"DistrictId":' . $DistrictId . ',"ShopZipCode":"' . $ZipCode . '"}', $kuntul);
								if (strpos($gass[1], '"Message":"success"')) {
									$createpay = curlx('https://api.klikindomaret.com/api/Payment/CreateId?Id=' . $SCID, null, $kuntul);
									$headers1 = array();
									$headers1[] = 'Host: payment.klikindomaret.com';
									$headers1[] = 'user-agent: klikindomaretmobile';
									$headers1[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,/;q=0.8';
									for ($i = 0; $i < 3; $i++) {
										$getpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments?pcid=klikindomaret&trxtype=createorder&SCTPCID=' . $SCID . '&LAT=null&LONG=null&DeviceID=' . urut(16), null, $headers1);
										$linkx = get_between($getpay[1], '"hdTotalAmount" value="', '"');
										echo @color('nevy', "TOTAL : {$linkx}\n");
									}
									echo @color('yellow', "DAFTAR HIDANGAN :\n");
									echo @color('yellow', "[1] Isaku\n");
									echo @color('yellow', "[2] BCA\n");
									echo @color('yellow', "[3] REKPON\n");
									echo @color('yellow', "[3] REKPON\n");
									echo @color('yellow', "pilih : ");
									$bayar = trim(fgets(STDIN));
									switch ($bayar) {
										case '1':
											echo "Total : {$linkx}\n";
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"BPISAKU","TotalAmount":"' . $linkx . '","Token":"","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"i.Saku","useCoin":false,"potentialCoinShopee":"","Source":"Android"}', $parcel1);
											$k = json_decode($submitpay[1])->Trxid;
											$lk = str_replace('TIM', '', $k);
											unlink('nganue.txt');
											echo shell_exec("xdg-open 'https://barcode.tec-it.com/barcode.ashx?data='{$lk}'&code=Code128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&codepage=Default&qunit=Mm&quiet=10&hidehrt=False'");
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											sleep(5);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->StatusPembayaran;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $TransactionCode . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "\n", 'transaksiIsaku.txt');
											break;
										case '2':
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"702","TotalAmount":"' . $linkx . '","Token":"","IsCoupon":"1","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"Source":"Android"}', $parcel1);
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->StatusPembayaran;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											   $dircrot = $sttp[0]->Referer;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
										
									echo " {$Yellow}➤{$White} Payment Redirect	 : " . $dircrot . "\n";
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "KODE VA: ");
											echo @color('nevy', "{$PaymentAccountID}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $TransactionCode . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "|Kode VA :" . $PaymentAccountID . "\n", 'transaksiBCA.txt');
											unlink('nganue.txt');
											break;
										case '3':
											echo @color('yellow', "Masukkan token: ");
											$tokentt = trim(fgets(STDIN));
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"RKPON","TotalAmount":"' . $linkx . '","Token":"' . $tokentt . '","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"CIMB Niaga Rekening Ponsel","useCoin":false,"potentialCoinShopee":"","Source":"Android"}', $parcel1);
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->StatusPembayaran;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											   $dircrot = $sttp[0]->Referer;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
										
									echo " {$Yellow}➤{$White} Payment Redirect	 : " . $dircrot . "\n";
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $TransactionCode . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "|Kode VA :" . $PaymentAccountID . "\n", 'transaksiREKPON.txt');
											unlink('nganue.txt');
											break;
									}
								} else {
									echo @color('red', "{$gass[1]}\n");
								}
							} else {
								echo @color('red', "{$possaa[1]}\n");
							}
							break;
						case '2':
							$gett = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/GetByCustomerId?custId=' . $ID, null, $kuntul2);
							if ($gett[1] == '[]') {
								$addid = '00000000-0000-0000-0000-000000000000';
							} else {
								$addidx = json_decode($gett[1]);
								$addid = $addidx[0]->ID;
							}
							$poss = curlx('https://api.klikindomaret.com/api/ShoppingCart/StoreZoneSlotCalculate?mfp_id=' . $respid, '{"ShoppingCartID":"' . $SCID . '","IsDelivery":false,"StoreID":"' . $storeid . '","DeviceID":"' . $DEVICE_ID . '","ShoppingcartPromoPackagesID":null}', $kuntul);
							switch ($jamambil) {
								case '1':
									$jmbt = "07:00";
									break;
								case '2':
									$jmbt = "08:00";
									break;
								case '3':
									$jmbt = "09:00";
									break;
								case '4':
									$jmbt = "10:00";
									break;
								case '5':
									$jmbt = "11:00";
									break;
								case '6':
									$jmbt = "12:00";
									break;
								case '7':
									$jmbt = "13:00";
									break;
								case '8':
									$jmbt = "14:00";
									break;
								case '9':
									$jmbt = "15:00";
									break;
								case '10':
									$jmbt = "16:00";
									break;
								case '11':
									$jmbt = "17:00";
									break;
								case '12':
									$jmbt = "18:00";
									break;
								case '13':
									$jmbt = "19:00";
									break;
								case '14':
									$jmbt = "20:00";
									break;
							}
							if (strpos($poss[1], '"IsSuccess":true')) {
								$gass = curlx('https://api.klikindomaret.com/api/Cart/UpdateShippingMetohod?mfp_id=' . $respid, '{"AddressType":0,"AddressIDStore":"' . $addid . '","IStoreShippingDate":"' . date("Y") . '-' . $blne . '-' . $tgle . 'T00:00:00","IStorePreferTimeDelivery":"' . $jmbt . '","IStorePreferTimeShipping":"' . $jmbt . '","IPPServiceType":"","IsIPP":false,"AddressIDPlaza":"' . $addid . '","IPlazaShippingDate":"","IPPStoreCode":"","ShoppingCartID":"' . $SCID . '","IsDelivery":0,"RegionID":"' . $RegionID . '","IStoreDeliveryType":"REGULER","IStoreExpressOfflineLimit":0,"IStoreExpressDeliveryServiceFee":0,"MobileIstore":1,"MobileIPlaza":0,"PlazaDeliveryType":"","ShoppingcartPromoPackagesID":null,"DistrictId":' . $DistrictID . ',"StoreID":"' . $storeid . '","ShopZipCode":"' . $ZipCode . '"}', $kuntul);
								if (strpos($gass[1], '"Message":"success"')) {
									$createpay = curlx('https://api.klikindomaret.com/api/Payment/CreateId?Id=' . $SCID, null, $kuntul);
									$headers1 = array();
									$headers1[] = 'Host: payment.klikindomaret.com';
									$headers1[] = 'user-agent: klikindomaretmobile';
									$headers1[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,/;q=0.8';
									for ($i = 0; $i < 3; $i++) {
										$getpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments?pcid=klikindomaret&trxtype=createorder&SCTPCID=' . $SCID . '&LAT=null&LONG=null&DeviceID=' . urut(16), null, $headers1);
										$linkx = get_between($getpay[1], '"hdTotalAmount" value="', '"');
										echo @color('nevy', "TOTAL : {$linkx}\n");
									}
									switch ($bayar) {
										case '1':
											echo "Total : {$linkx}\n";
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											// $submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"BPISAKU","TotalAmount":"'.$linkx.'","Token":"","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"i.Saku","useCoin":false,"potentialCoinShopee":"","Source":"Android"}', $parcel1);
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"BPISAKU","TotalAmount":"' . $linkx . '","Token":"","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"i.saku","IsFlashSale":"False","emailCustomer":"' . $nomor . '@klikindomaret.com","useCoin":false,"usePoint":false,"partialPointOVO":"0","potentialCoinShopee":"","Source":"MobileSite-Android","Client":"klikindomaret"}', $parcel1);
											$k = json_decode($submitpay[1])->Trxid;
											$lk = str_replace('TIM', '', $k);
											unlink('nganue.txt');
											echo shell_exec("xdg-open 'https://barcode.tec-it.com/barcode.ashx?data='{$lk}'&code=Code128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&codepage=Default&qunit=Mm&quiet=10&hidehrt=False'");
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											sleep(5);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->StatusPembayaran;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $TransactionCode . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "\n", 'transaksiIsaku.txt');
											break;
										case '2':
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											// $submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"702","TotalAmount":"'.$linkx.'","Token":"","IsCoupon":"1","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"Source":"Android"}', $parcel1);
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"702","TotalAmount":"' . $linkx . '","Token":"","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"BCA Virtual Account","IsFlashSale":"False","emailCustomer":"' . $nomor . '@klikindomaret.com","useCoin":false,"usePoint":false,"partialPointOVO":"0","potentialCoinShopee":"","Source":"MobileSite-Android","Client":"klikindomaret"}', $parcel1);
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->StatusPembayaran;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											   $dircrot = $sttp[0]->Referer;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
										
									echo " {$Yellow}➤{$White} Payment Redirect	 : " . $dircrot . "\n";
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "KODE VA: ");
											echo @color('nevy', "{$PaymentAccountID}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $TransactionCode . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "|Kode VA :" . $PaymentAccountID . "\n", 'transaksiBCA.txt');
											unlink('nganue.txt');
											break;
										case '3':
											echo @color('yellow', "Masukkan token: ");
											$tokentt = trim(fgets(STDIN));
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"RKPON","TotalAmount":"' . $linkx . '","Token":"' . $tokentt . '","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"CIMB Niaga Rekening Ponsel","useCoin":false,"potentialCoinShopee":"","Source":"Android"}', $parcel1);
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->StatusPembayaran;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											   $dircrot = $sttp[0]->Referer;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
										
									echo " {$Yellow}➤{$White} Payment Redirect	 : " . $dircrot . "\n";
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "KODE VA: ");
											echo @color('nevy', "{$PaymentAccountID}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $TransactionCode . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "|Kode VA :" . $PaymentAccountID . "\n", 'transaksiREKPON.txt');
											unlink('nganue.txt');
											break;
										case '4':
											echo "Total : {$linkx}\n";
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											//  $submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"BPISAKU","TotalAmount":"'.$linkx.'","Token":"","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"i.Saku","useCoin":false,"potentialCoinShopee":"","Source":"Android"}', $parcel1);
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"VTBMRI","TotalAmount":"' . $linkx . '","Token":"","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"Mandiri Virtual Account","IsFlashSale":"False","emailCustomer":"' . $nomor . '@klikindomaret.com","useCoin":false,"usePoint":false,"partialPointOVO":"0","potentialCoinShopee":"","Source":"MobileSite-Android","Client":"klikindomaret"}', $parcel1);
											// echo "\n\n $submitpay[1]\n\n";
											$k = json_decode($submitpay[1])->Trxid;
											$lk = str_replace('TIM', '', $k);
											//	echo shell_exec("xdg-open 'https://barcode.tec-it.com/barcode.ashx?data='$lk'&code=Code128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&codepage=Default&qunit=Mm&quiet=10&hidehrt=False'");
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											//	echo "\n\n $sttpay[1]\n\n";
											sleep(5);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->PaymentAccountID;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Kode VA: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $sttbayar . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "\n", 'transaksimandiri.txt');
											unlink('nganue.txt');
											break;
									}
								} else {
									echo @color('red', "{$gass[1]}\n");
								}
							} else {
								echo @color('red', "{$poss[1]}\n");
							}
							break;
					}
				}
			} else {
				echo "{$responx}\n";
			}
			nyekip:
			$no++;
		}
		break;
	case '15':
		echo "Masukkan Password : ";
		$pw = trim(fgets(STDIN));
		echo "Input kode Voucher: ";
		$vocerx = trim(fgets(STDIN));
		$vocer = strtoupper($vocerx);
		masal22x:
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masal22x;
		}
		$lines = file($file, FILE_IGNORE_NEW_LINES);
		print_r($lines);
		echo "Start baris ke : ";
		$start = trim(fgets(STDIN));
		echo "Sampai baris ke : ";
		$endd = trim(fgets(STDIN));
		$filex = retrieveText($file, $start, $endd);
		$list = explode("\n", str_replace("\r", "", $filex));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			echo @color('nevy', "{$nomor}\n");
			unlink('nganue.txt');
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $pw . '"}', $kuntul2x);
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$respon = $cekvcne[1];
			if (strpos($respon, '"IsActivated":true')) {
				$cok = json_decode($respon);
				$ID = $cok[0]->ID;
				$RegionId = $cok[0]->RegionId;
				$storeid = $cok[0]->StoreDefault;
				//
				$getscid = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=00000000-0000-0000-0000-000000000000&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $storeid . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . urut(16) . '&ShoppingcartPromoPackagesID=', null, $kuntul);
				$za = json_decode($getscid[1]);
				if (strpos($getscid[1], '"Message":"An error has occurred."')) {
					echo @color('red', "ERROR KAK\n");
				} else {
					if ($getscid[1] == []) {
						echo @color('red', "KERANJANG KOSONG KAK\n");
					} else {
						$scid = $za[0]->ID;
						$datane = '{"Code":"' . $vocer . '","ShoppingCartID":"' . $scid . '","CustomerID":"' . $ID . '","RegionID":"' . $RegionId . '","SalesOrderNo":"","Nominal":"","DeviceID":"' . urut(16) . '","ShoppingCartPackageID":null}';
						save("{$nomor};{$respid};{$datane}\n", $vocer . ".txt");
						echo @color('yellow', "Tersimpan di {$vocer}.txt\n");
					}
				}
				$no++;
			} else {
				echo @color('red', "{$respon}\n");
			}
		}
		break;
	case '16':
		masal2zxz:
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masal2zxz;
		}
		$list = explode("\n", str_replace("\r", "", file_get_contents($file)));
		$no = 0;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		echo "[+] JAM DOR : ";
		$jam = trim(fgets(STDIN));
		while (true) {
			$time = date('Y:m:d H:i:s');
			$day = date('Y:m:d');
			$timestart = date('Y:m:d H:i:s');
			//time start
			$timeend = $day . ' ' . $jam;
			if ($time >= $timeend) {
				echo @color('green', "GAS !!!\n");
				goto gascok;
			} else {
				echo $time . "\n";
				sleep(1);
			}
		}
		gascok:
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			$respid = trim($akunxx[1]);
			$pw = trim($akunxx[2]);
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kupon = curl('https://api.klikindomaret.com/api/Voucher/BookingVoucherCoupon?mfp_id=' . $respid, $pw, $kuntul);
			$kimak = json_decode($kupon[1]);
			//	die($kupon[1]);
			$ket = $kimak->ResponseObject->keterangan;
			if (strpos($kupon[1], '"status":"SUCCESS"')) {
				echo @color('green', "BERHASIL GAN\n");
				echo @color('nevy', "{$ket}\n");
				echo @color('blue', "{$nomor}\n");
				echo @color('yellow', "Akun berhasil disimpan di akunbervocer{$file}\n");
				save("{$nomor}\n", "akunbervocer" . $file);
			} else {
				echo @color('red', "GAGAL KAK\n");
				echo @color('red', "{$ket}\n");
			}
			$no++;
		}
		break;
	case '17':
		masalxdd:
		echo "Password : ";
		$password = trim(fgets(STDIN));
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masalxdd;
		}
		$list = explode("\n", str_replace("\r", "", file_get_contents($file)));
		$no = 0;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			unlink('nganue.txt');
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $password . '"}', $kuntul2x);
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$respon = $cekvcne[1];
			if (strpos($respon, '"IsActivated":true')) {
				$cok = json_decode($respon);
				$ID = $cok[0]->ID;
				$RegionId = $cok[0]->RegionId;
				$storeid = $cok[0]->StoreDefault;
				$notip = curl('https://api.klikindomaret.com/api/Customer/GetInboxByUser?id=' . $ID . '&mfp_id=' . $respid . '&pages=1&NotifType=&ChildNotifType=&RangeDays=', null, $kuntul);
				$pesan = json_decode($notip[1]);
				foreach ($pesan[0]->InboxData as $inbox) {
					#
					echo @color('yellow', "Pesan   : ");
					echo @color('nevy', $inbox->Description . "\n");
					echo @color('yellow', "Kode	: ");
					echo @color('nevy', $inbox->DetailInfo->CouponCode . "\n");
					echo @color('yellow', "Berlaku : ");
					echo @color('nevy', $inbox->DetailInfo->CouponPeriode . "\n");
					save($nomor . ";" . $inbox->DetailInfo->CouponCode . "\n", 'KuponNotif.txt');
					echo @color('yellow', "Tersimpan di KuponNotif.txt\n");
				}
				$no++;
			} else {
				echo @color('red', $respon . "\n");
			}
		}
		break;
	case '18':
		echo @color('red', "Tidak disarankan untuk kupon rebutan\n");
		echo @color('nevy', "Pastikan sudah menyimpan list multi kupon terlebih dahulu\n");
		echo "Masukkan Password : ";
		$pw = trim(fgets(STDIN));
		masalsasax:
		echo "[+] Input File AKUN : ";
		$file = trim(fgets(STDIN));
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masalsasax;
		}
		$lines = file($file, FILE_IGNORE_NEW_LINES);
		print_r($lines);
		echo "Start baris ke : ";
		$start = trim(fgets(STDIN));
		echo "Sampai baris ke : ";
		$endd = trim(fgets(STDIN));
		$filex = retrieveText($file, $start, $endd);
		$list = explode("\n", str_replace("\r", "", $filex));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			unlink('nganue.txt');
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			echo @color('nevy', "{$nomor}\n");
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $pw . '"}', $kuntul2x);
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$respon = $cekvcne[1];
			if (strpos($respon, '"IsActivated":true')) {
				$cok = json_decode($respon);
				$ID = $cok[0]->ID;
				$RegionId = $cok[0]->RegionId;
				$storeid = $cok[0]->StoreDefault;
				//
				$getscid = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=00000000-0000-0000-0000-000000000000&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $storeid . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . urut(16) . '&ShoppingcartPromoPackagesID=', null, $kuntul);
				$za = json_decode($getscid[1]);
				if (strpos($getscid[1], '"Message":"An error has occurred."')) {
					echo @color('red', "ERROR KAK\n");
				} else {
					$scid = $za[0]->ID;
					$listx = explode("\n", str_replace("\r", "", file_get_contents('multi.txt')));
					foreach ($listx as $kodex) {
						if (empty($kodex)) {
							continue;
						}
						$akunxxx = explode(';', trim($kodex));
						$multix = trim($akunxxx[0]);
						$multi = strtoupper($multix);
						$kupon = curlx('https://api.klikindomaret.com/api/Voucher/BookingVoucherCoupon?mfp_id=' . $respid, '{"Code":"' . $multi . '","ShoppingCartID":"' . $scid . '","CustomerID":"' . $ID . '","RegionID":"' . $RegionId . '","SalesOrderNo":"","Nominal":"","DeviceID":"' . urut(16) . '","ShoppingCartPackageID":null}', $kuntul);
						$kimak = json_decode($kupon[1]);
						$ket = $kimak->ResponseObject->keterangan;
						if (strpos($kupon[1], '"status":"SUCCESS"')) {
							echo @color('green', "BERHASIL GAN\n");
							echo @color('yellow', "Kupon : ");
							echo @color('nevy', "{$multi}\n");
							echo @color('nevy', "{$ket}\n");
							echo @color('yellow', "Akun berhasil disimpan di akunbervocermulti.txt\n");
							save("{$nomor}\n", "akunbervocermulti.txt");
						} else {
							echo @color('red', "GAGAL KAK\n");
							echo @color('red', "{$ket}\n");
						}
					}
					$linesx = file('akunbervocermulti.txt');
					$linesx = array_unique($linesx);
				}
				$no++;
			} else {
				echo @color('red', "{$respon}\n");
			}
		}
		break;
	case '19':
		echo "Masukkan Password : ";
		$password = trim(fgets(STDIN));
		masal12a:
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masal12a;
		}
		$lines = file($file, FILE_IGNORE_NEW_LINES);
		print_r($lines);
		echo "Start baris ke : ";
		$start = trim(fgets(STDIN));
		echo "Sampai baris ke : ";
		$endd = trim(fgets(STDIN));
		$filex = retrieveText($file, $start, $endd);
		$list = explode("\n", str_replace("\r", "", $filex));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			unlink('nganue.txt');
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			echo @color('nevy', "{$nomor}\n");
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $password . '"}', $kuntul2x);
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$responx = $cekvcne[1];
			if (strpos($responx, '"IsActivated":true')) {
				$cok = json_decode($responx);
				$ID = $cok[0]->ID;
				$RegionId = $cok[0]->RegionId;
				$saldoklik = curlx('https://account-api-v2.klikindomaret.com/api/loyalty/checksaldoklik?CustomerID=' . $ID, null, $kuntul2);
				$salklik = json_decode($saldoklik[1])[0]->Saldo;
				if ($salklik !== '0') {
					save("{$nomor} => {$salklik}\n", 'adasaldoklik.txt');
					echo "Tersimpan di adasaldoklik.txt\n";
				}
				$saldoisaku = curlx('https://account-api-v2.klikindomaret.com/api/Loyalty/CheckPoint?CustomerID=' . $ID . '&Source=IOS&Type=ISAKU', null, $kuntul2);
				$salisaku = json_decode($saldoisaku[1])[0]->Saldo;
				$mypoin = curlx('https://account-api-v2.klikindomaret.com/api/Loyalty/CheckPoint?CustomerID=' . $ID . '&Source=IOS&Type=MYPOINT', null, $kuntul2);
				$poinku = json_decode($mypoin[1])[0]->Point;
				echo @color('yellow', "Saldo Klik : ");
				echo @color('nevy', "{$salklik}\n");
				echo @color('yellow', "Saldo Isaku : ");
				echo @color('nevy', "{$salisaku}\n");
				echo @color('yellow', "POINKU : ");
				echo @color('nevy', "{$poinku}\n");
				$no++;
			} else {
				echo @color('red', "{$responx}\n");
			}
		}
		break;
	case '20':
		echo "Masukkan Password : ";
		$password = trim(fgets(STDIN));
		masalsdsd:
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masalsdsd;
		}
		$lines = file($file, FILE_IGNORE_NEW_LINES);
		print_r($lines);
		echo "Start baris ke : ";
		$start = trim(fgets(STDIN));
		echo "Sampai baris ke : ";
		$endd = trim(fgets(STDIN));
		$filex = retrieveText($file, $start, $endd);
		$list = explode("\n", str_replace("\r", "", $filex));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			unlink('nganue.txt');
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			echo @color('nevy', "{$nomor}\n");
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $password . '"}', $kuntul2x);
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$responx = $cekvcne[1];
			if (strpos($responx, '"IsActivated":true')) {
				$cok = json_decode($responx);
				$ID = $cok[0]->ID;
				$RegionId = $cok[0]->RegionId;
				$storeid = $cok[0]->StoreDefault;
				$getscid = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=00000000-0000-0000-0000-000000000000&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $storeid . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . urut(16) . '&ShoppingcartPromoPackagesID=', null, $kuntul);
				$za = json_decode($getscid[1]);
				if (strpos($getscid[1], '"Message":"An error has occurred."')) {
					echo @color('red', "ERROR KAK\n");
				} else {
					$scid = $za[0]->ID;
					$toko = $cok[0]->StoreDefault;
					$cekk = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $scid . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $toko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . urut(16) . '&ShoppingcartPromoPackagesID=', null, $kuntul);
					$json = json_decode($cekk[1]);
					if ($json[0]->CartItemNotification->ListCouponPotonganTotal == []) {
						echo @color('red', "KUPON KOSONG KAK\n");
					} else {
						$jumlah = count($json[0]->CartItemNotification->ListCouponPotonganTotal);
						echo @color('yellow', "Jumlah Kupon : ");
						echo @color('green', "{$jumlah}\n");
						foreach ($json[0]->CartItemNotification->ListCouponPotonganTotal as $mydata) {
							$kupon = $mydata->CouponMask;
							$desk = $mydata->CouponMekanisme;
							//echo "Nama Kupon : $kupon\n";
							echo @color('yellow', "Nama Kupon   : ");
							echo @color('green', "{$kupon}\n");
							echo @color('yellow', "Keterangan   : ");
							echo @color('blue', "{$desk}\n");
							$hapus = curlx('https://api.klikindomaret.com/api/Voucher/ReversalVoucherCoupon?mfp_id=' . $respid, '{"CustomerID":"' . $ID . '","Code":"' . $kupon . '","SalesOrderNo":"","Nominal":"","RegionID":"' . $RegionId . '","ShoppingCartID":"' . $scid . '","ShoppingCartPackageID":null}', $kuntul);
							$mb = json_decode($hapus[1]);
							if (strpos($hapus[1], '"status":"SUCCESS"')) {
								$ket = $mb->ResponseObject->keterangan;
								echo @color('yellow', "Nama Kupon   : ");
								echo @color('green', "{$kupon}\n");
								echo @color('green', "SUKSES HAPUS KAK\n");
								echo @color('green', "{$ket}\n");
							} else {
								echo @color('red', "{$kupon}\n");
								echo @color('red', "GAGAL HAPUS KAK\n");
								echo @color('red', "{$ket}\n");
							}
						}
					}
				}
				echo "\n";
				lanjot:
				$no++;
			} else {
				echo "{$responx}\n";
			}
		}
		break;
	case '21':
		echo "Masukkan Password : ";
		$password = trim(fgets(STDIN));
		masalesax:
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		echo "Masukkan Password BARU : ";
		$passwd = trim(fgets(STDIN));
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masalesax;
		}
		$lines = file($file, FILE_IGNORE_NEW_LINES);
		print_r($lines);
		echo "Start baris ke : ";
		$start = trim(fgets(STDIN));
		echo "Sampai baris ke : ";
		$endd = trim(fgets(STDIN));
		$filex = retrieveText($file, $start, $endd);
		$list = explode("\n", str_replace("\r", "", $filex));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			unlink('nganue.txt');
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			echo @color('nevy', "{$nomor}\n");
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $password . '"}', $kuntul2x);
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$responx = $cekvcne[1];
			if (strpos($responx, '"IsActivated":true')) {
				$cok = json_decode($responx);
				$ID = $cok[0]->ID;
				$RegionId = $cok[0]->RegionId;
				$toko = $cok[0]->StoreDefault;
				$cekk = curlx('https://account-api-v2.klikindomaret.com/api/Customer/UpdatePasswordViaMobileApps?mfp_id=' . $respid, '{"ID":"' . $ID . '","Password":"' . $password . '","NewPassword":"' . $passwd . '","ConfirmPassword":"' . $passwd . '"}', $kuntul2);
				$json = json_decode($cekk[1]);
				if (strpos($cekk[1], '"IsSuccess":true')) {
					echo @color('green', "Sukses Update password\n");
					save($nomor . "\n", 'Sandi-' . $passwd . '.txt');
					echo @color('yellow', "Tersimpan di Sandi-{$passwd}.txt\n");
				} else {
					echo @color('red', "GAGAL Update password\n");
					save($nomor . "\n", 'gagalubah.txt');
					echo @color('yellow', "Tersimpan di gagalubah.txt\n");
				}
				$no++;
			} else {
				echo @color('red', "GAGAL Update password\n");
				save($nomor . "\n", 'gagalubah.txt');
				echo @color('yellow', "Tersimpan di gagalubah.txt\n");
			}
		}
		break;
	case '22':
		echo "Masukkan Password : ";
		$password = trim(fgets(STDIN));
		echo "Masukkan Nama Depan : ";
		$jenengd = trim(fgets(STDIN));
		masalsdsd1:
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masalsdsd1;
		}
		$lines = file($file, FILE_IGNORE_NEW_LINES);
		print_r($lines);
		echo "Start baris ke : ";
		$start = trim(fgets(STDIN));
		echo "Sampai baris ke : ";
		$endd = trim(fgets(STDIN));
		$filex = retrieveText($file, $start, $endd);
		$list = explode("\n", str_replace("\r", "", $filex));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			unlink('nganue.txt');
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			echo @color('nevy', "{$nomor}\n");
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $password . '"}', $kuntul2x);
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$responx = $cekvcne[1];
			if (strpos($responx, '"IsActivated":true')) {
				$cok = json_decode($responx);
				$ID = $cok[0]->ID;
				$RegionId = $cok[0]->RegionId;
				$storeid = $cok[0]->StoreDefault;
				$LName = $cok[0]->LName;
				$FBID = $cok[0]->FBID;
				$satu = get_between($responx, '"LName":"', '"Password"');
				$dua = get_between($responx, '"IPAddress"', '}');
				$datpost = '{"ID":"' . $ID . '","FBID":' . $FBID . ',"FName":"' . $jenengd . '","LName":"' . $satu . '"Password":null,"IPAddress"' . $dua . '}';
				$change = curlx('https://account-api-v2.klikindomaret.com/api/Customer/UpdateProfile?mfp_id=' . $respid . '&isMyAccount=true', $datpost, $kuntul2);
				if (strpos($change[1], '"IsSuccess":true')) {
					$pess = json_decode($change[1])->Message;
					$pess1 = json_decode($change[1])->ResponseObject->FName;
					$pess2 = json_decode($change[1])->ResponseObject->LName;
					echo @color('green', "{$pess}\n");
					echo @color('yellow', "Nama : ");
					echo @color('nevy', "{$pess1} {$pess2}\n");
				} else {
					echo @color('red', "{$change[1]}\n");
				}
				$no++;
			} else {
				echo @color('red', "{$responx}\n");
			}
		}
		break;
	case '23':
		echo "Masukkan Password : ";
		$password = trim(fgets(STDIN));
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		$lines = file($file, FILE_IGNORE_NEW_LINES);
		print_r($lines);
		echo "Start baris ke : ";
		$start = trim(fgets(STDIN));
		echo "Sampai baris ke : ";
		$endd = trim(fgets(STDIN));
		echo @color('yellow', "PRIORITAS Kupon   : ");
		$priox = trim(fgets(STDIN));
		$prio = strtoupper($priox);
		$filex = retrieveText($file, $start, $endd);
		$list = explode("\n", str_replace("\r", "", $filex));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			unlink('nganue.txt');
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			echo @color('nevy', "{$nomor}\n");
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $password . '"}', $kuntul2x);
			echo @color('purple', "\n\n{$verif[1]}\n\n");
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$responx = $cekvcne[1];
			if (strpos($responx, '"IsActivated":true')) {
				$cok = json_decode($responx);
				$ID = $cok[0]->ID;
				$RegionId = $cok[0]->RegionId;
				$storeid = $cok[0]->StoreDefault;
				$getscid = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=00000000-0000-0000-0000-000000000000&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $storeid . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . urut(16) . '&ShoppingcartPromoPackagesID=', null, $kuntul);
				$za = json_decode($getscid[1]);
				if (strpos($getscid[1], '"Message":"An error has occurred."')) {
					echo @color('red', "ERROR KAK\n");
				} else {
					if ($getscid[1] == []) {
						echo @color('red', "KERANJANG KOSONG KAK\n");
					} else {
						$scid = $za[0]->ID;
						$toko = $cok[0]->StoreDefault;
						$cekk = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $scid . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $toko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . urut(16) . '&ShoppingcartPromoPackagesID=', null, $kuntul);
						$json = json_decode($cekk[1]);
						if ($json[0]->CartItemNotification->ListCouponPotonganTotal == []) {
							echo @color('red', "KUPON KOSONG KAK\n");
						} else {
							$jumlah = count($json[0]->CartItemNotification->ListCouponPotonganTotal);
							echo @color('yellow', "Jumlah Kupon : ");
							echo @color('green', "{$jumlah}\n");
							foreach ($json[0]->CartItemNotification->ListCouponPotonganTotal as $mydata) {
								$kupon = $mydata->CouponMask;
								$desk = $mydata->CouponMekanisme;
								//echo "Nama Kupon : $kupon\n";
								echo @color('yellow', "Nama Kupon   : ");
								echo @color('green', "{$kupon}\n");
								echo @color('yellow', "Keterangan   : ");
								echo @color('blue', "{$desk}\n");
								if ($kupon == $prio) {
									echo @color('yellow', "Tersimpan di ada{$prio}.txt\n");
									save($nomor . "\n", 'ada' . $prio . '.txt');
								}
							}
							echo @color('yellow', "Tersimpan di adavocer.txt\n");
							save($nomor . "\n", 'adavocer.txt');
							echo "\n";
						}
					}
				}
				$no++;
			} else {
				echo "{$responx}\n";
			}
		}
		break;
	case '24':
		echo "Masukkan Password : ";
		$password = trim(fgets(STDIN));
		masalasasa:
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masalasasa;
		}
		$lines = file($file, FILE_IGNORE_NEW_LINES);
		print_r($lines);
		echo "Start baris ke : ";
		$start = trim(fgets(STDIN));
		echo "Sampai baris ke : ";
		$endd = trim(fgets(STDIN));
		$filex = retrieveText($file, $start, $endd);
		$list = explode("\n", str_replace("\r", "", $filex));
		lagi:
		echo @color('yellow', "Masukkan Kupon Yg mau di hapus : ");
		$kupone = trim(fgets(STDIN));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			echo @color('nevy', "{$nomor}\n");
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $password . '"}', $kuntul2x);
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$responx = $cekvcne[1];
			if (strpos($responx, '"IsActivated":true')) {
				$cok = json_decode($responx);
				$ID = $cok[0]->ID;
				$RegionId = $cok[0]->RegionId;
				$storeid = $cok[0]->StoreDefault;
				$getscid = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=00000000-0000-0000-0000-000000000000&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $storeid . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . urut(16) . '&ShoppingcartPromoPackagesID=', null, $kuntul);
				$za = json_decode($getscid[1]);
				if (strpos($getscid[1], '"Message":"An error has occurred."')) {
					echo @color('red', "ERROR KAK\n");
				} else {
					if ($getscid[1] == []) {
						echo @color('red', "KERANJANG KOSONG KAK\n");
					} else {
						$scid = $za[0]->ID;
						$toko = $cok[0]->StoreDefault;
						$cekk = curl('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $scid . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $toko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . urut(16) . '&ShoppingcartPromoPackagesID=', null, $kuntul);
						$json = json_decode($cekk[1]);
						if ($json[0]->CartItemNotification->ListCouponPotonganTotal == []) {
							echo @color('red', "KUPON KOSONG KAK\n");
						} else {
							$jumlah = count($json[0]->CartItemNotification->ListCouponPotonganTotal);
							echo @color('yellow', "Jumlah Kupon : ");
							echo @color('green', "{$jumlah}\n");
							foreach ($json[0]->CartItemNotification->ListCouponPotonganTotal as $mydata) {
								$kupon = $mydata->CouponMask;
								$desk = $mydata->CouponMekanisme;
								//echo "Nama Kupon : $kupon\n";
								echo @color('yellow', "Nama Kupon   : ");
								echo @color('green', "{$kupon}\n");
								echo @color('yellow', "Keterangan   : ");
								echo @color('blue', "{$desk}\n");
							}
							$hapus = curl('https://api.klikindomaret.com/api/Voucher/ReversalVoucherCoupon?mfp_id=' . $respid, '{"CustomerID":"' . $ID . '","Code":"' . $kupone . '","SalesOrderNo":"","Nominal":"","RegionID":"' . $RegionId . '","ShoppingCartID":"' . $scid . '","ShoppingCartPackageID":null}', $kuntul);
							$mb = json_decode($hapus[1]);
							if (strpos($hapus[1], '"status":"SUCCESS"')) {
								$ket = $mb->ResponseObject->keterangan;
								echo @color('yellow', "Nama Kupon   : ");
								echo @color('green', "{$kupon}\n");
								echo @color('green', "SUKSES HAPUS KAK\n");
								echo @color('green', "{$ket}\n");
							} else {
								echo @color('red', "{$kupone}\n");
								echo @color('red', "GAGAL HAPUS KAK\n");
								echo @color('red', "{$ket}\n");
							}
						}
					}
				}
				echo "\n";
				lanjotx:
				$no++;
			} else {
				echo "{$responx}\n";
			}
		}
		echo @color('yellow', "HAPUS KUPON LAGI (y / n )? ");
		$againx = trim(fgets(STDIN));
		if (strtolower($againx) == 'y') {
			goto lagi;
		}
		break;
	case '25':
		if (file_exists("apikey2AX")) {
			$apikey = file_get_contents('apikey2AX');
		} else {
			echo @color('red', "APIKEY MASIH KOSONG !!!\n");
			echo @color('nevy', "MASUKKAN APIKEY : ");
			$apikey = trim(fgets(STDIN));
			save($apikey, 'apikey2AX');
		}
		$password = "123456a";
		echo @color('yellow', "PASSWORD : {$password}");
		$sms = new SMSActivate($apikey);
		$saldo = $sms->getBalance();
		echo color('green', "\n\n[+]") . " Sisa saldo: {$saldo} ₽\n";
		orderotpAX:
		$getnum = $sms->getNumber("ju", 6, 0, "any");
		if (is_array($getnum)) {
			$idnum = $getnum["id"];
			$num = $getnum["number"];
			$nomor = '0' . substr($num, 2);
			echo @color('yellow', "NOMOR : {$nomor}\n");
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$reg = curl('https://api.klikindomaret.com/api/PreRegistration/SendOTPSMS?NoHP=' . $nomor, null, $kuntul);
			if (strpos($reg[1], '"Message":"Kode OTP berhasil dikirim ke nomor telepon Anda."')) {
				echo color('blue', "OTP   : ");
				sleep(5);
				for ($is = 0; $is < 24; $is++) {
					$headersx = array();
					$headersx[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:91.0) Gecko/20100101 Firefox/91.0';
					$headersx[] = 'Content-Type: application/x-www-form-urlencoded';
					$ceknmr = curl('https://sms-activate.org/stubs/handler_api.php', 'action=getCurrentActivationsDataTables&api_key=' . $apikey . '&start=0&length=10&order=id&orderBy=asc&typeAction=0&noStat=0', $headersx);
					$datacek = json_decode($ceknmr[1]);
					foreach ($datacek->array as $nget) {
						$idtp = $nget->id;
						$code = $nget->code;
						if ($idtp == $idnum) {
							if (strlen($code) !== 4) {
								echo ".";
								sleep(5);
							} else {
								$otp = $code;
								goto ngotepeAX;
							}
						}
					}
				}
				$status = $sms->setStatus($idnum, 8);
				goto orderotpAX;
				ngotepeAX:
				echo color('green', "{$otp}\n");
				$reg2 = curl('https://api.klikindomaret.com/api/PreRegistration/ValidationOTPCodeSMS?NoHP=' . $nomor . '&otpCode=' . $otp, null, $kuntul);
				if (strpos($reg2[1], '"Message":"Verifikasi berhasil dilakukan."')) {
					$data = file_get_contents("https://irfan.iproute.my.id/asu.php");
					$datas = json_decode($data);
					$nama = $datas->fullname2;
					$email = $datas->email;
					$rand = rand(10, 30);
					$rand2 = rand(1990, 2005);
					$rand3 = rand(1, 9);
					$deviceid = urut16();
					$device_id = str_replace('-', '', $deviceid);
					$getdev = curl('https://api.klikindomaret.com/api/MobileAppsVersion/getDevice_Token?device_token=740f4707bebcf74f9b7c25d48e3358945f6aa01da5ddb387462c7eaf61bb78ad', null, $kuntul);
					$hasil = json_decode($getdev[1]);
					$mfp_id = $hasil->Message;
					if (file_exists('reff.txt')) {
						$referral = file_get_contents("reff.txt");
						$referral = str_replace("\n", "", $referral);
						$referral = str_replace(" ", "", $referral);
					} else {
						$referral = '';
					}
					$dates = "{$rand2}-0{$rand3}-{$rand}";
					$datapost = '{"FName":"' . $nama . '","LName":"","Email":null,"KonfirmasiEmail":"","Gender":"Wanita","Mobile":"' . $nomor . '","KodeReferensi":"' . $referral . '","Password":"' . $password . '","ConfirmPassword":"' . $password . '","IsConfirmed":true,"district":{"id":2483,"name":"Gunung Sahari Selatan"},"isShowPassword":false,"isShowPasswordConfirm":false,"errorMessageEmail":null,"errorMessagePassword":"","errorMessageConfirmPassword":"","isCodeRefMinReq":true,"isRefferalCode":true,"isCodeRefInputNull":false,"messageReferral":"Hore, berhasil menggunakan kode referensi!","ReferrerCode":"' . $referral . '","isReferralActive":true,"ID":"00000000-0000-0000-0000-000000000000","IPAddress":"192.168.56.132","IsSubscribed":0,"IsNewsLetterSubscriber":0,"AllowSMS":false,"LastUpdate":"0001-01-01T00:00:00","DateOfBirth":"' . $dates . 'T00:00:00.000Z","DateOfBirthStringFormatted":"' . $dates . '","TypePushEmail":0,"IsUpload":false,"IsActivated":false,"MobileVerified":true,"DateOfBirthExists":"0001-01-01T00:00:00","OTPValidationExpired":false,"IsFromOtherSystem":false,"OTPCount":0,"OTPAvailable":0,"DeviceID":"' . $device_id . '"}';
					$post = strlen($datapost);
					$headers2 = array();
					$headers2[] = 'Host: prd-api.klikindomaret.com';
					$headers2[] = 'accept: */*';
					$headers2[] = 'content-type: application/json';
					$headers2[] = 'user-agent: okhttp/3.12.1';
					$headers2[] = 'content-length: ' . $post;
					$regis = curl('https://prd-api.klikindomaret.com/Account/Customer/Registration?districtID=46826&mfp_id=' . $mfp_id, $datapost, $headers2);
					$jsregis = json_decode($regis[1]);
					$Message = $jsregis->message;
					$type = $jsregis->type;
					if (strpos($regis[1], '"IsSuccess":true')) {
						$datapost2 = '{"Email":"' . $nomor . '","Password":"' . $password . '"}';
						$post2 = strlen($datapost2);
						$headers3 = array();
						$headers3[] = 'Host: account-api-v2.klikindomaret.com';
						$headers3[] = 'accept: */*';
						$headers3[] = 'content-type: application/json';
						$headers3[] = 'user-agent: okhttp/3.12.1';
						$headers3[] = 'content-length: ' . $post2;
						$login = curl('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=740f4707bebcf74f9b7c25d48e3358945f6aa01da5ddb387462c7eaf61bb78ad&districtID=51409&TrafficSource=', $datapost2, $headers3);
						$datalogin = json_decode($login[1]);
						$Message = $datalogin->Message;
						$nama = $datalogin->ResponseObject->FName;
						$date = $datalogin->ResponseObject->DateOfBirth;
						echo @color('green', "Message : {$Message}\n");
						echo @color('green', "Nama	: {$nama}\n");
						echo @color('green', "Date	: {$date}\n");
						if ($Message == "Nomor ponsel atau kata sandi Anda tidak valid") {
							echo @color('red', "\n\n{$login[1]}\n\n");
							goto endingAX;
							die;
						}
						save("{$nomor};{$password};{$device_id}\n", 'akunklik.txt');
						
						$respi = json_decode($login[1]);
						$respid = $respi->ResponseID;
						$idne = $respi->ResponseObject->ID;
						$toked = $respi->ResponseObject->Token;
						#################################################
						$kuntul2 = array();
						$kuntul2[] = 'Content-Type: application/json';
						$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
						$kuntul2[] = 'Applicationkey: indomaret';
						$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
						$kuntul2[] = 'User-Agent: okhttp/3.12.1';
						$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
						$respon = $cekvcne[1];
						if (strpos($respon, '"IsActivated":true')) {
							$cok = json_decode($respon);
							$ID = $cok[0]->ID;
							$RegionId = $cok[0]->RegionId;
							$storeid = $cok[0]->StoreDefault;
							$notip = curl('https://api.klikindomaret.com/api/Customer/GetInboxByUser?id=' . $ID . '&mfp_id=' . $respid . '&pages=1&NotifType=&ChildNotifType=&RangeDays=', null, $kuntul);
							// echo @color('green', "\n\n$notip[1]\n\n");
							$pesan = json_decode($notip[1]);
							foreach ($pesan[0]->InboxData as $inbox) {
								#
								$Description = $inbox->Description;
								$pecah = explode(".", $Description);
								$desc1 = $pecah[0];
								$CouponCode = $inbox->DetailInfo->CouponCode;
								$CouponPeriode = $inbox->DetailInfo->CouponPeriode;
								echo @color('green', "Pesan   : ");
								echo @color('nevy', $desc1 . "\n");
								echo @color('green', "Kode	: ");
								echo @color('nevy', $CouponCode . "\n");
								echo @color('green', "Berlaku : ");
								echo @color('nevy', $CouponPeriode . "\n");
								save("{$nomor};{$password};{$CouponCode};{$device_id}\n", 'akunberkupon.txt');
								echo @color('yellow', "Tersimpan di akunberkupon.txt\n");
								goto endingAX;
							}
						} else {
							echo @color('red', $respon . "\n");
						}
						goto endingAX;
					} else {
						echo @color('red', "GAGAL REGIS\n");
						echo @color('red', "{$regis[1]}\n");
					}
				}
			} elseif (strpos($reg[1], '"Nomor sudah digunakan oleh akun lain."')) {
				echo @color('red', "Nomor sudah digunakan oleh akun lain.\n");
				goto orderotpAX;
			} else {
				echo @color('red', "{$reg[1]}\n");
			}
			endingAX:
			$status = $sms->setStatus($idnum, 6);
			$saldo = $sms->getBalance();
			echo color('green', "[+]") . " Sisa saldo: {$saldo} ₽\n";
			if ($saldo > 4) {
				goto orderotpAX;
			}
			echo @color('yellow', "BUAT LAGI (y / n )? ");
			$againx = trim(fgets(STDIN));
			if (strtolower($againx) == 'y') {
				goto orderotpAX;
			}
		}
		break;
	case '26':
		$password = "123456a";
		echo @color('green', "REFF  : ");
		$referral = trim(fgets(STDIN));
		regisan:
		echo @color('green', "NOMOR : ");
		$nomorr = trim(fgets(STDIN));
		$nomor = str_replace("628", "08", $nomorr);
		$nomor = str_replace('+', "", $nomor);
		$deviceid = urut16();
		$device_id = str_replace('-', '', $deviceid);
		$headers = array();
		$headers[] = 'Host: api.klikindomaret.com';
		$headers[] = 'accept: */*';
		$headers[] = 'content-type: application/json';
		$headers[] = 'user-agent: okhttp/3.12.1';
		################################################
		$cekno = curl('https://api.klikindomaret.com/api/Customer/GetByMobilePhone?mobilePhone=' . $nomor, null, $headers);
		sleep(1);
		################################################
		$sendotp = curl('https://api.klikindomaret.com/api/PreRegistration/SendOTPSMS?NoHP=' . $nomor, null, $headers);
		sleep(1);
		$hasil = json_decode($sendotp[1]);
		$message = $hasil[0]->Message;
		if ($message != "Kode OTP berhasil dikirim ke nomor telepon Anda.") {
			echo @color('red', "{$sendotp[1]}\n");
			goto regisan;
			die;
		}
		#################################################
		echo @color('green', "OTP   : ");
		$otp = trim(fgets(STDIN));
		$validotp = curl('https://api.klikindomaret.com/api/PreRegistration/ValidationOTPCodeSMS?NoHP=' . $nomor . '&otpCode=' . $otp, null, $headers);
		$hasil = json_decode($validotp[1]);
		$message = $hasil[0]->Message;
		echo @color('yellow', "{$message}\n");
		sleep(1);
		#################################################
		$getdev = curl('https://api.klikindomaret.com/api/MobileAppsVersion/getDevice_Token?device_token=740f4707bebcf74f9b7c25d48e3358945f6aa01da5ddb387462c7eaf61bb78ad', null, $headers);
		$hasil = json_decode($getdev[1]);
		$mfp_id = $hasil->Message;
		#################################################
		sleep(1);
		$data = file_get_contents("https://irfan.iproute.my.id/asu.php");
		$datas = json_decode($data);
		$nama = $datas->fullname2;
		$email = $datas->email;
		$rand = rand(10, 30);
		$rand2 = rand(1990, 2005);
		$rand3 = rand(1, 9);
		$nom = 1;
		ulang:
		$dates = "{$rand2}-0{$rand3}-{$rand}";
		$datapost = '{"FName":"' . $nama . '","LName":"","Email":null,"KonfirmasiEmail":"","Gender":"Wanita","Mobile":"' . $nomor . '","KodeReferensi":"' . $referral . '","Password":"' . $password . '","ConfirmPassword":"' . $password . '","IsConfirmed":true,"district":{"id":2483,"name":"Gunung Sahari Selatan"},"isShowPassword":false,"isShowPasswordConfirm":false,"errorMessageEmail":null,"errorMessagePassword":"","errorMessageConfirmPassword":"","isCodeRefMinReq":true,"isRefferalCode":true,"isCodeRefInputNull":false,"messageReferral":"Hore, berhasil menggunakan kode referensi!","ReferrerCode":"' . $referral . '","isReferralActive":true,"ID":"00000000-0000-0000-0000-000000000000","IPAddress":"192.168.56.132","IsSubscribed":0,"IsNewsLetterSubscriber":0,"AllowSMS":false,"LastUpdate":"0001-01-01T00:00:00","DateOfBirth":"' . $dates . 'T00:00:00.000Z","DateOfBirthStringFormatted":"' . $dates . '","TypePushEmail":0,"IsUpload":false,"IsActivated":false,"MobileVerified":true,"DateOfBirthExists":"0001-01-01T00:00:00","OTPValidationExpired":false,"IsFromOtherSystem":false,"OTPCount":0,"OTPAvailable":0,"DeviceID":"' . $device_id . '"}';
		$post = strlen($datapost);
		$headers2 = array();
		$headers2[] = 'Host: prd-api.klikindomaret.com';
		$headers2[] = 'accept: */*';
		$headers2[] = 'content-type: application/json';
		$headers2[] = 'user-agent: okhttp/3.12.1';
		$headers2[] = 'content-length: ' . $post;
		$regisan = curl('https://prd-api.klikindomaret.com/Account/Customer/Registration?districtID=46826&mfp_id=' . $mfp_id, $datapost, $headers2);
		//  echo @color('purple', "$regisan[1]\n");
		$jsregis = json_decode($regisan[1]);
		$Message = $jsregis->message;
		$type = $jsregis->type;
		if ($type == 'https://tools.ietf.org/html/rfc7231#section-6.5.1') {
			echo @color('red', "TUNGGU SEBENTAR\n");
			$no++;
			sleep(1);
			goto ulang;
		} else {
			if ($regisan[1] == 'API calls quota exceeded! maximum admitted 1 per 1s.') {
				echo @color('red', "API calls quota exceeded! maximum admitted 1 per 1s.\n");
				sleep(2);
				goto ulang;
			}
		}
		sleep(1);
		if ($Message != "OK") {
			echo @color('red', "\n{$regisan[1]}\n");
			echo @color('red', "GAGAL CREATE\n");
			goto regisan;
			die;
		}
		#################################################
		$datapost2 = '{"Email":"' . $nomor . '","Password":"' . $password . '"}';
		$post2 = strlen($datapost2);
		$headers3 = array();
		$headers3[] = 'Host: account-api-v2.klikindomaret.com';
		$headers3[] = 'accept: */*';
		$headers3[] = 'content-type: application/json';
		$headers3[] = 'user-agent: okhttp/3.12.1';
		$headers3[] = 'content-length: ' . $post2;
		$login = curl('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=740f4707bebcf74f9b7c25d48e3358945f6aa01da5ddb387462c7eaf61bb78ad&districtID=51409&TrafficSource=', $datapost2, $headers3);
		$datalogin = json_decode($login[1]);
		$Message = $datalogin->Message;
		$nama = $datalogin->ResponseObject->FName;
		$date = $datalogin->ResponseObject->DateOfBirth;
		echo @color('green', "Message : {$Message}\n");
		echo @color('green', "Nama	: {$nama}\n");
		echo @color('green', "Date	: {$date}\n");
		if ($Message == "Nomor ponsel atau kata sandi Anda tidak valid") {
			echo @color('red', "\n\n{$login[1]}\n\n");
			goto regisan;
			die;
		}
		save("{$nomor};{$password};{$device_id}\n", 'akunklik.txt');
		
		$respi = json_decode($login[1]);
		$respid = $respi->ResponseID;
		$idne = $respi->ResponseObject->ID;
		$toked = $respi->ResponseObject->Token;
		#################################################
		$kuntul2 = array();
		$kuntul2[] = 'Content-Type: application/json';
		$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
		$kuntul2[] = 'Applicationkey: indomaret';
		$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
		$kuntul2[] = 'User-Agent: okhttp/3.12.1';
		$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
		$respon = $cekvcne[1];
		if (strpos($respon, '"IsActivated":true')) {
			$cok = json_decode($respon);
			$ID = $cok[0]->ID;
			$RegionId = $cok[0]->RegionId;
			$storeid = $cok[0]->StoreDefault;
			$notip = curl('https://api.klikindomaret.com/api/Customer/GetInboxByUser?id=' . $ID . '&mfp_id=' . $respid . '&pages=1&NotifType=&ChildNotifType=&RangeDays=', null, $headers);
			$pesan = json_decode($notip[1]);
			foreach ($pesan[0]->InboxData as $inbox) {
				#
				$Description = $inbox->Description;
				$pecah = explode(".", $Description);
				$desc1 = $pecah[0];
				$CouponCode = $inbox->DetailInfo->CouponCode;
				$CouponPeriode = $inbox->DetailInfo->CouponPeriode;
				echo @color('green', "Pesan   : ");
				echo @color('nevy', $desc1 . "\n");
				echo @color('green', "Kode	: ");
				echo @color('nevy', $CouponCode . "\n");
				echo @color('green', "Berlaku : ");
				echo @color('nevy', $CouponPeriode . "\n");
				save("{$nomor};{$password};{$CouponCode};{$device_id}\n", 'akunberkupon.txt');
				echo @color('yellow', "Tersimpan di akunberkupon.txt\n");
				goto regis;
			}
		} else {
			echo @color('red', $respon . "\n");
		}
		goto regisan;
		break;
	case '27':
		masalxccxx22:
		echo "Masukkan kode toko: ";
		$kodetoko = trim(fgets(STDIN));
		echo "Masukkan Password : ";
		$password = trim(fgets(STDIN));
		echo "[+] Input File: ";
		$file = trim(fgets(STDIN));
		echo @color('yellow', "DAFTAR HIDANGAN :\n");
		echo @color('red', "[1] Antar\n");
		echo @color('yellow', "[2] Ambil\n");
		echo @color('yellow', "pilih : ");
		$ambil = trim(fgets(STDIN));
		if ($ambil == '1') {
			goto khususantar22;
		}
		echo @color('yellow', "TANGGAL Ambil : ");
		$tgle = trim(fgets(STDIN));
		echo @color('yellow', "BULAN Ambil : ");
		$blne = trim(fgets(STDIN));
		echo @color('yellow', "JAM AMBIL :\n");
		echo @color('yellow', "[1] 07:00-07:59\n");
		echo @color('yellow', "[2] 08:00-08:59\n");
		echo @color('yellow', "[3] 09:00-09:59\n");
		echo @color('yellow', "[4] 10:00-10:59\n");
		echo @color('yellow', "[5] 11:00-11:59\n");
		echo @color('yellow', "[6] 12:00-12:59\n");
		echo @color('yellow', "[7] 13:00-13:59\n");
		echo @color('yellow', "[8] 14:00-14:59\n");
		echo @color('yellow', "[9] 15:00-15:59\n");
		echo @color('yellow', "[10] 16:00-16:59\n");
		echo @color('yellow', "[11] 17:00-17:59\n");
		echo @color('yellow', "[12] 18:00-18:59\n");
		echo @color('yellow', "[13] 19:00-19:59\n");
		echo @color('yellow', "[14] 20:00-20:59\n");
		echo @color('yellow', "pilih : ");
		$jamambil = trim(fgets(STDIN));
		echo @color('yellow', "DAFTAR HIDANGAN :\n");
		echo @color('yellow', "[1] Isaku\n");
		echo @color('yellow', "[2] BCA\n");
		echo @color('red', "[3] REKPON\n");
		echo @color('yellow', "[4] MANDIRI\n");
		echo @color('yellow', "pilih : ");
		$bayar = trim(fgets(STDIN));
		khususantar22:
		if (empty($file) || !file_exists($file)) {
			echo "[+] File not found!\n";
			goto masalxccxx22;
		}
		$list = explode("\n", str_replace("\r", "", file_get_contents($file)));
		$no = 1;
		$total = count($list) - 1;
		$success = 0;
		$error = 0;
		foreach ($list as $kode) {
			if (empty($kode)) {
				continue;
			}
			echo "Total: {$no}/{$total}\n";
			unlink('nganue.txt');
			$akunxx = explode(';', trim($kode));
			$nomor = trim($akunxx[0]);
			$pw = trim($akunxx[1]);
			$vocer = trim($akunxx[2]);
			$device_id = trim($akunxx[3]);
			$kuntul = array();
			$kuntul[] = 'Content-Type: application/json';
			$kuntul[] = 'Host: api.klikindomaret.com';
			$kuntul[] = 'User-Agent: okhttp/3.12.1';
			$kuntul2x = array();
			$kuntul2x[] = 'Content-Type: application/json';
			$kuntul2x[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2x[] = 'Applicationkey: indomaret';
			$kuntul2x[] = 'Authorization: ';
			$kuntul2x[] = 'User-Agent: okhttp/3.12.1';
			$verif = curlx('https://account-api-v2.klikindomaret.com/api/Customer/LoginViaMobileApps?isMobile=true&device_token=2badfdf8-5d76-4c49-81cd-c7c3588eebc4&districtID=2483&TrafficSource=', '{"Email":"' . $nomor . '","Password":"' . $password . '"}', $kuntul2x);
			$respi = json_decode($verif[1]);
			$respid = $respi->ResponseID;
			$idne = $respi->ResponseObject->ID;
			$toked = $respi->ResponseObject->Token;
			$kuntul2 = array();
			$kuntul2[] = 'Content-Type: application/json';
			$kuntul2[] = 'Host: account-api-v2.klikindomaret.com';
			$kuntul2[] = 'Applicationkey: indomaret';
			$kuntul2[] = 'Authorization: Bearer ' . $idne . '#' . $toked;
			$kuntul2[] = 'User-Agent: okhttp/3.12.1';
			$cekvcne = curlx('https://account-api-v2.klikindomaret.com/api/Customer/Account?access_token=' . $respid, null, $kuntul2);
			$responx = $cekvcne[1];
			if (strpos($responx, '"IsActivated":true')) {
				$cok = json_decode($responx);
				$ID = $cok[0]->ID;
				$RegionId = $cok[0]->RegionId;
				$getscid = curlx('https://api.klikindomaret.com/api/ShoppingCart/GetLastestShop?customerID=' . $ID . '&regionID=' . $RegionId, null, $kuntul);
				//echo "$getscid[1]\n";
				$za = json_decode($getscid[1]);
				if (strpos($getscid[1], '"Message":"An error has occurred."')) {
					echo @color('red', "ERROR KAK\n");
				} else {
					$scid = $za[0];
					if ($scid !== []) {
						$SCID = $scid;
					}
					$getaddress = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/GetByCustomerId?custId=' . $ID, null, $kuntul2);
					if ($getaddress[1] == '[]') {
						$addid = '00000000-0000-0000-0000-000000000000';
					} else {
						$addidx = json_decode($getaddress[1]);
						$addid = $addidx[0]->ID;
						$longe = $addidx[0]->Longitude;
						$late = $addidx[0]->Latitude;
					}
					switch ($ambil) {
						case '1':
							$setaddress = curlx('https://api.klikindomaret.com/api/ShoppingCart/ReCheckStockAllItem?ShoppingCartID=' . $scid . '&StoreCode=&AddressType=1&CustomerAddressID=' . $addid . '&CustomerID=' . $ID . '&StoreCodeDest=&CustomerLatitude=' . $late . '&CustomerLongitude=' . $longe, null, $kuntul);
							echo "{$setaddress[1]}\n";
							break;
						case '2':
							$setaddress = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/SetAddressTypeAndDefaultStore?mfp_id=' . $respid . '&isChangeAddress=False&ShoppingCartID=' . $scid, '{"CustomerID":"' . $ID . '","AddressType":0,"StoreCode":"' . $kodetoko . '","StoreCodeDest":""}', $kuntul2);
							echo "{$setaddress[1]}\n";
							$setaddress2 = curlx('https://api.klikindomaret.com/api/ShoppingCart/ReCheckStockAllItem?ShoppingCartID=' . $scid . '&StoreCode=' . $kodetoko . '&AddressType=0&CustomerAddressID=' . $addid . '&CustomerID=' . $ID . '&StoreCodeDest=&CustomerLatitude=&CustomerLongitude=', null, $kuntul);
							$datatoko = json_decode($setaddress2[1])[0];
							$tokone = $datatoko->ResponseObject->StoreCode;
							$tokone2 = $datatoko->ResponseObject->StoreName;
							$tokone3 = $datatoko->ResponseObject->StoreAddress;
							echo @color('yellow', "Kode Toko: ");
							echo @color('nevy', "{$tokone}\n");
							echo @color('yellow', "Toko : ");
							echo @color('nevy', "{$tokone2} - {$tokone3}\n");
							foreach ($datatoko->ResponseObject->Items as $mydata) {
								$barang = $mydata->ProductDesc;
								$qty = $mydata->QtyAvailable;
								echo @color('yellow', "Item : ");
								echo @color('nevy', "{$barang}\n");
								echo @color('yellow', "Stok : ");
								echo @color('nevy', "{$qty}\n");
								if ($qty == '0') {
									echo @color('red', "STOK KOSONG\n");
									die;
								}
							}
							break;
					}
					$DEVICE_ID = $device_id;
					$cekk = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $SCID . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $kodetoko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
					$json = json_decode($cekk[1]);
					$tokonejon = $json[0]->CheckStockModel->StoreCode;
					$tokonejon1 = $json[0]->CheckStockModel->StoreName;
					$tokonejon2 = $json[0]->CheckStockModel->StoreAddress;
					$storeid = $json[0]->CheckStockModel->StoreID;
					$RegionID = $json[0]->CheckStockModel->RegionID;
					$DistrictID = $json[0]->CheckStockModel->DistrictID;
					$gettoko = curlx('https://api.klikindomaret.com/api/Store/GetAllStoreByCode?storeCode=' . $kodetoko . '&customerLatitude=-6.78542505&customerLongitude=112.19929015', null, $kuntul);
					$ZipCode = json_decode($gettoko[1])[0]->ZipCode;
					echo @color('nevy', "KODE TOKO : {$tokonejon}\n");
					echo @color('nevy', "NAMA TOKO : {$tokonejon1}\n");
					echo @color('nevy', "ALAMAT TOKO : {$tokonejon2}\n");
					foreach ($json[0]->CartItemNotification->Items as $mydata) {
						$cx = $mydata;
						foreach ($cx->ShoppingCartItems as $myxxx) {
							$idne = $myxxx->Quantity;
							$prduk = $myxxx->ProductDescription;
							echo "{$prduk} == {$idne}\n";
						}
					}
					cekupon22:
					if ($json[0]->CartItemNotification->ListCouponPotonganTotal == []) {
						echo @color('red', "KUPON KOSONG KAK\n");
					} else {
						$jumlah = count($json[0]->CartItemNotification->ListCouponPotonganTotal);
						echo @color('yellow', "JUMLAH KUPON NEMPEL : ");
						echo @color('green', "{$jumlah}\n");
						foreach ($json[0]->CartItemNotification->ListCouponPotonganTotal as $mydata) {
							$kupon = $mydata->CouponMask;
							$desk = $mydata->CouponMekanisme;
							//echo "Nama Kupon : $kupon\n";
							echo @color('yellow', "Nama Kupon   : ");
							echo @color('green', "{$kupon}\n");
							echo @color('yellow', "Keterangan   : ");
							echo @color('blue', "{$desk}\n");
						}
					}
					inputvocer222:
					echo @color('blue', "Tempel kupon : ");
					echo @color('nevy', "{$vocer}\n");
					$datane = '{"Code":"' . $vocer . '","ShoppingCartID":"' . $SCID . '","CustomerID":"' . $ID . '","RegionID":"' . $RegionId . '","SalesOrderNo":"","Nominal":"","DeviceID":"' . $DEVICE_ID . '","ShoppingCartPackageID":null}';
					$kupon = curlx('https://api.klikindomaret.com/api/Voucher/BookingVoucherCoupon?mfp_id=' . $respid, $datane, $kuntul);
					$kimak = json_decode($kupon[1]);
					$ket = $kimak->ResponseObject->keterangan;
					if (strpos($kupon[1], '"status":"SUCCESS"')) {
						echo @color('green', "BERHASIL GAN\n");
						echo @color('nevy', "{$ket}\n");
						echo @color('blue', "{$nomor}\n");
					} else {
						echo @color('red', "{$ket}\n");
					}
					switch ($ambil) {
						case '1':
							$ceksk = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $SCID . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $kodetoko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
							$gettime = curlx('https://api.klikindomaret.com/api/Setting/Get?SettingKey=STORE_PREPARATION_TIME', null, $kuntul);
							$gett = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/GetByCustomerId?custId=' . $ID, null, $kuntul2);
							$addidx = json_decode($gett[1]);
							$addid = $addidx[0]->ID;
							$ZipCode = $addidx[0]->ZipCode;
							$DistrictId = $addidx[0]->DistrictId;
							$getmboh = curlx('https://api.klikindomaret.com/api/ShoppingCart/GetShippingMethod/' . $SCID . '?customerId=' . $ID . '&isVIrtual=false&regionID=' . $RegionId . '&CustomerAddressID=00000000-0000-0000-0000-000000000000&IsParcelView=false&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
							$ceksek = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $SCID . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $kodetoko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
							$poss = curlx('https://api.klikindomaret.com/api/ShoppingCart/StoreZoneSlotCalculate?mfp_id=' . $respid, '{"ShoppingCartID":"' . $SCID . '","IsDelivery":true,"CustomerAddressID":"' . $addid . '","DeviceID":"' . $DEVICE_ID . '","ShoppingcartPromoPackagesID":null}', $kuntul);
							$cekasek = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $SCID . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $kodetoko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
							$poss2 = curlx('https://api.klikindomaret.com/api/ShoppingCart/StoreZoneSlotCalculate?mfp_id=' . $respid, '{"ShoppingCartID":"' . $SCID . '","IsDelivery":true,"CustomerAddressID":"' . $addid . '","DeviceID":"' . $DEVICE_ID . '","ShoppingcartPromoPackagesID":null}', $kuntul);
							$possas = curlx('https://api.klikindomaret.com/api/ShoppingCart/StoreZoneSlotCalculate?mfp_id=' . $respid, '{"ShoppingCartID":"' . $SCID . '","IsDelivery":true,"CustomerAddressID":"' . $addid . '","DeviceID":"' . $DEVICE_ID . '","ShoppingcartPromoPackagesID":null}', $kuntul);
							$possass = curlx('https://api.klikindomaret.com/api/ShoppingCart/StoreZoneSlotCalculate?mfp_id=' . $respid, '{"ShoppingCartID":"' . $SCID . '","IsDelivery":true,"CustomerAddressID":"' . $addid . '","DeviceID":"' . $DEVICE_ID . '","ShoppingcartPromoPackagesID":null}', $kuntul);
							$possaa = curlx('https://api.klikindomaret.com/api/ShoppingCart/StoreZoneSlotCalculate?mfp_id=' . $respid, '{"ShoppingCartID":"' . $SCID . '","IsDelivery":true,"CustomerAddressID":"' . $addid . '","DeviceID":"' . $DEVICE_ID . '","ShoppingcartPromoPackagesID":null}', $kuntul);
							$jsone = json_decode($possaa[1]);
							$ax1 = "0";
							$ax2 = "10";
							echo @color('yellow', "TANGGAL : \n");
							for ($ax1; $ax1 < $ax2; $ax1++) {
								$tanggale = $jsone->ResponseObject->ListSlot[$ax1]->DateLabel;
								$tanggalex = $jsone->ResponseObject->ListSlot[$ax1]->DateDayLabel;
								echo @color('nevy', "[{$ax1}]");
								echo "=> ";
								echo @color('yellow', "{$tanggale}");
								echo "\n";
								if ($tanggale == "") {
									break;
								}
							}
							echo @color('yellow', "PILIH : ");
							$tglee = trim(fgets(STDIN));
							switch ($tglee) {
								case '0':
									$tgle = $jsone->ResponseObject->ListSlot[0]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[0]->DateLabel;
									break;
								case '1':
									$tgle = $jsone->ResponseObject->ListSlot[1]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[1]->DateLabel;
									break;
								case '2':
									$tgle = $jsone->ResponseObject->ListSlot[2]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[2]->DateLabel;
									break;
								case '3':
									$tgle = $jsone->ResponseObject->ListSlot[3]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[3]->DateLabel;
									break;
								case '4':
									$tgle = $jsone->ResponseObject->ListSlot[4]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[4]->DateLabel;
									break;
								case '5':
									$tgle = $jsone->ResponseObject->ListSlot[5]->DateSlot;
									$tagalex = $jsone->ResponseObject->ListSlot[5]->DateLabel;
									break;
							}
							$jumuke = explode('T', $tgle);
							$tgljmk = $jumuke[0];
							echo @color('yellow', "{$tagalex}\n");
							$axx1 = "0";
							$axx2 = "14";
							echo @color('yellow', "JAM ANTAR :\n");
							for ($axx1; $axx1 < $axx2; $axx1++) {
								$xs = $axx1 + 1;
								$jame = $jsone->ResponseObject->ListSlot[$tglee]->SlotPengiriman[$axx1]->SlotLabel;
								$pesane = $jsone->ResponseObject->ListSlot[$tglee]->SlotPengiriman[$axx1]->Message;
								echo @color('nevy', "[{$xs}]");
								echo "=> ";
								echo @color('yellow', "{$jame}, ");
								echo @color('red', "{$pesane}");
								echo "\n";
								if ($jame == "") {
									break;
								}
							}
							echo @color('yellow', "pilih : ");
							$jamambil = trim(fgets(STDIN));
							switch ($jamambil) {
								case '1':
									$jmbt = "07:00";
									break;
								case '2':
									$jmbt = "08:00";
									break;
								case '3':
									$jmbt = "09:00";
									break;
								case '4':
									$jmbt = "10:00";
									break;
								case '5':
									$jmbt = "11:00";
									break;
								case '6':
									$jmbt = "12:00";
									break;
								case '7':
									$jmbt = "13:00";
									break;
								case '8':
									$jmbt = "14:00";
									break;
								case '9':
									$jmbt = "15:00";
									break;
								case '10':
									$jmbt = "16:00";
									break;
								case '11':
									$jmbt = "17:00";
									break;
								case '12':
									$jmbt = "18:00";
									break;
								case '13':
									$jmbt = "19:00";
									break;
								case '14':
									$jmbt = "20:00";
									break;
							}
							$cekasek = curlx('https://api.klikindomaret.com/api/ShoppingCart/MyCart?id=&customerId=' . $ID . '&shoppingCartId=' . $SCID . '&regionID=' . $RegionId . '&mfp_id=' . $respid . '&StoreCode=' . $kodetoko . '&platform=ANDROID&NearestStoreLocation=&DeviceID=' . $DEVICE_ID . '&ShoppingcartPromoPackagesID=', null, $kuntul);
							if (strpos($possaa[1], '"IsSuccess":true')) {
								$gass = curlx('https://api.klikindomaret.com/api/Cart/UpdateShippingMetohod?mfp_id=' . $respid, '{"AddressType":1,"AddressIDStore":"' . $addid . '","IStoreShippingDate":"' . $tgljmk . 'T00:00:00","IStorePreferTimeDelivery":"' . $jmbt . '","IStorePreferTimeShipping":"' . $jmbt . '","IPPServiceType":"","IsIPP":false,"AddressIDPlaza":"' . $addid . '","IPlazaShippingDate":"","IPPStoreCode":"","ShoppingCartID":"' . $SCID . '","IsDelivery":1,"RegionID":"' . $RegionId . '","IStoreDeliveryType":"REGULER","IStoreExpressOfflineLimit":0,"IStoreExpressDeliveryServiceFee":0,"MobileIstore":1,"MobileIPlaza":0,"PlazaDeliveryType":"","ShoppingcartPromoPackagesID":null,"DistrictId":' . $DistrictId . ',"ShopZipCode":"' . $ZipCode . '"}', $kuntul);
								if (strpos($gass[1], '"Message":"success"')) {
									$createpay = curlx('https://api.klikindomaret.com/api/Payment/CreateId?Id=' . $SCID, null, $kuntul);
									$headers1 = array();
									$headers1[] = 'Host: payment.klikindomaret.com';
									$headers1[] = 'user-agent: klikindomaretmobile';
									$headers1[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,/;q=0.8';
									for ($i = 0; $i < 3; $i++) {
										$getpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments?pcid=klikindomaret&trxtype=createorder&SCTPCID=' . $SCID . '&LAT=null&LONG=null&DeviceID=' . urut(16), null, $headers1);
										$linkx = get_between($getpay[1], '"hdTotalAmount" value="', '"');
										echo @color('nevy', "TOTAL : {$linkx}\n");
									}
									echo @color('yellow', "DAFTAR HIDANGAN :\n");
									echo @color('yellow', "[1] Isaku\n");
									echo @color('yellow', "[2] BCA\n");
									echo @color('yellow', "[3] REKPON\n");
									echo @color('yellow', "[3] REKPON\n");
									echo @color('yellow', "pilih : ");
									$bayar = trim(fgets(STDIN));
									switch ($bayar) {
										case '1':
											echo "Total : {$linkx}\n";
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"BPISAKU","TotalAmount":"' . $linkx . '","Token":"","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"i.Saku","useCoin":false,"potentialCoinShopee":"","Source":"Android"}', $parcel1);
											$k = json_decode($submitpay[1])->Trxid;
											$lk = str_replace('TIM', '', $k);
											unlink('nganue.txt');
											echo shell_exec("xdg-open 'https://barcode.tec-it.com/barcode.ashx?data='{$lk}'&code=Code128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&codepage=Default&qunit=Mm&quiet=10&hidehrt=False'");
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											sleep(5);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->StatusPembayaran;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $TransactionCode . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "\n", 'transaksiIsaku.txt');
											break;
										case '2':
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"702","TotalAmount":"' . $linkx . '","Token":"","IsCoupon":"1","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"Source":"Android"}', $parcel1);
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->StatusPembayaran;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											   $dircrot = $sttp[0]->Referer;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
										
									echo " {$Yellow}➤{$White} Payment Redirect	 : " . $dircrot . "\n";
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "KODE VA: ");
											echo @color('nevy', "{$PaymentAccountID}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $TransactionCode . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "|Kode VA :" . $PaymentAccountID . "\n", 'transaksiBCA.txt');
											unlink('nganue.txt');
											break;
										case '3':
											echo @color('yellow', "Masukkan token: ");
											$tokentt = trim(fgets(STDIN));
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"RKPON","TotalAmount":"' . $linkx . '","Token":"' . $tokentt . '","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"CIMB Niaga Rekening Ponsel","useCoin":false,"potentialCoinShopee":"","Source":"Android"}', $parcel1);
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->StatusPembayaran;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											   $dircrot = $sttp[0]->Referer;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
										
									echo " {$Yellow}➤{$White} Payment Redirect	 : " . $dircrot . "\n";
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $TransactionCode . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "|Kode VA :" . $PaymentAccountID . "\n", 'transaksiREKPON.txt');
											unlink('nganue.txt');
											break;
									}
								} else {
									echo @color('red', "{$gass[1]}\n");
								}
							} else {
								echo @color('red', "{$possaa[1]}\n");
							}
							break;
						case '2':
							$gett = curlx('https://account-api-v2.klikindomaret.com/api/CustomerAddress/GetByCustomerId?custId=' . $ID, null, $kuntul2);
							if ($gett[1] == '[]') {
								$addid = '00000000-0000-0000-0000-000000000000';
							} else {
								$addidx = json_decode($gett[1]);
								$addid = $addidx[0]->ID;
							}
							$poss = curlx('https://api.klikindomaret.com/api/ShoppingCart/StoreZoneSlotCalculate?mfp_id=' . $respid, '{"ShoppingCartID":"' . $SCID . '","IsDelivery":false,"StoreID":"' . $storeid . '","DeviceID":"' . $DEVICE_ID . '","ShoppingcartPromoPackagesID":null}', $kuntul);
							switch ($jamambil) {
								case '1':
									$jmbt = "07:00";
									break;
								case '2':
									$jmbt = "08:00";
									break;
								case '3':
									$jmbt = "09:00";
									break;
								case '4':
									$jmbt = "10:00";
									break;
								case '5':
									$jmbt = "11:00";
									break;
								case '6':
									$jmbt = "12:00";
									break;
								case '7':
									$jmbt = "13:00";
									break;
								case '8':
									$jmbt = "14:00";
									break;
								case '9':
									$jmbt = "15:00";
									break;
								case '10':
									$jmbt = "16:00";
									break;
								case '11':
									$jmbt = "17:00";
									break;
								case '12':
									$jmbt = "18:00";
									break;
								case '13':
									$jmbt = "19:00";
									break;
								case '14':
									$jmbt = "20:00";
									break;
							}
							if (strpos($poss[1], '"IsSuccess":true')) {
								$gass = curlx('https://api.klikindomaret.com/api/Cart/UpdateShippingMetohod?mfp_id=' . $respid, '{"AddressType":0,"AddressIDStore":"' . $addid . '","IStoreShippingDate":"' . date("Y") . '-' . $blne . '-' . $tgle . 'T00:00:00","IStorePreferTimeDelivery":"' . $jmbt . '","IStorePreferTimeShipping":"' . $jmbt . '","IPPServiceType":"","IsIPP":false,"AddressIDPlaza":"' . $addid . '","IPlazaShippingDate":"","IPPStoreCode":"","ShoppingCartID":"' . $SCID . '","IsDelivery":0,"RegionID":"' . $RegionID . '","IStoreDeliveryType":"REGULER","IStoreExpressOfflineLimit":0,"IStoreExpressDeliveryServiceFee":0,"MobileIstore":1,"MobileIPlaza":0,"PlazaDeliveryType":"","ShoppingcartPromoPackagesID":null,"DistrictId":' . $DistrictID . ',"StoreID":"' . $storeid . '","ShopZipCode":"' . $ZipCode . '"}', $kuntul);
								if (strpos($gass[1], '"Message":"success"')) {
									$createpay = curlx('https://api.klikindomaret.com/api/Payment/CreateId?Id=' . $SCID, null, $kuntul);
									$headers1 = array();
									$headers1[] = 'Host: payment.klikindomaret.com';
									$headers1[] = 'user-agent: klikindomaretmobile';
									$headers1[] = 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,/;q=0.8';
									for ($i = 0; $i < 3; $i++) {
										$getpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments?pcid=klikindomaret&trxtype=createorder&SCTPCID=' . $SCID . '&LAT=null&LONG=null&DeviceID=' . urut(16), null, $headers1);
										$linkx = get_between($getpay[1], '"hdTotalAmount" value="', '"');
										echo @color('nevy', "TOTAL : {$linkx}\n");
									}
									switch ($bayar) {
										case '1':
											echo "Total : {$linkx}\n";
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											// $submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"BPISAKU","TotalAmount":"'.$linkx.'","Token":"","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"i.Saku","useCoin":false,"potentialCoinShopee":"","Source":"Android"}', $parcel1);
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"BPISAKU","TotalAmount":"' . $linkx . '","Token":"","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"i.saku","IsFlashSale":"False","emailCustomer":"' . $nomor . '@klikindomaret.com","useCoin":false,"usePoint":false,"partialPointOVO":"0","potentialCoinShopee":"","Source":"MobileSite-Android","Client":"klikindomaret"}', $parcel1);
											$k = json_decode($submitpay[1])->Trxid;
											$lk = str_replace('TIM', '', $k);
											unlink('nganue.txt');
											echo shell_exec("xdg-open 'https://barcode.tec-it.com/barcode.ashx?data='{$lk}'&code=Code128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&codepage=Default&qunit=Mm&quiet=10&hidehrt=False'");
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											sleep(5);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->StatusPembayaran;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $TransactionCode . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "\n", 'transaksiIsaku.txt');
											break;
										case '2':
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											// $submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"702","TotalAmount":"'.$linkx.'","Token":"","IsCoupon":"1","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"Source":"Android"}', $parcel1);
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"702","TotalAmount":"' . $linkx . '","Token":"","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"BCA Virtual Account","IsFlashSale":"False","emailCustomer":"' . $nomor . '@klikindomaret.com","useCoin":false,"usePoint":false,"partialPointOVO":"0","potentialCoinShopee":"","Source":"MobileSite-Android","Client":"klikindomaret"}', $parcel1);
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->StatusPembayaran;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											   $dircrot = $sttp[0]->Referer;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
										
									echo " {$Yellow}➤{$White} Payment Redirect	 : " . $dircrot . "\n";
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "KODE VA: ");
											echo @color('nevy', "{$PaymentAccountID}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $TransactionCode . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "|Kode VA :" . $PaymentAccountID . "\n", 'transaksiBCA.txt');
											unlink('nganue.txt');
											break;
										case '3':
											echo @color('yellow', "Masukkan token: ");
											$tokentt = trim(fgets(STDIN));
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"RKPON","TotalAmount":"' . $linkx . '","Token":"' . $tokentt . '","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"CIMB Niaga Rekening Ponsel","useCoin":false,"potentialCoinShopee":"","Source":"Android"}', $parcel1);
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->StatusPembayaran;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											   $dircrot = $sttp[0]->Referer;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
										
									echo " {$Yellow}➤{$White} Payment Redirect	 : " . $dircrot . "\n";
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Status Pembayaran: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "KODE VA: ");
											echo @color('nevy', "{$PaymentAccountID}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $TransactionCode . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "|Kode VA :" . $PaymentAccountID . "\n", 'transaksiREKPON.txt');
											unlink('nganue.txt');
											break;
										case '4':
											echo "Total : {$linkx}\n";
											$parcel1 = array();
											$parcel1[] = 'Host: payment.klikindomaret.com';
											$parcel1[] = 'Accept: */*';
											$parcel1[] = 'Origin: https://payment.klikindomaret.com';
											$parcel1[] = 'user-agent: klikindomaretmobile';
											$parcel1[] = 'content-type: application/json; charset=UTF-8';
											$parcel1[] = 'x-requested-with: XMLHttpRequest';
											$padrcel1[] = 'Accept-Language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7';
											//  $submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"BPISAKU","TotalAmount":"'.$linkx.'","Token":"","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"i.Saku","useCoin":false,"potentialCoinShopee":"","Source":"Android"}', $parcel1);
											$submitpay = curlx('https://payment.klikindomaret.com/paymentcenter/Payments/SubmitPayment', '{"PaymentTypeCode":"VTBMRI","TotalAmount":"' . $linkx . '","Token":"","IsCoupon":"0","IsPaymentPartial":0,"WalletAmmount":"0","WalletPassword":"","IsVA":false,"PaymentTypeName":"Mandiri Virtual Account","IsFlashSale":"False","emailCustomer":"' . $nomor . '@klikindomaret.com","useCoin":false,"usePoint":false,"partialPointOVO":"0","potentialCoinShopee":"","Source":"MobileSite-Android","Client":"klikindomaret"}', $parcel1);
											// echo "\n\n $submitpay[1]\n\n";
											$k = json_decode($submitpay[1])->Trxid;
											$lk = str_replace('TIM', '', $k);
											//	echo shell_exec("xdg-open 'https://barcode.tec-it.com/barcode.ashx?data='$lk'&code=Code128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&codepage=Default&qunit=Mm&quiet=10&hidehrt=False'");
											$sttpay = curlx('https://api.klikindomaret.com/api/SalesOrder/GetSalesOrderHeaderListByCustomerIdAndSalesOrderNo/null?sortmode=&id=' . $ID . '&currPage=1&pageSize=30&no=&mode=0', null, $kuntul);
											//	echo "\n\n $sttpay[1]\n\n";
											sleep(5);
											$sttp = json_decode($sttpay[1]);
											$stbyr = $sttp[0]->PaymentAccountID;
											$sttype = $sttp[0]->PaymentTypeName;
											$sttexp = $sttp[0]->PaymentExpiredDate;
											$TransactionCode = $sttp[0]->TransactionCode;
											$jenenge = $sttp[0]->CustomerContactName;
											$totale = $sttp[0]->Total;
											$PaymentAccountID = $sttp[0]->PaymentAccountID;
											if ($stbyr == null) {
												$sttbayar = 'Segera cek';
											} else {
												$sttbayar = $stbyr;
											}
											echo @color('yellow', "Kode Transaksi: ");
											echo @color('nevy', "{$TransactionCode}\n");
											echo @color('yellow', "Kode VA: ");
											echo @color('nevy', "{$sttbayar}\n");
											echo @color('yellow', "Tipe Pembayaran: ");
											echo @color('nevy', "{$sttype}\n");
											echo @color('yellow', "PaymentExpiredDate: ");
											echo @color('nevy', "{$sttexp}\n");
											save("KodeTransaksi: " . $sttbayar . "|Nama: " . $jenenge . "|Nomor: " . $nomor . "|KodeToko: " . $tokonejon . "|Total: " . $totale . "\n", 'transaksimandiri.txt');
											unlink('nganue.txt');
											break;
									}
								} else {
									echo @color('red', "{$gass[1]}\n");
								}
							} else {
								echo @color('red', "{$poss[1]}\n");
							}
							break;
					}
				}
			} else {
				echo "{$responx}\n";
			}
			nyekip22:
			$no++;
		}
		break;
	default:
		die;
		break;
}
goto awalmula;
function curlx($url, $post, $headers, $follow = false, $method = null)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_COOKIEJAR, 'nganue.txt');
	curl_setopt($ch, CURLOPT_COOKIEFILE, 'nganue.txt');
	if ($follow == true) {
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	}
	curl_setopt($ch, CURLOPT_HEADER, 1);
	if ($method !== null) {
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
	}
	if ($headers !== null) {
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	}
	if ($post !== null) {
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	}
	$result = curl_exec($ch);
	$header = substr($result, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
	$body = substr($result, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
	preg_match_all('/^Set-Cookie:s*([^;]*)/mi', $result, $matches);
	$cookies = array();
	foreach ($matches[1] as $item) {
		parse_str($item, $cookie);
		$cookies = array_merge($cookies, $cookie);
	}
	return array($header, $body, $cookies);
}
function post($url, $data = null)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	$header[] = 'User-Agent: okhttp/3.12.1';
	$header[] = 'Connection: Keep-Alive';
	$header[] = 'Content-Type: application/json';
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_COOKIEJAR, "keliek.txt");
	curl_setopt($ch, CURLOPT_COOKIEFILE, "keliek.txt");
	$response = curl_exec($ch);
	$httpcode = curl_getinfo($ch);
	if (!$httpcode) {
		return false;
	} else {
		$header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
		$body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
	}
	$json = json_decode($body, true);
	print_r($json);
	return $response;
}
function getRequestt($url)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$header[] = 'User-Agent: okhttp/3.12.1';
	$header[] = 'Connection: Keep-Alive';
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_COOKIEJAR, "keliek.txt");
	curl_setopt($ch, CURLOPT_COOKIEFILE, "keliek.txt");
	$response = curl_exec($ch);
	$httpcode = curl_getinfo($ch);
	if (!$httpcode) {
		return false;
	} else {
		$header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
		$body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
	}
	$json = json_decode($body, true);
	print_r($json);
	return $response;
}
function postt($url, $data = null)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	$header[] = 'User-Agent: okhttp/3.12.1';
	$header[] = 'Connection: Keep-Alive';
	$header[] = 'Content-Type: application/json';
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_COOKIEJAR, "keliek.txt");
	curl_setopt($ch, CURLOPT_COOKIEFILE, "keliek.txt");
	$response = curl_exec($ch);
	$httpcode = curl_getinfo($ch);
	if (!$httpcode) {
		return false;
	} else {
		$header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
		$body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
	}
	$json = json_decode($body, true);
	print_r($json);
	return $response;
}
function curl($url, $post, $headers, $follow = false, $method = null)
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	if ($follow == true) {
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	}
	curl_setopt($ch, CURLOPT_HEADER, 1);
	if ($method !== null) {
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
	}
	if ($headers !== null) {
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	}
	if ($post !== null) {
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
	}
	$result = curl_exec($ch);
	$header = substr($result, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
	$body = substr($result, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
	preg_match_all('/^Set-Cookie:\\s*([^;]*)/mi', $result, $matches);
	$cookies = array();
	foreach ($matches[1] as $item) {
		parse_str($item, $cookie);
		$cookies = array_merge($cookies, $cookie);
	}
	return array($header, $body, $cookies);
}
function save($data, $file)
{
	$handle = fopen($file, 'a+');
	fwrite($handle, $data);
	fclose($handle);
}
function urut($length)
{
	$str = "";
	$characters = array_merge(range('0', '9'), range('a', 'z'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}
function get_between($string, $start, $end)
{
	$string = " " . $string;
	$ini = strpos($string, $start);
	if ($ini == 0) {
		return "";
	}
	$ini += strlen($start);
	$len = strpos($string, $end, $ini) - $ini;
	return substr($string, $ini, $len);
}
function remove_space($var)
{
	$new = str_replace("\n", "", $var);
	$new = str_replace("\t", "", $new);
	$new = str_replace(" ", "", $new);
	return $new;
}
function urut2($length)
{
	$str = "";
	$characters = array_merge(range('0', '9'), range('a', 'z'), range('A', 'Z'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}
function urut3($length)
{
	$str = "";
	$characters = array_merge(range('0', '9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}
function gen_uuid()
{
	return sprintf(
		'%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
		// 32 bits for "time_low"
		mt_rand(0, 0xffff),
		mt_rand(0, 0xffff),
		// 16 bits for "time_mid"
		mt_rand(0, 0xffff),
		// 16 bits for "time_hi_and_version",
		// four most significant bits holds version number 4
		mt_rand(0, 0xfff) | 0x4000,
		// 16 bits, 8 bits for "clk_seq_hi_res",
		// 8 bits for "clk_seq_low",
		// two most significant bits holds zero and one for variant DCE1.1
		mt_rand(0, 0x3fff) | 0x8000,
		// 48 bits for "node"
		mt_rand(0, 0xffff),
		mt_rand(0, 0xffff),
		mt_rand(0, 0xffff)
	);
}
function color($color = "default", $text)
{
	$arrayColor = array('grey' => '1;30', 'red' => '1;31', 'green' => '1;32', 'yellow' => '1;33', 'blue' => '1;34', 'purple' => '1;35', 'nevy' => '1;36', 'white' => '1;0');
	return "\x1b[" . $arrayColor[$color] . "m" . $text . "\x1b[0m";
}
function retrieveText($file, $init, $end, $sulfix = '')
{
	$i = 1;
	$output = '';
	$handle = fopen($file, 'r');
	while (false === feof($handle) && $i <= $end) {
		$data = fgets($handle);
		if ($i >= $init) {
			$output .= $data . $sulfix;
		}
		$i++;
	}
	fclose($handle);
	return $output;
}
class SMSActivate
{
	private $url = 'https://sms-activate.org/stubs/handler_api.php';
	private $apiKey;
	public function __construct($apiKey)
	{
		$this->apiKey = $apiKey;
	}
	public function getBalance()
	{
		return $this->request(array('api_key' => $this->apiKey, 'action' => __FUNCTION__), 'GET');
	}
	public function getNumber($service, $country = null, $forward = 0, $operator = null, $ref = null)
	{
		$requestParam = array('api_key' => $this->apiKey, 'action' => __FUNCTION__, 'service' => $service, 'forward' => $forward);
		if ($country) {
			$requestParam['country'] = $country;
		}
		if ($operator && ($country == 0 || $country == 1 || $country == 2)) {
			$requestParam['service'] = $operator;
		}
		if ($ref) {
			$requestParam['ref'] = $ref;
		}
		return $this->request($requestParam, 'POST', null, 1);
	}
	public function setStatus($id, $status, $forward = 0)
	{
		$requestParam = array('api_key' => $this->apiKey, 'action' => __FUNCTION__, 'id' => $id, 'status' => $status);
		if ($forward) {
			$requestParam['forward'] = $forward;
		}
		return $this->request($requestParam, 'POST', null, 3);
	}
	private function request($data, $method, $parseAsJSON = null, $getNumber = null)
	{
		$method = strtoupper($method);
		if (!in_array($method, array('GET', 'POST'))) {
			throw new InvalidArgumentException('Method can only be GET or POST');
		}
		$serializedData = http_build_query($data);
		if ($method === 'GET') {
			$result = file_get_contents("{$this->url}?{$serializedData}");
		} else {
			$options = array('http' => array('header' => "Content-type: application/x-www-form-urlencoded\r\n", 'method' => 'POST', 'content' => $serializedData));
			$context = stream_context_create($options);
			$result = file_get_contents($this->url, false, $context);
		}
		if ($parseAsJSON) {
			return json_decode($result, true);
		}
		$parsedResponse = explode(':', $result);
		if ($getNumber == 1) {
			$returnNumber = array('id' => $parsedResponse[1], 'number' => $parsedResponse[2]);
			return $returnNumber;
		}
		if ($getNumber == 2) {
			$returnStatus = array('status' => $parsedResponse[0], 'code' => $parsedResponse[1]);
			return $returnStatus;
		}
		if ($getNumber == 3) {
			$returnStatus = array('status' => $parsedResponse[0]);
			return $returnStatus;
		}
		return $parsedResponse[1];
	}
}
function urut16()
{
	return sprintf("%04x%04x%04x%04x", mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xfff) | 0x4000, mt_rand(0, 0x3fff) | 0x8000, mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff));
}
