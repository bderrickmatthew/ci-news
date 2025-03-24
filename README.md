# CodeIgniter 4 News Application

A dynamic news management system built with CodeIgniter 4, demonstrating CRUD operations, form validation, and database integration. This project showcases modern PHP development practices using the CodeIgniter 4 framework.

## 🚀 Features

- **Article Management**
  - Create new articles with title and body content
  - Read articles with clean URL slugs
  - Update existing articles with automatic slug generation
  - Delete articles with confirmation
- **Data Validation**
  - Server-side validation for all form inputs
  - Input sanitization and XSS protection
  - Customized validation rules for titles and content
- **User Interface**
  - Clean and responsive design
  - Flash messages for user feedback
  - Intuitive navigation
  - Article listing and individual views

## 🛠️ Technologies Used

- PHP 8.1
- CodeIgniter 4.6.0
- MySQL/MariaDB
- Composer for dependency management
- PHPUnit for testing

## 💻 Code Structure

```plaintext
app/
├── Controllers/
│   └── [News.php](http://_vscodecontentref_/1)          # Handles CRUD operations for news articles
├── Models/
│   └── NewsModel.php     # Database interactions for news articles
├── Views/
│   ├── news/
│   │   ├── create.php    # New article form
│   │   ├── [edit.php](http://_vscodecontentref_/2)      # Edit article form
│   │   ├── [index.php](http://_vscodecontentref_/3)     # List all articles
│   │   └── view.php      # Single article view
│   └── templates/        # Layout templates
└── Config/
    └── Routes.php        # Application routing
```

## 🚀 Getting Started

1. Clone the repository
2. Install dependencies: `composer install`
3. Copy `env` to `.env` and configure your database
4. Run migrations: `php spark migrate`
5. Start the development server: `php spark serve`

## 📚 Learning Outcomes

- Implemented secure user input handling and validation
- Created maintainable and reusable code structures
- Integrated database operations with proper error handling
- Applied MVC architectural patterns effectively
- Implemented proper security measures against common web vulnerabilities

## 🔍 Future Enhancements

- User authentication and authorization
- API endpoints for headless CMS functionality
- Image upload and management
- Category and tag management
- Search functionality
- Admin dashboard

## 📫 Contact

bderrickmatthew - [bderrickmatthew@gmail.com](mailto:bderrickmatthew@gmail.com)
Portfolio - [Coming Soon](https://yourportfolio.com)
LinkedIn - [linkedin.com/in/bderrickmatthew](https://linkedin.com/in/bderrickmatthew)
