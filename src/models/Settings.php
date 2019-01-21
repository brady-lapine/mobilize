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

    /**
     * Some field model attribute
     *
     * @var string
     */
    public $apiKey = '';
    public $cacheDuration = '3360';
    public $organizationID = '';

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['apiKey', 'string'],
            ['cacheDuration', 'default', 'value' => '3306'],
            ['organizationID', 'string']
        ];
    }
}
