<?php

//-TO verify user if present or not

session_start();

function chk_token()
{
    if(empty($_SESSION['token']))
    {
        //---header user to login
        return false;
    }
    else
    {
    //session exists, verify token
        if($_SESSION['time']-time()>60*60)
        {
            session_destroy();
            return false;
        }
        else return true;
    }
}
function tock_min_valid($time=5)
{
    if($_SESSION['time']-time()<$time)
        {
            //session_destroy();
            return false;
        }
        else return true;
    
}

function add_token($val)
{
    $_SESSION['token']=$val;
    $_SESSION['time']=time();
}