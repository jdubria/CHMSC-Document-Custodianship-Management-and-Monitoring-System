<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    require_once("../../connection/conn.php");
    if(isset($_GET['c_id'])){
        //get the conversation id and
        $conversation_id = base64_decode($_GET['c_id']);
        //fetch all the messages of $user_id(loggedin user) and $user_two from their conversation
        $q = mysqli_query($conn, "SELECT * FROM `messages` WHERE conversation_id='$conversation_id'");
        //check their are any messages
        if(mysqli_num_rows($q) > 0){
            while ($m = mysqli_fetch_assoc($q)) {
                //format the message and display it to the user
                $user_form = $m['user_from'];
                $user_to = $m['user_to'];
                $message = $m['message'];
                $datesend = $m['datesend'];

                
 
                //get name and image of $user_form from `user` table
                $user = mysqli_query($conn, "SELECT name FROM `user` WHERE userid ='$user_form'");
                $user_fetch = mysqli_fetch_assoc($user);
                $user_form_username = $user_fetch['name'];
                
 
                //display the message
                echo "
                            <div class='message'>
                                <div class='text-con' style='margin-bottom=0;'>
                                    <strong class='text-primary'><a href='#''>{$user_form_username}:</a></strong><br>
                                    <p><span>    </span>{$message}<br>
                                    <span class='text-danger'>{$datesend}<span></p>                                    
                                </div>
                            </div>
                            <br>
                            <hr>";
 
            }
        }else{
            echo "No Messages";
        }
    }