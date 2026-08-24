<?php

function greeting(string $zona)
{
    $greeting = null;
    $greeting = match ($zona) {
      "Morning" => "Hallo, Good $zona!",
      "Afternoon" => "Hallo, Good $zona!",
      "Evening" => "Hallo, Good $zona",
      "Night" => "Hallo, Good $zona",
      default => "Hello from another universe!",
    };
    return $greeting;
}

echo greeting(zona: "Evening") . "\n";
echo greeting(zona: "Morning");