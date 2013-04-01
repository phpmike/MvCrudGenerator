<?php

namespace Mv\CrudGeneratorBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MvCrudGeneratorBundle extends Bundle
{
    public function getParent()
    {
        return 'SensioGeneratorBundle';
    }
}