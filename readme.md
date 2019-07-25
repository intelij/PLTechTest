## Technical Playground Assessment

Solution is based on Laravel platform is accessible, powerful, and provides tools required for large, robust applications.

### FizzBuzz

Create a loop that will print all the numbers for the range, 1-20. If the number is:
- divisible by 3, print 'Fizz'
- divisible by 5, print 'Buzz'
- divisible by 3 & 5, 'FizzBuzz'
- otherwise print the number

Your answer does not need to be minimal, just working and understandable.

### MagicGetterSetter

Create a 'MagicGetterSetter' class/trait/interface.
Its functionality should include;
- 'magic get' will go to a 'get' method containing the property, or throw an exception
- 'magic set' will go to a 'set' method containing the property, or throw an exception
The final class/trait/interface should be fully extendable and easy to extend / implement.
Explain why you chose to use a class/trait/interface for this.

### Fibonacci Sequence

Write a function in PHP, to obtain a given Fibonacci number (n):
fibonacci(5);
fibonacci(10);
fibonacci(1);
We're looking for use of iteration or recursion here
NB: We will not accept the mathematical formula for a given Fibonacci number.

### Social Network

#### https://dbdiagram.io/d/5d39edc3ced98361d6dd02ed - online version can be found here

Your team are building a social network. Your first task is to look at the build for the posts,
authors, and replies.
Requirements:
- A post must have an author
- A post can contain, one or many, replies
- Replies must belong to an author
- Posts can be deleted, but only by their respective author
- Replies can be deleted by the post author, or its own author
(We're not looking for code, just pseudo and/or a DB layout. If you can produce a UML, that'd
be great)

