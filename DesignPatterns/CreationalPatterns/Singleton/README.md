# Singleton Pattern

Singleton is a creational design pattern, which ensure that only one object of its kind exists and provides a single point of access to it for any other code.

Singleton has almost the same pros and cons as global variables. Although they're super-handy, they break the modularity of your code.

## Applicability

Use the Singleton pattern when:

- a class in your program should have just a single instance available to all clients; for example, a single database object shared by different parts of the program.
- you need stricter control over global variables.

# Pros and Cons 

The main idea of using singleton pattern is avoid the trap of using global variable. 
Therefor singleton pattern provides: 
- One instance - allows sharing data between client object.
- Global access - client can access to singleton method through whole application

But there are also cons:

- Changeable data - data that is stored in singleton instance can be overridden anywhere and anytime 
- Fuzzy structure - due to lack of inheritance we don't have a clear picture where and how our singleton instance will be used 


You can't just use a class that depends on Singleton in some other context. You'll have to carry the Singleton class as well. Most the time, this limitation comes up during the creation of unit tests.