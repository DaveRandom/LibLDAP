<?php

namespace LibLDAP\DN;

class RelativeDistinguishedName implements \IteratorAggregate, \Countable
{
    private $components;

    public function __construct(array $components = [])
    {
        foreach ($components as $component) {
            if (!($component instanceof NameComponent)) {
                throw new \InvalidArgumentException('RelativeDistinguishedName components must be NameComponent');
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
