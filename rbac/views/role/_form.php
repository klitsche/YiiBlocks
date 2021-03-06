<?php
/**
 * The input form for the {@link AAuthRole} model
 * @var AAuthRole $model The AAuthRole model
 */
?>
<div class="form wide">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aauth-role-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>


	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>64)); ?>
		<p class='hint'>Please enter a unique name for this role.</p>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<p class='hint'>Please enter a short description for this role</p>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bizrule'); ?>
		<?php echo $form->textArea($model,'bizrule',array('rows'=>6, 'cols'=>50)); ?>
		<p class='hint'>Here you can enter a <b>valid</b> PHP expression that determines whether this role really applies.</p>
		<?php echo $form->error($model,'bizrule'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array("class" => "save button")); ?>
	</div>

<?php $this->endWidget(); ?>