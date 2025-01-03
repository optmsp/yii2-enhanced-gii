<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

use mootensai\enhancedgii\crud\Generator;

/* @var $this yii\web\View */
/* @var $generator mootensai\enhancedgii\crud\Generator */

$fk = $generator->generateFK();

echo "<?php\n";
?>

/**
 * CREATED BY A CODE GENERATOR!!!!
 * THIS FILE WAS CREATED BY A HEAVILY MODIFIED yii2-enhanced-gii for use in GRS.
 * Hand editing this file will result in lost code.
 *
 * _search.php
 */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model <?= ltrim($generator->searchModelClass, '\\') ?> */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-search">

    <?= "<?php " ?>$form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<?php
$count = 0;
foreach ($generator->getColumnNames() as $attribute) {
    if (!in_array($attribute, $generator->skippedColumns)) {
        if (++$count < 6) {
            echo "    <?= " . $generator->generateActiveField($attribute, $fk) . " ?>\n\n";
        } else {
            echo "    <?php /* echo " . $generator->generateActiveField($attribute, $fk) . " */ ?>\n\n";
        }
    }
}
?>
    <div class="form-group">
        <?= "<?= " ?>Html::submitButton(<?= $generator->generateString('Search') ?>, ['class' => 'btn btn-primary btn-round']) ?>
        <?= "<?= " ?>Html::resetButton(<?= $generator->generateString('Reset') ?>, ['class' => 'btn btn-default btn-round']) ?>
    </div>

    <?= "<?php " ?>ActiveForm::end(); ?>

</div>
