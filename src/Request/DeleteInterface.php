<?php

namespace Xudid\QueryBuilder\Contracts\Request;

interface DeleteInterface
{
    public function from(string...$tables) : static;
    public function where(string $argument1, $operatorType, $argument2 = '', $relation = 'AND'): static;
    public function join(string $table2, string $idTable1, string $idTable2) : static;
}
