<div id="top"></div>

[![MIT License][license-shield]][license-url]
[![Issues][issues-shield]][issues-url]
[![LinkedIn][linkedin-shield]][linkedin-url]



<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/SamuPert/Progetto-Tecnologie-web">
    <img src="public/img/logoSito.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">Music Shop</h3>

  <p align="center">
    Awesome multi-user web app for managing and displaying the items of a music store.
    <br />
    <br />
    <a href="https://github.com/SamuPert/Progetto-Tecnologie-web/blob/master/TecWeb%20Mockup.pdf">View mockups</a>
    ·
    <a href="https://github.com/SamuPert/Progetto-Tecnologie-web/blob/master/public/Relazione_gruppo_15.pdf">View report</a>
    ·
    <a href="https://github.com/SamuPert/Progetto-Tecnologie-web/issues">Report Bug</a>
    ·
    <a href="https://github.com/SamuPert/Progetto-Tecnologie-web/issues">Request Feature</a>
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li><a href="#introduction">Introduction</a></li>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>



<!-- Introduction -->
## Introduction

Since 1991 the web has been revolutionized.
The technologies and protocols underlying the web have been updated, but the winning idea that has made it stronger over the years is that of being able to expose services on multiple platforms (without changing a line of code).

In this regard we have decided to develop a project, carried out during the "Web technologies" course. 


<!-- ABOUT THE PROJECT -->
## About the project

[![Catalog screenshot][product-screenshot]](https://github.com/SamuPert/Progetto-Tecnologie-web)

The purpose of the development of this project is to provide customers with a website that allows them to consult an online catalog of the products sold by "Music Shop" with the respective prices and characteristics of the respective products.

The site provides search functions based on product categories, their respective sub-categories, price or via a keyword.

You can read more about the project in the <a href="https://github.com/SamuPert/Progetto-Tecnologie-web/blob/master/public/Relazione_gruppo_15.pdf">report</a>.

<p align="right">(<a href="#top">back to top</a>)</p>



### Built With

* [Laravel](https://laravel.com/)
* [Laravel Mix](https://laravel-mix.com/)
* [Bootstrap](https://getbootstrap.com/docs)
* [JQuery](https://jquery.com/)
* [PhpStorm IDE](https://www.jetbrains.com/phpstorm/)

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running follow these simple steps.

### Prerequisites

Software that you need to use to get the app built and running. Follow the links for the relative guide.

* **npm**: <a href="https://docs.npmjs.com/cli/v7/configuring-npm/install">Install npm</a>
* **PHP Composer**: <a href="https://getcomposer.org/">Install composer</a>
* **Running MySql Server**: <a href="https://dev.mysql.com/downloads/installer/">Install MySql Server</a>

### Installation

1. Clone the repo
   ```sh
    git clone https://github.com/SamuPert/Progetto-Tecnologie-web.git ProgettoTecnologieWeb
    cd ProgettoTecnologieWeb
   ```
2. Copy environment file
    ```sh
    cp .env.example .env
    ```
3. Edit .env file properties:
    - Edit *DB_DATABASE* value. It must match the database name you want to use.
    - Edit *DB_USERNAME* value. It must match the MySql user that you want to use.
    - Edit *DB_PASSWORD* value. It must match the MySql plaintext password that MySql user uses to connect to database.
    - Edit *DB_HOST* value. It must match the MySql instance address.
4. Initialize Laravel environment
    ```sh
    php artisan key:generate
    php artisan migrate
    ```
5. Compile scss and js files.
    ```sh
    npm run prod
    ```
    
5-bis. (Optional) Seed database with pre-defined content.

```sh
php artisan db:seed
```
    
Default users credentials are:

- **Super Admin**:
    - username: **adminadmin**
    - password: **qbCltB0u**
- **Staff Admin**:
    - username: **staffstaff**
    - password: **qbCltB0u**
- **Staff Admin**:
    - username: **useruser**
    - password: **qbCltB0u**

6. Serve the web application
    ```sh
    php artisan serve
    ```

7. Browse web application:
    ```
    http://localhost:8000/
    ```
    

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- LICENSE -->
## License

Distributed under the MIT License. See <a href="https://github.com/SamuPert/Progetto-Tecnologie-web/blob/master/LICENSE.md">`LICENSE.md`</a> for more information.

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- CONTACT -->
## Contact

Samuele Perticarari - [Telegram](https://t.me/SamuPert) - samuele.perticarari@gmail.com - [LinkedIn](https://www.linkedin.com/in/samuele-perticarari/)

Project Link: [https://github.com/SamuPert/Progetto-Tecnologie-web](https://github.com/SamuPert/Progetto-Tecnologie-web)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://shields.io/ -->
[issues-shield]: https://img.shields.io/github/issues/ClaudioSirocchi/Progetto-Tecnologie-web
[issues-url]: https://github.com/SamuPert/Progetto-Tecnologie-web/issues
[license-shield]: https://img.shields.io/github/license/ClaudioSirocchi/Progetto-Tecnologie-web
[license-url]: https://github.com/SamuPert/Progetto-Tecnologie-web/blob/master/LICENSE.md
[linkedin-shield]: https://img.shields.io/badge/LinkedIn-SamuelePerticarari-blue
[linkedin-url]: https://www.linkedin.com/in/samuele-perticarari/
[product-screenshot]: screenshots/catalogo.png
