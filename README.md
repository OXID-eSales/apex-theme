# APEX Theme
APEX is the Bootstrap 5 based OXID Theme for Twig template engine

## Installation

Run following commands to install the theme:

```bash
composer require oxid-esales/apex-theme
```

## Compatibility

### Branches
* `b-8.0.x` - compatible with OXID eShop b-8.0.x branch
* `b-7.3.x` - compatible with OXID eShop b-7.3.x branch
* `b-7.2.x` - compatible with OXID eShop b-7.2.x branch
* `b-7.1.x` - compatible with OXID eShop b-7.1.x branch

### Versions
* versions `1.x` - compatible with OXID eShop compilations 7.0.x and 7.1.x

## Activation

### Via OXID eShop administration panel:
Select the APEX theme and click activation button in:

`Extensions --> Themes`

### Via console:

Execute the following command:
```bash
bin/oe-console oe:theme:activate apex
```

## Development

[Grunt](https://gruntjs.com) and [npm](https://nodejs.org) are required to generate theme assets during development.

## License

See LICENSE file for license details.

## Bugs and Issues

If you experience any bugs or issues, please report them in the section **OXID eShop (all versions)** under category **Twig engine** of https://bugs.oxid-esales.com
