<?php
    header("Content-Type: text/text");

    $cfg = array(
    	"url" => "YOUR WEBSITE URL",
    	"pass" => "YOUR PASSWORD"
    );

    if(isset($_POST['user'])){
        if($_POST['user'] == $cfg['pass']){
            $tar = "i/".uniqid().".".strtolower(substr(strrchr($_FILES['form']['name'],'.') ,1));
            if(move_uploaded_file($_FILES['form']['tmp_name'], $tar)){
                echo $cfg['url'].$tar;
            }else{
                echo "Error";
            }
        }else{
            header('Location: '.$cfg['url']);
        }
    }else{
        header("Location: ".$cfg['url']);
    }