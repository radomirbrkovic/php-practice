<?php

require_once (__DIR__."/vendor/autoload.php");

$employeeClass = new \ReflectionClass(\ReflectionAPI\Employee::class);

echo "Class: ".\ReflectionAPI\Employee::class. " ({$employeeClass->getFileName()})";

if($employeeClass->getParentClass()) {
    echo "<br><br>Extends: ";
    foreach ($employeeClass->getParentClass() as $class) {
        echo "<br> - {$class}";
    }
}

if(!empty($employeeClass->getInterfaces())) {
    echo "<br><br>Implements: ";
    foreach ($employeeClass->getInterfaces() as $item) {
        echo "<br> - {$item->name}";
    }
}

if(!empty($employeeClass->getTraits())) {
    echo "<br><br>Traits: ";
    foreach ($employeeClass->getTraits() as $item) {
        echo "<br> - {$item->name}";
    }
}


if(!empty($employeeClass->getConstants())) {
    echo "<br><br>Constants: ";
    foreach ($employeeClass->getConstants() as $item => $value) {
        echo "<br> - {$item} = {$value}";
    }
}

if(!empty($employeeClass->getProperties())) {
    echo "<br><br>Properties: ";
    foreach ($employeeClass->getProperties() as $item ) {
        echo "<br> - {$item}";
    }
}

if(!empty($employeeClass->getMethods())) {
    echo "<br><br>Methods: ";
    foreach ($employeeClass->getMethods() as $item ) {
        echo "<br> - ";
        print nl2br($item);
    }
}