# Singleton Pattern

Singleton is a creational design pattern, which ensure that only one object of its kind exists and provides a single point of access to it for any other code.

Singleton has almost the same pros and cons as global variables. Although they're super-handy, they break the modularity of your code.

You can't just use a class that depends on Singleton in some other context. You'll have to carry the Singleton class as well. Most the time, this limitation comes up during the creation of unit tests.
