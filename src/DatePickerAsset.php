<?php
/**
 * @copyright Copyright (c) 2013-2016 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */

namespace dosamigos\datepicker;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;
use yii\bootstrap5\BootstrapPluginAsset;

/**
 * DatePickerAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\datepicker
 */
class DatePickerAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-datepicker/dist';

    public $css = [
        'css/bootstrap-datepicker.standalone.css',
    ];

    public $js = [
        'js/bootstrap-datepicker.js'
    ];

    public $depends = [
        BootstrapPluginAsset::class,
        JqueryAsset::class,
    ];
}