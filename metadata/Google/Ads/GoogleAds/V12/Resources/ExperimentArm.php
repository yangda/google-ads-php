<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/resources/experiment_arm.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V12\Resources;

class ExperimentArm
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
7google/ads/googleads/v12/resources/experiment_arm.proto"google.ads.googleads.v12.resourcesgoogle/api/resource.proto"�
ExperimentArmE
resource_name (	B.�A�A(
&googleads.googleapis.com/ExperimentArm?

experiment (	B+�A�A%
#googleads.googleapis.com/Experiment
name (	B�A
control (
traffic_split (9
	campaigns (	B&�A#
!googleads.googleapis.com/CampaignF
in_design_campaigns (	B)�A�A#
!googleads.googleapis.com/Campaign:m�Aj
&googleads.googleapis.com/ExperimentArm@customers/{customer_id}/experimentArms/{trial_id}~{trial_arm_id}B�
&com.google.ads.googleads.v12.resourcesBExperimentArmProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v12/resources;resources�GAA�"Google.Ads.GoogleAds.V12.Resources�"Google\\Ads\\GoogleAds\\V12\\Resources�&Google::Ads::GoogleAds::V12::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

