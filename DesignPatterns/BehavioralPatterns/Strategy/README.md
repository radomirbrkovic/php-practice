# Strategy Design Pattern

**Strategy** is a behavioral design pattern that lets you define a family of algorithms, put each of them into a separate class, and make their objects interchangeable.

To separate strategies and to enable fast switching between them. Also this pattern is a good alternative to inheritance (instead of having an abstract class that is extended).

## Applicability

Use the strategy pattern when:

- you want to use different variants of an algorithm within an object and be able to switch from one algorithm to other during runtime.
- you have a lot of similar classes that only differ in the way they execute some behavior.
- your class has a massive conditional statement that switches between different variants of the same algorithm. 
- to isolate the business logic of a class from the implementation details of algorithms that may not be as important in the context of that logic.

## Pros and Cons

Pros:

- Swapping algorithms used inside an object at runtime.
- Isolating the implementation details of an algorithm from the code that uses it.
- Replacing inheritance with composition.
- *Open/Closed Principle* - introducing new strategies without having to change the context.

Cons:

- If you only have a couple of algorithms and they rarely change, there’s no real reason to overcomplicate the program with new classes and interfaces that come along with the pattern.
- Clients must be aware of the differences between strategies to be able to select a proper one.
- A lot of modern programming languages have functional type support that lets you implement different versions of an algorithm inside a set of anonymous functions. Then you could use these functions exactly as you’d have used the strategy objects, but without bloating your code with extra classes and interfaces.
