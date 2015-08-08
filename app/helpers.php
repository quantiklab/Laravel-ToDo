<?php


function message($title = null, $message = null)
{
    $message = app('App\Http\Message');
    if(func_num_args()==0){
        return $message;
    }
    return $message->info($title, $message); // Just call the message function and immediately pass the Title and Body
}