<?php declare(strict_types = 1);

namespace CEmerson\Trespass;

class Trespass
{
    public static function setProperties($object, array $properties) {
        $propertySetter = function () use ($properties) {
            foreach ($properties as $name => $value) {
                $this->$name = $value;
            }
        };

        $propertySetter->call($object);
    }
}
