<?php
/**
 * Created by PhpStorm.
 * User: jigga
 * Date: 11/28/18
 * Time: 10:23 PM
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
