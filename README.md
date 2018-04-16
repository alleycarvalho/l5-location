# Laravel 5 Location

## Introduction

The l5-location package allows for a dynamic translation in the Laravel framework, according to the available language definitions.

## Installation

### Via Composer

Execute the following command to get the latest version of the package:

``` bash
composer require alleycarvalho/l5-location
```

### If the Laravel version **`>=`** 5.5

* ServiceProvider will be attached automatically.

### Other

* Add service provider to the `'providers'` array in **`config/app.php`**:

``` php
'providers' => [
    …
    AlleyCarvalho\Location\Providers\LocationServiceProvider::class,
];
```

## Configuration

1. Add middleware in **`app/Http/kernel.php`**:

``` php
protected $middlewareGroups = [
    'web' => [
        …
        \AlleyCarvalho\Location\Http\Middleware\Locale::class,
    ];
];
```

## Basic Usage

> The translation can be dynamically changed using links referring to the available language in **`resources/lang/`**.

1. Example in **`resources/views/welcome.blade.php`**:

``` html
<p>{{ trans('auth.failed') }}</p>
<a href="/locale/pt-BR">Português</a>
<a href="/locale/en">Inglês</a>
<a href="/locale/fr">Francês</a>
```

> If the file package is not available in **`resources/lang/`** or in the package used, the translation will be done according to the configuration of `'fallback_locale'` in **`config/app.php`**
