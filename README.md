# Laravel Schedule EMail Notify
Sample code for laravel email notify with schedule

Contributors: SATHISH KUMAR [<sathish_arumugham@outlook.com>]

Tags: laravel5.x, email, notify, php, schedule 

Requires at least: 1.0

Tested up to: 1.0

 
## Description 

## What is Cronjob :

A Cronjob is Unix command for scheduling jobs to be executed in specific time and specific interval. For example we can schedule a task in the server that executes some scripts that sends out daily/weekly reports from our website. Mainly we are using the cron jobs to cleanup the databases, send the emails , execute time consuming tasks ….etc. If i want to delete some files from my database which is older than a month, I can simply do that using Cron Job. Cron job will not work with with windows based machines or servers as it will only work on unix based machines. 

## Command Scheduling in Laravel :

To schedule the commands we use the Laravel task scheduler.The tasks were defined inside the schedule method of the kernel class. By using the command method we can add as many artisan commands we want. By using the schedule method we can schedule all the commands. There are different schedule frequencies we can apply on the commands according to the need.  

app/Console/Kernel.php file.  We can define as much as tasks inside this method. Following is the only Cron entry you need to add to your server, which will call the Laravel command scheduler every minute.
* * * * * php /path/to/artisan schedule:run >> /dev/null 2>&1

## Schedule Options available in Laravel  :

The different type of schedules we can assign to our tasks are,

->cron(‘* * * * * *’);        —         Run the task on a custom Cron schedule

->everyMinute();        —        Run the task every minute

->everyFiveMinutes();      —       Run the task every five minutes

->everyTenMinutes();       —        Run the task every ten minutes

->everyThirtyMinutes();    —         Run the task every thirty minutes

->hourly();                   —        Run the task every hour

->daily();                    —        Run the task every day at midnight

->dailyAt(’13:00′);         —        Run the task every day at 13:00

->twiceDaily(1, 13);         —         Run the task daily at 1:00 & 13:00

->weekly();                    —        Run the task every week

->monthly();                     —        Run the task every month

->monthlyOn(4, ’15:00′); —        Run the task every month on the 4th at 15:00

->quarterly();                      —         Run the task every quarter

->yearly();                      —         Run the task every year

->timezone(‘America/New_York’);    Set the timezone
Addiitional schedule constraints are listed below,

->weekdays(); —   Limit the task to weekdays

->sundays();           —   Limit the task to Sunday

->mondays();           —   Limit the task to Monday

->tuesdays();           —   Limit the task to Tuesday

->wednesdays(); —   Limit the task to Wednesday

->thursdays(); —    Limit the task to Thursday

->fridays();           —   Limit the task to Friday

->saturdays(); —   Limit the task to Saturday

->when(Closure); —   Limit the task based on a truth test

## Conclusion:

Introduction of Laravel Task scheduler made the cronjob setup easier without SSH into your server to add the Cron entries. The Laravel command scheduler helps us to  expressively define the command schedule within Laravel and only a single Cron entry is needed on your server.

To schedule a Cron Job you can follow the post above.

Cheers !
Sathish
