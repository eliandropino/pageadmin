
# Installation

## Step 1

### With GIT
Clone git repository

Or with HTTPS
```
git clone https://github.com/FlorientR/laravel-gentelella.git pageadmin
```

Go to the project folder 
```
cd pageadmin
```

Update composer 
```
composer update
```


For Unix
```
cp .env.example .env
```
For Windows
```
copy .env.example .env
```


For install all NPM package

```
npm install
```

And then, run this commands

```
npm install -g bower
npm install -g gulp

php artisan key:generate
bower install
gulp
```

Configure your ```.env``` file and run :
```
php artisan migrate
```
**WARNING** : For auth support, configure your ```.env``` file with ```database``` and ```smtp``` connection !



