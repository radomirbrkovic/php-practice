# State Design Pattern

**State** is a behavioral design pattern that lets an object alter its behavior when its internal state changes. It appears as if the object changed its class.

Encapsulate varying behavior for the same routine based on an object's state. This can be a cleaner way for an object to change itc behavior at runtime without resorting to monolithic conditional statements.

## Applicability

Use the state pattern when:

- you have an object that behaves differently dependent on its current state, the number of states is enormous, and the state-specific code changes frequently
- you have a class polluted with massive conditions that after how the class behaves according to the current values of the class's fields.
- you have a lot of duplicate code across similar states and transitions of a condition-based state machine.

## Pros and cons

Pros:

- *Single Responsibility Principe* - organise the code related to particular states into separate classes
- *Open/Closed Principe* - introducing new states without changing existing state classes or the context
- Simplify the code of the context by eliminating bulky state machine conditions 

Cons:

- Applying the pattern can be overkill if a state machine has only a few states ro rarely changes