<?php

namespace Xudid\QueryBuilder\Contracts\Request;

interface SelectInterface
{
    public function from(string...$tables) : static;
    public function distinct() : static;
    public function groupBy(string $fieldName): static;
    public function having(string $havingCondition): static;
    public function orderBy($field, $direction = 'ASC'): static;
    public function limit($limit);
    public function where(string $argument1, $operatorType, $argument2 = '', $relation = 'AND'): static;
    public function join(string $table2, string $idTable1, string $idTable2) : static;
}
