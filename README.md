# attendance_system_project

A very simple attendance system project I did for leisure while learning PHP. It works on simple HTML forms with PHP for form handling and an SQL database to store all the data. The form provides registration facilities for new teachers. 

After registering, the teacher logs in and takes the attendance and the data is stored in the database. Reports are also available of the attendance data. An admin profile is available too, where the admin can login and see all the database data and modify or remove it as per their wishes. 

Here is the exact workflow of the application:
1) A new teacher creates an account.
2) During their lectures, the teachers log in to their account with a username and password, and the next page displays the classes and the corresponding subjects which they teach. An incorrect combination of the 2 will not allow the teacher to proceed.
3) Now, the attendance sheet loads, with the list of students present in the class with 2 radio buttons for marking present and absent (I know what you're thinking...what a dunce! If I HAD to use radio buttons, why not use just 1 to mark present? The ones unmarked would be absent, duh! I wonder which dimension my brain was in when I thought of this). Anyways, the teacher then selects the appropriate radio button next to the students name and submits the form. After which, the next page loads and the attendance report of the day is displayed. Additional reports can be generated. I know I did include the facility, but how... well I forgot that. I made it almost 3 years ago and forgot about it almost instantly.
4) After what has been an extremely exhausting experience for the unlucky teacher, they can finally log out and rest... in peace (pun intended).

I must admit, the code is EXTREMELY messy, so sorry in advance! Also, for some unknown reason, my code abruptly stopped working, and I never bothered to fix it. I couldn't understand the code I wrote myself. The code involves LOTS of form inputs and input processing. What about the security you ask? Well, I've a done a MARVELLOUS job with that... so any kind of attack is possible.

So, what I mean to say is, if this thing is fixed, it can become a sort of a Vulnerable Web Application which can be used as ground zero for budding cybersecurity prodigies for practicing. I hope someone does it! They're more than welcome! I would prefer if you gave me credits though :P

Have fun!!!
