<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/combined_audience_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Services;

class CombinedAudienceService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac8030a3c676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f636f6d62696e65645f61756469656e63655f7374617475732e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76362e656e756d73226e0a1a436f6d62696e656441756469656e6365537461747573456e756d22500a16436f6d62696e656441756469656e6365537461747573120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a07454e41424c45441002120b0a0752454d4f564544100342f0010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d73421b436f6d62696e656441756469656e636553746174757350726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56362e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56365c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a456e756d73620670726f746f330abb060a39676f6f676c652f6164732f676f6f676c656164732f76362f7265736f75726365732f636f6d62696e65645f61756469656e63652e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365731a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22f3020a10436f6d62696e656441756469656e636512480a0d7265736f757263655f6e616d651801200128094231e04105fa412b0a29676f6f676c656164732e676f6f676c65617069732e636f6d2f436f6d62696e656441756469656e6365120f0a0269641802200128034203e0410312650a0673746174757318032001280e32502e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732e436f6d62696e656441756469656e6365537461747573456e756d2e436f6d62696e656441756469656e63655374617475734203e0410312110a046e616d651804200128094203e0410312180a0b6465736372697074696f6e1805200128094203e041033a70ea416d0a29676f6f676c656164732e676f6f676c65617069732e636f6d2f436f6d62696e656441756469656e63651240637573746f6d6572732f7b637573746f6d65725f69647d2f636f6d62696e656441756469656e6365732f7b636f6d62696e65645f61756469656e63655f69647d4282020a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365734215436f6d62696e656441756469656e636550726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56362e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56365c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a5265736f7572636573620670726f746f330ade060a40676f6f676c652f6164732f676f6f676c656164732f76362f73657276696365732f636f6d62696e65645f61756469656e63655f736572766963652e70726f746f1220676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365731a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f22660a1a476574436f6d62696e656441756469656e63655265717565737412480a0d7265736f757263655f6e616d651801200128094231e04102fa412b0a29676f6f676c656164732e676f6f676c65617069732e636f6d2f436f6d62696e656441756469656e6365328e020a17436f6d62696e656441756469656e63655365727669636512d5010a13476574436f6d62696e656441756469656e6365123c2e676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365732e476574436f6d62696e656441756469656e6365526571756573741a332e676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365732e436f6d62696e656441756469656e6365224b82d3e493023512332f76362f7b7265736f757263655f6e616d653d637573746f6d6572732f2a2f636f6d62696e656441756469656e6365732f2a7dda410d7265736f757263655f6e616d651a1bca4118676f6f676c656164732e676f6f676c65617069732e636f6d4283020a24636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e7365727669636573421c436f6d62696e656441756469656e63655365727669636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f73657276696365733b7365727669636573a20203474141aa0220476f6f676c652e4164732e476f6f676c654164732e56362e5365727669636573ca0220476f6f676c655c4164735c476f6f676c654164735c56365c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a5365727669636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

