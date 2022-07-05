# Abstract Factory Pattern

**Abstract factory** is a creational design pattern that lets you produce families
of related objects without specify their concrete classes.  In other words 
abstract factory defines an interface for creating all distinct products but 
leaves the actual product creation to concrete factory example. Each factory 
type corresponds to a certain product variety.

To create series of related or dependent objects without specifying their concrete classes. Usually the created classes all implement the same interface. The client of the abstract factory does not care about how these objects are created, it just knows how they go together.

Abstract factory pattern provides: 

- Dividing system and business implementation - we can add or remove any number of 
the format without crashing the system
- Implementing grouping functional related system elements - if we use one format 
of system, we would be sure that only functionality related to the format will be use.
- Adding new formats or products could be hard - beside of adding implementation of new 
products we also should change abstract class which creates that object 

## Applicability

Use the Abstract Factory when your code needs to work with various families of related products, but you don’t want it to depend on the concrete classes of those products—they might be unknown beforehand, or you simply want to allow for future extensibility.

## Pros and Cons

Pros:

- You can be sure that the products you’re getting from a factory are compatible with each other.
- You avoid tight coupling between concrete products and client code.
- *Single Responsibility Principle* - extracting the product creation code into one place, making the code easier to support.
- *Open/Closed Principle* - introducing new variants of products without breaking existing client code.

Cons:

- The code may become more complicated than it should be, since a lot of new interfaces and classes are introduced along with the pattern.