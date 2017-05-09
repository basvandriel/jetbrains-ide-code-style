# intellij-code-style

This repository contains my personal code style in the JetBrains IDEs.
The supported languages are currently Java, PHP and CSS.

## Installation

Checkout the repository to any directory on your computer and run the make file.
This will create a settings.jar file in the directory where the repository was cloned to.

```shell
# Clones the repository
git clone https://github.com/basvandriel/intellij-code-style.git

# Builds the MAKEFILE
make
```

After having runned the `make` command, there will now be a compressed 
`settings.jar` file into the repository directory. 

Open one of the supported JetBrains IDEs
and go to `File > Import Settings...` and select the previous generated `settings.jar` file.

## License

This project is licensed under the The Unlicensed - see the [LICENSE.md](LICENSE.md) file for details 