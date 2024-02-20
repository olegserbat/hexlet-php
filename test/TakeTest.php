<?php

namespace StringUtils;

require_once('../vendor/autoload.php');


use Webmozart\Assert\Assert;

Assert::eq(take([], 2), []);

Assert::eq(take([1, 2, 3]), [1]);

Assert::eq(take([1, 2, 3], 2), [1, 2]);

Assert::eq(take([1, 2], 3), [1, 2]);

echo 'tests were gone';