<?php

namespace Xudid\QueryBuilder\Contracts\Request;

interface RequestInterface
{
    public function toSql(): string;
	public function toPreparedSql(): string;
    public function getBindings(): array;
}
