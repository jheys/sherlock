<?php
/**
 * User: Zachary Tong
 * Date: 2013-02-19
 * Time: 08:26 PM
 * Auto-generated by "generate.filters.php"
 */
namespace Sherlock\components\filters;

use Sherlock\components;

/**
 * @method \Sherlock\components\filters\Or or() or(array $value)
 * @method \Sherlock\components\filters\Or _cache() _cache(bool $value) Default: false

 */
class Or extends \Sherlock\components\BaseComponent implements \Sherlock\components\FilterInterface
{
    public function __construct($hashMap = null)
    {
        $this->params['_cache'] = false;

        parent::__construct($hashMap);
    }

    public function toArray()
    {
        $ret = array (
  'or' => $this->params["or"],
  '_cache' => $this->params["_cache"],
);

        return $ret;
    }

}
