# CSCI E-15 Project 3 Placeholder
# Developer's Best Friend

## Live URL
<http://p3.sietekk.com>

## Description
#### Info
The Developer's Best Friend is a software development tool to generate two types of demo data. First, Lorem Ipsum random text may be generated according to the number of words, sentences, or paragraphs specified. Second, random user data may be generated according to the available choices of data fields and quantity of users. This application was depeveloped using the Laravel 5 framework.

#### Validation
Validation is performed using Bootstrap form validation in the frontend and Laravel form validation in the backend.

#### Task Runner
##### Development
This application uses NPM, Gulp, and Laravel's Elixir for the task runner workflow:
1. Run `npm install` to install necessary dependencies to the `node_modules` directory.
2. Run `gulp` to compile, bundle, and version all Sass/CSS and JavaScript into the `build/` directory.
##### Production
1. Run `npm install` to install necessary dependencies to the `node_modules` directory.
2. Run `gulp --production` to not only bundle and version all Sass/CSS and JavaScript, but also remove intermediary bundles and directories.**

#### Push-to-Deploy
For deployment to a VPS, please follow the intitial instructions [here](https://www.digitalocean.com/community/tutorials/how-to-set-up-automatic-deployment-with-git-with-a-vps) and for the git post-receive hook, please use this bash script and place it in the correct directory:
```
#!/bin/bash
while read oldrev newrev ref
do
    if [[ $ref =~ .*/master$ ]];
    then
        echo "Master ref received. Deploying master branch to production..."
        git --work-tree=/var/www/dwa15/cscie15.project3 --git-dir=/home/michael/repo/cscie15.project3.git checkout -f
        echo "Changing to work tree directory..."
        cd /var/www/dwa15/cscie15.project3
        echo "Running composer to build application..."
        composer install
        echo "Running NPM installation..."
        npm install
        echo "Running Gulp in production mode..."
        gulp --production
        echo "Production push complete..."
    else
        echo "Ref $ref successfully received.  Doing nothing: only the master branch may be deployed on this server."
    fi
done
```

#### APIs
##### Application
The applications accept POST requests made to themselves with following URL parameters and values:

Lorem Ipsum Path: [.../lorem-ipsum](http://p3.sietekk.com/lorem-ipsum)

| Lorem Ipsum Parameter      | Values                                                                     |
| -------------------------- | -------------------------------------------------------------------------- |
| `text_type`                |  Contains one of `words`, `sentences`, or  `paragraphs`                    |
| `text_quantity`            |  An integer number `1-100`                                                 |

Fake User Path: [.../fake-user](http://p3.sietekk.com/fake-user)

| Fake User Parameter        | Values                                                                     |
| -------------------------- | -------------------------------------------------------------------------- |
| `form_array`               |  Contains one of `address`,  `phone`, or  `birthdate`                      |
| `user_quantity`            |  An integer number `1-100`                                                 |

## Demo


## Details for teaching team
The site is running in production mode, so the CSS and JS bundles are minified.

## Outside code
* jQuery: <https://jquery.com/>
* Bootstrap: <http://getbootstrap.com/>

