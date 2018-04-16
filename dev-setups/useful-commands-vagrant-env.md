# Commands within the vagrant environment

- To access DB
```
mysql -u root -h 127.0.0.1 -poz-vision123
```

- For migration:   
    - https://basecamp.com/3074691/projects/12531726/messages/76781565
    - https://basecamp.com/3074691/projects/12531726/messages/73993257

```
# Preserve in case of loss
cp -pf /vagrant/environment/conf{.localtest,}.php

./vendor/bin/codecept run acceptance_worker
```
