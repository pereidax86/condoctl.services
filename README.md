# condoctl.services
condoctl.services web application is designed to meet the administrative needs of condominiums or subdivisions, offering a modern, simple and scalable platform. Inspired by the ease of use and the ability to scale functionalities, this tool aims to facilitate the management of users, properties, income, expenses and access in condominiums.


# SPEC-1: condoctl.services

## Background

The web application **condoctl.services** is designed to address the administrative needs of condominiums or residential complexes, offering a modern, simple, and scalable platform. Inspired by ease of use and the ability to scale functionalities, this tool aims to simplify the management of users, properties, income, expenses, and access in condominiums.

The application will be developed using **PHP** with the **Laravel** framework, employing **MySQL** as the database, and the "Creative Tim - Material Dashboard" user interface theme to provide a responsive, intuitive, and user-friendly experience. All code will adhere to the **MIT license** to ensure reuse.

This platform will have a scalable design, allowing new modules or functionalities to be added in the future without affecting existing ones, and preparing for integration with mobile applications. The interface will focus on blue tones and will be bilingual (English and Spanish).

The development prioritizes ease of use and includes key initial modules covering system configuration, users and roles, property management, income, expenses, account statements, and access.

## Requirements

The requirements for the development of **condoctl.services** are structured following the MoSCoW prioritization framework (Must Have, Should Have, Could Have, Won't Have for now):

### Must Have

- General configuration system:
  - Modify `.env` file variables from the administration interface.
- "Condominium Configuration" Module:
  - Manage general condominium data (name, address, regulations, etc.).
- Users and Roles Module:
  - Register and manage users.
  - Assign roles and specific permissions.
- "Property Management" Module:
  - Register properties linked to residents and contact details.
  - Track occupancy status of each property (occupied, unoccupied, rented).
- "Account Statements" Module:
  - View balances and movements for each property.
  - Generate basic financial reports.
- "Income" Module:
  - Record payments made by residents (maintenance fees, other concepts).
- "Expenses" Module:
  - Manage and record administrative and operational expenses for the condominium.
- "Access" Module:
  - Record visitor and supplier entries and exits by security personnel.

### Should Have

- Multilingual:
  - Interface available in English and Spanish.
- Responsive design for mobile devices and tablets.
- Basic notification system (emails) for important alerts.

### Could Have

- Future integration with mobile applications.
- Advanced reporting system with PDF or Excel exports.
- Integration with online payment systems.

### Won't Have (for now)

- Artificial intelligence for expense or income prediction.
- Integration with IoT devices (e.g., automated access control).

## Method

To address the described requirements, an architecture based on modularity and scalability principles will be designed. The main components include database structure, business logic layers, user interfaces, and additional required services. The details are outlined below:

### General Architecture

The application will follow an MVC (Model-View-Controller) model using the **Laravel** framework:

- **Model:** Represents database entities, such as users, properties, income, and expenses.
- **View:** Uses the "Creative Tim - Material Dashboard" theme to ensure a modern and responsive interface.
- **Controller:** Manages interactions between the user and the model, ensuring clear business logic.

### Database Design

The database will be structured with normalized tables to ensure efficiency. Some key tables include:

- `users`: System user records (administrators, residents, security personnel).
  - Columns: `id`, `name`, `email`, `password`, `role_id`, `created_at`, `updated_at`
- `roles`: Role and permission management.
  - Columns: `id`, `name`, `permissions`
  - Predefined roles: `sysadmin`, `admin`, `resident`, `security`, `read_only`. These roles will not be editable through the user interface.
  - Custom roles can be created by assigning permissions via checkboxes.
- `properties`: Property information.
  - Columns: `id`, `name`, `owner_id`, `tenant_name`, `tenant_contact`, `rental_contract_end`, `status`, `created_at`, `updated_at`
- `transaction_types`: Configurable expense types.
  - Columns: `id`, `name`, `description`, `created_at`, `updated_at`
- `transactions`: Income and expense records.
  - Columns: `id`, `property_id`, `type` (income/expense), `amount`, `transaction_type_id`, `description`, `date`, `created_at`, `updated_at`
- `transaction_logs`: Transaction change logs.
  - Columns: `id`, `transaction_id`, `original_data`, `change_type`, `changed_by`, `changed_at`
- `access_logs`: Visitor and supplier access records.
  - Columns: `id`, `visitor_name`, `property_id`, `date`, `time`, `created_at`, `updated_at`

### Module Components

1. **General Configuration:**
   - Interface for modifying `.env` file variables.
   - Validations to prevent errors when modifying critical settings.

2. **Condominium Configuration:**
   - Form to register and edit condominium data.
   - Options to upload regulations and important documents.

3. **Users and Roles:**
   - CRUD (Create, Read, Update, Delete) for users.
   - System to assign roles with specific permissions via checkboxes.
   - Predefined, non-editable roles: `sysadmin`, `admin`, `resident`, `security`, `read_only`.

4. **Property Management:**
   - Register properties as complete records.
   - Include owner details, contact information, occupancy status (occupied, unoccupied, rented).
   - Manage tenant information (name, contact, rental contract duration).

5. **Account Statements:**
   - Detailed view of movements for each property.
   - Options to generate basic PDF reports.

6. **Income and Expenses:**
   - Separate forms for recording payments and expenses.
   - Lists with filters by date, property, and transaction type.
   - Expense types managed in a separate module.
   - Every transaction change logged in the `transaction_logs` table, storing original data, change type, the user who made the change, and the date.

7. **Access:**
   - Record entries and exits via a simple form.
   - Historical lists with search options.

### Component Diagram



## Implementation

To implement the **condoctl.services** system, the following stages are proposed:

### Stage 1: Development Environment Setup

1. Configure the development environment with **Laravel** and **MySQL**.
2. Integrate the "Creative Tim - Material Dashboard" theme.
3. Set up version control using **Git**.

### Stage 2: Database Design

1. Create the tables defined in the database design section.
2. Configure relationships between tables (e.g., properties and users, transactions and transaction types).

### Stage 3: Initial Module Implementation

1. **General Configuration:**
   - Create a form to modify `.env` file variables.
   - Implement validations and basic tests.

2. **Users and Roles:**
   - Implement CRUD for users and roles.
   - Set up predefined roles and functionality to assign permissions.

3. **Property Management:**
   - Create views and forms to manage properties.
   - Include support for tenant data and occupancy status.

### Stage 4: Transactions and Access Implementation

1. **Income and Expenses:**
   - Develop forms and views to record transactions.
   - Implement expense type management in a separate module.
   - Add functionality to log changes in the `transaction_logs` table.

2. **Access:**
   - Implement visitor entry and exit recording.
   - Create historical lists with filtering options.

### Stage 5: Testing and Adjustments

1. Conduct functional tests for all modules.
2. Fix bugs found during testing.
3. Optimize database query performance.

### Stage 6: Deployment

1. Configure the production environment.
2. Migrate the database to the production server.
3. Publish the application on a domain accessible to users.

### Stage 7: Support and Maintenance

1. Implement an error-tracking system.
2. Perform periodic updates to improve functionality and security.

## Milestones

### Milestone 1: Environment Setup
- Prepare the development environment with Laravel and MySQL.
- Set up version control (Git).

### Milestone 2: Database
- Create tables and relationships in MySQL.
- Validate the integrity of entity relationships.

### Milestone 3: Basic Modules
- Implement the general configuration module.
- Create the CRUD for users and roles.
- Design and develop property management.

### Milestone 4: Transactions and Access
- Finalize income, expense, and access modules.
- Add transaction log functionality.

### Milestone 5: Testing and Optimization
- Conduct comprehensive testing for all modules.
- Optimize queries and overall performance.

### Milestone 6: Deployment and Delivery
- Configure the production environment.
- Deploy the application and conduct final tests.

### Milestone 7: Maintenance
- Implement error-tracking systems.
- Provide initial support and periodic updates.

