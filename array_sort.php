


<a href="#" class="red" >one</a><br>
<a href="#" class="yellow" >two</a><br>
<a href="#" class="blue" >three</a><br>
<a href="#" class="brown" >four</a><br>
<a href="#" class="yellow" >five</a><br>
<a href="#" class="yellow" >six</a><br>
<?php

function www( $q ) {
    $res = array();

    for ( $i=0, $c = $q; $i <= $q; $i++, $c-- ) {
        $res[ $i ] = $c;
        $res[ $i + $q ] = $i;
    }

    ksort( $res );
    return $res;
}
array( 4, 3, 2, 1, 0, 1, 2, 3, 4 );
print_r(www(5));