# Prototype Pattern

**Prototype**, also known as **Clone**, is a creational design pattern that 
lets you copy objects without making your code dependent on their classes.

All prototype classes should have a common interface what makes it possible 
to copy objects even if their concrete classes are unknown. Prototype objects
can produce full copies since objects of the same class can access each 
other's private fields.

The main idea about prototype pattern is replacing inheritance with  composition,
so it in turn promotes flexibility while run time and decrease number of needed classes.

## Pros and cons

Pros: 

- **Reusability**: In case we want to create an instance of a class with many default values, or in the same complicated processes, Prototype Pattern is useful. We can focus on other activities instead.
- **Reducing initialization**: We can get new instances at a cheaper cost. The clients can get new objects without knowing which type of object it will be.
- **Simple copy process**: It hides the complexities of creating objects. We only need to call `clone()` method, it is simple and easy to read.
- It reduces the need for sub-classing. It lets you add or remove objects at runtime.

Cons:

- This model is costly. There is certainty in determining the number of iterations.
- Each subclass has to implement `clone()` methods or alternative copy methods.
- Building clones for existing classes may be complicated.