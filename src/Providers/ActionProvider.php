<?php

namespace Choredo\Providers;


use Choredo\Actions;
use Choredo\Actions;
use League\Container\ServiceProvider\AbstractServiceProvider;

class ActionProvider extends AbstractServiceProvider
{

    protected $provides = [
        Actions\Family\GetFamily::class, 
        Actions\Chore\ListChores
    ];

    /**
     * Use the register method to register items with the container via the
     * protected $this->container property or the `getContainer` method
     * from the ContainerAwareTrait.
     *
     * @return void
     */
    public function register()
    {
        $this->getContainer()->share(ListChores::class);
        $this->container->share(Actions\Family\GetFamily::class);
    }
}