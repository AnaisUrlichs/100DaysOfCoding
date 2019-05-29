<h1>Git cheatsheet</h1>

Note: You can use git from the standard command line and via git 

Initialise local git repository:
$ git init

Add file to index:
$ git add <fileName>

Display differences between the working tree and the index/paths:
$ git status

Commit changes to the index:
$ git commit

Take local repository and submit it to a remote repository:
$ git push

Pull latest changes from a remote repository:
$ git pull

Copy a remote repository into my current folder:
$ git clone <link to the folder>

Create a new file:
$ touche <fileName>

Add any html file to the staging area:
$ git add *.html

Add every file:
$ git add .

Commit changes with comment:
$ git commit -m '<Comment>'

To add directory/file to a github repo:
$ git remote add origin <github url>
$ git push -u origin master
