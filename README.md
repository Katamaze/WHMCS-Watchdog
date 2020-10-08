## Watchdog for WHMCS - Detect Compromised Files, Intruders

# Securing WHMCS

We're pleased to announce we're working on releasing our second free module for WHMCS. In case you missed the first, it's named [**Plesk Checker**](https://github.com/Katamaze/WHMCS-Free-Scripts#plesk-checker). It lets you quickly identify problems in the integration between WHMCS and Plesk.

This time we want to open source a script we used internally for years to help our customers to **fix compromised installations of WHMCS**. Here is the dashboard (click to enlarge).

![image](https://katamaze.com/modules/addons/Mercury/uploads/files/Blog/d2da3cf2a8cddb46e226106e96626a62/whmcs-watchdog-dashboard.png)

# Watchdog Features

The script performs file system integrity checks to detect:

* **Compromised files** that could potentially threaten your core install (eg. malwares, files with injections)
* **Intruders**. Unknown files that require your attention as they could be legitimate scripts of backdoors
* **Missing files** that could cause unexpected errors
* **Anomalous and suspicious** files buried deep within directories

You can inspect all findings to take the appropriate actions but the module can also be configured to automatically deal with such files.

![image](https://katamaze.com/modules/addons/Mercury/uploads/files/Blog/d2da3cf2a8cddb46e226106e96626a62/whmcs-watchdog-file-inspection.png)

The module verifies checksums of all .php files and performs checks every X hours. When a compromised file is detected, optionally the module can automatically take any of the following actions.

* **Neutralize file** so that it can't be used to harm your system (quarantine)
* Send **notifications** to selected administrators

# Watchdog Settings

All settings can be changed from the following simple and intuitive interface.

![image](https://katamaze.com/modules/addons/Mercury/uploads/files/Blog/d2da3cf2a8cddb46e226106e96626a62/whmcs-watchdog-settings-automation.png)

![image](https://katamaze.com/modules/addons/Mercury/uploads/files/Blog/d2da3cf2a8cddb46e226106e96626a62/whmcs-watchdog-settings-notifications.png)

Please keep in mind that the module is not ready for use as we're still working on it. It won't take much time since we're "converting" a stand-alone script to make it work as a WHMCS Addon module.

# Get Involved!

Follow the project on Github to send suggestions and be the first to use it once it will be ready for use!

Looking for other free scripts? Take a look at our huge collection of **[Action Hooks and Reports for WHMCS](https://github.com/Katamaze/WHMCS-Free-Scripts)**.
