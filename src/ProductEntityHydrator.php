<?php

declare(strict_types=1);

namespace Ecommerce;

use PDO;

class ProductEntityHydrator
{
    public static function getProduct (PDO $db, $id): ProductEntity
    {
        $query = $db->prepare('SELECT * FROM `products` WHERE `id` = :id;');
        $query->bindParam(":id", $id);
        $query->setFetchMode(PDO::FETCH_CLASS, ProductEntity::class);
        $query->execute();
        return $query->fetch();


    }
}