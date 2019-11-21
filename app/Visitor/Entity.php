<?php

namespace App\Visitor;

interface Entity
{
    public function accept(Visitor $visitor): array;
}
