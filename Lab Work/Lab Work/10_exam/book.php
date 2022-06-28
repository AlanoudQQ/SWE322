<?php 

class book {
	public $bid;
  	public $btitle;
  	public $borrow;

  	// constructor
  	function __construct($bid ,$btitle,$b) {
  		$this->id = $bid;
  		$this->title = $btitle;
  		$this->borrow = $b;
  	}

  	// Print info in table row
  	function get_info(){
  		echo (
		"<tr>
		  <td>". $this->bid ."</td>
		  <td>". $this->btitle ."</td>");
  		if ($this->borrow > 17) {
  			echo("<td style='color: red'>". $this->borrow ."</td>");
  		}else {
  			echo("<td>". $this->borrow ."</td>");
  		}
  	}
}

?>
