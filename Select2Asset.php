<?
namespace x1\assets;

class Select2Asset extends \yii\web\AssetBundle
{
	public $sourcePath = '@vendor/select2/select2/dist';
	
	public $js         = [
		'js/select2.min.js',
	];

	public $css        = [
		'css/select2.min.css',
	];

	public $depends = [
        'yii\bootstrap\BootstrapAsset',
	];
}
?>