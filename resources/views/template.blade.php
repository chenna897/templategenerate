<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
<style>
    body{
        margin-left: 3ch;
    }
</style>
</head>
<body>
{{-- @foreach ($forms as $forms) --}}
NEW TEMPLATE REPORT (January 25th 2019)
<br><br>
Note about this report
<ol>
<p><li>Rule 1/6 : it must be sent by each developer of the project</li>
<li>Rule 2/6 : it must be sent one time everyday before 1pm IST (Chennai Time) : 8:30 am France -> Rina please inform us at 1pm which report not received</li>
<li>Rule 3/6 : if you don't know what to reply, please write, " I don't know "</li>
<li>Rule 4/6 : please keep the font, structure, color of this report</li>
<li>NEW Rule 5/6 : if we are not working on one project, don't send the report (OR) send an empty report with : we are not working today on this report</li>
<li>NEW Rule 6/6 : we need to know what was the last message on hangout</li></p>
</ol>
<h4 style="color:black;">Step 1/4 :</h4>
<span style="color:violet;">Check Hangout and copy/paste what has been ask yesterday evening (after 8:30pm IST) :</span>

<h4 style="color:black;">STEP 2/4 : 10 questions about General info about the project :</h4>
<p>Question 1/9 Name of the project :&emsp;{{$forms->project_name }}<br>
Question 2/10 Are we working today on this project (Yes or No) :<br>
<span style="color:violet;">Question 2/10 Starting date of the project :</span>&emsp;{{ $forms->starting_date }}<br>
Question 3/10 : Current Link (not old requirement) of the requirements in French and English &emsp;{{ $forms->current_link }}<br>
Question 4/10 Production (client) URL server (if mobile provide prod URL of server API) :&emsp;{{ $forms->production_urlserver }}<br>
Question 5/10 Test server URL (if mobile provide test URL of server API) :&emsp;{{ $forms->test_serverurl}}<br>
Question 6/10 Database technology :&emsp;{{ $forms->database_technology }}<br>
Question 7/10 Front/Back technology :&emsp;{{ $forms->font_technology }}<br>
Question 8/10 Number of deliveries (you know) in this project :&emsp;{{ $forms->number_deliveries }} <br>
Question 9/10 Number of days working on this project (add +1 from yesterday report) :&emsp;{{$forms->number_ofdays}}<br>
</p>
<h4 style="color:black;">STEP 3/4 : 3 questions about this today report :</h4>
<p>1/3) First name of the developer who write the report : {{$forms->name_developer}}<br>
2/3) Date of this report :&emsp;{{$forms->date_report}}<br>
3/3) Hour (IST) of this report (can not be same than yesterday) :&emsp;<br></p>


<h4 style="color:black;">STEP 4/4 : 12 questions about : yesterday/today/tomorrow</h4>

<h4 style="color:black;">Question 1/12 (7 answers)  - CURRENT DELIVERY in FRENCH</h4>
<p><ol><li>Give the delivery number and the content of the current delivery you are working on TODAY :</li>
<li>Start Date of the current delivery :</li>
<li>The delivery number is :</li>
<li>FRENCH Status (done/pending), Delay (estimated in the estimate) and Feature 1/3 of this delivery is :</li>
<li>FRENCH Status (done/pending), Delay (estimated in the estimate) and Feature 2/3 of this delivery is :</li>
<li>FRENCH Status (done/pending), Delay (estimated in the estimate) and Feature 3/3 of this delivery is :</li>
<li>This delivery is planned to be finish on (date) :</li></ol>
<br></p>
<p>(2 features can not be the same)</p>

<h4 style="color:black;">Question 2/12 (4 answers) - YESTERDAY</h4>
<p>Give minimum 3 tasks (1task = around 2 hours) or features you did yesterday, related to which delivery ?<br>
<ol><li>Yesterday, i worked on delivery number :</li>
<li>Yesterday,  Task 1/3 (2 hours) of this delivery number is :</li>
<li>Yesterday, Task 2/3 (2 hours)  of this delivery number is :</li>
<li>Yesterday, Task 3/3 (2 hours)  of this delivery number is :</li>
</ol><br></p>
<p>(2 tasks can not be the same than today tasks)</p>
<h4 style="color:black;">Question 3/12 (2 answers) - YESTERDAY : DONE and need HELP</h4>
<p>Among those 3 tasks, which task is done ? and which task you need help because you could not succeed ?
<ol>
<span style="color:lightgreen;"><li>The task 1/2 done is :</li></span>
<span style="color:red"><li>The task 2/2, I could not succeed to finish and i need help to go faster :</li></span></p>
</ol>
<h4 style="color:black;">Question 4/12 (1 answer) Give only 1 LINK (http://) of a library/plugin/module you worked on ?</h4>
<p><ul><li>Link 1/1 :</li></ul></p>
<br>
<p>(there can not be the same link everyday, during all the reports for all deliveries)</p>

<h4 style="color:blue;">Question 5/12 (4 answers) - TODAY : Which task or feature you are working on it today, related to which delivery ?</h4>
<p style="color:blue;"><ol><li>Today, i am working on delivery number :</li>
<li>Today,  Task 1/3 (2 hours) of this delivery number will be :</li>
<li>Today, Task 2/3 (2 hours)  of this delivery number will be :</li>
<li>Today, Task 3/3 (2 hours)  of this delivery number will be :</li></ol></p>
<br>
<p>(2 tasks can not be the same than yesterday)</p>

<h4 style="color:black;">Question 6/12 (4 answers) -TOMORROW : Which task or feature you will work tomorrow, related to which delivery ?</h4>
<p><ol><li>Tomorrow, i will work on delivery number :</li>
<li>Tomorrow,  Task 1/3 (2 hours) of this delivery number will be :</li>
<li>Tomorrow, Task 2/3 (2 hours)  of this delivery number will be :</li>
<li>Tomorrow, Task 3/3 (2 hours)  of this delivery number will be :</li></ol></p>
<br>
<p>(2 tasks can not be the same than today)</p>

<h4 style="color:black;">Question 7/10 (1 answer)  - Give 1 proof of what you are saying : screenshot or screencast with URL (if possible) ?</h4>
<ul><li>IMAGE Dropbox link 1/1 :</li></ul>
<h4 style="color:black;">Question 8/12 (2 answers) - What is the date of the TWO latest server update ?</h4>
<p><ol><li>Date 1/2 :</li>
<li>Date 2/2 :</li></ol></p>
<h4 style="color:black;">Question 9/12 (3 answers) - What are the link/id/pass to login to test?</h4>
<ol><li>URL (1/3) :</li>
<li>Login (2/3) :</li>
<li>Password (3/3 :</li>
</ol></p>
<br>
<p>(if different roles, please provide it)</p>

<h4 style="color:blue;">Question 10/12 (2 answers) - What are the task that are pending to finish the current delivery ?</h4>
<p><ol><li>Task pending 1/2 with estimated delay :</li>
<li>Task pending 2/2 with estimated delay :</li>
</ol></p>
<h4 style="color:black;">Question 11/12 (1 answer)  - When you plan to finish the current delivery ?</h4>
<p><ul><li>Date finishing coding 1/1 :</li></ul></p>

<h4 style="color:black;">Question 12/12 (1 answer) - When you plan to update the server or testflight (or apk) to finish the current delivery ?</h4>
<p><ul><li>Date updating server 1/1 :</li></ul></p>
{{-- @endforeach --}}
</body>
</html>
