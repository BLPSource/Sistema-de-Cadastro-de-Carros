<?php

/**
 * This is the model class for table "carro".
 *
 * The followings are the available columns in table 'carro':
 * @property integer $id_carro
 * @property string $modelo
 * @property integer $ano
 * @property string $foto
 * @property integer $valor
 * @property integer $num_parcelas_max
 * @property integer $valor_total
 * @property string $data_cadastro_carro
 * @property integer $fk_usuario_carro
 * @property integer $fk_marca_carro
 *
 * The followings are the available model relations:
 * @property Usuario $fkUsuarioCarro
 * @property Marca $fkMarcaCarro
 */
class Carro extends Marca
{
    public $foto;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'carro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ano, valor, num_parcelas_max, valor_total, fk_usuario_carro, fk_marca_carro', 'numerical', 'integerOnly'=>true),
			array('modelo', 'length', 'max'=>200),
            array('foto', 'file', 'types' => 'jpg,jpeg,png,gif', 'allowEmpty' => true),
			array('data_cadastro_carro', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_carro, modelo, ano, valor, num_parcelas_max, valor_total, data_cadastro_carro, fk_usuario_carro, fk_marca_carro', 'safe', 'on'=>'search'),
		);
	}



	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'fkUsuarioCarro' => array(self::BELONGS_TO, 'Usuario', 'fk_usuario_carro'),
			'fkMarcaCarro' => array(self::BELONGS_TO, 'Marca', 'fk_marca_carro'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_carro' => 'Id',
			'modelo' => 'Modelo',
			'ano' => 'Ano',
			'foto' => 'Foto',
			'valor' => 'Valor',
			'num_parcelas_max' => 'Número de parcelas',
			'valor_total' => 'Valor Total',
			'data_cadastro_carro' => 'Cadastrado em',
			'fk_usuario_carro' => 'Cadastrado por',
			'fk_marca_carro' => 'Marca',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_carro',$this->id_carro);
		$criteria->compare('modelo',$this->modelo,true);
		$criteria->compare('ano',$this->ano);
		$criteria->compare('foto',$this->foto,true);
		$criteria->compare('valor',$this->valor);
		$criteria->compare('num_parcelas_max',$this->num_parcelas_max);
		$criteria->compare('valor_total',$this->valor_total);
		$criteria->compare('data_cadastro_carro',$this->data_cadastro_carro,true);
		$criteria->compare('fk_usuario_carro',$this->fk_usuario_carro);
		$criteria->compare('fk_marca_carro',$this->fk_marca_carro);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Carro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
