<?php
 
    public static function tableName() {
        return 'photo';
    }
 
    public function rules() {
        return [
            [['id_user'], 'required'],
            [['id_user'], 'integer'],
            [['isAvatar'], 'string'],
            [['fileName'], 'string', 'max' => 255]
        ];
    }

    public function behaviors() {
        return [
            'uploadBehavior' => [
                'class' => UploadBehavior::className(),
                'attributes' => [
                    'fileName' => [

                        'tempPath' => 'uploads/temp',
                        'url' => ''
                    ]
                ]
            ]
        ];
    }

    public function attributeLabels() {
        return [
            'id_photo' => 'Id Photo',
            'id_user' => 'Id User',
            'fileName' => 'File Name',
            'isAvatar' => 'Is Avatar',
        ];
    }
 
    public function getIdUser() {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }

}
