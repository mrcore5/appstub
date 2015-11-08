## Mrcore Appstub

This is the mRcore default app stub for creating quick wiki apps.

## What Is Mrcore

Mrcore is a set of Laravel and Lumen components used to build various systems.
It is a framework, a development platform and a CMS.  It is a modularized version of Laravel
providing better package development support.  Think of Laravel 4.x workbenches on steroids.

See https://github.com/mrcore5/framework for details and installation instructions.

## Official Documentation

If you use [mrcore5](https://github.com/mrcore5/framework) with the
[wiki](https://github.com/mrcore5/wiki) module then you can build great wiki apps using this stub.

To get an app started quickly you can run the wiki command

	./artisan mrcore:wiki:app:make mevendor/appname

This will create a folder `Apps/Mevendor/Appname` and git clone this app stub repo.  This repo
is the template of a great wiki app.

From there, you can wire up this app into a wiki post.  Create a new wiki post and goto the 
advanced tab of the edit post page.  Enter a static route like `apps/myapp` and link new app in the
workbench forge by entering `mevendor/appname`.  Save the post and you should see a nice new app!

## Contributing

Thank you for considering contributing to the mRcore framework!  Fork and pull!

### License

Mrcore is open-sourced software licensed under the [MIT license](http://mreschke.com/license/mit)
