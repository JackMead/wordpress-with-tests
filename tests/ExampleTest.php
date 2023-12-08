<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

require_once("wp-admin/includes/noop.php");
require_once("wp-content/plugins/hello.php");

final class ExampleTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $lyrics = hello_dolly_get_lyric()[0];
        $this->assertStringStartsWith(
            "Hello, Dolly",
            $lyrics            
        );
    }
}