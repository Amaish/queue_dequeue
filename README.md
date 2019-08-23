**Step 1.** Login to your VPS using terminal.

**Step 2.** After you login successfully go to the location where you want to create the PHP file and create the file and open file using terminal as shown below

*  `cd /home/maina/Job_projects/personal/`
*  `touch queueStatus.php`
*  `nano queueStatus.php`

I am using nano editor for editing file, now paste the code you want to execute for this example I put in the queueStatus.php code.

After this we need to set permission for this file to execute properly.
`sudo chmod +x queueStatus.php`

**Step 3.** Now we can create our Bash script file to run queueStatus.php file after 5 sec interval.

Create new bash file using nano editor.
`nano script.sh`

 Paste the code below
```
#!/bin/bash
while true; do
    begin=`date +%s`
    php /home/maina/Job_projects/personal/queueStatus.php
    end=`date +%s`
    if [ $(($end - $begin)) -lt 5 ]; then
        sleep $(($begin + 5 - $end))
    fi
done
```
Note the path `/home/maina/Job_projects/personal/queueStatus.php`
Change it to point to the location of queueStatus.php
Now check your script file if its executable or not using the following command.
`ls -la script.sh`
If it show white color it means this file is not executable and you need to change permission for this file using the following command `sudo chmod +x script.sh`
Now rerun the earlier command to check if it turns to green this means it is executable.
Now run this Bash file using this command `./script.sh`

If you did not miss any step your script should start running.