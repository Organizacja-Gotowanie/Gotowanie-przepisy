#!/bin/bash

# If
#   (not within Vagrant Guest OS) and (not within Travis)
# then
#    exit 1

if [ `facter virtual` != "virtualbox"  ];
then
    echo The command should be executed within the guest OS!
    exit 1
fi

rm -rf /app/symfony2app/app/cache/*

/app/symfony2app/vendor/behat/behat/bin/behat $@
