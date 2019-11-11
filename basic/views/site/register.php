<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container register-form">
    <div class="form">
        <div class="note">
            <p>This is a simpleRegister Form made using Boostrap.</p>
        </div>

        <div class="form-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" placeholder="Your Name *" value=""/>
                    </div>
                    <div class="form-group">
                        <input name="phoneNum" type="text" class="form-control" placeholder="Phone Number *" value=""/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input name="password" type="text" class="form-control" placeholder="Your Password *" value=""/>
                    </div>
                    <div class="form-group">
                        <input name="password2" type="text" class="form-control" placeholder="Confirm Password *" value=""/>
                    </div>
                </div>
            </div>
            <button name="submitBtn" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
<?php
    if(isset($_POST['submitBtn']))
        echo 'test123';
?>