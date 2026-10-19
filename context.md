PROJECT: HAMRO POSHAK

Project Goal

Build a complete, beginner-friendly, web-based e-commerce application for Nepali traditional dresses and jewelry.

Hamro Poshak is a single-seller online store, not a multi-vendor marketplace. One administrator manages all products, stock, and customer orders.

Customers can browse traditional clothing and jewelry, explore cultural information, find matching jewelry suggestions, add items to a cart, place orders, and view their order history.

Technology Stack

- Frontend: HTML5, CSS3, JavaScript
- Backend: PHP
- Database: MySQL
- Local server: XAMPP or WampServer
- Database management: phpMyAdmin
- Code editor: Visual Studio Code

Use plain PHP without Laravel, React, Vue, Node.js, or other frameworks.

Main Requirements

1. Attractive, responsive customer website.
2. Product catalog for traditional dresses and jewelry.
3. Search and filtering by category, price, occasion, and availability.
4. Product details, images, prices, descriptions, and cultural information.
5. Matching jewelry suggestions for selected dresses.
6. Customer registration, login, and logout.
7. Shopping cart and checkout.
8. Order placement and order history.
9. Order status tracking within the website.
10. Secure admin login and dashboard.
11. Admin product, category, inventory, and order management.
12. Basic sales and order summaries.

Project Rules

- Build the project in small phases, following my separate prompts.
- Do not generate the entire application in one response.
- Before changing existing code, inspect the current project files and understand the existing structure.
- Reuse existing files and components wherever possible.
- Do not remove or rewrite working functionality without a clear reason.
- Use simple, readable code suitable for a beginner IT student.
- Explain the purpose of important files and functions.
- Keep the project structure organized and consistent.
- Use PHP prepared statements for database queries.
- Use password_hash() and password_verify() for passwords.
- Validate input on both the client and server.
- Protect admin pages and customer-specific pages using sessions and authorization checks.
- Escape displayed user input to help prevent cross-site scripting.
- Add CSRF protection to important state-changing forms.
- Do not store passwords in plain text.
- Do not hardcode database credentials throughout the application. Use one central configuration file.
- Never trust product prices, totals, stock values, or user roles submitted by the browser.
- Use database transactions where appropriate when creating orders and updating stock.
- Do not implement an online payment gateway, custom tailoring, international shipping, customer reviews, or multi-seller functionality in this version.
- Use cash on delivery or another clearly documented manual payment option for the initial version.
- Do not invent real customer data or claim that sample data represents real sellers.
- Use realistic sample products clearly identified as demonstration data.
- Do not leave important buttons nonfunctional or use fake success messages.
- Never claim a feature is complete until it has been tested.

Development Workflow

For each phase:

1. Inspect the current project and identify what already exists.
2. State the goal and implementation plan.
3. List the files to create or modify.
4. Implement only the requested phase.
5. Explain any database changes and provide SQL scripts when needed.
6. Run available checks or provide precise manual testing instructions.
7. Fix errors before moving forward.
8. Summarize completed features, known issues, and the next steps.

If a requirement is unclear, ask a focused question before making a major architectural decision.

The application must run locally through XAMPP or WampServer and be understandable enough for students to maintain, demonstrate, and explain.

A phase is complete only when its acceptance criteria pass. Wait for my approval before starting the next phase.
