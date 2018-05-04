<?php
    $form = ActiveForm::begin(
                    [
                        'options' => [
                            'class' => 'center',
                        ]
                    ]
    );
    ?>
    <fieldset class="registration-form">
        <?=
        $form->field($photo, 'fileName')->widget(
                Widget::className(), [
            'settings' => [	
                'url' => ['index']
            ],
            'crop' => true,
            'cropResizeWidth' => 100,
            'cropResizeHeight' => 100
                ]
        )->label(false)
        ?>
        <?=
        Html::submitButton(
                Загрузка, [
            'class' => 'btn btn-success btn-large pull-right'
                ]
        )
        ?>
    </fieldset>
    <?php ActiveForm::end(); ?>