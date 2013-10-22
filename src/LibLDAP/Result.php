<?php

namespace LibLDAP;

use LibLDAP\DN\DistinguishedName,
    LibASN1\Sequence;

class Result extends Sequence
{
    protected $components = [
        'code' => null,
        'dn' => null,
        'diagnosticMessage' => null,
        'referral' => null,
    ];

    public function setCode($code)
    {
        if ($code instanceof ResultCode) {
            $this->components['code'] = $code;
        } else {
            if (!isset($this->components['code'])) {
                $this->components['code'] = new ResultCode;
            }

            $this->components['code']->setValue($code);
        }
    }

    public function getCode()
    {
        if (!isset($this->components['code'])) {
            $this->components['code'] = new ResultCode;
        }

        return $this->components['code'];
    }

    public function setDN($dn)
    {
        if ($dn instanceof DistinguishedName) {
            $this->components['dn'] = $dn;
        } else {
            if (!isset($this->components['dn'])) {
                $this->components['dn'] = new DistinguishedName;
            }

            $this->components['dn']->setValue((string) $dn);
        }
    }

    public function getDN()
    {
        if (!isset($this->components['dn'])) {
            $this->components['dn'] = new DistinguishedName;
        }

        return $this->components['dn'];
    }

    public function setDiagnosticMessage($message)
    {
        if ($message instanceof LDAPString) {
            $this->components['diagnosticMessage'] = $message;
        } else {
            if (!isset($this->components['diagnosticMessage'])) {
                $this->components['diagnosticMessage'] = new LDAPString;
            }

            $this->components['diagnosticMessage']->setValue((string) $message);
        }
    }

    public function getDiagnosticMessage()
    {
        return $this->components['diagnosticMessage'];
    }

    public function setReferral(Referral $referral)
    {
        $this->components['referral'] = $referral;
    }

    public function getReferral()
    {
        return $this->components['referral'];
    }
}
