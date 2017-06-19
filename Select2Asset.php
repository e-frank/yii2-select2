<?
namespace x1\assets\select2;

class Select2Asset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/select2/select2/dist';
	
	public $js         = [
		'js/select2.full.min.js',
	];

	public $css        = [
		'css/select2.min.css',
	];

	public $depends = [
        'yii\bootstrap\BootstrapAsset',
	];
}
?>