<?php

namespace Xudid\QueryBuilderContracts;

use Xudid\QueryBuilderContracts\Request\DeleteInterface;
use Xudid\QueryBuilderContracts\Request\InsertInterface;
use Xudid\QueryBuilderContracts\Request\SelectInterface;
use Xudid\QueryBuilderContracts\Request\UpdateInterface;

interface QueryBuilderInterface
{
    public function insert(string $table): InsertInterface;
    public function select(string...$fields): SelectInterface;
	public function update(string $table): UpdateInterface;
	public function delete(string... $tables): DeleteInterface;
}
