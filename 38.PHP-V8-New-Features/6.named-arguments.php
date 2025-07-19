<?php

/*
 * Example of named arguments in PHP 8.0+
 * Named arguments allow you to pass arguments to a function or method
 * by specifying the parameter names, making the code more readable
 * and allowing you to skip optional parameters as well as skipping order of passing parameters.
 *
 * This example demonstrates a class with properties and methods,
 * and how to use named arguments when calling methods.
 */

class Country
{
    public function __construct(
        private string $name,
        private string $capital,
        private int $population,
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getCapital(): string
    {
        return $this->capital;
    }

    public function getPopulation(): int
    {
        return $this->population;
    }

    public function getAllInfo(
        string $name,
        int $countryCode,
        string $zipCode,
    ): string {
        return "Name: $name, Country Code: $countryCode, Zip Code: $zipCode";
    }
}

// instance
$country = new Country("France", "Paris", 67000000);
// accessing properties and methods
// using named arguments
echo $country->getName() . PHP_EOL; // Outputs: France
echo $country->getCapital() . PHP_EOL; // Outputs: Paris
echo $country->getPopulation() . PHP_EOL; // Outputs: 67000000
// using named arguments in method call
echo $country->getAllInfo(name: "France", countryCode: 33, zipCode: "75000") .
    PHP_EOL; // Outputs: Name: France, Country Code: 33, Zip Code: 75000
