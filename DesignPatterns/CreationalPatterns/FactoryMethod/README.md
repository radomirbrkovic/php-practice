# Factory Method Pattern 

**Factory method** pattern, also known as **Virtual Constructor** is a 
creational design pattern that provides an interface for creating objects 
in a superclass, but allows subclasses to alter the type of object that 
will be created. 

The factory method pattern provides inheritance and polymorphism for 
encapsulating to create concrete products. 

The good point over the SimpleFactory is you can subclass it to implement different ways to create objects.

For simple cases, this abstract class could be just an interface.

This pattern is a “real” Design Pattern because it achieves the Dependency Inversion principle a.k.a the “D” in SOLID principles.

It means the FactoryMethod class depends on abstractions, not concrete classes. This is the real trick compared to SimpleFactory or StaticFactory.

The main idea of using factory method pattern is solving next problems:

- Until run time we don't know which kind of object should be created
- The system should support easy adding new type of objects
- Each type of product is connected with context that requires other adjusted operations 

## Applicability

Use the Factory Method when:

- you don’t know beforehand the exact types and dependencies of the objects your code should work with.
- you want to provide users of your library or framework with a way to extend its internal components.
- when you want to save system resources by reusing existing objects instead of rebuilding them each time.

## Pros and cons

Pros:

- Avoiding tight coupling between the creator and the concrete products.
- *Single Responsibility Principle* - moving the product creation code into one place in the program, making the code easier to support.
- *Open/Closed Principle* - introducing new types of products into the program without breaking existing client code.

Cons:

- The code may become more complicated since you need to introduce a lot of new subclasses to implement the pattern. The best case scenario is when you’re introducing the pattern into an existing hierarchy of creator classes.