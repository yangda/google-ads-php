<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/domain_category.proto

namespace Google\Ads\GoogleAds\V12\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A category generated automatically by crawling a domain. If a campaign uses
 * the DynamicSearchAdsSetting, then domain categories will be generated for
 * the domain. The categories can be targeted using WebpageConditionInfo.
 * See: https://support.google.com/google-ads/answer/2471185
 *
 * Generated from protobuf message <code>google.ads.googleads.v12.resources.DomainCategory</code>
 */
class DomainCategory extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the domain category.
     * Domain category resource names have the form:
     * `customers/{customer_id}/domainCategories/{campaign_id}~{category_base64}~{language_code}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The campaign this category is recommended for.
     *
     * Generated from protobuf field <code>optional string campaign = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $campaign = null;
    /**
     * Output only. Recommended category for the website domain, for example, if you have a
     * website about electronics, the categories could be "cameras",
     * "televisions", etc.
     *
     * Generated from protobuf field <code>optional string category = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $category = null;
    /**
     * Output only. The language code specifying the language of the website, for example, "en"
     * for English. The language can be specified in the DynamicSearchAdsSetting
     * required for dynamic search ads. This is the language of the pages from
     * your website that you want Google Ads to find, create ads for,
     * and match searches with.
     *
     * Generated from protobuf field <code>optional string language_code = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $language_code = null;
    /**
     * Output only. The domain for the website. The domain can be specified in the
     * DynamicSearchAdsSetting required for dynamic search ads.
     *
     * Generated from protobuf field <code>optional string domain = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $domain = null;
    /**
     * Output only. Fraction of pages on your site that this category matches.
     *
     * Generated from protobuf field <code>optional double coverage_fraction = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $coverage_fraction = null;
    /**
     * Output only. The position of this category in the set of categories. Lower numbers
     * indicate a better match for the domain. null indicates not recommended.
     *
     * Generated from protobuf field <code>optional int64 category_rank = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $category_rank = null;
    /**
     * Output only. Indicates whether this category has sub-categories.
     *
     * Generated from protobuf field <code>optional bool has_children = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $has_children = null;
    /**
     * Output only. The recommended cost per click for the category.
     *
     * Generated from protobuf field <code>optional int64 recommended_cpc_bid_micros = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $recommended_cpc_bid_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the domain category.
     *           Domain category resource names have the form:
     *           `customers/{customer_id}/domainCategories/{campaign_id}~{category_base64}~{language_code}`
     *     @type string $campaign
     *           Output only. The campaign this category is recommended for.
     *     @type string $category
     *           Output only. Recommended category for the website domain, for example, if you have a
     *           website about electronics, the categories could be "cameras",
     *           "televisions", etc.
     *     @type string $language_code
     *           Output only. The language code specifying the language of the website, for example, "en"
     *           for English. The language can be specified in the DynamicSearchAdsSetting
     *           required for dynamic search ads. This is the language of the pages from
     *           your website that you want Google Ads to find, create ads for,
     *           and match searches with.
     *     @type string $domain
     *           Output only. The domain for the website. The domain can be specified in the
     *           DynamicSearchAdsSetting required for dynamic search ads.
     *     @type float $coverage_fraction
     *           Output only. Fraction of pages on your site that this category matches.
     *     @type int|string $category_rank
     *           Output only. The position of this category in the set of categories. Lower numbers
     *           indicate a better match for the domain. null indicates not recommended.
     *     @type bool $has_children
     *           Output only. Indicates whether this category has sub-categories.
     *     @type int|string $recommended_cpc_bid_micros
     *           Output only. The recommended cost per click for the category.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V12\Resources\DomainCategory::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the domain category.
     * Domain category resource names have the form:
     * `customers/{customer_id}/domainCategories/{campaign_id}~{category_base64}~{language_code}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the domain category.
     * Domain category resource names have the form:
     * `customers/{customer_id}/domainCategories/{campaign_id}~{category_base64}~{language_code}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. The campaign this category is recommended for.
     *
     * Generated from protobuf field <code>optional string campaign = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCampaign()
    {
        return isset($this->campaign) ? $this->campaign : '';
    }

    public function hasCampaign()
    {
        return isset($this->campaign);
    }

    public function clearCampaign()
    {
        unset($this->campaign);
    }

    /**
     * Output only. The campaign this category is recommended for.
     *
     * Generated from protobuf field <code>optional string campaign = 10 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkString($var, True);
        $this->campaign = $var;

        return $this;
    }

    /**
     * Output only. Recommended category for the website domain, for example, if you have a
     * website about electronics, the categories could be "cameras",
     * "televisions", etc.
     *
     * Generated from protobuf field <code>optional string category = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCategory()
    {
        return isset($this->category) ? $this->category : '';
    }

    public function hasCategory()
    {
        return isset($this->category);
    }

    public function clearCategory()
    {
        unset($this->category);
    }

    /**
     * Output only. Recommended category for the website domain, for example, if you have a
     * website about electronics, the categories could be "cameras",
     * "televisions", etc.
     *
     * Generated from protobuf field <code>optional string category = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkString($var, True);
        $this->category = $var;

        return $this;
    }

    /**
     * Output only. The language code specifying the language of the website, for example, "en"
     * for English. The language can be specified in the DynamicSearchAdsSetting
     * required for dynamic search ads. This is the language of the pages from
     * your website that you want Google Ads to find, create ads for,
     * and match searches with.
     *
     * Generated from protobuf field <code>optional string language_code = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return isset($this->language_code) ? $this->language_code : '';
    }

    public function hasLanguageCode()
    {
        return isset($this->language_code);
    }

    public function clearLanguageCode()
    {
        unset($this->language_code);
    }

    /**
     * Output only. The language code specifying the language of the website, for example, "en"
     * for English. The language can be specified in the DynamicSearchAdsSetting
     * required for dynamic search ads. This is the language of the pages from
     * your website that you want Google Ads to find, create ads for,
     * and match searches with.
     *
     * Generated from protobuf field <code>optional string language_code = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Output only. The domain for the website. The domain can be specified in the
     * DynamicSearchAdsSetting required for dynamic search ads.
     *
     * Generated from protobuf field <code>optional string domain = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getDomain()
    {
        return isset($this->domain) ? $this->domain : '';
    }

    public function hasDomain()
    {
        return isset($this->domain);
    }

    public function clearDomain()
    {
        unset($this->domain);
    }

    /**
     * Output only. The domain for the website. The domain can be specified in the
     * DynamicSearchAdsSetting required for dynamic search ads.
     *
     * Generated from protobuf field <code>optional string domain = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;

        return $this;
    }

    /**
     * Output only. Fraction of pages on your site that this category matches.
     *
     * Generated from protobuf field <code>optional double coverage_fraction = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return float
     */
    public function getCoverageFraction()
    {
        return isset($this->coverage_fraction) ? $this->coverage_fraction : 0.0;
    }

    public function hasCoverageFraction()
    {
        return isset($this->coverage_fraction);
    }

    public function clearCoverageFraction()
    {
        unset($this->coverage_fraction);
    }

    /**
     * Output only. Fraction of pages on your site that this category matches.
     *
     * Generated from protobuf field <code>optional double coverage_fraction = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param float $var
     * @return $this
     */
    public function setCoverageFraction($var)
    {
        GPBUtil::checkDouble($var);
        $this->coverage_fraction = $var;

        return $this;
    }

    /**
     * Output only. The position of this category in the set of categories. Lower numbers
     * indicate a better match for the domain. null indicates not recommended.
     *
     * Generated from protobuf field <code>optional int64 category_rank = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getCategoryRank()
    {
        return isset($this->category_rank) ? $this->category_rank : 0;
    }

    public function hasCategoryRank()
    {
        return isset($this->category_rank);
    }

    public function clearCategoryRank()
    {
        unset($this->category_rank);
    }

    /**
     * Output only. The position of this category in the set of categories. Lower numbers
     * indicate a better match for the domain. null indicates not recommended.
     *
     * Generated from protobuf field <code>optional int64 category_rank = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCategoryRank($var)
    {
        GPBUtil::checkInt64($var);
        $this->category_rank = $var;

        return $this;
    }

    /**
     * Output only. Indicates whether this category has sub-categories.
     *
     * Generated from protobuf field <code>optional bool has_children = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getHasChildren()
    {
        return isset($this->has_children) ? $this->has_children : false;
    }

    public function hasHasChildren()
    {
        return isset($this->has_children);
    }

    public function clearHasChildren()
    {
        unset($this->has_children);
    }

    /**
     * Output only. Indicates whether this category has sub-categories.
     *
     * Generated from protobuf field <code>optional bool has_children = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setHasChildren($var)
    {
        GPBUtil::checkBool($var);
        $this->has_children = $var;

        return $this;
    }

    /**
     * Output only. The recommended cost per click for the category.
     *
     * Generated from protobuf field <code>optional int64 recommended_cpc_bid_micros = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getRecommendedCpcBidMicros()
    {
        return isset($this->recommended_cpc_bid_micros) ? $this->recommended_cpc_bid_micros : 0;
    }

    public function hasRecommendedCpcBidMicros()
    {
        return isset($this->recommended_cpc_bid_micros);
    }

    public function clearRecommendedCpcBidMicros()
    {
        unset($this->recommended_cpc_bid_micros);
    }

    /**
     * Output only. The recommended cost per click for the category.
     *
     * Generated from protobuf field <code>optional int64 recommended_cpc_bid_micros = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setRecommendedCpcBidMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->recommended_cpc_bid_micros = $var;

        return $this;
    }

}

