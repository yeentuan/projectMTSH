<?php session_start() ;  ?>
<?php

	# Connection
	date_default_timezone_set("Asia/Bangkok") ;

	$Conhost 		  = 	"localhost";
	$Conuser 		  = 	"root";
	$Conpass 		  = 	"";
	$Condb 		  	= 	"bikerent";
	$connection = mysqli_connect($Conhost,$Conuser,$Conpass,$Condb) or die(" Denied  ") ;

	mysqli_query($connection,"SET NAME UTF8") ;
	mysqli_set_charset($connection,"utf8") ;


	$fulluri 			= 'http://'. $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	$this_ip 			= $_SERVER['REMOTE_ADDR'] ;

	$base_uri = 'http://localhost/newnobicha/' ;

	$lineapi = "V1qsabkQjFmkmK72wTcDKukIqqDqmt77ygK0xz35HYX" ; #Buddy



	function checklogin($var,$text,$go)
	{
		if($var == ''){
		  alert($text);
		  go($go) ;
		  die();
		}
	}


	# Database Query
	function _query($text){
		global $connection ;
		$query = mysqli_query($connection,$text) or die(mysqli_error());
		return $query; }

	function _fetch_array($query){
			$fetch = mysqli_fetch_array($query) ;
			return $fetch;}

	function fetch_array($text){
			global $connection ;
			$query = mysqli_query($connection,$text) or die(mysqli_error()) ;
			$fetch = mysqli_fetch_array($query) ;
			return $fetch;}

	function num_rows($text){
		global $connection ;
		$query = mysqli_query($connection,$text) or die(mysqli_error());
		$row = mysqli_num_rows($query) ;
		return $row  ; }

	function new_id(){
		global $connection ;
		return mysqli_insert_id($connection);
	}

	function real($text)
	{
		global $connection ;
		return mysqli_real_escape_string($connection,$text) ;
	}

	function gen_array($sql) {
			global $connection ;
		  $result = mysqli_query($connection,$sql);
	    while ($row = mysqli_fetch_array($result)) {
	        $data[] = $row;
	    }
	    return $data;
	  }
	function get_array($sql)
	{
	      return gen_array($sql);
	  }

	function num_fields($text){
		$query = mysqli_query($connection,$text) or die(mysqli_error());
		$row = mysqli_num_fields($query) ;
		return $row  ; }

		# javascript Function
	function alert($alert){
			print"<script type='text/javascript'>
			alert('$alert')
			</script>";
		}
	function alert_back($alert){
			print"<script type='text/javascript'>
			alert('$alert')
			window.history.back()
			</script>";
		}
	function alert_go($alert,$location){
			print"<script type='text/javascript'>
			alert('$alert')
			window.location='$location'
			</script>";
		}
	function alert_close($alert,$location){
			print"<script type='text/javascript'>
			alert('$alert')
			window.close()
			</script>";
		}
	function back(){
			print"<script type='text/javascript'>
			window.history.back()
			</script>";
		}
	function go($text){
			print"<script type='text/javascript'>
			window.location='$text'
			</script>";
		}
	function location($text){
			print"
			<script type='text/javascript'>
			window.location='$text'
			</script>";}

	function click_location($text){
			print"window.location='$text' ";

		}

	function click_cornfirm($text){
			print"return confirm('$text') ";
		}

	function open($text){
			print"
			<script type='text/javascript'>
			window.open('$text','_blank');
			</script>	";
		}
		function c_conf($text){
			print"onclick='return confirm('$text')' " ;
		}

		function chk_blank($val,$text){
			if($val == ''){alert_back($text);die();} ;
		}

		# Date & Time
		$date_time  	=  date('Y-m-d H:i:s');
		$date  				=  date('Y-m-d');
		$time 				=  date('H:i:s');
		$ipaddress 		= $_SERVER['REMOTE_ADDR'];
		$thaimonth 		= array("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");




		function cvd($format,$date)
		{
			$date = date($format,strtotime($date)) ;
			return $date ;
		}

		function daythai($date){ //daythai(date("D"))
		switch($date){
			case "Sun" : $d =  "อาทิตย์" ;break;
			case "Mon" : $d =  "จันทร์" ;break;
			case "Tue" : $d =  "อังคาร" ;break;
			case "Wed" : $d =  "พุธ" ;break;
			case "Thu" : $d =  "พฤหัสบดี" ;break;
			case "Fri" : $d =  "ศุกร์" ;break;
			case "Sat" : $d =  "เสาร์" ;break;
		}
		return $d ;
	}

	 function monththai($mn){//monththai(date("m"))
		switch($mn){
			case "1" : $d =  "มกราคม" ;break;
			case "2" : $d =  "กุมภาพันธ์" ;break;
			case "3" : $d =  "มีนาคม" ;break;
			case "4" : $d =  "เมษายน" ;break;
			case "5" : $d =  "พฤษภาคม" ;break;
			case "6" : $d =  "มิถุนายน" ;break;
			case "7" : $d =  "กรกฎาคม" ;break;
			case "8" : $d =  "สิงหาคม" ;break;
			case "9" : $d =  "กันยายน" ;break;
			case "10" : $d =  "ตุลาคม" ;break;
			case "11" : $d =  "พฤศจิกายน" ;break;
			case "12" : $d =  "ธันวาคม" ;break;
		}
		return $d ;
	}

	function montheng($mn){//monththai(date("m"))
	 switch($mn){
		 case "1" : $d =  "January" ;break;
		 case "2" : $d =  "February" ;break;
		 case "3" : $d =  "March" ;break;
		 case "4" : $d =  "April" ;break;
		 case "5" : $d =  "May" ;break;
		 case "6" : $d =  "June" ;break;
		 case "7" : $d =  "July" ;break;
		 case "8" : $d =  "August" ;break;
		 case "9" : $d =  "September" ;break;
		 case "10" : $d =  "October" ;break;
		 case "11" : $d =  "November" ;break;
		 case "12" : $d =  "December" ;break;
	 }
	 return $d ;
 }

	function yearthai($mn){
		$year = $mn + 543 ;
		return $year ;
	}

	function DateDiff($strDate1,$strDate2)
	{
			 return (strtotime($strDate2) - strtotime($strDate1))/  ( 60 * 60 * 24 );  // 1 day = 60*60*24
	}
	function TimeDiff($strTime1,$strTime2)
	{
			 return (strtotime($strTime2) - strtotime($strTime1))/  ( 60 * 60 ); // 1 Hour =  60*60
	}
	function DateTimeDiff($strDateTime1,$strDateTime2)
	{
			 return (strtotime($strDateTime2) - strtotime($strDateTime1))/  ( 60 * 60 ); // 1 Hour =  60*60
	}

			 function monttonum($mn){//monththai(date("n"))
		switch($mn){
			case "jan" : $a = "01" ;break;
			case "feb" : $a = "02" ;break;
			case "mar" : $a = "03" ;break;
			case "apr" : $a = "04" ;break;
			case "may" : $a = "05" ;break;
			case "jun" : $a = "06" ;break;
			case "jul" : $a = "07" ;break;
			case "aug" : $a = "08" ;break;
			case "sep" : $a = "09" ;break;
			case "oct" : $a = "10" ;break;
			case "nov" : $a = "11" ;break;
			case "dec" : $a = "12" ;break;
		}
		return $a;
	}


	function dateRange( $first, $last, $step = '+1 day', $format = 'Y-m-d' ) {
	    $dates = [];
	    $current = strtotime( $first );
	    $last = strtotime( $last );

	    while( $current <= $last ) {

	        $dates[] = date( $format, $current );
	        $current = strtotime( $step, $current );
	    }

	    return $dates;
	} 	// $leavedate_array = dateRange($start,$end) ;








	# TEXT Function

	function nbsp($max){
	  for( $i= 1;$i <= $max;$i++ ){
	    $nbsp =  "&nbsp;";
	    print $nbsp;
	      }
	      }
	function br($max){
	  for( $i= 1;$i <= $max;$i++ ){
	    print "<br/>";
	      }
	      }
	function hr($max){
	  for( $i= 1;$i <= $max;$i++ ){
	    print "<hr/>";
	      }
	      }
	function checkemail($email) {
		if (eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email))
			{	$result = 1;	}else{		$result = 0;}
			return $result;
			}

		# check file exist
	function chkfile($find)
		{
			$exist = 0 ;
			if(file_exists($find) == true)
			{
				$exist = 1 ;
			}
			return $exist ;
			}

	function selected($a,$b){
		if($a == $b){
			print "selected" ;
		}
			}

			function line($api,$text)
			{
				$text = urlencode($text) ;
				$chOne = curl_init();
				curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
				curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0);
				curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0);
				curl_setopt( $chOne, CURLOPT_POST, 1);
				curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=$text");
				curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1);
				$headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$api.'', );
				curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
				curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1);
				$resultX = curl_exec( $chOne );
				if(curl_error($chOne)) { print 'error:' . curl_error($chOne); }
				else { $resultX_ = json_decode($resultX, true);
				}
				curl_close( $chOne );
				#LINE SESSION
			}


			function dateDifference($date1, $date2)
	{
		$date1=strtotime($date1);
		$date2=strtotime($date2);
		$diff = abs($date1 - $date2);

		$day = $diff/(60*60*24); // in day
		$dayFix = floor($day);
		$dayPen = $day - $dayFix;
		if($dayPen > 0)
		{
			$hour = $dayPen*(24); // in hour (1 day = 24 hour)
			$hourFix = floor($hour);
			$hourPen = $hour - $hourFix;
			if($hourPen > 0)
			{
				$min = $hourPen*(60); // in hour (1 hour = 60 min)
				$minFix = floor($min);
				$minPen = $min - $minFix;
				$secFix = 0 ;
				if($minPen > 0)
				{
					$sec = $minPen*(60); // in sec (1 min = 60 sec)
					$secFix = floor($sec);
				}
			}
		}
		$str = "";
		if($dayFix > 0)
			$str.= $dayFix." วัน ";
		if($hourFix > 0)
			$str.= $hourFix." ชั่วโมง ";
		if($minFix > 0)
			$str.= $minFix." นาที ";
		if($secFix > 0)
			$str.= $secFix." วินาที ";
		return $str;
	}







	function dutydiff($date1, $date2)
{
$date1=strtotime($date1);
$date2=strtotime($date2);
$diff = abs($date1 - $date2);

$day = $diff/(60*60*24); // in day
$dayFix = floor($day);
$dayPen = $day - $dayFix;
if($dayPen > 0)
{
	$hour = $dayPen*(24); // in hour (1 day = 24 hour)
	$hourFix = floor($hour);
	$hourPen = $hour - $hourFix;
	if($hourPen > 0)
	{
		$min = $hourPen*(60); // in hour (1 hour = 60 min)
		$minFix = floor($min);
		$minPen = $min - $minFix;
		$secFix = 0 ;
		if($minPen > 0)
		{
			$sec = $minPen*(60); // in sec (1 min = 60 sec)
			$secFix = floor($sec);
		}
	}
}
$str = "";


if($dayFix > 0)
	$str.= $dayFix." วัน ";
if($hourFix > 0)
	$str.= $hourFix." ชั่วโมง ";
if($minFix > 0)
	$str.= $minFix." นาที ";
if($secFix > 0)
	$str.= $secFix." วินาที ";

	$OT_TIME = $hourFix ;

	if($minFix >= 30)
	{
		$OT_TIME = $OT_TIME + 0.5 ;
	}

	if($OT_TIME >= 4)
	{
		$OT_TIME = 4 ;
	}


return $OT_TIME;



}



function dutydiffETEG($date1, $date2)
{
$date1=strtotime($date1);
$date2=strtotime($date2);
$diff = abs($date1 - $date2);

$day = $diff/(60*60*24); // in day
$dayFix = floor($day);
$dayPen = $day - $dayFix;
if($dayPen > 0)
{
$hour = $dayPen*(24); // in hour (1 day = 24 hour)
$hourFix = floor($hour);
$hourPen = $hour - $hourFix;
if($hourPen > 0)
{
	$min = $hourPen*(60); // in hour (1 hour = 60 min)
	$minFix = floor($min);
	$minPen = $min - $minFix;
	$secFix = 0 ;
	if($minPen > 0)
	{
		$sec = $minPen*(60); // in sec (1 min = 60 sec)
		$secFix = floor($sec);
	}
}
}
$str = "";

if($dayFix > 0)
$str.= $dayFix." วัน ";
if($hourFix > 0)
$str.= $hourFix." ชั่วโมง ";
if($minFix > 0)
$str.= $minFix." นาที ";
if($secFix > 0)
$str.= $secFix." วินาที ";

$OT_TIME = $hourFix ;

if($minFix >= 30)
{
	$OT_TIME = $OT_TIME + 0.5 ;
}

if($OT_TIME >= 7)
{
	$OT_TIME = 7 ;
}
return $OT_TIME;
}




function dutydiffWORKDAY($date1, $date2)
{
$date1=strtotime($date1);
$date2=strtotime($date2);
$diff = abs($date1 - $date2);

$day = $diff/(60*60*24); // in day
$dayFix = floor($day);
$dayPen = $day - $dayFix;
if($dayPen > 0)
{
$hour = $dayPen*(24); // in hour (1 day = 24 hour)
$hourFix = floor($hour);
$hourPen = $hour - $hourFix;
if($hourPen > 0)
{
	$min = $hourPen*(60); // in hour (1 hour = 60 min)
	$minFix = floor($min);
	$minPen = $min - $minFix;
	$secFix = 0 ;
	if($minPen > 0)
	{
		$sec = $minPen*(60); // in sec (1 min = 60 sec)
		$secFix = floor($sec);
	}
}
}
$str = "";

if($dayFix > 0)
$str.= $dayFix." วัน ";
if($hourFix > 0)
$str.= $hourFix." ชั่วโมง ";
if($minFix > 0)
$str.= $minFix." นาที ";
if($secFix > 0)
$str.= $secFix." วินาที ";

$OT_TIME = $hourFix ;

if($minFix >= 30)
{
	$OT_TIME = $OT_TIME + 0.5 ;
}

if($OT_TIME >= 4)
{
	$OT_TIME = 4 ;
}
return $OT_TIME;
}


?>
