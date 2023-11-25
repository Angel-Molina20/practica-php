#!/bin/bash
# Name: enqueue-consumer.sh
# Purpose: Enqueue Consumer with a startup delay
# ----------------------------------------------
time_sleep=20
echo "$(date '+%Y-%m-%d %H:%M:%S') INFO pending: Waiting 20 secs to start queue consumer..."
   sleep $time_sleep
   #php /app/artisan enqueue:consume --time-limit="now + 3 second"
   php -v
   sleep $time_sleep
echo "$(date '+%Y-%m-%d %H:%M:%S') INFO: end queue consumer"
