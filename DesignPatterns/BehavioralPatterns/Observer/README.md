# Observer Design Pattern

**Observer** is a behavioral design pattern that lets you define a subscription mechanism to notify multiple objects about any events that happen to the object they’re observing.

To implement a publish/subscribe behaviour to an object, whenever a “Subject” object changes its state, the attached “Observers” will be notified. It is used to shorten the amount of coupled objects and uses loose coupling instead.

## Applicability

Use the Observer pattern when:

- changes to the state of one object may require changing other objects, and the actual set of objects is unknown beforehand or changes dynamically.
- some objects in your app must observe others, but only for a limited time or in specific cases.

## Pros and Cons

Pros:

- *Open/Closed Principle* - introduce new subscriber classes without having to change the publisher’s code
- Establishing relations between objects at runtime

Cons:

- Subscribers are notified in random order.