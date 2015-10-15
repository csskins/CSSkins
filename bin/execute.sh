#!/bin/bash
# There's probably a better way to check for options, but I can't think of anything at the moment

command=${@: -1}

if [ $# -le 1 ];
then
    vagrant ssh -c "docker exec Csskins bash -c 'cd /var/www; ${command}'" -- -q
else
    vagrant ssh -c "docker exec ${@: 0:$#} Csskins bash -c 'cd /var/www; ${command}'" -- -q
fi
