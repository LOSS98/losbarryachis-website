# Los Barryachis - BDE Campaign Website 2025

This repository contains the official website for "Los Barryachis" campaign for the 2025 BDE (Student Office) elections at INSA Hauts-de-France.
![Los Barryachis Logo](https://scontent-cdg4-3.cdninstagram.com/v/t51.2885-19/491443873_17848131525452154_2583769738917651108_n.jpg?_nc_ht=scontent-cdg4-3.cdninstagram.com&_nc_cat=106&_nc_oc=Q6cZ2QG4CVqPzfV1DzJF5oCLGq4HvocS8XBN9oZTRhu0tbISAAFDJBngTiVOWIQFvoCyLj__4PIGJVi0hhPwhEzLSi4t&_nc_ohc=21sl6x6OeLkQ7kNvwHahG2s&_nc_gid=MDGrUDS7t4tI2rNqSQ1V4w&edm=AP4sbd4BAAAA&ccb=7-5&oh=00_AfGFxmP2FHsSV1T8AvgEdp1j5g3mh_r5V2MbHM5zYlncBw&oe=681A60AA&_nc_sid=7a9f4b)


## 🌮 Overview

Los Barryachis is a candidate list for the Student Office (Bureau Des Étudiants - BDE) elections at INSA Hauts-de-France for the 2025 academic year. This website serves as a platform to present our team, program, events, and values to the school's student body.

## 🚀 Features

- **Home Page**: General presentation with team member carousel, promotional videos, and partner section
- **Schedule**: Calendar of events for the campaign week
- **Shotguns**: System for listing and providing details about event registrations ("shotguns")
- **Teams**: Presentation of the different teams (Executive Board, Arts Office, Sports Office, Events Team, etc.)
- **Promises**: Detailed explanation of our commitments and values for each team
- **Safety Charter**: Our commitment to ensuring safe and inclusive events

## 🛠️ Technical Stack

- **Backend**: PHP
- **Frontend**: HTML, CSS, JavaScript, jQuery, Slick Carousel
- **API Integration**: Custom API for shotgun management and statistics
- **Deployment**: GitHub Actions with Docker

## 📁 Structure

- `/assets`: Contains CSS, images, and other static resources
- `/js`: JavaScript files for animations and interactivity
- `/modules`: Reusable PHP components (header, footer, common functions)
- Main PHP files for each section of the website

## 🚀 Deployment

The website is automatically deployed to our server using GitHub Actions. The deployment workflow:

1. Checks out the code when pushed to the main branch
2. Sets up SSH keys for secure access
3. Transfers files to the server using rsync
4. Builds and runs Docker containers for the application
