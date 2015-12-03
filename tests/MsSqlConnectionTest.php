<?php

use Miinto\Database\MsSqlConnection;
use Miinto\Database\Schema\Grammars\MsSqlGrammar;

class MsSqlConnectionTest extends PHPUnit_Framework_TestCase
{
	public function testSchemaGrammar()
	{
		$conn = $this->getConnection();
		$conn->useDefaultSchemaGrammar();

		$this->assertInstanceOf(MsSqlGrammar::class, $conn->getSchemaGrammar());
	}

	public function testSchemaBuilder()
	{
		$conn = $this->getConnection();

		$this->assertInstanceOf(Illuminate\Database\Schema\Builder::class, $conn->getSchemaBuilder());
	}

	private function getConnection()
	{
		$conn = new MsSqlConnection($this->getPdo());
		$conn->enableQueryLog();

		return $conn;
	}

	private function getPdo()
	{
		return $this
			->getMockBuilder(PDO::class)
			->disableOriginalConstructor()
			->getMock();
	}
}
