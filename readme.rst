######################
1. HTML5 CSS Requirement#
######################

CSS Requirement   - I used a custom css file to override bootstrap css this file is located in testsite/assets/js/custom.css
HTML5 Requirement - I used html5 in for my views these files are located in the testsite/application/views

#########################
2. Consistent Design    #
#########################

I used codeigniter framework to achieve a consistent design by first creating a controller and then there corresponding views
For example I used a login in controler (testsite/application/controllers/login) which is composed of different functions, these function 
tell the view what to display. To see a consistent design got to testsiste/application/controllers/login, next go to testsite/application/views/login.  By looking at the code in the login controller you will be able to see how the login controller display views.  

#################################
3. Changes to common elements   #
#################################
Since headers and footer are common to all my webpages I created an include folder which is used on all my webpages to include these common features. Please visit testsite/application/views/include

################################
4. Public and Protected Data   #
################################
I used a session variable to track if the user is logged and setting this is userdata, by doing this the members area is only accessable 
by users who are logged. This information can be found in testsite/application/controllers/login under the validate_creditals.

##########################################
5. Password and Username Requirment      #
##########################################
I created my own login system which was a mistake but I wanted to learn more about how the login system and encrypting passwords really work
This was the most changelleing part because when a user registers is created there password is stored in the database as a hash and then 
when they login the password hash from the DB is verified.  If you the passwords do not match errors are displays redirects user to login page.  username: test password: pass

####################################
6. GET and POST Requirement        #
####################################

I used a GET request which can be viewed in testsite/controllers/login everytime a $this->load->view('controller/method') it is issueing a get request. Post is used to send json error messages to view. This can be view in testsite/assets/js/contact.js

#####################################
7. PHP  Requirement                 #
#####################################
I used php isset to display different values based off if a certain variable is set this can be viewed in testsite/application/views/login/login_view.php

#####################################
8. Form Validation Requirment       #
#####################################
Form validation is performed on all forms and anything a user can input form valiation can be viewed in the testsite/controllers/login.  I am utitlizing codeigniters built in function called flashdata which is set in the controller and displayed in the view.  If they did not fill out the form correctly errors are displayed and the user is redirected to the login form.

#####################################
9. Photos and Youtube Requirement   #
#####################################
Photos and video are displayed only to members this can be viewed in the testsite/appllication/controllers/member 
The actual HTML code for the photos can be viewed in the testsite/application/views/member/pictureinfo
The actual HTML code for the youtude video can be viewed in the testsite/application/views/videoinfo

#####################################
10. JQuery AJAX Requirment           #
#####################################
I was Jquery to display errors messages in the view
This can be viewed in the testsite/assets/js/contact.js

#####################################
11. Bootstrap   Requirment           #
#####################################
I used bootstrap throughtout the site this can be viewed testsite/application/views/'any view'




