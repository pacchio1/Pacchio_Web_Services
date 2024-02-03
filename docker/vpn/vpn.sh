#!/bin/bash
apt-get update
apt-get upgrade -y
apt-get dist-upgrade -y
curl -L https://install.pivpn.io | bash
#pivpn add #X2 volte
# cd ovpns/
