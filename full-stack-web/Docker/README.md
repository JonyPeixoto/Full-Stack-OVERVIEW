<h1 align="center">
    <img alt="Full-Stack GitHub README" src="https://github.com/jonypeixoto/jonypeixoto/blob/main/assets/essentialaboutdocker.gif" />
    <br>
    Essential about Docker
</h1>

<h4 align="center">
 Essential about Docker is a repository of the project involving web 2.0 and front-end that every programmer in the world should know:
   <a href="https://www.oreilly.com/pub/a/web2/archive/what-is-web-20.html/">Web 2.0</a>
</h4>

<br/> 

<p>These dynamic seals (shields) concern the Full-Stack Web 2.0 repository, all projects work on any operating system that meets the technologies:</p>

<p align="center">
  <img alt="GitHub top language" src="https://img.shields.io/github/languages/top/jonypeixoto/full-stack-web-projects">
  
  <img alt="GitHub language count" src="https://img.shields.io/github/languages/count/jonypeixoto/full-stack-web-projects">
  
  <a href="https://www.codacy.com/gh/jonypeixoto/full-stack-web2-projects/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=jonypeixoto/full-stack-web2-projects&amp;utm_campaign=Badge_Grade">
    <img alt="Codacy Badge" src="https://app.codacy.com/project/badge/Grade/799ca46e878b4a40a8c52ac735f5a1fa">
  </a>
  
  <img alt="GitHub repository size" src="https://img.shields.io/github/repo-size/jonypeixoto/full-stack-web-projects">
  <a href="https://github.com/jonypeixoto/full-stack-web2-projects/commits">
   
  <img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/jonypeixoto/full-stack-web-projects">
  </a>
  
  <a href="https://github.com/jonypeixoto/full-stack-web2-projects/issues">
    <img alt="Github issues" src="https://img.shields.io/github/issues/jonypeixoto/full-stack-web-projects">
  </a>
  
  <img alt="GitHub License" src="https://img.shields.io/github/license/jonypeixoto/full-stack-web2-projects"> 
</p>


<p align="center">
  <a href="#information_source-repositories">Preview</a>&nbsp;&nbsp;&nbsp;• &nbsp;&nbsp;&nbsp;
  <a href="#warning-prerequisites">Prerequisites</a>&nbsp;&nbsp;&nbsp;• &nbsp;&nbsp;&nbsp;
  <a href="#information_source-how-to-use">How to Use</a>&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;
  <a href="#rocket-technologies">Technologies</a>&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;
  <a href="#memo-license">License</a>&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;
  <a href="#star2-author">Author</a>
</p>

##  :information_source: Preview

![App Screenshot](https://github.com/jonypeixoto/jonypeixoto/blob/main/assets/GIF-essentialaboutdocker.gif)<br/>

<br/>

## :warning: Prerequisites

Follow the instructions in each folder in each README and if necessary check the official website for each documentation:

You should know about these technologies:

<br/>

- [HTML](https://developer.mozilla.org/pt-BR/docs/Web/HTML)
- [CSS](https://www.w3schools.com/cssref/)
- [CSS3](https://www.w3schools.com/css/)
- [JavaScript](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript)
- [PHP](https://www.php.net/docs.php)
- [MySQL](https://www.mysql.com/)
- [Responsive Design](https://developers.google.com/search/mobile-sites/mobile-seo/responsive-design)
- [UX/UI](https://www.adobe.com/br/creativecloud/ui-ux.html)
- [Adobe XD](https://www.adobe.com/br/products/xd.html)
- [Adobe Photoshop](https://www.adobe.com/br/products/photoshop.html)

<br/>

## :information_source: How to Use

## Here, you will find the step by step to run this project
In this project, follow the commands:

<br/>

Essential Docker commands:

<br/>
<br/>

To verify the Docker installation on the machine:

<br/>

docker --version

<br/>

To see all Docker commands:

<br/>

docker

<br/>

To download your first Docker image, open your operating system terminal (Mac, Windows or Linux):

<br/>

docker container run -it -p 80:80 nginx

</br>

In the command above, your Docker will start normally by entering in your browser:

<br/>

https://localhost

<br/>

To stop running the container's local server in Docker (inside your terminal):

<br/>

CTRL + C

<br/>

To list all images installed on your Docker:

<br/>

docker images

To discover all containers and the detailed data of their containers that already exist on your machine:

<br/>

docker container ls -a

<br/>

To remove Docker image, in my example it was NGIX:

<br/>

docker image rm YOURFIRST3ALGORITMSOFTHECONTAINERID

<br/>
Image ID(on the Docker): eca60dfcab50
For example: docker image rmi yuck

<br/>

Use the command: docker images

<br/>

To forcibly remove image: docker rmi -f image_name

<br/>

After it, you must delete the container using:

<br/>

docker rm -f container_id

<br/>

For check all containers: docker container ls -a

<br/>

For see the images on Docker

<br/>

docker images

<br/>

How to view applications in the back using Docker with NGINX and Apache (make sure the containers are completely empty for it to work correctly)?

<br/>

1) Start the NGINX server service in the container:

<br/>

docker container run -d -p 8080:80 --name servernginx nginx

<br/>

Verify service in Docker containers:

<br/>

ps docker

<br/>

You can check this application using the following address: https://localhost:8080/

<br/>

2) Start Apache server service on another port:

<br/>

docker container run -d -p 8081:80 --name apacheserver httpd

<br/>

When running the command below, you will verify that Apache and NGINX are running at the same time, as shown in the GIF here from GitHub:

<br/>

ps docker

<br/>

If you want to download image from a specific server, in this case, I chose the MySql server:

<br/>

docker pull mysql

<br/>

To start any container, just take the first 3 numbers of your container ID or your container name(for example: NGINX, Apache):

<br/>

docker start THREEFIRSTNUMBERSONCONTAINERID

<br/>

Another example:
docker start servernginx
docker stop servernginx

<br/>

For stop: docker stop THREEFIRSTNUMBERSONCONTAINERID

<br/>

How to remove a container?

1) First, you must stop the container working, for example: docker stop 44c

<br/>

Always use: docker stop THREEFIRSTNUMBERSONCONTAINERID

<br/>

2) Now, remove using the command:

<br/>

docker container rm THREEFIRSTNUMBERSONCONTAINERID

<br/>

For example:
docker container rm 44c

<br/>

How to use MySql in Docker?

<br/>

1) Create the MySql container from the default port in MySql:

<br/>

docker container run -d -p 3306:3306 --name mysql --env MYSQL_ROOT_PASSWORD=123456 mysql

<br/>

2) To check if the container was successfully created:

<br/>

ps docker

<br/>

3) To access any container in Docker, in this case, I will access the NGINX server:

<br/>

docker container exec -it servernginx sh

<br/>

4) Use the command: "ls" (without quotes), to see all folders in that container

<br/>
<br/>

For more Docker information there is a hub: https://hub.docker.com

<br/>

To exit this container, simply enter:

<br/>

exit

<br/>
<br/>

![](https://github.com/JonyPeixoto/jonypeixoto/blob/main/assets/wow.png)  

## :rocket: Technologies

You need to understand the mechanisms that trigger each tool below:

- [HTML](https://developer.mozilla.org/pt-BR/docs/Web/HTML)
- [CSS](https://www.w3schools.com/cssref/)
- [JavaScript](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript)
- [PHP](https://www.php.net/docs.php)
- [PHPMyAdmin]()
- [MySQL](https://www.mysql.com/)
- [Windows Resizer](https://chrome.google.com/webstore/detail/window-resizer/kkelicaakdanhinjdeammmilcgefonfh)
- [Responsive Design](https://developers.google.com/search/mobile-sites/mobile-seo/responsive-design)
- [UX/UI](https://www.adobe.com/br/creativecloud/ui-ux.html)
- [Adobe XD](https://www.adobe.com/br/products/xd.html)
- [Adobe Photoshop](https://www.adobe.com/br/products/photoshop.html)

<br/><br/>

## :memo: License
This project is under the MIT license. See the [LICENSE](https://github.com/jonypeixoto/full-stack-web2-projects/blob/main/LICENSE) for more information.

<br/><br/>

## :star2: Author

<img alt="Jony Peixoto" title="Jony Peixoto" src="https://github.com/jonypeixoto/jonypeixoto/blob/main/assets/Jony-Peixoto-Projects.jpg" height="100" width="100" />

Made with ♥ by Jony Peixoto :wave: [Get in touch!](https://jonypeixoto.com)

<br/>

<a href="https://www.jonypeixoto.com" target="_blank">
  <code><img alt="Jony Peixoto Official Website" height="30" width="130" src="https://img.shields.io/badge/website-000000?style=for-the-badge&logo=About.me&logoColor=white" /></code>
</a>

<br/>

### LIVES:

YouTube: [Jony Peixoto](https://www.youtube.com/@JonyPeixotoOriginal)
