<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once("../../connection/conn.php");
    //post message
    if(isset($_POST['message'])){
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        $conversation_id = mysqli_real_escape_string($conn, $_POST['conversation_id']);
        $user_form = mysqli_real_escape_string($conn, $_POST['user_form']);
        $user_to = mysqli_real_escape_string($conn, $_POST['user_to']);
 
        //decrypt the conversation_id,user_from,user_to
        $conversation_id = base64_decode($conversation_id);
        $user_form = base64_decode($user_form);
        $user_to = base64_decode($user_to);
 
        //insert into `messages`
        $q = mysqli_query($conn, "INSERT INTO `messages` VALUES ('','$conversation_id','$user_form','$user_to','$message', '1', NOW())");
        if($q){
            echo "Posted";
        }else{
            echo "Error";
        }
    }