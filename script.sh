#!/bin/bash
while true; do
    begin=`date +%s`
    php /home/maina/Job_projects/personal/queueStatus.php
    end=`date +%s`
    if [ $(($end - $begin)) -lt 5 ]; then
        sleep $(($begin + 5 - $end))
    fi
done
