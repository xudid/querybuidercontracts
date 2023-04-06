<?php

namespace Xudid\QueryBuilder\Contracts\Request;

interface InsertInterface
{
    public function columns(string...$columns): static;
    public function values(string...$values): static;
}
