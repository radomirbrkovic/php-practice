# Mediator Design Pattern

**Mediator** is a behavioral design pattern that lets you reduce chaotic dependencies between objects. The pattern restricts direct communications between the objects and forces them to collaborate only via a mediator object.

This pattern provides an easy way to decouple many components working together. It is a good alternative
to Observer IF you have a "central intelligence", like controller (but not in rhe sense of the MVC).

## Applicability

Use the **Mediator** pattern when:

- It's hard to change some classes because they are tightly coupled to a bunch of other classes.
- Can't reuse a component in a different program because it's too dependent on other component.
- Create tons of components subclasses just to reuse some basic behavior in various context.

## Pros and Cons

Pros:

- *Single responsibility principe* - Extracting the communication between various components into a single place, making it easier to comprehend and maintain.
- *Open/Closed Principe* - Introducing new mediators without having to change the actual components.
- Reducing coupling between various components of a program.
- Reusing individual components more easily

Cons:

- Over time a mediator can evolve into a [God Object](https://en.wikipedia.org/wiki/God_object).