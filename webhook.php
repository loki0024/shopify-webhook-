<?php
echo "webhook";
 define('DOMAIN_URL_PROJECT_PATH', "https://whispering-fortress-61572.herokuapp.com/create.php");
$array = array(
	"webhook" => array(
	"topic" => "products/create",
    "address" => "DOMAIN_URL_PROJECT_PATH",
    "format" => "json"
	)
);
$token = "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";
$shop = "newloki.myshopify.com";

$webhooks = shopify_call($token, $shop, "/admin/api/2019-10/webhooks.json", $array, 'POST');
$webhooks = json_decode($webhooks['response'], true);

print_r($webhooks);
?>