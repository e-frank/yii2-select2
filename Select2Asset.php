<?php
namespace x1\assets\select2;
use Yii;

class Select2Asset extends \yii\web\AssetBundle
{
	public $language   = null;
	public $fallback   = 'en-GB';
	public $sourcePath = '@vendor/select2/select2/dist';

	public $css        = [
		'css/select2.min.css',
	];

	public $js = [
		'js/select2.min.js',
	];

	public $depends = [
		'yii\bootstrap\BootstrapAsset',
	];

	public $publishOptions = [
		'only' => [
			'js/select2.min.js',
		],
	];


	public function init() {
		$lang = ($this->language == null) ? Yii::$app->language : $this->language;
		$lang = strtolower($lang);
		if (!file_exists(Yii::getAlias(sprintf('%s/js/i18n/%s.js', $this->sourcePath, $lang)))) {
			$lang = explode('-', $lang, 2)[0];

			if (!file_exists(Yii::getAlias(sprintf('%s/js/i18n/%s.js', $this->sourcePath, $lang)))) {
				$lang = strtolower($this->fallback);
			}
		}

		$langfile = Yii::getAlias(sprintf('js/i18n/%s.js', $lang));
		$this->js[$lang . '.js'] = $langfile;
		$this->publishOptions['only'][] = $langfile;
	}
}
?>
