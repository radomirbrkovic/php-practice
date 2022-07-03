# Design patterns

## Definition

In software engineering a **design pattern** is a general repeatable solution 
to a commonly occurring problem in software design. A design pattern isn’t 
finished design that can be transformed directly into code. 
It is a description or template for how to solve a problem that can be used 
in many situations.    

## History of patterns

The concept of patterns was first described by **Christopher Alexander** in 
*A Pattern Language: Towns, Buildings, Constructions (1977)*. 
The book describes a “language” for designing the urban environment. 

But the concept of design patterns in programming first time has been 
applied by group of authors in : *Design Patterns: Elements of Reusable Object-Oriented Software (1994)*. 
The book featured 23 patterns solving various problems of object-oriented design. 

## Classification of patterns

Design patterns differ by their **complexity**, **level of detail** and **scale of applicability** to the entire system being designed.

The most basic and low-level patterns are often called **idioms**. They usually apply only to a single programming language. 

The most universal and high-level patterns are **architecture patterns**. Developers can implement these patterns in virtually any language. Unlike other patterns, they can be used to design architecture of an entire application.

In addition, all patterns can be categorised by their **intent**, or purpose. The presentation covers three main groups of patterns 

- [**Creational patterns**](./CreationalPatterns) provide object creation mechanisms that increase flexibility and reuse of existing code.
- [**Structural patterns**](./StructuralPatterns) explain how to assemble object and classes into larger structures, while keeping the structure flexible and efficient
- [**Behavioral patterns**](./BehavioralPatterns) take care of effective communication and the assignment of responsibilities between objects. 


## Installation and instructions

After you was cloning or downloading this repository in your local directory where you stored the repository run `docker-compose up -d` command installing and running docker image.

For downloading dependencies by composer first please login on docker machine by `docker exec -it php_design_patterns bash` command and after that run `composer install` command.

For running tests first please login on docker machine by `docker exec -it php_design_patterns bash ` command and after that run `php vendor/phpunit/phpunit/phpunit {Pattern}/{Patern}Test.php` 