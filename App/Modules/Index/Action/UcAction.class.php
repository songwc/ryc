<?php
class UcAction extends Action {
	protected function _initialize() {
		$sql = "SELECT
	b.id,
	b.mname,
	b.url
FROM
	ryc_rolemenu a,
	ryc_menu b
WHERE
	a.mid=b.id AND
	a.rid=0";
		if ($menus = M ()->query ( $sql )) {
			$this->assign ( 'menus', $menus );
		}
	}
	Public function Index() {
		$this->display ();
	}
	public function security() {
		$this->display ();
	}
	public function recharge() {
		$this->display ();
	}
	public function trade() {
		$this->display ();
	}
	public function withdraw() {
		$this->display ();
	}
	public function bonus() {
		$this->display ();
	}
}
?>