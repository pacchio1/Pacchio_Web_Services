#!/bin/bash
apt-get update
apt-get upgrade -y
apt-get dist-upgrade -y
apt-get install -y curl
curl -L https://install.pivpn.io | bash
pivpn add #X2 volte
# cd ovpns/
