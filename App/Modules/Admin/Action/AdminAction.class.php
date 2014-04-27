<?php

class AdminAction extends CommonAction{

	public function Index(){
		//halt('2222');
		$this->display();
	}
	public function Login (){
		//if (!IS_POST) halt("");
		echo '<a href="logout"> logout</a>';
	}
	public function logout(){
		session_unset();
		session_destroy();
		$this->redirect('index');
	}
}
?>
