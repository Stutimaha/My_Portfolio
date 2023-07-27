# My Portfolio on Azure

Welcome to my portfolio project hosted on Azure! This repository contains the code and configurations for my personal portfolio website, which is built using various Azure services. Below, you'll find an overview of the project structure and the Azure services utilized.

## Project Structure

The project is organized into the following main components:

1. **Website**: This folder contains the frontend code for my portfolio website, built using HTML, CSS, and JavaScript.

2. **Functions**: In this directory, you'll find the code for Azure Functions, which are serverless compute resources that handle specific tasks, such as sending emails from the website's contact form.

3. **CosmosDB**: The `cosmosdb` folder houses the necessary configuration files and scripts related to Azure Cosmos DB, where I store data.

4. **GitHub Actions**: The `.github/workflows` directory contains the configuration files for GitHub Actions, enabling continuous integration and deployment (CI/CD) for the project.

5. **Miscellaneous**: Any other relevant files or assets needed for the project can be found here.

## Azure Services

My portfolio project leverages the following Azure services:

1. **Azure Blob Storage**: The static assets of my website, such as images, stylesheets, and JavaScript files, are stored in Azure Blob Storage. This allows for efficient content delivery and scalability.

2. **Azure Functions**: I use Azure Functions to handle specific serverless tasks, like processing form submissions and executing backend logic without the need for managing infrastructure.

3. **Azure Cosmos DB**: Azure Cosmos DB serves as the NoSQL database for my portfolio. It stores project information, and other dynamic content, providing seamless scalability and global distribution.

4. **GitHub Actions**: I've set up GitHub Actions workflows to automate the CI/CD process for my portfolio project. This ensures that changes pushed to the repository are automatically tested, built, and deployed to Azure.

## Deployment

To deploy the portfolio project to Azure, the following steps are required:

1. Set up an Azure Blob Storage account and upload all static assets (HTML, CSS, JS, images, etc.) to the appropriate containers.

2. Create an Azure Cosmos DB account and set up the necessary databases and collections to store the dynamic content.

3. Deploy the Azure Functions to handle serverless tasks. Make sure to configure the appropriate triggers and bindings.

4. Configure GitHub Actions to automate the CI/CD process. Define the workflow to build the website, execute tests, and deploy it to Azure upon successful commits to the main branch.
