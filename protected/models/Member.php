<?php

/**
 * This is the model class for table "member".
 *
 * The followings are the available columns in table 'member':
 * @property string $Idmember
 * @property string $namamember
 * @property string $alamatmember
 * @property string $tanggallahir
 * @property string $emailmember
 * @property string $notelpmember
 */
class Member extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'member';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Idmember, namamember, alamatmember, tanggallahir, emailmember, notelpmember', 'required'),
			array('Idmember', 'length', 'max'=>10),
			array('namamember, tanggallahir, emailmember', 'length', 'max'=>100),
			array('alamatmember', 'length', 'max'=>200),
			array('notelpmember', 'length', 'max'=>15),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Idmember, namamember, alamatmember, tanggallahir, emailmember, notelpmember', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Idmember' => 'Idmember',
			'namamember' => 'Namamember',
			'alamatmember' => 'Alamatmember',
			'tanggallahir' => 'Tanggallahir',
			'emailmember' => 'Emailmember',
			'notelpmember' => 'Notelpmember',
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

		$criteria->compare('Idmember',$this->Idmember,true);
		$criteria->compare('namamember',$this->namamember,true);
		$criteria->compare('alamatmember',$this->alamatmember,true);
		$criteria->compare('tanggallahir',$this->tanggallahir,true);
		$criteria->compare('emailmember',$this->emailmember,true);
		$criteria->compare('notelpmember',$this->notelpmember,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Member the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
