Installation Guide for the Profit Calculation Module
First Step:
Connect to your webserver via SSH and navigate to the base folder of your OXID eShop (where the composer.json is located)

Composer Installation
Second Step (Composer Installation):
Afterwards type in the following in the command log:

  composer require dylangrech/profit-calculation
Installation through Composer should now be complete.

Manual Installation
Second Step (Manual Installation):
If you press on the green code button you can download the whole content as a zip file.

OR
Write the following command in the Terminal/Command Log:

git clone https://github.com/dylangrech/Profit-Calculation
Third Step (Manual Installation):
As soon as you download the module, make sure to unzip or open the folder. Make sure to copy the folder

Afterwards paste the folder in the modules folder found in source/modules

Fourth Step (Manual Installation):
Lastly, as soon as you have copied the content, type in the following commands in the terminal(make sure you are in the oxid eshop of your choice):

Each command has to be executed one at a time


vendor/bin/oe-console oe:module:install-configuration source/modules/fc/fcprofitcalculation
composer config repositories.fc/fcaddressvalidation path source/modules/fc/fcprofitcalculation
composer require fc/fcprofitcalculation -n
Congrats Module Setup has been finished. If there are any problems please do not hesitate to contact me!
