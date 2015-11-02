<?php
/* @var $this AtPagesController */
/* @var $model AtPages */
/* @var $form CActiveForm */

$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerScriptFile($baseUrl . '/ckeditor/ckeditor.js');
?>

<div class="col-lg-6">
    <div class="form">

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'at-pages-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation' => false,
        ));
        ?>

        <p class="note">Fields with <span class="required">*</span> are required.</p>

<?php ////echo $form->errorSummary($model);  ?>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'page_name'); ?>
            <?php echo $form->textField($model, 'page_name', array('size' => 60, 'maxlength' => 255)); ?>
<?php echo $form->error($model, 'page_name'); ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model, 'page_description'); ?>
            <?php echo $form->textArea($model, 'page_description', array('rows' => 6, 'cols' => 50)); ?>
<?php echo $form->error($model, 'page_description'); ?>
        </div>

        <!--	<div class="form-group">
        <?php echo $form->labelEx($model, 'created'); ?>
        <?php echo $form->textField($model, 'created'); ?>
<?php echo $form->error($model, 'created'); ?>
                </div>
        
                <div class="form-group">
        <?php echo $form->labelEx($model, 'modified'); ?>
        <?php echo $form->textField($model, 'modified'); ?>
        <?php echo $form->error($model, 'modified'); ?>
                </div>-->
            <?php echo $form->hiddenField($model, 'page_slug'); ?>
        <div class="form-group buttons">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>"btn btn-primary")); ?>
        </div>

<?php $this->endWidget(); ?>

        <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('AtPages_page_description', {
                toolbarGroups: [
                    {name: 'document', groups: ['mode']},
                    {"name": "basicstyles", "groups": ["basicstyles"]},
                    {"name": "links", "groups": ["links"]},
                    {"name": "paragraph", "groups": ["list", "blocks"]},
                    {"name": "document", "groups": ["mode"]},
                    {"name": "styles", "groups": ["styles"]},
                    {"name": 'clipboard', "groups": ['clipboard', 'undo']},
                    //{'name': 'insert'},
                ],
            });
        </script>

    </div><!-- form -->
</div>