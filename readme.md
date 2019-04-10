This is a Laravel 5 package that provides videos management facility for lavalite framework.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `lavalite/videos`.

    "lavalite/videos": "dev-master"

Next, update Composer from the Terminal:

    composer update

Once this operation completes execute below cammnds in command line to finalize installation.

```php
Lavalite\Videos\Providers\VideosServiceProvider::class,

```

And also add it to alias

```php
'Videos'  => Lavalite\Videos\Facades\Videos::class,
```

Use the below commands for publishing

Migration and seeds

    php artisan vendor:publish --provider="Lavalite\Videos\Providers\VideosServiceProvider" --tag="migrations"
    php artisan vendor:publish --provider="Lavalite\Videos\Providers\VideosServiceProvider" --tag="seeds"

Configuration

    php artisan vendor:publish --provider="Lavalite\Videos\Providers\VideosServiceProvider" --tag="config"

Language

    php artisan vendor:publish --provider="Lavalite\Videos\Providers\VideosServiceProvider" --tag="lang"

Views public and admin

    php artisan vendor:publish --provider="Lavalite\Videos\Providers\VideosServiceProvider" --tag="view-public"
    php artisan vendor:publish --provider="Lavalite\Videos\Providers\VideosServiceProvider" --tag="view-admin"

Publish admin views only if it is necessary.

## Usage


