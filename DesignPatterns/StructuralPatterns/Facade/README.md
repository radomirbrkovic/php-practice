# Facade Pattern

**Facade** is a structural design pattern that providers a simplified (but limited) interface to a complex system of classes, library or framework.

While Facade decreases the overall complexity of the application, it also helps to move unwanted dependencies to one place.

## Applicability

Use the Facade pattern when:

- you need to have a limited but straightforward interface to a complex subsystem.
- you want to structure a subsystem into layers.


## Pros and cons

Pros:

- Minimizes complexity of sub-systems
- Aids principe of loose coupling
- Software becomes more flexible and easily expandable

Cons:

- Complex implementation (especially with existing code)
- Approach is coupled to an additional level of indirection
- High degree of dependence at facade interface 

