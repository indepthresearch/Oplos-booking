<?php return array (
  'arrilot/laravel-widgets' => 
  array (
    'providers' => 
    array (
      0 => 'Arrilot\\Widgets\\ServiceProvider',
    ),
    'aliases' => 
    array (
      'Widget' => 'Arrilot\\Widgets\\Facade',
      'AsyncWidget' => 'Arrilot\\Widgets\\AsyncFacade',
    ),
  ),
  'cartalyst/stripe-laravel' => 
  array (
    'providers' => 
    array (
      0 => 'Cartalyst\\Stripe\\Laravel\\StripeServiceProvider',
    ),
    'aliases' => 
    array (
      'Stripe' => 'Cartalyst\\Stripe\\Laravel\\Facades\\Stripe',
    ),
  ),
  'fideloper/proxy' => 
  array (
    'providers' => 
    array (
      0 => 'Fideloper\\Proxy\\TrustedProxyServiceProvider',
    ),
  ),
  'gloudemans/shoppingcart' => 
  array (
    'providers' => 
    array (
      0 => 'Gloudemans\\Shoppingcart\\ShoppingcartServiceProvider',
    ),
    'aliases' => 
    array (
      'Cart' => 'Gloudemans\\Shoppingcart\\Facades\\Cart',
    ),
  ),
  'intervention/image' => 
  array (
    'providers' => 
    array (
      0 => 'Intervention\\Image\\ImageServiceProvider',
    ),
    'aliases' => 
    array (
      'Image' => 'Intervention\\Image\\Facades\\Image',
    ),
  ),
  'larapack/voyager-hooks' => 
  array (
    'providers' => 
    array (
      0 => 'Larapack\\VoyagerHooks\\VoyagerHooksServiceProvider',
    ),
  ),
  'laravel/scout' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Scout\\ScoutServiceProvider',
    ),
  ),
  'laravel/tinker' => 
  array (
    'providers' => 
    array (
      0 => 'Laravel\\Tinker\\TinkerServiceProvider',
    ),
  ),
  'mcamara/laravel-localization' => 
  array (
    'providers' => 
    array (
      0 => 'Mcamara\\LaravelLocalization\\LaravelLocalizationServiceProvider',
    ),
    'aliases' => 
    array (
      'LaravelLocalization' => 'Mcamara\\LaravelLocalization\\Facades\\LaravelLocalization',
    ),
  ),
  'nunomaduro/collision' => 
  array (
    'providers' => 
    array (
      0 => 'NunoMaduro\\Collision\\Adapters\\Laravel\\CollisionServiceProvider',
    ),
  ),
  'tcg/voyager' => 
  array (
    'providers' => 
    array (
      0 => 'TCG\\Voyager\\VoyagerServiceProvider',
      1 => 'TCG\\Voyager\\Providers\\VoyagerDummyServiceProvider',
    ),
  ),
);