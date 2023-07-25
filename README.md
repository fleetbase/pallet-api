<p align="center">
    <p align="center">
        <img src="https://github.com/fleetbase/billing-api/assets/816371/95b4013e-0bc6-49d5-ac5d-090d39853770" width="280" height="280" />
    </p>
    <p align="center">
        Enable multi-tenant billing and subscriptions for Fleetbase
    </p>
</p>

------
This package provides the Billing extension API, which will enable the ability to charge organizations on a Fleetbase instance.

> **Requires [PHP 7.3.0+](https://php.net/releases/)**

⚡️ Install Billing Extension [Composer](https://getcomposer.org):

```bash
composer require fleetbase/core-api
```

Next update your `api/composer.json`

```json
"require": {
    "fleetbase/billing-api": "0.0.1"
},
"repositories": [
    {
        "url": "https://github.com/fleetbase/billing-api.git",
        "type": "git"
    }
],
```

Next install the dependency

```bash
composer install
```

🧹 Keep a modern codebase with **PHP CS Fixer**:
```bash
composer lint
```

⚗️ Run static analysis using **PHPStan**:
```bash
composer test:types
```

✅ Run unit tests using **PEST**
```bash
composer test:unit
```

🚀 Run the entire test suite:
```bash
composer test
```