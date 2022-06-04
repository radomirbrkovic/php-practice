# Builder Pattern

**Builder** is a creational design pattern that lets you construct complex 
objects step by step. The pattern allows you to produce different types 
and representations of an object using the same construction code.

The Builder pattern is a well-known pattern in PHP world. It’s especially useful when you need to create an object with 
lots of possible configuration options.


## Pros and Cons

Pros: 

- Constructing objects step-by-step defer construction steps or run steps recursively.
- Reusing the same construction code when building various representations or products
- *Single responsibility principe* - isolating complex construction code from the business logic of the product

Cons:

- The overall complexity of the code increases since the pattern requires creating multiple new classes.

