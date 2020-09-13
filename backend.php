<?php

  $sgtcnt_name = $_POST["sgtcnt_name"];
  $sgtcnt_email = $_POST["sgtcnt_email"];
  $sgtcnt_subject = $_POST["sgtcnt_subject"];
  $sgtcnt_message = $_POST["sgtcnt_message"];

if($sgtcnt_name != "" && $sgtcnt_email != ""){

  // $to = 'saugatasil@gmail.com';
  // $subject = 'hello';
  // $headers = "From: saugatasil@gmail.com";
  // $message = 'Hello World';

  // if(mail($to, $subject, $message, $headers)){
  //   echo "success";
  // }else{
  //   echo "error";
  // }
    echo "success";
  }else{
    echo "error";
  }
?>