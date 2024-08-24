# PHP Projects

This repository contains two separate PHP projects: `News` and `Chat`. Both projects require XAMPP to run. Follow the steps below to set up and run these projects on your local machine.

## Prerequisites

- [XAMPP](https://www.apachefriends.org/index.html) installed on your machine.

## Setup Instructions

### 1. Start XAMPP
- Open the XAMPP Control Panel.
- Start **Apache** and **MySQL** services.

### 2. Create Databases

- Open **phpMyAdmin** by navigating to [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/).
- Create the following databases:
  - `chat`
  - `news`

### 3. Import SQL Files

For each project, import the corresponding SQL file to set up the database schema:

- **Chat Project**:
  1. Select the `chat` database in phpMyAdmin.
  2. Click on the **Import** tab.
  3. Choose the SQL file available in the `chat` folder.
  4. Click **Go** to import the database schema and data.

- **News Project**:
  1. Select the `news` database in phpMyAdmin.
  2. Click on the **Import** tab.
  3. Choose the SQL file available in the `news` folder.
  4. Click **Go** to import the database schema and data.

### 4. Access the Projects

- **Chat Project**: Navigate to [http://localhost/chat](http://localhost/chat).
- **News Project**: Navigate to [http://localhost/news](http://localhost/news).


### Notes

- Ensure that the databases `chat` and `news` are correctly created and populated by the SQL files before attempting to access the projects.
- The projects assume the use of the default MySQL user (`root`) without a password. If your MySQL configuration differs, you may need to update the database connection settings in the respective PHP files.

---

Feel free to reach out if you encounter any issues or have any questions regarding the setup!


