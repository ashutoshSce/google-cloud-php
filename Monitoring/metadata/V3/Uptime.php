<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/uptime.proto

namespace GPBMetadata\Google\Monitoring\V3;

class Uptime
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\MonitoredResource::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0add160a21676f6f676c652f6d6f6e69746f72696e672f76332f757074696d652e70726f746f1214676f6f676c652e6d6f6e69746f72696e672e76331a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1e676f6f676c652f70726f746f6275662f6475726174696f6e2e70726f746f22e6010a0f496e7465726e616c436865636b6572120c0a046e616d6518012001280912140a0c646973706c61795f6e616d65180220012809120f0a076e6574776f726b18032001280912100a086763705f7a6f6e6518042001280912170a0f706565725f70726f6a6563745f6964180620012809123a0a05737461746518072001280e322b2e676f6f676c652e6d6f6e69746f72696e672e76332e496e7465726e616c436865636b65722e537461746522330a055374617465120f0a0b554e5350454349464945441000120c0a084352454154494e471001120b0a0752554e4e494e4710023a02180122fb0f0a11557074696d65436865636b436f6e666967120c0a046e616d6518012001280912140a0c646973706c61795f6e616d65180220012809123b0a126d6f6e69746f7265645f7265736f7572636518032001280b321d2e676f6f676c652e6170692e4d6f6e69746f7265645265736f757263654800124f0a0e7265736f757263655f67726f757018042001280b32352e676f6f676c652e6d6f6e69746f72696e672e76332e557074696d65436865636b436f6e6669672e5265736f7572636547726f7570480012470a0a687474705f636865636b18052001280b32312e676f6f676c652e6d6f6e69746f72696e672e76332e557074696d65436865636b436f6e6669672e48747470436865636b480112450a097463705f636865636b18062001280b32302e676f6f676c652e6d6f6e69746f72696e672e76332e557074696d65436865636b436f6e6669672e546370436865636b480112290a06706572696f6418072001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e122a0a0774696d656f757418082001280b32192e676f6f676c652e70726f746f6275662e4475726174696f6e12500a10636f6e74656e745f6d6174636865727318092003280b32362e676f6f676c652e6d6f6e69746f72696e672e76332e557074696d65436865636b436f6e6669672e436f6e74656e744d61746368657212410a1073656c65637465645f726567696f6e73180a2003280e32272e676f6f676c652e6d6f6e69746f72696e672e76332e557074696d65436865636b526567696f6e12170a0b69735f696e7465726e616c180f200128084202180112440a11696e7465726e616c5f636865636b657273180e2003280b32252e676f6f676c652e6d6f6e69746f72696e672e76332e496e7465726e616c436865636b6572420218011a610a0d5265736f7572636547726f757012100a0867726f75705f6964180120012809123e0a0d7265736f757263655f7479706518022001280e32272e676f6f676c652e6d6f6e69746f72696e672e76332e47726f75705265736f75726365547970651aa8050a0948747470436865636b12570a0e726571756573745f6d6574686f6418082001280e323f2e676f6f676c652e6d6f6e69746f72696e672e76332e557074696d65436865636b436f6e6669672e48747470436865636b2e526571756573744d6574686f64120f0a077573655f73736c180120012808120c0a0470617468180220012809120c0a04706f727418032001280512580a09617574685f696e666f18042001280b32452e676f6f676c652e6d6f6e69746f72696e672e76332e557074696d65436865636b436f6e6669672e48747470436865636b2e426173696341757468656e7469636174696f6e12140a0c6d61736b5f68656164657273180520012808124f0a076865616465727318062003280b323e2e676f6f676c652e6d6f6e69746f72696e672e76332e557074696d65436865636b436f6e6669672e48747470436865636b2e48656164657273456e74727912530a0c636f6e74656e745f7479706518092001280e323d2e676f6f676c652e6d6f6e69746f72696e672e76332e557074696d65436865636b436f6e6669672e48747470436865636b2e436f6e74656e745479706512140a0c76616c69646174655f73736c180720012808120c0a04626f6479180a2001280c1a390a13426173696341757468656e7469636174696f6e12100a08757365726e616d6518012001280912100a0870617373776f72641802200128091a2e0a0c48656164657273456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a023801223a0a0d526571756573744d6574686f6412160a124d4554484f445f554e535045434946494544100012070a03474554100112080a04504f5354100222340a0b436f6e74656e745479706512140a10545950455f554e5350454349464945441000120f0a0b55524c5f454e434f44454410011a180a08546370436865636b120c0a04706f72741801200128051a98020a0e436f6e74656e744d617463686572120f0a07636f6e74656e74180120012809125c0a076d61746368657218022001280e324b2e676f6f676c652e6d6f6e69746f72696e672e76332e557074696d65436865636b436f6e6669672e436f6e74656e744d6174636865722e436f6e74656e744d6174636865724f7074696f6e2296010a14436f6e74656e744d6174636865724f7074696f6e12260a22434f4e54454e545f4d4154434845525f4f5054494f4e5f554e535045434946494544100012130a0f434f4e5441494e535f535452494e47100112170a134e4f545f434f4e5441494e535f535452494e47100212110a0d4d4154434845535f5245474558100312150a114e4f545f4d4154434845535f524547455810043af301ea41ef010a2b6d6f6e69746f72696e672e676f6f676c65617069732e636f6d2f557074696d65436865636b436f6e666967123b70726f6a656374732f7b70726f6a6563747d2f757074696d65436865636b436f6e666967732f7b757074696d655f636865636b5f636f6e6669677d12456f7267616e697a6174696f6e732f7b6f7267616e697a6174696f6e7d2f757074696d65436865636b436f6e666967732f7b757074696d655f636865636b5f636f6e6669677d1239666f6c646572732f7b666f6c6465727d2f757074696d65436865636b436f6e666967732f7b757074696d655f636865636b5f636f6e6669677d12012a420a0a087265736f7572636542140a12636865636b5f726571756573745f74797065226e0a0d557074696d65436865636b497012370a06726567696f6e18012001280e32272e676f6f676c652e6d6f6e69746f72696e672e76332e557074696d65436865636b526567696f6e12100a086c6f636174696f6e18022001280912120a0a69705f616464726573731803200128092a650a11557074696d65436865636b526567696f6e12160a12524547494f4e5f554e535045434946494544100012070a035553411001120a0a064555524f5045100212110a0d534f5554485f414d4552494341100312100a0c415349415f5041434946494310042a5b0a1147726f75705265736f7572636554797065121d0a195245534f555243455f545950455f554e5350454349464945441000120c0a08494e5354414e4345100112190a154157535f454c425f4c4f41445f42414c414e434552100242c3010a18636f6d2e676f6f676c652e6d6f6e69746f72696e672e7633420b557074696d6550726f746f50015a3e676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6d6f6e69746f72696e672f76333b6d6f6e69746f72696e67aa021a476f6f676c652e436c6f75642e4d6f6e69746f72696e672e5633ca021a476f6f676c655c436c6f75645c4d6f6e69746f72696e675c5633ea021d476f6f676c653a3a436c6f75643a3a4d6f6e69746f72696e673a3a5633620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

