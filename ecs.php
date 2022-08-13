<?php

use Symplify\EasyCodingStandard\Config\ECSConfig;
use Symplify\EasyCodingStandard\ValueObject\Set\SetList;

return static function (ECSConfig $ecsConfig): void {
	$ecsConfig->paths([
		__DIR__ . '/src',
		__DIR__ . '/tests',
	]);

	$ecsConfig->sets([
		SetList::PSR_12,
	]);

	$ecsConfig->indentation('tab');
};
