## Usage

### As a standalone tool

```
$ sql-migrate --help
usage: sql-migrate [--version] [--help] <command> [<args>]

Available commands are:
    down      Undo a database migration
    new       Create a new migration
    redo      Reapply the last migration
    status    Show migration status
    up        Migrates the database to the most recent version available
```

Each command requires a configuration file (which defaults to `dbconfig.yml`, but can be specified with the `-config` flag). This config file should specify one or more environments:

```yml
development:
    dialect: sqlite3
    datasource: test.db
    dir: migrations/sqlite3

production:
    dialect: postgres
    datasource: dbname=myapp sslmode=disable
    dir: migrations/postgres
    table: migrations
```

The `table` setting is optional and will default to `gorp_migrations`.

The environment that will be used can be specified with the `-env` flag (defaults to `development`).

Use the `--help` flag in combination with any of the commands to get an overview of its usage:

```
$ sql-migrate up --help
Usage: sql-migrate up [options] ...

  Migrates the database to the most recent version available.

Options:

  -config=config.yml   Configuration file to use.
  -env="development"   Environment.
  -limit=0             Limit the number of migrations (0 = unlimited).
  -dryrun              Don't apply migrations, just print them.
```

The `new` command creates a new empty migration template using the following pattern `<current time>-<name>.sql`.

The `up` command applies all available migrations. By contrast, `down` will only apply one migration by default. This behavior can be changed for both by using the `-limit` parameter.

The `redo` command will unapply the last migration and reapply it. This is useful during development, when you're writing migrations.

Use the `status` command to see the state of the applied migrations:

```bash
$ sql-migrate status
+---------------+-----------------------------------------+
|   MIGRATION   |                 APPLIED                 |
+---------------+-----------------------------------------+
| 1_initial.sql | 2014-09-13 08:19:06.788354925 +0000 UTC |
| 2_record.sql  | no                                      |
+---------------+-----------------------------------------+
```

### MySQL Caveat

If you are using MySQL, you must append `?parseTime=true` to the `datasource` configuration. For example:

```yml
production:
    dialect: mysql
    datasource: root@/dbname?parseTime=true
    dir: migrations/mysql
    table: migrations
```
    
See [here](https://github.com/go-sql-driver/mysql#parsetime) for more information.