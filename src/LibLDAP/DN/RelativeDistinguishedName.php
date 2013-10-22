<?php

namespace LibLDAP\DN;

use LibLDAP\LDAPString;

class RelativeDistinguishedName extends LDAPString implements \IteratorAggregate, \Countable
{
    private $components = [];
    private $pointer = 0;

    public function __construct(array $components = [])
    {
        foreach ($components as $component) {
            if (!($component instanceof NameComponent)) {
                throw new \InvalidArgumentException('RelativeDistinguishedName components must be NameComponent');
            }
        }

        $this->components = $components;
    }

    public function __toString()
    {
        return $this->getValue();
    }

    public function getIterator()
    {
        return new ArrayIterator($this->components);
    }

    public function count()
    {
        return count($this->components);
    }

    public function getValue()
    {
        return implode('+', $this->components);
    }

    public function setValue($value)
    {
        $this->components = [];

        foreach (explode('+', $rdn) as $attrAndVal) {
            list($attr, $val) = explode('=', $attrAndVal, 2);
            $this->components[] = new NameComponent($attr, $val);
        }
    }

    public function hasNext()
    {
        return isset($this->components[$this->pointer]);
    }

    public function getChunk()
    {
        return $this->components[$this->pointer++];
    }
}
