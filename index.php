<?php
$config = array(
    "private_key_bits" => 384,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);

$newKey = openssl_pkey_new($config);

openssl_pkey_export($newKey, $privateKey);


$publicKey = openssl_pkey_get_details($newKey);
$publicKey = $publicKey["key"];

echo $publicKey;
echo "<br>";
echo $privateKey;
/*
$data = 'plaintext';

openssl_public_encrypt($data, $encryptext, $publicKey,OPENSSL_NO_PADDING);

openssl_private_decrypt($encryptext, $decryptext, $privateKey);

echo $decryptext;*/

?>