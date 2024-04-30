# PHP_Test_2024-04-30
PHP_Test_2024-04-30

// 1st version

I found four areas of improvement, my logic is as follow :
step 1. usage of accessors and mutators for classes, so if we add some fields in the future, it's very easy and we don't need to create additional setters and getters.
step 2. usage of generic functions to do simple queries on SQL tables, so if we have hundreds of table, it will be easier to manage.
step 3. usage of Model-View-Controller pattern to separate data access, layout/HTML and business logic, so in a team, people can work simultaneously on the three layers.
step 4. create REST APIs for backend services, so if in the future we decide to use another framework for the frontend (Angular, React, Vue...), it will be easier.

At this stage, only steps 1 and 3 are existing as standalone application, but are not yet integrated in the codebase.
