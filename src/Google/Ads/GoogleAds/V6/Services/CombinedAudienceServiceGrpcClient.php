<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2020 Google LLC
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Google\Ads\GoogleAds\V6\Services;

/**
 * Proto file describing the Combined Audience service.
 *
 * Service to manage combined audiences. This service can be used to list all
 * your combined audiences with metadata, but won't show the structure and
 * components of the combined audience.
 */
class CombinedAudienceServiceGrpcClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Returns the requested combined audience in full detail.
     * @param \Google\Ads\GoogleAds\V6\Services\GetCombinedAudienceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCombinedAudience(\Google\Ads\GoogleAds\V6\Services\GetCombinedAudienceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/google.ads.googleads.v6.services.CombinedAudienceService/GetCombinedAudience',
        $argument,
        ['\Google\Ads\GoogleAds\V6\Resources\CombinedAudience', 'decode'],
        $metadata, $options);
    }

}
