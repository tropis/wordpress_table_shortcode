<?php 
// Shortcode table example
// data file
// phil hardaker aug 30 2018
//
// Rows of Doctor and Teacher addresses
// Variable added to namespace: $prh_data_groups
// Variable added/removed: _prh_tmp

$prh_data_groups = array();

// Doctors group
$_prh_tmp = array();
$_prh_tmp[] = array(
  'first' => 'Bob', 
  'last' => 'Roberts', 
  'addr1' => '123 Main St', 
  'addr2' => 'Apt 4', 
  'city' => 'Miami', 
  'state' => 'NE', 
  'postal' => '34567', 
);
$_prh_tmp[] = array(
  'first' => 'Bill', 
  'last' => 'Williams', 
  'addr1' => '234 Elm St', 
  'addr2' => '', 
  'city' => 'Tulsa', 
  'state' => 'WY', 
  'postal' => '34567', 
);
$_prh_tmp[] = array(
  'first' => 'Joe', 
  'last' => 'Joseph', 
  'addr1' => '345 Maple St', 
  'addr2' => 'Apt 55', 
  'city' => 'Akron', 
  'state' => 'SC', 
  'postal' => '45678', 
);

$prh_data_groups['doctors'] = $_prh_tmp;

// Teachers group
$_prh_tmp = array();
$_prh_tmp[] = array(
  'first' => 'Carl', 
  'last' => 'Carlton', 
  'addr1' => '321 Robin St', 
  'addr2' => '', 
  'city' => 'Waco', 
  'state' => 'Ok', 
  'postal' => '44556', 
);
$_prh_tmp[] = array(
  'first' => 'Hank', 
  'last' => 'Hanker', 
  'addr1' => '432 Crow St', 
  'addr2' => 'Apt 2a', 
  'city' => 'Laramie', 
  'state' => 'CA', 
  'postal' => '33445', 
);
$_prh_tmp[] = array(
  'first' => 'Mike', 
  'last' => 'Michaels', 
  'addr1' => '543 Finch St', 
  'addr2' => '', 
  'city' => 'Dodge City', 
  'state' => 'RI', 
  'postal' => '22334', 
);

$prh_data_groups['teachers'] = $_prh_tmp;
$_prh_tmp = NULL;


