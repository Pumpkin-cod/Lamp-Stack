# LAMP Stack Deployment on AWS with Aurora and PHP CRUD App

This project demonstrates how to deploy a simple LAMP (Linux, Apache, MySQL-compatible Aurora, PHP) stack application on AWS, designed with scalability, availability, and security in mind following the AWS Well-Architected Framework.

## Live Demo

The application is currently hosted and accessible at:

🔗 [http://54.72.80.82/index.php](http://54.72.80.82/index.php)

## Project Architecture

- **Web Server**: Apache running on Amazon EC2 (`LAMP-Server`)
- **Application Language**: PHP
- **Database**: Amazon Aurora (MySQL-compatible) named `lamp_app`

## Application Structure

The application files are located at `/var/www/html` and include:

- `create.php` - For creating new records
- `db.php` - Handles DB connection
- `delete.php` - Deletes existing records
- `index.php` - Displays all records
- `info.php` - Shows individual record details
- `update.php` - Updates records

## Steps to Deploy

### 1. Define Requirements

- Determine scaling and availability needs
- Secure the application and database
- Estimate expected traffic and performance targets

### 2. Provision Infrastructure

- Launch an EC2 instance (`LAMP-Server`) in a public subnet
- Set up security groups to allow HTTP and SSH access
- Deploy Amazon Aurora (`lampdb`) in a private subnet within the same VPC

### 3. Install and Configure LAMP Stack

- Update EC2 instance packages
- Install Apache and PHP
- Ensure `/var/www/html` is the web root
- Configure Apache to serve the PHP files

### 4. Connect to Aurora Database

- Use `db.php` to securely connect the PHP app to `lampdb`
- Ensure the EC2 instance can reach the Aurora endpoint via VPC networking
- Store DB credentials securely (consider AWS Secrets Manager)

### 5. Deploy Application Files

- Upload the PHP files to `/var/www/html` on `LAMP-Server`
- Configure file permissions
- Import any required initial data into Aurora if needed

### 6. Test the Application

- Access the app via the EC2 public IP or domain
- Verify CRUD operations work:
  - Create new entries
  - View records
  - Update entries
  - Delete entries

## Best Practices

- Use IAM roles for EC2 to securely interact with AWS services
- Enable multi-AZ deployment for Aurora for high availability
- Monitor logs with Amazon CloudWatch
- Backup Aurora DB regularly
- Implement HTTPS with an SSL certificate

## Future Improvements

- Add Bootstrap for improved UI styling
- Enable HTTPS with Let’s Encrypt
- Attach a custom domain name using Route 53
- Enhance UI/UX for CRUD operations
- Add CloudWatch logging and basic analytics

## License

This project is for educational purposes only and should be adapted before using in production.
