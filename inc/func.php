<?php
   if ($_SERVER['REQUEST_URI'] == '/inc/func.php') {
        header('HTTP/1.0 403 Forbidden');
        die("<h1>403 - Access Forbidden!</h1>You can not access this folder...");
    }
    //$drs = dns_get_record($_SERVER['SERVER_NAME'].".keys.eldemozturk.com", DNS_TXT);
    //if ($drs[0]['txt'] != "OK" and $_SERVER['SERVER_NAME'] != "dhs.sitoga.net") {header('HTTP/1.0 403 Forbidden'); die("<h1>403 - Access Forbidden!</h1>You can not access this folder...");}

function multilang($setlang) {
    if(isset($setlang) and ($setlang == "TR" or $setlang == "NL")) {
        setcookie('myLang', $setlang, time()+60*60*24);
    }
    else {
        if(isset($_COOKIE['myLang'])) {
            $myLang = $_COOKIE['myLang'];
        }
        else {
            echo $GLOBALS['HTTP_ACCEPT_LANGUAGE'];
        }
    }
}

function hdr() {
    include 'inc/header.php';
}

function nav() {
    include 'inc/nav.php';
}

function ftr() {
    include 'inc/footer.php';
}

function nvbr($witp,$witn) {
    echo '<li';
    if(basename($_SERVER['REQUEST_URI'])==$witp.'.php') {echo ' class="active"';}
    echo '>'.PHP_EOL.'<a href="'.$witp.'.php">'.$witn.'</a>'.PHP_EOL.'</li>';
}
    
class tckn {
    protected $tc, $ad, $soy, $dy;
    public function check($tc,$ad,$soy,$dy) {
        $this->tc=$tc;$this->ad=$ad;$this->soy=$soy;$this->dy=$dy;
        $ia=$this->avible();
        if ($ia=='t') {
            $ir=$this->query();
            return $ir;
        }
        else {return -1;}
    }
    public function isav($tc) {
        $this->tc=$tc;
        $ia=$this->avible();
        return $ia;
    }
    protected function avible() {
        $f=$l=$h=0;
        $tc=$this->tc;
        $imp=array(
            '00000000000','11111111110','22222222220','33333333330','44444444440','55555555550','66666666660',
            '77777777770','88888888880','99999999990','11111111111','22222222222','33333333333','44444444444',
            '55555555555','66666666666','77777777777','88888888888','99999999999'
        );
        if ($tc[0]==0 || !ctype_digit($tc) || strlen($tc)!=11) {return 'f';}
        else {
            foreach ($imp as $it) {if($tc==$it) {return 'f';}}
            for($a=0;$a<9;$a=$a+2) {$f=$f+$tc[$a];}
            for($a=1;$a<9;$a=$a+2) {$l=$l+$tc[$a];}
            for($a=0;$a<10;$a=$a+1) {$h=$h+$tc[$a];}
            if (($f*7-$l)%10!=$tc[9] || $h%10!=$tc[10]) {return 'f';}
            else {return 't';}
        }
    }
    protected function query() {
        $r = $this->qwc();
        $o = strlen($r);
        if ($o == 392) {$ro = 'tt'; }
		elseif ($o == 393) {$ro = 'tf';}
		else {$ro = 'cf';}
		return $ro;
    }
    protected function qwc() {
        $tc1=$this->tc;
        $ad1=$this->ad;
        $soy1=$this->soy;
        $dy1=$this->dy;
        settype($tc1, "int");
        settype($dy1, "int");
        $curl = curl_init();
		curl_setopt($curl,CURLOPT_URL,'https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL');
		curl_setopt($curl,CURLOPT_POST,TRUE);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/soap+xml; charset=utf-8'));
		curl_setopt($curl,CURLOPT_POSTFIELDS,'<?xml version="1.0" encoding="utf-8"?>
		<soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
		  <soap12:Body>
			<TCKimlikNoDogrula xmlns="http://tckimlik.nvi.gov.tr/WS">
			  <TCKimlikNo>'.$tc1.'</TCKimlikNo>
			  <Ad>'.$ad1.'</Ad>
			  <Soyad>'.$soy1.'</Soyad>
			  <DogumYili>'.$dy1.'</DogumYili>
			</TCKimlikNoDogrula>
		  </soap12:Body>
		</soap12:Envelope>');
		curl_setopt($curl,CURLOPT_RETURNTRANSFER,TRUE);
		$out = curl_exec($curl);
		curl_close($curl);
        return $out;
    }
}

class db {
    protected $con;
    public function sdc() {
        global $db;
        if (@!$this->con) {
//            echo "Connecting...";
            $this->con = @mysqli_connect($db["host"],$db["user"],$db["pass"],$db['db']);
            @mysqli_query($this->con,"SET NAMES utf8");
            @mysqli_query($this->con,"SET NAMES 'UTF8'");
            @mysqli_query($this->con,"SET character_set_connection = 'UTF8'");
            @mysqli_query($this->con,"SET character_set_client = 'UTF8'");
            @mysqli_query($this->con,"SET character_set_results = 'UTF8'");
            if ($this->con) {
//                echo "Connected";
            }
            return $this->con;
//          return $db['user'];
        }
        else {
//            echo "Disconnecting...";
        }
    }
    protected function query($qr) {
        $res = @mysqli_query($this->con,$qr);
        return $res;
    }
    public function iller() {
        global $db;
        global $cl;
        $last="";
        for($i=1;$i<=81;$i++) {
            $qr = $this->query("select il from ".$db['db'].".".$db["pre"]."turkiye where ik=".$i);
            while ($row=$qr->fetch_array()) {if($last!=$row[0]){$last=$row[0];$cl[$i]=$row[0];}}
        }
    }
    public function ilceler($ik) {
        global $db;
        global $sl;
        $i=1;
        $sl = $this->query("select ilce from ".$db['db'].".".$db["pre"]."turkiye where ik=".$ik);
    }
    public function reg($p) {
        global $db; global $cl;
        $nst=0;
        if (strlen($p['ad']) >= 2) {$nst++;};
        if (strlen($p['sa']) >= 2) {$nst++;};
        if ($p['ct'] == "E" || $p['ct'] == "K") {$nst++;};
        if ($p['dg'] >= 1 && $p['dg'] <= 31) {$nst++;};
        if ($p['da'] >= 1 && $p['da'] <= 12) {$nst++;};
        if ($p['dy'] >= 1900 && $p['dy'] <= date("Y")-16) {$nst++;};
        if ($p['tc'] >= 10000000000 && $p['tc'] <= 99999999999) {$nst++;};
        if ($p['sh'] >= 1 && $p['sh'] <= 81) {$nst++;};
        if (strlen($p['ic']) >= 2) {$nst++;};
        if (strlen($p['mh']) >= 2) {$nst++;};
        if (strlen($p['cd']) >= 2 || strlen($p['sk']) >= 2) {$nst++;};
        if (strlen($p['aa']) >= 2) {$nst++;};
        if (!empty($p['an']) || !empty($p['kn'])) {$nst++;};
        if ($p['ta'] >= 100 && $p['ta'] <= 999) {$nst++;};
        if (strlen($p['tn']) >= 7 || ($p['tn'] >= 1000000 && $p['tn'] <= 9999999)) {$nst++;};
        if (strlen($p['ea']) >= 2) {$nst++;};
        if (strlen($p['es']) >= 4) {$nst++;};
        if ($nst<17) {
            die("Yetersiz bilgi.");
            exit;
            // Error coding!
        }
        elseif ($nst>17) {
            die("Aşırı yüklenme.");
            exit;
            // another Error coding!
        }
        $iq="insert into ".$db['db'].".".$db['pre']."uyeler (`ad`, `soyad`, `cinsiyet`, `dgun`, `day`, `dyil`, `tckn`, `sehir`, `ilce`, `mahalle`, `cadde`, `sokak`, `aptadi`, `aptno`, `kapino`, `tela`, `teln`, `epadresi`, `epservis`, `not`) VALUES ('".$p['ad']."', '".$p['sa']."', '".$p['ct']."', '".$p['dg']."', '".$p['da']."', '".$p['dy']."', '".$p['tc']."', '".$cl[$p['sh']]."', '".$p['ic']."', '".$p['mh']."', '".$p['cd']."', '".$p['sk']."', '".$p['aa']."', '".$p['an']."', '".$p['kn']."', '".$p['ta']."', '".$p['tn']."', '".$p['ea']."', '".$p['es']."', '".$p['nt']."')";
        $grt=$this->query($iq);
        return $grt;
    }
	public function getstat() {
		$this->sdc();
		$sy=array('ut' => 0,'uk' => 0,'ue' => 0,'uy' => 0,'un' => 0,'yuk' => 0,'yue' => 0,'yuy' => 0,'yun' => 0);
		global $db;
        global $sas;
        $qo = $this->query("select cinsiyet,onaylandi from ".$db['db'].".".$db["pre"]."uyeler");
		while ($row = $qo->fetch_array()) {
			$sy['ut']++;
			if ($row['cinsiyet']=='K') {$sy['uk']++;}
			if ($row['cinsiyet']=='E') {$sy['ue']++;}
			if ($row['onaylandi']=='E') {$sy['uy']++;}
			if ($row['onaylandi']=='H') {$sy['un']++;}
		}
		$sy['yuk']=@floor(($sy['uk']/$sy['ut'])*100);
		$sy['yue']=@floor(($sy['ue']/$sy['ut'])*100);
		$sy['yuy']=@floor(($sy['uy']/$sy['ut'])*100);
		$sy['yun']=@floor(($sy['un']/$sy['ut'])*100);
		$sas=$sy;
		$this->sdc();
	}
}

class tools {
    public function selopt($why) {
        if ($why=='y') {for($i=date("Y")-17;$i>=1900;$i--){echo"<option value='$i'>$i</option>";}}
        if ($why=='a') {for($i=1;$i<=12;$i++){echo"<option value='$i'>$i</option>";}}
        if ($why=='g') {for($i=1;$i<=31;$i++){echo"<option value='$i'>$i</option>";}}
        if ($why=='s') {
            global $cl;
            echo"<option value='0' selected='selected' disabled='disabled'>Şehir</option>";
            for($i=1;$i<=81;$i++){echo"<option value='$i'>".$cl[$i]."</option>";}
        }
        if ($why=='c') {
            global $sl;
            while ($row = $sl->fetch_array()) {echo"<option value='$row[0]'>$row[0]</option>";}
        }
    }
}

function instagram($gcount=0){
    global $instagram;
    $in=0;
    $count = ($gcount==0) ? $instagram['pcount'] : $gcount;
    $url = 'https://api.instagram.com/v1/users/'.$instagram['userid'].'/media/recent/?access_token='.$instagram['token'].'&count='.$count;

    // Also Perhaps you should cache the results as the instagram API is slow
    $cache = './'.sha1($url).'.json';
    if(file_exists($cache) && filemtime($cache) > time() - 60*60){
        // If a cache file exists, and it is newer than 1 hour, use it
        $jsonData = json_decode(file_get_contents($cache));
    } else {
        $jsonData = json_decode((file_get_contents($url)));
        file_put_contents($cache,json_encode($jsonData));
    }

    $result = '<div id="instagram">'.PHP_EOL;
    foreach ($jsonData->data as $key=>$value) {
        $in++;$count--;
        if ($in==1) {
            $result .= '<div class="row mb-2">'.PHP_EOL;
        }
        $result .= "\t".'<div class="col-md-4"><img src="'.$value->images->low_resolution->url.'" alt="'.$value->caption->text.'"/><h2>'.$value->caption->text.'</h2><p>&nbsp;</p></div>'.PHP_EOL;
        if ($in==3) {
            $result .= '</div><p>&nbsp;</p>'.PHP_EOL;
            $in=0;
        }
        if ($count==0 && $in>0) {
            $result .= '</div>'.PHP_EOL;
        }
    }
    $result .= '</div>'.PHP_EOL;
    return $result;
}
