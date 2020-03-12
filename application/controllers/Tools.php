<?php


class Tools extends CI_Controller
{
    public function message($to = 'world')
    {
        echo "Hello {$to}" . PHP_EOL;
    }
}