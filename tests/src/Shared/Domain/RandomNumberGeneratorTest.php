<?php

namespace CodelyTv\Tests\Shared\Infrastructure;

use CodelyTv\Shared\Infrastructure\RandomNumberGenerator;
use PHPUnit\Framework\TestCase;

class RandomNumberGeneratorTest extends TestCase
{
    /** @test */
    public function it_shoul_generate_a_random_number(): void
    {
        $generator = new RandomNumberGenerator();

        $this->assertIsNumeric($generator->generate());
    }
}
