# SmallBusinessManager

Manage your Business Needs on a simple WebSite. May Contain REST for Admins and Customers!

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
- [ ] Module Customers

## 2 (Beta) YYYY-MM-DD:
- [ ] SubModule Projects
- [ ] Module Accounting
- [ ] Module Products
- [ ] Module Contracts
- [ ] SubModule CostEstimating
- [ ] SubModule Billing
- [ ] SubModule SaleContract
- [ ] Export to PDF

## 3 (Pre-Release) YYYY-MM-DD:
- [ ] Styling
- [ ] Module UserManagement
- [ ] Module CompanyManagement
- [ ] Module Tickets
- [ ] Module Concepting
- [ ] Module-REST Combined as global REST
- [ ] Graphing using pGraph or jGraph

## 4 (Release) YYYY-MM-DD:
- [ ] Customer REST Linking (Create Access (pwd, email)

## 5 (v2) YYYY-MM-DD:
- [ ] Connect to Google Drive (Save Data, Open Data)
- [ ] Login via Google

# Changelog

- + 2013-12-19: D: Filled Readme.md
- % 2014-01-08: D: Finished Module Definition

# Modules

## Basic Framework
The Basic Framework allows for Loading of the Module via JavaScript.
It loads all Modules into the navigation and includes the javascript-files.
It also Displays the Dashboard.

Table:
t_modules: ID(P) | NAME | NAV_NAME | FOLDER | VERSION

## Module CompanyManagement
For SBM being a WebApp, multiple companies may use it.
So there will be a Table for companies and every DATA-Table will hold a Link to the company_id.

Table:
t_companies: ID(P) | NAME | LOGO | HOMEPAGE | MAIL | MAIN_USER

Forms:
Edit my Company Data.

A Company will be created if a User registers for no company.

## Module UserManagement
Everyone working with the WebApp must login as a User or register.
On registering you may create a new company or sign up to one. Then the main_user must accept you.

Table:
t_user: COMPANY_ID | ID(P) | NAME | VORNAME | LOGIN | MAIL | PWD

Forms:
Edit my Data.
Accept User for Company.
Delete Me.
Login/Logout.

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
- password

Table:
t_customers: COMPANY_ID | ID(P) | NAME | STREET_NUMBER | PLZ | CITY | MAIL | PHONE | CONTACT | PWD(md5)

Forms:
Table with Data and Buttons for Details, Edit, New, Delete
A Password can be created and will be sent to the customer, allowing him to checkup on his Data.

Dashboard:
Number of Customers


### SubModule Projects
Every Customer has at least one Project, the one making him a customer.
But the same customer may have many Projects.
This Module deals with this Problem.

Table:
t_projects: COMPANY_ID | ID(P) | NAME | DESCRIPTION | DUE_DATE | STATE
customer_has_project: CUSTOMER_ID | PROJECT_ID(P)

Forms:
Table with Projects for Customer CRUD

Dashboard:
Open Projects for all Customers (State not Closed)

## Module Accounting
This Module enables us to track expenses and income.
Also there is exporting for taxes, etc...

Table:
t_accounting: COMPANY_ID | ID(P) | BOOK_DATE | VALUE | DESCRIPTION

Forms:
CRUD on Table

Dashboard:
Actual Money

## Module Products
This Module has the Products the Company can offer.
They are sorted in groups.

Table:
t_products: COMPANY_ID | ID(P) | NAME | COST | COST_TYPE | DESCRIPTION | GROUP_ID
t_products_groups: COMPANY_ID | ID(P) | NAME | DESCRIPTION

Forms:
CRUD on table
CRUD on groups

Dashboard:
Number of Products and Groups "# Products in # Groups"

## Module Contracts
This Module is the most complex one yet.
It allows to generate contracts.
Standing Alone, only generic contracts like support or Terms & Conditions are possible.
Everything else will be handled by specialicied submodules.

Table:
t_contracts: COMPANY_ID | ID(P) | NAME | DESCRIPTION
t_contract_clauses : COMPANY_ID | ID(P) | HEADLINE | DESCRIPTION | ORDER | CONTRACT_ID

Forms:
CRUD all Contracts
CRUD + Ordering on single Contract

Dashboard:
Number of Clauses in Contracts

### SubModule CostEstimating
This Submodule allows to create a costestimate for a project of a customer, using the products you defined.

Table:
t_costestimate: COMPANY_ID | ID(P) | PROJECT_ID | DESCRIPTION | DISCOUNT
t_costestimate_items: COMPANY_ID | ID(P) | PRODUCT_ID | AMOUNT

Forms:
CRUD on costestimate
CRUD on items in costestimate

Dashboard:
Average Worth of Costestimate

### SubModule Billing
This Module allows to create a Bill to send to a customer.
It also Includes creating a bill from a costestimate.

Table:
t_bills: COMPANY_ID | ID(P) | PROJECT_ID | DESCRIPTION | DISCOUNT
t_bills_items: COMPANY_ID | ID(P) | PRODUCT_ID | AMOUNT

Forms:
CRUD on bills
CRUD on items in bills
Create Bill from costestimate

Dashboard:
Average Worth of bills

### SubModule SaleContract
This Module allows to create a SalesContract for a Customer-Project.
You Just Define deadlines and link a costestimate

Table:
t_salescontracts: COMPANY_ID | ID(P) | PROJECT_ID | DESCRIPTION | COSTESTIMATE_ID
t_salescontracts_deadlines: COMPANY_ID | ID(P) | NAME | DEADLINE

Forms:
CRUD on salescontract + Adding Deadlines
CRUD on deadlines per salescontract

DashBoard:
Numer of SalesContracts

## Module Tickets
A Module for the Customers to create Tickets in case of Errors or Bugs in a Project.
The Admin can add Information or send it to another user of the company.

Table:
t_tickets: COMPANY_ID | ID(P) | TITLE | DESCRIPTION | STATE | PROJECT_ID | WORKER_ID
t_tickets_information: COMPANY_ID | ID(P) | TITLE | DESCRIPTION | SENDER_ID | INFO_TYPE

Forms:
Customer create Ticket
Add Information to Ticket
Change Ticket State
Customer View Ticket
See all Tickets

Dashboard:
Open Tickets

## Module Concepting
This is a specialiced and custom module, allowing for creating concepts for websites.
You May Create a general Description, Designs, Navigation, Social Media and technical Parts.

Table:

Forms:

Dashboard:

# REST
The REST is modular.
To ensure only a valid user may see the data of his company only it uses HTTP Authentification
Based on the login, the company_id will be used to filter results
Base Object is URL/REST/
After that, every module is an object, e.g. URL/REST/bills
The objects are now GET-Only.

Customers that have a password may also login and see objects filtered to them.
e.g. URL/REST/tickets/list.html

"list" will be supported by every module and shows a list of object_ids

Returntypes are:
- html
- xml
- json


# Export
The Information is visible Online, but the admin may wnat to export information, e.g. to give papers for taxes.
Different Options will be avaiable

## PDF
Print Information as a PDF, styled with the companies logo and title.
Every Module may present different exports.

## Google Drive
It is planned to allow exporting information to Google Drive as .sbm to take it away.
.sbm will be a xml-format and allows for backing up or Offline-Usage of Data.
A Re-Import should also be there

# Developers
- D: @DSigmund

# License
GNU GPL v2 (see LICENSE)
