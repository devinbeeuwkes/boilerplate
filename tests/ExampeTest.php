<?php

use Devin\Algolia\Parser;

class ExampeTest extends \PHPUnit\Framework\TestCase
{
    public function test_it_loads_file_contents()
    {
        $this->assertNotEmpty(file_get_contents(__DIR__ . '/test.html'));
    }
}
