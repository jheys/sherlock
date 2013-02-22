<?php
/**
 * User: Zachary Tong
 * Date: 2013-02-16
 * Time: 09:24 PM
 * Auto-generated by "generate.php"
 */
namespace Sherlock\components\queries;

use Sherlock\components;

/**
 * @method \Sherlock\components\queries\Bool minimum_number_should_match() minimum_number_should_match(int $value) Default: 2
 * @method \Sherlock\components\queries\Bool boost() boost(float $value) Default: 1.0
 * @method \Sherlock\components\queries\Bool disable_coord() disable_coord(int $value) Default: 1

 */
class Bool extends \Sherlock\components\BaseComponent implements \Sherlock\components\QueryInterface
{
    public function __construct($hashMap = null)
    {
        $this->params['must'] = array();
        $this->params['must_not'] = array();
        $this->params['should'] = array();
        $this->params['minimum_number_should_match'] = 2;
        $this->params['boost'] = 1.0;
        $this->params['disable_coord'] = 1;

        parent::__construct($hashMap);
    }

    public function must($value)
    {
        $args = func_get_args();
        if (count($args) == 1)
            $args = $args[0];

        foreach ($args as $arg) {
            if ($arg instanceof \Sherlock\components\QueryInterface)
                $this->params['must'][] = $arg->toArray();
        }

        return $this;
    }

    public function must_not($value)
    {
        $args = func_get_args();
        if (count($args) == 1)
            $args = $args[0];

        foreach ($args as $arg) {
            if ($arg instanceof \Sherlock\components\QueryInterface)
                $this->params['must_not'][] = $arg->toArray();
        }

        return $this;
    }

    public function should($value)
    {
        $args = func_get_args();
        if (count($args) == 1)
            $args = $args[0];

        foreach ($args as $arg) {
            if ($arg instanceof \Sherlock\components\QueryInterface)
                $this->params['should'][] = $arg->toArray();
        }

        return $this;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        $ret = array (
  'bool' =>
  array (
    'must' => $this->params["must"],
    'must_not' => $this->params["must_not"],
    'should' => $this->params["should"],
    'minimum_number_should_match' => $this->params["minimum_number_should_match"],
    'boost' => $this->params["boost"],
    'disable_coord' => $this->params["disable_coord"],
  ),
);

        return $ret;
    }

}
