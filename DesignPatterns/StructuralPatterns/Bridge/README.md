# Bridge Pattern

**Bridge** is a structural design pattern that lets you split a large class or a set of closely related classes into two separate hierarchies—abstraction and implementation—which can be developed independently of each other.

## Pros and Cons

Pros: 

- Less refactoring in the future as the number of classes won't increase as much.
- Both sides of abstraction and implementation can be developed independently.
- *Single responsibility principe*: updating one component won't affect others.

Cons: 

- If you nod adding further features, then the bridge pattern would add more classes.

