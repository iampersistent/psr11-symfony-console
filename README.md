PSR-11 Symfony Console
======================

Makes the PSR container available for Commands.

```php
use IamPersistent\Console\Application;

$application = new Application();
$application->setContainer($container);
$application->add(new MyCommand());
$application->run();

```

In the command

```php

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $container = $this->getApplication()->getContainer();
    }

```
