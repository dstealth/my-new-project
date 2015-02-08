<?php
$bmv=array(
    'name'=>'BMV',
    'model'=>'X5',
    'speed'=>'120',
    'doors'=>'5',
    'year'=>'2006');
?>

<?php $toyota=array(
    'name'=>'Toyota',
    'model'=>'Camry',
    'speed'=>'200',
    'doors'=>'5',
    'year'=>'2010');
?>

<?php $audi=array(
    'name'=>'AUDI',
    'model'=>'TT',
    'speed'=>'250',
    'doors'=>'2',
    'year'=>'2008');
?>

<?php
foreach ($bmv as $key=>$value){
    echo ' - '.$value;
};?> <br>
<?php foreach ($toyota as $t){
    echo ' - ' .$t ;
};?><br>

<?php foreach ($audi as $a){
    echo ' - '.$a;
}?><br>
