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
  
