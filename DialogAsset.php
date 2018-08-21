<?php

/**
 * @package   yii2-dialog
 * @author    Kartik Visweswaran <kartikv2@gmail.com>
 * @copyright Copyright &copy; Kartik Visweswaran, Krajee.com, 2015 - 2016
 * @version   1.0.3
 */

namespace kartik\dialog;

use yii\web\View;
use kartik\base\AssetBundle;

/**
 * Asset bundle that provides a polyfill for javascript native alert, confirm, and prompt boxes. The BootstrapDialog
 * will be used if available or needed, else the javascript native dialogs will be rendered.
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @since 1.0
 */
class DialogAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $jsOptions = ['position' => View::POS_HEAD];

    /**
     * @inheritdoc
     */
    public $depends = [];
    
    public $css = [
        'https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.4/css/bootstrap-dialog.min.css'
    ];
    
    public $js = [
      'https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.35.4/js/bootstrap-dialog.min.js',
    ];
    
    /**
     * @inheritdoc
     */
    public function init()
    {
        //$this->setSourcePath(__DIR__ . '/assets');
        $this->setupAssets('js', ['js/dialog']);
        parent::init();
    }
}
