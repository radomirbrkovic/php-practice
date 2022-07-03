# Visitor Design Pattern

**Visitor** is a behavioral design pattern that lets you separate algorithms from the objects on which they operate.

The visitor pattern provides outsource operations on objects to other objects.The main reason to do this is to keep a separation of concerns. 
But classes have to define a contact to allow visitors.

The contract is an abstract class, but you can have also a clean interface. In that case, each Visitor has to choose itself which method to invoke on the visitor.

## Applicability

Use the visitor when:

- you need to perform an operation on all elements of a complex object structure (for example, an object tree).
- you need to clean up the business logic of auxiliary behaviors.
- a behavior makes sense only in some classes of a class hierarchy, but not in others.


## Pros and Cons

Pros:

- *Open/Closed Principle* -introducing a new behavior tha can work with objects of different classes without changing these classes.
- *Single Responsibility Principe* - moving multiple versions of the same behavior into the same class.
- A visitor object can accumulate some useful information while working with various objects. This might be handy when you want to traverse some complex object structure, such as an object tree, and apply the visitor to each object of this structure.

Cons:

- You need to update all visitors each time a class gets added to or removed from the element hierarchy.
- Visitors might lack the necessary access to the private fields and methods of the elements that they’re supposed to work with.