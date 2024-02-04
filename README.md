# Pacchio_Web_Services

Pacchio Web Services
![pws](pwsLogo.png)

## Installazione

git clone <https://github.com/pacchio1/Pacchio_Web_Services.git>

cd Pacchio_Web_Services

chmod -R 770 html

cd docker

sudo docker-compose up -d

### per interagire con un docker

docker exec -it **nome docker** /bin/bash

ex. docker exec -it docker-nextcloud-1 /bin/bash

### per salvare file di nextcloud X backup

cd html

docker cp docker-nextcloud-1:/var/www/html/data .

## Servizi

- **Password Database (KeepassXC):**

  - [Per salvare password online]

- **NAS:** -> 4321

  - [Next Cloud X storage]

- **PiHole:** -> 5555

  - [To remove ads]

- **UpTimeKuma:** -> 3001
  - [For monitoring servers]

<!-- - **pfSense:**
  - [firewall e router open-source] -->

- **VPN:** -> 1194

  - [creazione di una vpn con openvpn e pivpn]

- **Certbot:**

  - [certbot per certificato ssh]

- **Web Server:** -> 80

  - [Apache2]

- **DB** ->postgresql :5432 mysql -> 3306 phpmyadmin

  - [PostgreSQL]

## Per espore nextcloud

sudo docker exec -it docker_nextcloud_1 /bin/bash

cat > config/config.php

" array (
0 => '192.168.1.69:4321',
1 => 'solidyellow.ddns.net', // Add your domain here
),"...

## ToDo

usare pivpn come docker
fixare certbot
ssh in remoto solo tramite public key
espore nextcloud

## WishList

salvare cartella vengono salvati i file di nextcloud -> capire come fare
