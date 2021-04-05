<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/keyword_plan_idea_service.proto

namespace Google\Ads\GoogleAds\V6\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [KeywordPlanIdeaService.GenerateKeywordIdeas][google.ads.googleads.v6.services.KeywordPlanIdeaService.GenerateKeywordIdeas].
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.services.GenerateKeywordIdeasRequest</code>
 */
class GenerateKeywordIdeasRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the customer with the recommendation.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     */
    protected $customer_id = '';
    /**
     * The resource name of the language to target.
     * Required
     *
     * Generated from protobuf field <code>string language = 14;</code>
     */
    protected $language = null;
    /**
     * The resource names of the location to target.
     * Max 10
     *
     * Generated from protobuf field <code>repeated string geo_target_constants = 15;</code>
     */
    private $geo_target_constants;
    /**
     * If true, adult keywords will be included in response.
     * The default value is false.
     *
     * Generated from protobuf field <code>bool include_adult_keywords = 10;</code>
     */
    protected $include_adult_keywords = false;
    /**
     * Token of the page to retrieve. If not specified, the first
     * page of results will be returned. To request next page of results use the
     * value obtained from `next_page_token` in the previous response.
     * The request fields must match across pages.
     *
     * Generated from protobuf field <code>string page_token = 12;</code>
     */
    protected $page_token = '';
    /**
     * Number of results to retrieve in a single page.
     * A maximum of 10,000 results may be returned, if the page_size
     * exceeds this, it is ignored.
     * If unspecified, at most 10,000 results will be returned.
     * The server may decide to further limit the number of returned resources.
     * If the response contains fewer than 10,000 results it may not be assumed
     * as last page of results.
     *
     * Generated from protobuf field <code>int32 page_size = 13;</code>
     */
    protected $page_size = 0;
    /**
     * Targeting network.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.KeywordPlanNetworkEnum.KeywordPlanNetwork keyword_plan_network = 9;</code>
     */
    protected $keyword_plan_network = 0;
    protected $seed;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           The ID of the customer with the recommendation.
     *     @type string $language
     *           The resource name of the language to target.
     *           Required
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $geo_target_constants
     *           The resource names of the location to target.
     *           Max 10
     *     @type bool $include_adult_keywords
     *           If true, adult keywords will be included in response.
     *           The default value is false.
     *     @type string $page_token
     *           Token of the page to retrieve. If not specified, the first
     *           page of results will be returned. To request next page of results use the
     *           value obtained from `next_page_token` in the previous response.
     *           The request fields must match across pages.
     *     @type int $page_size
     *           Number of results to retrieve in a single page.
     *           A maximum of 10,000 results may be returned, if the page_size
     *           exceeds this, it is ignored.
     *           If unspecified, at most 10,000 results will be returned.
     *           The server may decide to further limit the number of returned resources.
     *           If the response contains fewer than 10,000 results it may not be assumed
     *           as last page of results.
     *     @type int $keyword_plan_network
     *           Targeting network.
     *     @type \Google\Ads\GoogleAds\V6\Services\KeywordAndUrlSeed $keyword_and_url_seed
     *           A Keyword and a specific Url to generate ideas from
     *           e.g. cars, www.example.com/cars.
     *     @type \Google\Ads\GoogleAds\V6\Services\KeywordSeed $keyword_seed
     *           A Keyword or phrase to generate ideas from, e.g. cars.
     *     @type \Google\Ads\GoogleAds\V6\Services\UrlSeed $url_seed
     *           A specific url to generate ideas from, e.g. www.example.com/cars.
     *     @type \Google\Ads\GoogleAds\V6\Services\SiteSeed $site_seed
     *           The site to generate ideas from, e.g. www.example.com.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V6\Services\KeywordPlanIdeaService::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the customer with the recommendation.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * The ID of the customer with the recommendation.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * The resource name of the language to target.
     * Required
     *
     * Generated from protobuf field <code>string language = 14;</code>
     * @return string
     */
    public function getLanguage()
    {
        return isset($this->language) ? $this->language : '';
    }

    public function hasLanguage()
    {
        return isset($this->language);
    }

    public function clearLanguage()
    {
        unset($this->language);
    }

    /**
     * The resource name of the language to target.
     * Required
     *
     * Generated from protobuf field <code>string language = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->language = $var;

        return $this;
    }

    /**
     * The resource names of the location to target.
     * Max 10
     *
     * Generated from protobuf field <code>repeated string geo_target_constants = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGeoTargetConstants()
    {
        return $this->geo_target_constants;
    }

    /**
     * The resource names of the location to target.
     * Max 10
     *
     * Generated from protobuf field <code>repeated string geo_target_constants = 15;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGeoTargetConstants($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->geo_target_constants = $arr;

        return $this;
    }

    /**
     * If true, adult keywords will be included in response.
     * The default value is false.
     *
     * Generated from protobuf field <code>bool include_adult_keywords = 10;</code>
     * @return bool
     */
    public function getIncludeAdultKeywords()
    {
        return $this->include_adult_keywords;
    }

    /**
     * If true, adult keywords will be included in response.
     * The default value is false.
     *
     * Generated from protobuf field <code>bool include_adult_keywords = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeAdultKeywords($var)
    {
        GPBUtil::checkBool($var);
        $this->include_adult_keywords = $var;

        return $this;
    }

    /**
     * Token of the page to retrieve. If not specified, the first
     * page of results will be returned. To request next page of results use the
     * value obtained from `next_page_token` in the previous response.
     * The request fields must match across pages.
     *
     * Generated from protobuf field <code>string page_token = 12;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Token of the page to retrieve. If not specified, the first
     * page of results will be returned. To request next page of results use the
     * value obtained from `next_page_token` in the previous response.
     * The request fields must match across pages.
     *
     * Generated from protobuf field <code>string page_token = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Number of results to retrieve in a single page.
     * A maximum of 10,000 results may be returned, if the page_size
     * exceeds this, it is ignored.
     * If unspecified, at most 10,000 results will be returned.
     * The server may decide to further limit the number of returned resources.
     * If the response contains fewer than 10,000 results it may not be assumed
     * as last page of results.
     *
     * Generated from protobuf field <code>int32 page_size = 13;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Number of results to retrieve in a single page.
     * A maximum of 10,000 results may be returned, if the page_size
     * exceeds this, it is ignored.
     * If unspecified, at most 10,000 results will be returned.
     * The server may decide to further limit the number of returned resources.
     * If the response contains fewer than 10,000 results it may not be assumed
     * as last page of results.
     *
     * Generated from protobuf field <code>int32 page_size = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Targeting network.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.KeywordPlanNetworkEnum.KeywordPlanNetwork keyword_plan_network = 9;</code>
     * @return int
     */
    public function getKeywordPlanNetwork()
    {
        return $this->keyword_plan_network;
    }

    /**
     * Targeting network.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.enums.KeywordPlanNetworkEnum.KeywordPlanNetwork keyword_plan_network = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setKeywordPlanNetwork($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V6\Enums\KeywordPlanNetworkEnum\KeywordPlanNetwork::class);
        $this->keyword_plan_network = $var;

        return $this;
    }

    /**
     * A Keyword and a specific Url to generate ideas from
     * e.g. cars, www.example.com/cars.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.KeywordAndUrlSeed keyword_and_url_seed = 2;</code>
     * @return \Google\Ads\GoogleAds\V6\Services\KeywordAndUrlSeed|null
     */
    public function getKeywordAndUrlSeed()
    {
        return $this->readOneof(2);
    }

    public function hasKeywordAndUrlSeed()
    {
        return $this->hasOneof(2);
    }

    /**
     * A Keyword and a specific Url to generate ideas from
     * e.g. cars, www.example.com/cars.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.KeywordAndUrlSeed keyword_and_url_seed = 2;</code>
     * @param \Google\Ads\GoogleAds\V6\Services\KeywordAndUrlSeed $var
     * @return $this
     */
    public function setKeywordAndUrlSeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V6\Services\KeywordAndUrlSeed::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * A Keyword or phrase to generate ideas from, e.g. cars.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.KeywordSeed keyword_seed = 3;</code>
     * @return \Google\Ads\GoogleAds\V6\Services\KeywordSeed|null
     */
    public function getKeywordSeed()
    {
        return $this->readOneof(3);
    }

    public function hasKeywordSeed()
    {
        return $this->hasOneof(3);
    }

    /**
     * A Keyword or phrase to generate ideas from, e.g. cars.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.KeywordSeed keyword_seed = 3;</code>
     * @param \Google\Ads\GoogleAds\V6\Services\KeywordSeed $var
     * @return $this
     */
    public function setKeywordSeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V6\Services\KeywordSeed::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * A specific url to generate ideas from, e.g. www.example.com/cars.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.UrlSeed url_seed = 5;</code>
     * @return \Google\Ads\GoogleAds\V6\Services\UrlSeed|null
     */
    public function getUrlSeed()
    {
        return $this->readOneof(5);
    }

    public function hasUrlSeed()
    {
        return $this->hasOneof(5);
    }

    /**
     * A specific url to generate ideas from, e.g. www.example.com/cars.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.UrlSeed url_seed = 5;</code>
     * @param \Google\Ads\GoogleAds\V6\Services\UrlSeed $var
     * @return $this
     */
    public function setUrlSeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V6\Services\UrlSeed::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The site to generate ideas from, e.g. www.example.com.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.SiteSeed site_seed = 11;</code>
     * @return \Google\Ads\GoogleAds\V6\Services\SiteSeed|null
     */
    public function getSiteSeed()
    {
        return $this->readOneof(11);
    }

    public function hasSiteSeed()
    {
        return $this->hasOneof(11);
    }

    /**
     * The site to generate ideas from, e.g. www.example.com.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.services.SiteSeed site_seed = 11;</code>
     * @param \Google\Ads\GoogleAds\V6\Services\SiteSeed $var
     * @return $this
     */
    public function setSiteSeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V6\Services\SiteSeed::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSeed()
    {
        return $this->whichOneof("seed");
    }

}

