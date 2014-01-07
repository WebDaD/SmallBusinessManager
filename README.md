# SmallBusinessManager

Manage your Business Needs on a simple WebSite. May Contain REST

# Legende
- + = Added
- - = Removed
- % = Changed (eg bugfix)
- ? = To be discussed

# MileStones

## 1 (Alpha) YYYY-MM-DD:
- [ ] Basic Framework
- [ ] UserManagement (Database Only)
- [ ] CompanyManagenent (Database Only)
- [ ] ModuleManagement (Database Only)
- [ ] Module Customers

## 2 (Beta) YYYY-MM-DD:
- [ ] SubModule Projects
- [ ] Module Accounting
- [ ] Module Products
- [ ] Module Contracts
- [ ] SubModule Billing
- [ ] SubModule CostEstimating
- [ ] Export to PDF

## 3 (Pre-Release) YYYY-MM-DD:
- [ ] Styling
- [ ] Module UserManagement
- [ ] Module ModuleManagement
- [ ] Module CompanyManagement
- [ ] Module Tickets
- [ ] Module Concepting
- [ ] Module-REST Combined as global REST
- [ ] Graphing using pGraph or jGraph

## 4 (Release) YYYY-MM-DD:
- [ ] Connect to Google Drive (Save Data, Open Data)
- [ ] Customer REST Linking (Create Access (pwd, email)

# Done

- + 2013-12-19: D: Filled Readme.md

# ToDo

## Basic Framework
- Fill

## Module CompanyManagement
For SBM being a WebApp, multiple companies may use it.
So there will be a Table for companies and every DATA-Table will hold a Link to the company_id.

Table:
t_companies: ID | NAME | LOGO | HOMEPAGE | MAIL | MAIN_USER

Forms:
None.

A Company will be created if a User registers for no company.

## Module UserManagement
- Fill

## Module ModuleManagement
- Fill

## Module Customers
This Module shows customer data and allows for editing, inserting and deleting.
Customer Data is:
- id
- name
- street & number
- plz
- city
- mail
- phone
- contact 

Table:
t_customers: COMPANY_ID(P) | ID(P) | NAME | STREET_NUMBER | PLZ | CITY | MAIL | PHONE | CONTACT

Forms:
Table with Data and Buttons for Details, Edit, New, Delete

Dashboard:
Number of Customers


### SubModule Projects
- Basic Dashboard DEF
- Table DEF

## Module Accounting
- Basic Dashboard DEF
- Table DEF

## Module Products
- Basic Dashboard DEF
- Table DEF

## Module Contracts
- Basic Dashboard DEF
- Table DEF

### SubModule Billing
- Basic Dashboard DEF
- Table DEF

### SubModule CostEstimating
- Basic Dashboard DEF
- Table DEF

## Module Tickets
- Basic Dashboard DEF
- Table DEF

## Module Concepting
- Basic Dashboard DEF
- Table DEF

# REST
information about REST

## Admin REST

# Export
Export Options

## Drive
To Drive as .sbm

## PDF
Print Information 

# Developers
- D: @DSigmund

# License
GNU GPL v2 (see LICENSE)
