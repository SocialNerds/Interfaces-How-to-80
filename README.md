# What are Interfaces?

An example of interfaces in PHP.

# Check the full explanation video (GR)
[![Interfaces, τι Είναι, Γιατί τα Θέλουμε #80, live](https://img.youtube.com/vi/u_8z2tuPMZ0/0.jpg)](https://youtu.be/u_8z2tuPMZ0)

# Installation
Requirements
- You need to have [Docker](https://docs.docker.com/engine/installation/) installed

Run in root folder,
~~~~
cp .env.example .env
docker-compose build && docker-compose up -d
~~~~

Login to the container,
~~~~
docker exec -it app_fpm /bin/bash -c "TERM=$TERM exec bash"
~~~~

To check it works,
~~~~
composer install
php hello.php
~~~~

Exit the container,
~~~~
exit
~~~~

# By SocialNerds
* [SocialNerds.gr](https://www.socialnerds.gr/)
* [YouTube](https://www.youtube.com/SocialNerdsGR)
* [Facebook](https://www.facebook.com/SocialNerdsGR)
* [Twitter](https://twitter.com/socialnerdsgr)