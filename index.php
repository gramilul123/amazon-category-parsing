<?php
//require_once 'AmazonConnect/AmazonECS.php';

$params = $_GET;
$params = array(
    'marketplace' => 'de',
    'tag' => 'test02dca-20',
    'access_key_id' => 'AKIAJBEEAKRZCLDJQDVA',
    'secret_access_key' => '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',
    'browse_node' => '567135031'
);
print_r($params);
/*$result = array();

if (empty($params['marketplace']) && empty($params['tag']) && empty($params['access_key_id']) && empty($params['secret_access_key']) && empty($params['browse_node'])) {
    $result = array();
}

try {
    $amazon_ecs = new AmazonECS($params['access_key_id'], $params['secret_access_key'], $params['marketplace'], $params['tag']);
    $response = $amazon_ecs->browseNodeLookup($params['browse_node']);
    print_r($response);
} catch (\Exception $e) {
    $result = array('error' => $e->getMessage());
}
print_r($result);*/
?>