<?php

namespace Xudid\QueryBuilder\Contracts;

use Xudid\QueryBuilder\Contracts\Request\DeleteInterface;
use Xudid\QueryBuilder\Contracts\Request\InsertInterface;
use Xudid\QueryBuilder\Contracts\Request\SelectInterface;
use Xudid\QueryBuilder\Contracts\Request\UpdateInterface;

interface QueryBuilderInterface
{
    public function insert(string $table): InsertInterface;
    public function select(string...$fields): SelectInterface;
	public function update(string $table): UpdateInterface;
	public function delete(string... $tables): DeleteInterface;
}
