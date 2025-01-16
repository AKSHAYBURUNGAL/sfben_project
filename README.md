# SF BEN Project

## Overview
SF BEN is a web platform designed to provide articles, news updates, and features tailored for Salesforce professionals and enthusiasts. This project demonstrates a simple implementation of a backend API with MySQL integration and a frontend UI fetching data dynamically.

---

## Features
- Dynamic article fetching from the MySQL database.
- Backend API built with PHP for serving JSON data.
- Responsive and user-friendly frontend interface styled with CSS.
- Navigation bar with multiple sections for Events, Careers, AppAssor, Salesforce, and News Articles by Role.
- Demonstration article preloaded into the database for testing.

---

## Technologies Used

### Frontend:
- HTML5
- CSS3
- JavaScript

### Backend:
- PHP
- MySQL

### Tools:
- Apache Web Server
- phpMyAdmin
- MySQL Database

---

## Installation and Setup
1. Clone this repository to your local machine:
   ```bash
   git clone <repository-url>
   ```

2. Move the project to the web server directory (e.g., `/var/www/html/`):
   ```bash
   sudo mv sfben_project /var/www/html/
   ```

3. Import the database:
   ```bash
   cd /var/www/html/sfben_project
   mysql -u root -p sfben_db < db.sql
   ```

4. Set up the Apache server and PHP:
   ```bash
   sudo apt update
   sudo apt install apache2 php libapache2-mod-php php-mysqli
   sudo systemctl restart apache2
   ```

5. Test the backend by visiting:
   ```
   http://localhost/sfben_project/php/backend.php
   ```
   Ensure you see the JSON response with the demo articles.

6. Open the frontend in your browser:
   ```
   http://localhost/sfben_project/index.html
   ```

---

## Demo of the UI
![UI Demo](images/ui_screenshot.png)

### Description:
- The UI contains a navigation bar with buttons like:
  - **Events**: Upcoming events related to Salesforce.
  - **Career**: Career opportunities and guidance.
  - **AppAssor**: Featured applications and tools.
  - **Salesforce**: Core Salesforce updates.
  - **News Article by Role**: Curated articles for different Salesforce roles.

- Below the navigation bar, articles are displayed dynamically fetched from the backend.

---

## Project Structure
```
SF BEN Project
├── css
│   └── styles.css  # Contains the styles for the UI
├── images
│   └── logo.png    # Logo and other assets
│   └── ui_screenshot.png # Screenshot of the UI
├── js
│   └── script.js   # Handles frontend functionality and API calls
├── php
│   └── backend.php # Backend API for serving articles
├── db.sql          # MySQL dump for the database
├── index.html      # Frontend of the project
└── README.md       # Documentation for the project
```

---

## Troubleshooting
1. **JSON Not Displayed on Backend Endpoint**:
   - Check your MySQL credentials in `backend.php`.
   - Verify the `mysqli` extension is enabled in PHP.

2. **Apache Server Issues**:
   - Ensure Apache is running: `sudo systemctl status apache2`
   - Restart the server: `sudo systemctl restart apache2`

3. **Frontend Not Fetching Articles**:
   - Check the API URL in `script.js`.
   - Open the browser console for errors.

---

## Future Enhancements
- Add user authentication.
- Implement a commenting feature for articles.
- Create a search bar for filtering articles by keywords.
- Add admin functionality for managing articles.

---

## Contributing
Feel free to submit issues and enhancement requests. Pull requests are welcome!

---

## License
This project is open-source and available under the [MIT License](LICENSE).

