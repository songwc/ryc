<?php

Class IndexAction extends Action{
	Public function Index(){
		$sql = "
		SELECT
		t.id,
		CASE
		WHEN CHAR_LENGTH(title) > 12
		THEN CONCAT(substr(t.title,1, 12), '...')
		ELSE substr(t.title,1, 12)
		END AS title,
		substr(t.createtime, 6, 5) as createtime
		FROM
		ryc_news t
		ORDER BY
		t.createtime DESC LIMIT 8";
		
		if ($news = M()->query($sql))
		{
			$this->assign('news', $news );
			$this->display();
		}
		else 
		{
			halt('页面不存在');
		}
	}
	public function Uc()
	{
		if (!IS_AJAX)
			halt('页面不存在');
		$this->display("uc");
	}
}
?>