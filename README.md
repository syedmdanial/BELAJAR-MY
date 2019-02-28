<h1>BELAJAR.MY: A Platform for Learning</h1>
<h4>A Web Engineering project by Syed Muhamad Danial Bin Syed Hedzer (syedmdanial)</h4>
 
BELAJAR.MY is a web based application to provide a platform for anyone to learn to things or even to provide the learning services.


<h1> CakePHP Application Skeleton </h1>

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](https://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

<h1> Installation </h1>

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run

```bash
composer create-project --prefer-dist cakephp/app
```

In case you want to use a custom app dir name (e.g. `/myapp/`):

```bash
composer create-project --prefer-dist cakephp/app myapp
```

You can now either use your machine's webserver to view the default home page, or start
up the built-in webserver with:

```bash
bin/cake server -p 8765
```

Then visit `http://localhost:8765` to see the welcome page.

<h1> Update </h1>

Since this skeleton is a starting point for your application and various files
would have been modified as per your needs, there isn't a way to provide
automated upgrades, so you have to do any updates manually.

<h1> Configuration </h1>

Read and edit `config/app.php` and setup the `'Datasources'` and any other
configuration relevant for your application.

<h1> Layout </h1>

The app skeleton uses a subset of [Foundation](http://foundation.zurb.com/) CSS
framework by default. You can, however, replace it with any other library or
custom styles.
