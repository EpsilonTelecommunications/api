<?php

namespace Dingo\Api\Tests\Stubs;

use Illuminate\Container\Container;
use Illuminate\Contracts\Foundation\Application;

class ApplicationStub extends Container implements Application
{
    public function version()
    {
        return 'v1';
    }

    public function basePath($path = '')
    {
        //
    }

    public function environment(...$environments)
    {
        return 'testing';
    }

    public function isDownForMaintenance()
    {
        return false;
    }

    public function registerConfiguredProviders()
    {
        //
    }

    public function register($provider, $options = [], $force = false)
    {
        //
    }

    public function runningUnitTests()
    {
        //
    }

    public function registerDeferredProvider($provider, $service = null)
    {
        //
    }

    public function getCachedCompilePath()
    {
        //
    }

    public function getCachedServicesPath()
    {
        //
    }

    public function boot()
    {
        //
    }

    public function booting($callback)
    {
        //
    }

    public function booted($callback)
    {
        //
    }

    public function getCachedPackagesPath()
    {
        //
    }

    public function runningInConsole()
    {
        //
    }

    public function bootstrapPath($path = '')
    {
        //
    }

    public function configPath($path = '')
    {
        //
    }

    public function databasePath($path = '')
    {
        //
    }

    public function resourcePath($path = '')
    {
        //
    }

    public function storagePath()
    {
        //
    }

    public function resolveProvider($provider)
    {
        //
    }

    public function bootstrapWith(array $bootstrappers)
    {
        //
    }

    public function getLocale()
    {
        //
    }

    public function getNamespace()
    {
        //
    }

    public function getProviders($provider)
    {
        //
    }

    public function hasBeenBootstrapped()
    {
        //
    }

    public function loadDeferredProviders()
    {
        //
    }

    public function setLocale($locale)
    {
        //
    }

    public function shouldSkipMiddleware()
    {
        //
    }

    public function terminate()
    {
        //
    }
}
