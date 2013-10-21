<?php

namespace LibLDAP;

class Message
{
    private $messageID;

    private $operation;

    private $controls;

    public function setMessageID($id)
    {
        $id = (int) $id;

        if ($id < 0) {
            throw new \UnderflowException("Message ID must be greater than 0");
        } else if ($id > 0x7FFFFFFF) {
            throw new \OverflowException("Message ID must be less than 2^^31");
        }

        $this->messageID = $id;
    }

    public function getMessageID()
    {
        return $this->messageID;
    }

    public function setOperation(Operation $operation)
    {
        $this->operation = $operation;
    }

    public function getOperation()
    {
        return $this->operation;
    }

    public function setControls($controls)
    {
        $this->controls = $controls;
    }

    public function getControls()
    {
        return $this->controls;
    }
}
