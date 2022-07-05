# Adapter Design Pattern

**Adapter** is a structural design pattern that allows objects with incompatible interfaces to collaborate.
The Adapter acts as a wrapper between two objects. It catches calls for one object and transforms them to format and interface recognizable by the second object.

To translate one interface for a class into a compatible interface. An adapter allows classes to work together that normally could not because of incompatible interfaces by providing its interface to clients while using the original interface.

## Applicability

Use the Adapter pattern when:

- you want to use some existing class, but its interface isn’t compatible with the rest of your code.
- to reuse several existing subclasses that lack some common functionality that can’t be added to the superclass.

## Pros and Cons

Pros: 

- *Single Responsibility Principe* - Separating the interface or data conversation code from the primary business logic of the program
- *Open/Closed Principe* - Introducing new types of adapters into the program without breaking the existing client code, as long as they work with the adapters through the client interface

Cons:

- The overall complexity of the code increases because you need to introduce a set of new interface and classes. Sometimes it's simpler just to change the service class so that it matches the rest of the code.