Merchant Transactions Report Application

Application Objective 
---------------------
Demonstrate OOP and TDD skills.

Create a simple report that shows transactions for a merchant id specified as command line argument.

data.csv contains dummy data in different currencies, the report should be in GBP
Assume that data changes and comes from a database, csv file is just for simplicity, 
feel free to replace with sqlite if that helps.

Please add missing code, unit test and documentation (docblocks, comments)

Provided code is just an indication, change if necessary. If something is not clear, improvise.

Use Zend Framework components as you see fit. 

---------------------
**Assumptions:** 

* the currency webservice returns a LIVE value for the currency using third party API;
* to give a more realistic look in the Transaction class there is a method 
* detectCurrencyBySign($sign) that set a currency for the transaction row since the 
* sample data does not provide that detail;

---------------------

### HOW TO RUN APPLICATION?

    $ cd MerchantTransactionsReport/scripts
    $ php report.php <merchantId>

The param `merchantId` is the id that represents a merchant.

---------------------
### HOW TO RUN TESTS CASES
To run the tests go to the root of the project and type phpunit 

    $ phpunit

###The PHPUnit config
There is a config file located in the root of the project named `phpunit.xml`

###PHP Unit folder structure
`tests/unit`
This folder contains the unitary tests

 `tests/functional`
This folder contains the functional test cases
    
`tests/integration`
This folder contains the integration tests

`tests/mocks`
This folder contains the Stub classes required to do the unitary tests

##@todo
* generate the coverage test files;
* create a sqlite data source and integrate it as the data source *(when doing 
* this check if the current code is easy to extend)*;
* do the test using zend framework;

----
Developed By: [Himanshu Patel](hp4137@gmail.com)