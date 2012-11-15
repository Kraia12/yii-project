<?php

/**
 * This is the model class for table "tbl_mex_cities".
 *
 * The followings are the available columns in table 'tbl_mex_cities':
 * @property integer $id
 * @property string $name
 * @property integer $state_id
 */
class MexCities extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MexCities the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_mex_cities';
	}


	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'state_id' => 'State',
		);
	}
}