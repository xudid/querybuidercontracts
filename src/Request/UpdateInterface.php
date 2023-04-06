<?php

namespace Xudid\QueryBuilderContracts\Request;

interface UpdateInterface extends RequestInterface
{
    public function set(string $column, $value) : static;
    public function where(string $argument1, $operatorType, $argument2 = '', $relation = 'AND'): static;
    public function join(string $table2, string $idTable1, string $idTable2) : static;
}
