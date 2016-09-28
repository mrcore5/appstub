# appstub-laravel53
Laravel 5.3 looking appstub for mrcore5


# Manually Wireup Appstub from Laravel

* Make `packages` folder
* add `/packages` to main .gitignore
* Symlink this AppstubLaravel53 into `packages/mrcore/appstub`
* Add type path reposotyro to main composer.json and require-dev mrcore/appstub *@dev
* composer dump-autoload


# Folder Structure

New mrcore app folder structure that follows Laravel 5.3

Should be absolute minimal, and use MAKERS to build rest


# Makers to build

make:factory (model factory)
make:command
make:controller
make:event
make:job
make:listener
make:mail
make:middleware
make:migration
make:model
make:notification
make:policy
make:provider
make:seeder
make:test

NOTUSED(why?)
    make:auth
    make:request

New not in laravel
    make:repo (?? mreschke/repo)
    make:facade

Maybe thwor in new mreschke/repo make:repo ?

# To Do




# Stubs

The stubs should be inside this appstub becuase each appstub will
have different stubs.  But the actual commands that MAKE and INSTALL these stubs
should be in mrcore5/foundation.  Foundation will simply look for
the stubs path and may have separate install classes for each type of
app stub...course then they are NOT self contained and can't be built
by someone else.  3rd party appstubs would be cool if self-contained.

