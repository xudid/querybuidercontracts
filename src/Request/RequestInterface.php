<?php

namespace Xudid\QueryBuilderContracts\Request;

interface RequestInterface
{
    public function toSql(): string;
	public function toPreparedSql(): string;
    public function getBindings(): array;
}
