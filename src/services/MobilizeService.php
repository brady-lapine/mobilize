<?php
/**
 * Mobilize plugin for Craft CMS 3.x
 *
 * Mobilize America API Integration for Events
 *
 * @link      http://www.github.com/mwcbrent
 * @copyright Copyright (c) 2019 Brent Sanders
 */

namespace mwcbrent\mobilize\services;
use GuzzleHttp\Client;
use mwcbrent\mobilize\Mobilize;

use Craft;
use craft\base\Component;

/**
 * MobilizeService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Brent Sanders
 * @package   Mobilize
 * @since     1
 */
class MobilizeService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     Mobilize::$plugin->mobilizeService->allEvents()
     *
     * @return mixed
     */
    protected $apiKey;
    protected $cacheDuration;
    protected $organizationID;
    protected $client;

    public function __construct()
    {
        $settings = Mobilize::$plugin->getSettings();
        if (!$settings->apiKey) {
            throw new Exception("You must add a Mobilize America API Key");
        }
        if (!$settings->organizationID) {
            throw new Exception("You must add a Mobilize America Organization ID");
        }
        $this->apiKey = $settings->apiKey;
        $this->organizationID = $settings->organizationID;
        $this->client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://events.mobilizeamerica.io/api/v1/',
            // You can set any number of default request options.
            'timeout'  => 20.0,
        ]);
    }

    public function allEvents()
    {
        $response = $this->client->request('GET', 'events?organization_id=' . $this->organizationID);
        if ($response->getStatusCode() != 200) {
            throw new Exception("Error: " . $response->getMessage());
        }
        $events = json_decode($response->getBody()->getContents());
        return $events->data;
    }
}
