<?php

declare(strict_types=1);

namespace OliverKlee\DungeonOfBugs\Tests\Unit\Support;

use OliverKlee\DungeonOfBugs\FieldInterface;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

/**
 * @property FieldInterface $subject
 * @mixin TestCase
 */
trait ExpectsNonPassableField
{
    #[Test]
    public function fieldIsPassable(): void
    {
        self::assertFalse($this->subject->isPassable());
    }
}
