<?php

namespace MyEML\EAVModelBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MyEMLEAVModelBundle extends Bundle
{
    /**
     * @return string
     */
    public function getParent()
    {
        return 'CleverAgeEAVManagerEAVModelBundle';
    }
}
