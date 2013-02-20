<?php
/**
 * User: Zachary Tong
 * Date: 2013-02-16
 * Time: 09:24 PM
 * Auto-generated by "generate.php"
 */
namespace sherlock\components\queries;

use sherlock\components;
use sherlock\common\exceptions;


/**
 * @method \sherlock\components\queries\Term field() field(\string $value)
 * @method \sherlock\components\queries\Term term() term(\string $value)

 */
class Term extends \sherlock\components\BaseComponent implements \sherlock\components\QueryInterface
{
	public function __construct($hashMap = null)
	{

		parent::__construct($hashMap);
	}
	
	public function toArray()
	{
		$ret = array (
  'term' => 
  array (
    $this->params["field"] => 
    array (
      'value' => $this->params["term"],
    ),
  ),
);
		return $ret;
	}

}

?>