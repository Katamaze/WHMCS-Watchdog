# Watchdog for WHMCS

Addon Module that performs file system integrity check on WHMCS to detect:

* **Compromised** files that could potentially threaten your core install (eg. injectors, malwares)
* **Intruders**. Unknown files that require your approval (eg. third-party modules, backdoors)
* **Missing files** that could cause unexpected errors

The module verifies checksums of all *.php* files and performs checks every X hours. When a compromised file is detected, the module can automatically take any of the following actions:

* **Neutralize file** so that it can't be used to harm your system
* Send **notifications** to the selected administrators

Below you can find a pair of screenshot but keep in mind that we're still working on the module. It won't take much time since basically we're open-sourcing a software we used internally for years. Feel free to Watch/Star the project to receive updates when RC will be ready for use.
