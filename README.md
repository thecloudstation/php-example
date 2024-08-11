<div align="center">
  <a href="https://cloud-station.io">
    <img src="https://server.cloud-station.io/cloudstation/cs_icon.png" alt="CloudStation Logo" width="50">
  </a>
  <h3 align="center">CloudStation PHP Starter</h3>
  <p align="center">
    Deploy your PHP application seamlessly with CloudStation.
    <br />
    <a href="https://cloud-station.io">Visit CloudStation</a> ·
    <a href="https://documentation.cloud-station.io/s/ce6e8846-8aec-4337-a850-5188b6dc6d6e">Documentation</a> ·
    <a href="https://blog.cloud-station.io">Blog</a>
  </p>
</div>

## Overview

CloudStation simplifies the deployment process for developers, allowing you to focus on writing code without worrying about infrastructure. This repository showcases a simple PHP application that can be effortlessly deployed on CloudStation.

## Getting Started
Follow these steps to get your PHP application running on CloudStation.

### Prerequisites
Ensure you have a CloudStation account. If you don't have one yet, sign up [here](https://www.cloud-station.io/signup).

### Step-by-Step Deployment (For Customization)
Fork the Repository:

Click the Fork button at the top-right of this repository to create your own copy.

### Deploy the Application:

1. Navigate to the CloudStation [Dashboard](https://www.cloud-station.io/dashboard/project).
2. Create a new project.
3. Click on `Add New` and select **GitHub**.
4. In the repositories list, select the repository you just forked.
5. Choose a subdomain for your App i.e `php-example`, and click **Deploy**.

#### Automatic Build with Nixpacks

CloudStation first checks if your application contains a Dockerfile. If a Dockerfile is present, it will be used for building your application. If no Dockerfile is found, CloudStation uses Nixpacks, a build system that automatically detects the programming language and framework of your application. For this PHP application, Nixpacks identifies it as a PHP project and manages the entire build process seamlessly. This approach simplifies the deployment workflow and reduces setup time for projects without a custom Dockerfile.

### Access Your Application:
Once deployed, your application will be accessible at https://php-example.cloud-station.app.

### Application Structure
This sample PHP application consists of the following files:

- `index.php`: The main entry point of the application.
- `config.php`: Contains configuration settings.
- `functions.php`: Includes utility functions.
- `style.css`: Provides basic styling for the application.

### Customization
To modify the application, simply make changes in your forked repository and push them. CloudStation will automatically rebuild and redeploy your application.

### Contributing
We welcome contributions to enhance this example application. Feel free to fork the repository, create a feature branch, and submit a pull request.

### Support
For support, visit our [Help Center](https://documentation.cloud-station.io/s/ce6e8846-8aec-4337-a850-5188b6dc6d6e) or reach out via [Slack](https://join.slack.com/t/cloudstationio/shared_invite/zt-20kougo40-Kd1196QzZ7bwUA0oPfZORA).

## Connect with Us
[Website](https://www.cloud-station.io/) - 
[X](https://twitter.com/CloudStation_io) - 
[Slack](https://join.slack.com/t/cloudstationio/shared_invite/zt-20kougo40-Kd1196QzZ7bwUA0oPfZORA)
