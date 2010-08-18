# CloudFusion

Build awesome, cloud-based web applications in a fraction of the time!

## 3.0 is coming!

CloudFusion 3.0 is a pretty sizable update and is coming very soon. If you're thinking about patching some aspect of CloudFusion and submitting it as a contribution, hang onto your shorts. Chances are, I've already fixed it.

Keep an eye on the [3.0 Milestone](http://code.google.com/p/tarzan-aws/issues/list?q=label:Milestone-3.0) to get a sense of how much I have left to do -- it's not much at all! :)

## Requirements

* PHP 5.1.4 or newer (PHP 5.2+ recommended)
* SimpleXML extension
* cURL extension with SSL support

Caching support requires one or more of the following:

* *File:* Write permissions to the file system.
* *APC:* APC extension
* *XCache:* XCache extension
* *Memcache:* Memcached system service, Memcache PHP extension
* *SQLite:* PDO extension, PDO_SQLITE adapter, SQLite extension
* *MySQL:* PDO extension, PDO_MYSQL adapter, MySQL extension (or mysqlnd for PHP 5.3)
* *PostgreSQL:* PDO extension, PDO_PGSQL adapter, PGSQL extension

## Get the latest code

The following will pull down the latest development code, including CacheCore and RequestCore.

<pre><code>git clone git://github.com/skyzyx/cloudfusion.git
cd cloudfusion
git submodule init
git submodule update
</code></pre>

## Getting the hang of Git

As of early November 2009, CloudFusion has moved to the Git SCM and GitHub for a code repository.

### Mac

Mac users can install Git either from [the installer](http://code.google.com/p/git-osx-installer/downloads/list?can=3) or via [MacPorts](http://macports.org). If installing via MacPorts, I'd recommend calling `sudo port install git-core +svn`.

### Windows

Windows users can install [msys-git](http://code.google.com/p/msysgit/) or [TortoiseGit](http://code.google.com/p/tortoisegit/). [Getting started with Git and Github on Windows](http://kylecordes.com/2008/04/30/git-windows-go/) would be a good place to start.

### Linux

Depending on your flavor of Linux you can likely either use `yum` or `apt-get` to install the Git package.

## Contributing

I want to see CloudFusion become a community project. If you have a patch for a bug or new feature, fork CloudFusion, make the updates, then send me a Github pull request. This makes patching much easier.

It's even better when it's unit tested. Bug fix patches should include matching [PHPT](http://qa.php.net/write-test.php) unit tests, and new features should include unit tests and documentation in [NaturalDocs](http://naturaldocs.org) format.

Documentation is equally as important as the code itself, and unit tests are actually used for code samples within the documentation. Doing your best will make my job easier. :)

I definitely need help with:

* Writing PHPT tests for the S3 class
* Writing PHPT tests for the EC2 class
* Supporting the new EC2-related services that have come out in the past few months

## Links

* [Main site](http://getcloudfusion.com)
* [API reference](http://getcloudfusion.com/docs/latest)
* [Tutorials and screencasts](http://getcloudfusion.com/docs)
* [Discussion and support list](http://getcloudfusion.com/discussion)
* Donate! -- Click the little "Donate" button in the upper-right corner

## License

Code is BSD licensed. Documentation and tutorials are Creative Commons licensed. You can find exact details in the footer of the main site.
