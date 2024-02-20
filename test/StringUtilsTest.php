<?php
namespace StringUtils;

require_once ('../vendor/autoload.php');


use function StringUtils\capitalize;

use Webmozart\Assert\Assert;

Assert::eq(capitalize(''), '');
// Первый параметр actual – то, что пришло
// Второй параметр expected – то, что ожидает тест
// Правильный порядок аргументов имеет большое значение при анализе ошибки
Assert::eq(capitalize('hello'), 'Hello');

