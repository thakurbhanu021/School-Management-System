<?php 
function get_the_classes($db_conn) {
    $output = array();
    $query = mysqli_query($db_conn, "SELECT * FROM classes");

    while ($row = mysqli_fetch_object($query)) {
        $output[] = $row;
    }
    return $output;
}
function get_post(array $args = [])
{
    global $db_conn;
    $condition = 'WHERE';
    if(!empty($args))
    {
        foreach($args as $k => $v) {
            $v = (string)$v;
            $condition_ar[] = "$k = '$v'"; 
        }
        if($condition_ar > 0 ){
            $condition = "WHERE ". implode(' AND ', $condition_ar);
        }
    };

    $sql = "SELECT * FROM posts $condition";
    // print_r($sql);
    $query = mysqli_query($db_conn, $sql);
    return mysqli_fetch_object($query);
};

function get_posts(array $args = [], string $type = 'object')
{
    global $db_conn;
    $condition = 'WHERE';
    if(!empty($args))
    {
        foreach($args as $k => $v) {
            $v = (string)$v;
            $condition_ar[] = "$k = '$v'"; 
        }
        if($condition_ar > 0 ){
            $condition = "WHERE ". implode(' AND ', $condition_ar);
        }
    };

    $sql = "SELECT * FROM posts $condition";
    // print_r($sql);
    $query = mysqli_query($db_conn, $sql);
    return data_output($query, $type);
};

function get_metadata($item_id,$meta_key='', $type='object'){
    global $db_conn;
    $query = mysqli_query($db_conn, "SELECT * FROM metadata WHERE item_id = $item_id");
    if(!empty($meta_key)){
        $query = mysqli_query($db_conn, "SELECT * FROM metadata WHERE item_id = $item_id AND meta_key = '$meta_key'");
    }
    return data_output($query, $type);
}

function data_output($query, $type = 'object')
{
    $output = array();
    if($type = 'object'){
        while( $result = mysqli_fetch_object($query)){
            $output [] = $result;
        }
    }
    else {
        while ($result = mysqli_fetch_assoc($query)){
            $output [] = $result;
        }
    }
    return $output;
}

function get_user_data($user_id, $type = 'object'){
    global $db_conn;
    $query = mysqli_query($db_conn, "SELECT * FROM accounts WHERE id = $user_id");
    return data_output($query, $type);
}
?>