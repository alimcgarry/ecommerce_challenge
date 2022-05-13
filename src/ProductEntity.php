<?php

declare(strict_types=1);

namespace Ecommerce;

class ProductEntity
{
    protected int $id;
    protected string $name;
    protected string $sku;
    protected string $description;
    protected float $price;

}