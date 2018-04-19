<?php

$curl = curl_init();

$params = [
    'weblog_title' => '{{wp_title}}',
    'user_name' => '{{wp_username}}',
    'admin_password'   => '{{wp_password}}',
    'admin_password2'   => '{{wp_password}}',
    'admin_email' => '{{wp_email}}'
];

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://{{ ansible_eth0.ipv4.address }}/wp-admin/install.php?step=2",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"weblog_title\"\r\n\r\n".
    $params['weblog_title'].
    "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"user_name\"\r\n\r\n".
    $params['user_name'].
    "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"admin_password\"\r\n\r\n".
    $params['admin_password'].
    "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"admin_password2\"\r\n\r\n".
    $params['admin_password2'].    
    "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW\r\nContent-Disposition: form-data; name=\"admin_email\"\r\n\r\n".
    $params['admin_email'].    
    "\r\n------WebKitFormBoundary7MA4YWxkTrZu0gW--",
  CURLOPT_HTTPHEADER => array(
    "Cache-Control: no-cache",
    "Postman-Token: e54dad2a-a38c-41bf-8cb8-8667f84ac3bf",
    "content-type: multipart/form-data; boundary=----WebKitFormBoundary7MA4YWxkTrZu0gW"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);
echo($err);

curl_close($curl);