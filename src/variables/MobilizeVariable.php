<?php
/**
 * Mobilize plugin for Craft CMS 3.x
 *
 * Mobilize America API Integration for Events
 *
 * @link      http://www.github.com/mwcbrent
 * @copyright Copyright (c) 2019 Brent Sanders
 */

namespace mwcbrent\mobilize\variables;

use mwcbrent\mobilize\Mobilize;

use Craft;

/**
 * Mobilize Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.mobilize }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Brent Sanders
 * @package   Mobilize
 * @since     1
 */
class MobilizeVariable
{
    // Public Methods
    // =========================================================================

     public function allEvents($params)
     {
         return Mobilize::$plugin->mobilizeService->eventList($params);
     }

}
