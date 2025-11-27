# ✈️ Travel Website – Tour Booking System

This project is a responsive **Travel & Tour Booking Website** built using HTML, CSS, JavaScript, PHP and MySQL.  
Users can browse travel packages and submit a booking form, and the booking details are stored in a MySQL database.

---

## 🧭 Pages in the Website

- **home.php** – Landing page with hero section, popular destinations and call-to-action buttons  
- **about.php** – Information about the travel agency  
- **package.php** – List of travel packages / tours  
- **book.php** – Booking form page for users  
- **book_form.php** – PHP script that saves booking details into database  

---

## ✨ Features

- Attractive, travel-themed UI  
- Navigation bar to switch between pages  
- Travel/tour packages showcased beautifully  
- Booking form with details like name, email, phone, location and dates  
- Form data stored in MySQL using PHP backend  
- Fully responsive layout  
- Project can run on local server using XAMPP  

---

## 🛠 Technologies Used

| Technology  | Purpose |
|------------|---------|
| **HTML5**  | Structure of web pages |
| **CSS3**   | Styling and responsive design |
| **JavaScript** | Basic interactivity |
| **PHP**    | Backend and form handling |
| **MySQL**  | Storing booking records |
| **XAMPP**  | Local development environment |

---

## 📁 Project Structure

```text
Travel-Website/
│
├── css/                # Styling files
├── images/             # Image assets
├── js/                 # JavaScript files
├── home.php            # Home page
├── about.php           # About page
├── package.php         # Packages page
├── book.php            # Booking form page
└── book_form.php       # PHP backend file to insert data into DB
```

---

## 🗄 Database Design

**Database Name:** `book_db`  
**Table Name:** `book_form`

```sql
CREATE TABLE `book_form` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(50) NOT NULL,
  `address` VARCHAR(255) NOT NULL,
  `location` VARCHAR(100) NOT NULL,
  `guests` INT(10) NOT NULL,
  `arrivals` DATE NOT NULL,
  `leaving` DATE NOT NULL,
  PRIMARY KEY (`id`)
);
```

---

## ⚙️ How to Run the Project (Using XAMPP)

1. Install & open **XAMPP**
2. Start **Apache** and **MySQL**
3. Copy the project folder into:

```
C:\xampp\htdocs\
```

4. Open **phpMyAdmin** and create a database named:

```
book_db
```

5. Create the table `book_form` using the SQL above.
6. Ensure the connection inside `book_form.php` is:

```php
$connection = mysqli_connect('localhost', 'root', '', 'book_db');
```

7. Run the project in browser:

```
http://localhost/Travel-Website/home.php
```

---

## 🧠 What I Learned

- Form handling using PHP and POST method  
- Connecting and inserting data into MySQL database  
- Designing responsive multi-page websites  
- Hosting local PHP projects using XAMPP  
- Front-end and back-end integration basics  

---

## 👩‍💻 Author

Developed by **Sanika Tole**

