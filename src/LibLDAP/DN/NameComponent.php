<?php

namespace LibLDAP\DN;

class NameComponent
{
    private $type;

    private $value;

    public function setType($type)
    {
        $this->type = (string) $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setValue($value)
    {
        $this->value = (string) $value;
    }

    public function getValue()
    {
        return $this->value;
    }
}
