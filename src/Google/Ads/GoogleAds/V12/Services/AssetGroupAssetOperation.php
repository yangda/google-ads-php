<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/services/asset_group_asset_service.proto

namespace Google\Ads\GoogleAds\V12\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single operation (create, remove) on an asset group asset.
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.services.AssetGroupAssetOperation</code>
 */
class AssetGroupAssetOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     */
    protected $update_mask = null;
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           FieldMask that determines which resource fields are modified in an update.
     *     @type \Google\Ads\GoogleAds\V12\Resources\AssetGroupAsset $create
     *           Create operation: No resource name is expected for the new asset group
     *           asset
     *     @type \Google\Ads\GoogleAds\V12\Resources\AssetGroupAsset $update
     *           Update operation: The asset group asset sis expected to have a valid
     *           resource name.
     *     @type string $remove
     *           Remove operation: A resource name for the removed asset group asset is
     *           expected, in this format:
     *           `customers/{customer_id}/assetGroupAssets/{asset_group_id}~{asset_id}~{field_type}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Services\AssetGroupAssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Create operation: No resource name is expected for the new asset group
     * asset
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.AssetGroupAsset create = 1;</code>
     * @return \Google\Ads\GoogleAds\V12\Resources\AssetGroupAsset|null
     */
    public function getCreate()
    {
        return $this->readOneof(1);
    }

    public function hasCreate()
    {
        return $this->hasOneof(1);
    }

    /**
     * Create operation: No resource name is expected for the new asset group
     * asset
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.AssetGroupAsset create = 1;</code>
     * @param \Google\Ads\GoogleAds\V12\Resources\AssetGroupAsset $var
     * @return $this
     */
    public function setCreate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Resources\AssetGroupAsset::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Update operation: The asset group asset sis expected to have a valid
     * resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.AssetGroupAsset update = 2;</code>
     * @return \Google\Ads\GoogleAds\V12\Resources\AssetGroupAsset|null
     */
    public function getUpdate()
    {
        return $this->readOneof(2);
    }

    public function hasUpdate()
    {
        return $this->hasOneof(2);
    }

    /**
     * Update operation: The asset group asset sis expected to have a valid
     * resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v12.resources.AssetGroupAsset update = 2;</code>
     * @param \Google\Ads\GoogleAds\V12\Resources\AssetGroupAsset $var
     * @return $this
     */
    public function setUpdate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V12\Resources\AssetGroupAsset::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Remove operation: A resource name for the removed asset group asset is
     * expected, in this format:
     * `customers/{customer_id}/assetGroupAssets/{asset_group_id}~{asset_id}~{field_type}`
     *
     * Generated from protobuf field <code>string remove = 3 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getRemove()
    {
        return $this->readOneof(3);
    }

    public function hasRemove()
    {
        return $this->hasOneof(3);
    }

    /**
     * Remove operation: A resource name for the removed asset group asset is
     * expected, in this format:
     * `customers/{customer_id}/assetGroupAssets/{asset_group_id}~{asset_id}~{field_type}`
     *
     * Generated from protobuf field <code>string remove = 3 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRemove($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}

