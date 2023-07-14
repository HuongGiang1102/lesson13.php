<?php
interface Encryptable {
    public function encrypt($data);
    public function decrypt($encryptedData);
}

class AES implements Encryptable {
    public function encrypt($data) {
        $encryptedData = "AES: " . $data;
        return $encryptedData;
    }

    public function decrypt($encryptedData) {
        $data = str_replace("AES: ", "", $encryptedData);
        return $data;
    }
}

class DES implements Encryptable {
    public function encrypt($data) {
        $encryptedData = "DES: " . $data;
        return $encryptedData;
    }

    public function decrypt($encryptedData) {
        $data = str_replace("DES: ", "", $encryptedData);
        return $data;
    }
}

$aes = new AES();
$data = "Sensitive data";
$encryptedData = $aes->encrypt($data);
echo "Encrypted data: " . $encryptedData . "\n";

$decryptedData = $aes->decrypt($encryptedData);
echo "Decrypted data: " . $decryptedData . "\n";

?>