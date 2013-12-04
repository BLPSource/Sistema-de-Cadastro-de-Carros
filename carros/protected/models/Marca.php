<?php

/**
 * This is the model class for table "marca".
 *
 * The followings are the available columns in table 'marca':
 * @property integer $id_marca
 * @property string $marca_nome
 * @property string $data_cadastro_marca
 * @property integer $fk_usuario_marca
 *
 * The followings are the available model relations:
 * @property Usuario $fkUsuarioMarca
 * @property Carro[] $carros
 */
class Marca extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'marca';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fk_usuario_marca', 'numerical', 'integerOnly'=>true),
			array('marca_nome', 'required'),
			array('marca_nome', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_marca, marca_nome, data_cadastro_marca, fk_usuario_marca', 'safe', 'on'=>'search'),
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
			'fkUsuarioMarca' => array(self::BELONGS_TO, 'Usuario', 'fk_usuario_marca'),
			'carros' => array(self::HAS_MANY, 'Carro', 'fk_marca_carro'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_marca' => 'Id',
			'marca_nome' => 'Marca',
			'data_cadastro_marca' => 'Cadastrado em',
			'fk_usuario_marca' => 'Cadastrado por',
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

		$criteria->compare('id_marca',$this->id_marca);
		$criteria->compare('marca_nome',$this->marca_nome,true);
		$criteria->compare('data_cadastro_marca',$this->data_cadastro_marca,true);
		$criteria->compare('fk_usuario_marca',$this->fk_usuario_marca);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Marca the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
