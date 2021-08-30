<!DOCTYPE html>
@extends('layouts.app')
@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Login shop ghaneipour</title> 
    </head>
    <body class="antialiased">
                
        <div>
            <form method=get>
                <?php 
                try{
                    $usr= $_GET['username1'];
                    $usp= $_GET['userpass1'];
                }
                catch(Exception $e) {
                    echo 'Message: ' . $e->getMessage().'<hr>';
                
                    $usr='nul';
                    $usp='nul';
                }
                ?>
                <hr>
                username:<input type=text name=username1 class="inputText" value="<?php echo ($usr);?>"><br>
                Password:<input type=password name=userpass1 value="<?php echo ($usp);?>"><br>
                Login:<input type=submit ><br>
            </form>  
        </div>
         
    </body>
</html>
($_SESSION);