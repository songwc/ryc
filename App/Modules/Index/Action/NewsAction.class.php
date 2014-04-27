<?php
Class NewsAction extends Action{
	Public function Index(){

		$news = M()->query("
	SELECT
	t.id,
	t.title,
	substr(t.createtime,1,10) createtime,
	concat(substr(t.content,1,150),'...') content
FROM
	ryc_news t 
ORDER BY
	t.createtime DESC
				");
		$this->assign('news',$news);
		$this->display();
		
	}
	public function NewsDetail($id)
	{
		$sql = 'select * from ryc_news where id='.$id;
		$news = M()->query($sql);

		$this->assign('news',$news);
		$this->display();
	}
}
?>