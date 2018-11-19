## Useful Commands

#### To track app behavior
```ssh
tail -f /var/www/wasabi/runtime/logs/app.log
```

#### Delete all local branch except master branch
```ssh
git branch | egrep -v "(master|\*)" | xargs git branch -D
```