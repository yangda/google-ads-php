<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/extension_feed_item_service.proto

namespace Google\Ads\GoogleAds\V6\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the extension feed item mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.services.MutateExtensionFeedItemResult</code>
 */
class MutateExtensionFeedItemResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The mutated extension feed item with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.resources.ExtensionFeedItem extension_feed_item = 2;</code>
     */
    protected $extension_feed_item = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for successful operations.
     *     @type \Google\Ads\GoogleAds\V6\Resources\ExtensionFeedItem $extension_feed_item
     *           The mutated extension feed item with only mutable fields after mutate. The
     *           field will only be returned when response_content_type is set to
     *           "MUTABLE_RESOURCE".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V6\Services\ExtensionFeedItemService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The mutated extension feed item with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.resources.ExtensionFeedItem extension_feed_item = 2;</code>
     * @return \Google\Ads\GoogleAds\V6\Resources\ExtensionFeedItem|null
     */
    public function getExtensionFeedItem()
    {
        return isset($this->extension_feed_item) ? $this->extension_feed_item : null;
    }

    public function hasExtensionFeedItem()
    {
        return isset($this->extension_feed_item);
    }

    public function clearExtensionFeedItem()
    {
        unset($this->extension_feed_item);
    }

    /**
     * The mutated extension feed item with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.resources.ExtensionFeedItem extension_feed_item = 2;</code>
     * @param \Google\Ads\GoogleAds\V6\Resources\ExtensionFeedItem $var
     * @return $this
     */
    public function setExtensionFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V6\Resources\ExtensionFeedItem::class);
        $this->extension_feed_item = $var;

        return $this;
    }

}

