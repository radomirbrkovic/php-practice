# Abstract Factory Pattern

**Abstract factory** is a creational design pattern that lets you produce families
of related objects without specify their concrete classes.  In other words 
abstract factory defines an interface for creating all distinct products but 
leaves the actual product creation to concrete factory example. Each factory 
type corresponds to a certain product variety.

Abstract factory pattern provides: 

- Dividing system and business implementation - we can add or remove any number of 
the format without crashing the system
- Implementing grouping functional related system elements - if we use one format 
of system, we would be sure that only functionality related to the format will be use.
- Adding new formats or products could be hard - beside of adding implementation of new 
products we also should change abstract class which creates that object 