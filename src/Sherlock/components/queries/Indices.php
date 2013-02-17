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
 * @method \sherlock\components\queries\Indices indices() indices(array $value)
 * @method \sherlock\components\queries\Indices query() query(\sherlock\components\QueryInterface $value)
 * @method \sherlock\components\queries\Indices no_match_query() no_match_query(\sherlock\components\QueryInterface $value)

 */
class Indices extends \sherlock\components\BaseComponent implements \sherlock\components\QueryInterface
{
	public function __construct($hashMap = null)
	{

		parent::__construct($hashMap);
	}
	
	public function toArray()
	{
		$ret = array (
  'indices' => 
  array (
    'indices' => $this->params["indices"],
    'query' => $this->params["query"],
    'no_match_query' => $this->params["no_match_query"],
  ),
);
		return $ret;
	}

}

?>