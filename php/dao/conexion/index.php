<?php
require_once 'crest.php';

// put an example below
echo '<PRE>';
print_r(CRest::call(
   'crm.item.list',
   [
      'entityTypeId' =>183
   ])
);

echo '</PRE>';
?>