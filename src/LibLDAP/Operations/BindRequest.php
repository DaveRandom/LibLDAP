<?php

namespace LibLDAP\Operations;

class BindRequest
{
    private $version;

    private $name;

    private $authInfo;

    public function __construct($version, $name = null, AuthInfo $authInfo = null)
    {
        $this->version = (int) $version;
        if ($this->version < 1) {
            throw new \UnderflowException('Protocol version must be greater than 0');
        } else if ($this->version > 127) {
            throw new \OverflowException('Protocol version must be less than 128');
        }

        if (isset($name)) {
            $this->name = (string) $name;
        }

        $this->authInfo = $authInfo;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAuthInfo()
    {
        return $this->authInfo;
    }
}
