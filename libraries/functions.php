<?php
/**
 * JB X - A lightweight PHP MVC Boilerplate
 *
 * @package  JB X
 * @author   Sixtus Onumajuru <jigga.e10@gmail.com>
 */


function alerter($text = 'Hello World!',$left = '50px',$top = '100px',$bg_color = '#e3e658',$text_color = 'black'){


	// Instantiate the class
	$msg = new \Plasticbrain\FlashMessages\FlashMessages();

// Add messages
	$msg->setCloseBtn('<button type="button"
                   style="position:absolute;left:180px;top:207px;
                   border:none;background-color:transparent;display:none;">
                   </button>');
	$msg->warning('<div id="ozi" style="position:fixed;left:'.$left.';top:'.$top.';
            background-color:'.$bg_color.';padding:5px;word-wrap:break-word;width:320px;border:1px solid grey;
            border-radius:2px;color:black;font-weight:bold;z-index:99;">'.$text.'<button id="mechie" type="button"
            style="margin-left:50px;margin-bottom:25px;z-index:100;border:none;background-color:transparent;
            float:right;color:;font-weight:bold;">X</button></div>
            <script type="text/javascript">
            document.querySelector("#mechie").onclick = function(){
            document.querySelector("#ozi").style.display = "none";
            }
            </script>');

	return $msg->display($msg::WARNING);
};

function logout(){

	session_unset();
	session_destroy();
	header('Location:/');

}


function pager($lim,$sql_counter,$sql_data,$back_url){
	$rec_limit = $lim;

	/* Get total number of records */
	$sqle = $sql_counter;
	$retvale = mysqli_query( $link,$sqle );

	if(! $retvale ) {
		die('Could not get data: ' . mysqli_error($link));
	}
	$rowe = mysqli_fetch_array($retvale, MYSQLI_NUM );
	$rec_count = $rowe[0];

	if( isset($_GET{'page'} ) ) {
		$page = mysqli_real_escape_string($link,$_GET{'page'} + 1);
		$offset = $rec_limit * $page ;
	}else {
		$page = 0;
		$offset = 0;
	}

	$left_rec = $rec_count - ($page * $rec_limit);
	$usx = $_SESSION['user_data']['email'];

	$query = mysqli_query($link, $sql_data."ORDER BY id DESC LIMIT $offset,$rec_limit");

	$rowx = mysqli_fetch_array($query);
	if(empty($rowx)){
		echo '<div><span><a href='.$back_url.'><button style="background-color: #e83e8c;color:white;margin:20px;width:50px;">Back</button></a></span><span><b> -- No Applications! --</b></span><span></span><span></span><span></span></div>';
	} else {

		while ($row = mysqli_fetch_array($query)){


			echo '
                    <div style="margin-left:0px;margin-top:0px;font-weight:bold;color:blue;font-family:Georgia;">
                        <span style="width:20px;margin-right:10px;overflow:hidden;">' . $row['id'] . '</span><span style="width:90px;margin-right:10px;overflow:hidden;">'.$row['created'].'</span><span style="width:70px;margin-right:10px;overflow:hidden;">' . $row['payment'] . '</span><span style="width:70px;margin-right:10px;overflow:hidden;"><a href="viewer.php?viewer=true&ref=' . $row['application_no'] . '" target="ifrm_a"><button style="width:50px;background-color: #e83e8c;color:white;">View</button></a></span>
                    </div>
                                  
                    ';

		}

		if( $page > 0 ) {
			$last = $page - 2;
			echo '<br /><a href = "'.htmlspecialchars($_SERVER['PHP_SELF']).'?page='.$last.'" class="pager"><button>Previous</button> |</a> ';

			if( $left_rec < $rec_limit ){

			}else {
				echo '<a href="'.htmlspecialchars($_SERVER['PHP_SELF']).'?page='.$page.'" class="pager"><button>Next</button></a>';
			}
		}
		else if( $page == 0 ) {
			echo '<br /><a href = "'.htmlspecialchars($_SERVER['PHP_SELF']).'?page='.$page.'" class="pager"><button>Next</button></a>';
		}else  {
		}


	}


}