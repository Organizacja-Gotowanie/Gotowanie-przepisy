#!/bin/bash

if [ `facter virtual` != "virtualbox" ];
then
    echo The command should be executed within the guest OS!
    exit 1
fi

/app/symfony2app/vendor/behat/behat/bin/behat $@
