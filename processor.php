<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mailchimp Form</title>

<style>
 
h3 {
    font-size: 2rem !important;
    line-height: 2.625rem;
    margin-top: 1.875rem;
}
pre {
    font-family: inherit;
    overflow: auto;
    white-space: pre-wrap;
    background: #eee;
    font-size: .9375rem;
    line-height: 1.6;
    margin-bottom: 1.5em;
    max-width: 100%;
    padding: 1.5em;
}
</style>
</head>
<body>
<?php

if ( isset($_POST) && !empty($_POST)  )  {

    $fname = isset( $_POST['MERGE1'] ) ? $_POST['MERGE1'] : '' ;
    $lname = isset( $_POST['MERGE2'] ) ? $_POST['MERGE2'] : '' ;
    $email = isset( $_POST['MERGE0'] ) ? $_POST['MERGE0'] : '' ;
$path = $_SERVER["DOCUMENT_ROOT"];
require_once $path.'/Personal-Projects-PHP-2021/mailchimp/vendor/autoload.php';
$api_key = "d8b289761b1464701014843712593468";
$server = "us2";
$list_id = "ca8c9233e2";
$client = new MailchimpMarketing\ApiClient();
$client->setConfig([
    'apiKey' => $api_key,
    'server' => $server,
]);
$response = $client->lists->addListMember($list_id, [
        "email_address" => $email,
        "status" => "subscribed",
        "merge_fields" => [
          "FNAME" => $fname,
          "LNAME" => $lname
        ]
    ]);

$path = $_SERVER['HTTP_REFERER'];
$msg = '<pre><strong>Thank you for getting in touch!&nbsp;</strong><br><br>We appreciate you contacting us '.$fname.' . One of our colleagues will get back in touch with you soon!Have a great day!</pre> <div class="query_msg">If you want to ask any other queries, please <a href="'.$path.'">click here</a> </div>';
echo $msg;

}

?>

</body>
</html>