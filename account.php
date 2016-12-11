<?php
require '../dao/connectToDB.php'
class Account{
	public $id;
	public $acname;
	public $password;
	public $tel;
	public $email;
	public $createtime;
	public function__construct($acname,$password,$tel,$email,$createtime){
		$this->acname=$acname;
		$this->password=$password;
		$this->tel=$tel;
		$this->email=$email;
		$this->createtime=$createtime;
	}
	public addAccount($acname,$password,$tel,$email,$createtime){
		$createtime=date(DATE_COOKIE);
		$str="insert into account";
	}
	
}
?>