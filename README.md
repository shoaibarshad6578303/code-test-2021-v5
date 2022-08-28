
I have written tests
=====================

3) App/Helpers/TeHelper.php method willExpireAt

   1) There are some logical errors in if conditions , I have rectified condtion then write test case
   according to new changes. I have just changed order of conditions.

   2) Helper functions are used like a class but I have changed them, can be other helper function like route, view anywhere in the app without adding name spaces. Just need to register helper function file
   into composer.json file.

4) App/Repository/UserRepository.php, method createOrUpdate
   
   1) Some issues are resolved into createOrUpdate function :
      - use of env into controller directly, should be made driver in config/app.php
      - Some logical issues which can be seen into codde
   2) No try cach is used into code
   3) Long function, which should be in small functions to make code more effective, reuseable and  readable.
   4) No validtion is implemented on requested feilds
   5) Due to long function and different logics into same function, I have to write more testcases,
      in other words duplicated in some way. I have not written test cases in case of translator_role_id.

   6) Due to lack of time, I did not change code into small functions and otpimised.
   7) I have not used model factories due to less time and I used real database but after completing
      test cases need to remove test records. By the way, to delete test's records from real db can 
      be handle in test cases.


Thank you for reading.      

