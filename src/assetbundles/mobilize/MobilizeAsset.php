<?php
/**
 * Mobilize plugin for Craft CMS 3.x
 *
 * Mobilize America API Integration for Events
 *
 * @link      http://www.github.com/mwcbrent
 * @copyright Copyright (c) 2019 Brent Sanders
 */

namespace mwcbrent\mobilize\assetbundles\Mobilize;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * MobilizeAsset AssetBundle
 *
 * AssetBundle represents a collection of asset files, such as CSS, JS, images.
 *
 * Each asset bundle has a unique name that globally identifies it among all asset bundles used in an application.
 * The name is the [fully qualified class name](http://php.net/manual/en/language.namespaces.rules.php)
 * of the class representing it.
 *
 * An asset bundle can depend on other asset bundles. When registering an asset bundle
 * with a view, all its dependent asset bundles will be automatically registered.
 *
 * http://www.yiiframework.com/doc-2.0/guide-structure-assets.html
 *
 * @author    Brent Sanders
 * @package   Mobilize
 * @since     1
 */
class MobilizeAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * Initializes the bundle.
     */
    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = "@mwcbrent/mobilize/assetbundles/mobilize/dist";

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        // define the relative path to CSS/JS files that should be registered with the page
        // when this asset bundle is registered
        $this->js = [
            'js/Mobilize.js',
        ];

        $this->css = [
            'css/Mobilize.css',
        ];

        parent::init();
    }
}
