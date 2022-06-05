# Service Locator Pattern

The service locator pattern is a design pattern used in software development to encapsulate the processes involved in obtaining a service with a strong abstraction layer. This pattern uses a central registry known as the “service locator” which on request returns the information necessary to perform a certain task.

The ServiceLocator is responsible for returning instances of services when they are requested for by the service consumers or the service clients.

Service Locator is considered for some people an anti-pattern. It violates the Dependency Inversion principle. Service Locator hides class’ dependencies instead of exposing them as you would do using the Dependency Injection. In case of changes of those dependencies you risk to break the functionality of classes which are using them, making your system difficult to maintain.