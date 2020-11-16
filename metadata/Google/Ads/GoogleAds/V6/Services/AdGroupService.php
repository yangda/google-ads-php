<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/ad_group_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V6\Services;

class AdGroupService
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
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9c030a35676f6f676c652f6164732f676f6f676c656164732f76362f636f6d6d6f6e2f637573746f6d5f706172616d657465722e70726f746f121e676f6f676c652e6164732e676f6f676c656164732e76362e636f6d6d6f6e22490a0f437573746f6d506172616d6574657212100a036b6579180320012809480088010112120a0576616c7565180420012809480188010142060a045f6b657942080a065f76616c756542ef010a22636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e636f6d6d6f6e4214437573746f6d506172616d6574657250726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f636f6d6d6f6e3b636f6d6d6f6ea20203474141aa021e476f6f676c652e4164732e476f6f676c654164732e56362e436f6d6d6f6eca021e476f6f676c655c4164735c476f6f676c654164735c56365c436f6d6d6f6eea0222476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a436f6d6d6f6e620670726f746f330aad030a44676f6f676c652f6164732f676f6f676c656164732f76362f636f6d6d6f6e2f6578706c6f7265725f6175746f5f6f7074696d697a65725f73657474696e672e70726f746f121e676f6f676c652e6164732e676f6f676c656164732e76362e636f6d6d6f6e223e0a1c4578706c6f7265724175746f4f7074696d697a657253657474696e6712130a066f70745f696e180220012808480088010142090a075f6f70745f696e42fc010a22636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e636f6d6d6f6e42214578706c6f7265724175746f4f7074696d697a657253657474696e6750726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f636f6d6d6f6e3b636f6d6d6f6ea20203474141aa021e476f6f676c652e4164732e476f6f676c654164732e56362e436f6d6d6f6eca021e476f6f676c655c4164735c476f6f676c654164735c56365c436f6d6d6f6eea0222476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a436f6d6d6f6e620670726f746f330a96040a37676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f746172676574696e675f64696d656e73696f6e2e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76362e656e756d7322c4010a16546172676574696e6744696d656e73696f6e456e756d22a9010a12546172676574696e6744696d656e73696f6e120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a074b4559574f52441002120c0a0841554449454e4345100312090a05544f5049431004120a0a0647454e4445521005120d0a094147455f52414e47451006120d0a09504c4143454d454e54100712130a0f504152454e54414c5f535441545553100812100a0c494e434f4d455f52414e4745100942ec010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d734217546172676574696e6744696d656e73696f6e50726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56362e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56365c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a456e756d73620670726f746f330ad1070a36676f6f676c652f6164732f676f6f676c656164732f76362f636f6d6d6f6e2f746172676574696e675f73657474696e672e70726f746f121e676f6f676c652e6164732e676f6f676c656164732e76362e636f6d6d6f6e1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22c5010a10546172676574696e6753657474696e67124e0a137461726765745f7265737472696374696f6e7318012003280b32312e676f6f676c652e6164732e676f6f676c656164732e76362e636f6d6d6f6e2e5461726765745265737472696374696f6e12610a1d7461726765745f7265737472696374696f6e5f6f7065726174696f6e7318022003280b323a2e676f6f676c652e6164732e676f6f676c656164732e76362e636f6d6d6f6e2e5461726765745265737472696374696f6e4f7065726174696f6e229e010a115461726765745265737472696374696f6e12650a13746172676574696e675f64696d656e73696f6e18012001280e32482e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732e546172676574696e6744696d656e73696f6e456e756d2e546172676574696e6744696d656e73696f6e12150a086269645f6f6e6c791803200128084800880101420b0a095f6269645f6f6e6c7922f4010a1a5461726765745265737472696374696f6e4f7065726174696f6e12550a086f70657261746f7218012001280e32432e676f6f676c652e6164732e676f6f676c656164732e76362e636f6d6d6f6e2e5461726765745265737472696374696f6e4f7065726174696f6e2e4f70657261746f7212400a0576616c756518022001280b32312e676f6f676c652e6164732e676f6f676c656164732e76362e636f6d6d6f6e2e5461726765745265737472696374696f6e223d0a084f70657261746f72120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112070a034144441002120a0a0652454d4f5645100342f0010a22636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e636f6d6d6f6e4215546172676574696e6753657474696e6750726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f636f6d6d6f6e3b636f6d6d6f6ea20203474141aa021e476f6f676c652e4164732e476f6f676c654164732e56362e436f6d6d6f6eca021e476f6f676c655c4164735c476f6f676c654164735c56365c436f6d6d6f6eea0222476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a436f6d6d6f6e620670726f746f330ace030a3d676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f61645f67726f75705f61645f726f746174696f6e5f6d6f64652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76362e656e756d7322740a19416447726f75704164526f746174696f6e4d6f6465456e756d22570a15416447726f75704164526f746174696f6e4d6f6465120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120c0a084f5054494d495a45100212120a0e524f544154455f464f5245564552100342ef010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d73421a416447726f75704164526f746174696f6e4d6f646550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56362e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56365c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a456e756d73620670726f746f330ab0030a33676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f61645f67726f75705f7374617475732e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76362e656e756d7322680a11416447726f7570537461747573456e756d22530a0d416447726f7570537461747573120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a07454e41424c45441002120a0a065041555345441003120b0a0752454d4f564544100442e7010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d734212416447726f757053746174757350726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56362e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56365c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a456e756d73620670726f746f330ae4050a31676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f61645f67726f75705f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76362e656e756d73229f030a0f416447726f757054797065456e756d228b030a0b416447726f757054797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112130a0f5345415243485f5354414e44415244100212140a10444953504c41595f5354414e44415244100312180a1453484f5050494e475f50524f445543545f4144531004120d0a09484f54454c5f414453100612160a1253484f5050494e475f534d4152545f414453100712100a0c564944454f5f42554d5045521008121d0a19564944454f5f545255455f564945575f494e5f53545245414d1009121e0a1a564944454f5f545255455f564945575f494e5f444953504c4159100a12210a1d564944454f5f4e4f4e5f534b49505041424c455f494e5f53545245414d100b12130a0f564944454f5f4f555453545245414d100c12160a125345415243485f44594e414d49435f414453100d12230a1f53484f5050494e475f434f4d50415249534f4e5f4c495354494e475f414453100e12160a1250524f4d4f5445445f484f54454c5f414453100f12140a10564944454f5f524553504f4e53495645101042e5010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d734210416447726f75705479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56362e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56365c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a456e756d73620670726f746f330acf030a32676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f62696464696e675f736f757263652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732287010a1142696464696e67536f75726365456e756d22720a0d42696464696e67536f75726365120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001121d0a1943414d504149474e5f42494444494e475f53545241544547591005120c0a0841445f47524f5550100612160a1241445f47524f55505f435249544552494f4e100742e7010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d73421242696464696e67536f7572636550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56362e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56365c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a456e756d73620670726f746f330ac3030a39676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f726573706f6e73655f636f6e74656e745f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76362e656e756d73226f0a17526573706f6e7365436f6e74656e7454797065456e756d22540a13526573706f6e7365436f6e74656e7454797065120f0a0b554e535045434946494544100012160a125245534f555243455f4e414d455f4f4e4c59100112140a104d555441424c455f5245534f55524345100242ed010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d734218526573706f6e7365436f6e74656e745479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56362e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56365c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a456e756d73620670726f746f330ac9150a30676f6f676c652f6164732f676f6f676c656164732f76362f7265736f75726365732f61645f67726f75702e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365731a44676f6f676c652f6164732f676f6f676c656164732f76362f636f6d6d6f6e2f6578706c6f7265725f6175746f5f6f7074696d697a65725f73657474696e672e70726f746f1a36676f6f676c652f6164732f676f6f676c656164732f76362f636f6d6d6f6e2f746172676574696e675f73657474696e672e70726f746f1a3d676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f61645f67726f75705f61645f726f746174696f6e5f6d6f64652e70726f746f1a33676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f61645f67726f75705f7374617475732e70726f746f1a31676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f61645f67726f75705f747970652e70726f746f1a32676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f62696464696e675f736f757263652e70726f746f1a37676f6f676c652f6164732f676f6f676c656164732f76362f656e756d732f746172676574696e675f64696d656e73696f6e2e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22810f0a07416447726f7570123f0a0d7265736f757263655f6e616d651801200128094228e04105fa41220a20676f6f676c656164732e676f6f676c65617069732e636f6d2f416447726f757012140a0269641822200128034203e04103480088010112110a046e616d651823200128094801880101124e0a0673746174757318052001280e323e2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732e416447726f7570537461747573456e756d2e416447726f7570537461747573124d0a0474797065180c2001280e323a2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732e416447726f757054797065456e756d2e416447726f7570547970654203e0410512680a1061645f726f746174696f6e5f6d6f646518162001280e324e2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732e416447726f75704164526f746174696f6e4d6f6465456e756d2e416447726f75704164526f746174696f6e4d6f646512440a0d626173655f61645f67726f75701824200128094228e04103fa41220a20676f6f676c656164732e676f6f676c65617069732e636f6d2f416447726f7570480288010112220a15747261636b696e675f75726c5f74656d706c6174651825200128094803880101124e0a1575726c5f637573746f6d5f706172616d657465727318062003280b322f2e676f6f676c652e6164732e676f6f676c656164732e76362e636f6d6d6f6e2e437573746f6d506172616d6574657212400a0863616d706169676e1826200128094229e04105fa41230a21676f6f676c656164732e676f6f676c65617069732e636f6d2f43616d706169676e4804880101121b0a0e6370635f6269645f6d6963726f731827200128034805880101121b0a0e63706d5f6269645f6d6963726f731828200128034806880101121e0a117461726765745f6370615f6d6963726f73182920012803480788010112200a0e6370765f6269645f6d6963726f73182a200128034203e041034808880101121e0a117461726765745f63706d5f6d6963726f73182b20012803480988010112180a0b7461726765745f726f6173182c20012801480a88010112230a1670657263656e745f6370635f6269645f6d6963726f73182d20012803480b88010112650a1f6578706c6f7265725f6175746f5f6f7074696d697a65725f73657474696e6718152001280b323c2e676f6f676c652e6164732e676f6f676c656164732e76362e636f6d6d6f6e2e4578706c6f7265724175746f4f7074696d697a657253657474696e67126e0a1c646973706c61795f637573746f6d5f6269645f64696d656e73696f6e18172001280e32482e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732e546172676574696e6744696d656e73696f6e456e756d2e546172676574696e6744696d656e73696f6e121d0a1066696e616c5f75726c5f737566666978182e20012809480c880101124b0a11746172676574696e675f73657474696e6718192001280b32302e676f6f676c652e6164732e676f6f676c656164732e76362e636f6d6d6f6e2e546172676574696e6753657474696e67122d0a1b6566666563746976655f7461726765745f6370615f6d6963726f73182f200128034203e04103480d88010112680a1b6566666563746976655f7461726765745f6370615f736f75726365181d2001280e323e2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732e42696464696e67536f75726365456e756d2e42696464696e67536f757263654203e0410312270a156566666563746976655f7461726765745f726f61731830200128014203e04103480e88010112690a1c6566666563746976655f7461726765745f726f61735f736f7572636518202001280e323e2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732e42696464696e67536f75726365456e756d2e42696464696e67536f757263654203e04103123d0a066c6162656c73183120032809422de04103fa41270a25676f6f676c656164732e676f6f676c65617069732e636f6d2f416447726f75704c6162656c3a55ea41520a20676f6f676c656164732e676f6f676c65617069732e636f6d2f416447726f7570122e637573746f6d6572732f7b637573746f6d65725f69647d2f616447726f7570732f7b61645f67726f75705f69647d42050a035f696442070a055f6e616d6542100a0e5f626173655f61645f67726f757042180a165f747261636b696e675f75726c5f74656d706c617465420b0a095f63616d706169676e42110a0f5f6370635f6269645f6d6963726f7342110a0f5f63706d5f6269645f6d6963726f7342140a125f7461726765745f6370615f6d6963726f7342110a0f5f6370765f6269645f6d6963726f7342140a125f7461726765745f63706d5f6d6963726f73420e0a0c5f7461726765745f726f617342190a175f70657263656e745f6370635f6269645f6d6963726f7342130a115f66696e616c5f75726c5f737566666978421e0a1c5f6566666563746976655f7461726765745f6370615f6d6963726f7342180a165f6566666563746976655f7461726765745f726f617342f9010a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e7265736f7572636573420c416447726f757050726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56362e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56365c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a5265736f7572636573620670726f746f330ad20e0a37676f6f676c652f6164732f676f6f676c656164732f76362f73657276696365732f61645f67726f75705f736572766963652e70726f746f1220676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365731a30676f6f676c652f6164732f676f6f676c656164732f76362f7265736f75726365732f61645f67726f75702e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f1a17676f6f676c652f7270632f7374617475732e70726f746f22540a11476574416447726f757052657175657374123f0a0d7265736f757263655f6e616d651801200128094228e04102fa41220a20676f6f676c656164732e676f6f676c65617069732e636f6d2f416447726f75702299020a154d7574617465416447726f7570735265717565737412180a0b637573746f6d65725f69641801200128094203e04102124b0a0a6f7065726174696f6e7318022003280b32322e676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365732e416447726f75704f7065726174696f6e4203e0410212170a0f7061727469616c5f6661696c75726518032001280812150a0d76616c69646174655f6f6e6c7918042001280812690a15726573706f6e73655f636f6e74656e745f7479706518052001280e324a2e676f6f676c652e6164732e676f6f676c656164732e76362e656e756d732e526573706f6e7365436f6e74656e7454797065456e756d2e526573706f6e7365436f6e74656e745479706522de010a10416447726f75704f7065726174696f6e122f0a0b7570646174655f6d61736b18042001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b123c0a0663726561746518012001280b322a2e676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365732e416447726f75704800123c0a0675706461746518022001280b322a2e676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365732e416447726f7570480012100a0672656d6f76651803200128094800420b0a096f7065726174696f6e2293010a164d7574617465416447726f757073526573706f6e736512310a157061727469616c5f6661696c7572655f6572726f7218032001280b32122e676f6f676c652e7270632e53746174757312460a07726573756c747318022003280b32352e676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365732e4d7574617465416447726f7570526573756c74226a0a134d7574617465416447726f7570526573756c7412150a0d7265736f757263655f6e616d65180120012809123c0a0861645f67726f757018022001280b322a2e676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365732e416447726f757032ba030a0e416447726f75705365727669636512b1010a0a476574416447726f757012332e676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365732e476574416447726f7570526571756573741a2a2e676f6f676c652e6164732e676f6f676c656164732e76362e7265736f75726365732e416447726f7570224282d3e493022c122a2f76362f7b7265736f757263655f6e616d653d637573746f6d6572732f2a2f616447726f7570732f2a7dda410d7265736f757263655f6e616d6512d6010a0e4d7574617465416447726f75707312372e676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365732e4d7574617465416447726f757073526571756573741a382e676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365732e4d7574617465416447726f757073526573706f6e7365225182d3e4930232222d2f76362f637573746f6d6572732f7b637573746f6d65725f69643d2a7d2f616447726f7570733a6d75746174653a012ada4116637573746f6d65725f69642c6f7065726174696f6e731a1bca4118676f6f676c656164732e676f6f676c65617069732e636f6d42fa010a24636f6d2e676f6f676c652e6164732e676f6f676c656164732e76362e73657276696365734213416447726f75705365727669636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76362f73657276696365733b7365727669636573a20203474141aa0220476f6f676c652e4164732e476f6f676c654164732e56362e5365727669636573ca0220476f6f676c655c4164735c476f6f676c654164735c56365c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a56363a3a5365727669636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

