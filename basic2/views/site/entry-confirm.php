<?php
use yii\helpers\Html;
?>
<p>File has been backuped.</p>

<ul>
    <li><label>Old folder</label>: <?= Html::encode($model->oldfolder) ?></li>
    <li><label>New folder</label>: <?= Html::encode($model->newfolder) ?></li>
</ul>