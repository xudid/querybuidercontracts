<?php

namespace Xudid\QueryBuilderContracts\Request;

interface InsertInterface
{
    public function columns(string...$columns): static;
    public function values(string...$values): static;
}
