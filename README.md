## Lessons with no code
- Lesson 1
- Lesson 2
- Lesson 11
## MySQL
I'm going to use a MySQL container, instead of installing a MySQL server on my machine.

I will set this up in a `docker-compose.yml` file in the root of the project.

Run the following to start up the database:
```sh
docker-compose up -d
```
By default, you should be able to connect to it with the following credentials:
- Host: `localhost`
- Port: `3001`
- Username: `root`
- Password: `secret`
- Database: `phpForBeginners`
