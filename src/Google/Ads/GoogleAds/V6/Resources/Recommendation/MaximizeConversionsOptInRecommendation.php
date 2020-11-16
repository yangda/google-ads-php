<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V6\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Maximize Conversions Opt-In recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.resources.Recommendation.MaximizeConversionsOptInRecommendation</code>
 */
class MaximizeConversionsOptInRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The recommended new budget amount.
     *
     * Generated from protobuf field <code>int64 recommended_budget_amount_micros = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $recommended_budget_amount_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $recommended_budget_amount_micros
     *           Output only. The recommended new budget amount.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V6\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The recommended new budget amount.
     *
     * Generated from protobuf field <code>int64 recommended_budget_amount_micros = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getRecommendedBudgetAmountMicros()
    {
        return isset($this->recommended_budget_amount_micros) ? $this->recommended_budget_amount_micros : 0;
    }

    public function hasRecommendedBudgetAmountMicros()
    {
        return isset($this->recommended_budget_amount_micros);
    }

    public function clearRecommendedBudgetAmountMicros()
    {
        unset($this->recommended_budget_amount_micros);
    }

    /**
     * Output only. The recommended new budget amount.
     *
     * Generated from protobuf field <code>int64 recommended_budget_amount_micros = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setRecommendedBudgetAmountMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->recommended_budget_amount_micros = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MaximizeConversionsOptInRecommendation::class, \Google\Ads\GoogleAds\V6\Resources\Recommendation_MaximizeConversionsOptInRecommendation::class);

