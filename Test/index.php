<?php

/* 
 * Test performance 
 * 
 **/

$db_data['default'] = array(
    'dsn'      => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'dbprefix' => 'tbl_',
    'password' => '',
    'database' => 'test_db',
    'dbdriver' => 'pdo',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci'
);


include '../Model.php';

$model = new Model();

$data = [
    'id' => '31',
    'title' => 'Lahijan',
];

//$model->db->insert('city', $data);

$update_data = ['title' => 'Bandar-e Anzali'];

//$model->db->where('id', 25)->update('city', $update_data);

echo '<pre>';
$r = $model->db->select(['id', 'title AS t'])->from('city');

echo $model->db->get_sql();

//if ($r->rowCount()) {
//    print_r($r->fetchAll(PDO::FETCH_ASSOC));
//} else {
//    echo "Num rows: 0";
//}

