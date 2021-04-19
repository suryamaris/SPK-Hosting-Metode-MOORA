<?php
defined('BASEPATH') OR exit('No direct script allowed');

class Hello extends CI_controller{
	public function index()
	{
	echo'Hello World!!';
	}
	Public function hello1(){
	echo'Hello';
	}

	public function hello2($nama){
	echo 'hello '.$nama;
	}
}