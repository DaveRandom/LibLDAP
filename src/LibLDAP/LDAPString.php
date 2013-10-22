<?php

namespace LibLDAP;

use LibASN1\OctetString;

class LDAPString extends OctetString
{
    final public function isConstructed()
    {
        return false;
    }
}
