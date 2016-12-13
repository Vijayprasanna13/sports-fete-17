#!/bin/bash

chars=abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIKLMNOPQRSTUVWXYZ
for i in {1..32} ; do
    echo -n ${chars:RANDOM%${#chars}:1}
done
echo


