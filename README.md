![alt text](https://web-studio.cv.ua/img/logo-dark.png "Web-Studio.cv.ua")  

Yii2 jQuery Tags Input ()
=========================
Yii2 jQuery Tags Input

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ws-cv-ua/yii2-tagsinput "*"
```

or add

```
"ws-cv-ua/yii2-tagsinput": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \wscvua\yii2tagsinput\AutoloadExample::widget(); ?>
```

More configuration for plugin: [Responsive Tags Input With Autocomplete - jQuery tagsInput](https://www.jqueryscript.net/form/Tags-Input-Autocomplete.html)  
[Demos](https://www.jqueryscript.net/demo/Tags-Input-Autocomplete/)  

Example with autocompete
---
```php
<?= $form->field($model, 'tags')->widget(\wscvua\yiitagsinput\TagsWidget::className(), [
       'jsOptions' => [
           'autocomplete' => [
               'source' => [
                   'tagtest1',
                   'tagtest2',
                ]
           ]
        ]
]); ?>
```
