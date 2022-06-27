/*
	Submit the Job, then redirect to pay the amount. If the payment has been made... we upload the jobs.
	user submits cv, they add the email, we send a verification code. 
	user can create a sharable link to the cv.
	The sharable link can have a password or can be open to to every one.
	all this should be done without logiing in.

	The the-blog

	Post a Job - Log In
*/


finance@bulwarkdebtcollectors.com - Finance@2022
info@bulwarkdebtcollectors.com - Main@Bulwarks2022
jonathan@bulwarkdebtcollectors.com - Jonathan@2022
operations@bulwarkdebtcollectors.com - Ops@bulwark2022

sudo mkdir -p /var/www/golinkjobs.com/public_html
sudo chown -R $USER:$USER /var/www/golinkjobs.com/public_html
sudo chmod -R 755 /var/www
sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/golinkjobs.com.conf
sudo nano /etc/apache2/sites-available/golinkjobs.com.conf

<VirtualHost *:80>
    ServerName golinkjobs.com
    ServerAlias www.golinkjobs.com
    ServerAdmin info@golinkjobs.com
    DocumentRoot /var/www/golinkjobs.com/public_html

    <Directory /var/www/golinkjobs.com/public_html>
        Options -Indexes +FollowSymLinks
        AllowOverride All
    </Directory>

    ErrorLog ${APACHE_LOG_DIR}/golinkjobs.com-error.log
    CustomLog ${APACHE_LOG_DIR}/golinkjobs.com-access.log combined
</VirtualHost>

sudo a2ensite golinkjobs.com
sudo a2dissite 000-default.conf
sudo apache2ctl configtest
sudo systemctl restart apache2
sudo systemctl status apache2

//-----optional

sudo nano /etc/hosts

167.86.116.235 golinkjobs.com


Step 1 — Installing Certbot
In order to obtain an SSL certificate with Let’s Encrypt, we’ll first need to install the Certbot software on your server. We’ll use the default Ubuntu package repositories for that.

We need two packages: certbot, and python3-certbot-apache. The latter is a plugin that integrates Certbot with Apache, making it possible to automate obtaining a certificate and configuring HTTPS within your web server with a single command.

1. sudo apt install certbot python3-certbot-apache
2. sudo nano /etc/apache2/sites-available/your_domain.conf
3. sudo apache2ctl configtest
4. sudo systemctl reload apache2
5. sudo ufw status
6. sudo ufw allow 'Apache Full'
7. sudo ufw delete allow 'Apache'
8. sudo certbot --apache

