# Bridge Pattern

**Bridge** is a structural design pattern that lets you split a large class or a set of closely related classes into two separate hierarchies—abstraction and implementation—which can be developed independently of each other.

## Applicability

Use the Bridge pattern when:

- you want to divide and organize a monolithic class that has several variants of some functionality
- you need to extend a class in several orthogonal (independent) dimensions.
- you need to be able to switch implementations at runtime.

## Pros and Cons

Pros: 

- Less refactoring in the future as the number of classes won't increase as much.
- Both sides of abstraction and implementation can be developed independently.
- *Single responsibility principe*: updating one component won't affect others.

Cons: 

- If you nod adding further features, then the bridge pattern would add more classes.

