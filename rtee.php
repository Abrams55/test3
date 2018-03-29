<?php
/**
 * Created by PhpStorm.
 * User: Abrams
 * Date: 19.08.2017
 * Time: 23:54
 */

$w = mysqli_connect( 'localhost', 'php', '123456', 'php' );

$sql = "SELECT * FROM categories";

$res = mysqli_query( $w, $sql );

while( $mir = mysqli_fetch_array( $res, MYSQL_ASSOC ) ) {
    $data[$mir['id']] = $mir;
}

foreach( $data as $key =>&$val ) {

    if( $val['parent'] ) {
        $data[$val['parent']]['child'][] =&$val;
    } else {
        $tree[$key] =&$val;
    }

}

print_r($tree);


