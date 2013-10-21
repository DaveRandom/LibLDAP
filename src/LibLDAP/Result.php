<?php

namespace LibLDAP;

class Result
{
    private $code;

    private $dn;

    private $diagnosticMessage;

    private $referral;

    public function setCode($code)
    {
        $this->code = $code;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setDN($dn)
    {
        $this->dn = $dn;
    }

    public function getDN()
    {
        return $this->dn;
    }

    public function setDiagnosticMessage($diagnosticMessage)
    {
        $this->diagnosticMessage = $diagnosticMessage;
    }

    public function getDiagnosticMessage()
    {
        return $this->diagnosticMessage;
    }

    public function setReferral($referral)
    {
        $this->referral = $referral;
    }

    public function getReferral()
    {
        return $this->referral;
    }
}
