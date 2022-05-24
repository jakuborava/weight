<?php

use JakubOrava\Weight\WeightClass;

it('can convert to stones', function () {
    expect((new WeightClass())->toStones(100))->toBe(15.747);
});
