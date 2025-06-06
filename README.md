# 📚 Laravel Book Dashboard

A dynamic Laravel-powered dashboard for browsing and analyzing book data with user-submitted reviews. This project demonstrates advanced Eloquent usage, query scopes, and a responsive UI for filtering content from a relational MySQL database.

## ✨ Features

- 📖 **Books & Reviews**: Two related tables — `books` and `reviews` — with a one-to-many relationship.
- 🔍 **Dynamic Filtering**:
  - Latest books
  - Most popular books (by number of reviews)
  - Highest rated books (based on average ratings)
  - Time-based filters (e.g., last month, last 6 months)
- 🧠 **Scoped Queries**: Custom Eloquent query scopes like `popularLastMonth()`, `highestRatedLast6Months()` for reusable, expressive database queries.
- ⚡ **Optimized Queries**: Uses subqueries via `withCount` and `withAvg` to avoid N+1 problems and keep performance high.

## 🧠 Tech Stack

- **Framework**: Laravel
- **Database**: MySQL
- **Frontend**: Blade (with optional Bootstrap/Tailwind CSS)
- **Languages**: PHP, HTML, CSS

## 🗃️ Database Schema

### `books` Table

| Column       | Type                | Description             |
|--------------|---------------------|-------------------------|
| `id`         | `BIGINT UNSIGNED`   | Primary key             |
| `title`      | `VARCHAR(255)`      | Book title              |
| `author`     | `VARCHAR(255)`      | Book author             |
| `created_at` | `TIMESTAMP NULL`    | Created timestamp       |
| `updated_at` | `TIMESTAMP NULL`    | Updated timestamp       |

### `reviews` Table

| Column       | Type                   | Description               |
|--------------|------------------------|---------------------------|
| `id`         | `BIGINT UNSIGNED`      | Primary key               |
| `review`     | `TEXT`                 | Full review text          |
| `book_id`    | `BIGINT UNSIGNED`      | Foreign key to `books.id` |
| `rating`     | `TINYINT(3) UNSIGNED`  | Rating (1–5)              |
| `created_at` | `TIMESTAMP NULL`       | Created timestamp         |
| `updated_at` | `TIMESTAMP NULL`       | Updated timestamp         |

## 🔧 Installation

```bash
git clone https://github.com/Andreeoak/Book-Reviews.git
cd Library-reviews
composer install
docker compose up
php artisan migrate --seed # Populate a database
php artisan serve
