<?php


class Page
{
	public $offset;
	public $length;
	public $show;

	public function __construct($tot,$length){
		$this->tot=$tot;
		$this->length=$length;

		@$page=$_GET['p']?$_GET['p']:1;
		$this->offset=($page-1)*$this->length;
		$pages=ceil($tot/$this->length);
		$next=$page+1;
		if($next>=$pages) {
			$next=$pages;
		}

		$prev=$page-1;
		if($prev<=1) {
			$prev=1;
		}

		$this->show="<a href='index.php?p={$prev}' class='btn btn-primary'>上一页</a>
				<a href='index.php?p={$next}' class='btn btn-danger'>下一页</a>";
	}
}

?>