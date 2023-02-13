<?php namespace Moomak\LaravelFacebookSdk;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Moomak\LaravelFacebookSdk\LaravelFacebookSdk
 */
class FacebookFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * Don't use this. Just... don't.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Moomak\LaravelFacebookSdk\LaravelFacebookSdk';
    }
}
