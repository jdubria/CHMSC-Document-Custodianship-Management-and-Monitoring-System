<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'connection/conn.php';
include 'connection/session.php';

session_destroy();

header('Location: index.php?logout=1');

