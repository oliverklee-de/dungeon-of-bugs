<?php

declare(strict_types=1);

namespace OliverKlee\DungeonOfBugs\Tests\Unit;

use PHPUnit\Framework\Attributes\CoversNothing;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

#[CoversNothing]
final class PlaceholderTest extends TestCase
{
    #[Test]
    public function universeIsStillOkay(): void
    {
        self::assertSame(2, 1 + 1);
    }
}
