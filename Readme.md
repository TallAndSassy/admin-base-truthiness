# :
[![License](https://img.shields.io/github/license/:tallandsassy/:app-branding)](https://github.com/:tallandsassy/:app-branding/blob/master/LICENSE.md)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/:tallandsassy/:app-branding.svg?style=flat-square)](https://packagist.org/packages/:tallandsassy/:app-branding)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/:tallandsassy/:app-branding/run-tests?label=tests)](https://github.com/:tallandsassy/:app-branding/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Coverage Status](https://coveralls.io/repos/github/:tallandsassy/:app-branding/badge.svg?branch=master)](https://coveralls.io/github/:tallandsassy/:app-branding?branch=master)

[![Total Downloads](https://img.shields.io/packagist/dt/:tallandsassy/:app-branding.svg?style=flat-square)](https://packagist.org/packages/:tallandsassy/:app-branding)


This adds a 'admin/teams' page

## Support us

Please send love

## Installation

Since this is a module, and not a package, you'll need to manually install a couple of things:
```bash
php artisan config:clear
cd app_root/modules;
git clone githuburl  
```

Edit config\app.php
```php
\TallModSassy\AdminBaseTruthiness\AdminBaseTruthinessServiceProvider::class, # add in the array  
```

Edit composer.json
```json
"autoload": {
    "psr-4": {
        ...
        "TallModSassy\\AdminBaseTruthiness\\": "modules\\admin-base-truthiness\\src"
        ...
    }
},  
```

```bash
composer dump-autoload 
```

## Credits
- [:jjrohrer](https://github.com/:jjrohrer)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
