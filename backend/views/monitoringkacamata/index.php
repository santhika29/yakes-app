<?php

use kartik\widgets\FileInput;
use kartik\helpers\Html;

/* @var $this yii\web\View */
?>

<?php
echo FileInput::widget([
  'name' => 'attachment_52',
  'pluginOptions' => [
      'browseClass' => 'btn btn-success',
      'uploadClass' => 'btn btn-info',
      'removeClass' => 'btn btn-danger',
      'removeIcon' => '<i class="glyphicon glyphicon-trash"></i> '
  ]
]);
?>
