<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/table.proto

namespace GPBMetadata\Google\Bigtable\Admin\V2;

class Table
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af40e0a24676f6f676c652f6269677461626c652f61646d696e2f76322f" .
            "7461626c652e70726f746f1218676f6f676c652e6269677461626c652e61" .
            "646d696e2e76321a1e676f6f676c652f70726f746f6275662f6475726174" .
            "696f6e2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d" .
            "657374616d702e70726f746f22cb060a055461626c65120c0a046e616d65" .
            "180120012809124a0a0e636c75737465725f73746174657318022003280b" .
            "32322e676f6f676c652e6269677461626c652e61646d696e2e76322e5461" .
            "626c652e436c7573746572537461746573456e747279124c0a0f636f6c75" .
            "6d6e5f66616d696c69657318032003280b32332e676f6f676c652e626967" .
            "7461626c652e61646d696e2e76322e5461626c652e436f6c756d6e46616d" .
            "696c696573456e74727912490a0b6772616e756c61726974791804200128" .
            "0e32342e676f6f676c652e6269677461626c652e61646d696e2e76322e54" .
            "61626c652e54696d657374616d704772616e756c61726974791ae2010a0c" .
            "436c7573746572537461746512580a117265706c69636174696f6e5f7374" .
            "61746518012001280e323d2e676f6f676c652e6269677461626c652e6164" .
            "6d696e2e76322e5461626c652e436c757374657253746174652e5265706c" .
            "69636174696f6e537461746522780a105265706c69636174696f6e537461" .
            "746512130a0f53544154455f4e4f545f4b4e4f574e100012100a0c494e49" .
            "5449414c495a494e47100112170a13504c414e4e45445f4d41494e54454e" .
            "414e4345100212190a15554e504c414e4e45445f4d41494e54454e414e43" .
            "45100312090a05524541445910041a620a12436c75737465725374617465" .
            "73456e747279120b0a036b6579180120012809123b0a0576616c75651802" .
            "2001280b322c2e676f6f676c652e6269677461626c652e61646d696e2e76" .
            "322e5461626c652e436c757374657253746174653a0238011a5d0a13436f" .
            "6c756d6e46616d696c696573456e747279120b0a036b6579180120012809" .
            "12350a0576616c756518022001280b32262e676f6f676c652e6269677461" .
            "626c652e61646d696e2e76322e436f6c756d6e46616d696c793a02380122" .
            "490a1454696d657374616d704772616e756c617269747912250a2154494d" .
            "455354414d505f4752414e554c41524954595f554e535045434946494544" .
            "1000120a0a064d494c4c49531001225c0a045669657712140a1056494557" .
            "5f554e5350454349464945441000120d0a094e414d455f4f4e4c59100112" .
            "0f0a0b534348454d415f56494557100212140a105245504c49434154494f" .
            "4e5f56494557100312080a0446554c4c100422410a0c436f6c756d6e4661" .
            "6d696c7912310a0767635f72756c6518012001280b32202e676f6f676c65" .
            "2e6269677461626c652e61646d696e2e76322e476352756c6522d5020a06" .
            "476352756c65121a0a106d61785f6e756d5f76657273696f6e7318012001" .
            "28054800122c0a076d61785f61676518022001280b32192e676f6f676c65" .
            "2e70726f746f6275662e4475726174696f6e480012450a0c696e74657273" .
            "656374696f6e18032001280b322d2e676f6f676c652e6269677461626c65" .
            "2e61646d696e2e76322e476352756c652e496e74657273656374696f6e48" .
            "0012370a05756e696f6e18042001280b32262e676f6f676c652e62696774" .
            "61626c652e61646d696e2e76322e476352756c652e556e696f6e48001a3f" .
            "0a0c496e74657273656374696f6e122f0a0572756c657318012003280b32" .
            "202e676f6f676c652e6269677461626c652e61646d696e2e76322e476352" .
            "756c651a380a05556e696f6e122f0a0572756c657318012003280b32202e" .
            "676f6f676c652e6269677461626c652e61646d696e2e76322e476352756c" .
            "6542060a0472756c6522cf020a08536e617073686f74120c0a046e616d65" .
            "18012001280912350a0c736f757263655f7461626c6518022001280b321f" .
            "2e676f6f676c652e6269677461626c652e61646d696e2e76322e5461626c" .
            "6512170a0f646174615f73697a655f6279746573180320012803122f0a0b" .
            "6372656174655f74696d6518042001280b321a2e676f6f676c652e70726f" .
            "746f6275662e54696d657374616d70122f0a0b64656c6574655f74696d65" .
            "18052001280b321a2e676f6f676c652e70726f746f6275662e54696d6573" .
            "74616d7012370a05737461746518062001280e32282e676f6f676c652e62" .
            "69677461626c652e61646d696e2e76322e536e617073686f742e53746174" .
            "6512130a0b6465736372697074696f6e18072001280922350a0553746174" .
            "6512130a0f53544154455f4e4f545f4b4e4f574e100012090a0552454144" .
            "591001120c0a084352454154494e47100242ad010a1c636f6d2e676f6f67" .
            "6c652e6269677461626c652e61646d696e2e7632420a5461626c6550726f" .
            "746f50015a3d676f6f676c652e676f6c616e672e6f72672f67656e70726f" .
            "746f2f676f6f676c65617069732f6269677461626c652f61646d696e2f76" .
            "323b61646d696eaa021e476f6f676c652e436c6f75642e4269677461626c" .
            "652e41646d696e2e5632ca021e476f6f676c655c436c6f75645c42696774" .
            "61626c655c41646d696e5c5632620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
