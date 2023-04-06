<?php

namespace Xudid\QueryBuilder\Contracts\Request;

interface TableInterface extends RequestInterface
{
    public function create($name) : static;
    public function drop(string $name) : static;
}
