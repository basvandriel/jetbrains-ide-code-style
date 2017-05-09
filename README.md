# jetbrains-ide-code-style

This repository contains my personal code style in the JetBrains IDEs.
The supported languages are currently Java, PHP and CSS.

## Installation

Checkout the repository to any directory on your computer and run the make file.
This will create a compressed `settings.jar` file in the directory where the repository was cloned to.

```shell
# Clones the repository
git clone https://github.com/basvandriel/jetbrains-ide-code-style.git

# Builds the MAKEFILE
make
```

Afterwards open one of the supported JetBrains IDEs
and go to `File > Import Settings...` and select the previous generated `settings.jar` file.

To use the code styles, go to `File > Settings > Editor > Code Style` and select the `BAS-CODE-STYLE` option right next to `Scheme`. 

## License

This project is licensed under the The Unlicensed - see the [LICENSE.md](LICENSE.md) file for details.

## Links
* [Source code](https://github.com/basvandriel/jetbrains-ide-code-style)
* [Issue tracker](https://github.com/basvandriel/jetbrains-ide-code-style/issues)
