CSS Framework:
https://0notole.github.io/elements.css/

Install project: `composer create-project --prefer-dist laravel/laravel screen`, `cd screen`

Add repo and install the package:

```
composer require 0notole/vault
```

Publish files (config)

`php artisan vendor:publish --provider="0notole\Vault\VaultServiceProvider"`

Publish files from dependence

`php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="migrations"`

`php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="config"`

Migrate

`php artisan migrate`

Seed

`php artisan db:seed --class=0notole\\Vault\\Seeds\\AdminSeeder`

`php artisan db:seed --class=0notole\\Vault\\Seeds\\SettingsSeeder`

If you'd like to remove the package
`composer remove 0notole/vault --update-with-dependencies`
