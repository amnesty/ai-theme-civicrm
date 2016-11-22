<?php

// KK
/*$data_string = '
{
   "contact_id":"44913",
   "entity":"Contact",
   "action":"create",
   "api_key":"dd5928796f22798dfc0631f33ed163c5",
   "key":"e25b6bfd79eb165e74f09ca5a69a25be",
   "json":{
      "sequential":1,
      "contact_type":"Individual",
      "first_name":"Prueba",
      "last_name":"Crm",
      "api.Email.create":{
         "email":"prueba@pruebas.com"
      },
      "api.Phone.create":{
         "phone":"670000000"
      },
      "api.Address.create":{
         "country_id":"1198",
         "location_type_id":"1"
      }
   }
}';'*/

$data_string = '
{
   "entity":"Contact",
   "action":"get",
   "api_key":"dd5928796f22798dfc0631f33ed163c5",
   "key":"e25b6bfd79eb165e74f09ca5a69a25be",
   "json":{
      "sequential":1,
      "id":"44913"
   }
}';

$ch = curl_init('https://pruebacrm.es.amnesty.org/sites/all/modules/civicrm/extern/rest.php');
//$ch = curl_init('https://crm.es.amnesty.org/sites/all/modules/civicrm/extern/rest.php');

//$ch='https://pruebacrm.es.amnesty.org/sites/all/modules/civicrm/extern/rest.php?entity=Contact&action=create&api_key=dd5928796f22798dfc0631f33ed163c5&key=e25b6bfd79eb165e74f09ca5a69a25be&json={"sequential":1,"contact_type":"Individual","first_name":"Prueba","last_name":"Crm", "api.Email.create":{"email":"pruebas@pruebas.com"}}';

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);
$result = curl_exec($ch);
var_dump($result);

?>
