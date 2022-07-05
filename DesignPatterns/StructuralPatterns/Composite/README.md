# Composite Pattern

**Composite** is a structural design pattern that lets you composite objects into tree structures and  then work with these structures as if they were individual objects.

Composite becomes a pretty popular solution for the most problems that require building a tree structure. Composite's great feature is the ability to run methods recursively over the whole tree structure and sum up the result.

## Applicability

Use the Composite pattern when:

- you have to implement a tree-like object structure.
- you want the client code to treat both simple and complex elements uniformly.

## Pros and cons

Pros:

- Provides everything to display heavily nested object structure
- Lean easy-to-understand program code
- Great expandability 

Cons:

- Implementation of component interfaces is very challenging
- Subsequent adjustment of composite features is difficult and cumbersome to realize
