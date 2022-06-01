# Factory Method Pattern 

**Factory method** pattern, also known as **Virtual Constructor** is a 
creational design pattern that provides an interface for creating objects 
in a superclass, but allows subclasses to alter the type of object that 
will be created. 

The factory method pattern provides inheritance and polymorphism for 
encapsulating to create concrete products.  

The main idea of using factory method pattern is solving next problems:

- Until run time we don't know which kind of object should be created
- The system should support easy adding new type of objects
- Each type of product is connected with context that requires other adjusted operations 

## Pros and cons

Factory method has strong defined structure and implementation is relative easy,
but cons are that 
- frequently code duplication
- forcing creating redundant sub-classes