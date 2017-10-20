<?php
require_once 'AmazonConnect/AmazonECS.php';

$params = $_GET;
print_r($params);
$result = array();

if (empty($params['marketplace']) && empty($params['tag']) && empty($params['access_key_id']) && empty($params['secret_access_key']) && empty($params['browse_node'])) {
    $result = array();
}

try {
    $amazon_ecs = new AmazonECS($params['access_key_id'], $params['secret_access_key'], $params['marketplace'], $params['tag']);
    print_r($amazon_ecs);
    $response = $amazon_ecs->browseNodeLookup($params['browse_node']);
    print_r($response);
} catch (\Exception $e) {
    print_r('error');
    $result = array('error' => $e->getMessage());
}
print_r($result);
?>