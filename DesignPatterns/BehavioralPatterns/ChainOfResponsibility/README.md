# Chain of Responsibility Pattern

**Chain of Responsibility** is a behavioral design pattern that lets you pass request along a chain of holders. Upon receiving a request, each handler decides either to process the request or to pass it to the next handler in the chain. 

## Applicability

- Use the Chain of Responsibility pattern when your program is expected to process different kind of request in various ways,
but the exact types of request and their sequences are unknown beforehand.
- Use the pattern when it's essential to execute several handlers in a particular order.
- Use the pattern when the set of handlers and their order are supposed to change at runtime.

## Pros and cons

Pros:

- Controlling the order of request handling 
- *Single Responsibility Principe* - decoupling classes tha invoke operations from classes that perform operations.
- *Open/Closed Principe* - introducing new handlers into the app without breaking the existing client code 

Cons:

- Some request may end up unhandled