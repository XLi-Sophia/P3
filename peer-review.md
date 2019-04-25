## P3 Peer Review

+ Sophia Li 
+ Daniel
+ https://github.com/kisa7081/p3


## 1. Interface

+ When I initially copy the URL from the given project list to the browser, it was cached with April 2nd data prefilled. I have to clicked Refresh Rates and Reset Form button to reload the current date time group. Other then that, the interface is simple and clean.

+ Everything work as expected. However, I did suggest to add indicator for field that is required and number input only for usability.

+ I did like the option of round value to nearest whole number. The default dropdown is nice to have as well.

+ It will be nice to clear cache when browser closed. When reopen the application, the latest timestamp will be updated without user click the refresh button. Also, add indicator for mandatory field.


## 2. Functional testing

+ Try submitting a form without entering any data and an error message given.

+ Try submitting a form with entering data in only some of the fields error message given If required field was empty, else, work as excepted.

+ Application allowed negative numbers. Result to negative converted value. It also allowed extremely large number. Result was round to 2 decimal value.

+ Try and access below URL onto the site:

1. Test1: http://p3.beachboffin.com/test, 404 | Not Found was given.

2. Test2: http://p3.beachboffin.com/convert?amount=%3Cscript%3Ealert%28123%29%3C%2Fscript&current=USD&target=1, ERR_TOO_MANY_REDIRECTS given.

3. Test3: http://p3.beachboffin.com/convert?amount=2&current=YEN&target=2, 500 | Server Error was given.


## 3. Code: Routes

+ The code in routes file  (`routes/web.php`) working as expected.


## 4. Code: Views

+ The template inheritance was used.

+ Logic code for the dropdown function is in the view file.


## 5. Code: General

+ Code can benefit from client side validation. Setup error message to reflect onto the browser when unexpected attribute value hit the server side validation.

+ I could implement the cache values from the object into my own project. 


## 6. Misc

None.
