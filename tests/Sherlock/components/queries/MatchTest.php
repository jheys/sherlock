<?php
/**
 * User: Zachary Tong
 * Date: 2/7/13
 * Time: 8:57 AM
 */

namespace sherlock\tests\components\queries\Match;

use sherlock\components\queries\Match;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-02-07 at 03:12:53.
 */
class MatchTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var Match
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp()
	{
		$this->object = new Match;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown()
	{
	}

	/**
	 * @covers sherlock\components\queries\Match::build
	 */
	public function testBuild()
	{
		$ret = $this->object->query("query")->field("field")->boost("1");
		$this->assertInstanceOf('sherlock\components\queries\Match', $ret);

		$final = $ret->build();
		$expectedFinal = array("match" =>
							array("field" =>
								array("query" => "query",
									"boost" => 1,
									"operator" => 'and',
									"analyzer" => 'default',
									"fuzziness" => 0.5,
									"fuzzy_rewrite" => 'constant_score_default',
									"lenient" => 1,
									"max_expansions" => 100,
									"minimum_should_match" => 2,
									"prefix_length" => 2
								)
							)
						);
		$this->assertEquals($expectedFinal,$final);
	}

	/**
	 * @covers sherlock\components\queries\Term::build
	 */
	public function testBuildExceptions()
	{
		//omit query
		$ret = $this->object->field("field")->boost(1);
		$this->assertInstanceOf('sherlock\components\queries\Match', $ret);

		$this->setExpectedException('RuntimeException');
		$final = $ret->build();

		//omit field
		$ret = $this->object->query("query")->boost(1);
		$this->assertInstanceOf('sherlock\components\queries\Match', $ret);

		$this->setExpectedException('RuntimeException');
		$final = $ret->build();

	}



}


?>