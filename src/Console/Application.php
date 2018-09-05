<?php
declare(strict_types=1);

namespace IamPersistent\Console;

use Psr\Container\ContainerInterface;
use Symfony\Component\Console\Application as BaseApplication;

final class Application extends BaseApplication
{
    /** @var ContainerInterface */
    private $container;

    public function getContainer(): ContainerInterface
    {
        return $this->container;
    }

    public function setContainer(ContainerInterface $container): Application
    {
        $this->container = $container;

        return $this;
    }
}