# ERP module

To deploy simply clone the repository into the ```Modules``` directory from the base or root [LESK](https://github.com/sroutier/laravel-enterprise-starter-kit) install, as shown below:
```
$ cd <MySuperProjectBasedOnLESK>
$ git clone https://github.com/pipegris/LESK-Module_ERP app/Modules/ERP
```

Then make sure to optimize the master module definition, from the base directory, with:
```
$ ./artisan module:optimize
```

# Dependencies
None. 

# Prerequisites
None.

# Installing and activating
Once a new module is detected by the framework, a site administrator can go to the "Modules administration" page 
and first initialize the module, then enable it for all authorized users to have access.
  
# Configuration
If your instance of [LESK](https://github.com/sroutier/laravel-enterprise-starter-kit) is already configured to 
authenticate against an Active Directory server, the Active Directory Inspector module may work right out of 
the box without any configuration required. This can be achieved because the module reverts to using LESK 
configuration settings when its own are not specified.
 
Should you want to configure the module to inspect a different server, or in order to inspect a server without using 
AD/LDAP authentication with [LESK](https://github.com/sroutier/laravel-enterprise-starter-kit), here is a table 
listing the various configuration settings used, with their LESK equivalent:

| Module                                               | LESK                                    | Default                         | Description                           |
|------------------------------------------------------|-----------------------------------------|---------------------------------|---------------------------------------|
| active_directory_inspector.account_suffix            | eloquent-ldap.account_suffix            | @company.com                    | Account suffix, used to build user ID |