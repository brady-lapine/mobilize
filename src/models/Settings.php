<?php
/**
 * Mobilize plugin for Craft CMS 3.x
 *
 * Mobilize America API Integration for Events
 *
 * @link      http://www.github.com/mwcbrent
 * @copyright Copyright (c) 2019 Brent Sanders
 */

namespace mwcbrent\mobilize\models;

use mwcbrent\mobilize\Mobilize;

use Craft;
use craft\base\Model;

/**
 * Mobilize Settings Model
 *
 * This is a model used to define the plugin's settings.
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Brent Sanders
 * @package   Mobilize
 * @since     1
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    public $apiKey = '';
    public $cacheDuration = '3360';
    public $organizationID = '';

    // Public Methods
    // =========================================================================

    public function rules()
    {
        return [
            ['apiKey', 'string'],
            ['cacheDuration', 'default', 'value' => '3306'],
            ['organizationID', 'string']
        ];
    }
}
