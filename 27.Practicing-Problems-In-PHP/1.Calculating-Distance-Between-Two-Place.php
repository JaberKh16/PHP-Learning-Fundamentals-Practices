<?php
    /*
        To Calculate Distance Betweeen Two Place Follow The Steps
        =========================================================
        1) Calculate the distance of longitude of two places
        2) Convert the longitude value to radians
        3) Calculate the converted radians consines.
        4) Convert the latitude of two places to its radians
        5) Calculate the sine and cosine of both calculated latitudes
        6) Sine of converted latitudes multiply plus cosine multiplied
    */
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caluclating The Distance Between Two Places</title>
</head>
<body>
    <?php
        // gets two places longitude
        $placeA = [
            'longitude' => 23.7465,
            'latitude' => 90.376
        ];
        // gets two places latitude
        $placeB = [
            'longitude' => 23.7502,
            'latitude' => 90.4004
        ];


        function calculateDistanceBetweenTwoPlaces($placeA, $placeB)
        {
            // calculating the difference between two places for longitude
            $longitudeDiffBetweenTwoPlaces = $placeA['longitude'] - $placeB['latitude'];
            $cosineValueOfLongitude =  calculateTheLongitudeInfo($longitudeDiffBetweenTwoPlaces);   

            // calculating the two places for latitude in Radians
            $latitudePlaceAValueInRad = deg2rad($placeA['latitude']);
            $latitudePlaceBValueInRad = deg2rad($placeB['latitude']);
            $distance = calculateTheLatitudeInfo($latitudePlaceAValueInRad, $latitudePlaceBValueInRad, $cosineValueOfLongitude);
            echo "Difference between PlaceA and PlaceB is: ". $distance."<br>";

            // calculate the arc distance of the distance
            $arcCosDistance = acos($distance);
            // define the radius of earth in km
            $radiusOfEarthInKM = 6364.934;
            // calculate the distance in km
            $distanceInKM = $arcCosDistance * $radiusOfEarthInKM;
            echo "Distance between PlaceA and PlaceB is: ". $distanceInKM."<br>";
        }

        function calculateTheLongitudeInfo($longitudeDiffBetweenTwoPlaces)
        {
            // converted the longitude value to its radians
            $longitudeToRadians = deg2rad($longitudeDiffBetweenTwoPlaces);
            $convertedRadiansConsineForLongitude = cos($longitudeToRadians);
            return $convertedRadiansConsineForLongitude;
        }


        function calculateTheLatitudeInfo($latitudePlaceAValueInRad, $latitudePlaceBValueInRad, $cosineValueOfLongitude)
        {
            // convert the PlaceA and PlaceB latitude radians value to its sin and cosine
            $latitudePlaceAValueRadInSine = sin($latitudePlaceAValueInRad);
            $latitudePlaceAValueRadInCosine = cos($latitudePlaceAValueInRad);
            $latitudePlaceBValueRadInSine = sin($latitudePlaceBValueInRad);
            $latitudePlaceBValueRadInCosine = cos($latitudePlaceBValueInRad);

            // calcute the latitude of both sin
            $multiplyOfLatitudeBothPlaceASines = $latitudePlaceAValueRadInSine * $latitudePlaceBValueRadInSine;
            // calculate the latitude of both cosine
            $multiplyOfLatitudeBothPlaceBCosines = $latitudePlaceAValueRadInCosine * $latitudePlaceBValueRadInCosine;

            // final formula
            $formula = $multiplyOfLatitudeBothPlaceASines + $multiplyOfLatitudeBothPlaceBCosines * $cosineValueOfLongitude;
            return $formula;

        }


        calculateDistanceBetweenTwoPlaces($placeA, $placeB);

    ?>
</body>
</html>