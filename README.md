# Alt-Tree E-Commerce Website :evergreen_tree:	
Alt-Tree is a fully responsive e-commerce website designed for selling recycled and refurbished items. The project focuses on front-end development using HTML, CSS (with Bootstrap 4), and JavaScript.
It is built with PHP for server-side scripting, while the database is managed with phpMyAdmin and SQL. 

## Table of Contents :scroll:
- [Installation](#installation-hammer_and_wrench)
- [Usage](#usage-keyboard)
- [FAQ](#faq-question)

## Installation :hammer_and_wrench:
### Prerequisites
- XAMPP: Version 8.0.9+ ([includes PHP, MySQL, and phpMyAdmin](https://www.apachefriends.org/))
- PHP: Version 7.4+ (included with XAMPP)
- MySQL: Version 5.7+ (included with XAMPP)

### Steps
1. **Clone the repository**:
    ```bash
    git clone https://github.com/amadzai/alt-tree-ecommerce.git
    ```

   *or, if using SSH:*
    ```bash
    git clone git@github.com:amadzai/alt-tree-ecommerce.git
    ```

2. **Navigate to the project directory**:
    ```bash
    cd alt-tree-ecommerce
    ```

3. **Set up the database**:
- Run XAMPP, then start the Apache and MySQL services.
- Open [phpMyAdmin](http://localhost/phpmyadmin/).
- Create a new database named `alt-tree`.
- Select the newly created database, and import the provided SQL file `alt_tree.sql` into this database.

4. **Run the project**:
- Place the project folder (`alt-tree-ecommerce`) into the `htdocs` directory of your XAMPP installation folder.
- Open a browser and navigate to the [index page](http://localhost/alttreecopy/index.php) to view the project.