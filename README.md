# Simple Docker configuration - PHP + Nginx + MySQL
`under Windows`

I try to make a simple Docker configuration with:
* nginx
* PHP 8.1
* MySQL
*  &  virtual host

## Setup Virtual Host in Windows 
http://docker-app.test/

1. Open Notepad or any other text editor with _administrative privileges_.
2. From the File menu, select Open, and browse to `C:\Windows\System32\drivers\etc.`
4. In the "Open" dialog box, change the file type filter to "All Files (.)" to view all files.
5. Select the **hosts** file and click Open.
6. Add the following line to the end of the file:

>127.0.0.1	docker-app.test

## Setup Project Dir = docker-app 

1. Install Docker Desktop on your Windows machine.
2. Create a new directory named "**docker-app**" at the root of your C drive. Inside the "docker-app" directory, create two subdirectories named "**public**", where is my index.php file, and **mysql**.
3. Create a new file named "**docker-compose.yml**" inside the "docker-app" directory and add the code in [docker-compose.yml](docker-compose.yml)

**docker-compose.yml** is a file that describes the configuration of one or more Docker containers. docker-compose is a command-line tool that is used to run and manage these containers.

When you run docker-compose with the up command, it will read the configuration in docker-compose.yml and create the necessary containers, networks, and volumes specified in the file. It will also start and stop the containers as needed based on their dependencies and configuration.

4. Create a new directory named "**nginx-conf**" inside the "docker-app" directory. Inside the "nginx-conf" directory, create a new file named "[default.conf](nginx-conf/default.conf)" and add the code.


5. Create a "[Dockerfile.php](Dockerfile.php)" with php configuration in it.
   The "Dockerfile-php" specifies the instructions for building a custom Docker image for the PHP service.


6. Open the Windows command prompt or PowerShell and navigate to the "docker-app" directory. Or do this in Terminal of your editor IDE.


7. Run the following command to start the Docker containers:

   `docker-compose up -d`


   This will build the Docker containers and start them in detached mode.

8. To access the website, open your web browser and navigate to "http://docker-app.test:8080". You should see the default PHP page.


9. To access MySQL remotely, you can find the IP address of the MySQL container by running the following command in the Windows command prompt or PowerShell:


`docker inspect docker-app_db_1 | Select-String -Pattern "IPAddress"`
