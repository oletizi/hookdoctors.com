#!/bin/sh

ARG=$1
localroot="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
source=${localroot}/www
dest='artpopmu@hookdoctors.com:~/www/hookdoctors/'

if [ $# != 1 ]; then
echo "Useage: sync.sh test or prod\n"
exit
fi

if [ $ARG = test ]; then
    cmd="rsync  -xva --dry-run  --exclude=".git" -e 'ssh' $dest  $source"
    echo "Executing $cmd..."
    $cmd
elif [ $ARG = prod ]; then
    cmd="rsync  -xva --no-perms --exclude=".git" -e 'ssh' $dest $source"
    echo "Executing $cmd..."
    $cmd
else
        echo "Usgeage: sync.sh test or prod"
fi