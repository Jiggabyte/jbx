<?php
/**
 * Created by PhpStorm.
 * User: Jigga
 * Date: 06/07/2016
 * Time: 13:04
 */

if(!isset($_SESSION['jbx'])){

	exit();
}

class Chat {



    public function connect ($group_id,$userx,$temp){
        $db_base = new Joelvardy\Database();
        $db_base->instance();

        $sqlx = mysqli_query($db_base->instance(),"select username from online_user where username = '$userx'");
        $sqly = mysqli_query($db_base->instance(),"select userx from main_room where userx = '$userx'");
        $sqlz = mysqli_query($db_base->instance(),"select userx from med_room where userx = '$userx'");
                    
            if (mysqli_num_rows($sqlz) > 0 ) {
               // $querya = mysqli_query($db_base->instance(),"delete from med_room where userx = '$userx' ");
               // $queryb = mysqli_query($db_base->instance(), "insert into online_user (group_id,username,temp) values('$group_id','$userx','$temp')");

            } else {
                if (mysqli_num_rows($sqlx) > 0) {

                } else {
                    $query = mysqli_query($db_base->instance(), "insert into online_user (group_id,username,temp) values('$group_id','$userx','$temp')");
                }
            }
            if (mysqli_num_rows($sqly) > 0) {

            } else {
                $query1 = mysqli_query($db_base->instance(), "insert into main_room (userx,temp) values('$userx','$temp')");
                }
              $connex = mysqli_num_rows($sqlx) + mysqli_num_rows($sqly);

                return $connex;
    }

    public function disconnect (){
        $db_base = new Joelvardy\Database();
        $db_base->instance();
        $utor = $_SESSION['user_details']['username'];
        $grup = $_SESSION['user_details']['group_id'];

        $query4 = mysqli_query($db_base->instance(),"delete from online_user where username = '$utor' ");
        $query5 = mysqli_query($db_base->instance(),"delete from main_room where userx = '$utor' ");
        $query6 = mysqli_query($db_base->instance(),"delete from med_room where userx = '$utor' ");


            return true;
        }



    public function showUser (){
        $auth = new Joelvardy\Authentication();
        $row2 = "";
        if($auth->logged_in()) {
            $db_base = new Joelvardy\Database();
            $db_base->instance();

            $utor = $_SESSION['user_details']['username'];

        if (
        $query2 = mysqli_query($db_base->instance(), "select username from online_user")
        ) {

            $row2 = mysqli_fetch_array($query2);

            return $row2;
        } else {
            return 'error';
        }
} else {

        }
return $row2;
    }

    public function showUser_room (){
        $auth = new Joelvardy\Authentication();
        $row3 = "";
        if($auth->logged_in()) {
            $db_base = new Joelvardy\Database();
            $db_base->instance();


            $utor = $_SESSION['user_details']['username'];

            if (
            $query3 = mysqli_query($db_base->instance(), "select * from main_room where userx = '$utor'")
            ) {

                $row3 = mysqli_fetch_array($query3);

                return $row3;
            } else {
                return 'error';
            }

        }
        return $row3;
    }


    public function loggedIn (){
        $auth = new Joelvardy\Authentication();
        $cona = "";
        if($auth->logged_in()) {
            $db_base = new Joelvardy\Database();
            $db_base->instance();

            $utor = $_SESSION['user_details']['username'];

            $query2 = mysqli_query($db_base->instance(), "select username from online_user where username = '$utor'");

            if(mysqli_num_rows($query2) > 0){

                return $cona = true;
            } else {
                return $cona = false;
            }
        }
    return $cona;

    }


	public function ConsultChatCrypt( $string, $sk, $si, $action = 'e' ) {
		// you may change these values to your own
		$secret_key = $sk;
		$secret_iv = $si;

		$output = false;
		$encrypt_method = "AES-256-CBC";
		$key = hash( 'sha256', $secret_key );
		$iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );

		if( $action == 'e' ) {
			$output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
		}
		else if( $action == 'd' ){
			$output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
		}

		return $output;
	}

	public function conOffChat($madu,$ulo,$ozi,$oge){
		$db_link = new Joelvardy\Database();
		$db_link->instance();
		$ses_id = session_id();
		$eshi = date('Y-m-d');


			mysqli_query($db_link->instance(), "insert into off_msg (ses_id, userx, med, message, traffic, temp, eshi, status) values ('$ses_id','$madu','$ulo','$ozi','$madu','$oge','$eshi', 1)");

			$csd = mysqli_query($db_link->instance(), "select * from off_msg where userx = '$madu' and traffic = '$madu' and eshi = '$eshi'");
			$dsd = mysqli_fetch_array($csd);
			$onye = $dsd['message'];
			$mgbe = $dsd['temp'];

		$nsa = array($onye,$mgbe);
		return $nsa;
	}

	public function conOffChatDoc($madu,$ulo,$ozi,$oge){
		$db_link = new Joelvardy\Database();
		$db_link->instance();
		$ses_id = session_id();
		$eshi = date('Y-m-d');


		mysqli_query($db_link->instance(), "insert into off_msg (ses_id, userx, med, message, traffic, temp, eshi, status) values ('$ses_id','$madu','$ulo','$ozi','$ulo','$oge','$eshi', 1)");

		$csd = mysqli_query($db_link->instance(), "select * from off_msg where med = '$ulo' and traffic = '$ulo' and eshi = '$eshi'");
		$dsd = mysqli_fetch_array($csd);
		$onye = $dsd['message'];
		$mgbe = $dsd['temp'];

		$nsa = array($onye,$mgbe);
		return $nsa;
	}



	public function consultChat($madu,$otu,$ozi,$oge){
        $db_link = new Joelvardy\Database();
        $db_link->instance();
        $ses_id = session_id();
        $asd = mysqli_query($db_link->instance(), "SELECT * FROM med_room WHERE userx = '$madu' or med = '$madu' and status = 1");
        $bsd = mysqli_fetch_array($asd);
        $oko = $bsd['userx'];
        $med = $bsd['med'];
        $eshi = date('Y-m-d');

if($otu == 2) {
    if(isset($bsd)) {
        mysqli_query($db_link->instance(), "insert into chat_msg (ses_id, userx, med, message, traffic, temp, eshi) values ('$ses_id','$oko','$madu','$ozi','$madu','$oge','$eshi')");
    } else {

    }
    $csd = mysqli_query($db_link->instance(), "select * from chat_msg where userx = '$oko' and traffic = '$oko' and eshi = '$eshi'");
    $dsd = mysqli_fetch_array($csd);
    $onye = $dsd['message'];
    $mgbe = $dsd['temp'];
} else {
    if(isset($bsd)) {
        mysqli_query($db_link->instance(), "insert into chat_msg (ses_id, userx, med, message, traffic, temp, eshi) values ('$ses_id','$oko','$med','$ozi','$oko','$oge','$eshi')");
    } else {

    }
    $csd = mysqli_query($db_link->instance(), "select * from chat_msg where med = '$med' and traffic = '$med' and eshi = '$eshi'");
    $dsd = mysqli_fetch_array($csd);
    $onye = $dsd['message'];
    $mgbe = $dsd['temp'];
}
        $nsa = array($onye,$mgbe);
        return $nsa;
    }

    public function updateChat($otu){
        $db_link = new Joelvardy\Database();
        $db_link->instance();
        $asd = mysqli_query($db_link->instance(), "SELECT * FROM med_room WHERE status = 1");
        $bsd = mysqli_fetch_array($asd);
        $oko = $bsd['userx'];
        $med = $bsd['med'];
        $eshi = date('Y-m-d');

        if($otu == 2) {

            $csd = mysqli_query($db_link->instance(), "select * from chat_msg where userx = '$oko' and traffic = '$oko' and eshi = '$eshi'");
          $dsd = mysqli_fetch_array($csd);

        } else {

            $csd = mysqli_query($db_link->instance(), "select * from chat_msg where med = '$med' and traffic = '$med' and eshi = '$eshi'");
            $dsd = mysqli_fetch_array($csd);


        }

        return $dsd;
    }


}


?>