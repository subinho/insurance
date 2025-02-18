# Insurance App

## Project Overview

The **Insurance Project** is a web application designed to manage client insurance policies efficiently. It allows users to register, log in, and create new insurance policies. The system supports both life and health insurance types and provides an account overview for users to view their existing policies.

## Images of application

<p>
    <img src="https://github.com/user-attachments/assets/22433a57-c07d-442a-9093-9142aa1bdcdc" alt="Hero" width="30%" />
    <img src="https://github.com/user-attachments/assets/c0a8270f-7fdc-4036-9bb7-0bce4d9a1acc" alt="Category" width="30%" />
    <img src="https://github.com/user-attachments/assets/42ac725a-8f19-4d2c-9036-89316a051422" alt="Single Product" width="30%" />
</p>

<p>
    <img src="https://github.com/user-attachments/assets/c96a0fc7-0dcf-496a-8b60-b23e9efe7850" alt="Admin add category" width="30%" />
    <img src="https://github.com/user-attachments/assets/d625fee4-2c4f-4899-8225-0ed32571dd0f" alt="Admin add product" width="30%" />
        <img src="https://github.com/user-attachments/assets/c221ac60-4ebc-4bae-b663-82715f46470c" alt="Admin dashboard" width="30%" />

</p>
<p>
    <img src="https://github.com/user-attachments/assets/fc8ae34f-d000-427e-9c23-e09ec757c67c" alt="Placed order" width="30%" />
        <img src="https://github.com/user-attachments/assets/cae108fc-af31-4dc5-9c4e-5840188df104" alt="Admin orders" width="30%" />
</p>

## Features

-   **User Registration and Authentication**: Users can create accounts, log in, and manage their profiles.
-   **Client Profile Creation**: Authenticated users can create new client profiles for different types of insurances (Life or Health).
-   **Policy Type Selection**: Users can choose between Life or Health insurance when creating a policy.
-   **Account Information Display**: Users can view all their existing policies from the account dashboard.

## Technologies Used

-   **Backend**:

    -   Laravel (PHP Framework) for building the server-side logic.
    -   MySQL for database management.

-   **Frontend**:
    -   HTML/CSS for structuring and styling the web pages.
    -   Bootstrap for responsive design components.
    -   Blade templates for dynamic content rendering.

## Installation

To set up the project locally:

1. Clone the repository:

```bash
  git clone https://github.com/subinho/insurance.git
```

2. Install dependencies:

```bash
  composer install
```

3. Set up your `.env` file:

```bash
    cp .env.example .env
    php artisan key:generate
```

4. Run migrations:

```bash
    php artisan migrate
```

5. Start the local development server:

```bash
    npm run dev
    php artisan serve
```

6. Access the application at `http://127.0.0.1:8000`.

## Usage

-   Register as a new user by navigating to /register.
-   Once logged in, navigate to /client/create to create a new client profile with an associated policy type (Life     or Health).
-   View all created policies from the account dashboard accessible via /account.

## Reference

Resources used in this project

-   [Bootstrap icons](https://icons.getbootstrap.com/) - Icons used in the project.
-   [Pexels](https://www.pexels.com/) - Images used in the project.
-   [Pixabay](https://pixabay.com/cs/) - Image used in the project