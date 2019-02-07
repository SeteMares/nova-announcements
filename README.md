# A Laravel Nova Tool for Handling Laravel Notifications

With this [Nova](https://nova.laravel.com) tool:
- You can overview all sent and failed notifications.
- You can send out announcements.
- All sent or failed notifications will be stored in the database.

## Requirements

In order to use this package, you need to have an installation of Laravel with Laravel nova setup.

## Installation

First install the  [Nova](https://nova.laravel.com) package via composer:

```bash
$ composer require setemares/nova-notifications
```

Next up, you must register the tool via the `tools` method of the `NovaServiceProvider`.

```php
// inside app/Providers/NovaServiceProvder.php

// ...

public function tools()
{
    return [
        // ...
        new \SeteMares\NovaNotifications\NovaNotifications()
    ];
}
```

You also need to run `php artisan migrate` on your Laravel application so that the new notifications table will be created.

# Usage

After installing the tool, you should see the new sidebar navigation item for `Notifications`.

## Overview

On the `Overview` page you can see all of the sent and failed notifications. 

## Send

On the `Send` page you can see all of your created notification classes.

If you don't see a newly created notification class, try running `composer dump-autoload`.

### Parameters

Since you notifications often depend on parameters, this package tries to help you with that. All found constructor parameters will be shown when you try to send a notification. If one of the dependencies is an Eloquent Model, you will get a list with all of the items to choose from.

## Credits

- [tectiv3](https://github.com/tectiv3)
- [christophrumpel](https://github.com/christophrumpel/nova-notifications/)

## License

The MIT License (MIT).
