<?php
include_once 'Dance.php';
$male = new SplQueue();
$female = new SplQueue();
function pairing(object $male, object $female)
{
    if (!($male->isEmpty()) and !($female->isEmpty())) {
        $mal = $male->dequeue();
        $fema = $female->dequeue();
        echo $mal->name . ' and ' . $fema->name . '<br>';
    } else if($male->isEmpty()) {
        echo $female->count().' female waiting<br>';
    } else if($female->isEmpty()) {
        echo $male->count().' male waiting<br>';
    } else {
        echo '0 people waiting<br>';
    }
}
$dance=new Dance('thanh','male');
$male->enqueue($dance);
$dance=new Dance('thanh','female');
$female->enqueue($dance);
$dance=new Dance('thanh','female');
$female->enqueue($dance);


pairing($male,$female);
pairing($male,$female);


