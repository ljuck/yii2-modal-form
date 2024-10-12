<?php
/**
 * @link https://github.com/borodulin/yii2-modal-form
 * @copyright Copyright (c) 2015 Andrey Borodulin
 * @license https://github.com/borodulin/yii2-modal-form/blob/master/LICENSE
 */
namespace conquer\modal;

class ModalFormAsset5 extends \yii\web\AssetBundle
{

    public $sourcePath = '@conquer/modal/assets';

    public $js = [
        'modal-form-bs5.js'
    ];

    public $depends = [
        'yii\bootstrap5\BootstrapPluginAsset'
    ];
}
