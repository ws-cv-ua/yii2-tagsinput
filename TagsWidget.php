<?php

namespace wscvua\yii2tagsinput;
use yii\helpers\BaseHtml;

/**
 * This is just an example.
 */
class TagsWidget extends \yii\base\Widget
{
    public $jsOptions = [
        'interactive' => 'true',
        'placeholder' => 'Add a tag',
        'delimiter' => ',',
        'removeWithBackspace' => true
    ];

    public $source = [];

    public function run()
    {
        $id = $this->getId();
        $js = $this->jsOptions;
        $source = $this->source;

        $options = $this->options;
        $name = isset($options['name']) ? $options['name'] : BaseHtml::getInputName($this->model, $this->attribute);
        $value = isset($options['value']) ? $options['value'] : BaseHtml::getAttributeValue($this->model, $this->attribute);

        $this->render('index', compact('id', 'js', 'source', 'name', 'value'));
    }
}
