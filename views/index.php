<?php
/**
 * @var $this \yii\web\View
 *
 * @var $id string
 * @var $js array
 * @var $source array
 *
 * @var $name string
 * @var $value string
 */

\wscvua\yii2tagsinput\TagsAsset::register($this);

$jsConfig = json_encode($js);

$this->registerJs(<<<JS
$('#$id').tagsInput($jsConfig);
JS
);

echo \yii\helpers\Html::input('text', $name, $value, [
    'id' => $id
]);