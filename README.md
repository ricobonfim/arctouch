# arctouch


a.Your architecture (how did you approach the problem?)
I've created a basic framework to handle friendly requests, and keep basic MVC layers apart. Since it was basically a list task, it shouldn't be a problem to handle it all using only PHP, HTML and CSS, otherwise angular and other libraries should be very handy for validations and some improvements handling requests. There's definetly a problem on the Model layer, since requestings the same info to another server outside the app network has a high cost, but it works for now and improvements will be left for a next stage.

b. Assumptions that you have made, if any
I wasn't sure if I could use frameworks or not, so I created my own. Obviously it wasn't tested enough and it was created specifically for this project using only my knowledge and experience.
I'm not expecting problems with the APIs, so if their server is gone my application won't work.

c. Special build instructions, if any
This application should run in any xampp and wamp envinroments.

d. List of third-party libraries used and short description of why/how they were used
I've used bootstrap because it's easier when you don't have to worry about every little aspect of the frontend.