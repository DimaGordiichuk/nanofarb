# Laravel eloquent unique string (laravel-eus)

[![License](https://img.shields.io/packagist/l/fomvasss/laravel-eus.svg?style=for-the-badge)](https://packagist.org/packages/fomvasss/laravel-eus)
[![Build Status](https://img.shields.io/github/stars/fomvasss/laravel-eus.svg?style=for-the-badge)](https://github.com/fomvasss/laravel-eus)
[![Latest Stable Version](https://img.shields.io/packagist/v/fomvasss/laravel-eus.svg?style=for-the-badge)](https://packagist.org/packages/fomvasss/laravel-eus)
[![Total Downloads](https://img.shields.io/packagist/dt/fomvasss/laravel-eus.svg?style=for-the-badge)](https://packagist.org/packages/fomvasss/laravel-eus)
[![Quality Score](https://img.shields.io/scrutinizer/g/fomvasss/laravel-eus.svg?style=for-the-badge)](https://scrutinizer-ci.com/g/fomvasss/laravel-eus)

With this package you can generate unique string value for eloquent entity model.

----------

## Installation

Run from the command line:

```bash
composer require fomvasss/laravel-eus
```

### Publish the configurations

Run from the command line:

```
php artisan vendor:publish --provider="Fomvasss\LaravelEUS\ServiceProvider"
```
A configuration file will be publish to `config/eus.php`. In config file you can set default options.

## Usage

### Use `EUS` facade in your Laravel project

In next example, we generate unique article slug:

```php
<?php 

namespace App\Http\Controllers;

use Fomvasss\LaravelEUS\Facades\EUS;
use Illuminate\Http\Request;

class ArticleController extends Controller 
{
    
    public function store(Request $request)
    {
        $rawSlug = $request->get('slug', $request->name);
        $slug = EUS::setEntity(new \App\Models\Article())
            ->setRawStr($rawSlug)
            ->get();
                
        $article = \App\Model\Article::create([
            'title' => $title,
            'slug' => $slug,
            //.. other data
        ]);
        
        //..
    }

    public function update($id, Request $request) 
    {        
        $article = \App\Model\Article::fingOrFail($id);
     
        $rawSlug = $request->get('slug', $request->name);
        $slug = EUS::setEntity($article)
            ->setRawStr($rawSlug)
            ->get();
         
        $article->update([
             'title' => $title,
             'slug' => $slug,
             //.. other data
         ]);
        //..
    }
}
```

### Other alloved methods

Generate and get unique URL path:

```php
<?php
$urlUniqueAlias = EUS::setEntity(new \App\Models\UrlAlias())
    ->setRawStr('path/for-your/unique-page')
    ->setFieldName('alias')
    ->setSlugSeparator('-')
    ->setAllowedSeparator('/')
    ->get();
```

Generate and save unique system name:

```php
<?php
$term = \App\Models\Term::find(1);
EUS::setEntity($term)
    ->setRawStr($term->name)
    ->setFieldName('system_name')
    ->setSlugSeparator('_')
    ->where(['locale', '=', 'de']) // additional condition for finding a unique value
    ->save();
```

### Use Dependency Injection

```php
<?php

namespace App\Some\Namespace;

use Fomvasss\LaravelEUS\EUSGenerator;

class MyClass
{
    public function __construct(EUSGenerator $eus)
    {
        $this->eus = $eus;
    }
    
    public function example()
    {
        $article = \App\Models\Article::find(1);
        $this->eus
            ->setEntity($article)
            ->setRawStr('Some string for slug')
            ->save();
    }
}
```
