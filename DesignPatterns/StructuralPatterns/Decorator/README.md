# Decorator Pattern

**Decorator** is a structural pattern that allows adding new behavior to objects dynamically by placing them inside special wrapper objects.

Using decorators you can wrap objects countless number of times since both target objects and decorators follow the same interface. The resulting object will get a stacking behavior of all wrappers.

## Applicability

Use the Decorator pattern when:

- you need to be able to assign extra behaviors to objects at runtime without breaking the code that uses these objects.
- it’s awkward or not possible to extend an object’s behavior using inheritance.

## Pros and cons

Pros:

- Height degree of flexibility 
- Expansion of function of classes without inheritance
- Readable program code 
- Resource-optimized functionalities 

Cons:

- High complexity of software (especially decorator interface)
- Non beginner-friendly
- High number of objects 
- Difficulty debugging process
