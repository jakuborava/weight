<?php

namespace JakubOrava\Weight;

class WeightClass
{
    public function toStones(float $kilograms): float
    {
        return $kilograms * 0.15747;
    }
}
