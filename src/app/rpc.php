<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace rpc\contract\Test;

interface TestInterface
{
	const RPC = 'Test';

	public function test($name);
}

interface DemoInterface
{
	const RPC = 'Test';

	public function inc($int);
}
