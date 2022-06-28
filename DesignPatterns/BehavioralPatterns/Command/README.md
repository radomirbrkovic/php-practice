# Command Design Pattern

*Command* is a behavioral design pattern that turns a request into a stand-alone object that contains all information about the request. 

This transformation lets you pass requests as a method arguments, delay or queue a request’s execution, and support undoable operations.

## Applicability

Use the Command pattern when you want to:
- parametrize objects with operations
- queue operations
- schedule operations execution
- execution operations remotely
- implement reversible operations

## Pros and Cons

Pros:

- *Single Responsibility Principe* - decoupling classes that invoke operations from classes that perform these operations
- *Open/Closed Principe* - introducing new commands into app without breaking existing client code
- Implementing undo/redo and deferred execution of operations
- Assembling a set of simple commands into a complex one

Cons:

- The code may become more complicated because of layer between sender and receivers.
