FROM php:8.2-apache

# Install OpenSSH
RUN apt-get update && \
    apt-get install -y openssh-server

# Create the lab user
RUN useradd -m -s /bin/bash dev

# Create SSH directory
RUN mkdir -p /home/dev/.ssh

# Copy the web application
COPY src/ /var/www/html/

# Copy SSH keys
COPY keys/id_ed25519 /home/dev/.ssh/id_rsa
COPY keys/id_ed25519.pub /home/dev/.ssh/authorized_keys

# Set permissions
RUN chown -R dev:dev /home/dev && \
    chmod 755 /home/dev && \
    chmod 755 /home/dev/.ssh && \
    chmod 644 /home/dev/.ssh/id_rsa && \
    chmod 600 /home/dev/.ssh/authorized_keys

# Expose HTTP and SSH
EXPOSE 80
EXPOSE 22

# Start both SSH and Apache
CMD mkdir -p /run/sshd && \
    /usr/sbin/sshd && \
    apache2-foreground
