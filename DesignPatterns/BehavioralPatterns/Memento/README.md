# Memento Design Pattern

**Memento** is a behavioral design pattern that lets you save and restore the previous state of an object without revealing the details of its implementation.

It provides the ability to restore an objects to it's previous state or to gain access to state of the object, without revealing it's implementation.

The memento pattern is implemented with three objects:

- Originator - an object that contains the actual state of an external object is strictly specified type.
- Caretaker - controls the state history
- Memento - an object that contains a concrete unique snapshot of state of any object or resource

## Applicability

Use the Memento pattern when:

- want ot produce snapshot of the object's state to be able to restore a previous state of the object.
- direct access to the object's fields, getters, setters violates its encapsulation.

## Pros and Cons

Pros: 

- Producing snapshot of the object's state without violating its encapsulation.
- Simplify the originator’s code by letting the caretaker maintain the history of the originator’s state.

Cons:

- The app might consume lots of RAM if clients create mementos too often.
- Caretakers should track the originator’s lifecycle to be able to destroy obsolete mementos.
- Most dynamic programming languages, such as PHP, Python and JavaScript, can’t guarantee that the state within the memento stays untouched.

