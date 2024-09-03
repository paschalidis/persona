## Installation

installation using [laravel sail](https://laravel.com/docs/11.x/sail)

1. Install [docker](https://docs.docker.com/engine/install/) on your machine
2. Build the docker environment - sail

Inside the project folder run the following:
```shell
./vendor/bin/sail up -d
```
3. Run the migrations
```shell
./vendor/bin/sail artisan migrate
```
4. Visit your [localhost](http://localhost/) to check everything is setting up correctly. You will see the laravel default page.
5. Import [submission.postman_collection.json](submission.postman_collection.json) to postman
6. Run the `Create Submission` endpoint
7. Run the queue work
```shell
./vendor/bin/sail artisan queue:work
```
You will see the data in the database table `submission` and the logs in the [laravel.log](/storage/logs/laravel.log) file
8. Run the tests
```shell
 ./vendor/bin/sail artisan test
```

### Note: 
In case you don't want to use sail, and you have the dependencies installed on your machine (php, mysql) you can use the classic laravel command for all the commands mentioned in the instruction.
```shell
php artisan 
```

### Extra: 
For the demo proposes, the csrf protection have been excluded from the submission endpoint
