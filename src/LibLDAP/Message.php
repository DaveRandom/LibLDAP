<?php

namespace LibLDAP;

use LibASN1\Sequence,
    LibASN1\Integer;

class Message extends Sequence
{
    protected $components = [
        'id' => null,
        'operation' => null,
        'controls' => null,
    ];

    public function setID($id)
    {
        if (!isset($this->components['id'])) {
            $this->components['id'] = new Integer;
        }

        $id = (int) $id;

        if ($id < 0) {
            throw new \UnderflowException("Message ID must be greater than 0");
        } else if ($id > 0x7FFFFFFF) {
            throw new \OverflowException("Message ID must be less than 2^^31");
        }

        $this->components['id']->setValue($id);
    }

    public function getID()
    {
        if (!isset($this->components['id'])) {
            $this->components['id'] = new Integer;
        }

        return $this->components['id']->getValue();
    }

    public function setOperation(Operation $operation)
    {
        $this->components['operation'] = $operation;
    }

    public function getOperation()
    {
        return $this->components['operation'];
    }

    public function setControls(Controls $controls)
    {
        $this->components['controls'] = $controls;
    }

    public function getControls()
    {
        return $this->components['controls'];
    }
}
