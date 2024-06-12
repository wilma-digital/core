Requirements
------------
- PHP >= 7.3
- Magento >= 2.3.7

Installation
------------

### Via composer (recommended)

Please go to the Magento2 root directory and run the following commands in the shell:

```
composer require wilma/core
bin/magento module:enable Wilma_Core
bin/magento setup:upgrade
```

### Manually

Please create the directory *app/code/Wilma/Core* and copy the files from this repository to the created directory. Then run the following commands in the shell:

```
bin/magento module:enable Wilma_Core
bin/magento setup:upgrade
```

Support
-------
If you encounter any problems or bugs, please create an issue on [GitHub](https://gitlab.webvisum.de/magento2/module/Wilma_Core/-/issues).

Developer
---------
WilMa Digital GmbH
* Website: [https://wilma.tech](https://wilma.tech)

Maintainer
----------
* @amautz

Licence
-------
[GNU General Public License, version 3 (GPLv3)](http://opensource.org/licenses/gpl-3.0)

Copyright
---------
(c) 2015-2024 WilMa Digital GmbH
