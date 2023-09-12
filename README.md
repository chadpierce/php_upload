# php_upload
Simple php app to upload files

**WARNING: ** This is dangerous, don't use in prod  

Modify the following settings in php.ini:

Default nginx path: /etc/php/7.3/fpm/php.ini

```
max_execution_time = 30
max_input_time = 60
post_max_size = 8M
upload_max_filesize = 2M
```
