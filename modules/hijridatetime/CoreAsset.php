<?php

namespace app\modules\hijridatetime;

use Yii;
use yii\web\AssetBundle;

/**
 * @link http://www.frenzel.net/
 * @author Philipp Frenzel <philipp@frenzel.net>
 */

class CoreAsset extends AssetBundle
{
    /**
     * [$sourcePath description]
     * @var string
     */
    // public $sourcePath = '@bower/fullcalendar';
    // public $basePath = '@webroot';
    public $baseUrl = '@web';

    /**
     * the language the calender will be displayed in
     * @var string ISO2 code for the wished display language
     */
    public $language = NULL;

    /**
     * [$css description]
     * @var array
     */
    public $css = [
        'css/bootstrap-datetimepicker.min.css',
    ];

    /**
     * [$js description]
     * @var array
     */
    public $js = [
        'js/bootstrap-hijri-datetimepicker.min.js',
    ];

    /**
     * [$depends description]
     * @var array
     */
    public $depends = [
      'yii\web\YiiAsset',
      'yii2fullcalendar\MomentAsset',
      'yii\bootstrap\BootstrapAsset',
      'yii\bootstrap\BootstrapPluginAsset',
    ];

    /**
     * @inheritdoc
     */
    public function registerAssetFiles($view)
    {
        /* $language = $this->language ? $this->language : Yii::$app->language;
         $this->js[] = "lang/{$language}.js";
      	*/
      	$language = strtolower($this->language ? $this->language : Yii::$app->language);

         // if ($language != 'en-us') {
         //     $this->js[] = "lang/{$language}.js";
         // }
        parent::registerAssetFiles($view);
    }

}
