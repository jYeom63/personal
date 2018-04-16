# How to make a branch to be reflected in circle-ci

1. Open `circle-yml`
    - Fix the following entries within `{}`

```
deployment:
  demo:
    branch: {develop} ==> {branch-to-be}
    commands:
      - ssh -p 22551 ec2-user@52.197.139.184 /var/www/wasabi/deploy.sh -e {develop} ==> {branch-to-be}
      - ssh -p 22551 ec2-user@52.197.139.184 cp 
      ...
```

> This will make the circle-ci to automatically deploy the changes pushed into the {branch-to-be} to the demo environment.

2. Check if everything is going right by observing it at `circleci.com`

> In case of updating the environment (ex. version update), especially for things with composer, composer.lock must be included. 