<?php

namespace MyEML\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Extends base admin bundle
 */
class MyEMLAdminBundle extends Bundle
{
    /**
     * @return string
     */
    public function getParent()
    {
        return 'CleverAgeEAVManagerAdminBundle';
    }
}
