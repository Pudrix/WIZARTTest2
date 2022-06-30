<?php
require_once('crest.php');
require_once('validator.php');

$name = $_POST['name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$birthday = $_POST['data_r'];
$phone = $_POST['tel'];
$city = $_POST['city'];

$phone = str_replace([' ','+','(',')', '-'],'',$phone);

$Validator = new Validator([
    "name" 	=> $name,
    "last_name" => $last_name,
    "email" => $email,
    "birthday" => $birthday,
    "phone" => $phone,
    "city" => $city
]);

$Validator->Expect("name", "required");
$Validator->Expect("last_name", "required");
$Validator->Expect("email", "required, EMAIL");
$Validator->Expect("birthday", "required");
$Validator->Expect("phone", "required, PHONE");
$Validator->Expect("city", "required");

if ($Validator->Validate()) {
    $lead = CRest::call(
        'crm.lead.add',
        [
            'fields' =>[
                'TITLE' => "Лид: ".$_POST["name"]." ".$_POST["last_name"],
                'NAME' => $_POST["name"],
                'LAST_NAME' => $_POST["last_name"],
                'EMAIL' => [['VALUE' => $_POST['email'], 'VALUE_TYPE' => 'WORK']],
                'BIRTHDATE' => $_POST["data_r"],
                'PHONE' => [['VALUE' => $_POST['tel'], 'VALUE_TYPE' => 'WORK']],
                'ADDRESS_CITY' => $_POST["city"],

            ]
        ]);

    $comment = CRest::call(
        'crm.timeline.comment.add',
        [
            'fields' =>[
                'ENTITY_ID' => $lead['result'],
                'ENTITY_TYPE' => 'lead',
                'COMMENT' => $_POST["city"],

            ]
        ]);
} else {
    echo json_encode('ERROR');
}




