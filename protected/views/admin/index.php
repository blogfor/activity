<?php
$baseUrl = Yii::app()->theme->baseUrl;
?>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <?php
                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'login-form',
                        'enableAjaxValidation' => false,
                    ));
                    ?>
                    <?php if (Yii::app()->user->hasFlash('logoutMessage')): ?>
                        <div class="alert alert-success"> <?php echo Yii::app()->user->getFlash('logoutMessage'); ?> </div>
                    <?php endif; ?>

                    <?php if (Yii::app()->user->hasFlash('loginMessage')): ?>
                        <div class="alert alert-danger"> <?php echo Yii::app()->user->getFlash('loginMessage'); ?> </div>
                    <?php endif; ?>

                    <fieldset>
                        <div class="form-group">
                            <?php echo CHtml::textField('userlogin', '', array('size' => 30, 'maxlength' => 128, 'placeholder' => 'User Name', 'class' => 'form-control')); ?>


                        </div>
                        <div class="form-group">
                            <?php echo CHtml::passwordField('userpassword', '', array('size' => 30, 'maxlength' => 128, 'placeholder' => 'Password', 'class' => 'form-control')); ?>
                        </div>
                        <div class="checkbox">
                            <label>
                                <?php echo CHtml::link('Back to site', array('site/index'), array('class' => '')); ?>
                            </label>
                        </div>
                        <!-- Change this to a button or input when using this as a form -->

                        <?php echo CHtml::submitButton('Login', array('class' => 'btn btn-lg btn-success btn-block')); ?>
                    </fieldset>
                    <?php $this->endWidget(); ?>
                </div>
            </div>
        </div>
    </div>
</div>