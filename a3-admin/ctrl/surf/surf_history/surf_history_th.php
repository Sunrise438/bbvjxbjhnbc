<?php
if (isset($_GET['t'])){
    if (isset($_GET['token'])){
        $t = 't='.$_GET['t'].'&token='.$_GET['token'].'&';
    } else {
        $t = 't='.$_GET['t'].'&';
    }
    
} else {
    $t = '';
}

//set order type
if (isset($_GET['q'])){
    if ($_GET['q'] == 'asc'){
        $q = 'desc';
    } else {
        $q = 'asc';
    }
} else {
    $q = 'desc';
}

echo '<thead>';
echo '<tr>';
echo '<th> <a href="?'.$t.'o=id&q='.$q.'">'. ucfirst($idName).'</a></th>';
echo '<th> <a href="?'.$t.'o=username&q='.$q.'">'. ucfirst($usernameName).'</a></th>';
echo '<th>'. ucfirst($urlName).'</th>';
echo '<th> <a href="?'.$t.'o=amount&q='.$q.'">'. ucfirst($amountName).'</a></th>';
echo '<th> <a href="?'.$t.'o=date&q='.$q.'">'. ucfirst($dateName).'</a></th>';
echo '<th> <a href="?'.$t.'o=ref&q='.$q.'">'. ucfirst($referralName).'</a></th>';
echo '</tr>';
echo '</thead>';