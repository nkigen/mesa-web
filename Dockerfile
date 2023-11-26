
# Use the official nginx image as the base image
FROM nginx

# Copy the contents of the repository to the nginx document root directory
COPY . /usr/share/nginx/html

# Expose port 80 for nginx
EXPOSE 80

# Set the entrypoint to start nginx when the container starts
ENTRYPOINT ["nginx", "-g", "daemon off;"]
