1. Have created a MySql database that i've linked using PHP to create the most secure BACK-END 

2. Dependencies needed :
   Apache, nginx server & mysql server    
   
   Linux : 
   sudo apt-get install apache2 mysql-server php5 php5-mysql php5-cli php5-imagick php5-gd php5-mcrypt php5-curl phpmyadmin
   
   Windows : XAMPP is good enough

3.  Admin login 
    username : admin
    password : @DWINadmin
    Which can view the COMPLETE INFORMATION of LEAVING APPLICANTS.

4. For CORRECT SETTING UP OF DATABASE : 
   enter ur "root" username and password in "/sql_files/db-creds.inc" file

5. After Successful setup of database, I have setted up some sample students :
   (i).  r.moury -> mountain_dew -> 130108036       {username -> password -> roll number}
   (ii). m.baniya -> pass987	 -> 130103045
   and many others !!

6. Student can Enter his Info and then "Final Submit" is presented to him for confirmation of Entered DETAILS.
   He can also RESET the values.
   He can also UPDATE the values.
   He can also DELETE the record, in case of cancellation of his plans. 

7. Inputs are validated to be secure from SQL-INJECTION & PHP-INJECTION which might lead to RCE (Remote Code Execution) on the main server.
   Also securing from "OS command Injection" ; & | 

	
8 . Hashing algorithm I have used is md5, this is a quite weak one.. 
    SHA256, SHA512 worked great, i was looking for more secure hashing algorithm i.e. using bcrypt()  but was stuck over a issue with bcrypt()    for almost a day. For FAR BEST security, we can implement this :

    Use a cryptographically strong hashing function like bcrypt. Use a random salt for each password.
    Use a slow hashing algorithm to make brute force attacks practically impossible.
    Hashes can be regenerated depending upon the different time the users logs in.


I have used SESSIONS instead of dealing directly with cookies, since sessions are a more secure way, as they reside on the main server and not like cookies which are client-sides. Encrypting the session value will have zero effect. The session cookie is already an arbitrary value, encrypting it will just generate another arbitrary value that can be sniffed.

The only real solution is HTTPS. If you don't want to do SSL on your whole site (maybe you have performance concerns), you might be able to get away with only SSL protecting the sensitive areas. To do that, first make sure your login page is HTTPS. When a user logs in, set a secure cookie (meaning the browser will only transmit it over an SSL link) in addition to the regular session cookie. Then, when a user visits one of your "sensitive" areas, redirect them to HTTPS, and check for the presence of that secure cookie. A real user will have it, a session hijacker will n
