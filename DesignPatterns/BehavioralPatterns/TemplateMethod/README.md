# Template Method Design Pattern

**Template Method** is a behavioral design pattern that defines the skeleton of an algorithm in the superclass but lets subclasses override specific steps of the algorithm without changing its structure.

Perhaps you have encountered it many times already. The idea is to let subclasses of this abstract template “finish” the behavior of an algorithm.

A.k.a the “Hollywood principle”: “Don’t call us, we call you.” This class is not called by subclasses but the inverse. How? With abstraction of course.

In other words, this is a skeleton of algorithm, well-suited for framework libraries. The user has just to implement one method and the superclass do the job.

It is an easy way to decouple concrete classes and reduce copy-paste, that’s why you’ll find it everywhere.


## Applicability

Use the template method pattern when:

- you want to let clients extend only particular steps of an algorithm, but not the whole algorithm or its structure.
- you have several classes that contain almost identical algorithms with some minor differences. As a result, you might need to modify all classes when the algorithm changes.

## Pros and Cons

Pros:

- You can let clients override only certain parts of a large algorithm, making them less affected by changes that happen to other parts of the algorithm.
- You can pull the duplicate code into a superclass.

Cons:

- Some clients may be limited by the provided skeleton of an algorithm.
- You might violate the Liskov Substitution Principle by suppressing a default step implementation via a subclass.
- Template methods tend to be harder to maintain the more steps they have.

