<?php


namespace App\Entity;

use JsonException;
use JsonSerializable;

abstract class BaseEntity implements JsonSerializable
{

    public function jsonSerialize()
    {
        try {
            return json_encode(get_object_vars($this), JSON_THROW_ON_ERROR, 512);
        } catch (JsonException $e) {
            return null;
        }
    }
}
