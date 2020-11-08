# Currency list

List of currencies provided by Symfony (the Intl component) contains ~300 currencies, from which ~150 is not used anymore.

Building new project where you need to use currencies? Why bother your users with list twice as long as it needs to be?

This code filters out currencies which are not used anymore. 

## Installing

Install with Composer

```
composer require hracik/currency-list
```
## Usage

```PHP
use Hracik\CurrencyList\CurrencyList;

$currencies = CurrencyList::get();
```


## Built With

* [The Intl Component](https://symfony.com/doc/current/components/intl.html)
## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/hracik/php-create-image-from-text/tags). 

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.
