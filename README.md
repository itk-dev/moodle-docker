# Moodle

## Installation

1. Fetch the moodle distribution defined in .env

    ```shell
    task dist:build
    ```

2. Startup docker

    ```shell
   task start
   ```

3. Install moodle

    ```shell
    task install
    ```

## Upgrading moodle

https://docs.moodle.org/405/en/Upgrading


## Managing moodle

Customization of moodle should be done through changes in moodle/local folder.

Several scripts are available to maintain the moodle installation.

### Moodle customization

Moodle customizations are defined in the `local` folder and mapped into moodle through docker volumes.

### Using moodle php scripts

Moodle has several scripts to manage the application.

#### Show available scripts

``` shell
task moodle-script:list
```

#### Show contents of purge cache script using cat

```task moodle-script:show -- purge_caches.php```

#### Run purge cache script

```task moodle-script:run -- purge_caches.php```
