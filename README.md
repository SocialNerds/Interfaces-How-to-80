# What are Interfaces?

An example of interfaces in PHP. And pretty much every other language that supports
interfaces.

# Check the full explanation video (GR)
[![Interfaces, Γιατί τα Θέλουμε #80, live](https://img.youtube.com/vi/N3orWXm-12Q/0.jpg)](https://youtu.be/N3orWXm-12Q)

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
docker exec -it -u serveruser app_fpm /bin/bash -c "TERM=$TERM exec bash"
~~~~

To check it works,
~~~~
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