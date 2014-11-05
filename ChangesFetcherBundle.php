<?php

namespace Daimos\ChangesFetcherBundle;

use Daimos\ChangesFetcherBundle\DependencyInjection\ChangesFetcherExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ChangesFetcherBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new ChangesFetcherExtension();
    }
}