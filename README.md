# Moodle

## Installation

### 1. Fetch the Moodle distribution defined in .env

Build Moodle from downloaded package as described here:
https://docs.moodle.org/405/en/Installation_quick_guide#Getting_Moodle

```shell
task dist:build
```

### 2. Startup docker

```shell
task start
```

### 3. Install Moodle

Following cli installation described here:
https://docs.moodle.org/405/en/Administration_via_command_line#Installation

```shell
task install
```

## Upgrading Moodle

@todo Find out what works for us.

https://docs.moodle.org/405/en/Upgrading
https://docs.moodle.org/405/en/Administration_via_command_line#Upgrading


## Managing Moodle

@todo Find out what works for us.

Customization of Moodle should be done through changes in Moodle/local folder.

Several scripts are available to maintain the Moodle installation.

### Contributed extensions

@todo How does it work.

I have prepared a contrib folder outside the moodle folder to hold potential contrib plugins. 
The plugins should not be committed to git so we ignore all files in folder. A script of some kind should ensure that the plugins are downloaded.
Each plugin needs to be added as volume in docker if we follow this approach. 

### Moodle customization

Moodle customizations are defined in the `local` folder and mapped into moodle through docker volumes.

### Using Moodle php scripts

Moodle has several scripts to manage the application. Described here: https://docs.moodle.org/405/en/Administration_via_command_line#Running_CLI_scripts

#### Show available scripts

```shell
task moodle-script:list
```

#### Run purge cache script

```shell
task Moodle-script:run -- purge_caches.php
```
