# Yii framework basics

#### Structure
- MVC
- entry script: PHP scripts accessible from end users.
- application: globally accessible objects. 
- app components: objects registered with apps. Provides various services to fulfill requests
- modules: self-contained packages. *Contain complete MVC* within themselves. App can be organized in terms of multiple modules.
- filters: represent code that need to be invoked before & after handling of requests.
- widgets: Objects that can be embedded in views.