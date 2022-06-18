# Flyweight Pattern

**Flyweight** is a structural design pattern that lets you fit more objects into the available amount of RAM by sharing parts of state between multiple objects instead of keeping all of the data in each object. 

*Use the Flyweight pattern only when your program must support a huge number of objects which barely fit into available RAM*

The benefit of applying the pattern depends heavily on how and where it's used. It's most useful when:

- an application needs to spawn a huge number of similar objects
- this drains all available RAM on a target device 
- the objects contain duplicate states which ca be extracted and shared between multiple objects

## Pros and Cons

Pros:

- Can save lots of RAM, assuming the application has tons of similar objects

Cons:

- You might be trading RAM over CPU cycles when some of the context data needs to be recalculated each time somebody calls a flyweight method.
- The code becomes much more complicated. New team members will always be wondering why the state of an entity was separated in such a way.