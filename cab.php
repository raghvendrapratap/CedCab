<?php
$locationArray = array(
    'Charbagh' => 0,
    'Indira Nagar' => 10,
    'BBD' => 30,
    'Barabanki' => 60,
    'Faizabad' => 100,
    'Basti' => 150,
    'Gorakhpur' => 210
);

$pickupLocation = $_POST['pickupLocation'];
$dropLocation = $_POST['dropLocation'];
$cabType = $_POST['cabType'];
$luggage = $_POST['luggage'];

$pickupKM = $locationArray[$pickupLocation];
$dropKM = $locationArray[$dropLocation];
$distance = abs($pickupKM - $dropKM);

if ($luggage != null)
{
    if ($luggage <= 10)
    {
        $luggageFare = 50;
    }
    elseif ($luggage <= 20)
    {
        $luggageFare = 100;
    }
    elseif ($luggage > 20)
    {
        $luggageFare = 200;
    }
}
else
{
    $luggageFare = 0;
}

if ($cabType == 'CedMicro')
{
    $fixedFare = 50;
    $km10 = 13.50;
    $km50 = 12.00;
    $km100 = 10.20;
    $kmAbove100 = 8.50;

    if ($distance <= 10)
    {
        $km10fare = $distance * $km10;
        $totalFare = $km10fare;

    }
    elseif ($distance <= 60)
    {
        $km10fare = 10 * $km10;
        $km50fare = ($distance - 10) * $km50;
        $totalFare = $km10fare + $km50fare;

    }
    elseif ($distance <= 160)
    {
        $km10fare = 10 * $km10;
        $km50fare = 50 * $km50;
        $km100fare = ($distance - 60) * $km100;
        $totalFare = $km10fare + $km50fare + $km100fare;

    }
    elseif ($distance > 160)
    {
        $km10fare = 10 * $km10;
        $km50fare = 50 * $km50;
        $km100fare = 100 * $km100;
        $kmAbove100fare = ($distance - 160) * $kmAbove100;
        $totalFare = $km10fare + $km50fare + $km100fare + $kmAbove100fare;
    }
    echo $finalFare = $totalFare + $fixedFare;

}
elseif ($cabType == 'CedMini')
{
    $fixedFare = 150;
    $km10 = 14.50;
    $km50 = 13.00;
    $km100 = 11.20;
    $kmAbove100 = 9.50;

    if ($distance <= 10)
    {
        $km10fare = $distance * $km10;
        $totalFare = $km10fare;

    }
    elseif ($distance <= 60)
    {
        $km10fare = 10 * $km10;
        $km50fare = ($distance - 10) * $km50;
        $totalFare = $km10fare + $km50fare;

    }
    elseif ($distance <= 160)
    {
        $km10fare = 10 * $km10;
        $km50fare = 50 * $km50;
        $km100fare = ($distance - 60) * $km100;
        $totalFare = $km10fare + $km50fare + $km100fare;

    }
    elseif ($distance > 160)
    {
        $km10fare = 10 * $km10;
        $km50fare = 50 * $km50;
        $km100fare = 100 * $km100;
        $kmAbove100fare = ($distance - 160) * $kmAbove100;
        $totalFare = $km10fare + $km50fare + $km100fare + $kmAbove100fare;
    }
    echo $finalFare = $totalFare + $fixedFare + $luggageFare;

}
elseif ($cabType == 'CedRoyal')
{
    $fixedFare = 200;
    $km10 = 15.50;
    $km50 = 14.00;
    $km100 = 12.20;
    $kmAbove100 = 10.50;

    if ($distance <= 10)
    {
        $km10fare = $distance * $km10;
        $totalFare = $km10fare;

    }
    elseif ($distance <= 60)
    {
        $km10fare = 10 * $km10;
        $km50fare = ($distance - 10) * $km50;
        $totalFare = $km10fare + $km50fare;

    }
    elseif ($distance <= 160)
    {
        $km10fare = 10 * $km10;
        $km50fare = 50 * $km50;
        $km100fare = ($distance - 60) * $km100;
        $totalFare = $km10fare + $km50fare + $km100fare;

    }
    elseif ($distance > 160)
    {
        $km10fare = 10 * $km10;
        $km50fare = 50 * $km50;
        $km100fare = 100 * $km100;
        $kmAbove100fare = ($distance - 160) * $kmAbove100;
        $totalFare = $km10fare + $km50fare + $km100fare + $kmAbove100fare;
    }
    echo $finalFare = $totalFare + $fixedFare + $luggageFare;

}
elseif ($cabType == 'CedSUV')
{
    $fixedFare = 250;
    $km10 = 16.50;
    $km50 = 15.00;
    $km100 = 13.20;
    $kmAbove100 = 11.50;
    $luggageFareSUV = 2 * $luggageFare;

    if ($distance <= 10)
    {
        $km10fare = $distance * $km10;
        $totalFare = $km10fare;

    }
    elseif ($distance <= 60)
    {
        $km10fare = 10 * $km10;
        $km50fare = ($distance - 10) * $km50;
        $totalFare = $km10fare + $km50fare;

    }
    elseif ($distance <= 160)
    {
        $km10fare = 10 * $km10;
        $km50fare = 50 * $km50;
        $km100fare = ($distance - 60) * $km100;
        $totalFare = $km10fare + $km50fare + $km100fare;

    }
    elseif ($distance > 160)
    {
        $km10fare = 10 * $km10;
        $km50fare = 50 * $km50;
        $km100fare = 100 * $km100;
        $kmAbove100fare = ($distance - 160) * $kmAbove100;
        $totalFare = $km10fare + $km50fare + $km100fare + $kmAbove100fare;
    }
    echo $finalFare = $totalFare + $fixedFare + $luggageFareSUV;
}

//echo "PickUp= ".$pickupLocation." Drop= ".$dropLocation." CabType= ".$cabType." Luggage= ".$luggage;
// echo json_encode($exarray);

?>