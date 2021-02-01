<?php
    namespace App\Test;

    use App\Vector;

    function runTest() {
        $firstVector = new Vector(8, -6, 2);
        echo $firstVector."\n";

        $secondVector = new Vector(7, 4, 8);
        echo $firstVector."\n";

        $vectorAddition = $firstVector->add($secondVector);
        echo $vectorAddition."\n";

        $vectorDifference = $firstVector->sub($secondVector);
        echo $vectorDifference."\n";

        $multiplyingVectorByANumber = $firstVector->product(5);
        echo $multiplyingVectorByANumber."\n";

        $scalarProduct = $firstVector->scalarProduct($secondVector);
        echo $scalarProduct."\n";

        $vectorProduct = $firstVector->vectorProduct($secondVector);
        echo $vectorProduct."\n";
    }
?>