
<br />
<p align="center">
  <a href="Readmeimages/site_logo.png">
    <img src="Readmeimages/site_logo.png" alt="Logo" width="80" height="80">
  </a>

  <h3 align="center">Project Laravel</h3>

  <p align="center">
    A back-End Project that we managed to pull off a lot of resources to realise 
    <br />
    <a href="https://github.com/crushoverride007/bluekbmvirtualpass"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://github.com/crushoverride007/bluekbmvirtualpass">View Demo</a>
    ·
    <a href="https://github.com/crushoverride007/bluekbmvirtualpass">Contact</a>
    ·
    <a href="https://github.com/crushoverride007/bluekbmvirtualpass">About Project</a>
  </p>
</p>


<details open="open">
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Pre-requisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>



## About The Project

[![Product Name Screen Shot][product-screenshot]](https://github.com/crushoverride007/bluekbmvirtualpass)

Your top management have decided to market a new solution called "Visitors Pass": This Web Application will allow the company executives to administer visits and visitors, 
user rights, other amenities like visitor's history, generated Badges. It will also keep a track of the whereabouts of each visitor and host throughout the day
and accordingly, record the details in a corporate file. This Visitor Management Software also manages to print an identity
badge for a visitor to enter the premises, thus, reducing the receptionist's workload because Visitlog will manage to track every visitor's record, virtually. 
It will also automatically create the list of the current number of visitors in the company for the emergency, if arises any. There are 3 categories of users in the app, 
an administrator, an employee, and a receptionist.

* As an employee:
When you want to visit an employee of the company, the latter must
create a new visit in the application by specifying the following
information: the nature of the visit, the date and time of arrival, time
of end of visit, Company or individual, if company, enter the name of
the company, the name, email, and phone number of the person
concerned, the persons accompanied (Text area), a photo (optional,
if not a default picture).
After having validated all the information of the visit, the user can
then print the badge in PDF format containing all the information
related to the visit.

* As an administrator:
in the home page of administrators, there is a dashboard which allows
you to display some statistics on visits: Number of visits, number of
visitors today, number of visitors the current month. The
administrator can manage user accounts (CRUD), List of visits.

* As a receptionist
The application shows all visits for the current day.

A list of commonly used resources that we used.

### Built With

This section should list any major frameworks that you built your project using. Leave any add-ons/plugins for the acknowledgements section. Here are a few examples.
* [Bootstrap](https://getbootstrap.com)
* [JQuery](https://jquery.com)
* [JavaScript](https://www.javascript.com/)
* [Laravel](https://laravel.com)
* [Php](https://www.php.net/)
* [Sass](https://sass-lang.com/)


## Getting Started

To setup the project in your computer:

### Prerequisites

This is an example of how to list things you need to use the software and how to install them.
* npm
  ```sh
  npm install npm@latest -g
  ```

### Installation

1. Get your google maps API Key at [https://console.cloud.google.com/apis/](https://console.cloud.google.com/apis/)
2. Clone the repo
   ```sh
   git clone `https://github.com/Crushoverride007/bluekbmvirtualpass.git`
   ```
3. Install NPM packages
   ```sh
   npm install dev
   ```
4. run composer update, to update and install if need be any dependencies that are required to run the project
   ```
   composer update
   ```
5. Enter your API in `.env`
   ```
   API_KEY = 'ENTER YOUR API FROM GOOGLE CONSOLE'
   ```
6. Enter your Generated APP Key in `.env`
   ```
   php artisan key:generate
   ```
7. Create a database in phpmyadmin and make sure to name it the same as shown in `.env`
   ```
   DB_DATABASE = virtualpassbluekbm
   ```
8. Push the tables into your database
   ```
   php artisan migrate
   ```
9. Since we've a pre-existing data, you could also retrieve those data
   ```
   php artisan db:seed
   ```
10. Linking the path of files when uploading from `/storage` to `app/public`
   ```
   php artisan storage:link
   ```
11. To start the serve into your localhost `port:8000`
   ```
   php artisan serve
   ```




## Usage

Use this space to show useful examples of how a project can be used. Additional screenshots, code examples and demos work well in this space. You may also link to more resources.

_For more examples, please refer to the [Documentation](https://example.com)_

## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request


## Contact

Mouhcine MESMOUKI - [@m_mesmouki](https://twitter.com/m_mesmouki) - mouhcine.mesmouki7@gmail.com

Project Link: [github.com/Crushoverride007/bluekbmvirtualpass](https://github.com/Crushoverride007/bluekbmvirtualpass)


## Acknowledgements
* [GitHub Emoji Cheat Sheet](https://www.webpagefx.com/tools/emoji-cheat-sheet)
* [Img Shields](https://shields.io)
* [Choose an Open Source License](https://choosealicense.com)
* [GitHub Pages](https://pages.github.com)
* [Animate.css](https://daneden.github.io/animate.css)
* [Loaders.css](https://connoratherton.com/loaders)
* [Slick Carousel](https://kenwheeler.github.io/slick)
* [Smooth Scroll](https://github.com/cferdinandi/smooth-scroll)
* [Sticky Kit](http://leafo.net/sticky-kit)
* [JVectorMap](http://jvectormap.com)
* [Font Awesome](https://fontawesome.com)



[contributors-shield]: https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=for-the-badge
[contributors-url]: https://github.com/othneildrew/Best-README-Template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge
[forks-url]: https://github.com/othneildrew/Best-README-Template/network/members
[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge
[stars-url]: https://github.com/othneildrew/Best-README-Template/stargazers
[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge
[issues-url]: https://github.com/othneildrew/Best-README-Template/issues
[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[product-screenshot]: Readmeimages/screenshot.PNG

lasttest
=======