<?php

namespace sevkikaragol\note\models;

use Yii;

/**
 * This is the model class for table "silinenNot".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $body
 */
class SilinenNot extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'silinenNot';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['body'], 'string'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Başlık',
            'body' => 'Notunuz',
        ];
    }
}
