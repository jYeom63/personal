# Yii framework basics

## Structure
- MVC
- entry script: PHP scripts accessible from end users.
- application: globally accessible objects. 
- app components: objects registered with apps. Provides various services to fulfill requests
- modules: self-contained packages. *Contain complete MVC* within themselves. App can be organized in terms of multiple modules.
- filters: represent code that need to be invoked before & after handling of requests.
- widgets: Objects that can be embedded in views.

## How to version up
- Check what to do in the official website
- Usually fix the composer.json ==> Change `yiisoft/yii2`'s version
    - When using this method, massive update in composer could include a lot of unforeseen updates in the `composer.lock` file.
    - To prevent this, you might want to specify the update target `composer update yiisoft/yii2`
    - ...