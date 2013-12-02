<?php
/*
$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'carro-form',
	'enableAjaxValidation'=>false,
));


$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', [
    'id' => 'carro-form',
    'enableAjaxValidation' => true,
    'enableClientValidation' => true,
    'stateful' => true,
    'htmlOptions' => ['enctype' => 'multipart/form-data'],
]);
*/

$form = $this->beginWidget(
    'bootstrap.widgets.TbActiveForm',
    array(
        'id' => 'carro-form',
        'enableAjaxValidation' => false,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    )
);


if($model->isNewRecord || Yii::app()->session['isAdmin'])
{
    Yii::app()->clientScript->registerScript('js_calcula_valor_total', "

    function calculaTotal() {
        var divida = parseFloat($('#Carro_valor').val());
		var saldo = divida;
        var num_parcelas = parseFloat($('#Carro_num_parcelas_max').val());
        var taxa_juros = 0.07;
		var parcela = (divida / num_parcelas);
		var juros = 0;
		var total = 0;

        for(i=num_parcelas; i>0; i--)
        {
			juros += saldo * taxa_juros;
			saldo = saldo - parcela;
            num_parcelas--;
        }
        total = juros + divida;

        $('#Carro_valor_total').val(total);
    }

    $('#carro-form').submit(function() {
        calculaTotal();
    });
    $('#Carro_valor').blur(function() {
        calculaTotal();
    });
    $('#Carro_num_parcelas_max').change(function() {
        calculaTotal();
    });
    ");
}

?>

	<p class="help-block">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'modelo',array('class'=>'span5','maxlength'=>200)); ?>

	<?php echo $form->textFieldRow($model,'ano'); ?>

    <p>
    <?php echo $form->labelEx($model, 'foto'); ?>
    <?php echo $form->fileField($model,'foto'); ?>
    <?php echo $form->error($model, 'foto'); ?>
    </p>

    <?php
     if($model->isNewRecord || Yii::app()->session['isAdmin'])
     {
	    echo $form->textFieldRow($model,'valor');

        echo $form->labelEx($model, 'num_parcelas_max');
        echo $form->dropDownList($model, 'num_parcelas_max', array(3=>'3', 6=>'6', 12=>'12'));

        echo $form->textFieldRow($model,'valor_total',array('readonly'=>true));
     }
         else
         {
             echo $form->labelEx($model, 'valor');
             echo "<b>".$model->valor."</b>";

             echo $form->labelEx($model, 'num_parcelas_max');
             echo "<b>".$model->num_parcelas_max."</b>";

             echo $form->labelEx($model, 'valor_total');
             echo "<b>".$model->valor_total."</b>";
         }
    ?>

	<?php echo $form->hiddenField($model,'fk_usuario_carro',array('value'=>Yii::app()->session['userId'])); ?>

	<?php echo $form->labelEx($model,'fk_marca_carro'); ?>
    <?php echo $form->dropDownList($model,'fk_marca_carro', CHtml::listData(Marca::model()->findAll(array('order' => 'id_marca')),'id_marca','marca_nome'));?>



<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
