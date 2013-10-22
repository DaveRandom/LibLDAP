<?php

namespace LibLDAP\DN;

use LibLDAP\LDAPString;

class NameComponent extends LDAPString
{
    private $type;

    private $value;

    public function __construct($type = null, $value = null)
    {
        if ($type !== null) {
            $this->type = (string) $type;
        }

        if ($value !== null) {
            $this->value = (string) $value;
        }
    }

    public function __toString()
    {
        return $this->type . '=' . $this->value;
    }

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
