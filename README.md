Exel Reader
===========
A class for reading Microsoft Excel (97/2003) Spreadsheets.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist walk/yii2-exel-reader "*"
```

or add

```
"walk/yii2-exel-reader": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \walk\exelreader\ExelReader::read(); ?>```