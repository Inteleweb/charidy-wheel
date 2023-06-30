#!/bin/bash

# Configuration
DOCUMENT_ROOT="/path/to/document/root"  # Set the path to your document root directory
APACHE_CONF_DIR="/path/to/apache/conf"  # Set the path to your Apache configuration directory
APACHE_CONF_FILE="mywebsite.conf"  # Set the desired name of your Apache configuration file
REPO_DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"  # Get the absolute path of the repository directory

# Move to the repository directory
cd "$REPO_DIR"

# Copy the necessary files to the document root directory
cp -r src data index.php "$DOCUMENT_ROOT"

# Generate the Apache configuration file
echo "<VirtualHost *:80>
    ServerName your-domain.com
    DocumentRoot $DOCUMENT_ROOT

    <Directory $DOCUMENT_ROOT>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>" > "$APACHE_CONF_DIR/$APACHE_CONF_FILE"

# Restart Apache
# Please note that you may need to contact your hosting provider or use their provided method to restart Apache
# Uncomment the following line if you have the necessary permissions to restart Apache
# systemctl restart apache2  # Replace with the appropriate command for your server

echo "Deployment completed successfully."
