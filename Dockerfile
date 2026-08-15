# Storage link
RUN php artisan storage:link || true

# Permission
RUN chmod -R 775 storage bootstrap/cache database

# Railway PORT
EXPOSE 8080

CMD php artisan migrate --force && \
    php artisan serve --host=0.0.0.0 --port=${PORT:-8080}