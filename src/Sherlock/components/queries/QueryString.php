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
 * @method \Sherlock\components\queries\QueryString query() query(string $value)
 * @method \Sherlock\components\queries\QueryString default_field() default_field(string $value) Default: "_all"
 * @method \Sherlock\components\queries\QueryString boost() boost(float $value) Default: 2.0
 * @method \Sherlock\components\queries\QueryString enable_position_increments() enable_position_increments(int $value) Default: 1
 * @method \Sherlock\components\queries\QueryString default_operator() default_operator(string $value) Default: "OR"
 * @method \Sherlock\components\queries\QueryString analyzer() analyzer(string $value) Default: "default"
 * @method \Sherlock\components\queries\QueryString allow_leading_wildcard() allow_leading_wildcard(int $value) Default: 0
 * @method \Sherlock\components\queries\QueryString lowercase_expanded_terms() lowercase_expanded_terms(int $value) Default: 1
 * @method \Sherlock\components\queries\QueryString fuzzy_min_sim() fuzzy_min_sim(float $value) Default: 0.5
 * @method \Sherlock\components\queries\QueryString fuzzy_prefix_length() fuzzy_prefix_length(int $value) Default: 2
 * @method \Sherlock\components\queries\QueryString lenient() lenient(int $value) Default: 1
 * @method \Sherlock\components\queries\QueryString phrase_slop() phrase_slop(int $value) Default: 10
 * @method \Sherlock\components\queries\QueryString analyze_wildcard() analyze_wildcard(int $value) Default: 1
 * @method \Sherlock\components\queries\QueryString auto_generate_phrase_queries() auto_generate_phrase_queries(int $value) Default: 0
 * @method \Sherlock\components\queries\QueryString rewrite() rewrite(string $value) Default: "constant_score_default"
 * @method \Sherlock\components\queries\QueryString quote_analyzer() quote_analyzer(string $value) Default: "standard"
 * @method \Sherlock\components\queries\QueryString quote_field_suffix() quote_field_suffix(string $value) Default: ".unstemmed"

 */
class QueryString extends \Sherlock\components\BaseComponent implements \Sherlock\components\QueryInterface
{
    public function __construct($hashMap = null)
    {
        $this->params['default_field'] = "_all";
        $this->params['boost'] = 2.0;
        $this->params['enable_position_increments'] = 1;
        $this->params['default_operator'] = "OR";
        $this->params['analyzer'] = "default";
        $this->params['allow_leading_wildcard'] = 0;
        $this->params['lowercase_expanded_terms'] = 1;
        $this->params['fuzzy_min_sim'] = 0.5;
        $this->params['fuzzy_prefix_length'] = 2;
        $this->params['lenient'] = 1;
        $this->params['phrase_slop'] = 10;
        $this->params['analyze_wildcard'] = 1;
        $this->params['auto_generate_phrase_queries'] = 0;
        $this->params['rewrite'] = "constant_score_default";
        $this->params['quote_analyzer'] = "standard";
        $this->params['quote_field_suffix'] = ".unstemmed";

        parent::__construct($hashMap);
    }

    public function toArray()
    {
        $ret = array (
  'query_string' =>
  array (
    'query' => $this->params["query"],
    'default_field' => $this->params["default_field"],
    'boost' => $this->params["boost"],
    'enable_position_increments' => $this->params["enable_position_increments"],
    'default_operator' => $this->params["default_operator"],
    'analyzer' => $this->params["analyzer"],
    'allow_leading_wildcard' => $this->params["allow_leading_wildcard"],
    'lowercase_expanded_terms' => $this->params["lowercase_expanded_terms"],
    'fuzzy_min_sim' => $this->params["fuzzy_min_sim"],
    'fuzzy_prefix_length' => $this->params["fuzzy_prefix_length"],
    'lenient' => $this->params["lenient"],
    'phrase_slop' => $this->params["phrase_slop"],
    'analyze_wildcard' => $this->params["analyze_wildcard"],
    'auto_generate_phrase_queries' => $this->params["auto_generate_phrase_queries"],
    'rewrite' => $this->params["rewrite"],
    'quote_analyzer' => $this->params["quote_analyzer"],
    'quote_field_suffix' => $this->params["quote_field_suffix"],
  ),
);

        return $ret;
    }

}
