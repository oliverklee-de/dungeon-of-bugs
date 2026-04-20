<?php

declare(strict_types=1);

$config = \TYPO3\CodingStandards\CsFixerConfig::create();

$config->setRules([
    '@PER-CS1x0' => true,
]);

$config->setParallelConfig(\PhpCsFixer\Runner\Parallel\ParallelConfigFactory::detect());

$finder = $config->getFinder();

$finder
    ->in(__DIR__ . '/../../src')
    ->in(__DIR__ . '/../../tests')
    ->in(__DIR__ . '/../../Build');

return $config;
