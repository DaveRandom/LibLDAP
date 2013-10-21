<?php

namespace LibLDAP\DN;

class DistinguishedName implements \IteratorAggregate, \Countable
{
    private $components;

    public function __construct(array $components = [])
    {
        foreach ($components as $component) {
            if (!($component instanceof RelativeDistinguishedName)) {
                throw new \InvalidArgumentException('DistinguishedName components must be RelativeDistinguishedName');
            }
        }

        $this->components = $components;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->components);
    }

    public function count()
    {
        return count($this->components);
    }
}
