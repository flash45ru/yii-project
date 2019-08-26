<?php
/* @var $model frontend\models\Subscribe*/

if ($model->hasErrors()) {
    print_r($model->getErrors());
}

?>
<form method="post">
    <p>Email:</p>
    <input type="text" name="email" />
    <br><br>
    <input type="submit" />
</form>
