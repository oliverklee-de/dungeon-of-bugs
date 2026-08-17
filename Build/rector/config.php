<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/../../src/',
        __DIR__ . '/../../tests/',
    ])
    ->withPhpSets()
    ->withComposerBased(phpunit: true)
    ->withSets([
        // SetList::CODE_QUALITY,
        // SetList::CODING_STYLE,
        // SetList::DEAD_CODE,
        // SetList::EARLY_RETURN,
        // SetList::INSTANCEOF,
        // SetList::NAMING,
        // SetList::PRIVATIZATION,
        // SetList::STRICT_BOOLEANS,
        SetList::TYPE_DECLARATION,
    ])
    ->withRules([
        AddVoidReturnTypeWhereNoReturnRector::class,
    ])
    ->withImportNames(true, true, false)
    ->withSkip([
    ]);
