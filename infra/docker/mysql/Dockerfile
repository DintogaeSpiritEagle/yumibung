# Infra MYSQL Dockerfile
# Project: YumiBung
# Maintaner: David H Tekwie <yamis.spiriteagle@gmail.com>
# Date: April 2023
FROM mysql/mysql-server:8.0

# Updated maintainer label for YumiBung Project
LABEL maintainer="Spirit Eagle <yamis.spiriteagle@gmail.com>"

# Set DB TZ
ENV TZ=UTC

# Copy mysql conf to container
COPY ./infra/docker/mysql/my.cnf /etc/my.cnf    