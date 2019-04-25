## P3 Peer Review

+ Reviewer's name: Sophia Li 
+ Reviwee's name: Daniel
+ URL to Reviewee's P3 Github Repo URL: https://github.com/kisa7081/p3


## 1. Interface

+ What are your initial impressions of the site interface?
When I initially copy the URL from the given project list to the browser, it was cached with April 2nd data prefilled. I have to clicked Refresh Rates and Reset Form button to reload the current date time group. Other then that, the interface is simple and clean.

+ Were there any parts of the interface that you found confusing, or did not work as you expected?
Everything work as expected. However, I did suggest to add indicator for field that is required and number input only for usability.

+ Were there any parts of the interface that you thought worked notably well?
I did like the option of round value to nearest whole number. The default dropdown is nice to have as well.

+ Do you have any suggestions for improvements on the interface?
It will be nice to clear cache when browser closed. When reopen the application, the latest timestamp will be updated without user click the refresh button. Also, add indicator for mandatory field.


## 2. Functional testing
One challenge of developing software is thinking of all the unexpected ways users might interact with our applications. It's easy to develop &ldquo;blinders&rdquo; to methods of interaction because we know so much about *how* our application works, and so we have a hard time imagining how our interfaces might be misinterpreted. Thus, it can be useful to have an outsider rigorously test our applications with the explicit intention of trying to break it.

Knowing this, it's time to put your reviewee's application to the test. Think of all the unexpected ways their application could be used with the intention of trying to produce some unexpected/undesirable outcome.

__Summarize what you tried, and describe any unexpected/undesirable outcomes.__
(Even if you don't find any issues, having the reviewee see what you tried might give them insight into things they did not think to test.)

+ Try submitting a form without entering any data
Error message given.

+ Try submitting a form with entering data in only some of the fields
If required field was empty, error message given. Else, work as excepted.

+ If an input is asking for a number, try entering some of the following combinations: decimal numbers, negative numbers, letters, symbols, an extremely large number, etc.
Application allowed negative numbers. Result to negative converted value. It also allowed extremely large number. Result was round to 2 decimal value.

+ Try and access a URL on their site that likely does not exist (e.g. http://a3.domain.com/asdjfks)
+ Etc.
Test1: http://p3.beachboffin.com/test, 404 | Not Found was given.
Test2: http://p3.beachboffin.com/convert?amount=%3Cscript%3Ealert%28123%29%3C%2Fscript&current=USD&target=1, ERR_TOO_MANY_REDIRECTS given.
Test3: http://p3.beachboffin.com/convert?amount=2&current=YEN&target=2, 500 | Server Error was given.


## 3. Code: Routes
Skim through the student's code on Github.

Find their routes file (`routes/web.php`). Thinking about ideal Route/Controller organization&mdash; is there any code in this file that should be happening in a Controller?
If yes, describe.
Code in this routes file is expected.


## 4. Code: Views
Skim through the View files in `/resources/views` and address as many of the following points as applicable:

+ Is template inheritance used?
Yes.

+ Are there any separation of concern issues (i.e. non-display specific logic in view files)?
Logic code for the dropdown function is in the view file.

+ Did they do anything in PHP that could have been done in Blade?
None.

+ Did they use any Blade syntax/techniques you were unfamiliar with?
None.


## 5. Code: General
Address as many of the following points as applicable:

+ Do you notice any inconsistencies between the code and the course notes on [code style](https://github.com/susanBuck/dwa15-fall2018/blob/master/misc/code-style.md)?
None.

+ Are there any best practices discussed in course material that you feel were not addressed in the code?
Code can benefit from client side validation. Setup error message to reflect onto the browser when unexpected attribute value hit the server side validation.

+ Are there aspects of the code that you feel were not self-evident and would benefit from comments?
None.

+ Are there any parts of the code that you found interesting/would not have thought to do yourself?
I could implement the cache values from the object in my own project. 


+ Are there any parts of the code that you don't understand?
None.

## 6. Misc
None