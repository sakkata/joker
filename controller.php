<?php
public function actions()
{
    return [
        'fileapi-upload' => [
            'class' => FileAPIUpload::className(),
            'path' => 'uploads'
        ]
    ];
}
?>